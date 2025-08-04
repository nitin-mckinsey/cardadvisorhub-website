<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">HDFC Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">FreedomFlex Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="hdfcFreedomFlexGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#006633;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#228B22;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#32CD32;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#hdfcFreedomFlexGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#004381"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">FREEDOMFLEX</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
              <svg x="20" y="120" width="40" height="24" viewBox="0 0 40 24" fill="none">
                <rect width="40" height="24" rx="3" fill="#FFD700"/>
                <circle cx="12" cy="12" r="8" fill="#EB001B" fill-opacity="0.8"/>
                <circle cx="28" cy="12" r="8" fill="#FF5F00" fill-opacity="0.8"/>
              </svg>
              <g transform="translate(20, 155)">
                <rect width="18" height="12" fill="#444"/>
                <rect x="24" width="18" height="12" fill="#444"/>
                <rect x="48" width="18" height="12" fill="#444"/>
                <rect x="72" width="18" height="12" fill="#444"/>
              </g>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/28</text>
              <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5369 4845 6976 9999</text>
              <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                <rect width="40" height="30" fill="#444" rx="3"/>
                <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
              </svg>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.4/5 (3,421 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>HDFC FreedomFlex Credit Card</h1>
          <p class="card-tagline">Flexible rewards across all categories</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹1,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">3X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Category Flexibility</span>
              <span class="highlight-value">Quarterly Change</span>
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
          <div class="feature-icon">🔄</div>
          <h3>Rotating Categories</h3>
          <p>3X points on different categories that change quarterly</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏆</div>
          <h3>Flexible Redemption</h3>
          <p>Redeem points for cash, travel, gift vouchers or statement credit</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Benefits</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Base Rewards</h3>
          <p>1X point on all other purchases with no restrictions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Purchase Protection</h3>
          <p>Coverage against theft and accidental damage</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Sign-up Bonus</h3>
          <p>2,000 bonus points after first purchase</p>
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
              <th>Quarterly Cap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Q1: Grocery & Supermarkets</td>
              <td>3X points</td>
              <td>₹1,500 spend per quarter</td>
            </tr>
            <tr>
              <td>Q2: Dining & Restaurants</td>
              <td>3X points</td>
              <td>₹1,500 spend per quarter</td>
            </tr>
            <tr>
              <td>Q3: Online Shopping</td>
              <td>3X points</td>
              <td>₹1,500 spend per quarter</td>
            </tr>
            <tr>
              <td>Q4: Gas Stations</td>
              <td>3X points</td>
              <td>₹1,500 spend per quarter</td>
            </tr>
            <tr>
              <td>All Other Purchases</td>
              <td>1X points</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹0.50 when redeemed</p>
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
            <li>Age: 21-60 years</li>
            <li>Minimum Income: ₹25,000 per month (Salaried)</li>
            <li>Minimum Income: ₹3,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Good credit history</li>
            <li>HDFC relationship preferred</li>
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
            <li>Rotating bonus categories (3X)</li>
            <li>Flexible redemption options</li>
            <li>Moderate annual fee</li>
            <li>Good base reward rate</li>
            <li>Fuel surcharge waiver</li>
            <li>HDFC bank privileges</li>
            <li>Purchase protection</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Need to track rotating categories</li>
            <li>Quarterly spending caps</li>
            <li>No airport lounge access</li>
            <li>Joining fee applicable</li>
            <li>Limited premium benefits</li>
            <li>Points validity only 3 years</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for HDFC FreedomFlex Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Strategic spenders</li>
            <li>✅ Category rotators</li>
            <li>✅ HDFC customers</li>
            <li>✅ Flexible reward seekers</li>
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

  <section class="related-cards">
    <div class="container">
      <h2>Similar Cards You Might Like</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <a href="/hdfc-regalia" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="hdfcRegalia" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#8B0000;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#A52A2A;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#hdfcRegalia)" stroke="#CCC" stroke-width="1"/>
                <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                  <rect width="100" height="50" fill="#004381"/>
                  <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                  <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
                </svg>
                <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">REGALIA</text>
                <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
                <svg x="20" y="120" width="40" height="24" viewBox="0 0 40 24" fill="none">
                  <rect width="40" height="24" rx="3" fill="#FFD700"/>
                  <circle cx="12" cy="12" r="8" fill="#EB001B" fill-opacity="0.8"/>
                  <circle cx="28" cy="12" r="8" fill="#FF5F00" fill-opacity="0.8"/>
                </svg>
                <g transform="translate(20, 155)">
                  <rect width="18" height="12" fill="#444"/>
                  <rect x="24" width="18" height="12" fill="#444"/>
                  <rect x="48" width="18" height="12" fill="#444"/>
                  <rect x="72" width="18" height="12" fill="#444"/>
                </g>
                <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
                <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/27</text>
                <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5369 4845 6976 1234</text>
                <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                  <rect width="40" height="30" fill="#444" rx="3"/>
                  <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
                </svg>
              </svg>
            </div>
          </a>
          <div class="related-card-content">
            <h4>HDFC Regalia Credit Card</h4>
            <p>Premium rewards with lifestyle benefits and travel perks</p>
            <a href="/hdfc-regalia" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <a href="/hdfc-millennia" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="hdfcMillennia" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#4B0082;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#6A0DAD;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#8A2BE2;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#hdfcMillennia)" stroke="#CCC" stroke-width="1"/>
                <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                  <rect width="100" height="50" fill="#004381"/>
                  <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                  <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
                </svg>
                <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">MILLENNIA</text>
                <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
                <svg x="20" y="120" width="40" height="24" viewBox="0 0 40 24" fill="none">
                  <rect width="40" height="24" rx="3" fill="#1A1F71"/>
                  <text x="20" y="16" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white" text-anchor="middle">VISA</text>
                </svg>
                <g transform="translate(20, 155)">
                  <rect width="18" height="12" fill="#444"/>
                  <rect x="24" width="18" height="12" fill="#444"/>
                  <rect x="48" width="18" height="12" fill="#444"/>
                  <rect x="72" width="18" height="12" fill="#444"/>
                </g>
                <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
                <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/27</text>
                <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">4578 9123 4567 8901</text>
                <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                  <rect width="40" height="30" fill="#444" rx="3"/>
                  <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
                </svg>
              </svg>
            </div>
          </a>
          <div class="related-card-content">
            <h4>HDFC Millennia Credit Card</h4>
            <p>Millennia card with accelerated rewards on online shopping</p>
            <a href="/hdfc-millennia" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <a href="/axis-magnus" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="axisMagnus" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#800020;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#A0002A;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#C00030;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#axisMagnus)" stroke="#CCC" stroke-width="1"/>
                <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                  <rect width="100" height="50" fill="#8B0000"/>
                  <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">AXIS</text>
                  <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
                </svg>
                <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">MAGNUS</text>
                <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
                <svg x="20" y="120" width="40" height="24" viewBox="0 0 40 24" fill="none">
                  <rect width="40" height="24" rx="3" fill="#FFD700"/>
                  <circle cx="12" cy="12" r="8" fill="#EB001B" fill-opacity="0.8"/>
                  <circle cx="28" cy="12" r="8" fill="#FF5F00" fill-opacity="0.8"/>
                </svg>
                <g transform="translate(20, 155)">
                  <rect width="18" height="12" fill="#444"/>
                  <rect x="24" width="18" height="12" fill="#444"/>
                  <rect x="48" width="18" height="12" fill="#444"/>
                  <rect x="72" width="18" height="12" fill="#444"/>
                </g>
                <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
                <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/27</text>
                <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5379 8901 2345 6789</text>
                <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                  <rect width="40" height="30" fill="#444" rx="3"/>
                  <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
                </svg>
              </svg>
            </div>
          </a>
          <div class="related-card-content">
            <h4>Axis Magnus Credit Card</h4>
            <p>Ultra-premium card with exclusive rewards and benefits</p>
            <a href="/axis-magnus" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #006633, #228B22) !important;
}

