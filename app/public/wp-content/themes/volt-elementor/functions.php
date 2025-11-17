<?php
/**
 * Volt Elementor Theme - functions.php
 * Loads all CSS & JS assets safely and supports Elementor
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/* --------------------------------------------
 * THEME SETUP
 * -------------------------------------------- */
function volt_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('custom-logo');
    add_theme_support('elementor');
    // Register Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'volt'),
        'footer' => __('Footer Menu', 'volt'),
    ));
}
add_action('after_setup_theme', 'volt_theme_setup');

/* --------------------------------------------
 * ELEMENTOR COMPATIBILITY
 * -------------------------------------------- */
function volt_elementor_support()
{
    add_theme_support('elementor', array('widgets' => true, 'templates' => true));
}
add_action('after_setup_theme', 'volt_elementor_support');

/* --------------------------------------------
 * HELPER FUNCTION – LIST FILES IN THEME SUBDIR
 * -------------------------------------------- */
if (!function_exists('volt_get_theme_files')) {
    function volt_get_theme_files($subdir)
    {
        $theme_dir = get_template_directory() . '/' . trim($subdir, '/');
        $files = array();

        if (is_dir($theme_dir)) {
            foreach (scandir($theme_dir) as $file) {
                if ($file === '.' || $file === '..')
                    continue;
                if (is_file("$theme_dir/$file"))
                    $files[] = $file;
            }
        }
        sort($files);
        return $files;
    }
}

/* --------------------------------------------
 * ENQUEUE ALL CSS & JS FILES
 * -------------------------------------------- */
