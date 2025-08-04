<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Yes Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">First Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23DC143C'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EYes Bank%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3EFirst%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 4444%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="Yes Bank First Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.0/5 (2,134 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Yes Bank First Credit Card</h1>
          <p class="card-tagline">Premium lifestyle and travel rewards</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹2,999</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">6X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">8 Visits/Year</span>
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
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge Access</h3>
          <p>8 complimentary domestic airport lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>6X Reward Points</h3>
          <p>Earn 6 reward points per ₹100 on dining and travel</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>Dining Benefits</h3>
          <p>Up to 20% discount at partner restaurants</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver on all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>Comprehensive travel and personal accident insurance</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>5,000 bonus points on first purchase within 90 days</p>
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
              <td>Dining</td>
              <td>6 points per ₹100</td>
              <td>6% value</td>
            </tr>
            <tr>
              <td>Travel</td>
              <td>6 points per ₹100</td>
              <td>6% value</td>
            </tr>
            <tr>
              <td>Online Shopping</td>
              <td>3 points per ₹100</td>
              <td>3% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1 point per ₹100</td>
              <td>1% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 1,000 points</p>
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
          <span class="fee-value">₹2,999</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹2,999</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹2,00,000 annual spends</span>
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
            <li>Minimum Income: ₹40,000 per month (Salaried)</li>
            <li>Minimum Income: ₹4,50,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
            <li>Good credit history</li>
            <li>Yes Bank relationship preferred</li>
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
            <li>High reward rate on dining (6%)</li>
            <li>Airport lounge access included</li>
            <li>Good travel benefits</li>
            <li>Fuel surcharge waiver</li>
            <li>Comprehensive insurance</li>
            <li>Online shopping rewards</li>
            <li>Generous welcome bonus</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹2,999)</li>
            <li>Joining fee applicable</li>
            <li>Limited lounge visits (8/year)</li>
            <li>High fee waiver threshold</li>
            <li>Points validity only 3 years</li>
            <li>Bank-specific limitations</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Yes Bank First Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent diners</li>
            <li>✅ Travel enthusiasts</li>
            <li>✅ Yes Bank customers</li>
            <li>✅ Premium lifestyle seekers</li>
            <li>✅ Business travelers</li>
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
        <h3 class="faq-question">How to apply for Yes Bank First Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Yes Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement varies by location. Generally, ₹3,00,000 per annum for salaried individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, fuel surcharge waiver, dining discounts, and lifestyle benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Annual fee details and waiver conditions are mentioned in the card features section above.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #DC143C, #B91C3C) !important;
}
</style>

<?php get_footer(); ?>
