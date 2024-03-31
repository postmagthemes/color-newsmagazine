<?php
/**
*  News Block Layout Two sub news
*
* @package color_newsmagazine
*/
?>
<div class="single-news main">
    <!-- News Head -->
    <div class="news-head">
        <?php if(has_post_thumbnail()):
            the_post_thumbnail('color-newsmagazine-thumbnail-1');
        elseif (! has_post_thumbnail()): ?>
            <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
        <?php endif;?>
    </div>
    <div class="content">
        <?php if(get_theme_mod('color_newsmagazine_b2_author_enable','1') == 1): ?>
            <div class="meta">
                <span class="author">
                    <i class="fas fa-user-tie"></i>
                    <?php color_newsmagazine_posted_by();?>																			
                </span>
            </div>
        <?php endif; ?>
        <div class="meta">
            <?php
            if(get_theme_mod('color_newsmagazine_b2_date_enable','1') == 1 ): ?>
                <span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
            <?php endif;
            if(get_theme_mod('color_newsmagazine_b2_comment_enable','1') == 1): ?>
                <span class="date"><i class="fa fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
            <?php endif;	
            															
            if(get_theme_mod('color_newsmagazine_block_2_post_read_enable','1')):
                color_newsmagazine_count_content_words( esc_html(get_the_ID()));
            endif;	
            if( get_theme_mod('color_newsmagazine_block_2_post_time_enable','1')):?>
                <span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
            <?php endif;	?>

        </div>
        <h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <?php 
        the_excerpt();
        ?>
        
    </div>
</div>