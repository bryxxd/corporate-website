<?php get_header(); ?>
<div class="hero">
    <div class="hero__inner">
        <h1 class="hero__inner__heading">Blog</h1>
    </div>
    <ul class="hero__topic-path">
        <li class="hero__topic-path__li">
            <a href="<?php echo home_url('/') ?>">Home</a>
        </li>
        <li class="hero__topic-path__li">
            <span>Blog</span>
        </li>
    </ul>
</div
</div>
>
<main>
    <div class="container">
        <ul class="post-category">
            <li class="post-category__li">
                <a href="<?php echo home_url('/blog/') ?>" class="post-category__anchor <?php echo !is_category() ? 'is-active' : '' ?>">
                    See All
                </a>
            </li>
            <?php
            $categories = get_categories(['hide_empty' => true]);
            foreach ($categories as $category) :
            ?>
                <li class="post-category__li">
                    <a href="<?php echo esc_url(get_category_link($category)) ?>" class="post-category__anchor <?php echo is_category($category->term_id) ? 'is-active' : '' ?>">
                        <?php echo esc_html($category->name) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>


        <ul class="post-list">
            <?php
            while (have_posts()) : the_post();
                $categories = get_the_category() ?? [];
            ?>
            <li class="post-list__li">
                <a href="<?php the_permalink(); ?>" class="post-list__item">
                    <div class="post-list__thumb">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('post-thumbnail', ['class' => 'post-list__thumb__image',]);
                        else : ?>
                            <img class="post-list__thumb__image"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/common/post-placeholder.jpg"
                                alt="Image Placeholder">
                        <?php endif; ?>
                    </div>
                    <div class="post-list__text">
                        <span class="post-list__text__date"><?php the_time('Y.m.d'); ?></span>

                        <?php foreach ($categories as $category) : ?>
                            <span class="post-list__text__category"><?php echo esc_html($category->name); ?></span>
                        <?php endforeach; ?>

                        <div class="post-list__text__title"><?php the_title(); ?></div>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php pagination() ?>
    </div>
    
    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>