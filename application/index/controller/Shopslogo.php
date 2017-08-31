<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Shops;
//店家商铺页面
class Shopslogo extends Auth
{
	//店家商铺页面
	public function shopslogo()
	{
		$id = $_GET['shops_id'];
		$shops = new Shops();
		$shops = $shops->disShops($id);
		$this->assign('shops',$shops);
		$this->head();
		return $this->fetch();	
	}
	
}
