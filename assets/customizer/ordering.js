jQuery(document).ready(function($){

    /********************************************/
    /* AJAX SAVE FORM */
    /********************************************/
    $(document).ready(function() {
       $('#theme-options-form').submit(function() { 
          $(this).ajaxSubmit({
             onLoading: $('.loader').show(),
             success: function(){
                $('.loader').hide();
                $('#save-result').fadeIn();
                setTimeout(function() {
                    $('#save-result').fadeOut('fast');
                }, 2000);
             }, 
             timeout: 5000
          }); 
          return false; 
       });
    });
    
    /********************************************/
    /* SORTABLE FILTER FIELDS */
    /********************************************/
  
    $(document).ready(function () {

        $('.filter-fields-list').sortable({
            axis: 'y',
            curosr: 'move',
            update:function(){
                $.ajax({
                    type: "POST",
                    url: "options.php",
                    data: $("#theme-options-form").serialize(),
                    cache: false,
                    success: function(html) {
                    var api = wp.customize;
                    api.previewer.refresh();
                    }
                });
            }
        });
    });


});