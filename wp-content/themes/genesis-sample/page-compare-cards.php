<?php
/**
 * Template Name: Credit Card Comparison
 * 
 * Complete inline version - All assets embedded for maximum compatibility
 */

// Enhanced SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>Compare Credit Cards India 2025 | Best Credit Card Comparison Tool | CardAdvisorHub</title>' . "\n";
    echo '<meta name="description" content="Compare 50+ best credit cards in India 2025. Detailed analysis of HDFC, SBI, ICICI, Axis Bank cards with rewards, fees, benefits. Find perfect credit card with our advanced comparison tool. Apply online instantly.">' . "\n";
    echo '<meta name="keywords" content="compare credit cards India, best credit cards 2025, credit card comparison tool, HDFC vs SBI vs ICICI cards, cashback credit cards, travel credit cards, rewards comparison">' . "\n";
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
    echo '<link rel="canonical" href="' . get_permalink() . '">' . "\n";
    
    // Favicon and Icon Links for Better Search Visibility
    echo '<link rel="icon" type="image/x-icon" href="' . home_url() . '/favicon.ico">' . "\n";
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . home_url() . '/favicon.ico">' . "\n";
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . home_url() . '/favicon.ico">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . home_url() . '/favicon.ico">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="16x16" href="' . home_url() . '/favicon.ico">' . "\n";
    echo '<meta name="msapplication-TileImage" content="' . home_url() . '/favicon.ico">' . "\n";
    echo '<meta name="theme-color" content="#007bff">' . "\n";
    
    // Open Graph Tags
    echo '<meta property="og:title" content="Compare Credit Cards India 2025 | Best Credit Card Comparison Tool">' . "\n";
    echo '<meta property="og:description" content="Compare 50+ best credit cards in India 2025. Find the perfect credit card with our advanced comparison tool.">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . get_permalink() . '">' . "\n";
    echo '<meta property="og:site_name" content="CardAdvisorHub">' . "\n";
    echo '<meta property="og:locale" content="en_IN">' . "\n";
    
    // Structured Data with Site Logo
    $structured_data = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Compare Credit Cards India 2025',
        'description' => 'Compare 50+ best credit cards in India 2025. Advanced comparison tool for HDFC, SBI, ICICI, Axis Bank cards.',
        'url' => get_permalink(),
        'inLanguage' => 'en-IN',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'CardAdvisorHub',
            'url' => home_url(),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => home_url() . '/favicon.ico',
                'width' => 32,
                'height' => 32
            ]
        ],
        'mainEntity' => [
            '@type' => 'WebApplication',
            'name' => 'Credit Card Comparison Tool',
            'description' => 'Advanced credit card comparison tool for India',
            'applicationCategory' => 'FinanceApplication',
            'operatingSystem' => 'All'
        ]
    ];
    
    echo '<script type="application/ld+json">' . json_encode($structured_data, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
});

get_header(); ?>

<style>
/* Complete Credit Card Comparison Page Styles - All Inline */
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: #333;
    margin: 0;
    padding: 0;
    background: #f8f9fa;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

/* Page Header */
.page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    text-align: center;
    margin-bottom: 2rem;
}

.page-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.2;
}

.page-header p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 800px;
    margin: 0 auto;
}

/* Breadcrumb */
.breadcrumb-nav {
    background: white;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
}

.breadcrumb {
    list-style: none;
    display: flex;
    gap: 10px;
    margin: 0;
    padding: 0;
    font-size: 0.9rem;
}

.breadcrumb li a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb li a:hover {
    text-decoration: underline;
}

/* Filters Section */
.filters {
    background: white;
    padding: 2rem 0;
    margin-bottom: 2rem;
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.filters h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 2rem;
    font-size: 1.8rem;
}

.filter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.filter-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #555;
}

