<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">HDFC Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Times Credit Card</li>
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
                <linearGradient id="hdfcTimesGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#2C3E50;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#34495E;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#5D6D7E;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#hdfcTimesGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#004381"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="18" font-weight="bold" fill="white">TIMES</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#E8E8E8">Credit Card</text>
              <svg x="20" y="120" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <circle cx="12" cy="10" r="6" fill="#EB001B" fill-opacity="0.8"/>
                <circle cx="23" cy="10" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              </svg>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/28</text>
              <text x="20" y="155" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5369 4812 3456 7890</text>
              <text x="200" y="80" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="#FFD700">TIMES</text>
              <text x="200" y="95" font-family="Arial, sans-serif" font-size="10" fill="#FFD700">REWARDS</text>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">★★★☆☆</div>
            <span class="rating-text">3.8/5 (1,567 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>HDFC Times Credit Card</h1>
          <p class="card-tagline">Times rewards and lifestyle benefits</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹750</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">2X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Special Feature</span>
              <span class="highlight-value">Times Rewards</span>
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
          <div class="feature-icon">📰</div>
          <h3>Times Network Benefits</h3>
          <p>Exclusive discounts and offers from Times Group</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🍽️</div>
          <h3>2X on Dining</h3>
          <p>2X reward points on dining and restaurant spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3>Fuel Benefits</h3>
          <p>1% fuel surcharge waiver at all petrol pumps</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3>Shopping Rewards</h3>
          <p>Enhanced rewards on Times group merchant partners</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Entertainment</h3>
          <p>Discounts on movie tickets and entertainment</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>Easy EMI</h3>
          <p>Convert purchases to EMIs with attractive rates</p>
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
              <td>Dining & Restaurants</td>
              <td>2 points per ₹150</td>
              <td>1.33% value</td>
            </tr>
            <tr>
              <td>Times Group Partners</td>
              <td>2 points per ₹150</td>
              <td>1.33% value</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>1 point per ₹150</td>
              <td>0.67% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1 point per ₹150</td>
              <td>0.67% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 2,500 points</p>
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
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹60,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.4% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹300)</span>
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
            <li>Minimum Income: ₹2,25,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>HDFC bank relationship preferred</li>
            <li>Stable employment/business</li>
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
            <li>Low annual fee (₹750)</li>
            <li>Times Group benefits</li>
            <li>Easy fee waiver threshold</li>
            <li>Fuel surcharge waiver</li>
            <li>HDFC bank privileges</li>
            <li>Entertainment discounts</li>
            <li>Easy EMI conversion</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Low base reward rate</li>
            <li>High minimum redemption</li>
            <li>No airport lounge access</li>
            <li>Limited premium benefits</li>
            <li>Times-centric rewards</li>
            <li>Complex points structure</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for HDFC Times Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Times Group readers</li>
            <li>✅ Budget-conscious users</li>
            <li>✅ Dining enthusiasts</li>
            <li>✅ First-time HDFC users</li>
            <li>✅ Entertainment seekers</li>
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
                <option value="18000-30000">₹18,000 - ₹30,000</option>
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

  <section class="related-cards">
    <div class="container">
      <h2>Similar Cards You Might Like</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <a href="/hdfc-moneyback" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="moneybackAuthMainGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#1f2937;stop-opacity:1" />
                    <stop offset="30%" style="stop-color:#374151;stop-opacity:1" />
                    <stop offset="70%" style="stop-color:#4b5563;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#6b7280;stop-opacity:1" />
                  </linearGradient>
                <linearGradient id="moneybackHdfcLogoGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#004381;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#0066cc;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="moneybackChipRealistic" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="moneybackMastercardGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#eb001b;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#ff5f00;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f79e1b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="moneybackTextGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#moneybackAuthMainGrad)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- HDFC Bank logo area -->
              <rect x="18" y="15" width="72" height="32" rx="4" fill="url(#moneybackHdfcLogoGrad)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="54" y="27" font-family="Arial Black, sans-serif" font-size="9" font-weight="900" fill="white" text-anchor="middle">HDFC</text>
              <text x="54" y="38" font-family="Arial, sans-serif" font-size="6" font-weight="600" fill="white" text-anchor="middle">BANK</text>
              
              <!-- MONEYBACK branding -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="13" font-weight="900" fill="url(#moneybackTextGrad)" letter-spacing="1px">MONEYBACK</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#e5e7eb" opacity="0.9">Credit Card</text>
              
              <!-- Realistic chip with metallic effect -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#moneybackChipRealistic)" stroke="#d4af37" stroke-width="0.3"/>
              <rect x="22" y="87" width="24" height="18" rx="2" fill="none" stroke="#b8860b" stroke-width="0.2" opacity="0.7"/>
              <!-- Chip contact lines -->
              <g stroke="#b8860b" stroke-width="0.3" opacity="0.6">
                <line x1="24" y1="89" x2="44" y2="89"/>
                <line x1="24" y1="91" x2="44" y2="91"/>
                <line x1="24" y1="93" x2="44" y2="93"/>
                <line x1="24" y1="95" x2="44" y2="95"/>
                <line x1="24" y1="97" x2="44" y2="97"/>
                <line x1="24" y1="99" x2="44" y2="99"/>
                <line x1="24" y1="101" x2="44" y2="101"/>
                <line x1="24" y1="103" x2="44" y2="103"/>
              </g>
              
              <!-- Card number with OCR font -->
              <text x="20" y="125" font-family="OCR A Extended, Courier New, monospace" font-size="11" font-weight="bold" fill="white" letter-spacing="2px">5369 4845 6976 ••••</text>
              
              <!-- Mastercard logo with authentic design -->
              <g transform="translate(230, 85)">
                <rect width="45" height="22" rx="3" fill="#1a1a1a"/>
                <circle cx="15" cy="11" r="8" fill="#eb001b"/>
                <circle cx="30" cy="11" r="8" fill="#ff5f00"/>
                <path d="M22.5,6 C20.5,7.5 19.5,9.5 19.5,11 C19.5,12.5 20.5,14.5 22.5,16 C24.5,14.5 25.5,12.5 25.5,11 C25.5,9.5 24.5,7.5 22.5,6 Z" fill="#ff5f00"/>
                <text x="22.5" y="18" font-family="Arial, sans-serif" font-size="4" fill="white" text-anchor="middle">mastercard</text>
              </g>
              
              <!-- Validity and cardholder area -->
              <text x="230" y="25" font-family="Arial, sans-serif" font-size="6" fill="#9ca3af" letter-spacing="0.5px">VALID THRU</text>
              <text x="230" y="35" font-family="OCR A Extended, Courier New, monospace" font-size="9" font-weight="bold" fill="white">12/28</text>
              
              <text x="20" y="155" font-family="Arial, sans-serif" font-size="7" fill="#9ca3af" letter-spacing="0.5px">CARDHOLDER NAME</text>
              <text x="20" y="167" font-family="Arial, sans-serif" font-size="9" font-weight="600" fill="white" letter-spacing="1px">MONEYBACK CUSTOMER</text>
              
              <!-- Contactless symbol -->
              <g transform="translate(255, 125)">
                <path d="M8 2C11.866 2 15 5.134 15 9s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z" fill="white" opacity="0.7"/>
                <path d="M8 5c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z" fill="white" opacity="0.7"/>
              </g>
            </svg>
          </div>
          </a>
          <div class="related-card-content">
            <h4>HDFC MoneyBack Credit Card</h4>
            <p>Cashback on online spends and utility bills</p>
            <a href="/hdfc-moneyback" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <a href="/hdfc-freedomflex" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="freedomflexGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#0F7B0F;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#228B22;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#32CD32;stop-opacity:1" />
                  </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#freedomflexGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#004381"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="13" font-weight="bold" fill="white">FREEDOMFLEX</text>
              <text x="20" y="100" font-family="Arial, sans-serif" font-size="12" fill="#F0FFF0">Credit Card</text>
              <svg x="20" y="120" width="35" height="20" viewBox="0 0 35 20" fill="none">
                <rect width="35" height="20" rx="3" fill="#FFD700"/>
                <circle cx="12" cy="10" r="6" fill="#EB001B" fill-opacity="0.8"/>
                <circle cx="23" cy="10" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              </svg>
              <text x="20" y="155" font-family="Courier, monospace" font-size="11" font-weight="bold" fill="white">**** 1234</text>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="9" fill="#E6FFE6">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white">12/28</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>HDFC FreedomFlex Credit Card</h4>
            <p>Flexible cashback across multiple categories</p>
            <a href="/hdfc-freedomflex" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="sbiPrimeAuthMainGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#003366;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#1e3a8a;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#3b82f6;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#60a5fa;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiPrimeOrangeGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#f97316;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#ea580c;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiPrimeChipRealistic" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiPrimeVisaGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#1a1f71;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2e3192;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiPrimeTextGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#sbiPrimeAuthMainGrad)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- SBI Card logo area -->
              <rect x="18" y="15" width="82" height="32" rx="4" fill="url(#sbiPrimeOrangeGrad)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="59" y="27" font-family="Arial Black, sans-serif" font-size="8" font-weight="900" fill="white" text-anchor="middle">SBI CARD</text>
              <text x="59" y="38" font-family="Arial, sans-serif" font-size="6" font-weight="600" fill="white" text-anchor="middle">STATE BANK OF INDIA</text>
              
              <!-- PRIME branding -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="16" font-weight="900" fill="url(#sbiPrimeTextGrad)" letter-spacing="2px">PRIME</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#dbeafe" opacity="0.9">Credit Card</text>
              
              <!-- Realistic chip with metallic effect -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#sbiPrimeChipRealistic)" stroke="#d4af37" stroke-width="0.3"/>
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
              <text x="20" y="125" font-family="OCR A Extended, Courier New, monospace" font-size="11" font-weight="bold" fill="white" letter-spacing="2px">4123 4567 8901 ••••</text>
              
              <!-- Visa logo with authentic design -->
              <rect x="230" y="85" width="45" height="22" rx="3" fill="url(#sbiPrimeVisaGrad)"/>
              <text x="252.5" y="99" font-family="Arial Black, sans-serif" font-size="12" font-weight="900" fill="white" text-anchor="middle">VISA</text>
              
              <!-- Validity and cardholder area -->
              <text x="230" y="25" font-family="Arial, sans-serif" font-size="6" fill="#dbeafe" letter-spacing="0.5px">VALID THRU</text>
              <text x="230" y="35" font-family="OCR A Extended, Courier New, monospace" font-size="9" font-weight="bold" fill="white">12/28</text>
              
              <text x="20" y="155" font-family="Arial, sans-serif" font-size="7" fill="#dbeafe" letter-spacing="0.5px">CARDHOLDER NAME</text>
              <text x="20" y="167" font-family="Arial, sans-serif" font-size="9" font-weight="600" fill="white" letter-spacing="1px">PRIME CUSTOMER</text>
              
              <!-- Contactless symbol -->
              <g transform="translate(255, 125)">
                <path d="M8 2C11.866 2 15 5.134 15 9s-3.134 7-7 7-7-3.134-7-7 3.134-7 7-7zm0 2c-2.761 0-5 2.239-5 5s2.239 5 5 5 5-2.239 5-5-2.239-5-5-5z" fill="white" opacity="0.7"/>
                <path d="M8 5c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z" fill="white" opacity="0.7"/>
              </g>
              
              <!-- SBI branding element -->
              <circle cx="260" cy="50" r="12" fill="none" stroke="#f97316" stroke-width="0.8" opacity="0.4"/>
              <text x="260" y="53" font-family="Arial, sans-serif" font-size="4" fill="#f97316" text-anchor="middle" opacity="0.6">SBI</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>SBI Card Prime</h4>
            <p>Comprehensive rewards and lifestyle benefits</p>
            <a href="/sbi-card-prime" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #228B22, #32CD32) !important;
}

.related-card-image-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
}

.related-card-image svg {
    cursor: pointer;
    transition: transform 0.3s ease;
}

.related-card:hover .related-card-image svg {
    transform: scale(1.05);
}
</style>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for HDFC Times Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through HDFC Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹12,000 for salaried individuals and ₹2,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the entertainment benefits?</h3>
        <div class="faq-answer">
          <p>Enjoy exclusive Times benefits including movie tickets, dining discounts, entertainment rewards, and special offers on lifestyle purchases.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹750 plus taxes with waiver available on annual spends as per the terms mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
