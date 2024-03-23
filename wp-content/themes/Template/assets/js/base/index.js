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
            if (scroll >= 600) {
                $(".header").addClass("is-scrolled");
                $(".is-contact").addClass("is-scrolled");
                $(".nav__menu__button__line").addClass("is-scrolled");
            } else {
                $(".header").removeClass("is-scrolled");
                $(".is-contact").removeClass("is-scrolled");
                $(".nav__menu__button__line").addClass("is-scrolled");

            }
        });
    });


})(jQuery.noConflict());
