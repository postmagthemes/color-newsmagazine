<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

?>		
	<div class="news-single single-news <?php if(has_post_thumbnail()) { echo 'feature-image-yes' ; }; ?>">
		<?php if(get_theme_mod('color_newsmagazine_singlepage_meta_enable','1')==1): ?>
			<div class="meta-share pl-5 pr-5 ">
				<div class="meta ">
					<?php if(get_theme_mod('color_newsmagazine_singlepage_postdate_enable','1')==1): ?>
						<span class="date pl-2 pr-2"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
					<?php endif;
					if(get_theme_mod('color_newsmagazine_singlepage_commentno_enable','1')==1): ?>
						<span class="date pl-2 pr-2" ><i class="fas fa-comments"></i> 
						<?php echo absint(get_comments_number());?>
						</span>
					<?php endif ;
							if(get_theme_mod('color_newsmagazine_single_read_enable','1')==1):
								color_newsmagazine_count_content_words( esc_html(get_the_ID()));
							endif;	
						if(get_theme_mod('color_newsmagazine_single_time_ago_enable','1')==1):?>
							<span class="date pl-2 pr-2"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
						<?php endif; ?>
	
				</div>
				
			</div>
		<?php endif; ?>
		<div class="news-content ">
			<?php the_content();
			wp_link_pages( array(
				'before'            => '<div class="text-center">'.__( 'Pages :', 'color-newsmagazine' ),
				'after'             => '</div>',
				'link_before'       => '',
				'link_after'        => ''
			) ); 
			?> <div class="clearfix"> </div>
			
			<div class="pt-5 pb-5"> 
				<?php
					global $color_newsmagazine_currenttime2;
					$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
					$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
					color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2); 
				?>
			</div>
		</div>
		<?php if(get_theme_mod('color_newsmagazine_singlepage_related_post_enable','1')==1):
			get_template_part( 'inc/related-post' ); ?>
		<?php endif ;
		// Previous/next post navigation. 
		the_post_navigation( array( 
			'next_text' =>  __( 'Next post', 'color-newsmagazine' ), 
			'prev_text' =>  __( 'Previous post', 'color-newsmagazine' ) ) ); 
		?> 
		<div class="comments-form ml-5 mr-5">
			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>
		</div>
		
</div>