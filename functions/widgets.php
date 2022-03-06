<?php 
// Deregister Sidebars
function remove_sidebars () {
	unregister_sidebar( 'hero' );
    unregister_sidebar( 'herocanvas' );
	unregister_sidebar( 'statichero' );
	unregister_sidebar( 'footerfull' );
	unregister_sidebar( 'left-sidebar' );
	unregister_sidebar( 'right-sidebar' );
}

add_action( 'widgets_init', 'remove_sidebars', 11 );
?>