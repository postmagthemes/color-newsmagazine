<section id = "author-section">
    <div class="author ">
        <div class="media">
            <?php if (absint(get_theme_mod('color_newsmagazine_single_page_post_taxonomy_avatar','1'))==1) : ?>
                <div class="img-holder">
                    <?php echo get_avatar( get_the_author_meta('ID'), 100); ?>
                </div>
            <?php endif ; ?>
            <div class="media-body">
                <div class="title-share">
                    <div class= "w-100">
                        <?php color_newsmagazine_posted_by(); ?> 
                    </div>
                    <?php if (absint(get_theme_mod('color_newsmagazine_singlepage_author_email_enable','1'))==1) : ?>
                        <div>
                            <?php the_author_meta('user_email');?>
                        </div>
                    <?php endif ; ?>
                </div>
                <?php if (absint(get_theme_mod('color_newsmagazine_singlepage_author_description_enable','1'))==1) : ?>
                    <div >
                        <?php the_author_meta('description'); ?>
                    </div>
                <?php endif ; ?>
            </div>
        </div>
    </div>
</section>