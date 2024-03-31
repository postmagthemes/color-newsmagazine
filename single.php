<?php
/**
 * The template for displaying single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

get_header(); 

if( ! is_home() && (!is_front_page())): 
	if (is_singular()):
		if(absint(get_theme_mod('color_newsmagazine_singlepage_headerslider_enable','1'))==1):
			$orig_post = $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
				$category_ids = array();
				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				$args=array(
				'category__in' => $category_ids,
				'orderby' => 'date',
				'post__not_in' => array($post->ID),
				'posts_per_page'=> absint(get_theme_mod('color_newsmagazine_singlepage_headerslider_number','6')),
				'ignore_sticky_posts'=>1
				);
				$listings = new WP_Query( $args );
				if ( $listings->have_posts() ) : ?>
					<section class="connected-singlepage-post ">	
						<div class ="container single-page-slider ">
							<div class="mt-1 mb-1">
								<h2 class="cat-title"><span><?php echo esc_html(get_theme_mod('color_newsmagazine_singlepage_headerslider_title'));?></span></h2>
								<div class="owl-carousel-singlepage"> <?php 
									/* Start the Loop */
									while ( $listings->have_posts() ) :
										$listings->the_post();	?>
										<div class="mb-2 mt-1">
											<div class="news-head shadows">
												<?php if ( has_post_thumbnail() ) {
													color_newsmagazine_thumbnail_8();
												} else if ( ! has_post_thumbnail() ) { ?>
													<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/730_487.png " >
												<?php } ?>
												<div class="content shadow_bbc">
													<div class="meta">
														<?php if(get_theme_mod('color_newsmagazine_singlepageheader_postdate_enable','1') == 1) { ?>
															<span class="date altcolor"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
														<?php }
														
														if(get_theme_mod('color_newsmagazine_singlepageheader_read_enable','1')==1):
															color_newsmagazine_count_content_words( esc_html(get_the_ID()));
														endif;
														?>
													</div>
													<h2 class="title-medium pl-1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
												</div>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</section>
				<?php endif; 
				wp_reset_postdata(); ?>
			<?php }
		endif;
	endif;
endif;

if (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'right'): ?>
	<section id = "main-single-page" class=" central container" >
		<div class="row">
			<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','0') == 1 ) ) { ?>
				<div class="col-lg-9 nopadding">
			<?php } else { ?>
				<div class="col-lg-12 nopadding box">
			<?php } ?>	
			<article id="post-<?php the_ID(); ?>"  class="breadcrumbs" <?php post_class(); ?> data-stellar-background-ratio="0.5">
				<div class="breadcrumbs-author">
					<header>
						<?php
						if ( is_archive() ) {
							the_archive_title( '<h1 class="entry-title">', '</h1>' );
							color_newsmagazine_breadcrumb_trail();
						} else if ( is_search() ) {
							echo '<h1 class="entry-title">';
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Result For: %s', 'color-newsmagazine' ), '<span>' . get_search_query() . '</span>' );
							echo '</h1>';
							color_newsmagazine_breadcrumb_trail();
						} else if (is_singular() ){
							echo '<h1 class="entry-title">';
							the_title();
							echo '</h1>';
							color_newsmagazine_breadcrumb_trail();
						} ?>
					</header>
					
					<?php if(get_theme_mod('color_newsmagazine_singlepage_author_enable','1')==1):
						get_template_part( 'inc/single-author-section' );
					endif ;?>
				</div>
				<div id = "single-post-detail" class="single-page-detail" >
					<?php if(has_post_thumbnail()):?>
						<div class="single-image">
							<?php the_post_thumbnail();?>
						</div>
					<?php endif;
					if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'single' );
					endwhile; // End of the loop.
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
			</article>
			</div>
			<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','0') == 1 ) ) { ?>
				<div class="col-lg-3 nopadding" >
					<!-- Blog Sidebar -->
					<?php get_sidebar();?>
					<!--/ End Blog Sidebar -->
				</div>
			<?php } ?>
		</div>
	</section>

<!-- END -->

<?php elseif (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'left'): ?>

	<section id ="main-single-page" class=" central container">
		<div class="row">
			<?php if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','0') == 1 ) ) { ?>
				<div class="col-lg-3 nopadding ">
					<!-- Blog Sidebar -->
					<?php get_sidebar();?>
					<!--/ End Blog Sidebar -->
				</div>
			<?php }
			if ( ( is_active_sidebar( 'sidebar-1' ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','0') == 1 ) ) { ?>
				<div class="col-lg-9  nopadding">
			<?php } else { ?>
				<div class="col-lg-12 nopadding box">
			<?php } ?>	
				<article id="post-<?php the_ID(); ?>"  class="breadcrumbs" <?php post_class(); ?> data-stellar-background-ratio="0.5">
					<div class="breadcrumbs-author">	
						<header>
							<?php
								if ( is_archive() ) {
									the_archive_title( '<h1 class="entry-title">', '</h1>' );
									color_newsmagazine_breadcrumb_trail();
								} else if ( is_search() ) {
									echo '<h1 class="entry-title">';
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Result For: %s', 'color-newsmagazine' ), '<span>' . get_search_query() . '</span>' );
									echo '</h1>';
									color_newsmagazine_breadcrumb_trail();
								} else if (is_singular() ){
									echo '<h1 class="entry-title">';
									the_title();
									echo '</h1>';
									color_newsmagazine_breadcrumb_trail();
								}
							?>
						</header>
						<?php if(get_theme_mod('color_newsmagazine_singlepage_author_enable','1')==1):
							get_template_part( 'inc/single-author-section' );
						endif ;?>
					</div>
					<div id = "single-post-detail" class="single-page-detail" >
						<?php if(has_post_thumbnail()):?>
							<div class="single-image">
								<?php the_post_thumbnail();?>
							</div>
						<?php endif;
						if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile; // End of the loop.
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>
				</article>
			</div>
		</div> 
	</section>
<?php else:
	get_template_part( 'template-parts/content', 'none' );
endif;?>

<?php get_footer();
?>