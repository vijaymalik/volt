<div class="our-recipe-hero">
    <?php
    // Fetch the latest recipe
    $top_recipe = new WP_Query([
        'post_type' => 'recipe',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
    ]);

    if ($top_recipe->have_posts()):
        while ($top_recipe->have_posts()):
            $top_recipe->the_post();

            // Get custom fields
            $category = get_field('categories') ?: 'Vegan';
            $extra_info = get_field('extrainfo') ?: 'Gluten Free';
            $image = get_field('image');
            $image_url = '';

            if ($image) {
                if (is_array($image) && isset($image['url'])) {
                    $image_url = $image['url'];
                } elseif (is_numeric($image)) {
                    $image_url = wp_get_attachment_image_url($image, 'full');
                } else {
                    $image_url = $image;
                }
            } else {
                $image_url = get_template_directory_uri() . '/assets/images/our-recipe-banner.jpg';
            }
            ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <div class="recipe-overlayer">
                <div class="recipe-bottom">
                    <div class="d-flex align-items-center gap-2">
                        <button type="button"><?php echo esc_html($category); ?></button>
                        <button type="button"><?php echo esc_html($extra_info); ?></button>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <p><?php get_field('description') ?: ''; ?></p><a href="<?php echo esc_url( site_url( '/recipe-detail/' . $post->post_name ) ); ?>">
                    <button class="learn-morebtn" type="button">Learn More</button></a>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else:
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-recipe-banner.jpg" alt="">
        <div class="recipe-overlayer">
            <div class="recipe-bottom">
                <div class="d-flex align-items-center gap-2">
                    <button type="button">Vegan</button>
                    <button type="button">Gluten Free</button>
                </div>
                <h1>Chip Cookies Brownie</h1>
                <p>Discover our flagship favorites trusted by generations,<br> loved by every Fijian home.</p>
                <button class="learn-morebtn" type="button">Learn More</button>
            </div>
        </div>
    <?php endif; ?>
</div>