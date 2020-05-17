jQuery(document).ready(function() {
	// gsap animation
	// Hero Header
	var controller = new ScrollMagic.Controller(),
			moveDown = new TimelineMax();

	moveDown
	.to(".hero-image h2", 1, {autoAlpha: 0, y:60, ease: Power1.easeOut})

	// Make a scrollMagic Scene
	var scene = new ScrollMagic.Scene({
		triggerElement: ".contents",
		// duration: "80%",
		triggerHook: 0.85
	})

	// .addIndicators()
	.setTween(moveDown).addTo(controller);

	// Services
	var controller = new ScrollMagic.Controller(),
			slideUp = new TimelineMax();

	slideUp
	.from(".services-title", 1, {autoAlpha: 0, y: 80, ease: Power1.easeIn})
	.from(".services-brief_text", 1, {autoAlpha: 0, y: 60, ease: Power1.easeIn})

	// Make a scrollMagic Scene
	var scene = new ScrollMagic.Scene({
		triggerElement: ".services-brief",
		// duration: "80%",
		triggerHook: 0.65
	})

	// .addIndicators()
	.setTween(slideUp).addTo(controller);
});