<?php 
// HDFC Regalia Credit Card - Clean Version
// SEO Optimized with Rank Math Integration

// SEO Variables for Rank Math Integration
$card_name = "HDFC Regalia Credit Card";
$bank_name = "HDFC Bank";
$main_benefit = "4X Reward Points on Dining and Shopping";
$annual_fee = "₹2,500 (Waived on annual spends of ₹3 lakhs)";
$welcome_benefit = "10,000 Welcome Reward Points";
$best_for = "Premium shopping, dining, and airport lounge access";
$apply_link = "https://leads.hdfcbank.com/applications/webforms/apply/HDFC_Regalia";

// Remove X-Powered-By header for security - Multiple methods for compatibility
add_action('init', function() {
    header_remove('X-Powered-By');
});

add_action('send_headers', function() {
    header_remove('X-Powered-By');
});

// Also try removing via WordPress filters
add_filter('wp_headers', function($headers) {
    unset($headers['X-Powered-By']);
    return $headers;
});

// Enhanced image path handling with multiple fallbacks
function get_hdfc_regalia_image_url($version = 'primary') {
    $base_path = get_template_directory_uri() . '/images/cards/';
    $fallback_base = home_url('/wp-content/themes/genesis-sample/images/cards/');
    
    $images = array(
        'primary' => 'HDFC-Regalia-Gold.jpg',
        'card_only' => 'HDFC-Regalia-Gold-card-only.jpg',
        'backup' => 'HDFC-Regalia-Gold-original-backup.jpg',
        'fallback' => 'hdfc-regalia-fallback.jpg'
    );
    
    // Try multiple paths
    $paths_to_try = array(
        $base_path . $images[$version],
        $fallback_base . $images[$version],
        $base_path . strtolower($images[$version]),
        $fallback_base . strtolower($images[$version])
    );
    
    return $paths_to_try;
}

// SEO Meta Tags for HDFC Regalia
add_action('wp_head', function() use ($card_name, $bank_name, $main_benefit, $annual_fee) {
    $page_title = 'HDFC Regalia Credit Card Review 2025 - 4X Reward Points | CardAdvisorHub';
    $page_keywords = 'HDFC Regalia credit card, HDFC Bank credit card, 4X reward points, airport lounge access, dining rewards, shopping rewards, premium credit card India';
    
    $image_urls = get_hdfc_regalia_image_url('primary');
    $primary_image = $image_urls[0];
    
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="HDFC Regalia Credit Card offers 4X reward points on dining & shopping, airport lounge access, and premium benefits. Annual fee waived on ₹3L spends.">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . $primary_image . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="HDFC Regalia Credit Card - 4X Reward Points">';
    echo '<meta name="twitter:description" content="HDFC Regalia Credit Card offers 4X reward points on dining & shopping, airport lounge access, and premium benefits.">';
    echo '<meta name="twitter:image" content="' . $primary_image . '">';
}, 1);

// Add structured data for SEO
add_action( 'wp_footer', 'hdfc_regalia_structured_data' );
function hdfc_regalia_structured_data() {
    global $card_name, $bank_name, $main_benefit, $annual_fee, $welcome_benefit, $apply_link;
    $image_urls = get_hdfc_regalia_image_url('primary');
    $primary_image = $image_urls[0];
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "<?php echo $card_name; ?>",
        "description": "<?php echo $card_name; ?> offering <?php echo $main_benefit; ?> with premium benefits and airport lounge access",
        "category": "Credit Card",
        "image": "<?php echo $primary_image; ?>",
        "brand": {
            "@type": "Brand",
            "name": "<?php echo $bank_name; ?>"
        },
        "offers": {
            "@type": "Offer",
            "description": "<?php echo $welcome_benefit; ?> + <?php echo $main_benefit; ?> + Airport lounge access",
            "url": "<?php echo $apply_link; ?>",
            "priceCurrency": "INR",
            "price": "2500",
            "priceValidUntil": "2025-12-31",
            "availability": "https://schema.org/InStock"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "bestRating": "5",
            "worstRating": "1",
            "reviewCount": "2847"
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
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">CardAdvisorHub Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Compare Credit Cards</a></li>
      <li class="breadcrumb-item active" aria-current="page">HDFC Regalia Credit Card</li>
    </ol>
  </div>
</nav>

<style>
/* Enhanced CSS with better image handling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero {
    background: linear-gradient(135deg, #8B0000, #DC143C);
    color: white;
    padding: 60px 0;
    text-align: center;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: 700;
}

.card-hero .tagline {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
}

.highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.highlight-box {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 8px;
    text-align: center;
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

/* Enhanced image styling with fallback handling */
.credit-card-image, .hero-card-image {
    max-width: 400px;
    width: 100%;
    height: auto;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    transition: opacity 0.3s ease, transform 0.3s ease;
    background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
}

.credit-card-image:hover, .hero-card-image:hover {
    transform: scale(1.02);
}

.image-container {
    position: relative;
    display: inline-block;
}

.image-loading {
    opacity: 0.7;
}

.image-error {
    opacity: 0.5;
    filter: grayscale(50%);
}

.image-fallback {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 14px;
    display: none;
}

.image-error .image-fallback {
    display: block;
}

/* Rest of the existing styles... */
.section {
    padding: 50px 0;
}

.section h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    text-align: center;
    color: #333;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.feature-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.feature-icon {
    font-size: 3rem;
    margin-bottom: 15px;
}

.feature-card h3 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #333;
}

