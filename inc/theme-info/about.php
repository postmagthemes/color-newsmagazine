<?php
/**
 * About color_newsmagazine_configuration
 *
 * @package color_newsmagazine
 */

$color_newsmagazine_config = array(
	'menu_name' => esc_html__( 'Color newsmagazine setup', 'color-newsmagazine' ),
	'page_name' => esc_html__( 'Color newsmagazine setup', 'color-newsmagazine' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'color-newsmagazine' ), 'Color newsmagazine' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'color-newsmagazine' ), 'Color newsmagazine Pro' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','color-newsmagazine' ),
			'url'  => esc_url('https://www.postmagthemes.com/downloads/color-newsmagazine-free-wordpress-theme/'),
		),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','color-newsmagazine' ),
			'url'  => esc_url('https://www.postmagthemes.com/democolornewsmagazine/'),
		),
		'documentation_url' => array(
			'text'   => esc_html__( 'View documentation','color-newsmagazine' ),
			'url'    => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/'),
		),
		'pro_url' => array(
			'text'   => esc_html__( 'Buy Premium version','color-newsmagazine' ),
			'url'    => esc_url('https://www.postmagthemes.com/downloads/pro-color-newsmagazine-wordpress-theme/'),
		)
	),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'color-newsmagazine' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'color-newsmagazine' ),
		'support'             => esc_html__( 'Support', 'color-newsmagazine' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'text'                => esc_html__( 'Find step-by-step instructions to set up the theme easily.', 'color-newsmagazine' ),
			'button_label'        => esc_html__( 'View documentation', 'color-newsmagazine' ),
			'button_link'         => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/'),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'text'                => esc_html__( 'We recommend few steps to take so that you can get a complete site like shown in the demo.', 'color-newsmagazine' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'color-newsmagazine' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=color-newsmagazine-about&tab=recommended_actions' ) ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'color-newsmagazine' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'color-newsmagazine' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Translate this theme in your local language by updating in wordpress.org', 'color-newsmagazine' ),
			'button_label'        => esc_html__( 'View the red column to translate it', 'color-newsmagazine' ),
			'button_link'         => esc_url( 'https://translate.wordpress.org/projects/wp-themes/color-newsmagazine/'),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			
			'postmagthemes-demo-import' => array(
				'title'       => esc_html__( 'PostmagThemes Demo Import', 'color-newsmagazine' ),
				'description' => esc_html__( 'Please install the PostmagThemes Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'color-newsmagazine' ),
				'check'       => class_exists( 'PMDI_Plugin' ),
				'plugin_slug' => 'postmagthemes-demo-import',
				'id'          => 'postmagthemes-demo-import',
			),

		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'color-newsmagazine' ),
			'icon'         => 'dashicons dashicons-sos',
			'button_label' => esc_html__( 'Contact Support', 'color-newsmagazine' ),
			'button_link'  => esc_url('https://www.postmagthemes.com/contact'),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'color-newsmagazine' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'button_label' => esc_html__( 'View documentation', 'color-newsmagazine' ),
			'button_link'  => esc_url('https://www.postmagthemes.com/docs/documentation-of-free-color-newsmagazine-and-pro/'),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		
	),


);
color_newsmagazine_About::init( apply_filters( 'color_newsmagazine_about_filter', $color_newsmagazine_config ) );