<?php 
// Premium Credit Cards Page - SEO Optimized
// Enhanced with structured data and clean formatting

// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $page_title = 'Premium Credit Cards India 2025';
    $page_description = 'Discover premium credit cards in India 2025 with luxury benefits, concierge services, airport lounge access, and exclusive privileges for high spenders.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="premium credit cards India, luxury credit cards, high limit cards, concierge services, airport lounge access, exclusive benefits">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . ' | CardAdvisorHub">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Structured Data for Premium Cards Category Page
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Premium Credit Cards India 2025",
        "description": "' . $page_description . '",
        "url": "' . get_permalink() . '",
        "mainEntity": {
            "@type": "ItemList",
            "name": "Premium Credit Cards",
            "numberOfItems": "12",
            "itemListElement": [
                {
                    "@type": "Product",
                    "name": "Axis Bank Magnus Credit Card",
                    "url": "' . home_url('/axis-magnus') . '",
                    "brand": {"@type": "Brand", "name": "Axis Bank"}
                },
                {
                    "@type": "Product", 
                    "name": "HDFC Regalia Credit Card",
                    "url": "' . home_url('/hdfc-regalia') . '",
                    "brand": {"@type": "Brand", "name": "HDFC Bank"}
                },
                {
                    "@type": "Product",
                    "name": "ICICI Emeralde Credit Card", 
                    "url": "' . home_url('/icici-emeralde') . '",
                    "brand": {"@type": "Brand", "name": "ICICI Bank"}
                }
            ]
        }
    }
    </script>';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Premium Credit Cards</li>
    </ol>
  </div>
</nav>

