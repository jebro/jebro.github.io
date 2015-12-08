$(document).ready(function () {

    WebFontConfig = {
        google: {
            families: ['Open+Sans:400,400italic,600italic,600,300,300italic,700,700italic,800,800italic:latin', 'Bitter:400,400italic,700:latin']
        }
    };

    (function () {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();


    $('.brand-more').hover(function () {
        $('.brand-more-list', this).fadeToggle('fast');
        $(this).find('.brand-more-trigger').toggleClass('active');
    });

    $('.quotes-rotator').unslider({
        arrows: false,
        autoplay: true
    });


    $('.banner-rotator').unslider({
        arrows: false,
        autoplay: false
    });


    $(".tab-nav a").click(function (event) {
        event.preventDefault();
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });

    $('.expander .expander-header').click(function () {
        $(this).toggleClass('expander-active').parent().find('.expander-body').slideToggle();
        $(this).find('.expander-icon').toggleClass('lnr-plus-circle').toggleClass('lnr-circle-minus');
    });

    $('.cards .card-container').matchHeight();
    $('.icon-values .padder').matchHeight();
    $('.three-column-icons .padder').matchHeight();

    
    var windowHeight = $(window).height();
    var navHeight = $('.nav-main .nav-section ul').height();        
    if ( navHeight + 199 > windowHeight) {
        $('.nav-main .nav-section ul').css('height', windowHeight - 199);
        $('.nav-main .nav-section ul').niceScroll({
            cursorcolor: "#34344f",
            cursorborder: "none", 
            railpadding: { top: 4, right: 4, left: 0, bottom: 4 },
        });        
    } else {
        $('.nav-main .nav-section ul').css('height', 'auto');
    }    


    $(window).resize(function(){
        var windowHeight = $(window).height();
        var navHeight = $('.nav-main .nav-section ul').height();        
        if ( navHeight + 199 > windowHeight) {
            $('.nav-main .nav-section ul').css('height', windowHeight - 199);
            $('.nav-main .nav-section ul').niceScroll({
                cursorcolor: "#34344f",
                cursorborder: "none",
                railpadding: { top: 4, right: 4, left: 0, bottom: 4 }
            });        
        } else {
            $('.nav-main .nav-section ul').css('height', 'auto');
        }
    });
    
    
});