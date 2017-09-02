<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Shoplist;

//搜索商品展示页面
class Room extends Auth
{
	//搜索展示页面
	public function room()
	{
		$content = $_POST['content'];
		$shoplist = new Shoplist();
		$Fuzzy = $shoplist->search($content);
		$this->assign('Fuzzy',$Fuzzy);	
		$this->head();
		return $this->fetch();
	}
}