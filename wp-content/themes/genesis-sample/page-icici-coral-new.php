<?php 
// ICICI Bank Coral Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "ICICI Bank Coral Credit Card";
$bank_name = "ICICI Bank";
$main_benefit = "Lifetime Free + 2X Reward Points";
$annual_fee = "Lifetime Free";
$welcome_benefit = "₹500 Amazon Pay Gift Card";
$best_for = "First-time users, students, entry-level rewards";
$apply_link = "https://www.icicibank.com/personal-banking/cards/credit-card/coral-credit-card";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_icici_coral_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'ICICI-Coral.jpg',
        'card_only' => 'ICICI-Coral-card-only.jpg',
        'backup' => 'ICICI-Coral-backup.jpg',
        'fallback' => 'icici-coral-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for ICICI Coral
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'ICICI Bank Coral Credit Card Review 2025 - Lifetime Free Card | CardAdvisorHub';
    $page_keywords = 'ICICI Coral credit card, lifetime free credit card, 2X reward points, ICICI Bank card, entry level credit card';
    
    $image_urls = get_icici_coral_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="ICICI Bank Coral Credit Card is a lifetime free card offering 2X reward points, ₹500 welcome gift card, and excellent benefits for first-time users.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="ICICI Bank Coral Credit Card - Lifetime Free">';
    echo '<meta name="twitter:description" content="ICICI Bank Coral Credit Card is a lifetime free card with 2X reward points and excellent starter benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'icici_coral_structured_data' );
function icici_coral_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_icici_coral_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with no annual fee ever",
        "category": "Lifetime Free Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Lifetime Free Benefits",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "0",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.1",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "9834"
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
      <li class="breadcrumb-item active" aria-current="page">ICICI Bank Coral Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for ICICI Coral vibrant theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #ff7043, #ff5722, #d84315);
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
    background: rgba(255,255,255,0.15);
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid rgba(255,255,255,0.2);
}

.highlight-box .label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin-bottom: 8px;
}

