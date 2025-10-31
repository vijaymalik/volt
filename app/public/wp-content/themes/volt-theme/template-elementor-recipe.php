<?php
/* Template Name: Elementor Recipe Page */
?>

<!-- Start of Recipe Page Content -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/our-recipe.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">
<?php get_header('volt'); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // 🔹 Allow Elementor content to be editable
        while (have_posts()) :
            the_post();
            the_content(); // This is where Elementor will insert your content
        endwhile;
        ?>

    </main>
</div>

<?php get_footer('volt'); ?>

<!-- JS Files -->
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
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
