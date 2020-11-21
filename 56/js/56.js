jQuery(document).ready(function($) {
  var swiper2 = new Swiper(".swiper-2", {
    slidesPerView: 6,
    spaceBetween: 30,
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 30
      }
    }
  });
});
