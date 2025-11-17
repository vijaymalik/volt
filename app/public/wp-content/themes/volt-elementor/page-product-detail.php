<?php
/**
 * Template Name: Product Detail Page (Volt)
 * Template Post Type: products
 * Description: Displays a products with Elementor content and ACF fields.
 */
get_header();
?>

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
            $default_back_image = get_template_directory_uri() . '/assets/images/BG.png';
            $default_product_image = get_template_directory_uri() . '/assets/images/product-volt.png';
            $default_heading_html = '<h6>Quality you trust.</h6><h1>Taste You Love.</h1>';
            ?>
              
            <div class="home-banner">
                <img src="<?php echo esc_url($banner_back_image['url'] ?? $default_back_image); ?>" alt="">
                <div class="home-overlayer">
              <div class="intro_volt">
                <div>
                    <div class="introduction_img">
                    <h6>Introducing</h6>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Line-border.png'); ?>" alt="">
                 </div>
                    <h1>Volt Milk Powder</h1>
                     <div class="explore-button">
                        <button>Find In Nearby Stores</button>
                     </div>
                </div>
                <div>
                    <div class="crunchy_div">
                    <h5>Crunchy, light, and perfectly sweet. Volt are your anytime pick-me-up.</h5>
                    <p>Volt Milk Powder brings rich, creamy nourishment to every moment—just mix and enjoy wherever </p>
                  </div>
                </div>
            </div>
                    <div class="home-img">
                        <img src="<?php echo esc_url($banner_product_image['url'] ?? $default_product_image); ?>" alt="">
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
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner-backup.png'); ?>"
                        alt="">
                </div>
                <div class="explore-button">
                    <button>Explore Product</button>
                </div>
            </div>
        </div>
    <?php endif; ?>

 <div class="rotate-div">
    <div class="rotate_bg">
        <!-- Header -->
        <div class="header">
            <h1>The Volt Promise</h1>
            <p>Volt Milk Powder brings rich, creamy nourishment to every moment—just mix and enjoy wherever</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/light (2).png" alt="">
        </div>

        <!-- Main Content -->
        <div class="content-wrapper">
            <!-- Landscape Elements -->
            <!-- <div class="landscape-left"></div>
            <div class="landscape-right"></div> -->

            <!-- Decorative Birds -->
            <!-- <div class="bird bird-left">🕊️</div>
            <div class="bird bird-right">🕊️</div> -->

            <!-- Product Center -->
            <!-- <div class="product-center"></div> -->

            <!-- Cards Grid -->
            <div class="cards-grid">
                <div class="card card-navy">
                    <h3>Perfect Tea-Time Partner</h3>
                    <p>Experience the perfect blend of flavor and smoothness with our premium tea-time milk powder</p>
                </div>

                <div class="card card-purple">
                    <h3>100% <br>Vegetarian</h3>
                    <p>Made for all, loved by vegetarians—wholesome and delicious!</p>
                </div>

                <div class="card card-blue">
                    <h3>Light & <br>Crunchy</h3>
                    <p>Enjoy the perfect crunch with a light taste—zero compromise on flavor</p>
                </div>

                <div class="card card-light-purple">
                    <h3>No Artificial <br>Flavours</h3>
                    <p>Flavor that's real—pure ingredients you can trust</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ingredients-section-desktop">
<div class="row">
    <div class="col-5">
        <div class="content-ing">
            <h2>Ingredients & Nutrients</h2>
            <p>
            Volt Milk Powder delivers pure milk solids, proteins, calcium, vitamins, and minerals. Rich in protein and calcium, Volt Milk Powder delivers creamy, pure nourishment.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ingredients-container.png" alt="">
        </div>
    </div>
    <div class="col-7">
    <div class="content-img">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bird2.png" alt="">
    <div class="image-collabe">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Poll.png" alt="">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/milk-new.png" alt="">

    </div>

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
                                            <button class="learnmore"><a href="<?php echo home_url('/recipie-detail'); ?>"
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png"
                                        alt="">
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


<script>
const cards = document.querySelectorAll('.card');

// Assign left/right & keep rotation untouched
cards.forEach((card, index) => {
  // Store original rotation angle
  const style = getComputedStyle(card);
  const matrix = new WebKitCSSMatrix(style.transform);
  const angle = Math.round(Math.atan2(matrix.b, matrix.a) * (180/Math.PI));

  card.style.setProperty('--rot', angle + "deg");

  if (index % 2 === 0) {
    card.classList.add("left-effect");
  } else {
    card.classList.add("right-effect");
  }
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
}, { threshold: 0.2 });

cards.forEach(card => observer.observe(card));
</script>
<?php the_content(); ?>
<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>