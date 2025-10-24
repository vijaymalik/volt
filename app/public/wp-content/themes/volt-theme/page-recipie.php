<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/our-recipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php get_template_part('header', 'volt'); ?>

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
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="learn-morebtn" type="button">Learn More</a>
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


    <div class="our-recipes-mbl px-4 mt-2 position-relative">
        <h2>Our Recipes</h2>
        <p>Make snack time exciting! Discover quick, tasty <br> ways to enjoy from classic tea-time treats to fun, <br>
            family-friendly desserts.</p>
        <?php get_template_part('template-parts/recipie-slider'); ?>
    </div>

    <div class="other-recipe-container">
        <div class="other-recipe">
            <div class="d-lg-flex align-items-center justify-content-between">
                <h2>Other Recipes</h2>
<div class="d-flex gap-3 top-section" role="tablist" aria-label="Recipe categories">
    <?php
    $taxonomy = 'recipe_category';
    $terms = [];

    if (taxonomy_exists($taxonomy)) {
        $fetched = get_terms([
            'taxonomy'   => $taxonomy,
            'hide_empty' => false,
        ]);
        if (!is_wp_error($fetched) && !empty($fetched)) {
            $terms = $fetched;
        }
    }

    // Always show an "All" button first and make it active by default
    echo '<button type="button" class="active" data-filter="all">All</button>';

    if (empty($terms)) {
        // Fallback categories if taxonomy doesn't exist / is empty
        $fallback = ['Vegan', 'Vegeterian', 'Non Vegeterian'];
        foreach ($fallback as $label) {
            $filter = sanitize_title($label);
            echo '<button type="button" data-filter="' . esc_attr($filter) . '">' . esc_html($label) . '</button>';
        }
    } else {
        // Output real taxonomy terms
        foreach ($terms as $term) {
            $filter = esc_attr($term->slug);
            $label  = esc_html($term->name);
            echo '<button type="button" data-filter="' . $filter . '">' . $label . '</button>';
        }
    }
    ?>
</div>

            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php
                    $recipes = new WP_Query([
                        'post_type' => 'recipe',
                        'posts_per_page' => 12,
                    ]);
                    $default_image = get_template_directory_uri() . '/assets/images/default-recipe.jpg';
                    if ($recipes->have_posts()):
                        while ($recipes->have_posts()):
                            $recipes->the_post();
                            $time = get_field('time') ?: '25 Mins';
                            $extra_info = get_field('extrainfo') ?: 'GF';
                            $category_slugs = [];

                            if (taxonomy_exists($taxonomy)) {
                                $post_terms = get_the_terms(get_the_ID(), $taxonomy);
                                if (!is_wp_error($post_terms) && !empty($post_terms)) {
                                    foreach ($post_terms as $t) {
                                        $category_slugs[] = $t->slug;
                                    }
                                }
                            }

                            if (empty($category_slugs)) {
                                $raw_cat = get_field('categories');
                                if ($raw_cat) {
                                    if (is_array($raw_cat)) {
                                        foreach ($raw_cat as $c) {
                                            if (is_object($c) && isset($c->slug)) {
                                                $category_slugs[] = $c->slug;
                                            } elseif (is_numeric($c)) {
                                                $term = get_term($c);
                                                if ($term && !is_wp_error($term))
                                                    $category_slugs[] = $term->slug;
                                            } else {
                                                $category_slugs[] = sanitize_title($c);
                                            }
                                        }
                                    } else {
                                        if (is_object($raw_cat) && isset($raw_cat->slug)) {
                                            $category_slugs[] = $raw_cat->slug;
                                        } else {
                                            $category_slugs[] = sanitize_title($raw_cat);
                                        }
                                    }
                                }
                            }

                            if (empty($category_slugs)) {
                                $category_slugs[] = 'uncategorized';
                            }

                            $categories_data_attr = implode(',', array_unique($category_slugs));
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
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 recipe-col"
                                data-categories="<?php echo esc_attr($categories_data_attr); ?>">
                                <div class="cards recipe-card">
                                    <div class="img">
                                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="details">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="details-bottom d-flex align-items-center gap-1">
                                            <div class="text-center">
                                                <span><i class="ri-history-line"></i> <?php echo esc_html($time); ?></span>
                                                <h6>Cooking Time</h6>
                                            </div>
                                            <div class="line"></div>
                                            <div class="text-center">
                                                <div class="d-flex gap-2 mid">
                                                    <?php
                                                    foreach ($category_slugs as $slug) {
                                                        $label = ucwords(str_replace('-', ' ', $slug));
                                                        $short = strtoupper(substr($label, 0, 2));
                                                        echo '<span>' . esc_html($short) . '</span>';
                                                    }
                                                    ?>
                                                </div>
                                                <h6>Category</h6>
                                            </div>
                                            <div class="line"></div>
                                            <div class="text-center">
                                                <span><?php echo esc_html($extra_info); ?></span>
                                                <h6>Extra Info</h6>
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

                <div class="navi">
                    <div class="arrow">
                        <i class="ri-arrow-left-s-line left"></i>
                    </div>
                    <div class="arrow">
                        <i class="ri-arrow-right-s-line right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/nearby-store'); ?>

    <?php get_template_part('footer', 'volt'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper2 = new Swiper(".our-recipe-slider", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 200,
                    modifier: 2,
                    slideShadows: false,
                },
            });

            const accordions = document.querySelectorAll(".accordion-header");
            accordions.forEach(header => {
                header.addEventListener("click", () => {
                    const parent = header.parentElement;
                    document.querySelectorAll(".accordion-item").forEach(item => {
                        if (item !== parent) item.classList.remove("active");
                    });
                    parent.classList.toggle("active");
                });
            });

            const categoryButtons = document.querySelectorAll('.top-section button[data-filter]');
            const recipeCols = document.querySelectorAll('.recipe-col');

            function setActiveButton(clickedBtn) {
                categoryButtons.forEach(b => b.classList.remove('active'));
                clickedBtn.classList.add('active');
            }

            function filterRecipes(filter) {
                recipeCols.forEach(col => {
                    const cats = (col.getAttribute('data-categories') || '').split(',').map(s => s.trim()).filter(Boolean);
                    if (filter === 'all') {
                        col.style.display = '';
                    } else {
                        if (cats.indexOf(filter) !== -1) {
                            col.style.display = '';
                        } else {
                            col.style.display = 'none';
                        }
                    }
                });
            }

            categoryButtons.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const filter = btn.getAttribute('data-filter');
                    setActiveButton(btn);
                    filterRecipes(filter);
                });
            });

            const activeBtn = document.querySelector('.top-section button.active');
            if (activeBtn) {
                filterRecipes(activeBtn.getAttribute('data-filter') || 'all');
            } else {
                filterRecipes('all');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>