<section id ="central-body-template">
    <div class =" central container">
        <div class="row" >
            <?php if ( get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'left' ) :
				if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) )  ) { ?>
                    <div class="col-lg-3 nopadding">
                        <?php get_sidebar()?>
                    </div>
                <?php }
                if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) )  ) { ?>
					<div class="mainbar col-lg-9 nopadding">
				<?php } else { ?>
					<div class="mainbar col-lg-12 nopadding box">
				<?php } 
                    dynamic_sidebar( 'frontpage-news-layout' );
                    the_content();
                    ?>
                    </div>
            <?php elseif ( get_theme_mod('color_newsmagazine_sidebar_layout_settings','right') == 'right' ) :
                    if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')== 1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1 ) )  ) { ?>
                        <div class="mainbar col-lg-9 nopadding">
                    <?php } else { ?>
                        <div class="mainbar col-lg-12 nopadding box">
                    <?php }
                        dynamic_sidebar( 'frontpage-news-layout' );
                        the_content();
                        ?>
                    </div>
                    <?php if ( ( is_active_sidebar( 'sidebar-1' ) or (get_theme_mod('color_newsmagazine_SiteAuthor_enable','0')==1) or (get_theme_mod('color_newsmagazine_sidebarnews_b1_enable','1')== 1 ) or ( get_theme_mod('color_newsmagazine_sidebarnews_b2_enable','1') == 1))  ) { ?>
                        <div class="col-lg-3 nopadding">
                            <?php get_sidebar()?>
                        </div>
                    <?php }
            endif; ?>
        </div>
    </div>
</section>
<?php 