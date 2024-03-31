<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

get_header();
if ( get_theme_mod('color_newsmagazine_big_blogpage_enable','1')==1) {
	get_template_part( 'sections/section','big-news' );
}

if ( get_theme_mod('color_newsmagazine_mainnews_blogpage_enable','1')==1) {
get_template_part( 'sections/section','main-news' );
}

if ( get_theme_mod('color_newsmagazine_videoslider_blogpage_enable','1')==1) {
	get_template_part( 'sections/section','feature-video' );
}

?>
<!-- News Category -->
<?php 
if (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'right'): ?>
	<section id ="central-body-index">
		<div class=" central container">	
			<div class="row">
				<?php if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) )  ) { ?>
					<div class="mainbar col-lg-9 nopadding">
				<?php } else { ?>
					<div class="mainbar col-lg-12 nopadding box">
				<?php }
				if (get_theme_mod('color_newsmagazine_BodyBlockbar_enable','1')):
					dynamic_sidebar( 'frontpage-news-layout' );
				endif;
				$color_newsmagazine_slug1 = get_theme_mod('color_newsmagazine_layout_order1','1');
				$color_newsmagazine_slug2 = get_theme_mod('color_newsmagazine_layout_order2','2');
				$color_newsmagazine_slug3 = get_theme_mod('color_newsmagazine_layout_order3','3');
				$color_newsmagazine_slug4 = get_theme_mod('color_newsmagazine_layout_order4','4');
				$color_newsmagazine_slug5 = get_theme_mod('color_newsmagazine_layout_order5','5');
				$color_newsmagazine_slug6 = get_theme_mod('color_newsmagazine_layout_order6','6');
				$color_newsmagazine_slug7 = get_theme_mod('color_newsmagazine_layout_order7','7');
			
				$color_newsmagazine_slug20 = get_theme_mod('color_newsmagazine_layout_order20','20'); //this is blog post
				
				if (! $color_newsmagazine_slug1 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug1).'.php' ;
				}
				if (! $color_newsmagazine_slug2 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug2).'.php' ;
				}
				if (! $color_newsmagazine_slug3 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug3).'.php' ;
				}
				if (! $color_newsmagazine_slug4 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug4).'.php' ;
				}
				if (! $color_newsmagazine_slug5 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug5).'.php' ;
				}
				if (! $color_newsmagazine_slug6 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug6).'.php' ;
				}
				if (! $color_newsmagazine_slug7 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug7).'.php' ;
				}
				if (! $color_newsmagazine_slug20 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug20).'.php' ;
				}
				?>		
				</div>
				<?php if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')==1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1))  ) { ?>
					<div class=" col-lg-3 nopadding">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

<?php elseif (get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'left'): ?>

	<section id ="central-body-index">
		<div class=" central container">
			<div class="row">
				<?php if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) )  ) { ?>
					<div class="col-lg-3 nopadding ">
						<!-- Blog Sidebar -->
						<?php get_sidebar();?>
						<!--/ End Blog Sidebar -->
					</div>
				<?php }
				if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) ) ) { ?>
					<div class="mainbar col-lg-9 nopadding">
				<?php } else { ?>
					<div class="mainbar col-lg-12 nopadding box">
				<?php } 
				if (get_theme_mod('color_newsmagazine_BodyBlockbar_enable','1')):
					dynamic_sidebar( 'frontpage-news-layout' );
				endif;
				$color_newsmagazine_slug1 = get_theme_mod('color_newsmagazine_layout_order1','1');
				$color_newsmagazine_slug2 = get_theme_mod('color_newsmagazine_layout_order2','2');
				$color_newsmagazine_slug3 = get_theme_mod('color_newsmagazine_layout_order3','3');
				$color_newsmagazine_slug4 = get_theme_mod('color_newsmagazine_layout_order4','4');
				$color_newsmagazine_slug5 = get_theme_mod('color_newsmagazine_layout_order5','5');
				$color_newsmagazine_slug6 = get_theme_mod('color_newsmagazine_layout_order6','6');
				$color_newsmagazine_slug7 = get_theme_mod('color_newsmagazine_layout_order7','7');
				$color_newsmagazine_slug20 = get_theme_mod('color_newsmagazine_layout_order11','20'); //this is blog post
				if (! $color_newsmagazine_slug1 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug1).'.php' ;
				}
				if (! $color_newsmagazine_slug2 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug2).'.php' ;
				}
				if (! $color_newsmagazine_slug3 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug3).'.php' ;
				}
				if (! $color_newsmagazine_slug4 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug4).'.php' ;
				}
				if (! $color_newsmagazine_slug5 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug5).'.php' ;
				}
				if (! $color_newsmagazine_slug6 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug6).'.php' ;
				}
				if (! $color_newsmagazine_slug7 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug7).'.php' ;
				}
				if (! $color_newsmagazine_slug20 ==0) {
				require_once trailingslashit( get_template_directory() ) . 'news-layouts/layouts-'.esc_attr($color_newsmagazine_slug20).'.php' ;
				}
				?>	
				</div>
			</div>
		</div>
	</section>
<?php endif;
get_footer();
?>