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
