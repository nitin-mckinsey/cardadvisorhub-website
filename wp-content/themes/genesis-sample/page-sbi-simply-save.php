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
container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
...existing code...
</style>
...existing code...
              <span class="highlight-label">Cashback Rate</span>
              <span class="highlight-value">Up to 10%</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Grocery Savings</span>
              <span class="highlight-value">5% Cashback</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="#apply" class="btn btn-primary">Apply Now</a>
            <button id="add-to-compare" class="btn btn-outline">Add to Compare</button>
            <button class="toggle-favorite btn btn-outline" data-card-id="sbi-simply-save">
              <span class="favorite-icon">♡</span> Add to Favorites
            </button>
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
          <h3>5% Grocery Cashback</h3>
          <p>Earn 5% cashback on grocery shopping up to ₹1,000 per month</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>1% Fuel Cashback</h3>
          <p>Get 1% cashback on fuel purchases nationwide</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>10% Online Cashback</h3>
          <p>Earn up to 10% cashback with partner merchants online</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>0.25% Base Cashback</h3>
          <p>Get 0.25% cashback on all other purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Gift</h3>
          <p>Get ₹500 cashback on spending ₹1,000 in first 60 days</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔒</div>
          <h3>Fraud Protection</h3>
          <p>24/7 fraud monitoring and zero liability on lost card</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cashback-breakdown">
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
              <td>Grocery Stores</td>
              <td>5%</td>
              <td>₹1,000 cashback per month</td>
            </tr>
            <tr>
              <td>Fuel Stations</td>
              <td>1%</td>
              <td>₹500 cashback per month</td>
            </tr>
            <tr>
              <td>Partner Merchants</td>
              <td>Up to 10%</td>
              <td>As per offer terms</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>0.25%</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Automatically credited to card statement</p>
          <p><strong>Minimum Cashback:</strong> ₹99 for redemption</p>
          <p><strong>Cashback Validity:</strong> 3 years from credit date</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Special Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🛡️</div>
          <h3>Personal Accident Cover</h3>
          <p>Complimentary personal accident insurance coverage</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏥</div>
          <h3>Purchase Protection</h3>
          <p>Protection against theft and accidental damage</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">💳</div>
          <h3>Contactless Payments</h3>
          <p>Secure tap & pay technology for quick transactions</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">📞</div>
          <h3>24/7 Customer Support</h3>
          <p>Round-the-clock customer service assistance</p>
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
          <span class="fee-value">₹499 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹499 + GST</span>
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
            <li>Age: 21-65 years</li>
            <li>Minimum Income: ₹20,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Existing SBI account preferred</li>
            <li>Stable employment history</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (3 months)</li>
            <li>Employment proof/Business registration</li>
            <li>Photographs (passport size)</li>
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
            <li>High grocery cashback (5%)</li>
            <li>Low annual fee (₹499)</li>
            <li>Instant cashback credit</li>
            <li>Good for SBI customers</li>
            <li>Simple cashback structure</li>
            <li>Fuel cashback included</li>
            <li>Trusted bank brand</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Low base cashback rate (0.25%)</li>
            <li>Monthly caps on high cashback categories</li>
            <li>No airport lounge access</li>
            <li>Limited premium benefits</li>
            <li>Minimum cashback redemption threshold</li>
            <li>Higher eligibility criteria than some cards</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="user-reviews">
    <div class="container">
      <h2>User Reviews</h2>
      
      <!-- Display existing reviews -->
      <div class="reviews-list">
        <!-- Reviews will be loaded here -->
      </div>
      
      <!-- Review form -->
      <div class="submit-review">
        <h3>Share Your Experience</h3>
        <form class="review-form">
          <input type="hidden" name="card_id" value="sbi-simply-save">
          <div class="form-group">
            <label>Rating:</label>
            <select name="rating" required>
              <option value="">Select Rating</option>
              <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
              <option value="4">⭐⭐⭐⭐ Good</option>
              <option value="3">⭐⭐⭐ Average</option>
              <option value="2">⭐⭐ Poor</option>
              <option value="1">⭐ Very Poor</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="reviewer_name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="reviewer_email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea name="review" placeholder="Share your experience with this card..." rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for SBI Simply Save Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent grocery shoppers</li>
            <li>✅ SBI account holders</li>
            <li>✅ Cashback seekers</li>
            <li>✅ Middle-income professionals</li>
            <li>✅ Those who prefer simple rewards</li>
          </ul>
        </div>
        
        <div class="application-form">
          <h3>Quick Application</h3>
          <form>
            <div class="form-group">
              <input type="text" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
              <input type="tel" placeholder="Mobile Number" required>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Monthly Income</option>
                <option value="20000-30000">₹20,000 - ₹30,000</option>
                <option value="30000-50000">₹30,000 - ₹50,000</option>
                <option value="50000-75000">₹50,000 - ₹75,000</option>
                <option value="75000+">Above ₹75,000</option>
              </select>
            </div>
            <div class="form-group">
              <select>
                <option value="">Do you have SBI Account?</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #C41E3A, #A91B32) !important;
}

/* Review form styles */
.user-reviews {
    background: #f8f9fa;
    padding: 60px 0;
}

.review-form {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 0 auto;
}

.review-form .form-group {
    margin-bottom: 20px;
}

.review-form input,
.review-form select,
.review-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
}

.review-form label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
    color: #333;
}

.toggle-favorite {
    position: relative;
}

.toggle-favorite.favorited .favorite-icon {
    color: #e74c3c;
}

.success-message {
    background: #d4edda;
    color: #155724;
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 20px;
    border: 1px solid #c3e6cb;
}

.error-message {
    background: #f8d7da;
    color: #721c24;
    padding: 12px;
    border-radius: 6px;
    margin-bottom: 20px;
    border: 1px solid #f5c6cb;
}
</style>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for SBI Simply Save Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through the SBI Card official website or visit the nearest SBI branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹2,00,000 per annum for salaried individuals and ₹3,00,000 for self-employed individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits on Simply Save Card?</h3>
        <div class="faq-answer">
          <p>Get cashback on online shopping, grocery, and other categories with specific monthly caps and terms.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee for SBI Simply Save Credit Card?</h3>
        <div class="faq-answer">
          <p>The annual fee details and waiver conditions are mentioned in the card details above. Please check for current offers.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
// Enqueue plugin scripts if plugin is active
if (function_exists('cardadvisor_enqueue_scripts')) {
    wp_enqueue_script('cardadvisor-js');
    wp_enqueue_style('cardadvisor-css');
}
?>

<?php get_footer(); ?>
