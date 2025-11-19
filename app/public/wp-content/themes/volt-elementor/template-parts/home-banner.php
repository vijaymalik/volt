<?php
// Fetch the latest Topbar Detail post
$topbar_query = new WP_Query(array(
    'post_type' => 'topbar_detail',
    'posts_per_page' => 1,
));
        // Fallbacks
        $default_back_image = get_template_directory_uri() . '/assets/images/banner.jpg';
        $default_product_image = get_template_directory_uri() . '/assets/images/banner-backup.png';
        $default_heading_html = '<h6>Quality you trust.</h6><h1>Taste You Love.</h1>';
        $default_button_link = home_url(path: '/products');

if ($topbar_query->have_posts()):
    while ($topbar_query->have_posts()):
        $topbar_query->the_post();

        // Get ACF fields
        $banner_back_image = get_field('banner_back_image');
        $banner_product_image = get_field('banner_product_image');
        $heading_html = get_field('heading');
        $button_link = get_field('button_link');


        ?>

        <div class="home-banner">
            <img src="<?php echo esc_url($banner_back_image['url'] ?? $default_back_image); ?>" alt="">
            <div class="home-overlayer">
                <?php
                // Show custom or fallback heading
                echo !empty($heading_html) ? $heading_html : $default_heading_html;
                ?>
                <div class="home-img">
                    <img src="<?php echo esc_url($banner_product_image['url'] ?? $default_product_image); ?>" alt="">
                </div>
                <div class="explore-button">
                   <a href="<?php echo esc_url($button_link ?? $default_button_link); ?>"> <button>Explore Product</button></a>
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
        <img src="<?php echo esc_url( $default_back_image); ?>" alt="">
        <div class="home-overlayer">
             echo $default_heading_html;
            <div class="home-img">
                <img src="<?php echo esc_url($default_product_image); ?>" alt="">
            </div>
            <div class="explore-button">
                 <a href="<?php echo esc_url($default_button_link); ?>"> <button>Explore Product</button></a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
// Fetch latest Topbar Detail post
$topbar_query = new WP_Query(array(
    'post_type' => 'topbar_detail',
    'posts_per_page' => 1,
));

if ($topbar_query->have_posts()):
    while ($topbar_query->have_posts()):
        $topbar_query->the_post();

        // Get custom field (ACF) - can be string or array
        $marque_detail = get_field('marque_detail'); // ACF field name

        // Icon source (escaped)
        $icon_src = trailingslashit(get_template_directory_uri()) . 'assets/images/light (2).png';
        $icon_img = '<img height="25" width="25" src="' . esc_url($icon_src) . '" alt="">';

        // Prepare items array:
        $items = array();

        if (!empty($marque_detail)) {
            if (is_array($marque_detail)) {
                // ACF returned an array (checkboxes, repeater, select multiple)
                $items = array_map('trim', $marque_detail);
            } else {
                // ACF returned a string — allow comma separated values
                $marque_detail = trim($marque_detail);
                if (strpos($marque_detail, ',') !== false) {
                    $items = array_map('trim', explode(',', $marque_detail));
                } else {
                    $items = array($marque_detail);
                }
            }

            // Remove empty items
            $items = array_filter($items, function ($v) {
                return $v !== '';
            });
        }

        // Default fallback items if ACF provided nothing usable
        $default_items = array(
            'NO ADDITIONAL PRESERVATIVES',
            'LOW CALORIE',
            'NATURAL INGREDIENTS',
        );

        if (empty($items)) {
            $items = $default_items;
        }
        ?>
        <div class="marques home-marquee mt-sm-5 pt-sm-5">
            <div class="marque-content text-black">
                <?php
                // Repeat outputs (at least 12). Change $repeat to alter number.
                $repeat = 12;
                $count = count($items);

                for ($i = 0; $i < $repeat; $i++) {
                    $current = $items[$i % $count];
                    echo '<span class="text-black mx-5 px-5">' . esc_html($current) . '</span>';
                    echo $icon_img;
                }
                ?>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else:
    // If no topbar_detail post exists — show default repeating block
    $icon_src = trailingslashit(get_template_directory_uri()) . 'assets/images/light (2).png';
    $icon_img = '<img height="25" width="25" src="' . esc_url($icon_src) . '" alt="">';
    $default_items = array(
        'NO ADDITIONAL PRESERVATIVES',
        'LOW CALORIE',
        'NATURAL INGREDIENTS',
    );
    ?>
    <div class="marques mt-sm-5 pt-sm-5">
        <div class="marque-content text-black">
            <?php
            $repeat = 12;
            $count = count($default_items);
            for ($i = 0; $i < $repeat; $i++) {
                $current = $default_items[$i % $count];
                echo '<span class="text-black mx-5 px-5">' . esc_html($current) . '</span>';
                echo $icon_img;
            }
            ?>
        </div>
    </div>
<?php endif; ?>