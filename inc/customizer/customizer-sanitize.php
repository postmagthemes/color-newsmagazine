<?php
/**
 * File to sanitize customizer field
 *
 * @package color_newsmagazine
 * @since 1.0.0
 */

if ( ! function_exists( 'color_newsmagazine_sanitize_checkbox' ) ) :

    /**
     * Sanitize checkbox.
     *
     * @since 1.0.0
     *
     * @param bool $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function color_newsmagazine_sanitize_checkbox( $checked ) {

        return ( ( isset( $checked ) && true === $checked ) ? true : false );

    }

endif;

if ( ! function_exists( 'color_newsmagazine_sanitize_select' ) ) :

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function color_newsmagazine_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }

endif;


function color_newsmagazine_sanitize_category($input){
    $output=intval($input);
    return $output;
}

/**
 * Drop-down Pages sanitization callback example.
 *
 * - Sanitization: dropdown-pages
 * - Control: dropdown-pages
 * 
 * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
 * as an absolute integer, and then validates that $input is the ID of a published page.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
 *
 * @param int                  $page    Page ID.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int|string Page ID if the page is published; otherwise, the setting default.
 */
function color_newsmagazine_sanitize_dropdown_pages( $page_id, $setting ) {
    // Ensure $input is an absolute integer.
    $page_id = absint( $page_id );
    
    // If $page_id is an ID of a published page, return it; otherwise, return the default.
    return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

if ( ! function_exists( 'color_newsmagazine_sanitize_positive_number' ) ) :

	/**
	 * Sanitize positive number.
	 *
	 * 
	 * @return int Sanitized number; otherwise, the setting default.
	 */
	function color_newsmagazine_sanitize_positive_number( $input, $setting ) {
		
		$input = abs( $input );
		// If the input is an absolute integer then return it.
		// otherwise, return the default.
		return ( $input ? $input : $setting->default );

	}
endif;