function volt_enqueue_assets()
{
    $theme_dir = get_template_directory();
    $theme_dir_uri = get_template_directory_uri();

    // CSS
    wp_enqueue_style(
        'volt-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        array(),
        '5.0.2'
    );

    $main_style_path = $theme_dir . '/style.css';
    wp_enqueue_style(
        'volt-style',
        get_stylesheet_uri(),
        array('volt-bootstrap'),
        file_exists($main_style_path) ? filemtime($main_style_path) : null
    );

    $custom_css_files = array(
        'assets/css/animate.css',
        'assets/css/font-awesome.min.css',
        'assets/css/store-style.css',
        'assets/css/responsive.css',
        'assets/css/custom.css',
        'assets/css/home.css'
    );

    if (is_page('recipes')) {
        $custom_css_files[] = 'assets/css/our-recipe.css';
    }
    if (is_singular('recipe')) {
        $custom_css_files[] = 'assets/css/our-recipe-details.css';
    }
    if (is_page('recipe-detail')) {
        $custom_css_files[] = 'assets/css/our-recipe-details.css';
    }
    if (is_page('products')) {
        $custom_css_files[] = 'assets/css/products.css';
    }
    if (is_singular('product')) {
        $custom_css_files[] = 'assets/css/our-recipe-details.css';
    }
    if (is_page('product-detail')) {
        $custom_css_files[] = 'assets/css/product-details.css';
    }
    if (is_page('faqs')) {
        $custom_css_files[] = 'assets/css/faq.css';
    }

    foreach ($custom_css_files as $css_file) {
        $css_path = $theme_dir . '/' . $css_file;
        $css_uri = $theme_dir_uri . '/' . $css_file;
        if (file_exists($css_path)) {
            wp_enqueue_style(
                'volt-' . sanitize_title(basename($css_file, '.css')),
                $css_uri,
                array('volt-style'),
                filemtime($css_path)
            );
        }
    }

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'volt-bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.0.2',
        true
    );
    wp_enqueue_style('volt-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('volt-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    wp_enqueue_style('volt-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), null);
    wp_enqueue_script('volt-aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);

    wp_enqueue_style('volt-remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css', array(), null);

    $custom_js_files = array();
    if (is_front_page() || is_home()) {
        $custom_js_files[] = 'assets/js/home.js';
    }
    if (is_page('recipes')) {
        $custom_js_files[] = 'assets/js/recipe.js';
    }
    if (is_singular('recipe')) {
        $custom_js_files[] = 'assets/js/recipe-detail.js';
    }
    if (is_page('products')) {
        $custom_js_files[] = 'assets/js/home.js';
    }

    foreach ($custom_js_files as $js_file) {
        $js_path = $theme_dir . '/' . $js_file;
        $js_uri = $theme_dir_uri . '/' . $js_file;
        if (file_exists($js_path)) {
            wp_enqueue_script(
                'volt-' . sanitize_title(basename($js_file, '.js')),
                $js_uri,
                array('jquery'),
                filemtime($js_path),
                true
            );
        }
    }

    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('volt-swiper-js'), null, true);
    wp_enqueue_script(
        'volt-enquiry-js',
        get_template_directory_uri() . '/assets/js/enquiry.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/enquiry.js'),
        true
    );
    wp_localize_script('volt-enquiry-js', 'enquiry_ajax', [
        'url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'volt_enqueue_assets');

/* --------------------------------------------
 * CUSTOM POST TYPES
 * -------------------------------------------- */

// ✅ STORE
function mytheme_register_store_cpt()
{
    $labels = array(
        'name' => 'Stores',
        'singular_name' => 'Store',
        'add_new_item' => 'Add New Store',
        'edit_item' => 'Edit Store',
        'new_item' => 'New Store',
        'view_item' => 'View Store',
        'all_items' => 'All Stores',
        'search_items' => 'Search Stores',
        'not_found' => 'No stores found',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_position' => 20,
        'menu_icon' => 'dashicons-store',
    );
    register_post_type('store', $args);
}
add_action('init', 'mytheme_register_store_cpt');

// ✅ RECIPE
function mytheme_register_recipe_cpt()
{
    $labels = array(
        'name' => 'Recipes',
        'singular_name' => 'Recipe',
        'add_new_item' => 'Add New Recipe',
        'edit_item' => 'Edit Recipe',
        'new_item' => 'New Recipe',
        'view_item' => 'View Recipe',
        'all_items' => 'All Recipes',
        'search_items' => 'Search Recipes',
        'not_found' => 'No recipes found',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => false, // disable Gutenberg
        'menu_icon' => 'dashicons-carrot',
        'rewrite' => array('slug' => 'recipe-detail', 'with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions'),
        'has_archive' => true,
    );

    register_post_type('recipe', $args);
}
add_action('init', 'mytheme_register_recipe_cpt');

// ✅ PRODUCTS (Duplicate of Recipes)
function mytheme_register_product_cpt()
{
    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'view_item' => 'View Product',
        'all_items' => 'All Products',
        'search_items' => 'Search Products',
        'not_found' => 'No products found',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true, // ✅ IMPORTANT: Enable REST API for Elementor
        'menu_icon' => 'dashicons-products',
        'rewrite' => array('slug' => 'product-detail', 'with_front' => false),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields',
            'revisions',
            'elementor' // ✅ Allow Elementor editing
        ),
        'has_archive' => true,
    );

    register_post_type('product', $args);
}
add_action('init', 'mytheme_register_product_cpt');


// ✅ Disable Gutenberg for Recipe & Product
add_filter('use_block_editor_for_post_type', function ($use_block_editor, $post_type) {
    if (in_array($post_type, ['recipe', 'product'])) {
        return false;
    }
    return $use_block_editor;
}, 10, 2);

// ✅ Elementor Support for Recipe & Product
add_filter('elementor/cpt_support', function ($post_types) {
    foreach (['recipe', 'product'] as $type) {
        if (!in_array($type, $post_types)) {
            $post_types[] = $type;
        }
    }
    return $post_types;
});

// ✅ Force Classic Editor
add_action('admin_init', function () {
    remove_action('edit_form_after_title', '_block_editor_meta_box_post_form_hidden_fields');
    add_post_type_support('recipe', 'editor');
    add_post_type_support('product', 'editor');
});

// ✅ Custom Single Templates
add_filter('single_template', function ($single) {
    global $post;
    if ($post->post_type == 'recipe') {
        $custom_template = locate_template('page-recipe-detail.php');
        if ($custom_template) return $custom_template;
    }
    if ($post->post_type == 'product') {
        $custom_template = locate_template('page-product-detail.php');
        if ($custom_template) return $custom_template;
    }
    return $single;
});

// ✅ TOPBAR CPT
function mytheme_register_topbar_cpt()
{
    $labels = array(
        'name' => 'Topbar Details',
        'singular_name' => 'Topbar Detail',
        'add_new_item' => 'Add New Topbar Detail',
        'edit_item' => 'Edit Topbar Detail',
        'new_item' => 'New Topbar Detail',
        'view_item' => 'View Topbar Detail',
        'all_items' => 'All Topbar Details',
        'search_items' => 'Search Topbar Details',
        'not_found' => 'No topbar details found',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'menu_position' => 22,
        'menu_icon' => 'dashicons-admin-generic',
    );

    register_post_type('topbar_detail', $args);
}
add_action('init', 'mytheme_register_topbar_cpt');

// ✅ ENQUIRY CPT
function mytheme_register_enquiries_cpt()
{
    $labels = array(
        'name' => 'Enquiries',
        'singular_name' => 'Enquiry',
        'add_new_item' => 'Add New Enquiry',
        'edit_item' => 'Edit Enquiry',
        'new_item' => 'New Enquiry',
        'view_item' => 'View Enquiry',
        'all_items' => 'All Enquiries',
        'search_items' => 'Search Enquiries',
        'not_found' => 'No enquiries found',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
        'menu_position' => 23,
        'menu_icon' => 'dashicons-email',
    );

    register_post_type('enquiry', $args);
}
add_action('init', 'mytheme_register_enquiries_cpt');

// ✅ FAQ CPT + Taxonomy
function mytheme_register_faq_cpt()
{
    $labels = array(
        'name' => 'FAQs',
        'singular_name' => 'FAQ',
        'add_new_item' => 'Add New FAQ',
        'edit_item' => 'Edit FAQ',
        'new_item' => 'New FAQ',
        'view_item' => 'View FAQ',
        'all_items' => 'All FAQs',
        'search_items' => 'Search FAQs',
        'not_found' => 'No FAQs found',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 24,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => array('title', 'editor'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'faqs'),
        'show_in_rest' => true,
    );

    register_post_type('faq', $args);
}
add_action('init', 'mytheme_register_faq_cpt');

function mytheme_register_faq_category_taxonomy()
{
    $labels = array(
        'name' => 'FAQ Categories',
        'singular_name' => 'FAQ Category',
        'search_items' => 'Search FAQ Categories',
        'all_items' => 'All FAQ Categories',
        'edit_item' => 'Edit FAQ Category',
        'update_item' => 'Update FAQ Category',
        'add_new_item' => 'Add New FAQ Category',
        'new_item_name' => 'New FAQ Category Name',
        'menu_name' => 'FAQ Categories',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'faq-category'),
        'show_in_rest' => true,
    );

    register_taxonomy('faq_category', array('faq'), $args);
}
add_action('init', 'mytheme_register_faq_category_taxonomy');

