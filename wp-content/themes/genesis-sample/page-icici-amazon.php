<?php 
// ICICI Amazon Pay Credit Card Page - SEO Optimized
// Primary Keyword: ICICI Amazon Pay Credit Card
// Secondary Keywords: Amazon Pay cashback, ICICI credit card benefits, Prime membership credit card

// SEO Variables for this specific card
$card_name = "ICICI Amazon Pay Credit Card";
$bank_name = "ICICI Bank";
$main_benefit = "5% Cashback on Amazon for Prime Members";
$annual_fee = "Lifetime Free";
$card_type = "Cashback Rewards Card";
$year = date('Y');

// SEO Meta Tags for ICICI Amazon Pay
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'ICICI Amazon Pay Credit Card Review 2025 - 5% Cashback | CardAdvisorHub';
    $page_description = 'ICICI Amazon Pay Credit Card: Get 5% cashback on Amazon (Prime members), 2% on bill payments, lifetime free card. Best Amazon credit card in India. Apply online now.';
    $page_keywords = 'ICICI Amazon Pay credit card, Amazon cashback card, ICICI Bank credit card, Prime membership benefits, 5% Amazon cashback, lifetime free credit card';
    
    echo '<title>' . $page_title . '</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/icici-amazon-pay-card.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="ICICI Amazon Pay Credit Card - 5% Cashback">';
    echo '<meta name="twitter:description" content="' . $page_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/icici-amazon-pay-card.jpg">';
}, 1);

get_header();
?>

<!-- Enhanced SEO Meta Tags and Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "<?php echo $card_name; ?>",
    "description": "Get 5% cashback on Amazon purchases with <?php echo $card_name; ?>. Lifetime free with no annual fee. Apply online for instant approval.",
    "category": "Credit Card",
    "image": "<?php echo get_template_directory_uri(); ?>/images/icici-amazon-pay-card.jpg",
    "brand": {
        "@type": "Brand",
        "name": "<?php echo $bank_name; ?>"
    },
    "offers": {
        "@type": "Offer",
        "description": "5% cashback on Amazon purchases for Prime members, 3% for non-Prime members",
        "url": "<?php echo get_permalink(); ?>#apply",
        "priceCurrency": "INR",
        "price": "0",
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
        "ratingValue": "4.2",
        "reviewCount": "1250",
        "bestRating": "5",
        "worstRating": "1"
    }
}
</script>

<!-- Breadcrumb Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "<?php echo home_url(); ?>"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Credit Cards",
            "item": "<?php echo home_url('/compare-cards/'); ?>"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo $card_name; ?>",
            "item": "<?php echo get_permalink(); ?>"
        }
    ]
}
</script>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">ICICI Amazon Pay Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS for ICICI Amazon Pay Credit Card */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #FF6B35, #F7931E);
    color: white;
    padding: 60px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.card-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
    position: relative;
    z-index: 1;
}

.card-hero .tagline {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    position: relative;
    z-index: 1;
}

.highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 30px 0;
    position: relative;
    z-index: 1;
}

.highlight-box {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.highlight-box .label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin-bottom: 5px;
}

.highlight-box .value {
    font-size: 1.3rem;
    font-weight: 600;
}

.content-wrapper {
    background: white;
    margin: -30px 20px 0;
    border-radius: 20px 20px 0 0;
    box-shadow: 0 -10px 30px rgba(0,0,0,0.1);
    position: relative;
    z-index: 2;
}

.content-section {
    padding: 40px;
}

.section-title {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 600;
    border-bottom: 3px solid #FF6B35;
    padding-bottom: 10px;
    display: inline-block;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.benefit-card {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 12px;
    border-left: 4px solid #FF6B35;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.benefit-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.benefit-description {
    color: #666;
    line-height: 1.6;
}

.cashback-highlight {
    background: linear-gradient(135deg, #FF6B35, #F7931E);
    color: white;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    margin: 30px 0;
}

.cashback-rate {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.cashback-description {
    font-size: 1.1rem;
    opacity: 0.9;
}

.apply-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 40px;
    text-align: center;
    border-radius: 15px;
    margin: 30px 0;
}

.apply-btn {
    background: white;
    color: #667eea;
    padding: 15px 40px;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}

.apply-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    color: #667eea;
    text-decoration: none;
}

.features-list {
    list-style: none;
    padding: 0;
}

.features-list li {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 30px;
}

.features-list li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #28a745;
    font-weight: bold;
    font-size: 1.2rem;
}

.features-list li:last-child {
    border-bottom: none;
}

.warning-box {
    background: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: 8px;
    padding: 20px;
    margin: 20px 0;
    color: #856404;
}

