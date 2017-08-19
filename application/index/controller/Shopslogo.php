<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
//店家商铺页面
class Shopslogo extends Controller
{
	//店家商铺页面
	public function shopslogo()
	{
		return $this->fetch();	
	}
	
}
