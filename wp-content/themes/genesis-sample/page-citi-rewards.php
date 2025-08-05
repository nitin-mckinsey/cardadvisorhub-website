<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Citi Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rewards Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <?php
            $card_slug = 'citi-rewards';
            $uploads = home_url('/wp-content/uploads/card-images/');
            $img_exts = array('jpg', 'png', 'webp');
            $card_img = '';
            foreach ($img_exts as $ext) {
                $try = ABSPATH . 'wp-content/uploads/card-images/' . $card_slug . '.' . $ext;
                if (file_exists($try)) {
                    $card_img = $uploads . $card_slug . '.' . $ext;
                    break;
                }
            }
            if (!$card_img) {
                $card_img = $uploads . 'default-card.jpg';
            }
            ?>
            <img src="<?php echo esc_url($card_img); ?>" alt="Citi Rewards Credit Card" class="credit-card-image" style="max-width: 300px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);" onerror="this.onerror=null;this.src='<?php echo $uploads . 'default-card.jpg'; ?>';">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (3,256 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Citi Rewards Credit Card</h1>
          <p class="card-tagline">Accelerated rewards on everyday purchases</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹1,000</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">5X Points</span>
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
          <div class="feature-icon">🏪</div>
          <h3>5X on Utilities</h3>
          <p>5X points on utility bill payments and telecom</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>5X on Fuel</h3>
          <p>5X points on fuel transactions at petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">✈️</div>
          <h3>Airport Lounge</h3>
          <p>4 complimentary domestic airport lounge visits</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>Quick Rewards</h3>
          <p>Instant redemption against outstanding dues</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔒</div>
          <h3>Fraud Protection</h3>
          <p>Advanced security and fraud monitoring</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Balance Transfer</h3>
          <p>0% interest on balance transfer for 12 months</p>
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
              <td>Utilities & Telecom</td>
              <td>5 points per ₹100</td>
              <td>5% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>5 points per ₹100</td>
              <td>5% value</td>
            </tr>
            <tr>
              <td>Groceries</td>
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
          <span class="fee-value">₹1,000</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹80,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.5% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹250)</span>
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
            <li>Minimum Income: ₹20,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,50,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Employment: Stable job/business</li>
            <li>Previous credit history preferred</li>
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
            <li>Latest photographs</li>
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
            <li>Excellent utility rewards (5X)</li>
            <li>High fuel rewards (5X)</li>
            <li>Low annual fee (₹1,000)</li>
            <li>Easy fee waiver (₹80,000)</li>
            <li>Low minimum redemption</li>
            <li>Quick reward redemption</li>
            <li>Balance transfer offers</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited lounge access (4 visits)</li>
            <li>Low rewards on general spends</li>
            <li>Points validity only 2 years</li>
            <li>No dining bonuses</li>
            <li>Limited travel benefits</li>
            <li>Basic insurance coverage</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Citi Rewards Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Utility bill payers</li>
            <li>✅ Frequent fuel purchases</li>
            <li>✅ First-time credit card users</li>
            <li>✅ Budget-conscious spenders</li>
            <li>✅ Everyday category rewards</li>
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
                <option value="20000-30000">₹20,000 - ₹30,000</option>
                <option value="30000-50000">₹30,000 - ₹50,000</option>
                <option value="50000-75000">₹50,000 - ₹75,000</option>
                <option value="75000+">Above ₹75,000</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FFB84D, #FF8C42) !important;
}
</style>

<?php get_footer(); ?>
