<?php 
// Axis Bank ACE Credit Card Page - SEO Optimized with Rank Math
// Enhanced with structured data and SEO variables

// SEO Variables for Rank Math Integration

$card_name = "Axis Bank ACE Credit Card";
$bank_name = "Axis Bank";
$main_benefit = "5% Cashback on Bill Payments and Recharges";
$annual_fee = "₹499 + GST";
$welcome_benefit = "₹500 Gift Voucher";
$best_for = "Bill payments and utility expenses";
$apply_link = "https://www.axisbank.com/retail/cards/credit-card/ace-credit-card";

// Robust image logic for Axis ACE
$card_slug = 'axis-ace';
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

// Add structured data for SEO
add_action( 'wp_footer', 'axis_ace_structured_data' );
function axis_ace_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> - best card for utility expenses",
        "category": "Credit Card",
        "image": "<?php echo esc_url($card_img); ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?>",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "499",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.1",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "5234"
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
      <li class="breadcrumb-item"><a href="#">Axis Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">ACE Credit Card</li>
    </ol>
  </div>
</nav>

<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $card_name = 'Axis Bank ACE Credit Card';
    $card_description = 'Axis Bank ACE Credit Card offers 5% cashback on bill payments, 4% on Swiggy/Zomato, 2% on online shopping. ₹499 annual fee. Best utility bill payment credit card 2025.';
    $annual_fee = '₹499';
    $welcome_bonus = '₹500 Cashback';
    $min_income = '₹3,00,000';
    $card_network = 'Mastercard';
    $bank_name = 'Axis Bank';
    $rating = '4.4';
    $review_count = '2847';
    
    echo '<title>' . $card_name . ' - 5% Bill Payment Cashback Review & Apply 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $card_description . '">';
    echo '<meta name="keywords" content="Axis Bank ACE Credit Card, bill payment cashback, food delivery cashback, Axis Bank credit card, utility bills, Swiggy Zomato cashback">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $card_name . ' - Best Bill Payment Card 2025">';
    echo '<meta property="og:description" content="' . $card_description . '">';
    echo '<meta property="og:type" content="product">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . esc_url($card_img) . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $card_name . ' - Bill Payment Cashback">';
    echo '<meta name="twitter:description" content="' . $card_description . '">';
    echo '<meta name="twitter:image" content="' . esc_url($card_img) . '">';
    
    // Structured Data - Product Schema
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "' . $card_name . '",
        "description": "' . $card_description . '",
        "image": "' . esc_url($card_img) . '",
        "brand": {
            "@type": "Brand",
            "name": "' . $bank_name . '"
        },
        "category": "Credit Card",
        "offers": {
            "@type": "Offer",
            "description": "1.5% cashback on all online spends, 0.2% on offline spends - Entry-level cashback card",
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
                "reviewBody": "Axis Bank ACE Credit Card is perfect for bill payments and food delivery with excellent cashback rates."
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
                "name": "What is the cashback rate for bill payments on Axis Bank ACE Credit Card?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Axis Bank ACE Credit Card offers 5% cashback on utility bill payments through selected platforms."
                }
            },
            {
                "@type": "Question",
                "name": "What is the annual fee for Axis Bank ACE Credit Card?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The annual fee for Axis Bank ACE Credit Card is ₹499 + GST."
                }
            },
            {
                "@type": "Question",
                "name": "What cashback does Axis ACE offer on food delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Axis Bank ACE Credit Card offers 4% cashback on Swiggy and Zomato food delivery orders."
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
      <li class="breadcrumb-item active" aria-current="page">Axis Bank ACE Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo esc_url($card_img); ?>" alt="Axis ACE Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);"
         onerror="this.onerror=null;this.src='<?php echo $uploads . 'default-card.jpg'; ?>';">
