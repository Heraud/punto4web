include("sliderfancy/js/jquery.color.js");
include("sliderfancy/js/jquery.backgroundpos.js");
include("sliderfancy/js/jquery.easing.js");
include("sliderfancy/js/jquery.mousewheel.js");
include("sliderfancy/js/jquery.fancybox-1.3.4.pack.js");
include("sliderfancy/js/jquery-ui-1.8.11.custom.min.js");
include("sliderfancy/js/cScroll.js");
include("sliderfancy/js/googleMap.js");
include("sliderfancy/js/superfish.js");
include("sliderfancy/js/switcher.js");
include("sliderfancy/js/bgStretch.js");
include("sliderfancy/js/sImg.js");

include("sliderfancy/js/MathUtils.js");
include("sliderfancy/js/jquery.cycle.all.min.js");

function include(url) {
    document.write('<script src="' + url + '"></script>');
}
var MSIE = false, content;

function addAllListeners() {
    $('.search, .readMore, .readMore2').hover(
        function(){
            if (!$(this).hasClass('active'))
                $(this).stop().animate({'backgroundPosition':'center bottom'},350,'easeOutExpo');
        },
        function(){
            if (!$(this).hasClass('active'))
                $(this).stop().animate({'backgroundPosition':'center top'},500,'easeOutExpo');
        }
    );
    $('#prev,.prev').hover(
        function(){
            $(this).children('span').stop().animate({'backgroundPosition':'right center'},350,'easeOutExpo');
        },
        function(){
            $(this).children('span').stop().animate({'backgroundPosition':'left center'},500,'easeOutExpo');
        }
    );
    $('#next,.next').hover(
        function(){
            $(this).children('span').stop().animate({'backgroundPosition':'left center'},350,'easeOutExpo');
        },
        function(){
            $(this).children('span').stop().animate({'backgroundPosition':'right center'},500,'easeOutExpo');
        }
    );
    var mar1 = $('.list4>li>a').css('marginLeft');
    $('.list4>li>a').hover(
        function(){
            $(this).stop().animate({'marginLeft':'24px'},350,'easeOutExpo');
        },
        function(){
            $(this).stop().animate({'marginLeft':mar1},500,'easeOutExpo');
        }
    );
	$('.list7>li>a')
    .find('strong').css('top','200px').end()
    .hover(
        function(){
            if (!MSIE){
                $(this).children('.sitem_over').css({display:'block',opacity:'0'}).stop().animate({'opacity':1}).end() 
                .find('strong').css({'opacity':0}).stop().animate({'opacity':1,'top':'0'},350,'easeInOutExpo');
            } else { 
                $(this).children('.sitem_over').stop().show().end()
                .find('strong').stop().show().css({'top':'0'});
            }
        },
        function(){
            if (!MSIE){
                $(this).children('.sitem_over').stop().animate({'opacity':0},1000,'easeOutQuad',function(){$(this).children('.sitem_over').css({display:'none'})}).end()  
                .find('strong').stop().animate({'opacity':0,'top':'200px'},1000,'easeOutQuad');  
            } else {
                $(this).children('.sitem_over').stop().hide().end()
                .find('strong').stop().hide();
            }            
        }
    );
}

$(document).ready(ON_READY);
function ON_READY() {
    /*SUPERFISH MENU*/   
    $('.menu #menu').superfish({
	   delay: 800,
	   animation: {
	       height: 'show'
	   },
       speed: 'slow',
       autoArrows: false,
       dropShadows: false
    });
    
    function shuttleOver(_shuttle){
        _shuttle.stop().animate({'backgroundColor':'#88b300'},350,'easeOutExpo');
    }
    function shuttleOut(_shuttle){
        _shuttle.stop().animate({'backgroundColor':'#00398e'},500,'easeOutCubic');
    }
    $('.scroll').cScroll({
        duration: 500,
        easing: 'easeOutExpo',
        step: '250px',
        hoverIn: function (_shuttle){ shuttleOver(_shuttle); },
        hoverOut: function (_shuttle){ shuttleOut(_shuttle); }
    });
}

