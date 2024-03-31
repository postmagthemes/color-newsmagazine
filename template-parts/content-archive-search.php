<?php
/**
 * Template part for displaying archive and search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

?>
<section id="archive">
	<div class=" central container">	
		<div class="row">
			<?php if (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'right'):
				if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_blog_archive_homepage','1') == 1 ) ) { ?>
					<div class="col-lg-9 col-12 nopadding">
				<?php } else { ?>
					<div class="col-lg-12 col-12 nopadding box">
				<?php } ?>
						<div id = "blog-archive" class="section">
							<div class ="container ">
								<div class="row">
									<?php
									$postcount = 1;
									if ( have_posts() ) :
										/* Start the Loop */
										while ( have_posts() ) :
											the_post();
											if ($postcount == 1):
												if (is_archive()) {
													get_template_part( 'template-parts/content','list' );
												} else {
													get_template_part( 'template-parts/content' );
												}
											endif;
											if ($postcount > 1):
												get_template_part( 'template-parts/content' );
											
											endif;
											
												$postcount = 1 + $postcount ;
										endwhile;
									else :
										get_template_part( 'template-parts/content', 'none' );
									endif;
									?>
								</div>
								<div class="row ">
									<div class="col-lg-12">
										<!-- Start Pagination -->
										<div class="pagination-main">
											<?php	the_posts_pagination(array(
													'mid_size' => 2,
													'prev_text' => __('Previous', 'color-newsmagazine'),
													'next_text' => __('Next', 'color-newsmagazine'),
												));
											?>
										</div>
										<!--/ End Pagination -->
									</div>
								</div>
							</div>
						</div>	
					</div>
				<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_blog_archive_homepage','1') == 1 ) ) { ?>
					<div class=" col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
					
					</div>
				<?php } ?>

			<?php elseif (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'left'): ?>
					<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_blog_archive_homepage','1') == 1 ) ) { ?>
						<div class="col-lg-3 nopadding ">
							<!-- Blog Sidebar -->
							<?php get_sidebar();?>
							<!--/ End Blog Sidebar -->
						</div>
					<?php } ?>
					<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_blog_archive_homepage','1') == 1 ) ) { ?>
						<div class="col-lg-9 nopadding">
					<?php } else { ?>
						<div class="col-lg-12 nopadding box">
					<?php } ?>
							<section id = "blog-archive" class="section">
								<div class ="container ">
									<div class="row">
										<?php
										$postcount = 1;
										if ( have_posts() ) :
										/* Start the Loop */
										while ( have_posts() ) :
											the_post();
											if ($postcount == 1):
												if (is_archive()) {
												get_template_part( 'template-parts/content','list' );
												} else {
													get_template_part( 'template-parts/content' );
												}
											endif;

											if ($postcount > 1):
												get_template_part( 'template-parts/content' );
											
											endif;
												$postcount = 1 + $postcount ;
										endwhile;
										else :
											get_template_part( 'template-parts/content', 'none' );
										endif;
										?>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<!-- Start Pagination -->
											<div class="pagination-main">
											<?php	the_posts_pagination(array(
													'mid_size' => 2,
													'prev_text' => __('Previous', 'color-newsmagazine'),
													'next_text' => __('Next', 'color-newsmagazine'),
												));
											?>
										</div>
											<!--/ End Pagination -->
										</div>
									</div>
								</div>
							</section>	
						</div>
					</div>
				</div>
			<?php else:
			get_template_part( 'template-parts/content', 'none' ); 
			endif; ?>
		</div>
	</div>
</section> 
