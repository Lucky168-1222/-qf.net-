<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

//登录、注册、找回密码
class Register extends Controller
{
	//注册
	public function register()
	{
		return $this->fetch();
	}

	//登录
	public function login()
	{
		return $this->fetch();
	}

	//找回密码
	public function pass()
	{
		return $this->fetch();
	}
}