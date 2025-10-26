    <div class="swiper mySwiper our-recipe-slider">
        <div class="swiper-wrapper">
            <?php
            $recipes = new WP_Query(array(
                'post_type' => 'recipe',
                'posts_per_page' => 5,
            ));

            $default_image = get_template_directory_uri() . '/assets/images/default-recipe.jpg';

            if ($recipes->have_posts()):
                while ($recipes->have_posts()):
                    $recipes->the_post();

                    $time = get_field('time') ?: '1.2Hrs';
                    $category = get_field('categories') ?: 'Vegan';
                    $extra_info = get_field('extrainfo') ?: 'Gluten-Free';

                    $image_field = get_field('image');
                    if ($image_field) {
                        if (is_array($image_field) && isset($image_field['url'])) {
                            $image_url = $image_field['sizes']['medium'] ?? $image_field['url'];
                        } elseif (is_numeric($image_field)) {
                            $image_url = wp_get_attachment_image_url($image_field, 'medium');
                        } else {
                            $image_url = $image_field;
                        }
                    } else {
                        $image_url = $default_image;
                    }
            ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                    <div class="overlay">
                        <div class="top d-flex justify-content-between">
                            <h4><?php the_title(); ?></h4>
                            <button class="d-flex gap-2"><i class="ri-history-line"></i> <?php echo esc_html($time); ?></button>
                        </div>
                        <div class="top d-flex align-items-center justify-content-between">
                            <div>
                                <div><button><?php echo esc_html($category); ?></button></div>
                                <div><button><?php echo esc_html($extra_info); ?></button></div>
                            </div>
                            <div class="learn-more">
                                <button><a href="/recipie-detail" style="text-decoration: none; color: inherit;">Learn More</a></button>
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
    