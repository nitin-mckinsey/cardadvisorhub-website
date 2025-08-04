<?php
/**
 * Plugin Name: CardAdvisor Features
 * Plugin URI: https://cardadvisorhub.com/
 * Description: Advanced features for CardAdvisor credit card comparison website including user reviews, favorites, and card management.
 * Version: 1.0.0
 * Author: CardAdvisor Team
 * License: GPL v2 or later
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('CARDADVISOR_PLUGIN_URL', plugin_dir_url(__FILE__));
define('CARDADVISOR_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('CARDADVISOR_VERSION', '1.0.0');

// Main plugin class
class CardAdvisorFeatures {
    
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }
    
    public function init() {
        // Create custom post types
        $this->create_post_types();
        
        // Add AJAX handlers
        add_action('wp_ajax_submit_card_review', array($this, 'handle_card_review'));
        add_action('wp_ajax_nopriv_submit_card_review', array($this, 'handle_card_review'));
        
        add_action('wp_ajax_toggle_favorite', array($this, 'toggle_favorite'));
        add_action('wp_ajax_nopriv_toggle_favorite', array($this, 'toggle_favorite'));
        
        // Add shortcodes
        add_shortcode('card_comparison_tool', array($this, 'card_comparison_shortcode'));
        add_shortcode('user_favorites', array($this, 'user_favorites_shortcode'));
    }
    
    public function create_post_types() {
        // Credit Cards Post Type
        register_post_type('credit_card', array(
            'labels' => array(
                'name' => 'Credit Cards',
                'singular_name' => 'Credit Card',
                'add_new' => 'Add New Card',
                'add_new_item' => 'Add New Credit Card',
                'edit_item' => 'Edit Credit Card',
                'new_item' => 'New Credit Card',
                'view_item' => 'View Credit Card',
                'search_items' => 'Search Credit Cards',
                'not_found' => 'No credit cards found',
                'not_found_in_trash' => 'No credit cards found in trash'
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-money-alt',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'rewrite' => array('slug' => 'cards'),
        ));
        
        // Card Reviews Post Type
        register_post_type('card_review', array(
            'labels' => array(
                'name' => 'Card Reviews',
                'singular_name' => 'Card Review',
            ),
            'public' => false,
            'show_ui' => true,
            'menu_icon' => 'dashicons-star-filled',
            'supports' => array('title', 'editor', 'custom-fields'),
        ));
        
        // Card Categories Taxonomy
        register_taxonomy('card_category', 'credit_card', array(
            'labels' => array(
                'name' => 'Card Categories',
                'singular_name' => 'Card Category',
            ),
            'hierarchical' => true,
            'public' => true,
            'rewrite' => array('slug' => 'card-category'),
        ));
        
        // Banks Taxonomy
        register_taxonomy('bank', 'credit_card', array(
            'labels' => array(
                'name' => 'Banks',
                'singular_name' => 'Bank',
            ),
            'hierarchical' => true,
            'public' => true,
            'rewrite' => array('slug' => 'bank'),
        ));
    }
    
    public function enqueue_scripts() {
        wp_enqueue_script('cardadvisor-js', CARDADVISOR_PLUGIN_URL . 'assets/cardadvisor.js', array('jquery'), CARDADVISOR_VERSION, true);
        wp_enqueue_style('cardadvisor-css', CARDADVISOR_PLUGIN_URL . 'assets/cardadvisor.css', array(), CARDADVISOR_VERSION);
        
        // Localize script for AJAX
        wp_localize_script('cardadvisor-js', 'cardadvisor_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('cardadvisor_nonce'),
        ));
    }
    
    public function handle_card_review() {
        check_ajax_referer('cardadvisor_nonce', 'nonce');
        
        $card_id = intval($_POST['card_id']);
        $rating = intval($_POST['rating']);
        $review_text = sanitize_textarea_field($_POST['review']);
        $reviewer_name = sanitize_text_field($_POST['reviewer_name']);
        $reviewer_email = sanitize_email($_POST['reviewer_email']);
        
        // Validate inputs
        if (empty($card_id) || empty($rating) || empty($review_text) || empty($reviewer_name)) {
            wp_die('Missing required fields');
        }
        
        if ($rating < 1 || $rating > 5) {
            wp_die('Invalid rating');
        }
        
        // Create review post
        $review_id = wp_insert_post(array(
            'post_type' => 'card_review',
            'post_title' => 'Review for Card ID: ' . $card_id,
            'post_content' => $review_text,
            'post_status' => 'pending', // Moderate reviews
            'meta_input' => array(
                'card_id' => $card_id,
                'rating' => $rating,
                'reviewer_name' => $reviewer_name,
                'reviewer_email' => $reviewer_email,
                'review_date' => current_time('mysql'),
            )
        ));
        
        if ($review_id) {
            wp_send_json_success('Review submitted successfully and is pending moderation.');
        } else {
            wp_send_json_error('Failed to submit review.');
        }
    }
    
    public function toggle_favorite() {
        check_ajax_referer('cardadvisor_nonce', 'nonce');
        
        $card_id = intval($_POST['card_id']);
        $user_id = get_current_user_id();
        
        if (!$user_id) {
            wp_send_json_error('Please login to add favorites.');
        }
        
        $favorites = get_user_meta($user_id, 'favorite_cards', true);
        if (!is_array($favorites)) {
            $favorites = array();
        }
        
        if (in_array($card_id, $favorites)) {
            // Remove from favorites
            $favorites = array_diff($favorites, array($card_id));
            $action = 'removed';
        } else {
            // Add to favorites
            $favorites[] = $card_id;
            $action = 'added';
        }
        
        update_user_meta($user_id, 'favorite_cards', $favorites);
        
        wp_send_json_success(array(
            'action' => $action,
            'message' => 'Card ' . $action . ' to favorites.'
        ));
    }
    
    public function card_comparison_shortcode($atts) {
        $atts = shortcode_atts(array(
            'cards' => '', // Comma-separated card IDs
            'style' => 'table' // table or grid
        ), $atts);
        
        if (empty($atts['cards'])) {
            return '<p>No cards specified for comparison.</p>';
        }
        
        $card_ids = explode(',', $atts['cards']);
        $cards = get_posts(array(
            'post_type' => 'credit_card',
            'post__in' => $card_ids,
            'posts_per_page' => -1
        ));
        
        if (empty($cards)) {
            return '<p>No cards found.</p>';
        }
        
        ob_start();
        ?>
        <div class="card-comparison-widget">
            <h3>Compare Selected Cards</h3>
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Card Name</th>
                            <th>Annual Fee</th>
                            <th>Rewards Rate</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cards as $card): ?>
                        <tr>
                            <td>
                                <strong><?php echo get_the_title($card->ID); ?></strong><br>
                                <small><?php echo get_post_meta($card->ID, 'bank_name', true); ?></small>
                            </td>
                            <td><?php echo get_post_meta($card->ID, 'annual_fee', true); ?></td>
                            <td><?php echo get_post_meta($card->ID, 'rewards_rate', true); ?></td>
                            <td>
                                <?php 
                                $rating = get_post_meta($card->ID, 'average_rating', true);
                                echo str_repeat('★', intval($rating)) . str_repeat('☆', 5 - intval($rating));
                                ?>
                            </td>
                            <td>
                                <a href="<?php echo get_permalink($card->ID); ?>" class="btn btn-sm">View Details</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
    
    public function user_favorites_shortcode($atts) {
        $user_id = get_current_user_id();
        
        if (!$user_id) {
            return '<p>Please <a href="' . wp_login_url() . '">login</a> to view your favorites.</p>';
        }
        
        $favorites = get_user_meta($user_id, 'favorite_cards', true);
        
        if (empty($favorites)) {
            return '<p>You haven\'t added any cards to your favorites yet.</p>';
        }
        
        $cards = get_posts(array(
            'post_type' => 'credit_card',
            'post__in' => $favorites,
            'posts_per_page' => -1
        ));
        
        ob_start();
        ?>
        <div class="user-favorites">
            <h3>Your Favorite Cards</h3>
            <div class="favorites-grid">
                <?php foreach ($cards as $card): ?>
                <div class="favorite-card">
                    <h4><a href="<?php echo get_permalink($card->ID); ?>"><?php echo get_the_title($card->ID); ?></a></h4>
                    <p><?php echo get_the_excerpt($card->ID); ?></p>
                    <div class="card-actions">
                        <a href="<?php echo get_permalink($card->ID); ?>" class="btn btn-primary">View Details</a>
                        <button class="btn btn-secondary toggle-favorite" data-card-id="<?php echo $card->ID; ?>">Remove</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
    
    public function activate() {
        // Create database tables if needed
        $this->create_tables();
        
        // Set default options
        add_option('cardadvisor_version', CARDADVISOR_VERSION);
        
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    public function deactivate() {
        // Clean up if needed
        flush_rewrite_rules();
    }
    
    private function create_tables() {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        // Card comparisons tracking table
        $table_name = $wpdb->prefix . 'card_comparisons';
        
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            user_id bigint(20) DEFAULT NULL,
            session_id varchar(100) NOT NULL,
            card_ids text NOT NULL,
            comparison_date datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        
        // Card views tracking table
        $table_name = $wpdb->prefix . 'card_views';
        
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            card_id bigint(20) NOT NULL,
            user_id bigint(20) DEFAULT NULL,
            ip_address varchar(45) NOT NULL,
            view_date datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            KEY card_id (card_id)
        ) $charset_collate;";
        
        dbDelta($sql);
    }
}

// Initialize the plugin
new CardAdvisorFeatures();

// Helper functions
function get_card_average_rating($card_id) {
    $reviews = get_posts(array(
        'post_type' => 'card_review',
        'meta_query' => array(
            array(
                'key' => 'card_id',
                'value' => $card_id,
                'compare' => '='
            )
        ),
        'post_status' => 'publish',
        'posts_per_page' => -1
    ));
    
    if (empty($reviews)) {
        return 0;
    }
    
    $total_rating = 0;
    foreach ($reviews as $review) {
        $total_rating += intval(get_post_meta($review->ID, 'rating', true));
    }
    
    return round($total_rating / count($reviews), 1);
}

function get_card_reviews($card_id, $limit = -1) {
    return get_posts(array(
        'post_type' => 'card_review',
        'meta_query' => array(
            array(
                'key' => 'card_id',
                'value' => $card_id,
                'compare' => '='
            )
        ),
        'post_status' => 'publish',
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
}

function is_card_favorite($card_id, $user_id = null) {
    if (!$user_id) {
        $user_id = get_current_user_id();
    }
    
    if (!$user_id) {
        return false;
    }
    
    $favorites = get_user_meta($user_id, 'favorite_cards', true);
    return is_array($favorites) && in_array($card_id, $favorites);
}
?>
