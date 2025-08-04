<?php 
// SEO Meta Tags for Homepage
add_action('wp_head', function() {
    echo '<title>Best Credit Cards India 2025 | CardAdvisorHub</title>';
    echo '<meta name="description" content="Compare and find the best credit cards in India 2025. Expert reviews of HDFC, SBI, ICICI, Axis Bank cards with cashback, rewards, and travel benefits. Apply instantly with our detailed comparison tools.">';
    echo '<meta name="keywords" content="best credit cards India, credit card comparison, HDFC credit cards, SBI credit cards, ICICI credit cards, Axis Bank cards, cashback cards, travel credit cards">';
    echo '<meta name="robots" content="index, follow">';
    
    // Aggressive performance optimization
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/style.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>';
    echo '<link rel="dns-prefetch" href="//www.google-analytics.com">';
    echo '<meta http-equiv="x-dns-prefetch-control" content="on">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="Best Credit Cards India 2025 | CardAdvisorHub">';
    echo '<meta property="og:description" content="India\'s trusted credit card comparison platform. Compare HDFC, SBI, ICICI, Axis Bank credit cards with expert reviews and instant online applications.">';
    echo '<meta property="og:type" content="website">';
    echo '<meta property="og:url" content="' . home_url() . '">';
    echo '<meta property="og:image" content="' . get_template_directory_uri() . '/images/cardadvisorhub-og.jpg">';
    
    // Structured Data for Homepage
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "CardAdvisorHub",
        "description": "Best Credit Cards India 2025 | CardAdvisorHub",
        "url": "' . home_url() . '",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "' . home_url() . '/compare-cards?search={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>';
}, 1);

get_header(); ?>

