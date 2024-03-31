<?php

if(get_theme_mod('color_newsmagazine_mainnews_total_enable','1')):
	function color_newsmagazine_main_news(){ 
	
	$newcolor1= hexdec(substr(get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333'), 1));  /** convert to hex without # */
	global $color_newsmagazine_currenttime1;
	$counter1 = $counter2 = '100000';?>

	<section id ="content" class="news-slider section <?php if ( get_theme_mod('color_newsmagazine_mainnews_upperslider_background_image') != null ) { echo 'havebgimage' ;};?> " >
		<div class="container "  >
		<?php dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_mainnews_google','0') ); ?>
			<div class="row ">
			<!-- Header left News -->
				<?php if (get_theme_mod('color_newsmagazine_leftnews_enable','1') == 1 ): ?>
					<div class="col-lg-3 col-md-5 mb-5 animated wow slideInLeft" data-wow-duration = "3s" data-wow-delay="0.5s">
						<div >
							<h2 class="cat-title">
								<span><?php  echo esc_html(get_theme_mod('color_newsmagazine_leftnews_title')); ?></span>
							</h2>
						</div>
						<div id="left-special-news" class="special-news blog-head responsive-left ">
							<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => absint(get_theme_mod('color_newsmagazine_leftnews_number','6')),
								'category_name' => esc_attr(get_theme_mod('color_newsmagazine_leftnews_category_name','')),
								'author' => absint(get_theme_mod ('color_newsmagazine_leftnews_authorlist','0')),
								'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_leftnews_order', 'date')) => 'DSC', 'date' => 'DSC'),
								'order'     => 'DSC',
								'ignore_sticky_posts' => 1
							);
							$sliderloop = new WP_Query($args);
							$count_post=1;
							if( $sliderloop->have_posts() ) :
								while ($sliderloop->have_posts()) : 
									$color_newsmagazine_currenttime1 = $color_newsmagazine_currenttime1 + 1562 - $counter1;
									$sliderloop->the_post(); 
									?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
										<div class="single-news ">
											<?php 
											if(get_theme_mod('color_newsmagazine_leftnews_image_enable','0')==1):
												if(has_post_thumbnail()):
													color_newsmagazine_thumbnail_8();
												
												elseif (! has_post_thumbnail()): ?>
													<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/730_487.png " >
												<?php endif;
											endif; ?>
											<div class=" mt-2 news-content <?php if(get_theme_mod('color_newsmagazine_leftnews_image_enable','0') == 0 ) { echo 'pl-0' ; } ?>">
												<p class="count-news"><?php echo esc_html($count_post) ?> </p>	
												<h3 class="small-title ml-4 pl-1" ><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												<div class="meta">
													<?php if(get_theme_mod('color_newsmagazine_leftnews_date_enable','1')==1): ?>
														<span class="date">
															<i class="fas fa-clock"></i>
															<?php color_newsmagazine_posted_on(); ?>
														</span>
													<?php endif;
													$post_id = esc_attr(get_the_id());
													color_newsmagazine_left_news_border($color_newsmagazine_currenttime1,$post_id,$newcolor1); 
													$counter1 = $counter1 + '100'; 
													
													if(get_theme_mod('color_newsmagazine_leftnews_comments_enable','0')==1): ?>
														<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
													<?php endif;
													
													if(get_theme_mod('color_newsmagazine_leftnews_readingtime_enable','1')==1):
														color_newsmagazine_count_content_words( esc_html(get_the_ID()));
													endif;	

													if(get_theme_mod('color_newsmagazine_leftnews_timeago_enable','1')==1):?>
														<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
													<?php endif;?>
													<!-- Added Featured End -->
												</div>
											</div>
										</div>
									</article>
								<?php 
								$count_post = $count_post +1;
								endwhile;
							endif; 
							wp_reset_postdata();
							?>
						</div>
						<!--/ End left News -->
					</div>
				
				<?php endif; ?>
				
				<div class="position-initial mb-2 col-md-<?php if(get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 ) { echo '12'; } else { echo '7';} ?> col-lg-<?php 
					if ( get_theme_mod('color_newsmagazine_leftnews_enable','1') == 1 & get_theme_mod('color_newsmagazine_rightnews_enable','1') == 1 )
							{ echo '6'; } 
					elseif ( get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 & get_theme_mod('color_newsmagazine_rightnews_enable','1') == 0 ) 
					{ echo '12'; } 
					else { echo '9';}?>  ">
					<div id ="mainnews-title">
						<h2 class="cat-title text-center">
							<span><?php  echo esc_html(get_theme_mod('color_newsmagazine_mainnews_upperslider_title')); ?></span>
						</h2>
					</div>
					<div class="hero-area ">
					<!-- Special News -->
						<div class="slider-activess home-slider">
							<?php
							
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => absint(get_theme_mod('color_newsmagazine_mainnews_upperslider_number','3')),
								'category_name' => esc_attr(get_theme_mod('color_newsmagazine_mainnews_upperslider_category_name','')),
								'author'	   => absint(get_theme_mod ('color_newsmagazine_mainnews_upperslider_authorlist','0')),
								'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_mainnews_upperslider_order', 'date')) => 'DSC', 'date' => 'DSC'),
								'order'     => 'DSC',
								'ignore_sticky_posts' => 1
							);

							$sliderloop = new WP_Query($args);
							if( $sliderloop->have_posts() ) :
								while ($sliderloop->have_posts()) : 
									$sliderloop->the_post(); 
									$slider_img_url = get_the_post_thumbnail_url( get_the_ID() );
									?>
									<!-- Single Slider -->
									<div class=" single-slider 
										<?php if ( get_theme_mod('color_newsmagazine_leftnews_enable','1') == 1 & get_theme_mod('color_newsmagazine_rightnews_enable','1') == 1 & get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1')==0) { echo ' yes-leftandright-nolower '; }?>
										<?php if ((get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 or get_theme_mod('color_newsmagazine_rightnews_enable','1') == 0 ) & get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1') == 0 ) { echo 'no-leftorright-lower ';} ?>
										<?php if (get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 & get_theme_mod('color_newsmagazine_rightnews_enable','1') == 0) { echo 'no-left-right';} ?> " 
											style="background-image:url(<?php echo esc_url($slider_img_url);?> )">
										<div class="slider-content ">
											<div class="slider-text cat">
												<?php if(get_theme_mod('color_newsmagazine_mainnews_upperslider_taxonomy_'.__('category','color-newsmagazine'),'1')==1):
													the_category();
												endif ?>
											</div>
											<div class="slider-text meta shadow_bbc 
												<?php if ( get_theme_mod('color_newsmagazine_leftnews_enable','1') == 1 & get_theme_mod('color_newsmagazine_rightnews_enable','1') == 1 & get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1')==0) { echo ' yes-leftandright-nolower-meta'; }?> 
												<?php if ( (get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 or get_theme_mod('color_newsmagazine_rightnews_enable','1') == 0) & get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1')==0) { echo 'either-leftorright-nolower-meta'; }?>
												">
												<h3 class="mb-3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>												<div class="meta">
												<?php if(get_theme_mod('color_newsmagazine_mainnews_upperslider_taxonomy_'.__('author','color-newsmagazine'),'1')==1): ?>
													<span class="author">
														<i class="fas fa-user-tie"></i>
														<?php color_newsmagazine_posted_by();?>	
													</span>
												<?php endif;
												
												if(get_theme_mod('color_newsmagazine_mainnews_upperslider_taxonomy_'.__('date','color-newsmagazine'),'1')==1): ?>
													<span class="date">
														<i class="fas fa-clock"></i>
														<?php color_newsmagazine_posted_on();?>
													</span>
												<?php endif;
												if(get_theme_mod('color_newsmagazine_mainnews_upperslider_taxonomy_'.__('comments','color-newsmagazine'),'1')==1): ?>
													<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
												<?php endif;
												if(get_theme_mod('color_newsmagazine_mainnews_upperslider_post_read_enable','1')==1):
													color_newsmagazine_count_content_words( esc_html(get_the_ID()));
												endif;	
												if(get_theme_mod('color_newsmagazine_mainnews_upperslider_post_time_ago_enable','1')==1):?>
													<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
												<?php endif;	
												?>
												<!-- Added Featured End -->
												</div>
												<!-- Added releated End -->
											</div>
										</div>	
									</div>
									<!--/ End Single Slider -->
								<?php endwhile;
							endif;
							wp_reset_postdata(); ?>
						</div>
						<!-- Slider Pager -->
						
					</div>
					<?Php get_template_part( 'sections/section-slide-news' ); ?>
					<!--/ End News Slider -->
				</div>
				
				<?php if (get_theme_mod('color_newsmagazine_rightnews_enable','1') == 1 ): ?>
					<div class="position-initial mb-5 col-lg-3 col-md-12 animated wow slideInRight" data-wow-duration = "3s" data-wow-delay="0.5s">
						<div >
							<h2 class="cat-title">
								<span><?php  echo esc_html(get_theme_mod('color_newsmagazine_rightnews_title')); ?></span>
							</h2>
						</div>
						<div id="right-special-news" class="special-news blog-head responsive-right <?php if (get_theme_mod('color_newsmagazine_leftnews_enable','1') == 0 and get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1') == 1) { echo 'no-left-special-news-yes-lower';} ?>">
							<!-- Special News -->
							<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => absint(get_theme_mod('color_newsmagazine_rightnews_number','3')),
								'category_name' => esc_attr(get_theme_mod('color_newsmagazine_rightnews_category_name','')),
								'author'	   => absint(get_theme_mod ('color_newsmagazine_rightnews_authorlist','0')),
								'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_rightnews_order', 'date')) => 'DSC', 'date' => 'DSC'),
								'order'     => 'DSC',
								'ignore_sticky_posts' => 1
							);
							
							$sliderloop = new WP_Query($args);
							if( $sliderloop->have_posts() ) :
								while ($sliderloop->have_posts()) : 
									$color_newsmagazine_currenttime1 = $color_newsmagazine_currenttime1 + 1562 - $counter2;
									$sliderloop->the_post(); 
									?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="single-news <?php if ( get_theme_mod('color_newsmagazine_rightnews_number','3') < 3 ) { echo 'animated wow fadeInUp'; } ?>" data-wow-duration = "2s">
											<?php 
											if(has_post_thumbnail()):
												the_post_thumbnail('color-newsmagazine-thumbnail-rightnews');									
											elseif (! has_post_thumbnail()): ?>
												<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/730_487.png " >
											<?php endif;  ?>
											<div class="news-content pt-2 pl-0 ">
												<h3 class="small-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												<div class="meta">
													<?php if(get_theme_mod('color_newsmagazine_rightnews_date_enable','1')==1): ?>
														<span class="date">
															<i class="fas fa-clock"></i>
															<?php color_newsmagazine_posted_on();?>
														</span>
													<?php endif;
													$post_id = get_the_id();
													color_newsmagazine_right_news_border($color_newsmagazine_currenttime1,$post_id,$newcolor1); 
													$counter2 = $counter2 + '100'; 
													if(get_theme_mod('color_newsmagazine_rightnews_comments_enable','1')==1): ?>
														<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
													<?php endif;
												
													if(get_theme_mod('color_newsmagazine_rightnews_readingtime_enable','0')==1):
														color_newsmagazine_count_content_words( esc_html(get_the_ID()));
													endif;	
													if(get_theme_mod('color_newsmagazine_rightnews_timeago_enable','0')==1):?>
														<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
													<?php endif; ?>
													<!-- Added Featured End -->
												</div>
											</div>
										</div>
									</article>
								<?php endwhile;
								endif;
							wp_reset_postdata(); ?>
						</div> <!--/ End Special News -->
					</div> <!-- column -->
				<?php endif ?>
			</div>
		</div>
	</section>
<?php }
color_newsmagazine_main_news();
endif;?>

<!--/ End News Slider -->