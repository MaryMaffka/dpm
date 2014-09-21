<?php
load_theme_textdomain( 'dpm', TEMPLATEPATH.'/languages' );
add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(200,150, false);
add_theme_support('menus');

if ( function_exists('register_sidebar') )
register_sidebar(1);
register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );
?>