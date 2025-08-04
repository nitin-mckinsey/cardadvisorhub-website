<?php 
// SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>Sitemap | CardAdvisorHub</title>';
    echo '<meta name="description" content="CardAdvisorHub Sitemap - Find all pages on our credit card comparison website including card reviews, comparisons, guides, and tools.">';
    echo '<meta name="robots" content="index, follow">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
    </ol>
  </div>
</nav>

<main class="sitemap-page">
  <section class="page-header">
    <div class="container">
      <h1>Sitemap</h1>
      <p class="header-subtitle">Navigate through all our credit card resources</p>
    </div>
  </section>

  <section class="sitemap-content">
    <div class="container">
      
      <!-- Main Pages -->
      <div class="sitemap-section">
        <h2>🏠 Main Pages</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>Homepage</h3>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/compare-cards">Compare All Cards</a></li>
              <li><a href="/rewards-calculator">Rewards Calculator</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Tools & Resources</h3>
            <ul>
              <li><a href="/card-finder">Card Finder Tool</a></li>
              <li><a href="/credit-score-guide">Credit Score Guide</a></li>
              <li><a href="/eligibility-checker">Eligibility Checker</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Card Categories -->
      <div class="sitemap-section">
        <h2>💳 Credit Card Categories</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>By Rewards Type</h3>
            <ul>
              <li><a href="/cashback-cards">Cashback Credit Cards</a></li>
              <li><a href="/travel-cards">Travel Credit Cards</a></li>
              <li><a href="/shopping-cards">Shopping Credit Cards</a></li>
              <li><a href="/fuel-cards">Fuel Credit Cards</a></li>
              <li><a href="/premium-cards">Premium Credit Cards</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>By User Type</h3>
            <ul>
              <li><a href="/business-cards">Business Credit Cards</a></li>
              <li><a href="/student-cards">Student Credit Cards</a></li>
              <li><a href="/first-time-cards">First Time Cards</a></li>
              <li><a href="/low-income-cards">Low Income Cards</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Bank-wise Cards -->
      <div class="sitemap-section">
        <h2>🏦 Bank-wise Credit Cards</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>HDFC Bank Cards</h3>
            <ul>
              <li><a href="/hdfc-regalia">HDFC Regalia</a></li>
              <li><a href="/hdfc-millennia">HDFC Millennia</a></li>
              <li><a href="/hdfc-moneyback">HDFC MoneyBack</a></li>
              <li><a href="/hdfc-diners-club">HDFC Diners Club</a></li>
              <li><a href="/hdfc-times">HDFC Times</a></li>
              <li><a href="/hdfc-freedomflex">HDFC FreedomFlex</a></li>
              <li><a href="/hdfc-business-moneyback">HDFC Business MoneyBack</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>SBI Cards</h3>
            <ul>
              <li><a href="/sbi-cashback">SBI Cashback</a></li>
              <li><a href="/sbi-card-prime">SBI Card Prime</a></li>
              <li><a href="/sbi-simply-save">SBI SimplySAVE</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>ICICI Bank Cards</h3>
            <ul>
              <li><a href="/icici-amazon">ICICI Amazon Pay</a></li>
              <li><a href="/icici-platinum">ICICI Platinum</a></li>
              <li><a href="/icici-emeralde">ICICI Emeralde</a></li>
              <li><a href="/icici-rubyx">ICICI Rubyx</a></li>
              <li><a href="/icici-sapphiro">ICICI Sapphiro</a></li>
              <li><a href="/icici-student">ICICI Student</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Axis Bank Cards</h3>
            <ul>
              <li><a href="/axis-magnus">Axis Magnus</a></li>
              <li><a href="/axis-privilege">Axis Privilege</a></li>
              <li><a href="/axis-ace">Axis ACE</a></li>
              <li><a href="/axis-myzone">Axis MyZone</a></li>
              <li><a href="/axis-select">Axis Select</a></li>
              <li><a href="/flipkart-axis">Flipkart Axis</a></li>
              <li><a href="/airtel-axis-bank">Airtel Axis Bank</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Other Bank Cards</h3>
            <ul>
              <li><a href="/american-express-smartearn">American Express SmartEarn</a></li>
              <li><a href="/citi-rewards">Citi Rewards</a></li>
              <li><a href="/kotak-811">Kotak 811</a></li>
              <li><a href="/kotak-platinum">Kotak Platinum</a></li>
              <li><a href="/yes-bank-first">Yes Bank First</a></li>
              <li><a href="/indusind-legend">IndusInd Legend</a></li>
              <li><a href="/indusind-pinnacle">IndusInd Pinnacle</a></li>
              <li><a href="/standard-chartered-manhattan">Standard Chartered Manhattan</a></li>
              <li><a href="/rbl-bank-moneyback">RBL Bank MoneyBack</a></li>
              <li><a href="/rbl-shoprite">RBL ShopRite</a></li>
              <li><a href="/bank-of-baroda-premier">Bank of Baroda Premier</a></li>
              <li><a href="/pnb-select">PNB Select</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Guides & Educational Content -->
      <div class="sitemap-section">
        <h2>📚 Guides & Educational Content</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>Credit Card Guides</h3>
            <ul>
              <li><a href="/how-to-choose-credit-card">How to Choose a Credit Card</a></li>
              <li><a href="/credit-card-application-process">Application Process Guide</a></li>
              <li><a href="/credit-score-improvement">How to Improve Credit Score</a></li>
              <li><a href="/credit-card-benefits-explained">Credit Card Benefits Explained</a></li>
              <li><a href="/credit-card-fees-guide">Understanding Credit Card Fees</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Financial Tips</h3>
            <ul>
              <li><a href="/credit-card-best-practices">Credit Card Best Practices</a></li>
              <li><a href="/avoid-credit-card-debt">How to Avoid Credit Card Debt</a></li>
              <li><a href="/maximize-credit-card-rewards">Maximize Your Rewards</a></li>
              <li><a href="/credit-card-security-tips">Security Tips</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Legal & Support Pages -->
      <div class="sitemap-section">
        <h2>⚖️ Legal & Support Pages</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>Legal Information</h3>
            <ul>
              <li><a href="/privacy-policy">Privacy Policy</a></li>
              <li><a href="/terms-conditions">Terms and Conditions</a></li>
              <li><a href="/disclaimer">Disclaimer</a></li>
              <li><a href="/affiliate-disclosure">Affiliate Disclosure</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Company Information</h3>
            <ul>
              <li><a href="/about-us">About Us</a></li>
              <li><a href="/contact-us">Contact Us</a></li>
              <li><a href="/careers">Careers</a></li>
              <li><a href="/press">Press & Media</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Support</h3>
            <ul>
              <li><a href="/faq">Frequently Asked Questions</a></li>
              <li><a href="/help-center">Help Center</a></li>
              <li><a href="/support-ticket">Submit Support Ticket</a></li>
              <li><a href="/feedback">Send Feedback</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Blog & News -->
      <div class="sitemap-section">
        <h2>📰 Blog & News</h2>
        <div class="links-grid">
          <div class="link-category">
            <h3>Blog Categories</h3>
            <ul>
              <li><a href="/blog">All Blog Posts</a></li>
              <li><a href="/blog/credit-card-news">Credit Card News</a></li>
              <li><a href="/blog/banking-updates">Banking Updates</a></li>
              <li><a href="/blog/financial-tips">Financial Tips</a></li>
              <li><a href="/blog/card-reviews">Card Reviews</a></li>
            </ul>
          </div>
          
          <div class="link-category">
            <h3>Recent Updates</h3>
            <ul>
              <li><a href="/blog/best-credit-cards-2025">Best Credit Cards 2025</a></li>
              <li><a href="/blog/new-card-launches">New Card Launches</a></li>
              <li><a href="/blog/rate-changes">Interest Rate Changes</a></li>
              <li><a href="/blog/reward-program-updates">Reward Program Updates</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Quick Access Links -->
      <div class="quick-access">
        <h2>🚀 Quick Access</h2>
        <div class="quick-links">
          <a href="/compare-cards" class="quick-link">Compare Cards</a>
          <a href="/rewards-calculator" class="quick-link">Calculate Rewards</a>
          <a href="/card-finder" class="quick-link">Find Your Card</a>
          <a href="/contact-us" class="quick-link">Contact Support</a>
        </div>
      </div>

    </div>
  </section>
