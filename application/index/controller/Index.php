<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use think\Session;
use app\index\model\User;

//网站首页
class Index extends Controller
{
	//在线商城首页
	public function index()
	{
		return $this->fetch();	
		// $data = json_encode('id'=>2, 'name'=>'thinkphp');
		// dump($data);
	}

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
		return $this->fetch();
	}

}
