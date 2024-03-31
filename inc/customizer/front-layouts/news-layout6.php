<?php

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     *  Block layout six
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_block_6',
      array(
       'priority'       => 8,
       'panel'          => 'color_newsmagazine_front_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Block Six sub section', 'color-newsmagazine' )
     )
    );
    $wp_customize->add_setting( 'color_newsmagazine_image_6', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_6', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_6', 
      'section' => 'color_newsmagazine_block_6',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b6.jpg'),
      ),
    ) );

     /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_6_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_6_google',
      array(
        'section'     => 'color_newsmagazine_block_6',
        'label'       => __( 'Select option to show advertisement at the top of this block section', 'color-newsmagazine' ),
        'type'        => 'select',
        'choices' => array (
          '0'  => __( 'None', 'color-newsmagazine' ),
          '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
        )

      )       
    );

    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show  Block layout six.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_6_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_6_enable',
      array(
        'section'     => 'color_newsmagazine_block_6',
        'label'       => __( 'Enable Block Six sub section', 'color-newsmagazine' ),
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
      'color_newsmagazine_block_6_author_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_6_author_enable',
      array(
        'section'     => 'color_newsmagazine_block_6',
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
      'color_newsmagazine_block_6_date_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_6_date_enable',
      array(
        'section'     => 'color_newsmagazine_block_6',
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
      'color_newsmagazine_block_6_comment_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_6_comment_enable',
      array(
        'section'     => 'color_newsmagazine_block_6',
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
    'color_newsmagazine_block_6_post_read_enable',
    array(
      'default'           => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_6_post_read_enable',
    array(
      'section'     => 'color_newsmagazine_block_6',
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
    'color_newsmagazine_block_6_post_time_enable',
    array(
      'default'           => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_6_post_time_enable',
    array(
      'section'     => 'color_newsmagazine_block_6',
      'label'       => __( 'Show time ago', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );

   /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of layout 6
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_6_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_block_6_title', array(
      'label'                 =>  __( 'Title', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_6',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_block_6_title',
    ) );


    /** select order by for  Block 6 */

    $wp_customize->add_setting( 'color_newsmagazine_block_6_order', array(
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ));

    $wp_customize->add_control( 'color_newsmagazine_block_6_order', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_6',
        'settings'  => 'color_newsmagazine_block_6_order',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )
      ) 
    );

    /** select a category for  Block 6 */

    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_block_6_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_block_6_category_name', array(
      
      'label'   => __( 'Select category', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_6',
        
      )) 
    );

    /** select author for  Block 6 */

  require get_template_directory() . '/inc/dropdown-author.php' ;

  $wp_customize->add_setting( 'color_newsmagazine_block_6_authorlist', 
  array(
    'default'     =>  0,
    'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_block_6_authorlist', array(
    
    'label'   => __( 'Select author', 'color-newsmagazine' ),
    'section' => 'color_newsmagazine_block_6',
    'settings' => 'color_newsmagazine_block_6_authorlist',
      
    )) 
  );

  /** select checkbox by for  Block 4 */
  $wp_customize->add_setting( 'color_newsmagazine_block_6_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '4',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_block_6_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 1,2,3 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_block_6',
    'type'                  => 'number',
    'settings' => 'color_newsmagazine_block_6_number',
  ) );