.filter-group select {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.filter-group select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

.filter-group input {
    width: 100%;
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    background: white;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.filter-group input:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

/* Search Container */
.search-container {
    position: relative;
}

.search-suggestions {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 1px solid #e9ecef;
    border-top: none;
    border-radius: 0 0 8px 8px;
    max-height: 200px;
    overflow-y: auto;
    z-index: 100;
    display: none;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.search-suggestion {
    padding: 0.75rem;
    cursor: pointer;
    border-bottom: 1px solid #f1f3f4;
    transition: background-color 0.2s ease;
}

.search-suggestion:hover {
    background: #f8f9fa;
}

.search-suggestion:last-child {
    border-bottom: none;
}

.search-suggestion-name {
    font-weight: 600;
    color: #2c3e50;
    font-size: 0.9rem;
}

.search-suggestion-bank {
    font-size: 0.8rem;
    color: #666;
    margin-top: 2px;
}

/* Comparison Table */
.comparison-section {
    margin-bottom: 3rem;
}

.comparison-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.comparison-table th {
    background: #2c3e50;
    color: white;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    position: sticky;
    top: 0;
    z-index: 10;
}

.comparison-table td {
    padding: 1rem;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
}

.comparison-table tr:hover {
    background: #f8f9fa;
}

/* Card Selection Checkbox */
.card-select {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    cursor: pointer;
    transform: scale(1.2);
}

/* Card Info */
.card-info h3 {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
    font-size: 1.1rem;
}

.card-info p {
    margin: 0;
    color: #666;
    font-size: 0.9rem;
}

/* Rating Stars */
.rating {
    color: #ffc107;
    font-size: 1.1rem;
}

/* Apply Button */
.apply-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.apply-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    color: white;
    text-decoration: none;
}

/* Floating Comparison Bar */
.floating-comparison-bar {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
    padding: 15px 25px;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(0, 123, 255, 0.3);
    z-index: 1000;
    display: none;
    align-items: center;
    gap: 15px;
    font-weight: 600;
    animation: slideUp 0.3s ease;
}

@keyframes slideUp {
    from {
        transform: translateX(-50%) translateY(100px);
        opacity: 0;
    }
    to {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }
}

.comparison-count {
    background: rgba(255,255,255,0.2);
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
}

.compare-now-btn {
    background: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.compare-now-btn:hover {
    background: #218838;
    transform: scale(1.05);
    color: white;
    text-decoration: none;
}

.clear-selection-btn {
    background: #dc3545;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.85rem;
    transition: all 0.3s ease;
}

.clear-selection-btn:hover {
    background: #c82333;
    transform: scale(1.05);
}

/* SEO Content */
.seo-content {
    background: white;
    padding: 3rem 2rem;
    border-radius: 12px;
    margin: 3rem 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.seo-content h2 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 2rem;
    font-size: 2rem;
}

.seo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.seo-section h3 {
    color: #007bff;
    margin-bottom: 1rem;
    font-size: 1.3rem;
}

.seo-section ul {
    list-style: none;
    padding: 0;
}

.seo-section li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f1f3f4;
    position: relative;
    padding-left: 20px;
}

.seo-section li:before {
    content: "→";
    color: #007bff;
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .page-header h1 {
        font-size: 2rem;
    }
    
    .page-header p {
        font-size: 1rem;
    }
    
    .filter-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .comparison-table {
        font-size: 0.9rem;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 0.75rem 0.5rem;
    }
    
    .floating-comparison-bar {
        bottom: 10px;
        left: 10px;
        right: 10px;
        transform: none;
        border-radius: 25px;
        padding: 12px 20px;
        flex-direction: column;
        gap: 10px;
    }
    
    .seo-content {
        padding: 2rem 1rem;
    }
    
    .seo-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

@media (max-width: 480px) {
    .page-header {
        padding: 2rem 0;
    }
    
    .page-header h1 {
        font-size: 1.8rem;
    }
    
    .container {
        padding: 0 0.5rem;
    }
    
    .filters {
        padding: 1.5rem 1rem;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 0.5rem 0.25rem;
        font-size: 0.8rem;
    }
}

/* Print Styles */
@media print {
    .floating-comparison-bar,
    .filters,
    .breadcrumb-nav {
        display: none;
    }
    
    .comparison-table {
        box-shadow: none;
        border: 1px solid #ddd;
    }
    
    .page-header {
        background: white;
        color: #333;
        box-shadow: none;
        border-bottom: 2px solid #333;
    }
}
</style>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url(); ?>">Home</a></li>
      <li style="color: #6c757d;">›</li>
      <li style="color: #6c757d;">Compare Credit Cards</li>
    </ol>
  </div>
</nav>

<main class="compare-page">
  <section class="page-header">
    <div class="container">
      <h1>Compare Credit Cards India 2025</h1>
      <p>Find the perfect credit card with our advanced comparison tool. Compare fees, rewards, benefits and apply online instantly.</p>
    </div>
  </section>

  <section class="filters">
    <div class="container">
      <h2>Filter Credit Cards by Your Preferences</h2>
      <div class="filter-grid">
        <div class="filter-group">
          <label for="bank-filter">Bank</label>
          <select id="bank-filter">
            <option value="">All Banks</option>
            <option value="hdfc">HDFC Bank</option>
            <option value="sbi">SBI Card</option>
            <option value="icici">ICICI Bank</option>
            <option value="axis">Axis Bank</option>
            <option value="kotak">Kotak Bank</option>
            <option value="yes">YES Bank</option>
            <option value="indusind">IndusInd Bank</option>
            <option value="sc">Standard Chartered</option>
            <option value="bob">Bank of Baroda</option>
            <option value="rbl">RBL Bank</option>
            <option value="pnb">Punjab National Bank</option>
            <option value="amex">American Express</option>
            <option value="citi">Citi Bank</option>
            <option value="federal">Federal Bank</option>
            <option value="idbi">IDBI Bank</option>
            <option value="union">Union Bank</option>
            <option value="au">AU Small Finance Bank</option>
            <option value="idfc">IDFC FIRST Bank</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="category-filter">Card Category</label>
          <select id="category-filter">
            <option value="">All Categories</option>
            <option value="cashback">Cashback Cards</option>
            <option value="travel">Travel Cards</option>
            <option value="premium">Premium Cards</option>
            <option value="entry">Entry Level</option>
            <option value="business">Business Cards</option>
            <option value="fuel">Fuel Cards</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="fee-filter">Annual Fee</label>
          <select id="fee-filter">
            <option value="">Any Fee</option>
            <option value="free">Lifetime Free</option>
            <option value="low">Under ₹1,000</option>
            <option value="mid">₹1,000 - ₹5,000</option>
            <option value="high">Above ₹5,000</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="income-filter">Minimum Income</label>
          <select id="income-filter">
            <option value="">Any Income</option>
            <option value="low">Under ₹25,000/month</option>
            <option value="mid">₹25,000 - ₹50,000/month</option>
            <option value="high">Above ₹50,000/month</option>
            <option value="premium">Above ₹1,00,000/month</option>
          </select>
        </div>
        <div class="filter-group">
          <label for="card-search">Search Credit Card</label>
          <div class="search-container">
            <input type="text" id="card-search" placeholder="Type card name to search..." autocomplete="off">
            <div id="search-suggestions" class="search-suggestions"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="comparison-section">
    <div class="container">
      <table class="comparison-table" id="comparison-table">
        <thead>
          <tr>
            <th>Select</th>
            <th>Credit Card</th>
            <th>Annual Fee</th>
            <th>Welcome Bonus</th>
            <th>Reward Rate</th>
            <th>Best For</th>
            <th>Rating</th>
            <th>Apply</th>
          </tr>
        </thead>
        <tbody>
          <!-- HDFC Bank Cards -->
          <tr data-bank="hdfc" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-regalia"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Bank Regalia</h3>
                <p>Premium travel & lifestyle benefits</p>
              </div>
            </td>
            <td>₹2,500</td>
            <td>₹2,500 vouchers</td>
            <td>4X points on dining & travel</td>
            <td>Travel enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
          
          <tr data-bank="hdfc" data-category="cashback" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-millennia"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Millennia</h3>
                <p>High cashback on online shopping</p>
              </div>
            </td>
            <td>₹1,000</td>
            <td>₹1,000 cashback</td>
            <td>5% on online shopping</td>
            <td>Online shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
          
          <tr data-bank="hdfc" data-category="entry" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-moneyback"></td>
            <td>
              <div class="card-info">
                <h3>HDFC MoneyBack+</h3>
                <p>Entry-level card with good rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 voucher</td>
            <td>5X points on online shopping</td>
            <td>Students & first-time users</td>
            <td><span class="rating">★★★☆☆</span> 3.9</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- SBI Cards -->
          <tr data-bank="sbi" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-cashback"></td>
            <td>
              <div class="card-info">
                <h3>SBI Cashback Credit Card</h3>
                <p>Unlimited 5% cashback on online shopping</p>
              </div>
            </td>
            <td>₹999</td>
            <td>₹2,000 bonus points</td>
            <td>5% cashback online</td>
            <td>Heavy online shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-cashback-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
          
          <tr data-bank="sbi" data-category="entry" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-simply-save"></td>
            <td>
              <div class="card-info">
                <h3>SBI Simply Save</h3>
                <p>No annual fee with fuel benefits</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 voucher</td>
            <td>5X points on fuel & grocery</td>
            <td>Fuel & grocery shopping</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-simply-save-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- ICICI Bank Cards -->
          <tr data-bank="icici" data-category="cashback" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="icici-amazon-pay"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Amazon Pay Credit Card</h3>
                <p>Lifetime free with Amazon benefits</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹2,000 Amazon Pay balance</td>
            <td>5% on Amazon purchases</td>
            <td>Amazon shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.4</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card/amazon-pay-credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
          
          <tr data-bank="icici" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="icici-sapphiro"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Bank Sapphiro</h3>
                <p>Ultra-premium travel benefits</p>
              </div>
            </td>
            <td>₹12,500</td>
            <td>₹12,500 points</td>
            <td>3X points on all spends</td>
            <td>Luxury lifestyle</td>
            <td><span class="rating">★★★★★</span> 4.6</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Axis Bank Cards -->
          <tr data-bank="axis" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="axis-magnus"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Magnus</h3>
                <p>Premium travel and lifestyle card</p>
              </div>
            </td>
            <td>₹12,500</td>
            <td>25,000 EDGE points</td>
            <td>25X points on travel & dining</td>
            <td>Premium travelers</td>
            <td><span class="rating">★★★★★</span> 4.8</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
          
          <tr data-bank="axis" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="axis-ace"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank ACE</h3>
                <p>High cashback on utility bills</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 cashback</td>
            <td>5% on utility bill payments</td>
            <td>Bill payments</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Kotak Bank Cards -->
          <tr data-bank="kotak" data-category="entry" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="kotak-811"></td>
            <td>
              <div class="card-info">
                <h3>Kotak 811 #Dream Different</h3>
                <p>Digital-first credit card</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 voucher</td>
            <td>4X points on online shopping</td>
            <td>Digital natives</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.kotak.com/en/personal-banking/cards/credit-cards.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- YES Bank Cards -->
          <tr data-bank="yes" data-category="premium" data-fee="high" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="yes-first-exclusive"></td>
            <td>
              <div class="card-info">
                <h3>YES FIRST Exclusive</h3>
                <p>Premium benefits and rewards</p>
              </div>
            </td>
            <td>₹2,999</td>
            <td>₹2,999 vouchers</td>
            <td>6X points on dining & fuel</td>
            <td>Dining enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.yesbank.in/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More HDFC Bank Cards -->
          <tr data-bank="hdfc" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-diners-black"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Diners Club Black</h3>
                <p>Ultra-premium luxury card</p>
              </div>
            </td>
            <td>₹10,000</td>
            <td>₹10,000 vouchers</td>
            <td>5X points on all spends</td>
            <td>Luxury lifestyle</td>
            <td><span class="rating">★★★★★</span> 4.7</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-times-titanium"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Times Titanium</h3>
                <p>Entertainment and lifestyle benefits</p>
              </div>
            </td>
            <td>₹4,000</td>
            <td>₹4,000 vouchers</td>
            <td>9X points on weekends</td>
            <td>Entertainment lovers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="business" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-business-moneyback"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Business MoneyBack</h3>
                <p>Business expenses rewards</p>
              </div>
            </td>
            <td>₹1,000</td>
            <td>₹1,000 cashback</td>
            <td>5X points on business spends</td>
            <td>Business owners</td>
            <td><span class="rating">★★★★☆</span> 3.9</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More SBI Cards -->
          <tr data-bank="sbi" data-category="premium" data-fee="high" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-card-prime"></td>
            <td>
              <div class="card-info">
                <h3>SBI Card PRIME</h3>
                <p>Premium lifestyle benefits</p>
              </div>
            </td>
            <td>₹2,999</td>
            <td>₹3,000 vouchers</td>
            <td>5X points on dining & movies</td>
            <td>Lifestyle enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/lifestyle/sbi-card-prime.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="sbi" data-category="travel" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-elite"></td>
            <td>
              <div class="card-info">
                <h3>SBI Card ELITE</h3>
                <p>Travel and lifestyle rewards</p>
              </div>
            </td>
            <td>₹4,999</td>
            <td>₹5,000 vouchers</td>
            <td>5X points on travel & dining</td>
            <td>Travel enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/travel/sbi-card-elite.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More ICICI Bank Cards -->
          <tr data-bank="icici" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="icici-emeralde"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Bank Emeralde</h3>
                <p>Private banking premium card</p>
              </div>
            </td>
            <td>₹12,000</td>
            <td>₹12,000 points</td>
            <td>4X points on all spends</td>
            <td>Ultra high net worth</td>
            <td><span class="rating">★★★★★</span> 4.8</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="icici-platinum"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Bank Platinum</h3>
                <p>Everyday rewards and benefits</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 voucher</td>
            <td>2X points on all spends</td>
            <td>Regular spenders</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="entry" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="icici-student"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Bank Student</h3>
                <p>First credit card for students</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹500 voucher</td>
            <td>2X points on online shopping</td>
            <td>Students</td>
            <td><span class="rating">★★★☆☆</span> 3.6</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card/student-credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Axis Bank Cards -->
          <tr data-bank="axis" data-category="premium" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="axis-privilege"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Privilege</h3>
                <p>Premium rewards and benefits</p>
              </div>
            </td>
            <td>₹1,500</td>
            <td>₹1,500 vouchers</td>
            <td>10X points on dining</td>
            <td>Dining enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="travel" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="axis-myzone"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank MY ZONE</h3>
                <p>Lifestyle and entertainment card</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 voucher</td>
            <td>4X points on fuel & movies</td>
            <td>Young professionals</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="cashback" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="flipkart-axis"></td>
            <td>
              <div class="card-info">
                <h3>Flipkart Axis Bank Credit Card</h3>
                <p>Flipkart shopping rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 Flipkart voucher</td>
            <td>5% cashback on Flipkart</td>
            <td>Flipkart shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card/flipkart-axis-bank-credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Kotak Bank Cards -->
          <tr data-bank="kotak" data-category="premium" data-fee="high" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="kotak-platinum"></td>
            <td>
              <div class="card-info">
                <h3>Kotak Platinum Credit Card</h3>
                <p>Premium lifestyle benefits</p>
              </div>
            </td>
            <td>₹1,999</td>
            <td>₹2,000 vouchers</td>
            <td>4X points on dining & fuel</td>
            <td>Premium lifestyle</td>
            <td><span class="rating">★★★★☆</span> 3.9</td>
            <td><a href="https://www.kotak.com/en/personal-banking/cards/credit-cards.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- IndusInd Bank Cards -->
          <tr data-bank="indusind" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="indusind-legend"></td>
            <td>
              <div class="card-info">
                <h3>IndusInd Legend Credit Card</h3>
                <p>Ultra-premium metal card</p>
              </div>
            </td>
            <td>₹15,000</td>
            <td>₹15,000 points</td>
            <td>Unlimited points on all spends</td>
            <td>Ultra high net worth</td>
            <td><span class="rating">★★★★★</span> 4.9</td>
            <td><a href="https://www.indusind.com/in/en/personal/cards/credit-card.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="indusind" data-category="premium" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="indusind-pinnacle"></td>
            <td>
              <div class="card-info">
                <h3>IndusInd Pinnacle Credit Card</h3>
                <p>Premium rewards and benefits</p>
              </div>
            </td>
            <td>₹3,000</td>
            <td>₹3,000 points</td>
            <td>4X points on dining & travel</td>
            <td>Premium lifestyle</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.indusind.com/in/en/personal/cards/credit-card.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Standard Chartered Cards -->
          <tr data-bank="sc" data-category="premium" data-fee="high" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="sc-manhattan"></td>
            <td>
              <div class="card-info">
                <h3>Standard Chartered Manhattan</h3>
                <p>Premium travel and lifestyle</p>
              </div>
            </td>
            <td>₹1,999</td>
            <td>₹2,000 vouchers</td>
            <td>5X points on dining & fuel</td>
            <td>Travel enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.sc.com/in/credit-cards/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Bank of Baroda Cards -->
          <tr data-bank="bob" data-category="premium" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="bob-premier"></td>
            <td>
              <div class="card-info">
                <h3>Bank of Baroda Premier</h3>
                <p>Premium rewards program</p>
              </div>
            </td>
            <td>₹1,499</td>
            <td>₹1,500 points</td>
            <td>4X points on fuel & dining</td>
            <td>Regular premium users</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.bankofbaroda.in/personal-banking/cards/credit-cards" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- RBL Bank Cards -->
          <tr data-bank="rbl" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="rbl-shoprite"></td>
            <td>
              <div class="card-info">
                <h3>RBL ShopRite Credit Card</h3>
                <p>Shopping rewards specialist</p>
              </div>
            </td>
            <td>₹750</td>
            <td>₹750 voucher</td>
            <td>5% cashback on shopping</td>
            <td>Shopping enthusiasts</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.rblbank.com/cards/credit-cards" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="rbl" data-category="cashback" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="rbl-moneyback"></td>
            <td>
              <div class="card-info">
                <h3>RBL Bank MoneyBack+</h3>
                <p>High cashback on categories</p>
              </div>
            </td>
            <td>₹999</td>
            <td>₹1,000 cashback</td>
            <td>5% cashback on utilities</td>
            <td>Bill payment users</td>
            <td><span class="rating">★★★★☆</span> 3.9</td>
            <td><a href="https://www.rblbank.com/cards/credit-cards" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- PNB Cards -->
          <tr data-bank="pnb" data-category="premium" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="pnb-select"></td>
            <td>
              <div class="card-info">
                <h3>PNB Select Credit Card</h3>
                <p>Premium banking benefits</p>
              </div>
            </td>
            <td>₹1,200</td>
            <td>₹1,200 points</td>
            <td>3X points on all spends</td>
            <td>Banking customers</td>
            <td><span class="rating">★★★☆☆</span> 3.6</td>
            <td><a href="https://www.pnbcards.com/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- American Express Cards -->
          <tr data-bank="amex" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="amex-gold"></td>
            <td>
              <div class="card-info">
                <h3>American Express Gold Card</h3>
                <p>Premium rewards and travel</p>
              </div>
            </td>
            <td>₹4,500</td>
            <td>₹4,500 points</td>
            <td>4X points on dining & travel</td>
            <td>Premium travelers</td>
            <td><span class="rating">★★★★★</span> 4.5</td>
            <td><a href="https://www.americanexpress.com/in/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="amex" data-category="cashback" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="amex-smartearn"></td>
            <td>
              <div class="card-info">
                <h3>American Express SmartEarn</h3>
                <p>Cashback focused card</p>
              </div>
            </td>
            <td>₹1,499</td>
            <td>₹1,500 cashback</td>
            <td>5% cashback on utilities</td>
            <td>Cashback seekers</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://www.americanexpress.com/in/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Citi Bank Cards -->
          <tr data-bank="citi" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="citi-rewards"></td>
            <td>
              <div class="card-info">
                <h3>Citi Rewards Credit Card</h3>
                <p>Travel and lifestyle rewards</p>
              </div>
            </td>
            <td>₹1,000</td>
            <td>₹1,000 points</td>
            <td>4X points on dining & fuel</td>
            <td>Travel and dining</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.online.citibank.co.in/products-services/credit-cards/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="citi" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="citi-prestige"></td>
            <td>
              <div class="card-info">
                <h3>Citi Prestige Credit Card</h3>
                <p>Ultra-premium travel benefits</p>
              </div>
            </td>
            <td>₹20,000</td>
            <td>₹20,000 points</td>
            <td>5X points on all spends</td>
            <td>Ultra luxury lifestyle</td>
            <td><span class="rating">★★★★★</span> 4.8</td>
            <td><a href="https://www.online.citibank.co.in/products-services/credit-cards/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More HDFC Bank Cards -->
          <tr data-bank="hdfc" data-category="cashback" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-freedom"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Freedom Credit Card</h3>
                <p>No annual fee with rewards</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹500 voucher</td>
            <td>2X points on all spends</td>
            <td>First-time users</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-infinia"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Bank Infinia</h3>
                <p>Super premium metal card</p>
              </div>
            </td>
            <td>₹12,500</td>
            <td>₹12,500 points</td>
            <td>5X points on all spends</td>
            <td>Ultra high net worth</td>
            <td><span class="rating">★★★★★</span> 4.9</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="cashback" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-swiggy"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Swiggy Credit Card</h3>
                <p>Food delivery and dining rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 Swiggy voucher</td>
            <td>10% cashback on Swiggy</td>
            <td>Food enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-jet-airways"></td>
            <td>
              <div class="card-info">
                <h3>HDFC JetPrivilege</h3>
                <p>Airline miles and travel benefits</p>
              </div>
            </td>
            <td>₹2,500</td>
            <td>2,500 JPMiles</td>
            <td>4X miles on Jet Airways</td>
            <td>Frequent flyers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More SBI Cards -->
          <tr data-bank="sbi" data-category="travel" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-aurum"></td>
            <td>
              <div class="card-info">
                <h3>SBI Card AURUM</h3>
                <p>Premium travel and lifestyle</p>
              </div>
            </td>
            <td>₹4,999</td>
            <td>₹5,000 vouchers</td>
            <td>5X points on travel & dining</td>
            <td>Premium travelers</td>
            <td><span class="rating">★★★★☆</span> 4.4</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/travel/sbi-card-aurum.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="sbi" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-bpcl"></td>
            <td>
              <div class="card-info">
                <h3>SBI BPCL Credit Card</h3>
                <p>Fuel rewards specialist</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 fuel voucher</td>
            <td>25X points on BPCL fuel</td>
            <td>Heavy fuel users</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/fuel/sbi-bpcl-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="sbi" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-iocl"></td>
            <td>
              <div class="card-info">
                <h3>SBI IOCL Credit Card</h3>
                <p>Indian Oil fuel rewards</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 fuel voucher</td>
            <td>25X points on IOCL fuel</td>
            <td>Indian Oil users</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/fuel/sbi-iocl-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="sbi" data-category="travel" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-air-india"></td>
            <td>
              <div class="card-info">
                <h3>SBI Air India Signature</h3>
                <p>Air India miles and benefits</p>
              </div>
            </td>
            <td>₹4,999</td>
            <td>5,000 Air India miles</td>
            <td>4X miles on Air India bookings</td>
            <td>Air India frequent flyers</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/travel/sbi-air-india-signature-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More ICICI Bank Cards -->
          <tr data-bank="icici" data-category="cashback" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="icici-coral"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Bank Coral Credit Card</h3>
                <p>Contactless rewards card</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 voucher</td>
            <td>2X points on dining & movies</td>
            <td>Entertainment lovers</td>
            <td><span class="rating">★★★☆☆</span> 3.9</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="travel" data-fee="high" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="icici-air-india"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Air India Credit Card</h3>
                <p>Air India co-branded benefits</p>
              </div>
            </td>
            <td>₹4,999</td>
            <td>5,000 Air India miles</td>
            <td>4X miles on Air India</td>
            <td>Air India travelers</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="premium" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="icici-make-my-trip"></td>
            <td>
              <div class="card-info">
                <h3>ICICI MakeMyTrip Credit Card</h3>
                <p>Travel booking rewards</p>
              </div>
            </td>
            <td>₹1,999</td>
            <td>₹2,000 MMT voucher</td>
            <td>4X points on MakeMyTrip</td>
            <td>Online travel bookers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Axis Bank Cards -->
          <tr data-bank="axis" data-category="entry" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="axis-neo"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Neo Credit Card</h3>
                <p>Entry-level rewards card</p>
              </div>
            </td>
            <td>₹250</td>
            <td>₹250 voucher</td>
            <td>2X points on all spends</td>
            <td>Students & new users</td>
            <td><span class="rating">★★★☆☆</span> 3.6</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="travel" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="axis-reserve"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Reserve Credit Card</h3>
                <p>Ultra-premium travel card</p>
              </div>
            </td>
            <td>₹50,000</td>
            <td>₹50,000 EDGE points</td>
            <td>25X points on all spends</td>
            <td>Ultra luxury segment</td>
            <td><span class="rating">★★★★★</span> 4.9</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="axis-vistara"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Vistara Credit Card</h3>
                <p>Vistara airline benefits</p>
              </div>
            </td>
            <td>₹3,500</td>
            <td>3,500 CV Points</td>
            <td>6X CV Points on Vistara</td>
            <td>Vistara frequent flyers</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="axis-iocl"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank IOCL Credit Card</h3>
                <p>Indian Oil fuel rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 fuel voucher</td>
            <td>4% cashback on IOCL fuel</td>
            <td>Indian Oil customers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Kotak Bank Cards -->
          <tr data-bank="kotak" data-category="travel" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="kotak-white"></td>
            <td>
              <div class="card-info">
                <h3>Kotak White Credit Card</h3>
                <p>Premium lifestyle benefits</p>
              </div>
            </td>
            <td>₹999</td>
            <td>₹1,000 vouchers</td>
            <td>4X points on dining & fuel</td>
            <td>Lifestyle enthusiasts</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.kotak.com/en/personal-banking/cards/credit-cards.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="kotak" data-category="cashback" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="kotak-myntra"></td>
            <td>
              <div class="card-info">
                <h3>Kotak Myntra Credit Card</h3>
                <p>Fashion shopping rewards</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹500 Myntra voucher</td>
            <td>5% cashback on Myntra</td>
            <td>Fashion shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.kotak.com/en/personal-banking/cards/credit-cards.html" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Federal Bank Cards -->
          <tr data-bank="federal" data-category="premium" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="federal-signet"></td>
            <td>
              <div class="card-info">
                <h3>Federal Bank Signet Credit Card</h3>
                <p>Premium rewards program</p>
              </div>
            </td>
            <td>₹1,999</td>
            <td>₹2,000 points</td>
            <td>4X points on dining & fuel</td>
            <td>Premium users</td>
            <td><span class="rating">★★★☆☆</span> 3.9</td>
            <td><a href="https://www.federalbank.co.in/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="federal" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="federal-primo"></td>
            <td>
              <div class="card-info">
                <h3>Federal Bank Primo Credit Card</h3>
                <p>Entry-level rewards card</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 voucher</td>
            <td>2X points on all spends</td>
            <td>First-time users</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.federalbank.co.in/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- IDBI Bank Cards -->
          <tr data-bank="idbi" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="idbi-iocl"></td>
            <td>
              <div class="card-info">
                <h3>IDBI IOCL Credit Card</h3>
                <p>Indian Oil fuel benefits</p>
              </div>
            </td>
            <td>₹199</td>
            <td>₹200 fuel voucher</td>
            <td>2.5% cashback on IOCL</td>
            <td>Budget fuel users</td>
            <td><span class="rating">★★★☆☆</span> 3.5</td>
            <td><a href="https://www.idbibank.in/credit-cards.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="idbi" data-category="premium" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="idbi-insignia"></td>
            <td>
              <div class="card-info">
                <h3>IDBI Insignia Credit Card</h3>
                <p>Premium lifestyle card</p>
              </div>
            </td>
            <td>₹1,500</td>
            <td>₹1,500 points</td>
            <td>3X points on all spends</td>
            <td>Premium banking</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.idbibank.in/credit-cards.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Union Bank Cards -->
          <tr data-bank="union" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="union-iocl"></td>
            <td>
              <div class="card-info">
                <h3>Union Bank IOCL Credit Card</h3>
                <p>Fuel savings card</p>
              </div>
            </td>
            <td>₹300</td>
            <td>₹300 fuel voucher</td>
            <td>2% cashback on IOCL</td>
            <td>Budget conscious users</td>
            <td><span class="rating">★★★☆☆</span> 3.4</td>
            <td><a href="https://www.unionbankofindia.co.in/english/credit-card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- AU Small Finance Bank Cards -->
          <tr data-bank="au" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="au-altura"></td>
            <td>
              <div class="card-info">
                <h3>AU Bank Altura Credit Card</h3>
                <p>High cashback rewards</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 cashback</td>
            <td>5% cashback on utilities</td>
            <td>Utility bill payments</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.aubank.in/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="au" data-category="premium" data-fee="mid" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="au-zenith"></td>
            <td>
              <div class="card-info">
                <h3>AU Bank Zenith Credit Card</h3>
                <p>Premium travel benefits</p>
              </div>
            </td>
            <td>₹1,999</td>
            <td>₹2,000 points</td>
            <td>4X points on travel & dining</td>
            <td>Travel enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://www.aubank.in/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- IDFC First Bank Cards -->
          <tr data-bank="idfc" data-category="entry" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="idfc-first-classic"></td>
            <td>
              <div class="card-info">
                <h3>IDFC FIRST Classic Credit Card</h3>
                <p>Lifetime free with benefits</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹500 voucher</td>
            <td>6X points on fuel & groceries</td>
            <td>Everyday spenders</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.idfcfirstbank.com/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="idfc" data-category="premium" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="idfc-first-select"></td>
            <td>
              <div class="card-info">
                <h3>IDFC FIRST Select Credit Card</h3>
                <p>Premium benefits package</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹2,000 welcome points</td>
            <td>10X points on dining</td>
            <td>Dining enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.idfcfirstbank.com/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="idfc" data-category="travel" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="idfc-first-wealth"></td>
            <td>
              <div class="card-info">
                <h3>IDFC FIRST Wealth Credit Card</h3>
                <p>Ultra-premium wealth card</p>
              </div>
            </td>
            <td>₹10,000</td>
            <td>₹10,000 points</td>
            <td>12X points on travel</td>
            <td>High net worth individuals</td>
            <td><span class="rating">★★★★★</span> 4.6</td>
            <td><a href="https://www.idfcfirstbank.com/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More American Express Cards -->
          <tr data-bank="amex" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="amex-platinum-travel"></td>
            <td>
              <div class="card-info">
                <h3>American Express Platinum Travel</h3>
                <p>Ultra-premium travel benefits</p>
              </div>
            </td>
            <td>₹60,000</td>
            <td>₹30,000 points</td>
            <td>5X points on flights & hotels</td>
            <td>Luxury travelers</td>
            <td><span class="rating">★★★★★</span> 4.8</td>
            <td><a href="https://www.americanexpress.com/in/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="amex" data-category="travel" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="amex-mrcc"></td>
            <td>
              <div class="card-info">
                <h3>American Express MRCC</h3>
                <p>Membership Rewards Credit Card</p>
              </div>
            </td>
            <td>₹1,500</td>
            <td>₹1,500 points</td>
            <td>4X points on dining</td>
            <td>Rewards collectors</td>
            <td><span class="rating">★★★★☆</span> 4.3</td>
            <td><a href="https://www.americanexpress.com/in/" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More ICICI Bank Co-branded Cards -->
          <tr data-bank="icici" data-category="cashback" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="icici-hpcl"></td>
            <td>
              <div class="card-info">
                <h3>ICICI HPCL Super Saver</h3>
                <p>Fuel savings specialist</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 fuel voucher</td>
            <td>5% cashback on HPCL</td>
            <td>HPCL fuel users</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="icici-payback"></td>
            <td>
              <div class="card-info">
                <h3>ICICI PAYBACK Credit Card</h3>
                <p>Multi-brand rewards program</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 PAYBACK points</td>
            <td>4X PAYBACK points</td>
            <td>Multi-brand shoppers</td>
            <td><span class="rating">★★★☆☆</span> 3.8</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Axis Bank Co-branded Cards -->
          <tr data-bank="axis" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="axis-freecharge"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Freecharge Plus</h3>
                <p>Digital payments rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 Freecharge cashback</td>
            <td>5% cashback on mobile recharges</td>
            <td>Digital payment users</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="cashback" data-fee="low" data-income="mid">
            <td><input type="checkbox" class="card-select" data-card-id="axis-ola"></td>
            <td>
              <div class="card-info">
                <h3>Axis Bank Ola Credit Card</h3>
                <p>Ride and travel rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 Ola Money</td>
            <td>7% cashback on Ola rides</td>
            <td>Frequent commuters</td>
            <td><span class="rating">★★★★☆</span> 3.9</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More SBI Co-branded Cards -->
          <tr data-bank="sbi" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-ola"></td>
            <td>
              <div class="card-info">
                <h3>SBI Card Ola</h3>
                <p>Mobility and fuel rewards</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 Ola Money</td>
            <td>5% cashback on Ola & fuel</td>
            <td>Urban commuters</td>
            <td><span class="rating">★★★★☆</span> 3.9</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/co-brand/sbi-card-ola.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="sbi" data-category="cashback" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-flipkart"></td>
            <td>
              <div class="card-info">
                <h3>SBI Flipkart Credit Card</h3>
                <p>E-commerce shopping rewards</p>
              </div>
            </td>
            <td>₹499</td>
            <td>₹500 Flipkart voucher</td>
            <td>5% cashback on Flipkart</td>
            <td>Flipkart shoppers</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/co-brand/sbi-flipkart-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- HDFC Bank Co-branded Cards -->
          <tr data-bank="hdfc" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-iocl"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Indian Oil Credit Card</h3>
                <p>Indian Oil fuel benefits</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 fuel voucher</td>
            <td>5% cashback on IOCL fuel</td>
            <td>Indian Oil customers</td>
            <td><span class="rating">★★★★☆</span> 4.0</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="hdfc" data-category="fuel" data-fee="low" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-bhp"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Bharat Petroleum Credit Card</h3>
                <p>BPCL fuel rewards</p>
              </div>
            </td>
            <td>₹500</td>
            <td>₹500 fuel voucher</td>
            <td>7X points on BPCL fuel</td>
            <td>BPCL customers</td>
            <td><span class="rating">★★★★☆</span> 4.1</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- More Premium Cards -->
          <tr data-bank="hdfc" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="hdfc-dcb"></td>
            <td>
              <div class="card-info">
                <h3>HDFC Diners Club Black Metal</h3>
                <p>Ultra-luxury metal card</p>
              </div>
            </td>
            <td>₹10,000</td>
            <td>₹10,000 points</td>
            <td>5X points on all spends</td>
            <td>Ultra high net worth</td>
            <td><span class="rating">★★★★★</span> 4.8</td>
            <td><a href="https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="axis" data-category="premium" data-fee="high" data-income="premium">
            <td><input type="checkbox" class="card-select" data-card-id="axis-burgundy"></td>
            <td>
              <div class="card-info">
                <h3>Axis Burgundy Private Credit Card</h3>
                <p>Private banking exclusive</p>
              </div>
            </td>
            <td>₹11,000</td>
            <td>₹11,000 EDGE points</td>
            <td>25X points on travel</td>
            <td>Private banking clients</td>
            <td><span class="rating">★★★★★</span> 4.7</td>
            <td><a href="https://www.axisbank.com/retail/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <!-- Specialty Cards -->
          <tr data-bank="sbi" data-category="entry" data-fee="free" data-income="low">
            <td><input type="checkbox" class="card-select" data-card-id="sbi-student-plus"></td>
            <td>
              <div class="card-info">
                <h3>SBI Student Plus Credit Card</h3>
                <p>Student-friendly features</p>
              </div>
            </td>
            <td>Lifetime Free</td>
            <td>₹250 voucher</td>
            <td>5X points on online shopping</td>
            <td>Students & first-time users</td>
            <td><span class="rating">★★★☆☆</span> 3.7</td>
            <td><a href="https://www.sbicard.com/en/personal/credit-cards/lifestyle/sbi-student-plus-advantage-credit-card.page" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>

          <tr data-bank="icici" data-category="premium" data-fee="mid" data-income="high">
            <td><input type="checkbox" class="card-select" data-card-id="icici-manchester-united"></td>
            <td>
              <div class="card-info">
                <h3>ICICI Manchester United Credit Card</h3>
                <p>Football fan exclusive benefits</p>
              </div>
            </td>
            <td>₹3,999</td>
            <td>₹4,000 points</td>
            <td>5X points on dining & entertainment</td>
            <td>Football enthusiasts</td>
            <td><span class="rating">★★★★☆</span> 4.2</td>
            <td><a href="https://www.icicibank.com/personal-banking/cards/credit-card" target="_blank" class="apply-btn">Apply Now</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- SEO Content Section -->
  <section class="seo-content">
    <div class="container">
      <h2>Complete Guide to Credit Card Comparison in India 2025</h2>
      
      <div class="seo-grid">
        <div class="seo-section">
          <h3>🔍 How to Compare Credit Cards</h3>
          <ul>
            <li>Compare annual fees and joining fees</li>
            <li>Analyze reward rates for your spending categories</li>
            <li>Check welcome bonus offers and their value</li>
            <li>Review benefits like lounge access and insurance</li>
            <li>Verify minimum income requirements</li>
            <li>Consider acceptance network (Visa/Mastercard)</li>
          </ul>
        </div>
        
        <div class="seo-section">
          <h3>💳 Best Credit Cards by Category</h3>
          <ul>
            <li>Cashback: SBI Cashback, HDFC Millennia</li>
            <li>Travel: HDFC Regalia, Axis Magnus</li>
            <li>Premium: ICICI Sapphiro, IndusInd Legend</li>
            <li>Entry-level: ICICI Amazon Pay, Kotak 811</li>
            <li>Business: HDFC Business MoneyBack</li>
            <li>Fuel: Indian Oil HDFC, BPCL SBI Card</li>
          </ul>
        </div>
        
        <div class="seo-section">
          <h3>🏦 Top Banks for Credit Cards</h3>
          <ul>
            <li>HDFC Bank: Best for travel and premium benefits</li>
            <li>SBI Card: Excellent cashback options</li>
            <li>ICICI Bank: Technology-driven features</li>
            <li>Axis Bank: High reward rates</li>
            <li>Kotak Bank: Digital-first approach</li>
            <li>YES Bank: Good dining benefits</li>
          </ul>
        </div>
        
        <div class="seo-section">
          <h3>⚡ Quick Comparison Tips</h3>
          <ul>
            <li>Calculate total cost including annual fees</li>
            <li>Match card benefits to your spending habits</li>
            <li>Check reward point redemption options</li>
            <li>Verify eligibility criteria before applying</li>
            <li>Read terms and conditions carefully</li>
            <li>Consider upgrade path to premium cards</li>
          </ul>
        </div>
      </div>
      
      <div style="background: #f8f9fa !important; padding: 2rem !important; border-radius: 8px !important; margin-top: 2rem !important; text-align: center !important;">
        <h3 style="color: #2c3e50 !important; margin-bottom: 1rem !important; font-weight: 600 !important;">Ready to Find Your Perfect Credit Card?</h3>
        <p style="color: #666 !important; margin-bottom: 1.5rem !important; line-height: 1.6 !important;">Use our comparison tool above to select cards and compare them side by side. Get detailed analysis of fees, rewards, and benefits to make the best choice for your financial needs.</p>
        <div style="display: flex !important; justify-content: center !important; gap: 1rem !important; flex-wrap: wrap !important;">
          <span style="background: #007bff !important; color: white !important; padding: 0.5rem 1rem !important; border-radius: 20px !important; font-size: 0.9rem !important;">✅ Updated Daily</span>
          <span style="background: #28a745 !important; color: white !important; padding: 0.5rem 1rem !important; border-radius: 20px !important; font-size: 0.9rem !important;">🔒 Secure Applications</span>
          <span style="background: #ffc107 !important; color: #333 !important; padding: 0.5rem 1rem !important; border-radius: 20px !important; font-size: 0.9rem !important;">🏆 RBI Approved Banks</span>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
// Complete Credit Card Comparison Functionality - All Inline
(function() {
    'use strict';
    
    let selectedCards = [];
    let floatingBar = null;
    
    // Create floating comparison bar
    function createFloatingBar() {
        if (floatingBar) return floatingBar;
        
        floatingBar = document.createElement('div');
        floatingBar.className = 'floating-comparison-bar';
        floatingBar.style.display = 'none';
        
        floatingBar.innerHTML = `
            <div class="comparison-count">
                <span id="selected-count">0</span> cards selected
            </div>
            <a href="#" id="compare-now-btn" class="compare-now-btn">Compare Now</a>
            <button id="clear-selection-btn" class="clear-selection-btn">Clear All</button>
        `;
        
        document.body.appendChild(floatingBar);
        
        // Add event listeners
        document.getElementById('compare-now-btn').addEventListener('click', function(e) {
            e.preventDefault();
            compareSelectedCards();
        });
        
        document.getElementById('clear-selection-btn').addEventListener('click', function(e) {
            e.preventDefault();
            clearAllSelections();
        });
        
        return floatingBar;
    }
    
    // Handle checkbox changes
    function handleCheckboxChange(checkbox) {
        const cardId = checkbox.getAttribute('data-card-id');
        
        if (checkbox.checked) {
            if (selectedCards.length < 4 && !selectedCards.includes(cardId)) {
                selectedCards.push(cardId);
            } else if (selectedCards.length >= 4) {
                checkbox.checked = false;
                alert('You can compare maximum 4 cards at a time.');
                return;
            }
        } else {
            const index = selectedCards.indexOf(cardId);
            if (index > -1) {
                selectedCards.splice(index, 1);
            }
        }
        
        updateFloatingBar();
    }
    
    // Update floating bar visibility and content
    function updateFloatingBar() {
        const bar = createFloatingBar();
        const countElement = document.getElementById('selected-count');
        
        if (selectedCards.length > 0) {
            bar.style.display = 'flex';
            countElement.textContent = selectedCards.length;
        } else {
            bar.style.display = 'none';
        }
        
        console.log('Selected cards:', selectedCards);
    }
    
    // Compare selected cards function
    function compareSelectedCards() {
        if (selectedCards.length < 2) {
            alert('Please select at least 2 cards to compare.');
            return;
        }
        
        console.log('Comparing cards:', selectedCards);
        
        // Create the comparison URL
        const cardList = selectedCards.join(',');
        const compareUrl = `${window.location.origin}/compare-cards-detail/?compare=${cardList}`;
        
        console.log('Redirecting to:', compareUrl);
        
        // Redirect to comparison page
        window.location.href = compareUrl;
    }
    
    // Clear all selections
    function clearAllSelections() {
        selectedCards = [];
        
        // Uncheck all checkboxes
        const checkboxes = document.querySelectorAll('.card-select');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        
        updateFloatingBar();
    }
    
    // Filter functionality
    function initializeFilters() {
        const bankFilter = document.getElementById('bank-filter');
        const categoryFilter = document.getElementById('category-filter');
        const feeFilter = document.getElementById('fee-filter');
        const incomeFilter = document.getElementById('income-filter');
        const cardSearch = document.getElementById('card-search');
        
        // Card search functionality
        function initializeCardSearch() {
            const searchInput = document.getElementById('card-search');
            const suggestionsContainer = document.getElementById('search-suggestions');
            
            // Get all card names for search
            const allCards = [];
            const cardRows = document.querySelectorAll('#comparison-table tbody tr');
            
            cardRows.forEach(row => {
                const cardNameElement = row.querySelector('.card-info h3');
                const bankName = row.getAttribute('data-bank');
                if (cardNameElement) {
                    allCards.push({
                        name: cardNameElement.textContent.trim(),
                        bank: bankName,
                        row: row
                    });
                }
            });
            
            function showSuggestions(query) {
                if (!query.trim()) {
                    suggestionsContainer.style.display = 'none';
                    return;
                }
                
                const filteredCards = allCards.filter(card => 
                    card.name.toLowerCase().includes(query.toLowerCase()) ||
                    card.bank.toLowerCase().includes(query.toLowerCase())
                ).slice(0, 8); // Show max 8 suggestions
                
                if (filteredCards.length === 0) {
                    suggestionsContainer.style.display = 'none';
                    return;
                }
                
                suggestionsContainer.innerHTML = '';
                filteredCards.forEach(card => {
                    const suggestion = document.createElement('div');
                    suggestion.className = 'search-suggestion';
                    suggestion.innerHTML = `
                        <div class="search-suggestion-name">${card.name}</div>
                        <div class="search-suggestion-bank">${getBankFullName(card.bank)}</div>
                    `;
                    
                    suggestion.addEventListener('click', () => {
                        searchInput.value = card.name;
                        suggestionsContainer.style.display = 'none';
                        
                        // Scroll to the card row
                        card.row.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        
                        // Highlight the row temporarily
                        card.row.style.backgroundColor = '#fff3cd';
                        setTimeout(() => {
                            card.row.style.backgroundColor = '';
                        }, 2000);
                    });
                    
                    suggestionsContainer.appendChild(suggestion);
                });
                
                suggestionsContainer.style.display = 'block';
            }
            
            function getBankFullName(bankCode) {
                const bankNames = {
                    'hdfc': 'HDFC Bank',
                    'sbi': 'SBI Card',
                    'icici': 'ICICI Bank',
                    'axis': 'Axis Bank',
                    'kotak': 'Kotak Bank',
                    'yes': 'YES Bank',
                    'indusind': 'IndusInd Bank',
                    'sc': 'Standard Chartered',
                    'bob': 'Bank of Baroda',
                    'rbl': 'RBL Bank',
                    'pnb': 'Punjab National Bank',
                    'amex': 'American Express',
                    'citi': 'Citi Bank',
                    'federal': 'Federal Bank',
                    'idbi': 'IDBI Bank',
                    'union': 'Union Bank',
                    'au': 'AU Small Finance Bank',
                    'idfc': 'IDFC FIRST Bank'
                };
                return bankNames[bankCode] || bankCode;
            }
            
            searchInput.addEventListener('input', (e) => {
                showSuggestions(e.target.value);
            });
            
            // Hide suggestions when clicking outside
            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
                    suggestionsContainer.style.display = 'none';
                }
            });
        }
        
        function applyFilters() {
            const bank = bankFilter.value;
            const category = categoryFilter.value;
            const fee = feeFilter.value;
            const income = incomeFilter.value;
            const searchQuery = cardSearch.value.toLowerCase().trim();
            
            const rows = document.querySelectorAll('#comparison-table tbody tr');
            
            rows.forEach(row => {
                let showRow = true;
                
                // Bank filter
                if (bank && row.getAttribute('data-bank') !== bank) showRow = false;
                
                // Category filter
                if (category && row.getAttribute('data-category') !== category) showRow = false;
                
                // Fee filter
                if (fee && row.getAttribute('data-fee') !== fee) showRow = false;
                
                // Income filter
                if (income && row.getAttribute('data-income') !== income) showRow = false;
                
                // Search filter
                if (searchQuery) {
                    const cardName = row.querySelector('.card-info h3').textContent.toLowerCase();
                    const bankName = row.getAttribute('data-bank').toLowerCase();
                    if (!cardName.includes(searchQuery) && !bankName.includes(searchQuery)) {
                        showRow = false;
                    }
                }
                
                row.style.display = showRow ? '' : 'none';
            });
        }
        
        // Add event listeners to filters
        [bankFilter, categoryFilter, feeFilter, incomeFilter].forEach(filter => {
            filter.addEventListener('change', applyFilters);
        });
        
        // Add search functionality
        cardSearch.addEventListener('input', applyFilters);
        
        // Initialize card search suggestions
        initializeCardSearch();
    }
    
    // Initialize everything when DOM is loaded
    function initialize() {
        console.log('🚀 Initializing credit card comparison tool...');
        
        // Initialize filters
        initializeFilters();
        
        // Add event listeners to all checkboxes
        const checkboxes = document.querySelectorAll('.card-select');
        console.log(`📋 Found ${checkboxes.length} card checkboxes`);
        
        checkboxes.forEach((checkbox, index) => {
            const cardId = checkbox.getAttribute('data-card-id');
            console.log(`✅ Setting up checkbox ${index + 1}: ${cardId}`);
            
            checkbox.addEventListener('change', function() {
                console.log(`🔄 Checkbox changed: ${cardId}, checked: ${this.checked}`);
                handleCheckboxChange(this);
            });
        });
        
        // Create floating bar (but keep it hidden initially)
        createFloatingBar();
        
        console.log('✅ Credit card comparison tool initialized successfully');
        
        // Test function to verify everything is working
        setTimeout(() => {
            console.log('🔍 Running compatibility check...');
            console.log('Checkboxes found:', document.querySelectorAll('.card-select').length);
            console.log('Floating bar created:', document.querySelector('.floating-comparison-bar') ? 'Yes' : 'No');
        }, 1000);
    }
    
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initialize);
    } else {
        initialize();
    }
    
    // Make functions globally available for debugging
    window.compareSelectedCards = compareSelectedCards;
    window.clearAllSelections = clearAllSelections;
    
})();
</script>

<?php get_footer(); ?>
