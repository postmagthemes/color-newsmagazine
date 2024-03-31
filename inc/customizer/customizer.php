<?php
/**
 * color_newsmagazine Theme Customizer
 *
 * @package color_newsmagazine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function color_newsmagazine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'color_newsmagazine_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'color_newsmagazine_customize_partial_blogdescription',
		) );
	}
	class Color_Newsmagazine_Customizer_Title extends WP_Customize_Control {
		public function enqueue()
   		{
       		wp_enqueue_style('color-newsmagazine-custom-css', trailingslashit(get_template_directory_uri()) . 'assets/css/customizer.css', array(), '1.0', 'all');
    	}

		public function render_content() {
			?>
			<h3 class="customize-control-lable"><?php echo esc_html( $this->label ); ?></h3>
			<?php if (!empty($this->description)) { ?>
				<h4 class="customize-control-des"><?php echo esc_html($this->description); ?></h4>
			<?php } ?>
			<?php
		}
	}
	
	$wp_customize->register_section_type( 'Color_Newsmagazine_Customize_Section_Upsell' );
		/**
	 * Add Document Panel
	 *
	 * @since 1.0.0
	 */
	  $wp_customize->add_panel(
	   'color_newsmagazine_document_panel',
	   array(
	     'priority'       => 1,
	     'capability'     => 'edit_theme_options',
	     'theme_supports' => '',
	     'title'          => __( 'Documents', 'color-newsmagazine' ),
	   )
	 );
	// Register sections.
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => __( 'Go to Pro', 'color-newsmagazine' ),
				'pro_text' => __( 'Buy Premium version', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/downloads/pro-color-newsmagazine-wordpress-theme/'),
				'priority' => 1,
			)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell2',
			array(
				'title'    => esc_html__( 'View', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Generic', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/generic-document/'),
				'priority' => 2,
				'panel'    => 'color_newsmagazine_document_panel',
			)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell3',
			array(
				'title'    => esc_html__( 'View', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Specific', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/'),
				'priority' => 3,
				'panel'    => 'color_newsmagazine_document_panel',
			)
		)
	);
	/*** show view video in header setting panel */
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell4',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#a-header-section'),
				'priority' => 1,
				'panel'    => 'color_newsmagazine_header_settings_panel',
			)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell5',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#b-big-news-section'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_big_news_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell6',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#c-main-news-section'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_main_news_settings_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell7',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#d-body-block-section'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_front_settings_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell8',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#e-footer-section'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_footer_settings_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell9',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'Video', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/basic-structure-introduction/#f-sidebar-content-section'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_themeoptions_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell10',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'View', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/detail-on-background-color-change-in-various-location/'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_background_color_panel',
				)
		)
	);
	$wp_customize->add_section(
		new Color_Newsmagazine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell11',
			array(
				'title'    => esc_html__( 'View documentation', 'color-newsmagazine' ),
				'pro_text' => esc_html__( 'View', 'color-newsmagazine' ),
				'pro_url'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/detail-on-text-color-change-in-various-location/'),
				'priority' => 1,
				'panel'     => 'color_newsmagazine_text_color_panel',
				)
		)
	);
	
}
add_action( 'customize_register', 'color_newsmagazine_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function color_newsmagazine_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function color_newsmagazine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function color_newsmagazine_customize_preview_js() {
	wp_enqueue_script( 'color-newsmagazine-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'color_newsmagazine_customize_preview_js' );


/*
* Backend Scripts
*/

function color_newsmagazine_customize_backend_scripts() {
	wp_enqueue_style( 'color-newsmagazine-customizer-style', get_template_directory_uri() . '/assets/customizer/ordering.css' );
	wp_enqueue_script( 'color-newsmagazine-customizer-script', get_template_directory_uri() . '/assets/customizer/ordering.js', array( 'jquery', 'customize-controls' ), '20160715', true );
	wp_enqueue_script( 'color_newsmagazine-customize-controls-js', get_template_directory_uri() . '/inc/upgrade-to-pro/pro.js', array( 'customize-controls' ) );
	wp_enqueue_script( 'color-newsmagazine-customizer-hide', get_template_directory_uri() . '/assets/customizer/customizer-hide.js', array( 'jquery', 'customize-controls' ), '1.1.2', true );
	wp_enqueue_style( 'color_newsmagazine-customize-controls-css', get_template_directory_uri() . '/inc/upgrade-to-pro/pro.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'color_newsmagazine_customize_backend_scripts', 10 );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Load customizer required panels.
 */
require get_template_directory() . '/inc/customizer/themeoptions-panel.php';
require get_template_directory() . '/inc/customizer/header-panel.php';
require get_template_directory() . '/inc/customizer/big-news-panel.php';
require get_template_directory() . '/inc/customizer/main-news-panel.php';
require get_template_directory() . '/inc/customizer/footer-panel.php';
require get_template_directory() . '/inc/customizer/front-panel.php';
require get_template_directory() . '/inc/customizer/customizer-sanitize.php';
require get_template_directory() . '/inc/customizer/custom-css.php';

/**
* color setting
*/
require_once get_template_directory() . '/inc/customizer/customizer-color.php';