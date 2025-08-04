<?php 
// SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>About Us | CardAdvisorHub</title>';
    echo '<meta name="description" content="Learn about CardAdvisorHub - India\'s trusted credit card comparison platform. Our mission to help you find the perfect credit card for your needs.">';
    echo '<meta name="robots" content="index, follow">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
  </div>
</nav>

<main class="about-page">
  <section class="page-header">
    <div class="container">
      <h1>About CardAdvisorHub</h1>
      <p class="header-subtitle">India's Most Trusted Credit Card Comparison Platform</p>
    </div>
  </section>

  <section class="about-content">
    <div class="container">
      
      <!-- Mission Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>Our Mission</h2>
          <p class="lead">At CardAdvisorHub, we believe that finding the right credit card shouldn't be complicated or confusing. Our mission is to simplify credit card comparison and help millions of Indians make informed financial decisions.</p>
          <p>We provide comprehensive, unbiased information about credit cards from India's leading banks and financial institutions, making it easier for you to find cards that match your lifestyle, spending habits, and financial goals.</p>
        </div>
      </div>

      <!-- What We Do Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>What We Do</h2>
          <div class="features-grid">
            <div class="feature-item">
              <div class="feature-icon">🔍</div>
              <h3>Comprehensive Comparison</h3>
              <p>We analyze and compare credit cards from 15+ major banks, covering features, benefits, fees, and rewards programs.</p>
            </div>
            <div class="feature-item">
              <div class="feature-icon">🎯</div>
              <h3>Personalized Recommendations</h3>
              <p>Our smart recommendation engine suggests cards based on your spending patterns, income, and preferences.</p>
            </div>
            <div class="feature-item">
              <div class="feature-icon">📊</div>
              <h3>Financial Tools</h3>
              <p>Access our calculators, eligibility checkers, and reward estimation tools to make data-driven decisions.</p>
            </div>
            <div class="feature-item">
              <div class="feature-icon">📚</div>
              <h3>Educational Content</h3>
              <p>Learn about credit cards, financial literacy, and best practices through our comprehensive guides and articles.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Our Values Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>Our Values</h2>
          <div class="values-grid">
            <div class="value-item">
              <h3>🔒 Transparency</h3>
              <p>We clearly disclose our affiliate relationships and compensation while maintaining editorial independence in our recommendations.</p>
            </div>
            <div class="value-item">
              <h3>📈 Accuracy</h3>
              <p>We constantly update our database to ensure you have access to the most current and accurate credit card information.</p>
            </div>
            <div class="value-item">
              <h3>🤝 Trust</h3>
              <p>We prioritize your interests and provide honest, unbiased advice to help you make the best financial decisions.</p>
            </div>
            <div class="value-item">
              <h3>💡 Innovation</h3>
              <p>We continuously improve our platform with new features and tools to enhance your credit card discovery experience.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Why Choose Us Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>Why Choose CardAdvisorHub?</h2>
          <div class="benefits-list">
            <div class="benefit-item">
              <span class="benefit-number">50+</span>
              <div class="benefit-content">
                <h3>Credit Cards Covered</h3>
                <p>Comprehensive coverage of cards from all major Indian banks including HDFC, SBI, ICICI, Axis Bank, and more.</p>
              </div>
            </div>
            <div class="benefit-item">
              <span class="benefit-number">15+</span>
              <div class="benefit-content">
                <h3>Partner Banks</h3>
                <p>Direct partnerships with leading financial institutions ensure you get authentic information and secure applications.</p>
              </div>
            </div>
            <div class="benefit-item">
              <span class="benefit-number">100K+</span>
              <div class="benefit-content">
                <h3>Happy Users</h3>
                <p>Thousands of Indians trust us monthly to help them find the perfect credit card for their needs.</p>
              </div>
            </div>
            <div class="benefit-item">
              <span class="benefit-number">24/7</span>
              <div class="benefit-content">
                <h3>Always Available</h3>
                <p>Our platform is available round the clock, so you can research and compare cards whenever it's convenient for you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- How We Make Money Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>How We Make Money</h2>
          <p>CardAdvisorHub operates on an affiliate marketing model. We receive compensation from credit card issuers when users apply for and are approved for credit cards through our platform. This may include:</p>
          <ul class="money-list">
            <li>Referral fees from successful credit card applications</li>
            <li>Commission payments from partner banks and financial institutions</li>
            <li>Advertising revenue from card issuers</li>
          </ul>
          <div class="transparency-note">
            <h3>📋 Our Commitment to You</h3>
            <p>While we receive compensation from issuers, this does not influence our editorial content or recommendations. We maintain strict editorial guidelines to ensure our reviews and comparisons remain honest, accurate, and helpful to our users.</p>
          </div>
        </div>
      </div>

      <!-- Contact Section -->
      <div class="about-section">
        <div class="section-content">
          <h2>Get in Touch</h2>
          <p>Have questions, suggestions, or feedback? We'd love to hear from you!</p>
          <div class="contact-grid">
            <div class="contact-item">
              <h3>📧 General Inquiries</h3>
              <p>Email: info@cardadvisorhub.com</p>
            </div>
            <div class="contact-item">
              <h3>🤝 Partnership Opportunities</h3>
              <p>Email: info@cardadvisorhub.com</p>
            </div>
            <div class="contact-item">
              <h3>📰 Press & Media</h3>
              <p>Email: info@cardadvisorhub.com</p>
            </div>
            <div class="contact-item">
              <h3>⚖️ Legal & Privacy</h3>
              <p>Email: info@cardadvisorhub.com</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>

