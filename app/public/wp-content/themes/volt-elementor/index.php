<?php get_header(); ?>


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
        $default_product_image = get_template_directory_uri() . '/assets/images/banner-backup.png';
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
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner-backup.png'); ?>" alt="">
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
        <div class="marques home-marquee mt-sm-5 pt-sm-5">
            <div class="marque-content text-black">
                <?php
                // Repeat outputs (at least 12). Change $repeat to alter number.
                $repeat = 12;
                $count = count($items);

                for ($i = 0; $i < $repeat; $i++) {
                    $current = $items[$i % $count];
                    echo '<span class="text-black mx-5 px-5">' . esc_html($current) . '</span>';
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
                echo '<span class="text-black mx-5 px-5">' . esc_html($current) . '</span>';
                echo $icon_img;
            }
            ?>
        </div>
    </div>
<?php endif; ?>

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
                            <img class="milk" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"
                                alt="" />
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
                            <img class="milk" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group.png"
                                alt="" />
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

</div>
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
                    <h6>Driving Fiji’s food industry forward with quality, innovation and trust.</h6>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-icon.svg" alt="">

                </div>
                <div class="d-flex justify-content-end w-100 about-bird">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird.png" alt="">
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
    <img height="20" width="20" src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
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
            <div class="row h-100  ready-row">
                <div class="col-12 col-md-6 col-lg-7 col-xxl-auto">
                    <div class="ready-left">
                        <h5>Ready to Join Us?</h5>
                        <p class="d-none d-sm-block">Where you belong, grows stronger with <br> you. Join our
                            community.</p>
                        <p class="d-block d-sm-none">Where you belong, grows stronger <br>
                            with you. Join our community.</p>
                        <div class="d-none d-sm-block">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-removebg-preview.png"
                                    alt="">
                            </a>
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt="">
                            </a>
                        </div>
                        <div class="text-center d-block d-sm-none">
                            <button class="join-btn">Join Community</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 ">
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
    <div class="swiper mySwiper nearby-slider nearby-slider-recipie recipie-slider">
        <div class="swiper-wrapper">
            <?php
            // WP Query for 5 latest recipes
            $recipes = new WP_Query(array(
                'post_type' => 'recipe',
                'posts_per_page' => 10,
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
                                    <button>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elements.svg"
                                            alt="time icon" style="width: 16px; height: 16px;  vertical-align: middle;">
                                        <?php echo esc_html($time); ?>
                                    </button>

                                </div>
                                <div class="nearbybottom bottom-div">
                                    <span><?php echo esc_html($category); ?></span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><?php echo esc_html($extra_info); ?></span>
                                        <button class="learnmore"><a href="/recipie-detail"
                                                style="text-decoration: none; color: inherit;">Learn More</a></button>
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
    <?php get_template_part('template-parts/recipie-slider'); ?>

</div>
<div class="gradiant_blur"></div>

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
                    <!-- Your existing HTML (unchanged) -->
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

                    <style>
                        .progress-fill::before {
                            width: 50%;
                            transition: width 0.8s ease;
                        }

                        .progress-bar.step-2 .progress-fill::before {
                            width: 100%;
                        }

                        .progress-bar.complete .progress-fill::before {
                            width: 100%;
                        }
                    </style>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const pollWrap = document.querySelector('.right-poll');
                            if (!pollWrap) return;

                            const questionEl = pollWrap.querySelector('h5');
                            const optionsWrap = pollWrap.querySelector('div.d-flex.flex-column');
                            const progressBar = pollWrap.querySelector('.progress-bar');

                            // Step state: 0 = step1, 1 = step2, 2 = finished
                            let step = 0;
                            const answers = {}; // store choices

                            // Utility: clear and create buttons inside optionsWrap
                            function setButtons(labels) {
                                optionsWrap.innerHTML = '';
                                labels.forEach(label => {
                                    const btn = document.createElement('button');
                                    btn.type = 'button';
                                    btn.textContent = label;

                                    // ✅ Apply margin classes to all EXCEPT "Vanilla"
                                    if (label.toLowerCase() !== 'vanilla') {
                                        btn.className = 'mt-6 mt-sm-5';
                                    }

                                    btn.addEventListener('click', onOptionClick);
                                    optionsWrap.appendChild(btn);
                                });
                            }

                            // initial buttons already exist in markup — to ensure consistent listeners,
                            // attach listeners to existing buttons if present, else recreate.
                            const existingBtns = Array.from(optionsWrap.querySelectorAll('button'));
                            if (existingBtns.length) {
                                existingBtns.forEach(b => b.addEventListener('click', onOptionClick));
                            }

                            // Handler for option clicks
                            function onOptionClick(e) {
                                const chosen = e.currentTarget.textContent.trim();

                                if (step === 0) {
                                    // Step 1 chosen
                                    answers.q1 = chosen;

                                    // move to step 2: change question and options
                                    questionEl.innerHTML = 'Which flavor base <br> do you prefer?';
                                    // add class to animate progress from 50% -> 100%
                                    // we use a small timeout so the CSS transition is visible
                                    setTimeout(() => progressBar.classList.add('step-2'), 30);

                                    // set second step options
                                    setButtons(['Chocolate', 'Vanilla']);
                                    step = 1;
                                    return;
                                }

                                if (step === 1) {
                                    // Step 2 chosen
                                    answers.q2 = chosen;

                                    // finish: show thank you and summary
                                    finishPoll();
                                    return;
                                }

                                // if step >= 2, do nothing (already finished)
                            }

                            function finishPoll() {
                                // lock UI: remove buttons and show summary
                                optionsWrap.innerHTML = `
                                    <p class="mt-6 mt-sm-5"></p>
                                    <p style="text-align:center;margin:6px 0 0 0;font-size:.95rem;color:#333;">
                                        You chose: <strong>${answers.q1}</strong> &amp; <strong>${answers.q2}</strong>
                                    </p>
                                    `;

                                // ensure progress shows full and mark complete
                                progressBar.classList.add('complete');
                                progressBar.classList.add('step-2'); // safe-guard: ensure 100%

                                // optional: visually dim the poll to prevent further interaction
                                pollWrap.style.pointerEvents = 'none';
                                pollWrap.style.opacity = '0.98';

                                step = 2;
                            }

                            // If you want to ensure initial buttons get proper spacing / event listeners if markup used,
                            // you can re-render initial buttons using setButtons(['Sweet', 'Savoury']) here instead of relying on markup.
                            // But to keep markup untouched, we used existing buttons above.

                        });
                    </script>

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


<?php get_template_part('template-parts/nearby-store'); ?>

<?php get_footer(); ?>