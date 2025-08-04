<?php
/* Template Name: Interactive Credit Card Comparison Tool */
get_header(); 
?>

<main class="card-comparison-tool">
  <!-- Hero Section -->
  <section class="tool-hero">
    <div class="container">
      <h1>🔍 Credit Card Comparison Tool</h1>
      <p>Compare credit cards side-by-side and find the perfect card for your spending habits</p>
    </div>
  </section>

  <!-- Smart Filters -->
  <section class="smart-filters">
    <div class="container">
      <div class="filter-card">
        <h2>🎯 Tell us about yourself</h2>
        <div class="filter-row">
          <div class="filter-group">
            <label for="monthly-spend">Monthly Spending</label>
            <select id="monthly-spend" class="smart-filter">
              <option value="">Select spending range</option>
              <option value="15000">₹15,000 - ₹25,000</option>
              <option value="35000">₹25,000 - ₹50,000</option>
              <option value="75000">₹50,000 - ₹1,00,000</option>
              <option value="200000">₹1,00,000+</option>
            </select>
          </div>
          
          <div class="filter-group">
            <label for="primary-category">Primary Spending Category</label>
            <select id="primary-category" class="smart-filter">
              <option value="">Select primary category</option>
              <option value="online">Online Shopping (Amazon, Flipkart)</option>
              <option value="dining">Dining & Entertainment</option>
              <option value="travel">Travel & Booking</option>
              <option value="fuel">Fuel & Utility Bills</option>
              <option value="groceries">Groceries & Daily Needs</option>
              <option value="general">General Spending</option>
            </select>
          </div>
          
          <div class="filter-group">
            <label for="card-preference">Card Preference</label>
            <select id="card-preference" class="smart-filter">
              <option value="">Any preference</option>
              <option value="free">Lifetime Free Cards</option>
              <option value="cashback">Simple Cashback</option>
              <option value="rewards">Maximum Rewards</option>
              <option value="premium">Premium Benefits</option>
              <option value="travel">Travel Focused</option>
            </select>
          </div>
        </div>
        
        <div class="filter-actions">
          <button id="get-recommendations" class="btn btn-primary">🎯 Get My Recommendations</button>
          <button id="compare-all" class="btn btn-secondary">📊 Compare All Cards</button>
          <button id="reset-filters" class="btn btn-outline">🔄 Reset</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Card Selection Area -->
  <section class="card-selection">
    <div class="container">
      <div class="selection-header">
        <h2>Select cards to compare (max 4)</h2>
        <div class="selection-counter">
          <span id="selected-count">0</span> / 4 cards selected
        </div>
      </div>
      
      <!-- Quick Pick Categories -->
      <div class="quick-picks">
        <h3>🚀 Quick Pick Categories</h3>
        <div class="category-buttons">
          <button class="category-btn" data-category="best-overall">🏆 Best Overall</button>
          <button class="category-btn" data-category="lifetime-free">💝 Lifetime Free</button>
          <button class="category-btn" data-category="cashback">💰 High Cashback</button>
          <button class="category-btn" data-category="travel">✈️ Travel Cards</button>
          <button class="category-btn" data-category="premium">👑 Premium Cards</button>
        </div>
      </div>

      <!-- Card Grid -->
      <div class="cards-grid" id="cards-grid">
        <!-- Cards will be populated by JavaScript -->
      </div>
    </div>
  </section>

  <!-- Comparison Table -->
  <section class="comparison-results" id="comparison-results" style="display: none;">
    <div class="container">
      <h2>📊 Your Card Comparison</h2>
      <div class="comparison-controls">
        <button id="download-comparison" class="btn btn-secondary">💾 Download Report</button>
        <button id="share-comparison" class="btn btn-outline">📱 Share Comparison</button>
      </div>
      
      <div class="comparison-table-wrapper">
        <table class="comparison-table" id="comparison-table">
          <!-- Table will be populated by JavaScript -->
        </table>
      </div>
      
      <!-- Quick Actions -->
      <div class="comparison-actions">
        <h3>Quick Actions</h3>
        <div class="action-buttons">
          <button class="action-btn" onclick="applyBestCard()">🎯 Apply to Best Match</button>
          <button class="action-btn" onclick="calculateRewards()">💰 Calculate My Rewards</button>
          <button class="action-btn" onclick="getDetailedAnalysis()">📋 Get Detailed Analysis</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Recommendation Engine Results -->
  <section class="recommendations" id="recommendations" style="display: none;">
    <div class="container">
      <h2>🎯 Personalized Recommendations</h2>
      <div class="recommendation-cards" id="recommendation-cards">
        <!-- Recommendations will be populated by JavaScript -->
      </div>
    </div>
  </section>

  <!-- Floating Comparison Bar -->
  <div class="floating-comparison-bar" id="floating-bar" style="display: none;">
    <div class="bar-content">
      <span class="selected-info">
        <span id="floating-count">0</span> cards selected
      </span>
      <button id="floating-compare" class="btn btn-primary">Compare Now</button>
      <button id="floating-clear" class="btn btn-outline">Clear All</button>
    </div>
  </div>
</main>

<style>
/* Smart Filters Styling */
.smart-filters {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 3rem 0;
  margin-bottom: 2rem;
}

.filter-card {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  padding: 2rem;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.filter-card h2 {
  margin-bottom: 1.5rem;
  text-align: center;
}

.filter-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin-bottom: 2rem;
}

.filter-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 600;
}

.smart-filter {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.9);
  color: #333;
  font-size: 14px;
  transition: border-color 0.3s ease;
}

.smart-filter:focus {
  outline: none;
  border-color: #4CAF50;
  box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.3);
}

.filter-actions {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
}

