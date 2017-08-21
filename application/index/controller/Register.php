<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;	//引入基类
use think\Ucpaas;//短信验证
use app\index\model\User;
use think\captcha;		//引入的验证码基类
use \traits\controller\Jump;

//登录、注册、找回密码
class Register extends Auth
{

	protected $user;
	//提交注册到库里
	public function subRegister()
	{ 
		$username = $_POST['username'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$ip = $_SERVER['SERVER_ADDR'];
		if (!strcmp($ip,'::1')) {
			$ip = '127.0.0.1';
		}
		$ip = ip2long($ip);
		$time = time();
		// echo $ip.'<br />'.$time;
		$user = new User();
		$result = $user::submitReg($username,$password,$phone,$ip,$time);
		echo json_encode($result);
	}
	
	//手机获取验证码
	public function Message()
	{	
        $options['accountsid']='441856a6f7ac4b4c16e89f611ef067ef';
        $options['token']='075f6d4cc1f0559ec67dd795ad4500e0';
        $str = '12345678900987654321';
        $str1 = substr(str_shuffle($str),0,4);
        //初始化 $options必填
        $ucpass = new Ucpaas($options);
        //开发者账号信息查询默认为json或xml 
        $ucpass->getDevinfo('json');
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "cb36a26b60194b4d97bfbd1aa7a41595";
        $to = $_POST['phone'];    
        $templateId = "107336";
        $param=$str1;
		$ucpass->templateSMS($appId,$to,$templateId,$param);
        echo json_encode(array('send'=>$str1));
	}

	//注册页面
	public function register()
	{
		return $this->fetch();
	}
	
	//检查验证码	
	public function check($code='')
    {
        $captcha = new \think\captcha\Captcha();
        
            if (!$captcha->check($code)) {
                $data = ['errcode'=>1,'info'=>'<a style="color:red;">验证码不正确</a>'];
            } else {
                $data = ['errcode'=>0,'info'=>'<a style="color:#00DB00;">已验证</a>'];
            }
            echo json_encode($data);
    }

	//判断注册信息
	public function checkRegister()
	{	
		$username = $_POST['username'];
		$user = new User();
		if ($user::checkUser($username)) {
			$data = ['errcode'=>1,'info'=>'<a style="color:red;">该用户名已被使用，请使用其它用户名注册</a>'];
		}else{
			$data = ['errcode'=>0,'info'=>'<a style="color:#00DB00;">已验证</a>'];
		}
		echo json_encode($data);
	}

	//登录
	public function login()
	{
		return $this->fetch();
	}

	//找回密码
	public function pass()
	{
		return $this->fetch();
	}
}