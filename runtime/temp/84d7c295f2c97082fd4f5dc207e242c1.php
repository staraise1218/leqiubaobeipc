<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\PHPTools\www\leqiubaobeipc\public/../application/index\view\music\index.html";i:1538882406;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\header.html";i:1538792893;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\footer.html";i:1538029536;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>音乐课堂</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/static/css/music.css">
	<script type="text/javascript" src="/static/js/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- 顶部导航菜单 -->
	<header>
	<img src="/static/images/top_logo.png">
	<ul class="header_ul">
		<li><a href="/" <?php if($config['controllername']=='index'): ?>class="header_li_act"<?php endif; ?>>首页</a></li>
		<li><a href="<?php echo url('index/about/index'); ?>" <?php if($config['controllername']=='about'): ?>class="header_li_act"<?php endif; ?>>公司介绍</a></li>
		<li><a href="<?php echo url('index/music/index'); ?>" <?php if($config['controllername']=='music'): ?>class="header_li_act"<?php endif; ?>>音乐课堂</a></li>
		<li><a href="<?php echo url('index/product/index'); ?>" <?php if($config['controllername']=='product'): ?>class="header_li_act"<?php endif; ?>>产品展示</a></li>
		<li><a href="<?php echo url('index/news/index'); ?>" <?php if($config['controllername']=='news'): ?>class="header_li_act"<?php endif; ?>>新闻活动</a></li>
		<li><a href="<?php echo url('index/join/index'); ?>" <?php if($config['controllername']=='join'): ?>class="header_li_act"<?php endif; ?>>合作加盟</a></li>
	</ul>
</header>
	<!-- 公司介绍 -->
	<div class="music_bg ac">
		<div class="music_title ac">音乐课堂</div>
		<div class="music_intor">
			<img class="music_video w100" src="/static/images/music/music_video.png">
			<img class="music_video_img" src="<?php echo $info['thumbimage']; ?>">
			<img class="music_video_start" src="/static/images/company/com_start.png" data-toggle="modal" data-target="#myVideo1">
			<!-- 视频弹窗 -->
			<div class="modal fade" id="myVideo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-width: 1200px;">
				<div class="pro_video">
					<video src="<?php echo $info['file']; ?>" controls="controls"></video>
				</div>
			</div>
		</div>
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

</body>
</html>
