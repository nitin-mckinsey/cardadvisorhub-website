<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">ICICI Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Emeralde Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/ICICI-Emeralde-Private.jpg" alt="ICICI Emeralde Private Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.8/5 (1,432 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>ICICI Emeralde Credit Card</h1>
          <p class="card-tagline">Ultra-premium travel and lifestyle card</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹12,000</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">4X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">Unlimited Global</span>
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
          <p>Unlimited domestic and international airport lounge access</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏆</div>
          <h3>4X Reward Points</h3>
          <p>Earn 4X points on travel, dining and international spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Premium Insurance</h3>
          <p>₹2 crore travel insurance and comprehensive protection</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💎</div>
          <h3>Concierge Service</h3>
          <p>24/7 global concierge service for all lifestyle needs</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏌️</div>
          <h3>Golf Benefits</h3>
          <p>Complimentary golf rounds at premium courses worldwide</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>No Foreign Markup</h3>
          <p>Zero markup on international transactions</p>
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
              <td>Travel</td>
              <td>4 points per ₹100</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>4 points per ₹100</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>International Spends</td>
              <td>4 points per ₹100</td>
              <td>4% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> Lifetime validity</p>
          <p><strong>Minimum Redemption:</strong> 500 points</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Ultra-Premium Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🍽️</div>
          <h3>Fine Dining</h3>
          <p>Complimentary meals at Michelin-starred restaurants</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏨</div>
          <h3>Luxury Hotels</h3>
          <p>Complimentary nights and room upgrades at luxury hotels</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎭</div>
          <h3>Premium Events</h3>
          <p>Exclusive access to VIP events and experiences</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🚗</div>
          <h3>Airport Transfers</h3>
          <p>Complimentary airport transfers in premium vehicles</p>
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
          <span class="fee-value">₹12,000</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹12,000</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹8,00,000 annual spends</span>
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
            <li>Minimum Income: ₹1,50,000 per month (Salaried)</li>
            <li>Minimum Income: ₹18,00,000 per annum (Self-employed)</li>
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
            <li>Property documents</li>
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
            <li>Unlimited global lounge access</li>
            <li>Highest reward rate (4X points)</li>
            <li>No foreign currency markup</li>
            <li>Premium concierge service</li>
            <li>Lifetime point validity</li>
            <li>Luxury lifestyle benefits</li>
            <li>Comprehensive insurance</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Very high annual fee (₹12,000)</li>
            <li>Extremely high income requirements</li>
            <li>High fee waiver threshold</li>
            <li>Invitation-only availability</li>
            <li>Joining fee applicable</li>
            <li>Limited customer base</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for ICICI Emeralde Credit Card</h2>
      
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
                <option value="150000-250000">₹1,50,000 - ₹2,50,000</option>
                <option value="250000-500000">₹2,50,000 - ₹5,00,000</option>
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

<div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/ICICI-Emeralde-Private.jpg" alt="ICICI Emeralde Private Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for ICICI Emeralde Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through ICICI Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹15,00,000 per annum for salaried individuals. This is a premium card with exclusive benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the reward benefits?</h3>
        <div class="faq-answer">
          <p>Earn reward points on all spends, complimentary airport lounge access, golf privileges, and exclusive lifestyle benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee details and waiver conditions are mentioned in the card benefits section above.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

