<?php 
// HDFC Infinia Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "HDFC Bank Infinia Credit Card";
$bank_name = "HDFC Bank";
$main_benefit = "5X Reward Points on All Spends";
$annual_fee = "₹12,500 (Waived on annual spends of ₹8 lakhs)";
$welcome_benefit = "12,500 Welcome Reward Points";
$best_for = "Ultra premium lifestyle, unlimited airport lounge access";
$apply_link = "https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx";

// Remove X-Powered-By header for security
add_action('init', function() {
    header_remove('X-Powered-By');
});

// Enhanced image path handling
function get_hdfc_infinia_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'HDFC-Infinia-Metal.jpg',
        'card_only' => 'HDFC-Infinia-Metal-card-only.jpg',
        'backup' => 'HDFC-Infinia-original-backup.jpg',
        'fallback' => 'hdfc-infinia-fallback.jpg'
    );
    
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for HDFC Infinia
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'HDFC Infinia Credit Card Review 2025 - Metal Card 5X Points | CardAdvisorHub';
    $page_keywords = 'HDFC Infinia credit card, HDFC Bank metal card, 5X reward points, unlimited airport lounge access, ultra premium credit card India, metal credit card';
    
    $image_urls = get_hdfc_infinia_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="HDFC Infinia Metal Credit Card offers 5X reward points on all spends, unlimited airport lounge access, and ultra-premium benefits. Annual fee ₹12,500.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="HDFC Infinia Metal Credit Card - 5X Reward Points">';
    echo '<meta name="twitter:description" content="HDFC Infinia Metal Credit Card offers 5X reward points on all spends, unlimited airport lounge access, and ultra-premium benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'hdfc_infinia_structured_data' );
function hdfc_infinia_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_hdfc_infinia_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with metal card and unlimited airport lounge access",
        "category": "Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Metal Card + Unlimited lounge access",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "12500",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "1847"
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
      <li class="breadcrumb-item active" aria-current="page">HDFC Infinia Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS with better image handling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #1a1a2e, #16213e);
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
    background: #007cba;
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
}

.apply-btn:hover {
    background: #005a8a;
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
                <h1><?php echo $card_name; ?> 2025 - Metal Card with Premium Benefits</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Unlimited Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image" 
                         src="<?php echo home_url('/wp-content/uploads/card-images/hdfc-infinia.jpg'); ?>"
                         alt="HDFC Infinia Metal Credit Card" 
                         itemprop="image"
                         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹12,500 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">12,500 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Best Rewards</div>
                <div class="value">5X Points</div>
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
        <h2>Key Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">💳</div>
                <h3>Metal Credit Card</h3>
                <p>Premium metal card with exclusive design and ultra-premium feel</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Unlimited Lounge Access</h3>
                <p>Access to 1000+ airport lounges worldwide with Priority Pass membership</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>5X Points on All Spends</h3>
                <p>Earn 5 reward points per ₹150 spent on all categories without any cap</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Ultra Premium Benefits</h3>
                <p>Golf privileges, concierge services, and exclusive lifestyle benefits</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo $apply_link; ?>" target="_blank" class="apply-btn">Apply for HDFC Infinia - Instant Approval</a>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>HDFC Infinia Credit Card Complete Review 2025</h2>
        
        <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <h3>Why Choose HDFC Infinia Credit Card?</h3>
            <p>The HDFC Bank Infinia Credit Card is the pinnacle of luxury credit cards in India. This ultra-premium metal card offers unparalleled benefits and rewards, making it perfect for high-net-worth individuals who demand the best.</p>
            
            <h4>Key Highlights:</h4>
            <ul>
                <li><strong>5X Reward Points:</strong> Earn 5 points per ₹150 spent on all categories</li>
                <li><strong>Metal Card:</strong> Premium metal construction with exclusive design</li>
                <li><strong>Unlimited Lounge Access:</strong> Access to 1000+ lounges worldwide</li>
                <li><strong>Golf Privileges:</strong> Complimentary golf rounds at premium courses</li>
                <li><strong>Concierge Services:</strong> 24/7 concierge assistance for lifestyle needs</li>
                <li><strong>Insurance Coverage:</strong> Comprehensive travel and purchase protection</li>
            </ul>
            
            <h4>Who Should Apply?</h4>
            <p>This card is ideal for:</p>
            <ul>
                <li>High-income individuals with annual income above ₹36 lakhs</li>
                <li>Frequent travelers who value premium lounge access</li>
                <li>Luxury lifestyle enthusiasts</li>
                <li>Existing HDFC Regalia or Diners Black cardholders looking to upgrade</li>
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
    const imageUrls = <?php echo json_encode(get_hdfc_infinia_image_url('primary')); ?>;
    
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
