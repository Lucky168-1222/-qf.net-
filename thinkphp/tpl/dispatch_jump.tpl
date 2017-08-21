<!DOCTYPE>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>信息提示</title>
<link rel="stylesheet" type="text/css" href="__MSG__PATH__/reset.css">
<link rel="stylesheet" type="text/css" href="__MSG__PATH__/main.css">   
<script src="__MSG__PATH__/jquery-1.6.2.js.下载" type="text/javascript"></script>
<script src="__MSG__PATH__/jquery.spritely-0.5.js.下载" type="text/javascript"></script>
<script type="text/javascript">
(function($) {
    $(document).ready(function() {          
        $('#astronaut')
            .sprite({fps: 30, no_of_frames: 1})
            .spRandom({top: 30, bottom: 200, left: 30, right: 200})
        $('#space').pan({fps: 40, speed: 3, dir: 'right', depth: 50});
    });
})(jQuery); 
</script>
</head>
<body>
<div id="container">
    <div id="stage" class="stage">
        <div id="space" class="stage" style="background-position: 2664px 0px;"></div>
        <div id="astronaut" class="stage" style="top: 115.871px; left: 79.8286px; background-position: 0px 0%;">
            <div id="text_1" style="color:pink;">休斯敦,页面出错！</div>
            <div id="text_2" style="color:gold;">&nbsp;钱蜂网</div>

            <?php switch ($code) {?>
                <?php case 1:?>
            <div id="text_3"><a style="color:green;font-size:16px;font-weight:bold;">提示：<?php echo $msg;?></a>
                <?php break;?>
                <?php case 0:?>
            <div id="text_3"><a style="color:red;font-size:16px;font-weight:bold;">提示：<?php echo $msg;?></a>
                <?php break;?>
            <?php } ?>
            <div  id="" style="color:blue;font-weight:bold;">
               页面自动 <a id="href" style="color:skyblue;" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait" style="color: red;"><?php echo($wait);?></b>
            </div>
            <script type="text/javascript">                       
                (function() {
                    var wait = document.getElementById('wait'), href = document.getElementById('href').href;
                    var interval = setInterval(function() {
                        var time = --wait.innerHTML;
                        if (time <= 0) {
                            location.href = href;
                            clearInterval(interval);
                        }
                        ;
                    }, 1000);
                })();
            </script>

            <div id=""><a style="color:#000;font-weight: bold;">钱蜂网(专业的在线购物平台)</a></div>
            <div id="" style="width:500px;height:100px;position: absolute;top:100px;left:0px;">
                <ul>
                    <li style="float:left;"><a href="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++#">网站首页|</a></li>
                    <li style="float:left;"><a href="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++#">关于我们|</a></li>
                    <li style="float:left;"><a href="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++#">产品中心|</a></li>
                    <li style="float:left;"><a href="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++#">在线留言|</a></li>
                    <li style="float:left;"><a href="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++#">联系我们</a></li>
                </ul>
            </div>
            <div class="" style="margin-left:50px;">
                <form id="searchform" action="http://www.17sucai.com/preview/141331/2015-08-20/Lost_in_Space_Error_404/index.html?s=%E8%80%8C%E4%B8%8D%E5%90%8C%E6%98%AF++" method="get">
                    <input id="s" class="inputField" type="text" name="s" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Or search for new one...&#39;;}" onfocus="if (this.value == &#39;Or search for new one...&#39;) {this.value = &#39;&#39;;}" value="Or search for new one...">
                    <input id="searchsubmit" class="btn-search" type="submit" value="">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>