<main class="premium-cards-page">
  <section class="page-header">
    <div class="container">
      <h1>Premium Credit Cards in India 2025</h1>
      <p>Experience luxury with premium credit cards offering exclusive privileges, concierge services, and unmatched rewards.</p>
    </div>
  </section>

  <!-- Top Premium Cards Section -->
  <section class="featured-premium-cards">
    <div class="container">
      <h2>👑 Elite Premium Credit Cards</h2>
      <div class="cards-grid">
        
        <!-- Axis Magnus Card -->
        <div class="card-item premium-card">
          <div class="card-header">
            <h3><a href="/axis-magnus">Axis Bank Magnus</a></h3>
            <div class="card-rating">★★★★★ 4.8/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>25 Edge Reward Points per ₹200 spend</li>
              <li>Unlimited domestic lounge access</li>
              <li>Complimentary golf sessions</li>
              <li>Priority Pass membership</li>
              <li>Concierge services 24/7</li>
            </ul>
          </div>
          <div class="card-fee premium-fee">Annual Fee: ₹12,500</div>
          <div class="card-actions">
            <a href="/axis-magnus" class="btn btn-premium">View Details</a>
            <a href="/compare-cards?pre-select=axis-magnus" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- HDFC Regalia Card -->
        <div class="card-item premium-card">
          <div class="card-header">
            <h3><a href="/hdfc-regalia">HDFC Bank Regalia</a></h3>
            <div class="card-rating">★★★★★ 4.7/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>4 reward points per ₹150 spend</li>
              <li>12 airport lounge visits per year</li>
              <li>Comprehensive travel insurance</li>
              <li>Dining privileges at fine restaurants</li>
              <li>Emergency card replacement abroad</li>
            </ul>
          </div>
          <div class="card-fee premium-fee">Annual Fee: ₹2,500</div>
          <div class="card-actions">
            <a href="/hdfc-regalia" class="btn btn-premium">View Details</a>
            <a href="/compare-cards?pre-select=hdfc-regalia" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- ICICI Emeralde Card -->
        <div class="card-item premium-card">
          <div class="card-header">
            <h3><a href="/page-icici-emeralde">ICICI Bank Emeralde</a></h3>
            <div class="card-rating">★★★★☆ 4.5/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>2 reward points per ₹100 spend</li>
              <li>Unlimited domestic lounge access</li>
              <li>6 international lounge visits</li>
              <li>Personal accident insurance</li>
              <li>Milestone benefits and bonuses</li>
            </ul>
          </div>
          <div class="card-fee premium-fee">Annual Fee: ₹4,000</div>
          <div class="card-actions">
            <a href="/icici-emeralde" class="btn btn-premium">View Details</a>
            <a href="/compare-cards?pre-select=icici-emeralde" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- IndusInd Legend Card -->
        <div class="card-item premium-card">
          <div class="card-header">
            <h3><a href="/page-indusind-legend">IndusInd Legend</a></h3>
            <div class="card-rating">★★★★☆ 4.4/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>3.33% reward rate on all spends</li>
              <li>Movie ticket offers every month</li>
              <li>Golf privileges across India</li>
              <li>Airport pickup/drop services</li>
              <li>Spa and wellness benefits</li>
            </ul>
          </div>
          <div class="card-fee premium-fee">Annual Fee: ₹7,000</div>
          <div class="card-actions">
            <a href="/indusind-legend" class="btn btn-premium">View Details</a>
            <a href="/compare-cards?pre-select=indusind-legend" class="btn btn-outline">Compare</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Premium Benefits Section -->
  <section class="premium-benefits">
    <div class="container">
      <h2>✨ Exclusive Premium Benefits</h2>
      <div class="benefits-grid">
        
        <div class="benefit-item">
          <div class="benefit-icon">✈️</div>
          <h3>Airport Lounge Access</h3>
          <p>Complimentary access to domestic and international airport lounges with Priority Pass, guest benefits, and spa services.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🎯</div>
          <h3>Concierge Services</h3>
          <p>24/7 personal concierge assistance for travel bookings, restaurant reservations, event tickets, and lifestyle services.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🏌️</div>
          <h3>Golf Privileges</h3>
          <p>Complimentary golf rounds, lessons with PGA professionals, and access to premium golf courses across India.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🛡️</div>
          <h3>Comprehensive Insurance</h3>
          <p>Higher insurance coverage including travel, accident, purchase protection, and extended warranty benefits.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🍽️</div>
          <h3>Fine Dining</h3>
          <p>Exclusive dining experiences, chef's table reservations, wine tastings, and discounts at luxury restaurants.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🎭</div>
          <h3>Entertainment Access</h3>
          <p>Priority booking for concerts, theater shows, sporting events, and exclusive entertainment experiences.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Luxury Lifestyle Section -->
  <section class="luxury-lifestyle">
    <div class="container">
      <h2>🌟 Luxury Lifestyle Privileges</h2>
      <div class="lifestyle-grid">
        
        <div class="lifestyle-item">
          <div class="lifestyle-icon">🏨</div>
          <h3>Hotel Elite Status</h3>
          <p>Complimentary upgrades, late checkouts, welcome amenities, and elite status at luxury hotel chains worldwide.</p>
          <div class="lifestyle-features">
            <span class="feature-tag">Room Upgrades</span>
            <span class="feature-tag">Late Checkout</span>
            <span class="feature-tag">Elite Benefits</span>
          </div>
        </div>

        <div class="lifestyle-item">
          <div class="lifestyle-icon">🚗</div>
          <h3>Premium Transportation</h3>
          <p>Airport transfers, luxury car rentals, valet parking, and premium ground transportation services.</p>
          <div class="lifestyle-features">
            <span class="feature-tag">Airport Transfer</span>
            <span class="feature-tag">Valet Parking</span>
            <span class="feature-tag">Car Rentals</span>
          </div>
        </div>

        <div class="lifestyle-item">
          <div class="lifestyle-icon">💎</div>
          <h3>Exclusive Shopping</h3>
          <p>Private shopping sessions, designer collections, luxury brand partnerships, and exclusive fashion events.</p>
          <div class="lifestyle-features">
            <span class="feature-tag">Private Shopping</span>
            <span class="feature-tag">VIP Access</span>
            <span class="feature-tag">Brand Events</span>
          </div>
        </div>

        <div class="lifestyle-item">
          <div class="lifestyle-icon">🧘</div>
          <h3>Wellness & Spa</h3>
          <p>Spa treatments, wellness retreats, fitness club memberships, and holistic health experiences.</p>
          <div class="lifestyle-features">
            <span class="feature-tag">Spa Credits</span>
            <span class="feature-tag">Fitness Access</span>
            <span class="feature-tag">Wellness Programs</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Premium Card Selection Guide -->
  <section class="selection-guide">
    <div class="container">
      <h2>🎯 Choosing Your Premium Credit Card</h2>
      <div class="guide-content">
        
        <div class="guide-section">
          <h3>1. Assess Your Spending Power</h3>
          <ul>
            <li><strong>High Spenders (₹5L+ annually):</strong> Ultra-premium cards with maximum rewards</li>
            <li><strong>Moderate Spenders (₹2-5L annually):</strong> Mid-tier premium cards with balanced benefits</li>
            <li><strong>Selective Spenders:</strong> Category-specific premium cards for targeted rewards</li>
            <li><strong>Status Seekers:</strong> Cards with maximum prestige and lifestyle benefits</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>2. Prioritize Key Benefits</h3>
          <ul>
            <li><strong>Travel Enthusiasts:</strong> Lounge access, travel insurance, airline miles</li>
            <li><strong>Luxury Lifestyle:</strong> Concierge services, fine dining, hotel privileges</li>
            <li><strong>Business Professionals:</strong> Corporate benefits, higher limits, business lounges</li>
            <li><strong>Entertainment Lovers:</strong> Event access, dining rewards, lifestyle experiences</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>3. Calculate Value Proposition</h3>
          <ul>
            <li>Annual fee vs. benefits received analysis</li>
            <li>Reward point value and redemption options</li>
            <li>Milestone benefits and spending thresholds</li>
            <li>Exclusive offers and seasonal promotions</li>
            <li>Insurance coverage and protection benefits</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>4. Consider Eligibility Requirements</h3>
          <ul>
            <li>Minimum income requirements (typically ₹15L+ annually)</li>
            <li>Credit score requirements (750+ recommended)</li>
            <li>Banking relationship and account requirements</li>
            <li>Professional status and employment stability</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Rewards Comparison -->
  <section class="rewards-comparison">
    <div class="container">
      <h2>💰 Premium Rewards Comparison</h2>
      <div class="comparison-table">
        <table>
          <thead>
            <tr>
              <th>Card</th>
              <th>Reward Rate</th>
              <th>Lounge Access</th>
              <th>Annual Fee</th>
              <th>Best For</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Axis Magnus</strong></td>
              <td>Up to 25 RP/₹200</td>
              <td>Unlimited Domestic</td>
              <td>₹12,500</td>
              <td>High Spenders</td>
            </tr>
            <tr>
              <td><strong>HDFC Regalia</strong></td>
              <td>4 RP/₹150</td>
              <td>12 visits/year</td>
              <td>₹2,500</td>
              <td>Balanced Benefits</td>
            </tr>
            <tr>
              <td><strong>ICICI Emeralde</strong></td>
              <td>2 RP/₹100</td>
              <td>Unlimited Domestic</td>
              <td>₹4,000</td>
              <td>Frequent Travelers</td>
            </tr>
            <tr>
              <td><strong>IndusInd Legend</strong></td>
              <td>3.33% all spends</td>
              <td>Golf + Lifestyle</td>
              <td>₹7,000</td>
              <td>Lifestyle Enthusiasts</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Compare Section -->
  <section class="compare-section">
    <div class="container">
      <h2>🔍 Compare Premium Credit Cards</h2>
      <p>Use our detailed comparison tool to find the premium card that matches your lifestyle and spending patterns.</p>
      <div class="cta-buttons">
        <a href="/compare-cards?filter=premium" class="btn btn-premium btn-large">Compare Premium Cards</a>
        <a href="/page-rewards-calculator" class="btn btn-outline btn-large">Calculate Premium Rewards</a>
      </div>
    </div>
  </section>

