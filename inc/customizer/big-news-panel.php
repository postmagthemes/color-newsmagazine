<?php
add_action( 'customize_register', 'color_newsmagazine_bignews_settings_register' );

function color_newsmagazine_bignews_settings_register( $wp_customize ) {

  $wp_customize->add_panel(
    'color_newsmagazine_big_news_panel',
    array(
      'priority'       => 31,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __( 'Big News section settings', 'color-newsmagazine' ),
    )
  );
/*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       * 24 News section
       *
       * @since 1.0.0
       */
      $wp_customize->add_section(
        'color_newsmagazine_big_news_section',
        array(
          'panel'         => 'color_newsmagazine_big_news_panel',
         'priority'       => 31,
         'capability'     => 'edit_theme_options',
         'theme_supports' => '',
         'title'          => __( 'Big News section settings', 'color-newsmagazine' ),
         'description'    => __( 'Select the below option to show this section in the desired location', 'color-newsmagazine' ),
       )
      );

      $wp_customize->add_setting( 'color_newsmagazine_image_bignews', array(
        'default' => '',
        'sanitize_callback' => 'esc_url',
      ) );
      $wp_customize->add_control( 'color_newsmagazine_image_bignews', array(
        'type' => 'Image',
        'settings' => 'color_newsmagazine_image_bignews', 
        'section' => 'color_newsmagazine_big_news_section',
        'input_attrs' => array(
        'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/bignews.jpg'),
        ),
      ) );

      /*----------------------------------------------------------------------------------------------------------------------------------------*/
      /**
       *Show 24 News section
       *
       * @since 1.0.0
       */
      $wp_customize->add_setting(
        'color_newsmagazine_big_news_enable',
        array(
          'default'           => 1,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_big_news_enable',
        array(
          'section'     => 'color_newsmagazine_big_news_section',
          'label'       => __( 'Show it in all the places', 'color-newsmagazine' ),
          'type'        => 'checkbox',
        )       
      );
      $wp_customize->add_setting(
        'color_newsmagazine_big_blogpage_enable',
        array(
          'default'           => 1,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );

  
      $wp_customize->add_setting(
        'color_newsmagazine_big_news_timeframe',
        array(
          'default'           => 48,
          'sanitize_callback' => 'absint',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_big_news_timeframe',
        array(
          'section'     => 'color_newsmagazine_big_news_section',
          'label'       => __( 'A prior older post to hide if below checkbox is selected', 'color-newsmagazine' ),
          'type'        => 'number',
        )       
      );
      $wp_customize->add_setting(
        'color_newsmagazine_big_news_or_any_enable',
        array(
          'default'           => 0,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );
      
      $wp_customize->add_control(
        'color_newsmagazine_big_news_or_any_enable',
        array(
          'section'     => 'color_newsmagazine_big_news_section',
          'label'       => __( 'Enable hiding post older than selected time in an hour in the above settings', 'color-newsmagazine' ),
          'type'        => 'checkbox',
        )       
      );

      /**24 News Text */
      $wp_customize->add_setting( 'color_newsmagazine_big_news_text', array(
        'capability'            => 'edit_theme_options',
        'default'               => '',
        'sanitize_callback'     => 'sanitize_text_field'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_big_news_text', array(
        'label'                 =>  __( 'Title', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_big_news_section',
        'type'                  => 'text',
        'settings'              => 'color_newsmagazine_big_news_text',
      ) );

      /** select order by for Hot news */

      $wp_customize->add_setting( 'color_newsmagazine_big_news_order', array(
        
        'default'     => 'date',
        'sanitize_callback' => 'color_newsmagazine_sanitize_select'
      ) );

      $wp_customize->add_control( 'color_newsmagazine_big_news_order', 
        array(
          'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_big_news_section',
          'settings'  => 'color_newsmagazine_big_news_order',
          'type'      => 'select',
          'choices' => array (
            'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
            'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
            'rand'  => __( 'Random', 'color-newsmagazine' ),
          )

        ) 
      );

      /** select category for 24 news */

      require get_template_directory() . '/inc/dropdown-category.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_big_news_category_name', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'sanitize_text_field',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_big_news_category_name', array(
        
          'label'   => __( 'Select category', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_big_news_section',
          
      )   ) 
      );
      /** select author for 24 news */

      require get_template_directory() . '/inc/dropdown-author.php' ;
      $wp_customize->add_setting( 'color_newsmagazine_big_news_authorlist', 
      array(
        'default'     =>  0,
        'sanitize_callback' => 'absint',
      ) );

      $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_big_news_authorlist', array(
        
          'label'   => __( 'Select post author', 'color-newsmagazine' ),
          'section' => 'color_newsmagazine_big_news_section',
          
      )   ) 
      );

      $wp_customize->add_setting( 'color_newsmagazine_big_news_number', array(
        'capability'            => 'edit_theme_options',
        'default'               => '3',
        'sanitize_callback'     => 'absint'
      ));

      $wp_customize->add_control( 'color_newsmagazine_big_news_number', array(
        'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
        'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
        'section'               => 'color_newsmagazine_big_news_section',
        'type'                  => 'number',
        'settings' => 'color_newsmagazine_big_news_number',

      ) );

}