/* Quick Pick Categories */
.quick-picks {
  margin-bottom: 2rem;
}

.category-buttons {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
  justify-content: center;
}

.category-btn {
  padding: 12px 24px;
  border: 2px solid #e0e0e0;
  border-radius: 25px;
  background: white;
  cursor: pointer;
  transition: all 0.3s ease;
  font-weight: 600;
}

.category-btn:hover {
  background: #f0f8ff;
  border-color: #2196F3;
  transform: translateY(-2px);
}

.category-btn.active {
  background: #2196F3;
  color: white;
  border-color: #2196F3;
}

/* Card Grid */
.cards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}

.card-item {
  background: white;
  border-radius: 12px;
  padding: 1.5rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  position: relative;
  border: 2px solid transparent;
}

.card-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.card-item.selected {
  border-color: #4CAF50;
  background: #f8fff8;
}

.card-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 1rem;
}

.card-name {
  font-size: 1.2rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 0.25rem;
}

.card-bank {
  font-size: 0.9rem;
  color: #666;
}

.card-badge {
  background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
  color: white;
  padding: 4px 8px;
  border-radius: 12px;
  font-size: 0.75rem;
  font-weight: bold;
}

.card-highlights {
  margin: 1rem 0;
}

.highlight-item {
  display: flex;
  align-items: center;
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
}

.highlight-item .icon {
  margin-right: 0.5rem;
  font-size: 1rem;
}

.card-actions {
  display: flex;
  gap: 0.5rem;
  margin-top: 1rem;
}

.select-card-btn {
  flex: 1;
  padding: 10px;
  border: 2px solid #4CAF50;
  background: white;
  color: #4CAF50;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  transition: all 0.3s ease;
}

.select-card-btn:hover {
  background: #4CAF50;
  color: white;
}

.select-card-btn.selected {
  background: #4CAF50;
  color: white;
}

.view-details-btn {
  padding: 10px 16px;
  border: 1px solid #ddd;
  background: white;
  color: #666;
  border-radius: 6px;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.3s ease;
}

.view-details-btn:hover {
  background: #f5f5f5;
  color: #333;
}

/* Comparison Table */
.comparison-table-wrapper {
  overflow-x: auto;
  margin: 2rem 0;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.comparison-table {
  width: 100%;
  background: white;
  border-collapse: collapse;
  min-width: 800px;
}

.comparison-table th,
.comparison-table td {
  padding: 1rem;
  text-align: left;
  border-bottom: 1px solid #e0e0e0;
}

.comparison-table th {
  background: #f8f9fa;
  font-weight: 600;
  color: #333;
  position: sticky;
  top: 0;
  z-index: 1;
}

.comparison-table tr:hover {
  background: #f8f9fa;
}

/* Modern Comparison Grid */
.modern-comparison-grid {
  background: white;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.comparison-cards-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 0;
}

.comparison-card-column {
  border-right: 1px solid #e0e0e0;
  position: relative;
  min-height: 800px;
}

.comparison-card-column:last-child {
  border-right: none;
}

.comparison-card-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 2rem;
  text-align: center;
  position: relative;
}

.comparison-card-image {
  width: 200px;
  height: auto;
  border-radius: 12px;
  margin-bottom: 1rem;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.comparison-card-header h3 {
  margin: 1rem 0 0.5rem 0;
  font-size: 1.3rem;
  font-weight: 700;
}

.bank-name {
  opacity: 0.9;
  margin-bottom: 1rem;
}

.rating-badge {
  background: rgba(255, 255, 255, 0.2);
  padding: 0.5rem 1rem;
  border-radius: 20px;
  display: inline-block;
  font-weight: 600;
}

.comparison-details {
  padding: 2rem;
  flex: 1;
}

.detail-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 1rem;
  padding-bottom: 1rem;
  border-bottom: 1px solid #f0f0f0;
}

.detail-row.full-width {
  flex-direction: column;
  align-items: stretch;
}

.detail-label {
  font-weight: 600;
  color: #555;
  min-width: 120px;
  margin-bottom: 0.5rem;
}

.detail-value {
  font-weight: 500;
  color: #333;
  text-align: right;
}

.detail-value.highlight-green {
  color: #4CAF50;
  font-weight: 700;
}

.detail-value.highlight-blue {
  color: #2196F3;
  font-weight: 700;
}

.benefits-list {
  margin-top: 0.5rem;
}

.benefit-item {
  color: #4CAF50;
  margin-bottom: 0.5rem;
  font-size: 0.9rem;
}

.tags {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
  margin-top: 0.5rem;
}

.tag {
  background: #e3f2fd;
  color: #1976d2;
  padding: 0.25rem 0.75rem;
  border-radius: 15px;
  font-size: 0.8rem;
  font-weight: 500;
}

