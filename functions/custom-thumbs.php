<?php
//Adding in the custom image sizes
set_post_thumbnail_size( 300, 9999 ); // Normal post thumbnails
add_image_size( 'headshot', 9999, 150 ); // proportional crop
add_image_size( 'small-headshot',150, 150, array('center', 'top')); // proportional crop
add_image_size( 'company-logo', 9999, 150 ); // proportional crop
?>