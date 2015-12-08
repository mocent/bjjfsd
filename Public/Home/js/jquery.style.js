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
    $('.y_ul1 > li').hover(function(){
        $(this).addClass('xz');
        //$(this).stop(true,false).animate({'marginTop':0},700);
        $(this).find('.y_ol1').stop(true,false).show();
    },function(){
        //$(this).stop(true,false).animate({'marginTop':180},700);
        $(this).find('.y_ol1').stop(true,false).hide();
        var index=$(this).index();
        setTimeout(function(){
            $(".y_ul1 > li").eq(index).removeClass('xz');
        },100)
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
}

//招聘弹框
function showInBg() {
    $("#InBg").fadeIn();
    $("#InBg").removeClass('hideSweetAlert').addClass('showSweetAlert');
}
function closeInBg(){
    $("#InBg").fadeOut(200).addClass('hideSweetAlert');

}
