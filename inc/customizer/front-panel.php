<?php
/**
 * color_newsmagazine Front settings panel at Theme Customizer
 *
 * @package color_newsmagazine
 * @since 1.0.0
 */

add_action( 'customize_register', 'color_newsmagazine_front_settings_register' );

function color_newsmagazine_front_settings_register( $wp_customize ) {

	/**
  * Add Header settings Panel
  *
  * @since 1.0.0
  */
  $wp_customize->add_panel(
   'color_newsmagazine_front_settings_panel',
   array(
      'priority'       => 34,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __( 'Body block section settings', 'color-newsmagazine' ),
    )
  );

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout1.php';
  
  require get_template_directory() . '/inc/customizer/front-layouts/news-layout2.php';

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout3.php';

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout4.php';

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout5.php';

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout6.php';

  require get_template_directory() . '/inc/customizer/front-layouts/news-layout7.php';

  require get_template_directory() . '/inc/customizer/front-layouts/blog-only.php';
}

/** Front page Reordering */
add_action( 'customize_register', 'color_newsmagazine_reordering_settings_register' );

function color_newsmagazine_reordering_settings_register( $wp_customize ) {
  
  $wp_customize->add_section( 'color_newsmagazine_front_page_ordering', array(
  'panel'          => 'color_newsmagazine_front_settings_panel',
  'priority'       => 1,
  'title'          => __( 'Block sub section ordering', 'color-newsmagazine' ),
  'description'    => __('Use the below selection to change the order of appearance of different block subsections in the body block section. Note:- Same block subsection can not be used at two places. If it is repeated then only the first selected block will be shown','color-newsmagazine')
  ) );
      
  $wp_customize->add_setting(
    'color_newsmagazine_layout_order1',
    array(
      'default'           => 1,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
      )
  );
  
  $wp_customize->add_control(
    'color_newsmagazine_layout_order1',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in first position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order1',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )       
  );
  $wp_customize->add_setting(
    'color_newsmagazine_layout_order2',
    array(
      'default'           => 2,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order2',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in second position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order2',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )        
  );
  $wp_customize->add_setting(
    'color_newsmagazine_layout_order3',
    array(
      'default'           => 3,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order3',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in third position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order3',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );

  $wp_customize->add_setting(
    'color_newsmagazine_layout_order4',
    array(
      'default'           => 4,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order4',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in fourth position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order4',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );

  $wp_customize->add_setting(
    'color_newsmagazine_layout_order5',
    array(
      'default'           => 5,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order5',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in fifth position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order5',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );

  
  $wp_customize->add_setting(
    'color_newsmagazine_layout_order6',
    array(
      'default'           => 6,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order6',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in sixth position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order6',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );

  
  $wp_customize->add_setting(
    'color_newsmagazine_layout_order7',
    array(
      'default'           => 7,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order7',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in seventh position', 'color-newsmagazine' ),
      'type'        => 'select',
      'settings'    => 'color_newsmagazine_layout_order7',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );

  $wp_customize->add_setting(
    'color_newsmagazine_layout_order20',
    array(
      'default'           => 20,
      'sanitize_callback' => 'color_newsmagazine_sanitize_select',
    )
  );
  $wp_customize->add_control(
    'color_newsmagazine_layout_order20',
    array(
      'section'     => 'color_newsmagazine_front_page_ordering',
      'label'       => __( 'Select sub section to appear in eight position', 'color-newsmagazine' ),
      'type'        => 'select',
      'choices' => array (
        0  => __( 'Hide', 'color-newsmagazine' ),
        1  => __( 'Block One sub section', 'color-newsmagazine' ),
        2  => __( 'Block Two sub section', 'color-newsmagazine' ),
        3  => __( 'Block Three sub section', 'color-newsmagazine' ),
        4  => __( 'Block Four sub section', 'color-newsmagazine' ),
        5  => __( 'Block Five sub section', 'color-newsmagazine' ),
        6  => __( 'Block Six sub section', 'color-newsmagazine' ),
        7  => __( 'Block Seven sub section', 'color-newsmagazine' ),
        20  => __( 'Block Blog Post sub section', 'color-newsmagazine' ),
      )
    )      
  );
}