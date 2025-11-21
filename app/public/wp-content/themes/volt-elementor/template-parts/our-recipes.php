<div class="our-recipes-mbl px-4 mt-2 position-relative">
    <h2>Our Recipes</h2>
    <?php
    $page = get_page_by_path('recipes'); // page slug
    
    if ($page) {
        $mobile_desc = get_field('mobile_description', $page->ID);
        if ($mobile_desc) {
            ?>
            <p><?php echo wp_kses_post($mobile_desc); ?></p>
            <?php
        }
    } else {
        ?>
        <p>
            Make snack time exciting! Discover quick, tasty <br>
            ways to enjoy from classic tea-time treats to fun, <br>
            family-friendly desserts.
        </p>
        <?php
    }
    ?>


    <?php get_template_part('template-parts/recipe-slider'); ?>
</div>

<?php
function get_initials($string)
{
    if (empty($string))
        return '';

    $words = preg_split('/\s+/', trim($string));

    $initials = '';
    foreach ($words as $w) {
        $initials .= strtoupper($w[0]);
    }

    return $initials;
}
?>

<div class="other-recipe-container">
    <div class="other-recipe">

        <!-- Header Section -->
        <div class="header-section">
            <h2>Other Recipes</h2>

            <div class="tabs-container top-section">

                <button class="tab-button <?= (!isset($_GET['cat']) || $_GET['cat'] == 'all') ? 'active' : '' ?>"
                    onclick="window.location='?cat=all'">
                    All Recipes
                </button>

                <button class="tab-button <?= (isset($_GET['cat']) && $_GET['cat'] == 'Vegan') ? 'active' : '' ?>"
                    onclick="window.location='?cat=Vegan'">
                    Vegan
                </button>

                <button class="tab-button <?= (isset($_GET['cat']) && $_GET['cat'] == 'Vegeterian') ? 'active' : '' ?>"
                    onclick="window.location='?cat=Vegeterian'">
                    Plant-Based
                </button>

                <button
                    class="tab-button <?= (isset($_GET['cat']) && $_GET['cat'] == 'Non Vegeterian') ? 'active' : '' ?>"
                    onclick="window.location='?cat=Non Vegeterian'">
                    Non Vegeterian
                </button>

            </div>
        </div>


        <div class="slider-wrapper">

            <?php
            // Get selected filter
            $selected_cat = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : 'all';

            // WP Query Args
            $args = [
                "post_type" => "recipe",
                "posts_per_page" => -1,
                "orderby" => "date",
                "order" => "DESC",
            ];

            // Apply ACF category filter
            if ($selected_cat !== "all") {
                $args['meta_query'] = [
                    [
                        "key" => "categories",
                        "value" => $selected_cat,
                        "compare" => "=",
                    ]
                ];
            }

            $recipe_query = new WP_Query($args);

            // Pagination settings
            $items_per_page = 8;
            $total_items = $recipe_query->post_count;
            $total_pages = ceil($total_items / $items_per_page);

            $page = isset($_GET['pg']) ? intval($_GET['pg']) : 1;
            if ($page < 1)
                $page = 1;

            $start = ($page - 1) * $items_per_page;
            ?>

            <div class="products-grid" id="productsGrids">

                <?php
                if ($recipe_query->have_posts()):

                    $recipes = $recipe_query->posts;
                    $recipes_slice = array_slice($recipes, $start, $items_per_page);

                    foreach ($recipes_slice as $post):
                        setup_postdata($post);

                        $image = get_field("image", $post->ID);
                        $category = get_field("categories", $post->ID);
                        $extra = get_field("extrainfo", $post->ID);
                        $difficulty = get_field("difficulty", $post->ID);
                        $time = get_field("time", $post->ID);

                        // Image logic
                        if ($image) {
                            $img_url = is_array($image) ? $image["url"] : $image;
                        } else {
                            $img_url = get_the_post_thumbnail_url($post->ID, "medium");
                        }
                        ?>

                        <div class="cards recipe-card">
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                        class="product-image">
                                </div>

                                <div class="details">
                                    <h3><?php the_title(); ?></h3>

                                    <div class="details-bottom d-flex align-items-center">

                                        <div class="detail-item">
                                            <span><i class="ri-history-line"></i> <?= esc_html($time ?: "20min"); ?></span>
                                            <h6>Cooking Time</h6>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="detail-item">
                                            <div class="category-tags">
                                                <div class="category-tag">
                                                    <?= esc_html(get_initials($category) ?: "V"); ?>
                                                </div>
                                                <div class="category-tag">
                                                    <?= esc_html(get_initials($extra) ?: "GF"); ?>
                                                </div>
                                            </div>
                                            <h6>Category</h6>
                                        </div>

                                        <div class="divider"></div>

                                        <div class="detail-item">
                                            <span><i class="ri-star-line"></i> <?= esc_html($difficulty ?: "Easy"); ?></span>
                                            <h6>Difficulty</h6>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php
                    endforeach;

                else:
                    echo "<p>No recipes found.</p>";
                endif;

                wp_reset_postdata();
                ?>

            </div> <!-- products-grid -->


            <!-- Pagination Section -->
            <div class="pagination-section">

                <a class="nav-button" href="?pg=<?= max(1, $page - 1); ?>&cat=<?= urlencode($selected_cat); ?>">
                    <i class="ri-arrow-left-s-line left"></i>
                </a>

                <div class="pagination-info">
                    <span id="currentPage"><?= str_pad($page, 2, "0", STR_PAD_LEFT); ?></span> /
                    <span id="totalPages"><?= str_pad($total_pages, 2, "0", STR_PAD_LEFT); ?></span>
                </div>

                <a class="nav-button"
                    href="?pg=<?= min($total_pages, $page + 1); ?>&cat=<?= urlencode($selected_cat); ?>">
                    <i class="ri-arrow-right-s-line right"></i>
                </a>

            </div>

        </div> <!-- slider-wrapper -->

    </div>
</div>