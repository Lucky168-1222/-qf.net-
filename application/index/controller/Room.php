<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;


//搜索商品展示页面
class Room extends Auth
{
	//搜索展示页面
	public function room()
	{
		$this->head();
		return $this->fetch();
	}
}