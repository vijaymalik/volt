<?php 
// Get latest product
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 1
);
$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();

        // Dynamic fields
        $title      = get_the_title();
        $excerpt    = get_the_excerpt();
        $image      = get_the_post_thumbnail_url(get_the_ID(), 'full');
        
        // Optional ACF fields
        $subtitle   = get_field('banner_subtitle') ?: 'Introducing';
        //$tagline    = get_field('banner_tagline') ?: '';
        $tagline    = get_field('banner_text') ?: '';
        $buttonText = get_field('banner_button_text') ?: 'Find In Nearby Stores';
        $mobileImg  = get_field('banner_image_mobile') ?: $image;
?>

<!-- Desktop Banner -->
<div class="home-banner home-banner-dsk">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/BG.png'); ?>" alt="">
    
    <div class="home-overlayer">
        <div class="intro_volt">
            <div>
                <div class="introduction_img">
                    <h6><?php echo esc_html($subtitle); ?></h6>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Line-border.png'); ?>" alt="">
                </div>

                <h1><?php echo esc_html($title); ?></h1>

                <div class="explore-button">
                    <button><?php echo esc_html($buttonText); ?></button>
                </div>
            </div>

            <div>
                <div class="crunchy_div">
                    <?php if ($tagline): ?>
                        <?php echo wp_kses_post($tagline); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="home-img">
            <img src="<?php echo esc_url($image); ?>" alt="">
        </div>
    </div>
</div>

<!-- Mobile Banner -->
<div class="home-banner home-banner-mbl">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/BG-mbl.png'); ?>" alt="">

    <div class="home-overlayer">
        <div class="intro_volt">
            <div>
                <div class="introduction_img">
                    <h6><?php echo esc_html($subtitle); ?></h6>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Line-border.png'); ?>" alt="">
                </div>

                <h1><?php echo esc_html($title); ?></h1>

                <div class="explore-button">
                    <button><?php echo esc_html($buttonText); ?></button>
                </div>
            </div>

            <div>
                <div class="crunchy_div">
                    <?php if ($tagline): ?>
                        <h5><?php echo esc_html($tagline); ?></h5>
                    <?php endif; ?>

                    <p><?php echo esc_html($excerpt); ?></p>
                </div>
            </div>
        </div>

        <div class="home-img">
            <img src="<?php echo esc_url($mobileImg); ?>" alt="">
        </div>
    </div>
</div>

<?php
    endwhile;
endif;
wp_reset_postdata();
?>
