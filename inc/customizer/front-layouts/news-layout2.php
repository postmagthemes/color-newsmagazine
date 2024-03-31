<?php

/*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     * News Block Layout Two
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_block_2',
      array(
       'priority'       => 3,
       'panel'          => 'color_newsmagazine_front_settings_panel',
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __( 'Block Two sub section', 'color-newsmagazine' )
     )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_2', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_2', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_2', 
      'section' => 'color_newsmagazine_block_2',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b2.jpg'),
      ),
    ) );
    
    /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_2_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_2_google',
      array(
        'section'     => 'color_newsmagazine_block_2',
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
     *Show News Block Layout Two.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_2_enable',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_2_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
        'label'       => __( 'Enable Block Two sub section', 'color-newsmagazine' ),
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
      'color_newsmagazine_b2_author_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b2_author_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
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
      'color_newsmagazine_b2_date_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b2_date_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
        'label'       => __( 'Show date', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );


    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Show button to show.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_b2_btn_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b2_btn_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
        'label'       => __( 'Show button', 'color-newsmagazine' ),
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
      'color_newsmagazine_b2_comment_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_b2_comment_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
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
      'color_newsmagazine_block_2_post_read_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_2_post_read_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
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
      'color_newsmagazine_block_2_post_time_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_2_post_time_enable',
      array(
        'section'     => 'color_newsmagazine_block_2',
        'label'       => __( 'Show time ago', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );


    /*----------------------------------------------------------------------------------------------------------------------------------------*/
    /**
     *Title of Layout 2
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting( 'color_newsmagazine_b2_title', array(
      'capability'            => 'edit_theme_options',
      'default'               => '',
      'sanitize_callback'     => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_b2_title', array(
      'label'                 =>  __( 'Title', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_block_2',
      'type'                  => 'text',
      'settings'              => 'color_newsmagazine_b2_title',
    ) );


    /** select order by for News Block 2 */

    $wp_customize->add_setting( 'color_newsmagazine_b2_order', array(
      
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_b2_order', 
      array(
        'label'   => __( 'Select chronological order', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_block_2',
        'settings'  => 'color_newsmagazine_b2_order',
        'type'      => 'select',
        'choices' => array (
          'date'  => __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'  => __( 'Random', 'color-newsmagazine' ),
        )

      ) 
    );

    /** select author for News Block 2 */

    require get_template_directory() . '/inc/dropdown-author.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_b2_authorlist', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_b2_authorlist', array(
      
      'label'   => __( 'Select author', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_block_2',
        
      )) 
    );

  // select a category for tab   /** select checkbox by for News Block 2 */

require get_template_directory() . '/inc/multiple-checkbox-category.php' ;
if (color_newsmagazine_all_categories() != null) {
$color_newsmagazine_allcategory_fetch = color_newsmagazine_all_categories();
foreach ( $color_newsmagazine_allcategory_fetch as $color_newsmagazine_key =>$color_newsmagazine_single_cat);
$wp_customize->add_setting( 'color_newsmagazine_b2_category_name_tab',
    array(
      'default' => array($color_newsmagazine_single_cat->name),
      'sanitize_callback' => 'color_newsmagazine_cm_sanitize_category'
    ) );


function color_newsmagazine_cm_sanitize_category( $values ) {

    $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}
}


$wp_customize->add_control(
    new color_newsmagazine_Customize_Control_Checkbox_Multiple( $wp_customize, 'color_newsmagazine_b2_category_name_tab',
        array(

             'settings' => 'color_newsmagazine_b2_category_name_tab',
             'label'   => __( 'Select category', 'color-newsmagazine' ),
             'section' => 'color_newsmagazine_block_2',
             'type'     => 'checkbox-multiple', // The $type in our class
    ))
);

  $wp_customize->add_setting( 'color_newsmagazine_b2_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '4',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_b2_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_block_2',
    'type'                  => 'number',
    'settings' => 'color_newsmagazine_b2_number',
  ) );

