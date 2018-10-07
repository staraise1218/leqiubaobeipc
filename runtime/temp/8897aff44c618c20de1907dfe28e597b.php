<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"E:\PHPTools\www\leqiubaobeipc\public/../application/index\view\index\index.html";i:1538881487;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\footer.html";i:1538029536;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $site['name']; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/reset.css">
    <link rel="stylesheet" type="text/css" href="static/css/index.css">
    <link rel="stylesheet" type="text/css" href="static/css/common.css">
    <!-- <script type="text/javascript" src="static/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="static/js/jquery.min.js"></script>
</head>
<body>
    <!-- 中间按钮 -->
    <div class="index_bg" id="divbanner">
        <div class="index_all">
            <div class="btn_l my50">
                <div class="mb">
                    <a href="<?php echo url('index/news/index'); ?>"><img class="my100" src="static/images/index/new.png"></a>
                </div>
                <div class="mb">
                    <a href="<?php echo url('index/product/index'); ?>"><img class="my100" src="static/images/index/girl.png"></a>
                </div>
                <div class="btn_l_b mb">
                    <a class="dib" href="<?php echo url('index/about/index'); ?>"><img class="my100" src="static/images/index/gongsi.png"></a>
                    <a class="dib" href="<?php echo url('index/join/index'); ?>"><img class="my100" src="static/images/index/hezuo.png"></a>
                </div>
            </div>
            <div class="btn_l my50">
                <a href="<?php echo url('index/music/index'); ?>"><img class="my100" src="static/images/index/xiha.png"></a>
            </div>
        </div>
        <!-- 右侧小时间 -->
        <div class="index_date ac" id="index_date"></div>
    </div>
    <!-- 下方广告 -->
    <div class="footer_bg"></div>
<footer>
    <div class="bottom_l">
        <p class="mb">合作伙伴: <span>北京卫视网络</span> <span>北京卫视网络</span></p>
        <p class="mb">版权所有: <span><?php echo $site['copyright']; ?></span></p>
        <p class="mb">备案号:&nbsp;&nbsp; <span><?php echo $site['beian']; ?></span></p>
        <p class="mb">联系地址: <span><?php echo $site['contact_address']; ?></span></p>
        <p>联系电话: <span><?php echo $site['contact_phone']; ?></span></p>
    </div>
    <div class="bottom_r">
        <img src="static/images/index/index_logo.png">
    </div>
</footer>
    <script type="text/javascript">
        $(function(){
            var myDate = new Date;
            var yue = myDate.getMonth()+1;
            var date = myDate.getDate();
            $('#index_date').text(yue + "月" + date + "日");
        })

    </script>
    <script type="text/javascript">
        var currentIndex = 0;
        function changeBg() { 
            var bgImgs = ["static/images/index/index_bg.png","static/images/index/index_bg2.png"]; 
            if (currentIndex >= bgImgs.length){
                currentIndex = 0;
            }
                
                $("#divbanner").css("background-image","url(" + bgImgs[currentIndex] + ")");
                currentIndex += 1;   
        }
        setInterval("changeBg()", 1000); 
    </script>
</body>
</html>
