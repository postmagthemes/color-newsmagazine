<?php 
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * Blog Archive Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'color_newsmagazine_blog_archive_options_section',
    array(
        'priority'       => 13,
        'panel'          => 'color_newsmagazine_front_settings_panel',
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Block Blog Post sub section', "color-newsmagazine" ),
    )
);
$wp_customize->add_setting( 'color_newsmagazine_image_blog', array(
  'default' => '',
  'sanitize_callback' => 'esc_url',
) );
$wp_customize->add_control( 'color_newsmagazine_image_blog', array(
  'type' => 'Image',
  'settings' => 'color_newsmagazine_image_blog', 
  'section' => 'color_newsmagazine_blog_archive_options_section',
  'input_attrs' => array(
  'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/blogpost.jpg'),
  ),
) );
 /**
   *Show advertisement.
    *
    * @since 1.0.0
    */
  $wp_customize->add_setting(
    'color_newsmagazine_block_archive_options_section_google',
    array(
      'default'           => 0,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_block_archive_options_section_google',
    array(
      'section'     => 'color_newsmagazine_blog_archive_options_section',
      'label'       => __( 'Select option to show advertisement at the top of this block section', 'color-newsmagazine' ),
      'type'        => 'select',
      'choices' => array (
        '0'  => __( 'None', 'color-newsmagazine' ),
        '1'  => __( 'First advertisement bar', 'color-newsmagazine' ),
      )

    )       
  );
$wp_customize->add_setting('color_newsmagazine_blog_archive_layout_enable', 
    array(
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        'default'           => 1,
    )
);

$wp_customize->add_control('color_newsmagazine_blog_archive_layout_enable', 
    array(
        'label'             => __( 'Enable Blog Post sub section', "color-newsmagazine" ),
        'section'           => 'color_newsmagazine_blog_archive_options_section',
        'type'              => 'checkbox',
    ) 
);

$wp_customize->add_setting('color_newsmagazine_blog_archive_title', 
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    )
);

$wp_customize->add_control('color_newsmagazine_blog_archive_title', 
    array(
        'label'             => __( 'Title', "color-newsmagazine" ),
        'section'           => 'color_newsmagazine_blog_archive_options_section',
        'type'              => 'text',
    ) 
);

$wp_customize->add_setting('color_newsmagazine_blog_archive_layout_style', 
    array(
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
        'default'           => 'feature'
    )
);

$wp_customize->add_control('color_newsmagazine_blog_archive_layout_style', 
    array(
        'label'             => __( 'Blog Post section layout types', "color-newsmagazine" ),
        'section'           => 'color_newsmagazine_blog_archive_options_section',
        'type'              => 'select',
        'choices'           => array(
            'single'         => __('Single column',"color-newsmagazine"),
            'double'         => __('Double column',"color-newsmagazine"),
            'list'          => __('List',"color-newsmagazine"),
            'feature'         => __('Double column with feature',"color-newsmagazine"),

        ),
        'settings'          => 'color_newsmagazine_blog_archive_layout_style'
    ) 
);

    // Show author
    $wp_customize->add_setting(
    'color_newsmagazine_author_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_author_enable',
    array(
      'section'     => 'color_newsmagazine_blog_archive_options_section',
      'label'       => __( 'Show author', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );

  
    // Show postdate
    $wp_customize->add_setting(
      'color_newsmagazine_postdate_enable',
      array(
        'default'           => 1,
        'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
      )
    );
  
    $wp_customize->add_control(
      'color_newsmagazine_postdate_enable',
      array(
        'section'     => 'color_newsmagazine_blog_archive_options_section',
        'label'       => __( 'Show date', 'color-newsmagazine' ),
        'type'        => 'checkbox'
      )       
    );

      // Show postdate
      $wp_customize->add_setting(
        'color_newsmagazine_comment_enable',
        array(
          'default'           => 1,
          'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
        )
      );
    
      $wp_customize->add_control(
        'color_newsmagazine_comment_enable',
        array(
          'section'     => 'color_newsmagazine_blog_archive_options_section',
          'label'       => __( 'Show comment number', 'color-newsmagazine' ),
          'type'        => 'checkbox'
        )       
      );

   // Show read more
   $wp_customize->add_setting(
    'color_newsmagazine_readmore_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_readmore_enable',
    array(
      'section'     => 'color_newsmagazine_blog_archive_options_section',
      'label'       => __( 'Show read more button', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );
  
   // Show related post
   $wp_customize->add_setting(
    'color_newsmagazine_blog_related_post_enable',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'color_newsmagazine_blog_related_post_enable',
    array(
      'section'     => 'color_newsmagazine_blog_archive_options_section',
      'label'       => __( 'Show related post', 'color-newsmagazine' ),
      'type'        => 'checkbox'
    )       
  );


    // Start Added Featured
    $wp_customize->add_setting( 'color_newsmagazine_blog_time_ago_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_blog_time_ago_enable', 
      array(
        'label'   => __( 'Show time ago', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_archive_options_section',
        'settings'  => 'color_newsmagazine_blog_time_ago_enable',
        'type'      => 'checkbox'
      ) 
    );


    $wp_customize->add_setting( 'color_newsmagazine_blog_read_enable', 
    array(
      
      'default'     => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox'
    ) );

    $wp_customize->add_control( 'color_newsmagazine_blog_read_enable', 
      array(
        'label'   => __( 'Show reading time', 'color-newsmagazine' ),
        'section' => 'color_newsmagazine_blog_archive_options_section',
        'settings'  => 'color_newsmagazine_blog_read_enable',
        'type'      => 'checkbox'
      ) 
    );