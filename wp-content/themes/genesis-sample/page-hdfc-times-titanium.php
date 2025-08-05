<?php 
// HDFC Times Titanium Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "HDFC Times Titanium Credit Card";
$bank_name = "HDFC Bank";
$main_benefit = "9X Reward Points on Weekends";
$annual_fee = "₹4,000 (Waived on annual spends of ₹4 lakhs)";
$welcome_benefit = "4,000 Welcome Reward Points";
$best_for = "Entertainment lovers, weekend shoppers, Times Network benefits";
$apply_link = "https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_hdfc_times_titanium_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'HDFC-Times-Titanium.jpg',
        'card_only' => 'HDFC-Times-Titanium-card-only.jpg',
        'backup' => 'HDFC-Times-Titanium-backup.jpg',
        'fallback' => 'hdfc-times-titanium-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for HDFC Times Titanium
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'HDFC Times Titanium Credit Card Review 2025 - 9X Weekend Points | CardAdvisorHub';
    $page_keywords = 'HDFC Times Titanium credit card, HDFC Bank credit card, 9X weekend points, Times Network benefits, entertainment credit card India, movie tickets';
    
    $image_urls = get_hdfc_times_titanium_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="HDFC Times Titanium Credit Card offers 9X reward points on weekends, Times Network exclusive benefits, and entertainment rewards. Annual fee ₹4,000.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="HDFC Times Titanium Credit Card - 9X Weekend Points">';
    echo '<meta name="twitter:description" content="HDFC Times Titanium Credit Card offers 9X reward points on weekends, Times Network exclusive benefits, and entertainment rewards.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'hdfc_times_titanium_structured_data' );
function hdfc_times_titanium_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_hdfc_times_titanium_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with Times Network exclusive benefits and entertainment rewards",
        "category": "Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Times Network Benefits + Movie discounts",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "4000",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.3",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "2247"
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
      <li class="breadcrumb-item active" aria-current="page">HDFC Times Titanium Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for Times Titanium theme */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #4a148c, #7b1fa2);
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
    border-top: 4px solid #7b1fa2;
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
    background: #7b1fa2;
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
    background: #4a148c;
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

.times-benefits {
    background: linear-gradient(135deg, #f3e5f5, #e1bee7);
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.times-benefits h4 {
    color: #4a148c;
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
                <h1><?php echo $card_name; ?> 2025 - Entertainment & Lifestyle Card</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Times Network Exclusive Benefits</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/hdfc-times-titanium.jpg'); ?>"
                         alt="HDFC Times Titanium Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹4,000 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">4,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Weekend Points</div>
                <div class="value">9X Points</div>
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
                <div class="feature-icon">🎬</div>
                <h3>Entertainment Rewards</h3>
                <p>15X points on entertainment, movies, dining, and weekend shopping</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📺</div>
                <h3>Times Network Benefits</h3>
                <p>Exclusive access to Times Network content and Times Prime membership</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>9X Weekend Points</h3>
                <p>Earn 9 reward points per ₹150 spent on weekends (Saturday & Sunday)</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Airport Lounge Access</h3>
                <p>Complimentary access to domestic airport lounges in India</p>
            </div>
        </div>
        
        <div class="times-benefits">
            <h4>🎊 Times Network Exclusive Benefits</h4>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Times Prime Membership:</strong> Free 1-year subscription worth ₹999</li>
                <li><strong>Movie Tickets:</strong> Buy 1 Get 1 on movie tickets through Times Prime</li>
                <li><strong>OTT Subscriptions:</strong> Discounted subscriptions to premium streaming platforms</li>
                <li><strong>Dining Offers:</strong> Exclusive discounts at partner restaurants</li>
                <li><strong>Travel Benefits:</strong> Special rates on hotels and flights</li>
            </ul>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for HDFC Times Titanium - Instant Approval</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>HDFC Times Titanium Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose HDFC Times Titanium Credit Card?</h3>
            <p>The HDFC Times Titanium Credit Card is designed for entertainment enthusiasts and weekend shoppers. With its unique reward structure and Times Network partnership, this card offers exceptional value for lifestyle spending.</p>
            
            <h4>Reward Structure:</h4>
            <ul>
                <li><strong>Weekends (Sat & Sun):</strong> 9X points per ₹150 spent</li>
                <li><strong>Entertainment:</strong> 15X points on movies, dining, entertainment</li>
                <li><strong>Weekdays:</strong> 3X points per ₹150 spent</li>
                <li><strong>International Spends:</strong> 2X points per ₹150 spent</li>
            </ul>
            
            <h4>Fee Structure:</h4>
            <ul>
                <li><strong>Annual Fee:</strong> ₹4,000 + GST (waived on ₹4 lakh annual spends)</li>
                <li><strong>Joining Fee:</strong> ₹4,000 + GST</li>
                <li><strong>Renewal Benefit:</strong> 4,000 reward points on fee payment</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is perfect for:</p>
            <ul>
                <li>Entertainment lovers who frequently watch movies and dine out</li>
                <li>Weekend shoppers who do most of their spending on weekends</li>
                <li>Times Network content consumers</li>
                <li>Young professionals who value lifestyle benefits</li>
                <li>Individuals with monthly income above ₹50,000</li>
            </ul>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply Now - Get Instant Decision</a>
            </div>
        </div>
    </div>
</section>
</main>

<script>
// Enhanced image loading with multiple fallbacks
document.addEventListener('DOMContentLoaded', function() {
    const img = document.getElementById('hero-card-image');
    const imageUrls = <?php echo json_encode(get_hdfc_times_titanium_image_url('primary')); ?>;
    
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
