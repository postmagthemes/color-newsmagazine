<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package color_newsmagazine
 */

if ( ! function_exists( 'color_newsmagazine_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function color_newsmagazine_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string,
		esc_attr( get_the_date( get_option('date_format') ) ),
		esc_html( get_the_date(get_option('date_format')) )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html( '%s', 'post date' ),
			'<a href="' . esc_url( get_month_link(esc_html(get_the_time('Y')), esc_html(get_the_time('m')) ) ) . '" rel="bookmark">' .$time_string. '</a>'
		);

		echo '<span class="posted-on ">' . $posted_on . '</span>'; 

	}
endif;

if ( ! function_exists( 'color_newsmagazine_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function color_newsmagazine_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'color-newsmagazine' ),
			'<span class="vcard"><a class="url fn n " href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; 

	}
endif;

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function color_newsmagazine_post_comment() {

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( '0', 'color-newsmagazine' ), __( '1', 'color-newsmagazine' ), __( '%', 'color-newsmagazine' ) ); 
		echo  '</span>';
	}
}
function color_newsmagazine_post_tag() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'color-newsmagazine' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links "><i class ="fa fa-tags"></i>' . esc_html__( 'Tagged %1$s ', 'color-newsmagazine' ) . '</span>', $tags_list );
		}
	}
}

if ( ! function_exists( 'color_newsmagazine_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function color_newsmagazine_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'color_newsmagazine_thumbnail_8' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function color_newsmagazine_thumbnail_8() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		} ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'color-newsmagazine-thumbnail-8', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>
	<?php }
endif;