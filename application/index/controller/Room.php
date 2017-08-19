<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

//搜索商品展示页面
class Room extends Controller
{
	//搜索展示页面
	public function room()
	{
		return $this->fetch();
	}
}