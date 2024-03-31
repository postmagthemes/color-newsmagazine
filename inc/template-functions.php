<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function color_newsmagazine_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'color_newsmagazine_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function color_newsmagazine_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'color_newsmagazine_pingback_header' );


// Top Header Contact Info
if( ! function_exists('color_newsmagazine_top_header_contact_info_items')):
	function color_newsmagazine_top_header_contact_info_items(){
		$defaults =  array(
			array(
				'icon' => 'fa fa-map-pin',
				'title' => __('Color NewsMagazine, New York','color-newsmagazine'),
			),
			array(
				'icon' => 'fa fa-calendar',
				'title' => __('November 20, 2018','color-newsmagazine'),
			),
			array(
				'icon' => 'fas fa-clock',
				'title' => __('Last published, 5 minutes ago','color-newsmagazine'),
			)
		);
		$contact_items = get_theme_mod( 'top_header_contact_info_items', $defaults );
		if( $contact_items  ){ 
			foreach( $contact_items as $contact ){ ?>
				<li><i class="<?php echo esc_attr($contact['icon']);?>"></i><?php echo esc_html($contact['title']);?></li>
				<?php
			}
		}
	}
endif;

// Footer Contact Info
if( ! function_exists('color_newsmagazine_footer_contact_info_items')):
	function color_newsmagazine_footer_contact_info_items(){
		$defaults =  array(
			array(
				'icon' => 'fa fa-map-pin',
				'title' => __('Color NewsMagazine, New York','color-newsmagazine'),
			),
			array(
				'icon' => 'fa fa-calendar',
				'title' => __('November 20, 2018','color-newsmagazine'),
			),
			array(
				'icon' => 'fas fa-clock',
				'title' => __('Last published, 5 minutes ago','color-newsmagazine'),
			)
		);
		$contact_items = get_theme_mod( 'footer_contact_info_items', $defaults );
		if( $contact_items  ){ 
			foreach( $contact_items as $contact ){ ?>
				<div class="single-contact"><i class="<?php echo esc_html($contact['icon']);?>"></i><?php echo esc_html($contact['title']);?></div>
				<?php
			}
		}
	}
endif;


// Top Header Social Links
if( ! function_exists('color_newsmagazine_top_header_social_links_items')):
	function color_newsmagazine_top_header_social_links_items(){
		$defaults =  array(
			array(
				'font' => 'fab fa-facebook',
				'link' => '#',                       
			)
		);
		$social_items = get_theme_mod( 'top_header_social_links_items', $defaults );
		if( $social_items  ){ 
			foreach( $social_items as $social ){ ?>
				<li><a href="<?php echo esc_url($social['link']);?>"><i class="<?php echo esc_attr($social['font']);?>"></i></a></li>
				<?php
			}
		}
	}
endif;

// Footer Social Links
if( ! function_exists('color_newsmagazine_top_footer_social_links_items')):
	function color_newsmagazine_top_footer_social_links_items(){
		$defaults =  array(
			array(
				'font' => 'fab fa-facebook',
				'link' => '#',                       
			)
			
		);
		$social_items = get_theme_mod( 'footer_social_links_items', $defaults );
		if( $social_items  ){ 
			foreach( $social_items as $social ){ ?>
				<li><a href="<?php echo esc_url($social['link']);?>"><i class="<?php echo esc_attr($social['font']);?>"></i></a></li>
				<?php
			}
		}
	}
endif;

// Change the underline color of category layout 1 , sidebar b2 , layout 10 etc