$(window).load(function () {
    MSIE = ($.browser.msie) && ($.browser.version <= 8);
    $('.spinner').fadeOut();
    
    var val = $('#formSearch input').attr('value');
    $('#formSearch input').focusin(function (){
       $('#formSearch input').attr('value',''); 
    });
    $('#formSearch input').focusout(function (){
        if ($(this).attr('value') == '') {
            $('#formSearch input').attr('value',val); 
        }
    });
    
    if ($('.slogans').length) {
        $('.slogans').cycle({
            fx: 'fade',
            speed: 1000,
    		timeout: 0,              
    		easing: 'swing',
    		cleartypeNoBg: true,
            rev:0,
            startingSlide: 0,
            wrap: true,
            next: '#next',
    		prev: '#prev'
  		})}
    if ($('#page_home .slider').length) {
        $('#page_home .slider').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,
            next: '.s1 .next',
    		prev: '.s1 .prev',               
    		easing: 'easeOutCubic',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})}
    if ($('#page_about .slider').length) {
        $('#page_about .slider').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,
            next: '.s2 .next',
    		prev: '.s2 .prev',               
    		easing: 'easeOutCubic',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})}
    if ($('#page_admissions .slider').length) {
        $('#page_admissions .slider').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,
            next: '.s3 .next',
    		prev: '.s3 .prev',               
    		easing: 'easeOutCubic',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})}
    if ($('#page_gallery .slider').length) {
        $('#page_gallery .slider').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,
            next: '.s4 .next',
    		prev: '.s4 .prev',               
    		easing: 'easeOutCubic',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})};
    if ($(".blog_slider").length) {
        $('.blog_slider').cycle({
            fx: 'scrollHorz',
            speed: 600,
    		timeout: 0,              
    		easing: 'easeOutCubic',
    		cleartypeNoBg: true ,
            rev:0,
            startingSlide: 0,
            wrap: true
  		})
    };
    
    var ind = 0;
    var len = $('.nav_box a').length;
    $('.nav_box a').each(function (ind){ $(this).attr('data',ind); })
    .bind('click',function(){
        ind = parseInt($(this).attr('data'));
        $('.nav_box a').each(function(index,elem){if (index!=(ind)){$(elem).removeClass('active').trigger('mouseleave');}});
        $(this).addClass('active');
        $('.blog_slider').cycle(ind);
        return false;
    });
    
    $('.list7>li>a').attr('rel','appendix')
    .prepend('<span class="sitem_over"><strong></strong></span>')
    $('.list7>li>a').fancybox({
        'centerOnScroll': true
    });
    
    //content switch
    content = $('#contente');
    content.tabs({
        show:0,
        preFu:function(_){
            _.li.css({'display':'none'});	
        },
        actFu:function(_){            
            if(_.curr){                
                _.curr
                    .css({'left':'-2000px','display':'block'}).stop(true).delay(200).show().animate({'left':'0px'},{duration:800,easing:'easeInOutExpo'});
            }   
    		if(_.prev){
  		        _.prev
                    .show().stop(true).animate({'left':'2000px'},{duration:600,easing:'easeInOutExpo',complete:function(){
                            if (_.prev){
                                _.prev.css({'display':'none'});
                            }
                        }
		              });
            }            
  		}
    });
    var defColor = $('#menu>li>a').eq(0).css('color'); 
    var nav = $('.menu');
    nav.navs({
		useHash:true,
        defHash: '#!/page',
        hoverIn:function(li){
            $('>strong',li).stop().animate({'height':'85px'},400,'easeOutExpo');
        },
        hoverOut:function(li){
            if ((!li.hasClass('with_ul')) || (!li.hasClass('sfHover'))) {
                $('>strong',li).stop().animate({'height':'0'},700,'easeOutCubic');
            }
        }
    })
    .navs(function(n){	
   	    $('#contente').tabs(n);
   	});
    
    
    setTimeout(function(){
        $('#bgStretch').bgStretch({
    	   align:'leftTop',
           autoplay: false,
           navs:$('.pagin').navs({})
        })
        .sImg({
            sleep: 1000,
            spinner:$('<div class="spinner spinner_bg"></div>').css({opacity:.5}).stop().hide(3000)
        });
        var img=0;
        var num=$('.pagin li').length-1;
        $('#prev').click(function(){
            img=img-1;
    		if (img<0) img=img+num+1;
    		$.when($('#bgStretch img')).then(function(){
    			$('.pagin li a').eq(img).click();
    		})
    		return false
    	});
    	$('#next').click(function(){
    		img=img+1;
    		if (img>num) img=img-num-1;
    		$.when($('#bgStretch img')).then(function(){
    			$('.pagin li a').eq(img).click();
    		})
            return false
    	});
    },0);
    
    setTimeout(function(){  $('body').css({'overflow':'visible'}); },300);    
    addAllListeners();
    
    $(window).trigger('resize');
});

$(window).resize(function (){
    if (content) {
        var currH = content.find('ul').height();
        content.stop().animate({'top':(windowH()-currH)*.5},500,'easeOutCubic')
    }
});