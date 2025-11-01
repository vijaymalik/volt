<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <!-- Top Bar (Marquee) -->
<div class="marques">
    <div class="marque-content">
        <?php
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

                for ($i = 0; $i < 12; $i++):
                    echo '<span class="marque-text">' . esc_html($text_to_show) . '</span>';
                    if ($i < 11):
                        echo '<img class="marque-divider" src="' . esc_url($image_path) . '" alt="divider" />';
                    endif;
                endfor;
            endwhile;
            wp_reset_postdata();
        else:
            for ($i = 0; $i < 12; $i++):
                echo '<span class="marque-text">' . esc_html($default_text) . '</span>';
                if ($i < 11):
                    echo '<img class="marque-divider" src="' . esc_url($image_path) . '" alt="divider" />';
                endif;
            endfor;
        endif;
        ?>
    </div>
</div>
    <div class="container-fluid nav-container mt-sm-2 px-sm-4">

        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Volt Logo">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu-btn" id="menu-btn">
                <span></span>
            </div>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo esc_url(home_url('/products')); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(home_url('/recipes')); ?>">Recipes</a>
                </li>
            </ul>

            <!-- Talk Button -->
            <a class="talk-btn ms-lg-3" href="<?php echo esc_url(home_url('/contact-us')); ?>">Let's Talk</a>
        </div>

    </div>
</nav>
