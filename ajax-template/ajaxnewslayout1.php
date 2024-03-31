<?php
$arguments = array(
'category_name'			=> esc_attr( $_REQUEST['cat'] ),
'posts_per_page' 		=> absint( $_REQUEST['post_no'] ),
'author'	  	 		=> absint( $_REQUEST['author_1'] ),
'orderby' 				=> array( esc_attr( $_REQUEST['orderby'] ) => 'DSC', 'date' => 'DSC'),
'paged'					=> isset($_REQUEST['paged']) ? $_REQUEST['paged'] : 1,
'ignore_sticky_posts' 	=> 1,
);

$query_morepage = new WP_Query( $arguments );

ob_start();

if( $query_morepage->have_posts() ) :
	while( $query_morepage->have_posts() ): $query_morepage->the_post();
	?>
	<div class="col-lg-4 col-md-6 mb-3 col-4 extra_page_close">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- Single News -->
		<div class="single-news blog-head card">
			<?php
			if ( $image == 1 ):
				if(has_post_thumbnail()):?>
					<div class="news-head animated wow fadeIn" data-wow-duration="3s" data-wow-delay="1s" data-wow-offset="200">
						<?php the_post_thumbnail('color-newsmagazine-thumbnail-1');?>
					</div>
				<?php elseif (! has_post_thumbnail()): ?>
				<div class="news-heads animated wow fadeIn" data-wow-duration="3s" data-wow-delay="1s" data-wow-offset="200">
					<img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
						</div>
				<?php endif;
			endif;
			?>
			<div class="content card-body">
				<?php if($_REQUEST['admin_enable'] == 1 ): ?>
					<div class="meta">
						<span class="author">
							<i class="fas fa-user-tie"></i>
							<?php color_newsmagazine_posted_by();?>																			
						</span>
					</div>
				<?php endif; ?>

				<div class="meta">
					<?php if($_REQUEST['date_enable'] ==1): ?>
					<span class="date">
						<i class="fas fa-clock"></i>
						<?php color_newsmagazine_posted_on();?>
					</span>
					<?php endif;
					if($_REQUEST['comment_enable'] ==1): ?>
						<span class="date">
							<i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?>
						</span>
					<?php endif; 
					if($_REQUEST['like_enable'] ==1): ?>
						<span class="date">
							<?php  echo color_newsmagazine_getPostLikeLink( esc_html(get_the_ID()) ); 
							echo color_newsmagazine_getPostUnLikeLink( esc_html(get_the_ID()) );
							?> 								
						</span>
					<?php endif;			
					if($_REQUEST['post_read_enable'] ==1):
						color_newsmagazine_count_content_words( esc_html(get_the_ID()));
					endif;	
					if($_REQUEST['post_time_enable'] ==1) :?>
						<span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
					<?php endif;	
					?>
					<!-- Added Featured End -->
				</div>
				<h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

				<?php 

				global $color_newsmagazine_currenttime2;
				$themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
				$newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
				color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2);
				?>
			</div>
		</div>
		
		</article>
	</div>
	<?php
	endwhile; 
endif;

wp_reset_postdata();

$result = ob_get_contents();

ob_end_clean();

$return = [
    'html'          => $result,
	'page'          => isset($_REQUEST['paged']) ? $_REQUEST['paged'] : 1,
	'maxpage'		=> $query_morepage->max_num_pages,
];

return wp_send_json( $return );