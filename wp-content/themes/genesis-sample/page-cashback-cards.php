<?php 
// SEO Meta Tags for Cashback Cards Category
add_action('wp_head', function() {
    $page_title = 'Best Cashback Credit Cards India 2025 | Up to 5% Cashback | CardAdvisorHub';
    $page_description = 'Find the best cashback credit cards in India 2025. Compare SBI Cashback, ICICI Amazon Pay, HDFC MoneyBack cards with up to 5% cashback rates, zero annual fees, and instant rewards.';
    $page_keywords = 'cashback credit cards India, best cashback cards 2025, SBI cashback card, ICICI Amazon Pay, HDFC MoneyBack, cashback rates, zero annual fee cards, instant cashback';
    
    echo '<title>' . $page_title . '</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="' . $page_keywords . '">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . '">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/cashback-cards-category.jpg">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="Best Cashback Credit Cards India 2025">';
    echo '<meta name="twitter:description" content="' . $page_description . '">';
    echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/images/cashback-cards-category.jpg">';
    
    // Structured Data for Category Page
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Best Cashback Credit Cards India 2025",
        "description": "' . $page_description . '",
        "url": "' . get_permalink() . '",
        "about": {
            "@type": "Product",
            "name": "Cashback Credit Cards",
            "category": "Credit Card",
            "offers": {
                "@type": "Offer",
                "description": "Up to 5% cashback on purchases"
            }
        }
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
                "item": "' . home_url() . '/compare-cards"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Cashback Cards",
                "item": "' . get_permalink() . '"
            }
        ]
    }
    </script>';
}, 1);

// Enqueue specific CSS for cashback cards page
wp_enqueue_style('cashback-cards-style', get_template_directory_uri() . '/css/cashback-cards.css', array(), '1.0.0');

get_header(); ?>

