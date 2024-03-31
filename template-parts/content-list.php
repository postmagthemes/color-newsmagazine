<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

?>
<div class="col-lg-12 <?php if ( !( is_archive() or is_search() )) { echo 'mb-5';} else { echo 'pl-0 pr-0';}; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single News -->

		<div class=" single-news media  news-style1 category blog-list">
			<?php 
			if(has_post_thumbnail()):?>
				<div class="news-head">
					<?php the_post_thumbnail('color-newsmagazine-thumbnail-8');?>
				</div>
			<?php elseif (! has_post_thumbnail()): ?>
				<div class="news-head">
					<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/425_283_lay7_contlist.png " >
				</div>
			<?php endif; 
			?>
			<div class="content media-body">
				<h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
				<div class="meta">
					<?php if(get_theme_mod('color_newsmagazine_author_enable','1')==1): ?>
						<span class="author">
						 <i class="fas fa-user-tie"></i>
							<?php color_newsmagazine_posted_by();?>
						</span>
					<?php endif ?>
				</div>
				<div class="meta">
					<?php if(get_theme_mod('color_newsmagazine_postdate_enable','1')==1): ?>
						<span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
					<?php endif;
					if(get_theme_mod('color_newsmagazine_comment_enable','1') == 1): ?>
						<span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
					<?php endif;

					if(get_theme_mod('color_newsmagazine_blog_read_enable','1')==1):
						color_newsmagazine_count_content_words( esc_html(get_the_ID()));
					endif;	
					if(get_theme_mod('color_newsmagazine_blog_time_ago_enable','1')==1):?>
						<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
					<?php endif;	?>
					
				</div>
				<?php the_excerpt();
				global $color_newsmagazine_currenttime2;
				$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
				$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
				color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2); ?>
				<?php if (! (is_archive() or is_search() )) {
					if (get_theme_mod('color_newsmagazine_readmore_enable',1)) :

						if( get_theme_mod('color_newsmagazine_blog_popup_enable', 1) == 1): ?> 
							<div class="button animated wow flipInX pb-2 pt-4" data-wow-duration = "2s">
								<a href="<?php the_permalink();?>" aria-label=' <?php esc_html_e('Read more', 'color-newsmagazine');?>' class="readmore-modal btn" data-modal="<?php echo absint( get_the_ID() );?>">
									<?php esc_html_e('Read more', 'color-newsmagazine');?>
								</a>
							</div>

						<?php else : ?>
							<div class="button animated wow flipInX pb-2 pt-4" data-wow-duration = "2s">
								<a href="<?php the_permalink();?>" class="btn" > <?php esc_html_e('Read more', 'color-newsmagazine');?></a>
							</div>
						<?php endif; 
					endif;
				} ?>
			</div>
		</div>
		<!--/ End Single News -->
	</article>
</div>