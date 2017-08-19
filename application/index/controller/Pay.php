<?php
namespace app\index\controller;
use think\Db;
use think\Controller;


class Pay extends Controller
{
	//支付订单
	public function pay()
	{
		return $this->fetch();	
	}

	//支付方式
	public function payment()
	{
		return $this->fetch();
	}

	//支付成功
	public function successpay()
	{
		return $this->fetch();
	}	

	//支付失败
	public function payerror()
	{
		return $this->fetch();
	}

}