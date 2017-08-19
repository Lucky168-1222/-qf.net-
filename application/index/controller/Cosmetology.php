<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Cosmetology extends Controller
{
	//商品展示页
	public function cosmetology()
	{
		return $this->fetch();
	}

	//预约商品展示页
	public function saleshops()
	{
		return $this->fetch();
	}

	//积分兑换展示页
	public function exchange()
	{
		return $this->fetch();
	}
}