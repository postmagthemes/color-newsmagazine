<?php
add_action( 'customize_register', 'color_newsmagazine_themeoptions_register' );

function color_newsmagazine_themeoptions_register( $wp_customize ) {
  require get_template_directory() .'/inc/repeater/class-repeater-settings.php';
  require get_template_directory() .'/inc/repeater/class-control-repeater.php';
    /**
     * Add theme options Panel
     *
     * @since 1.0.0
     */
    $wp_customize->add_panel(
      'color_newsmagazine_themeoptions_panel',
      array(
          'priority'       => 36,
          'capability'     => 'edit_theme_options',
          'theme_supports' => '',
          'title'          => __( 'Theme options', 'color-newsmagazine' ),
      )
  );

  /*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
     * Other Section
     *
     * @since 1.0.0
     */
    $wp_customize->add_section(
      'color_newsmagazine_other_section',
      array(
        'priority'       => 60,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Other settings', 'color-newsmagazine' ),
        'panel'         => 'color_newsmagazine_themeoptions_panel'
      )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_showwidget', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_showwidget', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_showwidget', 
      'section' => 'color_newsmagazine_other_section',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/bodybarwidgetarea.jpg'),
      ),
    ) );
    $wp_customize->add_setting(
      'color_newsmagazine_BodyBlockbar_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
    );

    $wp_customize->add_control(
      'color_newsmagazine_BodyBlockbar_enable',
      array(
        'section'     => 'color_newsmagazine_other_section',
        'label'       => __( 'Show widget placed on Body block section bar area in blog page', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );
      // Show Preloader
    $wp_customize->add_setting(
      'color_newsmagazine_preloader_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );

    $wp_customize->add_control(
      'color_newsmagazine_preloader_enable',
      array(
        'section'     => 'color_newsmagazine_other_section',
        'label'       => __( 'Show Preloader', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_excerpt', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_excerpt', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_excerpt', 
      'section' => 'color_newsmagazine_other_section',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/excerpt.jpg'),
      ),
    ) );

    // Excerpt Length
    $wp_customize->add_setting( 'color_newsmagazine_excerpt_length',
      array(
        'default'           => 45,
        'sanitize_callback' => 'absint',
      )
    );

    $wp_customize->add_control( 'color_newsmagazine_excerpt_length',
      array(
        'label'       => esc_html__( 'Excerpt Length', 'color-newsmagazine' ),
        'description' => esc_html__( 'Excerpt Length determines the no of words in short description.', 'color-newsmagazine' ),
        'section'     => 'color_newsmagazine_other_section',
        'type'        => 'number',
      )
    );

      // Show Modal
  $wp_customize->add_setting(
      'color_newsmagazine_blog_popup_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_blog_popup_enable',
      array(
        'section'     => 'color_newsmagazine_other_section',
        'label'       => __( 'Show for read more popup', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

      // Write readmore
    $wp_customize->add_setting(
      'color_newsmagazine_blog_read_more_title',
      array(
        'default'           => __('Read more','color-newsmagazine'),
        'sanitize_callback' => 'sanitize_text_field',
      )
    );
  
    $wp_customize->add_control(
      'color_newsmagazine_blog_read_more_title',
      array(
        'section'     => 'color_newsmagazine_other_section',
        'label'       => __( 'Text for read more button', 'color-newsmagazine' ),
        'type'        => 'text'
      )       
    );
      
      // Wrire Full view here in modal
    $wp_customize->add_setting(
      'color_newsmagazine_blog_detail_here_title',
      array(
        'default'           => __('Full view here','color-newsmagazine'),
        'sanitize_callback' => 'sanitize_text_field',
      )
    );

    $wp_customize->add_control(
      'color_newsmagazine_blog_detail_here_title',
      array(
        'section'     => 'color_newsmagazine_other_section',
        'label'       => __( 'Text for full view here button', 'color-newsmagazine' ),
        'type'        => 'text'
      )       
    );
      // Wrire Full view here in modal

  $wp_customize->add_setting( 'color_newsmagazine_min_read_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => 150,
    'sanitize_callback'     => 'absint'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_min_read_number', array(
    'label'                 =>  __( 'The number of words reads per minute', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_other_section',
    'type'                  => 'number',
    'settings'              => 'color_newsmagazine_min_read_number',
  ) );


  /*----------------------------------------------------------------------------------------------------------------------------------------*/

  /**
   * Single post /page  Section
   *
   * @since 1.0.0
   */

  $wp_customize->add_section(
    'color_newsmagazine_blog_single_options_section',
    array(
        'priority'       => 6,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Single post settings', "color-newsmagazine" ),
        'panel'           => 'color_newsmagazine_themeoptions_panel'
    )
  );

  $wp_customize->add_setting( 'color_newsmagazine_image_singleheaderslider', array(
    'default' => '',
    'sanitize_callback' => 'esc_url',
  ) );
  $wp_customize->add_control( 'color_newsmagazine_image_singleheaderslider', array(
    'type' => 'Image',
    'settings' => 'color_newsmagazine_image_singleheaderslider', 
    'section' => 'color_newsmagazine_blog_single_options_section',
    'input_attrs' => array(
    'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/singleheaderslider.jpg'),
    ),
  ) );

  /**
   * customizer setting for horizontal header slider
   */

  $wp_customize->add_setting( 'singlepage_headerslider_customize_heading', array(
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  $wp_customize->add_control( 
    new Color_Newsmagazine_Customizer_Title(
      $wp_customize,
      'singlepage_headerslider_customize_heading',
      array(
          'label' => __('Header Slider section settings', 'color-newsmagazine'),
          'section' => 'color_newsmagazine_blog_single_options_section',
      )
  )
  );

  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_headerslider_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_headerslider_enable',
    array(
      'section'     => 'color_newsmagazine_blog_single_options_section',
      'label'       => __( 'Enable Header Slider section', 'color-newsmagazine' ),
      'description' => __('This slider shows related posts to current post by category','color-newsmagazine'),
      'type'        => 'checkbox'
    )       
  );

  $wp_customize->add_setting( 'color_newsmagazine_singlepage_headerslider_title', array(
    'default'     => '',
    'sanitize_callback' => 'sanitize_text_field'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_singlepage_headerslider_title', 
    array(
      'label' 	=> __( 'Title', 'color-newsmagazine' ),
      'section'	=> 'color_newsmagazine_blog_single_options_section',
      'type'      => 'text',

    ) 
  );

  $wp_customize->add_setting( 'color_newsmagazine_singlepage_headerslider_order', array(
        
    'default'     => 'date',
    'sanitize_callback' => 'color_newsmagazine_sanitize_select'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_singlepage_headerslider_order', 
    array(
      'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
      'section'	=> 'color_newsmagazine_blog_single_options_section',
      'type'      => 'select',
      'choices'	=> array (
        'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
        'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
        'rand'	=> __( 'Random', 'color-newsmagazine' ),
      )

    ) 
  );

  $wp_customize->add_setting( 'color_newsmagazine_singlepage_headerslider_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '6',
    'sanitize_callback'     => 'absint'
  ));

  $wp_customize->add_control( 'color_newsmagazine_singlepage_headerslider_number', array(
    'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
    'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
    'section'               => 'color_newsmagazine_blog_single_options_section',
    'type'                  => 'number',
    'input_attrs' => array(
      'min'		=> 1,
      'step'    	=> 1 ),
  ) );

  $wp_customize->add_setting(
    'color_newsmagazine_singlepageheader_postdate_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepageheader_postdate_enable',
    array(
    'section'     => 'color_newsmagazine_blog_single_options_section',
    'label'       => __( 'Show date', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
  );

  $wp_customize->add_setting( 'color_newsmagazine_singlepageheader_read_enable', 
  array(
    
    'default'     => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_singlepageheader_read_enable', 
    array(
      'label'   => __( 'Show reading time', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_blog_single_options_section',
      'settings'  => 'color_newsmagazine_singlepageheader_read_enable',
      'type'      => 'checkbox'
    ) 
  );


  $wp_customize->add_setting( 'singlepage_customize_heading', array(
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  $wp_customize->add_control( 
    new Color_Newsmagazine_Customizer_Title(
      $wp_customize,
      'singlepage_customize_heading',
      array(
          'label' => __('Single post body settings', 'color-newsmagazine'),
          'section' => 'color_newsmagazine_blog_single_options_section',
      )
  )
  );

  // Show meta detail on single page
  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_meta_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_meta_enable', array(
    'section'     => 'color_newsmagazine_blog_single_options_section',
    'label'       => __( 'Show meta detail', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
  );


  // Show post date detail 
  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_postdate_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_postdate_enable',
    array(
    'section'     => 'color_newsmagazine_blog_single_options_section',
    'label'       => __( 'Show date', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
  );

  // Show no of comment detail 
  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_commentno_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_commentno_enable',
    array(
    'section'     => 'color_newsmagazine_blog_single_options_section',
    'label'       => __( 'Show comment number', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
  );

  // Start Added Featured
  $wp_customize->add_setting( 'color_newsmagazine_single_time_ago_enable', 
    array(
    'default'     => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_single_time_ago_enable', 
    array(
      'label'   => __( 'Show time ago', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_blog_single_options_section',
      'settings'  => 'color_newsmagazine_single_time_ago_enable',
      'type'      => 'checkbox'
    ) 
  );

  $wp_customize->add_setting( 'color_newsmagazine_single_read_enable', 
  array(
    
    'default'     => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
  ) );

  $wp_customize->add_control( 'color_newsmagazine_single_read_enable', 
    array(
      'label'   => __( 'Show reading time', 'color-newsmagazine' ),
      'section' => 'color_newsmagazine_blog_single_options_section',
      'settings'  => 'color_newsmagazine_single_read_enable',
      'type'      => 'checkbox'
    ) 
  );
      // Show related post


    $wp_customize->add_setting( 'singlepage_related_customize_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
    ) );
  
    $wp_customize->add_control( 
      new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'singlepage_related_customize_heading',
        array(
            'label' => __('Single post related post settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_blog_single_options_section',
        )
    )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_singlerelated', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_singlerelated', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_singlerelated', 
      'section' => 'color_newsmagazine_blog_single_options_section',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/singlerelated.jpg'),
      ),
    ) );

  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_related_post_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_related_post_enable',
    array(
      'section'     => 'color_newsmagazine_blog_single_options_section',
      'label'       => __( 'Show related post by tag', 'color-newsmagazine' ),
      'description' => __('These three posts show the related posts to current post-viewing by tag','color-newsmagazine'),
      'type'        => 'checkbox'
    )       
  );

  $wp_customize->add_setting(
    'color_newsmagazine_blog_related_post_title',
    array(
      'default'           => __('More Stories','color-newsmagazine'),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_blog_related_post_title',
    array(
      'section'     => 'color_newsmagazine_blog_single_options_section',
      'label'       => __( 'Title', 'color-newsmagazine' ),
      'type'        => 'text'
    )       
  );
    // End Featured
    // Show author detail 

    $wp_customize->add_setting( 'singlepage_author_customize_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
    ) );
  
    $wp_customize->add_control( 
      new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'singlepage_author_customize_heading',
        array(
            'label' => __('Single post author settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_blog_single_options_section',
        )
    )
    );

  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_author_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
  'color_newsmagazine_singlepage_author_enable',
  array(
    'section'     => 'color_newsmagazine_blog_single_options_section',
    'label'       => __( 'Show author detail', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
  );

    // Show author email 
    $wp_customize->add_setting(
      'color_newsmagazine_singlepage_author_email_enable',
      array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_author_email_enable',
    array(
      'section'     => 'color_newsmagazine_blog_single_options_section',
      'label'       => __( 'Show author email', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
    // Show author description 
  $wp_customize->add_setting(
    'color_newsmagazine_singlepage_author_description_enable',
    array(
    'default'           => 1,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_singlepage_author_description_enable',
    array(
      'section'     => 'color_newsmagazine_blog_single_options_section',
      'label'       => __( 'Show author description', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );

  /** ******************************************************************************** */

/*----------------------------------------------------------------------------------------------------------------------------------------*/
  /**
   * Add sidebar Settings section
   *
   * @since 1.0.0
   */
  $wp_customize->add_section(
    'color_newsmagazine_blog_sidebar_section_layout',
    array(
        'priority'       => 5,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Sidebar layout settings', "color-newsmagazine" ),
        'description'    => __( 'Select the below option to show this section in the desired location', "color-newsmagazine" ),
        'panel'          => 'color_newsmagazine_themeoptions_panel'
    )
  );

  $wp_customize->add_section(
    'color_newsmagazine_blog_sidebar_section_post',
    array(
        'priority'       => 4,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Sidebar Content section', "color-newsmagazine" ),
        'description'    => __( 'Manage content at Sidebar Content section', "color-newsmagazine" ),
        'panel'          => 'color_newsmagazine_themeoptions_panel'
    )
  );
  // Show sidebar at different places

  $wp_customize->add_setting(
    'color_newsmagazine_sidebar_enable_postpage_detail_homepage',
    array(
    'default'           => 0,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_sidebar_enable_postpage_detail_homepage',
    array(
    'section'     => 'color_newsmagazine_blog_sidebar_section_layout',
    'label'       => __( 'Show it on single post and page detail', 'color-newsmagazine' ),
    'type'        => 'checkbox'
    )       
  );

 $wp_customize->add_setting('color_newsmagazine_sidebar_layout_settings', 
  array(
    'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    'default'           => 'right'
  )
  );

  $wp_customize->add_control('color_newsmagazine_sidebar_layout_settings', 
    array(
        'label'             => __( 'Sidebar layout settings', "color-newsmagazine" ),
        'section'           => 'color_newsmagazine_blog_sidebar_section_layout',
        'type'              => 'radio',
        'choices'           => array(
            'right'         => esc_html__('Right sidebar',"color-newsmagazine"),
            'left'         => esc_html__('Left sidebar',"color-newsmagazine"),
        )
    ) 
  );


/** ******************************************************************************** */
/**
   * Site Author Section
   *
   * @since 1.0.0
   */

  $wp_customize->add_setting( 'site_author_customize_heading', array(
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  $wp_customize->add_control( 
    new Color_Newsmagazine_Customizer_Title(
      $wp_customize,
      'site_author_customize_heading',
      array(
          'label' => __('Site author settings', 'color-newsmagazine'),
          'section' => 'color_newsmagazine_blog_sidebar_section_post',
          'button_label' => esc_url('get_template_directory_uri() ); ?>/inc/images/80_80.png'),
          'type' => 'button',

      )
  )
  );

  $wp_customize->add_setting( 'color_newsmagazine_image_author', array(
    'default' => '',
    'sanitize_callback' => 'esc_url',
  ) );
  $wp_customize->add_control( 'color_newsmagazine_image_author', array(
    'type' => 'Image',
    'settings' => 'color_newsmagazine_image_author', 
    'section' => 'color_newsmagazine_blog_sidebar_section_post',
    'input_attrs' => array(
    'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/author.jpg'),
    ),
  ) );

  $wp_customize->add_setting('color_newsmagazine_SiteAuthor_enable', 
  array(
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    'default'           => 0,
    )
  );

  $wp_customize->add_control('color_newsmagazine_SiteAuthor_enable', 
  array(
    'label'             => __( 'Show site author', "color-newsmagazine" ),
    'section'           => 'color_newsmagazine_blog_sidebar_section_post',
    'type'              => 'checkbox',
  ) 
  );

  $wp_customize->add_setting('color_newsmagazine_SiteAuthor_title', 
  array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => '',
    )
  );

  $wp_customize->add_control('color_newsmagazine_SiteAuthor_title', 
  array(
    'label'             => __( 'Site author title', "color-newsmagazine" ),
    'section'           => 'color_newsmagazine_blog_sidebar_section_post',
    'type'              => 'text',
  ) 
  );

  $wp_customize->add_setting('color_newsmagazine_SiteAuthor_description', 
  array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => '',
    )
  );

  $wp_customize->add_control('color_newsmagazine_SiteAuthor_description', 
  array(
    'label'             => __( 'Author description', "color-newsmagazine" ),
    'section'           => 'color_newsmagazine_blog_sidebar_section_post',
    'type'              => 'text',
  ) 
  );
  $wp_customize->add_setting('color_newsmagazine_SiteAuthor_image2', array(
    'transport'         => 'refresh',
    'sanitize_callback'     => 'esc_url_raw'
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'color_newsmagazine_SiteAuthor_image2', array(
    'label'             => __('Author image', 'color-newsmagazine'),
    'section'           => 'color_newsmagazine_blog_sidebar_section_post',
    'description'       => __('Recommended size is 250px by 250px','color-newsmagazine'),
    'setting'           =>'color_newsmagazine_SiteAuthor_image2',
    )
  )
  );

  $wp_customize->add_setting( 
      new Color_newsmagazine_Repeater_Setting( 
        $wp_customize, 
        'author_social_links_items', 
        array(
          'default' => array(
           array(
            'font' => 'fab fa-facebook',
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
        'author_social_links_items',
        array(
          'section' => 'color_newsmagazine_blog_sidebar_section_post',              
          'label'   => __( 'Author social Links', 'color-newsmagazine' ),
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
            ),     
          ),
          'row_label' => array(
            'type' => 'field',
            'value' => __( 'social', 'color-newsmagazine' ),
            'field' => 'link'
          )                        
        )
      )
    );

    /******************************** sidebar news block 1 ******************************/



    $wp_customize->add_setting( 'sidebarnews_b1_customize_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
    ) );
  
    $wp_customize->add_control( 
      new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'sidebarnews_b1_customize_heading',
        array(
            'label' => __('Block One section settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_blog_sidebar_section_post',
        )
    )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_sidebarnews_b1', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_sidebarnews_b1', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_sidebarnews_b1', 
      'section' => 'color_newsmagazine_blog_sidebar_section_post',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b1sidebar.jpg'),
      ),
    ) );

    $wp_customize->add_setting(
      'color_newsmagazine_sidebarnews_b1_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );

    $wp_customize->add_control(
      'color_newsmagazine_sidebarnews_b1_enable',
      array(
        'section'     => 'color_newsmagazine_blog_sidebar_section_post',
        'label'       => __( 'Enable Block One section at sidebar', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

        
      /** Title  */

      $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_title', array(
    
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      ) );
  
      $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_title', 
        array(
          'label' 	=> __( 'Title', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
          'type'      => 'text',
          
  
        ) 
      );
    /** select order by for sidebar news block one  */

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_order', array(
      
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_order', 
      array(
        'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'select',
        'choices'	=> array (
          'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'	=> __( 'Random', 'color-newsmagazine' ),
        )

      ) 
    );

    /** select category for sidebar news block one  */
    
    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_sidebarnews_b1_category_name', array(
      
        'label' 	=> __( 'Select category', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post'        
    ) 	)	
    );



    /** select author for sidebar news block one */

    require get_template_directory() . '/inc/dropdown-author.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_authorlist', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_sidebarnews_b1_authorlist', array(
      
        'label' 	=> __( 'Select author', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
        
    ) 	)	
    );

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_number', array(
      'capability'            => 'edit_theme_options',
      'default'               => '4',
      'sanitize_callback'     => 'absint'
    ));
    
    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_number', array(
      'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
      'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_blog_sidebar_section_post',
      'type'                  => 'number',
    ) );

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_date_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_date_enable', 
      array(
        'label'   => __( 'Show date', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_comment_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_comment_enable', 
      array(
        'label'       => __( 'Show comment number', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );
    
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_readingtime_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_readingtime_enable', 
      array(
        'label'   => __( 'Show reading time', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );

        
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_timeago_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_timeago_enable', 
      array(
        'label'   => __( 'Show time ago', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b1_admin_enable', 
    array(
      
      'default'     => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b1_admin_enable', 
      array(
        'label'   => __( 'Show author', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );

    /******************************** sidebar news block 2 ******************************/

    $wp_customize->add_setting( 'sidebarnews_b2_customize_heading', array(
      'sanitize_callback' => 'sanitize_text_field',
    ) );
  
    $wp_customize->add_control( 
      new Color_Newsmagazine_Customizer_Title(
        $wp_customize,
        'sidebarnews_b2_customize_heading',
        array(
            'label' => __('Block Two section settings', 'color-newsmagazine'),
            'section' => 'color_newsmagazine_blog_sidebar_section_post',
        )
    )
    );

    $wp_customize->add_setting( 'color_newsmagazine_image_sidebarnews_b2', array(
      'default' => '',
      'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'color_newsmagazine_image_sidebarnews_b2', array(
      'type' => 'Image',
      'settings' => 'color_newsmagazine_image_sidebarnews_b2', 
      'section' => 'color_newsmagazine_blog_sidebar_section_post',
      'input_attrs' => array(
      'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b2sidebar.jpg'),
      ),
    ) );

    $wp_customize->add_setting(
      'color_newsmagazine_sidebarnews_b2_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );

    $wp_customize->add_control(
      'color_newsmagazine_sidebarnews_b2_enable',
      array(
        'section'     => 'color_newsmagazine_blog_sidebar_section_post',
        'label'       => __( 'Enable Block Two section at sidebar', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

        
      /** Title  */

      $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_title', array(
    
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      ) );
  
      $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_title', 
        array(
          'label' 	=> __( 'Title', 'color-newsmagazine' ),
          'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
          'type'      => 'text',
          
  
        ) 
      );
    /** select order by for sidebar news block two  */

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_order', array(
      
      'default'     => 'date',
      'sanitize_callback' => 'color_newsmagazine_sanitize_select'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_order', 
      array(
        'label' 	=> __( 'Select chronological order', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'select',
        'choices'	=> array (
          'date'	=> __( 'Recent publish date', 'color-newsmagazine' ),
          'comment_count' => __( 'Comment count', 'color-newsmagazine' ),
          'rand'	=> __( 'Random', 'color-newsmagazine' ),
        )

      ) 
    );

    /** select category for sidebar news block two  */
    
    require get_template_directory() . '/inc/dropdown-category.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_category_name', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Category_Control( $wp_customize, 'color_newsmagazine_sidebarnews_b2_category_name', array(
      
        'label' 	=> __( 'Select category', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post'        
    ) 	)	
    );

    /** select author for sidebar news block one */

    require get_template_directory() . '/inc/dropdown-author.php' ;
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_authorlist', 
    array(
      'default'     =>  0,
      'sanitize_callback' => 'absint',
    ) );

    $wp_customize->add_control( new color_newsmagazine_My_Dropdown_Author_Control( $wp_customize, 'color_newsmagazine_sidebarnews_b2_authorlist', array(
      
        'label' 	=> __( 'Select author', 'color-newsmagazine' ),
        'section'	=> 'color_newsmagazine_blog_sidebar_section_post',
        
    ) 	)	
    );

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_number', array(
      'capability'            => 'edit_theme_options',
      'default'               => '3',
      'sanitize_callback'     => 'absint'
    ));
    
    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_number', array(
      'label'                 =>  __( 'Maximum number of posts to show', 'color-newsmagazine' ),
      'description'           =>  __( 'Input 3,4 etc', 'color-newsmagazine' ),
      'section'               => 'color_newsmagazine_blog_sidebar_section_post',
      'type'                  => 'number',
    ) );

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_date_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_date_enable', 
      array(
        'label'   => __( 'Show date', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );
    
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_readingtime_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_readingtime_enable', 
      array(
        'label'   => __( 'Show reading time', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );

        
    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_timeago_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_timeago_enable', 
      array(
        'label'   => __( 'Show time ago', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );

    $wp_customize->add_setting( 'color_newsmagazine_sidebarnews_b2_admin_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_sidebarnews_b2_admin_enable', 
      array(
        'label'   => __( 'Show author', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_sidebar_section_post',
        'type'      => 'checkbox'
      ) 
    );

}