function color_newsmagazine_category_new($newcolor1,$color_newsmagazine_currenttime2) {
	
	$postcat = get_the_category();
	$counter = '100000';
	if ( ! empty( $postcat ) ) {
	foreach ($postcat  as $nameCategory) {
		if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 2 or get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 3) {
			$color_newsmagazine_currenttime2 = $color_newsmagazine_currenttime2 + 1562 - $counter;
		} else if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 1) {
			$color_newsmagazine_currenttime2 = 0;
		}

		$sum1 = '#'.dechex($newcolor1 + $color_newsmagazine_currenttime2);
		$style = " border-bottom: 3px inset ".$sum1 ; ?>
		<a class= "post-categories" href="<?php echo esc_url( get_category_link( $nameCategory->cat_ID ) ); ?>" style="<?php echo esc_attr($style);?>">
		<?php echo esc_html($nameCategory->name);
		$counter = $counter + '100'; 
		?>
		</a>
		
	<?php }                                      
	}
}
// Change the underline color of category

function color_newsmagazine_left_news_border($color_newsmagazine_currenttime1,$post_id,$newcolor1 ) {
	if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 1) {
		$color_newsmagazine_currenttime1 = 0;
	} 
	$sum1 = '#'.dechex($newcolor1 + $color_newsmagazine_currenttime1);

	?>
	<style type="text/css">  /** appy for both news-sidebar */
	#left-special-news.special-news .post-<?php echo esc_attr($post_id); ?> .single-news:before {
		background: <?php echo esc_attr($sum1); ?> ;
	}
	</style>	
	<?php                     
}
function color_newsmagazine_right_news_border($color_newsmagazine_currenttime1,$post_id,$newcolor1 ) {
	if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 1) {
		$color_newsmagazine_currenttime1 = 0;
	} 
	$sum1 = '#'.dechex($newcolor1 + $color_newsmagazine_currenttime1);
	?>
	<style type="text/css">  /** appy for both news-sidebar */
	#right-special-news.special-news .post-<?php echo esc_attr($post_id); ?> .single-news:before {
		background: <?php echo esc_attr($sum1); ?> ;
	}
	</style>	
	<?php                     
}
function color_newsmagazine_layout_border() {
	/***
	 * categry underline color change for block 9 etc.
	 * 
	 */
	$addcolor1= hexdec('1');
	$counter = '100000';
	if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 2) {
		$currenttime= substr(microtime(1)*10000,8);  /** make less 8 affect more  */
	} elseif (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 3) {
		$currenttime = '234234';
	}else if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 1) {
		$currenttime = 0;
	}
	$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
	$newcolor1= hexdec(substr($themecolor, 1));
	$addcolor1= $addcolor1 + $currenttime ;
	$sum1 = '#'.dechex($newcolor1 + $addcolor1);
	?>
	<style type="text/css">
		.news-big .small-post .news-head {
			border-bottom-color: <?php echo esc_attr($sum1); ?>;
		}
		.news-tabs .tab-others .news-head {
			border-bottom-color: <?php echo esc_attr($sum1); ?>;
		}
		.news-column .small-post .news-head {
			border-bottom-color: <?php echo esc_attr($sum1); ?>;
		}
		.single-column .single-news .news-head {
			border-bottom-color: <?php echo esc_attr($sum1); ?>;
		}
	</style>
	<?php                      
}


// Slider Section Item Start
if( ! function_exists( 'color_newsmagazine_single_video_layout' ) ) :
    /**
     * Display content of frontpage slider items as repeater field
     *
     * @since 1.0.0
     */
    function color_newsmagazine_single_video_layout() {
        $color_newsmagazine_default = array(
            'default' => array(
               	'author'    => 0,
            	'date'      => 0,
            	'video_url' => '',
            	'page_id'   => color_newsmagazine_highestpages(),
              )
        );
        $color_newsmagazine_items  = get_theme_mod( 'color_newsmagazine_single_video_layout', $color_newsmagazine_default );

       
        if( !empty( $color_newsmagazine_items ) ) {
            foreach ( $color_newsmagazine_items as $item ) {

             $item_author 		= $item['author'];

             $item_date 		= $item['date'];

             $item_video_url  	= $item['video_url'];
                
             $arguments = array(

				'post_type' => 'page',
				'p'      => $item['page_id'],
				'posts_per_page' => 1,
				'orderby'        =>'post__in',

			);
			$query = new WP_Query( $arguments );
			if( $query->have_posts() ) :
				while( $query->have_posts() ) :
					$query->the_post();
                ?>
                <!-- Single Video -->
					<div class="single-video">
						<!-- News Head -->
						<div class="news-head shadow">
							<?php 
							if(has_post_thumbnail()):
								the_post_thumbnail('color-newsmagazine-thumbnail-1');
								elseif (! has_post_thumbnail()): ?>
								<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
							<?php endif;
							?>
							<a href="<?php echo esc_url($item_video_url);?>" class="play video-popup mfp-fade"><i class="fa fa-play"></i></a>
						</div>
						<!-- Content -->
						<div class="content blog-head">
							<div class="meta">
							<?php if($item_author == 1): ?>
								<span class="author">
									<i class="fas fa-user-tie"></i>
									<?php color_newsmagazine_posted_by();?>																			
								</span>
							<?php endif; ?>
							<?php if($item_date == '1'): ?>
								<span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
							<?php endif; ?>
							</div>
							<h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						</div>
					</div>
					<!--/ End Single Video -->
               <?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
            <?php    }
        }
    }
