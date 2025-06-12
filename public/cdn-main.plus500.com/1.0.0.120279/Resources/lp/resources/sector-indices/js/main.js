var instrumentSwiper = null;

$.fn.isInViewportTop = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop;
};

$.fn.isInViewportBottom = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom < viewportBottom;
};

function initSwiper() {

    if (instrumentSwiper !== undefined && instrumentSwiper !== null) {
        instrumentSwiper.destroy(true, true);
    }

    instrumentSwiper = new Swiper('.swiper-container-mobile', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            //delay: 50000,
            disableOnInteraction: false,
            observer: true
        },
        pagination: {
            el: '.swiper-pagination'
        }
    });
    instrumentsSwiper = $('.swiper-container-mobile').swiper;
    instrumentSwiper.init();

}

if ($(window).innerWidth() < 980) {
    initSwiper();
}

jQuery(document).ready(function ($) {

    wow = new WOW({
        offset: 0
    });

    wow.init();

    // var rellax = new Rellax('.rellax');

    // $('.paroller').paroller();

    $('.tools-list a[href^="#tab"]').on("click", function (e) {
        e.preventDefault();
        var others = $(this).siblings(),
            target = $(this).attr('href');
        others.removeClass('active');
        $(this).addClass('active');
        $('.preview-tabs-container .tab').hide();
        $(target).fadeIn();
    });

    $(window).on('resize scroll', function (event) {
        if ($("#header").length !== 0) {
            if ($('#heroLogo').isInViewportTop()) {
                $('header').removeClass('active');
            } else {
                $('header').addClass('active');
            }
        }
        if (event.type === "resize" && $(this).innerWidth() < 980) {
            initSwiper();
        }
    });


});