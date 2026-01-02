<?php get_header(); ?>
<div class="container">
    <div class="c-hero">
        <h1 class="c-hero__heading">Works</h1>
        <ul class="c-hero__topic-path">
            <li class="c-hero__topic-path__li">
                <a href="<?php echo home_url('/') ?>">Home</a>
            </li>
            <li class="c-hero__topic-path__li">
                <span>Works</span>
            </li>
        </ul>
    </div>
</div>
<main>
    <div class="p-works">
        <div class="container">
            <div class="c-category-checkbox">
                <details class="c-category-checkbox__details">
                    <summary class="c-category-checkbox__details__summary">Filter by Category</summary>
                    <form class="c-category-checkbox__form">
                        <div class="c-category-checkbox__form__categories">
                            <?php
                            $categories = get_terms([
                                'taxonomy' => 'works_category',
                                'hide_empty' => false,
                            ]);
                            foreach ($categories as $category):
                                $checked = isset($_GET['works_category']) && in_array($category->slug, $_GET['works_category']) ? 'checked' : '';
                            ?>
                                <label class="c-category-checkbox__label">
                                    <input class="c-category-checkbox__label__input" type="checkbox" name="works_category[]"
                                        value="<?php echo esc_attr($category->slug); ?>" <?php echo $checked; ?>>
                                    <span
                                        class="c-category-checkbox__label__text"><?php echo esc_html($category->name); ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                        <div class="c-category-checkbox__btn-wrapper">
                            <button type="submit" class="c-category-checkbox__btn">Apply</button>
                            <a class="c-category-checkbox__btn" href="<?php echo home_url('/works') ?>">Reset</a>
                        </div>
                    </form>
                </details>
            </div>

            <ul class="c-post-list p-works__post-list">
                <?php
                while (have_posts()):
                    the_post();
                    $categories = get_the_terms(get_the_ID(), 'works_category') ?? [];
                ?>
                    <li class="c-post-list__li p-works__post-list__li">
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
                            <div class="p-works__post-list__category">
                                <?php foreach ($categories as $category): ?>
                                    <span
                                        class="p-works__post-list__category__item"><?php echo esc_html($category->name); ?></span>
                                <?php endforeach; ?>

                            </div>
                            <div class="c-post-list__text__title"><?php the_title(); ?></div>

                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="c-pagination">
                <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>
            </div>
        </div>
    </div>
    <?php get_template_part('./template/contact-banner') ?>

</main>
<?php get_footer(); ?>