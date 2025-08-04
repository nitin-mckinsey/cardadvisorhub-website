<?php 
// Kotak 811 #DreamDifferent Credit Card Page - SEO Optimized with Rank Math
// Enhanced with structured data and SEO variables

// SEO Variables for Rank Math Integration
$card_name = "Kotak 811 #DreamDifferent Credit Card";
$bank_name = "Kotak Mahindra Bank";
$main_benefit = "Lifetime Free with Digital Banking Benefits";
$annual_fee = "₹0 (Lifetime Free)";
$welcome_benefit = "₹500 Amazon Voucher";
$best_for = "First-time credit card users and students";
$apply_link = "https://www.kotak.com/en/personal-banking/cards/credit-cards/kotak-811-credit-card.html";

// Add structured data for SEO
add_action( 'wp_footer', 'kotak_811_structured_data' );
function kotak_811_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> - perfect for students and first-time users",
        "category": "Credit Card",
        "image": "<?php echo get_template_directory_uri(); ?>/images/kotak-811-card.jpg",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "Zero annual fee credit card for students",
            "url": "<?php echo $apply_link; ?>",
            "price": "0",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.0",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "6789"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?>",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "price": "0",
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
      <li class="breadcrumb-item active" aria-current="page">Kotak 811 Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF6B35'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EKotak%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3E811%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 4321%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="Kotak 811 Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (1,823 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Kotak 811 Credit Card</h1>
          <p class="card-tagline">Digital-first credit card with instant approval</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Online Cashback</span>
              <span class="highlight-value">4%</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Instant Approval</span>
              <span class="highlight-value">3 Minutes</span>
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
          <h3>4% Online Cashback</h3>
          <p>Earn 4% cashback on online shopping (up to ₹2,000 per month)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>1% Base Cashback</h3>
          <p>Get 1% cashback on all other purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⚡</div>
          <h3>Instant Approval</h3>
          <p>Get approved in just 3 minutes with digital process</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔥</div>
          <h3>Lifetime Free</h3>
          <p>No annual fee for Kotak 811 account holders</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Digital First</h3>
          <p>Complete paperless application and instant delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>₹1,000 cashback on spending ₹3,000 in first 60 days</p>
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
              <td>Online Shopping</td>
              <td>4%</td>
              <td>₹2,000 per month</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1%</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Monthly statement credit</p>
          <p><strong>Minimum Cashback:</strong> No minimum limit</p>
          <p><strong>Cashback Validity:</strong> Lifetime validity</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Special Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🛍️</div>
          <h3>E-commerce Offers</h3>
          <p>Exclusive deals on Amazon, Flipkart, and other platforms</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🔒</div>
          <h3>Advanced Security</h3>
          <p>Chip & PIN technology with fraud protection</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">📱</div>
          <h3>Mobile App</h3>
          <p>Easy management through Kotak mobile banking app</p>
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
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">Nil</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">Free for 811 account holders</span>
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
            <li>Minimum Income: ₹15,000 per month (Salaried)</li>
            <li>Minimum Income: ₹1,80,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Kotak 811 account preferred</li>
            <li>Good credit history</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>PAN Card (mandatory)</li>
            <li>Aadhaar Card</li>
            <li>Income proof (if required)</li>
            <li>Bank statements (minimal documentation)</li>
            <li>Digital selfie for verification</li>
            <li>Employment details (online form)</li>
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
            <li>High online shopping cashback (4%)</li>
            <li>Instant approval in 3 minutes</li>
            <li>Lifetime free for 811 customers</li>
            <li>Good base cashback rate (1%)</li>
            <li>No joining fee</li>
            <li>Digital-first approach</li>
            <li>No minimum cashback redemption</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited to online shopping for bonus rate</li>
            <li>Monthly cap on 4% cashback</li>
            <li>No airport lounge access</li>
            <li>Basic insurance coverage</li>
            <li>Annual fee for non-811 customers</li>
            <li>Limited premium benefits</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Kotak 811 Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Online shopping enthusiasts</li>
            <li>✅ Digital-savvy users</li>
            <li>✅ Kotak 811 account holders</li>
            <li>✅ Quick approval seekers</li>
            <li>✅ First-time applicants</li>
          </ul>
        </div>
        
        <div class="application-form">
          <h3>Instant Application</h3>
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
              <input type="text" placeholder="PAN Number" required>
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
            <div class="form-group">
              <select>
                <option value="">Do you have Kotak 811 Account?</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Get Instant Approval</button>
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
        <h3 class="faq-question">How to apply for Kotak 811 Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Kotak Mahindra Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹12,000 for salaried individuals and ₹1,50,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of Kotak 811 Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, fuel surcharge waiver, online shopping benefits, and special offers on dining and entertainment.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹500 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FF6B35, #F7931E) !important;
}
</style>

<?php get_footer(); ?>
