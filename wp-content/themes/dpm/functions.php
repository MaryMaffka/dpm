<?php
load_theme_textdomain( 'dpm', TEMPLATEPATH.'/languages' );
add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(200,150, false);
add_theme_support('menus');

if ( function_exists('register_sidebar') )
register_sidebar(1);
register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );

function echoSidebar($category) {
	$title = get_category_by_slug($category);
	echo "<div id='sidebar'>
	<div id='text-block'>
		<div class='top-shadow'>
			<h4>";
		echo $title->name;
			 echo " </h4>
		</div>
		<div class='center'>
			<div class='text-entry'>
				<p>";
				 _e('Более детальная информация:','dpm');
				 echo "</p>
				<ul>
				";

	$the_query = new WP_Query( array('category_name' => $category));
	while ($the_query -> have_posts()) {
	 $the_query -> the_post();
	 echo '<li>
			<a class="news-head" href="'; the_permalink(); echo '">'; the_title(); 
			echo '</a>
			</li>';
	}
	echo '</ul>
			</div>
		<div class="bottom-shadow">
	   </div>
 </div>
</div>';
}
?>