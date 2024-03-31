<?php
if (get_theme_mod('color_newsmagazine_blog_archive_layout_enable','1') == 1 ):

    dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_archive_options_section_google','0') );

    function color_newsmagazine_main_blog(){ ?>
        <section id = "blog" class="section">
            <div class ="container ">
                <?php if (get_theme_mod('color_newsmagazine_blog_archive_title') != null) { ?>
                    <header >
                        <h2 class="cat-title">
                            <span><?php  echo esc_html( get_theme_mod('color_newsmagazine_blog_archive_title')); ?></span>
                        </h2>
                    </header>
                <?php } ?>
                <div class="row">
                    <?php
                    global $color_newsmagazine_postcount;
                    $color_newsmagazine_postcount = 1;
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                if (get_theme_mod('color_newsmagazine_blog_archive_layout_style','feature') == 'double') {
                                get_template_part( 'template-parts/content' );
                                
                                } else if (get_theme_mod('color_newsmagazine_blog_archive_layout_style','feature') == 'single') {
                                    get_template_part( 'template-parts/content-1column');
                                
                                } else if (get_theme_mod('color_newsmagazine_blog_archive_layout_style','feature') == 'list') {
                                    get_template_part( 'template-parts/content-list');
                                } else if (get_theme_mod('color_newsmagazine_blog_archive_layout_style','feature') == 'feature') {
                                    get_template_part( 'template-parts/content-feature');
                                }
                        endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        <!-- Start Pagination -->
                        <div class="pagination-main">
                            <?php	the_posts_pagination(array(
                                    'mid_size' => 2,
                                    'prev_text' => __('Previous', 'color-newsmagazine'),
                                    'next_text' => __('Next', 'color-newsmagazine'),
                                ));
                            ?>
                        </div>
                        <!--/ End Pagination -->
                    </div>
                </div>
            </div>
        </section>
    <?php }
    color_newsmagazine_main_blog();
endif;