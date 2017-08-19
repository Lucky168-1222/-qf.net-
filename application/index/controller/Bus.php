<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class Bus extends Controller 
{
	//商家入驻首页
	public function bus()
	{
		return $this->fetch();
	}

	//入驻同意协议
	public function one()
	{
		return $this->fetch();
	}

	//入驻填写联系人信息
	public function two()
	{
		return $this->fetch();
	}

	//店铺类别选择
	public function three()
	{
		return $this->fetch();
	}

	//店铺品牌添加
	public function four()
	{
		return $this->fetch();
	}

	//提交审核
	public function five()
	{
		return $this->fetch();
	}
}