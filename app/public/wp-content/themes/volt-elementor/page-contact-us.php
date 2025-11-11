<?php
/**
 * Template Name: Contact Us Page (Volt)
 * Description: Custom contact us page template 
 */
?>
<?php get_header(); ?>

<div class="volt-template-container">

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