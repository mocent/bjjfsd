<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=1200px, user-scalable=no">
    <title><?php echo ($meta_title); ?></title>
	<meta name="keywords" content="<?php echo ($meta_keywords); ?>">
	<meta name="description" content="<?php echo ($meta_description); ?>">
    <link rel="stylesheet" href="/Public/Home/css/common.css" />
    <link rel="stylesheet" href="/Public/Home/css/index.css" />
    <script src="/Public/Home/js/jquery-1.9.1.min.js"></script>
    <script language="javascript" src="/Public/Home/js/js.js"></script>
    <script language="javascript" src="/Public/Home/js/lanrentuku.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="/Public/Home/js/html5shiv.min.js"></script>
    <script src="/Public/Home/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fw">
    <section class="index_xf">
        <?php $_result=get_lists(20, '', 3);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="index_xf1">
                <div class="index_xfnr1">
                    <img src="/Public/Home/images/xftb1.png" height="37" width="39"><?php echo ($val['title']); ?>
                </div>
                <div class="index_xfnr2 fix">
                    <div class="index_xfnr2l fl">
                        <img src="/Public/Home/images/xftb1.png" width="48">
                    </div>
                    <div class="index_xfnr2r fr">
                        <?php echo ($val['title']); ?>
                        <span><?php echo array_shift(explode(' ', $val['extends']['field_1']));?></span>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <a href="<?php echo ($CATEGORYS[20]['url']); ?>" class="index_xf1">
            <div class="index_xfnr1">
                <img src="/Public/Home/images/xftb2.png" height="37" width="39">在线咨询
            </div>
        </a>
        <a href="javascript:void(0);" class="index_xf1">
            <div class="index_xfnr1">
                <img src="/Public/Home/images/xftb3.png" height="37" width="39">vip服务
            </div>
        </a>
    </section>
    <section class="top xz1">
        <img src="/Public/Home/images/light_xinjiajian.png" class="jiantou">
        <div id="slideBox" class="slideBox">
            <div class="hd">
                <ul>
                    <?php $_result=get_banner(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="bd">
                <ul>
                    <?php $_result=get_banner(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($val['url']); ?>"><img src="<?php echo thumb($val['image']);?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
        jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true,delayTime:500,easing:"easeOutCirc",interTime:4000});
        </script>
        <section class="navw xz2 trans navpos">
            <nav class="nav auto w">
                <a href="./" class="logo">
                    <img src="/Public/Home/images/logo2.png" height="76" class="logo1" title="<?php echo C('WEB_SITE_TITLE');?>">
                </a>
                <ul class="ul fix">
                    <li class="fl"><a href="./" class="xz">首 页</a></li>
        			<?php if(is_array($NAVS)): $i = 0; $__LIST__ = $NAVS;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li class="fl"><a href="<?php echo ($val['url']); ?>" <?php if(($val['action']) == "1"): ?>class="xz"<?php endif; ?>><?php echo msubstr($val['title'],0,2,'utf8','');?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
        </section>
    </section>
    <!-- top end -->
    <section class="service wb light_indexbj">
        <section class="service1 w">
            <header class="servbt trans fw tc">我们的服务</header>
            <article class="servnr1 trans tc pt5">
                <img src="/Public/Home/images/wztp1.png">
            </article>
            <section class="sernr">
                <section class="sernr11 fix">
                <?php $_result=get_category(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><section class="serk1 fl">
                        <header class="serk1bt fix">
                            <img src="/Public/Home/images/tb<?php echo ($i); ?>.png" class="fl">
                            <section class="serkr fw fl"><span><?php echo ($val['english']); ?></span><?php echo ($val['title']); ?></section>
                        </header>
                        <article><?php echo msubstr($val['description'], 0, 40);?></article>
                        <a href="<?php echo ($val['url']); ?>" class="serk1a trans2 mt15">查看详情</a>
                    </section><?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
            </section>
        </section>
    </section>
    <section class="case wb light_indexbj">
        <section class="casebj"><img src="/Public/Home/images/hsbtm.png"></section>
        <section class="case1 w">
            <header class="servbt trans fw tc white">我们的案例</header>
            <article class="servnr1 trans tc pt5 white">
                <img src="/Public/Home/images/wztp2.png">
            </article>
            <nav class="casenav">
                <ul class="casenav1 fw">
                    <?php $_result=C('SERVER_LIST');if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Index/lists', array('catid'=>2, 'server'=>$key));?>"><?php echo ($val); ?></a></li>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
        </section>

    </section>
    <section class="casemain light_indexbj">
        <section class="casemain1 fix">
            <?php $_result=get_product_position('position_1', 0,4);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><section class="casek fl trans" style="background-image:url(/Public/Home/images/tpbj<?php echo ($i); ?>.jpg);background-repeat:no-repeat;">
                    <section class="casektp">
                        <img src="<?php echo thumb($val['thumb_tw']);?>" height="140" width="247">
                    </section>
                    <header class="casekbt"><?php echo msubstr($val['title'],0,15);?></header>
                    <article class="caseknr"><?php echo msubstr($val['description'],0,21);?></article>
                    <a href="<?php echo ($val['url']); ?>" class="casekyc">
                        <div class="fangdaj">
                            <img src="/Public/Home/images/fangdajing.png" height="74" width="74">
                        </div>
                    </a>
                </section><?php endforeach; endif; else: echo "" ;endif; ?>
        </section>
    </section>
    <section class="liucheng wb light_indexbj">
        <section class="liucheng1 w">
            <header class="servbt trans fw tc">建站流程</header>
            <article class="servnr1 trans tc pt5">
                <img src="/Public/Home/images/wztp3.png">
            </article>
            <section class="liucmain fw fix">
                <section class="lck fl trans">
                    <header class="lckbt">深入沟通与专业策划</header>
                    <article>
                        前期由专业的客户经理针对您的网站功能需求进行深入的分析，并提出专业可实施的网站建设解决方案。
                    </article>
                </section>
                <section class="lck fl trans">
                    <header class="lckbt">精心原创的设计方案</header>
                    <article>
                        行业资深的网页设计师根据您的意向需求，进行原创设计，用设计提升产品和企业价值。
                    </article>
                </section>
                <section class="lck fl trans">
                    <header class="lckbt">严谨规范的前端制作</header>
                    <article>
                        最新的H5代码规范编写，使您的网站更易于优化，多终端兼容，生动形象的动画交互，增强用户体验。
                    </article>
                </section>
                <section class="lck fl trans">
                    <header class="lckbt">后端工程师定制开发</header>
                    <article>
                        根据您的网站项目需求量身定制开发后台，严格的测试，后台操作培训，最终交付给客户产品使用上线。
                    </article>
                </section>
            </section>

        </section>
    </section>
    <section class="jianzhan wb light_indexbj">
        <section class="w">
            <h3 class="jzbt trans db auto tc">建站指南</h3>
            <section class="zhinanmain fw fix">
                <section class="znk fl trans">
                    <img src="/Public/Home/images/xtb1.png" height="44" width="46">
                    <header class="znkbt">良好的搜索引擎</header>
                    <article class="znkxx">Good search engine</article>
                </section>
                <section class="znk fl trans">
                    <img src="/Public/Home/images/xtb2.png" height="44" width="46">
                    <header class="znkbt">定制化自主开发</header>
                    <article class="znkxx">Customized self development</article>
                </section>
                <section class="znk fl trans">
                    <img src="/Public/Home/images/xtb3.png" height="44" width="46">
                    <header class="znkbt">无任何隐藏费用</header>
                    <article class="znkxx">No hidden fees</article>
                </section>
                <section class="znk fl trans">
                    <img src="/Public/Home/images/xtb4.png" height="44" width="46">
                    <header class="znkbt">完善的售后服务</header>
                    <article class="znkxx">Perfect after-sales service</article>
                </section>
            </section>
        </section>
    </section>
    <section class="hezuo wb light_indexbj">
        <section class="hezuobj"><img src="/Public/Home/images/hsbtm.png"></section>
        <section class="hezuo1 w">
            <header class="servbt fw tc white trans">我们的客户</header>
            <article class="servnr1 tc pt5 white trans">
                <img src="/Public/Home/images/wztp4.png">
            </article>
            <a href="<?php echo U('Index/lists', array('catid'=>18));?>" class="hza tc white trans2">客户的好评</a>
            <section class="hezuomain tc fix">
            <?php $_result=get_banner(3, 18);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="<?php echo ($val['url']); ?>" class="trans3">
                    <img src="<?php echo thumb($val['image']);?>" height="132" width="199" class="img1">
                    <img src="<?php echo thumb($val['image2']);?>" height="132" width="199" class="img2">
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
            </section>

        </section>

    </section>
    <section class="team wb light_indexbj">
        <section class="teamnr">
            <section class="team1">
                <img src="/Public/Home/images/tdtpz.png" height="203" width="719" class="tdtpz">
                <section class="teamsec1 fix">
                <?php $_result=get_banner(2, 96);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><a href="javascript:void(0);"><img src="<?php echo thumb($val['image'],300,300);?>" class="trans4"></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
                <section class="teamsec1nr posr">
                    <header class="servbt fw tc trans">我们的团队</header>
                    <article class="servnr1 tc pt5 trans">
                        <img src="/Public/Home/images/wztp5.png">

                    </article>
                </section>
            </section>
        </section>
    </section>
    <footer class="wb footer footerts">
    <section class="footertop">
        <section class="footertop1 w">
            <section class="footertop11  ovh fix">
			<?php $_result=get_lists(20, '', 3);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="footert1 fl">
                    <img src="/Public/Home/images/phone.png" height="49" width="49" class="fl">
                    <div class="fl">
                        <span><?php echo ($val['title']); ?>咨询热线：</span>
                        <?php echo array_shift(explode(' ', $val['extends']['field_1']));?>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
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