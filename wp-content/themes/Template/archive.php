<?php get_header(); ?>
<div class="container">
    <div class="c-hero">
        <h1 class="c-hero__heading">Blog</h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <span>Blog</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <div class="container">
        <ul class="c-post-category">
            <li class="c-post-category__li">
                <a href="<?php echo home_url('/blog/') ?>"
                    class="c-post-category__anchor <?php echo !is_category() ? 'is-active' : '' ?>">
                    See All
                </a>
            </li>
            <?php
            $categories = get_categories(['hide_empty' => true]);
            foreach ($categories as $category):
            ?>
                <li class="c-post-category__li">
                    <a href="<?php echo esc_url(get_category_link($category)) ?>"
                        class="c-post-category__anchor <?php echo is_category($category->term_id) ? 'is-active' : '' ?>">
                        <?php echo esc_html($category->name) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <ul class="c-post-list">
            <?php
            while (have_posts()):
                the_post();
                $categories = get_the_category() ?? [];
            ?>
                <li class="c-post-list__li">
                    <a href="<?php the_permalink(); ?>" class="c-post-list__item">
                        <div class="c-post-list__thumb">
                            <?php if (has_post_thumbnail()):
                                the_post_thumbnail('post-thumbnail', ['class' => 'c-post-list__thumb__image',]);
                            else: ?>
                                <img class="c-post-list__thumb__image"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/common/post-placeholder.jpg"
                                    alt="Image Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="c-post-list__text">
                            <span class="c-post-list__text__date"><?php the_time('m/d/Y'); ?></span>

                            <?php foreach ($categories as $category): ?>
                                <span class="c-post-list__text__category"><?php echo esc_html($category->name); ?></span>
                            <?php endforeach; ?>

                            <div class="c-post-list__text__title"><?php the_title(); ?></div>
                        </div>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="c-pagination">
            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
        </div>
    </div>

    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>