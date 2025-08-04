<?php 
get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Flipkart Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'Flipkart Axis Bank Credit Card';
    $card_description = 'Flipkart Axis Bank Credit Card offers 5% cashback on Flipkart, 4% on Myntra. Lifetime free with no annual fee. Best Flipkart shopping credit card in India 2025.';
    $annual_fee = 'Lifetime Free';
    $welcome_bonus = '₹500 Flipkart Gift Voucher';
    $min_income = '₹1,80,000';
    $card_network = 'Mastercard';
    $bank_name = 'Axis Bank';
    $rating = '4.0';
    $review_count = '1856';
    
    echo '<title>' . $card_name . ' - 5% Flipkart Cashback Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="Flipkart Axis Bank Credit Card, Flipkart cashback, Axis Bank credit card, lifetime free credit card, Flipkart shopping, Myntra cashback">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Best Flipkart Shopping Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/flipkart-axis-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Structured Data - Product Schema
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "' . $card_name . '",
        "description": "' . $card_description . '",
        "category": "Credit Card",
        "image": "' . get_template_directory_uri() . '/images/flipkart-axis-card.jpg",
        "brand": {
            "@type": "Brand",
            "name": "' . $bank_name . '"
        },
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "INR",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock",
            "validFrom": "2025-01-01",
            "description": "Lifetime Free Credit Card with 5% cashback on Flipkart",
            "url": "' . get_permalink() . '#apply",
            "hasMerchantReturnPolicy": {
                "@type": "MerchantReturnPolicy",
                "applicableCountry": "IN",
                "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                "merchantReturnDays": 30,
                "returnMethod": "https://schema.org/ReturnByMail",
                "returnFees": "https://schema.org/FreeReturn"
            },
            "shippingDetails": {
                "@type": "OfferShippingDetails",
                "shippingRate": {
                    "@type": "MonetaryAmount",
                    "value": "0",
                    "currency": "INR"
                },
                "shippingDestination": {
                    "@type": "DefinedRegion",
                    "addressCountry": "IN"
                },
                "deliveryTime": {
                    "@type": "ShippingDeliveryTime",
                    "handlingTime": {
                        "@type": "QuantitativeValue",
                        "minValue": 1,
                        "maxValue": 3,
                        "unitCode": "DAY"
                    },
                    "transitTime": {
                        "@type": "QuantitativeValue",
                        "minValue": 7,
                        "maxValue": 14,
                        "unitCode": "DAY"
                    }
                }
            }
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "' . $rating . '",
            "reviewCount": "' . $review_count . '",
            "bestRating": "5",
            "worstRating": "1"
        }
                "@type": "PropertyValue",
                "name": "Welcome Bonus",
                "value": "' . $welcome_bonus . '"
            },
            {
                "@type": "PropertyValue",
                "name": "Minimum Income",
                "value": "' . $min_income . '"
            }
        ]
    }
    </script>';
    
    // Breadcrumb Schema
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "' . home_url() . '"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Credit Cards",
                "item": "' . home_url('/compare-cards/') . '"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "' . $card_name . '",
                "item": "' . get_permalink() . '"
            }
        ]
    }
    </script>';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">Flipkart Axis Bank Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Cdefs%3E%3ClinearGradient id='flipkartGrad' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%232874F0;stop-opacity:1' /%3E%3Cstop offset='50%25' style='stop-color:%231356CC;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%230F4C99;stop-opacity:1' /%3E%3C/linearGradient%3E%3ClinearGradient id='flipkartYellow' x1='0%25' y1='0%25' x2='100%25' y2='0%25'%3E%3Cstop offset='0%25' style='stop-color:%23FFE500;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%23FFA500;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='300' height='190' rx='15' fill='url(%23flipkartGrad)'/%3E%3Cpath d='M20 20 L150 20 Q160 20 160 30 L160 45 Q160 55 150 55 L20 55 Z' fill='url(%23flipkartYellow)'/%3E%3Ctext x='25' y='35' font-family='Arial Black' font-size='14' font-weight='bold' fill='%232874F0'%3EFlipkart%3C/text%3E%3Ctext x='25' y='50' font-family='Arial' font-size='9' fill='%232874F0'%3EAxis Bank Card%3C/text%3E%3Ctext x='20' y='75' font-family='Arial' font-size='10' fill='white'%3ECREDIT CARD%3C/text%3E%3Cpath d='M230 20 L285 20 Q295 20 295 30 L295 50 Q295 60 285 60 L230 60 Z' fill='%23FFE500'/%3E%3Ctext x='235' y='35' font-family='Arial' font-size='11' font-weight='bold' fill='%232874F0'%3EMastercard%3C/text%3E%3Ctext x='240' y='50' font-family='Arial' font-size='8' fill='%232874F0'%3EWORLD%3C/text%3E%3Cpath d='M40 90 L120 90 Q130 90 130 100 L130 115 Q130 125 120 125 L40 125 Z' fill='%23FFE500' opacity='0.9'/%3E%3Ctext x='45' y='107' font-family='Arial' font-size='9' font-weight='bold' fill='%232874F0'%3E5%25 CASHBACK%3C/text%3E%3Cpath d='M180 95 C185 90 195 90 200 95 C205 100 195 105 190 100 C185 105 175 100 180 95 Z' fill='%23FFE500' opacity='0.8'/%3E%3Cpath d='M230 100 Q240 95 250 100 Q260 105 250 110 Q240 115 230 110 Z' fill='%23FFE500' opacity='0.7'/%3E%3Ctext x='20' y='145' font-family='Courier New' font-size='16' font-weight='bold' fill='white' letter-spacing='2px'%3E5555 **** **** 7890%3C/text%3E%3Ctext x='20' y='165' font-family='Arial' font-size='9' fill='%23FFE500'%3ECARDHOLDER NAME%3C/text%3E%3Ctext x='20' y='180' font-family='Arial' font-size='12' font-weight='bold' fill='white'%3ENEHA GUPTA%3C/text%3E%3Ctext x='230' y='165' font-family='Arial' font-size='9' fill='%23FFE500'%3EVALID THRU%3C/text%3E%3Ctext x='230' y='180' font-family='Arial' font-size='12' font-weight='bold' fill='white'%3E06/30%3C/text%3E%3C/svg%3E" alt="Flipkart Axis Bank Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.0/5 (2,834 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>Flipkart Axis Bank Credit Card</h1>
          <p class="card-tagline">Best card for Flipkart shopping and online spends</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">₹500 Gift Voucher</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Best Cashback</span>
              <span class="highlight-value">5% on Flipkart</span>
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
          <div class="feature-icon">🛒</div>
          <h3>5% Cashback on Flipkart</h3>
          <p>Earn unlimited 5% cashback on all Flipkart purchases throughout the year</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>4% on Myntra & 2GUD</h3>
          <p>Get 4% cashback on Myntra fashion purchases and 2GUD refurbished products</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>1.5% on Other Purchases</h3>
          <p>Earn 1.5% cashback on all other purchases including offline transactions</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🚚</div>
          <h3>Free Flipkart Plus</h3>
          <p>Complimentary Flipkart Plus membership with free and faster delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎯</div>
          <h3>No Minimum Redemption</h3>
          <p>Redeem cashback with no minimum amount - use as you earn</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔒</div>
          <h3>Secure Transactions</h3>
          <p>Advanced fraud protection and secure online payment processing</p>
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
              <td>Flipkart Purchases</td>
              <td>5%</td>
              <td>No Cap</td>
            </tr>
            <tr>
              <td>Myntra Fashion</td>
              <td>4%</td>
              <td>No Cap</td>
            </tr>
            <tr>
              <td>2GUD Refurbished</td>
              <td>4%</td>
              <td>No Cap</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1.5%</td>
              <td>No Cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Credited to card statement within 90 days</p>
          <p><strong>Redemption:</strong> No minimum redemption amount required</p>
        </div>
      </div>
    </div>
  </section>

  <section class="flipkart-benefits">
    <div class="container">
      <h2>Exclusive Flipkart Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🚚</div>
          <h3>Flipkart Plus Membership</h3>
          <p>Free Plus membership with priority customer support and exclusive deals</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">⚡</div>
          <h3>Early Access to Sales</h3>
          <p>Get early access to Big Billion Days and other major Flipkart sales</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🏷️</div>
          <h3>Exclusive Offers</h3>
          <p>Special discounts and offers available only for cardholders</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎮</div>
          <h3>SuperCoins Earning</h3>
          <p>Earn extra Flipkart SuperCoins on every purchase made with the card</p>
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
          <span class="fee-value">₹500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On ₹2,00,000 annual spends</span>
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
          <span class="fee-label">Late Payment Fee</span>
          <span class="fee-value">₹100 - ₹1,300</span>
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
            <li>Minimum Income: ₹15,000 per month (Salaried)</li>
            <li>Minimum Income: ₹1,80,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (recommended)</li>
            <li>Regular Flipkart user preferred</li>
            <li>Valid Indian address proof</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Driving License)</li>
            <li>Address Proof (utility bill/rent agreement)</li>
            <li>Income Proof (Salary slips/ITR)</li>
            <li>Bank Statements (3 months)</li>
            <li>Employment certificate (for salaried)</li>
            <li>Passport size photographs</li>
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
            <li>High 5% cashback on Flipkart</li>
            <li>No cashback caps or limits</li>
            <li>Low annual fee (₹500)</li>
            <li>Easy fee waiver criteria</li>
            <li>Free Flipkart Plus membership</li>
            <li>Quick approval process</li>
            <li>Good for online shoppers</li>
            <li>No minimum redemption</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited to Flipkart ecosystem</li>
            <li>Lower rewards on offline spends</li>
            <li>No airport lounge access</li>
            <li>Basic insurance coverage</li>
            <li>Limited premium benefits</li>
            <li>Cashback credit takes 90 days</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="user-reviews">
    <div class="container">
      <h2>User Reviews</h2>
      
      <div class="reviews-grid">
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Ankit R.</strong>
              <span class="review-date">2 weeks ago</span>
            </div>
            <div class="review-rating">★★★★☆</div>
          </div>
          <p>"Great card for Flipkart shopping! I save about ₹1,500 every month. The 5% cashback with no cap is excellent. Fee waiver is also easy to achieve."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Sonal P.</strong>
              <span class="review-date">1 month ago</span>
            </div>
            <div class="review-rating">★★★★☆</div>
          </div>
          <p>"Perfect for online shopping enthusiasts. The Myntra 4% cashback is a bonus. Wish the offline rewards were better though."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Rohit S.</strong>
              <span class="review-date">3 weeks ago</span>
            </div>
            <div class="review-rating">★★★★☆</div>
          </div>
          <p>"Easy approval and good cashback. The Plus membership is useful. Application process was smooth and card delivered quickly."</p>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Flipkart Axis Bank Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Why Apply Through Us?</h3>
          <ul>
            <li>✅ Instant online approval</li>
            <li>✅ Quick card delivery</li>
            <li>✅ No processing fees</li>
            <li>✅ Expert guidance</li>
            <li>✅ Application tracking</li>
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
                <option value="15000-25000">₹15,000 - ₹25,000</option>
                <option value="25000-40000">₹25,000 - ₹40,000</option>
                <option value="40000-60000">₹40,000 - ₹60,000</option>
                <option value="60000+">Above ₹60,000</option>
              </select>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Employment Type</option>
                <option value="salaried">Salaried</option>
                <option value="self-employed">Self Employed</option>
                <option value="business">Business</option>
                <option value="student">Student</option>
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
          <a href="/icici-amazon" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="amazonGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#1A2338"/>
                    <stop offset="50%" stop-color="#29334A"/>
                    <stop offset="100%" stop-color="#38435A"/>
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#amazonGrad)"/>
                <rect x="20" y="20" width="80" height="40" fill="#0372AB"/>
                <text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">ICICI</text>
                <text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">BANK</text>
                <text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="#FF9900">Amazon Pay</text>
                <text x="25" y="105" font-family="Arial" font-size="12" fill="white">Credit Card</text>
                <rect x="25" y="125" width="35" height="20" rx="3" fill="#FF9900"/>
                <text x="42" y="138" font-family="Arial" font-size="8" font-weight="bold" fill="black" text-anchor="middle">VISA</text>
                <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">5369 4845 **** 3355</text>
                <text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text>
                <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text>
              </svg>
            </div>
          </a>
          <div class="related-card-content">
            <h4>ICICI Amazon Pay Credit Card</h4>
            <p>5% cashback on Amazon purchases, lifetime free</p>
            <a href="/icici-amazon" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <a href="/sbi-cashback" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="sbiGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#02498B;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#35699B;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#6889AB;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#sbiGradient)" stroke="#CCC" stroke-width="1"/>
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
          </a>
          <div class="related-card-content">
            <h4>SBI Cashback Credit Card</h4>
            <p>5% cashback on online spends and mobile payments</p>
            <a href="/sbi-cashback" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <a href="/hdfc-moneyback" class="related-card-image-link">
            <div class="related-card-image">
              <svg width="300" height="190" viewBox="0 0 300 190" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="moneybackGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#29334A;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#38435A;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#48536A;stop-opacity:1" />
                  </linearGradient>
                </defs>
                <rect width="300" height="190" rx="15" fill="url(#moneybackGradient)" stroke="#CCC" stroke-width="1"/>
                <svg x="20" y="20" width="80" height="40" viewBox="0 0 100 50" fill="none">
                  <rect width="100" height="50" fill="#004381"/>
                  <text x="50" y="20" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
                  <text x="50" y="35" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle">BANK</text>
                </svg>
                <text x="20" y="80" font-family="Arial, sans-serif" font-size="15" font-weight="bold" fill="white">MONEYBACK</text>
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
                <text x="20" y="140" font-family="Courier, monospace" font-size="12" font-weight="bold" fill="white">5369 4845 6976 3355</text>
                <svg x="240" y="135" width="40" height="30" viewBox="0 0 40 30" fill="none">
                  <rect width="40" height="30" fill="#444" rx="3"/>
                  <text x="20" y="20" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="white" text-anchor="middle">NFC</text>
                </svg>
              </svg>
            </div>
          </a>
          <div class="related-card-content">
            <h4>HDFC MoneyBack Credit Card</h4>
            <p>Cashback on multiple categories and online purchases</p>
            <a href="/hdfc-moneyback" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add to compare functionality
    const addToCompareBtn = document.getElementById('add-to-compare');
    
    addToCompareBtn.addEventListener('click', function() {
        // Get existing comparison list from localStorage
        let compareList = JSON.parse(localStorage.getItem('compareCards')) || [];
        
        const cardData = {
            id: 'flipkart-axis',
            name: 'Flipkart Axis Bank Credit Card',
            annual_fee: 500,
            image: 'flipkart-axis-card.jpg',
            rating: 4.0
        };
        
        // Check if card is already in comparison
        const existingIndex = compareList.findIndex(card => card.id === cardData.id);
        
        if (existingIndex === -1) {
            if (compareList.length < 3) {
                compareList.push(cardData);
                localStorage.setItem('compareCards', JSON.stringify(compareList));
                
                // Update button state
                addToCompareBtn.textContent = 'Added to Compare';
                addToCompareBtn.classList.add('added');
                
                // Show success message
                showNotification('Card added to comparison!');
            } else {
                showNotification('You can compare maximum 3 cards at a time.');
            }
        } else {
            showNotification('Card is already in comparison list.');
        }
    });
    
    // Check if card is already in comparison on page load
    const compareList = JSON.parse(localStorage.getItem('compareCards')) || [];
    const isInComparison = compareList.some(card => card.id === 'flipkart-axis');
    
    if (isInComparison) {
        addToCompareBtn.textContent = 'Added to Compare';
        addToCompareBtn.classList.add('added');
    }
    
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
});
</script>

