<?php

 /**
    * Primary Theme Color
    */
function color_newsmagazine_customize_color( $wp_customize ) {
    $wp_customize->add_panel(
        'color_newsmagazine_background_color_panel',
        array(
            'priority'       => 35,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Background Color', "color-newsmagazine" ),
        )
    );

    $wp_customize->add_section( 'color_newsmagazine_background_color',
		array(
			'title'      => __( 'Background Color', "color-newsmagazine" ),
			'priority'   => 38,
            'panel'          => 'color_newsmagazine_background_color_panel',

        ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'     => __( 'Main background color', 'color-newsmagazine' ),
		'section'   => 'color_newsmagazine_background_color',
		'settings'  => 'background_color',
		'type'		=> 'color',
		) 
    ) );

    $wp_customize->add_setting( 'color_newsmagazine_header_background_color_settings', array(
        'sanitize_callback' => 'sanitize_text_field',
      ) );
    
      $wp_customize->add_control( 
        new Color_Newsmagazine_Customizer_Title(
          $wp_customize,
          'color_newsmagazine_header_background_color_settings',
          array(
              'label' => __('Header section background color settings', 'color-newsmagazine'),
              'section' => 'color_newsmagazine_background_color',
          )
      )
      );
      $wp_customize->add_setting( 'color_newsmagazine_background_color_menu', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#ba2a2a',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
  
       $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_background_color_menu',array(
        'label'                 =>  __( 'Menu background color', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_background_color',
        'type'                  => 'color',
        'settings' => 'color_newsmagazine_background_color_menu',
    ) )
   );
    $wp_customize->add_setting( 'color_newsmagazine_background_color_site_title', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#494949',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_background_color_site_title',array(
        'label'                 =>  __( 'Site title background color', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_background_color',
        'type'                  => 'color',
        'settings' => 'color_newsmagazine_background_color_site_title',
    ) )
    );
    $wp_customize->add_setting( 'color_newsmagazine_background_color_top_header', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#510000',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_background_color_top_header',array(
        'label'                 =>  __( 'Top address background color', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_background_color',
        'type'                  => 'color',
        'settings' => 'color_newsmagazine_background_color_top_header',
    ) )
    );
    
    $wp_customize->add_setting( 'color_newsmagazine_background_color_hot_news', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#7c1717',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_background_color_hot_news',array(
        'label'                 =>  __( 'Hot news background color', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_background_color',
        'type'                  => 'color',
        'settings' => 'color_newsmagazine_background_color_hot_news',
    ) )
    );

    $wp_customize->add_setting( 'color_newsmagazine_background_color_sidebar', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#510000',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_background_color_sidebar',array(
        'label'                 =>  __( 'Sidebar area', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_background_color',
        'type'                  => 'color',
        'settings' => 'color_newsmagazine_background_color_sidebar',
    ) )
    );

    /**
     * 
     * 
     * color settings
     * 
     */
    $wp_customize->add_panel(
        'color_newsmagazine_text_color_panel',
        array(
            'priority'       => 35,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => __( 'Color', "color-newsmagazine" ),
        )
    );

    $wp_customize->add_section( 'colors',
    array(
        'title'      => __( 'Color', 'color-newsmagazine' ),
        'priority'   => 38,
        'panel'          => 'color_newsmagazine_text_color_panel',

    ) );


    $wp_customize->add_setting( 'color_newsmagazine_themecolor_customize_heading', array(
        'sanitize_callback' => 'sanitize_text_field',
      ) );
    
      $wp_customize->add_control( 
        new Color_Newsmagazine_Customizer_Title(
          $wp_customize,
          'color_newsmagazine_themecolor_customize_heading',
          array(
              'label' => __('Theme color settings', 'color-newsmagazine'),
              'section' => 'colors',
              'priority' => 1,

          )
      )
      );

    $wp_customize->add_setting( 'color_newsmagazine_theme_color_setting', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#dd3333',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
  
       $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_theme_color_setting',array(
        'label'                 =>  __( 'Primary theme color', 'color-newsmagazine' ),
        'section'               => 'colors',
        'type'                  => 'color',
        'priority'              => 2,
        'settings' => 'color_newsmagazine_theme_color_setting',
    ) )
   );

   $wp_customize->add_setting( 'color_newsmagazine_theme_text_color_setting', array(
    'capability'        => 'edit_theme_options',
    'default'           => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color'
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_newsmagazine_theme_text_color_setting',array(
    'label'                 =>  __( 'Theme text color', 'color-newsmagazine' ),
    'section'               => 'colors',
    'type'                  => 'color',
    'priority'              => 3,
    'settings' => 'color_newsmagazine_theme_text_color_setting',
    ) )
    );

    $wp_customize->add_setting(
        'color_newsmagazine_secondary_theme_color_settings',
        array(
            'default'           => 2,
            'sanitize_callback' => 'color_newsmagazine_sanitize_select',
        )
    );
    
    $wp_customize->add_control(
        'color_newsmagazine_secondary_theme_color_settings',
        array(
            'section'     => 'colors',
            'label'       => __( 'Select secondary theme color settings.', 'color-newsmagazine' ),
            'type'        => 'select',
            'priority'    => 3,
            'description'  => __('Secondary theme color is a color that is shown as a vertical or horizontal highlighted line','color-newsmagazine'),
            'choices' => array (
                1  => __( 'Same as primary theme color', 'color-newsmagazine' ),
                2  => __( 'Different dynamically change', 'color-newsmagazine' ),
                3  => __( 'Different but static', 'color-newsmagazine' ),
              )
        )       
    );

}
add_action( 'customize_register', 'color_newsmagazine_customize_color' );