<main class="category-page cashback-cards">
  <!-- Hero Banner Section -->
  <section class="cashback-hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <div class="category-badge">💰 Cashback Cards</div>
          <h1>Best Cashback Credit Cards in India 2025</h1>
          <p class="hero-subtitle">Get money back on every purchase! Discover the highest cashback rates, zero annual fees, and instant rewards that put cash directly into your pocket.</p>
          
          <div class="hero-stats">
            <div class="stat-card">
              <div class="stat-number">Up to 5%</div>
              <div class="stat-label">Cashback Rate</div>
            </div>
            <div class="stat-card">
              <div class="stat-number">₹0</div>
              <div class="stat-label">Annual Fee Options</div>
            </div>
            <div class="stat-card">
              <div class="stat-number">Instant</div>
              <div class="stat-label">Rewards Credit</div>
            </div>
          </div>
          
          <div class="hero-cta">
            <a href="#top-cards" class="btn btn-primary btn-large">Compare Top Cards</a>
            <a href="#calculator" class="btn btn-outline">Cashback Calculator</a>
          </div>
        </div>
        
        <div class="hero-visual">
          <div class="cashback-animation">
            <div class="money-icon">💵</div>
            <div class="card-icon">💳</div>
            <div class="cashback-flow">
              <span>5%</span>
              <span>Cash</span>
              <span>Back</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Showcase -->
  <section class="benefits-showcase">
    <div class="container">
      <div class="section-header">
        <h2>Why Choose Cashback Credit Cards?</h2>
        <p>Simple, transparent rewards that give you real money back on every purchase</p>
      </div>
      
      <div class="benefits-grid">
        <div class="benefit-card primary">
          <div class="benefit-icon">💰</div>
          <h3>Direct Cash Returns</h3>
          <p>Get money back on every purchase - no points conversion needed. Cash goes directly to your statement or bank account.</p>
          <div class="benefit-highlight">No complexity, just cash!</div>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🛒</div>
          <h3>Category Bonuses</h3>
          <p>Earn up to 5% cashback on specific spending categories like online shopping, groceries, and fuel.</p>
          <div class="benefit-stats">
            <span>5% Online</span>
            <span>4% Groceries</span>
            <span>2% Fuel</span>
          </div>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">🎯</div>
          <h3>Simple & Transparent</h3>
          <p>Easy to understand rewards structure with no complicated redemption thresholds or expiring points.</p>
          <div class="benefit-badge">No Confusion</div>
        </div>
        
        <div class="benefit-card">
          <div class="benefit-icon">💳</div>
          <h3>Flexible Usage</h3>
          <p>Use cashback for statement credit, bank transfer, or future purchases. Multiple redemption options available.</p>
          <div class="redemption-options">
            <span>Statement Credit</span>
            <span>Bank Transfer</span>
            <span>Bill Payment</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Top Cashback Cards -->
  <section id="top-cards" class="top-cashback-cards">
    <div class="container">
      <div class="section-header">
        <h2>Top Cashback Credit Cards</h2>
        <p>Handpicked cards with the highest cashback rates and best benefits</p>
      </div>
      
      <div class="cards-showcase">
        <!-- ICICI Amazon Pay -->
        <div class="cashback-card featured">
          <div class="card-ribbon">
            <span>🏆 Best Overall</span>
          </div>
          
          <div class="card-visual">
            <div class="card-image-container">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cards/icici-amazon-pay-credit-card.png" 
                   alt="ICICI Amazon Pay Credit Card" 
                   class="realistic-card-image"
                   onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
              <div class="bank-icon fallback-icon" style="display: none;">🏦</div>
            </div>
          </div>
          
          <div class="card-header">
            <div class="card-logo">
              <div class="card-name">
                <h3><a href="/icici-amazon">ICICI Amazon Pay Credit Card</a></h3>
                <div class="card-type">Lifetime Free • No Annual Fee</div>
              </div>
            </div>
            <div class="card-rating">
              <div class="stars">★★★★☆</div>
              <div class="rating-score">4.3/5</div>
              <div class="reviews-count">(2,847 reviews)</div>
            </div>
          </div>

          <div class="cashback-highlight">
            <div class="max-cashback">
              <span class="rate">5%</span>
              <span class="label">Max Cashback</span>
            </div>
            <div class="cashback-categories">
              <span class="category">Amazon</span>
              <span class="category">Prime Video</span>
              <span class="category">Bill Payments</span>
            </div>
          </div>

          <div class="card-details">
            <div class="detail-section">
              <h4>💰 Cashback Structure</h4>
              <div class="cashback-rates">
                <div class="rate-item best">
                  <span class="percentage">5%</span>
                  <span class="description">Amazon purchases</span>
                </div>
                <div class="rate-item good">
                  <span class="percentage">2%</span>
                  <span class="description">Bill payments via Amazon Pay</span>
                </div>
                <div class="rate-item standard">
                  <span class="percentage">1%</span>
                  <span class="description">All other spends</span>
                </div>
              </div>
            </div>

            <div class="detail-section">
              <h4>🎁 Key Benefits</h4>
              <div class="benefits-list">
                <div class="benefit-item">
                  <span class="benefit-icon">👑</span>
                  <span>Amazon Prime membership benefits</span>
                </div>
                <div class="benefit-item">
                  <span class="benefit-icon">⛽</span>
                  <span>No fuel surcharge waiver</span>
                </div>
                <div class="benefit-item">
                  <span class="benefit-icon">✅</span>
                  <span>Easy approval process</span>
                </div>
                <div class="benefit-item">
                  <span class="benefit-icon">💳</span>
                  <span>Welcome bonus cashback</span>
                </div>
              </div>
            </div>

            <div class="card-specs">
              <div class="spec-item">
                <label>Annual Fee</label>
                <span class="fee-free">Lifetime Free</span>
              </div>
              <div class="spec-item">
                <label>Min Income</label>
                <span>₹20,000/month</span>
              </div>
              <div class="spec-item">
                <label>Cashback Limit</label>
                <span>No monthly limit</span>
              </div>
            </div>
          </div>

          <div class="card-actions">
            <a href="/icici-amazon" class="btn btn-primary">View Full Details</a>
            <a href="/apply/icici-amazon" class="btn btn-secondary">Apply Now</a>
          </div>
        </div>

        <!-- Flipkart Axis Bank -->
        <div class="cashback-card">
          <div class="card-header">
            <div class="card-logo">
              <div class="bank-icon">🏪</div>
              <div class="card-name">
                <h3><a href="/flipkart-axis">Flipkart Axis Bank Credit Card</a></h3>
                <div class="card-type">Low Annual Fee • High Rewards</div>
              </div>
            </div>
            <div class="card-rating">
              <div class="stars">★★★★☆</div>
              <div class="rating-score">4.1/5</div>
              <div class="reviews-count">(1,932 reviews)</div>
            </div>
          </div>

          <div class="cashback-highlight">
            <div class="max-cashback">
              <span class="rate">5%</span>
              <span class="label">on Flipkart</span>
            </div>
            <div class="cashback-categories">
              <span class="category">Flipkart</span>
              <span class="category">Myntra</span>
              <span class="category">2GUD</span>
            </div>
          </div>

          <div class="card-details">
            <div class="detail-section">
              <h4>💰 Cashback Structure</h4>
              <div class="cashback-rates">
                <div class="rate-item best">
                  <span class="percentage">5%</span>
                  <span class="description">Flipkart, Myntra, 2GUD</span>
                </div>
                <div class="rate-item good">
                  <span class="percentage">4%</span>
                  <span class="description">Preferred Partners</span>
                </div>
                <div class="rate-item standard">
                  <span class="percentage">1.5%</span>
                  <span class="description">All other spends</span>
                </div>
              </div>
            </div>

            <div class="card-specs">
              <div class="spec-item">
                <label>Annual Fee</label>
                <span>₹500 <small>(Waived on ₹30K spends)</small></span>
              </div>
              <div class="spec-item">
                <label>Min Income</label>
                <span>₹25,000/month</span>
              </div>
            </div>
          </div>

          <div class="card-actions">
            <a href="/flipkart-axis" class="btn btn-primary">View Details</a>
            <a href="/apply/flipkart-axis" class="btn btn-secondary">Apply Now</a>
          </div>
        </div>

        <!-- SBI Cashback -->
        <div class="cashback-card">
          <div class="card-header">
            <div class="card-logo">
              <div class="bank-icon">🏛️</div>
              <div class="card-name">
                <h3><a href="/sbi-cashback">SBI Cashback Credit Card</a></h3>
                <div class="card-type">Premium Cashback • High Online Rewards</div>
              </div>
            </div>
            <div class="card-rating">
              <div class="stars">★★★★☆</div>
              <div class="rating-score">3.9/5</div>
              <div class="reviews-count">(1,456 reviews)</div>
            </div>
          </div>

          <div class="cashback-highlight">
            <div class="max-cashback">
              <span class="rate">5%</span>
              <span class="label">Online Spends</span>
            </div>
            <div class="cashback-limit">Monthly Limit: ₹5,000</div>
          </div>

          <div class="card-details">
            <div class="detail-section">
              <h4>💰 Cashback Structure</h4>
              <div class="cashback-rates">
                <div class="rate-item best">
                  <span class="percentage">5%</span>
                  <span class="description">Online spends</span>
                </div>
                <div class="rate-item standard">
                  <span class="percentage">1%</span>
                  <span class="description">Offline spends</span>
                </div>
              </div>
            </div>

            <div class="card-specs">
              <div class="spec-item">
                <label>Annual Fee</label>
                <span>₹999 <small>(Waived on ₹2L spends)</small></span>
              </div>
              <div class="spec-item">
                <label>Min Income</label>
                <span>₹25,000/month</span>
              </div>
            </div>
          </div>

          <div class="card-actions">
            <a href="/sbi-cashback" class="btn btn-primary">View Details</a>
            <a href="/apply/sbi-cashback" class="btn btn-secondary">Apply Now</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Quick Comparison Table -->
  <section class="comparison-section">
    <div class="container">
      <div class="section-header">
        <h2>Quick Comparison</h2>
        <p>Compare key features side by side</p>
      </div>
      
      <div class="comparison-wrapper">
        <table class="modern-comparison-table">
          <thead>
            <tr>
              <th>Credit Card</th>
              <th>Annual Fee</th>
              <th>Max Cashback</th>
              <th>Best Category</th>
              <th>Min Income</th>
              <th>Rating</th>
              <th>Apply</th>
            </tr>
          </thead>
          <tbody>
            <tr class="featured-row">
              <td>
                <div class="card-name-cell">
                  <div class="card-icon">🏦</div>
                  <div>
                    <strong>ICICI Amazon Pay</strong>
                    <small>Lifetime Free</small>
                  </div>
                </div>
              </td>
              <td><span class="fee-badge free">₹0</span></td>
              <td><span class="cashback-badge best">5%</span></td>
              <td>Amazon Shopping</td>
              <td>₹20,000/month</td>
              <td>
                <div class="rating-cell">
                  <span class="stars">★★★★☆</span>
                  <small>4.3/5</small>
                </div>
              </td>
              <td><a href="/apply/icici-amazon-pay" class="btn btn-sm btn-primary">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="card-name-cell">
                  <div class="card-icon">🏪</div>
                  <div>
                    <strong>Flipkart Axis Bank</strong>
                    <small>Low Fee</small>
                  </div>
                </div>
              </td>
              <td><span class="fee-badge low">₹500</span></td>
              <td><span class="cashback-badge best">5%</span></td>
              <td>Flipkart Shopping</td>
              <td>₹25,000/month</td>
              <td>
                <div class="rating-cell">
                  <span class="stars">★★★★☆</span>
                  <small>4.1/5</small>
                </div>
              </td>
              <td><a href="/apply/flipkart-axis-bank" class="btn btn-sm btn-primary">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="card-name-cell">
                  <div class="card-icon">🏛️</div>
                  <div>
                    <strong>SBI Cashback</strong>
                    <small>Premium</small>
                  </div>
                </div>
              </td>
              <td><span class="fee-badge medium">₹999</span></td>
              <td><span class="cashback-badge best">5%</span></td>
              <td>Online Spending</td>
              <td>₹25,000/month</td>
              <td>
                <div class="rating-cell">
                  <span class="stars">★★★★☆</span>
                  <small>3.9/5</small>
                </div>
              </td>
              <td><a href="/apply/sbi-cashback" class="btn btn-sm btn-primary">Apply Now</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Cashback Calculator -->
  <section id="calculator" class="calculator-section">
    <div class="container">
      <div class="section-header">
        <h2>💰 Cashback Calculator</h2>
        <p>Calculate your potential monthly cashback earnings</p>
      </div>
      
      <div class="calculator-widget">
        <div class="calculator-inputs">
          <div class="input-group">
            <label>Monthly Amazon Spending</label>
            <div class="input-wrapper">
              <span class="currency">₹</span>
              <input type="number" id="amazon-spend" placeholder="10000" value="10000">
            </div>
          </div>
          
          <div class="input-group">
            <label>Monthly Online Spending</label>
            <div class="input-wrapper">
              <span class="currency">₹</span>
              <input type="number" id="online-spend" placeholder="5000" value="5000">
            </div>
          </div>
          
          <div class="input-group">
            <label>Monthly Other Spending</label>
            <div class="input-wrapper">
              <span class="currency">₹</span>
              <input type="number" id="other-spend" placeholder="8000" value="8000">
            </div>
          </div>
        </div>
        
        <div class="calculator-results">
          <h3>Your Monthly Cashback Potential</h3>
          
          <div class="cashback-results">
            <div class="result-card">
              <div class="card-name">ICICI Amazon Pay</div>
              <div class="cashback-amount" id="icici-result">₹650</div>
              <div class="cashback-breakdown">
                <small>Amazon: ₹500 + Online: ₹50 + Others: ₹100</small>
              </div>
            </div>
            
            <div class="result-card">
              <div class="card-name">SBI Cashback</div>
              <div class="cashback-amount" id="sbi-result">₹580</div>
              <div class="cashback-breakdown">
                <small>Online: ₹500 + Others: ₹80 (₹5000 limit)</small>
              </div>
            </div>
            
            <div class="result-card">
              <div class="card-name">Flipkart Axis</div>
              <div class="cashback-amount" id="flipkart-result">₹270</div>
              <div class="cashback-breakdown">
                <small>Online: ₹75 + Others: ₹195</small>
              </div>
            </div>
          </div>
          
          <div class="calculator-note">
            <p>💡 <strong>Pro Tip:</strong> Use multiple cards for different categories to maximize cashback!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cashback Tips -->
  <section class="tips-section">
    <div class="container">
      <div class="section-header">
        <h2>🎯 Pro Tips to Maximize Cashback</h2>
        <p>Expert strategies to get the most out of your cashback cards</p>
      </div>
      
      <div class="tips-grid">
        <div class="tip-card">
          <div class="tip-icon">🎯</div>
          <h3>Category Strategy</h3>
          <p>Use different cards for different spending categories to maximize cashback rates. Keep the ICICI Amazon Pay for Amazon purchases and SBI Cashback for other online spending.</p>
          <div class="tip-highlight">Strategy: Multi-card approach</div>
        </div>
        
        <div class="tip-card">
          <div class="tip-icon">📅</div>
          <h3>Track Monthly Limits</h3>
          <p>Most cashback cards have monthly or quarterly limits. SBI Cashback has a ₹5,000 monthly limit, so plan your big purchases accordingly.</p>
          <div class="tip-highlight">Watch: Spending caps</div>
        </div>
        
        <div class="tip-card">
          <div class="tip-icon">💳</div>
          <h3>Online Bill Payments</h3>
          <p>Many cards offer higher cashback on online bill payments and digital transactions. Use Amazon Pay for utilities and mobile recharges.</p>
          <div class="tip-highlight">Bonus: Bill payment rewards</div>
        </div>
        
        <div class="tip-card">
          <div class="tip-icon">🔄</div>
          <h3>Regular Redemption</h3>
          <p>Redeem cashback regularly as statement credit or direct deposit. Don't let your rewards sit idle - they could expire or lose value.</p>
          <div class="tip-highlight">Action: Monthly redemption</div>
        </div>
        
        <div class="tip-card">
          <div class="tip-icon">🛡️</div>
          <h3>Pay in Full</h3>
          <p>Always pay your full balance on time. Interest charges can quickly erase any cashback benefits. Set up auto-pay to never miss a payment.</p>
          <div class="tip-highlight">Rule: Zero interest charges</div>
        </div>
        
        <div class="tip-card">
          <div class="tip-icon">📊</div>
          <h3>Track Your Spending</h3>
          <p>Use budgeting apps or spreadsheets to track category spending. This helps you optimize which card to use for maximum cashback.</p>
          <div class="tip-highlight">Tool: Expense tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header">
        <h2>❓ Frequently Asked Questions</h2>
        <p>Everything you need to know about cashback credit cards</p>
      </div>
      
      <div class="faq-container">
        <div class="faq-item">
          <div class="faq-question">
            <h3>What is the difference between cashback and reward points?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>Cashback gives you direct money back (usually as a percentage of your spending), while reward points need to be redeemed for various options like vouchers, merchandise, or statement credit. Cashback is more straightforward and transparent.</p>
            <div class="faq-comparison">
              <div class="comparison-item">
                <strong>Cashback:</strong> Direct money back, easy to understand, immediate value
              </div>
              <div class="comparison-item">
                <strong>Points:</strong> More redemption options, potentially higher value, but complex
              </div>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>Are there any limits on cashback earnings?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>Yes, most cashback cards have monthly or quarterly limits. For example:</p>
            <ul>
              <li><strong>SBI Cashback:</strong> ₹5,000 monthly cashback limit</li>
              <li><strong>ICICI Amazon Pay:</strong> No monthly limit on cashback</li>
              <li><strong>Flipkart Axis:</strong> Category-specific limits may apply</li>
            </ul>
            <p>Always check your card's terms for specific limits and plan your spending accordingly.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>How is cashback credited to my account?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>Cashback is usually credited through one of these methods:</p>
            <div class="cashback-methods">
              <div class="method">
                <strong>Statement Credit:</strong> Reduces your next bill amount
              </div>
              <div class="method">
                <strong>Bank Transfer:</strong> Direct deposit to your savings account
              </div>
              <div class="method">
                <strong>Cash Vouchers:</strong> Digital vouchers for shopping
              </div>
              <div class="method">
                <strong>Bill Payments:</strong> Use cashback to pay utility bills
              </div>
            </div>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>Can I get cashback on EMI transactions?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>Generally, EMI transactions don't earn cashback or earn at a reduced rate. Here's what you should know:</p>
            <ul>
              <li>Regular EMIs typically don't earn cashback</li>
              <li>No-cost EMIs may earn reduced cashback</li>
              <li>Some cards may have specific EMI cashback offers</li>
              <li>Always check with your bank for EMI-specific policies</li>
            </ul>
            <p><strong>Tip:</strong> For large purchases, consider paying upfront to earn full cashback, then convert to EMI if needed.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>Which cashback card is best for beginners?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>For beginners, we recommend the <strong>ICICI Amazon Pay Credit Card</strong> because:</p>
            <div class="beginner-benefits">
              <div class="benefit">✅ Lifetime free (no annual fee pressure)</div>
              <div class="benefit">✅ Simple cashback structure</div>
              <div class="benefit">✅ Easy approval process</div>
              <div class="benefit">✅ Good customer support</div>
              <div class="benefit">✅ Wide acceptance</div>
            </div>
            <p>Start with this card to understand credit card usage, then consider adding more cards later.</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>How can I maximize my cashback earnings?</h3>
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer">
            <p>Here's a proven strategy to maximize cashback:</p>
            <div class="strategy-steps">
              <div class="step">
                <span class="step-number">1</span>
                <div class="step-content">
                  <strong>Multi-card Strategy:</strong> Use different cards for different categories
                </div>
              </div>
              <div class="step">
                <span class="step-number">2</span>
                <div class="step-content">
                  <strong>Track Spending:</strong> Monitor monthly limits and category spending
                </div>
              </div>
              <div class="step">
                <span class="step-number">3</span>
                <div class="step-content">
                  <strong>Pay Full Balance:</strong> Avoid interest charges that erase cashback
                </div>
              </div>
              <div class="step">
                <span class="step-number">4</span>
                <div class="step-content">
                  <strong>Redeem Regularly:</strong> Don't let cashback sit idle
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <div class="cta-text">
          <h2>Ready to Start Earning Cashback?</h2>
          <p>Join thousands of smart spenders who are already earning money back on every purchase. Compare cards, apply online, and start saving today!</p>
          
          <div class="cta-stats">
            <div class="cta-stat">
              <span class="stat-number">₹50,000+</span>
              <span class="stat-label">Average Annual Cashback</span>
            </div>
            <div class="cta-stat">
              <span class="stat-number">2 Minutes</span>
              <span class="stat-label">Quick Application</span>
            </div>
            <div class="cta-stat">
              <span class="stat-number">100%</span>
              <span class="stat-label">Secure Process</span>
            </div>
          </div>
        </div>
        
        <div class="cta-actions">
          <a href="#top-cards" class="btn btn-primary btn-large">Compare All Cards</a>
          <a href="/apply/icici-amazon-pay" class="btn btn-outline btn-large">Apply for Top Pick</a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- JavaScript for Interactive Features -->
