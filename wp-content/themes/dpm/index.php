
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
    			<table id="table-main" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5>ПОСЛЕДНИЕ <strong>НОВОСТИ</strong></h5>
                        	<?php                                                 		 
										$the_query = new WP_Query( array('category_name' => 'news'));
										while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            		<p class="date-on-main"><?php the_date();?></p>
                            		<a class="news-title" href="<?php the_permalink();?>"><?php the_title();?></a>
                            		<p><?php the_content();?></p> 
                            		<br/>                       
                            		<p><a class="read-more-on-main" href="/dpm/ru/news/">все новости</a></p>                            		
										<?php endwhile; ?>
                        </div>
                	</div>
                </td>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5>КАФЕДРА <strong>&laquo;ДПМ&raquo;</strong></h5>
                         <?php                                                 		 
										$the_query = new WP_Query('name=history');
										 $the_query -> the_post(); ?>
                            		<p class="select"><?php the_title();?></p>
                            		<div class="img-on-main"><?php the_post_thumbnail(80); ?></div>
                            		<p><?php the_excerpt();?></p>                      
                            		<p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p> 
										<?php $the_query = new WP_Query('category_name=department');
										 	$the_query -> the_post(); ?>
                            		<p class="select"><?php the_title();?></p>
                            		<p><?php the_excerpt();?></p>                      
                            		<p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p>                            		
                        </div>
                	</div>
                </td>
                </tr>
                <tr>
                <td class="td-first">
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><strong>СБОРНИК</strong> НАУЧНЫХ ТРУДОВ</h5>
                  			<img class="img-on-main" src="/dpm/images/onpage/journal_sm.png"  alt="Journal" />
                            <p> Сборник научных трудов &quot;Динамика и прочность машин&quot; <a href="http://www.kpi.kharkov.ua/">НТУ &quot;ХПИ&quot;</a> основан в 1965 году. В нем публикуются материалы по статической и динамической прочности, надежности и оптимизации элементов конструкций. Предназначен для научных работников и специалистов в области динамики и прочности машин...</p>
                          <p><a class="read-more-on-main" href="/dpm/ru/science/">подробнее</a></p><br />
                          <p  class="select">Доступные выпуски журнала:</p>
                          
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
                        	<h5><strong>ОБРАЗОВАНИЕ</strong> НА КАФЕДРЕ</h5>
                        	
                        	<?php $query = new WP_Query( 'name=education' );?>
                           <?php $query->the_post();?> <div class="img-on-main"><?php the_post_thumbnail(90);?></div>
                          <p class="select"><?php the_title();?></p>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p><br>
                              
											<?php $query = new WP_Query( 'name=employment' );$query->the_post();the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p><br/>
                                <p><?php $query = new WP_Query( 'name=vacancies' );$query->the_post();the_excerpt();?></p>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p>
                              
                        </div>
                	</div>
                </td>
              </tr>
				<tr>
                <td>
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5>СПЕЦ. СОВЕТ И <strong>СОТРУДНИКИ</strong></h5>
                        		<?php $query = new WP_Query( 'name=council' );?>
                           <?php $query->the_post();?> <div class="img-on-main"><?php the_post_thumbnail(90);?></div>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p><br>
                            <?php $query = new WP_Query( 'name=specialties' );?>
                           <?php $query->the_post();?>
										<?php the_excerpt();?>
                              <p><a class="read-more-on-main" href="<?php the_permalink();?>">подробнее</a></p><br>                                                         
                            <p class="select">Сотрудники кафедры:</p>
                            <ul>
                                <li><a href="<?php bloginfo('url'); ?>/employees/">Преподаватели</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/employees/researchers/">Научные сотрудники</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/employees/postgraduates/">Аспиранты</a></li>
                              </ul>
                        </div>
                	</div>
                </td>
                <td>
                	<div class="text-block-main">
                    	<div class="text-main">
                        	<h5><strong>СТУДЕНТЫ</strong> КАФЕДРЫ</h5>
                            <img class="img-on-main" src="/dpm/images/germany/2005_1.jpg" width="90" height="68" alt="Practice" />
                            <p class="select">Практика студентов:</p>
                            <ul style="margin-left:110px;">
                            <li><a href="/dpm/ru/students/practice/sum2012/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2012 г. под руководством доц. Ларина А.А.</a></li>
                            <li><a href="/dpm/ru/students/practice/sum2005/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2005 г. под руководством доц. Трубаева А.И.</a></li>
                            <li><a href="/dpm/ru/students/practice/sum2001/">&quot;Студенты кафедры ДПМ на практике в Германии&quot; 2001 г. под руководством доц. Овчаренко В.В.</a></li></ul>
                            <p><a class="read-more-on-main" href="/dpm/ru/students/practice/">подробнее</a></p><br />
                            <p class="select">Последние лучшие работы студентов:</p>
                            <ul>
                                  <li><a href="/dpm/ru/students/2010/chess/">Конкурсная работа &laquo;ШАХМАТЫ&raquo;</a></li>
                                  <li><a href="/dpm/ru/students/2010/engine/">Разработка добавления (add-in) к САПР SolidWorks для автоматизированного проектирования и балансировки КШМ различных схем ДВС</a></li>
                                  <li><a href="/dpm/ru/students/2010/bolt/">Исследование напряженно-деформированного состояния болтового соединения на основе современных подходов</a></li>
                          </ul>
                            <p><a class="read-more-on-main" href="/dpm/ru/students/">все работы</a></p>
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
