<?php 
// HDFC Millennia Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "HDFC Millennia Credit Card";
$bank_name = "HDFC Bank";
$main_benefit = "2.5% to 5% Cashback on Online Spends";
$annual_fee = "₹1,000 + GST (Waived on ₹1 lakh annual spends)";
$welcome_benefit = "₹1,000 Worth Welcome Vouchers";
$best_for = "Online shoppers, millennials, digital payments";
$apply_link = "https://www.hdfcbank.com/personal/pay/cards/credit-cards/millennia-credit-card";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_hdfc_millennia_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'HDFC-Millennia.jpg',
        'card_only' => 'HDFC-Millennia-card-only.jpg',
        'backup' => 'HDFC-Millennia-backup.jpg',
        'fallback' => 'hdfc-millennia-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for HDFC Millennia
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'HDFC Millennia Credit Card Review 2025 - 5% Online Cashback | CardAdvisorHub';
    $page_keywords = 'HDFC Millennia credit card, 5% cashback online shopping, millennia rewards, HDFC Bank cashback card';
    
    $image_urls = get_hdfc_millennia_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="HDFC Millennia Credit Card offers up to 5% cashback on online shopping, ₹1,000 welcome vouchers, and special benefits for millennials. Annual fee ₹1,000 waived on spends.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="HDFC Millennia Credit Card - 5% Online Cashback">';
    echo '<meta name="twitter:description" content="HDFC Millennia Credit Card offers up to 5% cashback on online shopping with special millennial benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'hdfc_millennia_structured_data' );
function hdfc_millennia_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_hdfc_millennia_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with special benefits designed for millennials",
        "category": "Cashback Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Special Millennial Benefits",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "1000",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.3",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "12569"
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
      <li class="breadcrumb-item active" aria-current="page">HDFC Millennia Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for HDFC Millennia modern theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #ff6b35, #f7931e, #ff5722);
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
    border-top: 4px solid #ff6b35;
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
    background: #ff6b35;
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

