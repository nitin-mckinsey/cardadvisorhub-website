<?php 
// Axis Magnus Credit Card Page - SEO Optimized with Rank Math
// Enhanced with structured data and SEO variables

// SEO Variables for Rank Math Integration

$card_name = "Axis Magnus Credit Card";
$bank_name = "Axis Bank";
$main_benefit = "Premium Travel Rewards and Unlimited Lounge Access";
$annual_fee = "₹12,500 + GST (fee waived on annual spends of ₹15 lakhs)";
$welcome_benefit = "25,000 Welcome Bonus Points";
$best_for = "Travel enthusiasts, premium lifestyle, and high spenders";
$apply_link = "https://www.axisbank.com/retail/cards/credit-card/magnus-credit-card";

// Robust image logic for Axis Magnus
$card_slug = 'axis-magnus';
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

// SEO Meta Tags for Axis Magnus
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'Axis Magnus Credit Card Review 2025 - Premium Travel Rewards | CardAdvisorHub';
    $page_description = 'Axis Magnus Credit Card: Premium travel rewards, unlimited lounge access, 12X points on travel & dining. ₹12,500 annual fee waived on ₹15L spends. Apply online now.';
    $page_keywords = 'Axis Magnus credit card, Axis Bank premium card, travel rewards credit card, unlimited lounge access, 12X reward points, premium credit card India';
    
    echo '<title>' . $page_title . '</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . esc_url($card_img) . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="Axis Magnus Credit Card - Premium Travel Rewards">';
    echo '<meta name="twitter:description" content="' . $page_description . '">';
    echo '<meta name="twitter:image" content="' . esc_url($card_img) . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'axis_magnus_structured_data' );
