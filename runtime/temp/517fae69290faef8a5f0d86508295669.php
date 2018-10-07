<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"E:\PHPTools\www\leqiubaobeipc\public/../application/index\view\product\index.html";i:1538905222;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\header.html";i:1538792893;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\footer.html";i:1538029536;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>产品展示</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/static/css/product.css">
	<link rel="stylesheet" type="text/css" href="/static/css/common.css">
	<script type="text/javascript" src="/static/js/jquery.min.js"></script>
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
	<!-- 顶部轮播图 -->
	<div id="myCarousel" class="carousel slide">
		<!-- 轮播（Carousel）指标 -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>   
		<!-- 轮播（Carousel）项目 -->
		<div class="pro_pic carousel-inner">
			<div class="pro_pic_item item active">
				<img src="/static/images/product/img.jpg" alt="First slide">
			</div>
			<div class="pro_pic_item item">
				<img src="/static/images/product/img.jpg" alt="Second slide">
			</div>
			<div class="pro_pic_item item">
				<img src="/static/images/product/img.jpg" alt="Third slide">
			</div>
		</div>
		<!-- 轮播（Carousel）导航 -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="sr-only">Next</span>
		</a>
	</div> 
	<!-- 商品展示 -->
	<div class="pro_bg">
		<div class="pro">
			<!-- 核心商品展示 -->
			<div class="pro_l">
				<img src="/static/images/product/pro_core.png">
				<div class="pro_show ac">
					<p class="pro_show_title">乐球宝贝公司介绍</p>
					<?php if(!empty($productVideo0['videofile'])): ?>
					<img class="pro_show_start" src="/static/images/product/start.png" data-toggle="modal" data-target="#myVideo1">
					<?php endif; ?>
					<img class="pro_show_img" src="<?php echo $productVideo0['thumbimage']; ?>">
					<img class="pro_show_bor" src="/static/images/product/pro_img.png">
					<p class="pro_show_p al"><?php echo $productVideo0['description']; ?></p>
				</div>
				<!-- 视频弹窗 -->
				<div class="modal fade" id="myVideo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-width: 1200px;">
					<div class="pro_video">
						<video src="<?php echo $productVideo0['videofile']; ?>" controls="controls"></video>
					</div>
				</div>
				<div class="pro_intro pro_show ac">
					<p class="pro_show_title">公司产品介绍</p>
					<?php if(!empty($productVideo1['videofile'])): ?>
					<img class="pro_intro_start" src="/static/images/product/start.png" data-toggle="modal" data-target="#myVideo2">
					<?php endif; ?>
					<img class="pro_intro_img" src="<?php echo $productVideo1['thumbimage']; ?>">
					<img class="pro_intro_bor pro_show_bor" src="/static/images/product/pro_intro.png">
					<p class="pro_intro_p pro_show_p al"><?php echo $productVideo1['description']; ?></p>
				</div>
				<img class="pro_music" src="/static/images/product/pro_music.png">
				<!-- 视频弹窗 -->
				<div class="modal fade" id="myVideo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="min-width: 1200px;">
					<div class="pro_video">
						<video src="<?php echo $productVideo1['videofile']; ?>" controls="controls"></video>
					</div>
				</div>
			</div>
			<!-- 排行榜 -->
			<div class="pro_r">
				<img src="/static/images/product/ranking.png">
				<ul class="pro_r_ul">
					<?php if(is_array($audio) || $audio instanceof \think\Collection || $audio instanceof \think\Paginator): if( count($audio)==0 ) : echo "" ;else: foreach($audio as $k=>$item): ?>
					<li>
						<a href="#">
							<img src="/static/images/product/top<?php echo $k+1; ?>.png">
							<p>
								<span><?php echo $item['title']; ?></span>
								<span><?php echo $item['band']; ?></span>
							</p>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>

		<!-- 合作公司 -->
		<ul class="pro_bottom">
			<li class="jiantou"><img src="/static/images/product/pro_l.png"></li>
			<?php if(is_array($audio) || $audio instanceof \think\Collection || $audio instanceof \think\Paginator): if( count($audio)==0 ) : echo "" ;else: foreach($audio as $k=>$item): ?>
			<li>
				<img class="pro_bottom_bor" src="/static/images/product/pro_1.png">
				<img class="pro_bottom_img" class="" src="<?php echo $item['thumbimage']; ?>">
				<img class="pro_bottom_start" src="/static/images/product/start.png">
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<li class="jiantou"><img src="/static/images/product/pro_r.png"></li>
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
