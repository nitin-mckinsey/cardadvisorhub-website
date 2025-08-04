<?php 
// ICICI Bank Platinum Credit Card Page - SEO Optimized with Rank Math
// Enhanced with structured data and SEO variables

// SEO Variables for Rank Math Integration
$card_name = "ICICI Bank Platinum Credit Card";
$bank_name = "ICICI Bank";
$main_benefit = "2X Reward Points on All Spends";
$annual_fee = "₹500 + GST (waived on ₹30K annual spends)";
$welcome_benefit = "500 Welcome Reward Points";
$best_for = "First-time credit card users and general spending";
$apply_link = "https://www.icicibank.com/personal-banking/cards/credit-card/platinum-credit-card";

// Add structured data for SEO
add_action( 'wp_footer', 'icici_platinum_structured_data' );
function icici_platinum_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> - perfect entry-level credit card",
        "category": "Credit Card",
        "image": "<?php echo get_template_directory_uri(); ?>/images/icici-platinum-card.jpg",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "Entry-level credit card with rewards",
            "url": "<?php echo $apply_link; ?>",
            "price": "500",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.1",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "3567"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?>",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "price": "500",
                "priceCurrency": "INR",
                "billingPeriod": "P1Y"
            }
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
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">ICICI Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Platinum Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF6600'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EICICI%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3EPlatinum%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 2222%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="ICICI Platinum Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.2/5 (3,567 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1><?php echo $card_name; ?> 2025 - <?php echo $main_benefit; ?> | Apply Online</h1>
          <p class="card-tagline">Perfect first credit card with comprehensive rewards and benefits</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹499</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">2X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Fuel Surcharge</span>
              <span class="highlight-value">Waived</span>
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
          <div class="feature-icon">🏆</div>
          <h3>2X Reward Points</h3>
          <p>Earn 2 reward points per ₹100 spent on all purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver (₹20-500 per transaction)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Insurance Cover</h3>
          <p>₹2 lakh personal accident insurance coverage</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Entertainment Benefits</h3>
          <p>Discounts on movie tickets and dining</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>500 reward points on first transaction</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Add-on Cards</h3>
          <p>Free add-on cards for family members</p>
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
              <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>All Purchases</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>2 points + surcharge waiver</td>
              <td>3% value</td>
            </tr>
            <tr>
              <td>Utility Bills</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 500 points</p>
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
          <span class="fee-value">₹499</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹499</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹50,000 annual spends</span>
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
            <li>Minimum Income: ₹20,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,50,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Good credit history</li>
            <li>ICICI relationship preferred</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (3 months)</li>
            <li>Employment proof</li>
            <li>Recent photographs</li>
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
            <li>Good reward rate (2% on all spends)</li>
            <li>Low annual fee (₹499)</li>
            <li>Fuel surcharge waiver</li>
            <li>Free add-on cards</li>
            <li>Easy fee waiver</li>
            <li>Comprehensive insurance</li>
            <li>ICICI bank privileges</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>No airport lounge access</li>
            <li>Basic insurance amount</li>
            <li>Joining fee applicable</li>
            <li>Limited premium benefits</li>
            <li>Points validity only 3 years</li>
            <li>No special category bonuses</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for ICICI Platinum Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Regular spenders</li>
            <li>✅ ICICI Bank customers</li>
            <li>✅ First-time premium card users</li>
            <li>✅ Fuel expenses</li>
            <li>✅ Balanced reward seekers</li>
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
        <h3 class="faq-question">How to apply for ICICI Platinum Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through ICICI Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement varies by location. Generally, ₹5,00,000 per annum for salaried individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, fuel surcharge waiver, airport lounge access, and exclusive lifestyle benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Annual fee details and waiver conditions are available in the card features section above.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FF6600, #E55A00) !important;
}
</style>

<?php get_footer(); ?>
