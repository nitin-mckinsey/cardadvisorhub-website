<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">PNB Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Select Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%234B0082'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='%23FFF'%3EPunjab%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='%23FFF'%3ENational Bank%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='%23FFF'%3E•••• •••• •••• 0123%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3E12/28%3C/text%3E%3C/svg%3E" alt="PNB Select Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★☆☆</div>
            <span class="rating-text">3.7/5 (1,456 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>PNB Select Credit Card</h1>
          <p class="card-tagline">Selective rewards for smart spenders</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹1,499</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">4X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">4 Visits/Year</span>
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
          <h3>4X on Dining</h3>
          <p>4X reward points on restaurant and food delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3>4X on Groceries</h3>
          <p>4X points on grocery and supermarket purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge</h3>
          <p>4 complimentary domestic airport lounge visits</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Benefits</h3>
          <p>1% fuel surcharge waiver and 2X points</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏪</div>
          <h3>Utility Rewards</h3>
          <p>2X points on utility bill payments</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Insurance Cover</h3>
          <p>₹5 lakh personal accident insurance</p>
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
              <td>Dining & Food Delivery</td>
              <td>4 points per ₹100</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Groceries</td>
              <td>4 points per ₹100</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
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
          <p><strong>Points Validity:</strong> 2 years from earning</p>
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
          <span class="fee-value">₹1,499</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹999</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹1,00,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.5% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹300)</span>
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
            <li>Credit Score: 650+ (preferred)</li>
            <li>PNB bank relationship preferred</li>
            <li>Stable employment/business</li>
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
            <li>Good dining rewards (4X)</li>
            <li>High grocery points (4X)</li>
            <li>Reasonable annual fee (₹1,499)</li>
            <li>Airport lounge access</li>
            <li>Easy fee waiver threshold</li>
            <li>PNB bank privileges</li>
            <li>Personal accident insurance</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited lounge visits (4)</li>
            <li>Short points validity (2 years)</li>
            <li>Limited premium benefits</li>
            <li>PNB acceptance limitations</li>
            <li>Basic travel benefits</li>
            <li>No international lounge access</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for PNB Select Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ PNB bank customers</li>
            <li>✅ Dining enthusiasts</li>
            <li>✅ Grocery shoppers</li>
            <li>✅ Mid-tier spenders</li>
            <li>✅ Basic travel needs</li>
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
                <option value="25000-40000">₹25,000 - ₹40,000</option>
                <option value="40000-60000">₹40,000 - ₹60,000</option>
                <option value="60000-80000">₹60,000 - ₹80,000</option>
                <option value="80000+">Above ₹80,000</option>
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
        <h3 class="faq-question">How to apply for PNB Select Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Punjab National Bank website or visit the nearest PNB branch with required documents.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement varies by location. Generally, ₹2,50,000 per annum for salaried individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, fuel surcharge waiver, and exclusive banking privileges.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Annual fee details and waiver conditions are available in the card benefits section above.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #4B0082, #6A0DAD) !important;
}
</style>

<?php get_footer(); ?>
