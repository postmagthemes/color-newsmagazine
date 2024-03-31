<?php
/**
*  News Block Layout five sub news
*
* @package color_newsmagazine
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- Single Post -->
    <div class="single-post">
        <div class="news-head" >
            <?php
                if( has_post_thumbnail() ) :
                    the_post_thumbnail('color-newsmagazine-thumbnail-7');
                elseif (! has_post_thumbnail()): ?>
                    <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/100_66.png " >
                <?php endif;
            ?>
        </div>
        <div class="content">
            <h3 class="title-small"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <div class="meta">
                <?php if( get_theme_mod('color_newsmagazine_block_5_date_enable','1') == 1): ?>
                    <span class="date">
                        <i class="fas fa-clock"></i><?php color_newsmagazine_posted_on();?>
                    </span>
                <?php endif;
                if(get_theme_mod('color_newsmagazine_block_5_post_read_enable','1') == 1):
                    color_newsmagazine_count_content_words( esc_html(get_the_ID()));
                endif;	
                ?>
                <!-- Added Featured End -->
            </div>
        </div>
    </div>
<!--/ End Single Post -->
</article>