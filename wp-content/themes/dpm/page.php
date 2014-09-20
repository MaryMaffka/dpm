
<html <?php language_attributes(); ?>>
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
               			<?php echo "This is page"; 			
               		   	if(have_posts()) {the_post(); ?>
									<h1><strong><?php the_title();?></strong></h1><br />
                				<p><?php the_content();?></p> 
									<?php } ?>
							</div>
						</div>
					</div>
			<?php //get_sidebar();?>		  			
				</div>
				<?php get_footer();?>								
          </div>
 <?php wp_footer(); ?>
</body>
</html> 
 
 