.highlight-box .value {
    font-size: 1.4rem;
    font-weight: 700;
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
    border-top: 4px solid #ff7043;
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
    background: #ff7043;
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
    background: #ff5722;
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

.coral-benefits {
    background: linear-gradient(135deg, #fff3e0, #ffccbc);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.coral-benefits h4 {
    color: #d84315;
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.lifetime-free-badge {
    background: #4caf50;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 15px;
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
                <div class="lifetime-free-badge">🎯 LIFETIME FREE CARD</div>
                <h1><?php echo $card_name; ?> 2025 - Best Starter Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | No Hidden Charges</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/icici-coral.jpg'); ?>"
                         alt="ICICI Bank Coral Credit Card" 
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
                <div class="label">Welcome Gift</div>
                <div class="value">₹500 Voucher</div>
            </div>
            <div class="highlight-box">
                <div class="label">Reward Rate</div>
                <div class="value">2X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.1/5 ⭐</div>
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
                <div class="feature-icon">🆓</div>
                <h3>Lifetime Free</h3>
                <p>No joining fee, no annual fee, no hidden charges - completely free forever</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎁</div>
                <h3>Welcome Gift</h3>
                <p>₹500 Amazon Pay Gift Card on your first transaction within 90 days</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💎</div>
                <h3>2X Reward Points</h3>
                <p>Earn 2 reward points per ₹100 spent on all purchases (except fuel)</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⛽</div>
                <h3>Fuel Benefits</h3>
                <p>1% fuel surcharge waiver at all petrol pumps across India</p>
            </div>
        </div>
        
        <div class="coral-benefits">
            <h4>🌟 ICICI Coral Exclusive Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Lifetime Free:</strong> No annual fee or hidden charges ever</li>
                <li><strong>Welcome Bonus:</strong> ₹500 Amazon Pay Gift Card on first use</li>
                <li><strong>Reward Points:</strong> 2X points on all spends (1 point = ₹0.25)</li>
                <li><strong>Fuel Surcharge Waiver:</strong> 1% waiver on fuel transactions</li>
                <li><strong>Easy EMI:</strong> Convert purchases above ₹2,500 to EMI</li>
                <li><strong>Contactless Payments:</strong> Tap and pay for quick transactions</li>
                <li><strong>Mobile App:</strong> Manage card through iMobile app</li>
                <li><strong>Insurance Benefits:</strong> Purchase protection coverage</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for ICICI Coral - Get ₹500 Welcome Gift</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>ICICI Bank Coral Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose ICICI Bank Coral Credit Card?</h3>
            <p>The ICICI Bank Coral Credit Card is one of India's most popular lifetime free credit cards. It's designed for first-time credit card users, students, and anyone looking for a reliable card with no annual fee and decent rewards. The card offers excellent value with its 2X reward points and welcome benefits.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>All Spends (except fuel):</strong> 2 reward points per ₹100</li>
                <li><strong>Fuel Transactions:</strong> 1 reward point per ₹100 + 1% surcharge waiver</li>
                <li><strong>Point Value:</strong> 1 reward point = ₹0.25 (when redeemed optimally)</li>
                <li><strong>Effective Return:</strong> 0.5% on all spends</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> NIL</li>
                <li><strong>Annual Fee:</strong> NIL (Lifetime Free)</li>
                <li><strong>Add-on Card Fee:</strong> NIL (Up to 3 add-on cards)</li>
                <li><strong>Fuel Surcharge Waiver:</strong> 1% (up to ₹250/month)</li>
                <li><strong>Cash Advance Fee:</strong> 2.5% or ₹500 (whichever is higher)</li>
            </ul>
            
            <h4>Key Advantages:</h4>
            <ul>
                <li><strong>Completely Free:</strong> No joining fee, annual fee, or hidden charges</li>
                <li><strong>Easy Approval:</strong> Lower income requirements for first-time users</li>
                <li><strong>Welcome Benefits:</strong> ₹500 Amazon Pay Gift Card effectively provides initial value</li>
                <li><strong>ICICI Ecosystem:</strong> Seamless integration with ICICI banking services</li>
                <li><strong>Wide Acceptance:</strong> Accepted at millions of merchant locations</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 18-65 years</li>
                <li><strong>Income:</strong> Minimum ₹2.4 lakh per annum (negotiable for students)</li>
                <li><strong>CIBIL Score:</strong> 650+ (flexible for first-time users)</li>
                <li><strong>Employment:</strong> Salaried/Self-employed/Students</li>
                <li><strong>Special:</strong> Student variant available with lower income requirements</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>First-time credit card users building credit history</li>
                <li>Students and young professionals</li>
                <li>Users who want a reliable backup credit card</li>
                <li>Those seeking a completely free card with decent benefits</li>
                <li>ICICI Bank customers looking for easy approval</li>
                <li>Users with moderate spending who don't want annual fees</li>
            </ul>
            
            <div style="background: #d4edda; padding: 20px; border-radius: 8px; border-left: 4px solid #28a745; margin: 20px 0;">
                <h5>✅ Best For:</h5>
                <p>This card is ideal for beginners and users who prioritize zero fees over high rewards. The ₹500 welcome gift and lifetime free status make it an excellent starter card with no financial commitment.</p>
            </div>
            
            <div style="background: #d1ecf1; padding: 20px; border-radius: 8px; border-left: 4px solid #17a2b8; margin: 20px 0;">
                <h5>💡 Pro Tip:</h5>
                <p>Use this card for building credit history and as a backup card. Once you establish good credit, you can apply for premium cards while keeping this as a fee-free secondary card.</p>
            </div>
            
            <h4>Limitations to Consider:</h4>
            <ul>
                <li><strong>Lower Rewards:</strong> 0.5% return rate is modest compared to premium cards</li>
                <li><strong>Limited Fuel Benefits:</strong> Fuel surcharge waiver capped at ₹250/month</li>
                <li><strong>No Lounge Access:</strong> No airport lounge or premium benefits</li>
                <li><strong>Basic Features:</strong> Minimal additional perks compared to fee-based cards</li>
            </ul>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Your Lifetime Free Card</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_icici_coral_image_url('primary')); ?>;
    
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
