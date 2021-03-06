
<html <?php language_attributes(); ?>>
	<head>

		<title><?php bloginfo('name'); wp_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<div class="main">
		<?php get_header();?>	
    <?php $code = pll_current_language();?>
			<div id="box-content">
    			<div id="content">	
    			<table id="table-main" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e("ПОСЛЕДНИЕ",'dpm'); ?> <strong><?php _e("НОВОСТИ",'dpm'); ?></strong></h5>
                        	<?php                                                 		 
										        $the_query = new WP_Query( array('category_name' => 'news-'.$code));
										        while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            		<p class="date-on-main"><?php the_date();?></p>
                            		<a class="news-title" href="<?php the_permalink();?>"><?php the_title();?></a>
                            		<p><?php the_content();?></p> 
                            		<br/>                     
                            		<p><a class="read-more-on-main" href="<?php bloginfo('url');?>/news-<?php echo $code;?>/"><?php _e("все новости",'dpm'); ?></a></p>                            		
										<?php endwhile; ?>
                        </div>
                	</div>
                </td>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e("КАФЕДРА <strong>&laquo;ДПМ&raquo;</strong>","dpm");?></h5>
                         <?php                                                 		 
										            $the_query = new WP_Query('name=history');
										            $the_query -> the_post(); ?>
                            		<p class="select"><?php the_title();?></p>
                            		<div class="img-on-main"><?php the_post_thumbnail(80); ?></div>
                            		<p><?php the_excerpt();?></p>                      
                            		<p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p> 
										            <?php $the_query = new WP_Query('category_name=department');
										           	$the_query -> the_post(); ?>
                            		<p class="select"><?php the_title();?></p>
                            		<p><?php the_excerpt();?></p>                      
                            		<p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p>                            		
                        </div>
                	</div>
                </td>
                </tr>
                <tr>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e("<strong>СБОРНИК</strong> НАУЧНЫХ ТРУДОВ</h5>",'dpm'); ?></h5>
                          <?php                                                      
                                $the_query = new WP_Query('category_name=science-'.$code);
                                //var_dump($the_query);exit();
                                $the_query -> the_post(); ?>
                                <div class="img-on-main"><?php the_post_thumbnail(80); ?></div>
                                <p><?php the_excerpt();?></p>                           
                          <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p><br />
                          

                          <p  class="select"><?php _e("Доступные выпуски журнала:",'dpm');?></p>
                            <table width="100%" border="0">
                              <tr>
                                <td>
                                    <ul style="width: 100px;">
                                      <li><a href="/dpm/ru/science/2008/47/">2008 - 47</a></li>
                                      <li><a href="/dpm/ru/science/2008/36/">2008 - 36</a></li>
                                      <li><a href="/dpm/ru/science/2007/38/">2007 - 38</a></li>
                                      <li><a href="/dpm/ru/science/2007/22/">2007 - 22</a></li>
                                      <li><a href="/dpm/ru/science/2006/32/">2006 - 32</a></li>
                                    </ul>
                                </td>
                                <td>
                                	<div class="box-dwnl-big"><a style=" padding-top:10px;" class="dwnl-big" href="http://library.kpi.kharkov.ua/vestnik.html" target="_new">ВЕСТНИК НТУ &quot;ХПИ&quot;<br />&ndash; АРХИВ НОМЕРОВ<br />НАЧИНАЯ С 2008 ГОДА</a></div>
                                </td>
                              </tr>
                            </table>

                        </div>
                	</div>
                </td>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e("<strong>ОБРАЗОВАНИЕ</strong> НА КАФЕДРЕ",'dpm');?></h5>
                        	
                        	<?php $query = new WP_Query( 'name=education' );?>
                           <?php $query->the_post();?> <div class="img-on-main"><?php the_post_thumbnail(90);?></div>
                          <p class="select"><?php the_title();?></p>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p><br>
                              
											<?php $query = new WP_Query( 'name=employment' );$query->the_post();the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p><br/>
                                <p><?php $query = new WP_Query( 'name=vacancies' );$query->the_post();the_excerpt();?></p>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p>
                              
                        </div>
                	</div>
                </td>
              </tr>
				<tr>
                <td>
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e("СПЕЦ. СОВЕТ И <strong>СОТРУДНИКИ</strong>",'dpm');?></h5>
                        		<?php $query = new WP_Query( 'name=council' );?>
                           <?php $query->the_post();?> <div class="img-on-main"><?php the_post_thumbnail(90);?></div>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p><br>
                            <?php $query = new WP_Query( 'name=specialties' );?>
                           <?php $query->the_post();?>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>"><?php _e("подробнее",'dpm'); ?></a></p><br>                                                         
                            <p class="select"><?php _e("Сотрудники кафедры:",'dpm'); ?></p>
                            <ul>
                                <li><a href="<?php bloginfo('url'); ?>/employees/"><?php _e("Преподаватели",'dpm');?></a></li>
                                <li><a href="<?php bloginfo('url'); ?>/employees/researchers/"><?php _e("Научные сотрудники","dpm");?></a></li>
                                <li><a href="<?php bloginfo('url'); ?>/employees/postgraduates/"><?php _e("Аспиранты","dpm"); ?></a></li>
                              </ul>
                        </div>
                	</div>
                </td>
                <td>
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><?php _e('<strong>СТУДЕНТЫ</strong> КАФЕДРЫ</h5>','dpm');?></h5>
                            <img class="img-on-main" src="/dpm/images/germany/2005_1.jpg" width="90" height="68" alt="Practice" />
                            <p class="select"><?php _e("Практика студентов:","dpm"); ?></p>
                            <ul style="margin-left:110px;">
                              <?php $query = new WP_Query( 'category_name=best_works-'.$code);?>
                              <?php 
                              //var_dump($query);exit();
                              $query->the_post(); 
                                    the_title();?>
                              <li><a href="/dpm/ru/students/practice/sum2012/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2012 г. под руководством доц. Ларина А.А.</a></li>
                              <li><a href="/dpm/ru/students/practice/sum2005/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2005 г. под руководством доц. Трубаева А.И.</a></li>
                              <li><a href="/dpm/ru/students/practice/sum2001/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2001 г. под руководством доц. Овчаренко В.В.</a></li></ul>
                            <p><a class="read-more-on-main" href="/dpm/ru/students/practice/"><?php _e("подробнее",'dpm'); ?></a></p><br />
                            <p class="select"><?php _e("Последние лучшие работы студентов:","dpm");?></p>
                            <ul>
                                  <li><a href="/dpm/ru/students/2010/chess/">Конкурсная работа &laquo;ШАХМАТЫ&raquo;</a></li>
                                  <li><a href="/dpm/ru/students/2010/engine/">Разработка добавления (add-in) к САПР SolidWorks для автоматизированного проектирования и балансировки КШМ различных схем ДВС</a></li>
                                  <li><a href="/dpm/ru/students/2010/bolt/">Исследование напряженно-деформированного состояния болтового соединения на основе современных подходов</a></li>
                          </ul>
                            <p><a class="read-more-on-main" href="/dpm/ru/students/"><?php _e("все работы","dpm");?></a></p>
                        </div>
                	</div>
                </td>
              </tr>
                </table>
    			</div>
    			
    		</div>
    	 	<?php get_footer();?>
		</div>
<?php //wp_footer(); ?>
</body>
</html> 
