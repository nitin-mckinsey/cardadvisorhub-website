<?php 
get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">HDFC Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Diners Club Black Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'HDFC Diners Club Black Credit Card';
    $card_description = 'HDFC Diners Club Black Credit Card offers premium travel benefits, unlimited airport lounge access, dining privileges. ₹10,000 annual fee. Ultimate luxury credit card 2025.';
    $annual_fee = '₹10,000';
    $welcome_bonus = '10,000 Points';
    $min_income = '₹25,00,000';
    $card_network = 'Diners Club';
    $bank_name = 'HDFC Bank';
    $rating = '4.6';
    $review_count = '1543';
    
    echo '<title>' . $card_name . ' - Ultimate Luxury Travel Card Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="HDFC Diners Club Black, luxury credit card, travel benefits, airport lounge, dining privileges, premium card">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Ultimate Luxury Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    // Robust card image logic
    $card_slug = 'hdfc-diners-club';
    $uploads = home_url('/wp-content/uploads/card-images/');
    $img_exts = array('jpg', 'png', 'webp');
    $card_img = '';
    foreach ($img_exts as $ext) {
        $try = ABSPATH . 'wp-content/uploads/card-images/' . $card_slug . '.' . $ext;
        if (file_exists($try)) {
            $card_img = $uploads . '/' . $card_slug . '.' . $ext;
            break;
        }
    }
    if (!$card_img) {
        $card_img = $uploads . '/default-card.jpg';
    }
    echo '<meta property="og:image" content="' . $card_img . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - Luxury Travel">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . $card_img . '">';
    
    // JSON-LD Schema
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $card_name,
        'description' => $card_description,
        'category' => 'Credit Card',
        'image' => $card_img,
        'brand' => array(
            '@type' => 'Brand',
            'name' => $bank_name
        ),
        'offers' => array(
            '@type' => 'Offer',
            'description' => 'Premium luxury credit card with exclusive travel benefits',
            'url' => get_permalink() . '#apply',
            'price' => '10000',
            'priceCurrency' => 'INR',
            'availability' => 'https://schema.org/InStock'
        ),
        'aggregateRating' => array(
            '@type' => 'AggregateRating',
            'ratingValue' => $rating,
            'reviewCount' => $review_count,
            'bestRating' => '5',
            'worstRating' => '1'
        )
    );
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
}, 5);

