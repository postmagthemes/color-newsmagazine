<?php 
if(get_theme_mod('color_newsmagazine_big_news_enable','1') == 1):
function color_newsmagazine_big_news() {
	$big_title 	= get_theme_mod('color_newsmagazine_big_news_text');
	$big_enable_only = get_theme_mod('color_newsmagazine_big_news_or_any_enable','0');
	$big_cat = get_theme_mod('color_newsmagazine_big_news_category_name','');
	$big_post_no = get_theme_mod('color_newsmagazine_big_news_number','3');
	$big_author_1 = get_theme_mod('color_newsmagazine_big_news_authorlist','0');
	$big_orderby = get_theme_mod('color_newsmagazine_big_news_order','date');
            	
	if($big_enable_only == 1):
		$arguments = array(
			'category_name'	=> esc_attr( $big_cat ),
			'posts_per_page' => absint( $big_post_no ),
			'author'	   => absint( $big_author_1 ),
			'ignore_sticky_posts' => 1,
			'orderby' => array( esc_attr( $big_orderby ) => 'DSC', 'date' => 'DSC'),

				'date_query' => array(
					array(
						'after' => get_theme_mod('color_newsmagazine_big_news_timeframe','48') . 'hours ago'
					))
		);
		else:
		$arguments = array(
			'category_name'	=> esc_attr( $big_cat ),
			'posts_per_page' => absint( $big_post_no ),
			'author'	   => absint( $big_author_1 ),
			'orderby' => array( esc_attr( $big_orderby ) => 'DSC', 'date' => 'DSC'),
			'ignore_sticky_posts' => 1

		);
	endif;		
	$query = new WP_Query( $arguments );
	if( $query->have_posts() ) :
		?>
		<section id ="hrsnews" class="section ">
			<div class="container">
				<div class="news-title">
					<h2><?php echo esc_html($big_title);?><span class="hrnews-stripes"></span></h2>
				</div>
				<div class="row"> 
					<?php while( $query->have_posts() ) :
						$query->the_post();
						?>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="hrsnewsbox ">
									<div class="card">
										<div class="timehr"><span><?php echo esc_html(color_newsmagazine_time_ago());?></span></div>
										<div class="card-body animated wow fadeInUp" data-wow-duration = "2s" data-wow-delay="1s">
											<h5 class="mt-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
										</div>
									</div>
								</div>
							</div>
							
						<?php
					endwhile;
				?>
				</div>		
			</div>
		</section>
	<?php endif; 
	wp_reset_postdata();
}
color_newsmagazine_big_news();
endif;?>