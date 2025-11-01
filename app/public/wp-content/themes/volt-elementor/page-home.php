<?php
/**
 * Template Name: Home Page (Volt)
 * Description: Custom home page template with ACF + Elementor support
 */

get_header();
?>

<div class="volt-home-template">

  <?php
  // 🔹 Load your banner + custom homepage sections
//   if ( locate_template('index-content.php') ) {
//       include locate_template('index-content.php');
//   }

  // 🔹 Required for Elementor to detect the editable area
  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
          the_content(); // <-- Elementor hooks here
      endwhile;
  endif;
  ?>

</div>

<?php get_template_part('template-parts/nearby-store'); ?>
<?php get_footer(); ?>
