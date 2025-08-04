<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
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
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF1493'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EAxis%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3ESelect%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 2468%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="Axis Select Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (2,643 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Axis Select Credit Card</h1>
          <p class="card-tagline">Premium lifestyle and rewards card</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹1,500</span>
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
          <h3>4X Dining Points</h3>
          <p>Earn 4X EDGE points on dining and food delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>4X Fuel Points</h3>
          <p>Get 4X EDGE points on fuel purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge Access</h3>
          <p>4 complimentary domestic airport lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Movie Benefits</h3>
          <p>Buy one get one free on movie tickets</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>₹10 lakh travel insurance and personal accident cover</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>EMI Conversion</h3>
          <p>Easy EMI conversion on purchases above ₹2,500</p>
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
              <th>Monthly Cap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dining</td>
              <td>4X points per ₹200</td>
              <td>20,000 points/month</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>4X points per ₹200</td>
              <td>20,000 points/month</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1X point per ₹200</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹0.20 when redeemed</p>
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
          <span class="fee-value">₹1,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹1,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹1,50,000 annual spends</span>
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
            <li>Minimum Income: ₹25,000 per month (Salaried)</li>
            <li>Minimum Income: ₹3,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Good credit history</li>
            <li>Axis Bank relationship preferred</li>
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
            <li>Good dining and fuel rewards (4X)</li>
            <li>Airport lounge access</li>
            <li>Movie ticket benefits</li>
            <li>Moderate annual fee</li>
            <li>Travel insurance included</li>
            <li>Easy EMI conversion</li>
            <li>Axis Bank privileges</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited lounge visits (4/year)</li>
            <li>Monthly caps on bonus categories</li>
            <li>Lower point value (₹0.20)</li>
            <li>Joining fee applicable</li>
            <li>Points validity only 3 years</li>
            <li>Limited premium benefits</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Axis Select Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent diners</li>
            <li>✅ Regular fuel users</li>
            <li>✅ Movie enthusiasts</li>
            <li>✅ Axis Bank customers</li>
            <li>✅ Mid-income professionals</li>
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
        <h3 class="faq-question">How to apply for Axis Select Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Axis Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹15,000 for salaried individuals and ₹2,50,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of Axis Select Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, fuel surcharge waiver, dining privileges, and exclusive offers on lifestyle purchases.</p>
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
    background: linear-gradient(135deg, #FF1493, #FF69B4) !important;
}
</style>

<?php get_footer(); ?>
