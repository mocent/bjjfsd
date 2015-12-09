// JavaScript Document
$(function(){
 var ww=parseInt($(window).width());
 $(window).resize(function(){
  ww=parseInt($(window).width());
 })
 var tim;
 var i=0;
 var m=$('.ind_b1').html();
 $('.ind_b').eq(0).addClass('xzz');
 $('.index_bnav li').eq(0).addClass('xzz');
 $('.index_b').append('<div class="ind_b ind_b1">'+m+'</div>');
 function gun(){
  i++;
  if(i==5){
    
    $('.index_b').stop(true,false).animate({'margin-left':-i*ww+'px'},500,function(){
      $('.index_b').css({'margin-left':'0px'});
    });
    i=0;
    

  }
  else{
    $('.index_b').stop(true,false).animate({'margin-left':-i*ww+'px'},500);
  }
  $('.ind_b').eq(i).addClass('xzz').siblings('.ind_b').removeClass('xzz');
  $('.index_bnav li').eq(i).addClass('xzz').siblings('li').removeClass('xzz');
 }
 tim=setInterval(function(){
  gun();
 },7500)

 $('.index_bnav li').hover(function(){
    i=$(this).index();
    if(i==5){
    
    $('.index_b').stop(true,false).animate({'margin-left':-i*ww+'px'},500,function(){
      $('.index_b').css({'margin-left':'0px'});
    });
    i=0;
    

  }
  else{
    $('.index_b').stop(true,false).animate({'margin-left':-i*ww+'px'},500);
  }
  $('.ind_b').eq(i).addClass('xzz').siblings('.ind_b').removeClass('xzz');
  $('.index_bnav li').eq(i).addClass('xzz').siblings('li').removeClass('xzz');
    clearInterval(tim);
 },function(){
  tim=setInterval(function(){
      gun();
     },7500)
 })
}) 