jQuery(document).ready(function ($) {
    var page = 1;
    jQuery('.loadmorebtn-cust').on('click',function (e) {
        e.preventDefault();
        page++;
        var cat = jQuery(this).data('cat');
        var post_no = jQuery(this).data('post_no');
        var author_1 = jQuery(this).data('author_1');
        var orderby = jQuery(this).data('orderby');
        var date_enable = jQuery(this).data('date_enable');
        var comment_enable = jQuery(this).data('comment_enable');
        var post_read_enable = jQuery(this).data('post_read_enable');
        var excerpt = jQuery(this).data('excerpt');  

        jQuery.ajax({
            url:  ajaxwidgetLayoutCust1.ajaxurl,
            type: "GET",
            async: true,
            cache: false,
            data: {
                action: 'color_newsmagazine_newlayout1',
                cat: cat,
                post_no: post_no,
                author_1: author_1,
                orderby: orderby,
                comment_enable: comment_enable,
                date_enable: date_enable,
                post_read_enable: post_read_enable,
                excerpt: excerpt,
                paged:page,
            },                    
            success: function (data) {
                jQuery('#newslayout-1').append(data.html);

                if (data.page < data.maxpage) {
                    jQuery ('#support_more-newslayout-1 .pagination-number p').html('More Stories');
                
                } else if (data.page == data.maxpage){
                    jQuery( '#support_more-newslayout-1 .pagination-number p').html('End');
                
                // } else if (data.page > data.maxpage){
                //     // page = 1;
                //     jQuery( '.extra_page_close').css('display', 'none');
                // //     // jQuery('.pagination-number').html('1 ' + 'Page of ' + maxpage_stored);
                //     jQuery('#support_more-' + widget_id_jquery + ' ' + '.pagination-number').html('End start again','color-newsmagazine');
                }
            }
        }); 
    });
});