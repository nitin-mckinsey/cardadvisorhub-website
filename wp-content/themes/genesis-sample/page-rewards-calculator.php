<?php 
// SEO Meta Tags for Rewards Calculator
add_action('wp_head', function() {
    $page_title = 'Credit Card Rewards Calculator India 2025 | CardAdvisorHub';
    $page_description = 'Calculate and compare credit card rewards with our advanced calculator. Find the best credit cards based on your spending patterns. HDFC, SBI, ICICI, Axis Bank cards comparison with instant rewards calculation.';
    $page_keywords = 'credit card rewards calculator, credit card comparison, rewards points calculator, cashback calculator, HDFC rewards, SBI rewards, ICICI rewards, Axis Bank rewards, best credit card calculator India';
    
    echo '<title>' . $page_title . '</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/rewards-calculator-tool.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="Credit Card Rewards Calculator | CardAdvisorHub">';
    echo '<meta name="twitter:description" content="' . $page_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/rewards-calculator-tool.jpg">';
    
    // Structured Data for Calculator Tool
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Credit Card Rewards Calculator",
        "description": "' . $page_description . '",
        "url": "' . get_permalink() . '",
        "applicationCategory": "FinanceApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "featureList": [
            "Calculate credit card rewards and cashback",
            "Compare multiple credit cards",
            "Personalized recommendations",
            "Monthly and annual spending analysis",
            "Best card suggestions based on spending patterns"
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
                "name": "Tools",
                "item": "' . home_url() . '/tools"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Rewards Calculator",
                "item": "' . get_permalink() . '"
            }
        ]
    }
    </script>';
    
    // Performance optimization - preload critical resources
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/style.css" as="style">';
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">';
    
    // Inline critical CSS for above-the-fold content
    echo '<style>
    .rewards-calculator{background:#f8f9fa;min-height:100vh;padding:2rem 0}
    .page-header{background:linear-gradient(135deg,#007cba 0%,#005a8a 100%);color:white;padding:4rem 0;text-align:center;margin-bottom:3rem}
    .page-header h1{font-size:2.5rem;margin-bottom:1rem;font-weight:700}
    .page-header p{font-size:1.2rem;opacity:0.9;max-width:600px;margin:0 auto}
    .container{max-width:1200px;margin:0 auto;padding:0 2rem}
    </style>';
}, 1);

get_header(); ?>

<!-- Deferred CSS loading for better performance -->
<script>
function loadCSS(href) {
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    link.media = 'print';
    link.onload = function() { this.media = 'all'; };
    document.head.appendChild(link);
}
// Load non-critical CSS after page load
window.addEventListener('load', function() {
    loadCSS('data:text/css,' + encodeURIComponent(`
.rewards-calculator {
    background: #f8f9fa;
    min-height: 100vh;
    padding: 2rem 0;
}

.page-header {
    background: linear-gradient(135deg, #007cba 0%, #005a8a 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
    margin-bottom: 3rem;
}

.page-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.page-header p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.calculator-section {
    margin-bottom: 4rem;
}

.instructions-banner {
    background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
    padding: 1.5rem 2rem;
    border-radius: 8px;
    margin-bottom: 3rem;
    border-left: 4px solid #28a745;
    text-align: center;
}

.instructions-banner h3 {
    color: #155724;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
}

.instructions-banner p {
    color: #155724;
    margin: 0;
    font-size: 1rem;
    line-height: 1.5;
}

.calculator-wrapper {
    display: flex;
    flex-direction: column;
    gap: 3rem;
}

.calculator-inputs {
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
}

.calculator-inputs h2 {
    color: #333;
    margin-bottom: 2rem;
    font-size: 1.8rem;
    text-align: center;
}

.spending-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.category-input {
    display: flex;
    flex-direction: column;
}

.category-input label {
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.category-input input {
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.category-input input:focus {
    outline: none;
    border-color: #007cba;
    box-shadow: 0 0 0 3px rgba(0, 124, 186, 0.1);
}

.total-spending {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    text-align: center;
    border: 2px solid #e9ecef;
}

.total-spending h3 {
    margin: 0.5rem 0;
    color: #333;
    font-size: 1.1rem;
}

.total-spending h3:first-child {
    color: #007cba;
    font-size: 1.3rem;
}

.calculator-results {
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: none; /* Hidden by default */
}

.calculator-results.visible {
    display: block;
    animation: fadeInUp 0.6s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.calculator-results h2 {
    color: #333;
    margin-bottom: 2rem;
    font-size: 1.8rem;
    text-align: center;
}

.results-grid {
    display: grid;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.results-info {
    background: linear-gradient(135deg, #e3f2fd 0%, #f0f8ff 100%);
    padding: 1rem 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #2196f3;
    margin-bottom: 1rem;
}

.info-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.info-icon {
    font-size: 1.2rem;
}

.info-text {
    color: #1565c0;
    font-weight: 600;
    font-size: 0.95rem;
}

.result-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #007cba;
    transition: transform 0.3s ease;
    position: relative;
}

.result-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.result-card.recommended {
    border-left-color: #28a745;
    background: linear-gradient(135deg, #d4edda 0%, #f8f9fa 100%);
}

.badge {
    position: absolute;
    top: -10px;
    right: 15px;
    background: #28a745;
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
}

.result-card h3 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.reward-details {
    display: grid;
    gap: 0.75rem;
}

.reward-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 0;
}

.reward-item.total {
    border-top: 2px solid #e9ecef;
    margin-top: 0.5rem;
    font-weight: 600;
}

.reward-item label {
    color: #666;
    font-weight: 500;
}

.amount {
    color: #28a745;
    font-weight: 600;
}

.fee {
    color: #dc3545;
    font-weight: 600;
}

.net-value.positive {
    color: #28a745;
    font-weight: 700;
    font-size: 1.1rem;
}

.net-value.negative {
    color: #dc3545;
    font-weight: 700;
}

.best-recommendation {
    background: linear-gradient(135deg, #e3f2fd 0%, #f8f9fa 100%);
    padding: 2rem;
    border-radius: 8px;
    border: 2px solid #2196f3;
    margin-top: 2rem;
}

.best-recommendation h3 {
    color: #1976d2;
    margin-bottom: 1rem;
    text-align: center;
}

.recommendation-card {
    text-align: center;
}

.recommendation-card h4 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.3rem;
}

.rec-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

.view-all-section {
    text-align: center;
    margin-top: 2rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #dee2e6;
}

.view-all-section p {
    color: #666;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.btn {
    padding: 0.75rem 1.5rem;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 1rem;
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
    display: block;
}

.btn-primary {
    background: #007cba;
    color: white;
}

.btn-primary:hover {
    background: #005a8a;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: #007cba;
    border: 2px solid #007cba;
}

.btn-outline:hover {
    background: #007cba;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #545b62;
}

/* Preset Profiles Section */
.preset-profiles {
    background: white;
    padding: 4rem 0;
    margin-top: 4rem;
}

.preset-profiles h2 {
    text-align: center;
    color: #333;
    margin-bottom: 1rem;
    font-size: 2rem;
}

.preset-profiles p {
    text-align: center;
    color: #666;
    margin-bottom: 3rem;
    font-size: 1.1rem;
}

.profiles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.profile-card {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.profile-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border-color: #007cba;
}

.profile-card.selected {
    border-color: #007cba;
    background: linear-gradient(135deg, #e3f2fd 0%, #f8f9fa 100%);
}

.profile-card h3 {
    color: #333;
    margin-bottom: 1rem;
    text-align: center;
}

.profile-card p {
    color: #666;
    margin-bottom: 1rem;
    text-align: center;
    font-size: 0.9rem;
}

.profile-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.profile-card li {
    padding: 0.25rem 0;
    color: #666;
    font-size: 0.9rem;
    display: flex;
    justify-content: space-between;
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
    background: #007cba;
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
    color: #007cba;
    text-decoration: none;
    font-weight: 600;
}

.faq-answer a:hover {
    text-decoration: underline;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .spending-categories {
        grid-template-columns: 1fr;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .calculator-inputs,
    .calculator-results {
        padding: 1.5rem;
        margin: 0 1rem;
    }
    
    .profiles-grid {
        grid-template-columns: 1fr;
    }
    
    .rec-actions {
        flex-direction: column;
    }
    
    .container {
        padding: 0 1rem;
    }
    
    .btn {
        width: 100%;
        max-width: none;
    }
}

@media (max-width: 480px) {
    .page-header {
        padding: 2rem 0;
    }
    
    .calculator-inputs,
    .calculator-results {
        padding: 1rem;
    }
    
    .total-spending {
        padding: 1rem;
    }
    
    /* Rewards Guide Section */
    .rewards-guide {
        background: #f8f9fa;
        padding: 4rem 0;
        margin-top: 3rem;
    }
    
    .rewards-guide h2 {
        text-align: center;
        color: #1a1a1a;
        margin-bottom: 3rem;
        font-size: 2rem;
    }
    
    .guide-content {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .guide-section {
        background: white;
        padding: 2rem;
        margin-bottom: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .guide-section h3 {
        color: #007cba;
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }
    
    .guide-section p {
        line-height: 1.6;
        color: #555;
        margin-bottom: 1rem;
    }
}`));
});
</script>

<main class="rewards-calculator">
  <section class="page-header">
    <div class="container">
      <h1>Credit Card Rewards Calculator India 2025 - Compare Cashback & Points</h1>
      <p>Calculate and compare potential rewards, cashback, and points earnings from different credit cards based on your spending pattern. Find the best HDFC, SBI, ICICI, and Axis Bank credit cards for maximum rewards.</p>
    </div>
  </section>

  <section class="calculator-section">
    <div class="container">
      <!-- Instructions -->
      <div class="instructions-banner">
        <h3>🎯 How to Use This Calculator</h3>
        <p>1. Enter your monthly spending amounts in each category below (or select a spending profile that matches your lifestyle)<br>
        2. Click <strong>"Calculate Rewards"</strong> to see which credit cards will give you the best value<br>
        3. Compare the top recommendations and click "View Details" to learn more about each card</p>
      </div>

      <div class="calculator-wrapper">
        
        <!-- Input Section -->
        <div class="calculator-inputs">
          <h2>Calculate Credit Card Rewards - Enter Your Monthly Spending Categories</h2>
          
          <div class="spending-categories">
            <div class="category-input">
              <label for="groceries">🛒 Groceries & Supermarkets</label>
              <input type="number" id="groceries" value="5000" min="0">
            </div>
            
            <div class="category-input">
              <label for="dining">🍽️ Dining & Restaurants</label>
              <input type="number" id="dining" value="3000" min="0">
            </div>
            
            <div class="category-input">
              <label for="fuel">⛽ Fuel & Gas Stations</label>
              <input type="number" id="fuel" value="4000" min="0">
            </div>
            
            <div class="category-input">
              <label for="travel">✈️ Travel & Transportation</label>
              <input type="number" id="travel" value="2000" min="0">
            </div>
            
            <div class="category-input">
              <label for="online-shopping">🛍️ Online Shopping</label>
              <input type="number" id="online-shopping" value="6000" min="0">
            </div>
            
            <div class="category-input">
              <label for="bills">📱 Bill Payments & Utilities</label>
              <input type="number" id="bills" value="3000" min="0">
            </div>
            
            <div class="category-input">
              <label for="entertainment">🎬 Entertainment & Movies</label>
              <input type="number" id="entertainment" value="1500" min="0">
            </div>
            
            <div class="category-input">
              <label for="others">💳 Other Spends</label>
              <input type="number" id="others" value="5000" min="0">
            </div>
          </div>
          
          <div class="total-spending">
            <h3>Total Monthly Spending: <span id="total-amount">₹0</span></h3>
            <h3>Total Annual Spending: <span id="annual-amount">₹0</span></h3>
          </div>
          
          <button id="calculate-btn" class="btn btn-primary" style="font-size: 1.2rem; padding: 1rem 2rem; margin-top: 1rem;">🏆 Calculate Best Credit Cards</button>
        </div>

        <!-- Results Section -->
        <div class="calculator-results" id="results-section">
          <h2>🏆 Best Credit Card Recommendations Based on Your Spending Pattern</h2>
          
          <div class="results-grid" id="results-grid">
            <!-- Results will be populated by JavaScript -->
          </div>
          
          <div class="best-recommendation">
            <h3>💡 Our Recommendation</h3>
            <div id="recommendation-content">
              <!-- Recommendation will be populated by JavaScript -->
            </div>
          </div>
          
          <div class="view-all-section">
            <p>Want to see detailed comparison of all cards?</p>
            <a href="/compare-cards" class="btn btn-outline btn-large">View All Cards Comparison →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Preset Spending Profiles -->
  <section class="preset-profiles">
    <div class="container">
      <h2>Credit Card Rewards Calculator - Quick Spending Profiles for Different Lifestyles</h2>
      <p>Select a spending profile that matches your lifestyle to instantly calculate the best credit card rewards for your situation:</p>
      
      <div class="profiles-grid">
        <div class="profile-card" data-profile="student">
          <h3>🎓 Student</h3>
          <p>Low spending, focus on online shopping and food delivery</p>
          <ul>
            <li>Online Shopping: ₹3,000</li>
            <li>Food Delivery: ₹2,000</li>
            <li>Entertainment: ₹1,000</li>
            <li>Others: ₹2,000</li>
          </ul>
        </div>
        
        <div class="profile-card" data-profile="young-professional">
          <h3>💼 Young Professional</h3>
          <p>Moderate spending, dining and travel focused</p>
          <ul>
            <li>Dining: ₹4,000</li>
            <li>Travel: ₹3,000</li>
            <li>Online Shopping: ₹5,000</li>
            <li>Fuel: ₹2,500</li>
            <li>Others: ₹5,500</li>
          </ul>
        </div>
        
        <div class="profile-card" data-profile="family">
          <h3>👨‍👩‍👧‍👦 Family</h3>
          <p>High spending on groceries, fuel, and utilities</p>
          <ul>
            <li>Groceries: ₹8,000</li>
            <li>Fuel: ₹5,000</li>
            <li>Bills: ₹4,000</li>
            <li>Online Shopping: ₹7,000</li>
            <li>Others: ₹8,000</li>
          </ul>
        </div>
        
        <div class="profile-card" data-profile="business">
          <h3>🏢 Business Owner</h3>
          <p>High spending across all categories</p>
          <ul>
            <li>Travel: ₹10,000</li>
            <li>Dining: ₹6,000</li>
            <li>Fuel: ₹8,000</li>
            <li>Online Shopping: ₹10,000</li>
            <li>Others: ₹15,000</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Credit Card Rewards Guide Section -->
  <section class="rewards-guide">
    <div class="container">
      <h2>Understanding Credit Card Rewards in India - Complete Guide 2025</h2>
      
      <div class="guide-content">
        <div class="guide-section">
          <h3>How Credit Card Rewards Work</h3>
          <p>Credit card rewards in India come in three main forms: cashback, reward points, and miles. Our calculator helps you compare all types to find the maximum value from your spending. HDFC Bank, SBI, ICICI Bank, and Axis Bank offer different reward structures - some give flat rates while others offer accelerated rewards on specific categories like dining, fuel, or online shopping.</p>
        </div>
        
        <div class="guide-section">
          <h3>Best Credit Cards for Different Spending Categories</h3>
          <p><strong>Dining & Entertainment:</strong> <a href="/hdfc-regalia">HDFC Regalia</a> (4X points), <a href="/axis-magnus">Axis Magnus</a> (12X points on weekend dining)<br>
          <strong>Online Shopping:</strong> <a href="/sbi-cashback">SBI Cashback</a> (5%), <a href="/icici-amazon">ICICI Amazon Pay</a> (5% on Amazon)<br>
          <strong>Fuel:</strong> <a href="/hdfc-moneyback">HDFC MoneyBack</a> (2%), <a href="/axis-ace">Axis ACE</a> (2% on bill payments)<br>
          <strong>Travel:</strong> <a href="/axis-magnus">Axis Magnus</a> (12X points), <a href="/hdfc-diners-club">HDFC Diners Club</a> (4X points)<br>
          <strong>Groceries:</strong> <a href="/hdfc-freedomflex">HDFC FreedomFlex</a> (2%), <a href="/american-express-smartearn">American Express SmartEarn</a> (2.5%)</p>
        </div>
        
        <div class="guide-section">
          <h3>Maximizing Your Credit Card Rewards</h3>
          <p>To maximize rewards, choose cards that align with your highest spending categories. Use our calculator to input your actual monthly spending and discover which combination of cards gives the best returns. Consider annual fees, milestone benefits, and redemption options when making your decision.</p>
        </div>
        
        <div class="guide-section">
          <h3>Frequently Asked Questions</h3>
          <div class="faq-container">
            <div class="faq-item">
              <div class="faq-question" onclick="toggleFAQ(this)">
                <span>How accurate is this rewards calculator?</span>
                <span class="faq-toggle">+</span>
              </div>
              <div class="faq-answer">
                <p>Our calculator uses real reward rates from major Indian banks and is updated regularly to reflect current offers. We analyze over 50+ credit cards from banks like HDFC, SBI, ICICI, Axis Bank, and others to provide accurate calculations.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question" onclick="toggleFAQ(this)">
                <span>Should I consider annual fees when choosing a credit card?</span>
                <span class="faq-toggle">+</span>
              </div>
              <div class="faq-answer">
                <p>Yes, our recommendations factor in annual fees to show net value. A card with higher rewards but high fees might not be the best choice for low spenders. We calculate the total value after deducting annual fees to give you the real benefit.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question" onclick="toggleFAQ(this)">
                <span>Can I use multiple credit cards for different categories?</span>
                <span class="faq-toggle">+</span>
              </div>
              <div class="faq-answer">
                <p>Absolutely! Many users optimize rewards by using different cards for different categories - our advanced calculator can help you plan this strategy. For example, use <a href="/sbi-cashback">SBI Cashback</a> for online shopping and <a href="/axis-magnus">Axis Magnus</a> for dining.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question" onclick="toggleFAQ(this)">
                <span>What's the difference between cashback and reward points?</span>
                <span class="faq-toggle">+</span>
              </div>
              <div class="faq-answer">
                <p>Cashback is direct money credited to your account, while reward points can be redeemed for various options like shopping, travel, or statement credit. Our calculator converts everything to equivalent cash value for easy comparison.</p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question" onclick="toggleFAQ(this)">
                <span>How often should I recalculate my credit card rewards?</span>
                <span class="faq-toggle">+</span>
              </div>
              <div class="faq-answer">
                <p>We recommend recalculating every 6 months or when your spending patterns change significantly. Banks also update their reward structures periodically, so it's good to stay updated with the latest offers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Comprehensive credit card database with reward structures
    const creditCards = {
        // ICICI Bank Cards
        'icici-amazon': {
            name: 'ICICI Amazon Pay',
            annual_fee: 0,
            rewards: {
                'online-shopping': 0.05, // 5% on Amazon
                'bills': 0.02, // 2% on bill payments
                'default': 0.01 // 1% on others
            },
            max_monthly: 5000
        },
        'icici-emeralde': {
            name: 'ICICI Emeralde',
            annual_fee: 4000,
            rewards: {
                'travel': 0.04, // 4X points
                'dining': 0.04,
                'fuel': 0.02,
                'default': 0.02
            },
            max_monthly: null
        },
        'icici-platinum': {
            name: 'ICICI Platinum',
            annual_fee: 0,
            rewards: {
                'fuel': 0.025, // 2.5%
                'groceries': 0.02,
                'default': 0.01
            },
            max_monthly: 2000
        },
        'icici-rubyx': {
            name: 'ICICI Rubyx',
            annual_fee: 3000,
            rewards: {
                'online-shopping': 0.03,
                'dining': 0.03,
                'travel': 0.03,
                'default': 0.015
            },
            max_monthly: null
        },
        'icici-sapphiro': {
            name: 'ICICI Sapphiro',
            annual_fee: 3500,
            rewards: {
                'fuel': 0.04,
                'groceries': 0.03,
                'entertainment': 0.04,
                'default': 0.015
            },
            max_monthly: null
        },
        'icici-student': {
            name: 'ICICI Student',
            annual_fee: 0,
            rewards: {
                'online-shopping': 0.02,
                'entertainment': 0.025,
                'default': 0.01
            },
            max_monthly: 1500
        },

        // HDFC Bank Cards
        'hdfc-regalia': {
            name: 'HDFC Regalia',
            annual_fee: 2500,
            rewards: {
                'dining': 0.04, // 4X points = 4% value
                'travel': 0.04,
                'groceries': 0.02,
                'default': 0.02
            },
            max_monthly: null
        },
        'hdfc-millennia': {
            name: 'HDFC Millennia',
            annual_fee: 1000,
            rewards: {
                'online-shopping': 0.025,
                'groceries': 0.025,
                'default': 0.01
            },
            max_monthly: 4000
        },
        'hdfc-moneyback': {
            name: 'HDFC MoneyBack',
            annual_fee: 0,
            rewards: {
                'dining': 0.025,
                'fuel': 0.01,
                'online-shopping': 0.02,
                'default': 0.005
            },
            max_monthly: 2000
        },
        'hdfc-business-moneyback': {
            name: 'HDFC Business MoneyBack',
            annual_fee: 500,
            rewards: {
                'fuel': 0.025,
                'bills': 0.02,
                'default': 0.01
            },
            max_monthly: 3000
        },
        'hdfc-diners-club': {
            name: 'HDFC Diners Club',
            annual_fee: 1000,
            rewards: {
                'dining': 0.03,
                'fuel': 0.02,
                'default': 0.015
            },
            max_monthly: null
        },
        'hdfc-freedomflex': {
            name: 'HDFC FreedomFlex',
            annual_fee: 500,
            rewards: {
                'groceries': 0.02,
                'fuel': 0.015,
                'default': 0.01
            },
            max_monthly: 2500
        },
        'hdfc-times': {
            name: 'HDFC Times',
            annual_fee: 750,
            rewards: {
                'entertainment': 0.04,
                'dining': 0.03,
                'default': 0.01
            },
            max_monthly: null
        },

        // Axis Bank Cards
        'axis-magnus': {
            name: 'Axis Magnus',
            annual_fee: 12500,
            rewards: {
                'travel': 0.12, // 12X points
                'dining': 0.06, // 6X points
                'fuel': 0.04,
                'default': 0.02
            },
            max_monthly: null
        },
        'axis-ace': {
            name: 'Axis ACE',
            annual_fee: 499,
            rewards: {
                'bills': 0.05, // 5% cashback
                'groceries': 0.04,
                'default': 0.015
            },
            max_monthly: 15000
        },
        'axis-myzone': {
            name: 'Axis MyZone',
            annual_fee: 500,
            rewards: {
                'fuel': 0.04,
                'dining': 0.02,
                'entertainment': 0.02,
                'default': 0.01
            },
            max_monthly: null
        },
        'axis-privilege': {
            name: 'Axis Privilege',
            annual_fee: 1500,
            rewards: {
                'travel': 0.04,
                'fuel': 0.02,
                'groceries': 0.025,
                'default': 0.015
            },
            max_monthly: null
        },
        'axis-select': {
            name: 'Axis Select',
            annual_fee: 3000,
            rewards: {
                'dining': 0.05,
                'entertainment': 0.04,
                'default': 0.02
            },
            max_monthly: null
        },
        'flipkart-axis': {
            name: 'Flipkart Axis Bank',
            annual_fee: 500,
            rewards: {
                'online-shopping': 0.05, // 5% on Flipkart
                'groceries': 0.015,
                'default': 0.015
            },
            max_monthly: null
        },
        'airtel-axis-bank': {
            name: 'Airtel Axis Bank',
            annual_fee: 500,
            rewards: {
                'bills': 0.025,
                'online-shopping': 0.02,
                'default': 0.01
            },
            max_monthly: 3000
        },

        // SBI Cards
        'sbi-cashback': {
            name: 'SBI Cashback',
            annual_fee: 999,
            rewards: {
                'online-shopping': 0.05, // 5% online
                'default': 0.01 // 1% offline
            },
            max_monthly: 5000
        },
        'sbi-simply-save': {
            name: 'SBI SimplySAVE',
            annual_fee: 499,
            rewards: {
                'dining': 0.10, // 10X points
                'groceries': 0.05,
                'fuel': 0.01,
                'default': 0.01
            },
            max_monthly: null
        },
        'sbi-card-prime': {
            name: 'SBI Card PRIME',
            annual_fee: 2999,
            rewards: {
                'dining': 0.05,
                'fuel': 0.025,
                'groceries': 0.025,
                'default': 0.015
            },
            max_monthly: null
        },

        // American Express Cards
        'american-express-smartearn': {
            name: 'American Express SmartEarn',
            annual_fee: 1500,
            rewards: {
                'online-shopping': 0.04, // 4% on Amazon
                'dining': 0.05, // 5% on Swiggy/Zomato
                'default': 0.01
            },
            max_monthly: null
        },

        // Kotak Bank Cards
        'kotak-811': {
            name: 'Kotak 811',
            annual_fee: 0,
            rewards: {
                'fuel': 0.02,
                'online-shopping': 0.015,
                'default': 0.005
            },
            max_monthly: 2000
        },
        'kotak-platinum': {
            name: 'Kotak Platinum',
            annual_fee: 750,
            rewards: {
                'fuel': 0.025,
                'groceries': 0.02,
                'default': 0.01
            },
            max_monthly: null
        },

        // IndusInd Bank Cards
        'indusind-legend': {
            name: 'IndusInd Legend',
            annual_fee: 7000,
            rewards: {
                'dining': 0.0333, // 3.33% on all
                'fuel': 0.0333,
                'groceries': 0.0333,
                'entertainment': 0.0333,
                'default': 0.0333
            },
            max_monthly: null
        },
        'indusind-pinnacle': {
            name: 'IndusInd Pinnacle',
            annual_fee: 3000,
            rewards: {
                'fuel': 0.03,
                'dining': 0.025,
                'default': 0.015
            },
            max_monthly: null
        },

        // RBL Bank Cards
        'rbl-bank-moneyback': {
            name: 'RBL Bank MoneyBack',
            annual_fee: 399,
            rewards: {
                'fuel': 0.02,
                'groceries': 0.02,
                'default': 0.01
            },
            max_monthly: 2000
        },
        'rbl-shoprite': {
            name: 'RBL Bank ShopRite',
            annual_fee: 500,
            rewards: {
                'groceries': 0.05, // 5% on grocery
                'online-shopping': 0.02,
                'default': 0.01
            },
            max_monthly: null
        },

        // Other Bank Cards
        'bank-of-baroda-premier': {
            name: 'Bank of Baroda Premier',
            annual_fee: 500,
            rewards: {
                'fuel': 0.02,
                'groceries': 0.015,
                'default': 0.01
            },
            max_monthly: 2500
        },
        'citi-rewards': {
            name: 'Citi Rewards',
            annual_fee: 1000,
            rewards: {
                'dining': 0.025,
                'fuel': 0.02,
                'default': 0.015
            },
            max_monthly: null
        },
        'pnb-select': {
            name: 'PNB SELECT',
            annual_fee: 500,
            rewards: {
                'fuel': 0.02,
                'groceries': 0.015,
                'default': 0.01
            },
            max_monthly: 2000
        },
        'standard-chartered-manhattan': {
            name: 'Standard Chartered Manhattan',
            annual_fee: 999,
            rewards: {
                'dining': 0.03,
                'entertainment': 0.025,
                'default': 0.015
            },
            max_monthly: null
        },
        'yes-bank-first': {
            name: 'YES Bank First',
            annual_fee: 499,
            rewards: {
                'fuel': 0.025,
                'online-shopping': 0.02,
                'default': 0.01
            },
            max_monthly: 2500
        }
    };

    const inputs = document.querySelectorAll('.category-input input');
    const calculateBtn = document.getElementById('calculate-btn');
    const resultsSection = document.getElementById('results-section');
    const resultsGrid = document.getElementById('results-grid');
    const totalAmount = document.getElementById('total-amount');
    const annualAmount = document.getElementById('annual-amount');
    const recommendationContent = document.getElementById('recommendation-content');

    // Update totals on input change
    function updateTotals() {
        let total = 0;
        inputs.forEach(input => {
            total += parseFloat(input.value) || 0;
        });
        totalAmount.textContent = `₹${total.toLocaleString('en-IN')}`;
        annualAmount.textContent = `₹${(total * 12).toLocaleString('en-IN')}`;
    }

    inputs.forEach(input => {
        input.addEventListener('input', updateTotals);
    });

    // Initialize totals on page load
    updateTotals();

    // Calculate rewards for each card
    function calculateRewards() {
        const spending = {
            groceries: parseFloat(document.getElementById('groceries').value) || 0,
            dining: parseFloat(document.getElementById('dining').value) || 0,
            fuel: parseFloat(document.getElementById('fuel').value) || 0,
            travel: parseFloat(document.getElementById('travel').value) || 0,
            'online-shopping': parseFloat(document.getElementById('online-shopping').value) || 0,
            bills: parseFloat(document.getElementById('bills').value) || 0,
            entertainment: parseFloat(document.getElementById('entertainment').value) || 0,
            others: parseFloat(document.getElementById('others').value) || 0
        };

        const results = [];

        Object.entries(creditCards).forEach(([cardId, card]) => {
            let monthlyRewards = 0;

            Object.entries(spending).forEach(([category, amount]) => {
                const rate = card.rewards[category] || card.rewards.default;
                monthlyRewards += amount * rate;
            });

            // Apply monthly cap if exists
            if (card.max_monthly && monthlyRewards > card.max_monthly) {
                monthlyRewards = card.max_monthly;
            }

            const annualRewards = monthlyRewards * 12;
            const netAnnualValue = annualRewards - card.annual_fee;

            results.push({
                cardId,
                name: card.name,
                monthlyRewards,
                annualRewards,
                annualFee: card.annual_fee,
                netAnnualValue
            });
        });

        // Sort by net annual value and get top 5
        results.sort((a, b) => b.netAnnualValue - a.netAnnualValue);
        const top5Results = results.slice(0, 5);

        displayResults(top5Results, results.length);
        
        // Show results section with animation
        resultsSection.classList.add('visible');
        
        // Add modify inputs button to results
        if (!document.getElementById('modify-inputs-btn')) {
            const modifyBtn = document.createElement('div');
            modifyBtn.innerHTML = `
                <div style="text-align: center; margin-bottom: 2rem;">
                    <button id="modify-inputs-btn" class="btn btn-outline" style="max-width: 250px;">📝 Modify Spending Amounts</button>
                </div>
            `;
            resultsSection.insertBefore(modifyBtn, resultsSection.firstChild.nextSibling);
            
            document.getElementById('modify-inputs-btn').addEventListener('click', function() {
                resultsSection.classList.remove('visible');
                document.querySelector('.calculator-inputs').scrollIntoView({ behavior: 'smooth' });
            });
        }
        
        resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function displayResults(results, totalCards) {
        resultsGrid.innerHTML = '';

        // Add info banner about showing top 5
        const infoBanner = document.createElement('div');
        infoBanner.className = 'results-info';
        infoBanner.innerHTML = `
            <div class="info-content">
                <span class="info-icon">🏆</span>
                <span class="info-text">Showing top 5 cards out of ${totalCards} analyzed based on your spending pattern</span>
            </div>
        `;
        resultsGrid.appendChild(infoBanner);

        results.forEach((result, index) => {
            const isRecommended = index === 0;
            const cardElement = document.createElement('div');
            cardElement.className = `result-card ${isRecommended ? 'recommended' : ''}`;
            
            cardElement.innerHTML = `
                ${isRecommended ? '<div class="badge">Best Choice</div>' : ''}
                <h3>${result.name}</h3>
                <div class="reward-details">
                    <div class="reward-item">
                        <label>Monthly Rewards:</label>
                        <span class="amount">₹${Math.round(result.monthlyRewards).toLocaleString('en-IN')}</span>
                    </div>
                    <div class="reward-item">
                        <label>Annual Rewards:</label>
                        <span class="amount">₹${Math.round(result.annualRewards).toLocaleString('en-IN')}</span>
                    </div>
                    <div class="reward-item">
                        <label>Annual Fee:</label>
                        <span class="fee">₹${result.annualFee.toLocaleString('en-IN')}</span>
                    </div>
                    <div class="reward-item total">
                        <label>Net Annual Value:</label>
                        <span class="net-value ${result.netAnnualValue > 0 ? 'positive' : 'negative'}">
                            ₹${Math.round(result.netAnnualValue).toLocaleString('en-IN')}
                        </span>
                    </div>
                </div>
                <a href="/cards/${result.cardId}" class="btn btn-outline">View Details</a>
            `;

        resultsGrid.appendChild(cardElement);
        });

        // Show recommendation
        const bestCard = results[0];
        recommendationContent.innerHTML = `
            <div class="recommendation-card">
                <h4>${bestCard.name}</h4>
                <p>Based on your spending pattern, this card will give you the highest net value of <strong>₹${Math.round(bestCard.netAnnualValue).toLocaleString('en-IN')}</strong> annually.</p>
                <div class="rec-actions">
                    <a href="/cards/${bestCard.cardId}" class="btn btn-primary">View Full Details</a>
                    <a href="/apply/${bestCard.cardId}" class="btn btn-secondary">Apply Now</a>
                </div>
            </div>
        `;
    }

    // Preset profiles
    const profiles = {
        student: {
            groceries: 1000,
            dining: 1500,
            fuel: 500,
            travel: 1000,
            'online-shopping': 3000,
            bills: 800,
            entertainment: 1000,
            others: 1200
        },
        'young-professional': {
            groceries: 3000,
            dining: 4000,
            fuel: 2500,
            travel: 3000,
            'online-shopping': 5000,
            bills: 2000,
            entertainment: 2000,
            others: 3500
        },
        family: {
            groceries: 8000,
            dining: 3000,
            fuel: 5000,
            travel: 2000,
            'online-shopping': 7000,
            bills: 4000,
            entertainment: 2000,
            others: 8000
        },
        business: {
            groceries: 2000,
            dining: 6000,
            fuel: 8000,
            travel: 10000,
            'online-shopping': 10000,
            bills: 5000,
            entertainment: 3000,
            others: 15000
        }
    };

    // Profile click handlers
    document.querySelectorAll('.profile-card').forEach(card => {
        card.addEventListener('click', function() {
            const profileName = this.dataset.profile;
            const profile = profiles[profileName];

            Object.entries(profile).forEach(([category, amount]) => {
                const input = document.getElementById(category);
                if (input) {
                    input.value = amount;
                }
            });

            updateTotals();
            
            // Hide results section when profile changes
            resultsSection.classList.remove('visible');
            
            // Highlight selected profile
            document.querySelectorAll('.profile-card').forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
        });
    });

    calculateBtn.addEventListener('click', function() {
        // Add loading state
        this.innerHTML = '⏳ Calculating...';
        this.disabled = true;
        
        // Small delay to show loading state
        setTimeout(() => {
            calculateRewards();
            this.innerHTML = '🏆 Calculate Best Credit Cards';
            this.disabled = false;
        }, 500);
    });
});

// FAQ Toggle Function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const toggle = element.querySelector('.faq-toggle');
    
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
</script>

<?php get_footer(); ?>
