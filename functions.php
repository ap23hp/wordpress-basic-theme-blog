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

// Auto-create sample posts on theme activation
function create_finance_sample_content() {
    if (get_option('finance_theme_sample_content')) {
        return; // Already created
    }
    
    // Create 3 sample posts
    $posts = array(
        array(
            'title' => 'Stock Market Reaches New Highs - What Investors Should Know',
            'content' => 'The Indian stock market has reached record highs this week, with the Sensex crossing 80,000 points...'
        ),
        array(
            'title' => 'Top 5 Investment Strategies for 2025',
            'content' => 'Looking to grow your wealth in 2025? Here are the top investment strategies...'
        ),
        array(
            'title' => 'Retirement Planning: How Much Do You Really Need?',
            'content' => 'Planning for retirement? Most experts suggest you need 25-30 times your annual expenses...'
        )
    );
    
    foreach ($posts as $post_data) {
        wp_insert_post(array(
            'post_title'   => $post_data['title'],
            'post_content' => $post_data['content'],
            'post_status'  => 'publish',
            'post_type'    => 'post'
        ));
    }
    
    update_option('finance_theme_sample_content', true);
}
add_action('after_switch_theme', 'create_finance_sample_content');
?>
