<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $page_title = 'Best Business Credit Cards India 2025';
    $page_description = 'Compare the best business credit cards in India 2025. Find cards with expense management, GST benefits, cash flow solutions, and business rewards from top banks.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="business credit cards India, corporate credit cards, GST benefits, expense management, business rewards, HDFC business cards, SBI business cards">';
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
      <li class="breadcrumb-item active" aria-current="page">Business Credit Cards</li>
    </ol>
  </div>
</nav>

<main class="business-cards-page">
  <section class="page-header">
    <div class="container">
      <h1>Best Business Credit Cards in India 2025</h1>
      <p>Streamline your business expenses with dedicated business credit cards offering GST benefits, expense tracking, and corporate rewards.</p>
    </div>
  </section>

  <!-- Top Business Cards Section -->
  <section class="featured-business-cards">
    <div class="container">
      <h2>🏆 Top Business Credit Cards</h2>
      <div class="cards-grid">
        
        <!-- HDFC Business Moneyback Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/hdfc-business-moneyback">HDFC Business MoneyBack</a></h3>
            <div class="card-rating">★★★★☆ 4.3/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>3% cashback on business expenses</li>
              <li>2% cashback on fuel purchases</li>
              <li>Expense management tools</li>
              <li>GST compliant statements</li>
              <li>Dedicated business support</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹1,500</div>
          <div class="card-actions">
            <a href="/hdfc-business-moneyback" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=hdfc-business-moneyback" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- SBI Card Prime Business -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/sbi-card-prime">SBI Card PRIME Business</a></h3>
            <div class="card-rating">★★★★☆ 4.1/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>5X points on business spends</li>
              <li>Airport lounge access</li>
              <li>Fuel surcharge waiver</li>
              <li>Business expense tracking</li>
              <li>Milestone bonus rewards</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹2,999</div>
          <div class="card-actions">
            <a href="/sbi-card-prime" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=sbi-card-prime" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- ICICI Business Platinum -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/icici-platinum">ICICI Business Platinum</a></h3>
            <div class="card-rating">★★★★☆ 4.0/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>2X points on all business spends</li>
              <li>Complimentary travel insurance</li>
              <li>Emergency card replacement</li>
              <li>24/7 concierge services</li>
              <li>Flexible payment options</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹1,999</div>
          <div class="card-actions">
            <a href="/icici-platinum" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=icici-platinum" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- Axis Business Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/axis-select">Axis Bank Business Card</a></h3>
            <div class="card-rating">★★★★☆ 3.9/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>4X points on office supplies</li>
              <li>3X points on fuel & utilities</li>
              <li>Business expense reports</li>
              <li>Multi-user card facility</li>
              <li>Cash flow management</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹2,500</div>
          <div class="card-actions">
            <a href="/axis-select" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=axis-select" class="btn btn-outline">Compare</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Business Benefits Guide -->
  <section class="business-benefits">
    <div class="container">
      <h2>🌟 Key Business Credit Card Benefits</h2>
      <div class="benefits-grid">
        
        <div class="benefit-item">
          <div class="benefit-icon">📊</div>
          <h3>Expense Management</h3>
          <p>Automated expense tracking, categorization, and reporting tools to streamline your business accounting and GST compliance.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">💰</div>
          <h3>Cash Flow Benefits</h3>
          <p>Extended credit periods, flexible payment options, and working capital solutions to improve your business cash flow management.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🏆</div>
          <h3>Business Rewards</h3>
          <p>Accelerated points and cashback on business categories like office supplies, fuel, utilities, and travel expenses.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">📋</div>
          <h3>GST Compliance</h3>
          <p>GST-compliant statements, detailed transaction reports, and integration with accounting software for easy tax filing.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">👥</div>
          <h3>Multi-User Cards</h3>
          <p>Additional cards for employees with spending controls, individual limits, and consolidated billing for better expense control.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🛡️</div>
          <h3>Business Protection</h3>
          <p>Purchase protection, extended warranty, travel insurance, and fraud protection specifically designed for business needs.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Business Card Selection Guide -->
  <section class="selection-guide">
    <div class="container">
      <h2>🤔 How to Choose the Right Business Credit Card</h2>
      <div class="guide-content">
        
        <div class="guide-section">
          <h3>1. Assess Your Business Size</h3>
          <ul>
            <li><strong>Small Business (Annual Turnover &lt;₹50L):</strong> Basic business cards with low fees</li>
            <li><strong>Medium Business (₹50L-₹5Cr):</strong> Mid-tier cards with expense management tools</li>
            <li><strong>Large Business (₹5Cr+):</strong> Premium corporate cards with advanced features</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>2. Identify Your Business Spending</h3>
          <ul>
            <li>Office supplies and equipment purchases</li>
            <li>Fuel and transportation expenses</li>
            <li>Utility bills and telecommunications</li>
            <li>Business travel and entertainment</li>
            <li>Marketing and advertising expenses</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>3. Consider Essential Features</h3>
          <ul>
            <li><strong>Expense Tracking:</strong> Automated categorization and reporting</li>
            <li><strong>GST Compliance:</strong> Detailed statements for tax filing</li>
            <li><strong>Credit Limit:</strong> Adequate limit for business operations</li>
            <li><strong>Payment Terms:</strong> Flexible payment options and grace periods</li>
            <li><strong>Integration:</strong> Compatibility with accounting software</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>4. Evaluate Additional Benefits</h3>
          <ul>
            <li>Business insurance and protection plans</li>
            <li>Concierge and travel services</li>
            <li>Airport lounge access for business travel</li>
            <li>Dedicated relationship manager</li>
            <li>Priority customer support</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Compare Section -->
  <section class="compare-section">
    <div class="container">
      <h2>🔍 Compare Business Credit Cards</h2>
      <p>Use our comprehensive comparison tool to find the perfect business credit card for your company's needs.</p>
      <div class="cta-buttons">
        <a href="/compare-cards?filter=business" class="btn btn-primary btn-large">Compare Business Cards</a>
        <a href="/rewards-calculator" class="btn btn-outline btn-large">Calculate Business Rewards</a>
      </div>
    </div>
  </section>

</main>

<style>
/* Business Cards Page Styles */
.business-cards-page {
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
.featured-business-cards {
    padding: 4rem 0;
    background: #f8f9fa;
}

.featured-business-cards h2 {
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
.business-benefits {
    padding: 4rem 0;
}

.business-benefits h2 {
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
