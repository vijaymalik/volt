<?php
/**
 * Template Name: Recipe Detail Page (Volt)
 * Template Post Type: recipe
 * Description: Displays a recipe with Elementor content and ACF fields.
 */
get_header();
?>

<div class="breadcrumb">
    <a href="<?php echo esc_url(home_url()); ?>">Home</a>
    <span>/</span>
    <a href="<?php echo esc_url(site_url('/recipes')); ?>">Our Recipe</a>
    <span>/</span>
    <span class="active"><?php the_title(); ?></span>
</div>
<?php
//  Custom Fields (ACF)
$first_image = get_field('image');
if ($first_image) {
    // Works for both Image ID and URL return types
    if (is_array($first_image) && isset($first_image['url'])) {
        $first_image_url = $first_image['url'];
        $first_image_alt = $first_image['alt'] ?: get_the_title();
    } else {
        $first_image_url = $first_image;
        $first_image_alt = get_the_title();
    }
}
$second_image = get_field('image_1');
if ($second_image) {
    // Works for both Image ID and URL return types
    if (is_array($second_image) && isset($second_image['url'])) {
        $second_image_url = $second_image['url'];
        $second_image_alt = $second_image['alt'] ?: get_the_title();
    } else {
        $second_image_url = $second_image;
        $second_image_alt = get_the_title();
    }
}
$third_image = get_field('image_2');
if ($third_image) {
    // Works for both Image ID and URL return types
    if (is_array($third_image) && isset($third_image['url'])) {
        $third_image_url = $third_image['url'];
        $third_image_alt = $third_image['alt'] ?: get_the_title();
    } else {
        $third_image_url = $third_image;
        $third_image_alt = get_the_title();
    }
}
$time = get_field('time');
$category = get_field('categories');
$extrainfo = get_field('extrainfo');
$description = get_field('description');
$difficulty = get_field('difficulty');
?>
<div class="hero-recipe-mbl">
    <div class="slider_mobile">

        <?php  
        // Build an array of images from ACF fields  
        $slides = [];

        if (!empty($first_image_url)) {
            $slides[] = [
                'url' => $first_image_url,
                'alt' => $first_image_alt,
            ];
        }
        if (!empty($second_image_url)) {
            $slides[] = [
                'url' => $second_image_url,
                'alt' => $second_image_alt,
            ];
        }
        if (!empty($third_image_url)) {
            $slides[] = [
                'url' => $third_image_url,
                'alt' => $third_image_alt,
            ];
        }

        // Loop through ACF images and display them as slides
        $s_index = 0;
        foreach ($slides as $slide):
        ?>

            <div class="slide_mobile <?php echo $s_index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo esc_url($slide['url']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>">

                <div class="overlayer">
                    <div class="bottom">

                        <?php if ($time): ?>
                            <span><i class="ri-history-line"></i><?php echo esc_html($time); ?></span>
                        <?php endif; ?>

                        <?php if ($difficulty): ?>
                            <span class="mt-3"><i class="ri-star-line"></i><?php echo esc_html($difficulty); ?></span>
                        <?php endif; ?>

                        <h2><?php the_title(); ?></h2>

                        <div class="mt-3 d-flex gap-1">
                            <?php if ($category): ?>
                                <span><?php echo esc_html($category); ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>

        <?php  
        $s_index++;
        endforeach;
        ?>

        <div class="button_arrow">
            <button class="prev arrow" id="prevSlide">
                <img src="https://codevaani.com/wp-content/themes/volt-elementor/assets/images/Back-Button-2.png"
                    alt="">
            </button>
        </div>
    </div>
</div>


<div class="hero-recipe-details pb-5 mb-5 mt-4">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-5 d-none d-sm-block">
                <div class="left-side">
                    <?php
                    if (! empty( $first_image_url ) ):
                        ?>
                        <div class="imgs">
                            <img src="<?php echo esc_url($first_image_url); ?>"
                                alt="<?php echo esc_attr($first_image_alt); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>
                      <?php
                    if (! empty( $second_image_url ) ):
                        ?>
                        <div class="imgs">
                            <img src="<?php echo esc_url($second_image_url); ?>"
                                alt="<?php echo esc_attr($second_image_alt); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>
                      <?php
                    if (! empty( $third_image_url ) ):
                        ?>
                        <div class="imgs">
                            <img src="<?php echo esc_url($third_image_url); ?>"
                                alt="<?php echo esc_attr($third_image_alt); ?>" class="img-fluid">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-sm-7">
                <div class="right-side">
                    <h1 class="d-none d-sm-block"><?php the_title(); ?></h1>
                    <h1 class="d-block d-sm-none">Description</h1>
                    <div class="vegans-btn">
                        <?php
                        if ($category): ?>
                            <button><?php echo esc_html($category); ?></span>
                            <?php endif;
                        if ($extrainfo): ?>
                                <button><?php echo esc_html($extrainfo); ?></span>
                                <?php endif; ?>
                    </div>
                    <?php
                    if ($description): ?>
                        <h6><?php echo esc_html($description); ?></h6>
                    <?php endif; ?>
                    <div class="dets-btn d-sm-flex align-item-center gap-1 mt-3">
                        <?php
                        $time = get_field('time');
                        if ($time): ?>
                            <button><i class="ri-history-line"></i><?php echo esc_html($time); ?></button>
                        <?php endif; ?>
                        <?php
                        $difficulty = get_field('difficulty');
                        if ($difficulty): ?>
                            <button><img height="18" width="18"
                                    src="https://codevaani.com/wp-content/uploads/2025/11/chef-hat.png"
                                    alt=""><?php echo esc_html($difficulty); ?> (Cooking
                                Type)</button>
                        <?php endif; ?>


                    </div>
                    <?php the_content(); ?>
                    <!-----------slider-code------>
                    <div class="made-with position-relative slider_madewith">
                        <h2>Made with</h2>
                        <div class="card-slider">

                            <?php
                            // Query 3 more recipes
                            $madewith = new WP_Query([
                                'post_type' => 'recipe',
                                'posts_per_page' => 3,
                                'post__not_in' => [get_the_ID()],
                            ]);

                            if ($madewith->have_posts()):
                                $m_index = 0;

                                while ($madewith->have_posts()):
                                    $madewith->the_post();

                                    $mw_img = get_field('image');
                                    $mw_img_url = '';

                                    if ($mw_img) {
                                        $mw_img_url = is_array($mw_img) ? $mw_img['url'] : $mw_img;
                                    } else {
                                        $mw_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                    }
                                    $description = get_field('description');
                                    ?>


                                    <div class="slide_card <?php echo $m_index === 0 ? 'active' : ''; ?>">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="<?php echo esc_url($mw_img_url); ?>" alt="<?php the_title(); ?>">
                                            </div>

                                            <div class="card-content">
                                                <h3><?php the_title(); ?></h3>

                                                <p><?php echo wp_trim_words(esc_html($description), 20); ?></p>

                                                <a href="<?php the_permalink(); ?>"> <button>Learn More</button></a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $m_index++;
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                            <!-- dots -->
                            <div class="card-dots">
                                <span class="dot_card active"></span>
                                <span class="dot_card"></span>
                                <span class="dot_card"></span>
                            </div>

                        </div>
                    </div>

                    <!-------slider-code end------>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/did-you'); ?>
<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>