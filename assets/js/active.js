/*==================================
File Name: active.js 
Description: Handle all other custom js made by theme author for this theme color newsmagazine
====================================*/    
(function(jQuery) {
    "use strict";

    jQuery(document).on('ready', function() {	
		
		/*====================================
			Main Slider & Carousel
		======================================*/ 
		if (jQuery.fn.slick) {
			jQuery(".home-slider").slick({
				autoplay: true ,
				speed: 700,
				autoplaySpeed: 3000,
				slidesToShow: 1,
				pauseOnHover: true,
				dots: false,
				arrows:true,
				cssEase: 'linear',
                animateIn: 'fadeIn',
                animateOut: 'fadeOutLeft',
				draggable: true,
				prevArrow: '<button class="PrevArrow fas fa-angle-left"></button>',
				nextArrow: '<button class="NextArrow fas fa-angle-right"></button>',
				responsive: [{
						breakpoint: 700,
						settings: {
							arrows:true
						}
					},
				]
			});
		};

		
		/*==============================
			Sick-slider for side news right vertical
		================================*/ 	
		jQuery('.responsive-right').slick({
			arrows:true,
			vertical: true,
			verticalSwiping: true,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 2000,
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplaySpeed: 2000,
			easing: 'linear',
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1150,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 2,
						vertical: true,
						arrows:true,
					},
					
				},
				{
					breakpoint: 1025,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						infinite: true,
						vertical: true,
						arrows:true,
					},
					
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						vertical: false,
						autoplay: true,
						arrows:true,
					}
				},
				{
					breakpoint: 769,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						vertical: false,
						autoplay: true,
						arrows:true,
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows:true,
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});

			/*==============================
			Sick-slider for side news left vertical
		================================*/ 	

		jQuery('.responsive-left').slick({
			arrows:true,
			vertical: true,
			verticalSwiping: true,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 1700,
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1025,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2,
						infinite: true,
						autoplay: true,
						
					},
					
				},
				
				{
					breakpoint: 769,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
						autoplay: true,
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						autoplay: true,
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});

		/*==============================
			Sick-slider for layout5 vertical
		================================*/ 	
		jQuery('.responsive-layout5 ').slick({
			arrows:true,
			vertical: true,
			verticalSwiping: true,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 900,
			slidesToShow: 2,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 3,
						infinite: true,
						dots: false
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});

		jQuery('.responsive-layout9').slick({
			arrows:true,
			vertical: true,
			verticalSwiping: true,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 1500,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
		
		/*==============================
			Small-slider below News slider
		================================*/ 	
		
		jQuery('.owl-carousel-header').slick({
			arrows:false,
			vertical: false,
			verticalSwiping: false,
			autoplay: true,
			autoplayHoverPause:true,
			dots: true,
			infinite: true,
			speed: 2500,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1020,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
					}
				}
			]
		});
		
		
		/*==============================
			video-slider below big video layout3
		================================*/ 	
		
		jQuery('.video-slider').slick({
			arrows:false,
			vertical: false,
			verticalSwiping: false,
			autoplay: true,
			autoplayHoverPause:true,
			dots: true,
			infinite: true,
			speed: 2500,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-down"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-up"></button>',
			responsive: [
				{
					breakpoint: 1020,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
		
		
		/*==============================
			block six slider
		================================*/ 	
		
		jQuery('.carousel-slider').slick({
			arrows:true,
			vertical: false,
			verticalSwiping: false,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 800,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: '<div class="PrevArrow slick-next fas fa-angle-right"></div>',
			nextArrow: '<div class="NextArrow slick-prev fas fa-angle-left"></div>',
			responsive: [
				{
					breakpoint: 1020,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});
		


		/*==============================
			header slider at single page
		================================*/ 	
		
		jQuery('.owl-carousel-singlepage').slick({
			arrows:true,
			vertical: false,
			verticalSwiping: false,
			autoplay: true,
			autoplayHoverPause:true,
			dots: false,
			infinite: true,
			speed: 800,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<button class="PrevArrow slick-next fas fa-angle-double-right"></button>',
			nextArrow: '<button class="NextArrow slick-prev fas fa-angle-double-left"></button>',
			responsive: [
				{
					breakpoint: 1170,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
					}
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
		});

		/*==============================
			Mobile Navslicknav_menu
		================================*/ 	

		jQuery('.menu').slicknav({
			prependTo:".mobile-nav",
			allowParentLinks: true,
			duration: 600,
			closeOnClick:true,
		});
		// this makes focus on toggle button after tab or shift tab on first or last link of drop down menu keyboard navigation
		jQuery('.slicknav_menu li:last a').focusout(function(){
			var color_newsmagazine_keypress;
			color_newsmagazine_keypress = "nowfocusout";
			if(screen.width < 992 || jQuery( window ).width() < 992 ){
				jQuery(document).keyup(function (e) {
					if (e.which === 9 && e.shiftKey) {
					} else if (e.which === 9 && color_newsmagazine_keypress =='nowfocusout'){
						jQuery(".slicknav_menu .slicknav_btn").focus();
						color_newsmagazine_keypress = "stillfocus";
					}
				});
			}
		}); 

		// this makes toggle button closed and remain focused in button keyboard navigation after closed menu in mobile view
		jQuery('.slicknav_btn').focusout(function()   {	
			if(screen.width < 992 || jQuery( window ).width() < 992 ){
				jQuery(document).keyup(function (e) {
					if (e.which === 9) {

					} else if ( e.which === 13){
						if (jQuery('.slicknav_btn').hasClass('slicknav_collapsed') ){
							jQuery(".slicknav_btn").focus();
						}
					};
				});
			}
		});

		jQuery('.slicknav_open ').focus(function()   {	
			alert('asdfs');
			this.blur();
		});
		
		/*====================================
			Search Form JS
		======================================*/ 	
		jQuery('.search-form .icon').on( "click", function(){
			jQuery('.search-form').toggleClass('active');
		});	
		
		/*===============================
			Ticker Slider
		=================================*/ 
		jQuery('.ticker-slider').slick({
			speed: 5000,
			autoplay: true,
			autoplaySpeed: 0,
			centerMode: true,
			cssEase: 'linear',
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
			infinite: true,
			initialSlide: 1,
			arrows: false,
			buttons: false
		});
		
		/*=====================================
		20. Video Popup
		======================================*/ 
		jQuery('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});

		/*=====================================
		 Verticle slider for footer
		======================================*/ 
		jQuery(' .slider-for ').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav',
			autoplay: true,
		  });
		  jQuery('.slider-nav').slick({
			arrows:true,
			vertical: true,
			verticalSwiping: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: true,
			focusOnSelect: true,
		  });
		
		/*====================================
			Scrool Up
		======================================*/ 	
		jQuery.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			scrollText: ["<i class='fas fa-angle-double-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});
		
	});	

	/*====================================
		Extra JS
	======================================*/ 
	jQuery('.a').on("click", function (e) {
		var anchor = jQuery(this);
			jQuery('html, body').stop().animate({
				scrollTop: jQuery(anchor.attr('href')).offset().top - 70
			}, 1000);
		e.preventDefault();
	});
		
	/*====================================
		Preloader JS
	======================================*/
        
	jQuery(window).on('load', function() {
			
			jQuery('.template-preloader-rapper').fadeOut('fast', function(){
			jQuery(this).remove();
			
		});
	});
	
	jQuery(".popular").click(function(){
			jQuery(".custom-widget-comments").removeClass("active");
			jQuery("#popular").addClass("active");
	});

	jQuery(".comments").click(function(){
			jQuery("#popular").removeClass("active");
			jQuery(".custom-widget-comments").addClass("active");
	});

	/*====================================
		Media uploader
	======================================*/

	var at_document = jQuery(document);

	at_document.on('click','.media-image-upload', function(e){

		// Prevents the default action from occuring.
		e.preventDefault();
		var media_image_upload = jQuery(this);
		var media_title = jQuery(this).data('title');
		var media_button = jQuery(this).data('button');
		var media_input_val = jQuery(this).prev();
		var media_image_url_value = jQuery(this).prev().prev().children('img');
		var media_image_url = jQuery(this).siblings('.img-preview-wrap');

		var meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
			title: media_title,
			button: { text:  media_button },
			library: { type: 'image' }
		});
		// Opens the media library frame.
		meta_image_frame.open();
		// Runs when an image is selected.
		meta_image_frame.on('select', function(){

			// Grabs the attachment selection and creates a JSON representation of the model.
			var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

			// Sends the attachment URL to our custom image input field.
			media_input_val.val(media_attachment.url);
			if( media_image_url_value !== null ){
				media_image_url_value.attr( 'src', media_attachment.url );
				media_image_url.show();
				LATESTVALUE(media_image_upload.closest("p"));
			}
		});
	});

	// Runs when the image button is clicked.
	jQuery('body').on('click','.media-image-remove', function(e){
		jQuery(this).siblings('.img-preview-wrap').hide();
		jQuery(this).prev().prev().val('');
	});

	var LATESTVALUE = function (wrapObject) {
		wrapObject.find('[name]').each(function(){
			jQuery(this).trigger('change');
		});
	};

	function matchHeight(mainClass){

		var section_length1 = jQuery(mainClass).length; 
	
		//Assign variable to push all height of columns 
		var column_height_array1 = [];

		// reset the value
		column_height_array1.length = 0;

		//Loop for push height of each column
		for(var i=0;i< section_length1;i++){
			column_height_array1.push(jQuery(mainClass+':eq('+i+')').outerHeight()); 
		}
		//Get maximum height of the column
		var column_max_height1 = Math.max.apply(Math,column_height_array1);   
		// alert (column_max_height1);
	
		jQuery(mainClass).css('min-height',column_max_height1+'px');
	}

	
	jQuery(window).on('load', function() {
		// Both left and right news height matching externally
		// matchHeight('.news-slider .blog-head');
		// left news and right news height matching internally itself
		matchHeight('#left-special-news article .single-news');
		matchHeight('#right-special-news article .single-news');
		// // Layout 1 jquery match height
		// matchHeight('.news-style1 .blog-head');
		// // Layout 6 jquery match height
		matchHeight('.news-carousel .blog-head')
		// // For news layout 5a
		matchHeight('.news-column .single-news');
		// // For news layout 5b
		matchHeight('.responsive-layout5 .single-post');
		// For news layout 9
		matchHeight('.single-column .single-news');
		// For archive and search type
		matchHeight('#archive #blog-archive .single-news.content');
	});

	jQuery(window).bind('resize', function(e){
		window.resizeEvt;
		jQuery(window).resize(function(){
			clearTimeout(window.resizeEvt);
			window.resizeEvt = setTimeout(function(){
			var w = window.outerWidth;
			jQuery('#left-special-news article .single-news').css('min-height','115px');
			jQuery('#right-special-news article .single-news').css('min-height','290px');
			jQuery('.responsive-layout5 .single-post').css('min-height','110px');
			jQuery('.single-column .single-news').css('min-height','120px');
			
			// // Layout both left and right news jquery match height
			matchHeight('#left-special-news article .single-news');
			matchHeight('#right-special-news article .single-news');
			// // Layout 6 jquery match height
			matchHeight('.news-carousel .blog-head')
			// // For news layout 5a
			matchHeight('.news-column .single-news');
			// // For news layout 5b
			matchHeight('.responsive-layout5 .single-post');
			// // For news layout 9
			matchHeight('.single-column .single-news');
			
			matchHeight('#archive #blog-archive .single-news.content');
		}, 50);
		});
	});
	/** menu over bug fixed */
	jQuery('#site-navigation').on('keydown', function (e) {
		if ((e.which === 9 && !e.shiftKey)) {
		  // e.preventDefault();
		  jQuery('.main-menu .nav .dropdown li').css('opacity','1');
		  jQuery('.main-menu .nav .dropdown li').css('visibility','visible');
		}

	});
	/** menu over bug fixed  after focus*/
	jQuery( ".main-menu .nav .dropdown li" ).hover(
		function() {
		  jQuery('.main-menu .nav .dropdown li').css('opacity','');
		  jQuery('.main-menu .nav .dropdown li').css('visibility','');
		}
	);
	jQuery(window).scroll(function() { 		
	// get the height of window and height of sidebar and apply css
		jQuery('aside.blog-sidebar').css('top', -(jQuery("aside.blog-sidebar").innerHeight() - window.innerHeight) + 'px');
	}); 

	// Trap Tab focus inside the read more modal 
	
	jQuery.expr[':'].focusable = function (elem, i, argument) {
	    return jQuery(elem).is('input, button, a');
	};

	jQuery(document).ready(function () {

	    // To improve accessibility, trap focus within a Bootstrap modal dialog
	    // when it's open, and release it when the modal closes.
	    // Add a handler to the Boostrap 3 "show" event. When the dialog opens,
	    // the focus is set to the dialog's first focusable element. This should
	    // typically be the close button in the upper right corner.
	    // To trap focus within the dialog, we also attach a handler to the
	    // "focusin" event at document level. When focus moves to any control
	    // outside the dialog, we move it back to the focus point.
	    // A handler on the Bootstrap "hide" event removes the "focusin" handler
	    // when the dialog closes.
	    //
	    // We attach the handler to the body element with a .modal selector to
	    // handle dynamically created dialogs (via Knockout or similar).
	    jQuery("body").on("show.bs.modal", ".modal", function (e) {

	        // Save reference to the dialog element
	        var dialog = e.target;

	        // Get the first focusable element in the dialog, and focus there.
	        // var focuspoint = jQuery(":focusable", dialog).first();
	        var firstTabbable =  jQuery(":focusable", dialog).first();
    		var lastTabbable =  jQuery(":focusable", dialog).last();

	        console.log(firstTabbable);
	        firstTabbable.focus();

	        // If focus moves to a control outside the dialog, move it back.
	        jQuery(document).on("focusin.bft", function (e) {
	           lastTabbable.on('keydown', function (e) {
			       if ((e.which === 9 && !e.shiftKey)) {
			           e.preventDefault();
			           firstTabbable.focus();
			       }
			    });

			    /*redirect first shift+tab to last input*/
			    firstTabbable.on('keydown', function (e) {
			        if ((e.which === 9 && e.shiftKey)) {
			            e.preventDefault();
			            lastTabbable.focus();
			        }
			    });
	        });
	    });

	    // Stop focus trapping when dialog is closed
	    jQuery("body").on("hide.bs.modal", ".modal", function (e) {
	        jQuery(document).off("focusin.bft");
	    });

	    // remove blue border when click in a link

	})
	// End of traping modal
	jQuery('a').mouseenter(function() {
		jQuery(this).css('outline','none');
	  });

	  new WOW().init();
	  jQuery( window ).on('scroll', function(){

		var scrollTop = jQuery(this).scrollTop();
		jQuery( '.hscroll' ).css({
		  transform: 'translateX('+  ( -1 * scrollTop ) +'px)',
		});
  
	  });
	  
})(jQuery);

addEventListener('activate', event => {
	event.waitUntil(async function() {
	  if (self.registration.navigationPreload) {
		// Enable navigation preloads!
		await self.registration.navigationPreload.enable();
	  }
	}());
  });
addEventListener('fetch', event => {
event.respondWith(async function() {
	// Respond from the cache if we can
	const cachedResponse = await caches.match(event.request);
	if (cachedResponse) return cachedResponse;

	// Else, use the preloaded response, if it's there
	const response = await event.preloadResponse;
	if (response) return response;

	// Else try the network.
	return fetch(event.request);
}());
});