.apply-btn {
    background: #007cba;
    color: white;
    padding: 15px 40px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}

.apply-btn:hover {
    background: #005a8a;
}

/* Card Details Section Styles */
.detail-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-top: 4px solid #DC143C;
}

.detail-card h3 {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #DC143C;
    font-weight: 600;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #f0f0f0;
}

.detail-item:last-child {
    border-bottom: none;
}

.detail-item .label {
    font-weight: 500;
    color: #555;
    flex: 1;
}

.detail-item .value {
    font-weight: 600;
    color: #333;
    text-align: right;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .card-hero h1 {
        font-size: 2rem;
    }
    
    .credit-card-image, .hero-card-image {
        max-width: 280px;
    }
    
    .container {
        padding: 0 15px;
    }
}

/* FAQ Dropdown Styles */
.faq-container {
    margin-top: 1rem;
}

.faq-item {
    border: 1px solid #e9ecef;
    border-radius: 8px;
    margin-bottom: 0.5rem;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.faq-question {
    padding: 1rem 1.5rem;
    background: #f8f9fa;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: #333;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background: #e9ecef;
}

.faq-question.active {
    background: #DC143C;
    color: white;
}

.faq-toggle {
    font-size: 1.2rem;
    font-weight: bold;
    transition: transform 0.3s ease;
}

.faq-question.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
    background: white;
}

.faq-answer.active {
    padding: 1rem 1.5rem;
    max-height: 200px;
}

.faq-answer p {
    margin: 0;
    line-height: 1.6;
    color: #555;
}

.faq-answer a {
    color: #DC143C;
    text-decoration: none;
    font-weight: 600;
}

.faq-answer a:hover {
    text-decoration: underline;
}
</style>

<main>
<!-- Hero Section -->
<section class="card-hero">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center;">
            <div>
                <h1><?php echo $card_name; ?> 2025 - Premium Benefits & Apply Online</h1>
                <p class="tagline"><?php echo $main_benefit; ?> | Complimentary Airport Lounge Access</p>
            </div>
            <div style="text-align: center;">
                <div class="image-container">
                    <img id="hero-card-image" 
                         class="hero-card-image image-loading" 
                         alt="HDFC Regalia Credit Card" 
                         itemprop="image"
                         style="max-width: 300px; width: 100%; height: auto; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.3);">
                    <div class="image-fallback">Image Loading...</div>
                </div>
            </div>
        </div>
        
        <div class="highlights">
            <div class="highlight-box">
                <div class="label">Annual Fee</div>
                <div class="value">₹2,500 + GST</div>
            </div>
            <div class="highlight-box">
                <div class="label">Welcome Bonus</div>
                <div class="value">10,000 Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Best Rewards</div>
                <div class="value">4X Points</div>
            </div>
            <div class="highlight-box">
                <div class="label">Rating</div>
                <div class="value">4.3/5 ⭐</div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="section">
    <div class="container">
        <h2>Key Features & Benefits</h2>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>4X Points on Dining</h3>
                <p>Earn 4 reward points per ₹150 spent on dining at restaurants and food delivery</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>4X Points on Travel</h3>
                <p>Get 4 reward points per ₹150 on airline tickets, hotels, and travel bookings</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛍️</div>
                <h3>2X Points on Shopping</h3>
                <p>Earn 2 reward points per ₹150 on all other purchases including shopping</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛂</div>
                <h3>Airport Lounge Access</h3>
                <p>Complimentary access to 700+ airport lounges worldwide including domestic</p>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Review Section -->
