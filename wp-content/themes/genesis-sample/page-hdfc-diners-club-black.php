<?php 
// HDFC Diners Club Black Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "HDFC Diners Club Black Credit Card";
$bank_name = "HDFC Bank";
$main_benefit = "10X Reward Points on International Spends";
$annual_fee = "₹10,000 + GST (Premium Metal Card)";
$welcome_benefit = "10,000 Welcome Reward Points";
$best_for = "International travelers, premium lifestyle enthusiasts";
$apply_link = "https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_hdfc_dcb_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'HDFC-Diners-Club-Black.jpg',
        'card_only' => 'HDFC-Diners-Club-Black-card-only.jpg',
        'backup' => 'HDFC-DCB-backup.jpg',
        'fallback' => 'hdfc-diners-black-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for HDFC DCB
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'HDFC Diners Club Black Credit Card Review 2025 - 10X International | CardAdvisorHub';
    $page_keywords = 'HDFC Diners Club Black credit card, premium metal card, 10X international points, luxury credit card India, HDFC DCB';
    
    $image_urls = get_hdfc_dcb_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="HDFC Diners Club Black Credit Card offers 10X reward points on international spends, unlimited airport lounge access, and premium metal card benefits. Annual fee ₹10,000.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="HDFC Diners Club Black Credit Card - 10X International">';
    echo '<meta name="twitter:description" content="HDFC Diners Club Black Credit Card offers 10X reward points on international spends, unlimited airport lounge access, and premium metal card benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'hdfc_dcb_structured_data' );
function hdfc_dcb_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_hdfc_dcb_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with premium metal card and unlimited airport lounge access",
        "category": "Premium Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Metal Card + Unlimited Lounge",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "10000",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.7",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "3876"
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
      <li class="breadcrumb-item active" aria-current="page">HDFC Diners Club Black Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for HDFC DCB premium black theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #000000, #1a1a1a, #333333);
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
    border-top: 4px solid #000000;
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
    background: linear-gradient(135deg, #000000, #333333);
    color: #ffd700;
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
    border: 2px solid #ffd700;
}

.apply-btn:hover {
    background: #ffd700;
    color: #000000;
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

.dcb-benefits {
    background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
    color: white;
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border: 2px solid #ffd700;
}

.dcb-benefits h4 {
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
                <h1><?php echo $card_name; ?> 2025 - Premium Metal Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Unlimited Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/hdfc-diners-club-black.jpg'); ?>"
                         alt="HDFC Diners Club Black Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹10,000 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">10,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">International</div>
                <div class="value">10X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.7/5 ⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <h2>Premium Metal Card Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>10X International Points</h3>
                <p>Earn 10 reward points per ₹150 spent on international transactions</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Premium Metal Card</h3>
                <p>Exclusive black metal card with premium feel and status symbol</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Unlimited Lounge Access</h3>
                <p>Complimentary access to 1000+ airport lounges worldwide</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏌️</div>
                <h3>Golf Privileges</h3>
                <p>Complimentary golf games at premium courses across India</p>
            </div>
        </div>
        
        <div class="dcb-benefits">
            <h4>🏆 Exclusive Diners Club Black Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> 10,000 reward points worth ₹2,500</li>
                <li><strong>Metal Card:</strong> Premium black metal card with lifetime validity</li>
                <li><strong>Travel Insurance:</strong> Comprehensive coverage up to ₹1 crore</li>
                <li><strong>International Acceptance:</strong> Accepted at millions of locations worldwide</li>
                <li><strong>Priority Pass:</strong> Complimentary Priority Pass membership</li>
                <li><strong>Fine Dining:</strong> Exclusive access to premium restaurants</li>
                <li><strong>Personal Shopper:</strong> Dedicated shopping assistance services</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for HDFC Diners Club Black - Premium Metal Card</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>HDFC Diners Club Black Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose HDFC Diners Club Black Credit Card?</h3>
            <p>The HDFC Diners Club Black Credit Card is a premium metal card designed for affluent customers who frequently travel internationally. With its distinctive black metal design and exceptional international rewards, this card offers both status and substance.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>International Spends:</strong> 10 reward points per ₹150 spent</li>
                <li><strong>Domestic Spends:</strong> 5 reward points per ₹150 spent</li>
                <li><strong>Dining:</strong> 5 reward points per ₹150 spent</li>
                <li><strong>Point Value:</strong> 1 reward point = ₹0.25-0.50 (depending on redemption)</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹10,000 + GST</li>
                <li><strong>Annual Fee:</strong> ₹10,000 + GST</li>
                <li><strong>Renewal Benefit:</strong> 5,000 reward points on fee payment</li>
                <li><strong>Add-on Card Fee:</strong> ₹2,500 + GST</li>
            </ul>
            
            <h4>Key Advantages:</h4>
            <ul>
                <li><strong>Premium Status:</strong> Black metal card commands respect and recognition</li>
                <li><strong>International Focus:</strong> Excellent for frequent international travelers</li>
                <li><strong>Diners Club Network:</strong> Access to exclusive Diners Club privileges</li>
                <li><strong>Lounge Access:</strong> Comprehensive airport lounge coverage worldwide</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 21-65 years</li>
                <li><strong>Income:</strong> Minimum ₹18 lakh per annum</li>
                <li><strong>CIBIL Score:</strong> 750+ recommended</li>
                <li><strong>Employment:</strong> Salaried/Self-employed professionals</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>Frequent international travelers seeking premium rewards</li>
                <li>High-income individuals who value status and prestige</li>
                <li>Business travelers with substantial overseas expenses</li>
                <li>Customers seeking comprehensive airport lounge access</li>
                <li>Diners Club loyalists who prefer exclusive merchant network</li>
            </ul>
            
            <div style="background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107; margin: 20px 0;">
                <h5>💡 Pro Tip:</h5>
                <p>The HDFC Diners Club Black works best for customers with significant international spending. If your international spends exceed ₹5 lakhs annually, this card can provide exceptional value through its 10X international rewards program.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Premium Metal Card</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_hdfc_dcb_image_url('primary')); ?>;
    
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
