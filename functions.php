<?php
// Enqueue styles
function my_theme_styles() {
    wp_enqueue_style('main-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');

// Theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
?>
