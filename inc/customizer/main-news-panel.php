<?php
/**
 * color_newsmagazine Header settings panel at Theme Customizer
 *
 * @package color_newsmagazine
 * @since 1.0.0
 */

add_action( 'customize_register', 'color_newsmagazine_main_news_settings_register' );

function color_newsmagazine_main_news_settings_register( $wp_customize ) {



    /**
     * Add Header settings Panel
     *
     * @since 1.0.0
     */
  $wp_customize->add_panel(
   'color_newsmagazine_main_news_settings_panel',
   array(
     'priority'       => 32,
     'capability'     => 'edit_theme_options',
     'theme_supports' => '',
     'title'          => __( 'Main News section settings', 'color-newsmagazine' ),
   )
 );


 /*----------------------------------------------------------------------------------------------------------------------------------------*/

      /**
       * Main News Left Sidebar section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_left_sidebar_section',
        array(
         'priority'       => 5,
         'panel'          => 'color_newsmagazine_main_news_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Main News Left Sidebar section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content at Main News Left Sidebar section.', 'color-newsmagazine' ),
       )
      );
      /** Show Left News sidebar section */

      $wp_customize->add_setting( 'color_newsmagazine_image_mainnewsleft', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_mainnewsleft', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_mainnewsleft', 
        'section' => 'color_newsmagazine_left_sidebar_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/mainnewsleft.jpg'),
        ),
      ) );

          
      /** Title  */

      $wp_customize->add_setting( 'color_newsmagazine_leftnews_title', array(
    
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      ) );
  
      $wp_customize->add_control( 'color_newsmagazine_leftnews_title', 
        array(
          'label' 	=> __( 'Title', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_left_sidebar_section',
          'type'      => 'text',
          
  
        ) 
      );
    /** select order by for left News  */

    $wp_customize->add_setting( 'color_newsmagazine_leftnews_order', array(
      
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_leftnews_order', 
      array(
        'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_left_sidebar_section',
        'type'      => 'select',
        'choices'	=> array (
          'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'	=> __( 'Random', 'color-newsmagazine' ),
        )

      ) 
    );

    /** select category for left News  */
    
    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_leftnews_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_leftnews_category_name', array(
      
        'label' 	=> __( 'Select category', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_left_sidebar_section'        
    ) 	)	
    );

    /** select author for left News */

    require get_template_directory() . '/inc/dropdown-author.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_leftnews_authorlist', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_leftnews_authorlist', array(
      
        'label' 	=> __( 'Select author', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_left_sidebar_section',
        
    ) 	)	
    );

    $wp_customize->add_setting( 'color_newsmagazine_leftnews_number', array(
      'capability'            => 'edit_theme_options',
      'default'               => '6',
      'sanitize_callback'     => 'absint'
    ));
    
    $wp_customize->add_control( 'color_newsmagazine_leftnews_number', array(
      'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
      'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_left_sidebar_section',
      'type'                  => 'number',
    ) );

    $wp_customize->add_setting( 'color_newsmagazine_leftnews_date_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_leftnews_date_enable', 
      array(
        'label'   => __( 'Show date', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_left_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

    $wp_customize->add_setting( 'color_newsmagazine_leftnews_comments_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_leftnews_comments_enable', 
      array(
        'label'   => __( 'Show comment number', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_left_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

    
    $wp_customize->add_setting( 'color_newsmagazine_leftnews_readingtime_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_leftnews_readingtime_enable', 
      array(
        'label'   => __( 'Show reading time', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_left_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

        
    $wp_customize->add_setting( 'color_newsmagazine_leftnews_timeago_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_leftnews_timeago_enable', 
      array(
        'label'   => __( 'Show time ago', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_left_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );
/*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       * Main News Right Sidebar section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_right_sidebar_section',
        array(
         'priority'       => 7,
         'panel'          => 'color_newsmagazine_main_news_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Main News Right Sidebar section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content at Main News Right Sidebar section.', 'color-newsmagazine' ),
       )
      );
       /** Show Right News Slider sidebar section */

       $wp_customize->add_setting( 'color_newsmagazine_image_mainnewsright', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_mainnewsright', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_mainnewsright', 
        'section' => 'color_newsmagazine_right_sidebar_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/mainnewsright.jpg'),
        ),
      ) );

      $wp_customize->add_setting( 'color_newsmagazine_rightnews_title',
        array(
          'default'           => '',
          'sanitize_callback' => 'sanitize_text_field',
        )
      );

      $wp_customize->add_control( 'color_newsmagazine_rightnews_title',
        array(
          'section'     => 'color_newsmagazine_right_sidebar_section',
          'label'       => __( 'Title', 'color-newsmagazine' ),
          'type'        => 'text'
        )       
      );

      /** select order by for News right sidebar */

      $wp_customize->add_setting( 'color_newsmagazine_rightnews_order', array(
            
        'default'     => 'date',
        'sanitize_callback' => 'color_newsmagazine_sanitize_select'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_rightnews_order', 
        array(
          'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_right_sidebar_section',
          'type'      => 'select',
          'choices'	=> array (
            'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
            'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
            'rand'	=> __( 'Random', 'color-newsmagazine' ),
          )

        ) 
      );
      /** select category for News right Sidebar */
            
      require get_template_directory() . '/inc/dropdown-category.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_rightnews_category_name', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_rightnews_category_name', array(
        
          'label' 	=> __( 'Select category', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_right_sidebar_section',
          
      ) 	)	
      );

      /** select author for News Right Sidebar */

      require get_template_directory() . '/inc/dropdown-author.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_rightnews_authorlist', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'absint',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_rightnews_authorlist', array(
        
          'label' 	=> __( 'Select post author', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_right_sidebar_section',
          
      ) 	)	
      );
            
      /** select checkbox by for News Right Sidebar*/

      $wp_customize->add_setting( 'color_newsmagazine_rightnews_number', array(
        'capability'            => 'edit_theme_options',
        'default'               => '5',
        'sanitize_callback'     => 'absint'
      ));
      
      $wp_customize->add_control( 'color_newsmagazine_rightnews_number', array(
        'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
        'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_right_sidebar_section',
        'type'                  => 'number',
      ) );

    $wp_customize->add_setting( 'color_newsmagazine_rightnews_date_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_rightnews_date_enable', 
      array(
        'label'   => __( 'Show date', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_right_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

    $wp_customize->add_setting( 'color_newsmagazine_rightnews_comments_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_rightnews_comments_enable', 
      array(
        'label'   => __( 'Show comment number', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_right_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

    $wp_customize->add_setting( 'color_newsmagazine_rightnews_readingtime_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_rightnews_readingtime_enable', 
      array(
        'label'   => __( 'Show reading time', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_right_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

        
    $wp_customize->add_setting( 'color_newsmagazine_rightnews_timeago_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_rightnews_timeago_enable', 
      array(
        'label'   => __( 'Show time ago', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_right_sidebar_section',
        'type'      => 'checkbox'
      ) 
    );

    // End Featured
/*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       * Main News upper Slider section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_mainnews_upperslider_section',
        array(
         'priority'       => 6,
         'panel'          => 'color_newsmagazine_main_news_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Main News Central Upper Slider section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content at Main News Slider section.', 'color-newsmagazine' ),
       )
      );

      $wp_customize->add_setting( 'color_newsmagazine_image_mainnewsupper', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_mainnewsupper', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_mainnewsupper', 
        'section' => 'color_newsmagazine_mainnews_upperslider_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/mainnewscentral.jpg'),
        ),
      ) );
    
      /**
      * Set background image
      *
      * @since 1.0.0
      */
      $wp_customize->add_setting('color_newsmagazine_mainnews_upperslider_background_image', array(
        'transport'         => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
      ));

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'color_newsmagazine_mainnews_upperslider_background_image', array(
        'label'             => __('Background image', 'color-newsmagazine'),
        'description'       => __('Image size minimum (1440px X 800px)', 'color-newsmagazine'),
        'height'            => 800,
        'width'             => 1440,
        'section'           => 'color_newsmagazine_mainnews_upperslider_section',
      )));

      /** select order by for News Slider */

      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_title', array(
        
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_title', 
        array(
          'label' 	=> __( 'Title', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_mainnews_upperslider_section',
          'type'      => 'text',

        ) 
      );
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_order', array(
        
        'default'     => 'date',
        'sanitize_callback' => 'color_newsmagazine_sanitize_select'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_order', 
        array(
          'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_mainnews_upperslider_section',
          'type'      => 'select',
          'choices'	=> array (
            'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
            'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
            'rand'	=> __( 'Random', 'color-newsmagazine' ),
          )

        ) 
      );

      /** select category for News Slider */

      require get_template_directory() . '/inc/dropdown-category.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_category_name', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_mainnews_upperslider_category_name', array(
        
          'label' 	=> __( 'Select category', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_mainnews_upperslider_section',
          
      ) 	)	
      );
  
      /** select author for News Slider */

      require get_template_directory() . '/inc/dropdown-author.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_authorlist', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'absint',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_mainnews_upperslider_authorlist', array(
        
          'label' 	=> __( 'Select post author', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_mainnews_upperslider_section',
          
      ) 	)	
      );
      
      /** select checkbox by for main news upper slider */

      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_number', array(
        'capability'            => 'edit_theme_options',
        'default'               => '3',
        'sanitize_callback'     => 'absint'
      ));
      
      $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_number', array(
        'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
        'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_mainnews_upperslider_section',
        'type'                  => 'number',
      ) );

      $post_taxonomy_arrays = array(__('category','color-newsmagazine'),__('date','color-newsmagazine'),__('author','color-newsmagazine'),__('comments','color-newsmagazine') );
      foreach ($post_taxonomy_arrays as  $post_taxonomy) {
        $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_taxonomy_'.$post_taxonomy, array(
        'capability'            => 'edit_theme_options',
        'default'               => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
        ) );
      
        $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_taxonomy_'.$post_taxonomy, array(
          /* translators: %s: Label */ 
          'label'                 =>  sprintf( __( 'Show %s', 'color-newsmagazine' ), $post_taxonomy ),
          'section'               => 'color_newsmagazine_mainnews_upperslider_section',
          'type'                  => 'checkbox',
          'settings' => 'color_newsmagazine_mainnews_upperslider_taxonomy_'.$post_taxonomy,
      
        ) );
      }

      // Start Added Featured
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_post_time_ago_enable', 
      array(
        
        'default'     => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_post_time_ago_enable', 
        array(
          'label'   => __( 'Show time ago', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_mainnews_upperslider_section',
          'type'      => 'checkbox'
        ) 
      );


      $wp_customize->add_setting( 'color_newsmagazine_mainnews_upperslider_post_read_enable', 
      array(
        
        'default'     => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_mainnews_upperslider_post_read_enable', 
        array(
          'label'   => __( 'Show reading time', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_mainnews_upperslider_section',
          'type'      => 'checkbox'
        ) 
      );

    // End Featured

/*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       * Main News lower Slider section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_second_slider_section',
        array(
         'priority'       => 6,
         'panel'          => 'color_newsmagazine_main_news_settings_panel',
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Main News Central Lower Slider section', 'color-newsmagazine' ),
         'description'    => __( 'Manage content at Main News Central Lower Slider section.', 'color-newsmagazine' ),
       )
      );

      $wp_customize->add_setting( 'color_newsmagazine_image_mainnewslower', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_mainnewslower', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_mainnewslower', 
        'section' => 'color_newsmagazine_second_slider_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/mainnewslower.jpg'),
        ),
      ) );
      /**
       *Show News second Slider section
      *
      * @since 1.0.0
      */

      $wp_customize->add_setting(
        'color_newsmagazine_mainnews_lower_slider_title',
        array(
          'default'           => '',
          'sanitize_callback' => 'sanitize_text_field',
        )
      );

      $wp_customize->add_control(
        'color_newsmagazine_mainnews_lower_slider_title',
        array(
          'section'     => 'color_newsmagazine_second_slider_section',
          'label'       => __( 'Title', 'color-newsmagazine' ),
          'type'        => 'text'
        )       
      );
      /** select order by for News second Slider */

      $wp_customize->add_setting( 'color_newsmagazine_mainnews_lowerslider_order', array(
        
        'default'     => 'date',
        'sanitize_callback' => 'color_newsmagazine_sanitize_select'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_mainnews_lowerslider_order', 
        array(
          'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_second_slider_section',
          'type'      => 'select',
          'choices'	=> array (
            'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
            'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
            'rand'	=> __( 'Random', 'color-newsmagazine' ),
          )

        ) 
      );

      /** select category for News Slider */

      require get_template_directory() . '/inc/dropdown-category.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_lowerslider_category_name', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_mainnews_lowerslider_category_name', array(
        
          'label' 	=> __( 'Select category', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_second_slider_section',
          
      ) 	)	
      );

      /** select author for News second Slider */

      require get_template_directory() . '/inc/dropdown-author.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_lowerslider_authorlist', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'absint',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_mainnews_lowerslider_authorlist', array(
        
          'label' 	=> __( 'Select post author', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_second_slider_section',
          
      ) 	)	
      );
  
      $wp_customize->add_setting( 'color_newsmagazine_mainnews_lowerslider_number', array(
        'capability'            => 'edit_theme_options',
        'default'               => '4',
        'sanitize_callback'     => 'absint'
      ));
      
      $wp_customize->add_control( 'color_newsmagazine_mainnews_lowerslider_number', array(
        'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
        'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_second_slider_section',
        'type'                  => 'number',
      ) );

      /**
       * Main News banner layout 
       *
       * @since 1.0.0
       */     
      $wp_customize->add_section(
        'color_newsmagazine_mainnews_layout_section',
        array(
        'priority'       => 10,
        'panel'          => 'color_newsmagazine_main_news_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Main News layout', 'color-newsmagazine' ),
        'description'    => __( 'Select the below option to show this section in the desired location', 'color-newsmagazine' ),
        )
      );

      $wp_customize->add_setting( 'color_newsmagazine_image_mainnews', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_mainnews', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_mainnews', 
        'section' => 'color_newsmagazine_mainnews_layout_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/mainimage.jpg'),
        ),
      ) );

      $wp_customize->add_setting(
        'color_newsmagazine_mainnews_total_enable',
        array(
          'default'           => 1,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );

      $wp_customize->add_control(
        'color_newsmagazine_mainnews_total_enable',
        array(
          'section'     => 'color_newsmagazine_mainnews_layout_section',
          'label'       => __( 'Show it in all the places', 'color-newsmagazine' ),
          'type'        => 'checkbox'
        )       
      );
}