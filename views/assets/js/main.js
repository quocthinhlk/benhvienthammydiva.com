/* Back to top */
jQuery(window).scroll(function(){
    if (window.pageYOffset > 100){
        jQuery(".go-to-top").css("display","flex");
        jQuery(".header_bar").addClass("header_bar_active");
    } else {
        jQuery(".go-to-top").css("display","none");
        jQuery(".header_bar").removeClass("header_bar_active");
    }
});

jQuery(document).ready(function ($) {
    "use strict";
    /* Scroll to top */
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/*Open gallery*/
jQuery(document).ready(function(){
    jQuery(".open-image").on('click', function() {
      jQuery(".custom-model-main").addClass('model-open');
      var src = jQuery(this).attr('data');
      jQuery(".pop-up-content-data").attr("src", src);
    }); 
    jQuery(".close-btn, .bg-overlay").click(function(){
      jQuery(".custom-model-main").removeClass('model-open');
    });
});

/*Button search*/
jQuery(document).ready(function($){
  //open popup
  jQuery('.popup-search-btn').on('click', function(event){
    event.preventDefault();
    jQuery('.popup-search').addClass('is-visible');
  });
  
  //close popup
  jQuery('.popup-search').on('click', function(event){
    if( jQuery(event.target).is('.popup-close') || jQuery(event.target).is('.popup-search') ) {
      event.preventDefault();
      jQuery(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  jQuery(document).keyup(function(event){
      if(event.which=='27'){
        jQuery('.popup-search').removeClass('is-visible');
      }
    });
});