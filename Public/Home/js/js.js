// JavaScript Document
$(function(){
  
  
  
   

  var wh;//屏幕高
  
  var jishu=0;
  $('.top').removeClass('xz1');
  setTimeout(function(){
     $('.navw').removeClass('xz2');
     setTimeout(function(){
      $('.navw').removeClass('trans');
     },1000)
  },200)
  $('.top').addClass('xz');
	function _resize(){

    light_indextop=[];
    $('.light_indexbj').each(function(i){
      
      // if(i==2){
      //   light_indextop[i]=parseInt($(this).offset().top);
      // }
      // else if(i==4){
      //   light_indextop[i]=parseInt($(this).offset().top)+200;
      // }
      // else if(i==5){
      //   light_indextop[i]=parseInt($(this).offset().top);
      // }
      // else{
        light_indextop[i]=parseInt($(this).offset().top)-400;
     // }
    })
    wh=parseInt($(window).height());
    var ww=parseInt($(window).width());
    
    $('.top').height(wh);
    $('.team,.team1').css({'width':ww+'px','height':ww/12*6+'px'});
    $('.tdtpz').css({'width':ww/2+'px','height':ww/6+'px','margin-top':-(ww/12)+'px','margin-left':-ww/4+'px'});
    $('.teamsec1 a').css({'width':ww/12+'px','height':ww/12+'px'});
    $('.teamsec1nr').css('padding-top',(ww/12*6-366)/2+'px');
  }
 _resize();
 $(window).resize(function(){
  _resize();
 })
 


 
  var len1=light_indextop.length;
$(window).scroll(function(){
  var scr=$(window).scrollTop();
  
  
  if(scr>wh){
    if(jishu==0){
      $('.top').removeClass('xz');
      $('.navw,.nav').css({'height':'60px'});
      $('.navw').css({'position':'fixed','top':'-60px'});
      $('.navw').animate({'top':'0px'},150)
      $('.logo img').css({'height':'52px'});
      $('.logo').css({'margin-top':'-26px'});
      jishu=1;
    }
  }
  if(scr<wh){
    if(jishu==1){
      $('.top').addClass('xz');
      $('.navw,.nav').css({'height':'135px'});
      $('.navw').css({'position':'absolute'});
      $('.logo img').css({'height':'76px'});
      $('.logo').css({'margin-top':'-38px'});
      $('.navw').animate({'top':wh-150+'px'},150)
      jishu=0;
    }
  }
  for(var i=0;i<len1;i++){
    if(scr>light_indextop[i]){
      $('.light_indexbj').eq(i).addClass('xz');
    }
   
  }
  
  // if(scr>light_indextop[0]){
     
    
  //     $('.service .sernr').addClass('xz');
  //     // $('.service').animate({'marginTop':'0px'},150,function(){
  //     //   $('.service .servbt').animate({'marginTop':'0px'},150,function(){
  //     //     
  //     //     $('.service .servnr1').animate({'marginTop':'0px'},150,function(){
            
  //     //       $('.service .sernr').animate({'marginTop':'0px'},150)
            
  //     //     })
  //     //   })
  //     // })
  
  // }
  // if(scr<light_indextop[0]){
  //   $('.service .sernr').removeClass('xz');
  // }

  // // if(scr<40){
  // //   jishu2=2;
  // //   if(jishu2==2){
  // //    jishu2=3;
  // //   $('.service .service,.service .servbt,.service .servnr1,.service .sernr').stop(true,true).animate({'margin-top':'20px'},100,function(){
  // //     jishu2=0;

  // //   });
    
  // //   }
    
  // // }
  // if(scr>1000){
     
  //   if(jishu3==0){
  //     jishu3=1;
      
  //     // $('.case .servbt').animate({'marginTop':'0px'},150,function(){
        
  //     //   $('.case .servnr1').animate({'marginTop':'0px'},150,function(){
          
  //     //     $('.casenav').animate({'marginTop':'0px'},150,function(){
  //     //      $('.casemain').animate({'marginTop':'-260px'},150)
  //     //     })
           
  //     //   })
  //     // })
     
  //   }
  // }

  // // if(scr<460){
  // //   jishu3=2;
  // //   if(jishu3==2){
  // //    jishu3=3;
  // //   $('.case .servbt,.case .servnr1,.case .casenav').stop(true,true).animate({'margin-top':'20px'},100,function(){
      
  // //     $('.casemain').stop(true,true).animate({'marginTop':'-60px'},100,function(){
  // //       jishu3=0;
  // //     })
  // //   });
    
  // //   }
    
  // // }
  // if(scr>1400){
     
  //   if(jishu4==0){
  //     jishu4=1;
      
  //     // $('.liucheng .servbt').animate({'marginTop':'0px'},150,function(){
        
  //     //   $('.liucheng .servnr1').animate({'marginTop':'0px'},150,function(){
  //     //     $('.liucheng .liucmain').animate({'marginTop':'0px'},150,function(){
  //     //       $('.liucheng .jzbt').animate({'marginTop':'0px'},150,function(){
  //     //         $('.liucheng .zhinanmain').animate({'marginTop':'0px'},150)
  //     //       });
  //     //     });
         
          
  //     //   })
  //     // })
     
  //   }
  // }

  // // if(scr<1160){
  // //   jishu4=2;
  // //   if(jishu4==2){
  // //    jishu4=3;
  // //   $('.liucheng .servbt,.liucheng .servnr1,.liucheng .liucmain,.liucheng .jzbt,.liucheng .zhinanmain').stop(true,true).animate({'margin-top':'20px'},100,function(){
  // //     jishu4=0;
     
  // //   });
    
  // //   }
    
  // // }
  // if(scr>2070){
     
  //   if(jishu5==0){
  //     jishu5=1;
      
  //     // $('.hezuo .servbt').animate({'marginTop':'0px'},150,function(){
        
  //     //   $('.hezuo .servnr1').animate({'marginTop':'0px'},150,function(){
  //     //     $('.hezuo .hezuomain').animate({'marginTop':'0px'},150);
         
          
  //     //   })
  //     // })
     
  //   }
  // }

  // // if(scr<1770){
  // //   jishu5=2;
  // //   if(jishu5==2){
  // //    jishu5=3;
  // //   $('.hezuo .servbt,.hezuo .servnr1,.hezuo .hezuomain').stop(true,true).animate({'margin-top':'20px'},100,function(){
  // //     jishu5=0;
     
  // //   });
    
  // //   }
    
  // // }
  // if(scr>2270){
     
  //   if(jishu6==0){
  //     jishu6=1;
      
  //     // $('.team .servbt').animate({'marginTop':'0px'},150,function(){
        
  //     //   $('.team .servnr1').animate({'marginTop':'0px'},150,function(){
  //     //     $('.team .jzbt').animate({'marginTop':'0px'},150);
         
          
  //     //   })
  //     // })
     
  //   }
  // }

  // // if(scr<2270){
  // //   jishu6=2;
  // //   if(jishu6==2){
  // //    jishu6=3;
  // //   $('.team .servbt,.team .servnr1,.team .jzbt').stop(true,true).animate({'margin-top':'20px'},100,function(){
  // //     jishu6=0;
     
  // //   });
    
  // //   }
    
  // // }
})

$('.jiantou').click(function(){
  $('html,body').animate({'scrollTop':wh+1+'px'},800);

})

$('.casek').hover(function(){
  $(this).find('.casekyc').stop(true,false).fadeToggle();
})


$('.casemain1').eq(0).show();
$('.casenav1 li').click(function(){
  var i=$(this).index();
  $('.casemain1').eq(i).fadeIn().siblings('.casemain1').fadeOut();

})
$('.hezuomain a').hover(function(){
  $(this).find('.img1').stop(true,false).fadeToggle(200);
})


$('.teamsec1 a').each(function(){
  $(this).append('<span class="bsbtm"></span>');
})
  function team(){
    
    for(var i=0;i<5;i++){
      var ii=Math.floor(Math.random()*(12*6));
      $('.teamsec1 a').eq(ii).addClass('xz').children('span').fadeOut(500);
    }
    
  }
  team();
  setInterval(function(){
    $('.teamsec1 a').removeClass('xz').children('span').show();
    setTimeout(function(){
      team();
    },1)
  },5000)



  $('div.index_xf1').hover(function(){
    $(this).children('.index_xfnr1').stop(true,true).fadeOut();
    $(this).children('.index_xfnr2').stop(true,false).animate({'right':'0px'},1000);
  },function(){
    $(this).children('.index_xfnr1').stop(true,true).fadeIn();
    $(this).children('.index_xfnr2').stop(true,false).animate({'right':'-220px'},1000);
  })

  
}) 