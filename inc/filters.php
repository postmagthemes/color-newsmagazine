<?php

/**
 * Filters For Excerpt 
 *
 */

if( !function_exists( 'color_newsmagazine_excerpt_length' ) ) :
	/*
	 * Excerpt More
	 */
	function color_newsmagazine_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}
		
		return get_theme_mod('color_newsmagazine_excerpt_length','45');
		
	}
endif;
add_filter( 'excerpt_length', 'color_newsmagazine_excerpt_length',999 );