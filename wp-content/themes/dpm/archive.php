<html>
	<head>
		<title><?php bloginfo('name'); wp_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
	<div class="main">
		<?php get_header();?>	
			<div id="box-content">		
    				<div id="content">
    					<div id="text-content">    				
    						<div id="text-box-content">  					
								<?php 
									$category = get_the_category();	
									$slug = $category[0]->slug;
									//print_r($category);exit();
									if(is_category('news-ru') || is_category('students-ru')){
										if(is_category('students-ru')){?>
    						 				<h1><?php _e('СТУДЕНТЫ КАФЕДРЫ.<strong>ЛУЧШИЕ РАБОТЫ</strong><','dpm');?>/h1><br/>
    						 			<?php }else {?>
    						 				<h1><?php echo $category[0]->cat_name;?>/h1><br/>
    									<?php } ?>
          							<table class="students" border="0" cellspacing="0" cellpadding="0">										
										<?php
										$the_query = new WP_Query( array('category_name' => $slug));
										while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
											<tr>
												<td class="td-image-st"><p class="date"><?php _e("Дата публикации:","dpm" );?><?php the_date();?></p><br/>
													<div class="img-left"><?php the_post_thumbnail();?></div>												
												</td>
												<td class="td-descr-st"><br/><br/>
													<h2 style="color:#293643"><?php the_title();?></h2>
													<p><?php the_excerpt(); ?></p><br>
													<p><a class="read-more" href="<?php the_permalink() ?>"><?php _e("подробнее","dpm"); ?></a></p>
												</td>
											</tr>
										<?php endwhile; 
											}?>
											
									</table>		
							</div>
						</div>
						<div id="box-text-block">
							<?php //get_sidebar('cat');?>												
	 					</div>
						<div id="box-text-block">
							<?php echoSidebar("department");
							//get_sidebar("category");?>												
	 					</div>
					</div>									
				</div>
		<?php get_footer();?>								
   </div>
<?php wp_footer(); ?>
</body>
</html> 