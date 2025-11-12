<?php
/**
 * Template Name: Home Page (Volt)
 * Description: Custom home page template 
 */

get_header();
?>

<div class="volt-template-container">

    <?php get_template_part('template-parts/home-banner'); ?>
     <?php get_template_part('template-parts/home-products'); ?>
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
<?php get_template_part('template-parts/home-recipe'); ?>
<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>