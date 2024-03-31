<?php
/**
 * Template part for displaying archive and search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

	global $color_newsmagazine_postcount;
	if ($color_newsmagazine_postcount == 1):
			get_template_part( 'template-parts/content','list' );
		
	endif;
	if ($color_newsmagazine_postcount == 2 or $color_newsmagazine_postcount > 2 ):
		get_template_part( 'template-parts/content' );
	endif;
	$color_newsmagazine_postcount = 1 + $color_newsmagazine_postcount ;