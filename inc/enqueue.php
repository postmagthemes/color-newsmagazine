<?php
/**
 * Enqueue scripts and styles.
 */
function color_newsmagazine_scripts() {

	// Google font
	wp_enqueue_style( 'color-newsmagazine-site-title', 'https://fonts.googleapis.com/css?family='.get_theme_mod('site_google_fontfamily_setting','Roboto').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-header', 'https://fonts.googleapis.com/css?family='.get_theme_mod('header_google_fontfamily_setting','Montserrat').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-section-title', 'https://fonts.googleapis.com/css?family='.get_theme_mod('section_title_google_fontfamily_setting','Montserrat').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-post-title', 'https://fonts.googleapis.com/css?family='.get_theme_mod('post_title_google_fontfamily_setting','Scada').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-description', 'https://fonts.googleapis.com/css?family='.get_theme_mod('section_description_google_fontfamily_setting','Roboto').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-widgetlist', 'https://fonts.googleapis.com/css?family='.get_theme_mod('widgetlist_google_fontfamily_setting','Lato').':light,regular,bold', array(), '' );

	wp_enqueue_style( 'color-newsmagazine-font-footer', 'https://fonts.googleapis.com/css?family='.get_theme_mod('footer_google_fontfamily_setting','Lato').':light,regular,bold', array(), '' );

	// Default CSS
	wp_enqueue_style( 'color-newsmagazine-default', get_template_directory_uri() .'/assets/css/default.css', array(), '1.0.0' );
	
	// Bootstrap CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.css', array(), '4.0.0' );

	// animate CSS
	wp_enqueue_style( 'animate', get_template_directory_uri() .'/assets/css/animate.css', array(), '1.0.0' );

	// fontawesome CSS
	wp_enqueue_style( 'font-awesome-5', get_template_directory_uri() .'/assets/css/font-awesome-5.css', array(), '5.1.12' );

	// Magnific CSS
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '1.0.0' );

	// Reset CSS
	wp_enqueue_style( 'color-newsmagazine-reset', get_template_directory_uri() .'/assets/css/reset.css', array(), '1.0.0' );
	
	// Ken Wheeler CSS
	wp_enqueue_style( 'ken-wheeler-slick', get_template_directory_uri() .'/assets/css/slick.css', array(), '1.0.0' );
	
	wp_enqueue_style( 'color-newsmagazine-style', get_stylesheet_uri() );

	// Responsive CSS
	wp_enqueue_style( 'color-newsmagazine-responsive', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.0.0' );
	// Slicknav CSS
	wp_enqueue_style( 'slicknav', get_template_directory_uri() .'/assets/css/slicknav.css', array(), '1.0.10' );
	
	// Ken Wheeler JS
	wp_enqueue_script( 'ken-wheeler-slick-js', get_template_directory_uri() .'/assets/js/slick.js', array('jquery'), '1.6.0', true );

	// Popper JS
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), '3.3.1', true );

	// Bootstrap JS
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '4.4.1', true );

	// modernizr JS
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '2.8.3', true );

	// ScrollUp JS
	wp_enqueue_script( 'jquery-scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array('jquery'), '2.4.1', true );
	
	// Slick Nav JS
	wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '1.0.10', true );

	// easing JS
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), '1.4.1', true );

	// wow JS
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.1.2', true );

	// Magnific Popup JS
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.1.0', true );

	wp_enqueue_script( 'color-newsmagazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'color-newsmagazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_style( 'color-newsmagazine-customizer-styles', false );

    wp_enqueue_style( 'color-newsmagazine-customizer-styles');
    
	wp_add_inline_style('color-newsmagazine-customizer-styles',color_newsmagazine_color_font_css());
	// Active JS
	wp_enqueue_script( 'color-newsmagazine-active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '1.1.0', true );

	wp_enqueue_script( 'ajax-newlayout1-cust', get_template_directory_uri() . '/js/ajaxnewslayout1-cust.js', array( 'jquery' ), true,true );
	wp_localize_script( 'ajax-newlayout1-cust', 'ajaxwidgetLayoutCust1', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	if ( get_theme_mod('color_newsmagazine_popup_enable', 1) == 1 ) :

		wp_localize_script(
	        'color-newsmagazine-active', 'context_object', array(
	        'ajaxurl' => admin_url('admin-ajax.php'),
	        )
	    );
		wp_enqueue_script('color-newsmagazine-modal-js', get_template_directory_uri().'/assets/js/modal-ajax.js', array( 'jquery' ), '1.16.0', true);

	endif;

}
add_action( 'wp_enqueue_scripts', 'color_newsmagazine_scripts' );