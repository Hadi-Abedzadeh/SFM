$(document).ready(function(){
    $(function(){
        $('#fullpage').fullpage({
            autoScrolling:true,
            scrollHorizontally: true,
            onLeave: function(origin, destination, direction){
                $('body').addClass('loading');
                setTimeout(function(){$('body').removeClass('loading');},1400);
            }
        });
    });
    $('#scrolldown').click(function(){
        if($('body').hasClass('fp-viewing-3')){$.fn.fullpage.moveSectionUp();}else{$.fn.fullpage.moveSectionDown();}
    });
    $(document).on('click','nav .menu',function(){
        $('body').toggleClass('fullmenu-active');
    });
    $('.section.products').mousemove(function(event){
        var allscreenX=($(window).width()/70)/2;
        var mouseposX=event.pageX/50;
        var defpxX=allscreenX-mouseposX;
        var allscreenY=($(window).height()/80)/2;
        var mouseposY=event.pageY/100;
        var defpxY=allscreenY-mouseposY;
        $('.product:nth-child(1)').css({'transform':'translate('+(-defpxX/2)+'px,'+(120+(-defpxY/2))+'px)'});
        $('.product:nth-child(2)').css({'transform':'translate('+(defpxX/4)+'px,'+(defpxY)+'px)'});
    });
    $(".owl-carousel").owlCarousel({
        items:3,
        margin:20,
        loop:true,
        nav:true,
        navcontainer:'.productitems-controls',
        navText : ["<span>next</span>","<span>prev</span>"]
    });
});
$(window).scroll(function(){
    var x = $(this).scrollTop();
    $('.singleheader .singlecover img').css('transform', 'translateY(-' + parseInt(x / 4)+ 'px)');
});
