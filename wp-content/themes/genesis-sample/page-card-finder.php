<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $page_title = 'Credit Card Finder Tool India 2025';
    $page_description = 'Find the perfect credit card for your needs with our smart card finder tool. Get personalized recommendations based on your spending, income, and preferences.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="credit card finder, card recommendation tool, best credit card for me, card selector, personalized card suggestions">';
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
      <li class="breadcrumb-item active" aria-current="page">Card Finder Tool</li>
    </ol>
  </div>
</nav>

<main class="card-finder-page">
  <section class="page-header">
    <div class="container">
      <h1>Smart Credit Card Finder</h1>
      <p>Answer a few questions and get personalized credit card recommendations tailored to your lifestyle and spending habits.</p>
    </div>
  </section>

  <!-- Card Finder Tool -->
  <section class="finder-tool">
    <div class="container">
      <div class="finder-container">
        
        <!-- Progress Bar -->
        <div class="progress-bar">
          <div class="progress-step active" data-step="1">
            <div class="step-number">1</div>
            <div class="step-label">Personal Info</div>
          </div>
          <div class="progress-step" data-step="2">
            <div class="step-number">2</div>
            <div class="step-label">Spending Habits</div>
          </div>
          <div class="progress-step" data-step="3">
            <div class="step-number">3</div>
            <div class="step-label">Preferences</div>
          </div>
          <div class="progress-step" data-step="4">
            <div class="step-number">4</div>
            <div class="step-label">Results</div>
          </div>
        </div>

        <!-- Step 1: Personal Information -->
        <div class="finder-step active" id="step-1">
          <h2>Tell us about yourself</h2>
          <div class="form-grid">
            
            <div class="form-group">
              <label for="income">Annual Income</label>
              <select id="income" name="income">
                <option value="">Select your income range</option>
                <option value="below-3">Below ₹3 Lakhs</option>
                <option value="3-5">₹3-5 Lakhs</option>
                <option value="5-10">₹5-10 Lakhs</option>
                <option value="10-15">₹10-15 Lakhs</option>
                <option value="15-25">₹15-25 Lakhs</option>
                <option value="above-25">Above ₹25 Lakhs</option>
              </select>
            </div>

            <div class="form-group">
              <label for="credit-score">Credit Score (if known)</label>
              <select id="credit-score" name="credit-score">
                <option value="">Select your credit score range</option>
                <option value="excellent">Excellent (750+)</option>
                <option value="good">Good (700-749)</option>
                <option value="fair">Fair (650-699)</option>
                <option value="poor">Poor (below 650)</option>
                <option value="unknown">Don't know</option>
              </select>
            </div>

            <div class="form-group">
              <label for="age">Age Group</label>
              <select id="age" name="age">
                <option value="">Select your age group</option>
                <option value="18-25">18-25 years</option>
                <option value="26-35">26-35 years</option>
                <option value="36-45">36-45 years</option>
                <option value="46-55">46-55 years</option>
                <option value="above-55">Above 55 years</option>
              </select>
            </div>

            <div class="form-group">
              <label for="first-card">Is this your first credit card?</label>
              <select id="first-card" name="first-card">
                <option value="">Select option</option>
                <option value="yes">Yes, this is my first card</option>
                <option value="no">No, I have/had cards before</option>
              </select>
            </div>

          </div>
          <div class="step-actions">
            <button class="btn btn-primary" onclick="nextStep(2)">Next Step →</button>
          </div>
        </div>

        <!-- Step 2: Spending Habits -->
        <div class="finder-step" id="step-2">
          <h2>Your spending patterns</h2>
          <div class="form-grid">
            
            <div class="form-group">
              <label for="monthly-spend">Monthly Credit Card Spending</label>
              <select id="monthly-spend" name="monthly-spend">
                <option value="">Select spending range</option>
                <option value="below-10k">Below ₹10,000</option>
                <option value="10k-25k">₹10,000 - ₹25,000</option>
                <option value="25k-50k">₹25,000 - ₹50,000</option>
                <option value="50k-100k">₹50,000 - ₹1,00,000</option>
                <option value="above-100k">Above ₹1,00,000</option>
              </select>
            </div>

            <div class="form-group">
              <label>Primary spending categories (select all that apply)</label>
              <div class="checkbox-group">
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="dining">
                  <span class="checkmark"></span>
                  Dining & Food Delivery
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="fuel">
                  <span class="checkmark"></span>
                  Fuel & Transportation
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="shopping">
                  <span class="checkmark"></span>
                  Online Shopping
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="grocery">
                  <span class="checkmark"></span>
                  Grocery & Utilities
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="travel">
                  <span class="checkmark"></span>
                  Travel & Hotels
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="entertainment">
                  <span class="checkmark"></span>
                  Movies & Entertainment
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="bills">
                  <span class="checkmark"></span>
                  Bill Payments
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="categories" value="general">
                  <span class="checkmark"></span>
                  General Purchases
                </label>
              </div>
            </div>

          </div>
          <div class="step-actions">
            <button class="btn btn-outline" onclick="prevStep(1)">← Previous</button>
            <button class="btn btn-primary" onclick="nextStep(3)">Next Step →</button>
          </div>
        </div>

        <!-- Step 3: Preferences -->
        <div class="finder-step" id="step-3">
          <h2>What matters most to you?</h2>
          <div class="form-grid">
            
            <div class="form-group">
              <label for="priority">Top Priority</label>
              <select id="priority" name="priority">
                <option value="">What's most important?</option>
                <option value="cashback">Maximum cashback/rewards</option>
                <option value="no-fee">No annual fee</option>
                <option value="travel">Travel benefits & lounge access</option>
                <option value="lifestyle">Lifestyle privileges</option>
                <option value="fuel">Fuel surcharge waiver</option>
                <option value="shopping">Shopping discounts</option>
                <option value="credit-building">Building credit history</option>
              </select>
            </div>

            <div class="form-group">
              <label for="annual-fee">Annual Fee Preference</label>
              <select id="annual-fee" name="annual-fee">
                <option value="">Select fee preference</option>
                <option value="free">Free cards only</option>
                <option value="low">Low fee (₹500-2,000)</option>
                <option value="medium">Medium fee (₹2,000-5,000)</option>
                <option value="high">High fee (₹5,000+) for premium benefits</option>
                <option value="any">Any fee if benefits justify</option>
              </select>
            </div>

            <div class="form-group">
              <label for="bank-preference">Bank Preference</label>
              <select id="bank-preference" name="bank-preference">
                <option value="">Any bank preference?</option>
                <option value="any">No preference</option>
                <option value="hdfc">HDFC Bank</option>
                <option value="icici">ICICI Bank</option>
                <option value="axis">Axis Bank</option>
                <option value="sbi">SBI Cards</option>
                <option value="kotak">Kotak Mahindra</option>
                <option value="american-express">American Express</option>
                <option value="other">Others</option>
              </select>
            </div>

            <div class="form-group">
              <label>Important features (select all that apply)</label>
              <div class="checkbox-group">
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="lounge">
                  <span class="checkmark"></span>
                  Airport lounge access
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="insurance">
                  <span class="checkmark"></span>
                  Travel insurance
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="concierge">
                  <span class="checkmark"></span>
                  Concierge services
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="golf">
                  <span class="checkmark"></span>
                  Golf privileges
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="emi">
                  <span class="checkmark"></span>
                  Easy EMI options
                </label>
                <label class="checkbox-item">
                  <input type="checkbox" name="features" value="contactless">
                  <span class="checkmark"></span>
                  Contactless payments
                </label>
              </div>
            </div>

          </div>
          <div class="step-actions">
            <button class="btn btn-outline" onclick="prevStep(2)">← Previous</button>
            <button class="btn btn-primary" onclick="findCards()">Find My Cards →</button>
          </div>
        </div>

        <!-- Step 4: Results -->
        <div class="finder-step" id="step-4">
          <h2>Your Personalized Recommendations</h2>
          <div id="recommendations">
            <!-- Results will be populated by JavaScript -->
          </div>
          <div class="step-actions">
            <button class="btn btn-outline" onclick="restartFinder()">Start Over</button>
            <a href="/compare-cards" class="btn btn-primary">Compare All Recommendations</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="how-it-works">
    <div class="container">
      <h2>🔍 How Our Card Finder Works</h2>
      <div class="works-grid">
        
        <div class="work-item">
          <div class="work-icon">📝</div>
          <h3>Answer Questions</h3>
          <p>Tell us about your income, spending habits, and preferences through our simple questionnaire.</p>
        </div>

        <div class="work-item">
          <div class="work-icon">🤖</div>
          <h3>Smart Analysis</h3>
          <p>Our algorithm analyzes your profile against hundreds of credit cards and their features.</p>
        </div>

        <div class="work-item">
          <div class="work-icon">🎯</div>
          <h3>Personalized Results</h3>
          <p>Get ranked recommendations with detailed explanations of why each card suits your needs.</p>
        </div>

        <div class="work-item">
          <div class="work-icon">📊</div>
          <h3>Compare & Choose</h3>
          <p>Compare recommended cards side-by-side and make an informed decision with our comparison tool.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Popular Recommendations -->
  <section class="popular-recommendations">
    <div class="container">
      <h2>📈 Popular Recommendations by Profile</h2>
      <div class="recommendation-tabs">
        
        <div class="tab-nav">
          <button class="tab-btn active" onclick="showTab('beginners')">First-time Users</button>
          <button class="tab-btn" onclick="showTab('cashback')">Cashback Seekers</button>
          <button class="tab-btn" onclick="showTab('travelers')">Frequent Travelers</button>
          <button class="tab-btn" onclick="showTab('premium')">Premium Users</button>
        </div>

        <div class="tab-content active" id="beginners">
          <h3>Perfect for First-time Credit Card Users</h3>
          <div class="recommendation-grid">
            <div class="rec-card">
              <h4><a href="/icici-student">ICICI Student Card</a></h4>
              <p>Ideal for students and young professionals starting their credit journey.</p>
              <div class="rec-features">
                <span>No income requirement</span>
                <span>Low fees</span>
                <span>Easy approval</span>
              </div>
            </div>
            <div class="rec-card">
              <h4><a href="/sbi-simply-save">SBI SimplySAVE</a></h4>
              <p>Great first card with rewards on everyday spending categories.</p>
              <div class="rec-features">
                <span>₹499 annual fee</span>
                <span>10X rewards on dining</span>
                <span>Fuel surcharge waiver</span>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-content" id="cashback">
          <h3>Maximum Cashback & Rewards</h3>
          <div class="recommendation-grid">
            <div class="rec-card">
              <h4><a href="/icici-amazon">ICICI Amazon Pay</a></h4>
              <p>Unbeatable cashback on Amazon purchases and online spending.</p>
              <div class="rec-features">
                <span>5% Amazon cashback</span>
                <span>Lifetime free</span>
                <span>2% bill payments</span>
              </div>
            </div>
            <div class="rec-card">
              <h4><a href="/sbi-cashback">SBI Cashback</a></h4>
              <p>Flat 5% cashback on online spending with simple reward structure.</p>
              <div class="rec-features">
                <span>5% online cashback</span>
                <span>1% all other spends</span>
                <span>₹999 annual fee</span>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-content" id="travelers">
          <h3>Frequent Travelers & Business</h3>
          <div class="recommendation-grid">
            <div class="rec-card">
              <h4><a href="/axis-magnus">Axis Magnus</a></h4>
              <p>Premium travel card with unlimited lounge access and miles.</p>
              <div class="rec-features">
                <span>Unlimited lounge access</span>
                <span>25 Edge points per ₹200</span>
                <span>Golf privileges</span>
              </div>
            </div>
            <div class="rec-card">
              <h4><a href="/hdfc-regalia">HDFC Regalia</a></h4>
              <p>Well-rounded travel card with comprehensive benefits.</p>
              <div class="rec-features">
                <span>12 lounge visits/year</span>
                <span>Travel insurance</span>
                <span>Dining privileges</span>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-content" id="premium">
          <h3>Premium Lifestyle & High Spenders</h3>
          <div class="recommendation-grid">
            <div class="rec-card">
              <h4><a href="/icici-emeralde">ICICI Emeralde</a></h4>
              <p>Luxury card with exclusive privileges and concierge services.</p>
              <div class="rec-features">
                <span>Unlimited domestic lounge</span>
                <span>Personal accident insurance</span>
                <span>Milestone benefits</span>
              </div>
            </div>
            <div class="rec-card">
              <h4><a href="/indusind-legend">IndusInd Legend</a></h4>
              <p>High reward rate with luxury lifestyle benefits.</p>
              <div class="rec-features">
                <span>3.33% reward rate</span>
                <span>Golf privileges</span>
                <span>Movie offers</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Tips Section -->
  <section class="finder-tips">
    <div class="container">
      <h2>💡 Tips for Choosing the Right Card</h2>
      <div class="tips-grid">
        
        <div class="tip-item">
          <div class="tip-icon">💰</div>
          <h3>Calculate Total Value</h3>
          <p>Consider annual fees against rewards earned. A higher fee card might offer better value if you spend enough.</p>
        </div>

        <div class="tip-item">
          <div class="tip-icon">📊</div>
          <h3>Match Your Spending</h3>
          <p>Choose cards that offer bonus rewards in categories where you spend the most money.</p>
        </div>

        <div class="tip-item">
          <div class="tip-icon">📝</div>
          <h3>Check Eligibility</h3>
          <p>Verify income and credit score requirements before applying to improve approval chances.</p>
        </div>

        <div class="tip-item">
          <div class="tip-icon">🎯</div>
          <h3>Start Simple</h3>
          <p>If you're new to credit cards, start with a basic card and upgrade as your credit profile improves.</p>
        </div>

        <div class="tip-item">
          <div class="tip-icon">⏰</div>
          <h3>Timing Matters</h3>
          <p>Apply during promotional periods for welcome bonuses and waived fees.</p>
        </div>

        <div class="tip-item">
          <div class="tip-icon">🔍</div>
          <h3>Read Fine Print</h3>
          <p>Understand reward caps, expiry terms, and redemption options before making your choice.</p>
        </div>

      </div>
    </div>
  </section>

