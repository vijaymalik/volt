<?php
// ===========================
// 1. REGISTER 'STORE' CPT
// ===========================
function mytheme_register_store_cpt() {
    $labels = array(
        'name'               => 'Stores',
        'singular_name'      => 'Store',
        'add_new_item'       => 'Add New Store',
        'edit_item'          => 'Edit Store',
        'new_item'           => 'New Store',
        'view_item'          => 'View Store',
        'all_items'          => 'All Stores',
        'search_items'       => 'Search Stores',
        'not_found'          => 'No stores found',
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'show_in_rest'       => true, // Gutenberg + REST
        'supports'           => array('title','editor','thumbnail','excerpt'),
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-store',
    );
    register_post_type('store', $args);
}
add_action('init', 'mytheme_register_store_cpt');


// ===========================
// 2. ENQUEUE STORE ASSETS (CSS + JS)
// ===========================
function mytheme_enqueue_store_assets() {
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    // Theme custom CSS
    wp_enqueue_style(
        'theme-store-css',
        get_template_directory_uri() . '/assets/css/store-style.css',
        array('swiper-css'),
        filemtime(get_template_directory() . '/assets/css/store-style.css')
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    // Custom slider initialization JS
    wp_enqueue_script(
        'theme-store-js',
        get_template_directory_uri() . '/assets/js/store-slider.js',
        array('swiper-js', 'jquery'),
        filemtime(get_template_directory() . '/assets/js/store-slider.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_store_assets');


// ===========================
// 3. REGISTER 'RECIPE' CPT
// ===========================
function mytheme_register_recipe_cpt() {
    $labels = array(
        'name'               => 'Recipes',
        'singular_name'      => 'Recipe',
        'add_new_item'       => 'Add New Recipe',
        'edit_item'          => 'Edit Recipe',
        'new_item'           => 'New Recipe',
        'view_item'          => 'View Recipe',
        'all_items'          => 'All Recipes',
        'search_items'       => 'Search Recipes',
        'not_found'          => 'No recipes found',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'show_in_rest'       => true, // Gutenberg + REST API support
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-carrot', // 🥕 icon
    );

    register_post_type('recipe', $args);
}
add_action('init', 'mytheme_register_recipe_cpt');


// ===========================
// 4. REGISTER 'TOPBAR DETAILS' CPT
// ===========================
function mytheme_register_topbar_cpt() {
    $labels = array(
        'name'               => 'Topbar Details',
        'singular_name'      => 'Topbar Detail',
        'add_new_item'       => 'Add New Topbar Detail',
        'edit_item'          => 'Edit Topbar Detail',
        'new_item'           => 'New Topbar Detail',
        'view_item'          => 'View Topbar Detail',
        'all_items'          => 'All Topbar Details',
        'search_items'       => 'Search Topbar Details',
        'not_found'          => 'No topbar details found',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // not visible as a public page
        'show_ui'            => true,  // visible in admin
        'show_in_rest'       => true,  // Gutenberg + REST
        'supports'           => array('title', 'editor'),
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-admin-generic',
    );

    register_post_type('topbar_detail', $args);
}
add_action('init', 'mytheme_register_topbar_cpt');
