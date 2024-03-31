<?php if(get_theme_mod('color_newsmagazine_hot_news_enable','1')):
function color_newsmagazine_hot_news() {
	$color_newsmagazine_hotnews = get_theme_mod('color_newsmagazine_hot_news_text');
	?>
	<!-- News ticker -->
	<div class="news-ticker">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="ticker-inner">
						<!-- Ticker title -->
						<div class="ticker-title">
							<i class="fas fa-bolt"></i><?php echo esc_html($color_newsmagazine_hotnews);?>
						</div>	
						<!-- End Ticker title -->
						<div class="ticker-news">
							<div class="ticker-slider">
								<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => absint(get_theme_mod('color_newsmagazine_hot_news_number','3')),
									'category_name' => esc_attr(get_theme_mod('color_newsmagazine_hot_news_category_name','')),
									'author'	   => absint(get_theme_mod ('color_newsmagazine_hot_news_authorlist','0')),
									'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_hot_news_order', 'date')) => 'DSC', 'date' => 'DSC'),
									'order'     => 'DSC',
									'ignore_sticky_posts' => 1
								);
								$newsloop = new WP_Query($args);
								if( $newsloop->have_posts() ) :
									while ($newsloop->have_posts()) : 
										$newsloop->the_post(); 
										?>
										<div class="single-ticker ml-1 mr-2">
											<a href="<?php the_permalink();?>"><?php the_title();?></a>
										</div>
									<?php endwhile;
								endif;
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End News ticker -->
<?php }
color_newsmagazine_hot_news();
endif; ?>