</main>

<style>
/* Premium Cards Page Styles */
.premium-cards-page {
    line-height: 1.6;
}

.page-header {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
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
.featured-premium-cards {
    padding: 4rem 0;
    background: #f8f9fa;
}

.featured-premium-cards h2 {
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

.premium-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-top: 4px solid #d4af37;
    position: relative;
    overflow: hidden;
}

.premium-card::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100px;
    background: linear-gradient(45deg, #d4af37, #ffd700);
    opacity: 0.1;
    border-radius: 0 0 0 100px;
}

.premium-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
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
    font-weight: 700;
}

.card-header h3 a {
    color: #2c3e50;
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
    color: #555;
    position: relative;
    padding-left: 1.5rem;
    font-weight: 500;
}

.card-highlights li::before {
    content: "👑";
    position: absolute;
    left: 0;
    font-size: 0.9rem;
}

.premium-fee {
    font-weight: 700;
    color: #d4af37;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
    background: rgba(212, 175, 55, 0.1);
    padding: 0.5rem;
    border-radius: 4px;
    text-align: center;
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

.btn-premium {
    background: linear-gradient(135deg, #d4af37 0%, #b8941f 100%);
    color: white;
}

.btn-premium:hover {
    background: linear-gradient(135deg, #b8941f 0%, #9a7a1a 100%);
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: #2c3e50;
    border: 2px solid #2c3e50;
}

.btn-outline:hover {
    background: #2c3e50;
    color: white;
}

.btn-large {
    padding: 1rem 2rem;
    font-size: 1.1rem;
}

/* Benefits Section */
.premium-benefits {
    padding: 4rem 0;
}

.premium-benefits h2 {
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
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.benefit-item:hover {
    transform: translateY(-5px);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.benefit-item h3 {
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.benefit-item p {
    color: #666;
    line-height: 1.6;
}

/* Luxury Lifestyle Section */
.luxury-lifestyle {
    padding: 4rem 0;
    background: #f8f9fa;
}

.luxury-lifestyle h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.lifestyle-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.lifestyle-item {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.lifestyle-item:hover {
    transform: translateY(-3px);
}

.lifestyle-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.lifestyle-item h3 {
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.lifestyle-item p {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.lifestyle-features {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.feature-tag {
    background: #d4af37;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Selection Guide */
.selection-guide {
    padding: 4rem 0;
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
    color: #d4af37;
    margin-bottom: 1rem;
    font-weight: 700;
}

.guide-section ul {
    padding-left: 1.5rem;
}

.guide-section li {
    margin-bottom: 0.5rem;
    color: #666;
}

/* Rewards Comparison */
.rewards-comparison {
    padding: 4rem 0;
    background: #f8f9fa;
}

.rewards-comparison h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.comparison-table {
    overflow-x: auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.comparison-table table {
    width: 100%;
    border-collapse: collapse;
}

.comparison-table th,
.comparison-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.comparison-table th {
    background: #2c3e50;
    color: white;
    font-weight: 700;
}

.comparison-table tr:hover {
    background: #f8f9fa;
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
    color: #2c3e50;
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
    
    .lifestyle-grid {
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
    
    .comparison-table {
        font-size: 0.9rem;
    }
}
</style>

<?php get_footer(); ?>
