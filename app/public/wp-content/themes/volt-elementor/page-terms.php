<?php
/**
 * Template Name: Terms & Conditions (Volt)
 * Description: Custom Terms & Conditions template
 */
?>

<?php get_header(); ?>
<div class="volt-template-container">
  <div class="privacy-policy-container">
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
</div>
<?php get_footer(); ?>