endif;
// Slider Section End

// Author social link at sidebar

if( ! function_exists('color_newsmagazine_sidebar_social_links_items')):
	function color_newsmagazine_sidebar_social_links_items(){
		$defaults =  array(
			array(
				'font' => 'fab fa-facebook',
				'link' => '#',                       
			)
		);
		$social_items = get_theme_mod( 'author_social_links_items', $defaults );
		if( $social_items  ){ 
			foreach( $social_items as $social ){ ?>
				<li><a href="<?php echo esc_url($social['link']);?>"><i class="<?php echo esc_attr($social['font']);?>"></i></a></li>
				<?php
			}
		}
	}
endif;


function color_newsmagazine_google_adsence(){
	/**
    * 
    * Add website google adsene ID given by google at header
    * 
    */
	?>
	<script data-ad-client="<?php echo esc_attr(get_theme_mod('color_newsmagazine_google_adsence_id','')) ?>" async src="<?php echo esc_attr(get_theme_mod('color_newsmagazine_google_adsence_src',''))?>"></script>
	
<?php
};
add_action('wp_head', 'color_newsmagazine_google_adsence');

// Menu Icons

function color_newsmagazine_nav_menu_css_class( $classes ){

	if( is_array( $classes ) ){
		$tmp_classes = preg_grep( '/^(fa)(-\S+)?$/i', $classes );
		if( !empty( $tmp_classes ) ){
			$classes = array_values( array_diff( $classes, $tmp_classes ) );
		}
	}
	return $classes;
}

/*************** menu title and icon *************************/

function color_newsmagazine_walker_nav_menu_start_el( $item_output, $item, $depth, $args ){
	if( is_array( $item->classes ) ){
		$classes = preg_grep( '/^(fa)(-\S+)?$/i', $item->classes );
		if( !empty( $classes ) ){
			$item_output = color_newsmagazine_replace_item( $item_output, $classes );
		}
	}

	 if ('primary' == $args->theme_location && $item->attr_title)
	$item_output = str_replace('</a>', '<span class="menu-description">' . $item->attr_title . '</span></a>', $item_output);

	return $item_output;
	// return $item_output;
}


function color_newsmagazine_replace_item( $item_output, $classes ){
 
	$spacer = '';

	if( !in_array( 'fa', $classes ) ){
		array_unshift( $classes, 'fa' );
	}

	$before = true;
	if( in_array( 'fa-after', $classes ) ){
		$classes = array_values( array_diff( $classes, array( 'fa-after' ) ) );
		$before = false;
	}

	$icon = '<i class="' . implode( ' ', $classes ) . '"></i>';

	preg_match( '/(<a.+>)(.+)(<\/a>)/i', $item_output, $matches );
	if( 4 === count( $matches ) ){
		$item_output = $matches[1];
		if( $before ){
			$item_output .= $icon . '<span class="fontawesome-text">' . $spacer . $matches[2] . '</span>';
		} else {
			$item_output .= '<span class="fontawesome-text">' . $matches[2] . $spacer . '</span>' . $icon;
		}
		$item_output .= $matches[3];
	}
	return $item_output;
}    

