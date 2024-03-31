<?php
/**
*  News Block Layout Two main news
*
* @package color_newsmagazine
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Single News -->
    <div class="single-news media">
        <!-- News Head -->
        <?php if(has_post_thumbnail()):?>
            <div class="news-head">
                <?php the_post_thumbnail('color-newsmagazine-thumbnail-12');?>
            </div>
        <?php elseif (! has_post_thumbnail()): ?>
            <div class="news-head">
                <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/80_80.png " >
            </div>
        <?php endif; ?>
        <!-- Content -->
        <div class="content media-body">
            <div class="meta">
                <?php
                    if(get_theme_mod('color_newsmagazine_b2_date_enable','1') == 1): ?>
                        <span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
                    <?php endif;
                    if(get_theme_mod('color_newsmagazine_b2_comment_enable','1') == 1): ?>
                        <span class="date"><i class="fa fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
                    <?php endif;	
                    															
                    if(get_theme_mod('color_newsmagazine_block_2_post_read_enable','1') == 1):
                        color_newsmagazine_count_content_words( esc_html(get_the_ID()));
                    endif;	
                    if( get_theme_mod('color_newsmagazine_block_2_post_time_enable','1')==1):?>
                        <span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
                    <?php endif;
                ?>
            </div>
            <h3 class="title-small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        </div>
    </div>
    <!--/ End Single News -->
</article>
