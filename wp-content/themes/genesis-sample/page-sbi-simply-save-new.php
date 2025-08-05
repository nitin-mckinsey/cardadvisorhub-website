<?php 
// SBI Simply Save Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "SBI Simply Save Credit Card";
$bank_name = "SBI Card";
$main_benefit = "5X Reward Points on Fuel & Grocery";
$annual_fee = "₹499 + GST (Waived on ₹1 lakh annual spends)";
$welcome_benefit = "500 Welcome Reward Points";
$best_for = "Fuel users, grocery shoppers, entry-level users";
$apply_link = "https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-simply-save-credit-card.page";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_sbi_simply_save_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'SBI-Simply-Save.jpg',
        'card_only' => 'SBI-Simply-Save-card-only.jpg',
        'backup' => 'SBI-Simply-Save-backup.jpg',
        'fallback' => 'sbi-simply-save-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for SBI Simply Save
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'SBI Simply Save Credit Card Review 2025 - 5X Fuel & Grocery Points | CardAdvisorHub';
    $page_keywords = 'SBI Simply Save credit card, 5X fuel points, grocery rewards, entry level credit card India, SBI Card';
    
    $image_urls = get_sbi_simply_save_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="SBI Simply Save Credit Card offers 5X reward points on fuel & grocery, fuel surcharge waiver, and easy approval. Annual fee ₹499 waived on spends.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="SBI Simply Save Credit Card - 5X Fuel & Grocery Points">';
    echo '<meta name="twitter:description" content="SBI Simply Save Credit Card offers 5X reward points on fuel & grocery, fuel surcharge waiver, and easy approval.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'sbi_simply_save_structured_data' );
function sbi_simply_save_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_sbi_simply_save_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with fuel surcharge waiver and easy approval process",
        "category": "Entry-Level Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Fuel Surcharge Waiver + Easy Approval",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "499",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "3.8",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "8947"
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
      <li class="breadcrumb-item active" aria-current="page">SBI Simply Save Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for SBI Simply Save theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #1e88e5, #42a5f5, #1976d2);
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
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 12px;
    text-align: center;
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
    border-top: 4px solid #1e88e5;
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
    background: #1e88e5;
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
    background: #1976d2;
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

.simply-save-benefits {
    background: linear-gradient(135deg, #e3f2fd, #bbdefb);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.simply-save-benefits h4 {
    color: #1976d2;
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
                <h1><?php echo $card_name; ?> 2025 - Entry-Level Rewards Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Fuel Surcharge Waiver</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/sbi-simply-save.jpg'); ?>"
                         alt="SBI Simply Save Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹499 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">500 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Fuel & Grocery</div>
                <div class="value">5X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">3.8/5 ⭐</div>
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
                <div class="feature-icon">⛽</div>
                <h3>5X Fuel Rewards</h3>
                <p>Earn 5 reward points per ₹100 spent at fuel stations across India</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛒</div>
                <h3>5X Grocery Points</h3>
                <p>Earn 5X points on grocery shopping at supermarkets and departmental stores</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Fuel Surcharge Waiver</h3>
                <p>1% fuel surcharge waiver at all fuel stations across India</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✅</div>
                <h3>Easy Approval</h3>
                <p>Simple approval process with minimal documentation and lower income requirements</p>
            </div>
        </div>
        
        <div class="simply-save-benefits">
            <h4>💰 Simply Save Exclusive Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> 500 reward points on first transaction</li>
                <li><strong>Annual Fee Waiver:</strong> Fee waived on annual spends of ₹1 lakh</li>
                <li><strong>Reward Points:</strong> Earn 1 reward point on all other spends</li>
                <li><strong>Easy Redemption:</strong> Redeem points for cash, vouchers, or products</li>
                <li><strong>EMI Facility:</strong> Convert purchases to EMI at low interest rates</li>
                <li><strong>Insurance Cover:</strong> Purchase protection and lost card liability</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for SBI Simply Save - Easy Approval</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>SBI Simply Save Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose SBI Simply Save Credit Card?</h3>
            <p>The SBI Simply Save Credit Card is an ideal entry-level card designed for customers who want to start their credit journey with a reliable and rewarding card. With excellent fuel and grocery benefits, this card offers great value for everyday expenses.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>Fuel Stations:</strong> 5 reward points per ₹100 spent</li>
                <li><strong>Grocery Stores:</strong> 5 reward points per ₹100 spent</li>
                <li><strong>All Other Spends:</strong> 1 reward point per ₹100 spent</li>
                <li><strong>Point Value:</strong> 1 reward point = ₹0.25 (when redeemed optimally)</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹499 + GST</li>
                <li><strong>Annual Fee:</strong> ₹499 + GST (waived on ₹1 lakh annual spends)</li>
                <li><strong>Add-on Card Fee:</strong> ₹199 + GST</li>
                <li><strong>Late Payment Fee:</strong> ₹500-₹1,300 (based on outstanding amount)</li>
            </ul>
            
            <h4>Key Advantages:</h4>
            <ul>
                <li><strong>Low Fee:</strong> Affordable annual fee that can be easily waived</li>
                <li><strong>Fuel Benefits:</strong> Excellent fuel rewards and surcharge waiver</li>
                <li><strong>Easy Approval:</strong> Lower income requirements and simple process</li>
                <li><strong>SBI Network:</strong> Backed by India's largest banking network</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 21-65 years</li>
                <li><strong>Income:</strong> Minimum ₹1.2 lakh per annum</li>
                <li><strong>CIBIL Score:</strong> 650+ recommended</li>
                <li><strong>Employment:</strong> Salaried/Self-employed individuals</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>First-time credit card users seeking a reliable starter card</li>
                <li>Individuals with regular fuel and grocery expenses</li>
                <li>Students and young professionals with moderate income</li>
                <li>Customers seeking low-fee cards with good everyday benefits</li>
                <li>SBI bank account holders looking for easy approval</li>
            </ul>
            
            <div style="background: #d4edda; padding: 20px; border-radius: 8px; border-left: 4px solid #28a745; margin: 20px 0;">
                <h5>✅ Best For:</h5>
                <p>This card is ideal for customers who spend ₹15,000+ monthly on fuel and groceries. The 5X rewards and fuel surcharge waiver provide excellent value for everyday expenses.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Started with SBI Simply Save</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_sbi_simply_save_image_url('primary')); ?>;
    
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
    tryNextResponse();
});
</script>

<?php get_footer(); ?>
