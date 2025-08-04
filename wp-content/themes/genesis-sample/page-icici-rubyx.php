<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">ICICI Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rubyx Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23E91E63'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EICICI%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3ERubyx%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 1234%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="ICICI Rubyx Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (1,923 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>ICICI Rubyx Credit Card</h1>
          <p class="card-tagline">Premium lifestyle & travel rewards</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹3,500 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">8,000 Points</span>
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
          <div class="feature-icon">🍽️</div>
          <h3>4X Points on Dining</h3>
          <p>Earn 4 reward points for every ₹100 spent on dining</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>4X Points on Fuel</h3>
          <p>Get 4 reward points per ₹100 on fuel purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>4X Points on Movies</h3>
          <p>Earn 4 reward points per ₹100 on movie tickets</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛂</div>
          <h3>Airport Lounge</h3>
          <p>Complimentary domestic and international lounge access</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>Comprehensive travel insurance up to ₹50 lakhs</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Benefits</h3>
          <p>8,000 welcome points worth ₹2,000 on card approval</p>
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
              <td>Dining</td>
              <td>4X Points</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>4X Points</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Movies</td>
              <td>4X Points</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Department Stores</td>
              <td>2X Points</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1X Points</td>
              <td>1% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Reward Point = ₹0.25 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from date of earning</p>
        </div>
      </div>
    </div>
  </section>

  <section class="premium-benefits">
    <div class="container">
      <h2>Premium Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🛂</div>
          <h3>Lounge Access</h3>
          <p>4 complimentary domestic lounge visits per quarter + 2 international</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏌️</div>
          <h3>Golf Benefits</h3>
          <p>Complimentary golf games and lessons at select golf courses</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🍷</div>
          <h3>Fine Dining</h3>
          <p>Exclusive dining experiences and discounts at premium restaurants</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🛒</div>
          <h3>Shopping Privileges</h3>
          <p>Special discounts and offers at luxury brands and malls</p>
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
          <span class="fee-value">₹3,500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹3,500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹4,00,000 annual spends</span>
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
            <li>Minimum Income: ₹60,000 per month (Salaried)</li>
            <li>Minimum Income: ₹7,20,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
            <li>Good credit history mandatory</li>
            <li>ICICI relationship preferred</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (recent utility bill)</li>
            <li>Income Proof (Latest 3 salary slips)</li>
            <li>Bank Statements (6 months)</li>
            <li>Form 16/ITR (last 2 years)</li>
            <li>Employment verification letter</li>
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
            <li>Excellent 4X points on dining, fuel & movies</li>
            <li>Airport lounge access included</li>
            <li>Good welcome bonus</li>
            <li>Premium lifestyle benefits</li>
            <li>Travel insurance coverage</li>
            <li>Golf privileges</li>
            <li>Flexible reward redemption</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹3,500)</li>
            <li>High spending requirement for fee waiver</li>
            <li>Limited bonus categories</li>
            <li>Points have expiry</li>
            <li>High income requirement</li>
            <li>Foreign currency markup</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for ICICI Rubyx Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Why Choose Rubyx?</h3>
          <ul>
            <li>✅ Premium lifestyle benefits</li>
            <li>✅ High reward rates</li>
            <li>✅ Travel perks included</li>
            <li>✅ ICICI bank reliability</li>
            <li>✅ Quick approval process</li>
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
                <option value="60000-100000">₹60,000 - ₹1,00,000</option>
                <option value="100000-150000">₹1,00,000 - ₹1,50,000</option>
                <option value="150000-200000">₹1,50,000 - ₹2,00,000</option>
                <option value="200000+">Above ₹2,00,000</option>
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
        <h3 class="faq-question">How to apply for ICICI Bank Rubyx Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through ICICI Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹25,000 for salaried individuals and ₹4,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of Rubyx Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, movie ticket offers, dining privileges, fuel surcharge waiver, and exclusive lifestyle benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹3,500 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #E91E63, #C2185B) !important;
}
</style>

<?php get_footer(); ?>
