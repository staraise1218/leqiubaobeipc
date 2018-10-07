<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\PHPTools\www\leqiubaobeipc\public/../application/index\view\about\index.html";i:1538901057;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\header.html";i:1538792893;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\footer.html";i:1538029536;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>公司介绍</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/static/css/company.css">
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
	<div class="com_bg">
		<div class="com_title ac">
			<img class="w100" src="/static/images/company/com_intor.png">
		</div>
		<div class="com_intor">
			<img class="com_video w100" src="/static/images/company/com_video.png">
			<img class="com_video_img" src="/static/images/company/img.jpg">
			<img class="com_video_start" src="/static/images/company/com_start.png" data-toggle="modal" data-target="#myVideo1">
			<!-- 视频弹窗 -->
			<div class="modal fade" id="myVideo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-width: 1200px;">
				<div class="pro_video">
					<video src="" controls="controls"></video>
				</div>
			</div>
		</div>
		<div class="com_text com_intor">
			<img class="w100" src="/static/images/company/com_text.png">
			<div class="com_text_p"><?php echo $info['content']; ?></div>
		</div>
		<div class="com_pro com_intor">
			<img class="com_video w100" src="/static/images/company/com_pro.png">
			<img class="com_pro_img" src="/static/images/company/img.jpg">
			<img class="com_video_start" src="/static/images/company/com_start.png" data-toggle="modal" data-target="#myVideo2">
			<!-- 视频弹窗 -->
			<div class="modal fade" id="myVideo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-width: 1200px;">
				<div class="pro_video">
					<video src="" controls="controls"></video>
				</div>
			</div>
		</div>
		<div class="com_team ac">
			<img class="" src="/static/images/company/com_team.png" style="width: 40%;"> 
		</div>
		<div class="com_dia com_intor">
			<img class="w100" src="/static/images/company/com_dia.png">
			<div class="com_dia_item com_dia_l">
				<div><img class="dia_item_img" src="<?php echo $teamlist[0]['image']; ?>"></div>
				<div class="dia_item_p">
					<p class="dia_item_p1"><?php echo $teamlist[0]['name']; ?></p>
					<p class="dia_item_p2"><?php echo $teamlist[0]['description']; ?>...</p>
				</div>
			</div>
			<div class="com_dia_item com_dia_r" style="">
				<div class="dia_item_p">
					<p class="dia_item_p1 ar"><?php echo $teamlist[0]['name']; ?></p>
					<p class="dia_item_p2"><?php echo $teamlist[0]['description']; ?>...</p>
				</div>
				<div><img class="dia_item_img" src="<?php echo $teamlist[0]['image']; ?>"></div>
			</div>
		</div>
		<div class="com_join ac">
			<img class="com_join_img" src="/static/images/company/com_join.png">
		</div>
		<div class="com_line"></div>
		<ul class="com_bottom">
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_1.png">
				<img class="com_bottom_img com_bottom_imgl" src="<?php echo $link[0]['image']; ?>">
			</li>
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_2.png">
				<img class="com_bottom_img com_bottom_imgm" src="<?php echo $link[1]['image']; ?>">
			</li>
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_3.png">
				<img class="com_bottom_img com_bottom_imgr" src="<?php echo $link[2]['image']; ?>">
			</li>
		</ul>
		<ul class="com_bottom">
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_6.png">
				<img class="com_bottom_img com_bottom_imgl" src="<?php echo $link[3]['image']; ?>">
			</li>
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_5.png">
				<img class="com_bottom_img com_bottom_imgm" src="<?php echo $link[4]['image']; ?>">
			</li>
			<li>
				<img class="com_bottom_bor" src="/static/images/company/com_4.png">
				<img class="com_bottom_img com_bottom_imgr" src="<?php echo $link[5]['image']; ?>">
			</li>
		</ul>
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
