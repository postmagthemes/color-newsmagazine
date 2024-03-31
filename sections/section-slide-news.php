<?php if(absint(get_theme_mod('color_newsmagazine_mainnews_lower_slider_enable','1'))==1): 
function color_newsmagazine_slide_news() { ?>
    <div>
        <h2 class="cat-title">
            <span><?php  echo esc_html(get_theme_mod('color_newsmagazine_mainnews_lower_slider_title')); ?></span>
        </h2>
    </div>
    <div class=" slide-news owl-carousel-header container-video">
        <?php $args = array( 
            'post_type' => 'post',
            'category_name' => esc_attr(get_theme_mod('color_newsmagazine_mainnews_lowerslider_category_name','')),
            'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_mainnews_lowerslider_order', 'date')) => 'DSC', 'date' => 'DSC'),
            'order'     => 'DSC',
            'author'	   => absint(get_theme_mod ('color_newsmagazine_mainnews_lowerslider_authorlist','0')),
            'posts_per_page' => absint(get_theme_mod( 'color_newsmagazine_mainnews_lowerslider_number','4' )),
            'ignore_sticky_posts' => 1
            );
        $listings = new WP_Query( $args );
        if ( $listings->have_posts() ) :
            /* Start the Loop */
            while ( $listings->have_posts() ) :
                $listings->the_post();?> 
                <div>
                    <?php if ( ! has_post_thumbnail() ) { ?>
                        <div>
                            <img  src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/332_221.png " >
                        </div>
                    <?php } else if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'color-newsmagazine-thumbnail-rightnews');
                    } ?>
                    <div class ="overlay-video">
                        <h3 class="title-medium "><a href="<?php the_permalink();?>"><?php the_title();?></a> </h3> 
                    </div>                
                </div>
            <?php endwhile;
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        wp_reset_postdata(); ?>    
    </div>
    <?php }
    color_newsmagazine_slide_news ();
endif; ?>