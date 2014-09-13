(function($){
"use strict";

/* Home Image Height */
var ScrolleFullImage = function(){
  var winHeight = $(window).height();
  $("#home").css({height:winHeight});  
}
/* Home Image Height */
/* Menu Hover Effect */
var ScrolleMenuHover = function(){
  var winWidth = $(window).width();
  if(winWidth > 1279){
    $('#menu #nav li').hover(function(){
      $(this).stop().animate({'width':'176px'});    
    },function(){
      $(this).stop().animate({'width':'60px'});
    });
  }else{
    $('#nav li').css({'width':'100%'}); 
    $('#nav li').hover(function(){
      $(this).stop().animate({'width':'100%'});   
    },function(){
      $(this).stop().animate({'width':'100%'});
    });
  }
  $('.menuopener').click( function(e) {
        e.preventDefault();
        var menuwidth = $('.menulist').width();
        var lastmenuwidth = 60 + menuwidth;
        var toggleWidth = $("#menu-wicon").width() == lastmenuwidth ? "60px" : lastmenuwidth;
        $('#menu-wicon').animate({ width: toggleWidth });
        if($('.menulist').is(':visible')){
          $('.menulist').fadeOut();
        }else{
          $('.menulist').fadeIn();
        }
  });
  $(document).click(function(e) {
      if (e.target.id != 'menu-wicon' && !$('#menu-wicon').find(e.target).length) {
        $('#menu-wicon').stop().animate({'width':'60px'});
        $('.menulist').fadeOut();
      }
  });

  var $root = $('html, body');
  $('#navwicon li a').click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 900);
    $('#navwicon').find('.current').removeClass('current');
    $(this).parent('li').addClass('current');
    jQuery('#menu-wicon').stop().animate({'width':'60px'});
    jQuery('.menulist').fadeOut();
    return false;
  });
}
/* Menu Hover Effect */
/* Tab Start */
var ScrolleTabs = function(){
  $('.tabbed-area a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    $('.tabbed-area').find('.active').removeClass('active');
    $(this).parent().parent('.tab-button').addClass('active');
    
  });
  $('.tabbed-contact a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  $('.panel-style1').click(function(){
    $('.panel-scrolle').find('.panel-style1').removeClass('cllpse-active'); 
    $(this).addClass('cllpse-active');
  });
}
/* Tab Finish */
/* Smooth scroll for anchor links */
var ScrolleScrollForAnchor = function(){
  $('.smooth').bind('click.smoothscroll',function (e) {
      e.preventDefault();
      var target = this.hash,
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 1000, 'swing');
  });
}
/* Smooth scroll for anchor links */
/* Services Hover */
var ScrolleServicesHover = function(){
  $('.services-list li').hover(function(){
    $(this).children('.service-hover-box').stop(0,1).fadeIn({'display':'block'});   
  },function(){
    $(this).children('.service-hover-box').stop(0,1).fadeOut({'display':'none'});
  });
}
/* Services Hover */
/* Parallax */
var ScrolleParallax = function(){
$('.parallax-s').parallax("50%", 0.4);
}
/* Parallax */
var ScrolleCarousels = function(){
$("#comment-list").carouFredSel({
  responsive: true,
  scroll: 1,
  items: 1,
  auto: {
  duration : 800
  },
  prev: '#cprev',
  next: '#cnext',
  swipe: {
    onTouch: true
  },
  pagination: "#bullets"  
});
}
var ScrolleInits = function(){
/* Pretty Photo */
$('.featured-image  a').has('img').addClass('prettyPhoto');
$("a[class^='prettyPhoto']").prettyPhoto();
$('.gallery  a').has('img').attr('rel', 'prettyPhoto[gallery]');
$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
/* Fitvids */
$(".fitvids").fitVids();
$(".fitvids").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
/* Colorbox */
$(".iframe").colorbox({iframe:true, width:"100%", height:"100%"});
$(".portfolio-group").colorbox({rel:'portfolio-group'});  
/* Nivo Slider */
$('#project-slider-wrapper').nivoSlider({
  effect: 'fade',
  controlNav: false
});
}

