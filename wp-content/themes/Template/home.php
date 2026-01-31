<?php
get_header();
wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/views/index/script.js', array('jquery'), 1.1, true);
wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide/splide.min.js', array('jquery'), 1.1, true);
wp_enqueue_script('splide-extension', get_template_directory_uri() . '/assets/js/splide/splide-extension-auto-scroll.min.js', array('jquery'), 1.1, true);
wp_enqueue_style('splide-style', get_template_directory_uri() . '/assets/js/splide/splide.min.css', false, '1.1', 'all');
?>

<main class="l-main">
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

        <section class="p-index__service c-container-sp-only">
            <div class="c-heading">
                <h2 class="c-heading__h2">Service</h2>
            </div>
            <div class="p-index__service__inner">
                <div class="p-index__service__inner__photos u-display-pc-only" id="photos">
                    <figure class="p-index__service__inner__photos__figure ">
                        <img class="p-index__service__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-service-figure1.jpg"
                            alt="About Figure">
                    </figure>
                    <figure
                        class="p-index__service__inner__photos__figure p-index__service__inner__photos__figure__target">
                        <img class="p-index__service__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-service-figure2.jpg"
                            alt="About Figure">
                    </figure>
                    <figure
                        class="p-index__service__inner__photos__figure p-index__service__inner__photos__figure__target">
                        <img class="p-index__service__inner__photos__figure__img"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-service-figure3.jpg"
                            alt="About Figure">
                    </figure>
                </div>
                <div class="p-index__service__inner__details">
                    <div class="p-index__service__inner__details__item">
                        <h3 class="p-index__service__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__service__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="c-button" href="<?php echo home_url('/service/service1') ?>">See more</a>
                    </div>
                    <div class="p-index__service__inner__details__item  p-index__service__inner__details__item__target">
                        <h3 class="p-index__service__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__service__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="c-button" href="<?php echo home_url('/service/service2') ?>">See more</a>
                    </div>
                    <div class="p-index__service__inner__details__item  p-index__service__inner__details__item__target">
                        <h3 class="p-index__service__inner__details__item__title">Lorem ipsum</h3>
                        <p class="p-index__service__inner__details__item__p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nisi, distinctio aperiam
                            inventore quibusdam reiciendis illo optio quia laboriosam aut deleniti vero, quaerat
                            architecto dolor magni possimus? Minima, optio repudiandae.
                        </p>
                        <a class="c-button" href="<?php echo home_url('/service/service3') ?>">See more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-index__gallery">
            <div class="c-heading">
                <h2 class="c-heading__h2">Gallery</h2>
            </div>

            <div class="splide p-index__gallery__slider  p-index__gallery__slider--left" role="group"
                aria-label="Gallery Slide">
                <div class="splide__track">
                    <ul class="p-index__gallery__slider splide__list">
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img1.jpg"
                                alt="gallery 1">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img2.jpg"
                                alt="gallery 2">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img3.jpg"
                                alt="gallery 3">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img4.jpg"
                                alt="gallery 4">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img5.jpg"
                                alt="gallery 5">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="splide p-index__gallery__slider  p-index__gallery__slider--right" role="group"
                aria-label="Gallery Slide">
                <div class="splide__track">
                    <ul class="p-index__gallery__slider splide__list">
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img6.jpg"
                                alt="gallery 6">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img7.jpg"
                                alt="gallery 7">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img8.jpg"
                                alt="gallery 8">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img9.jpg"
                                alt="gallery 9">
                        </li>
                        <li class="p-index__gallery__slider__li splide__slide">
                            <img class="p-index__gallery__slider__li__img"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/views/index/pc/img-gallery-img10.jpg"
                                alt="gallery 10">
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="p-index__blog">
            <div class="c-heading">
                <h2 class="c-heading__h2">Blog</h2>
            </div>

            <div class="splide p-index__blog__post" role="group" aria-label="Blog Splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        $wpQuery = new WP_Query([
                            'posts_per_page' => 6,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        ]);
                        if ($wpQuery->have_posts()):
                            while ($wpQuery->have_posts()):
                                $wpQuery->the_post();
                                $categories = get_the_category();
                                ?>
                                <li class="splide__slide p-index__blog__post__li">
                                    <a href="<?php the_permalink(); ?>" class="p-index__blog__post__anchor">
                                        <?php if (has_post_thumbnail()):
                                            the_post_thumbnail('', ['class' => 'p-index__blog__post__anchor__image',]);
                                        else: ?>
                                            <img class="p-index__blog__post__anchor__image"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/img/common/post-placeholder.jpg"
                                                alt="Thumbnail Placeholder">
                                        <?php endif; ?>
                                        <ul class="p-index__blog__post__anchor__category">
                                            <?php foreach ($categories as $category): ?>
                                                <li class="p-index__blog__post__anchor__category__list">
                                                    <?php echo esc_html($category->name); ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <p class="p-index__blog__post__anchor__title">
                                            <?php the_title(); ?>
                                        </p>

                                    </a>
                                </li>
                            <?php endwhile;
                        endif; ?>
                    </ul>
                </div>
                <div class="p-index__blog__post__progress">
                    <div class="p-index__blog__post__progress__wrapper">
                        <div class="p-index__blog__post__progress__wrapper__bar"></div>
                    </div>
                    <div class="splide__arrows p-index__blog__post__arrows">
                        <button
                            class="splide__arrow--prev p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--prev">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"
                                focusable="false">
                                <path
                                    d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z">
                                </path>
                            </svg>
                        </button>
                        <button
                            class="splide__arrow--next p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--next">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"
                                focusable="false">
                                <path
                                    d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="u-container p-index__blog__post__more">
                <a class="c-button" href="<?php echo home_url('/blog/') ?>">See more</a>
            </div>
        </section>
    </div>

    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>