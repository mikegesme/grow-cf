(function($) {
})( jQuery );

jQuery(".modal-trigger").on("click", function() {

  // State changes
  jQuery("body").toggleClass("dialogIsOpen");

});

jQuery(document).ready(function( $ ) {
/*
	function goRight() {
		firstTestimonial = $('.testimonial-section').children('.testimonial').first('.testimonial').get();
		$('.testimonial-section').append(firstTestimonial).hide().fadeIn(500);		
	};

	setInterval(function(){goRight()}, 3000);
*/

	$(".owl-carousel").owlCarousel({
 
     autoPlay: 10000, //Set AutoPlay to 3 seconds
 
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2],
      itemsMobile : [479, 1]
 
  });
});
