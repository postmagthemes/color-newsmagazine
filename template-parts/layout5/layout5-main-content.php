<?php
/**
*  News Block Layout five main news
*
* @package color_newsmagazine
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-news blog-head  ">
        <div class="news-head">
        <?php
            if( has_post_thumbnail() ) :
                the_post_thumbnail('color-newsmagazine-thumbnail-1');
            elseif (! has_post_thumbnail()): ?>
                    <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/350_233.png " >
            <?php endif;
        ?>
        </div>
        <div class="content">
            <?php if(get_theme_mod('color_newsmagazine_block_5_author_enable','1') == 1): ?>
                <div class="meta">
                    <span class="author">
                        <i class="fas fa-user-tie"></i>
                        <?php color_newsmagazine_posted_by();?>
                    </span>
                </div>
            <?php endif; ?>
            <div class="meta">
                <?php if( get_theme_mod('color_newsmagazine_block_5_date_enable','1') == 1): ?>
                    <span class="date"><i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?></span>
                <?php endif;
                if(get_theme_mod('color_newsmagazine_block_5_comment_enable','1') == 1): ?>
                    <span class="date"><i class="fa fa-comments"></i><?php color_newsmagazine_post_comment();?></span>
                <?php endif;
                
                if(get_theme_mod('color_newsmagazine_block_5_post_read_enable','1') == 1):
                    color_newsmagazine_count_content_words( esc_html(get_the_ID()));
                endif;	
                if(get_theme_mod('color_newsmagazine_block_5_post_time_enable','1') == 1):?>
                    <span class="date"><i class="far fa-calendar-alt"></i> <?php echo esc_html(color_newsmagazine_time_ago());?></span>
                <?php endif;?>
            </div>
            <h3 class="title-medium"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <?php the_excerpt();
            
            global $color_newsmagazine_currenttime2;
            $themecolor = get_theme_mod('color_newsmagazine_theme_color_setting','#dd3333') ;
            $newcolor1= hexdec(substr($themecolor, 1));  /** convert to hex without # */
            color_newsmagazine_category_new($newcolor1, $color_newsmagazine_currenttime2);
            ?>
        </div>
    </div>
<!--/ End Single News -->
</article>