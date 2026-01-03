<?php
get_header();
wp_enqueue_script('works-detail', get_template_directory_uri() . '/assets/js/views/works/detail.js', array('jquery'), 1.1, true);
wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide/splide.min.js', array('jquery'), 1.1, true);
wp_enqueue_style('splide-style', get_template_directory_uri() . '/assets/js/splide/splide.min.css', false, '1.1', 'all');

?>
<div class="p-works-detail">

    <div class="container">
        <div class="c-hero">
            <h1 class="c-hero__heading"><?php the_title() ?></h1>
            <?php
            $categories = get_the_terms(get_the_ID(), 'work_category') ?? [];
            ?>
            <?php if ($categories): ?>
                <ul class="p-works-detail__category">
                    <?php foreach ($categories as $category): ?>
                        <li class="p-works-detail__category__item"><?php echo esc_html($category->name); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <main>
        <div class="container">
            <?php
            $works_gallery = SCF::get('works_gallery');
            ?>
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <?php if ($works_gallery): ?>
                        <div class="splide p-works-detail__gallery" role="group" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list p-works-detail__gallery__list">
                                    <?php
                                    foreach ($works_gallery as $image):
                                        $image_id = $image;
                                        $image_url = wp_get_attachment_url($image_id);
                                        ?>
                                        <li class="splide__slide p-works-detail__gallery__list__item">
                                            <img class="p-works-detail__gallery__list__item__img"
                                                src="<?php echo esc_url($image_url); ?>">
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="p-post-list__thumb">
                        <?php if (has_post_thumbnail()):
                            the_post_thumbnail('detail-thumbnail', ['class' => 'p-works-detail__thumb__image',]);
                        else: ?>
                            <div class="p-works-detail__thumb__image__empty"></div>
                        <?php endif; ?>
                    </div>

                    <div class="c-wysiwyg">
                        <?php the_content() ?>
                    </div>
                <?php endwhile;
            endif ?>
            <div class="p-works-detail__back">
                <a class="c-button" href="<?php echo home_url('/works/') ?>">Back</a>
            </div>
        </div>
        <?php get_template_part('./template/contact-banner') ?>
    </main>
</div>

<?php get_footer(); ?>