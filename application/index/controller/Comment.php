<?php
namespace app\index\controller;
use think\Db;
use app\index\controller\Auth;
use app\index\model\Shoplist;
use app\index\model\Comment as CommentModel;
use app\index\model\Order;

class Comment extends Auth
{
	//评论页面
	public function comment()
	{
		$shop_id = $_GET['shop_id'];
		$shoplist = new Shoplist();
		$eachShopList = $shoplist->shopDetails($shop_id);
		$this->assign('eachShopList',$eachShopList);
		$this->head();
		return $this->fetch();
	}

	//评论
	public function commentInser()
	{
		$data['com_content'] = $_POST['content'];
		$data['shop_id'] = $_POST['shop_id'];
		$data['com_time'] = time();
		$data['user_id'] =  session('user_id');
		$data['com_sort'] = 1;
		$comment = new CommentModel();
		$comment = $comment->inserComment($data);
		if ($comment){
			$order = new Order();
			$shop_id = $data['shop_id'];
			$order =  $order->complete($shop_id);
			$this->success('评论成功','index/index/index/');
		}else{
			$this->error('评论失败');
		}
 	}	

}