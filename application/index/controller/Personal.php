<?php
namespace app\index\controller;
use app\index\model\User;
use app\index\controller\Auth;
use think\Session;
use app\index\model\Address;
use app\index\model\Shoplist;
use app\index\model\Card;
use think\Request;
use app\index\model\Collect;
use think\Paginator;
use app\index\model\Order;

//个人中心首页
class Personal extends Auth 
{


	//立即购买
	public function goShopping()
	{
		$shop_id = $_GET['shop_id'];
		$card = new Card();
		$user_id = Session('user_id');
		$shopCard = $card->goShoppingCard($shop_id,$user_id);
		echo 1;
	}

	//修改收货地址
	public function updateRess()
	{
		$data['id'] = $_POST['id'];
		$data['province'] = $_POST['region'];
		$data['city'] = $_POST['region2'];
		$data['detailed_ress'] = $_POST['address'];
		$data['ress_office'] = $_POST['postOff'];
		$data['ress_name'] = $_POST['name'];
		$data['ress_phone'] = $_POST['phone'];
		$data['update_time'] = time();
		$ress = new Address();
		$result = $ress::updateRess($data);
		echo 1;
	}

	//收货地址放入回收站
	public function deleteRess()
	{
		// dump($_GET);exit;
		$id = $_GET['id'];
		$ress = new Address();
		$result = $ress::updateDelete($id);
		echo 1;
	}

	//移除购物车
	public function removeCart()
	{		
		$id = $_GET['card_id'];
		$cart = new Card();
		$remove = $cart->removeCart($id);
		if ($remove) {
			$this->success('移除购物车成功');
		}else{
			$this->error('移除购物车失败');
		}
	}

	//移除订单
	public function removeOrder()
	{
		$order_id = $_GET['order_id'];
		$order = new Order();
		$orderDele = $order->removeOrder($order_id);
		if ($orderDele) {
			$this->success('删除订单成功');
		}else{
			$this->error('删除订单失败');
		}
	}

	//个人消息页面
	public function personal() {
		$this->head();

		return $this->fetch();
	}

	//个人消息详情页
	public function persondetails() {
		$this->head();

		return $this->fetch();
	}

	//生成订单页
	public function orderInsert()
	{
		if (!empty($_POST)) {
			$data['order_only'] = session('keyID');
			$data['shop_id'] = $_POST['shop_id'];
			$data['shop_name'] = $_POST['shop_name'];
			$data['order_time'] = time();
			$data['order_status'] = 1;
			$data['shop_express'] = $_POST['express'];
			$data['order_num'] = $_POST['number'];
			$data['order_money'] = $_POST['order_money'];
			$data['user_id'] = session('user_id');
			$order = new Order();
			$orderList = $order->insertOrder($data);
			$emptyCard = $order->deleteCard();
			echo 1;
		}	
	}

	//个人订单页
	public function order()
	{
		$u_id = session('user_id');
		$order = new Order();
		$seekOrder = $order->eachOrder($u_id);
		$page = $seekOrder->render();
		$this->assign('page',$page);
		$this->assign('seekOrder',$seekOrder);
		$this->head();
		return $this->fetch();
	}


	//添加购物车
	public function shopChe()
	{	
		if(session('?user_id')){
			$data['shop_id'] = $_POST['shop_id'];
			session('shop_id',$data['shop_id']);
			$data['money'] = $_POST['money'];
			$data['number'] = intval($_POST['number']);
			$data['user_id'] = session('user_id');
			$data['card_time'] = time();
			$cart = new Card();
			$list = $cart->insertCard($data);
			echo 1;
			
		}else{
			$this->error('请登陆','index/register/login');
		}
		
	}

	//购物车页面
	public function cart() 
	{	
		if (session('?user_id') && session('?shop_id')) {		
			$Card = new Card();
			$u_id = Session('user_id');
			$shop_id = Session('shop_id');
			$shoplist = $Card->shopCart($u_id,$shop_id);
			session('shoplist',$shoplist);
			$this->assign('shoplist',$shoplist);
		}
		$this->head();
		return $this->fetch();
	}

	//个人资料
	public function persondata() {
		//[头像上传]
		$user_id = Session('user_id');
		$user = User::personalList($user_id);
		//dump($user);
		$this->assign('user', $user);
		$this->head();
		return $this->fetch();
	}


	//[修改个人资料]
	public function updatePersonData() {
		if (!empty($_POST)) {
			$data['nickname'] = $_POST['nickname'];
			$data['sex'] = $_POST['hobby'];
			$data['birthday'] = $_POST['birthday'];
			$data['place'] = $_POST['place'];
			$data['email'] = $_POST['email'];
			$u_id = Session('user_id');
			$user = new User();
			$result = $user::updatePersonData($u_id, $data);
			if ($result) {
				$this->success('修改成功,已保存');
			} else {
				$this->error('未做任何修改');
			}
		}

	}

	//预约购买
	public function reserve() {
		$this->head();

		return $this->fetch();
	}

	//收货地址
	public function address() 
	{
		$address = new Address();
		$u_id = Session('user_id');
		$eachList = $address::listAddress($u_id);
		$ergodic = Address::paginate(6);
		Session::set('ergodic',$ergodic);
		$page = $ergodic->render();
		$this->assign('page',$page);
		$this->assign('ergodic',$ergodic);
		$this->assign('eachList',$eachList);	
		$this->head();
		return $this->fetch();
	}


	//[添加地址成功跳转页]
	public function AddSuccess()
	{
		$this->success('添加地址成功');
	}
	//[添加地址失败跳转页]
	public function AddError()
	{
		$this->error('添加地址失败');
	}


	//对收货地址进行增加
	public function ressAdd() {
		$data['detailed_ress'] = $_GET['detailed_ress'];
		$data['ress_name'] = $_GET['ress_name'];
		$data['ress_phone'] = $_GET['ress_phone'];
		$data['ress_office'] = $_GET['ress_office'];
		$data['province'] = $_GET['province'];
		$data['city'] = $_GET['city'];
		$address = new Address();
		$data['user_id'] = Session('user_id');
		$data['time'] = time();
		$result = $address::deliveryAddress($data);
		echo json_encode($result);
	}

	//店铺收藏
	public function collection() {
		
		$this->head();
		return $this->fetch();
	}

	//购买记录
	public function purchaseNum() {
		$this->head();
		return $this->fetch();
	}

	//点击收藏进入库
	public function insertColle()
	{
		if (session('?user_id')) {
			$data['shop_id'] = $_GET['shop_id'];
			$data['user_id'] = Session('user_id');
			$data['collect_time'] = time();
			$collect = new Collect();
			$inCollect = $collect->inseertCollect($data);
			echo 1;
		}else{
			echo 2;
		}
		
	}

	//取消商品收藏
	public function cancel()
	{
		// dump($_GET);exit;
		$shop_id = $_GET['shop_id'];
		$collect = new Collect();
		$updateCollect = $collect->cancelColleact($shop_id);
		echo 1;
	}


	//商品收藏
	public function seekNum(){
		if (session('?user_id')) {
			$user_id = session('user_id');
			$Collect = new Collect();
			$Collectlist = $Collect->eachCollect($user_id);
	        $lists = $Collect::paginate(2);
	        Session::set('lists',$lists);
	        $page = $lists->render();
	        $this->assign('lists', $lists);
	        $this->assign('page', $page);
			$this->assign('Collectlist',$Collectlist);
		}
		$this->head();
		return $this->fetch();
	}

	//积分兑换
	public function integral() {
		$this->head();
		return $this->fetch();
	}

}
