<?php
/**
 * Template Name:  FAQ Page (Volt)
 * Description: Custom FAQ page template 
 */
?>
<?php get_header(); ?>

<div class="volt-template-container">

    <div class="faq">
        <h1>FAQs</h1>
        <div class="container px-4 px-lg-5" id="care">
            <h2>Hi, how can we help?</h2>

            <?php
            // Get terms (categories)
            $terms = get_terms(array(
                'taxonomy' => 'faq_category',
                'hide_empty' => true,
            ));

            // Build buttons: if no categories found, we'll still show an "All" button
            ?>
            <div class="d-flex align-items-center gap-3 top-btns mt-4">
                <button type="button" class="active" data-filter="all">All</button>
                <?php if (!empty($terms) && !is_wp_error($terms)): ?>
                    <?php foreach ($terms as $term): ?>
                        <button type="button" data-filter="cat-<?php echo esc_attr($term->term_id); ?>">
                            <?php echo esc_html($term->name); ?>
                        </button>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>


            <?php
            // Build a single query for all FAQs (so ordering is consistent). We'll output each faq with its category classes.
            $faqs = new WP_Query(array(
                'post_type' => 'faq',
                'posts_per_page' => -1,
                'orderby' => 'menu_order date',
                'order' => 'ASC',
            ));
            $accordion_id = 'accordionExample';
            ?>

            <div class="accordion my-5" id="<?php echo esc_attr($accordion_id); ?>">

                <?php
                if ($faqs->have_posts()):
                    $global_index = 0;
                    while ($faqs->have_posts()):
                        $faqs->the_post();
                        $global_index++;
                        $post_id = get_the_ID();
                        $question = get_the_title();
                        $answer = apply_filters('the_content', get_the_content());
                        // gather categories for this post
                        $post_terms = wp_get_post_terms($post_id, 'faq_category', array('fields' => 'ids'));
                        // class list for filtering (can be multiple cats)
                        $cat_classes = '';
                        if (!empty($post_terms) && !is_wp_error($post_terms)) {
                            foreach ($post_terms as $t) {
                                $cat_classes .= ' cat-' . intval($t);
                            }
                        } else {
                            $cat_classes .= ' uncategorized';
                        }

                        // unique collapse ids per post (safe)
                        $collapse_id = 'collapseFaq_' . $post_id;
                        $heading_id = 'headingFaq_' . $post_id;
                        ?>

                        <div class="faq-item<?php echo esc_attr($cat_classes); ?>"
                            data-post-id="<?php echo esc_attr($post_id); ?>" style="">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="false"
                                        aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                        <span class="faq-serial"><?php echo sprintf('%02d', $global_index); ?></span> &nbsp;
                                        <?php echo esc_html($question); ?>
                                    </button>
                                </h6>
                                <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#<?php echo esc_attr($accordion_id); ?>">
                                    <div class="accordion-body">
                                        <?php echo wp_kses_post($answer); ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <p>No FAQs found. Add FAQs in admin (Post Type: FAQ).</p>
                <?php endif; ?>

            </div>


        </div>
    </div>
    <?php
    // 🔹 Required for Elementor to detect the editable area
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content(); // <-- Elementor hooks here
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>