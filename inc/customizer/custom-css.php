<?php 
/**
 * Color Newsmagazine: custome css 
 *
 * 
 */

function color_newsmagazine_color_font_css(){
	$main_background_color = "#". get_background_color();
	$theme_color		= get_theme_mod( 'color_newsmagazine_theme_color_setting' ,'#dd3333 ' );
	$theme_text_color	= get_theme_mod( 'color_newsmagazine_theme_text_color_setting','#ffffff' );
	$background_color_top_header   = get_theme_mod('color_newsmagazine_background_color_top_header','#510000');
	$background_color_site_title = get_theme_mod('color_newsmagazine_background_color_site_title','#494949');
	$background_color_menu = get_theme_mod('color_newsmagazine_background_color_menu','#ba2a2a');
	$background_color_hot_news = get_theme_mod('color_newsmagazine_background_color_hot_news','#7c1717');
	$background_color_sidebar = get_theme_mod('color_newsmagazine_background_color_sidebar','#510000');
	$mainnews_upperslider_background_image = get_theme_mod('color_newsmagazine_mainnews_upperslider_background_image');
	$color_newsmagazine_block_4_image = get_theme_mod('color_newsmagazine_block_4_image');

	$site_font_family 			= get_theme_mod('site_google_fontfamily_setting','Roboto');
	$header_font_family 		= get_theme_mod('header_google_fontfamily_setting','Montserrat');
	$section_font_family 		= get_theme_mod('section_title_google_fontfamily_setting','Montserrat');
	$post_font_family 			= get_theme_mod('post_title_google_fontfamily_setting','Scada');
	$widgetlist_font_family 	= get_theme_mod('widgetlist_google_fontfamily_setting','Lato');
	$section_description_font_family 	= get_theme_mod('section_description_google_fontfamily_setting','Roboto');
	$footer_font_family 		= get_theme_mod('footer_google_fontfamily_setting','Lato');
	
	$theme_css= '
			#scrollUp,
			.slicknav_btn,
			.newsletter,
			.template-preloader-rapper,
			.header-social li:hover a,color_newsmagazine
			.main-menu .nav li:hover a,
			.main-menu .nav li .dropdown li a:hover,
			.main-menu .nav .dropdown li .dropdown li:hover,
			.main-menu .nav li.active a,
			.header .search-form .icon,
			.news-ticker .owl-controls .owl-nav div:hover,
			.hero-area .slider-content .category,
			.hero-area .slider-content .post-categories li a,
			#right-special-news .slick-prev,
			#left-special-news .slick-prev,
			.news-slider .cat-title::before,
			#hrsnews .news-title h2:before,
			#hrsnews .news-title h2:after,
			.news-column .slick-prev,
			.single-column .slick-prev,
			.layout-13 h2:before, .layout-13 h2:after,
			.navbar-nav .menu-description,
			.hero-area .owl-controls .owl-nav div:hover,
			.footer-slider .owl-controls .owl-nav div:hover,
			.special-news .title:before,
			.video-news .news-head .play,
			.news-carousel .news-head .play,
			.video-news .owl-dots .owl-dot:hover span,
			.video-news .owl-dots .owl-dot.active span,
			.news-carousel .owl-controls .owl-nav div:hover,
			.all-news-tabs .nav-main .nav-tabs li a.active, 
			.all-news-tabs .nav-main .nav-tabs li a:hover,
			.all-news-tabs .content .button a,
			.single-column .title:before,
			.news-style1.category .button .btn,
			.pagination li.active a,
			.pagination li:hover a,
			#left-special-news .count-news,
			.search-submit,
			.form-submit input:hover,
			.form-submit input,
			.footer .social li a:hover,
			.error-page,
			.blog-sidebar .tags ul li a:hover,
			.blog-sidebar .post-tab .nav li a.active,
			.blog-sidebar .post-tab .nav li a:hover,
			.blog-sidebar .single-sidebar h2 i,
			.comments-form .form-group .btn,
			.comments-form h2::before,
			.single-news .content .button a,
			.news-tabs .content .button a,
			.pagination li.active a, 
			.pagination li:hover a, 
			.pagination .page-numbers.current, 
			.pagination .page-numbers:hover {
				background-color:'.esc_attr($theme_color).';
			}
			.mainbar {
				background-color:'.esc_attr($main_background_color).';
			}
			.breadcrumbs header ul li.active a,
			#right-nav a,
			.nav-next a, .nav-previous a,
			.fa-tags:before,
			.cat-title span, .widget-title span, .footer .single-footer section h3,
			.date-time li i,
			.header-inner i,
			.main-menu .mega-menu .content h2:hover a,
			.main-menu .nav li.mega-menu .author a:hover,
			.main-menu .nav li.mega-menu .content .title-small a:hover,
			.header .search-form .form a,
			.special-news .title span,
			.video-news .news-head .play:hover,
			.news-carousel .news-head .play:hover,
			.single-column .title span,
			.single-column .cat-title span a, 
			.widget-title span a,
			.news-single .news-content blockquote::before,
			.error-page .btn:hover,
			.blog-sidebar .post-tab .post-info a:hover,
			.footer .copyright-content p a,
			.footer .copyright-content p,
			.blog-sidebar .single-sidebar ul li a:before,
			#commentform p a,
			.logo .text-logo span,
			.pagination li.active a, 
			.pagination li:hover a, 
			.pagination .page-numbers.current, 
			.pagination .page-numbers:hover,
			.owl-theme .owl-nav .owl-prev,
			.owl-theme .owl-nav .owl-next,
			#hrsnews .news-title h2
			{
				color:'.esc_attr($theme_color).';
			}
			.hrnews-stripes:after,
			.news-tabs .nav-main .nav-tabs li a.active, 
			.news-tabs .nav-main .nav-tabs li a:hover
			{
				border-bottom: 2px solid '.esc_attr($theme_color).';
			}
			.cat-title span {
				border-left-color: '.esc_attr($theme_color).';
			}
			.main-menu .nav .dropdown {
				border-top: 2px solid '.esc_attr($theme_color).';
			}
			.main-menu {
				border-top: 3px solid '.esc_attr($theme_color).';
			}

			.navbar-nav .menu-description:after {
				border-top: 5px solid '.esc_attr($theme_color).';
			}
			.special-news .title {
				border-left: 3px solid '.esc_attr($theme_color).';
			}
			.all-news-tabs .nav-main .nav-tabs {
				border-bottom: 2px solid '.esc_attr($theme_color).';
			}

			.meta-share .author img,
			.news-carousel .owl-controls .owl-nav div,
			.author .media img {
				border: 2px solid '.esc_attr($theme_color).';
			}

			.news-single .news-content blockquote {
				border-left: 5px solid '.esc_attr($theme_color).';
			}

			.comments-form .form .form-group input:hover,
			.comments-form .form .form-group textarea:hover{
				border-bottom-color: '.esc_attr($theme_color).';
			}
			.footer .social li a:hover,
			.search-submit,
			#author,#email,#url,
			.hero-area .owl-controls .owl-nav div {
				border: 1px solid '.esc_attr($theme_color).';
			}

			/*///// backgorund color ////*/

			.widget_tag_cloud .tagcloud a:hover, .blog-sidebar .tags ul li a:hover,
			.open-button,
			.hero-area button:hover {
				background-color: '.esc_attr($theme_color).';
			}

			.hero-area .slider-content .post-categories li a,
			.news-tabs .content .button a,
			.news-style1.category .button .btn,
			.all-news-tabs .nav-main .nav-tabs li a.active,
			.all-news-tabs .nav-main .nav-tabs li a:hover,
			.single-news .content .button a,
			.navbar-nav .menu-description,
			.main-menu .nav li:hover a,
			.main-menu .nav li .dropdown li a:hover,
			.main-menu .nav .dropdown li .dropdown li:hover,
			.main-menu .nav li.active a,
			.widget_tag_cloud .tagcloud a:hover, .blog-sidebar .tags ul li a:hover,
			.open-button,
			.hero-area button:hover   {
				color: '.esc_attr($theme_text_color).';
			}

			.topbar{
				background: '.esc_attr($background_color_top_header).';
			}
			.header-inner{
				background: '.esc_attr($background_color_site_title).';
			}
			.main-menu{
				background: '.esc_attr($background_color_menu).';
			}
			.news-ticker{
				background: '.esc_attr($background_color_hot_news).';
			}
			.news-style1.category .blog-sidebar, .central.container .blog-sidebar, .central.container .col-lg-3, .sidenav {
				background: '.esc_attr($background_color_sidebar).';
			}
			#content.havebgimage::before {
				background-image: url('.esc_attr($mainnews_upperslider_background_image).');
			}
			.news-grid.section.havebgimage{
				background-image: url('.esc_attr($color_newsmagazine_block_4_image).');
			}

			.site-title a ,
			p.site-description {
				font-family:'.esc_attr($site_font_family).'! important;
			}
			.owl-stage-outer .owl-stage .single-ticker  a,
			.news-ticker .ticker-title,
			.main-menu, .main-menu .nav li .dropdown li a, .main-menu .nav li a,
			.header-bottom, .date-time li
			{
				font-family:'.esc_attr($header_font_family).'! important;
			}
			.cat-title span, .all-news-tabs .nav-main .nav-tabs li a,
			.widget-title span,
			.widget section h1, .widget section h2, .widget section h3, .widget section h4, .widget section h5, .widget section h6,
			#hrsnews .news-title h2,
			.news-tabs .nav-main .nav-tabs li a	{
				font-family:'.esc_attr($section_font_family).'! important;
			}
			.title-medium a, 
			.small-title a, 
			.title-small a,
			.hero-area .slider-content .post-categories li a,
			.hero-area .slider-text h3 a,
			.meta .author a,
			.meta .date a,
			.hero-area .meta .author,
			.meta span,
			.hero-area .meta .date,
			a.post-categories,
			.media .author a,
			.hrsnewsbox a,
			#hrsnews .timehr span
			{
				font-family:'.esc_attr($post_font_family).'! important;
			}
			.widget_tag_cloud .tagcloud a,
			.single-sidebar ul li a,
			.single-sidebar ul li ,
			.single-sidebar .textwidget,
			.single-sidebar .widget_tag_cloud .tagcloud a,
			.post-tab .post-info h4,
			.post-tab .post-info .meta,
			.single-sidebar form,
			.single-sidebar .calendar_wrap table caption,
			.single-sidebar .calendar_wrap table thead th,
			.single-sidebar .calendar_wrap table tbody td,
			.single-sidebar p
			{
				font-family:'.esc_attr($widgetlist_font_family).'! important;
			}
			.content, .slider-content, .news-content, .comments-area, .news-content p, 
			.author-profile p, .single-sidebar .content p
			{
				font-family:'.esc_attr($section_description_font_family).'! important;
			}
			footer h3,
			footer .author,
			footer a,
			footer.footer,
			footer.footer p,
			footer.footer .date,
			footer.footer .meta,
			footer.footer .calendar_wrap table caption,
			footer.footer div a,
			footer.footer .single-footer h2,
			footer.footer .single-footer .cat-title span,
			.footer .single-news h4 a,
			footer .single-footer h3 
			{
				font-family:'.esc_attr($footer_font_family).'! important;
			}
		';

		return apply_filters( 'color_newsmagazine_color_font_css', $theme_css);
}