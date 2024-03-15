(function ($) {
    $(function () {
        var splide = new Splide( '.splide', {
            type   : 'fade',
            pagination : false,
            arrows : false,
            width : '100%',
            height : '100vh',
            autoplay : true,
            rewind : true,
            rewindSpeed: 2000,
            interval : 5000,
            easing: 'ease-in-out',
            speed : 2000
        } ); 
        splide.mount();
    })

})(jQuery.noConflict());
