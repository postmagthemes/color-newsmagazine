<?php
/**
*  News Block Layout Two
*
* @package color_newsmagazine
*/
/*-----------------------------------------------------
Front Page News Layout Two
-----------------------------------------------------*/
if(get_theme_mod('color_newsmagazine_block_2_enable','0') == 1): 

    dynamic_sidebar( 'advertisement_bar-'.get_theme_mod('color_newsmagazine_block_2_google','0') );

	function color_newsmagazine_block_2_enable() {  
        if (color_newsmagazine_all_categories() != null) { // if there is no post then no category 

        ?>

		<section class="news-tabs section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 position-initial">
                        <?php if (get_theme_mod('color_newsmagazine_b2_title') != Null )  { ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <header >
                                        <h2 class="cat-title">
                                        <span><?php echo esc_html(get_theme_mod('color_newsmagazine_b2_title')); ?></span>
                                        </h2>
                                    </header >

                                </div>
                            </div>
                        <?php }
                        
                        // Fetch first category to set as first tab
                        if (color_newsmagazine_all_categories() != null) { // if there is no post then no category 

                        $allcategory_fetch = color_newsmagazine_all_categories();
                        foreach ( $allcategory_fetch as $key =>$single_cat);
                        
                        //end
                        $tabs =  get_theme_mod('color_newsmagazine_b2_category_name_tab',array($single_cat->name) );
                        if(!empty($tabs[0]) && $tabs[0] != '' && count($tabs) > 0){ ?>
                        
						<div class="tab-main border-cattitle">
							<div class="nav-main">
                                    <!-- Tab Menu -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <?php foreach ($tabs as $key=>$tab){
                                        $active = $key == 0 ?'active':'';
                                        ?>
									   <li class="nav-item">
                                           <a class="nav-link <?php echo $active; ?>" data-toggle="tab"
                                            href="#tab<?php echo $key; ?>" role="tab"><i class="icofont-crown"></i>
                                               <?php echo esc_html( $tab);?></a></li>
                                    <?php } ?>
                                    
								</ul>
								<!--/ End Tab Menu -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Single Tab1 -->
								<?php
                                foreach ($tabs as $key=>$tab) {
                                    $activeContent = $key == 0 ?'active':'';
                                    $arg_1 = array(
                                        'category_name' => esc_attr($tab),
                                        'posts_per_page' => absint(get_theme_mod('color_newsmagazine_b2_number', '4')),
                                        'author' => absint(get_theme_mod('color_newsmagazine_b2_authorlist','0')),
                                        'orderby' => array(esc_attr(get_theme_mod('color_newsmagazine_b2_order','date')) => 'DSC', 'date' => 'DSC'),
                                        'ignore_sticky_posts' => 1,
                                    );
                                    $query1 = new WP_Query($arg_1);
                                    if ($query1->have_posts()) :
                                         ?>
                                         <div class="tab-pane fade show <?php echo $activeContent; ?>"
                                              id="tab<?php echo $key; ?>"
                                              role="tabpanel">
                                             <div class="row">
                                                 <div class="col-lg-6 col-md-6">
                                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                        <!-- Single News -->
                                                        <?php
                                                        $count = 0;
                                                        while ($query1->have_posts()) :
                                                            $query1->the_post();
                                                            if ($count == 0) :
                                                                // main news
                                                                get_template_part('template-parts/layout2/layout2-main-content');

                                                            endif;
                                                            $count = $count + 1;
                                                        endwhile;
                                                        ?>
                                                    </article>
                                                 </div>
                                                 <div class="col-lg-6 col-md-6">
                                                        <!-- Tab other news -->
                                                        <div class="tab-others white-borders">
                                                            <?php
                                                            $count = 0;
                                                            while ($query1->have_posts()) :
                                                                $query1->the_post();
                                                                if ($count > 0) :
                                                                    get_template_part('template-parts/layout2/layout2-sub-content');
                                                                endif;
                                                                $count = $count + 1;
                                                            endwhile;
                                                            ?>
                                                        </div>
                                                     <!--/ End tab other news -->
                                                 </div>
                                             </div>
                                         </div>
                                    <?php endif;
                                    wp_reset_postdata();
                                }
								?>
								<!--/ End Single Tab 1 -->
							</div>
						</div>
                        <?php } } ?>
					</div>
				</div>
			</div>
		</section>
	<?php } 
    }
color_newsmagazine_block_2_enable();
endif;