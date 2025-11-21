<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>



<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
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

                for ($i = 0; $i < 22; $i++):
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
<div class="container-fluid nav-container px-sm-4 bg-white shadow-sm">
  <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
  </a>

  <div class="hide_desk">
  <div class="d-flex gap-2 align-items-center">
    <a class="talk-btn phn-btn" href="<?php echo esc_url(home_url('/contact-us')); ?>">Let's Talk</a>
    <!-- ✅ Correct Bootstrap toggler button -->
    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <div class="menu-btn" id="menu-btn">
        <span></span>
      </div>
    </button>
  </div>
</div>
  <div class="desktop-menu-new">
  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link <?php echo (is_page('products')) ? 'active' : ''; ?>"  href="<?php echo esc_url(home_url(path: '/products')); ?>">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo (is_page('recipes')) ? 'active' : ''; ?>"  href="<?php echo esc_url(home_url(path: '/recipe')); ?>">Recipes</a>
      </li>
    </ul>
      </div>
  <!-- ✅ Collapsible menu -->
  <a class="talk-btn hidemobile" href="<?php echo esc_url(home_url('/contact-us')); ?>">Let's Talk</a>


</div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mobile-menu-new">
      <li class="nav-item">
        
        <a class="nav-link <?php echo (is_page('products')) ? 'active' : ''; ?>"  href="<?php echo esc_url(home_url(path: '/products')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-sec.png" alt="">
        Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo (is_page('recipes')) ? 'active' : ''; ?>"  href="<?php echo esc_url(home_url(path: '/recipe')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brownie.jpg" alt="">
        Recipes</a>
      </li>
    </ul>

  </div>
</nav>

<script>
  const menuBtn = document.getElementById("menu-btn");
const navbar = document.getElementById("navbarSupportedContent");

navbar.addEventListener('show.bs.collapse', function () {
  menuBtn.classList.add('open');
});

navbar.addEventListener('hide.bs.collapse', function () {
  menuBtn.classList.remove('open');
});
</script>
