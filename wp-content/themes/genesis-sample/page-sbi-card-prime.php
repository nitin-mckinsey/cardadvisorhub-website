<?php 
// SBI Card PRIME Credit Card Page
// SEO managed by Rank Math plugin


get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">SBI Card PRIME Credit Card</li>
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
                <linearGradient id="sbiPrimeGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#003366;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#1E3A8A;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#3B82F6;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#sbiPrimeGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="100" height="40" viewBox="0 0 120 40" fill="none">
                <rect width="120" height="40" fill="#FF6B35"/>
                <text x="60" y="18" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SBI CARD</text>
                <text x="60" y="32" font-family="Arial, sans-serif" font-size="8" fill="white" text-anchor="middle">State Bank Group</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="18" font-weight="bold" fill="white">PRIME</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#DBEAFE">Credit Card</text>
              <svg x="20" y="120" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <rect x="8" y="7" width="19" height="6" fill="#1A1F71"/>
                <text x="17.5" y="12" font-family="Arial, sans-serif" font-size="4" font-weight="bold" fill="white" text-anchor="middle">VISA</text>
              </svg>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#DBEAFE">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/28</text>
              <text x="20" y="155" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">4532 1596 7890 1234</text>
              <text x="180" y="80" font-family="Arial, sans-serif" font-size="11" font-weight="bold" fill="#FFD700">PREMIUM</text>
              <text x="180" y="95" font-family="Arial, sans-serif" font-size="9" fill="#FFD700">REWARDS</text>
              <svg x="250" y="135" width="30" height="20" viewBox="0 0 30 20" fill="none">
                <rect width="30" height="20" fill="#444" rx="3"/>
                <text x="15" y="13" font-family="Arial, sans-serif" font-size="6" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
              </svg>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.3/5 (2,976 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>SBI Card PRIME</h1>
          <p class="card-tagline">Premium rewards and lifestyle benefits</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹2,999</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">5X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">12 Visits/Year</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="https://www.sbicard.com/en/personal/credit-cards/lifestyle/sbi-card-prime.page" 
               class="btn btn-primary" 
               target="_blank" 
               rel="noopener noreferrer">
               Apply Now - Official SBI Card
            </a>
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
          <h3>Airport Lounge Access</h3>
          <p>12 complimentary domestic airport lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>5X Dining Points</h3>
          <p>Earn 5X reward points on dining and food delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3>5X Online Points</h3>
          <p>Get 5X reward points on online shopping</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>5X Entertainment</h3>
          <p>Earn 5X points on movies and entertainment</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>5,000 bonus points on first transaction</p>
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
              <td>Dining & Food Delivery</td>
              <td>5X points</td>
              <td>15,000 points/month</td>
            </tr>
            <tr>
              <td>Online Shopping</td>
              <td>5X points</td>
              <td>15,000 points/month</td>
            </tr>
            <tr>
              <td>Movies & Entertainment</td>
              <td>5X points</td>
              <td>15,000 points/month</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1X points</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹0.25 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 200 points</p>
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
          <span class="fee-value">On ₹3,00,000 annual spends</span>
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
            <li>Age: 21-65 years</li>
            <li>Minimum Income: ₹30,000 per month (Salaried)</li>
            <li>Minimum Income: ₹3,60,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
            <li>Good credit history</li>
            <li>SBI relationship preferred</li>
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
            <li>High reward rate on popular categories (5X)</li>
            <li>Good airport lounge access (12 visits)</li>
            <li>Fuel surcharge waiver</li>
            <li>Trusted SBI brand</li>
            <li>Comprehensive reward categories</li>
            <li>Generous welcome bonus</li>
            <li>Wide acceptance</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Monthly caps on bonus categories</li>
            <li>High annual fee (₹2,999)</li>
            <li>Joining fee applicable</li>
            <li>High fee waiver threshold</li>
            <li>Points validity only 3 years</li>
            <li>Lower point value (₹0.25 each)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for SBI Card PRIME</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent diners</li>
            <li>✅ Online shoppers</li>
            <li>✅ Movie enthusiasts</li>
            <li>✅ SBI customers</li>
            <li>✅ Premium lifestyle seekers</li>
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
                <option value="30000-50000">₹30,000 - ₹50,000</option>
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

  <section class="related-cards">
    <div class="container">
      <h2>Similar Cards You Might Like</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <a href="/sbi-cashback" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="sbiCashbackMainGradPrime" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#0f4c75;stop-opacity:1" />
                    <stop offset="30%" style="stop-color:#3282b8;stop-opacity:1" />
                    <stop offset="70%" style="stop-color:#bbe1fa;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#1e88e5;stop-opacity:1" />
                  </linearGradient>
                <linearGradient id="sbiOrangeGradPrime" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#f97316;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#ea580c;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="chipMetallicPrime" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiTextGradPrime" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="cashbackHighlightPrime" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" style="stop-color:#00c851;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#007e33;stop-opacity:0.8" />
                  <stop offset="100%" style="stop-color:#00695c;stop-opacity:0.6" />
                </radialGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#sbiCashbackMainGradPrime)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- SBI Card branding area -->
              <rect x="18" y="15" width="100" height="32" rx="4" fill="url(#sbiOrangeGradPrime)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="68" y="25" font-family="Arial Black, sans-serif" font-size="8" font-weight="900" fill="white" text-anchor="middle">SBI CARD</text>
              <text x="68" y="38" font-family="Arial, sans-serif" font-size="5" font-weight="600" fill="white" text-anchor="middle">STATE BANK GROUP</text>
              
              <!-- CASHBACK branding -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="16" font-weight="900" fill="url(#sbiTextGradPrime)" letter-spacing="2px">CASHBACK</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#f0fff0" opacity="0.9">Credit Card</text>
              
              <!-- 5% online cashback highlight -->
              <circle cx="200" cy="60" r="22" fill="url(#cashbackHighlightPrime)" stroke="white" stroke-width="1"/>
              <text x="200" y="57" font-family="Arial Black, sans-serif" font-size="14" font-weight="900" fill="white" text-anchor="middle">5%</text>
              <text x="200" y="67" font-family="Arial, sans-serif" font-size="6" fill="white" text-anchor="middle">ONLINE</text>
              
              <!-- Realistic chip with grid pattern -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#chipMetallicPrime)" stroke="#d4af37" stroke-width="0.3"/>
              <rect x="22" y="87" width="24" height="18" rx="2" fill="none" stroke="#b8860b" stroke-width="0.2" opacity="0.7"/>
              <!-- Chip grid pattern -->
              <g stroke="#b8860b" stroke-width="0.2" opacity="0.6">
                <defs>
                  <pattern id="chipGridPrime" patternUnits="userSpaceOnUse" width="2" height="2">
                    <rect width="2" height="2" fill="none" stroke="#b8860b" stroke-width="0.1"/>
                  </pattern>
                </defs>
                <rect x="25" y="90" width="18" height="12" fill="url(#chipGridPrime)"/>
              </g>
              
              <!-- Card number with authentic font -->
              <text x="20" y="125" font-family="OCR A Extended, Courier New, monospace" font-size="11" font-weight="bold" fill="white" letter-spacing="2px">6069 4567 8901 ••••</text>
              
              <!-- Visa Classic logo -->
              <rect x="230" y="85" width="45" height="22" rx="3" fill="#1a1f71"/>
              <text x="252.5" y="99" font-family="Arial Black, sans-serif" font-size="12" font-weight="900" fill="white" text-anchor="middle">VISA</text>
              <text x="252.5" y="108" font-family="Arial, sans-serif" font-size="6" fill="white" text-anchor="middle">CLASSIC</text>
              
              <!-- Validity area -->
              <text x="230" y="25" font-family="Arial, sans-serif" font-size="6" fill="#b3e5fc" letter-spacing="0.5px">VALID THRU</text>
              <text x="230" y="35" font-family="OCR A Extended, Courier New, monospace" font-size="9" font-weight="bold" fill="white">12/28</text>
              
              <!-- Cardholder name area -->
              <text x="20" y="155" font-family="Arial, sans-serif" font-size="7" fill="#b3e5fc" letter-spacing="0.5px">CARDHOLDER NAME</text>
              <text x="20" y="167" font-family="Arial, sans-serif" font-size="9" font-weight="600" fill="white" letter-spacing="1px">CASHBACK CUSTOMER</text>
              
              <!-- Contactless symbol -->
              <g transform="translate(255, 125)">
                <path d="M8 2C11.866 2 15 5.134 15 9s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z" fill="white" opacity="0.7"/>
                <path d="M8 5c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z" fill="white" opacity="0.7"/>
              </g>
              
              <!-- SBI branding elements -->
              <circle cx="260" cy="50" r="10" fill="none" stroke="#f97316" stroke-width="0.6" opacity="0.4"/>
              <text x="260" y="53" font-family="Arial, sans-serif" font-size="4" fill="#f97316" text-anchor="middle" opacity="0.6">SBI</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>SBI Cashback Credit Card</h4>
            <p>High cashback on online spends and fuel</p>
            <a href="/sbi-cashback" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="regaliaGradient4" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#8B0000;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#A52A2A;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#regaliaGradient4)" stroke="#CCC" stroke-width="1"/>
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
                <linearGradient id="sapphiroAuthMainGradPrime" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#1e3a8a;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#3b82f6;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#60a5fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#93c5fd;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroIciciLogoGradPrime" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ff6b35;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f7931e;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroChipRealisticPrime" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroVisaGradPrime" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#1a1f71;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2e3192;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroTextGradPrime" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="sapphiroSapphireGemPrime" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" style="stop-color:#4169e1;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#0000cd;stop-opacity:0.8" />
                  <stop offset="100%" style="stop-color:#191970;stop-opacity:0.6" />
                </radialGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#sapphiroAuthMainGradPrime)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- Sapphire pattern overlay -->
              <rect width="300" height="190" rx="12" fill="url(#sapphiroSapphireGemPrime)" opacity="0.1"/>
              
              <!-- ICICI Bank logo area -->
              <rect x="18" y="15" width="72" height="32" rx="4" fill="url(#sapphiroIciciLogoGradPrime)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="54" y="27" font-family="Arial Black, sans-serif" font-size="9" font-weight="900" fill="white" text-anchor="middle">ICICI</text>
              <text x="54" y="38" font-family="Arial, sans-serif" font-size="6" font-weight="600" fill="white" text-anchor="middle">BANK</text>
              
              <!-- SAPPHIRO branding with gem effect -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="14" font-weight="900" fill="url(#sapphiroTextGradPrime)" letter-spacing="1.5px">SAPPHIRO</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#dbeafe" opacity="0.9">Credit Card</text>
              
              <!-- Sapphire gem icon -->
              <g transform="translate(145, 52)">
                <polygon points="8,2 14,6 12,12 4,12 2,6" fill="url(#sapphiroSapphireGemPrime)" stroke="white" stroke-width="0.5"/>
                <polygon points="6,6 10,6 9,9 5,9" fill="white" opacity="0.3"/>
              </g>
              
              <!-- Realistic chip with metallic effect -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#sapphiroChipRealisticPrime)" stroke="#d4af37" stroke-width="0.3"/>
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
              <text x="20" y="125" font-family="OCR A Extended, Courier New, monospace" font-size="11" font-weight="bold" fill="white" letter-spacing="2px">5520 1234 8901 ••••</text>
              
              <!-- Visa logo with authentic design -->
              <rect x="230" y="85" width="45" height="22" rx="3" fill="url(#sapphiroVisaGradPrime)"/>
              <text x="252.5" y="99" font-family="Arial Black, sans-serif" font-size="12" font-weight="900" fill="white" text-anchor="middle">VISA</text>
              
              <!-- Validity and cardholder area -->
              <text x="230" y="25" font-family="Arial, sans-serif" font-size="6" fill="#dbeafe" letter-spacing="0.5px">VALID THRU</text>
              <text x="230" y="35" font-family="OCR A Extended, Courier New, monospace" font-size="9" font-weight="bold" fill="white">12/28</text>
              
              <text x="20" y="155" font-family="Arial, sans-serif" font-size="7" fill="#dbeafe" letter-spacing="0.5px">CARDHOLDER NAME</text>
              <text x="20" y="167" font-family="Arial, sans-serif" font-size="9" font-weight="600" fill="white" letter-spacing="1px">SAPPHIRO CUSTOMER</text>
              
              <!-- Contactless symbol -->
              <g transform="translate(255, 125)">
                <path d="M8 2C11.866 2 15 5.134 15 9s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z" fill="white" opacity="0.7"/>
                <path d="M8 5c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z" fill="white" opacity="0.7"/>
              </g>
              
              <!-- Premium pattern -->
              <g transform="translate(200, 140)" opacity="0.2">
                <polygon points="5,2 8,5 5,8 2,5" fill="white"/>
                <polygon points="15,2 18,5 15,8 12,5" fill="white"/>
                <polygon points="25,2 28,5 25,8 22,5" fill="white"/>
                <polygon points="35,2 38,5 35,8 32,5" fill="white"/>
              </g>
              
              <!-- Premium accent line -->
              <line x1="20" y1="180" x2="280" y2="180" stroke="url(#sapphiroTextGradPrime)" stroke-width="0.5" opacity="0.6"/>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>ICICI Sapphiro Credit Card</h4>
            <p>Premium lifestyle and travel benefits card</p>
            <a href="/icici-sapphiro" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section style="padding: 60px 0; background: #f8f9fa;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 40px; color: #333;">Frequently Asked Questions</h2>
        
        <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">What is the processing time for SBI Card PRIME?</div>
            <div style="padding: 20px; color: #666; line-height: 1.6;">The card is typically processed within 7-10 working days from application submission with complete documentation. Digital card may be available within 24-48 hours for existing SBI customers.</div>
        </div>
        
        <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">What are the income requirements for this card?</div>
            <div style="padding: 20px; color: #666; line-height: 1.6;">Minimum monthly income of ₹30,000 for salaried individuals or ₹6 lakh annual income for self-employed professionals. Income requirements may vary by location.</div>
        </div>
        
        <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">How can I maximize reward points with this card?</div>
            <div style="padding: 20px; color: #666; line-height: 1.6;">Use for dining (5 points per ₹100), groceries (2 points per ₹100), and fuel (1 point per ₹100). Redeem points for maximum value through travel bookings or gift vouchers.</div>
        </div>
        
        <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">What dining benefits are included?</div>
            <div style="padding: 20px; color: #666; line-height: 1.6;">5X reward points on dining, special discounts at partner restaurants, and exclusive dining experiences. Perfect for food enthusiasts.</div>
        </div>
        
        <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">Is there a spending requirement for fee waiver?</div>
            <div style="padding: 20px; color: #666; line-height: 1.6;">Yes, spend ₹2 lakh annually to get the annual fee waived for the next year. This is approximately ₹16,667 per month in spending requirement.</div>
        </div>
    </div>
  </section>
</main>

<style>
/* Breadcrumb Navigation */
.breadcrumb-nav {
    background: #f8f9fa;
    padding: 15px 0;
    border-bottom: 1px solid #e9ecef;
}

.breadcrumb {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 14px;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    margin: 0 8px;
    color: #6c757d;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #800080, #9932CC) !important;
}
</style>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for SBI Card PRIME Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through SBI Card website, mobile app, or visit the nearest SBI branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹25,000 for salaried individuals and ₹4,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of SBI PRIME Card?</h3>
        <div class="faq-answer">
          <p>Enjoy reward points on all spends, complimentary airport lounge access, fuel surcharge waiver, and premium lifestyle benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹2,999 plus taxes with waiver available on annual spends as per the terms mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
