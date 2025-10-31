<?php
/*
Template Name: Elementor Home (Full Width)
*/
get_header();
?>

<div class="volt-elementor-home">
    <?php
    // Elementor content output
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php get_footer(); ?>