.warning-box strong {
    color: #533f03;
}

.eligibility-section {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 12px;
    margin: 30px 0;
}

.eligibility-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.eligibility-item {
    background: white;
    padding: 20px;
    border-radius: 8px;
    border-left: 4px solid #17a2b8;
}

.eligibility-label {
    font-weight: 600;
    color: #17a2b8;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.eligibility-value {
    font-size: 1.1rem;
    color: #333;
}

@media (max-width: 768px) {
    .card-hero h1 {
        font-size: 2rem;
    }
    
    .content-section {
        padding: 20px;
    }
    
    .highlights {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .cashback-rate {
        font-size: 2.5rem;
    }
}
</style>

<div class="card-hero">
    <div class="container">
        <h1>ICICI Amazon Pay Credit Card</h1>
        <p class="tagline">Best Credit Card for Amazon Shopping with 5% Cashback</p>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Amazon Cashback</div>
                <div class="value">5%</div>
            </div>
            <div class="highlight-box">
                <div class="label">Bill Payment</div>
                <div class="value">2%</div>
            </div>
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">Lifetime Free</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">₹500</div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="container">
        <div class="content-section">
            <div class="cashback-highlight">
                <div class="cashback-rate">5%</div>
                <div class="cashback-description">Unlimited Cashback on Amazon Purchases</div>
                <p style="font-size: 0.9rem; margin-top: 15px; opacity: 0.8;">
                    For Prime members | 3% for non-Prime members
                </p>
            </div>

            <h2 class="section-title">Key Benefits & Features</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-title">🛒 Amazon Shopping Rewards</div>
                    <div class="benefit-description">
                        Earn 5% cashback on Amazon purchases for Prime members and 3% for non-Prime members. No upper limit on cashback earnings.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">💳 Bill Payment Cashback</div>
                    <div class="benefit-description">
                        Get 2% cashback on utility bill payments through Amazon Pay. Includes electricity, gas, water, mobile, and DTH bills.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">🎁 Welcome Bonus</div>
                    <div class="benefit-description">
                        Receive ₹500 Amazon Pay Gift Card upon approval and first transaction within 30 days of card activation.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">🆓 Lifetime Free</div>
                    <div class="benefit-description">
                        No annual fee, no joining fee, no hidden charges. Truly lifetime free credit card with premium benefits.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">📱 Easy Management</div>
                    <div class="benefit-description">
                        Manage your card through ICICI Bank mobile app, Amazon app, or internet banking. Real-time notifications and instant support.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">🔒 Secure Transactions</div>
                    <div class="benefit-description">
                        Advanced security features including EMV chip, contactless payments, and fraud protection for safe online and offline transactions.
                    </div>
                </div>
            </div>

            <h2 class="section-title">Detailed Features</h2>
            <ul class="features-list">
                <li><strong>5% Amazon Cashback:</strong> Unlimited cashback on Amazon purchases for Prime members</li>
                <li><strong>3% Non-Prime Cashback:</strong> Great rewards even without Prime membership</li>
                <li><strong>2% Bill Payment Rewards:</strong> Extra savings on utility bill payments</li>
                <li><strong>1% Other Purchases:</strong> Cashback on all other transactions</li>
                <li><strong>Amazon Pay Integration:</strong> Seamless integration with Amazon Pay wallet</li>
                <li><strong>Instant Digital Card:</strong> Start using immediately after approval</li>
                <li><strong>Contactless Payments:</strong> Tap and pay for transactions up to ₹5,000</li>
                <li><strong>24/7 Customer Support:</strong> Round-the-clock assistance for all queries</li>
                <li><strong>Mobile App Control:</strong> Complete card management through mobile apps</li>
                <li><strong>No Foreign Transaction Fee:</strong> Use internationally without extra charges</li>
            </ul>

            <div class="warning-box">
                <strong>Important:</strong> Cashback is credited as Amazon Pay balance, not cash. Amazon Pay balance can be used for Amazon purchases, bill payments, and at select partner merchants.
            </div>

            <h2 class="section-title">Eligibility Criteria</h2>
            <div class="eligibility-section">
                <p>Check if you meet the requirements for ICICI Amazon Pay Credit Card:</p>
                <div class="eligibility-grid">
                    <div class="eligibility-item">
                        <div class="eligibility-label">Age Requirement</div>
                        <div class="eligibility-value">21 to 60 years</div>
                    </div>
                    <div class="eligibility-item">
                        <div class="eligibility-label">Minimum Income</div>
                        <div class="eligibility-value">₹3,00,000 per annum</div>
                    </div>
                    <div class="eligibility-item">
                        <div class="eligibility-label">Credit Score</div>
                        <div class="eligibility-value">750+ (preferred)</div>
                    </div>
                    <div class="eligibility-item">
                        <div class="eligibility-label">Employment</div>
                        <div class="eligibility-value">Salaried or Self-employed</div>
                    </div>
                    <div class="eligibility-item">
                        <div class="eligibility-label">Residence</div>
                        <div class="eligibility-value">Indian Resident</div>
                    </div>
                    <div class="eligibility-item">
                        <div class="eligibility-label">Documentation</div>
                        <div class="eligibility-value">PAN, Aadhaar, Income Proof</div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">How to Apply</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-title">1️⃣ Online Application</div>
                    <div class="benefit-description">
                        Visit ICICI Bank website or Amazon and fill the online application form with personal and income details.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">2️⃣ Document Upload</div>
                    <div class="benefit-description">
                        Upload required documents including PAN card, Aadhaar card, income proof, and address proof.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">3️⃣ Instant Approval</div>
                    <div class="benefit-description">
                        Get instant approval for eligible applicants. Digital card available immediately for online use.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">4️⃣ Physical Card Delivery</div>
                    <div class="benefit-description">
                        Physical card delivered to your address within 7-10 working days. Activate and start earning cashback.
                    </div>
                </div>
            </div>

            <div class="apply-section">
                <h3 style="margin: 0 0 15px 0;">Ready to Start Earning 5% Cashback?</h3>
                <p style="margin: 0 0 20px 0; opacity: 0.9;">Join millions of satisfied customers and get the best Amazon shopping experience</p>
                <a href="https://www.icicibank.com/credit-card/amazon-pay" class="apply-btn" target="_blank" rel="noopener">Apply Now - Instant Approval</a>
                <p style="font-size: 0.9rem; margin-top: 15px; opacity: 0.8;">
                    ✓ Lifetime Free ✓ Instant Digital Card ✓ No Annual Fee ✓ 24/7 Support
                </p>
            </div>

            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-title">Is this card really lifetime free?</div>
                    <div class="benefit-description">
                        Yes, ICICI Amazon Pay Credit Card is completely lifetime free with no annual fee or joining fee ever.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">How is cashback credited?</div>
                    <div class="benefit-description">
                        Cashback is credited as Amazon Pay balance within 2-3 working days of transaction settlement.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">Can I use Amazon Pay balance anywhere?</div>
                    <div class="benefit-description">
                        Amazon Pay balance can be used on Amazon, for bill payments, and at participating merchants.
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-title">What if I don't have Prime membership?</div>
                    <div class="benefit-description">
                        Non-Prime members still get 3% cashback on Amazon purchases, making it worthwhile.
                    </div>
                </div>
            </div>

            <div class="warning-box">
                <strong>Disclaimer:</strong> Credit card approval is subject to ICICI Bank's terms and conditions. Interest rates, fees, and rewards are subject to change. Please read all terms carefully before applying.
            </div>
        </div>
    </div>

    <!-- FAQ SECTION -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-items">
            
            <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
                <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">What is the processing time for ICICI Amazon Pay Credit Card?</div>
                <div style="padding: 20px; color: #666; line-height: 1.6;">The card is typically processed within 7-10 working days from application submission. Instant approval is available for eligible existing ICICI customers. Digital card is available within 24-48 hours.</div>
            </div>
            
            <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
                <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">Do I need Amazon Prime membership for this card?</div>
                <div style="padding: 20px; color: #666; line-height: 1.6;">Prime membership is not mandatory but highly recommended. Prime members get 5% cashback on Amazon purchases while non-Prime members get 3% cashback.</div>
            </div>
            
            <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
                <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">Is there any annual fee for this card?</div>
                <div style="padding: 20px; color: #666; line-height: 1.6;">No, this is a lifetime free credit card with no annual fee, no joining fee, and no hidden charges. It remains free for life.</div>
            </div>
            
            <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
                <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">How do I redeem Amazon Pay cashback?</div>
                <div style="padding: 20px; color: #666; line-height: 1.6;">Cashback is automatically credited to your Amazon Pay balance within 2-3 business days. You can use this balance for shopping on Amazon, bill payments, or at partner merchants.</div>
            </div>
            
            <div style="background: white; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden;">
                <div style="padding: 20px; font-weight: bold; border-bottom: 1px solid #eee; background: #f8f9fa;">What are the income requirements?</div>
                <div style="padding: 20px; color: #666; line-height: 1.6;">Minimum monthly income of ₹20,000 for salaried individuals or ₹3 lakh annual income for self-employed. The card has relatively low income requirements making it accessible to many.</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
