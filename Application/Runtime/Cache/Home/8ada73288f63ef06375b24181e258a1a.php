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
                anchors: ['page1', 'page2', 'page3', 'page4','page5', 'page6','page7'],
                menu: '#special-menu',
                verticalCentered: !1
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
        <li data-menuanchor="page5"><a href="#page5">&nbsp;</a></li>
        <li data-menuanchor="page6"><a href="#page6">&nbsp;</a></li>
        <li data-menuanchor="page7"><a href="#page7">&nbsp;</a></li>
        <!--<li data-menuanchor="page6"><a href="#page6">&nbsp;</a></li>-->
    </ul>
    <div id="dowebok">
        <div class="section light-marketing-01">
            <div class="center-wrap">
                <img src="/Public/Home/images/light_yx1tp1.png" height="579" width="1380" style="position:absolute;top:50%;left:50%;margin-top:-290px;margin-left:-690px;">
            </div>
        </div>
        <div class="section light-marketing-02">
            <div class="center-wrap">
                <div class="light_marketing_bt1 tc light_color1">
                    <span>理解力</span>
                    understanding
                    <div class="light_hx light_hxl light_borc1"></div>
                    <div class="light_hx light_hxr light_borc1"></div>
                </div>
                <div class="light_marketing_nr1">
                    <img src="/Public/Home/images/light_tp1.png">
                    <div class="light_dian1 light_heidian light_dw1">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">01</span><span class="light_sp2">标志</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw2">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">02</span><span class="light_sp2">核心竞争力</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw3">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">03</span><span class="light_sp2">电话抓潜</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw4">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">04</span><span class="light_sp2">立体式开发</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section light-marketing-03">
            <div class="center-wrap">
                <div class="light_marketing_bt1 tc light_color2">
                    <span>行动力</span>
                    Action force
                    <div class="light_hx light_hxl light_borc2"></div>
                    <div class="light_hx light_hxr light_borc2"></div>
                </div>
                <div class="light_marketing_nr1">
                    <img src="/Public/Home/images/light_tp2.png">
                    <div class="light_dian1 light_huangdian light_dw5">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">05</span><span class="light_sp2">产品展示/推荐</span></div>
                    </div>
                    <div class="light_dian1 light_huangdian light_dw6">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">06</span><span class="light_sp2">促销活动/服务</span></div>
                    </div>
                    <div class="light_dian1 light_huangdian light_dw7">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">07</span><span class="light_sp2">优势展示/选择我们的理由</span></div>
                    </div>
                    <div class="light_dian1 light_huangdian light_dw8">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">08</span><span class="light_sp2">在线留言/表单提交</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section light-marketing-04">
            <div class="center-wrap">
                <div class="light_marketing_bt1 tc light_color1">
                    <span>公信力</span>
                    Credibility
                    <div class="light_hx light_hxl light_borc1"></div>
                    <div class="light_hx light_hxr light_borc1"></div>
                </div>
                <div class="light_marketing_nr1">
                    <img src="/Public/Home/images/light_tp3.png">
                    <div class="light_dian1 light_heidian light_dw9">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">09</span><span class="light_sp2">成功案例</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw10">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">10</span><span class="light_sp2">荣誉展示/好评</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw11">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">11</span><span class="light_sp2">公司介绍/权威</span></div>
                    </div>
                    <div class="light_dian1 light_heidian light_dw12">
                        <div class="light_dian1nwz light_posa"><span class="light_sp1">12</span><span class="light_sp2">新闻资讯</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section light-marketing-05">
            <div class="center-wrap1">
                <div class="light_marketing_bt2 tc">
                    让您的网站跑赢搜索引擎
                    <div>Let your website run win search engine</div>
                    <div class="light_bordert"></div>
                    <div class="light_borderb"></div>
                </div>
                <div class="light_marketing_nr2 tc">
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">整站动态后台，无限量生成HTML页面，有利于搜索引擎的抓取</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">后台操作seo端口，htaccess. robots.txt文件，健康稳定积累网站相关关键词，稳步提升长尾关键词在搜索引擎的自认排名</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">网站主标签关键词设置端口+网站二级页面标签关键词设置端口
    此外搜索引擎抓取的主要依据</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">产品图片，案例图片添ALT属性，便于搜索引擎识别网站里的图片</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">网站栏目名称，网站名称文字化处理，便于搜索引擎的识别</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">网站地图搭建，弥补网站图片和网站栏目图片化不被搜索引擎识别
    的不足</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">linux操作系统，apache的网络服务器，MYSQL数据库，php语言开发网站后台，加强往网站的安全级别</div>
                        </div>
                    </div>
                    <div class="light_dian2">
                        <div class="light_d2hengxian"></div>
                        <div class="light_d2">

                            <div class="light_d2nr">DIV+CSS制作静态页面，符合W3C国际标准</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section light-marketing-06">
            <div class="center-wrap">
                <div class="light_marketing_bt1 tc light_color3">
                    <span>我们的客户</span>
                    our client
                    <div class="light_hx light_hxl light_borc3"></div>
                    <div class="light_hx light_hxr light_borc3"></div>
                </div>
                <div class="light_marketing_nr3">
                    <div class="rollBox">
                        <img onMouseDown="ISL_GoDown()" onMouseUp="ISL_StopDown()" onMouseOut="ISL_StopDown()"  class="img1" src="/Public/Home/images/light_zuojian.png" width="38" height="75" />
                         <div class="Cont" id="ISL_Cont">
                          <div class="ScrCont">
                           <div id="List1">
                            <!-- 图片列表 begin -->
                            <section class="light_casek fl" style="background-image:url(/Public/Home/images/tpbj3.jpg);background-repeat:no-repeat;">
                                <section class="light_casektp">
                                    <img src="/Public/Home/images/tp3.png" height="140" width="247">
                                </section>
                                <header class="light_casekbt">泰洋幕墙集团官网项目</header>
                                <article class="light_caseknr">
                                    企业官网，欧美风格，蓝色
                                </article>
                                <a href="#" class="light_casekyc">
                                    <div class="light_fangdaj">
                                        <img src="/Public/Home/images/fangdajing.png" height="74" width="74">
                                    </div>
                                </a>
                            </section>
                            <section class="light_casek fl" style="background-image:url(/Public/Home/images/tpbj3.jpg);background-repeat:no-repeat;">
                                <section class="light_casektp">
                                    <img src="/Public/Home/images/tp3.png" height="140" width="247">
                                </section>
                                <header class="light_casekbt">泰洋幕墙集团官网项目</header>
                                <article class="light_caseknr">
                                    企业官网，欧美风格，蓝色
                                </article>
                                <a href="#" class="light_casekyc">
                                    <div class="light_fangdaj">
                                        <img src="/Public/Home/images/fangdajing.png" height="74" width="74">
                                    </div>
                                </a>
                            </section>
                            <section class="light_casek fl" style="background-image:url(/Public/Home/images/tpbj3.jpg);background-repeat:no-repeat;">
                                <section class="light_casektp">
                                    <img src="/Public/Home/images/tp3.png" height="140" width="247">
                                </section>
                                <header class="light_casekbt">泰洋幕墙集团官网项目</header>
                                <article class="light_caseknr">
                                    企业官网，欧美风格，蓝色
                                </article>
                                <a href="#" class="light_casekyc">
                                    <div class="light_fangdaj">
                                        <img src="/Public/Home/images/fangdajing.png" height="74" width="74">
                                    </div>
                                </a>
                            </section>
                            <section class="light_casek fl" style="background-image:url(/Public/Home/images/tpbj3.jpg);background-repeat:no-repeat;">
                                <section class="light_casektp">
                                    <img src="/Public/Home/images/tp3.png" height="140" width="247">
                                </section>
                                <header class="light_casekbt">泰洋幕墙集团官网项目</header>
                                <article class="light_caseknr">
                                    企业官网，欧美风格，蓝色
                                </article>
                                <a href="#" class="light_casekyc">
                                    <div class="light_fangdaj">
                                        <img src="/Public/Home/images/fangdajing.png" height="74" width="74">
                                    </div>
                                </a>
                            </section>

                            <!-- 图片列表 end -->
                           </div>
                           <div id="List2"></div>
                          </div>
                         </div>
                        <img  onmousedown="ISL_GoUp()" onMouseUp="ISL_StopUp()" onMouseOut="ISL_StopUp()"  class="img2" src="/Public/Home/images/light_youjian.png" width="38" height="75" />
                    </div>
                    <script language="javascript" type="text/javascript">

                        <!--//--><![CDATA[//><!--
                        //图片滚动列表 mengjia 070816
                        var Speed = 10; //速度(毫秒)
                        var Space = 10; //每次移动(px)
                        var PageWidth = 300; //翻页宽度
                        var fill = 0; //整体移位
                        var MoveLock = false;
                        var MoveTimeObj;
                        var Comp = 0;
                        var AutoPlayObj = null;
                        GetObj("List2").innerHTML = GetObj("List1").innerHTML;
                        GetObj('ISL_Cont').scrollLeft = fill;
                        GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
                        GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
                        AutoPlay();
                        function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval

                        ('document.all.'+objName)}}
                        function AutoPlay(){ //自动滚动
                        clearInterval(AutoPlayObj);
                        AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',5000); //间隔时间
                        }
                        function ISL_GoUp(){ //上翻开始
                        if(MoveLock) return;
                        clearInterval(AutoPlayObj);
                        MoveLock = true;
                        MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
                        }
                        function ISL_StopUp(){ //上翻停止
                        clearInterval(MoveTimeObj);
                        if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
                        Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
                        CompScr();
                        }else{
                        MoveLock = false;
                        }
                        AutoPlay();
                        }
                        function ISL_ScrUp(){ //上翻动作
                        if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj

                        ('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
                        GetObj('ISL_Cont').scrollLeft -= Space ;
                        }
                        function ISL_GoDown(){ //下翻
                        clearInterval(MoveTimeObj);
                        if(MoveLock) return;
                        clearInterval(AutoPlayObj);
                        MoveLock = true;
                        ISL_ScrDown();
                        MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
                        }
                        function ISL_StopDown(){ //下翻停止
                        clearInterval(MoveTimeObj);
                        if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
                        Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
                        CompScr();
                        }else{
                        MoveLock = false;
                        }
                        AutoPlay();
                        }
                        function ISL_ScrDown(){ //下翻动作
                        if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft =

                        GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
                        GetObj('ISL_Cont').scrollLeft += Space ;
                        }
                        function CompScr(){
                        var num;
                        if(Comp == 0){MoveLock = false;return;}
                        if(Comp < 0){ //上翻
                        if(Comp < -Space){
                           Comp += Space;
                           num = Space;
                        }else{
                           num = -Comp;
                           Comp = 0;
                        }
                        GetObj('ISL_Cont').scrollLeft -= num;
                        setTimeout('CompScr()',Speed);
                        }else{ //下翻
                        if(Comp > Space){
                           Comp -= Space;
                           num = Space;
                        }else{
                           num = Comp;
                           Comp = 0;
                        }
                        GetObj('ISL_Cont').scrollLeft += num;
                        setTimeout('CompScr()',Speed);
                        }
                        }
                        //--><!]]>
                    </script>
                    <a href="#" class="light_more1 tc auto mt30">查看更多</a>
                </div>
            </div>
        </div>
        <div class="section light-marketing-07">
            <div class="center-wrap fix">
                <div class="light_market7l fl tc">
                    <div class="light_market7lt">
                        若我们很弱很功利，多说无济于事；<br>
    若我们很强很专注，价值不言自明；
                    </div>
                    <div class="light_market7lt2">
                        <span class="b">7</span>年时间
                    </div>
                    <div class="light_market7lt3 b">
                        <span>6000</span>家合作客户
                    </div>
                    <div class="light_market7lt4 mt5">
                        平均每天有两家公司选择与我们合作！
                    </div>
                    <div class="light_market7lt5 b">
                        <span>原因何在?</span>共鸣！
                    </div>
                    <div class="light_market7lt6 mt5">
                        我们在金方时代等着您
                    </div>
                </div>
                <div class="light_market7r tc fr">
                    <div class="light_market7rt1">
                        网站营销力检测调查
                    </div>
                    <div class="light_market7rt2">
                        提交可免费获得当前网站诊断报告
                    </div>
                    <div class="light_market7rt3">
                        <form>
                            <div class="light_form">
                                <div class="fix mb15 light_form_div">
                                    <input type="text" name="" class="inp-01"/>
                                    <span class="tc">您的网址：</span>
                                </div>
                                <div class="fix mb15 light_form_div">
                                    <input type="text" name="" class="inp-01"/>
                                    <span class="tc">联系人：</span>
                                </div>
                                <div class="fix mb15 light_form_div">
                                    <input type="text" name="" class="inp-01"/>
                                    <span class="tc">联系电话：</span>
                                </div>
                                <div class="fix mb15 light_form_div">
                                    <input type="text" name="" class="inp-01"/>
                                    <span class="tc">邮箱：</span>
                                </div>
                                <div class="fix">
                                    <input type="submit" name="" value="提交" class="btn-s btn-01 fl" />
                                    <input type="reset" name="" value="重置" class="btn-s btn-02 fl ml10" />
                                </div>
                            </div>
                        </form>
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