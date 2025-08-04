<?php 
// SEO Meta Tags and Schema for Shopping Credit Cards
add_action('wp_head', function() {
    $page_title = 'Best Shopping Credit Cards India 2025';
    $page_description = 'Compare the best shopping credit cards in India 2025. Find cards with cashback on online shopping, Amazon, Flipkart, grocery stores, and retail purchases.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="shopping credit cards India, online shopping cashback, Amazon credit card, Flipkart credit card, grocery cashback, retail rewards">';
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
      <li class="breadcrumb-item active" aria-current="page">Shopping Credit Cards</li>
    </ol>
  </div>
</nav>

<main class="shopping-cards-page">
  <section class="page-header">
    <div class="container">
      <h1>Best Shopping Credit Cards in India 2025</h1>
      <p>Maximize savings on online and offline shopping with credit cards offering cashback, rewards, and exclusive discounts.</p>
    </div>
  </section>

  <!-- Top Shopping Cards Section -->
  <section class="featured-shopping-cards">
    <div class="container">
      <h2>🛍️ Top Shopping Credit Cards</h2>
      <div class="cards-grid">
        
        <!-- ICICI Amazon Pay Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/page-icici-amazon">ICICI Amazon Pay</a></h3>
            <div class="card-rating">★★★★★ 4.5/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>5% cashback on Amazon purchases</li>
              <li>2% cashback on bill payments</li>
              <li>1% cashback on all other spends</li>
              <li>Lifetime free - No annual fee</li>
              <li>Welcome bonus of ₹500</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: Lifetime Free</div>
          <div class="card-actions">
            <a href="/icici-amazon" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=icici-amazon" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- Flipkart Axis Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/page-flipkart-axis">Flipkart Axis Bank</a></h3>
            <div class="card-rating">★★★★☆ 4.2/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>5% cashback on Flipkart & Myntra</li>
              <li>4% cashback on Preferred Partners</li>
              <li>1.5% cashback on all other spends</li>
              <li>No foreign transaction fees</li>
              <li>Instant discount offers</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹500</div>
          <div class="card-actions">
            <a href="/flipkart-axis" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=flipkart-axis" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- RBL Shoprite Card -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/page-rbl-shoprite">RBL Bank ShopRite</a></h3>
            <div class="card-rating">★★★★☆ 4.0/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>5% cashback on grocery shopping</li>
              <li>2% cashback on online shopping</li>
              <li>1% cashback on all purchases</li>
              <li>Special discounts at partner stores</li>
              <li>Easy EMI conversion</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹500</div>
          <div class="card-actions">
            <a href="/rbl-shoprite" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=rbl-shoprite" class="btn btn-outline">Compare</a>
          </div>
        </div>

        <!-- American Express SmartEarn -->
        <div class="card-item">
          <div class="card-header">
            <h3><a href="/page-american-express-smartearn">Amex SmartEarn</a></h3>
            <div class="card-rating">★★★★☆ 4.1/5</div>
          </div>
          <div class="card-highlights">
            <ul>
              <li>5% cashback on Swiggy & Zomato</li>
              <li>4% cashback on Amazon purchases</li>
              <li>1% cashback on all other spends</li>
              <li>No pre-set spending limit</li>
              <li>Global acceptance</li>
            </ul>
          </div>
          <div class="card-fee">Annual Fee: ₹1,500</div>
          <div class="card-actions">
            <a href="/american-express-smartearn" class="btn btn-primary">View Details</a>
            <a href="/compare-cards?pre-select=american-express-smartearn" class="btn btn-outline">Compare</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Shopping Benefits Guide -->
  <section class="shopping-benefits">
    <div class="container">
      <h2>🌟 Key Shopping Credit Card Benefits</h2>
      <div class="benefits-grid">
        
        <div class="benefit-item">
          <div class="benefit-icon">💳</div>
          <h3>Online Shopping Cashback</h3>
          <p>Earn accelerated cashback on popular e-commerce platforms like Amazon, Flipkart, Myntra, and hundreds of online stores.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🏪</div>
          <h3>Retail Store Rewards</h3>
          <p>Get additional points and discounts at partner retail chains, department stores, supermarkets, and branded outlets.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🛒</div>
          <h3>Grocery & Essentials</h3>
          <p>Special cashback rates on grocery shopping, daily essentials, pharmacy purchases, and household items.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">📱</div>
          <h3>Digital Wallet Benefits</h3>
          <p>Additional rewards when paying through digital wallets, UPI, and mobile payment apps for seamless transactions.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🎯</div>
          <h3>Instant Discounts</h3>
          <p>Exclusive instant discounts during sales events, festivals, and special promotional periods on partner platforms.</p>
        </div>

        <div class="benefit-item">
          <div class="benefit-icon">🔄</div>
          <h3>Easy EMI Options</h3>
          <p>Convert large purchases into affordable EMIs with attractive interest rates and flexible tenure options.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Shopping Categories -->
  <section class="shopping-categories">
    <div class="container">
      <h2>🛍️ Popular Shopping Categories</h2>
      <div class="categories-grid">
        
        <div class="category-item">
          <div class="category-icon">👗</div>
          <h3>Fashion & Lifestyle</h3>
          <p>Clothing, footwear, accessories, and personal care products from top brands and designers.</p>
        </div>

        <div class="category-item">
          <div class="category-icon">📱</div>
          <h3>Electronics & Gadgets</h3>
          <p>Smartphones, laptops, appliances, and latest technology products with extended warranties.</p>
        </div>

        <div class="category-item">
          <div class="category-icon">🏠</div>
          <h3>Home & Kitchen</h3>
          <p>Furniture, home decor, kitchen appliances, and household essentials for modern living.</p>
        </div>

        <div class="category-item">
          <div class="category-icon">📚</div>
          <h3>Books & Education</h3>
          <p>Books, educational materials, online courses, and learning resources for all age groups.</p>
        </div>

        <div class="category-item">
          <div class="category-icon">💄</div>
          <h3>Beauty & Health</h3>
          <p>Cosmetics, skincare, health supplements, and wellness products from trusted brands.</p>
        </div>

        <div class="category-item">
          <div class="category-icon">🎮</div>
          <h3>Entertainment & Gaming</h3>
          <p>Gaming consoles, movies, music, streaming subscriptions, and entertainment services.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Shopping Card Selection Guide -->
  <section class="selection-guide">
    <div class="container">
      <h2>🤔 How to Choose the Right Shopping Credit Card</h2>
      <div class="guide-content">
        
        <div class="guide-section">
          <h3>1. Assess Your Shopping Habits</h3>
          <ul>
            <li><strong>Online Shoppers:</strong> Cards with high cashback on e-commerce platforms</li>
            <li><strong>Offline Shoppers:</strong> Cards with retail store partnerships and discounts</li>
            <li><strong>Mixed Shoppers:</strong> Cards offering rewards across multiple channels</li>
            <li><strong>Category Specific:</strong> Specialized cards for grocery, fashion, or electronics</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>2. Compare Cashback Rates</h3>
          <ul>
            <li><strong>Platform-Specific:</strong> 5-10% on specific platforms (Amazon, Flipkart)</li>
            <li><strong>Category-Based:</strong> 2-5% on shopping categories (grocery, fashion)</li>
            <li><strong>General Shopping:</strong> 1-2% on all retail purchases</li>
            <li><strong>Milestone Bonuses:</strong> Additional rewards for reaching spending targets</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>3. Consider Additional Features</h3>
          <ul>
            <li>EMI conversion options and interest rates</li>
            <li>Purchase protection and extended warranty</li>
            <li>Return protection and price drop protection</li>
            <li>Exclusive sales access and early bird discounts</li>
            <li>International shopping benefits</li>
          </ul>
        </div>

        <div class="guide-section">
          <h3>4. Check Spending Caps & Limits</h3>
          <ul>
            <li>Monthly/annual cashback limits</li>
            <li>Minimum spending requirements</li>
            <li>Partner platform spending caps</li>
            <li>Redemption thresholds and expiry terms</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Compare Section -->
  <section class="compare-section">
    <div class="container">
      <h2>🔍 Compare Shopping Credit Cards</h2>
      <p>Use our comprehensive comparison tool to find the perfect shopping credit card based on your spending patterns.</p>
      <div class="cta-buttons">
        <a href="/compare-cards?filter=shopping" class="btn btn-primary btn-large">Compare Shopping Cards</a>
        <a href="/rewards-calculator" class="btn btn-outline btn-large">Calculate Shopping Rewards</a>
      </div>
    </div>
  </section>

</main>

<style>
/* Shopping Cards Page Styles */
.shopping-cards-page {
    line-height: 1.6;
}

.page-header {
    background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
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
.featured-shopping-cards {
    padding: 4rem 0;
    background: #f8f9fa;
}

.featured-shopping-cards h2 {
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
.shopping-benefits {
    padding: 4rem 0;
}

.shopping-benefits h2 {
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

/* Shopping Categories Section */
.shopping-categories {
    padding: 4rem 0;
    background: #f8f9fa;
}

.shopping-categories h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.category-item {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.category-item:hover {
    transform: translateY(-3px);
}

.category-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.category-item h3 {
    margin-bottom: 0.5rem;
    color: #333;
}

.category-item p {
    color: #666;
    font-size: 0.9rem;
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
    background: #f8f9fa;
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
    
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
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

@media (max-width: 480px) {
    .categories-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
