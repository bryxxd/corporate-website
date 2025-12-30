<?php get_header(); ?>
<div class="container">
    <div class="c-hero">
        <h1 class="c-hero__heading"><?php the_title() ?></h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/blog') ?>">Blog</a>
            </li>
            <li class="c-hero__topic-path__li title">
                <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                ?>
                <span class="c-hero__topic-path__li__title"><?php echo $cat_name ?></span>
            </li>
        </ul>
        <p class="c-hero__post-date">Date : <?php the_time('d/m/Y') ?></p>
    </div>
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

                    <div class="c-wysiwyg">
                        <?php the_content() ?>
                    </div>
                </div>
            <?php endwhile;
            endif ?>

    </div>
    </div>

    <?php get_template_part('./template/contact-banner') ?>

</main>

<?php get_footer(); ?>