function axis_magnus_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with premium travel benefits and milestone rewards",
        "category": "Credit Card",
        "image": "<?php echo esc_url($card_img); ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Premium travel benefits",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "12500",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock",
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
            "ratingValue": "4.6",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "1534"
        }
    }
    </script>
    <?php
}

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">Axis Magnus Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="<?php echo esc_url($card_img); ?>" alt="Axis Magnus Credit Card" class="credit-card-image" onerror="this.onerror=null;this.src='<?php echo $uploads . 'default-card.jpg'; ?>';" width="300" height="190" loading="lazy" />
                <circle cx="12" cy="12" r="10" fill="#EB001B"/>
                <circle cx="28" cy="12" r="10" fill="#FF5F00"/>
                <path d="M20 5.5 A 7.5 7.5 0 0 1 20 18.5 A 7.5 7.5 0 0 1 20 5.5 Z" fill="#FF5F00"/>
              </svg>
              
              <!-- World Elite text under Mastercard -->
              <text x="75" y="135" font-family="Arial, sans-serif" font-size="6" fill="url(#magnusGoldAccent)" text-anchor="middle">WORLD ELITE</text>
              
              <!-- Card number with realistic spacing -->
              <text x="20" y="155" font-family="OCR A Std, Courier, monospace" font-size="16" font-weight="bold" fill="white" letter-spacing="3px">5555 3456 7890 1234</text>
              
              <!-- Cardholder details -->
              <text x="20" y="172" font-family="Arial, sans-serif" font-size="7" fill="url(#magnusGoldAccent)" opacity="0.9">VALID THRU</text>
              <text x="20" y="184" font-family="Arial, sans-serif" font-size="11" font-weight="600" fill="white">12/28</text>
              
              <text x="110" y="172" font-family="Arial, sans-serif" font-size="7" fill="url(#magnusGoldAccent)" opacity="0.9">CARDHOLDER NAME</text>
              <text x="110" y="184" font-family="Arial, sans-serif" font-size="11" font-weight="600" fill="white">CARDHOLDER NAME</text>
              
              <!-- Contactless symbol -->
              <svg x="250" y="105" width="25" height="25" viewBox="0 0 25 25">
                <path d="M8 7 Q12.5 7 17 11.5" stroke="white" stroke-width="1.5" fill="none" opacity="0.7"/>
                <path d="M8 11 Q10.5 11 13 13.5" stroke="white" stroke-width="1.5" fill="none" opacity="0.7"/>
                <path d="M8 15 Q9 15 10 16" stroke="white" stroke-width="1.5" fill="none" opacity="0.7"/>
                <circle cx="8.5" cy="18.5" r="1" fill="white" opacity="0.7"/>
              </svg>
              
              <!-- Premium accent lines -->
              <line x1="250" y1="20" x2="280" y2="20" stroke="url(#magnusGoldAccent)" stroke-width="1"/>
              <line x1="250" y1="25" x2="275" y2="25" stroke="url(#magnusGoldAccent)" stroke-width="0.5" opacity="0.7"/>
              
              <!-- Subtle Magnus watermark -->
              <text x="220" y="60" font-family="Arial, sans-serif" font-size="35" fill="url(#magnusGoldAccent)" opacity="0.1" text-anchor="middle" transform="rotate(-15 220 60)">M</text>
              
              <!-- Security hologram effect -->
              <ellipse cx="200" cy="140" rx="15" ry="8" fill="url(#magnusGoldAccent)" opacity="0.2"/>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">â˜…â˜…â˜…â˜…â˜…</div>
            <span class="rating-text">4.5/5 (1,876 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1><?php echo $card_name; ?> 2025 - Premium Benefits & Lounge Access</h1>
          <p class="card-tagline">Ultimate luxury travel and lifestyle card</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">â‚¹12,500 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">25,000 Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Best Rewards</span>
              <span class="highlight-value">12X Points</span>
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
          <div class="feature-icon">âœˆï¸</div>
          <h3>12X Points on Travel</h3>
          <p>Earn 12 EDGE reward points per â‚¹200 spent on airlines, hotels, and travel portals</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ½ï¸</div>
          <h3>6X Points on Dining</h3>
          <p>Get 6 EDGE reward points per â‚¹200 on dining at restaurants and food delivery</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ’³</div>
          <h3>2X Points on Others</h3>
          <p>Earn 2 EDGE reward points per â‚¹200 on all other purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ›‚</div>
          <h3>Priority Pass Membership</h3>
          <p>Complimentary Priority Pass with unlimited international lounge access</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸŽ</div>
          <h3>Magnus Welcome Benefits</h3>
          <p>Get 25,000 EDGE points worth â‚¹5,000 as welcome bonus</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">ðŸ¨</div>
          <h3>Hotel Elite Status</h3>
          <p>Complimentary Marriott Bonvoy Gold Elite Status and ITC Green Tier</p>
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
              <th>EDGE Points</th>
              <th>Effective Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Travel (Airlines, Hotels)</td>
              <td>12X Points</td>
              <td>~12% value</td>
            </tr>
            <tr>
              <td>Dining & Food Delivery</td>
              <td>6X Points</td>
              <td>~6% value</td>
            </tr>
            <tr>
              <td>Domestic Transactions</td>
              <td>2X Points</td>
              <td>~2% value</td>
            </tr>
            <tr>
              <td>International Transactions</td>
              <td>2X Points</td>
              <td>~2% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 EDGE Point = â‚¹0.20 (when transferred to airline miles)</p>
          <p><strong>Transfer Partners:</strong> Vistara, Singapore Airlines, Marriott Bonvoy, ITC</p>
          <p><strong>Points Validity:</strong> 3 years from date of earning</p>
        </div>
      </div>
    </div>
  </section>

  <section class="premium-benefits">
    <div class="container">
      <h2>Luxury Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">ðŸ›‚</div>
          <h3>Airport Lounge Access</h3>
          <p>Unlimited Priority Pass membership + 8 domestic lounge visits per quarter</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">ðŸ¨</div>
          <h3>Hotel Benefits</h3>
          <p>Marriott Bonvoy Gold Elite + ITC Green Tier membership with exclusive privileges</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">ðŸ›¡ï¸</div>
          <h3>Premium Insurance</h3>
          <p>Travel insurance up to â‚¹1 crore + purchase protection up to â‚¹1 lakh</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">ðŸŽ¯</div>
          <h3>Golf Privileges</h3>
          <p>Complimentary golf rounds at premium courses + golf lessons</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">ðŸ¾</div>
          <h3>Culinary Experiences</h3>
          <p>Exclusive dining experiences and wine tastings at luxury restaurants</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">ðŸš—</div>
          <h3>Concierge Services</h3>
          <p>24/7 luxury concierge services for travel planning and lifestyle assistance</p>
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
          <span class="fee-value">â‚¹12,500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">â‚¹12,500 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">On â‚¹15,00,000 annual spends</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.35% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min â‚¹500)</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Foreign Currency Markup</span>
          <span class="fee-value">2%</span>
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
            <li>Minimum Income: â‚¹15,00,000 per annum</li>
            <li>Credit Score: 750+ (mandatory)</li>
            <li>Premium banking relationship preferred</li>
            <li>Excellent credit history required</li>
            <li>High net worth individuals</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (utility bills)</li>
            <li>Income Proof (ITR/Salary certificates)</li>
            <li>Bank Statements (6-12 months)</li>
            <li>Employment verification</li>
            <li>Wealth proof documents</li>
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
            <li>Outstanding 12X points on travel</li>
            <li>Premium benefits and elite status</li>
            <li>Unlimited international lounge access</li>
            <li>Excellent transfer partners</li>
            <li>Comprehensive luxury benefits</li>
            <li>24/7 concierge services</li>
            <li>No foreign transaction fees</li>
            <li>High points earning potential</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>âŒ Cons</h3>
          <ul>
            <li>Very high annual fee (â‚¹12,500)</li>
            <li>Extremely high income requirements</li>
            <li>Fee waiver requires massive spending</li>
            <li>Complex points transfer system</li>
            <li>Limited to affluent customers</li>
            <li>Points expire after 3 years</li>
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
              <strong>Rajesh M.</strong>
              <span class="review-date">2 weeks ago</span>
            </div>
            <div class="review-rating">â˜…â˜…â˜…â˜…â˜…</div>
          </div>
          <p>"Best premium card in India! The 12X travel points are incredible. Earned enough miles for 2 free international trips. Worth every rupee of the annual fee."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Priyanka K.</strong>
              <span class="review-date">1 month ago</span>
            </div>
            <div class="review-rating">â˜…â˜…â˜…â˜…â˜…</div>
          </div>
          <p>"Excellent card for frequent travelers. Priority Pass is amazing and hotel elite status benefits are real. Customer service is top-notch."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Amit S.</strong>
              <span class="review-date">3 weeks ago</span>
            </div>
            <div class="review-rating">â˜…â˜…â˜…â˜…â˜†</div>
          </div>
          <p>"Great card but very expensive. Only worth it if you travel frequently and can utilize all the premium benefits. Points transfer to airlines is excellent."</p>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Axis Magnus Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Why Apply Through Us?</h3>
          <ul>
            <li>âœ… Priority application processing</li>
            <li>âœ… Dedicated relationship manager</li>
            <li>âœ… Expedited card delivery</li>
            <li>âœ… Premium onboarding support</li>
            <li>âœ… Benefits activation assistance</li>
          </ul>
        </div>
        
        <div class="application-form">
          <h3>Apply Now</h3>
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
                <option value="">Annual Income</option>
                <option value="1500000-2000000">â‚¹15,00,000 - â‚¹20,00,000</option>
                <option value="2000000-3000000">â‚¹20,00,000 - â‚¹30,00,000</option>
                <option value="3000000-5000000">â‚¹30,00,000 - â‚¹50,00,000</option>
                <option value="5000000+">Above â‚¹50,00,000</option>
              </select>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Employment Type</option>
                <option value="salaried">Senior Professional</option>
                <option value="business">Business Owner</option>
                <option value="entrepreneur">Entrepreneur</option>
                <option value="investor">Investor</option>
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
      <h2>Similar Premium Cards</h2>
      
      <div class="related-cards-grid">
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="dinersGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#000000"/>
                  <stop offset="50%" stop-color="#1a1a1a"/>
                  <stop offset="100%" stop-color="#333333"/>
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#dinersGrad)"/>
              <rect x="20" y="20" width="80" height="40" fill="#004381"/>
              <text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
              <text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">BANK</text>
              <text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">DINERS CLUB</text>
              <text x="25" y="105" font-family="Arial" font-size="16" font-weight="bold" fill="white">BLACK</text>
              <rect x="25" y="125" width="35" height="20" rx="3" fill="#CC9933"/>
              <circle cx="32" cy="135" r="6" fill="#000" fill-opacity="0.8"/>
              <circle cx="48" cy="135" r="6" fill="#FFD700" fill-opacity="0.8"/>
              <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">5369 4845 6976 3355</text>
              <text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text>
              <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>HDFC Diners Club Black</h4>
            <p>Ultra-premium travel rewards with exclusive privileges</p>
            <a href="/hdfc-diners-club" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
                        <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="emeraldeGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#00CE77"/>
                  <stop offset="50%" stop-color="#2DDA97"/>
                  <stop offset="100%" stop-color="#4DE7A7"/>
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#emeraldeGrad)"/>
              <rect x="20" y="20" width="80" height="40" fill="#0372AB"/>
              <text x="60" y="35" font-family="Arial" font-size="14" font-weight="bold" fill="white" text-anchor="middle">ICICI</text>
              <text x="60" y="50" font-family="Arial" font-size="10" fill="white" text-anchor="middle">BANK</text>
              <text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">EMERALDE</text>
              <text x="25" y="105" font-family="Arial" font-size="12" fill="#F5F5F5">Private Banking</text>
              <rect x="25" y="125" width="35" height="20" rx="3" fill="#FFD700"/>
              <circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/>
              <circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">5469 5846 7976 3455</text>
              <text x="230" y="45" font-family="Arial" font-size="10" fill="#CCC">VALID THRU</text>
              <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>ICICI Emeralde Credit Card</h4>
            <p>Luxury lifestyle benefits and premium privileges</p>
            <a href="/icici-emeralde" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
                        <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="aurumGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#FFD700"/>
                  <stop offset="50%" stop-color="#FFE733"/>
                  <stop offset="100%" stop-color="#FFF766"/>
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#aurumGrad)"/>
              <rect x="20" y="20" width="80" height="40" fill="#014A8C"/>
              <text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">SBI</text>
              <text x="60" y="50" font-family="Arial" font-size="10" fill="white" text-anchor="middle">CARD</text>
              <text x="25" y="85" font-family="Arial" font-size="18" font-weight="bold" fill="#263A80">AURUM</text>
              <text x="25" y="105" font-family="Arial" font-size="12" fill="#263A80">Premium Credit Card</text>
              <rect x="25" y="125" width="35" height="20" rx="3" fill="#FFD700"/>
              <circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/>
              <circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="#263A80">5369 6845 7976 4355</text>
              <text x="230" y="45" font-family="Arial" font-size="10" fill="#263A80">VALID THRU</text>
              <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="#263A80">12/27</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>SBI Card PRIME</h4>
            <p>Premium rewards program with exclusive benefits</p>
            <a href="/sbi-card-prime" class="btn btn-outline">View Details</a>
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
            id: 'axis-magnus',
            name: 'Axis Magnus Credit Card',
            annual_fee: 12500,
            image: 'axis-magnus-card.jpg',
            rating: 4.5
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
    const isInComparison = compareList.some(card => card.id === 'axis-magnus');
    
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
/* Axis Magnus specific hero styling */
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #800080, #9932CC) !important;
}



