<?php get_header(); ?>
<div class="u-container">
    <div class="c-hero">
        <h1 class="c-hero__heading">Page Not Found</h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <span>404</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <section class="p-not-found ">
        <div class="u-container">
            <div class="p-not-found__inner">
                <p class="p-not-found__description">The page you are looking for could not be found.</p>
                <a href="<?php echo home_url('/') ?>" class="c-button">Back to Home</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>