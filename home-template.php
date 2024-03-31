<?php
/**
 * Template Name: Color newsmagazine template
 *
 * This is page is used as front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */
get_header();
if ( get_theme_mod('color_newsmagazine_big_frontpagetemplate_enable','1')==1) :
	get_template_part( 'sections/section','big-news' );
endif ;
if(get_theme_mod('color_newsmagazine_mainnews_frontpagetemplate_enable','1' )==1):
	get_template_part( 'sections/section','main-news' );
endif ;
if(get_theme_mod('color_newsmagazine_videoslider_frontpagetemplate_enable','1' )==1):
	get_template_part( 'sections/section','feature-video' );
endif ;

get_template_part( 'sections/section','front-widget');
get_template_part( 'sections/section','footer-Vslider' );

get_footer();