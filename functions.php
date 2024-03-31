<?php
/**
 * Color newsmagazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package color_newsmagazine
 */

if ( ! function_exists( 'color_newsmagazine_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function color_newsmagazine_setup() {
		if ( ! isset( $content_width ) ) {
			$content_width = 1440; // Pixels.
		}
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Color newsmagazine, use a find and replace
		 * to change 'color-newsmagazine' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'color-newsmagazine');

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// News Layout 1, 2,3,5 content, verticle slider sub and News Layout 6 image size.
		add_image_size( 'color-newsmagazine-thumbnail-1', 650, 434, array( 'center', 'top' ) ); 

		// news verticle slider main.
		add_image_size( 'color-newsmagazine-thumbnail-4', 730, 487, array( 'center', 'top' ) );
		
		// blog single column.
		add_image_size( 'color-newsmagazine-singlecolumn', 950, 475, array( 'center', 'top' ) );
		// News Layout 4 .
		add_image_size( 'color-newsmagazine-thumbnail-5', 625, 400, array( 'center', 'top' ) );

		// 5 sub image size.
		add_image_size( 'color-newsmagazine-thumbnail-7', 112, 75, array( 'center', 'top' ) );

		// News Layout 8, content-list, layout 7 main.
		add_image_size( 'color-newsmagazine-thumbnail-8', 425, 283, array( 'center', 'top' ) );

		// News Layout 10.
		add_image_size( 'color-newsmagazine-thumbnail-10', 664, 530, array( 'center', 'top' ) );

		// News layout 2 sub image, layout 9 , news layout 7 sub image and footer news.
		add_image_size( 'color-newsmagazine-thumbnail-12', 122, 122, array( 'center', 'top' ) );
		
		// main news right image.
		add_image_size( 'color-newsmagazine-thumbnail-rightnews', 430, 287, array( 'center', 'top' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'color-newsmagazine' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'color_newsmagazine_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
		) );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		
	}
endif;
add_action( 'after_setup_theme', 'color_newsmagazine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $color_newsmagazine_content_width
 */
function color_newsmagazine_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound.
	$GLOBALS['color_newsmagazine_content_width'] = apply_filters( 'color_newsmagazine_content_width', 640 );
}
add_action( 'after_setup_theme', 'color_newsmagazine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function color_newsmagazine_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Sidebar area', 'color-newsmagazine' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add any widgets here', 'color-newsmagazine' ),
		'before_widget' => '<div id="%1$s" class=" widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><i class="fas fa-pencil-alt"  > </i><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Body block section bar area', 'color-newsmagazine' ),
		'id'            => 'frontpage-news-layout',
		'description'   => esc_html__( 'Add CNM: widgets here to appear in body block section', 'color-newsmagazine' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="cat-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer bar', 'color-newsmagazine' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add any widgets here', 'color-newsmagazine' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-3 col-md-6"><div class="single-footer">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'First advertisement bar area', 'color-newsmagazine' ),
		'id'            => 'advertisement_bar-1',
		'description'   => __( 'Add any widget here to show on the blog page. Use HTML widget to show advertisement. It also needs to enable from each block.', 'color-newsmagazine' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s pt-3 pb-3 text-center">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="cat-title"><span>',
		'after_title'   => '</span></h2>',
	) );

}
add_action( 'widgets_init', 'color_newsmagazine_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';


/**
 * Bootstrap Navwalker.
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';


/**
* Breadcrumbs.
*/
require_once get_template_directory() . '/inc/breadcrumbs.php';

/**
* Filters
*/
require_once get_template_directory() . '/inc/filters.php';

require_once get_template_directory() . '/inc/upgrade-to-pro/control.php';