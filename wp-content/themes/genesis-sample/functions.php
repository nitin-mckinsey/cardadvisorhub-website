// Register a top menu location
function genesis_sample_register_top_menu() {
    register_nav_menu('top-menu', __('Top Menu', 'genesis-sample'));
}
add_action('after_setup_theme', 'genesis_sample_register_top_menu');

// Override the default Genesis header with our custom header
remove_action('genesis_header', 'genesis_do_header');
add_action('genesis_header', 'genesis_sample_custom_header');

function genesis_sample_custom_header() {
    get_template_part('header');
}
<?php
/**
 * Genesis Sample Theme Functions - Minimal Version
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Basic theme support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list']);

// Enqueue styles
function genesis_sample_enqueue_styles() {
    wp_enqueue_style('genesis-sample-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'genesis_sample_enqueue_styles');