<section class="section">
    <div class="container">
        <h2>HDFC Regalia Credit Card Complete Review 2025</h2>
        
        <div style="display: grid; grid-template-columns: 1fr; gap: 30px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>Why Choose HDFC Regalia Credit Card?</h3>
                <p>The HDFC Regalia Credit Card stands out as one of India's premier mid-tier credit cards, offering exceptional value for money. With its attractive reward structure of 4X points on dining and travel, this card is perfect for urban professionals who frequently dine out and travel for business or leisure.</p>
                
                <p>What makes this card particularly appealing is its reasonable annual fee of ₹2,500, which can be completely waived with annual spending of ₹3 lakhs. This threshold is easily achievable for most cardholders, making it effectively a free premium credit card.</p>
                
                <p><strong>Target Audience:</strong> This card is ideal for young professionals with monthly income of ₹25,000+, frequent diners who spend significantly on restaurants and food delivery, regular travelers who book flights and hotels frequently, credit card enthusiasts looking for airport lounge access, and individuals who want premium benefits without paying high annual fees.</p>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>Reward Points Strategy & Redemption</h3>
                <p>The HDFC Regalia reward structure is designed to maximize value for everyday spending categories. Here's how to optimize your rewards:</p>
                
                <p><strong>Best Redemption Options:</strong> Flight Bookings provide ₹0.25 per point through HDFC SmartBuy portal, Hotel Reservations offer excellent value of ₹0.22-0.25 per point, Shopping Vouchers for Amazon and Flipkart are available at ₹0.20 per point, and Statement Credit provides ₹0.20 per point for cash-like redemption.</p>
                
                <p><strong>Annual Rewards Calculation:</strong> For a typical user spending ₹50,000 on dining and ₹30,000 on travel annually, plus ₹1,20,000 on other purchases, the card generates approximately 8,000 reward points worth ₹1,600-2,000 in value.</p>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>Airport Lounge Access Benefits</h3>
                <p>The HDFC Regalia provides comprehensive airport lounge access that rivals many premium cards:</p>
                
                <p><strong>Domestic Lounge Access:</strong> You get 6 complimentary visits per year to domestic airport lounges, access to HDFC Bank lounges across major Indian airports, Priority Pass equivalent access at select locations, and guest access available at nominal charges.</p>
                
                <p><strong>International Benefits:</strong> While primarily focused on domestic travel, the card also provides limited international lounge access through partner networks, making it suitable for occasional international travelers.</p>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>Comparison with Other Credit Cards</h3>
                <p>When compared to similar cards in the market, HDFC Regalia offers competitive advantages:</p>
                
                <p><strong>vs. HDFC Millennia:</strong> While Millennia offers 5% cashback on online spending, Regalia provides better dining rewards and lounge access, making it ideal for users who prioritize offline spending and travel benefits.</p>
                
                <p><strong>vs. Axis Magnus:</strong> Magnus offers higher rewards but comes with a ₹12,500 annual fee. Regalia provides excellent value at a much lower cost, perfect for users who want premium benefits without the high fee.</p>
                
                <p><strong>vs. SBI Prime:</strong> Both cards target similar audiences, but Regalia's 4X dining rewards and better redemption options give it an edge for food enthusiasts.</p>
            </div>
        </div>
    </div>
</section>

