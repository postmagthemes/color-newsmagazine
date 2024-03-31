<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package color_newsmagazine
 */

get_template_part( 'sections/section','verticle-slider'); ?>

</main>
<!-- Footer Area -->
<footer class="footer">
	
	<!-- Footer Top -->
	<div class="footer-top ">
		<div class="container">
			<div class="row">
				<?php if ( get_theme_mod('color_newsmagazine_location_setting_text','0') == 1) { ?>
					<div class ="col-lg-3 col-md-6 col-12">
						<div class="single-footer f-contact ">
							<div class ="contact-main">
								<h2><?php echo esc_html(get_theme_mod('color_newsmagazine_location_title_text',__('Get in touch','color-newsmagazine') )) ?></p> </h2>
								<?php color_newsmagazine_footer_contact_info_items();?>
								<!-- Social -->
								<ul class="social float-none">
									<?php color_newsmagazine_top_footer_social_links_items();?>
								</ul>
								<!-- End Social -->
							</div>
						</div>
					</div>
				<?php }
				if (get_theme_mod('color_newsmagazine_footer_news_enable','1')) { ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-footer">
							<?php 
								$color_newsmagazine_title = get_theme_mod('color_newsmagazine_footernews_title');
								$post_no = get_theme_mod('color_newsmagazine_footer_news_number','3');
								$date_enable = get_theme_mod('color_newsmagazine_footer_news_date_enable','0');
							?>
							<h2><?php echo esc_html($color_newsmagazine_title);?></h2>
							<?php $the_query = new WP_Query('showposts='.$post_no.'&orderby=post_date&order=desc&ignore_sticky_posts=1');
							if ( $the_query->have_posts() ) :
								while ($the_query->have_posts()) : $the_query->the_post(); 
									?>
									<div class="single-news mb-2 mt-2">
										<div class="news-head">
											<?php 
											if( has_post_thumbnail() ) :
												the_post_thumbnail('color-newsmagazine-thumbnail-12');
												elseif (! has_post_thumbnail()): ?>
													<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/80_80.png " >
											<?php endif;
											?>
										</div>
										<div class="news-content clearfix">
											<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
											<div class="meta">
												<span class="date">
													<?php if($date_enable == 1): ?>
														<i class="fa fa-clock"></i>
														<?php color_newsmagazine_posted_on();?>
														<?php endif;
													?>
												</span>
											</div>
										</div>
									</div>
									<?php
								endwhile; 
							endif;
							wp_reset_postdata(); ?>
						</div>
					</div>
				<?php }
				if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<?php dynamic_sidebar( 'footer-1' );?>
				<?php } ?>

			</div>
		</div>
	</div>
	<!-- End Footer Top -->

	<!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="copyright-content text-center">
                            <p><i class="fa fa-copyright"></i>
                                <?php esc_html_e( 'Proudly powered by WordPress', 'color-newsmagazine' ) ; ?>
                                <span class="sep"> | </span>
                                    <?php
                                    /* translators: 1: Theme name, 2: Theme author. */
                                    printf( esc_html__( 'Theme: %2$s by  %1$s', 'color-newsmagazine' ), '<a href="https://www.postmagthemes.com" target="_blank" >Postmagthemes</a>' , '<a class="text-decoration-underline" href="https://www.postmagthemes.com/downloads/color-newsmagazine-free-wordpress-theme/" target="_blank">Color NewsMagazine WordPress Theme</a>' );?>
                            <p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!-- End Footer Area -->
<!-- Initialize Swiper -->

	<div class="modal fade" id="modalPostConetentPopup" tabindex="-1" role="dialog" aria-labelledby="modalPostConetentPopupTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
                
          </div>
        </div>
      </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>