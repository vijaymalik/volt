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
         // Updated Swiper initialization
        document.addEventListener('DOMContentLoaded', function () {
            const swiperWrapper = document.querySelector('.nearby-slider-recipie .swiper-wrapper');
            const slideCount = swiperWrapper ? swiperWrapper.querySelectorAll('.swiper-slide').length : 0;

            // Maximum slides per view (desktop)
            const maxSlidesPerView = 4;

            // Enable loop only if there are more slides than slidesPerView
            const enableLoop = slideCount > maxSlidesPerView;

            var swiper = new Swiper(".nearby-slider-recipie", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true, // Always loop
                loopAdditionalSlides: 4, // Helps fill white space
                watchOverflow: false,
                centeredSlides: false,
                grabCursor: true,
                breakpoints: {
                    0: {
                        slidesPerView: 1.5,
                        spaceBetween: 10,
                    },
                    641: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1025: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
                on: {
                    init: function () {
                        console.log(`Swiper initialized with ${this.slides.length} total slides (including duplicates).`);
                    }
                }
            });

        });


        var swiper = new Swiper(".recipie-slider", {
            slidesPerView: 'auto',
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".right-arrows",
                prevEl: ".left-arrows",
            },
            breakpoints: {
                0: {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                },
                641: {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                },
                1025: {
                    slidesPerView: 'auto',
                    spaceBetween: 30,
                },
            },
        });

        const accordions = document.querySelectorAll(".accordion-header");


        // const swiper2 = new Swiper(".our-recipe-slider", {
        //     slidesPerView: 1,
        //     effect: "coverflow",
        //     loop: true,
        //     grabCursor: true,
        // });

        var swiper2 = new Swiper(".our-recipe-slider", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 200,
                modifier: 2,
                slideShadows: false,
            },
        });


        accordions.forEach(header => {
            header.addEventListener("click", () => {
                const parent = header.parentElement;

                // Close all other accordions (optional)
                document.querySelectorAll(".accordion-item").forEach(item => {
                    if (item !== parent) item.classList.remove("active");
                });

                // Toggle current accordion
                parent.classList.toggle("active");
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper(".our-products-slider", {
                slidesPerView: 1,

                loop: true,
                navigation: {
                    nextEl: ".right-arw",
                    prevEl: ".left-arw",
                },
            });
        });
