<?php
// enable feauture image
add_theme_support( 'post-thumbnails' );

// post thumbnail size
// add_image_size( string $name, int $width, int $height, bool|array $crop = false )
add_image_size('post-thumbnail', 558, 371 , true);

function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2) + 1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1!= $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a class='pagination__anchor' href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a class='pagination__anchor' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i = 1; $i <= $pages; $i++)
         {
             if (1!= $pages && (!($i >= $paged + $range+1 || $i <= $paged - $range - 1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='pagination__anchor current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive pagination__anchor' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a class='pagination__anchor' href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) echo "<a class='pagination__anchor' href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
