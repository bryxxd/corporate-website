<?php get_header(); ?>
<div class="topic-path">
    <ul class="topic-path__ul">
        <li class="topic-path__li">
            <a class="topic-path__link" href="<?php echo home_url('/') ?>">Home</a>
        </li>
        <li class="topic-path__li">
            <a class="topic-path__link" href="<?php echo home_url('/blog/') ?>">Post List</a>
        </li>
        <li class="topic-path__li">
            <span><?php the_title() ?></span>
        </li>
    </ul>
</div>
<main>
    <div class="p-blog-detail">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <h1 class="p-blog-detail__title"><?php the_title() ?></h1>

                    <div class="post-list__thumb">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('post-thumbnail', ['class' => 'p-blog-detail__thumb__image',]);
                        else : ?>
                            <div class="p-blog-detail__thumb__image__empty"></div>
                        <?php endif; ?>
                    </div>

                    <div class="content">
                        <?php the_content() ?>
                    </div>
            <?php endwhile;
            endif ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>