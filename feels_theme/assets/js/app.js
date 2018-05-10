jQuery(function ($) {
  $(document).foundation();

  $(".header-quickcart").hide();
	$(".cart-contents").click(function(){
		$(".header-quickcart").slideToggle(350);
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


  $('.quantity').on('click', '.plus', function(e) {
    $input = $(this).prev('input.qty');
    var val = parseInt($input.val());
    $input.val( val+1 ).change();
    });
    $('.quantity').on('click', '.minus',
    function(e) {
    $input = $(this).next('input.qty');
    var val = parseInt($input.val());
    if (val > 0) {
    $input.val( val-1 ).change();
    }
  });
});
  // FontAwesomeConfig = { searchPseudoElements: true };