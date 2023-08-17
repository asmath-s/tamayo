$(".testimonial-carousel").owlCarousel({
  items: 1,
  loop: true,
  margin: 100,
  nav: true,
  dots: false,
  autoplay: true,
  smartSpeed: 1000,
  autoplayHoverPause: true,
  touchDrag: true,
  mouseDrag: true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ],
});
$(".facilitiescarousel").owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  dots: false,
  autoplay: true,
  smartSpeed: 1000,
  autoplayHoverPause: true,
  touchDrag: true,
  mouseDrag: true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ],
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});
$(".studySlide-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  smartSpeed: 1000,
  autoplayHoverPause: true,
  touchDrag: true,
  mouseDrag: true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ],
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});
$(".accredit-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  smartSpeed: 1000,
  autoplayHoverPause: true,
  touchDrag: true,
  mouseDrag: true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ],
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
$(".associates-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  autoplay: true,
  smartSpeed: 1000,
  autoplayHoverPause: true,
  touchDrag: true,
  mouseDrag: true,
  navText: [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ],
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

$(".popup-youtube, .popup-vimeo").magnificPopup({
  disableOn: 300,
  type: "iframe",
  mainClass: "mfp-fade",
  removalDelay: 160,
  preloader: false,
  fixedContentPos: false,
});

$(".open-popup-link").magnificPopup({
  type: "inline",
  midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});