.card-visual {
    text-align: center;
}

.card-image img {
    max-width: 300px;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    margin-bottom: 20px;
}

.card-rating {
    margin-top: 15px;
}

.stars {
    font-size: 18px;
    color: #ffd700;
    margin-bottom: 5px;
}

.rating-text {
    font-size: 14px;
    opacity: 0.9;
}

.card-info h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.card-tagline {
    font-size: 1.2rem;
    opacity: 0.9;
    margin-bottom: 30px;
}

.key-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.highlight-item {
    text-align: center;
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.highlight-label {
    display: block;
    font-size: 14px;
    opacity: 0.8;
    margin-bottom: 5px;
}

.highlight-value {
    display: block;
    font-size: 18px;
    font-weight: bold;
}

.cta-buttons {
    display: flex;
    gap: 15px;
}

.features-grid,
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.feature-card,
.benefit-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.feature-card:hover,
.benefit-card:hover {
    transform: translateY(-5px);
}

.feature-icon,
.benefit-icon {
    font-size: 3rem;
    margin-bottom: 15px;
}

.rewards-table table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.rewards-table th,
.rewards-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.rewards-table th {
    background: #f8f9fa;
    font-weight: bold;
}

.points-info {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
}

.fees-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.fee-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.fee-label {
    font-weight: 500;
}

.fee-value {
    font-weight: bold;
    color: #007bff;
}

.eligibility-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 30px;
}

