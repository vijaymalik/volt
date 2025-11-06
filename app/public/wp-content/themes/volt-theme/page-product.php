<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
.page-count .current {
    font-size: 16px!important;     
}
</style>
    </head>

<body>

    <?php get_template_part('header', 'volt'); ?>

    <div class="our-products-slider swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="our-product-parent">
                    <div class="our-products">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desk-Product.png" alt="" />
                        <div class="overlayer">
                            <div class="left-div">
                                <h2>Milk Drink Powder</h2>
                                <p>Discover our flagship favorites trusted by generations, loved by every Fijian home.
                                </p>
                                <button>Explore Product</button>
                            </div>
                            <div class="center-div">
                                <img class="milk"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png" alt="" />
                                <div class="bottom-sec">
                                    <div class="text-center">
                                        <p>Vitamin A <br />up to</p>
                                        <h3>180mcg</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Potassium <br />up to</p>
                                        <h3>250mg</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Protein<br />up to</p>
                                        <h3>26g</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Calcium <br />up to</p>
                                        <h3>912mg</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="right-div">
                                <div class="right-sec-div">
                                    <h4>Our Products</h4>
                                    <!-- arrows are placed outside swiper but kept inside markup for styling -->
                                    <div class="product-arrow-r">
                                        <div class="product-arrow left-arw">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </div>
                                        <p class="page-count"><span class="current">01</span> / <span
                                                class="total">02</span></p>
                                        <div class="product-arrow right-arw">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end our-product-parent -->
            </div>

            <div class="swiper-slide">
                <div class="our-product-parent">
                    <div class="our-products">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desk-Product.png" alt="" />
                        <div class="overlayer">
                            <div class="left-div">
                                <h2>Milk Drink Powder</h2>
                                <p>Discover our flagship favorites trusted by generations, loved by every Fijian home.
                                </p>
                                <button>Explore Product</button>
                            </div>
                            <div class="center-div">
                                <img class="milk"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png" alt="" />
                                <div class="bottom-sec">
                                    <div class="text-center">
                                        <p>Vitamin A <br />up to</p>
                                        <h3>180mcg</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Potassium <br />up to</p>
                                        <h3>250mg</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Protein<br />up to</p>
                                        <h3>26g</h3>
                                    </div>
                                    <div class="line"></div>
                                    <div class="text-center">
                                        <p>Calcium <br />up to</p>
                                        <h3>912mg</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="right-div">
                                <div class="right-sec-div">
                                    <h4>Our Products</h4>
                                    <!-- arrows are placed outside swiper but kept inside markup for styling -->
                                    <div class="product-arrow-r">
                                        <div class="product-arrow left-arw">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </div>
                                        <p class="page-count"><span class="current">01</span> / <span
                                                class="total">02</span></p>
                                        <div class="product-arrow right-arw">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
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
    </script>





    <style>
        .product-arrow-r p {
            font-size: 18px;
            font-weight: 500;
        }

        .product-arrow-r p span {
            /* color: #ff6600; */
            font-weight: 700;
        }

        .product-arrow i {
            cursor: pointer;
            font-size: 24px;
        }
    </style>

    </div>
    </div>


    <div class="our-product-mbl">
  <h2>Our Products</h2>
  <p>Discover our flagship favorites trusted by <br> generations, loved by every Fijian home.</p>

  <div class="slider-container">
    <div class="slider">
      <!-- Slide 1 -->
      <div class="slide our-product-mid">
        <h2>Milk Drink Powder</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-sec.png" alt="">
        <div class="bottom-sec">
          <div>
            <h6>Vitamin A <br> up to</h6>
            <h1>180mcg</h1>
          </div>
          <div class="line"></div>
          <div>
            <h6>Potassium <br> up to</h6>
            <h1>250mg</h1>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="slide our-product-mid">
        <h2>Milk Drink Powder</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-sec.png" alt="">
        <div class="bottom-sec">
          <div>
            <h6>Vitamin D <br> up to</h6>
            <h1>180mcg</h1>
          </div>
          <div class="line"></div>
          <div>
            <h6>Calcium <br> up to</h6>
            <h1>250mg</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="progress-bar">
      <div class="progress-fill"></div>
    </div> -->
    <div class="progress-bar-new">
    <div class="progress-segment"></div>
    <div class="progress-segment"></div>
  </div>

  </div>
</div>

    <?php get_template_part('template-parts/nearby-store'); ?>


    <?php get_template_part('footer', 'volt'); ?>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>

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


    </script>
    
    <script>
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
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>