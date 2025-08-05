<?php 
// Axis Bank Reserve Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "Axis Bank Reserve Credit Card";
$bank_name = "Axis Bank";
$main_benefit = "25X Reward Points on All Spends";
$annual_fee = "₹50,000 + GST (Ultra-Premium Benefits)";
$welcome_benefit = "50,000 EDGE Reward Points";
$best_for = "Ultra high net worth individuals, luxury travelers";
$apply_link = "https://www.axisbank.com/retail/cards/credit-card";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_axis_reserve_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'Axis-Reserve.jpg',
        'card_only' => 'Axis-Reserve-card-only.jpg',
        'backup' => 'Axis-Reserve-backup.jpg',
        'fallback' => 'axis-reserve-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for Axis Reserve
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'Axis Bank Reserve Credit Card Review 2025 - 25X Points | CardAdvisorHub';
    $page_keywords = 'Axis Bank Reserve credit card, ultra premium credit card, 25X reward points, luxury credit card India, high net worth';
    
    $image_urls = get_axis_reserve_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="Axis Bank Reserve Credit Card offers 25X reward points on all spends, unlimited airport lounge access, and ultra-premium benefits. Annual fee ₹50,000.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="Axis Bank Reserve Credit Card - 25X Points">';
    echo '<meta name="twitter:description" content="Axis Bank Reserve Credit Card offers 25X reward points on all spends, unlimited airport lounge access, and ultra-premium benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'axis_reserve_structured_data' );
function axis_reserve_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_axis_reserve_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with ultra-premium benefits and concierge services",
        "category": "Ultra-Premium Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Unlimited Lounge + Concierge",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "50000",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "542"
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
      <li class="breadcrumb-item active" aria-current="page">Axis Bank Reserve Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for Axis Reserve ultra-premium theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #1a1a1a, #333333, #000000);
    color: white;
    padding: 60px 0;
    text-align: center;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
    background: linear-gradient(135deg, #ffd700, #ffed4e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.tagline {
    font-size: 1.3rem;
    opacity: 0.9;
    margin-bottom: 30px;
}

.highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.highlight-box {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid rgba(255,215,0,0.3);
}

.highlight-box .label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin-bottom: 8px;
}

.highlight-box .value {
    font-size: 1.4rem;
    font-weight: 700;
    color: #ffd700;
}

.hero-card-image {
    max-width: 300px;
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(255,215,0,0.3);
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
    border-top: 4px solid #ffd700;
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
    background: linear-gradient(135deg, #ffd700, #ffaa00);
    color: #000;
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
    background: linear-gradient(135deg, #ffaa00, #ff8800);
    color: #000;
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

.reserve-benefits {
    background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
    color: white;
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border: 2px solid #ffd700;
}

.reserve-benefits h4 {
    color: #ffd700;
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
                <h1><?php echo $card_name; ?> 2025 - Ultra-Premium Credit Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Unlimited Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/axis-reserve.jpg'); ?>"
                         alt="Axis Bank Reserve Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹50,000 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">50,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">All Spends</div>
                <div class="value">25X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.9/5 ⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <h2>Ultra-Premium Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">💎</div>
                <h3>25X Reward Points</h3>
                <p>Earn 25 EDGE reward points on every ₹200 spent across all categories</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Unlimited Lounge Access</h3>
                <p>Complimentary access to 1000+ airport lounges worldwide for you and guests</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏌️</div>
                <h3>Golf Privileges</h3>
                <p>Complimentary golf games at premium courses across India and internationally</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🤵</div>
                <h3>Premium Concierge</h3>
                <p>24/7 dedicated lifestyle concierge services for travel, dining, and entertainment</p>
            </div>
        </div>
        
        <div class="reserve-benefits">
            <h4>👑 Exclusive Reserve Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> 50,000 EDGE reward points worth ₹12,500</li>
                <li><strong>Annual Benefits:</strong> ₹50,000 worth of annual benefits and vouchers</li>
                <li><strong>Travel Insurance:</strong> Comprehensive coverage up to ₹1 crore</li>
                <li><strong>Priority Banking:</strong> Access to Burgundy private banking services</li>
                <li><strong>Dining:</strong> 50% off at premium restaurants and fine dining establishments</li>
                <li><strong>Entertainment:</strong> Exclusive access to premium events and experiences</li>
                <li><strong>Hotel Status:</strong> Complimentary elite status with luxury hotel chains</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for Axis Reserve - Ultra-Premium Status</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>Axis Bank Reserve Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose Axis Bank Reserve Credit Card?</h3>
            <p>The Axis Bank Reserve Credit Card represents the pinnacle of luxury credit cards in India. Designed exclusively for ultra-high net worth individuals, this card offers unmatched rewards, privileges, and lifestyle benefits that justify its premium positioning.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>All Spends:</strong> 25 EDGE reward points per ₹200 spent</li>
                <li><strong>International Spends:</strong> 25 EDGE reward points per ₹200 spent</li>
                <li><strong>Milestone Benefits:</strong> Additional bonus points on high spends</li>
                <li><strong>Point Value:</strong> 1 EDGE point = ₹0.25 (when redeemed optimally)</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹50,000 + GST</li>
                <li><strong>Annual Fee:</strong> ₹50,000 + GST</li>
                <li><strong>Annual Benefits:</strong> ₹50,000 worth of vouchers and benefits</li>
                <li><strong>Add-on Card Fee:</strong> ₹5,000 + GST (up to 3 cards)</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Income:</strong> Minimum ₹75 lakh per annum (invitation only)</li>
                <li><strong>Age:</strong> 21-70 years</li>
                <li><strong>CIBIL Score:</strong> 800+ required</li>
                <li><strong>Existing Relationship:</strong> Burgundy private banking preferred</li>
                <li><strong>Application:</strong> By invitation or relationship manager only</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is exclusively for:</p>
            <ul>
                <li>Ultra-high net worth individuals with income >₹75 lakhs annually</li>
                <li>Frequent luxury travelers seeking premium experiences</li>
                <li>Business leaders and entrepreneurs who value prestige</li>
                <li>Individuals with substantial annual spends (₹25+ lakhs)</li>
                <li>Existing Axis Bank Burgundy private banking customers</li>
            </ul>
            
            <div style="background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107; margin: 20px 0;">
                <h5>⚠️ Important Note:</h5>
                <p>The Axis Bank Reserve Credit Card is available by invitation only. Contact your Axis Bank relationship manager or visit a Burgundy banking center for eligibility assessment.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Contact Axis Bank for Reserve Invitation</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_axis_reserve_image_url('primary')); ?>;
    
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
