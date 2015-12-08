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
	<!-- <link rel="stylesheet" href="/Public/Home/css/reset.css"> -->

    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    
	<script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="/Public/Home/js/jquery.style.js"></script>
	<script src="/Public/Home/js/jquery.imagesloaded.js"></script>
	<script src="/Public/Home/js/jquery.wookmark.js"></script>

</head>

<body>

<section class="navw special-nav min-special-nav" style="z-index:9999;">
    <nav class="nav auto w">
        <a href="./" class="logo">
            <img src="/Public/Home/images/logo2.png" height="76" class="logo1" title="<?php echo C('WEB_SITE_TITLE');?>">
        </a>
        <ul class="ul fix">
            <li class="fl"><a href="<?php echo (WEB_URL); ?>">首 页</a></li>
			<?php if(is_array($NAVS)): $i = 0; $__LIST__ = $NAVS;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="fl"><a href="<?php echo ($val['url']); ?>" <?php if(($val['action']) == "1"): ?>class="xz"<?php endif; ?>><?php echo msubstr($val['title'],0,2,'utf8','');?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </nav>
    <div class="header-yy minw-1200"></div>
</section>
<!--header end-->


	<!--header end-->
	<section class="z-ban1 minw-1200 mb35" style="background: url(/Public/Home/images/y_banner1.jpg) center top no-repeat;">
	    <div class="y_banner">
	        <img src="/Public/Home/images/y_zi01.png" alt="">
	        <a href="javascript:;"><img src="/Public/Home/images/y_zi02.jpg" alt=""></a>
	    </div>
	</section>
	<!--banner end-->
	<section class="container auto">
		<div class="z-mod6 mb30">
	        <ul>
	            <li class="fix">
	                <div class="c_1">服务：</div>
	                <div class="c_2">
					<?php $_result=C('SERVER_LIST');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$key, 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style']));?>" class="a_1 <?php if(($sousuo['server']) == $key): ?>on_1<?php endif; ?>"><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	                </div>
	            </li>
	            <li class="fix">
	                <div class="c_1">行业：</div>
	                <div class="c_2">
						<?php $_result=C('PROFESSION_LIST');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$key, 'style'=>$sousuo['style']));?>" class="a_1 <?php if(($sousuo['profession']) == $key): ?>on_1<?php endif; ?>"><?php echo ($val); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	                </div>
	            </li>
	            <li class="fix">
	                <div class="c_1">颜色：</div>
	                <div class="c_2">
						<?php $_result=C('STYLE_LIST');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$key));?>" class="a_1 <?php if(($sousuo['style']) == $key): ?>on_1<?php endif; ?>"><?php echo ($val); ?></a>
							<?php else: ?>
		                    	<a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$key));?>" class="a_2 bg_<?php echo ($val); ?> <?php if(($sousuo['style']) == $key): ?>on_2<?php endif; ?>">&nbsp;</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	                </div>
	            </li>
	        </ul>
	    </div>
	    <div class="z-mod7 mb30 fix">
	        <div class="mod7-c1 fl fix">
	            <a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style'], 'sort'=>1));?>" <?php if(($sousuo['sort']) == "1"): ?>class="on"<?php endif; ?>>综合</a>
	            <a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style'], 'moods_desc'=>1));?>" <?php if(($sousuo['moods_desc']) == "1"): ?>class="on"<?php endif; ?>>人气</a>
	            <a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>$sousuo['case_type'], 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style'], 'time_desc'=>1));?>" <?php if(($sousuo['time_desc']) == "1"): ?>class="on"<?php endif; ?>>最新</a>
	        </div>
	        <div class="mod7-c2 fr">
	            共筛选<span class="ml5 mr5"><?php echo ($_total); ?></span>个案例
	            <a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>2, 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style']));?>" class="a_1 fs <?php if(($sousuo['case_type']) == "2"): ?>on_1<?php endif; ?>">列表</a>
	            <a href="<?php echo U('Index/lists', array('catid'=>$catid, 'case_type'=>1, 'server'=>$sousuo['server'], 'profession'=>$sousuo['profession'], 'style'=>$sousuo['style']));?>" class="a_2 fs <?php if(($sousuo['case_type']) == "1"): ?>on_2<?php endif; ?>">图表</a>
	        </div>
	    </div>
	    <div class="z-mod8 mb40">
	        <ul class="fix">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
	                <div class="pf-img"><a href="<?php echo ($val['url']); ?>"><img src="<?php echo thumb($val['thumb_tw'],247,140);?>" /></a></div>
	                <div class="img"><img src="/Public/Home/images/z_img2.jpg" /></div>
	                <div class="text">
	                    <p><a href="<?php echo ($val['url']); ?>"><?php echo msubstr($val['title'], 0, 16);?></a></p>
	                    <p><?php echo msubstr($val['description'], 0, 20);?></p>
	                </div>
	            </li><?php endforeach; endif; else: echo "" ;endif; ?>
	        </ul>
	        <div class="pages"><?php echo ($_page); ?></div>
	    </div>
	</section>
	<footer class="wb footer">
    <section class="footertop">
        <section class="footertop1 w">
            <section class="footertop11  ovh fix">
                <div class="footert1 fl">
                    <img src="/Public/Home/images/phone.png" height="49" width="49" class="fl">
                    <div class="fl">
                        <span>海淀运营中心咨询热线：</span>
                        010-51654300
                    </div>
                </div>
                <div class="footert1 fl">
                    <img src="/Public/Home/images/phone.png" height="49" width="49" class="fl">
                    <div class="fl">
                        <span>丰台运营中心咨询热线：</span>
                        010-51654321
                    </div>
                </div>
                <div class="footert1 fl">
                    <img src="/Public/Home/images/phone.png" height="49" width="49" class="fl">
                    <div class="fl">
                        <span>朝阳运营中心咨询热线：</span>
                        010-51654311
                    </div>
                </div>
            </section>
        </section>
    </section>
    <section class="footerbot w fix">
        <section class="footerbot1 fl fix">
			<?php $_result=get_category(0);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><section class="footerb1 fl">
	                <a href="<?php echo ($val['url']); ?>" class="footerb1abt"><?php echo ($val['title']); ?></a>
	                <ul class="ul1">
						<?php $_result=get_category($key);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($v['url']); ?>"><?php echo ($v['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	                </ul>
	            </section><?php endforeach; endif; else: echo "" ;endif; ?>
        </section>
        <section class="footerbot2 fr">
            <div class="ewmk tc">
                <div class="ewmkbt">关注我们</div>
                <img src="/Public/Home/images/erweima.jpg" height="97" width="96">
                <div class="ewmknr">微信公众号</div>
            </div>
        </section>
    </section>
    <section class="copyRight wb">
        <section class="copyRight1 w">
            <?php echo C('COPYRIGHT');?>
        </section>
    </section>
</footer>


</body>
</html>