<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="marques">
            <div class="marque-content">
                <?php
                // Query the latest topbar_detail post
                $topbar = new WP_Query([
                    'post_type' => 'topbar_detail',
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);
                
                // Default text
                $default_text = '20% Off on Punjas Biscuits';
                
                if ($topbar->have_posts()):
                    while ($topbar->have_posts()):
                        $topbar->the_post();
                        $marque_text = get_field('marque_text');
                        $text_to_show = $marque_text ? $marque_text : $default_text;
                
                        // Repeat it 12 times
                        for ($i = 0; $i < 12; $i++) {
                            echo '<span>' . esc_html($text_to_show) . '</span>';
                        }
                    endwhile;
                    wp_reset_postdata();
                    // No posts found — show default message 12 times
                else:
                    for ($i = 0; $i < 12; $i++) {
                        echo '<span>' . esc_html($default_text) . '</span>';
                    }
                endif;
                ?>
            </div>
        </div>



        <div class="container-fluid nav-container mt-sm-2 px-sm-4">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aa4ec43efe01bdc08f3f6ae94dfcc7996195b2f3.png"
                    alt="">
            </a>
            <button class="talk-btn phn-btn">Let's Talk</button>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="menu-btn" id="menu-btn">
                    <span></span>

                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Products </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recipes </a>
                    </li>

                </ul>

                <button class="talk-btn">Let's Talk</button>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="left-sec">
            <div class="overlay">
                <div class="overlay-container">
                    <h4>Customer Support</h4>
                    <p id="dek"> Have some doubt? Let’s clear it up together!</p>
                    <p id="mbl">Our friendly team is ready to assist you with <br> any VOLT Milk Drink Powder
                        queries.
                    </p>
                    <div class="icons">
                        <div class="icon">
                            <i class="ri-facebook-fill"></i>
                        </div>
                        <div class="icon">
                            <i class="ri-instagram-line"></i>
                        </div>

                        <div class="icon">
                            <i class="ri-linkedin-line"></i>
                        </div>
                    </div>


                </div>
                <p id="mbl2">Have some doubt? <br>
                    Let’s clear it up together!</p>
            </div>
        </div>
<div class="right-sec">
    <div class="form">
        <h2>Get in Touch</h2>
        <form id="enquiryForm">
            <div class="input">
                <label>Name</label>
                <input type="text" name="name" placeholder="Eg: Jacob Jones" required>
            </div>

            <div class="input2">
                <div class="left">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Eg: jjacob123@gmail.com" required>
                </div>
                <div class="right">
                    <label>Phone Number</label>
                    <input type="text" name="phone" placeholder="+679 | Eg: 9876543210" required>
                </div>
            </div>

            <div class="input2">
                <div class="left">
                    <label>Your Location</label>
                    <input type="text" name="location" placeholder="Eg: Savusavu, Vanua Levu, Fiji">
                </div>

                <div class="right">
                    <label>Query Type</label>
                    <input type="text" name="query_type" placeholder="Problem with the Product">
                </div>
            </div>

            <div class="input textarea">
                <label>Query</label>
                <textarea name="message" placeholder="Eg: Your Query" required></textarea>
            </div>

            <div class="submit-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

    </div>

    <div class="map-sec">
        <span>OUR LOCATION</span>
        <h6 class="d-none d-sm-block">Carpenters Fiji Pte Ltd / Morris <br> Hedstrom Head Office, 34 Rodwell <br>Road,
            Suva, Fiji</h6>

        <h6 class="d-block d-sm-none">Carpenters Fiji Pte Ltd / <br> Morris Hedstrom Head <br> Office, 34 Rodwell
            <br>Road, Suva, Fiji
        </h6>
        <div class="d-flex  align-items-center justify-content-center">
            <img class="light-icon" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/assets/images/light.png"
                alt="">
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps?q=Carpenters+Fiji+Pte+Ltd+Morris+Hedstrom+Head+Office,+34+Rodwell+Road,+Suva,+Fiji&output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>


    <div class="nearby-store pb-5">
        <div class="containers ">
            <div class="nearby-container">
                <div class="d-sm-flex gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 111102.png" alt="">
                    <h6>Grab yours at the <br>
                        Nearby Stores</h6>
                    <h5 class="mbl-sec">Buy Our Products in <br> Supermarket Near You</h5>

                </div>
                <div class="bird-sec">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird (2).png" alt="">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/birds.png" class="birds" alt="">
                <div class="select">
                    <select name="" id="">
                        <option value="">Fiji</option>
                    </select>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
            </div>
        </div>

        <div class="swiper mySwiper nearby-slider mt-5">
            <div class="swiper-wrapper">
                <?php
        $stores = new WP_Query(array(
            'post_type' => 'store',
            'posts_per_page' => -1
        ));

        // Default fallback values
        $default_image = get_template_directory_uri() . '/assets/images/e0545d6f5819c7f36f6a7b032d1e97f4b3a9b104.png';
        $default_name = 'Extra Supermarket';
        $default_distance = '1.2Km';
        $default_address = 'VC3M+WVV Flagstaff Plaza, Flagstaff, Bau St, Suva, Fiji';
        $default_phone = '+679 338 7142';
        $default_hours = 'Mon - Sun <br> (10:00 AM - 09:00 PM)';

        if ($stores->have_posts()):
            while ($stores->have_posts()): $stores->the_post();
                // ACF fields
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
            <div class="arrow ">
                <i class="ri-arrow-left-s-line left"></i>
            </div>
            <div class="arrow">
                <i class="ri-arrow-right-s-line right"></i>
            </div>
        </div>
    </div>

    <div class="footer desktop-footer pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-5">
                    <div class="first-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png" alt="">
                        <h6>Driving Fiji’s food industry <br> forward with quality, innovation <br> and trust...</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Product</h6>
                        <a href="">Milk Drink Powder</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Recipes</h6>
                        <a href="">Rustic Bowl with <br> Sunny-Side-Up</a>
                        <a href="">Pomegranate Ice <br> Cream Delight</a>
                        <a href="">Non Vegan Elegant Seafood</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Get In Touch</h6>
                        <a href="">9876543210,<br>
                            Savusavu, Vanua Levu, Fiji</a>
                        <div class="d-flex align-items-center gap-2 position-relative">
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png" alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer mbl-footer pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-5">
                    <div class="first-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png" alt="">
                        <h6>Driving Fiji’s food industry forward with <br> quality, innovation and trust...</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg">
                    <div class="second-row">
                        <h6>Get In Touch</h6>
                        <a href="">9876543210,<br>
                            Savusavu, Vanua Levu, Fiji</a>
                        <div class="d-flex align-items-center gap-2 position-relative">
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30"
                                    src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png" alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="accordion mt-4">

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Recipes</h6>
                            <span class="icon">+</span>
                        </div>
                        <div class="accordion-content">
                            <a href="">Rustic Bowl with <br> Sunny-Side-Up</a>
                            <a href="">Pomegranate Ice <br> Cream Delight</a>
                            <a href="">Non Vegan Elegant Seafood</a>
                        </div>
                    </div>
                    <hr>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Product</h6>
                            <span class="icon">+</span>
                        </div>
                        <div class="accordion-content">
                            <a href="">Milk Drink Powder</a>
                        </div>
                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Privacy Policy</h6>

                        </div>

                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>Terms & Conditions</h6>

                        </div>

                    </div>
                    <hr>
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h6>FAQs</h6>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>



    <hr class="desktop-hr">
    <div class="copywrite mt-5 d-none  d-sm-flex align-items-center justify-content-between container">
        <div class="d-sm-flex align-items-center gap-4">
            <a href="">Privacy Policy</a>
            <a href="">Terms & Conditions</a>
            <a href="">FAQs</a>
        </div>
        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png"
                    alt=""></a>
        </div>
    </div>

    <div class="copywrite mbl-copy mt-5  align-items-center justify-content-between container">

        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png"
                    alt=""></a>
        </div>
    </div>

    <div class="end d-none d-sm-flex">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 140915.png" alt="">
    </div>

    <div class="end  d-block d-sm-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mblf.png" alt="">
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".nearby-slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: ".right",
                prevEl: ".left",
                disabledClass: "swiper-button-disabled", // default, can be customized
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                481: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                769: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1025: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
            },
        });


        // Arrow fade function
        function updateArrows(swiper) {
            const prevArrow = document.querySelector(".left");
            const nextArrow = document.querySelector(".right");

            if (swiper.isBeginning) {
                prevArrow.classList.add("disabled");
            } else {
                prevArrow.classList.remove("disabled");
            }

            if (swiper.isEnd) {
                nextArrow.classList.add("disabled");
            } else {
                nextArrow.classList.remove("disabled");
            }
        }



        const accordions = document.querySelectorAll(".accordion-header");

        accordions.forEach(header => {
            header.addEventListener("click", () => {
                const parent = header.parentElement;
                parent.classList.toggle("active");

                // Close others
                document.querySelectorAll(".accordion-item").forEach(item => {
                    if (item !== parent) item.classList.remove("active");
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
jQuery(document).ready(function ($) {
    $('#enquiryForm').on('submit', function (e) {
        e.preventDefault();

        // Get values from the form
        var name       = $('input[name="name"]').val();
        var email      = $('input[name="email"]').val();
        var phone      = $('input[name="phone"]').val();
        var location   = $('input[name="location"]').val();
        var queryType  = $('input[name="query_type"]').val();
        var message    = $('textarea[name="message"]').val();

        // Send via AJAX
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'submit_enquiry',
                name: name,
                email: email,
                phone: phone,
                location: location,
                query_type: queryType,
                message: message
            },
            success: function(res) {
                console.log('Form submitted!', res);
                alert('Form submitted successfully!');
                $('#enquiryForm')[0].reset(); // reset form
            },
            error: function(err) {
                console.log('Error:', err);
                alert('Something went wrong. Try again.');
            }
        });
    });
});
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
