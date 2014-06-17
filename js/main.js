// This wrapper function allows us to use the '$' for jQuery functions
(function($) {

$(function () {
    $(".js-toggle-nav").click(function () {
        $(".js-main-nav").slideToggle("fast")
    })
});

$(function () {
    if ($(".js-toggle-nav").css('display') != 'none' ) {
        $(".js-main-nav li a").click(function () {
            $(".js-main-nav").slideToggle("fast")
        })
    }
});

$(function () {
    $("a[href*=#]:not([href=#])").click(function () {
        var e = this.hash;
        setTimeout(function () {
            window.location.hash = e
        }, 1e3);
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var t = $(this.hash);
            t = t.length ? t : $("[name=" + this.hash.slice(1) + "]");
            if (t.length) {
                $("html,body").animate({
                    scrollTop: t.offset().top
                }, 1e3);
                return false
            }
        }
    })
});

$('.main-nav').headroom({
    offset: $('.home-banner').outerHeight(),
    tolerance : {
        down : 10,
        up : 0
    },
});

})(jQuery);