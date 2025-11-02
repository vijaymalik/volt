<?php
/**
 * Template Name: Recipe Page (Volt)
 * Description: Custom recipe page template 
 */

get_header();
?>

<div class="volt-template-container container">
    <?php get_template_part('template-parts/recipe_banner'); ?>
    <?php
    // 🔹 Required for Elementor to detect the editable area
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content(); // <-- Elementor hooks here
        endwhile;
    endif;
    ?>
    <?php get_template_part('template-parts/our_recipes'); ?>
</div>
<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>