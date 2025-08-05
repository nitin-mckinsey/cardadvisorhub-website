<?php get_header(); ?>
<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Privilege Credit Card</li>
    </ol>
  </div>
</nav>



<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <?php
    $card_slug = 'axis-privilege';
    $uploads = home_url('/wp-content/uploads/card-images/');
    $img_exts = array('jpg', 'png', 'webp');
    $card_img = '';
    foreach ($img_exts as $ext) {
        $try = ABSPATH . 'wp-content/uploads/card-images/' . $card_slug . '.' . $ext;
        if (file_exists($try)) {
            $card_img = $uploads . $card_slug . '.' . $ext;
            break;
        }
    }
    if (!$card_img) {
        $card_img = $uploads . 'default-card.jpg';
    }
    ?>
    <img src="<?php echo esc_url($card_img); ?>" alt="Axis Privilege Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);"
         onerror="this.onerror=null;this.src='<?php echo $uploads . 'default-card.jpg'; ?>';">
</div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (2,678 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Axis Bank Privilege Credit Card</h1>
          <p class="card-tagline">Exclusive privileges for premium lifestyle</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹3,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">5X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">12 Visits/Year</span>
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
          <div class="feature-icon">🍽️</div>
          <h3>5X on Dining</h3>
          <p>5X EDGE reward points on dining and restaurants</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>5X on Entertainment</h3>
          <p>5X points on movies, concerts, and entertainment</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge Access</h3>
          <p>12 complimentary domestic airport lounge visits</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>₹25 lakh travel insurance coverage</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>7,500 bonus EDGE points on first transaction</p>
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
              <td>Dining & Restaurants</td>
              <td>5 EDGE points per ₹200</td>
              <td>2.5% value</td>
            </tr>
            <tr>
              <td>Entertainment</td>
              <td>5 EDGE points per ₹200</td>
              <td>2.5% value</td>
            </tr>
            <tr>
              <td>Travel Bookings</td>
              <td>3 EDGE points per ₹200</td>
              <td>1.5% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1 EDGE point per ₹200</td>
              <td>0.5% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 EDGE Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 1,000 EDGE points</p>
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
          <span class="fee-value">₹3,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹3,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹2,50,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.6% per month</span>
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
            <li>Minimum Income: ₹40,000 per month (Salaried)</li>
            <li>Minimum Income: ₹5,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
            <li>Existing Axis Bank relationship preferred</li>
            <li>Good credit history</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (3 months)</li>
            <li>Employment verification</li>
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
            <li>Excellent dining rewards (5X)</li>
            <li>Good entertainment benefits (5X)</li>
            <li>Generous lounge access (12 visits)</li>
            <li>High travel insurance coverage</li>
            <li>Fuel surcharge waiver</li>
            <li>Good welcome bonus</li>
            <li>3-year points validity</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹3,500)</li>
            <li>High fee waiver threshold</li>
            <li>Complex EDGE points system</li>
            <li>Limited base reward rate</li>
            <li>High income requirements</li>
            <li>Joining fee applicable</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Axis Bank Privilege Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Dining enthusiasts</li>
            <li>✅ Entertainment lovers</li>
            <li>✅ Frequent travelers</li>
            <li>✅ High spenders</li>
            <li>✅ Premium lifestyle seekers</li>
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
                <option value="40000-60000">₹40,000 - ₹60,000</option>
                <option value="60000-80000">₹60,000 - ₹80,000</option>
                <option value="80000-120000">₹80,000 - ₹1,20,000</option>
                <option value="120000+">Above ₹1,20,000</option>
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
        <h3 class="faq-question">How to apply for Axis Privilege Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Axis Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ?8,00,000 per annum for salaried individuals and ?10,00,000 for self-employed individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the reward benefits?</h3>
        <div class="faq-answer">
          <p>Earn reward points on all spends, complimentary airport lounge access, golf privileges, and dining benefits.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/Axis-Atlas.jpg" alt="Axis Atlas Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>

<?php get_footer(); ?>

