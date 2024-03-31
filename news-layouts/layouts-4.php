<?php
/**
 * News Block Layouts One
 *
 * @package color_newsmagazine
 */

if(get_theme_mod('color_newsmagazine_block_4_enable','1')):

	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_4_google','0') );

	function color_newsmagazine_block_4_enable() {
	$title 				= get_theme_mod('color_newsmagazine_block_4_title');
	$cat 				= get_theme_mod('color_newsmagazine_block_4_category_name','');
	$author_1 			= get_theme_mod('color_newsmagazine_block_4_authorlist','0');
	$post_no 			= get_theme_mod('color_newsmagazine_block_4_number','5');
	$orderby 			= get_theme_mod('color_newsmagazine_block_4_order','date');
	$admin_enable 		= get_theme_mod('color_newsmagazine_block_4_author_enable','1');
	$date_enable 		= get_theme_mod('color_newsmagazine_block_4_date_enable','0');
	$comment_enable 	= get_theme_mod('color_newsmagazine_block_4_comment_enable','0');

	// Start
	$post_read_enable 	= get_theme_mod('color_newsmagazine_block_4_post_read_enable','1');
	$post_time_enable 	= get_theme_mod('color_newsmagazine_block_4_post_time_enable','1');
	// End

	?>
	<!-- News Grid -->
	<section class="news-grid section off-white  <?php if ( get_theme_mod('color_newsmagazine_block_4_image') != null ) { echo 'havebgimage' ;};?> " >
		<div class="container">
			<?php if ($title != Null )  { ?>
				<div class="row">
					<div class="col-lg-12 position-initial">
						<header>
						<h2 class="cat-title">
							<span><?php echo esc_html( $title ); ?></span>
						</h2>
						</header>
					</div>
				</div>
			<?php } ?>
			<div class="row <?php if ($title == Null )  { echo 'pt-5' ;} ?>">
				<?php
				$arguments = array(
					'category_name'	=> esc_attr($cat) ,
					'posts_per_page' => absint( $post_no ),
					'author'	   => absint( $author_1 ),
					'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
					'ignore_sticky_posts' => 1

				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) :
						$count = 1;
						while( $query->have_posts() ) :
							$query->the_post();
							if( $count == 1 or  $count == 2 ) :
								?>
								<div class="col-lg-6 col-md-6 col-sm-4 mt-1 mb-5 animated wow <?php if ($count == 1 ) { echo 'slideInLeft'; } elseif ($count == 2){ echo 'slideInRight';} ?>" data-wow-duration="2s" >
							<?php endif; 
							if( $count > 2 ) : ?>
								<div class="col-lg-4 col-md-4 col-sm-4 mt-1 mb-5 animated wow zoomIn <?php if ($count == 4) { echo 'top-25' ; }; ?> " data-wow-delay="1s" data-wow-duration="2s">
							<?php endif; ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- Single News -->
								<div class="single-news main">
									<!-- News Head -->
									<div class="news-head shadows">
										<?php
										if( has_post_thumbnail() ) :
											the_post_thumbnail('color-newsmagazine-thumbnail-5');
										elseif (! has_post_thumbnail()): ?>
											<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/625_400_lay4.png " >
										<?php endif; ?>
										<div class="content shadow_bbc">
											<?php if($admin_enable == 1): ?>
												<div class="meta">
													<span class="author">
																<i class="fas fa-user-tie"></i>
															<?php color_newsmagazine_posted_by();?>
													</span>
												</div>
											<?php endif; ?>
											<div class="meta">
												<?php if($date_enable == 1): ?>
													<span class="date altcolor"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
												<?php endif;
												if($comment_enable == 1): ?>
													<span class="date altcolor"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
												<?php endif;
												
												if($post_read_enable == 1 ):
													color_newsmagazine_count_content_words( esc_html( get_the_ID()));
												endif;	 
												if($post_time_enable == 1 ):?>
													<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
												<?php endif; ?>	
												<!-- Added Featured End -->
											</div>
											<h3 class="title-medium pl-1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										</div>
									</div>
									<!-- End News Head -->
								</div>
							</article>
							</div>
								<!--/ End Single News -->
							<?php $count = $count + 1;
						endwhile;
				endif;
                wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<!-- End News Grid -->
	<?php
	}
	color_newsmagazine_block_4_enable();
endif;