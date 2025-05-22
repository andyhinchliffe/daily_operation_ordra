<?php
// Enqueue Stylesheet
function mytheme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), null);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Enqueue AlpineJS script
function my_theme_enqueue_alpinejs() {
    wp_enqueue_script('alpinejs', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_alpinejs');

function mytheme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for dynamic title tag
    add_theme_support('title-tag');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
        'footer'  => __('Footer Menu', 'mytheme'),
    ));
    add_theme_support('custom-logo', array(
        'height'      => 400,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

?>