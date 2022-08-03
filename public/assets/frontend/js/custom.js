/* Testimonial Slider Section S */

var owlBannerSliderMain = 1, owlContactClassName = '.testimonial-slider';
var owlContactLoop = false,
    owlContactItemLength = $(owlContactClassName + ' .owl-carousel .item').length,
    owlContactBanner = $(owlContactClassName + ' .owl-carousel');
if (owlContactItemLength < owlBannerSliderMain) { $(owlContactClassName).find('.owl-controls').css('display', 'none');}
if (owlContactItemLength > owlBannerSliderMain) { owlContactLoop = true; } else { owlContactLoop = false; }

owlContactBanner.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    loop: owlContactLoop,
    // mouseDrag: false,
    // touchDrag: false,
    pullDrag: false,
    margin: 0,
    navText: ["<i class='icon-arrow-left' title='Previous'></i>","<i class='icon-arrow-right' title='Next'></i>"],
    autoplay: true,
    autoplayHoverPause: false,
    autoplayTimeout: 1000,
    smartSpeed: 4000,
    responsive: {
        0: { items: 1, dots: false, nav: false },
    }
});

/* Testimonial Slider Section E */

/* Recent News Slider Section S */

var owlBannerSliderMain = 1, owlContactClassName = '.recent-news-slider';
var owlContactLoop = false,
    owlContactItemLength = $(owlContactClassName + ' .owl-carousel .item').length,
    owlContactBanner = $(owlContactClassName + ' .owl-carousel');
if (owlContactItemLength < owlBannerSliderMain) { $(owlContactClassName).find('.owl-controls').css('display', 'none');}
if (owlContactItemLength > owlBannerSliderMain) { owlContactLoop = true; } else { owlContactLoop = false; }

owlContactBanner.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    loop: owlContactLoop,
    // mouseDrag: false,
    // touchDrag: false,
    pullDrag: false,
    margin: 20,
    navText: ["<i class='icon-arrow-left' title='Previous'></i>","<i class='icon-arrow-right' title='Next'></i>"],
    autoplay: true,
    autoplayHoverPause: false,
    autoplayTimeout: 1000,
    smartSpeed: 4000,
    responsive: {
        0: { items: 1, dots: false, nav: false },
        767: { items: 2, dots: false, nav: false },
        992: { items: 3, dots: false, nav: false },
    }
});

/* Recent News Slider Section E */

/* Partner Logo Slider Section S */

var owlBannerSliderMain = 1, owlContactClassName = '.partner-logo-slider';
var owlContactLoop = false,
    owlContactItemLength = $(owlContactClassName + ' .owl-carousel .item').length,
    owlContactBanner = $(owlContactClassName + ' .owl-carousel');
if (owlContactItemLength < owlBannerSliderMain) { $(owlContactClassName).find('.owl-controls').css('display', 'none');}
if (owlContactItemLength > owlBannerSliderMain) { owlContactLoop = true; } else { owlContactLoop = false; }

owlContactBanner.owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    loop: owlContactLoop,
    // mouseDrag: false,
    // touchDrag: false,
    pullDrag: false,
    margin: 20,
    navText: ["<i class='icon-arrow-left' title='Previous'></i>","<i class='icon-arrow-right' title='Next'></i>"],
    autoplay: true,
    autoplayHoverPause: false,
    autoplayTimeout: 1000,
    smartSpeed: 4000,
    responsive: {
        0: { items: 2, dots: false, nav: false },
        767: { items: 2, dots: false, nav: false },
        992: { items: 4, dots: false, nav: false },
    }
});

/* Partner Logo Slider Section E */

