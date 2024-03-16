(function ($) {
    $(function () {
        var $html = $("html");
        $(".nav__menu__button").on("click", function () {
            $html.toggleClass("is-view");
        });
    });

    $(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 500) {
                $(".header").addClass("is-scroll");
                $(".is-contact").addClass("is-scroll");
            } else {
                $(".header").removeClass("is-scroll");
                $(".is-contact").removeClass("is-scroll");
            }
        });
    });


})(jQuery.noConflict());
