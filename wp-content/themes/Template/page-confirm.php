<?php
get_header();
wp_enqueue_script('contact-script', get_template_directory_uri() . '/assets/js/views/contact/script.js', array('jquery'), 1.1, true);

?>
<div class="container">
    <div class="hero">
        <h1 class="hero__heading">Contact</h1>
        <ul class="hero__topic-path">
            <li class="hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="hero__topic-path__li">
                <span>Contact</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <section class="p-contact">
        <figure class="c-figure">
            <img class="c-figure__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/views/contact/pc/img-figure.jpg" width="100%" height="700px" alt="Service Figure">
        </figure>
        <div class="container">
            <ul class="p-contact__step">
                <li class="p-contact__step__list">Input</li>
                <li class="p-contact__step__list active">Confirm</li>
                <li class="p-contact__step__list">Result</li>
            </ul>

            <div class="p-contact__inner">
                <p class="p-contact__team">Contact me</p>
                <p class="p-contact__message">I am here to answer your question.<br> Please fill out the form, and I'll be in touch as soon as possible.</p>
                <?php the_content() ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
