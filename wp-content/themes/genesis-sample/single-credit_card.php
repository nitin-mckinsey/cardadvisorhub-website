<?php 
// Simple Credit Card Template - Back to Basics
// This handles individual credit card pages without plugin complexity

get_header(); 

// Get the current page to determine which card
$current_page = get_queried_object();
$page_slug = $current_page->post_name;

// Define credit card data directly in template
$credit_cards = array(
    'hdfc-millennia' => array(
        'title' => 'HDFC Millennia Credit Card',
        'annual_fee' => '₹1,000 + GST',
        'grocery_cashback' => '2.5%',
        'fuel_cashback' => '1%',
        'base_cashback' => '1%',
        'online_cashback' => '5%',
        'welcome_bonus' => '₹1,000 cashback + 1,000 bonus points',
        'card_image' => 'images/cards/hdfc-millennia.png',
        'apply_url' => 'https://www.hdfcbank.com/personal/pay/cards/credit-cards/millennia-credit-card',
        'rating' => '4.4',
        'review_count' => '3200',
        'tagline' => 'Perfect for millennials with great online shopping rewards',
        'bank' => 'HDFC Bank',
        'description' => 'The HDFC Millennia Credit Card is designed for millennials who love online shopping. With 5% cashback on online purchases and 2.5% on groceries, this card maximizes your savings on everyday expenses.',
        'pros' => array(
            'Excellent 5% cashback on online shopping',
            'Good grocery cashback rate of 2.5%',
            'Annual fee waiver available',
            'Wide acceptance across merchants',
            'Great welcome bonus package'
        ),
        'cons' => array(
            'Monthly cashback caps limit high spenders',
            'No airport lounge access included',
            'Limited premium lifestyle benefits',
            'Annual fee charged in first year'
        )
    ),
    'sbi-cashback' => array(
        'title' => 'SBI Cashback Credit Card',
        'annual_fee' => '₹999 + GST',
        'grocery_cashback' => '1%',
        'fuel_cashback' => '1%',
        'base_cashback' => '1%',
        'online_cashback' => '5%',
        'welcome_bonus' => '₹2,000 Amazon voucher on ₹15,000 spend',
        'card_image' => 'images/cards/sbi-cashback.png',
        'apply_url' => 'https://www.sbicard.com/en/personal/credit-cards/rewards/sbi-cashback-credit-card.page',
        'rating' => '4.3',
        'review_count' => '4500',
        'tagline' => 'Unlimited cashback on online shopping with no monthly limits',
        'bank' => 'SBI Card',
        'description' => 'The SBI Cashback Credit Card offers unlimited 5% cashback on online spending with no monthly caps. This makes it one of the most rewarding cards for heavy online shoppers.',
        'pros' => array(
            'Unlimited 5% cashback on online shopping',
            'No monthly spending caps',
            'Decent fuel cashback',
            'Annual fee waiver available',
            'Wide online merchant acceptance'
        ),
        'cons' => array(
            'No airport lounge access',
            'Limited offline benefits',
            'Cashback credit takes 90 days',
            'Customer service can be slow'
        )
    ),
    'icici-amazon' => array(
        'title' => 'ICICI Amazon Pay Credit Card',
        'annual_fee' => 'Nil',
        'grocery_cashback' => '2%',
        'fuel_cashback' => '1%',
        'base_cashback' => '1%',
        'amazon_cashback' => '5%',
        'welcome_bonus' => '₹2,000 Amazon Gift Card',
        'card_image' => 'images/cards/icici-amazon.png',
        'apply_url' => 'https://www.icicibank.com/personal-banking/cards/credit-card/amazon-pay-credit-card',
        'rating' => '4.5',
        'review_count' => '8900',
        'tagline' => 'No annual fee card with unlimited Amazon cashback',
        'bank' => 'ICICI Bank',
        'description' => 'The ICICI Amazon Pay Credit Card is a lifetime free card offering 5% cashback on Amazon purchases for Prime members. Perfect for frequent Amazon shoppers.',
        'pros' => array(
            'Lifetime free card with no annual fee',
            'Unlimited 5% cashback on Amazon',
            'Good cashback on groceries and dining',
            'Instant approval for many applicants',
            'Excellent for Amazon Prime members'
        ),
        'cons' => array(
            'Limited benefits outside Amazon ecosystem',
            'No airport lounge access',
            'Lower cashback for non-Prime members',
            'No premium lifestyle benefits'
        )
    )
);