<!-- Custom Homepage Content -->
<div id="cardadvisor-homepage" class="cardadvisor-homepage">
  <!-- Hero Section -->
  <section class="cardadvisor-hero">
    <div class="cardadvisor-container">
      <div class="cardadvisor-hero-content">
        <h1>Find the Best Credit Cards in India 2025</h1>
        <p class="cardadvisor-hero-subtitle">Compare & apply instantly</p>
        
        <!-- Search Form -->
        <div class="cardadvisor-hero-search">
          <form class="cardadvisor-search-form" action="/compare-cards" method="get">
            <input type="text" name="search" placeholder="Find your perfect card" class="cardadvisor-search-input">
            <button type="submit" class="cardadvisor-search-btn">Search</button>
          </form>
        </div>
        
        <!-- Key Stats -->
        <div class="cardadvisor-hero-stats">
          <div class="cardadvisor-stat">
            <span class="cardadvisor-stat-number">50+</span>
            <span class="cardadvisor-stat-label">Credit Cards</span>
          </div>
          <div class="cardadvisor-stat">
            <span class="cardadvisor-stat-number">15+</span>
            <span class="cardadvisor-stat-label">Major Banks</span>
          </div>
        </div>
        
        <!-- Quick Navigation Links -->
        <div class="cardadvisor-hero-links">
          <a href="/compare-cards" class="cardadvisor-hero-link cardadvisor-hero-link-primary">
            <span class="cardadvisor-link-icon">📋</span>
            <span class="cardadvisor-link-text">View All Credit Cards</span>
          </a>
          <a href="/compare-cards" class="cardadvisor-hero-link">
            <span class="cardadvisor-link-icon">⚖️</span>
            <span class="cardadvisor-link-text">Compare Cards</span>
          </a>
          <a href="/cashback-cards" class="cardadvisor-hero-link">
            <span class="cardadvisor-link-icon">💰</span>
            <span class="cardadvisor-link-text">Cashback Cards</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Card Categories Section -->
  <section class="cardadvisor-categories">
    <div class="cardadvisor-container">
      <h2>Find Cards by Category</h2>
      <div class="cardadvisor-categories-grid">
        
        <a href="/cashback-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">💰</div>
          <div class="cardadvisor-category-info">
            <h3>Cashback Cards</h3>
            <p>Get money back</p>
          </div>
        </a>
        
        <a href="/travel-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">✈️</div>
          <div class="cardadvisor-category-info">
            <h3>Travel Cards</h3>
            <p>Miles & lounge</p>
          </div>
        </a>
        
        <a href="/business-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">💼</div>
          <div class="cardadvisor-category-info">
            <h3>Business Cards</h3>
            <p>For business</p>
          </div>
        </a>
        
        <a href="/fuel-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">⛽</div>
          <div class="cardadvisor-category-info">
            <h3>Fuel Cards</h3>
            <p>Save on fuel</p>
          </div>
        </a>
        
        <a href="/shopping-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">🛍️</div>
          <div class="cardadvisor-category-info">
            <h3>Shopping Cards</h3>
            <p>Online rewards</p>
          </div>
        </a>
        
        <a href="/premium-cards" class="cardadvisor-category-card">
          <div class="cardadvisor-category-icon">💎</div>
          <div class="cardadvisor-category-info">
            <h3>Premium Cards</h3>
            <p>Luxury benefits</p>
          </div>
        </a>
        
      </div>
    </div>
  </section>

  <!-- Featured Cards Section -->
  <section class="cardadvisor-featured">
    <div class="cardadvisor-container">
      <h2>🏆 Top Recommended Cards</h2>
      <div class="cardadvisor-featured-grid">
        
        <div class="cardadvisor-featured-card">
          <div class="cardadvisor-card-badge">Most Popular</div>
          <h3><a href="/hdfc-regalia">HDFC Regalia</a></h3>
          <p class="cardadvisor-card-desc">4X points on dining & travel</p>
          <div class="cardadvisor-card-fee">₹2,500 annual fee</div>
          <a href="/hdfc-regalia" class="cardadvisor-card-cta">Apply for HDFC Regalia</a>
        </div>
        
        <div class="cardadvisor-featured-card">
          <div class="cardadvisor-card-badge">Best Cashback</div>
          <h3><a href="/sbi-cashback">SBI Cashback</a></h3>
          <p class="cardadvisor-card-desc">5% cashback online shopping</p>
          <div class="cardadvisor-card-fee">₹999 annual fee</div>
          <a href="/sbi-cashback" class="cardadvisor-card-cta">Apply for SBI Cashback</a>
        </div>
        
        <div class="cardadvisor-featured-card">
          <div class="cardadvisor-card-badge">Premium</div>
          <h3><a href="/axis-magnus">Axis Magnus</a></h3>
          <p class="cardadvisor-card-desc">12X points on travel</p>
          <div class="cardadvisor-card-fee">₹12,500 annual fee</div>
          <a href="/axis-magnus" class="cardadvisor-card-cta">Apply for Axis Magnus</a>
        </div>
        
      </div>
      
      <div class="cardadvisor-section-cta">
        <a href="/compare-cards" class="cardadvisor-btn-large cardadvisor-btn-primary">Browse All Cards</a>
        <a href="/compare-cards" class="cardadvisor-btn-large cardadvisor-btn-secondary">Compare Cards</a>
      </div>
    </div>
  </section>

  <!-- Credit Card Guide Section -->
  <section class="cardadvisor-guide">
    <div class="cardadvisor-container">
      <h2>Complete Credit Card Guide India 2025</h2>
      <div class="cardadvisor-guide-content">
        <p>Choosing the right credit card in India can significantly impact your financial journey. Our comprehensive platform helps you compare credit cards from leading banks including HDFC Bank, SBI, ICICI Bank, Axis Bank, Kotak Mahindra, and Yes Bank. Whether you're looking for cashback rewards, travel benefits, fuel savings, or premium lifestyle perks, we provide detailed reviews and comparisons.</p>
        
        <p>Our expert analysis covers annual fees, reward rates, welcome bonuses, eligibility criteria, and special features for each card. From entry-level cards for beginners to premium cards for high-income earners, find the perfect match for your spending habits and financial goals. Compare interest rates, processing fees, and exclusive offers to make an informed decision.</p>
        
        <div class="cardadvisor-guide-highlights">
          <div class="cardadvisor-highlight">
            <h3>💳 500+ Cards Compared</h3>
            <p>Comprehensive database of all major credit cards in India</p>
          </div>
          <div class="cardadvisor-highlight">
            <h3>🎯 Personalized Recommendations</h3>
            <p>AI-powered suggestions based on your spending patterns</p>
          </div>
          <div class="cardadvisor-highlight">
            <h3>⚡ Instant Applications</h3>
            <p>Apply directly through bank portals with real-time tracking</p>
          </div>
        </div>
        
        <p>Start your credit card journey today with CardAdvisorHub - India's most trusted credit card comparison platform. Get expert insights, read authentic user reviews, and apply for the best credit cards online with confidence. Our detailed eligibility checker and reward calculator tools ensure you choose the card that maximizes your benefits.</p>
      </div>
    </div>
  </section>
