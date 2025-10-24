<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/faq.css">
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
    <?php get_template_part('footer', 'volt'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.top-btns button');
            const items = Array.from(document.querySelectorAll('.faq-item'));
            const accordionId = '<?php echo esc_js($accordion_id); ?>';

            // Prevent accidental anchor navigation & prevent default for any header anchors
            document.querySelectorAll('.accordion-header a, .accordion-header [href="#"]').forEach(a => {
                a.addEventListener('click', function (ev) {
                    ev.preventDefault();
                });
            });

            // Ensure accordion buttons are type="button" (defensive)
            document.querySelectorAll('.accordion-button').forEach(b => {
                if (!b.getAttribute('type')) b.setAttribute('type', 'button');
            });

            function renumberVisible() {
                const visible = items.filter(i => i.offsetParent !== null);
                visible.forEach((el, idx) => {
                    const serialEl = el.querySelector('.faq-serial');
                    if (serialEl) {
                        const num = (idx + 1).toString().padStart(2, '0');
                        serialEl.textContent = num;
                    }
                });
            }

            // Prevent Bootstrap collapse from forcing visible scroll by saving/restoring scroll position
            function safeToggleCollapse(targetCollapseEl) {
                const scrollTop = window.scrollY || window.pageYOffset;
                // toggle using Bootstrap's Collapse API if available (keeps behaviour consistent)
                try {
                    let bs = bootstrap.Collapse.getInstance(targetCollapseEl);
                    if (!bs) bs = new bootstrap.Collapse(targetCollapseEl, { toggle: false });
                    // toggle manually
                    if (targetCollapseEl.classList.contains('show')) bs.hide();
                    else bs.show();
                } catch (e) {
                    // fallback: toggle class
                    targetCollapseEl.classList.toggle('show');
                }
                // restore scroll after a tick (Bootstrap animation may change layout)
                setTimeout(() => window.scrollTo({ top: scrollTop }), 10);
            }

            // Intercept click on accordion buttons to use safeToggleCollapse (prevents unexpected jumps)
            document.querySelectorAll('.accordion-button').forEach(btn => {
                btn.addEventListener('click', function (ev) {
                    // If button is inside a real <button type="button">, let bootstrap handle it — but still guard scroll
                    const targetSelector = btn.getAttribute('data-bs-target') || btn.getAttribute('data-target');
                    if (targetSelector) {
                        ev.preventDefault();
                        const collapseEl = document.querySelector(targetSelector);
                        if (collapseEl) safeToggleCollapse(collapseEl);
                    }
                });
            });

            // Existing category button filtering logic
            renumberVisible();
            buttons.forEach(btn => {
                btn.addEventListener('click', function () {
                    buttons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filter = btn.getAttribute('data-filter');

                    if (filter === 'all') {
                        items.forEach(i => i.style.display = '');
                    } else if (filter === 'uncategorized') {
                        items.forEach(i => {
                            i.style.display = i.classList.contains('uncategorized') ? '' : 'none';
                        });
                    } else {
                        const termId = filter.replace('cat-', '');
                        items.forEach(i => {
                            if (i.classList.contains('cat-' + termId)) i.style.display = '';
                            else i.style.display = 'none';
                        });
                    }

                    // close any open collapse (use bootstrap API if available)
                    document.querySelectorAll('.accordion-collapse.show').forEach(c => {
                        try {
                            const bsCol = bootstrap.Collapse.getInstance(c);
                            if (bsCol) bsCol.hide();
                            else c.classList.remove('show');
                        } catch (e) {
                            c.classList.remove('show');
                        }
                    });

                    renumberVisible();

                    // Scroll to accordion top (optional) — keep this if you want the page to jump to accordion
                    const acc = document.getElementById(care);
                    if (acc) acc.scrollIntoView({ behavior: 'smooth', block: 'start' });
                });
            });
        });
    </script>

</body>

</html>