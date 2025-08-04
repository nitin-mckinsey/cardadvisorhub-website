<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">IndusInd Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pinnacle Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23002E5D'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='white'%3EIndusInd%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='white'%3EPinnacle%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='white'%3E•••• •••• •••• 3333%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='white'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='white'%3E12/28%3C/text%3E%3C/svg%3E" alt="IndusInd Pinnacle Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.7/5 (1,892 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>IndusInd Pinnacle Credit Card</h1>
          <p class="card-tagline">Ultra-premium lifestyle and travel benefits</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹12,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">3.3% Value</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">Unlimited</span>
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
          <h3>Unlimited Lounge Access</h3>
          <p>Unlimited domestic and 6 international lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>High Reward Rate</h3>
          <p>Earn up to 3.3% value on all spends with flexible redemption</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏌️</div>
          <h3>Golf Benefits</h3>
          <p>Complimentary golf lessons and access to premium courses</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Premium Insurance</h3>
          <p>₹1 crore personal accident and travel insurance coverage</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💎</div>
          <h3>Concierge Service</h3>
          <p>24/7 premium concierge service for lifestyle assistance</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Annual Benefits</h3>
          <p>Movie vouchers, spa vouchers and exclusive experiences</p>
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
              <td>1 point per ₹100</td>
              <td>3.3% value</td>
            </tr>
            <tr>
              <td>Travel Bookings</td>
              <td>1 point per ₹100</td>
              <td>3.3% value</td>
            </tr>
            <tr>
              <td>International Spends</td>
              <td>1 point per ₹100</td>
              <td>3.3% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹3.30 when redeemed flexibly</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 2,500 points</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Premium Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🍽️</div>
          <h3>Fine Dining</h3>
          <p>Buy one get one at premium restaurants across India</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏨</div>
          <h3>Hotel Privileges</h3>
          <p>Room upgrades and complimentary breakfast at partner hotels</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎭</div>
          <h3>Entertainment</h3>
          <p>Premium movie tickets and exclusive event access</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🛍️</div>
          <h3>Luxury Shopping</h3>
          <p>Exclusive discounts at premium brands and luxury outlets</p>
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
          <span class="fee-value">₹12,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹12,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹5,00,000 annual spends</span>
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
          <span class="fee-value">Nil</span>
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
            <li>Minimum Income: ₹2,00,000 per month (Salaried)</li>
            <li>Minimum Income: ₹25,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 800+ (preferred)</li>
            <li>Excellent credit history</li>
            <li>High net worth individual</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (6 months)</li>
            <li>Investment proofs</li>
            <li>Employment certificate</li>
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
            <li>Highest reward rate (3.3% value)</li>
            <li>Unlimited domestic lounge access</li>
            <li>Premium concierge service</li>
            <li>No foreign currency markup</li>
            <li>Excellent insurance coverage</li>
            <li>Golf and luxury benefits</li>
            <li>Flexible point redemption</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Very high annual fee (₹12,500)</li>
            <li>Extremely high income requirements</li>
            <li>High fee waiver threshold</li>
            <li>Limited availability</li>
            <li>Joining fee applicable</li>
            <li>High minimum redemption</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for IndusInd Pinnacle Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Ultra-high net worth individuals</li>
            <li>✅ Frequent international travelers</li>
            <li>✅ Luxury lifestyle enthusiasts</li>
            <li>✅ Business executives</li>
            <li>✅ Premium service seekers</li>
          </ul>
        </div>
        
        <div class="application-form">
          <h3>Exclusive Application</h3>
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
                <option value="200000-300000">₹2,00,000 - ₹3,00,000</option>
                <option value="300000-500000">₹3,00,000 - ₹5,00,000</option>
                <option value="500000-1000000">₹5,00,000 - ₹10,00,000</option>
                <option value="1000000+">Above ₹10,00,000</option>
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
        <h3 class="faq-question">How to apply for IndusInd Bank Pinnacle Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through IndusInd Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹40,000 for salaried individuals and ₹6,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of Pinnacle Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, airport lounge access, golf privileges, dining benefits, and comprehensive travel insurance coverage.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹5,000 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #002E5D, #003F7F) !important;
}
</style>

<?php get_footer(); ?>
