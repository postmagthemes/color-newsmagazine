<?php if (get_theme_mod('color_newsmagazine_top_footervslider_enable','1')== 1) { 
function color_newsmagazine_verticle_slider(){ ?>
    <section class="layout-13 section  scroll-news ">
        <?php
        $arguments = array(
            'post_type' => 'post',
            'posts_per_page' => absint(get_theme_mod('color_newsmagazine_footervslider_number','7')),
            'category_name' => esc_attr(get_theme_mod('color_newsmagazine_footervslider_category_name','')),
            'author' => absint(get_theme_mod ('color_newsmagazine_footervslider_authorlist','0')),
            'orderby' => array( esc_attr(get_theme_mod('color_newsmagazine_footervslider_order', 'date')) => 'DSC', 'date' => 'DSC'),
            'order'     => 'DSC',
            'ignore_sticky_posts' => 1

        );
        $query = new WP_Query( $arguments );
        if( $query->have_posts() ) :
            ?>
            <div class ="container">
                <?php if ( get_theme_mod('color_newsmagazine_footer_slider_heading') != Null )  { ?>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="cat-title"><span><?php echo esc_html(get_theme_mod('color_newsmagazine_footer_slider_heading'))?></span><span class="layout13-stripes"></span></h2>
                        </div>
                    </div>
                <?php } ?>
                    <div class="row">
                        <div class="col-lg-9 col-md-9 " >
                            <div class="slider-for ">
                                <?php
                                    while( $query->have_posts() ) :
                                        $query->the_post(); ?>
                                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <!-- Single News -->
                                            <div class="single-news main animated wow slideInLeft" data-wow-duration="2s">
                                                    <div class="news-head ">
                                                        <?php
                                                        if( has_post_thumbnail() ) :
                                                            the_post_thumbnail('color-newsmagazine-thumbnail-4');
                                                            elseif (! has_post_thumbnail()): ?>
                                                                <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/730_487.png " >
                                                        <?php endif;
                                                        ?>
                                                    </div>
                                                <div class="content shadow_bbc">
                                                    <h3 class="title-medium mb-4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                                    <div class="meta ">
                                                        <span class="author">
                                                            <i class="fas fa-user-tie"></i>
                                                            <?php color_newsmagazine_posted_by();?>																			
                                                        </span>
                                                        <span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
                                                        <span class="date"><i class="fas fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
                                                        
                                                        <?php color_newsmagazine_count_content_words( esc_html(get_the_ID()));?>
                                                        <span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>                    
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>                                         
                                    <?php endwhile;
                                ?>
                            </div>
                        </div>
                    <div class="col-lg-3 col-md-3 pt-5 slick-sidebar-layout13" >     
                        <div class="slider-nav layout-13-vertical animated wow slideInRight" data-wow-duration="2s" >  
                        <?php
                            while( $query->have_posts() ) :
                                $query->the_post();
                                ?>
                                    <!-- Single News -->
                                        <?php 
                                        if(has_post_thumbnail()):?>
                                            <?php the_post_thumbnail('color-newsmagazine-thumbnail-1');?>
                                        <?php elseif (! has_post_thumbnail()): ?>
                                            <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
                                        <?php endif;
                                        ?>
                                    <!--/ End Single News -->
                                <?php
                            endwhile;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        endif;
        wp_reset_postdata();
        ?>
    </section>
<?php }
color_newsmagazine_verticle_slider();
}