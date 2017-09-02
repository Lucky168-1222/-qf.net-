<?php
namespace app\index\controller;
use think\Db;
use think\Session;
use app\index\model\User;
use app\index\model\Plate;
use app\index\model\Shops;
use app\index\controller\Auth;
use app\index\model\Shoplist;
use app\index\model\Active;

// //网站首页
class Index extends Auth
{

	//在线商城首页
	public function index()
	{
		$shops = new Shops();
		$eachShops = $shops::eachShops();
		$this->assign('eachShops',$eachShops);
		$active = new Active();
		$active = $active->eachActive();
		// dump($active);
		$this->assign('active',$active);
		$this->head();
		return $this->fetch();	
	}

	//一级分类页面
	public function classa()
	{
		$plate_id = $_GET['plate_id'];
		$plate = new Plate();
		$bigPlate = $plate->erPlate($plate_id);
		$arr = [];
		foreach ($bigPlate as $key => $value) {
			$arr[] = $value['plate_id'];
		}
		$shoplist = new Shoplist();
		$shoplistId = $shoplist->shoplistSel($arr);
		$page = $shoplistId->render();
		$this->assign('page',$page);
		$this->assign('shoplistId',$shoplistId);
		$this->head();
		return $this->fetch();
	}

	//二级分类页面
	public function classb()
	{
		$plate_id = $_GET['plate_id'];
		$plate = new Plate();
		$plateer = $plate->bigPlate($plate_id);
		$shoplist = new Shoplist();
		$shoplistId = $shoplist->shoplistSel($plateer);
		$page = $shoplistId->render();
		$this->assign('page',$page);
		$this->assign('shoplistId',$shoplistId);
		$this->head();
		return $this->fetch();
	}

	//三级分类页面
	public function classc()
	{
		$plate_id = $_GET['plate_id'];
		$shoplist = new Shoplist();
		$shoplistId = $shoplist->shoplistSelect($plate_id);
		$page = $shoplistId->render();
		$this->assign('page',$page);
		$this->assign('shoplistId',$shoplistId);
		$this->head();
		$this->head();
		return $this->fetch();
	}

}
