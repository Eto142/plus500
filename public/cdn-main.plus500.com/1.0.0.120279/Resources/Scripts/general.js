// NOTE - You should copy your changes to general.min.js too for your changes to reflect in QA and PROD
// THIS FILE IS USED IN DEVELOPMENT ONLY
$.fn.isOnScreen = function () { var a = this.get(0).getBoundingClientRect(); return a.top < window.innerHeight && a.bottom > 0 };

function setTimedInterval(a, b, c) { var d = window.setInterval(a, b); window.setTimeout(function () { window.clearInterval(d) }, c) }
function htmlDecode(v) { return $("<div/>").html(v).text() }

(function ($) { $.fn.outside = function (t, i) { return this.each(function () { $(this); var e = this; $(document).on(t, function o(u) { u.target === e || $.contains(e, u.target) || (i.apply(e, [u]), e.parentNode || $(document.body).off(t, o)) }) }) } }(jQuery));
(function ($) { $.fn.goTo = function () { $('html, body').animate({ scrollTop: $(this).offset().top + 'px' }, 'fast'); return this; } })(jQuery);

document.addEventListener("DOMContentLoaded", function () {
    $("body").on("touchstart", ".tooltip", function () {
        $(".tooltip").hide();
    });
});

$("[data-start-trading]").on("click", function () {
    sendAnalyticsEvent("start-trading", "click", $(this).attr("data-inner"));
});

// In order to trick the CDN to cache the document response,
// we open the doc using another attribute so the _ga (google analytics) param won't be appended to the url
// which will result a cache miss rather than hit
window.addEventListener('load', function(){
    $("[doc-href]").on("click", function(e) {
        window.open($(this).attr("doc-href"), $(this).attr("target") ? $(this).attr("target") : "_blank" );
        e.preventDefault();
    })
})

// TODO: replace this with native scrollIntoView
jQuery.fn.scrollTo = function (elem) {
    var parentRect = $(this)[0].getBoundingClientRect();
    var elemRect = $(elem)[0].getBoundingClientRect();
    if (parentRect.bottom <= elemRect.bottom) {
        $(this).scrollTop($(this).scrollTop() + elemRect.height);
    }
    else if (parentRect.top > elemRect.top) {
        $(this).scrollTop($(this).scrollTop() - elemRect.height);
    }
    return this;
};

function instrumentIconDirective (){
    return {
        inserted: function(el) {
            const img = el.querySelector('img');            
            function onImageLoad() {
                el.classList.remove("skeleton-box", "show-fallback", "icon", "icon-equalizer");
                el.classList.add("show-icon");
            }
            function onImageError() {
                el.classList.remove("skeleton-box");
                el.classList.add("show-fallback", "icon", "icon-equalizer");
            }            
            if (img) {
                img.addEventListener('load', onImageLoad);
                img.addEventListener('error', onImageError);
            } else {
                onImageError();
            }
            el._icon_image_functions = { onImageLoad, onImageError };
        },
        update(el, binding) {
            const {onImageError, onImageLoad} = el._icon_image_functions;
            if (binding.oldValue !== binding.value) {
                !!binding.value ? onImageLoad() : onImageError();
            }
        }
    }
}