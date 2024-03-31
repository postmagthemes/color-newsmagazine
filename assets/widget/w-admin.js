jQuery(document).ready(function(jQuery) {
     // Counter section
    var count = 0;
    jQuery("body").on('click','.color-newsmagazine-add-footer-social', function(e) {
        e.preventDefault();
        var additional = jQuery(this).parent().parent().find('.color-newsmagazine-additional-footer-social');
        var container = jQuery(this).parent().parent().parent().parent();

        var container_class = container.attr('id');

        var arr = container_class.split('-');

        var val=  arr[1].split('_');

        val.shift();

        var liver=  val.join('_')

        var container_class_array = container_class.split(liver+"-");
        var instance = container_class_array[1];
        var add = jQuery(this).parent().parent().find('.color-newsmagazine-add-footer-social');
        count = additional.find('.color-newsmagazine-sec-footer-social').length;

        additional.append(
            '<div class="color-newsmagazine-sec-footer-social color-newsmagazine-sec"><div class="sub-option section widget-upload">'+
            '<label for="widget-'+liver+'-'+instance+'-repeaters-'+count+'-social_icon">Social Icon(Use font awesome icon:  <a href="https://fontawesome.com/"  target="_blank">See more here</a>)</label>'+
            '<input type="text" class="widefat" id="widget-'+liver+'-'+instance+'-repeaters-'+count+'-social_icon"'+
            'name="widget-'+liver+'['+instance+'][repeaters]['+count+'][social_icon]">'+
            '<label for="widget-'+liver+'-'+instance+'-repeaters-'+count+'-social_url">Social Url</label>'+
            '<input type="text" class="widefat" id="widget-'+liver+'-'+instance+'-repeaters-'+count+'-social_url"'+
            'name="widget-'+liver+'['+instance+'][repeaters]['+count+'][social_url]">'+
            '<a class="color-newsmagazine-remove delete">Remove Section</a></div></div>' );
        }); 

    jQuery(".isha-remove").on('click', function() {
        jQuery(this).parent().parent().remove();
        jQuery('input[name="savewidget"]').removeAttr('disabled');
    });
});