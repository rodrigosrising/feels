// The jQuery script that makes the Arrows for quantity work.
jQuery(document).ready(function($) {

  function enable_update_cart() {
    $('[name="update_cart"]').removeAttr('disabled');
  }

  function quantity_step_btn() {
      var timeoutPlus;
      $('.quantity .step-btn.plus').one().on('click', function() {
          $input = $(this).prev('input.qty');
          var val = parseInt($input.val());
          var step = $input.attr('step');
          step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
          $input.val( val + step ).change();

          if( timeoutPlus != undefined ) {
              clearTimeout(timeoutPlus)
          }
          timeoutPlus = setTimeout(function(){
              $('[name="update_cart"]').trigger('click');
          }, 1000);
      });

      var timeoutMinus;
      $('.quantity .step-btn.minus').one().on('click', function() {
          $input = $(this).next('input.qty');
          var val = parseInt($input.val());
          var step = $input.attr('step');
          step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
          if (val > 1) {
              $input.val( val - step ).change();
          }

          if( timeoutMinus != undefined ) {
              clearTimeout(timeoutMinus)
          }
          timeoutMinus = setTimeout(function(){
              $('[name="update_cart"]').trigger('click');
          }, 1000);
      });

      var timeoutInput;
      jQuery('div.woocommerce').on('change', '.qty', function(){
          if( timeoutInput != undefined ) {
              clearTimeout(timeoutInput)
          }
          timeoutInput = setTimeout(function(){
              $('[name="update_cart"]').trigger('click');
          }, 1000);
      });
  }

  $(document).ready(function() {
      enable_update_cart();
      quantity_step_btn();
  });

  jQuery( document ).on( 'updated_cart_totals', function() {
      enable_update_cart();
      quantity_step_btn();
  });
});

jQuery(function ($) {
  $(document).foundation();

  $(".cart-popup").hide();
	$(".cart-head").click(function(){
		$(".cart-popup").slideToggle(350);
	});

  $('.owl-home-slides').owlCarousel({
    items:1,
    loop:true,
    dots:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    mouseDrag: false,
    touchDrag: true,
  });


  $('.owl-produtos-destaques').owlCarousel({
    loop:true,
    dots:false,
    nav: true,
    navText : ['<i class="fas fa-angle-left" aria-hidden="true"></i>','<i class="fas fa-angle-right" aria-hidden="true"></i>'],
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true,
        dots: false
      },
      640:{
        items:2
      },
      1024:{
        items:3
      },
      1200:{
        items:4
      }
    }
  });


  $(".search-button").click(function(){
    $(".search-overlay").addClass("search-overlay--active");
    $(".body").addClass("overflow-hidden");
  });
  $(".search-overlay__close").click(function(){
    $(".search-overlay").removeClass("search-overlay--active");
    $(".body").removeClass("overflow-hidden");
	});
  $(document).keydown(function(e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
      $(".search-overlay").removeClass("search-overlay--active");
      $(".body").removeClass("overflow-hidden");
    }
  });

});
  // FontAwesomeConfig = { searchPseudoElements: true };

