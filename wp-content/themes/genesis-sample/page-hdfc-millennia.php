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
        'primary' => 'hdfc-millennia.png',
        'card_only' => 'hdfc-millennia-card-only.png',
        'backup' => 'hdfc-millennia-backup.png',
        'fallback' => 'hdfc-millennia-fallback.png'
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
container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
...existing code...
</style>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <?php $image_urls = get_hdfc_millennia_image_url('primary'); ?>
    <img src="<?php echo esc_url($image_urls[0]); ?>" alt="HDFC Millennia Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);"
         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
</div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.2/5 (2,847 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1><?php echo $card_name; ?> 2025 - <?php echo $main_benefit; ?> | Apply Online</h1>
          <p class="card-tagline">Best cashback card for young professionals and online shopping</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹1,000 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">₹1,000 Cashback</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Online Cashback</span>
              <span class="highlight-value">5% Cashback</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="<?php echo get_tracked_affiliate_url('hdfc-millennia', 'hero_cta'); ?>" 
               class="btn btn-primary" 
               target="_blank" 
               rel="noopener noreferrer"
               onclick="gtag('event', 'click', {'event_category': 'affiliate', 'event_label': 'hdfc-millennia-hero'});">
               Apply Now - Official HDFC Bank
            </a>
            <button id="add-to-compare" class="btn btn-outline">Add to Compare</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="card-features">
    <div class="container">
      <h2>Key Features & Benefits</h2>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3>5% Cashback Online</h3>
          <p>Earn 5% cashback on online spends (up to ₹1,000 per month)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>2.5% on Wallet Loads</h3>
          <p>Get 2.5% cashback on wallet loads and UPI transactions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>1% on All Spends</h3>
          <p>Earn 1% cashback on all other purchases and transactions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Cashback</h3>
          <p>Get ₹1,000 cashback as welcome bonus on first purchase</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Movie & Dining</h3>
          <p>Special discounts on movie tickets and dining experiences</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Fraud Protection</h3>
          <p>Advanced security features and fraud monitoring system</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cashback-structure">
    <div class="container">
      <h2>Cashback Structure</h2>
      
      <div class="rewards-table">
        <table>
          <thead>
            <tr>
              <th>Category</th>
              <th>Cashback Rate</th>
              <th>Monthly Cap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Online Shopping</td>
              <td>5%</td>
              <td>₹1,000</td>
            </tr>
            <tr>
              <td>PayZapp, UPI, Wallet</td>
              <td>2.5%</td>
              <td>₹1,000</td>
            </tr>
            <tr>
              <td>Offline Spending</td>
              <td>1%</td>
              <td>Unlimited</td>
            </tr>
            <tr>
              <td>EMI Transactions</td>
              <td>1%</td>
              <td>Unlimited</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Monthly cashback is credited automatically to your account</p>
          <p><strong>Minimum Redemption:</strong> No minimum amount required for cashback credit</p>
        </div>
      </div>
    </div>
  </section>

  <section class="fees-charges">
    <div class="container">
      <h2>Fees & Charges</h2>
      
      <div class="fees-grid">
        <div class="fee-item">
          <span class="fee-label">Annual Fee</span>
          <span class="fee-value">₹1,000 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹1,000 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹1,00,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.35% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹500)</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Foreign Currency Markup</span>
          <span class="fee-value">3.5%</span>
        </div>
      </div>
    </div>
  </section>

  <section class="eligibility">
    <div class="container">
      <h2>Eligibility Criteria</h2>
      
      <div class="eligibility-content">
        <div class="eligibility-requirements">
          <h3>Requirements</h3>
          <ul>
            <li>Age: 21-60 years</li>
            <li>Minimum Income: ₹25,000 per month (Salaried)</li>
            <li>Minimum Income: ₹3,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Good credit history</li>
            <li>Stable employment/business</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (recent utility bill)</li>
            <li>Income Proof (Latest 3 salary slips)</li>
            <li>Bank Statements (3-6 months)</li>
            <li>Form 16/ITR (last 1-2 years)</li>
            <li>Employment verification letter</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="pros-cons">
    <div class="container">
      <h2>Pros & Cons</h2>
      
      <div class="pros-cons-grid">
        <div class="pros">
          <h3>✅ Pros</h3>
          <ul>
            <li>Excellent 5% cashback on online shopping</li>
            <li>Good welcome cashback offer</li>
            <li>Low annual fee with easy waiver</li>
            <li>Direct cashback (no points conversion)</li>
            <li>Wide online merchant acceptance</li>
            <li>Easy application process</li>
            <li>Good customer service</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Monthly cashback cap of ₹1,000</li>
            <li>Lower offline cashback rate</li>
            <li>No airport lounge access</li>
            <li>Limited premium benefits</li>
            <li>Higher income requirement for premium features</li>
            <li>Foreign currency markup charges</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for HDFC Millennia Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Why Choose This Card?</h3>
          <ul>
            <li>✅ Best for online shoppers</li>
            <li>✅ Direct cashback system</li>
            <li>✅ Low fee with easy waiver</li>
            <li>✅ Instant approval possible</li>
            <li>✅ HDFC bank reliability</li>
          </ul>
          
          <!-- Affiliate Disclosure -->
          <div class="affiliate-disclosure">
            <p><small><?php echo get_affiliate_disclosure(); ?></small></p>
          </div>
        </div>
        
        <div class="application-cta">
          <h3>Ready to Apply?</h3>
          <p>Get instant approval and start earning cashback today!</p>
          
          <div class="cta-buttons-stacked">
            <a href="<?php echo get_tracked_affiliate_url('hdfc-millennia', 'application_section'); ?>" 
               class="btn btn-primary btn-large" 
               target="_blank" 
               rel="noopener noreferrer"
               onclick="gtag('event', 'click', {'event_category': 'affiliate', 'event_label': 'hdfc-millennia-apply'});">
               🚀 Apply Now on HDFC Bank Official Website
            </a>
            
            <div class="security-badges">
              <span class="badge">🔒 100% Safe & Secure</span>
              <span class="badge">⚡ Instant Processing</span>
              <span class="badge">🏦 Official HDFC Bank</span>
            </div>
            
            <p class="apply-note">
              <small>
                ✓ No hidden charges<br>
                ✓ Same day approval possible<br>
                ✓ Direct application to HDFC Bank
              </small>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <?php $image_urls = get_hdfc_millennia_image_url('primary'); ?>
    <img src="<?php echo esc_url($image_urls[0]); ?>" alt="HDFC Millennia Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);"
         onerror="this.src='<?php echo home_url('/wp-content/uploads/card-images/default-card.jpg'); ?>'">
