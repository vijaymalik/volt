<div class="our-recipe-hero">

<?php
// Fetch 3 recipes for slider
$recipes_slider = new WP_Query([
    "post_type"      => "recipe",
    "posts_per_page" => 3,
    "orderby"        => "date",
    "order"          => "DESC",
]);

if ($recipes_slider->have_posts()):
?>
    <div class="slider_new">
        <div class="slides_new">

            <?php 
            $slide_index = 0;
            while ($recipes_slider->have_posts()): 
                $recipes_slider->the_post();

                // ACF fields
                $category   = get_field("categories") ?: "Vegan";
                $extra_info = get_field("extrainfo") ?: "Gluten Free";
                $image      = get_field("image");

                if ($image) {
                    $img_url = is_array($image) ? $image["url"] : $image;
                } else {
                    $img_url = get_the_post_thumbnail_url(get_the_ID(), "full");
                }
            ?>

            <!-- Single Slide -->
            <div class="slide_new <?php echo $slide_index === 0 ? "active" : ""; ?>">
                <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title(); ?>">

                <div class="recipe-overlayer">
                    <div class="recipe-bottom">

                        <div class="d-flex align-items-center gap-2">
                            <button type="button"><?php echo esc_html($category); ?></button>
                            <button type="button"><?php echo esc_html($extra_info); ?></button>
                        </div>

                        <h1><?php the_title(); ?></h1>

                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, "..."); ?></p>

                        <a href="<?php the_permalink(); ?>">
                            <button class="learn-morebtn" type="button">Learn More</button>
                        </a>

                    </div>
                </div>
            </div>

            <?php 
            $slide_index++;
            endwhile; 
            ?>
        </div>

        <!-- Thumbnails -->
        <div class="thumbnail-container">
            <span class="thumb-nav prev">
                <i class="ri-arrow-left-s-line left"></i>
            </span>

            <div class="thumbnails_new">
                <?php 
                // Reset to generate thumbnails
                $recipes_slider->rewind_posts();
                $thumb_index = 0;

                while ($recipes_slider->have_posts()):
                    $recipes_slider->the_post();
                    $image = get_field("image");

                    if ($image) {
                        $thumb_img = is_array($image) ? $image["url"] : $image;
                    } else {
                        $thumb_img = get_the_post_thumbnail_url(get_the_ID(), "medium");
                    }
                ?>
                <img 
                    src="<?php echo esc_url($thumb_img); ?>" 
                    class="thumb_new <?php echo $thumb_index === 0 ? 'active-thumb' : ''; ?>" 
                    data-index="<?php echo $thumb_index; ?>" 
                    alt="<?php the_title(); ?>"
                />

                <?php 
                $thumb_index++;
                endwhile; 
                ?>
            </div>
        </div>

    </div> <!-- slider_new end -->

<?php 
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
