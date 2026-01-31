(function ($) {
    $(function () {
        var $html = $("html");
        $(".l-nav__menu__button").on("click", function () {
            $html.toggleClass("is-view");
        });
    });
})(jQuery.noConflict());