var portfoliosect = function(){
var $port = jQuery.noConflict();
var container = $port('.portfolio-box'); 
var filter = $port('.portfolio-filters'); 
container.isotope({
    itemSelector : '.item'
});
container.infinitescroll({
    navSelector : '.load-more-button',
    nextSelector : '.load-more-button a',
    itemSelector : '.item',
    errorCallback: function(){
      $port('.load-more-button').remove();              
    },
  },
  function(newElements) {
    var $newElems = $port(newElements);
    $newElems.imagesLoaded(function(){
    container.isotope('appended', $newElems );
    container.isotope('reLayout');
    newCols();
    container.isotope('reLayout');
    });
  }
); 
$port(window).unbind('.infscr'); 
$port(".load-more-button a").click(function(){
    $port('.portfolio-box').infinitescroll('retrieve');
    $port('.load-more-button').show();
    return false;
});
filter.find('a').click(function() {
    var selector = $port(this).attr('data-filter');
    filter.find('a').removeClass('active');
    $port(this).addClass('active');
    container.isotope({ 
        filter: selector,
        animationOptions:{
          animationDuration: 400,
          queue: false
        }
    });
    return false;
});
function colType() { 
  if (jQuery('.mini-menu').length > 0) {
  var menuSize = 60;
  }else{
    menuSize = 0;
  }
  var winWidthfP = $(window).width() - menuSize,
  colNumber = 1;
  if (winWidthfP > 1200) {
  colNumber = 4;
  } else if (winWidthfP > 767) {
  colNumber = 3;
  } else if (winWidthfP > 480) {
  colNumber = 1;
  } 
  return colNumber;
}
function newCols() { 
  if (jQuery('.mini-menu').length > 0) {
  var menuSize = 60;
  }else{
    menuSize = 0;
  }
  var winWidthfP = $(window).width() - menuSize,
  colNumber = colType(), 
  itemWdt = Math.floor(winWidthfP / colNumber);

  container.find('.item').each(function () { 
  $(this).css( { 
  width : itemWdt + 'px' 
  });
  });
}
$port(window).bind('resize', function () { 
  newCols();
  container.isotope('reLayout');     
});
container.imagesLoaded(function () { 
  newCols();
  container.isotope('reLayout');
});
}

jQuery(document).ready(function($){

ScrolleFullImage();
ScrolleMenuHover();
ScrolleTabs();
ScrolleScrollForAnchor();
ScrolleServicesHover();
ScrolleParallax();
ScrolleCarousels();
ScrolleInits();
//flex slider for fittext
$('.flexslider').flexslider({
  animation: "fade",
  directionNav: true
});
//flex slider for fittext
$("#slider ul li p").fitText(0.8);
$("#half-slider ul li p").fitText(1.2, { minFontSize: '20px', maxFontSize: '70px' });
$(".page-header h1").fitText(1.2, { minFontSize: '20px', maxFontSize: '70px' });
$(".fit-text").fitText(1.2, { minFontSize: '20px', maxFontSize: '90px' });
$(".fit-texts").fitText(1.2, { minFontSize: '20px', maxFontSize: '40px' });
$(window).smartresize(function(){  
  $("#slider ul li").fitText(0.8);
  $("#half-slider ul li p").fitText(1.2, { minFontSize: '20px', maxFontSize: '70px' });
});
});

jQuery(window).load(function($) {
/* Loading Area */
jQuery('#loading-area').fadeOut().remove();
portfoliosect();

/* Team Carousel */
var prep,appe;
var wi = jQuery(window).width();
if (wi <= 1200){
  prep = 3;
  appe = 3;
}
else {
  prep = 2;
  appe = 2;
}
var car = jQuery('#team-list');
for ( var a = 0; a < prep; a++ ) {
  car.prepend( '<li class="emptyl">' );
}
for ( var a = 0; a < appe; a++ ) {
  car.append( '<li class="emptyr">' );
}
car.carouFredSel({
  circular: false,
  infinite: false,
  width: '100%',
  items: 7,
  prev: '#customer-prev',
  next: '#customer-next',
    auto: false,
    scroll: {
      items: 1,
      duration: 1000
    }
});

});
})(jQuery);