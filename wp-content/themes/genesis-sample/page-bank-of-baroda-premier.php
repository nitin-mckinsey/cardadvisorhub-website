<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Bank of Baroda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Premier Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF4500'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='%23FFF'%3EBob%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='%23FFF'%3EPremier%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='%23FFF'%3E•••• •••• •••• 6789%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3E12/28%3C/text%3E%3C/svg%3E" alt="Bank of Baroda Premier Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">3.9/5 (1,234 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Bank of Baroda Premier Credit Card</h1>
          <p class="card-tagline">Premium benefits with attractive rewards</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹2,499</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">3X Points</span>
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
          <div class="feature-icon">🏆</div>
          <h3>3X Reward Points</h3>
          <p>3X points on dining, fuel, and grocery purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge Access</h3>
          <p>12 complimentary domestic airport lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Insurance Coverage</h3>
          <p>₹10 lakh personal accident and travel insurance</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>EMI Facility</h3>
          <p>Convert purchases to easy EMIs with attractive rates</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Gift</h3>
          <p>5,000 bonus points on first purchase within 60 days</p>
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
              <td>3 points per ₹100</td>
              <td>3% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>3 points per ₹100</td>
              <td>3% value</td>
            </tr>
            <tr>
              <td>Groceries</td>
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
          <p><strong>Minimum Redemption:</strong> 2,500 points</p>
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
          <span class="fee-value">₹2,499</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹2,499</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹1,50,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.5% per month</span>
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
            <li>Minimum Income: ₹30,000 per month (Salaried)</li>
            <li>Minimum Income: ₹3,50,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>BoB bank relationship preferred</li>
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
            <li>Good 3X rewards on key categories</li>
            <li>Excellent lounge access (12 visits)</li>
            <li>Comprehensive insurance coverage</li>
            <li>Fuel surcharge waiver</li>
            <li>Attractive welcome bonus</li>
            <li>BoB bank privileges</li>
            <li>3-year points validity</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Moderate annual fee (₹2,499)</li>
            <li>High minimum redemption</li>
            <li>Limited to specific categories</li>
            <li>BoB acceptance limitations</li>
            <li>High income requirements</li>
            <li>Joining fee applicable</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Bank of Baroda Premier Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ BoB bank customers</li>
            <li>✅ Frequent travelers</li>
            <li>✅ Dining and fuel spenders</li>
            <li>✅ Premium benefit seekers</li>
            <li>✅ Insurance coverage needs</li>
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
                <option value="30000-50000">₹30,000 - ₹50,000</option>
                <option value="50000-75000">₹50,000 - ₹75,000</option>
                <option value="75000-100000">₹75,000 - ₹1,00,000</option>
                <option value="100000+">Above ₹1,00,000</option>
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
        <h3 class="faq-question">How to apply for Bank of Baroda Premier Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Bank of Baroda website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹30,000 for salaried individuals and ₹5,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of BOB Premier Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, airport lounge access, fuel surcharge waiver, dining privileges, and comprehensive travel insurance coverage.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹2,000 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FF4500, #FF6347) !important;
}
</style>

<?php get_footer(); ?>
