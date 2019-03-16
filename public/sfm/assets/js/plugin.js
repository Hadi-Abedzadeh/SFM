$(document).ready(function(){
$('#scrolldown').click(function(){
if($('body').hasClass('fp-viewing-3')){$.fn.fullpage.moveTo(1);}else{$.fn.fullpage.moveSectionDown();}
});
$(document).on('click','nav .menu,#fullmenu',function(){
$('body').toggleClass('fullmenu-active');
});
$(document).on('click','.faqcard',function(){
if($(this).hasClass('active')){$(this).removeClass('active');return false;}
$('.faqcard').removeClass('active');
$(this).addClass('active');
});
$(document).on('mouseenter','.introbox:not(.oembox)',function(){
if($(window).width() > 600){
$('.intro').addClass('hovererded');
}
});
$(document).on('mouseout','.introbox:not(.oembox)',function(){
$('.intro').removeClass('hovererded');
});
$(document).on('click','body:not(.oemactive) .introbox.oembox',function(){
$('body').addClass('oemactive');
if($(window).width() < 800){$('html, body').animate({scrollTop: 0},'slow');}
});
$(document).on('click','.oemclose',function(){
$('body').removeClass('oemactive');
});
$('.section.products').mousemove(function(event){
	var allscreenX=($(window).width()/70)/2;
	var mouseposX=event.pageX/50;
	var defpxX=allscreenX-mouseposX;
	var allscreenY=($(window).height()/80)/2;
	var mouseposY=event.pageY/100;
	var defpxY=allscreenY-mouseposY;
	$('.section.products .container .product:nth-child(1)').css({'transform':'translate('+(-defpxX/2)+'px,'+(90+(-defpxY/2))+'px)'});
	$('.section.products .container .product:nth-child(2)').css({'transform':'translate('+(defpxX/4)+'px,'+(defpxY)+'px)'});
});
$(".owl-carousel").owlCarousel({
	items:3,
	margin:20,
	loop:true,
	nav:true,
	dots:false,
	navcontainer:'.productitems-controls',
	navText : ["<span>next</span>","<span>prev</span>"],
	responsive : {
    0 : {
		items:1
    },
    768 : {
		items:2
    },
	1100 : {
		items:3
    }
	}
});
$(window).scroll(function(){
var x = $(this).scrollTop();
$('.singleheader .singlecover img').css('transform', 'translateY(' + parseInt(x / 3)+ 'px)');
});
$('.sorter a').on('click',function(){
var catdata=$(this).data('cat');
$('.sorter a').removeClass('active');
$('.product').fadeOut(0);
$(this).addClass('active');
$('.product.'+catdata).fadeIn();
});
});
$(function(){
if($(window).width() > 1100){
$('#fullpage').fullpage({
	autoScrolling:true,
	scrollHorizontally: true,
	onLeave: function(origin, destination, direction){
	$('body').addClass('loading');
	setTimeout(function(){$('body').removeClass('loading');},1400);
	}
});
}else{
$('html').addClass('responsveevy');
}
if($(window).width() < 1100){fullpageDisable('enable');}
$(window).on('resize', function(){
if($(window).width() < 1100){fullpageDisable('enable');}else{fullpageDisable('disable');}
});
function fullpageDisable(action){if(action=='enable'){fullpage_api.setAutoScrolling(false);$('html').css({'overflow':'','overflow-y':'auto'});}else{fullpage_api.setAutoScrolling(true);}}
});