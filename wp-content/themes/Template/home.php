<?php
get_header();

wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/views/index/script.js', array('jquery'), 1.1, true);
wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide/splide.min.js', array('jquery'), 1.1, true);
wp_enqueue_style('splide-style', get_template_directory_uri() . '/assets/js/splide/splide.min.css', false, '1.1', 'all');
?>

<main class="main">
    <div class="p-index">
        <section class="p-index__mv">
            <div class="splide p-index__mv__slide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img class="p-index__mv__slide__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-1.webp"
                                alt="">
                        </li>
                        <li class="splide__slide">
                            <img class="p-index__mv__slide__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-2.webp"
                                alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-3.webp"
                                alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-index__mv__info">
                <h2 class="p-index__mv__info__h2">the ultimate adventure guide</h2>
                <p class="p-index__mv__info__p">Phasellus sollicitudin ut pellentesque vitae eleifend diam rutrum elementum libero. Mauris nulla sollicitudin massa donec ac interdum sagittis egestas. Amet praesent nec turpis amet in.</p>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>