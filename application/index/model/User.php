<?php
namespace app\index\model;
use think\Model;
use think\Db;

class User extends Model
{
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
}