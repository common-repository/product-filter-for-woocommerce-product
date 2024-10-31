jQuery(document).ready(function() {
    jQuery("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        jQuery(this).siblings('a.active').removeClass("active");
        jQuery(this).addClass("active");
        var index = jQuery(this).index();
        jQuery("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        jQuery("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        jQuery('html, body').animate({scrollTop:0}, 'slow');
    });
});
var $ =jQuery.noConflict();
$(document).ready(function(){
  /* Remove a tag */
  $('.tabs-list li').find('a').each(function(){
      if($(this).is(':empty'))
          $(this).remove();
  });
  
  $(".tabs-list li a").click(function(e){
     e.preventDefault();
  });

  $(".tabs-list li").click(function(){
     var tabid = $(this).find("a").attr("href");
     $(".tabs-list li,.tabs div.tab").removeClass("active");   // removing active class from tab
     $(".tab").hide();   // hiding open tab
     $(tabid).show();    // show tab
     $(this).addClass("active"); //  adding active class to clicked tab

  });

});
$(".wpspf_search_reset").click(function(){
  if (confirm('You are performing reset operation. Are you sure?')) {
        $.ajax({
                type: "POST",
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {
                    'action':'wpspf_settings_reset',
                    'settings_elements' : 'search'
                },
                dataType: "text",
                success: function(msg){
                    location.reload();
                }
            });
    }
    else{
      return false;
    }
});
$(".wpspf_attr_reset").click(function(){
  if (confirm('Are You Want To Reset The Settings of Attribute?')) {
        $.ajax({
                type: "POST",
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {
                    'action':'wpspf_settings_reset',
                    'settings_elements' : 'attribute'
                },
                dataType: "text",
                success: function(msg){
                    location.reload();
                }
            });
    }
    else{
      return false;
    }
});
$(".wpspf_cat_reset").click(function(){
  if (confirm('You are performing reset operation. Are you sure?')) {
        $.ajax({
                type: "POST",
                url: "<?php echo admin_url('admin-ajax.php'); ?>",
                data: {
                    'action':'wpspf_settings_reset',
                    'settings_elements' : 'category'
                },
                dataType: "text",
                success: function(msg){
                    location.reload();
                }
            });
    }
    else{
      return false;
    }
});