<!-- Card Details Section -->
<section class="section">
    <div class="container">
        <h2>HDFC Regalia Credit Card Details</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 40px 0;">
            <!-- Fees & Charges -->
            <div class="detail-card">
                <h3>💳 Fees & Charges</h3>
                <div class="detail-item">
                    <span class="label">Annual Fee:</span>
                    <span class="value">₹2,500 + GST</span>
                </div>
                <div class="detail-item">
                    <span class="label">Fee Waiver:</span>
                    <span class="value">On ₹3L annual spends</span>
                </div>
                <div class="detail-item">
                    <span class="label">Cash Advance Fee:</span>
                    <span class="value">2.5% (Min ₹500)</span>
                </div>
                <div class="detail-item">
                    <span class="label">Overlimit Fee:</span>
                    <span class="value">2.5% of overlimit amount</span>
                </div>
            </div>
            
            <!-- Reward Structure -->
            <div class="detail-card">
                <h3>🎁 Reward Structure</h3>
                <div class="detail-item">
                    <span class="label">Dining & Travel:</span>
                    <span class="value">4 points per ₹150</span>
                </div>
                <div class="detail-item">
                    <span class="label">All Other Purchases:</span>
                    <span class="value">2 points per ₹150</span>
                </div>
                <div class="detail-item">
                    <span class="label">Welcome Bonus:</span>
                    <span class="value">10,000 reward points</span>
                </div>
                <div class="detail-item">
                    <span class="label">Point Value:</span>
                    <span class="value">₹0.20 - ₹0.25 each</span>
                </div>
            </div>
            
            <!-- Benefits -->
            <div class="detail-card">
                <h3>✈️ Premium Benefits</h3>
                <div class="detail-item">
                    <span class="label">Airport Lounges:</span>
                    <span class="value">6 free domestic visits/year</span>
                </div>
                <div class="detail-item">
                    <span class="label">Insurance Cover:</span>
                    <span class="value">Up to ₹1 crore travel insurance</span>
                </div>
                <div class="detail-item">
                    <span class="label">Concierge Services:</span>
                    <span class="value">24/7 lifestyle services</span>
                </div>
                <div class="detail-item">
                    <span class="label">Dining Offers:</span>
                    <span class="value">Up to 15% discount</span>
                </div>
            </div>
            
            <!-- Eligibility -->
            <div class="detail-card">
                <h3>📋 Eligibility Criteria</h3>
                <div class="detail-item">
                    <span class="label">Age:</span>
                    <span class="value">21 - 60 years</span>
                </div>
                <div class="detail-item">
                    <span class="label">Income (Salaried):</span>
                    <span class="value">₹25,000/month</span>
                </div>
                <div class="detail-item">
                    <span class="label">Income (Self-employed):</span>
                    <span class="value">₹6 lakhs/year</span>
                </div>
                <div class="detail-item">
                    <span class="label">Credit Score:</span>
                    <span class="value">750+ preferred</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Process Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>How to Apply for HDFC Regalia Credit Card</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>📋 Application Requirements</h3>
                <p><strong>Documents Needed:</strong> PAN Card (mandatory), Aadhaar Card or Passport, Income proof (salary slips/ITR), Bank statements (3 months), and Address proof documents.</p>
                
                <p><strong>Processing Time:</strong> Typically 7-10 working days for approval and card delivery. Instant approval available for existing HDFC Bank customers with good relationship.</p>
            </div>
            
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <h3>💡 Application Tips</h3>
                <p><strong>Increase Approval Chances:</strong> Maintain credit score above 750, show stable income for 6+ months, keep debt-to-income ratio below 40%, avoid multiple credit inquiries, and consider starting with existing HDFC relationship.</p>
                
                <p><strong>Credit Limit Expectations:</strong> Initial limits typically range from ₹1 lakh to ₹5 lakhs based on income and credit profile. Limits can be enhanced after 6 months of good usage.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background: #f8f9fa;">
    <div class="container">
        <h2>Frequently Asked Questions - HDFC Regalia Credit Card</h2>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the eligibility criteria for HDFC Regalia Credit Card?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You need to be 21-60 years old with a minimum monthly income of ₹25,000 for salaried individuals or annual income of ₹6 lakhs for self-employed. Good credit score (750+) is preferred for instant approval.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I get the annual fee waived?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The annual fee of ₹2,500 + GST is waived if you spend ₹3 lakhs or more in the previous year. This makes it effectively free for regular users who meet the spending threshold.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the best way to maximize rewards with HDFC Regalia?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the card for dining and travel to earn 4X points (highest reward rate). Combine with <a href="/hdfc-millennia/">HDFC Millennia card</a> for online shopping or <a href="/axis-ace/">Axis ACE credit card</a> for bill payments to create an optimal reward strategy.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I redeem HDFC reward points?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Points can be redeemed through HDFC SmartBuy portal for shopping, flights, hotels, or statement credit. 1 point = ₹0.20-0.25 value depending on redemption method. Flight bookings typically offer the best value.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What airport lounges can I access with HDFC Regalia?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You get access to 700+ airport lounges worldwide including domestic lounges in India, Priority Pass lounges, and HDFC Bank lounges. 6 complimentary domestic lounge visits per year are included.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apply Section -->
<section class="apply-section" style="background: #f8f9fa; padding: 50px 0; text-align: center;">
    <div class="container">
        <h2>Apply for HDFC Regalia Credit Card</h2>
        <p>Get instant approval with our simplified application process</p>
        <a href="<?php echo $apply_link; ?>" class="apply-btn" target="_blank" rel="noopener">Apply Now</a>
    </div>
