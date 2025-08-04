<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $page_title = 'Best Travel Credit Cards India 2025';
    $page_description = 'Compare the best travel credit cards in India 2025. Find cards with airline miles, airport lounge access, travel insurance, and exclusive travel benefits from top banks.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="travel credit cards India, airline miles, airport lounge access, travel rewards, travel insurance credit card, best travel cards 2025">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . ' | CardAdvisorHub">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Travel Credit Cards</li>
    </ol>
  </div>
</nav>

<main class="travel-cards-page">
  <section class="page-header">
    <div class="container">
      <h1>Best Travel Credit Cards in India 2025</h1>
      <p>Discover premium travel credit cards with airline miles, lounge access, and exclusive travel benefits.</p>
    </div>
  </section>

  <!-- Top Travel Cards Section -->
  <section class="featured-travel-cards">
    <div class="container">
      <h2>🏆 Top Travel Credit Cards</h2>
      <div class="cards-grid">
        
        <!-- Axis Magnus Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/axis-magnus">Axis Bank Magnus</a></h3>
            <div class="card-rating">★★★★★ 4.7/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>12X ER points on travel bookings</li>
              <li>Unlimited domestic lounge access</li>
              <li>International lounge access (8 visits/year)</li>
              <li>Complimentary golf games</li>
              <li>Travel insurance up to ₹1 crore</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹12,500</div>
          <div class="card-actions">
            <a href="/axis-magnus" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=axis-magnus" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- HDFC Regalia Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/hdfc-regalia">HDFC Bank Regalia</a></h3>
            <div class="card-rating">★★★★★ 4.5/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>4X points on dining & travel</li>
              <li>6 complimentary airport lounge visits</li>
              <li>Travel insurance coverage</li>
              <li>Fuel surcharge waiver</li>
              <li>Movie ticket discounts</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹2,500</div>
          <div class="card-actions">
            <a href="/hdfc-regalia" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=hdfc-regalia" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- Axis Privilege Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/axis-privilege">Axis Bank Privilege</a></h3>
            <div class="card-rating">★★★★☆ 4.2/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>10X ER points on travel</li>
              <li>12 domestic lounge visits/year</li>
              <li>Complimentary Priority Pass</li>
              <li>Travel insurance coverage</li>
              <li>Milestone rewards</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹3,500</div>
          <div class="card-actions">
            <a href="/axis-privilege" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=axis-privilege" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- ICICI Emeralde Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/icici-emeralde">ICICI Bank Emeralde</a></h3>
            <div class="card-rating">★★★★☆ 4.1/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>4X points on travel & dining</li>
              <li>8 airport lounge visits/year</li>
              <li>Travel insurance up to ₹50 lakh</li>
              <li>Concierge services</li>
              <li>Golf privileges</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹3,500</div>
          <div class="card-actions">
            <a href="/icici-emeralde" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=icici-emeralde" class="btn btn-outline">Compare</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Travel Benefits Guide -->
  <section class="travel-benefits">
    <div class="container">
      <h2>🌟 Key Travel Credit Card Benefits</h2>
      <div class="benefits-grid">
        
        <div class="benefit-item">
          <div class="benefit-icon">✈️</div>
          <h3>Airline Miles & Points</h3>
          <p>Earn accelerated points on flight bookings and travel purchases. Redeem for free flights, upgrades, and exclusive travel experiences.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🛋️</div>
          <h3>Airport Lounge Access</h3>
          <p>Enjoy complimentary access to domestic and international airport lounges with Priority Pass, Plaza Premium, and airline-specific lounges.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🛡️</div>
          <h3>Travel Insurance</h3>
          <p>Comprehensive travel insurance covering trip cancellation, lost baggage, medical emergencies, and flight delays up to ₹1 crore.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🏨</div>
          <h3>Hotel Privileges</h3>
          <p>Special rates, room upgrades, late checkout, and complimentary breakfast at partner hotels worldwide through hotel loyalty programs.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">⛽</div>
          <h3>Fuel Surcharge Waiver</h3>
          <p>Save on fuel costs with surcharge waivers and cashback on petrol/diesel purchases at partner fuel stations across India.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🎯</div>
          <h3>Concierge Services</h3>
          <p>24/7 concierge assistance for travel bookings, restaurant reservations, event tickets, and emergency support worldwide.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Travel Card Selection Guide -->
  <section class="selection-guide">
    <div class="container">
      <h2>🤔 How to Choose the Right Travel Credit Card</h2>
      <div class="guide-content">
        
        <div class="guide-section">
          <h3>1. Assess Your Travel Frequency</h3>
          <ul>
            <li><strong>Frequent Travelers (10+ trips/year):</strong> Premium cards like Axis Magnus, HDFC Diners Black</li>
            <li><strong>Occasional Travelers (3-10 trips/year):</strong> Mid-tier cards like HDFC Regalia, Axis Privilege</li>
            <li><strong>Rare Travelers (&lt;3 trips/year):</strong> Basic travel cards with no annual fee</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>2. Consider Annual Fee vs Benefits</h3>
          <ul>
            <li>Calculate lounge visit value (₹2,000-3,000 per visit)</li>
            <li>Evaluate insurance coverage worth</li>
            <li>Check milestone benefits and bonus points</li>
            <li>Compare redemption rates for points/miles</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>3. Check Acceptance & Network</h3>
          <ul>
            <li><strong>Visa/Mastercard:</strong> Widely accepted globally</li>
            <li><strong>American Express:</strong> Premium benefits but limited acceptance</li>
            <li><strong>Diners Club:</strong> Excellent lounges but merchant acceptance issues</li>
            <li><strong>RuPay:</strong> Good domestic acceptance, limited international</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Compare Section -->
  <section class="compare-section">
    <div class="container">
      <h2>🔍 Compare Travel Credit Cards</h2>
      <p>Use our comprehensive comparison tool to find the perfect travel credit card for your needs.</p>
      <div class="cta-buttons">
        <a href="/compare-cards?filter=travel" class="btn btn-primary btn-large">Compare Travel Cards</a>
        <a href="/rewards-calculator" class="btn btn-outline btn-large">Calculate Rewards</a>
      </div>
    </div>
  </section>

