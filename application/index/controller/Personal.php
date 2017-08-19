<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
//个人中心首页
class Personal extends Controller
{
	//个人消息页面
	public function personal()
	{
		return $this->fetch();		
	}

	//个人消息详情页
	public function persondetails()
	{
		return $this->fetch();
	} 

	//个人订单页
	public function order()
	{
		return $this->fetch();
	}

	//购物车页面
	public function cart()
	{
		return $this->fetch();
	}

	//个人资料
	public function persondata()
	{
		return $this->fetch();
	}

	//预约购买
	public function reserve()
	{
		return $this->fetch();
	}

	//添加收货地址
	public function address()
	{
		return $this->fetch();
	}
	
	//店铺收藏
	public function collection()
	{
		return $this->fetch();
	}

	//购买记录
	public function purchaseNum()
	{
		return $this->fetch();
	}

	//浏览记录
	public function seekNum()
	{
		return $this->fetch();
	}

	//积分兑换
	public function integral()
	{
		return $this->fetch();
	}

}

