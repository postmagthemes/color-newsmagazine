/*==================================
File Name: customizer-hide.js 
Description: allow to hide and show remaining parameters of customizer while enable and disable of section
====================================*/ 

jQuery(document).ready(function() {
  /* below function is made to repeat */
  function my_fun(controlValueId, control,controlContainerSelectorArray){
    if(jQuery(controlValueId).find('input[type=checkbox]').val() != 1) {
      jQuery.each(controlContainerSelectorArray, function(index, value) {
          jQuery(value).hide();
      });
    }
  
    control.container.on( 'click', 'input[type=checkbox]', function( event ) {
        if(jQuery(this).is(":checked")){
          jQuery.each(controlContainerSelectorArray, function(index, value) {
            jQuery(value).show();
          });
        }
        else{
          jQuery.each(controlContainerSelectorArray, function(index, value) {
            jQuery(value).hide();
          });
        }
        
    } );
  }

  wp.customize.control( 'color_newsmagazine_top_header_social_enable', function( control ) {

      var controlValueId = control.selector;
      var controlContainerSelectorArray =  [
          wp.customize.control( 'top_header_social_links_items').selector
      ];

      my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_top_header_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_top_header_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_top_header_right_side_enable').selector,
      wp.customize.control( 'top_header_contact_info_items').selector,
      
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );


  wp.customize.control( 'color_newsmagazine_hot_news_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_hot_news_text').selector,
      wp.customize.control( 'color_newsmagazine_hot_news_order').selector,
      wp.customize.control( 'color_newsmagazine_hot_news_category_name').selector,
      wp.customize.control( 'color_newsmagazine_hot_news_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_hot_news_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_big_news_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_big_news_timeframe').selector,
      wp.customize.control( 'color_newsmagazine_big_news_or_any_enable').selector,
      wp.customize.control( 'color_newsmagazine_big_news_text').selector,
      wp.customize.control( 'color_newsmagazine_big_news_order').selector,
      wp.customize.control( 'color_newsmagazine_big_news_category_name').selector,
      wp.customize.control( 'color_newsmagazine_big_news_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_big_news_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_1_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_b1_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_b1_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_b1_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_b1_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_b1_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_b1_title').selector,
      wp.customize.control( 'color_newsmagazine_b1_order').selector,
      wp.customize.control( 'color_newsmagazine_b1_category_name').selector,
      wp.customize.control( 'color_newsmagazine_b1_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_b1_number').selector,
      wp.customize.control( 'color_newsmagazine_block_1_google').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_2_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_2_google').selector,
      wp.customize.control( 'color_newsmagazine_b2_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_b2_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_b2_btn_enable').selector,
      wp.customize.control( 'color_newsmagazine_b2_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_2_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_2_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_b2_title').selector,
      wp.customize.control( 'color_newsmagazine_b2_order').selector,
      wp.customize.control( 'color_newsmagazine_b2_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_b2_category_name_tab').selector,
      wp.customize.control( 'color_newsmagazine_b2_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_3_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_3_google').selector,
      wp.customize.control( 'color_newsmagazine_block_3_title').selector,
      wp.customize.control( 'color_newsmagazine_b3_featured_video').selector,
      wp.customize.control( 'color_newsmagazine_b3_single_video_page_enable').selector,
      wp.customize.control( 'color_newsmagazine_single_video_layout').selector,

    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_4_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_4_google').selector,
      wp.customize.control( 'color_newsmagazine_block_4_image').selector,
      wp.customize.control( 'color_newsmagazine_block_4_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_4_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_4_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_4_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_4_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_4_title').selector,
      wp.customize.control( 'color_newsmagazine_block_4_order').selector,
      wp.customize.control( 'color_newsmagazine_block_4_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_block_4_category_name').selector,
      wp.customize.control( 'color_newsmagazine_block_4_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );


  wp.customize.control( 'color_newsmagazine_block_5_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_5_google').selector,
      wp.customize.control( 'color_newsmagazine_block_5_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_5_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_5_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_5_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_5_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_5_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_block_5_tab1_heading').selector,
      wp.customize.control( 'color_newsmagazine_block_5_tab1_title').selector,
      wp.customize.control( 'color_newsmagazine_block_5_order').selector,
      wp.customize.control( 'color_newsmagazine_block_5_category_name_tab_1').selector,
      wp.customize.control( 'color_newsmagazine_block_5_number_tab_1').selector,
      wp.customize.control( 'color_newsmagazine_block_5_tab2_heading').selector,
      wp.customize.control( 'color_newsmagazine_block_5_tab2_title').selector,
      wp.customize.control( 'color_newsmagazine_block_5_order_tab2').selector,
      wp.customize.control( 'color_newsmagazine_block_5_category_name_tab_2').selector,
      wp.customize.control( 'color_newsmagazine_block_5_number_tab_2').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_6_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_6_google').selector,
      wp.customize.control( 'color_newsmagazine_block_6_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_6_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_6_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_6_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_6_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_6_title').selector,
      wp.customize.control( 'color_newsmagazine_block_6_order').selector,
      wp.customize.control( 'color_newsmagazine_block_6_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_block_6_category_name').selector,
      wp.customize.control( 'color_newsmagazine_block_6_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_block_7_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_7_google').selector,
      wp.customize.control( 'color_newsmagazine_block_7_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_7_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_7_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_7_post_read_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_7_post_time_enable').selector,
      wp.customize.control( 'color_newsmagazine_block_7_title').selector,
      wp.customize.control( 'color_newsmagazine_block_7_order').selector,
      wp.customize.control( 'color_newsmagazine_block_7_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_block_7_category_name').selector,
      wp.customize.control( 'color_newsmagazine_block_7_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );




  wp.customize.control( 'color_newsmagazine_blog_archive_layout_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_block_archive_options_section_google').selector,
      wp.customize.control( 'color_newsmagazine_blog_archive_title').selector,
      wp.customize.control( 'color_newsmagazine_blog_archive_layout_style').selector,
      wp.customize.control( 'color_newsmagazine_author_enable').selector,
      wp.customize.control( 'color_newsmagazine_postdate_enable').selector,
      wp.customize.control( 'color_newsmagazine_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_readmore_enable').selector,
      wp.customize.control( 'color_newsmagazine_blog_related_post_enable').selector,
      wp.customize.control( 'color_newsmagazine_blog_time_ago_enable').selector,
      wp.customize.control( 'color_newsmagazine_blog_read_enable').selector,

    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_top_footervslider_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_footer_slider_heading').selector,
      wp.customize.control( 'color_newsmagazine_footervslider_order').selector,
      wp.customize.control( 'color_newsmagazine_footervslider_category_name').selector,
      wp.customize.control( 'color_newsmagazine_footervslider_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_footervslider_number').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_footer_news_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_footer_news_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_footernews_title').selector,
      wp.customize.control( 'color_newsmagazine_footer_news_number').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_location_setting_text', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      
      wp.customize.control( 'color_newsmagazine_location_title_text').selector,
      wp.customize.control( 'footer_contact_info_items').selector,
      wp.customize.control( 'footer_social_links_items').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );


  wp.customize.control( 'color_newsmagazine_SiteAuthor_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_SiteAuthor_title').selector,
      wp.customize.control( 'color_newsmagazine_SiteAuthor_description').selector,
      wp.customize.control( 'color_newsmagazine_SiteAuthor_image2').selector,
      wp.customize.control( 'author_social_links_items').selector,
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_sidebarnews_b1_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_title').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_order').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_category_name').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_number').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_comment_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_readingtime_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_timeago_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b1_admin_enable').selector,

    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_sidebarnews_b2_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_title').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_order').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_category_name').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_authorlist').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_number').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_date_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_readingtime_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_timeago_enable').selector,
      wp.customize.control( 'color_newsmagazine_sidebarnews_b2_admin_enable').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );


  wp.customize.control( 'color_newsmagazine_singlepage_headerslider_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_singlepage_headerslider_title').selector,
      wp.customize.control( 'color_newsmagazine_singlepage_headerslider_order').selector,
      wp.customize.control( 'color_newsmagazine_singlepage_headerslider_number').selector,
      wp.customize.control( 'color_newsmagazine_singlepageheader_postdate_enable').selector,
      wp.customize.control( 'color_newsmagazine_singlepageheader_read_enable').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_singlepage_meta_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_singlepage_postdate_enable').selector,
      wp.customize.control( 'color_newsmagazine_singlepage_commentno_enable').selector,
      wp.customize.control( 'color_newsmagazine_single_time_ago_enable').selector,
      wp.customize.control( 'color_newsmagazine_single_read_enable').selector,

    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_singlepage_author_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_singlepage_author_email_enable').selector,
      wp.customize.control( 'color_newsmagazine_singlepage_author_description_enable').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_singlepage_related_post_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_blog_related_post_title').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );

  wp.customize.control( 'color_newsmagazine_blog_popup_enable', function( control ) {

    var controlValueId = control.selector;

    var controlContainerSelectorArray =  [
      wp.customize.control( 'color_newsmagazine_blog_read_more_title').selector,
      wp.customize.control( 'color_newsmagazine_blog_detail_here_title').selector,
    
    ];
    
    my_fun(controlValueId,control,controlContainerSelectorArray);

  } );


}
);