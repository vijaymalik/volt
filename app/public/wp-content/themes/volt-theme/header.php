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

                // Default text
                $default_text = '20% Off on Punjas Biscuits';

                if ($topbar->have_posts()):
                    while ($topbar->have_posts()):
                        $topbar->the_post();
                        $marque_text = get_field('marque_text');
                        $text_to_show = $marque_text ? $marque_text : $default_text;

                        // Repeat it 12 times
                        for ($i = 0; $i < 12; $i++) {
                            echo '<span>' . esc_html($text_to_show) . '</span>';
                        }
                    endwhile;
                    wp_reset_postdata();
                    // No posts found — show default message 12 times
                else:
                    for ($i = 0; $i < 12; $i++) {
                        echo '<span>' . esc_html($default_text) . '</span>';
                    }
                endif;
                ?>
            </div>
        </div>



        <div class="container-fluid nav-container mt-sm-2 px-sm-4">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="">
            </a>
            <a class="talk-btn phn-btn" href="/contact-us">Let's Talk</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedConten" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="menu-btn" id="menu-btn">
                    <span></span>

                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Products </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recipie">Recipes </a>
                    </li>

                </ul>

                <a class="talk-btn" href="/contact-us">Let's Talk</a>
            </div>
        </div>
    </nav>