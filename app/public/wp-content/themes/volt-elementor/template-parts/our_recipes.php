<div class="our-recipes-mbl px-4 mt-2 position-relative">
    <h2>Our Recipes</h2>
    <p>Make snack time exciting! Discover quick, tasty <br> ways to enjoy from classic tea-time treats to fun, <br>
        family-friendly desserts.</p>
    <?php get_template_part('template-parts/recipe-slider'); ?>
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
                        'taxonomy' => $taxonomy,
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
                        $label = esc_html($term->name);
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
                                   <h3> <a href="<?php echo esc_url( site_url( '/recipe-detail/' . $post->post_name ) ); ?>"><?php the_title(); ?></a></h3>
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