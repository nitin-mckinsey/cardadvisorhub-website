<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">ICICI Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sapphiro Credit Card</li>
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
                <linearGradient id="icicisapphiroGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#1E3A8A;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#3B82F6;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#60A5FA;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#icicisapphiroGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#FF6B35"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="13" font-weight="bold" fill="white" text-anchor="middle">ICICI</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="16" font-weight="bold" fill="white">SAPPHIRO</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#DBEAFE">Credit Card</text>
              <svg x="20" y="120" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <rect x="8" y="7" width="19" height="6" fill="#1A1F71"/>
                <text x="17.5" y="12" font-family="Arial, sans-serif" font-size="4" font-weight="bold" fill="white" text-anchor="middle">VISA</text>
              </svg>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#DBEAFE">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/28</text>
              <text x="20" y="155" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5421 3000 7891 2345</text>
              <text x="200" y="80" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="#FFD700">PREMIUM</text>
              <text x="200" y="95" font-family="Arial, sans-serif" font-size="10" fill="#FFD700">TRAVEL</text>
              <svg x="250" y="135" width="30" height="20" viewBox="0 0 30 20" fill="none">
                <rect width="30" height="20" fill="#444" rx="3"/>
                <text x="15" y="13" font-family="Arial, sans-serif" font-size="6" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
              </svg>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.6/5 (2,834 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>ICICI Sapphiro Credit Card</h1>
          <p class="card-tagline">Premium travel and lifestyle experiences</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹3,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">4X Points</span>
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
          <p>Unlimited domestic and 2 international lounge visits per quarter</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏆</div>
          <h3>4X Reward Points</h3>
          <p>Earn 4X points on travel, dining and international spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>₹50 lakh travel insurance and personal accident cover</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Movie Benefits</h3>
          <p>Buy one get one free on movie tickets twice a month</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>Dining Privileges</h3>
          <p>Up to 25% discount at premium restaurants</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>No Foreign Currency Markup</h3>
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
          <span class="fee-value">₹3,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹3,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹2,50,000 annual spends</span>
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
            <li>Age: 21-60 years</li>
            <li>Minimum Income: ₹50,000 per month (Salaried)</li>
            <li>Minimum Income: ₹6,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
            <li>Good credit history</li>
            <li>ICICI relationship preferred</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (6 months)</li>
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
            <li>Unlimited domestic lounge access</li>
            <li>High reward rate on premium categories</li>
            <li>No foreign currency markup</li>
            <li>Excellent travel insurance</li>
            <li>Premium dining benefits</li>
            <li>Movie ticket offers</li>
            <li>Good international acceptance</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹3,500)</li>
            <li>High income requirements</li>
            <li>Joining fee applicable</li>
            <li>High fee waiver threshold</li>
            <li>Limited international lounge visits</li>
            <li>Points validity only 3 years</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for ICICI Sapphiro Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent travelers</li>
            <li>✅ Premium lifestyle enthusiasts</li>
            <li>✅ International spenders</li>
            <li>✅ ICICI Bank customers</li>
            <li>✅ Business professionals</li>
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
                <option value="50000-75000">₹50,000 - ₹75,000</option>
                <option value="75000-100000">₹75,000 - ₹1,00,000</option>
                <option value="100000-150000">₹1,00,000 - ₹1,50,000</option>
                <option value="150000+">Above ₹1,50,000</option>
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
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="regaliaGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#8B0000;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#A52A2A;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#regaliaGradient3)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#004381"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">REGALIA</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
              <svg x="20" y="120" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <circle cx="12" cy="10" r="6" fill="#EB001B" fill-opacity="0.8"/>
                <circle cx="23" cy="10" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              </svg>
              <text x="20" y="155" font-family="Courier, monospace" font-size="11" font-weight="bold" fill="white">**** 1234</text>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="9" fill="#F5F5F5">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white">12/28</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>HDFC Regalia Credit Card</h4>
            <p>Premium travel rewards and milestone benefits</p>
            <a href="/hdfc-regalia" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="rubyxAuthMainGradSapp" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#8b0000;stop-opacity:1" />
                  <stop offset="25%" style="stop-color:#a0002a;stop-opacity:1" />
                  <stop offset="75%" style="stop-color:#c41e3a;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#dc143c;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="rubyxIciciLogoGradSapp" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ff6b35;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f7931e;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="rubyxChipRealisticSapp" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="rubyxMastercardGradSapp" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#eb001b;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#ff5f00;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f79e1b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="rubyxTextGradSapp" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="rubyxRubyGemSapp" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" style="stop-color:#ff1744;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#d50000;stop-opacity:0.8" />
                  <stop offset="100%" style="stop-color:#b71c1c;stop-opacity:0.6" />
                </radialGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#rubyxAuthMainGradSapp)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- Ruby pattern overlay -->
              <rect width="300" height="190" rx="12" fill="url(#rubyxRubyGemSapp)" opacity="0.1"/>
              
              <!-- ICICI Bank logo area -->
              <rect x="18" y="15" width="72" height="32" rx="4" fill="url(#rubyxIciciLogoGradSapp)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="54" y="27" font-family="Arial Black, sans-serif" font-size="9" font-weight="900" fill="white" text-anchor="middle">ICICI</text>
              <text x="54" y="38" font-family="Arial, sans-serif" font-size="6" font-weight="600" fill="white" text-anchor="middle">BANK</text>
              
              <!-- RUBYX branding with gem effect -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="16" font-weight="900" fill="url(#rubyxTextGradSapp)" letter-spacing="1.5px">RUBYX</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#ffe4e1" opacity="0.9">Credit Card</text>
              
              <!-- Ruby gem icon -->
              <g transform="translate(130, 52)">
                <polygon points="8,2 14,8 8,14 2,8" fill="url(#rubyxRubyGemSapp)" stroke="white" stroke-width="0.5"/>
                <polygon points="6,6 10,6 8,10" fill="white" opacity="0.3"/>
              </g>
              
              <!-- Realistic chip with metallic effect -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#rubyxChipRealisticSapp)" stroke="#d4af37" stroke-width="0.3"/>
              <rect x="22" y="87" width="24" height="18" rx="2" fill="none" stroke="#b8860b" stroke-width="0.2" opacity="0.7"/>
              <!-- Chip contact grid -->
              <g stroke="#b8860b" stroke-width="0.25" opacity="0.6">
                <rect x="25" y="90" width="18" height="12" fill="none"/>
                <line x1="27" y1="90" x2="27" y2="102"/>
                <line x1="29" y1="90" x2="29" y2="102"/>
                <line x1="31" y1="90" x2="31" y2="102"/>
                <line x1="33" y1="90" x2="33" y2="102"/>
                <line x1="35" y1="90" x2="35" y2="102"/>
                <line x1="37" y1="90" x2="37" y2="102"/>
                <line x1="39" y1="90" x2="39" y2="102"/>
                <line x1="41" y1="90" x2="41" y2="102"/>
                <line x1="25" y1="92" x2="43" y2="92"/>
                <line x1="25" y1="94" x2="43" y2="94"/>
                <line x1="25" y1="96" x2="43" y2="96"/>
                <line x1="25" y1="98" x2="43" y2="98"/>
                <line x1="25" y1="100" x2="43" y2="100"/>
              </g>
              
              <!-- Card number with OCR font -->
              <text x="20" y="125" font-family="OCR A Extended, Courier New, monospace" font-size="11" font-weight="bold" fill="white" letter-spacing="2px">5520 1234 5678 ••••</text>
              
              <!-- Mastercard logo with authentic design -->
              <g transform="translate(230, 85)">
                <rect width="45" height="22" rx="3" fill="#1a1a1a"/>
                <circle cx="15" cy="11" r="8" fill="#eb001b"/>
                <circle cx="30" cy="11" r="8" fill="#ff5f00"/>
                <path d="M22.5,6 C20.5,7.5 19.5,9.5 19.5,11 C19.5,12.5 20.5,14.5 22.5,16 C24.5,14.5 25.5,12.5 25.5,11 C25.5,9.5 24.5,7.5 22.5,6 Z" fill="#ff5f00"/>
                <text x="22.5" y="18" font-family="Arial, sans-serif" font-size="4" fill="white" text-anchor="middle">mastercard</text>
              </g>
              
              <!-- Validity and cardholder area -->
              <text x="230" y="25" font-family="Arial, sans-serif" font-size="6" fill="#ffb3ba" letter-spacing="0.5px">VALID THRU</text>
              <text x="230" y="35" font-family="OCR A Extended, Courier New, monospace" font-size="9" font-weight="bold" fill="white">12/28</text>
              
              <text x="20" y="155" font-family="Arial, sans-serif" font-size="7" fill="#ffb3ba" letter-spacing="0.5px">CARDHOLDER NAME</text>
              <text x="20" y="167" font-family="Arial, sans-serif" font-size="9" font-weight="600" fill="white" letter-spacing="1px">RUBYX CUSTOMER</text>
              
              <!-- Contactless symbol -->
              <g transform="translate(255, 125)">
                <path d="M8 2C11.866 2 15 5.134 15 9s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z" fill="white" opacity="0.7"/>
                <path d="M8 5c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z" fill="white" opacity="0.7"/>
              </g>
              
              <!-- Subtle security pattern -->
              <g transform="translate(200, 140)" opacity="0.2">
                <circle cx="5" cy="5" r="2" fill="white"/>
                <circle cx="15" cy="5" r="2" fill="white"/>
                <circle cx="25" cy="5" r="2" fill="white"/>
                <circle cx="35" cy="5" r="2" fill="white"/>
              </g>
              
              <!-- Premium accent line -->
              <line x1="20" y1="180" x2="280" y2="180" stroke="url(#rubyxTextGradSapp)" stroke-width="0.5" opacity="0.6"/>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>ICICI Rubyx Credit Card</h4>
            <p>Premium lifestyle benefits and dining rewards</p>
            <a href="/icici-rubyx" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="axisMagnusGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#4B0082;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#8A2BE2;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#9400D3;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#axisMagnusGradient3)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="60" height="30" viewBox="0 0 60 30" fill="none">
                <text x="30" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">AXIS</text>
              </svg>
              <text x="20" y="75" font-family="Arial, sans-serif" font-size="16" font-weight="bold" fill="white">MAGNUS</text>
              <text x="20" y="95" font-family="Arial, sans-serif" font-size="11" fill="#E6E6FA">Credit Card</text>
              <svg x="20" y="115" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <circle cx="12" cy="10" r="6" fill="#EB001B" fill-opacity="0.8"/>
                <circle cx="23" cy="10" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              </svg>
              <text x="20" y="155" font-family="Courier, monospace" font-size="11" font-weight="bold" fill="white">**** 5678</text>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="9" fill="#E6E6FA">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white">12/28</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>Axis Magnus Credit Card</h4>
            <p>Premium travel rewards card with milestone benefits</p>
            <a href="/axis-magnus" class="btn btn-outline">View Details</a>
          </div>
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
        <h3 class="faq-question">How to apply for ICICI Bank Sapphiro Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through ICICI Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹50,000 for salaried individuals and ₹7,50,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the premium benefits of Sapphiro Card?</h3>
        <div class="faq-answer">
          <p>Enjoy unlimited airport lounge access, golf privileges, concierge services, travel insurance, and accelerated reward points on premium spends.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹12,500 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #228B22, #32CD32) !important;
}
</style>

<?php get_footer(); ?>
