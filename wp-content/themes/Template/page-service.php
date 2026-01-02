<?php 
get_header(); 
wp_enqueue_script('service-script', get_template_directory_uri() . '/assets/js/views/service/script.js', array('jquery'), 1.1, true);

?>
<div class="container">
    <div class="c-hero">
        <h1 class="c-hero__heading">Service</h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <span>Service</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <section class="p-service">
        <figure class="c-figure">
            <img class="c-figure__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/pc/img-intro.jpg" alt="Service Figure"> 
        </figure>
        <div class="p-service__inner container-sp-only">
            <div class="p-service__inner__photos d-pc-only" id="photos">
                <figure class="p-service__inner__photos__figure ">
                    <img class="p-service__inner__photos__figure__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/pc/img-service-figure1.jpg"
                        alt="About Figure">
                </figure>
                <figure class="p-service__inner__photos__figure p-service__inner__photos__figure__target">
                    <img class="p-service__inner__photos__figure__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/pc/img-service-figure2.jpg"
                        alt="About Figure">
                </figure>
                <figure class="p-service__inner__photos__figure p-service__inner__photos__figure__target">
                    <img class="p-service__inner__photos__figure__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/views/service/pc/img-service-figure3.jpg"
                        alt="About Figure">
                </figure>
            </div>
            <div class="p-service__inner__details">
                <div class="p-service__inner__details__item">
                    <h3 class="p-service__inner__details__item__title">Lorem ipsum</h3>
                    <p class="p-service__inner__details__item__p">
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
                <div class="p-service__inner__details__item  p-service__inner__details__item__target">
                    <h3 class="p-service__inner__details__item__title">Lorem ipsum</h3>
                    <p class="p-service__inner__details__item__p">
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
                <div class="p-service__inner__details__item  p-service__inner__details__item__target">
                    <h3 class="p-service__inner__details__item__title">Lorem ipsum</h3>
                    <p class="p-service__inner__details__item__p">
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



    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>