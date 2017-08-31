<?php
namespace app\index\controller;
use think\Db;
use think\Session;
use app\index\model\User;
use app\index\model\Plate;
use app\index\model\Shops;
use app\index\controller\Auth;
// //网站首页
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

}
