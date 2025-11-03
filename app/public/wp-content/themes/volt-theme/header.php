<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="marques">
        <div class="marque-content">
            <?php
            // Query the latest topbar_detail post
            $topbar = new WP_Query([
                'post_type' => 'topbar_detail',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            ]);

            $default_text = '20% Off on Punjas Biscuits';
            $image_path = get_template_directory_uri() . '/assets/images/Ellipse.png';

            if ($topbar->have_posts()):
                while ($topbar->have_posts()):
                    $topbar->the_post();
                    $marque_text = get_field('marque_text');
                    $text_to_show = $marque_text ? $marque_text : $default_text;

                    for ($i = 0; $i < 12; $i++) {
                        echo '<span class="marque-text">' . esc_html($text_to_show) . '</span>';
                        if ($i < 11) {
                            echo '<img class="marque-divider" src="' . esc_url($image_path) . '" alt="divider" />';
                        }
                    }
                endwhile;
                wp_reset_postdata();
            else:
                for ($i = 0; $i < 12; $i++) {
                    echo '<span class="marque-text">' . esc_html($default_text) . '</span>';
                    if ($i < 11) {
                        echo '<img class="marque-divider" src="' . esc_url($image_path) . '" alt="divider" />';
                    }
                }
            endif;
            ?>
        </div>

    </div>



    <div class="container-fluid nav-container mt-sm-2 px-sm-4">
        <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
        </a>
        <div class="d-flex gap-2">
            <a class="talk-btn phn-btn" href="<?php echo home_url('/contact-us'); ?>">Let's Talk</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="menu-btn" id="menu-btn">
                    <span></span>

                </div>

        </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Products </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (is_page('recipes') || is_singular('recipe')) ? 'active' : ''; ?>" href="<?php echo esc_url(home_url('/recipes')); ?>">Recipes </a>
                </li>

            </ul>

            <a class="talk-btn" href="<?php echo home_url('/contact-us'); ?>">Let'S Talk</a>
        </div>
    </div>
</nav>