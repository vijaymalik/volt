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