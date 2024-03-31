<?php

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     *  Block Layout Five
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_block_5',
      array(
       'priority'       => 7,
       'panel'          => 'color_newsmagazine_front_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Block Five sub section', 'color-newsmagazine' )
     )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_5', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_5', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_5', 
      'section' => 'color_newsmagazine_block_5',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b5.jpg'),
      ),
    ) );

     /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_5_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_5_google',
      array(
        'section'     => 'color_newsmagazine_block_5',
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
     *Show  Block Layout Five.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_5_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_5_enable',
      array(
        'section'     => 'color_newsmagazine_block_5',
        'label'       => __( 'Enable Block Five sub section', 'color-newsmagazine' ),
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
      'color_newsmagazine_block_5_author_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_5_author_enable',
      array(
        'section'     => 'color_newsmagazine_block_5',
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
      'color_newsmagazine_block_5_date_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_5_date_enable',
      array(
        'section'     => 'color_newsmagazine_block_5',
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
      'color_newsmagazine_block_5_comment_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_5_comment_enable',
      array(
        'section'     => 'color_newsmagazine_block_5',
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
    'color_newsmagazine_block_5_post_read_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_5_post_read_enable',
    array(
      'section'     => 'color_newsmagazine_block_5',
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
    'color_newsmagazine_block_5_post_time_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_5_post_time_enable',
    array(
      'section'     => 'color_newsmagazine_block_5',
      'label'       => __( 'Show time ago', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
    /** select author for  block 5 */

    require get_template_directory() . '/inc/dropdown-author.php' ;

    $wp_customize->add_setting( 'color_newsmagazine_block_5_authorlist', 
    array(
    'default'     =>  0,
    'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_block_5_authorlist', array(

    'label'   => __( 'Select author for both column post', 'color-newsmagazine' ),
    'section' => 'color_newsmagazine_block_5',

    )) 
    );

 /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * setting notice for tab 1
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_5_tab1_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
      ) );

    $wp_customize->add_control( 
    new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'color_newsmagazine_block_5_tab1_heading',
        array(
            'label' => __('First column post settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_block_5',
        )
    )
    );
     /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of Layout 5 first tb
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_5_tab1_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_block_5_tab1_title', array(
      'label'                 =>  __( 'Title for first column', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_5',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_block_5_tab1_title',
    ) );

    /** select order by for  Block 5  first tab*/

    $wp_customize->add_setting( 'color_newsmagazine_block_5_order', array(
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ));

    $wp_customize->add_control( 'color_newsmagazine_block_5_order', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_5',
        'settings'  => 'color_newsmagazine_block_5_order',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )
      ) 
    );

    /** select a category for  block 5 first tab*/

    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_block_5_category_name_tab_1', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_block_5_category_name_tab_1', array(
      
      'label'   => __( 'Select category', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_5',
        
      )) 
    );

    /** select number of post tab 1 */
    $wp_customize->add_setting( 'color_newsmagazine_block_5_number_tab_1', array(
      'capability'            => 'edit_theme_options',
      'default'               => '5',
      'sanitize_callback'     => 'absint'
    ));

    $wp_customize->add_control( 'color_newsmagazine_block_5_number_tab_1', array(
      'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
      'description'           =>  __( 'Input 1,2,3 etc', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_5',
      'type'                  => 'number',
      'settings' => 'color_newsmagazine_block_5_number_tab_1',
    ) );

 /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     * setting notice for tab 2
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_5_tab2_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
      ) );

    $wp_customize->add_control( 
    new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'color_newsmagazine_block_5_tab2_heading',
        array(
            'label' => __('Second column post settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_block_5',
        )
    )
    );
 /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of Layout 5 second tab
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_block_5_tab2_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_block_5_tab2_title', array(
      'label'                 =>  __( 'Title for second column', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_5',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_block_5_tab2_title',
    ) );

    /** select order by for  Block 5 second tab */

    $wp_customize->add_setting( 'color_newsmagazine_block_5_order_tab2', array(
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ));

    $wp_customize->add_control( 'color_newsmagazine_block_5_order_tab2', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_5',
        'settings'  => 'color_newsmagazine_block_5_order_tab2',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )
      ) 
    );

     /** select a category for  Block 5 second tab */

    $wp_customize->add_setting( 'color_newsmagazine_block_5_category_name_tab_2', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_block_5_category_name_tab_2', array(
      
      'label'   => __( 'Select category', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_5',
      'settings' => 'color_newsmagazine_block_5_category_name_tab_2',
        
      )) 
    );

  /** select number of post tab 2 */

   $wp_customize->add_setting( 'color_newsmagazine_block_5_number_tab_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '5',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_block_5_number_tab_2', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 1,2,3 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_block_5',
    'type'                  => 'number',
    'settings' => 'color_newsmagazine_block_5_number_tab_2',
  ) );