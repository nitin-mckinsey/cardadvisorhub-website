<?php
/**
 * Minimal functions.php for testing
 * This removes all potential conflicts to get the site working
 */

// Basic theme support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

// Add Favicon
add_action('wp_head', 'cardadvisorhub_add_favicon', 2);
function cardadvisorhub_add_favicon() {
    $site_url = home_url();
    echo '<link rel="icon" type="image/x-icon" href="' . $site_url . '/favicon.ico">';
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . $site_url . '/favicon.ico">';
}

// Basic performance optimization
function cardadvisorhub_performance_optimizations() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
}
add_action('init', 'cardadvisorhub_performance_optimizations');

// Enqueue styles
function cardadvisorhub_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cardadvisorhub_enqueue_styles');
