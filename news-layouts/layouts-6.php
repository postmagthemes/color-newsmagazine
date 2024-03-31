<?php

if(get_theme_mod('color_newsmagazine_block_6_enable','0') == '1'):

	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_6_google','0') );

	function color_newsmagazine_block_6_enable() {
		$cat = get_theme_mod('color_newsmagazine_block_6_category_name','');
		$author_1 = get_theme_mod('color_newsmagazine_block_6_authorlist','0');
		$orderby = get_theme_mod('color_newsmagazine_block_6_order','date');
		$title = get_theme_mod('color_newsmagazine_block_6_title');
		$post_no = get_theme_mod('color_newsmagazine_block_6_number','4');
		$admin_enable = get_theme_mod('color_newsmagazine_block_6_author_enable','0');
		$date_enable = get_theme_mod('color_newsmagazine_block_6_date_enable','0');
		$comment_enable = get_theme_mod('color_newsmagazine_block_6_comment_enable','0');
		$background_image = get_theme_mod('color_newsmagazine_block_6_image');
		// Added featured 
		$post_read_enable = get_theme_mod('color_newsmagazine_block_6_post_read_enable','0');
		$post_time_enable = get_theme_mod('color_newsmagazine_block_6_post_time_enable','0');
		?>

		<section class="<?php if ($title == Null )  { echo 'pt-5' ;} ?> news-carousel section dark" >
			<?php
			$arguments = array(
				'category_name'	=> esc_attr( $cat ),
				'posts_per_page' => absint( $post_no ),
				'author'	   => absint( $author_1 ),
				'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
				'ignore_sticky_posts' => 1
			);
			$query = new WP_Query( $arguments );
			if( $query->have_posts() ) :
				?>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 position-initial ">
							<?php if ($title != Null )  { ?>
								<header>
									<h2 class="cat-title">
										<span><?php echo esc_html($title);?></span>
									</h2>
								</header>
							<?php } ?>
							<div class="carousel-slider">
								<?php
									while( $query->have_posts() ) :
										$query->the_post();
										?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<!-- Single Carousel -->
											<div class="single-carousel blog-head">
												<!-- News Head -->
												<div class="news-head  ">
													<?php 
													if( has_post_thumbnail() ) :
														the_post_thumbnail('color-newsmagazine-thumbnail-1');
													elseif (! has_post_thumbnail()): ?>
														<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
													<?php endif; ?>
													<div class="meta shadow_bbc ">
														<?php if($admin_enable ==1): ?>
															<span class="author">
																<i class="fas fa-user-tie"></i>
																<?php color_newsmagazine_posted_by();?>
															</span>
														<?php endif;
														if($date_enable ==1): ?>
															<span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
														<?php endif;
														if($comment_enable ==1): ?>
															<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
														<?php endif;
														
														if($post_read_enable ==1):
															color_newsmagazine_count_content_words( esc_html(get_the_ID()));
														endif;	
														if($post_time_enable ==1):?>
															<span class="date"><i class="far fa-calendar-alt pl-1"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
														<?php endif; ?>
														<!-- Added Featured End -->
													</div>
												</div>
												<!-- Content -->
												<div class="content">
													<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
													<?php the_excerpt();
													
													global $color_newsmagazine_currenttime2;
													$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
													$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
													color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2);
													?>
												</div>
											</div>
											<!--/ End Single Carousel -->
										</article>
										<?php
									endwhile;								
								?>	
							</div>
						</div>
					</div>
				</div>
				<?php
			endif;
			wp_reset_postdata();
			?>
		</section>
	<?php }
	color_newsmagazine_block_6_enable();
endif;?>