</main>

<style>
/* Card Finder Page Styles */
.card-finder-page {
    line-height: 1.6;
}

.page-header {
    background: linear-gradient(135deg, #8e44ad 0%, #9b59b6 100%);
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

/* Finder Tool */
.finder-tool {
    padding: 4rem 0;
    background: #f8f9fa;
}

.finder-container {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    overflow: hidden;
}

/* Progress Bar */
.progress-bar {
    display: flex;
    background: #e9ecef;
    padding: 0;
}

.progress-step {
    flex: 1;
    padding: 1.5rem;
    text-align: center;
    background: #e9ecef;
    color: #6c757d;
    transition: all 0.3s ease;
    cursor: pointer;
}

.progress-step.active {
    background: #8e44ad;
    color: white;
}

.progress-step.completed {
    background: #28a745;
    color: white;
}

.step-number {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    font-weight: 700;
}

.step-label {
    font-size: 0.9rem;
    font-weight: 600;
}

/* Finder Steps */
.finder-step {
    display: none;
    padding: 3rem;
}

.finder-step.active {
    display: block;
}

.finder-step h2 {
    text-align: center;
    margin-bottom: 2rem;
    color: #333;
    font-weight: 700;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #333;
}

.form-group select {
    padding: 0.75rem;
    border: 2px solid #dee2e6;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group select:focus {
    outline: none;
    border-color: #8e44ad;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0.75rem;
    margin-top: 0.5rem;
}

.checkbox-item {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 0.5rem;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.checkbox-item:hover {
    background: #f8f9fa;
}

.checkbox-item input[type="checkbox"] {
    margin-right: 0.75rem;
    transform: scale(1.2);
}

.step-actions {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    margin-top: 2rem;
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
    font-size: 1rem;
}

.btn-primary {
    background: #8e44ad;
    color: white;
}

.btn-primary:hover {
    background: #9b59b6;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: #8e44ad;
    border: 2px solid #8e44ad;
}

.btn-outline:hover {
    background: #8e44ad;
    color: white;
}

/* Results Section */
#recommendations {
    margin-bottom: 2rem;
}

.recommendation-card {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 2rem;
    margin-bottom: 1.5rem;
    border-left: 4px solid #8e44ad;
}

.recommendation-card h3 {
    color: #333;
    margin-bottom: 1rem;
}

.recommendation-card p {
    color: #666;
    margin-bottom: 1rem;
}

.recommendation-features {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.feature-tag {
    background: #8e44ad;
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
}

.recommendation-actions {
    display: flex;
    gap: 1rem;
}

.recommendation-actions .btn {
    flex: 1;
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
}

/* How It Works */
.how-it-works {
    padding: 4rem 0;
}

.how-it-works h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.works-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.work-item {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.work-item:hover {
    transform: translateY(-5px);
}

.work-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.work-item h3 {
    margin-bottom: 1rem;
    color: #333;
    font-weight: 700;
}

.work-item p {
    color: #666;
}

/* Popular Recommendations */
.popular-recommendations {
    padding: 4rem 0;
    background: #f8f9fa;
}

.popular-recommendations h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.tab-nav {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    gap: 1rem;
}

.tab-btn {
    padding: 0.75rem 1.5rem;
    border: none;
    background: #e9ecef;
    color: #6c757d;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.tab-btn.active {
    background: #8e44ad;
    color: white;
}

.tab-content {
    display: none;
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.tab-content.active {
    display: block;
}

.tab-content h3 {
    margin-bottom: 2rem;
    color: #333;
    text-align: center;
}

.recommendation-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.rec-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #8e44ad;
}

.rec-card h4 {
    margin-bottom: 0.5rem;
    color: #333;
}

.rec-card h4 a {
    color: #8e44ad;
    text-decoration: none;
}

.rec-card p {
    color: #666;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

.rec-features {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.rec-features span {
    background: #e9ecef;
    color: #333;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
}

/* Finder Tips */
.finder-tips {
    padding: 4rem 0;
}

.finder-tips h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.tip-item {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.tip-item:hover {
    transform: translateY(-3px);
}

.tip-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.tip-item h3 {
    margin-bottom: 1rem;
    color: #333;
    font-weight: 700;
}

.tip-item p {
    color: #666;
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
    color: #8e44ad;
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
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
    }
    
    .step-actions {
        flex-direction: column;
    }
    
    .tab-nav {
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    
    .tab-btn {
        flex: 1;
        min-width: 120px;
    }
    
    .recommendation-grid {
        grid-template-columns: 1fr;
    }
    
    .works-grid,
    .tips-grid {
        grid-template-columns: 1fr;
    }
    
    .finder-step {
        padding: 2rem 1.5rem;
    }
    
    .progress-step {
        padding: 1rem 0.5rem;
    }
    
    .step-label {
        font-size: 0.8rem;
    }
    
    h2 {
        font-size: 2rem !important;
    }
}
</style>

<script>
let currentStep = 1;
let formData = {};

function nextStep(step) {
    // Validate current step
    if (!validateStep(currentStep)) {
        return;
    }
    
    // Save current step data
    saveStepData(currentStep);
    
    // Hide current step
    document.getElementById(`step-${currentStep}`).classList.remove('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.remove('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.add('completed');
    
    // Show next step
    currentStep = step;
    document.getElementById(`step-${currentStep}`).classList.add('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.add('active');
}

function prevStep(step) {
    // Hide current step
    document.getElementById(`step-${currentStep}`).classList.remove('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.remove('active');
    
    // Show previous step
    currentStep = step;
    document.getElementById(`step-${currentStep}`).classList.add('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.add('active');
    document.querySelector(`[data-step="${currentStep}"]`).classList.remove('completed');
}

function validateStep(step) {
    const stepElement = document.getElementById(`step-${step}`);
    const requiredSelects = stepElement.querySelectorAll('select[required]');
    
    // For simplicity, we'll just check if major fields are filled
    if (step === 1) {
        const income = document.getElementById('income').value;
        const firstCard = document.getElementById('first-card').value;
        if (!income || !firstCard) {
            alert('Please fill in the required fields');
            return false;
        }
    }
    
    if (step === 2) {
        const monthlySpend = document.getElementById('monthly-spend').value;
        const categories = document.querySelectorAll('input[name="categories"]:checked');
        if (!monthlySpend || categories.length === 0) {
            alert('Please select your spending range and at least one category');
            return false;
        }
    }
    
    if (step === 3) {
        const priority = document.getElementById('priority').value;
        if (!priority) {
            alert('Please select your top priority');
            return false;
        }
    }
    
    return true;
}

function saveStepData(step) {
    if (step === 1) {
        formData.income = document.getElementById('income').value;
        formData.creditScore = document.getElementById('credit-score').value;
        formData.age = document.getElementById('age').value;
        formData.firstCard = document.getElementById('first-card').value;
    } else if (step === 2) {
        formData.monthlySpend = document.getElementById('monthly-spend').value;
        formData.categories = Array.from(document.querySelectorAll('input[name="categories"]:checked')).map(cb => cb.value);
    } else if (step === 3) {
        formData.priority = document.getElementById('priority').value;
        formData.annualFee = document.getElementById('annual-fee').value;
        formData.bankPreference = document.getElementById('bank-preference').value;
        formData.features = Array.from(document.querySelectorAll('input[name="features"]:checked')).map(cb => cb.value);
    }
}

function findCards() {
    if (!validateStep(3)) {
        return;
    }
    
    saveStepData(3);
    
    // Generate recommendations based on form data
    const recommendations = generateRecommendations(formData);
    
    // Display results
    displayRecommendations(recommendations);
    
    // Move to results step
    nextStep(4);
}

function generateRecommendations(data) {
    let recommendations = [];
    
    // Simple recommendation logic based on user inputs
    if (data.firstCard === 'yes' || data.income === 'below-3' || data.income === '3-5') {
        recommendations.push({
            name: 'ICICI Student Credit Card',
            link: '/page-icici-student',
            reason: 'Perfect for building your first credit history with no income requirements.',
            features: ['No income requirement', 'Low fees', 'Easy approval', 'Student benefits'],
            match: 95
        });
        
        recommendations.push({
            name: 'SBI SimplySAVE Credit Card',
            link: '/page-sbi-simply-save',
            reason: 'Great starter card with good rewards on everyday spending.',
            features: ['₹499 annual fee', '10X rewards on dining', 'Fuel surcharge waiver'],
            match: 88
        });
    }
    
    if (data.priority === 'cashback' || data.categories.includes('shopping')) {
        recommendations.push({
            name: 'ICICI Amazon Pay Credit Card',
            link: '/page-icici-amazon',
            reason: 'Maximizes cashback on online shopping and Amazon purchases.',
            features: ['5% Amazon cashback', 'Lifetime free', '2% bill payments', '1% all other spends'],
            match: 92
        });
        
        recommendations.push({
            name: 'SBI Cashback Credit Card',
            link: '/page-sbi-cashback',
            reason: 'Simple flat cashback structure perfect for online shoppers.',
            features: ['5% online cashback', '1% all other spends', '₹999 annual fee'],
            match: 85
        });
    }
    
    if (data.priority === 'travel' || data.features.includes('lounge') || data.monthlySpend === '50k-100k' || data.monthlySpend === 'above-100k') {
        recommendations.push({
            name: 'Axis Bank Magnus Credit Card',
            link: '/page-axis-magnus',
            reason: 'Premium travel card with unlimited lounge access and high rewards.',
            features: ['Unlimited lounge access', '25 Edge points per ₹200', 'Golf privileges', 'Concierge services'],
            match: 90
        });
        
        recommendations.push({
            name: 'HDFC Bank Regalia Credit Card',
            link: '/page-hdfc-regalia',
            reason: 'Well-rounded travel card with comprehensive benefits.',
            features: ['12 lounge visits/year', 'Travel insurance', 'Dining privileges', '4 RP per ₹150'],
            match: 87
        });
    }
    
    if (data.priority === 'fuel' || data.categories.includes('fuel')) {
        recommendations.push({
            name: 'Axis MyZone Credit Card',
            link: '/page-axis-myzone',
            reason: 'Excellent fuel benefits with surcharge waiver and rewards.',
            features: ['Fuel surcharge waiver', '2X rewards on weekends', 'Movie offers'],
            match: 89
        });
    }
    
    if (data.priority === 'no-fee' || data.annualFee === 'free') {
        recommendations.push({
            name: 'HDFC MoneyBack Credit Card',
            link: '/page-hdfc-moneyback',
            reason: 'Lifetime free card with good cashback on multiple categories.',
            features: ['Lifetime free', '2.5% cashback on dining', '1% fuel cashback'],
            match: 86
        });
    }
    
    // Sort by match percentage and return top 3
    return recommendations.sort((a, b) => b.match - a.match).slice(0, 3);
}

function displayRecommendations(recommendations) {
    const container = document.getElementById('recommendations');
    
    if (recommendations.length === 0) {
        container.innerHTML = '<p>No specific recommendations found. Please try adjusting your preferences.</p>';
        return;
    }
    
    let html = '<div class="recommendations-list">';
    
    recommendations.forEach((rec, index) => {
        html += `
            <div class="recommendation-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                    <h3>${rec.name}</h3>
                    <div style="background: #28a745; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">
                        ${rec.match}% Match
                    </div>
                </div>
                <p>${rec.reason}</p>
                <div class="recommendation-features">
                    ${rec.features.map(feature => `<span class="feature-tag">${feature}</span>`).join('')}
                </div>
                <div class="recommendation-actions">
                    <a href="${rec.link}" class="btn btn-primary">View Details</a>
                    <a href="/compare-cards?pre-select=${rec.link.replace('/page-', '').replace('-', '-')}" class="btn btn-outline">Compare</a>
                </div>
            </div>
        `;
    });
    
    html += '</div>';
    container.innerHTML = html;
}

function restartFinder() {
    currentStep = 1;
    formData = {};
    
    // Reset all steps
    document.querySelectorAll('.finder-step').forEach(step => step.classList.remove('active'));
    document.querySelectorAll('.progress-step').forEach(step => {
        step.classList.remove('active', 'completed');
    });
    
    // Reset form fields
    document.querySelectorAll('select').forEach(select => select.value = '');
    document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
    
    // Show first step
    document.getElementById('step-1').classList.add('active');
    document.querySelector('[data-step="1"]').classList.add('active');
}

function showTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    
    // Show selected tab
    document.getElementById(tabName).classList.add('active');
    event.target.classList.add('active');
}
</script>

<?php get_footer(); ?>
