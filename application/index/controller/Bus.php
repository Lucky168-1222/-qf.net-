<?php
namespace app\index\controller;
use app\index\controller\Auth;
use app\index\model\Shops;
use think\Session;
use think\Request;

class Bus extends Auth 
{


	//[跳转品牌成功页面]
	public function shopsTiaoZhuan()
	{
		$this->success('正在为您跳转至添加品牌页面','index/bus/four');
	}

	//[跳入待审核页面]
	public function daiShenHe()
	{
		$this->success('正在为您跳转至添加审核页面','index/bus/five');
	}

	//[品牌添加信息]
	public function addBrand()
	{

		$data['brand_logo'] = Session('info'); 
		$shopId = Session('shops_id')['shops_id'];
		$data['shops_id'] = $shopId;
		$data['user_id'] = Session('user_id');
		$data['brand_name'] = $_POST['brandName'];
		$data['brand_words'] = $_POST['bankNameLetter'];
		$data['brand_firstwords'] = $_POST['brandFirstChar'];
		$data['brand_type'] = $_POST['brandType'];
		$data['brand_time'] = time();
		$shops = new Shops();
		$result = $shops::Addbrand($data);
		echo 1;
	}

	//商家入驻首页
	public function bus()
	{
		$this->head();
		return $this->fetch();
	}

	//入驻同意协议
	public function one()
	{
		$this->head();
		return $this->fetch();
	}

	//入驻填写联系人信息
	public function two()
	{
		$this->head();
		return $this->fetch();
	}

	public function up(Request $request)
	{
		// 获取表单上传文件
		$file = $request->file('file');		
		if (empty($file)) {
			$this->error('请选择上传文件');
		}
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads/');
		$info = 'http://qf.net/uploads/'. $info->getSaveName();
		$info = Session::set('info',$info);
		dump($info);
	}

	//[入驻人员信息]
	public function AddInfo()
	{
		$logo = Session('info');
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
		$result = $shops::addPerson($u_id,$data,$logo);
		echo 1;

	}


	//店铺品牌添加
	public function four()
	{
		$shops = new Shops();
		$uId = Session('user_id');
		$shopsId = $shops::seekShops($uId);
		Session::set('shops_id',$shopsId);
		$this->head();
		return $this->fetch();
	}

	//提交审核
	public function five()
	{	
		//从session中读取用户id
		$uId = Session('user_id');

		//查询用户是否有过商家入驻记录
		$res = Shops::userShops($uId);
		 if (!$res) {
		 	$this->success('抱歉,您没有入驻记录');
		 }
		$uId = Session('user_id');
		$shops = new Shops();
		$result = $shops::selectShops($uId);
		$this->assign('result',$result);
		$this->head();
		return $this->fetch();
	}
}