/* Related Cards Section */
.related-cards {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    margin-top: 40px;
}

.related-cards h2 {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 50px;
}

.related-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.related-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
}

.related-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.related-card-image {
    height: 200px;
    overflow: hidden;
    position: relative;
}

.related-card-image-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
}

.related-card-image svg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
}

.related-card:hover .related-card-image svg {
    transform: scale(1.05);
}

.related-card-content {
    padding: 25px;
    text-align: center;
}

.related-card-content h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 10px;
}

.related-card-content p {
    color: #6c757d;
    margin-bottom: 20px;
    line-height: 1.6;
}

.related-card .btn {
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
}

.related-card .btn:hover {
    background: linear-gradient(135deg, #0056b3, #004085);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,123,255,0.3);
}

@media (max-width: 768px) {
    .related-cards {
        padding: 50px 0;
    }
    
    .related-cards h2 {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    
    .related-cards-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 0 20px;
    }
    
    .related-card-content {
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .related-cards-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
}
</style>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for HDFC FreedomFlex Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through HDFC Bank website or visit the nearest branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement varies by location. Generally, ₹3,00,000 per annum for salaried individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy flexible reward points, dining discounts, fuel benefits, and exclusive lifestyle privileges.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Annual fee details and waiver conditions are available in the card features section above.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