/* --------------------------------------------
 * ENQUIRY AJAX HANDLER
 * -------------------------------------------- */
function mytheme_handle_enquiry_submission()
{
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $location = sanitize_text_field($_POST['location'] ?? '');
    $query_type = sanitize_text_field($_POST['query_type'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name)) wp_send_json_error('Please enter your name.');
    if (empty($email) || !is_email($email)) wp_send_json_error('Please enter a valid email.');
    if (empty($message)) wp_send_json_error('Please write your message.');
    if (!empty($phone) && !preg_match('/^[0-9+\s()-]+$/', $phone)) {
        wp_send_json_error('Please enter a valid phone number.');
    }

    $post_id = wp_insert_post(array(
        'post_title' => $name,
        'post_content' => $message,
        'post_type' => 'enquiry',
        'post_status' => 'publish',
        'meta_input' => array(
            'email' => $email,
            'phone' => $phone,
            'location' => $location,
            'query_type' => $query_type,
        ),
    ));

    if ($post_id) {
        wp_send_json_success('Thank you! Your enquiry has been submitted.');
    } else {
        wp_send_json_error('Something went wrong. Please try again.');
    }
}
add_action('wp_ajax_submit_enquiry', 'mytheme_handle_enquiry_submission');
add_action('wp_ajax_nopriv_submit_enquiry', 'mytheme_handle_enquiry_submission');

/* --------------------------------------------
 * ELEMENTOR RECIPE ASSET LOADER
 * -------------------------------------------- */
function volt_enqueue_elementor_recipe_assets()
{
    global $post;
    $is_elementor_editor = isset($_GET['elementor-preview']) && intval($_GET['elementor-preview']) > 0;
    $is_recipe_template = $post && get_page_template_slug($post->ID) === 'template-elementor-recipe.php';

    if ($is_recipe_template || $is_elementor_editor) {
        wp_enqueue_style('volt-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', [], null);
        wp_enqueue_style('volt-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);
        wp_enqueue_style('volt-remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css', [], null);
        wp_enqueue_style('volt-google-fonts', 'https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap', [], null);
        wp_enqueue_style('volt-store-style', get_template_directory_uri() . '/assets/css/store-style.css', [], filemtime(get_template_directory() . '/assets/css/store-style.css'));
        wp_enqueue_style('volt-home', get_template_directory_uri() . '/assets/css/home.css', [], filemtime(get_template_directory() . '/assets/css/home.css'));
        wp_enqueue_style('volt-recipe', get_template_directory_uri() . '/assets/css/our-recipe.css', [], filemtime(get_template_directory() . '/assets/css/our-recipe.css'));

        wp_enqueue_script('volt-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', ['jquery'], null, true);
        wp_enqueue_script('volt-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

        $custom_js = "
            document.addEventListener('DOMContentLoaded', function () {
                var swiper2 = new Swiper('.our-recipe-slider', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
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
        ";
        wp_add_inline_script('volt-swiper', $custom_js);
    }
}
add_action('wp_enqueue_scripts', 'volt_enqueue_elementor_recipe_assets');

/* --------------------------------------------
 * CONTACT FORM SHORTCODE
 * -------------------------------------------- */
function my_custom_form_shortcode()
{
    ob_start();
    get_template_part('template-parts/contact-form');
    return ob_get_clean();
}
add_shortcode('contactform', 'my_custom_form_shortcode');
// ✅ Force-enable Elementor editor for custom post types
function volt_force_elementor_support() {
    add_post_type_support('product', 'elementor');
    add_post_type_support('recipe', 'elementor');
}
add_action('init', 'volt_force_elementor_support', 100);
