<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Details extends Controller 
{
	//商品详情页
	public function details()
	{
		return $this->fetch();
	}

	//预约界面
	public function saledetails()
	{
		return $this->fetch();
	}

}