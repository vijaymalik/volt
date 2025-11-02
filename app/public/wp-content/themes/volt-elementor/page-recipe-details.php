<?php
/**
 * Template Name: Recipe Details Page (Volt)
 * Description: Custom recipe details page template 
 */
?>
<?php get_header(); ?>

<div class="volt-template-container container">
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


<?php get_template_part('template-parts/nearby-store'); ?>

<?php get_footer(); ?>