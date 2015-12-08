<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
	<title><?php echo ($meta_title); ?></title>
	<meta name="keywords" content="<?php echo ($meta_keywords); ?>">
	<meta name="description" content="<?php echo ($meta_description); ?>">
    <!--[if lt IE 9]>
    <script src="/Public/Home/js/html5shiv.min.js"></script>
    <script src="/Public/Home/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Public/Home/css/common.css" />
    
	<link rel="stylesheet" href="/Public/Home/css/style.css" />

    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    
	<script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="/Public/Home/js/jquery.style.js"></script>

</head>

<body class="z-bg01">
<section class="navw rel mb100">
    <nav class="nav auto w">
        <a href="./" class="logo">
            <img src="/Public/Home/images/logo2.png" height="76" class="logo1" title="<?php echo C('WEB_SITE_TITLE');?>">
        </a>
        <ul class="ul fix">
            <li class="fl"><a href="./">首 页</a></li>
			<?php if(is_array($NAVS)): $i = 0; $__LIST__ = $NAVS;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="fl"><a href="<?php echo ($val['url']); ?>" <?php if(($val['action']) == "1"): ?>class="xz"<?php endif; ?>><?php echo ($val['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </nav>
    <div class="header-yy minw-1200"></div>
</section>
<!--header end-->


	<section class="container z-mod1 auto mb100">
	    <div class="mod1-c mod1-c1 dw_1 tc">
	        <a href="<?php echo ($CATEGORYS[5]['url']); ?>">
	            <img src="/Public/Home/images/z_tb1.png" class="mb10" />
	            <p class="fa fs-14"><?php echo ($CATEGORYS[5]['english']); ?></p>
	            <p class="fs-22"><?php echo ($CATEGORYS[5]['title']); ?></p>
	        </a>
	    </div>
	    <div class="mod1-c mod1-c2 dw_2 tc">
	        <a href="<?php echo ($CATEGORYS[6]['url']); ?>">
	            <img src="/Public/Home/images/z_tb2.png" class="vm" />
	            <span class="dib ml10 vm tl">
	                <p class="fa"><?php echo ($CATEGORYS[6]['english']); ?></p>
	                <p class="fs-22"><?php echo ($CATEGORYS[6]['title']); ?></p>
	            </span>
	        </a>
	    </div>
	    <div class="mod1-c mod1-c2 dw_3 tc">
	        <a href="<?php echo ($CATEGORYS[7]['url']); ?>">
	            <img src="/Public/Home/images/z_tb3.png" class="vm" />
	            <span class="dib ml10 vm tl">
	                <p class="fa"><?php echo ($CATEGORYS[7]['english']); ?></p>
	                <p class="fs-22"><?php echo ($CATEGORYS[7]['title']); ?></p>
	            </span>
	        </a>
	    </div>
	    <div class="mod1-c mod1-c1 dw_4 tc">
	        <a href="<?php echo ($CATEGORYS[9]['url']); ?>">
	            <img src="/Public/Home/images/z_tb4.png" class="mb10" />
	            <p class="fa fs-14"><?php echo ($CATEGORYS[9]['english']); ?></p>
	            <p class="fs-22"><?php echo ($CATEGORYS[9]['title']); ?></p>
	        </a>
	    </div>
	    <div class="mod1-c mod1-c3 dw_5 tc">
	        <a href="<?php echo ($CATEGORYS[8]['url']); ?>">
	            <img src="/Public/Home/images/z_tb5.png" class="vm" />
	            <span class="dib ml10 vm tl">
	                <p class="fa"><?php echo ($CATEGORYS[8]['english']); ?></p>
	                <p class="fs-22"><?php echo ($CATEGORYS[8]['title']); ?></p>
	            </span>
	        </a>
	    </div>
	</section>
	<!--main end-->

</body>
</html>