</div>

<!-- Isolated Homepage Styles -->
<style>
/* Reset and isolate homepage styles */
#cardadvisor-homepage {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
  line-height: 1.6 !important;
  margin: 0 !important;
  padding: 0 !important;
  background: #fff !important;
  min-height: 100vh !important;
  box-sizing: border-box !important;
}

#cardadvisor-homepage *,
#cardadvisor-homepage *::before,
#cardadvisor-homepage *::after {
  box-sizing: border-box !important;
}

.cardadvisor-container {
  max-width: 1200px !important;
  margin: 0 auto !important;
  padding: 0 1rem !important;
}

/* Hero Section */
.cardadvisor-hero {
  background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%) !important;
  color: #fff !important;
  padding: 4rem 1rem !important;
  text-align: center !important;
  margin: 0 !important;
}

.cardadvisor-hero-content {
  max-width: 600px !important;
  margin: 0 auto !important;
}

.cardadvisor-hero h1 {
  font-size: 3rem !important;
  margin: 0 0 1rem 0 !important;
  font-weight: 700 !important;
  line-height: 1.2 !important;
  color: #fff !important;
  text-align: center !important;
}

.cardadvisor-hero-subtitle {
  font-size: 1.3rem !important;
  margin: 0 0 2rem 0 !important;
  opacity: 0.9 !important;
  color: #fff !important;
}

.cardadvisor-hero-search {
  margin: 0 0 3rem 0 !important;
}

.cardadvisor-search-form {
  display: flex !important;
  gap: 0.5rem !important;
  max-width: 400px !important;
  margin: 0 auto !important;
  flex-wrap: nowrap !important;
}

.cardadvisor-search-input {
  flex: 1 !important;
  padding: 1rem !important;
  border: 0 !important;
  border-radius: 8px !important;
  font-size: 1rem !important;
  background: #fff !important;
  color: #333 !important;
  outline: none !important;
  box-shadow: none !important;
}

.cardadvisor-search-input:focus {
  outline: none !important;
  box-shadow: 0 0 0 3px rgba(255,255,255,0.3) !important;
}

.cardadvisor-search-btn {
  padding: 1rem 1.5rem !important;
  background: #ef4444 !important;
  color: #fff !important;
  border: 0 !important;
  border-radius: 8px !important;
  font-weight: 600 !important;
  cursor: pointer !important;
  font-size: 1rem !important;
  transition: background 0.3s ease !important;
  text-decoration: none !important;
}

.cardadvisor-search-btn:hover {
  background: #dc2626 !important;
  color: #fff !important;
}

.cardadvisor-hero-stats {
  display: flex !important;
  gap: 3rem !important;
  justify-content: center !important;
  margin: 0 !important;
}

.cardadvisor-stat {
  text-align: center !important;
  color: #fff !important;
}

.cardadvisor-stat-number {
  display: block !important;
  font-size: 2.5rem !important;
  font-weight: 700 !important;
  color: #fbbf24 !important;
  margin-bottom: 0.5rem !important;
  line-height: 1 !important;
}

.cardadvisor-stat-label {
  font-size: 1rem !important;
  opacity: 0.8 !important;
  color: #fff !important;
}

/* Hero Links */
.cardadvisor-hero-links {
  display: flex !important;
  gap: 1rem !important;
  justify-content: center !important;
  margin: 2rem 0 0 0 !important;
  flex-wrap: wrap !important;
}

.cardadvisor-hero-link {
  display: flex !important;
  align-items: center !important;
  gap: 0.5rem !important;
  padding: 0.75rem 1.5rem !important;
  background: rgba(255, 255, 255, 0.1) !important;
  color: #fff !important;
  text-decoration: none !important;
  border-radius: 8px !important;
  border: 1px solid rgba(255, 255, 255, 0.2) !important;
  transition: all 0.3s ease !important;
  font-weight: 500 !important;
  font-size: 0.95rem !important;
}

.cardadvisor-hero-link:hover {
  background: rgba(255, 255, 255, 0.2) !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2) !important;
  color: #fff !important;
  text-decoration: none !important;
}

.cardadvisor-hero-link-primary {
  background: #fbbf24 !important;
  color: #1f2937 !important;
  border-color: #fbbf24 !important;
  font-weight: 600 !important;
}

.cardadvisor-hero-link-primary:hover {
  background: #f59e0b !important;
  color: #1f2937 !important;
  text-decoration: none !important;
}

