<?php
namespace app\index\controller;
use think\Db;
use think\Session;
use app\index\model\User;
use app\index\model\Plate;
use app\index\model\Shops;
use app\index\controller\Auth;
//网站首页
class Index extends Auth
{
	//在线商城首页
	public function index()
	{
		$shops = new Shops();
		$eachShops = $shops::eachShops();
		// dump($data);exit;
		$this->assign('eachShops',$eachShops);
		$this->head();
		return $this->fetch();	
	}



	// //head头分布页面
	// public function head()
	// {
	// 	$sess = Session::get('user_id');
	// 	$user = new User();
	// 	$u_name =  $user::homeHead($sess);
	// 	if (!empty($u_name)) {
	// 		$u_name = $u_name[0]['user_name'];
	// 		session('user_name',$u_name);
	// 	}

	// 	$plate =  new Plate();
	// 	$data = $plate->actiontree();
	// 	// dump($data);exit;
	// 	$this->assign('data',$data);
	// 	return $this->fetch();
	// }

	


}
