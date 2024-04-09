<?php get_header(); ?>
<div class="hero">
    <div class="hero__inner">
        <h1 class="hero__inner__heading"><?php the_title() ?></h1>
    </div>
    <ul class="hero__topic-path">
        <li class="hero__topic-path__li">
            <a href="<?php echo home_url('/') ?>">Home</a>
        </li>
        <li class="hero__topic-path__li">
            <a href="<?php echo home_url('/blog') ?>">Blog</a>
        </li>
        <li class="hero__topic-path__li">
            <span><?php the_title() ?></span>
        </li>
    </ul>
</div>
<main>
    <div class="p-blog-detail">
        <div class="container">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="post-list__thumb">
                        <?php if (has_post_thumbnail()):
                            the_post_thumbnail('detail-thumbnail', ['class' => 'p-blog-detail__thumb__image',]);
                        else: ?>
                            <div class="p-blog-detail__thumb__image__empty"></div>
                        <?php endif; ?>
                    </div>

                    <div class="wysiwyg">
                        <?php the_content() ?>
                    </div>
                <?php endwhile;
            endif ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>