.cardadvisor-link-icon {
  font-size: 1.1rem !important;
}

.cardadvisor-link-text {
  white-space: nowrap !important;
}

/* Categories Section */
.cardadvisor-categories {
  padding: 4rem 0 !important;
  background: #f8f9fa !important;
  margin: 0 !important;
}

.cardadvisor-categories h2 {
  text-align: center !important;
  margin: 0 0 3rem 0 !important;
  font-size: 2.5rem !important;
  color: #333 !important;
  font-weight: 700 !important;
}

.cardadvisor-categories-grid {
  display: grid !important;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)) !important;
  gap: 1.5rem !important;
  margin: 0 !important;
}

.cardadvisor-category-card {
  background: #fff !important;
  padding: 2rem !important;
  border-radius: 12px !important;
  text-decoration: none !important;
  color: #333 !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
  display: flex !important;
  align-items: center !important;
  gap: 1rem !important;
  transition: all 0.3s ease !important;
  border: none !important;
  margin: 0 !important;
}

.cardadvisor-category-card:hover {
  transform: translateY(-3px) !important;
  box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
  text-decoration: none !important;
  color: #333 !important;
}

.cardadvisor-category-icon {
  font-size: 2.5rem !important;
  width: 60px !important;
  height: 60px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  background: #f1f5f9 !important;
  border-radius: 12px !important;
  flex-shrink: 0 !important;
  margin: 0 !important;
}

.cardadvisor-category-info h3 {
  margin: 0 0 0.5rem 0 !important;
  font-size: 1.2rem !important;
  font-weight: 600 !important;
  color: #333 !important;
}

.cardadvisor-category-info p {
  margin: 0 !important;
  color: #666 !important;
  font-size: 0.9rem !important;
}

/* Featured Section */
.cardadvisor-featured {
  padding: 4rem 0 !important;
  background: #fff !important;
  margin: 0 !important;
}

.cardadvisor-featured h2 {
  text-align: center !important;
  margin: 0 0 3rem 0 !important;
  font-size: 2.5rem !important;
  color: #333 !important;
  font-weight: 700 !important;
}

.cardadvisor-featured-grid {
  display: grid !important;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)) !important;
  gap: 2rem !important;
  margin: 0 0 3rem 0 !important;
}

.cardadvisor-featured-card {
  background: #fff !important;
  border-radius: 12px !important;
  padding: 2rem !important;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1) !important;
  border: 1px solid #e5e7eb !important;
  position: relative !important;
  transition: all 0.3s ease !important;
  margin: 0 !important;
}

.cardadvisor-featured-card:hover {
  transform: translateY(-5px) !important;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

.cardadvisor-card-badge {
  position: absolute !important;
  top: -10px !important;
  right: 1rem !important;
  background: #007cba !important;
  color: #fff !important;
  padding: 0.5rem 1rem !important;
  border-radius: 20px !important;
  font-size: 0.8rem !important;
  font-weight: 600 !important;
}

.cardadvisor-featured-card h3 {
  margin: 1rem 0 1rem 0 !important;
  font-size: 1.3rem !important;
  color: #333 !important;
}

.cardadvisor-featured-card h3 a {
  color: #333 !important;
  text-decoration: none !important;
}

.cardadvisor-card-desc {
  color: #666 !important;
  margin: 0 0 1rem 0 !important;
  font-size: 0.95rem !important;
}

.cardadvisor-card-fee {
  color: #007cba !important;
  font-weight: 600 !important;
  margin: 0 0 1.5rem 0 !important;
}

.cardadvisor-card-cta {
  display: inline-block !important;
  background: #007cba !important;
  color: #fff !important;
  padding: 0.75rem 1.5rem !important;
  border-radius: 6px !important;
  text-decoration: none !important;
  font-weight: 600 !important;
  transition: background 0.3s ease !important;
  border: none !important;
}

.cardadvisor-card-cta:hover {
  background: #005a8a !important;
  text-decoration: none !important;
  color: #fff !important;
}

.cardadvisor-section-cta {
  text-align: center !important;
  margin: 0 !important;
  display: flex !important;
  gap: 1rem !important;
  justify-content: center !important;
  flex-wrap: wrap !important;
}

.cardadvisor-btn-large {
  display: inline-block !important;
  background: #4f46e5 !important;
  color: #fff !important;
  padding: 1rem 2rem !important;
  border-radius: 8px !important;
  text-decoration: none !important;
  font-weight: 600 !important;
  font-size: 1.1rem !important;
  transition: all 0.3s ease !important;
  border: none !important;
  min-width: 180px !important;
}

.cardadvisor-btn-large:hover {
  background: #3730a3 !important;
  text-decoration: none !important;
  color: #fff !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3) !important;
}

.cardadvisor-btn-primary {
  background: #059669 !important;
  color: #fff !important;
}

.cardadvisor-btn-primary:hover {
  background: #047857 !important;
  color: #fff !important;
  box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3) !important;
}

