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
    
    <link rel="stylesheet" href="/Public/Home/css/jquery.fullPage.css" type="text/css">
    <link rel="stylesheet" href="/Public/Home/css/style.css" />

    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    
    <script src="/Public/Home/js/jquery.fullPage.js"></script>
    <script src="/Public/Home/js/jquery.style.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dowebok').fullpage({
                anchors: ['page1', 'page2', 'page3', 'page4','page5'],
                menu: '#special-menu'
            });
        });
    </script>

</head>

<body>

<section class="navw special-nav min-special-nav" style="z-index:9999;">
    <nav class="nav auto w">
        <a href="./" class="logo">
            <img src="/Public/Home/images/logo2.png" height="76" class="logo1" title="<?php echo C('WEB_SITE_TITLE');?>">
        </a>
        <ul class="ul fix">
            <li class="fl"><a href="./">首 页</a></li>
			<?php if(is_array($NAVS)): $i = 0; $__LIST__ = $NAVS;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="fl"><a href="<?php echo ($val['url']); ?>" <?php if(($val['action']) == "1"): ?>class="xz"<?php endif; ?>><?php echo msubstr($val['title'],0,2,'utf8','');?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </nav>
    <div class="header-yy minw-1200"></div>
</section>
<!--header end-->


	<div id="dowebok">
	    <div class="section y_s1">
	        <div class="center-wrap">
	            <div class="y_q01">
	                <img src="/Public/Home/images/y_zi03.png" class="y_mmg">
	                <span>高档衣服需要定制  /  高档家具需要定制  /  高档网站更需要定制
	定制型网站，再也不担心自己的网站与别人“撞衫”。</span>
	                <a href="#"><span>定制咨询</span></a>
	            </div>
	        </div>
	    </div>
	    <div class="section y_s2">
	        <div class="center-wrap">
	            <div class="y_q02 fl">
	                <img src="/Public/Home/images/yqzi_01.png" class="yq_mg1">
	                <img src="/Public/Home/images/yqzi_02.png" class="yq_mg2">
	                <span>着眼行业，分析受众，互联网＋时代，追求良好的浏览体验。
	设计最适合用户的网站页面。</span>
	                <a href="#"><span>定制咨询</span></a>
	            </div>
	            <div class="yq_mg3 fr">
	                <img src="/Public/Home/images/y_11.png">
	            </div>
	        </div>
	    </div>
	    <div class="section y_s3">
	        <div class="center-wrap">
	            <div class="y_q04 fr m0">
	                <img src="/Public/Home/images/yqzi_03.png" class="yq_mg4">
	                <img src="/Public/Home/images/yqzi_04.png" class="yq_mg5">
	                <span>受喜爱还受保护，被山寨有权力ko对方。暗爽！</span>
	                <a href="#"><span>定制咨询</span></a>
	            </div>
	        </div>
	    </div>
	    <div class="section y_s4">
	        <div class="center-wrap">
	            <div class="y_q03 fl">
	                <img src="/Public/Home/images/yqzi_05.png" class="yq_mg6">
	                <div class="y_divv fix">
	                     <img src="/Public/Home/images/yqzi_06.png" class="yq_mg7">
	                     <img src="/Public/Home/images/yqzi_07.png" class="yq_mg8">
	                </div>
	                <div class="y_divv2 fix">
	                     <img src="/Public/Home/images/yqzi_08.png" class="yq_mg9">
	                     <img src="/Public/Home/images/yqzi_09.png" class="yq_mg10">
	                 </div>
	                <span>着眼行业，分析受众，互联网＋时代，追求良好的浏览体验。
	设计最适合用户的网站页面。</span>
	                <a href="#"><span>定制咨询</span></a>
	            </div>
	            <img src="/Public/Home/images/y_12.png" class="fr y_mar">
	        </div>
	    </div>
	    <div class="section y_s5">
	         <div class="center-wrap">
	            <ul class="fix y_ul1">
	                <li>
	                    <div class="y_lis">
	                        <img src="/Public/Home/images/ytip_01.png">
	                        鲜明的展示主题
	                    </div>
	                    <ol class="fix fs y_ol1">
	                        <li>网页设计作为一种视觉语言，非常讲究编排和布局，主页的设计不等同于平面设计，并且因为需要考虑到加载速度的问题，设计要求更高于平面设计。</li>
	                        <li>版式设计可通过文字图形的空间组合，表达出和谐与美。</li>
	                        <li>多页面站点页面的编排设计要求把页面之间的有机联系反映出来，<span>特别要求处理好页面之间和页面内的秩序与内容的关系。</span>为了达到最佳的视觉表现效果，金方时代的设计师将反复推敲整体布局的合理性，使浏览者有一个流畅的视觉体验。</li>
	                    </ol>
	                </li>
	                <li>
	                    <div class="y_lis">
	                        <img src="/Public/Home/images/ytip_02.png">
	                        版式设计传达和谐之美
	                    </div>
	                    <ol class="fix fs y_ol1">
	                        <li>网页设计作为一种视觉语言，非常讲究编排和布局，主页的设计不等同于平面设计，并且因为需要考虑到加载速度的问题，设计要求更高于平面设计。</li>
	                        <li>版式设计可通过文字图形的空间组合，表达出和谐与美。</li>
	                        <li>多页面站点页面的编排设计要求把页面之间的有机联系反映出来，<span>特别要求处理好页面之间和页面内的秩序与内容的关系。</span>为了达到最佳的视觉表现效果，金方时代的设计师将反复推敲整体布局的合理性，使浏览者有一个流畅的视觉体验。</li>
	                    </ol>
	                </li>
	                <li>
	                    <div class="y_lis">
	                        <img src="/Public/Home/images/ytip_03.png">
	                        色彩的作用
	                    </div>
	                    <ol class="fix fs y_ol1">
	                        <li>网页设计作为一种视觉语言，非常讲究编排和布局，主页的设计不等同于平面设计，并且因为需要考虑到加载速度的问题，设计要求更高于平面设计。</li>
	                        <li>版式设计可通过文字图形的空间组合，表达出和谐与美。</li>
	                        <li>多页面站点页面的编排设计要求把页面之间的有机联系反映出来，<span>特别要求处理好页面之间和页面内的秩序与内容的关系。</span>为了达到最佳的视觉表现效果，金方时代的设计师将反复推敲整体布局的合理性，使浏览者有一个流畅的视觉体验。</li>
	                    </ol>
	                </li>
	                <li>
	                    <div class="y_lis">
	                        <img src="/Public/Home/images/ytip_04.png">
	                        形式内容
	                    </div>
	                    <ol class="fix fs y_ol1">
	                        <li>网页设计作为一种视觉语言，非常讲究编排和布局，主页的设计不等同于平面设计，并且因为需要考虑到加载速度的问题，设计要求更高于平面设计。</li>
	                        <li>版式设计可通过文字图形的空间组合，表达出和谐与美。</li>
	                        <li>多页面站点页面的编排设计要求把页面之间的有机联系反映出来，<span>特别要求处理好页面之间和页面内的秩序与内容的关系。</span>为了达到最佳的视觉表现效果，金方时代的设计师将反复推敲整体布局的合理性，使浏览者有一个流畅的视觉体验。</li>
	                    </ol>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <div class="section fp-auto-height">
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

	    </div>
	</div>

</body>
</html>