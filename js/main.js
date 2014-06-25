// This wrapper function allows us to use the '$' for jQuery functions
(function($) {

$(function () {
    $(".js-toggle-nav").click(function () {
        $(".js-main-nav").slideToggle("fast");
    });
});

$(function () {
    if ($(".js-toggle-nav").css('display') != 'none' ) {
        $(".js-main-nav li a").click(function () {
            $(".js-main-nav").slideToggle("fast");
        });
    }
});

// Not sure if we need this since Resources might be a different page
//$(function () {
//    $("a[href*=#]:not([href=#])").click(function () {
//        var e = this.hash;
//        setTimeout(function () {
//            window.location.hash = e
//        }, 1e3);
//        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
//            var t = $(this.hash);
//            t = t.length ? t : $("[name=" + this.hash.slice(1) + "]");
//            if (t.length) {
//                $("html,body").animate({
//                    scrollTop: t.offset().top
//                }, 1e3);
//                return false
//            }
//        }
//    })
//});

// This should just be for the Homepage
$('.home .main-nav').headroom({
    offset: $('.home-banner').outerHeight() - $('.main-nav').outerHeight(),
    tolerance : {
        down : 10,
        up : 0
    },
});

    // This should be for every page that ISN'T the Homepage
$('.single .main-nav, .page .main-nav').headroom({
    offset: 0,
    tolerance : {
        down : 10,
        up : 0
    },
});

$(window).load(function() {
	var pageWidth = $(window).width();
	if (pageWidth > 1024) {
	
	$('.container').each(function(){  
            
            var highestBox = 0;
            $('.area', this).each(function(){
            
                if($(this).height() > highestBox) 
                   highestBox = $(this).height(); 
            });  
            
            $('.area',this).height(highestBox);
            
        
    });  
	
	}
});

})(jQuery);