.eligibility-requirements ul,
.required-documents ul {
    list-style: none;
    padding: 0;
}

.eligibility-requirements li,
.required-documents li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.pros-cons-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 30px;
}

.pros,
.cons {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.pros h3 {
    color: #28a745;
}

.cons h3 {
    color: #dc3545;
}

.reviews-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.review-card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.review-rating {
    color: #ffd700;
}

.application-section {
    background: #f8f9fa;
    padding: 60px 0;
}

.application-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 30px;
}

.application-form {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.related-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.related-card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.btn.added {
    background: #28a745;
    border-color: #28a745;
}

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
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

.related-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    loading: lazy;
    decoding: async;
}

.related-card:hover .related-card-image img {
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

/* Performance optimizations */
.related-card-image img {
    will-change: transform;
}

.related-card {
    will-change: transform, box-shadow;
}

/* Accessibility improvements */
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
        <h3 class="faq-question">How to apply for Axis Bank Magnus Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through Axis Bank website, mobile app, or visit the nearest branch with required documents including income proof and address verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum monthly income requirement is ₹1,50,000 for salaried individuals and ₹18,00,000 annual income for self-employed professionals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the key benefits of Magnus Card?</h3>
        <div class="faq-answer">
          <p>Enjoy unlimited airport lounge access, accelerated Edge Rewards, golf privileges, luxury hotel benefits, and milestone-based rewards on Magnus Card.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the annual fee and how can it be waived?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹12,500 plus taxes. It can be waived on annual spends as per the terms mentioned in the card features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

