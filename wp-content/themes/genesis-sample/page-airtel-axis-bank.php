<?php 
get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Airtel Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'Airtel Axis Bank Credit Card';
    $card_description = 'Airtel Axis Bank Credit Card offers 25% cashback on Airtel bills, 10% on digital transactions, 1% on other spends. â‚¹500 annual fee. Best telecom credit card 2025 with unlimited cashback.';
    $annual_fee = 'â‚¹500';
    $welcome_bonus = 'â‚¹2,000 Cashback';
    $min_income = 'â‚¹3,00,000';
    $card_network = 'Mastercard';
    $bank_name = 'Axis Bank';
    $rating = '4.2';
    $review_count = '4123';
    
    echo '<title>' . $card_name . ' - 25% Airtel Cashback Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="Airtel Axis Bank Credit Card, Airtel cashback, telecom credit card, digital transaction cashback, Axis Bank, mobile bill payments">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Best Telecom Cashback Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/airtel-axis-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - Telecom Cashback">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/airtel-axis-card.jpg">';
    
    // JSON-LD Schema
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => $card_name,
        'description' => $card_description,
        'category' => 'Credit Card',
        'image' => get_template_directory_uri() . '/images/airtel-axis-card.jpg',
        'brand' => array(
            '@type' => 'Brand',
            'name' => $bank_name
        ),
        'offers' => array(
            '@type' => 'Offer',
            'description' => 'Airtel co-branded credit card with telecom benefits',
            'url' => get_permalink() . '#apply',
            'price' => str_replace('₹', '', $annual_fee),
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
        'url' => get_permalink()
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
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23FF6347'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='%23FFF'%3EAirtel%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='%23FFF'%3EAxis Bank%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='%23FFF'%3Eâ€¢â€¢â€¢â€¢ â€¢â€¢â€¢â€¢ â€¢â€¢â€¢â€¢ 9012%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3ECARDMEMBER NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='%23FFF'%3E12/28%3C/text%3E%3C/svg%3E" alt="Airtel Axis Bank Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">â˜…â˜…â˜…â˜…â˜†</div>
            <span class="rating-text">4.2/5 (4,123 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Airtel Axis Bank Credit Card</h1>
          <p class="card-tagline">Telecom and digital rewards specialist</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">â‚¹500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">25% Cashback</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Special Benefit</span>
              <span class="highlight-value">Airtel Bills</span>
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
          <div class="feature-icon">ðŸ“±</div>
          <h3>25% Cashback on Airtel</h3>
          <p>25% cashback on all Airtel postpaid, prepaid and DTH bills</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ›’</div>
          <h3>10% on Digital Spends</h3>
          <p>10% cashback on Swiggy, Zomato, Ola, Uber and more</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸª</div>
          <h3>5% on Utilities</h3>
          <p>5% cashback on utility bill payments</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸŽµ</div>
          <h3>Free Airtel Thanks</h3>
          <p>Complimentary Airtel Thanks membership worth â‚¹499</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ”’</div>
          <h3>Secure Transactions</h3>
          <p>Advanced fraud protection and real-time alerts</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ’¸</div>
          <h3>No Hidden Charges</h3>
          <p>Transparent fee structure with no surprise charges</p>
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
              <td>Airtel Bills (Postpaid/DTH/Fiber)</td>
              <td>25%</td>
              <td>â‚¹300</td>
            </tr>
            <tr>
              <td>Digital Platforms (Swiggy, Zomato, Ola, Uber)</td>
              <td>10%</td>
              <td>â‚¹150</td>
            </tr>
            <tr>
              <td>Utility Bills</td>
              <td>5%</td>
              <td>â‚¹250</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1%</td>
              <td>â‚¹100</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Cashback Credit:</strong> Monthly statement credit</p>
          <p><strong>Minimum Cashback:</strong> â‚¹99 per month</p>
          <p><strong>Maximum Cashback:</strong> â‚¹800 per month</p>
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
          <span class="fee-value">â‚¹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">â‚¹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On â‚¹50,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.6% per month</span>
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
            <li>Age: 18-65 years</li>
            <li>Minimum Income: â‚¹15,000 per month (Salaried)</li>
            <li>Minimum Income: â‚¹2,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 600+ (acceptable)</li>
            <li>Airtel customer preferred</li>
            <li>KYC compliance required</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (2 months)</li>
            <li>Airtel connection details (if applicable)</li>
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
            <li>Excellent Airtel bill cashback (25%)</li>
            <li>Great digital platform rewards (10%)</li>
            <li>Very low annual fee (â‚¹500)</li>
            <li>Easy fee waiver threshold</li>
            <li>Free Airtel Thanks membership</li>
            <li>No minimum cashback threshold</li>
            <li>Simple cashback structure</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>âŒ Cons</h3>
          <ul>
            <li>Low cashback caps</li>
            <li>Limited to specific categories</li>
            <li>No airport lounge access</li>
            <li>No travel benefits</li>
            <li>Basic insurance coverage</li>
            <li>Airtel-centric benefits</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Airtel Axis Bank Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>âœ… Airtel customers</li>
            <li>âœ… Digital platform users</li>
            <li>âœ… Utility bill payers</li>
            <li>âœ… Budget-conscious users</li>
            <li>âœ… Cashback seekers</li>
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
                <option value="15000-25000">â‚¹15,000 - â‚¹25,000</option>
                <option value="25000-40000">â‚¹25,000 - â‚¹40,000</option>
                <option value="40000-60000">â‚¹40,000 - â‚¹60,000</option>
                <option value="60000+">Above â‚¹60,000</option>
              </select>
            </div>
            <div class="form-group">
              <label>
                <input type="checkbox"> I am an Airtel customer
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
      <h2>Similar Telecom & Cashback Cards</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="cardGrad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#2E3440"/><stop offset="50%" stop-color="#3B4252"/><stop offset="100%" stop-color="#434C5E"/></linearGradient></defs><rect width="300" height="190" rx="15" fill="url(#cardGrad)"/><rect x="20" y="20" width="80" height="40" fill="#5E81AC"/><text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">BANK</text><text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">CARD</text><text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">Credit Card</text><rect x="25" y="125" width="35" height="20" rx="3" fill="#D08770"/><circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/><circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/><text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">**** **** **** ****</text><text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text><text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text></svg>
          </div>
          <div class="related-card-content">
            <h4>Axis ACE Credit Card</h4>
            <p>5% cashback on bill payments and food delivery</p>
            <a href="/axis-ace" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="cardGrad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#2E3440"/><stop offset="50%" stop-color="#3B4252"/><stop offset="100%" stop-color="#434C5E"/></linearGradient></defs><rect width="300" height="190" rx="15" fill="url(#cardGrad)"/><rect x="20" y="20" width="80" height="40" fill="#5E81AC"/><text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">BANK</text><text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">CARD</text><text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">Credit Card</text><rect x="25" y="125" width="35" height="20" rx="3" fill="#D08770"/><circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/><circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/><text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">**** **** **** ****</text><text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text><text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text></svg>
          </div>
          <div class="related-card-content">
            <h4>SBI Cashback Credit Card</h4>
            <p>5% cashback on online purchases and mobile bills</p>
            <a href="/sbi-cashback" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="cardGrad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#2E3440"/><stop offset="50%" stop-color="#3B4252"/><stop offset="100%" stop-color="#434C5E"/></linearGradient></defs><rect width="300" height="190" rx="15" fill="url(#cardGrad)"/><rect x="20" y="20" width="80" height="40" fill="#5E81AC"/><text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">BANK</text><text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">CARD</text><text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">Credit Card</text><rect x="25" y="125" width="35" height="20" rx="3" fill="#D08770"/><circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/><circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/><text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">**** **** **** ****</text><text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text><text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text></svg>
          </div>
          <div class="related-card-content">
            <h4>RBL MoneyBack Credit Card</h4>
            <p>Cashback focused card with telecom benefits</p>
            <a href="/rbl-bank-moneyback" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #FF6347, #FF4500) !important;
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

<?php get_footer(); ?>


