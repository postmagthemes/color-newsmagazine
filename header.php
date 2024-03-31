<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package color_newsmagazine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
	<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
	?>
	<!-- preloader -->
	<?php if(get_theme_mod('color_newsmagazine_preloader_enable','1')):?>
		<div class="template-preloader-rapper">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>
	<?php endif;
	
	color_newsmagazine_layout_border(); 
	?>			
	<!-- End preloader -->
	<!-- Start Header -->
	<a class=" skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'color-newsmagazine' ); ?></a>
	<header class="header sticky-tops">
		<div class="container ">
			<?php dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_top_social_google','0') ); ?>
			<?php if(get_theme_mod('color_newsmagazine_top_header_social_enable')):?>
				<div class ="row">
					<div class="col-lg-12">
							<!-- Social -->
							<ul class="header-social ">
								<?php color_newsmagazine_top_header_social_links_items();?>
							</ul>
							<!-- End Social -->
					</div>
				</div>
			<?php else : ?>
			<div class="height25"> </div >
			<?php endif; ?>
			<!-- Search Form -->
			<div class="search-form mt-4">
				<a class="icon" href="#"><i class="fa fa-search"></i></a>
				<form method ="get" action="<?php echo esc_url(home_url('/'));?>" class="form">
					<input type="text" value="" name="s" id="search" placeholder="<?php the_search_query();?>">
					<a href="#"><button type="submit"><i class="fa fa-search"></i></button></a>
				</form>
			</div>
			<!--/ End Search Form -->
		</div>
		<!-- Main Menu -->
		
		<div class="main-menu ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php if ( function_exists(  "the_custom_logo" ) ) { ?> 	
							<div class =" custom-logo pr-3 float-left" >	
							<?php the_custom_logo(); ?> 
							</div> 
						<?php } ?>	
							<!-- Main Menu -->
						<nav id="site-navigation" class="navbar navbar-expand-lg" >
						<?php  
							wp_nav_menu( array(
								'theme_location'    => 'primary',
								'depth'             => 5,
								'container_class'   => 'navbar-collapse',
								'container_id'      => 'collapse-1',
								'menu_class'        => 'nav menu navbar-nav',
								'fallback_cb'       => 'color_newsmagazine_navwalker::fallback',
								'walker'            => new color_newsmagazine_navwalker(),

							));
						?>
						</nav>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Main Menu -->
		<!-- Header Inner -->
		<?php if (  display_header_text() || has_header_image() || get_theme_mod('color_newsmagazine_sitetitle_google',0) > 0 ) : ?>
		<div  class="header-inner">
			<div class= " background-cu-header " style="background: url(<?php echo esc_url(get_header_image());?>)">
				<div class="container <?php if(display_header_text() || has_header_image() || get_theme_mod('color_newsmagazine_sitetitle_google',0) > 0 ) { echo 'header-padding';}; ?>
				<?php if( has_header_image() ) { echo 'yes-header';}; ?>" >
					<!-- Title -->
					<div class=" logo row">
						<div class="col-lg-5">
							<h1 class="site-title pb-1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							$color_newsmagazine_description = get_bloginfo( 'description', 'display' );
							if ( $color_newsmagazine_description || is_customize_preview() ) : ?>
								<p class="site-description "><?php echo esc_html($color_newsmagazine_description); ?></p>
							<?php endif; ?>
						</div>
						<div id = "adv-right" class="col-lg-7 ">
							<?php dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_sitetitle_google','0') ); ?>
						</div>
					</div>
					<div id ='mobile-nav' class="mobile-nav">
					</div>
				</div>
			</div>
		</div> 
		<?php endif; ?>
		<?php if(get_theme_mod('color_newsmagazine_top_header_enable','1')):?>
			<div class= "topbar pt-1 pb-1">
				<div class="container">
					<div class = " header-bottom">
						<?php if(get_theme_mod('color_newsmagazine_top_header_date_enable','1')):?>
							<i class="date-time fas fa-calendar-alt"></i> <?php echo esc_html( date( get_option('date_format') ) ); ?>
						<?php endif;?>
						<div class="float-right">
							<!-- contact -->
							<?php if(get_theme_mod('color_newsmagazine_top_header_right_side_enable')):?>
							<ul class="date-time">
									<?php color_newsmagazine_top_header_contact_info_items();?>
							</ul>
							<?php endif;?>
							<!--/ End contact -->
						</div>
						<div class = "clearfix"> 
						</div>
					</div>
				</div>
			</div>
		<?php endif;?>	
		<?php get_template_part( 'sections/section','hot-news' ); ?>	
	</header>
	<main class='site-main' role="main">