</main>

<style>
/* Sitemap Page Styles */
.sitemap-page {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  line-height: 1.6;
  color: #333;
}

.page-header {
  background: linear-gradient(135deg, #059669 0%, #047857 100%);
  color: white;
  padding: 3rem 0;
  text-align: center;
}

.page-header h1 {
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
  font-weight: 700;
}

.header-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

.sitemap-content {
  padding: 4rem 0;
}

.sitemap-section {
  margin-bottom: 4rem;
  padding-bottom: 3rem;
  border-bottom: 1px solid #e5e7eb;
}

.sitemap-section:last-child {
  border-bottom: none;
}

.sitemap-section h2 {
  color: #059669;
  font-size: 2rem;
  margin-bottom: 2rem;
  font-weight: 600;
  text-align: center;
}

.links-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.link-category {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  border-left: 4px solid #059669;
}

.link-category h3 {
  color: #374151;
  font-size: 1.2rem;
  margin-bottom: 1rem;
  font-weight: 600;
}

.link-category ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.link-category li {
  margin-bottom: 0.5rem;
}

.link-category a {
  color: #4b5563;
  text-decoration: none;
  transition: color 0.3s ease;
  display: block;
  padding: 0.25rem 0;
}

.link-category a:hover {
  color: #059669;
  text-decoration: underline;
}

/* Quick Access Section */
.quick-access {
  background: #f0fdf4;
  padding: 3rem;
  border-radius: 12px;
  text-align: center;
  border: 2px solid #bbf7d0;
}

.quick-access h2 {
  color: #059669;
  font-size: 2rem;
  margin-bottom: 2rem;
  font-weight: 600;
}

.quick-links {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}

.quick-link {
  background: #059669;
  color: white;
  padding: 1rem 2rem;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s ease;
}

.quick-link:hover {
  background: #047857;
  text-decoration: none;
  color: white;
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
  color: #059669;
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

/* Mobile Styles */
@media (max-width: 768px) {
  .container {
    padding: 0 1rem;
  }
  
  .page-header h1 {
    font-size: 2rem;
  }
  
  .links-grid {
    grid-template-columns: 1fr;
  }
  
  .link-category {
    padding: 1.5rem;
  }
  
  .quick-links {
    flex-direction: column;
    align-items: center;
  }
  
  .quick-link {
    width: 100%;
    max-width: 300px;
    text-align: center;
  }
  
  .sitemap-section h2 {
    font-size: 1.5rem;
  }
}
</style>

<?php get_footer(); ?>
