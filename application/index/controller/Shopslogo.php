<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Shops;
use app\index\model\Shoplist;
//店家商铺页面
class Shopslogo extends Auth
{
	//店家商铺页面
	public function shopslogo()
	{
		$id = $_GET['shops_id'];
		$shops = new Shops();
		$shops = $shops->disShops($id);
		$shoplist = new Shoplist();
		$shoplist = $shoplist->shopsShoplist($id);
		$page = $shoplist->render();
		$this->assign('shoplist',$shoplist);
		$this->assign('shops',$shops);
		$this->assign('page',$page);
		$this->head();
		return $this->fetch();	
	}
	
}
