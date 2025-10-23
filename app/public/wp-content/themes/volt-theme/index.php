<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
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
            <a class="talk-btn phn-btn" href="/contact-us">Let's Talk</a>

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
                        <a class="nav-link" href="recipie">Recipes </a>
                    </li>

                </ul>

                <a class="talk-btn" href="/contact-us">Let's Talk</a>
            </div>
        </div>
    </nav>


    <?php
    // Fetch the latest Topbar Detail post
    $topbar_query = new WP_Query(array(
        'post_type' => 'topbar_detail',
        'posts_per_page' => 1,
    ));

    if ($topbar_query->have_posts()):
        while ($topbar_query->have_posts()):
            $topbar_query->the_post();

            // Get ACF fields
            $banner_back_image = get_field('banner_back_image');
            $banner_product_image = get_field('banner_product_image');
            $heading_html = get_field('heading');

            // Fallbacks
            $default_back_image = get_template_directory_uri() . '/assets/images/banner.jpg';
            $default_product_image = get_template_directory_uri() . '/assets/images/banner-1.png';
            $default_heading_html = '<h6>Quality you trust.</h6><h1>Taste You Love.</h1>';
            ?>

            <div class="home-banner">
                <img src="<?php echo esc_url($banner_back_image['url'] ?? $default_back_image); ?>" alt="">
                <div class="home-overlayer">
                    <?php
                    // Show custom or fallback heading
                    echo !empty($heading_html) ? $heading_html : $default_heading_html;
                    ?>
                    <div class="home-img">
                        <img src="<?php echo esc_url($banner_product_image['url'] ?? $default_product_image); ?>" alt="">
                    </div>
                    <div class="explore-button">
                        <button>Explore Product</button>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    else:
        // No Topbar Detail found → Show full default
        ?>
        <div class="home-banner">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.jpg'); ?>" alt="">
            <div class="home-overlayer">
                <h6>Quality you trust.</h6>
                <h1>Taste You Love.</h1>
                <div class="home-img">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner-1.png'); ?>" alt="">
                </div>
                <div class="explore-button">
                    <button>Explore Product</button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php
    // Fetch latest Topbar Detail post
    $topbar_query = new WP_Query(array(
        'post_type' => 'topbar_detail',
        'posts_per_page' => 1,
    ));

    if ($topbar_query->have_posts()):
        while ($topbar_query->have_posts()):
            $topbar_query->the_post();

            // Get custom field (ACF) - can be string or array
            $marque_detail = get_field('marque_detail'); // ACF field name
    
            // Icon source (escaped)
            $icon_src = trailingslashit(get_template_directory_uri()) . 'assets/images/light (2).png';
            $icon_img = '<img height="25" width="25" src="' . esc_url($icon_src) . '" alt="">';

            // Prepare items array:
            $items = array();

            if (!empty($marque_detail)) {
                if (is_array($marque_detail)) {
                    // ACF returned an array (checkboxes, repeater, select multiple)
                    $items = array_map('trim', $marque_detail);
                } else {
                    // ACF returned a string — allow comma separated values
                    $marque_detail = trim($marque_detail);
                    if (strpos($marque_detail, ',') !== false) {
                        $items = array_map('trim', explode(',', $marque_detail));
                    } else {
                        $items = array($marque_detail);
                    }
                }

                // Remove empty items
                $items = array_filter($items, function ($v) {
                    return $v !== '';
                });
            }

            // Default fallback items if ACF provided nothing usable
            $default_items = array(
                'NO ADDITIONAL PRESERVATIVES',
                'LOW CALORIE',
                'NATURAL INGREDIENTS',
            );

            if (empty($items)) {
                $items = $default_items;
            }
            ?>
            <div class="marques mt-sm-5 pt-sm-5">
                <div class="marque-content text-black">
                    <?php
                    // Repeat outputs (at least 12). Change $repeat to alter number.
                    $repeat = 20;
                    $count = count($items);

                    for ($i = 0; $i < $repeat; $i++) {
                        $current = $items[$i % $count];
                        echo '<span class="text-black mx-5">' . esc_html($current) . '</span>';
                        echo $icon_img;
                    }
                    ?>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        // If no topbar_detail post exists — show default repeating block
        $icon_src = trailingslashit(get_template_directory_uri()) . 'assets/images/light (2).png';
        $icon_img = '<img height="25" width="25" src="' . esc_url($icon_src) . '" alt="">';
        $default_items = array(
            'NO ADDITIONAL PRESERVATIVES',
            'LOW CALORIE',
            'NATURAL INGREDIENTS',
        );
        ?>
        <div class="marques mt-sm-5 pt-sm-5">
            <div class="marque-content text-black">
                <?php
                $repeat = 12;
                $count = count($default_items);
                for ($i = 0; $i < $repeat; $i++) {
                    $current = $default_items[$i % $count];
                    echo '<span class="text-black mx-5">' . esc_html($current) . '</span>';
                    echo $icon_img;
                }
                ?>
            </div>
        </div>
    <?php endif; ?>




    <div class="our-products position-relative mt-5">
        <div class="swiper  our-products-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" alt="" />
                        <div class="overlayer">
                            <div class="top-sec d-flex justify-content-between">
                                <div class="w-100">
                                    <h6>Milk Drink Powder</h6>
                                    <p>
                                        Discover our flagship favorites <br> trusted by generations, loved
                                        by <br> every Fijian home.
                                    </p>
                                    <div class="explore-button">
                                        <button class="m-0">Explore Product</button>
                                    </div>
                                </div>
                                <h2>Our Products</h2>
                            </div>

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

                    </div>
                </div>

                <!-- 2nd Slide -->
                <div class="swiper-slide">
                    <div class="product">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product.png" alt="" />
                        <div class="overlayer">
                            <div class="top-sec d-flex justify-content-between">
                                <div class="w-100">
                                    <h6>Milk Drink Powder</h6>
                                    <p>
                                        Discover our flagship favorites <br> trusted by generations, loved <br>
                                        by every Fijian home.
                                    </p>
                                    <div class="explore-button">
                                        <button class="m-0">Explore Product</button>
                                    </div>
                                </div>
                                <h2>Our Products</h2>
                            </div>

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
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ Move arrows OUTSIDE swiper container -->
        <div class="product-arrow-r">
            <div class="product-arrow">
                <i class="ri-arrow-left-s-line left-arw"></i>
            </div>
            <p>01 / <span>02</span></p>

            <div class="product-arrow">
                <i class="ri-arrow-right-s-line right-arw"></i>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const leftArrow = document.querySelector(".left-arw");
                const rightArrow = document.querySelector(".right-arw");
                const p = document.querySelector(".product-arrow-r p");

                // true → showing 01, false → showing 02
                let isFirstActive = false;

                function toggleNumbers() {
                    if (isFirstActive) {
                        p.innerHTML = `01 / <span>02</span>`;
                    } else {
                        p.innerHTML = `<span>01</span> / 02`;
                    }
                    isFirstActive = !isFirstActive;
                }

                leftArrow.addEventListener("click", toggleNumbers);
                rightArrow.addEventListener("click", toggleNumbers);
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

    <div class="our-product-mbl">
        <h2>Our Products</h2>
        <p>Discover our flagship favorites trusted by <br> generations, loved by every Fijian home.</p>

        <div class="our-product-mid">
            <h2>Milk Drink Powder</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-sec.png" alt="">
            <div class="bottom-sec">
                <div>
                    <h6>Vitamin A <br>
                        up to</h6>
                    <h1>180mcg</h1>
                </div>
                <div class="line"></div>
                <div>
                    <h6>Potassium <br>up to</h6>
                    <h1>250mg</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="aboutleft">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-6">

                    <div class="aboutright">
                        <p>About Us</p>
                        <h6>Driving Fiji’s food industry <br> forward with quality, <br> innovation and trust.</h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <div class="d-flex justify-content-end w-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mbl-progress">
        <div class="progress-bar ">
            <div class="progress-fill" style="width: 45%;"></div>
        </div>
    </div>
    <div class="mbl-about">
        <div class="img-section">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mbl-about.png" alt="">
        </div>
        <p>ABOUT US</p>
        <h2>Driving Fiji’s food <br> industry forward with <br> quality, innovation <br>
            and trust.</h2>
        <img height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png"
            alt="">
    </div>



    <div class="volt-drink">
        <h1>@voltdrinks</h1>
        <div class="explore-button d-flex align-items-center justify-content-center">
            <button class="m-0">Follow Us</button>
        </div>

        <div class="volt-marq">
            <div class="marquee-track">
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt="">
                </div>

                <!-- duplicate for smooth infinite loop -->
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" alt="">
                </div>
                <div class="box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="ready">
            <div class=" container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 col-sm-7">
                        <div class="ready-left">
                            <h5>Ready to Join Us?</h5>
                            <p>Where you belong, grows stronger with <br> you. Join our community.</p>
                            <div class="d-none d-sm-block">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-removebg-preview.png"
                                        alt="">
                                </a>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="text-center d-block d-sm-none">
                                <button class="join-btn">Join Community</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5">
                        <div class="ready-right position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a-removebg-preview.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="our-recipes">
        <h1>Our Recipes</h1>
        <div class="swiper mySwiper nearby-slider  recipie-slider">
            <div class="swiper-wrapper">
                <?php
                // WP Query for 5 latest recipes
                $recipes = new WP_Query(array(
                    'post_type' => 'recipe',
                    'posts_per_page' => 5,
                ));
                if ($recipes->have_posts()):
                    while ($recipes->have_posts()):
                        $recipes->the_post();

                        // ACF fields
                        $time = get_field('recipe_time') ?: '1.2Hrs';
                        $category = get_field('recipe_category') ?: 'Vegan';
                        $extra_info = get_field('recipe_extra_info') ?: 'Gluten Free';

                        // ACF Image field
                        $image_field = get_field('image'); // field name is 'image'
                        $default_image = get_template_directory_uri() . '/assets/images/default-recipe.jpg';

                        if ($image_field) {
                            if (is_array($image_field) && isset($image_field['url'])) {
                                $image_url = $image_field['sizes']['medium'] ?? $image_field['url'];
                            } elseif (is_numeric($image_field)) {
                                $image_url = wp_get_attachment_image_url($image_field, 'medium');
                            } else {
                                $image_url = $image_field; // assume URL
                            }
                        } else {
                            $image_url = $default_image;
                        }
                        ?>
                        <div class="swiper-slide">
                            <div class="nearby-slides">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                <div class="slider-overlay">
                                    <div class="nearbytop">
                                        <h6><?php the_title(); ?></h6>
                                        <button><i class="ri-history-line"></i><?php echo esc_html($time); ?></button>
                                    </div>
                                    <div class="nearbybottom bottom-div">
                                        <span><?php echo esc_html($category); ?></span>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><?php echo esc_html($extra_info); ?></span>
                                            <button class="learnmore">Learn More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="our-recipes-mbl px-4 position-relative">
        <h2>Our Recipes</h2>
        <div class="swiper mySwiper our-recipe-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4>Vegan Cracker <br>
                                Breakfast</h4>

                            <button class="d-flex gap-2"><i class="ri-history-line"></i> 1.2Hrs</button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between ">
                            <div>
                                <div>
                                    <button>Vegan</button>
                                </div>
                                <div>
                                    <button>Gluten-Free</button>
                                </div>
                            </div>
                            <div class="learn-more">
                                <button>Learn More</button>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>

    </div>

    <div class="poll position-relative">
        <img class="poll-img d-none d-sm-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/poll.jpg"
            alt="">
        <img class=" pollmbl-img  d-block d-sm-none"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/poll-mbl.jpg" alt="">
        <div class="poll-over">
            <div class="poll-container">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-8 ">
                            <div class="d-flex pl-5 align-items-sm-start h-100 justify-content-center flex-column">
                                <h2>Poll for Future <br> Volt Flavor</h2>
                                <p class="d-none d-sm-block">Vote for our next flavour and get <br> 5% off for sharing
                                    your pick!</p>
                                <p class="d-block d-sm-none">Vote for our next flavour and get 5% off <br> for sharing
                                    your pick!</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="right-poll">
                                <h5>Let’s choose <br> between the two</h5>
                                <div class="d-flex align-items-center justify-content-center gap-3  flex-column">
                                    <button class="mt-6 mt-sm-5">Sweet</button>
                                    <button>Savoury</button>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 45%;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="polloverlayer">
                <div class="marques mt-5 ">
                    <div class="marque-content text-white">
                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">

                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">

                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">

                        <span class="text-white mx-5">NO ADDITIONAL PRESERVATIVES</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">LOW CALORIE</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                        <span class="text-white mx-5">NATURAL INGREDIENTS</span>
                        <img height="25" width="25"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="nearby-store home-near pb-5">
        <div class="containers ">
            <div class="nearby-container">
                <div class="d-sm-flex gap-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 111102.png"
                        alt="">
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

        <div class="swiper mySwiper nearby-slider mt-2">
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
                    while ($stores->have_posts()):
                        $stores->the_post();
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
            <div class="arrow left-arrows">
                <i class="ri-arrow-left-s-line left"></i>
            </div>
            <!-- <p><span>01</span> / 05</p> -->
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
                    // Format numbers as 2 digits (01, 02, 03...)
                    const formattedCurrent = current.toString().padStart(2, "0");
                    const formattedTotal = total.toString().padStart(2, "0");

                    p.innerHTML = `<span>${formattedCurrent}</span> / ${formattedTotal}`;
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

                // Initialize display
                updateDisplay();
            });
        </script>

    </div>

    <div class="footer desktop-footer pt-5 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-5">
                    <div class="first-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png"
                            alt="">

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
                                <img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png"
                                    alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png"
                                    alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png"
                                alt="">

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
                        <img class="d-none  d-sm-flex" src="<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2025-10-18 133558.png"
                            alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png"
                            alt="">
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
                                <img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png"
                                    alt="facebook-new" />
                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png"
                                    alt="instagram-new--v1" />

                            </div>
                            <div class="icon">
                                <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/twitterx--v2.png"
                                    alt="twitterx--v2" />
                            </div>
                            <img class="bird" src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png"
                                alt="">

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
            <a href="#">Carefully Crafted By <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png" alt=""></a>
        </div>
    </div>

    <div class="copywrite mbl-copy mt-5  align-items-center justify-content-between container">

        <hr class="phone-hr">

        <div class="text-center  text-sm-start">
            <a href="#">Carefully Crafted By <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/3minds.png" alt=""></a>
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

        // Updated Swiper initialization
        document.addEventListener('DOMContentLoaded', function () {
            const swiperWrapper = document.querySelector('.nearby-slider .swiper-wrapper');
            const slideCount = swiperWrapper ? swiperWrapper.querySelectorAll('.swiper-slide').length : 0;

            // Maximum slides per view (desktop)
            const maxSlidesPerView = 4;

            // Enable loop only if there are more slides than slidesPerView
            const enableLoop = slideCount > maxSlidesPerView;

            var swiper = new Swiper(".nearby-slider", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: enableLoop,
                watchOverflow: true, // hides arrows if not enough slides
                navigation: {
                    nextEl: ".navi .right", // target inside .navi
                    prevEl: ".navi .left",
                },
                breakpoints: {
                    // Mobile (up to 640px)
                    0: {
                        slidesPerView: 1.5,
                        spaceBetween: 10,
                    },
                    // Tablet (641px to 1024px)
                    641: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    // Desktop (above 1024px)
                    1025: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
                on: {
                    init: function () {
                        console.log(`Swiper initialized with ${slideCount} slides. Loop: ${enableLoop}`);
                    }
                }
            });
        });


        var swiper = new Swiper(".recipie-slider", {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".right-arrows",
                prevEl: ".left-arrows",
            },
            breakpoints: {
                // Mobile (up to 640px)
                0: {
                    slidesPerView: 1.5,
                    spaceBetween: 10,
                },
                // Tablet (641px to 1024px)
                641: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // Desktop (above 1024px)
                1025: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            },
        });

        const accordions = document.querySelectorAll(".accordion-header");


        const swiper2 = new Swiper(".our-recipe-slider", {
            slidesPerView: 1,
            effect: "cards",
            loop: true,
            grabCursor: true,
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>