get_header(); ?>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="<?php echo esc_url($card_img); ?>" alt="HDFC Diners Club Credit Card" class="hero-card-image" onerror="this.onerror=null;this.src='<?php echo $uploads . '/default-card.jpg'; ?>';">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.5/5 (2,341 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>HDFC Diners Club Credit Card</h1>
          <p class="card-tagline">Premium travel and lifestyle benefits</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹2,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">2X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Lounge Access</span>
              <span class="highlight-value">6 Visits/Year</span>
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
          <h3>Airport Lounge Access</h3>
          <p>6 complimentary domestic airport lounge visits per year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏆</div>
          <h3>2X Reward Points</h3>
          <p>Earn 2 reward points per ₹150 spent on all purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Personal Accident Cover</h3>
          <p>₹25 lakh personal accident insurance coverage</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>Global Acceptance</h3>
          <p>Accepted at millions of Diners Club locations worldwide</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Gift</h3>
          <p>1,000 bonus reward points on first purchase</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💎</div>
          <h3>Lifestyle Benefits</h3>
          <p>Exclusive dining, shopping and entertainment offers</p>
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
              <td>2 points per ₹150</td>
              <td>1.33% value</td>
            </tr>
            <tr>
              <td>Travel Bookings</td>
              <td>2 points per ₹150</td>
              <td>1.33% value</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>2 points per ₹150</td>
              <td>1.33% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 3 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 1,000 points</p>
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
          <span class="fee-value">₹2,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹2,500</span>
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
            <li>Age: 21-60 years</li>
            <li>Minimum Income: ₹50,000 per month (Salaried)</li>
            <li>Minimum Income: ₹6,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (preferred)</li>
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
            <li>Airport lounge access included</li>
            <li>Good reward rate on all spends</li>
            <li>High personal accident cover</li>
            <li>Global acceptance</li>
            <li>Premium lifestyle benefits</li>
            <li>HDFC bank privileges</li>
            <li>Travel insurance benefits</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹2,500)</li>
            <li>High income requirements</li>
            <li>Limited lounge visits (6/year)</li>
            <li>Joining fee applicable</li>
            <li>High fee waiver threshold</li>
            <li>Points validity only 3 years</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for HDFC Diners Club Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Frequent travelers</li>
            <li>✅ High-income professionals</li>
            <li>✅ HDFC customers</li>
            <li>✅ Premium lifestyle seekers</li>
            <li>✅ Business executives</li>
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
          <a href="/hdfc-regalia" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="regaliaGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#8B0000;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#A52A2A;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#regaliaGradient)" stroke="#CCC" stroke-width="1"/>
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
          </a>
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
                <linearGradient id="axisMagnusGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#4B0082;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#8A2BE2;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#9400D3;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#axisMagnusGradient2)" stroke="#CCC" stroke-width="1"/>
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
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="sapphiroAuthMainGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#1e3a8a;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#3b82f6;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#60a5fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#93c5fd;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroIciciLogoGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ff6b35;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f7931e;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroChipRealistic" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                  <stop offset="30%" style="stop-color:#ffed4e;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#f9ca24;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#f0932b;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroVisaGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#1a1f71;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2e3192;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sapphiroTextGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#f8f9fa;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#e9ecef;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="sapphiroSapphireGem" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" style="stop-color:#4169e1;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#0000cd;stop-opacity:0.8" />
                  <stop offset="100%" style="stop-color:#191970;stop-opacity:0.6" />
                </radialGradient>
              </defs>
              
              <!-- Main card background -->
              <rect width="300" height="190" rx="12" fill="url(#sapphiroAuthMainGrad)" stroke="#2c3e50" stroke-width="0.5"/>
              
              <!-- Sapphire pattern overlay -->
              <rect width="300" height="190" rx="12" fill="url(#sapphiroSapphireGem)" opacity="0.1"/>
              
              <!-- ICICI Bank logo area -->
              <rect x="18" y="15" width="72" height="32" rx="4" fill="url(#sapphiroIciciLogoGrad)" stroke="#ffffff" stroke-width="0.3" opacity="0.95"/>
              <text x="54" y="27" font-family="Arial Black, sans-serif" font-size="9" font-weight="900" fill="white" text-anchor="middle">ICICI</text>
              <text x="54" y="38" font-family="Arial, sans-serif" font-size="6" font-weight="600" fill="white" text-anchor="middle">BANK</text>
              
              <!-- SAPPHIRO branding with gem effect -->
              <text x="20" y="65" font-family="Arial Black, sans-serif" font-size="14" font-weight="900" fill="url(#sapphiroTextGrad)" letter-spacing="1.5px">SAPPHIRO</text>
              <text x="20" y="78" font-family="Arial, sans-serif" font-size="8" font-weight="500" fill="#dbeafe" opacity="0.9">Credit Card</text>
              
              <!-- Sapphire gem icon -->
              <g transform="translate(145, 52)">
                <polygon points="8,2 14,6 12,12 4,12 2,6" fill="url(#sapphiroSapphireGem)" stroke="white" stroke-width="0.5"/>
                <polygon points="6,6 10,6 9,9 5,9" fill="white" opacity="0.3"/>
              </g>
              
              <!-- Realistic chip with metallic effect -->
              <rect x="20" y="85" width="28" height="22" rx="3" fill="url(#sapphiroChipRealistic)" stroke="#d4af37" stroke-width="0.3"/>
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
              <rect x="230" y="85" width="45" height="22" rx="3" fill="url(#sapphiroVisaGrad)"/>
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
              <line x1="20" y1="180" x2="280" y2="180" stroke="url(#sapphiroTextGrad)" stroke-width="0.5" opacity="0.6"/>
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
</main>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for HDFC Diners Club Black Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through HDFC Bank website or visit the nearest branch. This is a premium invitation-only card with high income requirements.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹25,00,000 per annum. This is a super-premium card designed for high-net-worth individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the premium benefits?</h3>
        <div class="faq-answer">
          <p>Unlimited airport lounge access worldwide, complimentary golf privileges, concierge services, and exclusive dining benefits.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Yes, the annual fee is ₹10,000 plus applicable taxes. Fee waiver conditions apply based on annual spends.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FFD700, #FFA500) !important;
}
</style>

<?php get_footer(); ?>
