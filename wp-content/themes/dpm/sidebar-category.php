<div id="sidebar">
	<div id="text-block">
		<div class="top-shadow">
			<h4><?php _e("Кафедра","dpm");?> </h4>
		</div>
		<div class="center">
			<div class="text-entry">
				<p><?php _e("Более детальная информация:","dpm");?></p>
			<?php $the_query = new WP_Query(array('category_name' => 'department')); ?>
				<ul>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<li>
						<a class="news-head" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile;?>
				</ul>
			</div>
		<div class="bottom-shadow">
	   </div>
 </div>
</div>	 
