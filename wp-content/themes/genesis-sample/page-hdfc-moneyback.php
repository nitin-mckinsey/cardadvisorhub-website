<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">HDFC Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">MoneyBack Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/HDFC-Regalia-Gold.jpg" alt="HDFC Regalia Gold Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.3/5 (4,156 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>HDFC MoneyBack Credit Card</h1>
          <p class="card-tagline">Earn cashback on everyday purchases</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Online Cashback</span>
              <span class="highlight-value">2%</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">₹500 cashback</span>
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
          <h3>2% Online Cashback</h3>
          <p>Earn 2% cashback on online shopping (up to ₹750 per month)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>2% Dining Cashback</h3>
          <p>Get 2% cashback on dining transactions (up to ₹750 per month)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>0.2% Base Cashback</h3>
          <p>Earn 0.2% cashback on all other purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver (₹20-500 per transaction)</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Cashback</h3>
          <p>₹500 cashback on spending ₹2,000 in first 90 days</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔒</div>
          <h3>Secure Transactions</h3>
          <p>Advanced fraud protection and zero liability</p>
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
              <td>2%</td>
              <td>₹750 per month</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>2%</td>
              <td>₹750 per month</td>
            </tr>
            <tr>
              <td>Fuel Surcharge Waiver</td>
              <td>1%</td>
              <td>₹20-500 per transaction</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>0.2%</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Monthly statement credit</p>
          <p><strong>Minimum Cashback:</strong> ₹100 for redemption</p>
          <p><strong>Cashback Validity:</strong> 3 years from credit date</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Special Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🛡️</div>
          <h3>Insurance Coverage</h3>
          <p>Complimentary personal accident and liability insurance</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏥</div>
          <h3>Purchase Protection</h3>
          <p>Coverage against theft and accidental damage</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎬</div>
          <h3>BookMyShow Offers</h3>
          <p>Special discounts on movie tickets and events</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">📞</div>
          <h3>24/7 Customer Care</h3>
          <p>Round-the-clock customer support services</p>
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
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹50,000 annual spends</span>
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
            <li>Minimum Income: ₹25,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>HDFC Bank relationship preferred</li>
            <li>Stable employment history</li>
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
            <li>Good online shopping cashback (2%)</li>
            <li>Dining cashback included</li>
            <li>Low annual fee (₹500)</li>
            <li>Established bank brand</li>
            <li>Fuel surcharge waiver</li>
            <li>Easy fee waiver on spending</li>
            <li>Quick approval for HDFC customers</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Low base cashback rate (0.2%)</li>
            <li>Monthly caps on bonus categories</li>
            <li>Higher minimum income requirement</li>
            <li>No airport lounge access</li>
            <li>Joining fee applicable</li>
            <li>Minimum cashback redemption threshold</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for HDFC MoneyBack Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Online shopping enthusiasts</li>
            <li>✅ Frequent diners</li>
            <li>✅ HDFC Bank customers</li>
            <li>✅ Cashback seekers</li>
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
            <div class="form-group">
              <select>
                <option value="">Do you have HDFC Account?</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
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
        <h3 class="faq-question">How to apply for HDFC MoneyBack Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through HDFC Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹15,000 for salaried individuals and ₹2,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of MoneyBack Card?</h3>
        <div class="faq-answer">
          <p>Enjoy cashback on all spends, fuel surcharge waiver, online shopping benefits, and special rewards on dining and entertainment expenses.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹500 plus taxes with waiver available on annual spends of ₹50,000 or more as per bank terms.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/HDFC-Regalia-Gold.jpg" alt="HDFC Regalia Gold Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>

<?php get_footer(); ?>

