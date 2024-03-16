<?php
get_header();

wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/views/index/script.js', array('jquery'), 1.1, true);
wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide/splide.min.js', array('jquery'), 1.1, true);
wp_enqueue_style('splide-style', get_template_directory_uri() . '/assets/js/splide/splide.min.css', false, '1.1', 'all');
?>

<main class="main">
    <div class="p-index">
        <section class="p-index__mv">
            <div class="splide p-index__mv__slide" role="group" aria-label="Splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img class="p-index__mv__slide__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-1.jpg"
                                alt="Slider Image">
                        </li>
                        <li class="splide__slide">
                            <img class="p-index__mv__slide__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-2.jpg"
                                alt="Slider Image">
                        </li>
                        <li class="splide__slide">
                            <img class="p-index__mv__slide__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-mv-3.jpg"
                                alt="Slider Image">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-index__mv__info">
                <h2 class="p-index__mv__info__h2">the ultimate adventure guide</h2>
                <p class="p-index__mv__info__p">Phasellus sollicitudin ut pellentesque vitae eleifend diam rutr.</p>
            </div>
        </section>

        <section class="p-index__about">
            <div class="heading">
                <h2 class="heading__h2">About</h2>
            </div>
            <div class="p-index__about__inner">
                <div class="p-index__about__inner__photos" id="photos">
                    <figure class="p-index__about__inner__photos__figure ">
                        <img class="p-index__about__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-about-figure1.jpg"
                            alt="About Figure">
                    </figure>
                    <figure class="p-index__about__inner__photos__figure p-index__about__inner__photos__figure__target">
                        <img class="p-index__about__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-about-figure2.jpg"
                            alt="About Figure">
                    </figure>
                    <figure class="p-index__about__inner__photos__figure p-index__about__inner__photos__figure__target">
                        <img class="p-index__about__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-about-figure3.jpg"
                            alt="About Figure">
                    </figure>
                </div>
                <div class="p-index__about__inner__details">
                    <div class="p-index__about__inner__details__item">
                        <h3 class="p-index__about__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__about__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="button" href="#">See more</a>
                    </div>
                    <div class="p-index__about__inner__details__item  p-index__about__inner__details__item__target">
                        <h3 class="p-index__about__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__about__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="button" href="#">See more</a>
                    </div>
                    <div class="p-index__about__inner__details__item  p-index__about__inner__details__item__target">
                        <h3 class="p-index__about__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__about__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="button" href="#">See more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-index__news">

        </section>
    </div>
</main>
<?php get_footer(); ?>