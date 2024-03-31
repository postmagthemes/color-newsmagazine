<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

?>
	<div class="single-news <?php if(has_post_thumbnail()) { echo 'feature-image-yes' ; }; ?>">
		<?php 
		if ( ! is_front_page() ) : 
			if(get_theme_mod('color_newsmagazine_singlepage_meta_enable','1')==1): ?>

			<div class="meta-share pl-5 pr-5">
				<div class="meta">
					<?php 
					if(get_theme_mod('color_newsmagazine_singlepage_postdate_enable','1')==1): ?>
						<span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
					<?php endif;
					if(get_theme_mod('color_newsmagazine_singlepage_commentno_enable','1')==1): ?>
						<span class="date pl-2 pr-2"><a href="#"><i class="fas fa-comments"></i><?php echo absint(get_comments_number());?> </a></span>
					<?php endif;
					if(get_theme_mod('color_newsmagazine_single_time_ago_enable','1')==1):?>
						<span class="date pl-2 pr-2"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
					<?php endif;	
					?>
					<!-- Added Featured End -->
				</div>
			</div> <?php
			endif;
		endif; ?>
		<div class="news-content ">
			<?php the_content(); 
			wp_link_pages( array(
				'before'            => '<div class="text-center">'.__( 'Pages :', 'color-newsmagazine' ),
				'after'             => '</div>',
				'link_before'       => '',
				'link_after'        => ''
			) ); ?>
			<div class="clearfix"> </div>
		</div>
		<?php if ( ! is_front_page() ) : ?>
			<div class ="pl-5 pr-5"> 
				<div class="row">
					<div class="col-lg-12">
						<div class="comments-form">
							<?php 
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
						endif;?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>