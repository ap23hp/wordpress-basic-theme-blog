<?php
// Enqueue styles
function my_theme_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');

// Theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Register navigation menus
function my_theme_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'my_theme_menus');
?>
