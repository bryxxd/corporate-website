(function ($) {
    $(function () {
        var splide = new Splide( '.splide', {
            type   : 'fade',
            rewind : true,
            pagination : false,
            arrows : false,
            width : '100%',
            height : '100vh',
            autoplay : true,
            interval : 2500,
            easing : "linear"
        } ); 
        splide.mount();
    })

})(jQuery.noConflict());
