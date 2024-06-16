<?php get_header(); ?>
<div class="container">
    <div class="hero">
        <h1 class="hero__heading"><?php the_title() ?></h1>
        <ul class="hero__topic-path">
            <li class="hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="hero__topic-path__li">
                <a href="<?php echo home_url('/blog') ?>">Blog</a>
            </li>
            <li class="hero__topic-path__li title">
                <?php
                $category = get_the_category();
                $cat_name = $category[0]->cat_name;
                ?>
                <span class="hero__topic-path__li__title"><?php echo $cat_name ?></span>
            </li>
        </ul>
        <p class="hero__post-date">Date : <?php the_time('d/m/Y') ?></p>
    </div>
</div>

<main>
    <div class="p-blog-detail">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <div class="post-list__thumb">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('detail-thumbnail', ['class' => 'p-blog-detail__thumb__image',]);
                        else : ?>
                            <div class="p-blog-detail__thumb__image__empty"></div>
                        <?php endif; ?>
                    </div>

                    <div class="wysiwyg">
                        <?php the_content() ?>
                    </div>

                    <?php $authors = get_the_terms(get_the_ID(), "post_author"); ?>
                    <div class="p-blog-detail__author">
                        <?php if (!empty($authors)) : ?>
                            <?php foreach ($authors as $author) : ?>
                                <?php $author_profile = get_field('profile_field', 'post_author_' . $author->term_id); ?>
                                <div class="p-blog-detail__author__inner">
                                    <figure class="p-blog-detail__author__inner__figure">
                                        <?php if (!empty($author_profile)) : ?>
                                            <img class="p-blog-detail__author__inner__figure__img" src="<?php echo wp_get_attachment_url($author_profile["ID"]); ?>" alt="author-profile">
                                        <?php else : ?>
                                            <img class="p-blog-detail__author__inner__figure__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/post-placeholder.jpg" alt="profile-default">
                                        <?php endif; ?>
                                    </figure>
                                    <div class="p-blog-detail__author__inner__details">
                                        <p class="p-blog-detail__author__inner__details__name"><?php echo esc_html($author->name); ?></p>
                                        <span class="p-blog-detail__author__inner__details__description"><?php echo term_description($author->term_id, 'post_author');  ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

        </div>
<?php endwhile;
            endif ?>

    </div>
    </div>

    <?php get_template_part('./template/contact-banner') ?>

</main>

<?php get_footer(); ?>