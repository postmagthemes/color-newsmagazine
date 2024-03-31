<?php

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     * News Block Layout Four
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_block_4',
      array(
       'priority'       => 6,
       'panel'          => 'color_newsmagazine_front_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Block Four sub section', 'color-newsmagazine' )
     )
    );
    $wp_customize->add_setting( 'color_newsmagazine_image_4', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_4', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_4', 
      'section' => 'color_newsmagazine_block_4',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b4.jpg'),
      ),
    ) );
    
     /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_4_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_4_google',
      array(
        'section'     => 'color_newsmagazine_block_4',
        'label'       => __( 'Select option to show advertisement at the top of this block section', 'color-newsmagazine' ),
        'type'        => 'select',
        'choices' => array (
          '0'  => __( 'None', 'color-newsmagazine' ),
          '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
        )

      )       
    );
    /**
      * Set background image
      *
      * @since 1.0.0
    */
    $wp_customize->add_setting('color_newsmagazine_block_4_image', array(
      'transport'         => 'refresh',
      'sanitize_callback'     => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'color_newsmagazine_block_4_image', array(
      'label'             => __('Background image', 'color-newsmagazine'),
      'section'           => 'color_newsmagazine_block_4',
      'settings'          => 'color_newsmagazine_block_4_image',
    )));
    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show News Block Layout Four.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_4_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_4_enable',
      array(
        'section'     => 'color_newsmagazine_block_4',
        'label'       => __( 'Enable Block Four sub section', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show author to show.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_4_author_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_4_author_enable',
      array(
        'section'     => 'color_newsmagazine_block_4',
        'label'       => __( 'Show author', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );


    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show date to show.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_4_date_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_4_date_enable',
      array(
        'section'     => 'color_newsmagazine_block_4',
        'label'       => __( 'Show date', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show comment to show.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_4_comment_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_4_comment_enable',
      array(
        'section'     => 'color_newsmagazine_block_4',
        'label'       => __( 'Show comment number', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
   *Show reading time to show
   *
   * @since 1.0.0
   */
  $wp_customize->add_setting(
    'color_newsmagazine_block_4_post_read_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_4_post_read_enable',
    array(
      'section'     => 'color_newsmagazine_block_4',
      'label'       => __( 'Show reading time', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );


  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
   *Show time ago
   *
   * @since 1.0.0
  */

  $wp_customize->add_setting(
    'color_newsmagazine_block_4_post_time_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_4_post_time_enable',
    array(
      'section'     => 'color_newsmagazine_block_4',
      'label'       => __( 'Show time ago', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );

   /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of Layout 4
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_4_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_block_4_title', array(
      'label'                 =>  __( 'Title', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_4',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_block_4_title',
    ) );


    /** select order by for News Block 4 */

    $wp_customize->add_setting( 'color_newsmagazine_block_4_order', array(
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ));

    $wp_customize->add_control( 'color_newsmagazine_block_4_order', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_4',
        'settings'  => 'color_newsmagazine_block_4_order',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )
      ) 
    );

    /** select a category for News Block 4 */

    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_block_4_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_block_4_category_name', array(
      
      'label'   => __( 'Select category', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_4',
      'settings'  => 'color_newsmagazine_block_4_category_name',
        
      )) 
    );

    /** select author for News Block 4 */

    require get_template_directory() . '/inc/dropdown-author.php' ;

  $wp_customize->add_setting( 'color_newsmagazine_block_4_authorlist', 
  array(
    'default'     =>  0,
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_block_4_authorlist', array(
    
    'label'   => __( 'Select author', 'color-newsmagazine' ),
    'section' => 'color_newsmagazine_block_4',
      
    )) 
  );

  /** select checkbox by for News Block 4 */
  $wp_customize->add_setting( 'color_newsmagazine_block_4_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '5',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_block_4_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 1,2,3 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_block_4',
    'type'                  => 'number',
    'settings' => 'color_newsmagazine_block_4_number',
  ) );