// Get card data based on current page slug
$card_data = isset($credit_cards[$page_slug]) ? $credit_cards[$page_slug] : null;

// If no matching card data, use default
if (!$card_data) {
    $card_data = array(
        'title' => get_the_title(),
        'annual_fee' => 'Contact bank',
        'grocery_cashback' => 'Varies',
        'fuel_cashback' => 'Varies',
        'base_cashback' => 'Varies',
        'welcome_bonus' => 'Contact bank for details',
        'card_image' => '',
        'apply_url' => '#',
        'rating' => '4.0',
        'review_count' => '0',
        'tagline' => 'Great credit card for your needs',
        'bank' => 'Various Banks',
        'description' => 'This credit card offers various benefits and rewards for cardholders.',
        'pros' => array('Good benefits', 'Reliable service'),
        'cons' => array('Terms and conditions apply')
    );
}
?>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <?php 
            // Handle image path
            $image_url = '';
            if (!empty($card_data['card_image'])) {
                if (preg_match('/^https?:\/\//i', $card_data['card_image'])) {
                    $image_url = $card_data['card_image'];
                } else {
                    $image_url = get_stylesheet_directory_uri() . '/' . ltrim($card_data['card_image'], '/');
                }
            }
            
            // Fallback SVG if no image
            if (empty($image_url)) {
                $image_url = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%23333'/%3E%3Ctext x='20' y='100' font-family='Arial' font-size='16' font-weight='bold' fill='white'%3ECredit Card%3C/text%3E%3C/svg%3E";
            }
            ?>
            <img src="<?php echo esc_url($image_url); ?>" 
                 alt="<?php echo esc_attr($card_data['title']); ?>" 
                 style="max-width: 300px; width: 100%; height: auto; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.3);"
                 loading="lazy">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text"><?php echo esc_html($card_data['rating']); ?>/5 (<?php echo number_format((int)$card_data['review_count']); ?> reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1><?php echo esc_html($card_data['title']); ?></h1>
          <p class="card-tagline"><?php echo esc_html($card_data['tagline']); ?></p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value"><?php echo esc_html($card_data['annual_fee']); ?></span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Grocery Cashback</span>
              <span class="highlight-value"><?php echo esc_html($card_data['grocery_cashback']); ?></span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Welcome Bonus</span>
              <span class="highlight-value"><?php echo esc_html($card_data['welcome_bonus']); ?></span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="<?php echo esc_url($card_data['apply_url']); ?>" class="btn btn-primary" target="_blank">Apply Now</a>
            <button class="btn btn-outline">Add to Compare</button>
            <button class="btn btn-outline">
              <span class="favorite-icon">♡</span> Add to Favorites
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Card Description -->
  <section class="card-details">
    <div class="container">
      <div class="card-description">
        <h2>About <?php echo esc_html($card_data['title']); ?></h2>
        <p><?php echo esc_html($card_data['description']); ?></p>
        
        <!-- Display page content if available -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php if (!empty(get_the_content())): ?>
            <div class="additional-content">
              <?php the_content(); ?>
            </div>
          <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <section class="card-features">
    <div class="container">
      <h2>Key Features & Benefits</h2>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">🛒</div>
          <h3><?php echo esc_html($card_data['grocery_cashback']); ?> Grocery Cashback</h3>
          <p>Earn <?php echo esc_html($card_data['grocery_cashback']); ?> cashback on grocery shopping</p>
        </div>
        
        <?php if (isset($card_data['online_cashback'])): ?>
        <div class="feature-card">
          <div class="feature-icon">🛍️</div>
          <h3><?php echo esc_html($card_data['online_cashback']); ?> Online Shopping</h3>
          <p>Get <?php echo esc_html($card_data['online_cashback']); ?> cashback on online purchases</p>
        </div>
        <?php endif; ?>
        
        <?php if (isset($card_data['amazon_cashback'])): ?>
        <div class="feature-card">
          <div class="feature-icon">📦</div>
          <h3><?php echo esc_html($card_data['amazon_cashback']); ?> Amazon Cashback</h3>
          <p>Get <?php echo esc_html($card_data['amazon_cashback']); ?> cashback on Amazon purchases</p>
        </div>
        <?php endif; ?>
        
        <div class="feature-card">
          <div class="feature-icon">⛽</div>
          <h3><?php echo esc_html($card_data['fuel_cashback']); ?> Fuel Cashback</h3>
          <p>Get <?php echo esc_html($card_data['fuel_cashback']); ?> cashback on fuel purchases</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎁</div>
          <h3>Welcome Bonus</h3>
          <p><?php echo esc_html($card_data['welcome_bonus']); ?></p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💳</div>
          <h3><?php echo esc_html($card_data['base_cashback']); ?> Base Cashback</h3>
          <p>Get <?php echo esc_html($card_data['base_cashback']); ?> cashback on all other purchases</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pros and Cons Section -->
  <section class="pros-cons">
    <div class="container">
      <h2>Pros & Cons</h2>
      <div class="pros-cons-grid">
        <div class="pros-section">
          <h3>✅ Pros</h3>
          <ul>
            <?php foreach ($card_data['pros'] as $pro): ?>
              <li><?php echo esc_html($pro); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        
        <div class="cons-section">
          <h3>❌ Cons</h3>
          <ul>
            <?php foreach ($card_data['cons'] as $con): ?>
              <li><?php echo esc_html($con); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>


