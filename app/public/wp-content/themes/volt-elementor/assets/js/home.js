document.addEventListener("DOMContentLoaded", function () {
    const swiperEl = document.querySelector('.our-products-slider');
    // count the actual number of unique slides (inside .swiper-wrapper)
    const totalSlides = swiperEl.querySelectorAll('.swiper-wrapper .swiper-slide').length;

    const swiper = new Swiper(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true, // for continuous cycle
        navigation: {
            nextEl: '.right-arw',
            prevEl: '.left-arw',
        },
        keyboard: { enabled: true, onlyInViewport: true },
        on: {
            init: function () {
                updatePageCount(this);
            },
            slideChange: function () {
                updatePageCount(this);
            }
        }
    });

    function updatePageCount(swiperInstance) {
        const current = swiperInstance.realIndex + 1;

        document.querySelectorAll('.page-count').forEach(pc => {
            const curEl = pc.querySelector('.current');
            const totEl = pc.querySelector('.total');
            if (curEl) curEl.textContent = String(current).padStart(2, "0");
            if (totEl) totEl.textContent = String(totalSlides).padStart(2, "0");
        });
    }
});
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const segments = document.querySelectorAll('.progress-segment');

let index = 0;
let autoSlide;

function showSlide(n) {
  index = (n + slides.length) % slides.length;
  slider.style.transform = `translateX(-${index * 100}%)`;

  // Update progress bar colors
  segments.forEach((seg, i) => {
    seg.classList.toggle('active', i === index);
  });
}

function startAutoSlide() {
  autoSlide = setInterval(() => {
    showSlide(index + 1);
  }, 4000);
}

function resetAutoSlide() {
  clearInterval(autoSlide);
  startAutoSlide();
}

// Click on progress segment to jump to that slide
segments.forEach((seg, i) => {
  seg.addEventListener('click', () => {
    showSlide(i);
    resetAutoSlide();
  });
});

// Initialize
showSlide(0);
startAutoSlide();
