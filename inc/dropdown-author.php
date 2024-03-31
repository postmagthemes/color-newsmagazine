<?php
/**
 * This template to show dropdown author list
 *
 * @package Postmagthemes
 * @subpackage color_newsmagazine
 */
if ( ! class_exists( 'color_newsmagazine_My_Dropdown_Author_Control' ) ) :
class color_newsmagazine_My_Dropdown_Author_Control extends WP_Customize_Control {

public $type = 'dropdown-author';

protected $dropdown_args = false;

protected function render_content() {
    ?><label><?php

    if ( ! empty( $this->label ) ) :
        ?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
    endif;

    if ( ! empty( $this->description ) ) :
        ?><span class="description customize-control-description"><?php echo esc_html($this->description); ?></span><?php
    endif;

    $dropdown_args = wp_parse_args( $this->dropdown_args, array(
        'show_option_all'         => __('All authors','color-newsmagazine'),
        'hide_if_only_one_author' => null, // string
        'orderby'                 => 'display_name',
        'order'                   => 'ASC',
        'include'                 => null, // string
        'exclude'                 => null, // string
        'multi'                   => false,
        'show'                    => 'display_name',
        'echo'                    => true,
        'include_selected'        => false,
        'id'                      =>  $this->id ,
        'class'                   => null, // string 
        'who'                     => null, // string,
        'role'                    => null, // string|array,
        'role__in'                => null, // array    
        'role__not_in'            => null, // array 
                    
    ) );

    $dropdown_args['echo'] = false;

    $dropdown = wp_dropdown_users( $dropdown_args );
    $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
    echo ($dropdown);

    ?></label><?php

}
}
endif;