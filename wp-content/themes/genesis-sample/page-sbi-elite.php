<?php 
// SBI Elite Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "SBI Elite Credit Card";
$bank_name = "State Bank of India";
$main_benefit = "10X Reward Points on Dining, Grocery & Shopping";
$annual_fee = "₹4,999 + GST (Waived on annual spends of ₹10 lakhs)";
$welcome_benefit = "25,000 Welcome Reward Points";
$best_for = "Premium lifestyle, dining enthusiasts, high spenders";
$apply_link = "https://www.sbicard.com/en/personal/credit-cards/elite.page";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_sbi_elite_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'SBI-Elite.jpg',
        'card_only' => 'SBI-Elite-card-only.jpg',
        'backup' => 'SBI-Elite-backup.jpg',
        'fallback' => 'sbi-elite-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for SBI Elite
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'SBI Elite Credit Card Review 2025 - 10X Dining Points | CardAdvisorHub';
    $page_keywords = 'SBI Elite credit card, SBI credit card, 10X reward points, dining rewards, grocery rewards, premium credit card India';
    
    $image_urls = get_sbi_elite_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="SBI Elite Credit Card offers 10X reward points on dining, grocery & shopping, airport lounge access, and premium lifestyle benefits. Annual fee ₹4,999.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="SBI Elite Credit Card - 10X Dining Points">';
    echo '<meta name="twitter:description" content="SBI Elite Credit Card offers 10X reward points on dining, grocery & shopping, airport lounge access, and premium lifestyle benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'sbi_elite_structured_data' );
function sbi_elite_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_sbi_elite_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with premium lifestyle benefits and airport lounge access",
        "category": "Premium Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Airport Lounge + Premium Benefits",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "4999",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.4",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "1876"
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
      <li class="breadcrumb-item active" aria-current="page">SBI Elite Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for SBI Elite theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #003366, #0066cc);
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
    border-top: 4px solid #0066cc;
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
    background: #0066cc;
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
    background: #003366;
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

.elite-benefits {
    background: linear-gradient(135deg, #e3f2fd, #bbdefb);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.elite-benefits h4 {
    color: #003366;
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
                <h1><?php echo $card_name; ?> 2025 - Premium Lifestyle Credit Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/sbi-elite.jpg'); ?>"
                         alt="SBI Elite Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹4,999 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">25,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Dining Points</div>
                <div class="value">10X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.4/5 ⭐</div>
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
                <h3>10X Dining Rewards</h3>
                <p>Earn 10 reward points per ₹100 spent on dining across India</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛒</div>
                <h3>10X Grocery & Shopping</h3>
                <p>Earn 10X points on grocery stores and departmental shopping</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Airport Lounge Access</h3>
                <p>Complimentary access to 700+ airport lounges worldwide</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Premium Lifestyle Benefits</h3>
                <p>Golf privileges, concierge services, and exclusive experiences</p>
            </div>
        </div>
        
        <div class="elite-benefits">
            <h4>🏆 Exclusive Elite Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Bonus:</strong> 25,000 reward points on first spend</li>
                <li><strong>Golf Benefits:</strong> Complimentary green fees at select golf courses</li>
                <li><strong>Concierge Services:</strong> 24/7 premium lifestyle concierge</li>
                <li><strong>Insurance Cover:</strong> Air accident cover up to ₹1 crore</li>
                <li><strong>Priority Pass:</strong> Complimentary Priority Pass membership</li>
                <li><strong>Movie Tickets:</strong> Buy 1 Get 1 free movie tickets</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for SBI Elite - Premium Benefits</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>SBI Elite Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose SBI Elite Credit Card?</h3>
            <p>The SBI Elite Credit Card is designed for affluent individuals seeking premium lifestyle benefits and accelerated rewards on dining and shopping. With its comprehensive rewards program and elite privileges, this card caters to high-net-worth customers.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>Dining:</strong> 10 reward points per ₹100 spent</li>
                <li><strong>Grocery/Departmental Stores:</strong> 10 reward points per ₹100 spent</li>
                <li><strong>International Transactions:</strong> 5 reward points per ₹100 spent</li>
                <li><strong>All Other Spends:</strong> 2 reward points per ₹100 spent</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹4,999 + GST</li>
                <li><strong>Annual Fee:</strong> ₹4,999 + GST (waived on ₹10 lakh annual spends)</li>
                <li><strong>Renewal Benefit:</strong> 10,000 reward points on fee payment</li>
                <li><strong>Add-on Card Fee:</strong> ₹1,499 + GST</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Age:</strong> 21-65 years</li>
                <li><strong>Income:</strong> Minimum ₹20 lakh per annum</li>
                <li><strong>CIBIL Score:</strong> 750+ recommended</li>
                <li><strong>Employment:</strong> Salaried/Self-employed professionals</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>High-income professionals with substantial dining expenses</li>
                <li>Frequent travelers who value airport lounge access</li>
                <li>Golf enthusiasts seeking complimentary green fees</li>
                <li>Customers seeking premium lifestyle benefits and concierge services</li>
                <li>Individuals with annual spends above ₹10 lakhs</li>
            </ul>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Elite Status</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_sbi_elite_image_url('primary')); ?>;
    
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
