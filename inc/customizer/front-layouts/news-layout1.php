<?php

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     * News Block Layout One
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_block_1',
      array(
       'priority'       => 2,
       'panel'          => 'color_newsmagazine_front_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( ' Block One sub section', 'color-newsmagazine' )
     )
    );
    $wp_customize->add_setting( 'color_newsmagazine_image_1', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_1', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_1', 
      'section' => 'color_newsmagazine_block_1',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b1.jpg'),
      ),
    ) );
    /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_1_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_1_google',
      array(
        'section'     => 'color_newsmagazine_block_1',
        'label'       => __( 'Select the option to show advertisement at the top of this block section', 'color-newsmagazine' ),
        'type'        => 'select',
        'choices' => array (
          '0'  => __( 'None', 'color-newsmagazine' ),
          '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
        )

      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show News Block Layout One.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_1_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_1_enable',
      array(
        'section'     => 'color_newsmagazine_block_1',
        'label'       => __( 'Enable Block One sub section', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show author.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_b1_author_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b1_author_enable',
      array(
        'section'     => 'color_newsmagazine_block_1',
        'label'       => __( 'Show author', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );


    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show date.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_b1_date_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b1_date_enable',
      array(
        'section'     => 'color_newsmagazine_block_1',
        'label'       => __( 'Show date', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show comment.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_b1_comment_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b1_comment_enable',
      array(
        'section'     => 'color_newsmagazine_block_1',
        'label'       => __( 'Show comment number', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
   *Show reading time
   *
   * @since 1.0.0
   */
  $wp_customize->add_setting(
    'color_newsmagazine_b1_post_read_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_b1_post_read_enable',
    array(
      'section'     => 'color_newsmagazine_block_1',
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
    'color_newsmagazine_b1_post_time_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_b1_post_time_enable',
    array(
      'section'     => 'color_newsmagazine_block_1',
      'label'       => __( 'Show time ago', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
   *Show more stories
   *
   * @since 1.0.0
  */

  $wp_customize->add_setting(
    'color_newsmagazine_more_stories_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_more_stories_enable',
    array(
      'section'     => 'color_newsmagazine_block_1',
      'label'       => __( 'Show more stories', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
   /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of Layout 1
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_b1_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_b1_title', array(
      'label'                 =>  __( 'Title', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_1',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_b1_title',
    ) );


    /** select order by for News Block 1 */

    $wp_customize->add_setting( 'color_newsmagazine_b1_order', array(
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ));

    $wp_customize->add_control( 'color_newsmagazine_b1_order', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_1',
        'settings'  => 'color_newsmagazine_b1_order',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )
      ) 
    );

    /** select a category for News Block 1 */

    require get_template_directory() . '/inc/dropdown-category.php';
    $wp_customize->add_setting( 'color_newsmagazine_b1_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_b1_category_name', array(
      
      'label'   => __( 'Select category', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_1',
        
      )) 
    );

    /** select author for News Block 1 */

    require get_template_directory() . '/inc/dropdown-author.php' ;

  $wp_customize->add_setting( 'color_newsmagazine_b1_authorlist', 
  array(
    'default'     =>  0,
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_b1_authorlist', array(
    
    'label'   => __( 'Select author', 'color-newsmagazine' ),
    'section' => 'color_newsmagazine_block_1',
      
    )) 
  );

  /** select checkbox by for News Block 1 */
  $wp_customize->add_setting( 'color_newsmagazine_b1_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_b1_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_block_1',
    'type'                  => 'number',
    'settings' => 'color_newsmagazine_b1_number',
  ) );