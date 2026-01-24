<?php
function add_theme_scripts()
{
    // Include main stylesheet
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    
    // Include main script 
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/base/index.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
