<?php
/**
 * Block Layouts One
 *
 * @package color_newsmagazine
 */

if(get_theme_mod('color_newsmagazine_block_1_enable','1')):
	
	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_1_google','0') ); 
	
	function color_newsmagazine_block_1_enable() {
	$title 				= get_theme_mod('color_newsmagazine_b1_title');
	$bgImage 			= get_theme_mod('color_newsmagazine_b1_image');
	$cat 				= get_theme_mod('color_newsmagazine_b1_category_name','');
	$author_1 			= get_theme_mod('color_newsmagazine_b1_authorlist','0');
	$post_no 			= get_theme_mod('color_newsmagazine_b1_number','3');
	$orderby 			= get_theme_mod('color_newsmagazine_b1_order','date');
	$admin_enable 		= get_theme_mod('color_newsmagazine_b1_author_enable','1');
	$date_enable 		= get_theme_mod('color_newsmagazine_b1_date_enable','1');
	$comment_enable 	= get_theme_mod('color_newsmagazine_b1_comment_enable','1');
	// Start
	$post_read_enable 	= get_theme_mod('color_newsmagazine_b1_post_read_enable','1');
	$post_time_enable 	= get_theme_mod('color_newsmagazine_b1_post_time_enable','1');
	$More_stories_enable = get_theme_mod('color_newsmagazine_more_stories_enable','1');
	
	// End
		$arguments = array(
			'category_name'	=> esc_attr( $cat ),
			'posts_per_page' => absint( $post_no ),
			'author'	   => absint( $author_1 ),
			'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
			'paged'          => get_query_var('paged'),

			'ignore_sticky_posts' => 1
		);
		$query = new WP_Query( $arguments );
		if( $query->have_posts() ) :
			?>
			<section class="news-style1 section off-white animated wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" >
				<div class="container" id="support_more-newslayout-1">
					<?php if ($title != Null )  { ?>
						<div class="row">
							<div class="col-lg-12 position-initial ">
								<header>
									<h2 class="cat-title">
										<span><?php  echo esc_html( $title ); ?></span>
									</h2>
								</header>
							</div>
						</div>
					<?php } ?> 
					<div class="row border-cattitle pt-3 " id='newslayout-1'>
						<?php
							while( $query->have_posts() ) :
								$query->the_post();
								?>
								<div class="col-lg-4 col-md-6 mb-3">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<!-- Single News -->
									<div class="single-news blog-head card">
										<?php 
										if(has_post_thumbnail()):?>
											<div class="news-head animated wow fadeIn" data-wow-duration="3s" data-wow-delay="0.8s" data-wow-offset="200">
												<?php the_post_thumbnail('color-newsmagazine-thumbnail-1');?>
											</div>
										<?php elseif (! has_post_thumbnail()): ?>
										<div class="news-heads animated wow fadeIn "  data-wow-duration="3s" data-wow-delay="0.8s" data-wow-offset="200">
											<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
											</div>
										<?php endif;
										?>
										<div class="content card-body " >
											<?php if($admin_enable): ?>
												<div class="meta">
													<span class="author">
														<i class="fas fa-user-tie"></i>
														<?php color_newsmagazine_posted_by();?>																			
													</span>
												</div>
											<?php endif; ?>
											<div class="meta">
												<?php if($date_enable): ?>
												<span class="date">
													<i class="fas fa-clock"></i>
													<?php color_newsmagazine_posted_on();?>
												</span>
												<?php endif;
												if($comment_enable): ?>
													<span class="date">
														<i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?>
													</span>
												<?php endif; 
								
												if($post_read_enable):
													color_newsmagazine_count_content_words( esc_html(get_the_ID()));
												endif;	
												if($post_time_enable):?>
													<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
												<?php endif;	
												?>
												<!-- Added Featured End -->
											</div>
											<h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<?php the_excerpt();

											global $color_newsmagazine_currenttime2;
											$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
											$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
											color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2); ?>
											
										</div>
									</div>
									
									</article>
								</div>
								
								<?php
							
							endwhile;
						?>
					</div>
					<?php
					if ($More_stories_enable == 1) :
						if($query->found_posts > $post_no):?>
							<div class="row">
								<div class = "col-lg-12 pb-2 col-12">
										<a href="#" class="loadmorebtn-cust" title="Show More" 
										data-cat="<?php echo esc_attr( $cat );?>" 
										data-post_no="<?php echo absint( $post_no );?>" 
										data-author_1="<?php echo absint( $author_1 );?>" 
										data-orderby="<?php echo esc_attr( $orderby ) ;?>" 
										data-date_enable="<?php echo absint( $date_enable );?>" 
										data-comment_enable="<?php echo absint( $comment_enable );?>"
										data-post_read_enable="<?php echo absint( $post_read_enable );?>"
										data-post_time_enable="<?php echo absint( $post_time_enable );?>"
										data-excerpt="<?php echo absint( $excerpt ); ?>"
										>
										<?php
											echo '<div class="pagination-number font-italic "><p>';
											esc_html_e('More Stories','color-newsmagazine'); 
										?>
										</p></div> 

										</a>
									
								</div>
							</div>
						<?php endif;
					endif; ?>
				</div>
			</section>
		<?php endif;
		wp_reset_postdata(); 
	}
	color_newsmagazine_block_1_enable();
endif;