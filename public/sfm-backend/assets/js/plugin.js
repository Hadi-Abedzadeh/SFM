$(document).ready(function(){
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
$('.section').each(function(){
//$(this).html('<div class="fp-tableCell">'+$(this).html()+'</div>');
//$(this).prepend('<div class="fp-tableCell">').append('</div>');
$(this).wrapInner('<div class="fp-tableCell"></div>');
$(this).addClass('fp-section fp-table fp-completely');
});
}
$('.scrolldown').click(function(){
$.fn.fullpage.moveSectionDown();
});
});
$('body').scroll(function(){
var x = $(this).scrollTop();
$('.section.header').css('background-position', '0% ' + parseInt(-x / 10) + 'px');
});
$(".products .productitems,.productsingleslide.productitems").owlCarousel({
	items:4,
	margin:30,
	loop:true,
	nav:true,
	navcontainer:'.productitems-controls',
	navText : ["<span>next</span>","<span>prev</span>"],
	responsive : {
    0 : {
        items : 1
    },
	900 : {
        items : 3
    },
	1300 : {
        items : 4
    }
	}
});
$(".newsitems").owlCarousel({
	items:3,
	margin:30,
	loop:true,
	nav:true,
	navcontainer:'.newsitems-controls',
	navText : ["<span>next</span>","<span>prev</span>"],
	responsive : {
    0 : {
        items : 1
    },
	800 : {
        items : 2
    },
	1100 : {
        items : 3
    }
	}
});
$('.section.products').mousemove(function(event){
	var allscreenX=($(window).width()/70)/2;
	var mouseposX=event.pageX/50;
	var defpxX=allscreenX-mouseposX;
	var allscreenY=($(window).height()/80)/2;
	var mouseposY=event.pageY/100;
	var defpxY=allscreenY-mouseposY;
	$('.productitem .productitemimg img:nth-child(2)').css({'transform':'scale(1.1) translate('+(-defpxX/2)+'px,'+(-defpxY)+'px)'});
	$('.productitem .productitemimg img:nth-child(1)').css({'transform':'scale(1.1) translate('+(defpxX/2)+'px,'+(defpxY)+'px)'});

});
$(".gallerysliderarea").owlCarousel({
	items:3,
	margin:30,
	loop:true,
	autoWidth:true,
	nav:true,
	navcontainer:'.newsitems-controls',
	navText : ["<span>next</span>","<span>prev</span>"]
});
$('#menuactiver,.fullmenucloser').on('click',function(){if($('body').hasClass('menuactive')){$('body').removeClass('menuactive');return false;}$('body').addClass('menuactive');});

$('.gallerysliderarea .prevslider,.gallerysliderarea .nextslider').on('click',function(){
var allgallery=$('.gallerysliderarea').data('all');
var activelastgallery=$('.gallerysliderarea').data('active');
if(activelastgallery==allgallery){activelastgallery=0;}
var activegallery=activelastgallery+1;
if($('.gallerysliderarea').hasClass('pending')){return false;}
$('.gallerysliderarea').data('active',activegallery);
$('.gallerysliderarea .galleryslider.active').addClass('unactive');
$('.gallerysliderarea').addClass('pending');
$('.gallerysliderarea .galleryslider').removeClass('active');
$('.gallerysliderarea .galleryslider.galleryslider-'+activegallery).addClass('active');
setTimeout(function(){$('.gallerysliderarea .galleryslider').removeClass('unactive');},1000);
setTimeout(function(){$('.gallerysliderarea').removeClass('pending');},1200);
});

$('.projects .nextproject').on('click',function(){
var allgallery=$('.projects').data('all');
var activelastgallery=$('.projects').data('active');
if(activelastgallery==allgallery){activelastgallery=0;}
var activegallery=activelastgallery+1;
$('.projects').data('active',activegallery);
$('.projects .projectgallery .innergallery,.projects .projectinfo .inner').removeClass('active');
$('.projects .gallery-'+activegallery).addClass('active');
});

$('.projectcontroller *').on('click',function(){
var allgallery=$('.projectgallery .innergallery.active').data('all');
var activelastgallery=$('.projectgallery .innergallery.active').data('active');
if(activelastgallery==allgallery){activelastgallery=0;}
var activegallery=activelastgallery+1;
$('.projectgallery .innergallery.active').data('active',activegallery);
$('.projectgallery .innergallery.active img').removeClass('active');
$('.projectgallery .innergallery.active .galleryimg-'+activegallery).addClass('active');
});

$('.sorter .sorterheader').on('click',function(){
//if($(this).hasClass('active')){$(this).removeClass('active');}else{$(this).addClass('active');}
$(this).parent().toggleClass('active');
});
$('.sorter span').on('click',function(){
var sortertitle=$(this).html();
$('.sorter .sorterheader').html(sortertitle);
$(this).parent().removeClass('active');
});

});