<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Comment extends Controller
{
	//评论页面
	public function comment()
	{
		return $this->fetch();
	}

}