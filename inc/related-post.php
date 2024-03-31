<?php 
$color_newsmagazine_tags = get_the_tags($post->ID);
if ($color_newsmagazine_tags) {
    $color_newsmagazine_tag_ids = array();
    foreach( $color_newsmagazine_tags as $color_newsmagazine_individual_tag ) $color_newsmagazine_tag_ids[] = $color_newsmagazine_individual_tag->term_id;
    $color_newsmagazine_args = array(
        'tag__in' => $color_newsmagazine_tag_ids,
        'orderby' => 'date',
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 3,
        'ignore_sticky_posts'=>1
    );
    $color_newsmagazine_my_query = new wp_query( $color_newsmagazine_args );
    if( $color_newsmagazine_my_query->have_posts() ) { ?> 
        <div class =" related-1columnblog">
            <section>
                <div class="related-posts">
                    <div class="title-holder">
                        <h4 class="cat-title"><span><?php echo esc_html(get_theme_mod('color_newsmagazine_blog_related_post_title',__('More Stories','color-newsmagazine'))); ?></span></h4>
                    </div>
                    <div class="row">
                        <?php while( $color_newsmagazine_my_query->have_posts() ) {
                            $color_newsmagazine_my_query->the_post();?>
                            <div class="h-box col-lg-4 col-md-4 col-sm-4">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="card">
                                    <?php   if ( has_post_thumbnail() ) {
                                        color_newsmagazine_thumbnail_8();
                                    } else if ( ! has_post_thumbnail() ) { ?>
                                        <img src = "<?php echo esc_url( get_template_directory_uri() ); ?>/inc/images/730_487.png " >
                                    <?php } ?>
                                    </div>
                                </article>
                            </div>
                        <?php } 
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        </div> 
    <?php }
}
