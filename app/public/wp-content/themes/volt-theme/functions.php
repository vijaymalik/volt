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

// ===========================
// 5. REGISTER 'ENQUIRIES' CPT
// ===========================
function mytheme_register_enquiries_cpt() {
    $labels = array(
        'name'               => 'Enquiries',
        'singular_name'      => 'Enquiry',
        'add_new_item'       => 'Add New Enquiry',
        'edit_item'          => 'Edit Enquiry',
        'new_item'           => 'New Enquiry',
        'view_item'          => 'View Enquiry',
        'all_items'          => 'All Enquiries',
        'search_items'       => 'Search Enquiries',
        'not_found'          => 'No enquiries found',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false, // Not visible on front-end
        'show_ui'            => true,  // Visible in Admin
        'supports'           => array('title', 'editor', 'custom-fields'),
        'menu_position'      => 23,
        'menu_icon'          => 'dashicons-email', // 📩 icon
    );

    register_post_type('enquiry', $args);
}
add_action('init', 'mytheme_register_enquiries_cpt');

// ===========================
// 6. HANDLE AJAX FORM SUBMISSION
// ===========================
function mytheme_handle_enquiry_submission() {
    // Verify fields
    $name       = sanitize_text_field($_POST['name'] ?? '');
    $email      = sanitize_email($_POST['email'] ?? '');
    $phone      = sanitize_text_field($_POST['phone'] ?? '');
    $location   = sanitize_text_field($_POST['location'] ?? '');
    $query_type = sanitize_text_field($_POST['query_type'] ?? '');
    $message    = sanitize_textarea_field($_POST['message'] ?? '');

    // Create new Enquiry post
    $post_id = wp_insert_post(array(
        'post_title'   => $name,
        'post_content' => $message,
        'post_type'    => 'enquiry',
        'post_status'  => 'publish',
        'meta_input'   => array(
            'email'      => $email,
            'phone'      => $phone,
            'location'   => $location,
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


// ===========================
// 7. ENQUEUE ENQUIRY JS
// ===========================
function mytheme_enqueue_enquiry_js() {
    wp_enqueue_script(
        'mytheme-enquiry-js',
        get_template_directory_uri() . '/assets/js/enquiry.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/enquiry.js'),
        true
    );

    wp_localize_script('mytheme-enquiry-js', 'mytheme_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_enquiry_js');



add_action('wp_ajax_submit_contact', 'handle_contact_form');
add_action('wp_ajax_nopriv_submit_contact', 'handle_contact_form');

function handle_contact_form() {
    // handle data here
    wp_send_json_success('Form received!');
}




// Add custom columns for Enquiries CPT
add_filter('manage_enquiry_posts_columns', 'mytheme_enquiry_columns');
function mytheme_enquiry_columns($columns) {
    $columns = array(
        'cb'          => $columns['cb'],
        'title'       => 'Name',
        'email'       => 'Email',
        'phone'       => 'Phone',
        'location'    => 'Location',
        'query_type'  => 'Query Type',
        'date'        => $columns['date'],
    );
    return $columns;
}

// Populate custom columns
add_action('manage_enquiry_posts_custom_column', 'mytheme_enquiry_custom_column', 10, 2);
function mytheme_enquiry_custom_column($column, $post_id) {
    switch ($column) {
        case 'email':
            echo esc_html(get_post_meta($post_id, 'email', true));
            break;
        case 'phone':
            echo esc_html(get_post_meta($post_id, 'phone', true));
            break;
        case 'location':
            echo esc_html(get_post_meta($post_id, 'location', true));
            break;
        case 'query_type':
            echo esc_html(get_post_meta($post_id, 'query_type', true));
            break;
    }
}
