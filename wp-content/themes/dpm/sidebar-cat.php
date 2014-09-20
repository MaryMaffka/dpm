<div id="sidebar">
	<div id="text-block">
		<div class="top-shadow">
			<h4> Кафедра </h4>
		</div>
		<div class="center">
			<div class="text-entry">
			<?php $the_query = new WP_Query(); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<a class="news-head" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				<?php endwhile;?>

			</div>
		<div class="bottom-shadow">
	   </div>
 </div>
</div>	 
