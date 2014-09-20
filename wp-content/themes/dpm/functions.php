<?php
add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(200,150, false);

if ( function_exists('register_sidebar') )
register_sidebar(2);
	register_nav_menu( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' )
		// 'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );
?>