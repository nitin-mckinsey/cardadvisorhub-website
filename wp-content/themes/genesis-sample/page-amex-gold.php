<?php 
// American Express Gold Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "American Express Gold Card";
$bank_name = "American Express";
$main_benefit = "4X Membership Rewards Points on Dining & Travel";
$annual_fee = "₹4,500 + GST (₹1,000 after statement credits)";
$welcome_benefit = "18,000 Welcome Bonus Points";
$best_for = "Dining enthusiasts, travel lovers, premium lifestyle";
$apply_link = "https://www.americanexpress.com/in/credit-cards/gold-card/";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_amex_gold_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'Amex-Gold.jpg',
        'card_only' => 'Amex-Gold-card-only.jpg',
        'backup' => 'Amex-Gold-backup.jpg',
        'fallback' => 'amex-gold-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for Amex Gold
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'American Express Gold Card Review 2025 - 4X Dining Points | CardAdvisorHub';
    $page_keywords = 'American Express Gold card, Amex Gold credit card, 4X dining points, travel rewards, membership rewards, premium credit card India';
    
    $image_urls = get_amex_gold_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="American Express Gold Card offers 4X Membership Rewards points on dining & travel, exclusive experiences, and premium benefits. Effective annual fee just ₹1,000.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="American Express Gold Card - 4X Dining Points">';
    echo '<meta name="twitter:description" content="American Express Gold Card offers 4X Membership Rewards points on dining & travel, exclusive experiences, and premium benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'amex_gold_structured_data' );
function amex_gold_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_amex_gold_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with Membership Rewards and exclusive Amex experiences",
        "category": "Premium Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Exclusive Experiences + Travel Benefits",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "4500",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.6",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "3421"
        }
    }
    </script>
    <?php
}

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">CardAdvisorHub Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Compare Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">American Express Gold Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for Amex Gold theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #d4af37, #ffd700, #b8860b);
    color: #333;
    padding: 60px 0;
    text-align: center;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
    color: #2c2c2c;
}

.tagline {
    font-size: 1.3rem;
    opacity: 0.8;
    margin-bottom: 30px;
    color: #2c2c2c;
}

.highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.highlight-box {
    background: rgba(255,255,255,0.9);
    color: #333;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.highlight-box .label {
    font-size: 0.9rem;
    opacity: 0.7;
    margin-bottom: 8px;
}

.highlight-box .value {
    font-size: 1.4rem;
    font-weight: 700;
    color: #b8860b;
}

.hero-card-image {
    max-width: 300px;
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    transition: opacity 0.3s ease;
}

.section {
    padding: 50px 0;
}

.section h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.feature-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
    border-top: 4px solid #d4af37;
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 15px;
}

.feature-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #333;
}

.apply-btn {
    background: #d4af37;
    color: #2c2c2c;
    padding: 15px 40px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.apply-btn:hover {
    background: #b8860b;
    color: white;
    text-decoration: none;
}

.breadcrumb-nav {
    background: #f8f9fa;
    padding: 15px 0;
}

.breadcrumb {
    list-style: none;
    display: flex;
    align-items: center;
    margin: 0;
    padding: 0;
}

.breadcrumb-item {
    color: #6c757d;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
    margin: 0 10px;
    color: #6c757d;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

.amex-benefits {
    background: linear-gradient(135deg, #fff8dc, #fafad2);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border: 2px solid #d4af37;
}

.amex-benefits h4 {
    color: #b8860b;
    margin-bottom: 20px;
    font-size: 1.3rem;
}

@media (max-width: 768px) {
    .card-hero h1 {
        font-size: 2rem;
    }
    
    .highlights {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<main>
<!-- Hero Section -->
<section class="card-hero">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center;">
            <div>
                <h1><?php echo $card_name; ?> 2025 - Premium Lifestyle Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Exclusive Amex Experiences</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/amex-gold.jpg'); ?>"
                         alt="American Express Gold Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Effective Annual Fee</div>
                <div class="value">₹1,000</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">18,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Dining & Travel</div>
                <div class="value">4X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.6/5 ⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <h2>Key Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>4X Dining Rewards</h3>
                <p>Earn 4 Membership Rewards points per ₹100 spent on dining</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>4X Travel Points</h3>
                <p>Earn 4X points on travel bookings, flights, and hotels</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎭</div>
                <h3>Exclusive Experiences</h3>
                <p>Access to Amex exclusive events, concerts, and culinary experiences</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Statement Credits</h3>
                <p>Get ₹3,500 in statement credits making effective fee just ₹1,000</p>
            </div>
        </div>
        
        <div class="amex-benefits">
            <h4>🏆 Exclusive American Express Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> 18,000 Membership Rewards points on first spend</li>
                <li><strong>Statement Credits:</strong> ₹3,500 worth of dining and travel credits annually</li>
                <li><strong>Global Acceptance:</strong> Accepted at millions of locations worldwide</li>
                <li><strong>Membership Rewards:</strong> Flexible point redemption options</li>
                <li><strong>Purchase Protection:</strong> Coverage for eligible purchases</li>
                <li><strong>24/7 Customer Service:</strong> Premium customer support</li>
                <li><strong>Exclusive Events:</strong> Access to invite-only experiences</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for Amex Gold - Premium Benefits</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>American Express Gold Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose American Express Gold Card?</h3>
            <p>The American Express Gold Card is a premium lifestyle credit card that offers exceptional rewards on dining and travel, along with exclusive Amex experiences. With its generous statement credits, the effective annual fee is significantly reduced.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>Dining:</strong> 4 Membership Rewards points per ₹100 spent</li>
                <li><strong>Travel:</strong> 4 Membership Rewards points per ₹100 spent</li>
                <li><strong>Grocery:</strong> 2 Membership Rewards points per ₹100 spent</li>
                <li><strong>All Other Spends:</strong> 1 Membership Rewards point per ₹100 spent</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Annual Fee:</strong> ₹4,500 + GST</li>
                <li><strong>Statement Credits:</strong> Up to ₹3,500 annually</li>
                <li><strong>Effective Annual Fee:</strong> ₹1,000 (after credits)</li>
                <li><strong>Add-on Card Fee:</strong> ₹2,250 + GST</li>
            </ul>
            
            <h4>Statement Credits Breakdown:</h4>
            <ul>
                <li><strong>Dining Credits:</strong> ₹2,000 annually (₹500 quarterly)</li>
                <li><strong>Travel Credits:</strong> ₹1,500 annually</li>
                <li><strong>Auto-Credit:</strong> Credits applied automatically on eligible spends</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 18+ years</li>
                <li><strong>Income:</strong> Minimum ₹6 lakh per annum</li>
                <li><strong>CIBIL Score:</strong> 750+ recommended</li>
                <li><strong>Employment:</strong> Salaried/Self-employed individuals</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>Dining enthusiasts who frequently eat out</li>
                <li>Regular travelers seeking travel rewards</li>
                <li>Premium lifestyle seekers who value exclusive experiences</li>
                <li>Customers who can utilize the statement credits effectively</li>
                <li>Individuals who prefer flexible reward redemption options</li>
            </ul>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Gold Status</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_amex_gold_image_url('primary')); ?>;
    
    let currentIndex = 0;
    
    function tryNextImage() {
        if (currentIndex < imageUrls.length) {
            img.src = imageUrls[currentIndex];
            currentIndex++;
        }
    }
    
    img.onerror = function() {
        tryNextImage();
    };
    
    // Start with first image
    tryNextImage();
});
</script>

<?php get_footer(); ?>
