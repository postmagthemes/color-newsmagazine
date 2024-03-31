<?php
/**
* Multiple checkbox customize control class.
*
* @since  1.0.0
* 
*/
class color_newsmagazine_Customize_Control_Checkbox_Multiple extends WP_Customize_Control {

/**
* The type of customize control being rendered.
*
* @since  1.0.0
* @access public
* @var    string
*/
public $type = 'checkbox-multiple';

/**
* Enqueue scripts/styles.
*
* @since  1.0.0
* @access public
* @return void
*/
public function enqueue() {
wp_enqueue_script( 'cm-customize-controls', trailingslashit( get_template_directory_uri() ) . 'js/customize-controls.js', array( 'jquery' ) );
}

/**
* Displays the control content.
*
* @since  1.0.0
* @access public
* @return void
*/
public function render_content() {
    
if ( !empty( $this->label ) ) : ?>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
<?php endif;

if ( !empty( $this->description ) ) : ?>
    <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
<?php endif;

$multi_values = !is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value(); ?>

<ul>
    <?php
    $all_categoriesArray = color_newsmagazine_all_categories();
    if (!empty($all_categoriesArray)):
    foreach ($all_categoriesArray as $key =>  $all_cat):?>

        <li>
            <label>
                <input type="checkbox" value="<?php echo esc_attr($all_cat->name); ?>" <?php checked( in_array( $all_cat->name , $multi_values ) ); ?> />
                <?php echo esc_html( $all_cat->name ); ?>
            </label>
        </li>

    <?php endforeach;
    endif; ?>
</ul>

<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $multi_values ) ); ?>" />
<?php }
}