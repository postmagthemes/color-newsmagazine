<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package color_newsmagazine
 */

if ( ! is_active_sidebar( 'sidebar-1' ) and ( get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')==0 ) and ( get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 0 ) and ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 0 ) ){
	return;
}
?>

<aside class="blog-sidebar pt-3 pb-1  ">
	<?php if (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0') == 1) : ?>
		<div id="color-newsmagazine-author-4" class=" widget single-sidebar color_newsmagazine_widget_author"> 
			<section class=" author section offwhite animated wow slideInRight" data-wow-duration = "2s">
				<div class="author-profile container">
					<h2 class="widget-title"><i class="fas fa-pencil-alt "> </i><span><?php echo esc_html(get_theme_mod('color_newsmagazine_SiteAuthor_title','')); ?></span></h2>
					<div class="profile-wrapper social-menu-wrap meta-share-author text-center" >
						<figure class="author">
							<img src="<?php echo esc_html(get_theme_mod('color_newsmagazine_SiteAuthor_image2')); ?>"  alt="">
						</figure>
						<p class="text-center pt-1 pb-1">
							<?php echo esc_html(get_theme_mod('color_newsmagazine_SiteAuthor_description')); ?>
						</p>
						<ul class="author-social">
							<?php color_newsmagazine_sidebar_social_links_items();?>
						</ul>
					</div>	
				</div>
			</section>
		</div>
	<?php endif; 

	/*************  layout 9 type for sidebar ******/
	if (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1) {
	function color_newsmagazine_sidebarnews_b1 () {
		$title_1 = get_theme_mod('color_newsmagazine_sidebarnews_b1_title') ;
		$cat_1 = get_theme_mod('color_newsmagazine_sidebarnews_b1_category_name','');
		$author_1 = get_theme_mod('color_newsmagazine_sidebarnews_b1_authorlist','');
		$orderby = get_theme_mod('color_newsmagazine_sidebarnews_b1_order','date');
		$post_no = get_theme_mod('color_newsmagazine_sidebarnews_b1_number','4');
		$admin_enable 	= get_theme_mod('color_newsmagazine_sidebarnews_b1_admin_enable','0');	
		$date_enable = get_theme_mod('color_newsmagazine_sidebarnews_b1_date_enable','0');
		$comment_enable = get_theme_mod('color_newsmagazine_sidebarnews_b1_comment_enable','1');
		// Added featured 
		$post_read_enable = get_theme_mod('color_newsmagazine_sidebarnews_b1_readingtime_enable','1');
		$post_time_enable = get_theme_mod('color_newsmagazine_sidebarnews_b1_timeago_enable','0');
		// Added Featured End
		?>
		<div class=" widget single-sidebar">
			<section class="single-column section off-white background-cu animated wow slideInRight" data-wow-duration = "2s" data-wow-delay="1s">
				<div class="container">
					<div class="row">
						<?php
						$arguments = array(
							'category_name'	=> esc_attr( $cat_1 ),
							'posts_per_page' => absint( $post_no ),
							'author'	   => esc_attr( $author_1 ),
							'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
							'ignore_sticky_posts' => 1
						);
						$query = new WP_Query( $arguments );
						if( $query->have_posts() ) :
							?>
							<div class="col-lg-6 col-md-6 col-12 ">
								<header>
									<h2 class="widget-title"><i class="fas fa-pencil-alt"  ></i><span><?php echo esc_html( $title_1 ); ?></span></h2>
								</header>
								<!-- Single News -->
								
								<div class ="responsive-layout9">
								<?php
									while( $query->have_posts() ) :
										$query->the_post();
										?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<div class="single-news tab1">
												<div class="news-head">
													<?php
													if( has_post_thumbnail() ) :
														the_post_thumbnail('color-newsmagazine-thumbnail-12');
													elseif (! has_post_thumbnail()): ?>
														<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/80_80.png " >
													<?php endif; ?>
												</div>
												<div class="news-content">
													<h3 class="small-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
													<div class="meta">
														<?php if($admin_enable == 1 ): ?>
														<span class="author pr-1">
															<i class="fas fa-user-tie"></i>
															<?php color_newsmagazine_posted_by();?>
														</span>
														<?php endif;
														if($date_enable == 1 ): ?>
															<span class="date"> <i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
														<?php endif;
														if($comment_enable): ?>
															<span class="date">
																<i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?>
															</span>
														<?php endif; 
														
														if($post_read_enable == 1 ):
															color_newsmagazine_count_content_words( get_the_ID());
														endif;
														if($post_time_enable == 1 ):?>
															<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
														<?php endif;?>
													</div>
												</div>
											</div>
										</article>
										<!--/ End Single News -->
										<?php
									endwhile;
								?>
								</div>
							</div>
							<?php
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</section>
		</div>
	<?php }
	color_newsmagazine_sidebarnews_b1 ();
	}

	if (get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1) {
	function color_newsmagazine_sidebarnews_b2 (){
		$title 				= get_theme_mod('color_newsmagazine_sidebarnews_b2_title');
		$cat 				= get_theme_mod('color_newsmagazine_sidebarnews_b2_category_name','');
		$author_1 			= get_theme_mod('color_newsmagazine_sidebarnews_b2_authorlist','');
		$post_no 			= get_theme_mod('color_newsmagazine_sidebarnews_b2_number','3');
		$orderby 			= get_theme_mod('color_newsmagazine_sidebarnews_b2_order','date');
		$admin_enable 		= get_theme_mod('color_newsmagazine_sidebarnews_b2_admin_enable','1');
		$date_enable 		= get_theme_mod('color_newsmagazine_sidebarnews_b2_date_enable','1');
		// Start
		$post_read_enable 	= get_theme_mod('color_newsmagazine_sidebarnews_b2_readingtime_enable','1');
		$post_time_enable 	= get_theme_mod('color_newsmagazine_sidebarnews_b2_timeago_enable','1');
		// End

		?>
		<div class=" widget single-sidebar">
			<section class="news-style1 section off-white position-initial background-cu animated wow slideInRight" data-wow-duration = "2s" date-wow-delay="2s" >
				<?php
				$arguments = array(
					'category_name'	=> esc_attr( $cat ),
					'posts_per_page' => absint( $post_no ),
					'author'	   => esc_attr( $author_1 ),
					'orderby' => array( esc_attr( $orderby ) => 'DSC', 'date' => 'DSC'),
					'ignore_sticky_posts' => 1
				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) :
					?>
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<header>
									<h2 class="widget-title"><i class="fas fa-pencil-alt"  ></i>
										<span><?php  echo esc_html( $title ); ?></span>
									</h2>
								</header>
							</div>
						</div>
						<div class="row">
							<?php while( $query->have_posts() ) :
								$query->the_post(); ?>
								<div class="col-lg-4 col-md-4 mb-3">
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<!-- Single News -->
										<div class="single-news blog-head card">
											<?php if(has_post_thumbnail()):?>
												<div class="news-head">
													<?php the_post_thumbnail('color-newsmagazine-thumbnail-1');?>
												</div>
											<?php elseif (! has_post_thumbnail()): ?>
												<div class="news-heads flash">
													<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
												</div>
											<?php endif;?>
											<div class="content card-body">
												<?php if($admin_enable ==1): ?>
													<div class="meta">
														<span class="author">
															<i class="fas fa-user-tie"></i>
															<?php color_newsmagazine_posted_by();?>																			
														</span>
													</div>
												<?php endif; ?>
												<div class="meta">
													<?php if($date_enable ==1): ?>
														<span class="date">
															<i class="fas fa-clock"></i>
															<?php color_newsmagazine_posted_on();?>
														</span>
													<?php endif; 
													
													if($post_read_enable ==1):
														color_newsmagazine_count_content_words( get_the_ID());
													endif;	
													if($post_time_enable ==1):?>
														<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
													<?php endif;?>	
													<!-- Added Featured End -->
												</div>
												<h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
												<?php the_excerpt(); ?>
												<div class =" mb-4">
													<?php 
													global $color_newsmagazine_currenttime2;
													$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
													$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
													color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2);
													?>
												</div>
												 
											</div>
										</div>
										
									</article>
								</div>
							<?php endwhile;	?>
						</div>
					</div>
				<?php endif;
				wp_reset_postdata(); ?>
			</section>
		</div>
	<?php }
	color_newsmagazine_sidebarnews_b2 ();
	}
	dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->