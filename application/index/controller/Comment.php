<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;

class Comment extends Auth
{
	//评论页面
	public function comment()
	{
		$this->head();
		return $this->fetch();
	}

}