<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">RBL Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">MoneyBack Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF69B4'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='%23FFF'%3ERBLBank%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='%23FFF'%3EMoneyback%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='%23FFF'%3E•••• •••• •••• 2345%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3E12/28%3C/text%3E%3C/svg%3E" alt="RBL Bank MoneyBack Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.0/5 (2,567 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>RBL Bank MoneyBack Credit Card</h1>
          <p class="card-tagline">Maximum cashback on everyday spends</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹2,999</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Cashback Rate</span>
              <span class="highlight-value">8% Categories</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">6 Visits/Year</span>
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
          <h3>8% on Dining</h3>
          <p>8% cashback on restaurant and food delivery spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3>8% on Groceries</h3>
          <p>8% cashback on grocery and supermarket purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge</h3>
          <p>6 complimentary domestic airport lounge visits</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Benefits</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Digital Rewards</h3>
          <p>Enhanced cashback on online transactions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Entertainment</h3>
          <p>Discounts on movie tickets and entertainment</p>
        </div>
      </div>
    </div>
  </section>

  <section class="rewards-breakdown">
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
              <td>Dining & Food Delivery</td>
              <td>8%</td>
              <td>₹500</td>
            </tr>
            <tr>
              <td>Groceries & Supermarkets</td>
              <td>8%</td>
              <td>₹500</td>
            </tr>
            <tr>
              <td>Online Shopping</td>
              <td>2%</td>
              <td>₹200</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1%</td>
              <td>₹300</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Cashback Credit:</strong> Monthly statement credit</p>
          <p><strong>Minimum Cashback:</strong> ₹500 per statement</p>
          <p><strong>Maximum Cashback:</strong> ₹1,500 per month</p>
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
          <span class="fee-value">3.65% per month</span>
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
            <li>Minimum Income: ₹35,000 per month (Salaried)</li>
            <li>Minimum Income: ₹4,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Good credit history</li>
            <li>Stable employment</li>
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
            <li>Excellent dining cashback (8%)</li>
            <li>High grocery rewards (8%)</li>
            <li>Airport lounge access (6 visits)</li>
            <li>Fuel surcharge waiver</li>
            <li>Good reward caps</li>
            <li>RBL bank privileges</li>
            <li>Entertainment benefits</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹2,999)</li>
            <li>High fee waiver threshold</li>
            <li>Monthly cashback caps</li>
            <li>Limited lounge visits</li>
            <li>High minimum redemption</li>
            <li>Category-specific rewards only</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for RBL Bank MoneyBack Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Food and dining enthusiasts</li>
            <li>✅ Grocery shoppers</li>
            <li>✅ High spenders</li>
            <li>✅ Cashback seekers</li>
            <li>✅ Airport travelers</li>
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
                <option value="35000-50000">₹35,000 - ₹50,000</option>
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
        <h3 class="faq-question">How to apply for RBL Bank MoneyBack Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through RBL Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement varies by location. Generally, ₹2,00,000 per annum for salaried individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy cashback on various categories including online shopping, dining, and fuel with monthly caps.</p>
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
    background: linear-gradient(135deg, #FF69B4, #FF1493) !important;
}
</style>

<?php get_footer(); ?>
