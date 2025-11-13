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
<div class="hero-recipe-mbl">
        <div class="slider_mobile">
    <div class="slide_mobile active">
    <img src="https://codevaani.com/wp-content/uploads/2025/11/brownie.jpg" alt="">
    <div class="overlayer">
           
            <div class="bottom">
                <span><i class="ri-history-line"></i>1.2Hrs</span>
                <span class="mt-3"><i class="ri-star-line"></i>Easy</span>
                <h2>Vegan Cracker Breakfast</h2>
                <div class="mt-3 d-flex gap-1">
                    <span>Vegan</span>
                    <span>Gluten-Free</span>
                    <span>Gluten-Free</span>
                </div>
            </div>
        </div>
    </div>

    <div class="slide_mobile">
    <img src="https://codevaani.com/wp-content/uploads/2025/11/biscuit.png" alt="">
    <div class="overlayer">
            
            <div class="bottom">
                <span><i class="ri-history-line"></i>1.2Hrs</span>
                <span class="mt-3"><i class="ri-star-line"></i>Easy</span>
                <h2>Vegan Cracker Breakfast</h2>
                <div class="mt-3 d-flex gap-1">
                    <span>Vegan</span>
                    <span>Gluten-Free</span>
                    <span>Gluten-Free</span>
                </div>
            </div>
        </div>
    </div>

    <div class="slide_mobile">
    <img src="https://codevaani.com/wp-content/uploads/2025/11/brownie.jpg" alt="">
    <div class="overlayer">
            
            <div class="bottom">
                <span><i class="ri-history-line"></i>1.2Hrs</span>
                <span class="mt-3"><i class="ri-star-line"></i>Easy</span>
                <h2>Vegan Cracker Breakfast</h2>
                <div class="mt-3 d-flex gap-1">
                    <span>Vegan</span>
                    <span>Gluten-Free</span>
                    <span>Gluten-Free</span>
                </div>
            </div>
        </div>
    </div>
<div class="button_arrow">
    <button class="prev arrow" id="prevSlide"> <i class="ri-arrow-left-s-line"></i></button>
    <!-- <button class="next" id="nextSlide">❯</button> -->
</div>
  </div>
    </div>
<div class="hero-recipe-details pb-5 mb-5 mt-4">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-5 d-none d-sm-block">
                <div class="left-side">
                    <?php
                    // 1️⃣ Featured Image (Post Thumbnail)
                    if (has_post_thumbnail()): ?>
                        <div class="imgs">
                            <?php the_post_thumbnail('large', ['alt' => get_the_title(), 'class' => 'img-fluid']); ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    // 2️⃣ Custom Field Image (ACF)
                    $second_image = get_field('image');
                    if ($second_image):
                        // Works for both Image ID and URL return types
                        if (is_array($second_image) && isset($second_image['url'])) {
                            $second_image_url = $second_image['url'];
                            $second_image_alt = $second_image['alt'] ?: get_the_title();
                        } else {
                            $second_image_url = $second_image;
                            $second_image_alt = get_the_title();
                        }
                        ?>
                        <div class="imgs">
                            <img src="<?php echo esc_url($second_image_url); ?>"
                                alt="<?php echo esc_attr($second_image_alt); ?>" class="img-fluid">
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
                        $category = get_field('categories');
                        if ($category): ?>
                            <button><?php echo esc_html($category); ?></span>
                        <?php endif;
                         $extrainfo = get_field('extrainfo');
                        if ($extrainfo): ?>
                            <button><?php echo esc_html($extrainfo); ?></span>
                        <?php endif; ?>
                    </div>
                    <h6>Turn your everyday Volt Biscuits into a delightful, no-fuss dessert. These easy sandwich
                            bites layer fresh cream and strawberries between crisp biscuits perfect for tea parties,
                            kids’ treats, or a quick sweet fix.</h6>
                    <?php
                    // Time (ACF field: 'time')
                    $description = get_field('description');
                    if ($description): ?>
                        <h6><?php echo esc_html($description); ?></h6>
                    <?php endif; ?>
                    <div class="dets-btn d-sm-flex align-item-center gap-1 mt-3">
                        <?php
                        // Time (ACF field: 'time')
                        $time = get_field('time');
                        if ($time): ?>
                            <button><i class="ri-history-line"></i><?php echo esc_html($time); ?></button>
                        <?php endif; ?>
                        <?php
                        // Time (ACF field: 'difficulty')
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
    <div class="slide_card active">
      <div class="card">
        <div class="card-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/biscuit.png" alt="">
        </div>
        <div class="card-content">
          <h3>Cracker Breakfast</h3>
          <p>Light, flaky and full of flavor, our biscuit crackers bring a
                                                    satisfying crunch to every bite. Perfect for tea-time or gourmet
                                                    pairings.</p>
          <button>Learn More</button>
        </div>
      </div>
    </div>

    <div class="slide_card">
      <div class="card">
        <div class="card-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/biscuit.png" alt="">
        </div>
        <div class="card-content">
          <h3>Oat Cookies</h3>
          <p>Light, flaky and full of flavor, our biscuit crackers bring a
                                                    satisfying crunch to every bite. Perfect for tea-time or gourmet
                                                    pairings.</p>
          <button>Learn More</button>
        </div>
      </div>
    </div>

    <div class="slide_card">
      <div class="card">
        <div class="card-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/biscuit.png" alt="">
        </div>
        <div class="card-content">
          <h3>Nutty Delight</h3>
          <p>Light, flaky and full of flavor, our biscuit crackers bring a
                                                    satisfying crunch to every bite. Perfect for tea-time or gourmet
                                                    pairings.</p>
          <button>Learn More</button>
        </div>
      </div>
    </div>

    <!-- Progress bar (dots) -->
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