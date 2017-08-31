<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use app\index\model\Plate;
use app\index\model\User;

//基类
class Auth extends Controller
{
	//head头分布页面
	public function head()
	{
		$sess = Session::get('user_id');
		$user = new User();
		$u_name =  $user::homeHead($sess);
		if (!empty($u_name)) {
			$u_name = $u_name[0]['user_name'];
			session('user_name',$u_name);
		}
		$plate =  new Plate();
		$data = $plate->actiontree();
		$this->assign('data',$data);
		$eachPlate = Plate::eachPlate();
		$this->assign('eachPlate',$eachPlate);
		return $this->fetch();
	}

	//随机生成订单号
	public function build_order_no(){
        $result = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        return $result;
    }
 
  
}