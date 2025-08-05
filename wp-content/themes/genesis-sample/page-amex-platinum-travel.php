<?php 
// American Express Platinum Travel Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "American Express Platinum Travel Credit Card";
$bank_name = "American Express";
$main_benefit = "5X Membership Rewards on Flights & Hotels";
$annual_fee = "₹60,000 + GST (Ultra-Premium Travel Benefits)";
$welcome_benefit = "30,000 Welcome Bonus Points";
$best_for = "Luxury travelers, frequent flyers, ultra-premium lifestyle";
$apply_link = "https://www.americanexpress.com/in/credit-cards/platinum-travel-credit-card/";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_amex_platinum_travel_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'Amex-Platinum-Travel.jpg',
        'card_only' => 'Amex-Platinum-Travel-card-only.jpg',
        'backup' => 'Amex-Platinum-backup.jpg',
        'fallback' => 'amex-platinum-travel-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for Amex Platinum Travel
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'American Express Platinum Travel Credit Card Review 2025 - 5X Travel Points | CardAdvisorHub';
    $page_keywords = 'American Express Platinum Travel credit card, 5X travel points, ultra premium travel card, luxury travel benefits India, Amex Platinum';
    
    $image_urls = get_amex_platinum_travel_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="American Express Platinum Travel Credit Card offers 5X Membership Rewards on flights & hotels, unlimited airport lounge access, and ultra-premium travel benefits. Annual fee ₹60,000.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="American Express Platinum Travel Credit Card - 5X Travel Points">';
    echo '<meta name="twitter:description" content="American Express Platinum Travel Credit Card offers 5X Membership Rewards on flights & hotels, unlimited airport lounge access, and ultra-premium travel benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'amex_platinum_travel_structured_data' );
function amex_platinum_travel_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_amex_platinum_travel_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with ultra-premium travel benefits and exclusive Amex experiences",
        "category": "Ultra-Premium Travel Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Unlimited Lounge + Hotel Status",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "60000",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
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
      <li class="breadcrumb-item active" aria-current="page">American Express Platinum Travel Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for Amex Platinum Travel ultra-premium theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #c0c0c0, #e6e6e6, #a8a8a8);
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
    background: rgba(255,255,255,0.95);
    color: #333;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border: 2px solid #c0c0c0;
}

.highlight-box .label {
    font-size: 0.9rem;
    opacity: 0.7;
    margin-bottom: 8px;
}

.highlight-box .value {
    font-size: 1.4rem;
    font-weight: 700;
    color: #666;
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
    border-top: 4px solid #c0c0c0;
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
    background: linear-gradient(135deg, #c0c0c0, #999999);
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
    background: linear-gradient(135deg, #999999, #777777);
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

.platinum-benefits {
    background: linear-gradient(135deg, #f5f5f5, #e8e8e8);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
    border: 2px solid #c0c0c0;
}

.platinum-benefits h4 {
    color: #666;
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
                <h1><?php echo $card_name; ?> 2025 - Ultra-Premium Travel Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Unlimited Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/amex-platinum-travel.jpg'); ?>"
                         alt="American Express Platinum Travel Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹60,000 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">30,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Travel Points</div>
                <div class="value">5X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.8/5 ⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <h2>Ultra-Premium Travel Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>5X Travel Rewards</h3>
                <p>Earn 5 Membership Rewards points per ₹100 spent on flights and hotels</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏨</div>
                <h3>Hotel Elite Status</h3>
                <p>Complimentary elite status with major hotel chains and room upgrades</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏢</div>
                <h3>Unlimited Lounge Access</h3>
                <p>Access to 1200+ airport lounges worldwide including Priority Pass and Centurion Lounges</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🤵</div>
                <h3>Platinum Concierge</h3>
                <p>24/7 dedicated Platinum concierge services for travel, dining, and lifestyle needs</p>
            </div>
        </div>
        
        <div class="platinum-benefits">
            <h4>👑 Exclusive Platinum Travel Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Welcome Offer:</strong> 30,000 Membership Rewards points worth ₹7,500</li>
                <li><strong>Annual Travel Credits:</strong> ₹20,000 in travel benefits and vouchers</li>
                <li><strong>Hotel Benefits:</strong> Elite status with Hilton, Marriott, and IHG</li>
                <li><strong>Travel Insurance:</strong> Comprehensive coverage up to ₹1.5 crore</li>
                <li><strong>Airport Transfers:</strong> Complimentary airport transfers in major cities</li>
                <li><strong>Fine Dining:</strong> Access to exclusive restaurants and chef experiences</li>
                <li><strong>Global Assistance:</strong> 24/7 global travel assistance and emergency services</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for Amex Platinum Travel - Ultra-Premium Status</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>American Express Platinum Travel Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose American Express Platinum Travel Credit Card?</h3>
            <p>The American Express Platinum Travel Credit Card represents the pinnacle of luxury travel cards in India. Designed for frequent travelers and high-net-worth individuals, this card offers unparalleled travel benefits and experiences that justify its premium positioning.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>Flights & Hotels:</strong> 5 Membership Rewards points per ₹100 spent</li>
                <li><strong>Overseas Spends:</strong> 3 Membership Rewards points per ₹100 spent</li>
                <li><strong>All Other Spends:</strong> 1 Membership Rewards point per ₹100 spent</li>
                <li><strong>Point Transfers:</strong> Transfer to airline and hotel partners at 1:1 ratio</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Joining Fee:</strong> ₹60,000 + GST</li>
                <li><strong>Annual Fee:</strong> ₹60,000 + GST</li>
                <li><strong>Annual Benefits:</strong> ₹20,000+ worth of travel credits and benefits</li>
                <li><strong>Add-on Card Fee:</strong> ₹15,000 + GST</li>
            </ul>
            
            <h4>Travel Benefits:</h4>
            <ul>
                <li><strong>Airport Lounges:</strong> Unlimited access to 1200+ lounges worldwide</li>
                <li><strong>Hotel Elite Status:</strong> Automatic elite status with major hotel chains</li>
                <li><strong>Room Upgrades:</strong> Complimentary room upgrades at partner hotels</li>
                <li><strong>Late Checkout:</strong> Late checkout and early check-in privileges</li>
            </ul>
            
            <h4>Eligibility Criteria:</h4>
            <ul>
                <li><strong>Income:</strong> Minimum ₹40 lakh per annum (invitation preferred)</li>
                <li><strong>Age:</strong> 18+ years</li>
                <li><strong>CIBIL Score:</strong> 800+ recommended</li>
                <li><strong>Existing Relationship:</strong> Premium banking preferred</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is exclusively for:</p>
            <ul>
                <li>Ultra-high net worth individuals with substantial travel expenses</li>
                <li>Frequent international business travelers</li>
                <li>Luxury travel enthusiasts who value premium experiences</li>
                <li>Individuals with annual travel spends exceeding ₹10 lakhs</li>
                <li>Premium customers seeking the ultimate travel credit card</li>
            </ul>
            
            <div style="background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107; margin: 20px 0;">
                <h5>⚠️ Important Note:</h5>
                <p>This card is invitation-only and requires substantial income documentation. The benefits are designed for travelers who can maximize the ₹20,000+ annual travel credits and utilize the premium travel services.</p>
            </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Ultra-Premium Travel Experience</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_amex_platinum_travel_image_url('primary')); ?>;
    
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
