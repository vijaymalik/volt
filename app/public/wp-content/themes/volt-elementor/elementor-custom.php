<?php
/* Template Name: Elementor Custom */
?>
<?php get_header(); ?>
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