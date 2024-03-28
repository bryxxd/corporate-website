<?php
// enable feauture image
add_theme_support( 'post-thumbnails' );

// post thumbnail size
// add_image_size( string $name, int $width, int $height, bool|array $crop = false )
add_image_size('post_thumbnail', 558, 371 , true);