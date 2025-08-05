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
