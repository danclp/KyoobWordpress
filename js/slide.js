jQuery(document).ready(function($) {

	// Set Carousel using Background-image
	// To calculate the window height
	var wheight = $(window).height();
	$('.hero-slide_wrap').css('height', wheight);

	// To replace IMG inside carousel with background image
	var slideIMG = $('.slide-container img');
	slideIMG.each(function() {
		var imgSrc = $(this).attr('src');
		$(this).parent().css({
			'background-image': 'url('+imgSrc+')'
		});
		$(this).remove();
	});

	// $('.hero-slide_wrap').owlCarousel({
	// 	autoplay: true,
	// 	dots: true,
	// 	items: 1,
	// 	loop: true
	// });

	// To adjust window height when window resize
	$(window).resize(function() {
		wheight = $(window).height();
		$('.hero-slide_wrap').css('height', wheight);
	});

});