<script>
// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const toggle = item.querySelector('.faq-toggle');
    
    question.addEventListener('click', function() {
      const isOpen = item.classList.contains('active');
      
      // Close all other FAQ items
      faqItems.forEach(otherItem => {
        otherItem.classList.remove('active');
        otherItem.querySelector('.faq-toggle').textContent = '+';
      });
      
      // Toggle current item
      if (!isOpen) {
        item.classList.add('active');
        toggle.textContent = '−';
      }
    });
  });
});

// Cashback Calculator
function calculateCashback() {
  const amazonSpend = parseFloat(document.getElementById('amazon-spend').value) || 0;
  const onlineSpend = parseFloat(document.getElementById('online-spend').value) || 0;
  const otherSpend = parseFloat(document.getElementById('other-spend').value) || 0;
  
  // ICICI Amazon Pay Calculation
  const iciciAmazon = amazonSpend * 0.05;
  const iciciOnline = onlineSpend * 0.02;
  const iciciOthers = otherSpend * 0.01;
  const iciciTotal = iciciAmazon + iciciOnline + iciciOthers;
  
  // SBI Cashback Calculation (with ₹5000 monthly limit)
  const sbiOnline = Math.min((amazonSpend + onlineSpend) * 0.05, 5000);
  const sbiOthers = otherSpend * 0.01;
  const sbiTotal = Math.min(sbiOnline + sbiOthers, 5000);
  
  // Flipkart Axis Calculation
  const flipkartOnline = onlineSpend * 0.015;
  const flipkartOthers = otherSpend * 0.015;
  const flipkartTotal = flipkartOnline + flipkartOthers;
  
  // Update display
  document.getElementById('icici-result').textContent = `₹${Math.round(iciciTotal)}`;
  document.getElementById('sbi-result').textContent = `₹${Math.round(sbiTotal)}`;
  document.getElementById('flipkart-result').textContent = `₹${Math.round(flipkartTotal)}`;
}

// Add event listeners for calculator inputs
document.addEventListener('DOMContentLoaded', function() {
  const inputs = ['amazon-spend', 'online-spend', 'other-spend'];
  inputs.forEach(id => {
    const input = document.getElementById(id);
    if (input) {
      input.addEventListener('input', calculateCashback);
    }
  });
  
  // Initial calculation
  calculateCashback();
});

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('a[href^="#"]');
  
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
});
</script>

<?php get_footer(); ?>
