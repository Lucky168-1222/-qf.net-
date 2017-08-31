<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Shoplist;

class Cosmetology extends Auth
{

	//商品展示页
	public function cosmetology()
	{
		$shoplist = new shoplist();
		$list = $shoplist->eachList();
		$this->assign('list',$list);
		$this->head();
		return $this->fetch();
	}

	//预约商品展示页
	public function saleshops()
	{
		$this->head();
		return $this->fetch();
	}

	//积分兑换展示页
	public function exchange()
	{
		$this->head();
		return $this->fetch();
	}
}