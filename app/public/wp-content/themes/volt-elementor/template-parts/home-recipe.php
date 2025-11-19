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
                    $time = get_field('time') ?: '20 mins';
                    $category = get_field('categories') ?: 'Vegan';
                    $extra_info = get_field('extra_info') ?: 'Gluten Free';

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
                                        <button class="learnmore"><a href="<?php echo esc_url( site_url( '/recipe-detail/' . $post->post_name ) ); ?>"
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
    <?php get_template_part('template-parts/recipe-slider'); ?>

</div>
<div class="gradiant_blur"></div>
