// gsap animation
jQuery(document).ready(function($) {
    var controller = new ScrollMagic.Controller(),
        animateIn = new TimelineMax();

    animateIn
    .from(".about-section_contents", 1, {autoAlpha: 0, x:60, ease: Power1.easeOut})

    // Make a scrollMagic Scene
    var scene = new ScrollMagic.Scene({
        triggerElement: ".about-section",
        // duration: "80%",
        triggerHook: 0.35
    })

    // .addIndicators()
    .setTween(animateIn).addTo(controller);

    var controller = new ScrollMagic.Controller(),
        slideUp = new TimelineMax();

    slideUp
    .from(".work-section_category", 1, {autoAlpha: 0, y:60, ease: Power1.easeIn})

    var scene = new ScrollMagic.Scene({
        triggerElement: ".work-section",
        triggerHook: 0.5
    })

    // .addIndicators()
    .setTween(slideUp).addTo(controller);

    var controller = new ScrollMagic.Controller(),
        fadeIn = new TimelineMax();

    fadeIn
    .from(".contact-section", 1, {autoAlpha: 0, y:60, ease: Power1.easeIn})

    var scene = new ScrollMagic.Scene({
        triggerElement: ".contact-section",
        triggerHook: 0.6
    })

    // .addIndicators()
    .setTween(fadeIn).addTo(controller);
});