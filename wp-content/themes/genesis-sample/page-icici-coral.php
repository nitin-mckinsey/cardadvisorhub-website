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
container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
...existing code...
</style>
...existing code...
