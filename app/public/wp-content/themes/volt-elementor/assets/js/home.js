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