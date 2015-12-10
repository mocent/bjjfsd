$(document).ready(function(){
    //-----------------Z.
    $('.z-mod6 .a_1').click(function(){
        $(this).addClass('on_1').siblings().removeClass('on_1');
    })
    $('.z-mod6 .a_2').click(function(){
        $(this).addClass('on_2').siblings().removeClass('on_2');
    })
    $('.z-mod7 .mod7-c2 .a_1').click(function(){
        $(this).addClass('on_1').siblings('.a_2').removeClass('on_2');
    })
    $('.z-mod7 .mod7-c2 .a_2').click(function(){
        $(this).addClass('on_2').siblings('.a_1').removeClass('on_1');
    })

    //招聘弹框
    $('.showInBg').click(function(){
        var dataTag = $(this).find("data");
        $("#InBg .z-title").html(dataTag.attr("value"));
        $("#InBg .mr30").html(dataTag.html());
        showInBg()
    })

    //-----------------W.
    //联系我们搜索
    y_select($(".y_select"));
    var dingwei1=-2478;
    var ii=0;
    var timer=null;
    $('.y_ul1 > li').hover(function(){

        $(this).addClass('xz');
        //$(this).stop(true,false).animate({'marginTop':0},700);
        $(this).find('.dwxl').stop(true,false).fadeIn(400);
        $('.dwxjdiv1,.dwxjbj').stop(true,false).fadeIn(400);
        var i=$(this).index();
        var dingwei2=dingwei1+i*300;
        if(ii==0){
            $('.dwxjbj').css({'left':dingwei2+'px'});
            
            ii=1;
        }
        else{
            $('.dwxjbj').animate({'left':dingwei2+'px'},400);
        }
        clearTimeout(timer);
        
        
    },function(){
        //$(this).stop(true,false).animate({'marginTop':180},700);
        $(this).find('.dwxl').stop(true,false).stop(true,false).fadeOut();
        $('.dwxjdiv1,.dwxjbj').fadeOut();
        var index=$(this).index();
        setTimeout(function(){
            $(".y_ul1 > li").eq(index).removeClass('xz');
        },100)
    })
    $('.dwxjdiv').mouseout(function(){
        timer=setTimeout(function(){
            ii=0;
        },1000)
    })


    $('.yuuu1 li').each(function(){
        var imgWidth = $(this).find('img').width();
        var imgHeight = $(this).find('img').height();
        $(this).hover(function(){
            $(this).find('img').stop(true,false).animate({'width':imgWidth+5,'height':imgHeight+5},1000)
        },function(){
            $(this).find('img').stop(true,false).animate({'width':imgWidth,'height':imgHeight},1000)
        })
    })

    //-----------------L.
    //wrap-height
    setTimeout(function(){
        $('.center-wrap').each(function(){
            $(this).css('margin-top',-($(this).outerHeight()-100)/2);
        })

        $('.w-response-03 .w-resp-02 ul li').hover(function(){
            $(this).addClass('hover-s')
        },function(){
            $(this).removeClass('hover-s')
        })
    },100)

    //--------------------------LIANG
    $('.light_dian1').each(function(){
        $(this).append('<div class="light_h light_posa"></div><div class="light_s light_posa"></div>')
    })

    $('.light_dian2:odd').addClass('xz2').find('.light_d2nr').before('<div class="light_d2bt"></div>');
    $('.light_dian2:even').addClass('xz1').find('.light_d2nr').after('<div class="light_d2bt"></div>');
    $('.light_dian2').each(function(i){
        $(this).css({'top':13*i+"%"});
        $(this).find('.light_d2bt').text('0'+(i+1));

    })
    $('.light_d2nr').each(function(){
        var i=$(this).height();
        $(this).css('margin-top',(100-i)/2+'px');
    })
    $('.light_casek').hover(function(){
        $(this).find('.light_casekyc').stop(true,false).fadeToggle();
    })

})


//联系我们搜索
function y_select(select) {
    for (var i = 0; i < select.length; i++) {
        select.eq(i).find("input").attr("value", select.eq(i).find(".selected").attr("title"));
        // var txt = select.eq(i).find(".selected a").html();
        var txt = select.eq(0).find("a").html();
        if (txt == null) txt = "网站建设";
        select.eq(i).find("span").html(txt);
        $("#ShowType").val(txt);
    }

    $(".y_select span").click(function (event) {
        $(this).parent().find('ul').fadeIn(0);
    });

    $(".y_select ul").mouseover(function (event) {
        $(this).fadeIn(0);
    });

    $(".y_select").mouseout(function (event) {
        $(this).find("ul").fadeOut(1);
    });

    $(".y_select .option").click(function (event) {
        $(this).parent().fadeOut(0);
        $(this).parent().parent().find('input').attr("value", $(this).attr("title"));
        $(this).parent().parent().find('span').html($(this).find("a").html());
    });



    // 案例底部a划过效果。
    $('.y_you a').eq(0).hover(function(){
        $(this).parents('.y_you').toggleClass('dw1');
    })

    //专题页面的悬浮导航
    $('.xjul li a').hover(function(){
        $(this).find('img').fadeToggle(300);
    })


    //contact 页面的
    $('.light_textareaa').focus(function(){
        if($(this).text()=='您的要求'){
            $(this).text('');
        }
    
    })
    $('.light_textareaa').blur(function(){
        if($(this).text()==''){
            $(this).text('您的要求');
        }
    
    })


    // 导航小动画
    $('.ul>li>a').hover(function(){
        $(this).children('.index_sp1').animate({'top':'-20px'},200);
        $(this).children('.index_sp2').animate({'top':'0px'},200);
        $(this).children('span').children('span').stop(true,false).fadeToggle(200);
    },function(){
        $(this).children('.index_sp1').animate({'top':'0px'},200);
        $(this).children('.index_sp2').animate({'top':'20px'},200);
        $(this).children('span').children('span').stop(true,false).fadeToggle(200);
    })
    
}

//招聘弹框
function showInBg() {
    $("#InBg").fadeIn();
    $("#InBg").removeClass('hideSweetAlert').addClass('showSweetAlert');
}
function closeInBg(){
    $("#InBg").fadeOut(200).addClass('hideSweetAlert');

}




