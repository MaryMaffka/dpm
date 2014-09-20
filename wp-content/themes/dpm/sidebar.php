<div id="sidebar">
	<div id="text-block">
		<div class="top-shadow">
			<h4>ПОСЛЕДНИЕ НОВОСТИ</h4>
		</div>
		<div class="center">
			<div class="text-entry">
			<?php $the_query = new WP_Query( 'showposts=3' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<p class="date-news"><?php the_date();?></p><br />
					<a class="news-head" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					<p><?php the_excerpt(); ?></p><br>
				<?php endwhile;?>

			</div>
		<div class="bottom-shadow">
			<p>
				<a class="read-more" href="/dpm/ua/news/">все новости</a>
			</p>
	   </div>
 </div>
</div>	
