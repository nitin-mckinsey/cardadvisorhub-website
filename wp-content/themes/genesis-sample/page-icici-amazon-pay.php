<?php 
// ICICI Amazon Pay Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "ICICI Amazon Pay Credit Card";
$bank_name = "ICICI Bank";
$main_benefit = "5% Cashback on Amazon for Prime Members";
$annual_fee = "Lifetime Free (No Annual Fee Ever)";
$welcome_benefit = "₹2,000 Amazon Pay Balance";
$best_for = "Amazon shoppers, Prime members, online shopping";
$apply_link = "https://www.icicibank.com/personal-banking/cards/credit-card/amazon-pay-credit-card";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_icici_amazon_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'ICICI-Amazon-Pay.jpg',
        'card_only' => 'ICICI-Amazon-Pay-card-only.jpg',
        'backup' => 'ICICI-Amazon-backup.jpg',
        'fallback' => 'icici-amazon-pay-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for ICICI Amazon Pay
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'ICICI Amazon Pay Credit Card Review 2025 - 5% Amazon Cashback | CardAdvisorHub';
    $page_keywords = 'ICICI Amazon Pay credit card, 5% Amazon cashback, lifetime free credit card, Prime member benefits, online shopping card India';
    
    $image_urls = get_icici_amazon_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="ICICI Amazon Pay Credit Card offers 5% cashback on Amazon for Prime members, lifetime free with no annual fee. Perfect for Amazon shoppers.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="ICICI Amazon Pay Credit Card - 5% Amazon Cashback">';
    echo '<meta name="twitter:description" content="ICICI Amazon Pay Credit Card offers 5% cashback on Amazon for Prime members, lifetime free with no annual fee.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'icici_amazon_structured_data' );
function icici_amazon_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_icici_amazon_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with lifetime free benefits and Amazon Pay integration",
        "category": "Cashback Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Lifetime Free + Amazon Integration",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "0",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "12847"
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
      <li class="breadcrumb-item active" aria-current="page">ICICI Amazon Pay Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for Amazon Pay theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #ff9900, #ffb84d, #ff6600);
    color: white;
    padding: 60px 0;
    text-align: center;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
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
    color: #ff6600;
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
    border-top: 4px solid #ff9900;
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
    background: #ff9900;
    color: white;
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
    background: #ff6600;
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

.amazon-benefits {
    background: linear-gradient(135deg, #fff3e0, #ffe0b3);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border: 2px solid #ff9900;
}

.amazon-benefits h4 {
    color: #ff6600;
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
                <h1><?php echo $card_name; ?> 2025 - Lifetime Free Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | No Annual Fee Ever</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/icici-amazon-pay.jpg'); ?>"
                         alt="ICICI Amazon Pay Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">Lifetime Free</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">₹2,000 Gift Card</div>
            </div>
            <div class="highlight-box">
                <div class="label">Amazon Cashback</div>
                <div class="value">5% for Prime</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.5/5 ⭐</div>
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
                <div class="feature-icon">🛒</div>
                <h3>5% Amazon Cashback</h3>
                <p>Earn 5% cashback on Amazon purchases for Prime members (3% for non-Prime)</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Lifetime Free Card</h3>
                <p>No joining fee, no annual fee, no hidden charges - completely free forever</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Additional Cashback</h3>
                <p>2% on bill payments via Amazon Pay, 1% on other online spends</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎁</div>
                <h3>Amazon Pay Integration</h3>
                <p>Seamless integration with Amazon Pay wallet and instant payment processing</p>
            </div>
        </div>
        
        <div class="amazon-benefits">
            <h4>🎯 Amazon Exclusive Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> ₹2,000 Amazon Pay Gift Card on first transaction</li>
                <li><strong>Prime Benefits:</strong> Enhanced cashback rates for Amazon Prime members</li>
                <li><strong>No Cap:</strong> Unlimited cashback on Amazon purchases</li>
                <li><strong>Instant Payment:</strong> Pay instantly using Amazon Pay balance</li>
                <li><strong>EMI Options:</strong> Convert purchases to EMI directly on Amazon</li>
                <li><strong>Amazon Pay Later:</strong> Access to Amazon Pay Later services</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for ICICI Amazon Pay - Lifetime Free</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>ICICI Amazon Pay Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose ICICI Amazon Pay Credit Card?</h3>
            <p>The ICICI Amazon Pay Credit Card is the ultimate choice for Amazon shoppers. Being completely free with exceptional Amazon cashback rates, this card offers unbeatable value for frequent Amazon users and Prime members.</p>
            
            <h4>Cashback Structure:</h4>
            <ul>
                <li><strong>Amazon (Prime Members):</strong> 5% cashback as Amazon Pay balance</li>
                <li><strong>Amazon (Non-Prime):</strong> 3% cashback as Amazon Pay balance</li>
                <li><strong>Bill Payments via Amazon Pay:</strong> 2% cashback</li>
                <li><strong>Other Online Spends:</strong> 1% cashback</li>
                <li><strong>Offline Spends:</strong> 0.5% cashback</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹0 (Completely Free)</li>
                <li><strong>Annual Fee:</strong> ₹0 (Lifetime Free)</li>
                <li><strong>Renewal Fee:</strong> ₹0 (No renewal fee ever)</li>
                <li><strong>Add-on Card Fee:</strong> ₹0 (Free add-on cards)</li>
            </ul>
            
            <h4>Key Advantages:</h4>
            <ul>
                <li><strong>No Cost:</strong> Completely free card with no hidden charges</li>
                <li><strong>High Amazon Cashback:</strong> Best-in-class Amazon cashback rates</li>
                <li><strong>Prime Integration:</strong> Enhanced benefits for Prime members</li>
                <li><strong>Easy Approval:</strong> Quick approval process with minimal documentation</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 18+ years</li>
                <li><strong>Income:</strong> Minimum ₹20,000 per month</li>
                <li><strong>CIBIL Score:</strong> 650+ recommended</li>
                <li><strong>Employment:</strong> Salaried/Self-employed individuals</li>
                <li><strong>Amazon Account:</strong> Active Amazon account preferred</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>Frequent Amazon shoppers who buy regularly from Amazon</li>
                <li>Amazon Prime members seeking maximum cashback</li>
                <li>First-time credit card users looking for a free card</li>
                <li>Online shopping enthusiasts who prefer cashback over points</li>
                <li>Students and young professionals with moderate income</li>
                <li>Anyone who wants a no-cost credit card with good benefits</li>
            </ul>
            
            <div style="background: #d4edda; padding: 20px; border-radius: 8px; border-left: 4px solid #28a745; margin: 20px 0;">
                <h5>✅ Best For:</h5>
                <p>This card offers the highest value for Amazon Prime members who spend ₹20,000+ annually on Amazon. The 5% cashback with no annual fee makes it one of the best free cards in India.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get ₹2,000 Gift Card</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_icici_amazon_image_url('primary')); ?>;
    
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
