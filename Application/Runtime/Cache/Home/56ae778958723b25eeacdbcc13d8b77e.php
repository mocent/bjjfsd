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


    <ul id="special-menu">
        <li data-menuanchor="page1" class="active"><a href="#page1">&nbsp;</a></li>
        <li data-menuanchor="page2"><a href="#page2">&nbsp;</a></li>
        <li data-menuanchor="page3"><a href="#page3">&nbsp;</a></li>
        <li data-menuanchor="page4"><a href="#page4">&nbsp;</a></li>
        <!--<li data-menuanchor="page6"><a href="#page6">&nbsp;</a></li>-->
    </ul>
    <div id="dowebok">
        <div class="section w-web-01">
            <div class="center-wrap">

            </div>
        </div>
        <div class="section w-web-02">
            <div class="center-wrap">

            </div>
        </div>
        <div class="section w-web-03">
            <div class="wrap-height rel">
                <div class="web-01 abs"><img src="/Public/Home/images/l_img-30.png" alt=""/></div>
                <div class="web-02 abs"><img src="/Public/Home/images/l_img-31.png" alt=""/></div>
                <div class="web-03 abs"><img src="/Public/Home/images/l_img-32.png" alt=""/></div>
                <div class="web-04 abs"><img src="/Public/Home/images/l_img-33.png" alt=""/></div>
            </div>
        </div>
        <div class="section w-web-04">

        </div>
        <div class="section w-web-05">
            <div class="wrap-height">
                <div class="main">
                    <div class="main-l fl abs tc">
                        <div class="s-1 mb30">
                            <p>庞大的数据库</p>
                            <p>便捷的移动沟通方式</p>
                            <p>根据兴趣爱好推送信息</p>
                        </div>
                        <div class="s-2">
                            <div><span class="f-01 b">7</span><span class="s-4">年时间</span></div>
                            <div class="b s-3">6000<span class="col-02bb00">家合作客户</span></div>
                            <p>平均每天有两家公司选择与我们合作！</p>
                        </div>
                        <div class="s-5 b">
                            <span class="col-02bb00">原因何在?</span>共鸣！
                        </div>
                        <p>平均每天有两家公司选择与我们合作！</p>
                    </div>
                    <div class="main-form fr abs">
                        <div class="fix mb15">
                            <input type="text" name="" class="inp-01 fl"/>
                            <span class="abs t-s">您的网址：</span>
                        </div>
                        <div class="fix mb15">
                            <input type="text" name="" class="inp-01 fl"/>
                            <span class="abs t-s">联系人：</span>
                        </div>
                        <div class="fix mb15">
                            <input type="text" name="" class="inp-01 fl"/>
                            <span class="abs t-s">联系电话：</span>
                        </div>
                        <div class="fix mb15">
                            <input type="text" name="" class="inp-01 fl"/>
                            <span class="abs t-s">邮箱：</span>
                        </div>
                        <div class="fix">
                            <input type="submit" name="" value="提交" class="btn-s btn-01 fl" />
                            <input type="reset" name="" value="重置" class="btn-s btn-02 fl ml10" />
                        </div>
                    </div>
                </div>
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