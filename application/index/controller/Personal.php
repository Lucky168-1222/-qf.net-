<?php
namespace app\index\controller;
use app\index\model\User;
use think\Controller;
use think\Session;
use app\index\model\Address;

//个人中心首页
class Personal extends Controller 
{
	//修改收货地址
	public function updateRess()
	{
		var_dump($_GET);exit;
	}

	//个人消息页面
	public function personal() {

		return $this->fetch();
	}

	//个人消息详情页
	public function persondetails() {

		return $this->fetch();
	}

	//个人订单页
	public function order() {
		return $this->fetch();
	}

	//购物车页面
	public function cart() {
		return $this->fetch();
	}

	//个人资料
	public function persondata() {
		//[头像上传]
		$user_id = Session('user_id');
		$user = User::personalList($user_id);
		//dump($user);
		$this->assign('user', $user);
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

		return $this->fetch();
	}

	//添加收货地址
	public function address() 
	{
		$address = new Address();
		$u_id = Session('user_id');
		$ergodic = $address::listAddress($u_id);
		$ergodic = Address::paginate(6);
		$page = $ergodic->render();
		$this->assign('page',$page);
		$this->assign('ergodic',$ergodic);
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
		return $this->fetch();
	}

	//购买记录
	public function purchaseNum() {
		return $this->fetch();
	}

	//浏览记录
	public function seekNum() {
		return $this->fetch();
	}

	//积分兑换
	public function integral() {
		return $this->fetch();
	}

}
