<?php 

// Change post slug 'blog'
add_filter('register_post_type_args', function ($args, $post_type) {
    if ('post' === $post_type) {
        $args['rewrite'] = [
            'slug' => 'blog', 
            'with_front' => false,
        ];
        $args['has_archive'] = 'blog';
    }
    return $args;
}, 10, 2);

add_filter('post_type_archive_link', function ($link, $post_type) {
    if ('post' === $post_type) {
        $post_type_object = get_post_type_object('post');
        $slug = $post_type_object->has_archive;
        $link = get_home_url(null, '/333' . $slug . '/');
    }
    return $link;
}, 10, 2);

function add_article_post_permalink($permalink)
{
    $permalink = '/blog' . $permalink;
    return $permalink;
}

add_filter('pre_post_link', 'add_article_post_permalink');
