<?php get_header(); ?>
<div class="p-works-detail">

    <div class="container">
        <div class="c-hero">
            <h1 class="c-hero__heading"><?php the_title() ?></h1>
            <?php
            $categories = get_the_terms(get_the_ID(), 'works_category') ?? [];
            ?>

            <ul class="p-works-detail__category">
                <?php foreach ($categories as $category): ?>
                    <li class="p-works-detail__category__item"><?php echo esc_html($category->name); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <main>
        <div class="container">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>
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