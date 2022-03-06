<?php
//Adding in the custom image sizes
set_post_thumbnail_size( 300, 9999 ); // Normal post thumbnails
add_image_size( 'headshot', 250, 250, array('center', 'top') ); // proportional crop
?>