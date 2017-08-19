<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

//网站首页
class Index extends Controller
{
	//在线商城首页
	public function index()
	{
		return $this->fetch();	
		// $data = json_encode('id'=>2, 'name'=>'thinkphp');
		// dump($data);
	}

	//head头分布页面
	public function head()
	{
		return $this->fetch();
	}

}
