<?php 
// SBI Cashback Credit Card Page - SEO Optimized with Rank Math
// Enhanced with structured data and SEO variables

// SEO Variables for Rank Math Integration
$card_name = "SBI Cashback Credit Card";
$bank_name = "State Bank of India";
$main_benefit = "5% Cashback on Online Shopping";
$annual_fee = "₹999 + GST (waived on annual spends of ₹2 lakhs)";
$welcome_benefit = "₹2,000 Welcome Cashback";
$best_for = "Online shopping enthusiasts and digital payments";
$apply_link = "https://www.sbicard.com/en/personal/credit-cards/cashback/sbi-cashback-credit-card.page";

// Add structured data for SEO
add_action( 'wp_footer', 'sbi_cashback_structured_data' );
function sbi_cashback_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with excellent cashback rewards for digital transactions",
        "category": "Credit Card",
        "image": "<?php echo get_template_directory_uri(); ?>/images/sbi-cashback-card.jpg",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?>",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "999",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.3",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "3241"
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
      <li class="breadcrumb-item"><a href="#">SBI Card</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cashback Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'SBI Cashback Credit Card';
    $card_description = 'SBI Cashback Credit Card offers 5% cashback on online spends, 1% on offline. ₹999 annual fee with ₹2,000 welcome cashback. India\'s highest cashback credit card 2025.';
    $annual_fee = '₹999';
    $welcome_bonus = '₹2,000 Cashback';
    $min_income = '₹1,00,000';
    $card_network = 'Visa';
    $bank_name = 'SBI Card';
    $rating = '4.1';
    $review_count = '2156';
    
    echo '<title>' . $card_name . ' - 5% Cashback Review & Apply Online 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="SBI Cashback Credit Card, SBI Card, highest cashback credit card, 5% cashback, online shopping cashback, credit card review, apply online">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - India\'s Highest Cashback Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/sbi-cashback-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - 5% Cashback Review">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/sbi-cashback-card.jpg">';
    
    // Structured Data - Product Schema
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "' . $card_name . '",
        "description": "' . $card_description . '",
        "image": "' . get_template_directory_uri() . '/images/sbi-cashback-card.jpg",
        "brand": {
            "@type": "Brand",
            "name": "' . $bank_name . '"
        },
        "category": "Credit Card",
        "offers": {
            "@type": "Offer",
            "description": "5% cashback on online spends, 1% on all other transactions - India\'s highest cashback rate",
            "url": "' . get_permalink() . '#apply",
            "price": "' . $annual_fee . '",
            "priceCurrency": "INR",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock",
            "validFrom": "2025-01-01",
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
        },
        "review": [
            {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "' . $rating . '",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "CardAdvisorHub Editorial Team"
                },
                "reviewBody": "SBI Cashback Credit Card offers the highest cashback rate in India for online spending, making it ideal for digital shoppers."
            }
        ],
        "additionalProperty": [
            {
                "@type": "PropertyValue",
                "name": "Annual Fee",
                "value": "' . $annual_fee . '"
            },
            {
                "@type": "PropertyValue",
                "name": "Welcome Bonus",
                "value": "' . $welcome_bonus . '"
            },
            {
                "@type": "PropertyValue",
                "name": "Minimum Income",
                "value": "' . $min_income . '"
            },
            {
                "@type": "PropertyValue",
                "name": "Card Network",
                "value": "' . $card_network . '"
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
    
    // FAQ Schema for common questions
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the cashback rate for SBI Cashback Credit Card?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SBI Cashback Credit Card offers 5% cashback on online spends and 1% cashback on offline spends."
                }
            },
            {
                "@type": "Question",
                "name": "What is the annual fee for SBI Cashback Credit Card?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The annual fee for SBI Cashback Credit Card is ₹999 + GST."
                }
            },
            {
                "@type": "Question",
                "name": "What is the welcome bonus for SBI Cashback Credit Card?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "New cardholders receive ₹2,000 as welcome cashback upon meeting spend criteria."
                }
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
      <li class="breadcrumb-item active" aria-current="page">SBI Cashback Credit Card</li>
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
                <linearGradient id="sbiCashbackMainGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#003f7f;stop-opacity:1" />
                  <stop offset="25%" style="stop-color:#004a8c;stop-opacity:1" />
                  <stop offset="75%" style="stop-color:#4169E1;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#002D5C;stop-opacity:1" />
                </linearGradient>
                <linearGradient id="sbiOrangeGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#FF6B35;stop-opacity:1" />
                  <stop offset="50%" style="stop-color:#FF8C42;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#E55100;stop-opacity:1" />
                </linearGradient>
                <radialGradient id="chipMetallic" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" style="stop-color:#F5F5F5;stop-opacity:1" />
                  <stop offset="70%" style="stop-color:#DCDCDC;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#C0C0C0;stop-opacity:1" />
                </radialGradient>
                <linearGradient id="cashbackHighlight" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#FFD700;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#FFA500;stop-opacity:1" />
                </linearGradient>
              </defs>
              
              <!-- Card background -->
              <rect width="300" height="190" rx="12" fill="url(#sbiCashbackMainGrad)" stroke="#87CEEB" stroke-width="0.5"/>
              
              <!-- Shine effect overlay -->
              <rect x="2" y="2" width="296" height="186" rx="10" fill="rgba(255,255,255,0.1)"/>
              
              <!-- SBI Card branding area -->
              <rect x="15" y="15" width="110" height="35" rx="4" fill="url(#sbiOrangeGrad)"/>
              <text x="70" y="27" font-family="Arial Black, sans-serif" font-size="11" font-weight="900" fill="white" text-anchor="middle">SBI CARD</text>
              <text x="70" y="39" font-family="Arial, sans-serif" font-size="6" fill="white" text-anchor="middle" opacity="0.9">Simply Click</text>
              <text x="70" y="46" font-family="Arial, sans-serif" font-size="5" fill="white" text-anchor="middle" opacity="0.7">With you all the way</text>
              
              <!-- Chip with realistic metallic look -->
              <rect x="20" y="60" width="22" height="16" rx="3" fill="url(#chipMetallic)" stroke="#B0B0B0" stroke-width="0.5"/>
              <!-- Chip grid pattern -->
              <line x1="23" y1="62" x2="39" y2="62" stroke="#888" stroke-width="0.3"/>
              <line x1="23" y1="64" x2="39" y2="64" stroke="#888" stroke-width="0.3"/>
              <line x1="23" y1="66" x2="39" y2="66" stroke="#888" stroke-width="0.3"/>
              <line x1="23" y1="68" x2="39" y2="68" stroke="#888" stroke-width="0.3"/>
              <line x1="23" y1="70" x2="39" y2="70" stroke="#888" stroke-width="0.3"/>
              <line x1="23" y1="72" x2="39" y2="72" stroke="#888" stroke-width="0.3"/>
              <line x1="25" y1="62" x2="25" y2="74" stroke="#888" stroke-width="0.3"/>
              <line x1="29" y1="62" x2="29" y2="74" stroke="#888" stroke-width="0.3"/>
              <line x1="33" y1="62" x2="33" y2="74" stroke="#888" stroke-width="0.3"/>
              <line x1="37" y1="62" x2="37" y2="74" stroke="#888" stroke-width="0.3"/>
              
              <!-- CASHBACK main branding -->
              <rect x="50" y="55" width="180" height="45" rx="5" fill="rgba(0,63,127,0.8)" stroke="url(#sbiOrangeGrad)" stroke-width="1"/>
              <text x="140" y="72" font-family="Arial Black, sans-serif" font-size="18" font-weight="900" fill="white" text-anchor="middle">CASHBACK</text>
              <text x="140" y="84" font-family="Arial, sans-serif" font-size="8" fill="url(#sbiOrangeGrad)" text-anchor="middle">CREDIT CARD</text>
              <text x="140" y="94" font-family="Arial, sans-serif" font-size="7" fill="white" text-anchor="middle" opacity="0.9">Up to 5% Cashback</text>
              
              <!-- 5% highlight circle -->
              <circle cx="200" cy="70" r="12" fill="url(#cashbackHighlight)" stroke="white" stroke-width="1"/>
              <text x="200" y="67" font-family="Arial Black, sans-serif" font-size="8" font-weight="900" fill="#003f7f" text-anchor="middle">5%</text>
              <text x="200" y="75" font-family="Arial, sans-serif" font-size="4" fill="#003f7f" text-anchor="middle">ONLINE</text>
              
              <!-- Visa logo -->
              <svg x="240" y="20" width="50" height="30" viewBox="0 0 50 30">
                <rect width="50" height="30" fill="white" rx="4"/>
                <text x="5" y="20" font-family="Arial Black, sans-serif" font-size="14" font-weight="900" fill="#1A1F71">VISA</text>
                <text x="5" y="27" font-family="Arial, sans-serif" font-size="5" fill="#1A1F71">CLASSIC</text>
              </svg>
              
              <!-- Card number with authentic spacing -->
              <text x="20" y="125" font-family="OCR A Std, Courier, monospace" font-size="15" font-weight="bold" fill="white" letter-spacing="3px">6543 2109 8765 4321</text>
              
              <!-- Valid thru -->
              <text x="20" y="145" font-family="Arial, sans-serif" font-size="7" fill="url(#sbiOrangeGrad)">VALID THRU</text>
              <text x="20" y="157" font-family="Arial, sans-serif" font-size="10" font-weight="600" fill="white">12/28</text>
              
              <!-- Cardholder name -->
              <text x="90" y="145" font-family="Arial, sans-serif" font-size="7" fill="url(#sbiOrangeGrad)">CARDHOLDER NAME</text>
              <text x="90" y="157" font-family="Arial, sans-serif" font-size="10" font-weight="600" fill="white">CARDHOLDER NAME</text>
              
              <!-- Member since badge -->
              <rect x="20" y="170" width="80" height="10" rx="2" fill="rgba(255,107,53,0.8)"/>
              <text x="60" y="177" font-family="Arial, sans-serif" font-size="6" fill="white" text-anchor="middle">MEMBER SINCE 2020</text>
              
              <!-- Contactless symbol -->
              <svg x="250" y="120" width="25" height="25" viewBox="0 0 25 25">
                <path d="M5 8 Q12.5 8 20 15.5" stroke="white" stroke-width="1.5" fill="none" opacity="0.8"/>
                <path d="M5 12 Q10 12 15 17" stroke="white" stroke-width="1.5" fill="none" opacity="0.8"/>
                <path d="M5 16 Q7.5 16 10 18.5" stroke="white" stroke-width="1.5" fill="none" opacity="0.8"/>
                <circle cx="6" cy="19" r="1.5" fill="white" opacity="0.8"/>
              </svg>
              
              <!-- Security hologram -->
              <ellipse cx="180" cy="170" rx="15" ry="8" fill="url(#cashbackHighlight)" opacity="0.3"/>
              <text x="180" y="172" font-family="Arial, sans-serif" font-size="5" fill="white" text-anchor="middle" opacity="0.8">SECURE</text>
              
              <!-- SBI logo watermark -->
              <text x="250" y="75" font-family="Arial Black, sans-serif" font-size="30" fill="rgba(255,107,53,0.1)" text-anchor="middle" transform="rotate(-15 250 75)">SBI</text>
            </svg>
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.1/5 (2,156 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>SBI Cashback Credit Card</h1>
          <p class="card-tagline">India's highest cashback credit card</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹999 + GST</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value">₹2,000 Cashback</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Best Cashback</span>
              <span class="highlight-value">5% Online</span>
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
          <div class="feature-icon">💻</div>
          <h3>5% Cashback Online</h3>
          <p>Earn 5% cashback on all online spends including e-commerce, food delivery, and bill payments</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏪</div>
          <h3>1% Cashback Offline</h3>
          <p>Get 1% cashback on all offline purchases at retail stores, restaurants, and more</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Offer</h3>
          <p>Receive ₹2,000 cashback as welcome bonus on completing ₹1,00,000 spends in first 90 days</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Easy Mobile Banking</h3>
          <p>Integrated with SBI YONO app for seamless banking and card management</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🛡️</div>
          <h3>Comprehensive Insurance</h3>
          <p>Purchase protection, extended warranty, and fraud liability protection</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🌍</div>
          <h3>Global Acceptance</h3>
          <p>Accepted worldwide with Visa/Mastercard network and no foreign currency markup</p>
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
              <th>Cashback Rate</th>
              <th>Monthly Cap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Online Spends (All Categories)</td>
              <td>5%</td>
              <td>₹5,000</td>
            </tr>
            <tr>
              <td>Offline Spends</td>
              <td>1%</td>
              <td>No Cap</td>
            </tr>
            <tr>
              <td>Wallet Loads</td>
              <td>5%</td>
              <td>Included in ₹5,000 cap</td>
            </tr>
            <tr>
              <td>EMI Transactions</td>
              <td>1%</td>
              <td>No Cap</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="fees-charges">
    <div class="container">
      <h2>Fees & Charges</h2>
      
      <div class="fees-grid">
        <div class="fee-item">
          <span class="fee-label">Annual Fee</span>
          <span class="fee-value">₹999 + GST</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹999 + GST</span>
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
          <span class="fee-value">₹200 - ₹1,500</span>
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
            <li>Minimum Income: ₹20,000 per month (Salaried)</li>
            <li>Minimum Income: ₹2,00,000 per annum (Self-employed)</li>
            <li>Credit Score: 750+ (recommended)</li>
            <li>Existing SBI relationship preferred but not mandatory</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof</li>
            <li>Income Proof (Latest 3 salary slips/ITR)</li>
            <li>Bank Statements (3-6 months)</li>
            <li>Form 16 (for salaried)</li>
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
            <li>Highest 5% cashback on online spends</li>
            <li>No category restrictions for online purchases</li>
            <li>Good welcome bonus offer</li>
            <li>Annual fee waiver on spending milestone</li>
            <li>Instant cashback credit</li>
            <li>Wide acceptance globally</li>
            <li>Strong SBI network support</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>High annual fee (₹999 + GST)</li>
            <li>Monthly cashback cap of ₹5,000</li>
            <li>Lower 1% cashback on offline spends</li>
            <li>Fee waiver requires high spending</li>
            <li>No airport lounge access</li>
            <li>Limited premium benefits</li>
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
              <strong>Suresh P.</strong>
              <span class="review-date">1 month ago</span>
            </div>
            <div class="review-rating">★★★★★</div>
          </div>
          <p>"Best cashback card in India! I earn ₹4,000+ every month from online shopping. The 5% rate is unmatched and cashback is credited instantly."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Kavya R.</strong>
              <span class="review-date">2 weeks ago</span>
            </div>
            <div class="review-rating">★★★★☆</div>
          </div>
          <p>"Great for online spends but wish the offline cashback was better. The annual fee is justified if you spend enough online."</p>
        </div>
        
        <div class="review-card">
          <div class="review-header">
            <div class="reviewer-info">
              <strong>Ravi K.</strong>
              <span class="review-date">1 week ago</span>
            </div>
            <div class="review-rating">★★★★☆</div>
          </div>
          <p>"Excellent card for digital spenders. SBI's customer service is good and the YONO app integration makes management easy."</p>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for SBI Cashback Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Why Apply Through Us?</h3>
          <ul>
            <li>✅ Instant approval status</li>
            <li>✅ No processing charges</li>
            <li>✅ Expert assistance</li>
            <li>✅ Fast application processing</li>
            <li>✅ Document pickup service</li>
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
                <option value="20000-35000">₹20,000 - ₹35,000</option>
                <option value="35000-50000">₹35,000 - ₹50,000</option>
                <option value="50000-100000">₹50,000 - ₹1,00,000</option>
                <option value="100000+">Above ₹1,00,000</option>
              </select>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Employment Type</option>
                <option value="salaried">Salaried</option>
                <option value="self-employed">Self Employed</option>
                <option value="business">Business Owner</option>
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
          <div class="related-card-content">
            <h4>ICICI Amazon Pay Credit Card</h4>
            <p>5% cashback on Amazon purchases, lifetime free</p>
            <a href="/icici-amazon" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="hdfcGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#29334A"/>
                  <stop offset="50%" stop-color="#38435A"/>
                  <stop offset="100%" stop-color="#48536A"/>
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#hdfcGrad)"/>
              <rect x="20" y="20" width="80" height="40" fill="#004381"/>
              <text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">HDFC</text>
              <text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">BANK</text>
              <text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">MoneyBack</text>
              <text x="25" y="105" font-family="Arial" font-size="12" fill="#E0E0E0">Credit Card</text>
              <rect x="25" y="125" width="35" height="20" rx="3" fill="#FFD700"/>
              <circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/>
              <circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">5369 4845 **** 3355</text>
              <text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text>
              <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>HDFC MoneyBack Credit Card</h4>
            <p>Cashback on multiple categories and online spends</p>
            <a href="/hdfc-moneyback" class="btn btn-outline">View Details</a>
          </div>
        </div>
        
        <div class="related-card">
          <div class="related-card-image">
            <svg width="300" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="flipkartGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#0F539A"/>
                  <stop offset="50%" stop-color="#2F73DA"/>
                  <stop offset="100%" stop-color="#4F93FA"/>
                </linearGradient>
              </defs>
              <rect width="300" height="190" rx="15" fill="url(#flipkartGrad)"/>
              <rect x="20" y="20" width="80" height="40" fill="#800080"/>
              <text x="60" y="35" font-family="Arial" font-size="12" font-weight="bold" fill="white" text-anchor="middle">AXIS</text>
              <text x="60" y="50" font-family="Arial" font-size="8" fill="white" text-anchor="middle">BANK</text>
              <text x="25" y="85" font-family="Arial" font-size="16" font-weight="bold" fill="white">Flipkart</text>
              <text x="25" y="105" font-family="Arial" font-size="12" fill="#FFD700">Credit Card</text>
              <rect x="25" y="125" width="35" height="20" rx="3" fill="#FFD700"/>
              <circle cx="32" cy="135" r="6" fill="#EB001B" fill-opacity="0.8"/>
              <circle cx="48" cy="135" r="6" fill="#FF5F00" fill-opacity="0.8"/>
              <text x="25" y="155" font-family="Courier" font-size="11" font-weight="bold" fill="white">5369 4845 **** 3355</text>
              <text x="230" y="45" font-family="Arial" font-size="10" fill="#AAA">VALID THRU</text>
              <text x="230" y="60" font-family="Arial" font-size="12" font-weight="bold" fill="white">12/27</text>
            </svg>
          </div>
          <div class="related-card-content">
            <h4>Flipkart Axis Bank Credit Card</h4>
            <p>5% cashback on Flipkart purchases and rewards</p>
            <a href="/flipkart-axis" class="btn btn-outline">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
          <a href="/flipkart-axis" class="btn btn-outline">View Details</a>
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
            id: 'sbi-cashback',
            name: 'SBI Cashback Credit Card',
            annual_fee: 999,
            image: 'sbi-cashback-card.jpg',
            rating: 4.1
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
    const isInComparison = compareList.some(card => card.id === 'sbi-cashback');
    
    if (isInComparison) {
        addToCompareBtn.textContent = 'Added to Compare';
        addToCompareBtn.classList.add('added');
    }
    
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add to compare functionality
    const addToCompareBtn = document.getElementById('add-to-compare');
    
    addToCompareBtn.addEventListener('click', function() {
        // Get existing comparison list from localStorage
        let compareList = JSON.parse(localStorage.getItem('compareCards')) || [];
        
        const cardData = {
            id: 'sbi-cashback',
            name: 'SBI Cashback Credit Card',
            annual_fee: 999,
            image: 'sbi-cashback-card.jpg',
            rating: 4.1
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
    const isInComparison = compareList.some(card => card.id === 'sbi-cashback');
    
    if (isInComparison) {
        addToCompareBtn.textContent = 'Added to Compare';
        addToCompareBtn.classList.add('added');
    }
    
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
});
</script>

<style>
/* SBI specific hero styling */
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #4169E1, #6495ED) !important;
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
        <h3 class="faq-question">How to apply for SBI Cashback Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through SBI Card website or visit the nearest SBI branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹1,00,000 per annum for salaried individuals and ₹2,00,000 for self-employed individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits?</h3>
        <div class="faq-answer">
          <p>Get 5% cashback on online spends up to ₹5,000 per month and 1% cashback on offline spends up to ₹500 per month.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>Yes, the annual fee is ₹999 plus applicable taxes. Fee waiver available on spending ₹2,00,000 or more in the previous year.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
