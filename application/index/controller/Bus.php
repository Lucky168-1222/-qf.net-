<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Shops;

class Bus extends Controller 
{


	//[跳转品牌成功页面]
	public function shopsTiaoZhuan()
	{
		$this->success('正在为您跳转至添加品牌页面','index/bus/four');
	}

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

	//[入驻人员信息]
	public function AddInfo()
	{
		$u_id = Session('user_id');
		if (!empty($_POST)) {
			$data['shops_name'] = $_POST['shopsName'];
			$data['shops_type'] =  $_POST['shopsType'];
	  		$data['shops_category'] = $_POST['shopsClass'];
	  		$data['shops_tel'] = $_POST['shopsPhone'];
	  		$data['shops_caddr'] = $_POST['shopsRess'];	
	  		$data['shops_term'] = $_POST['date'];	
	  		$data['shops_post'] = $_POST['postOffice'];	
	  		$data['shops_email'] = $_POST['shopsEmail'];	
	  		$data['shops_decription'] = $_POST['content'];	
			$data['shops_time']  =  date('Y-m-d H:i:s',time());
		}
		$shops = new Shops();
		$result = $shops::addPerson($u_id,$data);
		echo 1;

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