<style>
/* Flipkart Axis specific hero styling */
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #2874F0, #4A90E2) !important;
}

/* Related Cards Section with Images */
.related-cards {
    background: #f8f9fa;
    padding: 3rem 0;
    margin-top: 2rem;
}

.related-cards h2 {
    text-align: center;
    margin-bottom: 2rem;
    font-size: 2rem;
    color: #333;
    border-bottom: none;
}

.related-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.related-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.related-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.related-card-image {
    width: 100%;
    height: 180px;
    overflow: hidden;
    background: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.related-card-image-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
}

.related-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    loading: lazy;
    decoding: async;
    cursor: pointer;
}

.related-card-image svg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
}

.related-card:hover .related-card-image img {
    transform: scale(1.05);
}

.related-card:hover .related-card-image svg {
    transform: scale(1.05);
}

.related-card-content {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.related-card-content h4 {
    margin: 0 0 0.75rem 0;
    font-size: 1.25rem;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

.related-card-content p {
    margin: 0 0 1.5rem 0;
    color: #666;
    line-height: 1.5;
    flex: 1;
}

.related-card .btn {
    align-self: flex-start;
    padding: 0.75rem 1.5rem;
    background-color: #007cba;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 500;
    transition: background-color 0.3s ease;
    border: none;
    cursor: pointer;
}

.related-card .btn:hover {
    background-color: #005a8a;
    text-decoration: none;
}

.related-card .btn-outline {
    background-color: transparent;
    color: #007cba;
    border: 2px solid #007cba;
}

.related-card .btn-outline:hover {
    background-color: #007cba;
    color: white;
}

/* Mobile optimization for related cards */
@media (max-width: 768px) {
    .related-cards {
        padding: 2rem 0;
    }
    
    .related-cards h2 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .related-cards-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin: 0 1rem;
    }
    
    .related-card-image {
        height: 150px;
    }
    
    .related-card-content {
        padding: 1.25rem;
    }
    
    .related-card-content h4 {
        font-size: 1.1rem;
    }
    
    .related-card .btn {
        padding: 0.6rem 1.25rem;
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .related-cards-grid {
        margin: 0 0.5rem;
        gap: 1rem;
    }
    
    .related-card-image {
        height: 120px;
    }
    
    .related-card-content {
        padding: 1rem;
    }
    
    .related-card-content h4 {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }
    
    .related-card-content p {
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
}

/* Performance optimizations and accessibility */
.related-card-image img {
    will-change: transform;
}

.related-card {
    will-change: transform, box-shadow;
}

.related-card .btn:focus {
    outline: 2px solid #007cba;
    outline-offset: 2px;
}

.related-card:focus-within {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
}
</style>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for Flipkart Axis Bank Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Axis Bank website, Flipkart website, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹15,000 for salaried individuals and ₹2,50,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits on Flipkart purchases?</h3>
        <div class="faq-answer">
          <p>Enjoy unlimited cashback on Flipkart purchases, exclusive sales access, priority customer support, and additional rewards on partner merchants.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹500 plus taxes with waiver available on annual spends as per the terms mentioned in the card features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
