document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper === 'undefined') return;

  new Swiper('.store-swiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: false,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
});
