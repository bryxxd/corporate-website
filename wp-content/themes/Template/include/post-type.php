<?php

function custom_post_type_works()
{
    $args = array(
        'labels' => array(
            'name' => __('Works'),
            'singular_name' => __('Work')
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail')
        
    );
    register_post_type('works', $args);
}

add_action('init', 'custom_post_type_works');

function works_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => __('Work Categories'),
            'singular_name' => __('Work Category')
        ),
        'hierarchical' => true,
        'show_in_rest' => true
    );
    register_taxonomy('work_category', 'works', $args);
}

add_action('init', 'works_taxonomy');