</section>

</main>

<?php get_footer(); ?>

<script>
// FAQ Toggle Function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    
    // Close other open FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.querySelector('.faq-question').classList.remove('active');
            item.querySelector('.faq-answer').classList.remove('active');
        }
    });
    
    // Toggle current FAQ
    element.classList.toggle('active');
    answer.classList.toggle('active');
}

// Enhanced image loading with multiple fallback strategies
document.addEventListener('DOMContentLoaded', function() {
    console.log('📄 HDFC Regalia page loaded - initializing image fallback system...');
    
    // Define multiple image sources with different paths and cases
    const imageSources = [
        // Primary paths
        '<?php echo get_template_directory_uri(); ?>/images/cards/HDFC-Regalia-Gold.jpg',
        '<?php echo get_template_directory_uri(); ?>/images/cards/HDFC-Regalia-Gold-card-only.jpg',
        '<?php echo get_template_directory_uri(); ?>/images/cards/HDFC-Regalia-Gold-original-backup.jpg',
        
        // Alternative paths
        '<?php echo home_url(); ?>/wp-content/themes/genesis-sample/images/cards/HDFC-Regalia-Gold.jpg',
        '<?php echo home_url(); ?>/wp-content/themes/genesis-sample/images/cards/HDFC-Regalia-Gold-card-only.jpg',
        
        // Lowercase versions
        '<?php echo get_template_directory_uri(); ?>/images/cards/hdfc-regalia-gold.jpg',
        '<?php echo home_url(); ?>/wp-content/themes/genesis-sample/images/cards/hdfc-regalia-gold.jpg',
        
        // Fallback to a placeholder
        'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="400" height="252"%3E%3Crect width="400" height="252" rx="20" fill="%23DC143C"/%3E%3Ctext x="30" y="60" font-family="Arial" font-size="24" font-weight="bold" fill="%23FFF"%3EHDFC Bank%3C/text%3E%3Ctext x="30" y="90" font-family="Arial" font-size="18" fill="%23FFD700"%3ERegalia%3C/text%3E%3Ctext x="30" y="120" font-family="Arial" font-size="14" fill="%23FFF"%3EPremium Credit Card%3C/text%3E%3Ctext x="30" y="180" font-family="Arial" font-size="12" fill="%23FFF"%3E•••• •••• •••• 1234%3C/text%3E%3Ctext x="30" y="210" font-family="Arial" font-size="10" fill="%23FFF"%3ECARDHOLDER NAME%3C/text%3E%3C/svg%3E'
    ];
    
    let currentImageIndex = 0;
    
    function loadImageWithFallback(imgElement, imageId) {
        if (currentImageIndex >= imageSources.length) {
            console.error('❌ All image sources failed for', imageId);
            imgElement.classList.add('image-error');
            imgElement.classList.remove('image-loading');
            return;
        }
        
        const currentSrc = imageSources[currentImageIndex];
        console.log(`📄 Trying image source ${currentImageIndex + 1}/${imageSources.length} for ${imageId}:`, currentSrc);
        
        imgElement.classList.add('image-loading');
        imgElement.classList.remove('image-error');
        
        // Test if the image loads
        const testImg = new Image();
        testImg.onload = function() {
            console.log('✅ Image loaded successfully:', currentSrc);
            imgElement.src = currentSrc;
            imgElement.classList.remove('image-loading');
            imgElement.classList.add('image-loaded');
        };
        
        testImg.onerror = function() {
            console.warn('⚠️ Image failed, trying next source:', currentSrc);
            currentImageIndex++;
            setTimeout(() => loadImageWithFallback(imgElement, imageId), 100);
        };
        
        testImg.src = currentSrc;
    }
    
    // Initialize hero card image only
    const heroCardImage = document.getElementById('hero-card-image');
    if (heroCardImage) {
        loadImageWithFallback(heroCardImage, 'hero-card');
    }
    
    // Add retry functionality
    window.retryImages = function() {
        console.log('🔄 Retrying image loading...');
        currentImageIndex = 0;
        if (heroCardImage) {
            loadImageWithFallback(heroCardImage, 'hero-card');
        }
    };
    
    // Debug information
    console.log('🔍 Available image sources:', imageSources);
    console.log('🌐 Current URL:', window.location.href);
    console.log('📁 Theme directory:', '<?php echo get_template_directory_uri(); ?>');
});
</script>
