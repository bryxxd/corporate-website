(function ($) {
    $(function () {
        // Works gallery slider
        var gallery = new Splide('.p-works-detail__gallery', {
            type: 'fade',
            perPage: 1,
            fixedWidth: '100%',
            classes: {
                arrows: 'splide__arrows p-works-detail__gallery__arrows',
                arrow: 'splide__arrow p-works-detail__gallery__arrow',
                prev: 'splide__arrow--prev p-works-detail__gallery__arrow--prev',
                next: 'splide__arrow--next p-works-detail__gallery__arrow--next',
            },
        });
        gallery.mount();
    })

})(jQuery.noConflict());

