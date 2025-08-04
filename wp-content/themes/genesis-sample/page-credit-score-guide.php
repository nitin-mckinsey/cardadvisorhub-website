<?php 
// SEO Meta Tags and Schema
add_action('wp_head', function() {
    $page_title = 'Credit Score Guide India 2025';
    $page_description = 'Complete guide to improve your credit score in India 2025. Learn about CIBIL score, factors affecting credit score, and actionable tips to boost your creditworthiness.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="credit score India, CIBIL score improvement, credit report, credit rating, improve credit score, credit score tips">';
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
      <li class="breadcrumb-item active" aria-current="page">Credit Score Guide</li>
    </ol>
  </div>
</nav>

<main class="credit-score-guide">
  <section class="page-header">
    <div class="container">
      <h1>Complete Credit Score Guide 2025</h1>
      <p>Master your credit score with expert tips, strategies, and actionable advice to improve your financial health.</p>
    </div>
  </section>

  <!-- Credit Score Basics -->
  <section class="credit-basics">
    <div class="container">
      <h2>📊 Understanding Credit Scores</h2>
      <div class="basics-grid">
        
        <div class="basic-item">
          <div class="score-range excellent">
            <h3>Excellent</h3>
            <div class="score">750-900</div>
            <p>Outstanding credit health. Easy approvals for best rates and premium cards.</p>
          </div>
        </div>

        <div class="basic-item">
          <div class="score-range good">
            <h3>Good</h3>
            <div class="score">700-749</div>
            <p>Strong credit profile. Good chances for approvals with competitive rates.</p>
          </div>
        </div>

        <div class="basic-item">
          <div class="score-range fair">
            <h3>Fair</h3>
            <div class="score">650-699</div>
            <p>Average credit. May face higher interest rates and limited options.</p>
          </div>
        </div>

        <div class="basic-item">
          <div class="score-range poor">
            <h3>Poor</h3>
            <div class="score">300-649</div>
            <p>Needs improvement. Difficult to get approvals without security deposits.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Credit Score Factors -->
  <section class="score-factors">
    <div class="container">
      <h2>🎯 What Affects Your Credit Score</h2>
      <div class="factors-grid">
        
        <div class="factor-item">
          <div class="factor-weight">35%</div>
          <h3>Payment History</h3>
          <p>Your track record of making payments on time. Late payments, defaults, and settlements negatively impact your score.</p>
          <div class="factor-tips">
            <span class="tip">Pay all bills on time</span>
            <span class="tip">Set up auto-pay</span>
            <span class="tip">Clear dues immediately</span>
          </div>
        </div>

        <div class="factor-item">
          <div class="factor-weight">30%</div>
          <h3>Credit Utilization</h3>
          <p>The percentage of your available credit limit that you're using. Keep it below 30% for optimal scores.</p>
          <div class="factor-tips">
            <span class="tip">Use <30% of limit</span>
            <span class="tip">Pay before due date</span>
            <span class="tip">Request limit increase</span>
          </div>
        </div>

        <div class="factor-item">
          <div class="factor-weight">15%</div>
          <h3>Credit History Length</h3>
          <p>How long you've been using credit. Older accounts with good history boost your score.</p>
          <div class="factor-tips">
            <span class="tip">Keep old accounts active</span>
            <span class="tip">Don't close first card</span>
            <span class="tip">Build long relationships</span>
          </div>
        </div>

        <div class="factor-item">
          <div class="factor-weight">10%</div>
          <h3>Credit Mix</h3>
          <p>Having different types of credit (cards, loans, mortgages) shows you can manage various credit products.</p>
          <div class="factor-tips">
            <span class="tip">Mix of secured/unsecured</span>
            <span class="tip">Different loan types</span>
            <span class="tip">Gradual diversification</span>
          </div>
        </div>

        <div class="factor-item">
          <div class="factor-weight">10%</div>
          <h3>New Credit Inquiries</h3>
          <p>Multiple credit applications in short periods can lower your score. Space out applications wisely.</p>
          <div class="factor-tips">
            <span class="tip">Limit applications</span>
            <span class="tip">Research before applying</span>
            <span class="tip">Use pre-qualification</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Improvement Strategies -->
  <section class="improvement-strategies">
    <div class="container">
      <h2>🚀 Credit Score Improvement Strategies</h2>
      
      <div class="strategy-timeline">
        <div class="timeline-item">
          <div class="timeline-period">0-30 Days</div>
          <div class="timeline-content">
            <h3>Quick Wins</h3>
            <ul>
              <li>Check your credit report for errors</li>
              <li>Pay down high balances immediately</li>
              <li>Set up automatic payments</li>
              <li>Request credit limit increases</li>
              <li>Become an authorized user on family member's account</li>
            </ul>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-period">1-3 Months</div>
          <div class="timeline-content">
            <h3>Building Momentum</h3>
            <ul>
              <li>Maintain low credit utilization consistently</li>
              <li>Pay all bills on time without exception</li>
              <li>Dispute any errors found on credit report</li>
              <li>Consider a secured credit card if needed</li>
              <li>Avoid new credit applications</li>
            </ul>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-period">3-6 Months</div>
          <div class="timeline-content">
            <h3>Steady Progress</h3>
            <ul>
              <li>Continue perfect payment history</li>
              <li>Gradually increase credit limits</li>
              <li>Monitor credit utilization weekly</li>
              <li>Consider debt consolidation if helpful</li>
              <li>Review progress and adjust strategy</li>
            </ul>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-period">6+ Months</div>
          <div class="timeline-content">
            <h3>Long-term Growth</h3>
            <ul>
              <li>Maintain excellent habits consistently</li>
              <li>Consider new credit products strategically</li>
              <li>Build diverse credit portfolio</li>
              <li>Help others as authorized user</li>
              <li>Enjoy benefits of excellent credit</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Common Mistakes -->
  <section class="common-mistakes">
    <div class="container">
      <h2>❌ Common Credit Score Mistakes to Avoid</h2>
      <div class="mistakes-grid">
        
        <div class="mistake-item">
          <div class="mistake-icon">💳</div>
          <h3>Closing Old Credit Cards</h3>
          <p>Closing your oldest credit card reduces your credit history length and available credit, potentially lowering your score.</p>
          <div class="solution">
            <strong>Solution:</strong> Keep old cards active with small purchases and pay them off monthly.
          </div>
        </div>

        <div class="mistake-item">
          <div class="mistake-icon">📈</div>
          <h3>Maxing Out Credit Cards</h3>
          <p>Using your entire credit limit signals financial stress and dramatically impacts your utilization ratio.</p>
          <div class="solution">
            <strong>Solution:</strong> Keep utilization below 30%, ideally under 10% for best results.
          </div>
        </div>

        <div class="mistake-item">
          <div class="mistake-icon">📅</div>
          <h3>Making Late Payments</h3>
          <p>Even one late payment can significantly damage your credit score, especially if you have a thin credit file.</p>
          <div class="solution">
            <strong>Solution:</strong> Set up automatic payments and calendar reminders for all bills.
          </div>
        </div>

        <div class="mistake-item">
          <div class="mistake-icon">🔍</div>
          <h3>Not Monitoring Credit Report</h3>
          <p>Errors on credit reports are common and can unfairly damage your score if left uncorrected.</p>
          <div class="solution">
            <strong>Solution:</strong> Check your credit report monthly and dispute errors immediately.
          </div>
        </div>

        <div class="mistake-item">
          <div class="mistake-icon">📝</div>
          <h3>Applying for Multiple Cards</h3>
          <p>Multiple hard inquiries in short periods can lower your score and signal credit hunger to lenders.</p>
          <div class="solution">
            <strong>Solution:</strong> Space out applications by at least 3-6 months and research thoroughly first.
          </div>
        </div>

        <div class="mistake-item">
          <div class="mistake-icon">💰</div>
          <h3>Only Making Minimum Payments</h3>
          <p>High balances hurt your utilization ratio and cost you more in interest over time.</p>
          <div class="solution">
            <strong>Solution:</strong> Pay more than the minimum, ideally full balance monthly.
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Credit Building Tips -->
  <section class="credit-tips">
    <div class="container">
      <h2>💡 Expert Credit Building Tips</h2>
      <div class="tips-content">
        
        <div class="tip-category">
          <h3>For Credit Beginners</h3>
          <div class="tips-list">
            <div class="tip-item">
              <div class="tip-number">1</div>
              <div class="tip-content">
                <h4>Start with a Secured Credit Card</h4>
                <p>Put down a security deposit to get your first credit card and begin building credit history.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">2</div>
              <div class="tip-content">
                <h4>Become an Authorized User</h4>
                <p>Ask a family member with good credit to add you as an authorized user on their account.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">3</div>
              <div class="tip-content">
                <h4>Use Credit Builder Loans</h4>
                <p>These loans help establish payment history while you save money in a locked account.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="tip-category">
          <h3>For Score Improvement</h3>
          <div class="tips-list">
            <div class="tip-item">
              <div class="tip-number">1</div>
              <div class="tip-content">
                <h4>Pay Twice Per Month</h4>
                <p>Make payments before statement dates to keep reported balances low.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">2</div>
              <div class="tip-content">
                <h4>Request Goodwill Letters</h4>
                <p>Write to creditors asking them to remove late payments as a courtesy.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">3</div>
              <div class="tip-content">
                <h4>Use Balance Transfer Strategically</h4>
                <p>Move high balances to cards with lower utilization to improve overall ratio.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="tip-category">
          <h3>For Maintenance</h3>
          <div class="tips-list">
            <div class="tip-item">
              <div class="tip-number">1</div>
              <div class="tip-content">
                <h4>Monitor Regularly</h4>
                <p>Check your credit score monthly and reports quarterly to catch issues early.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">2</div>
              <div class="tip-content">
                <h4>Keep Cards Active</h4>
                <p>Use each card at least once every few months to prevent closure due to inactivity.</p>
              </div>
            </div>
            <div class="tip-item">
              <div class="tip-number">3</div>
              <div class="tip-content">
                <h4>Plan Major Purchases</h4>
                <p>Time large expenses when your utilization is low and avoid new credit before big purchases.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Credit Score Resources -->
  <section class="credit-resources">
    <div class="container">
      <h2>📚 Free Credit Score Resources</h2>
      <div class="resources-grid">
        
        <div class="resource-item">
          <div class="resource-icon">📊</div>
          <h3>Free Credit Reports</h3>
          <ul>
            <li>CIBIL - Official credit bureau</li>
            <li>Experian - Free annual reports</li>
            <li>Equifax - Credit monitoring</li>
            <li>CRIF High Mark - Alternative bureau</li>
          </ul>
        </div>

        <div class="resource-item">
          <div class="resource-icon">📱</div>
          <h3>Credit Monitoring Apps</h3>
          <ul>
            <li>CIBIL Mobile App</li>
            <li>Paisabazaar Credit Score</li>
            <li>BankBazaar Credit Report</li>
            <li>Credit Mantri Score Tracker</li>
          </ul>
        </div>

        <div class="resource-item">
          <div class="resource-icon">🏦</div>
          <h3>Bank Credit Score Services</h3>
          <ul>
            <li>HDFC Bank Credit Score</li>
            <li>ICICI Bank Credit Report</li>
            <li>SBI Credit Score Check</li>
            <li>Axis Bank Credit Health</li>
          </ul>
        </div>

        <div class="resource-item">
          <div class="resource-icon">💳</div>
          <h3>Card-Specific Tools</h3>
          <ul>
            <li>Credit card pre-qualification</li>
            <li>Approval odds calculators</li>
            <li>Credit limit estimators</li>
            <li>Interest rate comparisons</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Action Plan -->
  <section class="action-plan">
    <div class="container">
      <h2>🎯 Your 30-Day Credit Score Action Plan</h2>
      <div class="action-checklist">
        
        <div class="week-plan">
          <h3>Week 1: Assessment</h3>
          <div class="checklist">
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Check your credit score from all 4 bureaus
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Review credit reports for errors and discrepancies
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Calculate your credit utilization across all cards
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              List all accounts and their payment due dates
            </label>
          </div>
        </div>

        <div class="week-plan">
          <h3>Week 2: Optimization</h3>
          <div class="checklist">
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Pay down high-balance cards to under 30% utilization
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Set up automatic minimum payments for all accounts
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Request credit limit increases on existing cards
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Dispute any errors found on credit reports
            </label>
          </div>
        </div>

        <div class="week-plan">
          <h3>Week 3: Strategy</h3>
          <div class="checklist">
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Create a debt payoff plan prioritizing high-utilization cards
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Set up credit monitoring alerts
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Research credit cards that align with your improved score
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Plan major purchases around low utilization periods
            </label>
          </div>
        </div>

        <div class="week-plan">
          <h3>Week 4: Maintenance</h3>
          <div class="checklist">
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Review and adjust automatic payment amounts
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Schedule monthly credit score check reminders
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Create a long-term credit building strategy
            </label>
            <label class="checkbox-item">
              <input type="checkbox">
              <span class="checkmark"></span>
              Celebrate your progress and plan next month's goals
            </label>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <h2>🚀 Ready to Boost Your Credit Score?</h2>
      <p>Start your credit improvement journey today with the right credit card for your current score.</p>
      <div class="cta-buttons">
        <a href="/compare-cards" class="btn btn-primary btn-large">Find Your Perfect Card</a>
        <a href="/rewards-calculator" class="btn btn-outline btn-large">Calculate Potential Rewards</a>
      </div>
    </div>
  </section>

</main>

<style>
/* Credit Score Guide Styles */
.credit-score-guide {
    line-height: 1.6;
}

.page-header {
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
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

/* Credit Basics Section */
.credit-basics {
    padding: 4rem 0;
    background: #f8f9fa;
}

.credit-basics h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.basics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.score-range {
    text-align: center;
    padding: 2rem;
    border-radius: 12px;
    color: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.score-range:hover {
    transform: translateY(-5px);
}

.score-range h3 {
    margin-bottom: 1rem;
    font-size: 1.3rem;
    font-weight: 700;
}

.score-range .score {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 1rem;
}

.score-range.excellent {
    background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
}

.score-range.good {
    background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
}

.score-range.fair {
    background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
}

.score-range.poor {
    background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
}

/* Score Factors */
.score-factors {
    padding: 4rem 0;
}

.score-factors h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.factors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.factor-item {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    position: relative;
}

.factor-item:hover {
    transform: translateY(-5px);
}

.factor-weight {
    position: absolute;
    top: -10px;
    right: 20px;
    background: #3498db;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.9rem;
}

.factor-item h3 {
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.factor-item p {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.factor-tips {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.tip {
    background: #ecf0f1;
    color: #2c3e50;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Improvement Strategies */
.improvement-strategies {
    padding: 4rem 0;
    background: #f8f9fa;
}

.improvement-strategies h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.strategy-timeline {
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    margin-bottom: 2rem;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.timeline-period {
    background: #3498db;
    color: white;
    padding: 2rem;
    font-weight: 700;
    font-size: 1.1rem;
    min-width: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.timeline-content {
    padding: 2rem;
    flex: 1;
}

.timeline-content h3 {
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.timeline-content ul {
    list-style: none;
    padding: 0;
}

.timeline-content li {
    padding: 0.5rem 0;
    color: #666;
    position: relative;
    padding-left: 1.5rem;
}

.timeline-content li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #27ae60;
    font-weight: bold;
}

/* Common Mistakes */
.common-mistakes {
    padding: 4rem 0;
}

.common-mistakes h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.mistakes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.mistake-item {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    border-left: 4px solid #e74c3c;
}

.mistake-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.mistake-item h3 {
    margin-bottom: 1rem;
    color: #e74c3c;
    font-weight: 700;
}

.mistake-item p {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.solution {
    background: #d5f4e6;
    padding: 1rem;
    border-radius: 4px;
    color: #27ae60;
    font-size: 0.9rem;
}

/* Credit Tips */
.credit-tips {
    padding: 4rem 0;
    background: #f8f9fa;
}

.credit-tips h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.tips-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.tip-category {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.tip-category h3 {
    text-align: center;
    margin-bottom: 2rem;
    color: #3498db;
    font-weight: 700;
}

.tips-list {
    space-y: 1.5rem;
}

.tip-item {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.tip-number {
    background: #3498db;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    flex-shrink: 0;
}

.tip-content h4 {
    margin-bottom: 0.5rem;
    color: #2c3e50;
    font-weight: 600;
}

.tip-content p {
    color: #666;
    font-size: 0.9rem;
}

/* Credit Resources */
.credit-resources {
    padding: 4rem 0;
}

.credit-resources h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.resource-item {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
}

.resource-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.resource-item h3 {
    margin-bottom: 1rem;
    color: #2c3e50;
    font-weight: 700;
}

.resource-item ul {
    list-style: none;
    padding: 0;
}

.resource-item li {
    padding: 0.25rem 0;
    color: #666;
    font-size: 0.9rem;
}

/* Action Plan */
.action-plan {
    padding: 4rem 0;
    background: #f8f9fa;
}

.action-plan h2 {
    text-align: center;
    margin-bottom: 3rem;
    font-size: 2.5rem;
    color: #333;
}

.action-checklist {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 1000px;
    margin: 0 auto;
}

.week-plan {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.week-plan h3 {
    margin-bottom: 1.5rem;
    color: #3498db;
    font-weight: 700;
    text-align: center;
}

.checklist {
    space-y: 1rem;
}

.checkbox-item {
    display: flex;
    align-items: flex-start;
    cursor: pointer;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    color: #666;
}

.checkbox-item input[type="checkbox"] {
    margin-right: 0.75rem;
    margin-top: 0.25rem;
}

.checkmark {
    margin-left: 0.5rem;
}

/* CTA Section */
.cta-section {
    padding: 4rem 0;
    text-align: center;
    background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
    color: white;
}

.cta-section h2 {
    margin-bottom: 1rem;
    font-size: 2.5rem;
}

.cta-section p {
    margin-bottom: 2rem;
    font-size: 1.1rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    max-width: 500px;
    margin: 0 auto;
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
    background: #27ae60;
    color: white;
}

.btn-primary:hover {
    background: #2ecc71;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-outline:hover {
    background: white;
    color: #3498db;
}

.btn-large {
    padding: 1rem 2rem;
    font-size: 1.1rem;
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
    color: #3498db;
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
    
    .basics-grid,
    .factors-grid,
    .mistakes-grid,
    .tips-content,
    .resources-grid,
    .action-checklist {
        grid-template-columns: 1fr;
    }
    
    .timeline-item {
        flex-direction: column;
    }
    
    .timeline-period {
        min-width: auto;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
    
    h2 {
        font-size: 2rem !important;
    }
    
    .factor-weight {
        position: static;
        display: inline-block;
        margin-bottom: 1rem;
    }
    
    .tip-item {
        align-items: flex-start;
    }
}
</style>

<?php get_footer(); ?>
