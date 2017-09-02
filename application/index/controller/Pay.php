<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Pay as PayModel;
use app\index\model\Card;
use app\index\model\Address;
use app\index\model\User;
use think\Request;
use app\index\model\Order;

class Pay extends Auth
{
	//支付订单
	public function pay()
	{
		$shoplist = session('shoplist');
		$keyID = $this->build_order_no();
		session('keyID',$keyID);
		$u_id = session('user_id');
		$setlement = session('Settlement');
		$ress = new Address();
		$address = $ress->listAddress($u_id);
		$this->assign('address',$address);
		$this->assign('keyID',$keyID);
		$this->assign('shoplist',$shoplist);	
		$this->assign('setlement',$setlement);	
		$this->head();
		return $this->fetch();	
	}

	//添加商品订单
	public function paymentShop()
	{
		$data['number'] = $_GET['number'];
		$data['money'] = $_GET['money'];
		session('Settlement',$data['money']);
		$data['card_id'] = $_GET['card_id'];
		$updateCart = new Card();
		$updateCart = $updateCart->updatesShop($data);
		echo 1;
	}

	//支付方式
	public function payment()
	{	
		$shop_id = session('shop_id');
		$u_id = session('user_id');
		$money = session('Settlement');
		$user = new User();
		$userPay = $user->userPay($u_id);
		$userMoney = $userPay['user_money'];
		if ($userMoney >= $money) {
			$pay = new Order();
			$pay = $pay->updateOrder($shop_id);
			$daupteUserMoney = $user->affairSub($u_id,$money); 
			$this->success('支付成功,正在为您跳转至订单页面','index/personal/order');
		}else{
			$this->error('余额不足,请充值','index/index/index');
		}
		$this->head();
		return $this->fetch();
	}

	//支付成功
	public function successpay()
	{
		$this->head();
		return $this->fetch();
	}	

	//支付失败
	public function payerror()
	{
		$this->head();
		return $this->fetch();
	}


	public function ems()
	{
	    $request = Request::instance();
	    $ems_id = $request->param('ems_id');
	    $host = "http://jisukdcx.market.alicloudapi.com";
	    $path = "/express/query";
	    $method = "GET";
	    $appcode = "a4ffec45ba524119a0d3aa82dda9d81d";
	    $headers = array();
	    array_push($headers, "Authorization:APPCODE " . $appcode);
	    $querys = "number=$ems_id&type=auto";
	    $bodys = "";
	    $url = $host . $path . "?" . $querys;

	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($curl, CURLOPT_FAILONERROR, false);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_HEADER, true);
	    if (1 == strpos("$".$host, "https://"))
	    {
	        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	    }
	    $curl = curl_exec($curl);
	    $curl = strstr($curl,'{');
	    $curl = json_encode($curl);
	    // var_dump($curl);die();
	    echo $curl;

	}

}




