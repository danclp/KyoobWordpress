jQuery(document).ready(function($) {
	$('.showcase-thumbnails').owlCarousel({
		// loop: true,
		// nav: true,
		dots: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2
			},
			768: {
				items: 3
			}
		}
	});

	// Counter
	$('.satistic span').counterUp({
		delay: 10,
		time: 1000
	});
});