<?php
// Include main stylesheet
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');


// Include main script 
wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), 1.1, true);
