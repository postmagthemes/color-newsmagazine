<?php 

// Added Featured End
if(get_theme_mod('color_newsmagazine_block_5_enable','0') == 1):

	dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_5_google','0') );

	function color_newsmagazine_block_5_enable() {
	?>
	<section class="news-column section animated wow fadeInUp" data-wow-duration="2s"  >
		<div class="container">
			<div class="row">
				<?php
				$arguments = array(
					'category_name'	=> esc_attr(get_theme_mod('color_newsmagazine_block_5_category_name_tab_1','')) ,
					'posts_per_page' => absint( get_theme_mod('color_newsmagazine_block_5_number_tab_1','5') ),
					'author'	   => absint( get_theme_mod('color_newsmagazine_block_5_authorlist','0')),
					'orderby' => array( esc_attr( get_theme_mod('color_newsmagazine_block_5_order')) => 'DSC', 'date' => 'DSC'),
					'ignore_sticky_posts' => 1
				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) : ?>
					<div class="col-lg-6 col-md-6 mb-3 <?php if(get_theme_mod('color_newsmagazine_block_5_tab1_title') == Null ) { echo 'mt-3'; } ; ?> position-initial">
						<?php if (get_theme_mod('color_newsmagazine_block_5_tab1_title') != Null )  { ?>
							<header>
								<h2 class="cat-title"><span><?php echo esc_html( get_theme_mod('color_newsmagazine_block_5_tab1_title')); ?></span></h2>
							</header>
						<?php }; ?>
						<!-- Single News -->
						<?php $count = 0;
						while( $query->have_posts() ) :
							$query->the_post();
							if( $count == 0 ) :
								// main news 
								get_template_part( 'template-parts/layout5/layout5-main-content'); 
							endif;
							$count = $count + 1;
						endwhile; ?>
						<!-- Small Post -->
						<div class="small-post responsive-layout5">
							<?php $count = 0;
							while( $query->have_posts() ) :
								$query->the_post();
								if( $count > 0 ) : ?>
									
										<?php get_template_part( 'template-parts/layout5/layout5-sub-content'); ?>
									
								<?php endif;
							$count = $count + 1;
							endwhile; ?>
						</div>
					</div>
				<?php endif; 
				wp_reset_postdata();
				// Category 2
				$arguments = array(
					'category_name'	=> esc_attr(get_theme_mod('color_newsmagazine_block_5_category_name_tab_2','') ),
					'posts_per_page' => absint( get_theme_mod('color_newsmagazine_block_5_number_tab_2','5')),
					'author'	   => absint( get_theme_mod('color_newsmagazine_block_5_authorlist','')),
					'orderby' => array( esc_attr( get_theme_mod('color_newsmagazine_block_5_order_tab2','date')) => 'DSC', 'date' => 'DSC'),
					'ignore_sticky_posts' => 1
				);
				$query = new WP_Query( $arguments );
				if( $query->have_posts() ) :
					?>
					<div class="col-lg-6 col-md-6 col-12 mb-3  <?php if(get_theme_mod('color_newsmagazine_block_5_tab2_title') == Null ) { echo 'mt-3'; } ; ?> position-initial" >
						<?php if (get_theme_mod('color_newsmagazine_block_5_tab2_title') != Null )  { ?>
							<header>
								<h2 class="cat-title"><span><?php echo esc_html( get_theme_mod('color_newsmagazine_block_5_tab2_title')); ?></span></h2>
							</header>
						<?php }; ?>
							<!-- Single News -->
						<?php
						$count = 0;
						while( $query->have_posts() ) :
							$query->the_post();
							if( $count == 0 ) :
								// main news 
								get_template_part( 'template-parts/layout5/layout5-main-content'); 
							endif;
							$count = $count + 1;
						endwhile;
						?>
						<!-- Small Post -->
						<div class="small-post responsive-layout5 ">
							<?php $count = 0;
							while( $query->have_posts() ) :
								$query->the_post();
								if( $count > 0 ) : ?>
										<?php get_template_part( 'template-parts/layout5/layout5-sub-content'); ?>
								<?php endif;
							$count = $count + 1;
							endwhile; ?>
						</div>
				<?php endif;
				wp_reset_postdata();
				?>		
			</div>
		</div>
	</section>
<?php 
}
color_newsmagazine_block_5_enable();
endif;?>				