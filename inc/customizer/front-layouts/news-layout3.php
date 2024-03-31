<?php

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 * News Block Layout Three
 *
 * @since 1.0.0
*/

$wp_customize->add_section(
  'color_newsmagazine_block_3',
  array(
   'priority'       => 5,
   'panel'          => 'color_newsmagazine_front_settings_panel',
   'capability'     => 'edit_theme_options',
   'theme_supports' => '',
   'title'          => __( 'Block Three sub section', 'color-newsmagazine' )
 )
);

$wp_customize->add_setting( 'color_newsmagazine_image_3', array(
  'default' => '',
  'sanitize_callback' => 'esc_url',
) );
$wp_customize->add_control( 'color_newsmagazine_image_3', array(
  'type' => 'Image',
  'settings' => 'color_newsmagazine_image_3', 
  'section' => 'color_newsmagazine_block_3',
  'input_attrs' => array(
  'src'  => esc_url(get_template_directory_uri().'/inc/layoutdesign/b3.jpg'),
  ),
) );


 /**
     *Show advertisement.
     *
     * @since 1.0.0
     */
    $wp_customize->add_setting(
      'color_newsmagazine_block_3_google',
      array(
        'default'           => 0,
        'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
    );
    
    $wp_customize->add_control(
      'color_newsmagazine_block_3_google',
      array(
        'section'     => 'color_newsmagazine_block_3',
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
 * Title
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'color_newsmagazine_block_3_title',
  array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  )
);

$wp_customize->add_control(
  'color_newsmagazine_block_3_title',
  array(
    'section'     => 'color_newsmagazine_block_3',
    'label'       => __( 'Title', 'color-newsmagazine' ),
    'type'        => 'text'
  )       
);

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Show News Block Layout Three.
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'color_newsmagazine_block_3_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'color_newsmagazine_block_3_enable',
  array(
    'section'     => 'color_newsmagazine_block_3',
    'label'       => __( 'Enable Block Three sub section', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
);


/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Featured video Url For layout 3
 *
 * @since 1.0.0
*/

$wp_customize->add_setting( 'color_newsmagazine_b3_featured_video', array(
  'capability'            => 'edit_theme_options',
  'default'               => '',
  'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'color_newsmagazine_b3_featured_video', array(
  'label'                 =>  __( 'Featured video Url', 'color-newsmagazine' ),
  'description'           =>  __( 'Eg: https://www.youtube.com/embed/yCVOCSlzQno', 'color-newsmagazine' ),  
  'section'               => 'color_newsmagazine_block_3',
  'type'                  => 'text',
  'settings'              => 'color_newsmagazine_b3_featured_video',
) );

/*----------------------------------------------------------------------------------------------------------------------------------------*/
/**
 *Show Single Video Page Layouts.
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
  'color_newsmagazine_b3_single_video_page_enable',
  array(
    'default'           => 0,
    'sanitize_callback' => 'color_newsmagazine_sanitize_checkbox',
  )
);

$wp_customize->add_control(
  'color_newsmagazine_b3_single_video_page_enable',
  array(
    'section'     => 'color_newsmagazine_block_3',
    'label'       => __( 'Enable single video page layout', 'color-newsmagazine' ),
    'type'        => 'checkbox'
  )       
);

/** Single Video News Layouts Repeater */
$wp_customize->add_setting( new Color_newsmagazine_Repeater_Setting(  $wp_customize, 'color_newsmagazine_single_video_layout', 
array(
    'default' => array(
        array(
            'author'    => 0,
            'date'      => 0,
            'video_url' => '',
            'page_id'   => color_newsmagazine_highestpages(),
        )
      ),
      'sanitize_callback' => array( 'Color_newsmagazine_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) 
  ) 
);

$wp_customize->add_control( new Color_newsmagazine_Control_Repeater( $wp_customize, 'color_newsmagazine_single_video_layout',
    array(
        'section' => 'color_newsmagazine_block_3',
        'label'   => __( 'Select single video layout items', 'color-newsmagazine' ),
        'fields'  => array(
            'author' => array(
              'type'        => 'checkbox',
              'label'       => __( 'Show author', 'color-newsmagazine' ),
            ),
            'date' => array(
              'type'        => 'checkbox',
              'label'       => __( 'Show date', 'color-newsmagazine' ),
            ),
            'video_url' => array(
              'type'        => 'text',
              'label'       => __( 'Video Url example', 'color-newsmagazine' ),
              'description' => __('https://www.youtube.com/watch?v=eR7_l-vZKJM', 'color-newsmagazine')
            ),
            'page_id' => array(
              'type'        => 'select',
              'label'       => __( 'Select page', 'color-newsmagazine' ),
              'choices'     => color_newsmagazine_pages(),
            ),
        ),
        'row_label' => array(
        'type' => 'field',
        'value' => __( 'Video', 'color-newsmagazine' ),
        'field' => 'title'
        )                        
    )
    )
);