.cardadvisor-btn-secondary {
  background: #6b7280 !important;
  color: #fff !important;
}

.cardadvisor-btn-secondary:hover {
  background: #4b5563 !important;
  color: #fff !important;
  box-shadow: 0 4px 12px rgba(107, 114, 128, 0.3) !important;
}

/* Guide Section Styles */
.cardadvisor-guide {
  padding: 4rem 0 !important;
  background: #f8f9fa !important;
}

.cardadvisor-guide h2 {
  font-size: 2.5rem !important;
  color: #1a1a1a !important;
  text-align: center !important;
  margin-bottom: 2rem !important;
  font-weight: 700 !important;
}

.cardadvisor-guide-content {
  max-width: 800px !important;
  margin: 0 auto !important;
  text-align: center !important;
}

.cardadvisor-guide-content p {
  font-size: 1.1rem !important;
  line-height: 1.7 !important;
  color: #555 !important;
  margin-bottom: 1.5rem !important;
}

.cardadvisor-guide-highlights {
  display: grid !important;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
  gap: 2rem !important;
  margin: 3rem 0 !important;
}

.cardadvisor-highlight {
  background: white !important;
  padding: 2rem !important;
  border-radius: 12px !important;
  box-shadow: 0 4px 20px rgba(0,0,0,0.1) !important;
  transition: transform 0.3s ease !important;
}

.cardadvisor-highlight:hover {
  transform: translateY(-5px) !important;
}

.cardadvisor-highlight h3 {
  font-size: 1.2rem !important;
  color: #1a1a1a !important;
  margin-bottom: 0.8rem !important;
  font-weight: 600 !important;
}

.cardadvisor-highlight p {
  font-size: 0.95rem !important;
  color: #666 !important;
  margin: 0 !important;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .cardadvisor-hero {
    padding: 3rem 1rem !important;
  }
  
  .cardadvisor-hero h1 {
    font-size: 2rem !important;
  }
  
  .cardadvisor-hero-stats {
    gap: 2rem !important;
    flex-wrap: wrap !important;
  }
  
  .cardadvisor-hero-links {
    flex-direction: column !important;
    align-items: center !important;
  }
  
  .cardadvisor-hero-link {
    width: 200px !important;
    justify-content: center !important;
  }
  
  .cardadvisor-section-cta {
    flex-direction: column !important;
    align-items: center !important;
  }
  
  .cardadvisor-btn-large {
    width: 200px !important;
  }
  
  .cardadvisor-stat-number {
    font-size: 2rem !important;
  }
  
  .cardadvisor-categories-grid {
    grid-template-columns: 1fr !important;
  }
  
  .cardadvisor-featured-grid {
    grid-template-columns: 1fr !important;
  }
  
  .cardadvisor-search-form {
    flex-direction: column !important;
    gap: 1rem !important;
  }
  
  .cardadvisor-search-input,
  .cardadvisor-search-btn {
    width: 100% !important;
  }
  
  .cardadvisor-categories h2,
  .cardadvisor-featured h2 {
    font-size: 2rem !important;
  }
}
</style>

<!-- Load non-critical CSS with high priority -->
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/css/homepage-extended.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

<!-- Performance optimization script -->
<script>
// Preload important navigation
document.addEventListener('DOMContentLoaded', function() {
  // Preload critical pages
  setTimeout(() => {
    const links = ['/compare-cards', '/cashback-cards', '/hdfc-regalia'];
    links.forEach(href => {
      const link = document.createElement('link');
      link.rel = 'prefetch';
      link.href = href;
      document.head.appendChild(link);
    });
  }, 1000);
  
  // Enhanced search functionality
  const searchInput = document.querySelector('.search-input');
  if (searchInput) {
    searchInput.addEventListener('focus', function() {
      this.placeholder = 'Try: HDFC Regalia, Cashback cards...';
    });
  }
});
</script>

<?php get_footer(); ?>