add_filter( 'color_newsmagazine_nav_menu_css_class', 'color_newsmagazine_nav_menu_css_class'  );
add_filter( 'color_newsmagazine_walker_nav_menu_start_el', 'color_newsmagazine_walker_nav_menu_start_el', 10, 4 );


function color_newsmagazine_pages(){
	$get_pages = get_pages();

	$pages = array(
		0 => esc_html__('Select page','color-newsmagazine')
	);
	foreach ( $get_pages as $key => $page ) {
		$pages[$page->ID] = $page->post_title;
                                              
	}
	return $pages;
}

function color_newsmagazine_highestpages(){
	$oldlpageid =0;
	$pageid = 0;
	$get_pages = get_pages();
	foreach ( $get_pages as $key => $page ) {
		$pageid = $page->ID ;
		if ( $oldlpageid < $pageid ) {
			$oldlpageid = $pageid;
		};
                                              
	}
	return $oldlpageid;
}

function color_newsmagazine_category_title( $title ) {
	/**
    * Hide category word from archive title.
    *
    * 
    */
    if ( is_category() ) {
        $title = single_cat_title( '', false );
	}
    return $title;
}
add_filter( 'get_the_archive_title', 'color_newsmagazine_category_title' );

if( ! function_exists( 'color_newsmagazine_all_categories' ) ) {
	/**
    * used for display all category in customizer for layoyt 2 and layput 8 .
    *
    * 
    */
    function color_newsmagazine_all_categories() {
        $all_terms = get_terms( 'category', array(
            'number' => '',
            'orderby'    => 'count',
            'order'      => 'ASC',
           'hide_empty' => true
        ) );

        return $all_terms;
    }
}


function color_newsmagazine_time_ago() {
	/**
    * Function which displays your post date in time ago format.
    *
    * 
    */
	$diff = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );

	$replace = array(
		'seconds' => 'sec',
		'year'  => 'yr',
        'years' => 'yrs',
        'day'   => 'dy',
        'days'  => 'dys',
        'hour'  => 'hr',
		'hours' => 'hrs',
		'months' => 'mths',
		'month' => 'mth',
    );

    return strtr($diff,$replace);
}


if (!function_exists('color_newsmagazine_count_content_words')) :
    /**
    * Count number of words
    *
    * 
    */
    function color_newsmagazine_count_content_words($post_id)
    {
            $content = apply_filters('color_newsmagazine_the_content', get_post_field('post_content', $post_id));
            $read_words = get_theme_mod('color_newsmagazine_min_read_number','150');
            $decode_content = html_entity_decode($content);
            $filter_shortcode = do_shortcode($decode_content);
            $strip_tags = wp_strip_all_tags($filter_shortcode, true);
            $count = str_word_count($strip_tags);
            $word_per_min = (absint($count) / $read_words);
            $word_per_min = ceil($word_per_min);

           if ( absint($word_per_min) > 0) {
			   	/* translators: 1: no of minute required to read he post */
                $word_count_strings = sprintf(_n('%s min', '%s min', number_format_i18n($word_per_min),'color-newsmagazine'), number_format_i18n($word_per_min));
                if ('post' == get_post_type($post_id)):
                    echo '<span class="date"><i class="fas fa-book-reader"><span class="pl-1"> ';
                    echo esc_html($word_count_strings);
                    echo '</span></i></a></span>';
                endif;
            }
    }
endif;


if ( ! function_exists( 'color_newsmagazine_simple_breadcrumb' ) ) :
    /**
     * Simple breadcrumb.
     *
     * @since 1.0.0
     */
    function color_newsmagazine_simple_breadcrumb() {
    	$breadcrumb_args = array(
    		'container'   => 'div',
    		'show_browse' => false,
    	);
    	color_newsmagazine_breadcrumb_trail( $breadcrumb_args );
    }
