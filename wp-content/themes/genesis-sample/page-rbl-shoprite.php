<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">RBL Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Shoprite Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF4500'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3ERBL%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3EShoprite%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 8888%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="RBL Shoprite Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.2/5 (1,756 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>RBL Shoprite Credit Card</h1>
          <p class="card-tagline">Ultimate shopping rewards and cashback</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹750</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Shopping Cashback</span>
              <span class="highlight-value">10%</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Online Cashback</span>
              <span class="highlight-value">5%</span>
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
          <h3>10% Partner Cashback</h3>
          <p>Earn up to 10% cashback at partner shopping outlets</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💻</div>
          <h3>5% Online Shopping</h3>
          <p>Get 5% cashback on online shopping platforms</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>3% Dining Cashback</h3>
          <p>Earn 3% cashback on dining and restaurants</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>1% Base Cashback</h3>
          <p>Get 1% cashback on all other purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>₹500 cashback on first transaction within 45 days</p>
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
              <td>Partner Shopping Outlets</td>
              <td>Up to 10%</td>
              <td>₹1,000 per month</td>
            </tr>
            <tr>
              <td>Online Shopping</td>
              <td>5%</td>
              <td>₹500 per month</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>3%</td>
              <td>₹300 per month</td>
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
          <p><strong>Minimum Cashback:</strong> ₹100 for redemption</p>
          <p><strong>Cashback Validity:</strong> 2 years from credit</p>
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
          <span class="fee-value">₹750</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹750</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹75,000 annual spends</span>
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
            <li>Minimum Income: ₹18,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,16,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Good credit history</li>
            <li>RBL relationship preferred</li>
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
            <li>High cashback on partner shopping (10%)</li>
            <li>Good online shopping rewards (5%)</li>
            <li>Low annual fee (₹750)</li>
            <li>Easy fee waiver threshold</li>
            <li>Fuel surcharge waiver</li>
            <li>Good base cashback rate</li>
            <li>Quick approval process</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Monthly caps on bonus categories</li>
            <li>Limited to specific partner outlets</li>
            <li>No airport lounge access</li>
            <li>Basic insurance coverage</li>
            <li>Shorter cashback validity</li>
            <li>Joining fee applicable</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for RBL Shoprite Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent shoppers</li>
            <li>✅ Online shopping enthusiasts</li>
            <li>✅ Cashback seekers</li>
            <li>✅ Budget-conscious users</li>
            <li>✅ RBL Bank customers</li>
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
                <option value="18000-25000">₹18,000 - ₹25,000</option>
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
        <h3 class="faq-question">How to apply for RBL Bank ShopRite Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through RBL Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹20,000 for salaried individuals and ₹3,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the shopping benefits of ShopRite Card?</h3>
        <div class="faq-answer">
          <p>Enjoy accelerated reward points on shopping, exclusive discounts at partner retailers, fuel surcharge waiver, and special cashback offers.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹1,000 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
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
