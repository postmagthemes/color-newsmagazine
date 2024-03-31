<?php
if(get_theme_mod('color_newsmagazine_block_3_enable','0') ==  1):

	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_3_google','0') );

	function color_newsmagazine_block_3_enable() {
		$url = get_theme_mod('color_newsmagazine_b3_featured_video');
		$background_image = get_theme_mod('color_newsmagazine_b3_image');
		$bcolor =  get_theme_mod('color_newsmagazine_background_color_layout3');
		?>
		<!-- Video news -->
		<section class="video-news section dark ">
			<div class="container">
				<?php if (get_theme_mod('color_newsmagazine_block_3_title') != Null )  { ?>
					<div class="row">
						<div class="col-lg-12 position-initial">
							<header>
								<h2 class="cat-title">
									<span><?php  echo esc_html(get_theme_mod('color_newsmagazine_block_3_title','')); ?></span>
								</h2>
							</header>
						</div>
					</div>
				<?php } ?> 
				<div class="row">
					<div class="col-lg-10 offset-lg-1 p-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!-- Main News -->
							<div id="mybtn" class="youtube-video">
								<!-- News Head -->
								<div class="news-head shadow">
									<div class="video-wrap">
										<div class="video">
											<iframe width="600" height="340" src="<?php echo esc_url( $url );?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Main News -->
						</article>
					</div>
				</div>
				<?php if(get_theme_mod('color_newsmagazine_b3_single_video_page_enable','0') ==1):?>
					<div class="row">
						<div class="col-lg-12">
							<div class="other-video">
								<div class="video-slider">
									<!-- Single Video -->
										<?php color_newsmagazine_single_video_layout();?>
									<!--/ End Single Video -->
								</div>
							</div>
						</div>
					</div>
				<?php endif;?>
			</div>
		</section>
		<!--/ End Video news -->
	<?php }
	color_newsmagazine_block_3_enable (); ?>
<?php else:?>
	<?php if(get_theme_mod('color_newsmagazine_b3_single_video_page_enable','0')=='1'):
		function color_newsmagazine_b3_single_video_page_enable() { ?>
			<section class="video-news section dark ">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div >
								<header>
									<h2 class="cat-title">
										<span><?php  echo esc_html(get_theme_mod('color_newsmagazine_block_3_title','')); ?></span>
									</h2>
								</header>
							</div>
							<div class="other-video">
								<div class="video-slider">
									<!-- Single Video -->
									<?php color_newsmagazine_single_video_layout();?>
									<!--/ End Single Video -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php }
		color_newsmagazine_b3_single_video_page_enable();
	endif;
endif;