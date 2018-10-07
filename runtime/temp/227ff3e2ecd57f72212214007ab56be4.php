<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\PHPTools\www\leqiubaobeipc\public/../application/index\view\news\index.html";i:1538797521;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\header.html";i:1538792893;s:71:"E:\PHPTools\www\leqiubaobeipc\application\index\view\common\footer.html";i:1538029536;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>新闻活动</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/static/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/static/css/common.css">
	<link rel="stylesheet" type="text/css" href="/static/css/product.css">
	<link rel="stylesheet" type="text/css" href="/static/css/news.css">
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
	<div class="news_bg">
		<div class="pro">
			<!-- 核心商品展示 -->
			<div class="pro_l ac">
				<img class="news_act_img" src="/static/images/news/news_act.png">
				<ul class="news_ul">
					<?php if(is_array($huodonglist) || $huodonglist instanceof \think\Collection || $huodonglist instanceof \think\Paginator): if( count($huodonglist)==0 ) : echo "" ;else: foreach($huodonglist as $key=>$huodong): ?>
					<li class="news_show pro_show ac">
						<p class="news_show_title pro_show_title"><span><?php echo $huodong['title']; ?></span> <span class="title_fr fr"><?php echo date('m/d', $huodong['createtime']); ?></span></p>
						<img class="news_show_img pro_show_img" src="<?php echo $huodong['thumbimage']; ?>">
						<img class="pro_show_bor" src="/static/images/news/news_bor.png">
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="news_page pagination">
					<?php echo $huodonglist->render(); ?>
				</ul>
			</div>
			<!-- 排行榜 -->
			<div class="pro_r">
				<img class="news_new_img" src="/static/images/news/news_new.png">
				<ul class="news_r_ul pro_r_ul">
					<?php if(is_array($dongtailist) || $dongtailist instanceof \think\Collection || $dongtailist instanceof \think\Paginator): if( count($dongtailist)==0 ) : echo "" ;else: foreach($dongtailist as $key=>$dongtai): ?>
					<li>
						<a href="#">
							<p><!-- <span class="mytop">置顶</span> --><span><?php echo $dongtai['title']; ?></span> <span class="fr"><?php echo date('Y/m/d', $dongtai['createtime']); ?></span></p>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
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
