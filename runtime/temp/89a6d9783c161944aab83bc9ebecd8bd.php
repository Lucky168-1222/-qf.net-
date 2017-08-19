<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"D:\wamp64\www\tp5\public/../application/index\view\bus\bus.html";i:1503112035;s:66:"D:\wamp64\www\tp5\public/../application/index\view\index\head.html";i:1503104117;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords"  />
<meta name="Description"  />

<title></title>

<!-- <link rel="shortcut icon" href="favicon.ico" /> -->
<link rel="stylesheet" type="text/css" href="__CSS__BUS__/base.css" />
<link rel="stylesheet" type="text/css" href="__CSS__BUS__/style.css" />
<link rel="stylesheet" type="text/css" href="__CSS__BUS__/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__CSS__BUS__/purebox.css" />
<link rel="stylesheet" type="text/css" href="__CSS__BUS__/quicklinks.css" />

<script type="text/javascript" src="__JS__BUS__/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__JS__BUS__/jquery.json.js"></script>
<script type="text/javascript" src="__JS__BUS__/transport_jquery.js"></script>
<script type="text/javascript">
var json_languages = {"ok":"\u786e\u5b9a","determine":"\u786e\u5b9a","cancel":"\u53d6\u6d88","drop":"\u5220\u9664","edit":"\u7f16\u8f91","remove":"\u79fb\u9664","follow":"\u5173\u6ce8","pb_title":"\u63d0\u793a","Prompt_information":"\u63d0\u793a\u4fe1\u606f","title":"\u63d0\u793a","not_login":"\u60a8\u5c1a\u672a\u767b\u5f55","close":"\u5173\u95ed","cart":"\u8d2d\u7269\u8f66","js_cart":"\u8d2d\u7269\u8f66","all":"\u5168\u90e8","go_login":"\u53bb\u767b\u9646","select_city":"\u8bf7\u9009\u62e9\u5e02","comment_goods":"\u8bc4\u8bba\u5546\u54c1","submit_order":"\u63d0\u4ea4\u8ba2\u5355","sys_msg":"\u7cfb\u7edf\u63d0\u793a","no_keywords":"\u8bf7\u8f93\u5165\u641c\u7d22\u5173\u952e\u8bcd\uff01","adv_packup_one":"\u8bf7\u53bb\u540e\u53f0\u5e7f\u544a\u4f4d\u7f6e","adv_packup_two":"\u91cc\u9762\u8bbe\u7f6e\u5e7f\u544a\uff01","more":"\u66f4\u591a","Please":"\u8bf7\u53bb","set_up":"\u8bbe\u7f6e\uff01","login_phone_packup_one":"\u8bf7\u8f93\u5165\u624b\u673a\u53f7\u7801","more_options":"\u66f4\u591a\u9009\u9879","Pack_up":"\u6536\u8d77","no_attr":"\u6ca1\u6709\u66f4\u591a\u5c5e\u6027\u4e86","search_Prompt":"\u53ef\u8f93\u5165\u6c49\u5b57,\u62fc\u97f3\u67e5\u627e\u54c1\u724c","most_input":"\u6700\u591a\u53ea\u80fd\u9009\u62e95\u9879","multi_select":"\u591a\u9009","checkbox_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u591a\u9009","radio_Packup":"\u8bf7\u6536\u8d77\u5168\u90e8\u5355\u9009","contrast":"\u5bf9\u6bd4","empty_contrast":"\u6e05\u7a7a\u5bf9\u6bd4\u680f","Prompt_add_one":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a04\u4e2a\u54e6^_^","Prompt_add_two":"\u60a8\u8fd8\u53ef\u4ee5\u7ee7\u7eed\u6dfb\u52a0","button_compare":"\u6bd4\u8f83\u9009\u5b9a\u5546\u54c1","exist":"\u60a8\u5df2\u7ecf\u9009\u62e9\u4e86%s","count_limit":"\u6700\u591a\u53ea\u80fd\u9009\u62e94\u4e2a\u5546\u54c1\u8fdb\u884c\u5bf9\u6bd4","goods_type_different":"%s\u548c\u5df2\u9009\u62e9\u5546\u54c1\u7c7b\u578b\u4e0d\u540c\u65e0\u6cd5\u8fdb\u884c\u5bf9\u6bd4","compare_no_goods":"\u60a8\u6ca1\u6709\u9009\u5b9a\u4efb\u4f55\u9700\u8981\u6bd4\u8f83\u7684\u5546\u54c1\u6216\u8005\u6bd4\u8f83\u7684\u5546\u54c1\u6570\u5c11\u4e8e 2 \u4e2a\u3002","btn_buy":"\u8d2d\u4e70","is_cancel":"\u53d6\u6d88","select_spe":"\u8bf7\u9009\u62e9\u5546\u54c1\u5c5e\u6027","Province":"\u8bf7\u9009\u62e9\u6240\u5728\u7701\u4efd","City":"\u8bf7\u9009\u62e9\u6240\u5728\u5e02","District":"\u8bf7\u9009\u62e9\u6240\u5728\u533a\u57df","Street":"\u8bf7\u9009\u62e9\u6240\u5728\u8857\u9053","Detailed_address_null":"\u8be6\u7ec6\u5730\u5740\u4e0d\u80fd\u4e3a\u7a7a","Select_attr":"\u8bf7\u9009\u62e9\u5c5e\u6027","Focus_prompt_one":"\u60a8\u5df2\u5173\u6ce8\u8be5\u5e97\u94fa\uff01","Focus_prompt_login":"\u60a8\u5c1a\u672a\u767b\u5f55\u5546\u57ce\u4f1a\u5458\uff0c\u4e0d\u80fd\u5173\u6ce8\uff01","Focus_prompt_two":"\u767b\u5f55\u5546\u57ce\u4f1a\u5458\u3002","store_focus":"\u5e97\u94fa\u5173\u6ce8\u3002","Focus_prompt_three":"\u60a8\u786e\u5b9e\u8981\u5173\u6ce8\u6240\u9009\u5e97\u94fa\u5417\uff1f","Focus_prompt_four":"\u60a8\u786e\u5b9e\u8981\u53d6\u6d88\u5173\u6ce8\u5e97\u94fa\u5417\uff1f","Focus_prompt_five":"\u60a8\u8981\u5173\u6ce8\u8be5\u5e97\u94fa\u5417\uff1f","Purchase_quantity":"\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf.","My_collection":"\u6211\u7684\u6536\u85cf","shiping_prompt":"\u8be5\u5730\u533a\u6682\u4e0d\u652f\u6301\u914d\u9001","Have_goods":"\u6709\u8d27","No_goods":"\u65e0\u8d27","No_shipping":"\u65e0\u6cd5\u914d\u9001","Deliver_back_order":"\u4e0b\u5355\u540e\u7acb\u5373\u53d1\u8d27","Time_delivery":" \u65f6\u53d1\u8d27","goods_over":"\u6b64\u5546\u54c1\u6682\u65f6\u552e\u5b8c","Stock_goods_null":"\u5546\u54c1\u5e93\u5b58\u4e0d\u8db3","purchasing_prompt_two":"\u5bf9\u4e0d\u8d77\uff0c\u8be5\u5546\u54c1\u5df2\u7ecf\u7d2f\u8ba1\u8d85\u8fc7\u9650\u8d2d\u6570\u91cf","day_not_available":"\u5f53\u65e5\u65e0\u8d27","day_yes_available":"\u5f53\u65e5\u6709\u8d27","Already_buy":"\u5df2\u8d2d\u4e70","Already_buy_two":"\u4ef6\u5546\u54c1\u8fbe\u5230\u9650\u8d2d\u6761\u4ef6,\u65e0\u6cd5\u518d\u8d2d\u4e70","Already_buy_three":"\u4ef6\u8be5\u5546\u54c1,\u53ea\u80fd\u518d\u8d2d\u4e70","goods_buy_empty_p":"\u5546\u54c1\u6570\u91cf\u4e0d\u80fd\u5c11\u4e8e1\u4ef6","goods_number_p":"\u5546\u54c1\u6570\u91cf\u5fc5\u987b\u4e3a\u6570\u5b57","search_one":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c","search_two":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c","search_three":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c","search_four":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c","jian":"\u4ef6","letter":"\u4ef6","inventory":"\u5b58\u8d27","move_collection":"\u79fb\u81f3\u6211\u7684\u6536\u85cf","select_shop":"\u8bf7\u9009\u62e9\u5957\u9910\u5546\u54c1","Parameter_error":"\u53c2\u6570\u9519\u8bef","screen_price":"\u8bf7\u586b\u5199\u7b5b\u9009\u4ef7\u683c","screen_price_left":"\u8bf7\u586b\u5199\u7b5b\u9009\u5de6\u8fb9\u4ef7\u683c","screen_price_right":"\u8bf7\u586b\u5199\u7b5b\u9009\u53f3\u8fb9\u4ef7\u683c","screen_price_dy":"\u5de6\u8fb9\u4ef7\u683c\u4e0d\u80fd\u5927\u4e8e\u6216\u7b49\u4e8e\u53f3\u8fb9\u4ef7\u683c","invoice_ok":"\u4fdd\u5b58\u53d1\u7968\u4fe1\u606f","invoice_desc_null":"\u8f93\u5165\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a\uff01","invoice_desc_number":"\u60a8\u6700\u591a\u53ef\u4ee5\u6dfb\u52a03\u4e2a\u516c\u53f8\u53d1\u7968\uff01","invoice_packup":"\u8bf7\u9009\u62e9\u6216\u586b\u5199\u53d1\u7968\u62ac\u5934\u90e8\u5206\uff01","invoice_tax_null":"\u8bf7\u586b\u5199\u7eb3\u7a0e\u4eba\u8bc6\u522b\u7801","add_address_10":"\u6700\u591a\u53ea\u80fd\u6dfb\u52a010\u4e2a\u6536\u8d27\u5730\u5740","msg_phone_not":"\u624b\u673a\u53f7\u7801\u4e0d\u6b63\u786e","captcha_not":"\u9a8c\u8bc1\u7801\u4e0d\u80fd\u4e3a\u7a7a","captcha_xz":"\u8bf7\u8f93\u51654\u4f4d\u6570\u7684\u9a8c\u8bc1\u7801","captcha_cw":"\u9a8c\u8bc1\u7801\u9519\u8bef","Detailed_map":"\u8be6\u7ec6\u5730\u56fe","email_error":"\u90ae\u7bb1\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","bid_prompt_null":"\u4ef7\u683c\u4e0d\u80fd\u4e3a\u7a7a!","bid_prompt_error":"\u4ef7\u683c\u8f93\u5165\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","mobile_error_goods":"\u624b\u673a\u683c\u5f0f\u4e0d\u6b63\u786e\uff01","null_email_goods":"\u90ae\u7bb1\u4e0d\u80fd\u4e3a\u7a7a","select_store":"\u8bf7\u9009\u62e9\u95e8\u5e97\uff01","Product_spec_prompt":"\u8bf7\u9009\u62e9\u5546\u54c1\u89c4\u683c\u7c7b\u578b","reply_desc_one":"\u56de\u590d\u5e16\u5b50\u5185\u5bb9\u4e0d\u80fd\u4e3a\u7a7a","go_shoping":"\u53bb\u8d2d\u7269","no_history":"\u60a8\u5df2\u6e05\u7a7a\u6700\u8fd1\u6d4f\u89c8\u8fc7\u7684\u5546\u54c1","receive_coupons":"\u9886\u53d6\u4f18\u60e0\u5238","Immediate_use":"\u7acb\u5373\u4f7f\u7528","no_enabled":"\u5173\u95ed"};
//加载效果
var load_cart_info = '<img src="__PICTURE__BUS__/loadgoods.gif" height="108" class="ml100">';
var load_icon = '<img src="__PICTURE__BUS__/load.gif" width="200" height="200">';
</script></head>

<body class="bg-ligtGary">
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

<div class="container settled-container">
    <div class="sett-banner" style="background:url(__IMAGE__BUS__/1489978643396742470.jpg) center center no-repeat;">
    <div class="banner-auto">
        <div class="s-b-tit">
            <h3>马上入驻 开向未来</h3>
            <div class="s-b-line"></div>
        </div>
        <div class="s-b-btn">
            <a href="javascript:void(0);" data-url="merchants_steps.php" class="im-sett" ectype="url_merchants_steps">我要入驻</a>
            <a href="javascript:void(0);" data-url="merchants_steps_site.php" class="view-prog" ectype="url_merchants_steps">入驻进度查询</a>
        </div>
    </div>
</div>
<script type="text/javascript">
$("*[ectype='url_merchants_steps']").on("click",function(){
	var url = $(this).data("url");
	var user_id = "0"
	if(user_id > 0){
		location.href = url;
	}else{
		var back_url = "merchants.php";
		$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
	}
});
</script>
    <div class="sett-section s-section-step">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3>入驻流程</h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">ADVANCE REGISTRATION PROCESS</span>
            </div>
            <div class="sett-warp">
                <div class="item item-one">
                    <div class="item-i"><i></i></div>
                    <div class="tit">1 提交入驻资料</div>
                    <span>选择店铺类型/品牌</span>
                    <span>填写入驻信息</span>
                </div>
                <em class="item-jt"></em>
                <div class="item item-two">
                    <div class="item-i"><i></i></div>
                    <div class="tit">2 商家等待审核</div>
                    <span>平台审核入驻信息</span>
                    <span>通知商家</span>
                </div>
                <em class="item-jt"></em>
                <div class="item item-three">
                    <div class="item-i"><i></i></div>
                    <div class="tit">3 完善店铺信息</div>
                    <span>登录商家后台</span>
                    <span>完善店铺信息</span>
                </div>
                <em class="item-jt"></em>
                <div class="item item-four">
                    <div class="item-i"><i></i></div>
                    <div class="tit">4 店铺上线</div>
                    <span>上传商品</span>
                    <span>发布销售</span>
                </div>
            </div>
        </div>
    </div>
    <div class="sett-section s-section-cate">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3>热招类目</h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">BUSINESS CATEGORY</span>
            </div>
            <div class="sett-warp">
                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978876184880114.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>家用电器</span></div>
                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978893615987749.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>手机、数码、通信</span></div>
                                                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978926013749778.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>家居、家具、家装、厨具</span></div>
                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978972367649095.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>男装、女装、内衣</span></div>
                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978986231187639.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>鞋靴、箱包、钟表、奢侈品</span></div>
                                <div class="item"><i style="background:url(__IMAGE__BUS__/1490910332576618152.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>个人化妆、清洁用品</span></div>
                                                                                                <div class="item"><i style="background:url(__IMAGE__BUS__/1489978943655622374.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>休闲、运动、户外健身</span></div>
                                                                                                <div class="item"><i style="background:url(__IMAGE__BUS__/	1489978957373122314.png) center center no-repeat;width:98;height:85;display:display;float:left"></i><span>食品、酒类、生鲜、特产</span></div>
                                                                                                                            </div>
        </div>
    </div>
    <div class="sett-section s-section-case">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3>成功案例</h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">SUCCESSFUL CASE</span>
            </div>
            <div class="sett-warp">
                <div class="item item1">
    <div class="item-top">
        <a href="#" target="_blank"><img src="__PICTURE__BUS__/1490061461513345174.png"></a>
    </div>
    <div class="item-bot">
        <div class="tit">模板堂官方旗舰店</div>
        <div class="desc">模板堂是国内最专业、最具开发实力的独立电子商务服务与技术提供商，业内首家股交所挂牌企业</div>
    </div>
</div>
<div class="item item2">
    <div class="item-top">
        <a href="#" target="_blank"><img src="__PICTURE__BUS__/1489979528200662778.png"></a>
    </div>
    <div class="item-bot">
        <div class="tit">ECJia电商专营店</div>
        <div class="desc">ECJia为你提供当下多种主流设备的商城开发业务，实现电商领域从移动端到PC端的终极解决方案的全方位布局</div>
    </div>
</div>
<div class="item item3">
    <div class="item-top">
        <a href="#" target="_blank"><img src="__PICTURE__BUS__/1489979554533969030.png"></a>
    </div>
    <div class="item-bot">
        <div class="tit">大商创电商系统</div>
        <div class="desc">在商创网络基于十年的电商架构重构下，打造出了一套可以满足运营商、供货商、采购商、用户分销等，在PC与移动设备上</div>
    </div>
</div>
<div class="item item4">
    <div class="item-top">
        <a href="#" target="_blank"><img src="__PICTURE__BUS__/1489979583329456244.png"></a>
    </div>
    <div class="item-bot">
        <div class="tit">ECTouch自营店</div>
        <div class="desc">ECTouch是上海商创网络科技有限公司推出的一款移动商城网店系统，可以在手机上面卖商品的电子商务软件系统</div>
    </div>
</div>
            </div>
        </div>
    </div>
    <div class="sett-section s-section-help">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3>常见问题</h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">COMMON PROBLEM</span>
            </div>
            <div class="sett-warp">
                                <div class="item item-right">
                    <div class="number">01</div>
                    <div class="info">
                        <div class="name">
                            <div class="tit"><a href="article.php?id=1" target="_blank">免责条款</a></div>
                            <div class="desc"></div>
                        </div>
                    </div>
                </div>
                                <div class="item item-left">
                    <div class="number">02</div>
                    <div class="info">
                        <div class="name">
                            <div class="tit"><a href="article.php?id=2" target="_blank">隐私保护</a></div>
                            <div class="desc"></div>
                        </div>
                    </div>
                </div>
                                <div class="item item-right">
                    <div class="number">03</div>
                    <div class="info">
                        <div class="name">
                            <div class="tit"><a href="article.php?id=3" target="_blank">咨询热点</a></div>
                            <div class="desc"></div>
                        </div>
                    </div>
                </div>
                                <div class="item item-left">
                    <div class="number">04</div>
                    <div class="info">
                        <div class="name">
                            <div class="tit"><a href="article.php?id=4" target="_blank">联系我们</a></div>
                            <div class="desc"></div>
                        </div>
                    </div>
                </div>
                            </div>
        </div>
    </div>
</div>

<div class="footer settled-footer">
	<div class="dsc-copyright">
		<div class="w w1200">
			 
			<p class="footer-ecscinfo pb10">
				 
				<a href="index.php" >首页</a> 
				 
				| 
				 
				 
				<a href="article.php?id=2" >隐私保护</a> 
				 
				| 
				 
				 
				<a href="article.php?id=4" >联系我们</a> 
				 
				| 
				 
				 
				<a href="article.php?id=1" >免责条款</a> 
				 
				| 
				 
				 
				<a href="article.php?id=5" >公司简介</a> 
				 
				| 
				 
				 
				<a href="merchants.php"  target="_blank" >商家入驻</a> 
				 
				| 
				 
				 
				<a href="message.php" >意见反馈</a> 
				 
				 
			</p>
			 
						<p class="footer-otherlink">	
																<a href="http://www.ecmoban.com" target="_blank" title="模板堂">模板堂</a>
				 
				| 
				 
								<a href="http://www.ecjia.com" target="_blank" title="ECJia">ECJia</a>
				 
				| 
				 
								<a href="http://www.ectouch.cn" target="_blank" title="ECTouch">ECTouch</a>
				 
				| 
				 
								<a href="http://help.ecmoban.com" target="_blank" title="电商学院">电商学院</a>
				 
											</p>
						 
			<p class="copyright_info">ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">DSC00000123</a> <a href="http://www.dscmall.cn/" target="_blank">POWERED BY大商创2.0</a></p>
					</div>
	</div>
    
    
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
        <input type="hidden" name="seller_kf_qq" value="349488953" />
        <input type="hidden" name="seller_kf_tel" value="4000-000-000" />
        <input type="hidden" name="user_id" value="0" />
    </div>
</div>

<script type="text/javascript" src="__JS__BUS__/scroll_city.js"></script><script type="text/javascript" src="__JS__BUS__/dsc-common.js"></script>
<script type="text/javascript" src="__JS__BUS__/jquery.purebox.js"></script>
</body>
</html>