<style>
/* About Page Styles */
.about-page {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  line-height: 1.6;
  color: #333;
}

.page-header {
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  color: white;
  padding: 4rem 0;
  text-align: center;
}

.page-header h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
  font-weight: 700;
}

.header-subtitle {
  font-size: 1.3rem;
  opacity: 0.9;
  margin: 0;
  font-weight: 400;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

.about-content {
  padding: 4rem 0;
}

.about-section {
  margin-bottom: 4rem;
  padding-bottom: 3rem;
  border-bottom: 1px solid #e5e7eb;
}

.about-section:last-child {
  border-bottom: none;
}

.section-content h2 {
  font-size: 2.5rem;
  color: #10b981;
  margin-bottom: 2rem;
  font-weight: 600;
  text-align: center;
}

.lead {
  font-size: 1.2rem;
  font-weight: 400;
  color: #4b5563;
  margin-bottom: 1.5rem;
  line-height: 1.7;
}

.section-content p {
  color: #4b5563;
  line-height: 1.7;
  margin-bottom: 1rem;
}

/* Features Grid */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-top: 2rem;
}

.feature-item {
  text-align: center;
  padding: 2rem;
  background: #f8f9fa;
  border-radius: 12px;
  transition: transform 0.3s ease;
}

.feature-item:hover {
  transform: translateY(-5px);
}

.feature-icon {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.feature-item h3 {
  color: #374151;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.feature-item p {
  color: #6b7280;
  font-size: 0.95rem;
}

/* Values Grid */
.values-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  margin-top: 2rem;
}

.value-item {
  padding: 2rem;
  background: white;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  border-left: 4px solid #10b981;
}

.value-item h3 {
  color: #374151;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.value-item p {
  color: #6b7280;
  font-size: 0.95rem;
  margin: 0;
}

/* Benefits List */
.benefits-list {
  margin-top: 2rem;
}

.benefit-item {
  display: flex;
  align-items: center;
  margin-bottom: 2rem;
  padding: 1.5rem;
  background: white;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.benefit-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: #10b981;
  margin-right: 2rem;
  min-width: 80px;
  text-align: center;
}

.benefit-content h3 {
  color: #374151;
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.benefit-content p {
  color: #6b7280;
  margin: 0;
  font-size: 0.95rem;
}

/* Money List */
.money-list {
  list-style: none;
  padding: 0;
  margin: 1.5rem 0;
}

.money-list li {
  padding: 0.75rem 0;
  color: #4b5563;
  position: relative;
  padding-left: 2rem;
}

.money-list li::before {
  content: "💰";
  position: absolute;
  left: 0;
  top: 0.75rem;
}

.transparency-note {
  background: #f0fdf4;
  padding: 2rem;
  border-radius: 12px;
  border-left: 4px solid #10b981;
  margin-top: 2rem;
}

.transparency-note h3 {
  color: #10b981;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.transparency-note p {
  color: #374151;
  margin: 0;
}

/* Contact Grid */
.contact-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}

.contact-item {
  padding: 1.5rem;
  background: #f8f9fa;
  border-radius: 8px;
  text-align: center;
}

.contact-item h3 {
  color: #10b981;
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
  font-weight: 600;
}

.contact-item p {
  color: #4b5563;
  margin: 0;
  font-size: 0.95rem;
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
  color: #10b981;
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
    font-size: 2.2rem;
  }
  
  .header-subtitle {
    font-size: 1.1rem;
  }
  
  .section-content h2 {
    font-size: 2rem;
  }
  
  .features-grid,
  .values-grid {
    grid-template-columns: 1fr;
  }
  
  .benefit-item {
    flex-direction: column;
    text-align: center;
  }
  
  .benefit-number {
    margin-right: 0;
    margin-bottom: 1rem;
  }
  
  .contact-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<?php get_footer(); ?>
