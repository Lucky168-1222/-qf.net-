<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\wamp64\www\tp5\public/../application/index\view\personal\persondata.html";i:1503061120;s:66:"D:\wamp64\www\tp5\public/../application/index\view\index\head.html";i:1503104117;}*/ ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人资料</title>
<link rel="stylesheet" type="text/css" href="__CSS__PATH__/style.css" />
<link rel="stylesheet" type="text/css" href="__CSS__PATH__/shopping-mall-index.css" />
<script type="text/javascript" src="__JS__PATH__/jquery.js"></script>
<script type="text/javascript" src="__JS__PATH__/zhonglin.js"></script>
</head>

<body style="position:relative;">
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="__CSS__PATH__/style.css" />
<!-- <link rel="stylesheet" type="text/css" href="__CSS__PATH__/index.css" /> -->
<!-- <script type="text/javascript" src="__JS__PATH__/jquery.js"></script> -->
<!-- <script type="text/javascript" src="__JS__PATH__/zhonglin.js"></script> -->
</head> 
    <!--top 开始-->
    <div class="top">
        <div class="top-con w1200">
            <p class="t-con-l f-l">您好，欢迎来到钱蜂网</p>
            <ul class="t-con-r f-r">
                <li><a href="<?php echo url('index/personal/personal'); ?>">我 (个人中心)</a></li>
                <li><a href="<?php echo url('index/personal/cart'); ?>">我的购物车</a></li>
                <li><a href="<?php echo url('index/personal/order'); ?>">我的订单</a></li>
                <li class="erweima">
                    <a href="#">扫描二维码</a>
                    <div class="ewm-tu">
                        <a href="<?php echo url('index/index'); ?>"><img src="__IMAGE__PATH__/erweima-tu.jpg" /></a>
                    </div>
                </li>
                <div style="clear:both;"></div>
            </ul>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--logo search 开始-->
    <div class="hd-info1 w1200">
        <div class="logo f-l">
            <h1><a href="<?php echo url('index/index'); ?>" title="中林网站"><img src="__IMAGE__PATH__/qianfeng.png" width="96" height="118" /></a></h1>
        </div>
        <div class="dianji f-r">
            <div class="btn1">
                <button class="btn1-l" id="register_id" >注册</button>
                <button class="btn1-r" id="login_id" >登录</button>
                <script type="text/javascript">
                    var oRegister  = document.getElementById('register_id');
                    oRegister.onclick = function(){
                        document.location = "<?php echo url('index/register/register'); ?>";
                    }
                    var oLogin = document.getElementById('login_id');
                    oLogin.onclick = function(){
                        document.location = "<?php echo url('index/register/login'); ?>";
                    }
                </script>
                <div style="clear:both;"></div>
            </div>
            <button class="btn2">商家入口></button>

        </div>
        <div class="search f-r">
            <ul class="sp">
                <li  ss-search="sp" class="current" ><a href="javascript:;" id="shopcom">商品</a></li>
                <div style="clear:both;"></div>
            </ul>
            <div class="srh">
                <div class="ipt f-l">
                    <input type="text" placeholder="搜索关键字..." ss-search-show="sp" />
                </div>
                <button class="f-r seek" id="seek_js" >搜 索</button>
                <script type="text/javascript">
                var oSeek = document.getElementById('seek_js');
                oSeek.onclick = function(){
                    document.location = "<?php echo url('index/room/room'); ?>";
                }
                </script>
                <div style="clear:both;"></div>
            </div>
            <ul class="sp2">
                <li><a href="<?php echo url('index/details/details'); ?>">妙脆角</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">乐事薯片</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">一乐拉面</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">小当家</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">斗牛士</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">尖叫</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">红豆糕</a></li>
                <li><a href="<?php echo url('index/details/details'); ?>">猜你喜欢</a></li>
                <div style="clear:both;"></div>
            </ul>
        </div>
        
        <div style="clear:both;"></div>
    </div>
    
    <!--切换城市-->
    <div class="switch-city w1200">
        <a href="#" class="dianji-qh">切换城市</a>
        <span class="dqm">重庆市</span>
        <div class="select-city">
            <div class="sl-city-top">
                <p class="f-l">切换城市</p>
                <a class="close-select-city f-r" href="#">
                    <img src="__IMAGE__PATH__/close-select-city.gif" />
                </a>
            </div>
            <div class="sl-city-con">
                <p>西北</p>
                <dl>
                    <dt>重庆市</dt>
                    <dd>
                        <a href="#">长寿区</a>
                        <a href="#">巴南区</a>
                        <a href="#">南岸区</a>
                        <a href="#">九龙坡区</a>
                        <a href="#">沙坪坝区</a>
                        <a href="#">北碚</a>
                        <a href="#">江北区</a>
                        <a href="#">渝北区</a>
                        <a href="#">大渡口区</a>
                        <a href="#">渝中区</a>
                        <a href="#">万州</a>
                        <a href="#">武隆</a>
                        <a href="#">晏家</a>
                        <a href="#">长寿湖</a>
                        <a href="#">云集</a>
                        <a href="#">华中</a>
                        <a href="#">林封</a>
                        <a href="#">双龙</a>
                        <a href="#">石回</a>
                        <a href="#">龙凤呈祥</a>
                        <a href="#">朝天门</a>
                        <a href="#">中华</a>
                        <a href="#">玉溪</a>
                        <a href="#">云烟</a>
                        <a href="#">红塔山</a>
                        <a href="#">真龙</a>
                        <a href="#">天子</a>
                        <a href="#">娇子</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>新疆</dt>
                    <dd>
                        <a href="#">齐乌鲁木</a>
                        <a href="#">昌吉</a>
                        <a href="#">巴音</a>
                        <a href="#">郭楞</a>
                        <a href="#">伊犁</a>
                        <a href="#">阿克苏</a>
                        <a href="#">喀什</a>
                        <a href="#">哈密</a>
                        <a href="#">克拉玛依</a>
                        <a href="#">博尔塔拉</a>
                        <a href="#">吐鲁番</a>
                        <a href="#">和田</a>
                        <a href="#">石河子</a>
                        <a href="#">克孜勒苏</a>
                        <a href="#">阿拉尔</a>
                        <a href="#">五家渠</a>
                        <a href="#">图木舒克</a>
                        <a href="#">库尔勒</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>甘肃</dt>
                    <dd>
                        <a href="#">兰州</a>
                        <a href="#">天水</a>
                        <a href="#">巴音</a>
                        <a href="#">白银</a>
                        <a href="#">庆阳</a>
                        <a href="#">平凉</a>
                        <a href="#">酒泉</a>
                        <a href="#">张掖</a>
                        <a href="#">武威</a>
                        <a href="#">定西</a>
                        <a href="#">金昌</a>
                        <a href="#">陇南</a>
                        <a href="#">临夏</a>
                        <a href="#">嘉峪关</a>
                        <a href="#">甘南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>宁夏</dt>
                    <dd>
                        <a href="#">银川</a>
                        <a href="#">吴忠</a>
                        <a href="#">石嘴山</a>
                        <a href="#">中卫</a>
                        <a href="#">固原</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>青海</dt>
                    <dd>
                        <a href="#">西宁</a>
                        <a href="#">海西</a>
                        <a href="#">海北</a>
                        <a href="#">果洛</a>
                        <a href="#">海东</a>
                        <a href="#">黄南</a>
                        <a href="#">玉树</a>
                        <a href="#">海南</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
    </div>
    
    <!--nav 开始-->
    <div class="nav w1200">
        <a href="JavaScript:;" class="sp-kj" kj="">
            商品分类快捷
            
        </a>

        <div class="kj-show2 none" kj-sh="">
                <div class="kj-info1" mg="shiping">
                    <dl class="kj-dl1">
                        <dt>
                            <a href="#">食品/饮料/酒水</a>
                        </dt>
                        <dd>
                            零食/糖果/巧克力、饼干/糕点、生鲜<br />
                            酒水饮料/乳饮料、调味/速食<br />
                            粮油/干货、冲调制品
                        </dd>
                    </dl>
                    <div class="kj-if-show" mg2="shiping">
                        <dl>
                            <dt>零食/糖果/巧克力</dt>
                            <dd>
                                <a href="#">坚果迷线</a>
                                <a href="#">膨化食品</a>
                                <a href="#">糖果果冻/巧克力/口香糖</a>
                                <a href="#">肉类/熟食食品</a>
                                <a href="#">进口食品</a>
                            </dd>
                            <div style="clear:both;"></div>
                        </dl>
                       
                    </div>
                </div>
                <div class="kj-info1" mg="muying">
                    <dl class="kj-dl1">
                        <dt><a href="#">母婴用品/玩具</a></dt>
                        <dd>
                            奶粉/辅食、尿裤/湿巾、玩具<br />
                            宝宝喂养/洗护清洁
                        </dd>
                    </dl>
                    <div class="kj-if-show" mg2="muying">
                        <dl>
                            <dt>母婴用品/玩具</dt>
                            <dd>
                                <a href="#">巧克力</a>
                                <a href="#">坚果迷线</a>
                                <a href="#">膨化食品</a>
                                <a href="#">巧克力</a>
                                <a href="#">巧克力</a>
                                <a href="#">肉类/熟食食品</a>
                                <a href="#">进口食品</a>
                            </dd>
                            <div style="clear:both;"></div>
                        </dl>
                    </div>
                </div>
                <div class="kj-info1" mg="chuju">
                    <dl class="kj-dl1">
                        <dt><a href="#">厨具餐具/家用清洁/纸品</a></dt>
                        <dd>
                            纸品湿巾、衣物清洁护理、家庭清洁<br />
                            清洁、厨具、烹饪用具/厨房配件<br />
                            食物保鲜容器
                        </dd>
                    </dl>
                    <div class="kj-if-show" mg2="chuju">
                        <dl>
                            <dt>厨具餐具</dt>
                            <dd>
                                <a href="#">坚果迷线</a>
                                <a href="#">膨化食品</a>
                                <a href="#">糖果果冻/巧克力/口香糖</a>
                                <a href="#">肉类/熟食食品</a>
                                <a href="#">进口食品</a>
                            </dd>
                            <div style="clear:both;"></div>
                        </dl>
                       
                    </div>
                </div>
                <div class="kj-info1" mg="meizhuang">
                    <dl class="kj-dl1">
                        <dt><a href="#">美妆洗护/个人护理洗发护发</a></dt>
                        <dd>
                            洗浴用品/身体护理、口腔护理、面部护肤<br />
                            女性护理、彩妆/美容工具、男士护理
                        </dd>
                    </dl>
                    <div class="kj-if-show" mg2="meizhuang">
                        <dl>
                            <dt>美妆洗护</dt>
                            <dd>
                                <a href="#">坚果迷线</a>
                                <a href="#">膨化食品</a>
                                <a href="#">糖果果冻/巧克力/口香糖</a>
                                <a href="#">肉类/熟食食品</a>
                                <a href="#">进口食品</a>
                            </dd>
                            <div style="clear:both;"></div>
                        </dl>
                        
                    </div>
                </div>
                <div class="kj-info1" style="border-bottom:none;" mg="jiafang">
                    <dl class="kj-dl1" style="padding:6px 10px;">
                        <dt><a href="#">家居/家纺</a></dt>
                        <dd>
                            浴室用品、餐具水具<br />
                            收纳/居家日用、针织纺品
                        </dd>
                    </dl>
                    <div class="kj-if-show" mg2="jiafang">
                        <dl>
                            <dt>家居/家纺</dt>
                            <dd>
                                <a href="#">坚果迷线</a>
                                <a href="#">膨化食品</a>
                                <a href="#">糖果果冻/巧克力/口香糖</a>
                                <a href="#">肉类/熟食食品</a>
                                <a href="#">进口食品</a>
                            </dd>
                            <div style="clear:both;"></div>
                        </dl>
                    </div>
                </div>
                 
        </div>
        <ul>
            <li><a href="<?php echo url('index/cosmetology/cosmetology'); ?>">食品零食</a></li>
            <li><a href="<?php echo url('index/cosmetology/saleshops'); ?>">预约商品</a></li>
            <li><a href="<?php echo url('index/cosmetology/exchange'); ?>">积分商城</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>


    <div><br /></div>

    
    <!--内容开始-->
    <div class="personal w1200">
    	<div class="personal-left f-l">
        	<div class="personal-l-tit">
            	<h3>个人中心</h3>
            </div>
            <ul>
            	<li class="per-li1"><a href="<?php echo url('index/personal/personal'); ?>">消息中心<span>></span></a></li>
                <li class="current-li per-li2"><a href="<?php echo url('index/personal/persondata'); ?>">个人资料<span>></span></a></li>
                <li class="per-li3"><a href="<?php echo url('index/personal/order'); ?>">我的订单<span>></span></a></li>
                <li class="per-li4"><a href="<?php echo url('index/personal/reserve'); ?>">我的预约<span>></span></a></li>
                <li class="per-li5"><a href="<?php echo url('index/personal/cart'); ?>">购物车<span>></span></a></li>
                <li class="per-li6"><a href="<?php echo url('index/personal/address'); ?>">管理收货地址<span>></span></a></li>
                <li class="per-li7"><a href="<?php echo url('index/personal/collection'); ?>">店铺收藏<span>></span></a></li>
                <li class="per-li8"><a href="<?php echo url('index/personal/purchaseNum'); ?>">购买记录<span>></span></a></li>
                <li class="per-li9"><a href="<?php echo url('index/personal/seekNum'); ?>">浏览记录<span>></span></a></li>
                <li class="per-li10"><a href="<?php echo url('index/personal/integral'); ?>">会员积分<span>></span></a></li>
            </ul>
        </div>
    	<div class="personal-r f-r">
        	<div class="personal-right">
                <div class="personal-r-tit">
                    <h3>个人资料</h3>
                </div>
                <div class="data-con">
                	<div class="dt1">
                    	<p class="f-l">当前头像：</p>
                        <div class="touxiang f-l">
                        	<div class="tu f-l">
                            	<a href="#">
                                	<img src="__IMAGE__PATH__/data-tu.gif" />
                                    <input type="file" name="" id="" class="img1" />
                                </a>
                            </div>
                            <a href="JavaScript:;" class="sc f-l" shangchuang="">上传头像</a>
                            <div style="clear:both;"></div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">昵称：</p>
                        <input type="text" placeholder="RH了" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">用户名：</p>
                        <input type="text" value="zhao601884596" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt2">
                    	<p class="dt-p f-l">性别：</p>
                        <input type="radio" name="hobby" value="nan"></input><span>男</span>
                        <input type="radio" name="hobby" value="nan"></input><span>女</span>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">年龄：</p>
                        <input type="text" value="20" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt3">
                    	<p class="dt-p f-l">手机号：</p>
                        <input type="text" value="12345678910" />
                        <button>获取短信验证码</button>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">验证码：</p>
                        <input type="text" value="" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1">
                    	<p class="dt-p f-l">邮箱：</p>
                        <input type="text" value="601884596@qq.com" />
                        <div style="clear:both;"></div>
                    </div>
                    <div class="dt1 dt4">
                    	<p class="dt-p f-l">密码：</p>
                        <input type="text" value="" />
                        <button>修改密码</button>
                        <div style="clear:both;"></div>
                    </div>
                    <button class="btn-pst">保存</button>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    
    <!-- 上传头像弹窗 -->
    <div class="tanchuang">
    	<div class="t-c-bg"></div>
    	<div class="t-c-con">
        	<div class="tc-tit">
            	<h3>上传头像</h3>
                <a href="JavaScript:;" delete=""><img src="__IMAGE__PATH__/t-c-del.gif" /></a>
                <div style="clear:both;"></div>
            </div>
            <div class="tc-con">
            	<a href="#"><img src="__IMAGE__PATH__/tc-tu.gif" /></a>
                <button>保存头像</button>
            </div>
        </div>
    </div>
    
    <!--底部服务-->
    <div class="ft-service">
    	<div class="w1200">
        	<div class="sv-con-l2 f-l">
            	<dl>
                	<dt><a href="#">新手上路</a></dt>
                    <dd>
                    	<a href="#">购物流程</a>
                    	<a href="#">在线支付</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">配送方式</a></dt>
                    <dd>
                    	<a href="#">货到付款区域</a>
                    	<a href="#">配送费标准</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">购物指南</a></dt>
                    <dd>
                    	<a href="#">常见问题</a>
                    	<a href="#">订购流程</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">售后服务</a></dt>
                    <dd>
                    	<a href="#">售后服务保障</a>
                    	<a href="#">退款说明</a>
                    	<a href="#">新手选购商品总则</a>
                    </dd>
                </dl>
                <dl>
                	<dt><a href="#">关于我们</a></dt>
                    <dd>
                    	<a href="#">投诉与建议</a>
                    </dd>
                </dl>
                <div style="clear:both;"></div>
            </div>
        	<div class="sv-con-r2 f-r">
            	<p class="sv-r-tle">187-8660-5539</p>
            	<p>周一至周五9:00-17:30</p>
            	<p>（仅收市话费）</p>
            	<a href="#" class="zxkf">24小时在线客服</a>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    
    <!--底部 版权-->
    <div class="footer w1200">
    	<p>
        	<a href="#">关于我们</a><span>|</span>
        	<a href="#">友情链接</a><span>|</span>
        	<a href="#">宅客微购社区</a><span>|</span>
        	<a href="#">诚征英才</a><span>|</span>
        	<a href="#">商家登录</a><span>|</span>
        	<a href="#">供应商登录</a><span>|</span>
        	<a href="#">热门搜索</a><span>|</span>
        	<a href="#">宅客微购新品</a><span>|</span>
        	<a href="#">开放平台</a>
        </p>
        <p>
        	沪ICP备13044278号<span>|</span>合字B1.B2-20130004<span>|</span>营业执照<span>|</span>互联网药品信息服务资格证<span>|</span>互联网药品交易服务资格证
        </p>
    </div>
</body>
</html>