</div>
          <div class="card-rating">
            <div class="stars">★★★★★</div>
            <span class="rating-text">4.6/5 (3,247 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1><?php echo $card_name; ?> 2025 - <?php echo $main_benefit; ?> | Apply Online</h1>
          <p class="card-tagline">Best cashback card for bill payments with Google Pay rewards</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Google Pay Cashback</span>
              <span class="highlight-value">5%</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Utility Cashback</span>
              <span class="highlight-value">2%</span>
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
          <div class="feature-icon">📱</div>
          <h3>5% Google Pay Cashback</h3>
          <p>Earn 5% cashback on Google Pay transactions up to ₹100 per month</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💡</div>
          <h3>2% Utility Cashback</h3>
          <p>Get 2% cashback on utility bill payments</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>2% Entertainment</h3>
          <p>Earn 2% cashback on Swiggy, Zomato, and BookMyShow</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3>1.5% Base Cashback</h3>
          <p>Get 1.5% cashback on all other spends</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p>₹500 cashback on first transaction within 45 days</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🔥</div>
          <h3>No Fee First Year</h3>
          <p>Zero annual fee for the first year</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cashback-breakdown">
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
              <td>Google Pay Transactions</td>
              <td>5%</td>
              <td>₹100 per month</td>
            </tr>
            <tr>
              <td>Utility Bills</td>
              <td>2%</td>
              <td>₹200 per month</td>
            </tr>
            <tr>
              <td>Swiggy, Zomato, BookMyShow</td>
              <td>2%</td>
              <td>₹200 per month</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1.5%</td>
              <td>No cap</td>
            </tr>
          </tbody>
        </table>
        
        <div class="cashback-info">
          <p><strong>Cashback Credit:</strong> Monthly on statement</p>
          <p><strong>Minimum Cashback:</strong> No minimum limit</p>
          <p><strong>Cashback Validity:</strong> No expiry</p>
        </div>
      </div>
    </div>
  </section>

  <section class="special-offers">
    <div class="container">
      <h2>Special Benefits</h2>
      
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">🛒</div>
          <h3>Shopping Offers</h3>
          <p>Exclusive deals on Amazon, Flipkart, and other e-commerce sites</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>1% fuel surcharge waiver at all petrol pumps nationwide</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🔒</div>
          <h3>Fraud Protection</h3>
          <p>Advanced security features and zero liability on fraudulent transactions</p>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">📞</div>
          <h3>24/7 Support</h3>
          <p>Round-the-clock customer service and assistance</p>
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
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">Nil</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value">First year free</span>
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
            <li>Age: 18-65 years</li>
            <li>Minimum Income: ₹15,000 per month (Salaried)</li>
            <li>Minimum Income: ₹1,80,000 per annum (Self-employed)</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Good credit history</li>
            <li>Active Google Pay usage preferred</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (recent utility bill)</li>
            <li>Income Proof (Latest 2-3 salary slips)</li>
            <li>Bank Statements (3 months)</li>
            <li>Form 16/ITR (if applicable)</li>
            <li>Employment certificate</li>
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
            <li>High cashback rate on Google Pay (5%)</li>
            <li>Good base cashback rate (1.5%)</li>
            <li>First year annual fee waived</li>
            <li>Instant cashback credit</li>
            <li>No minimum redemption</li>
            <li>Great for digital payments</li>
            <li>Low income requirements</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Low monthly caps on bonus categories</li>
            <li>Limited to specific merchants for 2% cashback</li>
            <li>No airport lounge access</li>
            <li>Basic insurance coverage</li>
            <li>Annual fee from second year</li>
            <li>Limited premium benefits</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for Axis Ace Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ Google Pay users</li>
            <li>✅ Digital payment enthusiasts</li>
            <li>✅ Utility bill payers</li>
            <li>✅ Food delivery app users</li>
            <li>✅ Young professionals</li>
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
              <select>
                <option value="">Do you use Google Pay regularly?</option>
                <option value="yes">Yes, frequently</option>
                <option value="sometimes">Sometimes</option>
                <option value="no">No</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
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
        <h3 class="faq-question">How to apply for Axis Bank ACE Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through the Axis Bank official website or visit the nearest Axis Bank branch with required documents including income proof and identity verification.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum income requirement for ACE Credit Card?</h3>
        <div class="faq-answer">
          <p>The minimum income requirement is ₹3,00,000 per annum for salaried individuals and ₹6,00,000 for self-employed individuals.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the cashback benefits on ACE Credit Card?</h3>
        <div class="faq-answer">
          <p>Get 5% cashback on bill payments via Google Pay, 4% on Swiggy/Zomato orders, and 2% on other online transactions with monthly caps.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee for Axis Bank ACE Credit Card?</h3>
        <div class="faq-answer">
          <p>Yes, the annual fee is ₹499 plus applicable taxes. The fee is waived off on spending ₹2,00,000 or more in the previous year.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="credit-card-container" style="text-align: center; margin: 20px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/images/cards/Axis-Atlas.jpg" alt="Axis Atlas Credit Card" class="credit-card-image" 
         style="max-width: 400px; width: 100%; height: auto; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
</div>

<?php get_footer(); ?>

