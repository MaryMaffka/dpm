
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
               			if(have_posts()) {the_post(); ?>
									<h1 style="text-transform: uppercase;"><strong><?php the_title();?></strong></h1><br />
                				<p><?php the_content();?></p> 
									<?php } ?>
							</div>

						</div>
						<!--<div id="box-text-block">
							<?php //get_sidebar('cat');?>												
	 					</div>-->
						<div id="box-text-block">
							<?php get_sidebar();?>												
	 					</div>
					</div>									
				</div>
		<?php get_footer();?>								
   </div>
<?php //wp_footer(); ?>
</body>
</html> 
 
