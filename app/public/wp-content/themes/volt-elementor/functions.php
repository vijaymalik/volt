<?php
/**
 * Volt Elementor Theme - functions.php
 * Loads all CSS & JS assets safely and supports Elementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/* --------------------------------------------
 * THEME SETUP
 * -------------------------------------------- */
function volt_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'elementor' );
    // Register Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'volt' ),
        'footer'  => __( 'Footer Menu', 'volt' ),
    ) );
}
add_action( 'after_setup_theme', 'volt_theme_setup' );

/* --------------------------------------------
 * ELEMENTOR COMPATIBILITY
 * -------------------------------------------- */
function volt_elementor_support() {
    add_theme_support( 'elementor', array( 'widgets' => true, 'templates' => true ) );
}
add_action( 'after_setup_theme', 'volt_elementor_support' );

/* --------------------------------------------
 * HELPER FUNCTION – LIST FILES IN THEME SUBDIR
 * -------------------------------------------- */
if ( ! function_exists( 'volt_get_theme_files' ) ) {
    function volt_get_theme_files( $subdir ) {
        $theme_dir = get_template_directory() . '/' . trim( $subdir, '/' );
        $files = array();

        if ( is_dir( $theme_dir ) ) {
            foreach ( scandir( $theme_dir ) as $file ) {
                if ( $file === '.' || $file === '..' ) continue;
                if ( is_file( "$theme_dir/$file" ) ) $files[] = $file;
            }
        }
        sort( $files );
        return $files;
    }
}

/* --------------------------------------------
 * ENQUEUE ALL CSS & JS FILES
 * -------------------------------------------- */
function volt_enqueue_assets() {
    $theme_dir     = get_template_directory();
    $theme_dir_uri = get_template_directory_uri();

    /* =========================================================
     *  CSS ASSETS
     * ========================================================= */

    // Bootstrap CSS (CDN)
    wp_enqueue_style(
        'volt-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        array(),
        '5.0.2'
    );

    // Theme main style.css
    $main_style_path = $theme_dir . '/style.css';
    wp_enqueue_style(
        'volt-style',
        get_stylesheet_uri(),
        array('volt-bootstrap'),
        file_exists($main_style_path) ? filemtime($main_style_path) : null
    );

    // Additional CSS files (load order controlled manually)
    $custom_css_files = array(
        'assets/css/animate.css',
        'assets/css/font-awesome.min.css',
        'assets/css/store-style.css',
        'assets/css/home.css',
        'assets/css/responsive.css',
        'assets/css/custom.css'
    );

    foreach ($custom_css_files as $css_file) {
        $css_path = $theme_dir . '/' . $css_file;
        $css_uri  = $theme_dir_uri . '/' . $css_file;
        if (file_exists($css_path)) {
            wp_enqueue_style(
                'volt-' . sanitize_title(basename($css_file, '.css')),
                $css_uri,
                array('volt-style'),
                filemtime($css_path)
            );
        }
    }

    /* =========================================================
     *  JS ASSETS
     * ========================================================= */

    // jQuery (WordPress built-in)
    wp_enqueue_script('jquery');

    // Bootstrap Bundle JS (includes Popper)
    wp_enqueue_script(
        'volt-bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.0.2',
        true
    );

    // Additional JS files
    $custom_js_files = array(
        'assets/js/main.js',
        'assets/js/script.js',
        'assets/js/enquiry.js',
        'assets/js/custom.js'
    );

    foreach ($custom_js_files as $js_file) {
        $js_path = $theme_dir . '/' . $js_file;
        $js_uri  = $theme_dir_uri . '/' . $js_file;
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

    /* =========================================================
     *  OPTIONAL: THIRD-PARTY LIBRARIES (ENABLE IF USED)
     * ========================================================= */

    // Swiper
    // wp_enqueue_style('volt-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    // wp_enqueue_script('volt-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // AOS (Animate On Scroll)
    // wp_enqueue_style('volt-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), null);
    // wp_enqueue_script('volt-aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), null, true);

    // Remixicon (icon font)
    // wp_enqueue_style('volt-remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css', array(), null);
}
add_action('wp_enqueue_scripts', 'volt_enqueue_assets');
