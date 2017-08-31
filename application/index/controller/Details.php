<?php
namespace app\index\controller;
use app\index\controller\Auth;
use app\index\model\Shoplist;

class Details extends Auth 
{
	//商品详情页
	public function details()
	{
		$shop_id = $_GET['shop_id'];
		$shoplist = new Shoplist();
		$shoplist = $shoplist->shopDetails($shop_id);
		$this->assign('shoplist',$shoplist);
		$this->head();
		return $this->fetch();
	}

	//预约界面
	public function saledetails()
	{
		$this->head();
		return $this->fetch();
	}

}