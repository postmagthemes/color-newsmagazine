<?php
/**
 * color_newsmagazine Header settings panel at Theme Customizer
 *
 * @package color_newsmagazine
 * @since 1.0.0
 */

add_action( 'customize_register', 'color_newsmagazine_header_settings_register' );

function color_newsmagazine_header_settings_register( $wp_customize ) {

  require get_template_directory() .'/inc/repeater/class-repeater-settings.php';
  require get_template_directory() .'/inc/repeater/class-control-repeater.php';

  $wp_customize->get_section( 'header_image' )->priority = '20';
  $wp_customize->get_section( 'header_image' )->title    = __( 'Header Image', 'color-newsmagazine' );
  $wp_customize->get_section( 'header_image' )->panel    = 'color_newsmagazine_header_settings_panel';

	/**
     * Add Header settings Panel
     *
     * @since 1.0.0
     */
  $wp_customize->add_panel(
   'color_newsmagazine_header_settings_panel',
   array(
     'priority'       => 30,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __( 'Header settings', 'color-newsmagazine' ),
   )
 );

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
	/**
     * Top Address section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_top_address_section',
      array(
       'priority'       => 3,
       'panel'          => 'color_newsmagazine_header_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Top Address and Date section', 'color-newsmagazine' ),
       'description'    => __( 'Manage content at Top Address and Date section', 'color-newsmagazine' ),
     )
    );
  /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show Top Header section
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_top_header_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_top_header_enable',
      array(
        'section'     => 'color_newsmagazine_top_address_section',
        'label'       => __( 'Enable Top Address and Date section', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

/**
     *Show Top Header date
     *
     * @since 1.0.0
     */

    $wp_customize->add_setting(
      'color_newsmagazine_top_header_date_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_top_header_date_enable',
      array(
        'section'     => 'color_newsmagazine_top_address_section',
        'label'       => __( 'Show date', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );
    /**
     *Show Top address section
     *
     * @since 1.0.0
     */
    
    /** Top Header address info */
    $wp_customize->add_setting( 
      new Color_newsmagazine_Repeater_Setting( 
        $wp_customize, 
        'top_header_contact_info_items', 
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
        'top_header_contact_info_items',
        array(
          'section' => 'color_newsmagazine_top_address_section',              
          'label'   => __( 'Top Header Contact items', 'color-newsmagazine' ),
          'fields'  => array(
            'icon' => array(
              'type'        => 'font',
              'label'       => __( 'Font Awesome Icon', 'color-newsmagazine' ),
              'description' => __( 'Example: fas fa-map-pin', 'color-newsmagazine' ),

            ),
            'title' => array(
              'type'        => 'text',
              'label'       => __( 'Location Title', 'color-newsmagazine' ),
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

/*----------------------------------------------------------------------------------------------------------------------------------------*/
	/**
     * Top social section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_top_social_section',
      array(
       'priority'       => 1,
       'panel'          => 'color_newsmagazine_header_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Top Social section', 'color-newsmagazine' ),
       'description'    => __( 'Manage social link display on the top', 'color-newsmagazine' ),
     )
    );
    /**
     *Show Top Social link section
     *
     * @since 1.0.0
     */

    $wp_customize->add_setting(
      'color_newsmagazine_top_header_social_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_top_header_social_enable',
      array(
        'section'     => 'color_newsmagazine_top_social_section',
        'label'       => __( 'Show social links', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    /** Social Links */
    $wp_customize->add_setting( 
      new Color_newsmagazine_Repeater_Setting( 
        $wp_customize, 
        'top_header_social_links_items', 
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
        'top_header_social_links_items',
        array(
          'section' => 'color_newsmagazine_top_social_section',              
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



/*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
       * Advertisement section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_top_header_ads_section',
        array(
         'priority'       => 2,
         'panel'          => 'color_newsmagazine_header_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Header Advertisement section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content in the Advertisement section of the header', 'color-newsmagazine' ),
       )
      );
  

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       *Show Advertisement section
        *
        * @since 1.0.0
        */
      $wp_customize->add_setting( 'color_newsmagazine_top_header_ads_enable', 
      array(
        
        'default'     => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
      ) );
  
      $wp_customize->add_control( 'color_newsmagazine_top_header_ads_enable', 
        array(
          'label'   => __( 'Enable', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_top_header_ads_section',
          'type'      => 'checkbox'
        ) 
      );
      
      $wp_customize->add_setting(
        'color_newsmagazine_top_social_google',
        array(
          'default'           => 0,
          'sanitize_callback' => 'color_newsmagazine_sanitize_select',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_top_social_google',
        array(
          'section'     => 'color_newsmagazine_top_header_ads_section',
          'label'       => __( 'Select the option to show advertisement above the menu section', 'color-newsmagazine' ),
          'description' => __('Here, First advertisement bar is a widget area. Please add HTML or Image widget in this bar from admin menu','color-newsmagazine'),
          'type'        => 'select',
          'choices' => array (
            '0'  => __( 'None', 'color-newsmagazine' ),
            '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
          )

        )       
      );

      $wp_customize->add_setting(
        'color_newsmagazine_sitetitle_google',
        array(
          'default'           => 0,
          'sanitize_callback' => 'color_newsmagazine_sanitize_select',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_sitetitle_google',
        array(
          'section'     => 'color_newsmagazine_top_header_ads_section',
          'label'       => __( 'Select the option to show an advertisement on the right side of the site title', 'color-newsmagazine' ),
          'type'        => 'select',
          'choices' => array (
            '0'  => __( 'None', 'color-newsmagazine' ),
            '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
          )

        )       
      );

      $wp_customize->add_setting(
        'color_newsmagazine_mainnews_google',
        array(
          'default'           => 0,
          'sanitize_callback' => 'color_newsmagazine_sanitize_select',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_mainnews_google',
        array(
          'section'     => 'color_newsmagazine_top_header_ads_section',
          'label'       => __( 'Select option to show advertisement above main news section', 'color-newsmagazine' ),
          'type'        => 'select',
          'choices' => array (
            '0'  => __( 'None', 'color-newsmagazine' ),
            '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
          )

        )       
      );

      /*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       * Hot News section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_top_header_hot_news_section',
        array(
         'priority'       => 4,
         'panel'          => 'color_newsmagazine_header_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Hot News section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content at Hot News section.', 'color-newsmagazine' ),
       )
      );

      /*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       *Show Hot News section
       *
       * @since 1.0.0
       */
      $wp_customize->add_setting(
        'color_newsmagazine_hot_news_enable',
        array(
          'default'           => 1,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_hot_news_enable',
        array(
          'section'     => 'color_newsmagazine_top_header_hot_news_section',
          'label'       => __( 'Enable Hot News section', 'color-newsmagazine' ),
          'type'        => 'checkbox',
        )       
      );

      /**Hot News Text */
      $wp_customize->add_setting( 'color_newsmagazine_hot_news_text', array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'sanitize_text_field'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_hot_news_text', array(
        'label'                 =>  __( 'Title', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_top_header_hot_news_section',
        'type'                  => 'text',
        'settings'              => 'color_newsmagazine_hot_news_text',
      ) );

      /** select order by for Hot news */

      $wp_customize->add_setting( 'color_newsmagazine_hot_news_order', array(
        
        'default'     => 'date',
        'sanitize_callback' => 'color_newsmagazine_sanitize_select'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_hot_news_order', 
        array(
          'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_top_header_hot_news_section',
          'settings' 	=> 'color_newsmagazine_hot_news_order',
          'type'      => 'select',
          'choices'	=> array (
            'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
            'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
            'rand'	=> __( 'Random', 'color-newsmagazine' ),
          )

        ) 
      );

      /** select category for hot news */

      require get_template_directory() . '/inc/dropdown-category.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_hot_news_category_name', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_hot_news_category_name', array(
        
          'label' 	=> __( 'Select category', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_top_header_hot_news_section',
          
      ) 	)	
      );
      /** select author for hot news */

      require get_template_directory() . '/inc/dropdown-author.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_hot_news_authorlist', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'absint',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_hot_news_authorlist', array(
        
          'label' 	=> __( 'Select author', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_top_header_hot_news_section',
          
      ) 	)	
      );

      $wp_customize->add_setting( 'color_newsmagazine_hot_news_number', array(
        'capability'            => 'edit_theme_options',
        'default'               => '3',
        'sanitize_callback'     => 'absint'
      ));

      $wp_customize->add_control( 'color_newsmagazine_hot_news_number', array(
        'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
        'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_top_header_hot_news_section',
        'type'                  => 'number',
        'settings' => 'color_newsmagazine_hot_news_number',
      ) );




      // 24 new start


}