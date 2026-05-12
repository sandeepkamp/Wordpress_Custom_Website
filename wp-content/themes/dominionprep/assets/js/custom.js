
jQuery(".our-team-carousel").owlCarousel({
	navigation: true,
	nav: true,
	dots: false,
	center: true,
	loop: true,
	margin: 30,
	autoplay: 1000,
	autoPlaySpeed: 1000,
	autoPlayTimeout: 1000,
	autoplayHoverPause: false,

	// autoWidth:true
	responsive: {
		// breakpoint from 0 up
		1920: { items: 3 },
		1366: { items: 3 },
		1280: { items: 3 },
		0: { items: 3 },
		991: { items: 1 },
		767: { items: 1 },
		576: { items: 1 },
		480: { items: 1 },
		360: { items: 1 },
		320: { items: 1 }
	}
});
jQuery('#cascade-slider').cascadeSlider({

}, setInterval(autoplay, 90000000));
function autoplay() {
	jQuery('#next').click();
}
jQuery('.cascade-slider_arrow-right').addClass("slider-icon-active");
jQuery('.cascade-slider_arrow-right').click(function () {
	jQuery('.cascade-slider_arrow-right').removeClass("slider-icon-active");
});
jQuery('.our-team.dark-mode .owl-nav .owl-next').addClass("owl-icon-active");
jQuery('.our-team.dark-mode .owl-nav .owl-next').click(function () {
	jQuery('.our-team.dark-mode .owl-nav .owl-next').removeClass("owl-icon-active");
});

// Navbar Animation

jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 1) {

        jQuery("header").addClass("background-add");
        jQuery(".header-nav").addClass("scroll-nav");
        jQuery(".logo-1").addClass("shrinked-logo");

    }
	else{
		jQuery("header").removeClass("background-add");
		jQuery(".header-nav").removeClass("scroll-nav");
		jQuery(".logo-1").removeClass("shrinked-logo");
	}
});

$(".is-empty").submit(function (e) {

	//stop submitting the form to see the disabled button effect
	e.preventDefault();

	console.log('Stop submit enter keyword.');

});
