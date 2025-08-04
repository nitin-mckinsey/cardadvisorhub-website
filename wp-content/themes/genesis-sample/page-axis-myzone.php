<?php 
get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">MyZone Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'Axis MyZone Credit Card';
    $card_description = 'Axis MyZone Credit Card offers 2% cashback on all spends, fuel benefits, and lifestyle rewards. ₹500 annual fee. Best entry-level cashback card 2025.';
    $annual_fee = '₹500';
    $welcome_bonus = '₹1,000 Cashback';
    $min_income = '₹2,50,000';
    $card_network = 'Mastercard';
    $bank_name = 'Axis Bank';
    $rating = '4.0';
    $review_count = '3256';
    
    echo '<title>' . $card_name . ' - 2% Unlimited Cashback Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="Axis MyZone Credit Card, unlimited cashback, entry level card, fuel benefits, Axis Bank, lifestyle rewards">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Best Entry-Level Cashback Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/axis-myzone-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - Unlimited Cashback">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/axis-myzone-card.jpg">';
    
    // JSON-LD Schema
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $card_name,
        'description' => $card_description,
        'category' => 'Credit Card',
        'image' => get_template_directory_uri() . '/images/axis-myzone-card.jpg',
        'brand' => array(
            '@type' => 'Brand',
            'name' => $bank_name
        ),
        'offers' => array(
            '@type' => 'Offer',
            'description' => 'Entry-level cashback card with unlimited rewards',
            'url' => get_permalink() . '#apply',
            'price' => '500',
            'priceCurrency' => 'INR',
            'availability' => 'https://schema.org/InStock'
        ),
        'aggregateRating' => array(
            '@type' => 'AggregateRating',
            'ratingValue' => $rating,
            'reviewCount' => $review_count,
            'bestRating' => '5',
            'worstRating' => '1'
        )
    );
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
}, 5);

get_header(); ?>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23673AB7'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EAxis%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3EMyZone%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 7890%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="Axis MyZone Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.0/5 (1,654 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Axis MyZone Credit Card</h1>
          <p class="card-tagline">Best entry-level rewards card</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">500 Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">Up to 4X Points</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="#apply" class="btn btn-primary">Apply Now</a>
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
          <h3>4X Points Online</h3>
          <p>Earn 4 EDGE Points per ₹200 on online shopping</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>4X Points Dining</h3>
          <p>Get 4 EDGE Points per ₹200 on dining transactions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>4X Points Fuel</h3>
          <p>Earn 4 EDGE Points per ₹200 on fuel purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>2X Points Others</h3>
          <p>Get 2 EDGE Points per ₹200 on all other spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>No Fee First Year</h3>
          <p>Zero joining fee and first year annual fee waived</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Mobile App</h3>
          <p>Easy management through MyZone mobile application</p>
        </div>
      </div>
    </div>
  </section>

  <section class="rewards-breakdown">
    <div class="container">
      <h2>Reward Structure</h2>
      
      <div class="rewards-table">
        <table>
          <thead>
            <tr>
              <th>Category</th>
              <th>Reward Rate</th>
              <th>Points Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Online Shopping</td>
              <td>4X Points</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>4X Points</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>4X Points</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>2X Points</td>
              <td>1% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 EDGE Point = ₹0.20 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from date of earning</p>
          <p><strong>Minimum Redemption:</strong> 500 EDGE Points</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Special Offers</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🎬</div>
          <h3>Movie Tickets</h3>
          <p>Buy one get one free on movie tickets at select theaters</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🍕</div>
          <h3>Dining Discounts</h3>
          <p>Up to 20% discount at partner restaurants and food delivery</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🛍️</div>
          <h3>Shopping Deals</h3>
          <p>Exclusive discounts on leading e-commerce platforms</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps across India</p>
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
          <span class="fee-value">₹500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">Nil</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹30,000 annual spends</span>
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
            <li>Age: 18-65 years</li>
            <li>Minimum Income: ₹15,000 per month (Salaried)</li>
            <li>Minimum Income: ₹1,80,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Good credit history</li>
            <li>Stable employment</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (recent utility bill)</li>
            <li>Income Proof (Latest 2-3 salary slips)</li>
            <li>Bank Statements (3 months)</li>
            <li>Form 16/ITR (if required)</li>
            <li>Employment certificate</li>
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
            <li>Very low annual fee (₹500)</li>
            <li>Easy fee waiver on low spending</li>
            <li>Good for beginners</li>
            <li>4X points on popular categories</li>
            <li>No joining fee</li>
            <li>Low income requirement</li>
            <li>Quick approval process</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Lower point value compared to premium cards</li>
            <li>No airport lounge access</li>
            <li>Limited premium benefits</li>
            <li>Basic insurance coverage</li>
            <li>Points expire in 3 years</li>
            <li>Minimum redemption threshold</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Axis MyZone Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ First-time credit card users</li>
            <li>✅ Students and young professionals</li>
            <li>✅ Low to moderate spenders</li>
            <li>✅ Online shopping enthusiasts</li>
            <li>✅ Those with limited income proof</li>
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
                <option value="15000-25000">₹15,000 - ₹25,000</option>
                <option value="25000-40000">₹25,000 - ₹40,000</option>
                <option value="40000-60000">₹40,000 - ₹60,000</option>
                <option value="60000+">Above ₹60,000</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for Axis MyZone Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Axis Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement for MyZone Credit Card?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹2,50,000 per annum for salaried individuals and ₹5,00,000 for self-employed individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits on MyZone Credit Card?</h3>
        <div class="faq-answer">
          <p>Get 2% unlimited cashback on all spends, fuel surcharge waiver, and lifestyle benefits with no spending caps.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee for Axis MyZone Credit Card?</h3>
        <div class="faq-answer">
          <p>Yes, the annual fee is ₹500 plus applicable taxes. The fee is waived off on spending ₹1,50,000 or more in the previous year.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #673AB7, #512DA8) !important;
}
</style>

<?php get_footer(); ?>
