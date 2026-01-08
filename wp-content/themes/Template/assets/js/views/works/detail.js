(function ($) {
    $(function () {
        // Works gallery slider
        var gallery = new Splide('.p-works-detail__gallery', {
            type: 'fade',
            perPage: 1,
            fixedWidth: '100%',
            fixedHeight: '500px',
            classes: {
                arrows: 'splide__arrows p-works-detail__gallery__arrows',
                arrow: 'splide__arrow p-works-detail__gallery__arrow',
                prev: 'splide__arrow--prev p-works-detail__gallery__arrow--prev',
                next: 'splide__arrow--next p-works-detail__gallery__arrow--next',
            },
            breakpoints: {
                750: {
                    fixedHeight: '350px',
                },
            },
        });
        gallery.mount();
    })

})(jQuery.noConflict());

