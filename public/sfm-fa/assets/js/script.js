$(document).ready(function(){
    $(document).on('click','nav .menu .menu-icon,#fullmenu',function(){
        $('html').toggleClass('fullmenu-active');
    });
});

$(document).ready(function(){
    $('.products-button li').on('click', function() {
        var productData = $(this).data('product');
        $('.item,.products-button li').removeClass('active');
        $('.item.'+productData).addClass('active');
        $(this).addClass('active');
    });
});

$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

$(document).on('click','.more-button',function(){
    var aca2=$(this).data('action');
   $.ajax('/fa/news/?page=1',function(result){alert(result);});
});

// just get 11 number input
var alireza = document.querySelectorAll(".alireza_validator input"),i;
// Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            }
        });
    });
}
for (i = 0; i < alireza.length; ++i) {
    alireza[i].maxLength = 11;
    // Restrict input to digits and '.' by using a regular expression filter.
    setInputFilter(alireza[i], function(value) {
        return /^[0-9۰-۹]*$/i.test(value);
    });
}

$(document).ready(function(){
    $(".top-menu-icon>img").on('click', function() {
        $(".open-menu").css("display", "flex");
        setTimeout(function(){
            $(".open-menu").css("opacity", "1");
        },50);
    });
    $(".open-menu").on('click', function() {
        $(".open-menu").css("opacity", "0");
        setTimeout(function(){
            $(".open-menu").css("display", "none");
        },500);
    });
});


//menu

//$(document).ready(function(){
//
//  $(".menu_icon").on('click', function() {
//     setTimeout(function(){
//      if($(".content_menu").hasClass('menu_active')){
//          $(".content_menu").removeClass('menu_active');
//      }else{
//          $(".content_menu").addClass('menu_active');
//      }
//         },50);
//  });
//
//    $("body").on('click', function() {
//        if($(".content_menu").hasClass('menu_active')){
//          $(".content_menu").removeClass('menu_active');
//      }
//    });
//});

//slider home

$(document).ready(function(){
    $('.owl-carousel-index').owlCarousel({
        rtl:true,
        loop:true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        margin: 70,
        navText : ["<div class='owl-next'><img src='/sfm-fa/assets/images/sample/right-bg-slide.svg' width='54px'></div>","<div class='owl-prev'><img src='/sfm-fa/assets/images/sample/left-bg-slide.svg' width='54px'></div>"],
        responsive:{
            0:{
                items:1,
                nav: false
            },
            600:{
                margin: 20,
                items:2
            },
            1000:{
                items:3,
                autoplayTimeout: 3000,
                
            }
        }
    });
});


//slider blog

$(document).ready(function(){
    $('.owl-carousel-blog').owlCarousel({
        rtl:true,
        loop:true,
        dots: false,
//      autoplay: true,
//      autoplayTimeout: 5000,
        nav: true,
        margin: 10,
        navText : ["<div class='owl-next'><img src='/sfm-fa/assets/images/sample/right-2.svg' width='54px'></div>","<div class='owl-prev'><img src='/sfm-fa/assets/images/sample/left-2.svg' width='54px'></div>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3,
                nav: false
            }
        }
    });
});


//parallex OBJ

$('.img-parallax').each(function(){
    var img = $(this);
    var imgParent = $(this).parent();
    function parallaxImg () {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();


        // The next pixel to show on screen
        var winBottom = winY + winH;

        // If block is shown on screen
        if (winBottom > imgY && winY < imgY + parentH) {
            // Number of pixels shown after block appear
            var imgBottom = ((winBottom - imgY) * speed);
            // Max number of pixels until block disappear
            var imgTop = winH + parentH;
            // Porcentage between start showing until disappearing
            var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
        }
        img.css({
            top: imgPercent + '%',
            transform: 'translate(-50%, -' + imgPercent + '%)'
        });
    }
    $(document).on({
        scroll: function () {
            parallaxImg();
        }, ready: function () {
            parallaxImg();
        }
    });
});


//FAQ
$(document).ready(function(){
    $('#faq-page .item').on('click', function(){
        var faq = $(this);
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            setTimeout(function(){
                faq.find('.answer').fadeOut(0);
            },200);
        }else{
            $(this).find('.answer').fadeIn(0);
            setTimeout(function(){
                faq.addClass('active');
            },1);
        }
    });
});
