<?php 
get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">American Express</a></li>
      <li class="breadcrumb-item active" aria-current="page">SmartEarn Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'American Express SmartEarn Credit Card';
    $card_description = 'American Express SmartEarn Credit Card offers 5% cashback on categories, 1.5% on all purchases. â‚¹1,500 annual fee. Premium Amex benefits with global acceptance and rewards.';
    $annual_fee = 'â‚¹1,500';
    $welcome_bonus = 'â‚¹3,000 Rewards';
    $min_income = 'â‚¹4,50,000';
    $card_network = 'American Express';
    $bank_name = 'American Express';
    $rating = '4.1';
    $review_count = '1876';
    
    echo '<title>' . $card_name . ' - 5% Cashback Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="American Express SmartEarn, AMEX credit card, cashback credit card, premium rewards, global acceptance, dining benefits">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Best AMEX Cashback Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/amex-smartearn-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - AMEX Cashback">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/amex-smartearn-card.jpg">';
    
    // JSON-LD Schema
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $card_name,
        'description' => $card_description,
        'category' => 'Credit Card',
        'image' => get_template_directory_uri() . '/images/amex-smartearn-card.jpg',
        'brand' => array(
            '@type' => 'Brand',
            'name' => $bank_name
        ),
        'offers' => array(
            '@type' => 'Offer',
            'description' => 'Premium American Express benefits with cashback rewards',
            'url' => get_permalink() . '#apply',
            'price' => '1500',
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
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="amexSmartEarnGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#B22222;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#DC143C;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#FF6347;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#amexSmartEarnGradient)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="100" height="50" viewBox="0 0 120 60" fill="none">
                <rect width="120" height="60" fill="#FFFFFF" rx="5"/>
                <text x="60" y="25" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="#B22222" text-anchor="middle">AMERICAN</text>
                <text x="60" y="45" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="#B22222" text-anchor="middle">EXPRESS</text>
              </svg>
              <text x="20" y="90" font-family="Arial, sans-serif" font-size="16" font-weight="bold" fill="white">SMARTEARN</text>
              <text x="20" y="110" font-family="Arial, sans-serif" font-size="12" fill="#F5F5F5">Credit Card</text>
              <svg x="200" y="20" width="60" height="40" viewBox="0 0 60 40" fill="none">
                <rect width="60" height="40" fill="#004080" rx="3"/>
                <text x="30" y="25" font-family="Arial, sans-serif" font-size="10" font-weight="bold" fill="white" text-anchor="middle">AMEX</text>
              </svg>
              <g transform="translate(20, 155)">
                <rect width="18" height="12" fill="#444"/>
                <rect x="24" width="18" height="12" fill="#444"/>
                <rect x="48" width="18" height="12" fill="#444"/>
                <rect x="72" width="18" height="12" fill="#444"/>
              </g>
              <text x="230" y="35" font-family="Arial, sans-serif" font-size="10" fill="#CCC">VALID THRU</text>
              <text x="230" y="50" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">12/28</text>
              <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">3782 8224 6310 7890</text>
              <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                <rect width="40" height="30" fill="#444" rx="3"/>
                <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
              </svg>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">â˜…â˜…â˜…â˜…â˜†</div>
            <span class="rating-text">4.1/5 (1,876 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>American Express SmartEarn Credit Card</h1>
          <p class="card-tagline">Smart rewards for everyday spending</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">â‚¹1,500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Cashback Rate</span>
              <span class="highlight-value">5% Categories</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">â‚¹2,000</span>
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
          <div class="feature-icon">ðŸ›’</div>
          <h3>5% on Online Shopping</h3>
          <p>5% cashback on online shopping and digital purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸª</div>
          <h3>5% on Utilities</h3>
          <p>5% cashback on utility bill payments and telecom</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸŽ</div>
          <h3>Welcome Bonus</h3>
          <p>â‚¹2,000 cashback on spending â‚¹20,000 in first 90 days</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ“±</div>
          <h3>SmartEarn App</h3>
          <p>Easy cashback tracking and redemption via mobile app</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ”</div>
          <h3>Fraud Protection</h3>
          <p>World-class security and fraud monitoring</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸŒ</div>
          <h3>Global Acceptance</h3>
          <p>Accepted worldwide with premium Amex benefits</p>
        </div>
      </div>
    </div>
  </section>

  <section class="rewards-breakdown">
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
              <td>5%</td>
              <td>â‚¹1,000</td>
            </tr>
            <tr>
              <td>Utilities & Telecom</td>
              <td>5%</td>
              <td>â‚¹500</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>1.5%</td>
              <td>â‚¹200</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1%</td>
              <td>Unlimited</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Cashback Credit:</strong> Statement credit within 90 days</p>
          <p><strong>Minimum Cashback:</strong> â‚¹500 per redemption</p>
          <p><strong>Maximum Cashback:</strong> â‚¹1,700 per month</p>
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
          <span class="fee-value">â‚¹1,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">â‚¹1,500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On â‚¹1,80,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.5% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min â‚¹300)</span>
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
            <li>Age: 18+ years</li>
            <li>Minimum Income: â‚¹20,000 per month (Salaried)</li>
            <li>Minimum Income: â‚¹2,50,000 per annum (Self-employed)</li>
            <li>Credit Score: 700+ (preferred)</li>
            <li>Previous credit history</li>
            <li>Valid Indian address</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (PAN mandatory)</li>
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
          <h3>âœ… Pros</h3>
          <ul>
            <li>High online shopping cashback (5%)</li>
            <li>Good utility rewards (5%)</li>
            <li>Attractive welcome bonus</li>
            <li>Global acceptance</li>
            <li>Premium Amex benefits</li>
            <li>No minimum redemption hassle</li>
            <li>SmartEarn app convenience</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>âŒ Cons</h3>
          <ul>
            <li>High annual fee waiver threshold</li>
            <li>Monthly cashback caps</li>
            <li>No airport lounge access</li>
            <li>Limited acceptance vs Visa/MC</li>
            <li>High minimum redemption (â‚¹500)</li>
            <li>No dining bonuses</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for American Express SmartEarn Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>âœ… Online shopping enthusiasts</li>
            <li>âœ… Digital payment users</li>
            <li>âœ… Utility bill payers</li>
            <li>âœ… International travelers</li>
            <li>âœ… Amex benefit seekers</li>
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
                <option value="20000-30000">â‚¹20,000 - â‚¹30,000</option>
                <option value="30000-50000">â‚¹30,000 - â‚¹50,000</option>
                <option value="50000-75000">â‚¹50,000 - â‚¹75,000</option>
                <option value="75000+">Above â‚¹75,000</option>
              </select>
            </div>
            <div class="form-group">
              <label>
                <input type="checkbox"> I frequently shop online
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="related-cards">
    <div class="container">
      <h2>Similar Premium Cashback Cards</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="hdfcRegalia2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#8B0000;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#A52A2A;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#DC143C;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#hdfcRegalia2)" stroke="#CCC" stroke-width="1"/>
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
          <div class="related-card-content">
            <h4>HDFC Regalia Credit Card</h4>
            <p>Premium rewards with lifestyle benefits and travel perks</p>
            <a href="/hdfc-regalia" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="iciciSapphiro" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#FF6B35;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#F7931E;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#FFD700;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#iciciSapphiro)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#FF6B35"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">ICICI</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">SAPPHIRO</text>
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
          <div class="related-card-content">
            <h4>ICICI Sapphiro Credit Card</h4>
            <p>Premium lifestyle card with accelerated rewards</p>
            <a href="/icici-sapphiro" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="sbiCashback2" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#02498B;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#35699B;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#6889AB;stop-opacity:1" />
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#sbiCashback2)" stroke="#CCC" stroke-width="1"/>
              <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                <rect width="100" height="50" fill="#014A8C"/>
                <text x="50" y="20" font-family="Arial, sans-serif" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SBI</text>
                <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">CARD</text>
              </svg>
              <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">CASHBACK</text>
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
              <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5369 6845 7976 4355</text>
              <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                <rect width="40" height="30" fill="#444" rx="3"/>
                <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
              </svg>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>SBI Cashback Credit Card</h4>
            <p>India's highest cashback card with online benefits</p>
            <a href="/sbi-cashback" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #B22222, #DC143C) !important;
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

.related-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-card:hover .related-card-image img {
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
        <h3 class="faq-question">How to apply for American Express SmartEarn Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through American Express India website or visit authorized agents. The application process is digital and fast.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹4,50,000 per annum for salaried individuals and ₹6,00,000 for self-employed.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits?</h3>
        <div class="faq-answer">
          <p>Get 5% cashback on top 2 categories each month and 1.5% on all other purchases with quarterly caps.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is American Express widely accepted in India?</h3>
        <div class="faq-answer">
          <p>Yes, American Express is widely accepted at most merchants, online platforms, and international locations with growing acceptance network.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>


