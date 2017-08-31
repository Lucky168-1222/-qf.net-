<?php
namespace app\index\model;
use think\Model;
use think\Db;

//[用户表]
class User extends Model
{

	//个人资料修改头像
	static public function updatePortrait($info, $u_id)
	{
		$result = Db::execute("update shop_user set user_portrait
		= '$info'  where user_id = '$u_id'");
		return $result;
	}

	//[修改个人资料	]
	static public function updatePersonData($u_id,$data)
	{
		$result = Db::execute("update shop_user set nickname='$data[nickname]',sex='$data[sex]',birthday='$data[birthday]',place='$data[place]',email='$data[email]' where user_id='$u_id' ");
		return $result;
	}

	//遍历首页登录数据显示
	static public function homeHead($sess)
	{
		return Db::query("select * from shop_user where user_id = '$sess'");
	}

	//查询用户是否存在
	static public function checkUser($username)
	{
		$result = Db::execute("select user_name from shop_user where user_name='$username'");
		if ($result) {
			return true;
		}else{
			return false;
		}
	}

	//提交注册
	static public function submitReg($username,$password,$phone,$ip,$time)
	{
		$password = md5($password);
		$result = Db::execute("insert into shop_user(user_name,user_pwd,phone,reg_time,reg_ip) values('$username','$password',$phone,$ip,$time)");
		return $result;
	}

	//登陆用户/手机用户检查是否存在
	static public function checkLoginUser($loginUser,$phone)
	{
		$data = Db::query("select * from shop_user where user_name = '$loginUser' or phone = '$phone'");
		if ($data) {
			return $data[0];
		}else{
			return empty($data);
		}
	}

	//登录帐号密码检查
	static public function checkLogin($loginUser,$loginPwd)
	{
		$data = Db::query("select * from shop_user where user_name = '$loginUser' and user_pwd = '$loginPwd'");
		if($data){
			// var_dump($data[0]);exit;
			return $data[0];
		}else{
			return false;
		}
	}

	//[找回密码用户检测]
	static public function checkPassUser($username)
	{
		$data = Db::execute("select user_name from shop_user where user_name = '$username'");
		if ($data) {
			return true;
		}else{
			return false;
		}
		
	}

	//找回用户/手机用户检查是否存在
	static public function checkPass($loginUser,$phone)
	{
		$data = Db::query("select * from shop_user where user_name = '$loginUser' and phone = '$phone'");
		if ($data) {
			return $data[0];
		}else{
			return false;
		}
	}

	//[修改密码]
	static public function updatePassword($username,$password)
	{
		$data = Db::execute("update shop_user set user_pwd='$password' where user_name='$username'");
		if ($data) {
			return true;
		}else{
			return false;
		}
	}

	//个人资料遍历信息
	public static function personalList($user_id)
	{
		$result = Db::query("select * from shop_user where user_id='$user_id'");
		return $result;
	}

	//用户支付
	public function userPay($u_id)
	{
		$result = Db::table('shop_user')->where('user_id',$u_id)->field('user_money')->select();
		return $result[0];
	}

	//事务提交金额
	public function affairSub($u_id,$money)
	{
		Db::startTrans();
		try {
			$userMoney = $this->userPay($u_id);
			$userMoney = $userMoney['user_money']-$money;
			$vipMoney = Db::table('shop_user')->where('user_id',106)->field('user_money')->select();
			$vipMoney = $vipMoney[0]['user_money'] + $money;
			Db::table('shop_user')->where('user_id',$u_id)->update(['user_money'=> $userMoney ]);
			Db::table('shop_user')->where('user_id',106)->update(['user_money'=>$vipMoney]);
			// 提交事务
			Db::commit();
		} catch (Exception $e) {
			// 回滚事务
			Db::rollback();
		}

	}

}
