<?php 
/*
Template Name: personal
*/
?>  
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
               			<?php	
               		   	if(have_posts()) {the_post(); ?>

									<h1 align="center"><strong><?php the_title();?></strong></h1><br />
							<div class="box_info">
									<?php the_post_thumbnail(array(200,180), array("class" => "img-left"));  ?>
									<?php 
										$id_post = get_the_ID();
										$arr_info = get_post_meta($id_post); 
									?>
								<div class="main_info">
	            					<?php if(isset($arr_info['date_of_birth']))?><p><strong><?php _e("Дата рождения:","dpm");?></strong><span><?php echo $arr_info['date_of_birth'][0];?></span></p>
                					<?php if(isset($arr_info['place_of_birth']))?><p><strong><?php _e("Место рождения:","dpm");?></strong><span><?php echo $arr_info['place_of_birth'][0];?></span></p>
                					<?php if(isset($arr_info['email']))?><p><strong>E-mail:</strong> <span><?php echo $arr_info['email'][0];?></span></p>
                				</div>
                			</div>
                				<div class="other_info">
                					<?php if(isset($arr_info['rank_and_position'])){?>
                					<div class="items_info">
                						<div class="header_item_info"><?php _e("Звания и должности:","dpm");?></div>
                						<div class="text_item_info"><?php echo $arr_info['rank_and_position'][0];?></div>
                					</div>
                					<?php }?>
                					<?php if(isset($arr_info['lecture'])){?>	
                					 <div class="items_info">
                						<div class="header_item_info"><?php _e("Лекционные курсы :" ,"dpm");?></div>
                						<ul class="lecture_list">
                							<?php foreach ($arr_info['lecture'] as $key => $item) {?>
                							<li><?php echo $item;?></li>
                							<?php } ?>
                						</ul>
                					</div>
                					<?php }?>
                					<?php if(isset($arr_info['science_interes'])){?>
                 					 <div class="items_info">
                						<div class="header_item_info"><?php _e("Научные интересы:",'dpm');?></div>
                						<ul class="lecture_list">
                						<?php foreach ($arr_info['science_interes'] as $key => $item) {?>
                							<li><?php echo $item;?></li>
                							<?php } ?>
                						</ul>
                					</div>
                					<?php }?>
               					<?php if(isset($arr_info['outside interest'])){?>
                					<div class="items_info">
                						<div class="header_item_info"><?php _e("Хобби и интересы:","dpm");?></div>
                						<div class="text_item_info"><?php echo $arr_info['outside interest'][0];?></div>
                					</div>
                					<?php }?>                						               							
                						<p><?php the_content();?></p> 
									<?php } ?>		
								</div>						
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
