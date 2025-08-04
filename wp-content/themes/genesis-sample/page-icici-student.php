<?php get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">ICICI Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Student Credit Card</li>
    </ol>
  </div>
</nav>

<main class="credit-card-detail">
  <section class="card-hero">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='190'%3E%3Crect width='300' height='190' rx='15' fill='%2300FA9A'/%3E%3Ctext x='20' y='40' font-family='Arial' font-size='18' font-weight='bold' fill='%23333'%3EICICI%3C/text%3E%3Ctext x='20' y='65' font-family='Arial' font-size='14' fill='%23333'%3EStudent%3C/text%3E%3Ctext x='20' y='130' font-family='Arial' font-size='12' fill='%23333'%3E•••• •••• •••• 4567%3C/text%3E%3Ctext x='20' y='155' font-family='Arial' font-size='10' fill='%23333'%3ESTUDENT NAME%3C/text%3E%3Ctext x='220' y='155' font-family='Arial' font-size='10' fill='%23333'%3E12/28%3C/text%3E%3C/svg%3E" alt="ICICI Bank Student Credit Card">
          </div>
          <div class="card-rating">
            <div class="stars">★★★★☆</div>
            <span class="rating-text">4.2/5 (3,890 reviews)</span>
          </div>
        </div>
        
        <div class="card-info">
          <h1>ICICI Bank Student Credit Card</h1>
          <p class="card-tagline">Perfect start to your credit journey</p>
          
          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">NIL</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Reward Rate</span>
              <span class="highlight-value">2X Points</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Special Feature</span>
              <span class="highlight-value">Student Benefits</span>
            </div>
          </div>
          
          <div class="cta-buttons">
            <a href="#apply" class="btn btn-primary">Apply Now</a>
            <button id="add-to-compare" class="btn btn-outline">Add to Compare</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="card-features">
    <div class="container">
      <h2>Key Features & Benefits</h2>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">🎓</div>
          <h3>Student Friendly</h3>
          <p>Designed specifically for students with easy approval</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">💰</div>
          <h3>Zero Annual Fee</h3>
          <p>No annual fee for lifetime for students</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🏆</div>
          <h3>2X Reward Points</h3>
          <p>2X points on online shopping and dining</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📚</div>
          <h3>Educational Benefits</h3>
          <p>Discounts on educational courses and books</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">🎬</div>
          <h3>Entertainment Offers</div>
          <p>Movie tickets and streaming service discounts</p>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">📱</div>
          <h3>Digital Rewards</h3>
          <p>Enhanced rewards on digital platforms</p>
        </div>
      </div>
    </div>
  </section>

  <section class="rewards-breakdown">
    <div class="container">
      <h2>Reward Structure</h2>
      
      <div class="rewards-table">
        <table>
          <thead>
            <tr>
              <th>Category</th>
              <th>Reward Rate</th>
              <th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Online Shopping</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>Dining</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>Education/Books</td>
              <td>2 points per ₹100</td>
              <td>2% value</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>1 point per ₹100</td>
              <td>1% value</td>
            </tr>
          </tbody>
        </table>
        
        <div class="points-info">
          <p><strong>Points Value:</strong> 1 Point = ₹1 when redeemed</p>
          <p><strong>Points Validity:</strong> 2 years from earning</p>
          <p><strong>Minimum Redemption:</strong> 500 points</p>
        </div>
      </div>
    </div>
  </section>

  <section class="fees-charges">
    <div class="container">
      <h2>Fees & Charges</h2>
      
      <div class="fees-grid">
        <div class="fee-item">
          <span class="fee-label">Annual Fee</span>
          <span class="fee-value">NIL</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">NIL</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.5% per month</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹250)</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Foreign Currency Markup</span>
          <span class="fee-value">3.5%</span>
        </div>
        <div class="fee-item">
          <span class="fee-label">Overlimit Fee</span>
          <span class="fee-value">2.5% of overlimit amount</span>
        </div>
      </div>
    </div>
  </section>

  <section class="eligibility">
    <div class="container">
      <h2>Eligibility Criteria</h2>
      
      <div class="eligibility-content">
        <div class="eligibility-requirements">
          <h3>Requirements</h3>
          <ul>
            <li>Age: 18-25 years (Students only)</li>
            <li>Currently pursuing graduation or post-graduation</li>
            <li>Enrolled in recognized college/university</li>
            <li>Valid student ID required</li>
            <li>Indian citizen/resident</li>
            <li>No minimum income requirement</li>
          </ul>
        </div>
        
        <div class="required-documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Student ID Card</li>
            <li>College admission letter</li>
            <li>Identity Proof (Aadhaar/PAN)</li>
            <li>Address Proof (Aadhaar/Utility Bill)</li>
            <li>Parent's income proof (if applicable)</li>
            <li>Recent photographs</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="pros-cons">
    <div class="container">
      <h2>Pros & Cons</h2>
      
      <div class="pros-cons-grid">
        <div class="pros">
          <h3>✅ Pros</h3>
          <ul>
            <li>Zero annual fee (lifetime)</li>
            <li>No joining fee</li>
            <li>Easy approval for students</li>
            <li>Good rewards on relevant categories</li>
            <li>Educational discounts</li>
            <li>Low minimum redemption</li>
            <li>ICICI bank privileges</li>
          </ul>
        </div>
        
        <div class="cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited to students only</li>
            <li>Lower credit limit</li>
            <li>No airport lounge access</li>
            <li>Basic travel benefits</li>
            <li>Short points validity</li>
            <li>Limited premium features</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply">
    <div class="container">
      <h2>Apply for ICICI Bank Student Credit Card</h2>
      
      <div class="application-content">
        <div class="application-benefits">
          <h3>Perfect For</h3>
          <ul>
            <li>✅ College students</li>
            <li>✅ First-time credit card users</li>
            <li>✅ Online shoppers</li>
            <li>✅ Educational expense management</li>
            <li>✅ Building credit history</li>
          </ul>
        </div>
        
        <div class="application-form">
          <h3>Quick Application</h3>
          <form>
            <div class="form-group">
              <input type="text" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
              <input type="tel" placeholder="Mobile Number" required>
            </div>
            <div class="form-group">
              <input type="text" placeholder="College/University Name" required>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Course Type</option>
                <option value="graduation">Graduation</option>
                <option value="post-graduation">Post Graduation</option>
                <option value="professional">Professional Course</option>
                <option value="diploma">Diploma</option>
              </select>
            </div>
            <div class="form-group">
              <select required>
                <option value="">Year of Study</option>
                <option value="1st">1st Year</option>
                <option value="2nd">2nd Year</option>
                <option value="3rd">3rd Year</option>
                <option value="4th">4th Year</option>
                <option value="final">Final Year</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for ICICI Bank Student Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through ICICI Bank website, mobile app, or visit the nearest branch with required student documents including college ID and admission letter.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum age requirement?</h3>
        <div class="faq-answer">
          <p>The minimum age requirement is 18 years for students enrolled in graduate or postgraduate courses with valid college enrollment proof.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the benefits for students?</h3>
        <div class="faq-answer">
          <p>Enjoy low credit limit to build credit history, online shopping benefits, dining discounts, fuel surcharge waiver, and financial literacy resources.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>This is typically a no annual fee card designed for students, with waiver available during the initial years as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.credit-card-detail .card-hero {
    background: linear-gradient(135deg, #00FA9A, #32CD32) !important;
}
</style>

<?php get_footer(); ?>
