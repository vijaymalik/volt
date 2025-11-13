<?php
/**
 * Template Name: Product Detail Page (Volt)
 * Template Post Type: products
 * Description: Displays a products with Elementor content and ACF fields.
 */
get_header();
?>

<div class="breadcrumb">
    <a href="<?php echo esc_url(home_url()); ?>">Home</a>
    <span>/</span>
    <a href="<?php echo esc_url(site_url('/products')); ?>">Our Products</a>
    <span>/</span>
    <span class="active"><?php the_title(); ?></span>
</div>
<?php the_content(); ?>
<?php get_template_part('template-parts/did-you'); ?>
<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>