endif;
add_action( 'color_newsmagazine_breadcrumb', 'color_newsmagazine_simple_breadcrumb', 10 );


// Remove issues with prefetching adding extra views.
if ( is_admin() ) {
	// Load about.
	
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/class-about.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/theme-info/about.php';
}

function color_newsmagazine_add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="text-justify mb-2" ', $excerpt);
}
add_filter( "the_excerpt", "color_newsmagazine_add_class_to_excerpt" );


function color_newsmagazine_modal_popup()
{
    $postId         = isset( $_POST['postID']  ) ?  $_POST['postID'] : 0;
    $FullviewText   = get_theme_mod('color_newsmagazine_blog_detail_here_title',__('Full view here','color-newsmagazine'));
    $modalHeader    = '<a id="modal-fullview" class="btn" href="'.esc_url(get_the_permalink( $postId )).'">'.esc_html($FullviewText).'</a>';
    $content_post   = get_post($postId);
    $modalBody      = $content_post->post_content;
    $closeText      = get_theme_mod('color_newsmagazine_blog_close_title',__('Close', 'color-newsmagazine'));
    $modalFooter    = '<button type="button" class="btn btn-default" data-dismiss="modal">'.esc_html($closeText).'</button>';
    $return     = [
        'modalHeader'   => $modalHeader,
        'modalBody'     => $modalBody,
        'modalFooter'   => $modalFooter
    ];
    return wp_send_json($return);
    die();
}
add_action('wp_ajax_nopriv_color_newsmagazine_modal_popup', 'color_newsmagazine_modal_popup');
add_action('wp_ajax_color_newsmagazine_modal_popup', 'color_newsmagazine_modal_popup');

function color_newsmagazine_set_global_var()
	/**
     * vairiable set for different color schime
     *
     * @since 1.0.0
     */
{
	global $color_newsmagazine_currenttime1;
	global $color_newsmagazine_currenttime2;
	$currenttime = 0;
	if (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 2) {
		$currenttime= substr(microtime(1)*10000,8);  /** make less 8 affect more  total 14 digit */
	} elseif (get_theme_mod('color_newsmagazine_secondary_theme_color_settings','2') == 3) {
		$currenttime = '234234';
	}
	$color_newsmagazine_currenttime1 = $color_newsmagazine_currenttime2 = $currenttime;
}
add_action( 'init', 'color_newsmagazine_set_global_var' );

function color_newsmagazine_widgets_scripts( $hook ) {
	/**
    * related to widget and admin css. it is needed for customizer referesh for layout 2 and 8 while chosing category.
    *
    * 
    */
    if ( 'widgets.php' != $hook ) {
        return;
    }
	wp_enqueue_script('color-newsmagazine-adminjs', get_template_directory_uri() . '/assets/widget/w-admin.js', array( 'jquery', 'customize-controls' ) );
    wp_enqueue_style('color-newsmagazine-admincss', get_template_directory_uri() . '/assets/widget/w-admin.css', array(), '2.0.0');
}
add_action( 'admin_enqueue_scripts', 'color_newsmagazine_widgets_scripts' );

function color_newsmagazine_disable_image_lazy_loading( $default, $tag_name, $context ) {
    if ( 'img' === $tag_name && 'wp_get_attachment_image' == $context ) {
        return false;
    }
    return $default;
}
add_filter('wp_lazy_loading_enabled', 'color_newsmagazine_disable_image_lazy_loading',10,3);

function color_newsmagazine_newlayout1() {
	/**
    * 
    * widget layout1 more post show
    * 
    */
    include_once(get_template_directory().'/ajax-template/ajaxnewslayout1.php');
    die();
}
add_action('wp_ajax_nopriv_color_newsmagazine_newlayout1', 'color_newsmagazine_newlayout1');
add_action('wp_ajax_color_newsmagazine_newlayout1', 'color_newsmagazine_newlayout1');