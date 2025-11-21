<?php
$products = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
]);

if ($products->have_posts()):
    ?>
    <div class="our-products-slider swiper">
        <div class="swiper-wrapper">

            <?php while ($products->have_posts()):
                $products->the_post(); ?>

                <?php
                // Product fields
                $product_title = get_the_title();
                $product_desc = get_field('description');
                $background = get_field('background');
                $product_image = get_field('product_image');

                // Nutrients (4 items)
                $nutrients = [];
                for ($i = 1; $i <= 4; $i++) {
                    $group = get_field("nutrient_item_$i");
                    if (!empty($group['nutrient_label']) && !empty($group['nutrient_value'])) {
                        $nutrients[] = $group;
                    }
                }

                ?>

                <div class="swiper-slide">
                    <div class="our-product-parent">
                        <div class="our-products">

                            <!-- Product Image -->
                            <?php if ($background): ?>
                                <img src="<?php echo esc_url($background['url']); ?>" alt="">
                            <?php endif; ?>

                            <div class="overlayer">

                                <!-- Left Section -->
                                <div class="left-div">
                                    <h2><?php echo esc_html($product_title); ?></h2>

                                    <?php if ($product_desc): ?>
                                        <p><?php echo esc_html($product_desc); ?></p>
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>">
                                        <button>Explore Product</button>
                                    </a>
                                </div>

                                <!-- Center Section -->
                                <div class="center-div">

                                    <?php if ($product_image): ?>
                                        <img class="milk" src="<?php echo esc_url($product_image['url']); ?>" alt="">
                                    <?php endif; ?>

                                    <div class="bottom-sec">

                                        <?php foreach ($nutrients as $index => $n): ?>
                                            <div class="text-center">
                                                <p><?php echo esc_html($n['nutrient_label']); ?> <br> up to</p>
                                                <h3><?php echo esc_html($n['nutrient_value']); ?></h3>
                                            </div>

                                            <?php if ($index < count($nutrients) - 1): ?>
                                                <div class="line"></div>
                                            <?php endif; ?>

                                        <?php endforeach; ?>

                                    </div><!-- bottom-sec -->

                                </div><!-- center-div -->

                                <!-- Right Section -->
                                <div class="right-div">
                                    <div class="right-sec-div">
                                        <h4>Our Products</h4>
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

                            </div><!-- overlayer -->

                        </div><!-- our-products -->
                    </div><!-- our-product-parent -->
                </div><!-- swiper-slide -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div><!-- swiper-wrapper -->
    </div><!-- swiper -->
<?php endif; ?>
<div class="our-product-mbl">
    <h2>Our Products</h2>
    <?php
    $page = get_page_by_path('products'); // page slug
    
    if ($page) {
        $mobile_desc = get_field('mobile_description', $page->ID);
        if ($mobile_desc) {
            ?>
            <p><?php echo wp_kses_post($mobile_desc); ?></p>
            <?php
        }
    } else {
        ?>
        <p>Discover our flagship favorites trusted by <br> generations, loved by every Fijian home.</p>
        <?php
    }
    ?>

    <div class="slider-container">
        <div class="slider">

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $products = new WP_Query($args);

            if ($products->have_posts()):
                while ($products->have_posts()):
                    $products->the_post();

                    // Product fields
                    $product_title = get_the_title();
                    $product_image = get_field('product_image');
                    $background = get_field('background');

                    // Nutrients
                    $nutrients = [];
                    for ($i = 1; $i <= 2; $i++) {
                        $group = get_field("nutrient_item_$i");
                        if (!empty($group['nutrient_label']) && !empty($group['nutrient_value'])) {
                            $nutrients[] = $group;
                        }
                    }
                    ?>

                    <div class="slide our-product-mid" style="background: <?php echo esc_attr($background); ?>;">
                        <h2><?php echo esc_html($product_title); ?></h2>

                        <?php if (!empty($product_image)): ?>
                            <img src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_title); ?>">
                        <?php endif; ?>

                        <?php if (!empty($nutrients)): ?>
                            <div class="bottom-sec">
                                <?php foreach ($nutrients as $index => $nutrient): ?>
                                    <div>
                                        <h6><?php echo esc_html($nutrient['nutrient_label']); ?><br> up to</h6>
                                        <h1><?php echo esc_html($nutrient['nutrient_value']); ?></h1>
                                    </div>

                                    <?php if ($index !== count($nutrients) - 1): ?>
                                        <div class="line"></div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                    </div>

                <?php endwhile;
                wp_reset_postdata(); endif; ?>

        </div>

        <!-- Dynamic progress indicators -->
        <?php if ($products->found_posts > 1): ?>
            <div class="progress-bar-new">
                <?php for ($p = 0; $p < $products->found_posts; $p++): ?>
                    <div class="progress-segment"></div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>

    </div>
</div>