<?php
/**
 * Template for individual credit card pages
 */

// Get card slug from URL
$card_slug = get_query_var('card_slug');
if (!$card_slug) {
    $card_slug = basename(get_permalink());
    $card_slug = str_replace('/', '', $card_slug);
}

// Include the card database
$card_database = [
    // Include all cards from page-compare-cards-detail.php
    // This will be populated by the card data
];

// Get card data
$card_data = isset($card_database[$card_slug]) ? $card_database[$card_slug] : null;

if (!$card_data) {
    // Redirect to 404 if card not found
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part(404);
    exit();
}

// SEO Meta Tags
add_action('wp_head', function() use ($card_data) {
    echo '<title>' . esc_html($card_data['name']) . ' Credit Card Review 2025 | Features, Benefits & Apply Online | CardAdvisorHub</title>' . "\n";
    echo '<meta name="description" content="Complete review of ' . esc_attr($card_data['name']) . ' credit card. Annual fee: ' . esc_attr($card_data['annual_fee']) . ', Rating: ' . esc_attr($card_data['rating']) . '/5. Compare benefits, rewards & apply online.">' . "\n";
    echo '<meta name="keywords" content="' . esc_attr($card_data['name']) . ', ' . esc_attr($card_data['bank']) . ' credit card, credit card review, apply online, features, benefits">' . "\n";
    echo '<link rel="canonical" href="' . get_permalink() . '">' . "\n";
});

get_header(); ?>

<style>
/* Credit Card Detail Page Styles */
.card-detail-page {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: #333;
}

.card-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
    margin-bottom: 3rem;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.card-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto 2rem;
}

.card-image-hero {
    width: 300px;
    height: 190px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(255,255,255,0.2);
    margin-bottom: 2rem;
}

.rating-hero {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.rating-hero .stars {
    color: #ffc107;
    margin-right: 10px;
}

.apply-button-hero {
    background: #28a745;
    color: white;
    padding: 15px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 30px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.apply-button-hero:hover {
    background: #218838;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.3);
    color: white;
    text-decoration: none;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.card-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
}

.card-main-content {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.card-sidebar {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    height: fit-content;
}

.fee-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    text-align: center;
}

.fee-amount {
    font-size: 2rem;
    font-weight: 700;
    color: #007bff;
    margin-bottom: 0.5rem;
}

.fee-label {
    color: #666;
    font-size: 0.9rem;
}

.benefits-list {
    list-style: none;
    padding: 0;
}

.benefits-list li {
    padding: 0.8rem 0;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 30px;
}

.benefits-list li:before {
    content: "✓";
    color: #28a745;
    font-weight: bold;
    position: absolute;
    left: 0;
    font-size: 1.2rem;
}

.rewards-section {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 2rem 0;
}

.section-title {
    color: #2c3e50;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.breadcrumb-nav {
    background: white;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
    margin-bottom: 0;
}

.breadcrumb {
    list-style: none;
    display: flex;
    gap: 10px;
    margin: 0;
    padding: 0;
    font-size: 0.9rem;
}

.breadcrumb li a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb li a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .card-details-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .card-hero h1 {
        font-size: 2rem;
    }
    
    .card-image-hero {
        width: 250px;
        height: 158px;
    }
}
</style>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li style="color: #6c757d;">›</li>
            <li><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
            <li style="color: #6c757d;">›</li>
            <li style="color: #6c757d;"><?php echo esc_html($card_data['name']); ?></li>
        </ol>
    </div>
</nav>

<div class="card-detail-page">
    <!-- Hero Section -->
    <section class="card-hero">
        <div class="container">
            <img src="<?php echo home_url("/wp-content/uploads/card-images/{$card_slug}.jpg"); ?>" 
                 alt="<?php echo esc_attr($card_data['name']); ?>" 
                 class="card-image-hero"
                 onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
            
            <h1><?php echo esc_html($card_data['name']); ?></h1>
            <p><?php echo esc_html($card_data['description']); ?></p>
            
            <div class="rating-hero">
                <span class="stars">★★★★☆</span>
                <span><?php echo esc_html($card_data['rating']); ?>/5 Rating</span>
            </div>
            
            <a href="<?php echo esc_url($card_data['apply_link']); ?>" 
               target="_blank" 
               class="apply-button-hero">
                Apply Now - Get Instant Approval
            </a>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container">
        <div class="card-details-grid">
            <div class="card-main-content">
                <h2 class="section-title">Card Overview</h2>
                <p><?php echo esc_html($card_data['description']); ?></p>
                <p><strong>Best For:</strong> <?php echo esc_html($card_data['best_for']); ?></p>
                
                <div class="rewards-section">
                    <h3 class="section-title">Rewards Structure</h3>
                    <p><?php echo esc_html($card_data['rewards']); ?></p>
                </div>
                
                <h3 class="section-title">Key Benefits</h3>
                <ul class="benefits-list">
                    <?php foreach ($card_data['benefits'] as $benefit): ?>
                        <li><?php echo esc_html($benefit); ?></li>
                    <?php endforeach; ?>
                </ul>
                
                <h3 class="section-title">Who Should Apply?</h3>
                <p>This card is perfect for <?php echo esc_html(strtolower($card_data['best_for'])); ?>. 
                <?php if (isset($card_data['min_income'])): ?>
                    Minimum income requirement is <?php echo esc_html($card_data['min_income']); ?>.
                <?php endif; ?>
                </p>
            </div>
            
            <div class="card-sidebar">
                <div class="fee-card">
                    <div class="fee-amount"><?php echo esc_html($card_data['annual_fee']); ?></div>
                    <div class="fee-label">Annual Fee</div>
                </div>
                
                <?php if (isset($card_data['joining_fee'])): ?>
                <div class="fee-card">
                    <div class="fee-amount"><?php echo esc_html($card_data['joining_fee']); ?></div>
                    <div class="fee-label">Joining Fee</div>
                </div>
                <?php endif; ?>
                
                <div class="fee-card">
                    <div class="fee-amount"><?php echo esc_html($card_data['welcome_bonus']); ?></div>
                    <div class="fee-label">Welcome Bonus</div>
                </div>
                
                <div class="fee-card">
                    <div class="fee-amount" style="font-size: 1.5rem;">★★★★☆</div>
                    <div class="fee-amount" style="font-size: 1.2rem; margin-top: -10px;"><?php echo esc_html($card_data['rating']); ?>/5</div>
                    <div class="fee-label">User Rating</div>
                </div>
                
                <a href="<?php echo esc_url($card_data['apply_link']); ?>" 
                   target="_blank" 
                   class="apply-button-hero" 
                   style="width: 100%; text-align: center; margin-top: 2rem;">
                    Apply Now
                </a>
                
                <div style="margin-top: 2rem; text-align: center;">
                    <a href="<?php echo home_url('/compare-cards/'); ?>" 
                       style="color: #007bff; text-decoration: none;">
                        ← Compare with Other Cards
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
