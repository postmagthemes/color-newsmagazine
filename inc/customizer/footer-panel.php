<?php

/**
 * Footer settings panel at Theme Customizer
 *
 * @package  * @since 1.0.0
 */
add_action( 'customize_register', 'color_newsmagazine_footer_settings_register' );

function color_newsmagazine_footer_settings_register( $wp_customize ) {

/**
 * Add footer settings Panel
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'color_newsmagazine_footer_settings_panel',
    array(
        'priority'       => 35,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Footer section settings', "color-newsmagazine" ),
    )
);

$wp_customize->add_section(
    'color_newsmagazine_location_section',
    array(
        'priority'       => 2,
        'panel'          => 'color_newsmagazine_footer_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Location and Social link setting', "color-newsmagazine" ),
        'description'    => __( 'Manage content of Location and Social link section at the footer', "color-newsmagazine" ),
    )
);

$wp_customize->add_section(
  'color_newsmagazine_footer_vertical_slider_section',
  array(
      'priority'       => 1,
      'panel'          => 'color_newsmagazine_footer_settings_panel',
      'capability'     => 'edit_theme_options',
      'title'          => __( 'Footer Slider section', "color-newsmagazine" ),
      'description'    => __( 'Manage content of Footer Slider section at the footer', "color-newsmagazine" ),
  )
);

$wp_customize->add_section(
  'color_newsmagazine_footer_footernews_section',
  array(
      'priority'       => 1,
      'panel'          => 'color_newsmagazine_footer_settings_panel',
      'capability'     => 'edit_theme_options',
      'title'          => __( 'Footer News section', "color-newsmagazine" ),
      'description'    => __( 'Manage content of Footer news section at the footer', "color-newsmagazine" ),
  )
);



  /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * customizer setting for vertical slider
     *
     * @since 1.0.0
     */

    $wp_customize->add_setting( 'color_newsmagazine_image_footerslider', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_footerslider', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_footerslider', 
      'section' => 'color_newsmagazine_footer_vertical_slider_section',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/footerslider.jpg'),
      ),
    ) );
    
    $wp_customize->add_setting(
      'color_newsmagazine_top_footervslider_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_top_footervslider_enable',
      array(
        'section'     => 'color_newsmagazine_footer_vertical_slider_section',
        'label'       => __( 'Enable Footer Slider section', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    $wp_customize->add_setting(
      'color_newsmagazine_footer_slider_heading',
      array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_footer_slider_heading',
      array(
        'section'     => 'color_newsmagazine_footer_vertical_slider_section',
        'label'       => __( 'Title', 'color-newsmagazine' ),
        'settings' 	=> 'color_newsmagazine_footer_slider_heading',
        'type'        => 'text'
      )       
    );
    
  $wp_customize->add_setting( 'color_newsmagazine_footervslider_order', array(
        
    'default'     => 'date',
    'sanitize_callback' => 'color_newsmagazine_sanitize_select'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_footervslider_order', 
    array(
      'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
      'section'	=> 'color_newsmagazine_footer_vertical_slider_section',
      'settings' 	=> 'color_newsmagazine_footervslider_order',
      'type'      => 'select',
      'choices'	=> array (
        'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
        'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
        'rand'	=> __( 'Random', 'color-newsmagazine' ),
      )

    ) 
  );

  require get_template_directory() . '/inc/dropdown-category.php' ;
  $wp_customize->add_setting( 'color_newsmagazine_footervslider_category_name', 
  array(
    'default'     =>  0,
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_footervslider_category_name', array(
    
      'label' 	=> __( 'Select category', 'color-newsmagazine' ),
      'section'	=> 'color_newsmagazine_footer_vertical_slider_section',
      
  ) 	)	
  );

  require get_template_directory() . '/inc/dropdown-author.php' ;
  $wp_customize->add_setting( 'color_newsmagazine_footervslider_authorlist', 
  array(
    'default'     =>  0,
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_footervslider_authorlist', array(
    
      'label' 	=> __( 'Select post author', 'color-newsmagazine' ),
      'section'	=> 'color_newsmagazine_footer_vertical_slider_section',
      
  ) 	)	
  );

  $wp_customize->add_setting( 'color_newsmagazine_footervslider_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '7',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_footervslider_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_footer_vertical_slider_section',
    'type'                  => 'number',
  ) );

// Setting - location title

$wp_customize->add_setting( 'color_newsmagazine_location_setting_text',
    array(
    'default'           => 0,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
);

$wp_customize->add_control( 'color_newsmagazine_location_setting_text',
    array(
    'label'         => esc_html__( 'Show Location and Social link section', 'color-newsmagazine' ),
    'section'       => 'color_newsmagazine_location_section',
    'type'          => 'checkbox',
    )
);


$wp_customize->add_setting( 'color_newsmagazine_location_title_text',
    array(
    'default'           => __('Get in touch','color-newsmagazine'),
    'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control( 'color_newsmagazine_location_title_text',
    array(
    'label'         => esc_html__( 'Title', 'color-newsmagazine' ),
    'section'       => 'color_newsmagazine_location_section',
    'type'          => 'text',
    'settings' => 'color_newsmagazine_location_title_text',
    )
);


$wp_customize->add_setting( 'color_newsmagazine_image_footernews', array(
  'default' => '',
  'sanitize_callback' => 'esc_url',
) );
$wp_customize->add_control( 'color_newsmagazine_image_footernews', array(
  'type' => 'Image',
  'settings' => 'color_newsmagazine_image_footernews', 
  'section' => 'color_newsmagazine_footer_footernews_section',
  'input_attrs' => array(
  'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/footernews.jpg'),
  ),
) );

$wp_customize->add_setting(
  'color_newsmagazine_footer_news_enable',
  array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'color_newsmagazine_footer_news_enable',
  array(
    'section'     => 'color_newsmagazine_footer_footernews_section',
    'label'       => __( 'Enable Footer News section', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
);

$wp_customize->add_setting(
    'color_newsmagazine_footer_news_date_enable',
    array(
      'default'           => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_footer_news_date_enable',
    array(
      'section'     => 'color_newsmagazine_footer_footernews_section',
      'label'       => __( 'Show date', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
  
$wp_customize->add_setting( 'color_newsmagazine_footernews_title',
    array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control( 'color_newsmagazine_footernews_title',
    array(
    'label'         => __( 'Title', 'color-newsmagazine' ),
    'section'       => 'color_newsmagazine_footer_footernews_section',
    'type'          => 'text',
    )
);

  $wp_customize->add_setting( 'color_newsmagazine_footer_news_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_footer_news_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_footer_footernews_section',
    'type'                  => 'number',
  ) );
/** Footer Contact info */
$wp_customize->add_setting( 
    new Color_newsmagazine_Repeater_Setting( 
      $wp_customize, 
      'footer_contact_info_items', 
       array(
        'default' => array(
          array(
            'icon' => 'fas fa-map-pin',
            'title' => __('Bnews24, New York','color-newsmagazine'),
          ),
          array(
            'icon' => 'fas fa-phone',
            'title' => __('Toll Free 1660-6767-8909','color-newsmagazine'),
          ),
          array(
            'icon' => 'fas fa-newspaper',
            'title' => __('International Paper','color-newsmagazine'),
          )
        ),
        'sanitize_callback' => array( 'Color_newsmagazine_Repeater_Setting', 'sanitize_repeater_setting' ),
      ) 
    ) 
  );

  $wp_customize->add_control(
    new Color_newsmagazine_Control_Repeater(
      $wp_customize,
      'footer_contact_info_items',
      array(
        'section' => 'color_newsmagazine_location_section',              
        'label'   => __( 'Bottom footer contact items', 'color-newsmagazine' ),
        'fields'  => array(
          'icon' => array(
            'type'        => 'font',
            'label'       => __( 'Font Awesome Icon', 'color-newsmagazine' ),
            'description' => __( 'Example: fas fa-map-pin', 'color-newsmagazine' ),

          ),
          'title' => array(
            'type'        => 'text',
            'label'       => __( 'Title', 'color-newsmagazine' ),
          )
        ),
        'row_label' => array(
          'type' => 'field',
          'value' => __( 'contact', 'color-newsmagazine' ),
          'field' => 'title'
        )                        
      )
    )
  );

/** Social Links */
$wp_customize->add_setting( 
    new Color_newsmagazine_Repeater_Setting( 
      $wp_customize, 
      'footer_social_links_items', 
      array(
        'default' => array(
         array(
          'font' => 'fab fa-facebook',
          'link' => '#',                        
        ),
         array(
          'font' => 'fab fa-twitter',
          'link' => '#',
        ),
         array(
          'font' => 'fab fa-linkedin',
          'link' => '#',                        
        ),
         array(
          'font' => 'fab fa-behance',
          'link' => '#',
        ),
         array(
          'font' => 'fab fa-dribbble',
          'link' => '#',
        )
       ),
        'sanitize_callback' => array( 'Color_newsmagazine_Repeater_Setting', 'sanitize_repeater_setting' ),
      ) 
    ) 
  );

  $wp_customize->add_control(
    new Color_newsmagazine_Control_Repeater(
      $wp_customize,
      'footer_social_links_items',
      array(
        'section' => 'color_newsmagazine_location_section',              
        'label'   => __( 'Social Links', 'color-newsmagazine' ),
        'fields'  => array(
          'font' => array(
            'type'        => 'font',
            'label'       => __( 'Font Awesome Icon', 'color-newsmagazine' ),
            'description' => __( 'Example: fab fa-facebook', 'color-newsmagazine' ),
          ),
          'link' => array(
            'type'        => 'url',
            'label'       => __( 'Link', 'color-newsmagazine' ),
            'description' => __( 'Example: http://facebook.com', 'color-newsmagazine' ),
          )
        ),
        'row_label' => array(
          'type' => 'field',
          'value' => __( 'social', 'color-newsmagazine' ),
          'field' => 'link'
        )                        
      )
    )
  );

}