.millennia-benefits {
    background: linear-gradient(135deg, #fff3e0, #ffe0b2);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.millennia-benefits h4 {
    color: #f57c00;
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.cashback-tiers {
    background: #fff8f0;
    padding: 25px;
    border-radius: 8px;
    border-left: 4px solid #ff6b35;
    margin: 20px 0;
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
                <h1><?php echo $card_name; ?> 2025 - Millennial Cashback Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Digital-First Banking</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/hdfc-millennia.jpg'); ?>"
                         alt="HDFC Millennia Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹1,000 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Vouchers</div>
                <div class="value">₹1,000 Worth</div>
            </div>
            <div class="highlight-box">
                <div class="label">Max Cashback</div>
                <div class="value">5% Online</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.3/5 ⭐</div>
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
                <div class="feature-icon">💻</div>
                <h3>5% Online Cashback</h3>
                <p>Earn up to 5% cashback on online shopping (spend-based slabs)</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Digital Wallet Benefits</h3>
                <p>2.5% cashback on PayZapp, PayTM, Google Pay, and other digital wallets</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎬</div>
                <h3>SmartBuy Benefits</h3>
                <p>10X rewards on HDFC SmartBuy for flights, hotels, and vouchers</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏪</div>
                <h3>Offline Rewards</h3>
                <p>1% cashback on offline retail spends and bill payments</p>
            </div>
        </div>
        
        <div class="cashback-tiers">
            <h4>💰 Monthly Cashback Slabs (5% Online Cashback)</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Spend ₹10,000-₹20,000:</strong> 2.5% cashback</li>
                <li><strong>Spend above ₹20,000:</strong> 5% cashback (max ₹1,000/month)</li>
            </ul>
        </div>
        
        <div class="millennia-benefits">
            <h4>🎯 Millennia Exclusive Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Vouchers:</strong> ₹1,000 worth Amazon/Flipkart vouchers</li>
                <li><strong>Annual Fee Waiver:</strong> Fee waived on ₹1 lakh annual spends</li>
                <li><strong>EMI Options:</strong> Convert high-value purchases to EMI</li>
                <li><strong>Contactless Payments:</strong> Tap & Pay for quick transactions</li>
                <li><strong>24/7 Customer Support:</strong> Premium customer service</li>
                <li><strong>Insurance Cover:</strong> Purchase protection and lost card liability</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for HDFC Millennia - Get ₹1,000 Vouchers</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>HDFC Millennia Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose HDFC Millennia Credit Card?</h3>
            <p>The HDFC Millennia Credit Card is specifically designed for the millennial generation who prefer online shopping and digital payments. With its attractive cashback structure and modern features, it's perfect for tech-savvy users who want maximum returns on their digital spends.</p>
            
            <h4>Cashback Structure:</h4>
            <ul>
                <li><strong>Online Shopping (Monthly):</strong>
                    <ul>
                        <li>₹10,000-₹20,000 spends: 2.5% cashback</li>
                        <li>Above ₹20,000 spends: 5% cashback (max ₹1,000/month)</li>
                    </ul>
                </li>
                <li><strong>Digital Wallets:</strong> 2.5% cashback on wallet reloads</li>
                <li><strong>HDFC SmartBuy:</strong> 10X rewards on flights/hotels</li>
                <li><strong>Offline Retail:</strong> 1% cashback on all retail spends</li>
                <li><strong>Bill Payments:</strong> 1% cashback (max ₹750/month)</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹1,000 + GST</li>
                <li><strong>Annual Fee:</strong> ₹1,000 + GST (waived on ₹1 lakh annual spends)</li>
                <li><strong>Add-on Card Fee:</strong> ₹500 + GST per card</li>
                <li><strong>Fuel Surcharge Waiver:</strong> 1% (₹500-₹3,000 transactions)</li>
            </ul>
            
            <h4>Key Advantages:</h4>
            <ul>
                <li><strong>High Online Cashback:</strong> Industry-leading 5% on online spends</li>
                <li><strong>Easy Fee Waiver:</strong> Annual fee waived with modest spending</li>
                <li><strong>Welcome Benefits:</strong> ₹1,000 vouchers effectively offset joining fee</li>
                <li><strong>HDFC Ecosystem:</strong> Excellent integration with HDFC services</li>
                <li><strong>Modern Features:</strong> Contactless payments and app integration</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 21-60 years</li>
                <li><strong>Income:</strong> Minimum ₹3 lakh per annum</li>
                <li><strong>CIBIL Score:</strong> 750+ recommended</li>
                <li><strong>Employment:</strong> Salaried professionals</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>Millennials and Gen-Z users who shop extensively online</li>
                <li>Digital wallet users and UPI enthusiasts</li>
                <li>Professionals with monthly online spends of ₹20,000+</li>
                <li>HDFC bank customers seeking ecosystem benefits</li>
                <li>Users who want simple, straightforward cashback structure</li>
            </ul>
            
            <div style="background: #d4edda; padding: 20px; border-radius: 8px; border-left: 4px solid #28a745; margin: 20px 0;">
                <h5>✅ Best For:</h5>
                <p>This card shines for users with monthly online spends above ₹20,000. The 5% cashback on online shopping (max ₹1,000/month) means you can earn ₹12,000 annually, making it highly profitable despite the annual fee.</p>
            </div>
            
            <div style="background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107; margin: 20px 0;">
                <h5>⚠️ Important Note:</h5>
                <p>The 5% cashback requires monthly spends above ₹20,000. If your monthly online spending is below ₹10,000, consider other cashback cards with lower spending thresholds.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="https://www.hdfcbank.com/personal/pay/cards/credit-cards/millennia-credit-card" target="_blank" class="apply-btn">Apply Now - Get ₹1,000 Welcome Vouchers</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_hdfc_millennia_image_url('primary')); ?>;
    
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