.pros-cons {
  margin-top: 0.5rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

.pros, .cons {
  font-size: 0.9rem;
}

.pro-item {
  color: #4CAF50;
  margin-bottom: 0.25rem;
}

.con-item {
  color: #f44336;
  margin-bottom: 0.25rem;
}

.comparison-actions {
  padding: 1.5rem 2rem;
  background: #f8f9fa;
  border-top: 1px solid #e0e0e0;
  display: flex;
  gap: 1rem;
}

.apply-btn, .details-btn {
  flex: 1;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.apply-btn {
  background: #4CAF50;
  color: white;
}

.apply-btn:hover {
  background: #45a049;
  transform: translateY(-2px);
}

.details-btn {
  background: white;
  color: #333;
  border: 2px solid #ddd;
}

.details-btn:hover {
  background: #f5f5f5;
  border-color: #bbb;
}

/* Floating Bar */
.floating-comparison-bar {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background: #333;
  color: white;
  padding: 1rem 2rem;
  border-radius: 50px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  z-index: 1000;
  transition: all 0.3s ease;
}

.bar-content {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.floating-comparison-bar .btn {
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 0.9rem;
}

/* Recommendation Cards */
.recommendation-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}

.recommendation-item {
  background: white;
  border-radius: 12px;
  padding: 1.5rem;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-left: 4px solid #4CAF50;
}

.recommendation-score {
  display: flex;
  align-items: center;
  margin-bottom: 1rem;
}

.score-circle {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: linear-gradient(45deg, #4CAF50, #8BC34A);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
  font-size: 1.2rem;
  margin-right: 1rem;
}

.recommendation-details h4 {
  margin: 0 0 0.5rem 0;
  color: #333;
}

.recommendation-reason {
  color: #666;
  font-size: 0.9rem;
  margin-bottom: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
  .filter-row {
    grid-template-columns: 1fr;
  }
  
  .cards-grid {
    grid-template-columns: 1fr;
  }
  
  .floating-comparison-bar {
    left: 10px;
    right: 10px;
    transform: none;
    border-radius: 12px;
  }
  
  .bar-content {
    flex-direction: column;
    gap: 0.5rem;
  }
  
  /* Mobile comparison grid */
  .comparison-cards-row {
    grid-template-columns: 1fr;
  }
  
  .comparison-card-column {
    border-right: none;
    border-bottom: 1px solid #e0e0e0;
    min-height: auto;
  }
  
  .comparison-card-column:last-child {
    border-bottom: none;
  }
  
  .comparison-card-image {
    width: 150px;
  }
  
  .comparison-card-header {
    padding: 1.5rem;
  }
  
  .comparison-details {
    padding: 1.5rem;
  }
  
  .pros-cons {
    grid-template-columns: 1fr;
  }
  
  .comparison-actions {
    flex-direction: column;
    padding: 1rem;
  }
}

/* Animation Classes */
.fade-in {
  animation: fadeIn 0.5s ease-in;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.bounce-in {
  animation: bounceIn 0.6s ease-out;
}

@keyframes bounceIn {
  0% { transform: scale(0.3); opacity: 0; }
  50% { transform: scale(1.05); }
  70% { transform: scale(0.9); }
  100% { transform: scale(1); opacity: 1; }
}
</style>

<script>
// Initialize theme URI for image paths
window.themeUri = '<?php echo get_template_directory_uri(); ?>';

// Credit Card Database - Comprehensive List with Actual Downloaded Images
const creditCards = [
  {
    id: 'hdfc-regalia',
    name: 'HDFC Bank Regalia',
    bank: 'HDFC Bank',
    type: 'travel',
    category: 'best-overall',
    annualFee: 2500,
    isFree: false,
    isPremium: true,
    minIncome: 60000,
    rating: 4.2,
    image: 'HDFC-Regalia-Gold.jpg',
    highlights: [
      '4X points on dining & travel',
      '6 airport lounge visits/year',
      '₹2,500 welcome vouchers',
      'Travel insurance coverage'
    ],
    bestFor: ['dining', 'travel'],
    cashbackRate: 0,
    rewardRate: 4,
    benefits: {
      lounge: '6 domestic + 3 international',
      insurance: 'Travel insurance included',
      fuelSurcharge: 'Waived on transactions ₹400+',
      welcomeBonus: '₹2,500 vouchers'
    },
    pros: ['Excellent travel benefits', 'Good reward rate', 'Wide acceptance'],
    cons: ['Annual fee required', 'Limited fuel benefits'],
    recommendationScore: 85
  },
  {
    id: 'icici-amazon-pay',
    name: 'ICICI Amazon Pay',
    bank: 'ICICI Bank',
    type: 'cashback',
    category: 'lifetime-free',
    annualFee: 0,
    isFree: true,
    isPremium: false,
    minIncome: 20000,
    rating: 4.3,
    image: 'ICICI-Amazon-Pay.jpg',
    highlights: [
      '5% cashback on Amazon',
      '2% on bill payments',
      'Lifetime free',
      'Easy approval process'
    ],
    bestFor: ['online'],
    cashbackRate: 5,
    rewardRate: 0,
    benefits: {
      amazon: '5% cashback on Amazon purchases',
      billPay: '2% on Amazon Pay bill payments',
      fuel: 'No fuel surcharge waiver',
      welcomeBonus: '₹500 Amazon voucher'
    },
    pros: ['Lifetime free', 'High Amazon cashback', 'Easy approval'],
    cons: ['Limited to Amazon ecosystem', 'No fuel benefits'],
    recommendationScore: 90
  },
  {
    id: 'kotak-811',
    name: 'Kotak 811 #Dream Different',
    bank: 'Kotak Mahindra Bank',
    type: 'fuel',
    category: 'lifetime-free',
    annualFee: 0,
    isFree: true,
    isPremium: false,
    minIncome: 15000,
    rating: 3.5,
    image: 'HDFC-Regalia-Gold.jpg',
    highlights: [
      '4% cashback on fuel',
      '2% on utility bills',
      'Lifetime free',
      'Digital application'
    ],
    bestFor: ['fuel', 'general'],
    cashbackRate: 4,
    rewardRate: 0,
    benefits: {
      fuel: '4% cashback on fuel stations',
      utility: '2% on utility bill payments',
      surcharge: 'Fuel surcharge waiver',
      welcomeBonus: '₹300 welcome bonus'
    },
    pros: ['Lifetime free', 'Good fuel benefits', 'Easy approval'],
    cons: ['Limited overall benefits', 'Lower reward rates'],
    recommendationScore: 75
  },
  {
    id: 'sbi-cashback',
    name: 'SBI Cashback',
    bank: 'State Bank of India',
    type: 'cashback',
    category: 'cashback',
    annualFee: 999,
    isFree: false,
    isPremium: false,
    minIncome: 25000,
    rating: 3.9,
    image: 'SBI-Cashback.jpg',
    highlights: [
      '5% cashback online',
      '1% on offline spends',
      'Simple reward structure',
      'Wide merchant acceptance'
    ],
    bestFor: ['online', 'general'],
    cashbackRate: 5,
    rewardRate: 0,
    benefits: {
      online: '5% cashback on online spends',
      offline: '1% on offline transactions',
      cap: '₹5,000 monthly cashback limit',
      welcomeBonus: '₹500 cashback'
    },
    pros: ['High online cashback', 'Simple structure', 'No category restrictions'],
    cons: ['Annual fee', 'Monthly cashback limit'],
    recommendationScore: 82
  },
  {
    id: 'axis-magnus',
    name: 'Axis Bank Magnus',
    bank: 'Axis Bank',
    type: 'travel',
    category: 'premium',
    annualFee: 12500,
    isFree: false,
    isPremium: true,
    minIncome: 150000,
    rating: 4.6,
    image: 'Axis-Magnus.jpg',
    highlights: [
      '12X points on travel',
      'Unlimited lounge access',
      'Golf privileges',
      'Concierge services'
    ],
    bestFor: ['travel', 'dining'],
    cashbackRate: 0,
    rewardRate: 12,
    benefits: {
      lounge: 'Unlimited domestic + international',
      travel: '12X points on travel bookings',
      dining: '6X points on dining',
      golf: 'Complimentary golf sessions'
    },
    pros: ['Ultra-premium benefits', 'Highest reward rates', 'Excellent travel perks'],
    cons: ['Very high annual fee', 'High income requirement'],
    recommendationScore: 88
  },
  {
    id: 'hdfc-infinia',
    name: 'HDFC Infinia',
    bank: 'HDFC Bank',
    type: 'travel',
    category: 'premium',
    annualFee: 12500,
    isFree: false,
    isPremium: true,
    minIncome: 200000,
    rating: 4.8,
    image: 'HDFC-Infinia.jpg',
    highlights: [
      '5X points on travel & shopping',
      'Unlimited airport lounge access',
      'Golf program & concierge',
      'Smart EMI facility'
    ],
    bestFor: ['travel', 'shopping'],
    cashbackRate: 0,
    rewardRate: 5,
    benefits: {
      lounge: 'Unlimited domestic + international',
      travel: '5X points on travel bookings',
      shopping: '5X points on premium shopping',
      golf: 'Complimentary golf rounds'
    },
    pros: ['Ultra-premium benefits', 'Excellent reward rates', 'Luxury privileges'],
    cons: ['Very high annual fee', 'High income requirement'],
    recommendationScore: 92
  },
  {
    id: 'flipkart-axis',
    name: 'Flipkart Axis Bank',
    bank: 'Axis Bank',
    type: 'cashback',
    category: 'cashback',
    annualFee: 500,
    isFree: false,
    isPremium: false,
    minIncome: 25000,
    rating: 4.1,
    image: 'Axis-Atlas.jpg',
    highlights: [
      '5% cashback on Flipkart',
      '4% on partner merchants',
      'Flipkart Plus benefits',
      'No cost EMI'
    ],
    bestFor: ['online'],
    cashbackRate: 5,
    rewardRate: 0,
    benefits: {
      flipkart: '5% unlimited cashback on Flipkart',
      partners: '4% on preferred partner merchants',
      plus: 'Flipkart Plus membership',
      emi: 'No cost EMI on Flipkart'
    },
    pros: ['High Flipkart cashback', 'Partner benefits', 'Fee waiver option'],
    cons: ['Limited to Flipkart ecosystem', 'Annual fee'],
    recommendationScore: 83
  },
  {
    id: 'hdfc-millennia',
    name: 'HDFC Millennia',
    bank: 'HDFC Bank',
    type: 'cashback',
    category: 'cashback',
    annualFee: 1000,
    isFree: false,
    isPremium: false,
    minIncome: 35000,
    rating: 4.1,
    image: 'HDFC-Regalia-Gold.jpg',
    highlights: [
      '5% cashback on online spends',
      '2.5% on offline spends',
      'Auto cashback credit',
      'No category restrictions'
    ],
    bestFor: ['online', 'general'],
    cashbackRate: 5,
    rewardRate: 0,
    benefits: {
      online: '5% cashback on online transactions',
      offline: '2.5% on offline spends',
      cap: '₹1,000 monthly cashback limit',
      welcomeBonus: '₹1,000 cashback'
    },
    pros: ['High cashback rates', 'Auto credit', 'Wide acceptance'],
    cons: ['Annual fee', 'Monthly limits'],
    recommendationScore: 84
  },
  {
    id: 'icici-emeralde',
    name: 'ICICI Emeralde Private',
    bank: 'ICICI Bank',
    type: 'travel',
    category: 'premium',
    annualFee: 12000,
    isFree: false,
    isPremium: true,
    minIncome: 180000,
    rating: 4.5,
    image: 'ICICI-Emeralde-Private.jpg',
    highlights: [
      '4X points on dining & entertainment',
      'Unlimited airport lounge access',
      'Priority Pass membership',
      'Golf privileges'
    ],
    bestFor: ['dining', 'travel'],
    cashbackRate: 0,
    rewardRate: 4,
    benefits: {
      lounge: 'Unlimited domestic + international',
      dining: '4X reward points on dining',
      golf: 'Complimentary golf rounds',
      concierge: '24/7 concierge services'
    },
    pros: ['Ultra-premium benefits', 'Excellent dining rewards', 'Luxury services'],
    cons: ['Very high annual fee', 'High income requirement'],
    recommendationScore: 87
  },
  {
    id: 'axis-myzone',
    name: 'Axis Bank MyZone',
    bank: 'Axis Bank',
    type: 'fuel',
    category: 'best-overall',
    annualFee: 500,
    isFree: false,
    isPremium: false,
    minIncome: 18000,
    rating: 3.9,
    image: 'Axis-Atlas.jpg',
    highlights: [
      '4% fuel surcharge waiver',
      '2X points on dining',
      'Movie ticket discounts',
      'Easy approval'
    ],
    bestFor: ['fuel', 'dining'],
    cashbackRate: 0,
    rewardRate: 2,
    benefits: {
      fuel: '4% fuel surcharge waiver',
      dining: '2X reward points on dining',
      movies: 'Movie ticket discounts',
      welcomeBonus: '₹500 voucher'
    },
    pros: ['Good fuel benefits', 'Low income requirement', 'Affordable fee'],
    cons: ['Limited premium benefits', 'Lower reward rates'],
    recommendationScore: 76
  },
  {
    id: 'axis-ace',
    name: 'Axis Bank ACE',
    bank: 'Axis Bank',
    type: 'cashback',
    category: 'cashback',
    annualFee: 500,
    isFree: false,
    isPremium: false,
    minIncome: 15000,
    rating: 4.0,
    image: 'Axis-Atlas.jpg',
    highlights: [
      '5% cashback on bill payments',
      '4% cashback on Google Pay',
      '1.5% on all other spends',
      'No reward capping'
    ],
    bestFor: ['bills', 'online'],
    cashbackRate: 5,
    rewardRate: 0,
    benefits: {
      bills: '5% cashback on utility bill payments',
      gpay: '4% cashback on Google Pay transactions',
      general: '1.5% on all other spends',
      welcomeBonus: '₹500 cashback'
    },
    pros: ['High bill payment cashback', 'No capping', 'Easy approval'],
    cons: ['Annual fee', 'Limited to specific categories'],
    recommendationScore: 82
  },
  {
    id: 'amex-mrcc',
    name: 'American Express MRCC',
    bank: 'American Express',
    type: 'travel',
    category: 'premium',
    annualFee: 4500,
    isFree: false,
    isPremium: true,
    minIncome: 50000,
    rating: 4.4,
    image: 'Amex-MRCC.jpg',
    highlights: [
      '4X points on dining',
      '2X points on travel',
      'Membership Rewards points',
      'Airport lounge access'
    ],
    bestFor: ['dining', 'travel'],
    cashbackRate: 0,
    rewardRate: 4,
    benefits: {
      dining: '4X points on dining',
      travel: '2X points on travel',
      lounge: '8 complimentary lounge visits',
      rewards: 'Flexible Membership Rewards'
    },
    pros: ['Excellent dining rewards', 'Flexible point redemption', 'Premium brand'],
    cons: ['Annual fee', 'Limited merchant acceptance'],
    recommendationScore: 80
  },
  {
    id: 'amex-gold',
    name: 'American Express Gold Charge',
    bank: 'American Express',
    type: 'travel',
    category: 'premium',
    annualFee: 4000,
    isFree: false,
    isPremium: true,
    minIncome: 60000,
    rating: 4.3,
    image: 'Amex-Gold-Charge.jpg',
    highlights: [
      '4X points on dining & travel',
      'No preset spending limit',
      'Taj Privilege membership',
      'Airport lounge access'
    ],
    bestFor: ['dining', 'travel'],
    cashbackRate: 0,
    rewardRate: 4,
    benefits: {
      dining: '4X points on dining',
      travel: '4X points on travel',
      taj: 'Taj Privilege Gold membership',
      lounge: 'Airport lounge access'
    },
    pros: ['No spending limit', 'Excellent reward rates', 'Luxury benefits'],
    cons: ['Annual fee', 'Limited acceptance'],
    recommendationScore: 85
  },
  {
    id: 'rbl-safari',
    name: 'RBL World Safari',
    bank: 'RBL Bank',
    type: 'travel',
    category: 'travel',
    annualFee: 3500,
    isFree: false,
    isPremium: true,
    minIncome: 50000,
    rating: 4.0,
    image: 'RBL-World-Safari.jpg',
    highlights: [
      '6X points on travel',
      'Airport lounge access',
      'Travel insurance',
      'Fuel surcharge waiver'
    ],
    bestFor: ['travel', 'fuel'],
    cashbackRate: 0,
    rewardRate: 6,
    benefits: {
      travel: '6X points on travel bookings',
      lounge: '6 complimentary lounge visits',
      insurance: 'Travel insurance coverage',
      fuel: 'Fuel surcharge waiver'
    },
    pros: ['High travel rewards', 'Good travel benefits', 'Competitive fee'],
    cons: ['Limited brand recognition', 'Average acceptance'],
    recommendationScore: 78
  },
  {
    id: 'yes-marquee',
    name: 'YES Bank Marquee',
    bank: 'YES Bank',
    type: 'travel',
    category: 'premium',
    annualFee: 5000,
    isFree: false,
    isPremium: true,
    minIncome: 75000,
    rating: 4.1,
    image: 'Yes-Bank-Marquee.jpg',
    highlights: [
      '6X points on dining',
      'Airport lounge access',
      'Movie ticket offers',
      'Fuel surcharge waiver'
    ],
    bestFor: ['dining', 'entertainment'],
    cashbackRate: 0,
    rewardRate: 6,
    benefits: {
      dining: '6X points on dining',
      lounge: '8 complimentary lounge visits',
      movies: 'Movie ticket discounts',
      fuel: 'Fuel surcharge waiver'
    },
    pros: ['High dining rewards', 'Good entertainment benefits', 'Premium feel'],
    cons: ['Annual fee', 'Bank stability concerns'],
    recommendationScore: 79
  },
  {
    id: 'hdfc-diners',
    name: 'HDFC Diners Club Black',
    bank: 'HDFC Bank',
    type: 'travel',
    category: 'premium',
    annualFee: 10000,
    isFree: false,
    isPremium: true,
    minIncome: 150000,
    rating: 4.5,
    image: 'HDFC-Diners-Club-Black.jpg',
    highlights: [
      '5X points on dining',
      'Unlimited airport lounge access',
      'Golf privileges',
      'Priority Pass membership'
    ],
    bestFor: ['dining', 'travel'],
    cashbackRate: 0,
    rewardRate: 5,
    benefits: {
      dining: '5X points on dining',
      lounge: 'Unlimited domestic + international',
      golf: 'Complimentary golf sessions',
      priority: 'Priority Pass membership'
    },
    pros: ['Unlimited lounge access', 'Excellent dining rewards', 'Premium benefits'],
    cons: ['High annual fee', 'High income requirement'],
    recommendationScore: 86
  }
];

// State Management
let selectedCards = [];
let currentFilters = {};
let maxSelection = 4;

// DOM Elements
const cardsGrid = document.getElementById('cards-grid');
const comparisonResults = document.getElementById('comparison-results');
const recommendations = document.getElementById('recommendations');
const floatingBar = document.getElementById('floating-bar');
const selectedCount = document.getElementById('selected-count');
const floatingCount = document.getElementById('floating-count');

// Initialize the tool
document.addEventListener('DOMContentLoaded', function() {
    renderCards(creditCards);
    setupEventListeners();
    
    // Add smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});

// Event Listeners Setup
function setupEventListeners() {
    // Smart filter handlers
    document.getElementById('get-recommendations').addEventListener('click', getPersonalizedRecommendations);
    document.getElementById('compare-all').addEventListener('click', () => renderCards(creditCards));
    document.getElementById('reset-filters').addEventListener('click', resetFilters);
    
    // Category quick picks
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', (e) => filterByCategory(e.target.dataset.category));
    });
    
    // Floating bar actions
    document.getElementById('floating-compare').addEventListener('click', showComparison);
    document.getElementById('floating-clear').addEventListener('click', clearSelection);
}

// Render Cards Function
function renderCards(cards, highlight = []) {
    cardsGrid.innerHTML = '';
    
    cards.forEach((card, index) => {
        const isHighlighted = highlight.includes(card.id);
        const cardElement = createCardElement(card, isHighlighted);
        cardsGrid.appendChild(cardElement);
        
        // Add animation delay
        setTimeout(() => {
            cardElement.classList.add('fade-in');
        }, index * 100);
    });
}

// Create Card Element
function createCardElement(card, isHighlighted = false) {
    const cardDiv = document.createElement('div');
    cardDiv.className = `card-item ${selectedCards.includes(card.id) ? 'selected' : ''} ${isHighlighted ? 'highlighted' : ''}`;
    cardDiv.dataset.cardId = card.id;
    
    const feeText = card.isFree ? 'Lifetime Free' : `₹${card.annualFee.toLocaleString()}/year`;
    const ratingStars = '★'.repeat(Math.floor(card.rating)) + '☆'.repeat(5 - Math.floor(card.rating));
    // Add cache-busting parameter to force fresh image load
    const imagePath = window.themeUri + '/images/cards/' + (card.image || 'HDFC-Regalia-Gold.jpg') + '?v=' + Date.now();
    
    cardDiv.innerHTML = `
        <div class="card-image-container">
            <img src="${imagePath}" alt="${card.name} Credit Card" class="card-image" 
                 style="width: 100%; max-width: 300px; height: auto; border-radius: 12px; margin-bottom: 1rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"
                 onload="console.log('✅ Image loaded successfully:', '${card.image}')" 
                 onerror="console.error('❌ Failed to load image:', '${imagePath}'); this.style.border='2px solid red';">
        </div>
        
        <div class="card-header">
            <div>
                <div class="card-name">${card.name}</div>
                <div class="card-bank">${card.bank}</div>
            </div>
            ${isHighlighted ? '<div class="card-badge">Recommended</div>' : ''}
            ${card.isPremium ? '<div class="card-badge">Premium</div>' : ''}
        </div>
        
        <div class="card-meta">
            <div class="rating">${ratingStars} ${card.rating}/5</div>
            <div class="annual-fee">${feeText}</div>
        </div>
        
        <div class="card-highlights">
            ${card.highlights.map(highlight => `
                <div class="highlight-item">
                    <span class="icon">✓</span>
                    <span>${highlight}</span>
                </div>
            `).join('')}
        </div>
        
        <div class="card-quick-info">
            <div class="info-item">
                <small>Min Income: ₹${card.minIncome.toLocaleString()}/month</small>
            </div>
            <div class="info-item">
                <small>Best for: ${card.bestFor.join(', ')}</small>
            </div>
        </div>
        
        <div class="card-actions">
            <button class="select-card-btn ${selectedCards.includes(card.id) ? 'selected' : ''}" 
                    onclick="toggleCardSelection('${card.id}')">
                ${selectedCards.includes(card.id) ? '✓ Selected' : 'Select to Compare'}
            </button>
            <a href="/cards/${card.id}" class="view-details-btn">View Details</a>
        </div>
    `;
    
    return cardDiv;
}

// Toggle Card Selection
function toggleCardSelection(cardId) {
    const cardIndex = selectedCards.indexOf(cardId);
    
    if (cardIndex > -1) {
        // Remove card
        selectedCards.splice(cardIndex, 1);
    } else {
        // Add card (check limit)
        if (selectedCards.length >= maxSelection) {
            showNotification(`You can compare maximum ${maxSelection} cards at a time`, 'warning');
            return;
        }
        selectedCards.push(cardId);
    }
    
    updateUI();
    updateFloatingBar();
}

// Update UI after selection change
function updateUI() {
    selectedCount.textContent = selectedCards.length;
    
    // Update card appearances
    document.querySelectorAll('.card-item').forEach(card => {
        const cardId = card.dataset.cardId;
        const selectBtn = card.querySelector('.select-card-btn');
        
        if (selectedCards.includes(cardId)) {
            card.classList.add('selected');
            selectBtn.textContent = '✓ Selected';
            selectBtn.classList.add('selected');
        } else {
            card.classList.remove('selected');
            selectBtn.textContent = 'Select to Compare';
            selectBtn.classList.remove('selected');
        }
    });
}

// Update Floating Bar
function updateFloatingBar() {
    if (selectedCards.length > 0) {
        floatingCount.textContent = selectedCards.length;
        floatingBar.style.display = 'block';
        floatingBar.classList.add('bounce-in');
    } else {
        floatingBar.style.display = 'none';
    }
}

// Show Comparison
function showComparison() {
    if (selectedCards.length < 2) {
        showNotification('Please select at least 2 cards to compare', 'warning');
        return;
    }
    
    const selectedCardData = creditCards.filter(card => selectedCards.includes(card.id));
    renderComparisonTable(selectedCardData);
    comparisonResults.style.display = 'block';
    comparisonResults.scrollIntoView({ behavior: 'smooth' });
}

// Render Comparison Table
function renderComparisonTable(cards) {
    const table = document.getElementById('comparison-table');
    
    // Create a more visual side-by-side comparison
    const comparisonHTML = `
        <div class="modern-comparison-grid">
            <div class="comparison-cards-row">
                ${cards.map(card => {
                    // Add cache-busting parameter to force fresh image load
                    const imagePath = window.themeUri + '/images/cards/' + (card.image || 'HDFC-Regalia-Gold.jpg') + '?v=' + Date.now();
                    return `
                        <div class="comparison-card-column">
                            <div class="comparison-card-header">
                                <img src="${imagePath}" alt="${card.name}" class="comparison-card-image">
                                <h3>${card.name}</h3>
                                <p class="bank-name">${card.bank}</p>
                                <div class="rating-badge">${card.rating}/5 ⭐</div>
                            </div>
                            
                            <div class="comparison-details">
                                <div class="detail-row">
                                    <span class="detail-label">Annual Fee</span>
                                    <span class="detail-value ${card.isFree ? 'highlight-green' : ''}">${card.isFree ? 'Lifetime Free' : `₹${card.annualFee.toLocaleString()}`}</span>
                                </div>
                                
                                <div class="detail-row">
                                    <span class="detail-label">Min Income</span>
                                    <span class="detail-value">₹${card.minIncome.toLocaleString()}/month</span>
                                </div>
                                
                                <div class="detail-row">
                                    <span class="detail-label">Card Type</span>
                                    <span class="detail-value">${card.type.charAt(0).toUpperCase() + card.type.slice(1)}</span>
                                </div>
                                
                                <div class="detail-row">
                                    <span class="detail-label">Cashback Rate</span>
                                    <span class="detail-value ${card.cashbackRate > 0 ? 'highlight-blue' : ''}">${card.cashbackRate > 0 ? `${card.cashbackRate}%` : 'N/A'}</span>
                                </div>
                                
                                <div class="detail-row">
                                    <span class="detail-label">Reward Rate</span>
                                    <span class="detail-value ${card.rewardRate > 0 ? 'highlight-blue' : ''}">${card.rewardRate > 0 ? `${card.rewardRate}X points` : 'N/A'}</span>
                                </div>
                                
                                <div class="detail-row full-width">
                                    <span class="detail-label">Key Benefits</span>
                                    <div class="benefits-list">
                                        ${card.highlights.map(benefit => `<div class="benefit-item">✓ ${benefit}</div>`).join('')}
                                    </div>
                                </div>
                                
                                <div class="detail-row full-width">
                                    <span class="detail-label">Best For</span>
                                    <div class="tags">
                                        ${card.bestFor.map(category => `<span class="tag">${category}</span>`).join('')}
                                    </div>
                                </div>
                                
                                <div class="detail-row full-width">
                                    <span class="detail-label">Pros & Cons</span>
                                    <div class="pros-cons">
                                        <div class="pros">
                                            <strong>Pros:</strong>
                                            ${card.pros.map(pro => `<div class="pro-item">+ ${pro}</div>`).join('')}
                                        </div>
                                        <div class="cons">
                                            <strong>Cons:</strong>
                                            ${card.cons.map(con => `<div class="con-item">- ${con}</div>`).join('')}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="comparison-actions">
                                <button class="apply-btn" onclick="applyForCard('${card.id}')">Apply Now</button>
                                <button class="details-btn" onclick="viewCardDetails('${card.id}')">View Details</button>
                            </div>
                        </div>
                    `;
                }).join('')}
            </div>
        </div>
    `;
    
    table.innerHTML = comparisonHTML;
}

// Get Personalized Recommendations
function getPersonalizedRecommendations() {
    const monthlySpend = document.getElementById('monthly-spend').value;
    const primaryCategory = document.getElementById('primary-category').value;
    const cardPreference = document.getElementById('card-preference').value;
    
    if (!monthlySpend || !primaryCategory) {
        showNotification('Please select your spending range and primary category', 'warning');
        return;
    }
    
    const recommendedCards = getRecommendations(monthlySpend, primaryCategory, cardPreference);
    renderRecommendations(recommendedCards);
    renderCards(creditCards, recommendedCards.map(r => r.id));
    
    recommendations.style.display = 'block';
    recommendations.scrollIntoView({ behavior: 'smooth' });
}

// Recommendation Algorithm
function getRecommendations(monthlySpend, primaryCategory, preference) {
    let scores = creditCards.map(card => {
        let score = card.recommendationScore;
        
        // Spending amount matching
        if (monthlySpend <= 25000 && card.isFree) score += 15;
        if (monthlySpend > 50000 && card.isPremium) score += 10;
        if (monthlySpend > 100000 && card.annualFee > 5000) score += 15;
        
        // Category matching
        if (card.bestFor.includes(primaryCategory)) score += 20;
        
        // Preference matching
        if (preference === 'free' && card.isFree) score += 25;
        if (preference === 'cashback' && card.cashbackRate > 0) score += 20;
        if (preference === 'rewards' && card.rewardRate > 0) score += 20;
        if (preference === 'premium' && card.isPremium) score += 15;
        if (preference === 'travel' && card.type === 'travel') score += 25;
        
        // Income eligibility check
        if (card.minIncome > parseInt(monthlySpend)) score -= 30;
        
        return { ...card, finalScore: Math.min(score, 100) };
    });
    
    return scores
        .filter(card => card.finalScore > 70)
        .sort((a, b) => b.finalScore - a.finalScore)
        .slice(0, 3);
}

// Render Recommendations
function renderRecommendations(recommendedCards) {
    const container = document.getElementById('recommendation-cards');
    
    container.innerHTML = recommendedCards.map((card, index) => {
        // Add cache-busting parameter to force fresh image load
        const imagePath = window.themeUri + '/images/cards/' + (card.image || 'HDFC-Regalia-Gold.jpg') + '?v=' + Date.now();
        return `
            <div class="recommendation-item fade-in" style="animation-delay: ${index * 0.2}s">
                <div class="recommendation-image">
                    <img src="${imagePath}" alt="${card.name}" class="rec-card-image" 
                         style="width: 100%; max-width: 250px; height: auto; border-radius: 10px; margin-bottom: 1rem;">
                </div>
                
                <div class="recommendation-score">
                    <div class="score-circle">${Math.round(card.finalScore)}</div>
                    <div class="recommendation-details">
                        <h4>${card.name}</h4>
                        <div class="recommendation-reason">
                            ${getRecommendationReason(card)}
                        </div>
                    </div>
                </div>
                
                <div class="recommendation-highlights">
                    ${card.highlights.slice(0, 3).map(highlight => `
                        <div class="highlight-item">
                            <span class="icon">✨</span>
                            <span>${highlight}</span>
                        </div>
                    `).join('')}
                </div>
                
                <div class="recommendation-actions">
                    <button onclick="toggleCardSelection('${card.id}')" class="btn btn-primary">
                        ${selectedCards.includes(card.id) ? 'Selected ✓' : 'Select to Compare'}
                    </button>
                    <a href="/cards/${card.id}" class="btn btn-outline">View Details</a>
                </div>
            </div>
        `;
    }).join('');
}

// Get Recommendation Reason
function getRecommendationReason(card) {
    const reasons = [];
    
    if (card.isFree) reasons.push('Lifetime free with no annual fee');
    if (card.cashbackRate >= 5) reasons.push('High cashback rates up to 5%');
    if (card.rewardRate >= 10) reasons.push('Excellent reward earning potential');
    if (card.isPremium) reasons.push('Premium benefits and exclusive privileges');
    
    return reasons[0] || 'Well-suited for your spending pattern';
}

// Filter by Category
function filterByCategory(category) {
    // Update active category button
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    
    const filteredCards = creditCards.filter(card => card.category === category);
    renderCards(filteredCards);
    
    // Scroll to cards
    cardsGrid.scrollIntoView({ behavior: 'smooth' });
}

// Reset Filters
function resetFilters() {
    document.querySelectorAll('.smart-filter').forEach(filter => filter.value = '');
    document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
    renderCards(creditCards);
    recommendations.style.display = 'none';
    comparisonResults.style.display = 'none';
}

// Clear Selection
function clearSelection() {
    selectedCards = [];
    updateUI();
    updateFloatingBar();
    comparisonResults.style.display = 'none';
}

// Utility Functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'warning' ? '#ff9800' : '#4CAF50'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        z-index: 10000;
        animation: slideIn 0.3s ease;
    `;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 4000);
}

// Quick Action Functions
function applyBestCard() {
    if (selectedCards.length === 0) {
        showNotification('Please select cards first', 'warning');
        return;
    }
    
    const bestCard = creditCards.find(card => selectedCards.includes(card.id));
    window.open(`/apply/${bestCard.id}`, '_blank');
}

function applyForCard(cardId) {
    window.open(`/apply/${cardId}`, '_blank');
}

function viewCardDetails(cardId) {
    window.open(`/cards/${cardId}`, '_blank');
}

function calculateRewards() {
    if (selectedCards.length === 0) {
        showNotification('Please select cards first', 'warning');
        return;
    }
    
    window.location.href = '/rewards-calculator?cards=' + selectedCards.join(',');
}

function getDetailedAnalysis() {
    if (selectedCards.length === 0) {
        showNotification('Please select cards first', 'warning');
        return;
    }
    
    // Create a detailed analysis popup or redirect
    window.open('/detailed-analysis?cards=' + selectedCards.join(','), '_blank');
}
</script>

<?php get_footer(); ?>