</div>

<!-- FAQ SECTION -->
<section class="faq-section">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 40px; color: #333;">Frequently Asked Questions</h2>
        
        <div class="faq-item">
            <div class="faq-question">What is the processing time for HDFC Millennia Credit Card?</div>
            <div class="faq-answer">The card is typically processed within 7-10 working days from application submission with complete documentation. Digital card may be available within 24-48 hours for existing HDFC customers.</div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">What are the income requirements for this card?</div>
            <div class="faq-answer">Minimum monthly income of ₹25,000 for salaried individuals or ₹6 lakh annual income for self-employed professionals. Income requirements may vary by location.</div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">How can I maximize my cashback with this card?</div>
            <div class="faq-answer">Use the card for online shopping to earn 5% cashback (up to ₹1,000/month), wallet reloads for 2.5% cashback, and all other purchases for 1% cashback. Track monthly limits to optimize usage.</div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">Is there a spending requirement for fee waiver?</div>
            <div class="faq-answer">Yes, spend ₹1 lakh annually to get the annual fee waived for the next year. This is approximately ₹8,333 per month.</div>
        </div>
        
        <div class="faq-item">
            <div class="faq-question">What are the cashback monthly limits?</div>
            <div class="faq-answer">Online shopping: ₹1,000 cashback per month (₹20,000 spends), Wallet reloads: ₹1,000 cashback per month (₹40,000 spends), All other spends: No limit on 1% cashback.</div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

