<div class="nearby-store home-near pb-5">
    <div class="containers">
        <div class="nearby-container">
            <div class="d-sm-flex gap-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 111102.png"
                    alt="">
                <h6>Grab yours at the <br> Nearby Stores</h6>
                <h5 class="mbl-sec">Buy Our Products in <br> Supermarket Near You</h5>
            </div>
            <div class="bird-sec">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird (2).png" alt="">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/birds.png" class="birds" alt="">
            <div class="select">
                <select id="nearbySelect" class="custom-select">
                    <option value="">Fiji</option>
                </select>
            </div>
            <script>
                document.getElementById('arrow-line').addEventListener('click', function () {
                    console.log('Arrow clicked');
                    var selectElement = document.getElementById('nearbySelect');
                    console.log(selectElement.value);
                    selectElement.focus();
                });
            </script>
        </div>
    </div>

    <div class="swiper mySwiper nearby-slider mt-2 mt-sm-5">
        <div class="swiper-wrapper">
            <?php
            $stores = new WP_Query(array(
                'post_type' => 'store',
                'posts_per_page' => -1
            ));

            $default_image = get_template_directory_uri() . '/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png';
            $default_name = 'Extra Supermarket';
            $default_distance = '1.2Km';
            $default_address = 'VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji';
            $default_phone = '+679 338 7142';
            $default_hours = 'Mon - Sun <br> (10:00 AM - 09:00 PM)';

            if ($stores->have_posts()):
                while ($stores->have_posts()):
                    $stores->the_post();
                    $image_field = get_field('image');
                    $store_image = $image_field && isset($image_field['url']) ? $image_field['url'] : $default_image;
                    $store_name = get_the_title() ?: $default_name;
                    $store_distance = get_field('distance') ?: $default_distance;
                    $store_address = get_field('address') ?: $default_address;
                    $store_phone = get_field('phone') ?: $default_phone;
                    $store_hours = get_field('hours') ?: $default_hours;
                    ?>
                    <div class="swiper-slide">
                        <div class="nearby-slides">
                            <img src="<?php echo esc_url($store_image); ?>" alt="<?php echo esc_attr($store_name); ?>">
                            <div class="slider-overlay">
                                <div class="nearbytop">
                                    <h6><?php echo wp_kses_post($store_name); ?></h6>
                                    <button><i class="ri-crosshair-2-line"></i>Directions</button>
                                </div>
                                <div class="nearbybottom">
                                    <span><?php echo esc_html($store_distance); ?></span>
                                    <p><?php echo esc_html($store_address); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="d-flex">
                                            <i class="ri-phone-line"></i>
                                            <?php echo esc_html($store_phone); ?>
                                        </span>
                                        <p><?php echo wp_kses_post($store_hours); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <div class="swiper-slide">
                    <div class="nearby-slides">
                        <img src="<?php echo esc_url($default_image); ?>" alt="Default Store">
                        <div class="slider-overlay">
                            <div class="nearbytop">
                                <h6><?php echo esc_html($default_name); ?></h6>
                                <button><i class="ri-crosshair-2-line"></i>Directions</button>
                            </div>
                            <div class="nearbybottom">
                                <span><?php echo esc_html($default_distance); ?></span>
                                <p><?php echo esc_html($default_address); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="d-flex">
                                        <i class="ri-phone-line"></i>
                                        <?php echo esc_html($default_phone); ?>
                                    </span>
                                    <p><?php echo wp_kses_post($default_hours); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="navi">
        <div class="arrow left-arrows">
            <i class="ri-arrow-left-s-line left"></i>
        </div>
        <p>01 / <span>05</span></p>
        <div class="arrow right-arrows">
            <i class="ri-arrow-right-s-line right"></i>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const left = document.querySelector(".left-arrows");
            const right = document.querySelector(".right-arrows");
            const p = document.querySelector(".navi p");

            let current = 1;
            const total = 5;

            function updateDisplay() {
                const formattedCurrent = current.toString().padStart(2, "0");
                const formattedTotal = total.toString().padStart(2, "0");
                p.innerHTML = `${formattedCurrent}<span> / ${formattedTotal}</span>`;
            }

            right.addEventListener("click", function () {
                current++;
                if (current > total) current = 1;
                updateDisplay();
            });

            left.addEventListener("click", function () {
                current--;
                if (current < 1) current = total;
                updateDisplay();
            });

            updateDisplay();

            const swiperWrapper = document.querySelector('.nearby-slider .swiper-wrapper');
            const slideCount = swiperWrapper ? swiperWrapper.querySelectorAll('.swiper-slide').length : 0;
            const maxSlidesPerView = 4;
            const enableLoop = slideCount > maxSlidesPerView;

            var swiper = new Swiper(".nearby-slider", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: enableLoop,
                watchOverflow: true,
                navigation: {
                    nextEl: ".navi .right-arrows",
                    prevEl: ".navi .left-arrows",
                },
                breakpoints: {
                    0: { slidesPerView: 1.2, spaceBetween: 10 },
                    641: { slidesPerView: 2, spaceBetween: 20 },
                    1025: { slidesPerView: 4, spaceBetween: 30 },
                },
                on: {
                    init: function () {
                        console.log(`Swiper initialized with ${slideCount} slides. Loop: ${enableLoop}`);
                    }
                }
            });



        });
    </script>
</div>