</main>

<style>
/* Travel Cards Page Styles */
.travel-cards-page {
    line-height: 1.6;
}

.page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    text-align: center;
}

.page-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.page-header p {
    font-size: 1.2rem;
    opacity: 0.9;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

/* Featured Cards Section */
.featured-travel-cards {
    padding: 4rem 0;
    background: #f8f9fa;
}

.featured-travel-cards h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.card-item {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.card-header h3 {
    margin: 0;
    font-size: 1.3rem;
}

.card-header h3 a {
    color: #333;
    text-decoration: none;
}

.card-rating {
    color: #ffd700;
    font-size: 0.9rem;
    font-weight: 600;
}

.card-highlights ul {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
}

.card-highlights li {
    padding: 0.5rem 0;
    color: #666;
    position: relative;
    padding-left: 1.5rem;
}

.card-highlights li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #28a745;
    font-weight: bold;
}

.card-fee {
    font-weight: 600;
    color: #007cba;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

.card-actions {
    display: flex;
    gap: 1rem;
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
    flex: 1;
}

.btn-primary {
    background: #007cba;
    color: white;
}

.btn-primary:hover {
    background: #005a8a;
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

.btn-large {
    padding: 1rem 2rem;
    font-size: 1.1rem;
}

/* Benefits Section */
.travel-benefits {
    padding: 4rem 0;
}

.travel-benefits h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.benefit-item {
    text-align: center;
    padding: 2rem;
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-item h3 {
    margin-bottom: 1rem;
    color: #333;
}

.benefit-item p {
    color: #666;
    line-height: 1.6;
}

/* Selection Guide */
.selection-guide {
    padding: 4rem 0;
    background: #f8f9fa;
}

.selection-guide h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.guide-content {
    max-width: 800px;
    margin: 0 auto;
}

.guide-section {
    margin-bottom: 2rem;
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.guide-section h3 {
    color: #007cba;
    margin-bottom: 1rem;
}

.guide-section ul {
    padding-left: 1.5rem;
}

.guide-section li {
    margin-bottom: 0.5rem;
    color: #666;
}

/* Compare Section */
.compare-section {
    padding: 4rem 0;
    text-align: center;
}

.compare-section h2 {
    margin-bottom: 1rem;
    font-size: 2.5rem;
    color: #333;
}

.compare-section p {
    margin-bottom: 2rem;
    color: #666;
    font-size: 1.1rem;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    max-width: 500px;
    margin: 0 auto;
}

/* Breadcrumb Styles */
.breadcrumb-nav {
    background: #f8f9fa;
    padding: 0.75rem 0;
}

.breadcrumb {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "/";
    color: #6c757d;
    margin: 0 0.5rem;
}

.breadcrumb-item a {
    color: #007cba;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: #6c757d;
}

/* Mobile Optimization */
@media (max-width: 768px) {
    .container {
        padding: 0 1rem;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .cards-grid {
        grid-template-columns: 1fr;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .card-actions {
        flex-direction: column;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
    
    .guide-section {
        padding: 1.5rem;
    }
    
    h2 {
        font-size: 2rem !important;
    }
}
</style>

<?php get_footer(); ?>
