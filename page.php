<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

get_header();
if( is_home() or (is_front_page())): 

	if ( get_theme_mod('color_newsmagazine_big_defaulttemplate_enable','1')) {
		get_template_part( 'sections/section','big-news' );
	}
	if(get_theme_mod('color_newsmagazine_mainnews_defaulttemplate_enable','1' )):
		get_template_part( 'sections/section','main-news' );
	endif ;
	if(get_theme_mod('color_newsmagazine_videoslider_defaulttemplate_enable','1' )):
		get_template_part( 'sections/section','feature-video' );
	endif ;

endif ; ?>

	<section id ="page-homepage" class="central container">
		<div class="row">

		<?php if ( get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'left' ) : ?>
			<?php if ( is_front_page()):
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) ) { ?>
					<div class="col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php }
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) ) { ?>
					<div class="col-lg-9 nopadding ">
				<?php } else { ?>
					<div class="col-lg-12 nopadding box">
				<?php }	
			else:
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','1') == 1 ) ) { ?>
					<div class="col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php } 
			
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','1') == 1 ) ) { ?>
					<div class="col-lg-9  nopadding">
				<?php } else { ?>
					<div class="col-lg-12 nopadding box">
				<?php }	
			endif; ?>
						<article id="post-<?php the_ID(); ?>"  class="breadcrumbs" <?php post_class(); ?> data-stellar-background-ratio="0.5">
							<?php if  ( !(is_home() || is_front_page()) ): ?>
								<div class="breadcrumbs-author">
									<header>
										<?php
											echo '<h1 class="entry-title">';
											the_title();
											echo '</h1>';
											color_newsmagazine_breadcrumb_trail();
										?>
									</header>
									
									<?php if(get_theme_mod('color_newsmagazine_singlepage_author_enable','1')==1): ?>
										<?php get_template_part( 'inc/single-author-section' ); ?>
									<?php endif ;?>
								</div>
							<?php endif ;?>
							<div id = "single-page-detail" class="single-page-detail" >
								<?php if(has_post_thumbnail()):?>
									<div class="single-image">
										<?php the_post_thumbnail();?>
									</div>
								<?php endif;
								if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();
										get_template_part( 'template-parts/content', 'page' );
									endwhile; // End of the loop.
									
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
								?>
							</div>
						</article>
					</div>
		<?php endif ;?>	

		<?php if ( get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'right' ) : ?>
			<?php if ( is_front_page()):
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) ) { ?>
					<div class="col-lg-9 nopadding">
				<?php } else { ?>
					<div class="col-lg-12 nopadding box">
				<?php }
			else:
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','1') == 1 ) ) { ?>
					<div class="col-lg-9 nopadding">
				<?php } else { ?>
					<div class="col-lg-12 nopadding box">
				<?php }	
			endif; ?>
						<article id="post-<?php the_ID(); ?>"  class="breadcrumbs" <?php post_class(); ?> data-stellar-background-ratio="0.5">
							<?php if  ( !(is_home() || is_front_page()) ): ?>
								<div class="breadcrumbs-author">
									<header>
										<?php
										
											echo '<h1 class="entry-title">';
											the_title();
											echo '</h1>';
											color_newsmagazine_breadcrumb_trail();
										?>
									</header>
									
									<?php if(get_theme_mod('color_newsmagazine_singlepage_author_enable','1')==1): ?>
										<?php get_template_part( 'inc/single-author-section' );
									endif ;?>
								</div>
							<?php endif ;?>
							<div id = "single-page-detail" class="single-page-detail" >
								<?php if(has_post_thumbnail()):?>
									<div class="single-image">
										<?php the_post_thumbnail();?>
									</div>
								<?php endif;
								if ( have_posts() ) :
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();
										get_template_part( 'template-parts/content', 'page' );
									endwhile; // End of the loop.
									
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
								?>
							</div>
						</article>
					</div>
			<?php if ( is_front_page()):
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) ) { ?>
					<div class="col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php };
			else:
				if ( ( is_active_sidebar( 'sidebar-1' )  or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) and ( get_theme_mod('color_newsmagazine_sidebar_enable_postpage_detail_homepage','1') == 1 ) ) { ?>
					<div class="col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php }
			endif;
		endif ;?>	
		</div>
	</section>
<?php
get_footer();
?>