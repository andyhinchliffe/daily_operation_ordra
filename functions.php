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

function daily_operation_ordra_customize_register( $wp_customize ) {
    // Section for Front Page Button URL (your existing code)
    $wp_customize->add_section( 'button_link_section', array(
        'title'    => __( 'Front Page Button', 'daily_operation_ordra' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'front_page_button_url', array(
        'default'           => get_permalink( get_page_by_path('about') ), // default to About page permalink
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'front_page_button_url_control', array(
        'label'    => __( 'Front Page Button URL', 'daily_operation_ordra' ),
        'section'  => 'button_link_section',
        'settings' => 'front_page_button_url',
        'type'     => 'url',
    ) );

    // New Section for Front Page Content (title, info text, image)
    $wp_customize->add_section( 'front_page_section', array(
        'title'    => __( 'Front Page Content', 'daily_operation_ordra' ),
        'priority' => 31,
    ) );

    // Title setting and control
    $wp_customize->add_setting( 'front_page_title', array(
        'default'           => 'Edit this title in the Customizer.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'front_page_title_control', array(
        'label'    => __( 'Front Page Title', 'daily_operation_ordra' ),
        'section'  => 'front_page_section',
        'settings' => 'front_page_title',
        'type'     => 'text',
    ) );

    // Info text setting and control
    $wp_customize->add_setting( 'front_page_info_text', array(
        'default'           => 'Edit this text in the Customizer along with uploading a new image for this section. Dont forget to click publish to save changes.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'front_page_info_text_control', array(
        'label'    => __( 'Front Page Info Text', 'daily_operation_ordra' ),
        'section'  => 'front_page_section',
        'settings' => 'front_page_info_text',
        'type'     => 'textarea',
    ) );

    // Image setting and control
    $wp_customize->add_setting( 'front_page_image', array(
        'default'           => get_template_directory_uri() . '/images/placeholder.jpg', // default image URL
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'front_page_image_control', array(
        'label'    => __( 'Front Page Image', 'daily_operation_ordra' ),
        'section'  => 'front_page_section',
        'settings' => 'front_page_image',
    ) ) );
}
add_action( 'customize_register', 'daily_operation_ordra_customize_register' );

?>
