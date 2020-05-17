jQuery(document).ready(function($) {

	// show header on scrolling
	// Hide Header on on scroll down
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();

	$(window).scroll(function(event){
		didScroll = true;
	});

	setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
	}, 500);

	function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
      }
    }
    
    lastScrollTop = st;
	}

	// add nav on toggle click
	var dropdown = $('.toggle, .main-nav_wrap');
	$('.toggleWrap').click(function() {
		if(dropdown.hasClass('active')) {
			dropdown.removeClass('active');
		} else {
			dropdown.addClass('active');
		}
	});

	// Set footer position
	$(window).scroll(function() {
		var scroll = $(window).scrollTop(),
				obj = $('.social-media');

		if(scroll >= 300) {
			obj.addClass('fixed');
		} else {
			obj.removeClass('fixed');
		}
	});

	// Set Hero position fixes
	$(window).scroll(function() {
		var scroll = $(window).scrollTop(),
				obj = $('.single .hero');

		if(scroll >= 50) {
			obj.addClass('fixed');
		} else {
			obj.removeClass('fixed');
		}
	});

	// Create opacity to slide show and hero
	$(document).scroll(function() {
		var hero = $('.hero-slide_wrap, .hero-image');

		scroll_pos = $(this).scrollTop();
		opacity = 1 - (scroll_pos / 500);
		if(opacity > 0) {
			hero.css({'opacity': opacity});
		} else {
			hero.css({'opacity': opacity});
		}
	});

});