<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #C41E3A, #A91B32) !important;
    padding: 60px 0;
    color: white;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.card-hero-content {
    display: flex;
    gap: 40px;
    align-items: center;
}

.card-visual {
    text-align: center;
}

.card-info {
    flex: 1;
}

.card-info h1 {
    color: white;
    margin-bottom: 10px;
    font-size: 2.5em;
}

.card-tagline {
    color: rgba(255,255,255,0.9);
    font-size: 1.1em;
    margin-bottom: 30px;
}

.key-highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.highlight-item {
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 8px;
    text-align: center;
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
    margin-top: 30px;
}

.btn {
    padding: 15px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    margin-right: 15px;
    display: inline-block;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-primary {
    background: #fff;
    color: #C41E3A;
}

.btn-primary:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-outline:hover {
    background: white;
    color: #C41E3A;
}

.card-details {
    padding: 60px 0;
    background: #f8f9fa;
}

.card-description {
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    line-height: 1.7;
}

.card-description h2 {
    color: #C41E3A;
    margin-bottom: 20px;
}

.card-features {
    padding: 60px 0;
    background: white;
}

.card-features h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.feature-card {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-icon {
    font-size: 48px;
    margin-bottom: 15px;
}

.feature-card h3 {
    color: #C41E3A;
    margin-bottom: 15px;
}

.pros-cons {
    background: #f8f9fa;
    padding: 60px 0;
}

.pros-cons h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

.pros-cons-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.pros-section, .cons-section {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.pros-section h3 {
    color: #28a745;
    font-size: 24px;
    margin-bottom: 20px;
}

.cons-section h3 {
    color: #dc3545;
    font-size: 24px;
    margin-bottom: 20px;
}

.pros-section ul, .cons-section ul {
    list-style: none;
    padding: 0;
}

.pros-section li, .cons-section li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 16px;
}

.pros-section li:last-child, .cons-section li:last-child {
    border-bottom: none;
}

@media (max-width: 768px) {
    .card-hero-content {
        flex-direction: column;
        text-align: center;
    }
    
    .pros-cons-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .key-highlights {
        grid-template-columns: 1fr;
    }
    
    .card-description {
        padding: 20px;
    }
    
    .btn {
        display: block;
        margin: 10px 0;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>
