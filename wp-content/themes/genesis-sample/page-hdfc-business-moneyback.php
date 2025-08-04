<?php
// SEO Meta Tags and Schema for HDFC Business Moneyback
add_action('wp_head', function() {
    $page_title = 'HDFC Business Moneyback Credit Card: Features, Benefits, Review & Apply Online';
    $page_description = 'Full review of the HDFC Business Moneyback Credit Card. Explore features, rewards, eligibility, pros & cons, and apply for the best business cashback card in India.';
    
    echo '<title>' . $page_title . ' | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="HDFC business moneyback credit card, business credit card India, HDFC business card, cashback business card, GST benefits">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . ' | CardAdvisorHub">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="' . $page_title . '">';
    echo '<meta name="twitter:description" content="' . $page_description . '">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
      <li class="breadcrumb-item"><a href="#">HDFC Bank</a></li>
      <li class="breadcrumb-item active" aria-current="page">Business MoneyBack Credit Card</li>
    </ol>
  </div>
</nav>

<?php
// SEO data
$title = "HDFC Business Moneyback Credit Card: Features, Benefits, Review & Apply Online";
$desc = "Full review of the HDFC Business Moneyback Credit Card. Explore features, rewards, eligibility, pros & cons, and apply for the best business cashback card in India.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo htmlspecialchars($title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($desc); ?>" />
  
  <!-- Schema.org structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "HDFC Business Moneyback Credit Card",
    "image": "/assets/cards/hdfc-business-moneyback.png",
    "description": "Business credit card from HDFC Bank with smart cashback and GST features.",
    "brand": "HDFC Bank",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.3",
      "reviewCount": "2145"
    }
  }
  </script>
  
  <?php wp_head(); ?>
  <style>
    /* Moved inline styles here and enhanced */

    .credit-card-detail .card-hero {
      background: linear-gradient(135deg, #800080, #9932CC);
      color: white;
      padding: 2rem 0;
    }

    /* Container */
    .container {
      max-width: 1080px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Flexbox for hero */
    .card-hero-content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 1.5rem;
    }

    .card-visual {
      flex: 1 1 300px;
      max-width: 320px;
    }

    .card-image img {
      border-radius: 15px;
      width: 100%;
      height: auto;
      display: block;
    }

    /* Rating */
    .card-rating {
      margin-top: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 1rem;
    }

    .stars {
      color: #FFD700; /* gold */
      font-size: 1.2rem;
      font-weight: bold;
    }

    .rating-text {
      font-size: 1rem;
      color: #fff;
    }

    /* Card info */
    .card-info {
      flex: 2 1 400px;
    }

    .card-info h1 {
      font-size: 2rem;
      margin-bottom: 0.3rem;
    }

    .card-tagline {
      font-style: italic;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .key-highlights {
      display: flex;
      gap: 1.5rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }

    .highlight-item {
      background: rgba(255 255 255 / 0.15);
      padding: 0.5rem 1rem;
      border-radius: 8px;
      flex: 1 1 120px;
      text-align: center;
    }
    .highlight-label {
      font-weight: 600;
      font-size: 0.9rem;
      display: block;
      margin-bottom: 0.2rem;
    }
    .highlight-value {
      font-size: 1.1rem;
      font-weight: bold;
    }

    /* CTA Buttons */
    .cta-buttons {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .btn {
      cursor: pointer;
      border-radius: 5px;
      font-weight: 600;
      border: none;
      transition: background-color 0.3s ease;
      padding: 0.75rem 1.5rem;
      font-size: 1rem;
      text-align: center;
    }
    .btn-primary {
      background-color: #ff33cc;
      color: white;
    }
    .btn-primary:hover,
    .btn-primary:focus {
      background-color: #e629bd;
      outline: none;
    }
    .btn-outline {
      background-color: transparent;
      color: #ff33cc;
      border: 2px solid #ff33cc;
    }
    .btn-outline:hover,
    .btn-outline:focus {
      background-color: #ff33cc;
      color: white;
      outline: none;
    }

    /* Features Section */

    .card-features {
      padding: 3rem 0;
    }
    .card-features h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #800080;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
      gap: 1.5rem;
    }

    .feature-card {
      background: #f9f7fc;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.05);
      text-align: center;
    }

    .feature-icon {
      font-size: 2.5rem;
      margin-bottom: 0.7rem;
    }

    .feature-card h3 {
      margin-bottom: 0.5rem;
      color: #4b0082;
    }

    .feature-card p {
      font-size: 0.95rem;
      color: #333;
    }

    /* Rewards */

    .rewards-breakdown {
      background: #fafafa;
      padding: 3rem 0;
    }

    .rewards-breakdown h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #800080;
    }

    .rewards-table {
      max-width: 700px;
      margin: 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 1rem;
    }

    thead {
      background-color: #e0c4e9;
    }

    th, td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: center;
    }

    tbody tr:hover {
      background-color: #f3e6f9;
    }

    .points-info {
      margin-top: 1rem;
      font-size: 0.9rem;
      color: #444;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }

    .points-info p {
      margin: 0.3rem 0;
    }

    /* Fees Section */

    .fees-charges {
      padding: 3rem 0;
      max-width: 720px;
      margin: 0 auto;
    }

    .fees-charges h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #800080;
    }

    .fees-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
      gap: 1.5rem;
    }

    .fee-item {
      background: #f2ebf2;
      padding: 1rem 1.5rem;
      border-radius: 8px;
      text-align: center;
      font-weight: 600;
      font-size: 1rem;
      color: #4b0082;
      box-shadow: 0 1px 3px rgb(0 0 0 / 0.05);
    }

    .fee-value {
      margin-left: 0.5rem;
      font-weight: 700;
      color: #800080;
    }

    .badge-success {
      background-color: #d4edda;
      color: #155724;
      font-weight: 700;
      padding: 0.2em 0.6em;
      border-radius: 100px;
      font-size: 0.85rem;
      display: inline-block;
      margin-left: 0.3rem;
    }

    /* Eligibility */

    .eligibility {
      background: #fff;
      padding: 3rem 0;
    }

    .eligibility h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #800080;
    }

    .eligibility-content {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 900px;
      margin: 0 auto;
    }

    .eligibility-requirements, .required-documents {
      flex: 1 1 350px;
      background: #f9f9fc;
      padding: 1.5rem;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgb(0 0 0 / 0.05);
    }

    .eligibility h3 {
      margin-bottom: 1rem;
      color: #5a006a;
      font-size: 1.3rem;
    }

    ul {
      margin: 0;
      padding-left: 1.4rem;
      color: #444;
      font-size: 1rem;
      line-height: 1.4;
    }

    ul li {
      margin-bottom: 0.45rem;
    }

    /* Pros & Cons */

    .pros-cons {
      padding: 3rem 0;
      max-width: 960px;
      margin: 0 auto;
    }

    .pros-cons h2 {
      text-align: center;
      margin-bottom: 2rem;
      font-size: 1.8rem;
      color: #800080;
    }

    .pros-cons-grid {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .pros, .cons {
      flex: 1 1 400px;
      background: #faf7fb;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgb(0 0 0 / 0.05);
    }

    .pros h3 {
      color: #198754; /* green */
      margin-bottom: 1rem;
    }
    .cons h3 {
      color: #dc3545; /* red */
      margin-bottom: 1rem;
    }

    .pros ul li::before {
      content: "✅ ";
      color: #198754;
    }
    .cons ul li::before {
      content: "❌ ";
      color: #dc3545;
    }

    /* Application Section */

    .application-section {
      background: #f8f4fa;
      padding: 3rem 0;
    }
    .application-section h2 {
      text-align: center;
      color: #800080;
      margin-bottom: 2rem;
      font-size: 1.8rem;
    }

    .application-content {
      max-width: 960px;
      margin: 0 auto;
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .application-benefits, .application-form {
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      flex: 1 1 420px;
      box-shadow: 0 2px 8px rgb(128 0 128 / 0.1);
    }

    .application-benefits h3,
    .application-form h3 {
      margin-bottom: 1rem;
      color: #5a006a;
      font-size: 1.4rem;
    }

    .application-benefits ul {
      list-style: none;
      padding: 0;
      color: #444;
      font-size: 1rem;
    }

    .application-benefits ul li {
      margin-bottom: 0.75rem;
    }
    .application-benefits ul li::before {
      content: "✔️";
      margin-right: 0.5rem;
      color: #800080;
    }

    .application-form form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-bottom: 0.3rem;
      font-size: 0.95rem;
      color: #5a006a;
    }

    input, select {
      padding: 0.6rem 0.8rem;
      border: 1.5px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
      font-family: inherit;
      transition: border-color 0.3s;
    }

    input:focus, select:focus {
      border-color: #800080;
      outline: none;
      box-shadow: 0 0 5px rgba(128,0,128,0.4);
    }

    button[type="submit"] {
      margin-top: 1rem;
      background-color: #800080;
      color: white;
      cursor: pointer;
      border-radius: 6px;
      font-size: 1.1rem;
      padding: 0.8rem 0;
      font-weight: 700;
      border: none;
      transition: background-color 0.3s;
    }

    button[type="submit"]:hover,
    button[type="submit"]:focus {
      background-color: #590059;
      outline: none;
    }

    #form-status {
      margin-top: 0.8rem;
      min-height: 1.3rem;
      font-weight: 600;
      color: #198754;
      font-size: 0.95rem;
    }

    /* Sticky CTA on mobile */
    @media (max-width: 600px) {
      .cta-buttons {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 99;
        background: #fffbea;
        padding: 10px 0;
        box-shadow: 0 -1px 8px rgb(0 0 0 / 0.1);
        justify-content: center;
      }
      .cta-buttons a,
      .cta-buttons button {
        flex: 1 1 auto;
        margin: 0 0.5rem;
      }
      body {
        padding-bottom: 60px; /* to prevent overlap */
      }
    }
  </style>
</head>
<body <?php body_class(); ?>>
<?php get_header(); ?>

<main class="credit-card-detail" role="main">

  <section class="card-hero" aria-label="HDFC Business Moneyback Credit Card Overview">
    <div class="container">
      <div class="card-hero-content">
        <div class="card-visual">
          <div class="card-image">
            <img 
              src="/assets/cards/hdfc-business-moneyback.png"
              alt="HDFC Business Moneyback Credit Card – Purple card with business design"
              width="300" height="190" 
              loading="lazy" decoding="async" />
          </div>
          <div class="card-rating" aria-label="4.3 stars out of 5 from 2,145 reviews">
            <span class="stars" aria-hidden="true">★★★★☆</span>
            <span class="rating-text"><strong>4.3/5</strong> (2,145 reviews)</span>
          </div>
        </div>

        <div class="card-info">
          <h1>HDFC Business Moneyback Credit Card</h1>
          <p class="card-tagline">Smart cashback for business expenses</p>

          <div class="key-highlights">
            <div class="highlight-item">
              <span class="highlight-label">Annual Fee</span>
              <span class="highlight-value">₹500</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Cashback Rate</span>
              <span class="highlight-value">5% Business</span>
            </div>
            <div class="highlight-item">
              <span class="highlight-label">Special Feature</span>
              <span class="highlight-value">Business GST</span>
            </div>
          </div>

          <div class="cta-buttons" role="region" aria-label="Call to action buttons">
            <a href="#apply" class="btn btn-primary">Apply Now</a>
            <button id="add-to-compare" type="button" class="btn btn-outline" aria-pressed="false" aria-label="Add HDFC Business Moneyback Credit Card to compare list">Add to Compare</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="card-features" aria-labelledby="features-title">
    <div class="container">
      <h2 id="features-title">Key Features &amp; Benefits</h2>
      <div class="features-grid">
        <article class="feature-card" role="region" aria-label="5% Business Cashback">
          <div class="feature-icon" aria-hidden="true">🏢</div>
          <h3>5% Business Cashback</h3>
          <p>5% cashback on business and professional spends</p>
        </article>

        <article class="feature-card" role="region" aria-label="GST Invoice">
          <div class="feature-icon" aria-hidden="true">📊</div>
          <h3>GST Invoice</h3>
          <p>GST compliant invoices for business expense tracking</p>
        </article>

        <article class="feature-card" role="region" aria-label="Fuel Benefits">
          <div class="feature-icon" aria-hidden="true">⛽</div>
          <h3>Fuel Benefits</h3>
          <p>2.5% cashback on fuel with 1% surcharge waiver</p>
        </article>

        <article class="feature-card" role="region" aria-label="Digital Payments">
          <div class="feature-icon" aria-hidden="true">📱</div>
          <h3>Digital Payments</h3>
          <p>Enhanced cashback on online business transactions</p>
        </article>

        <article class="feature-card" role="region" aria-label="Expense Tracking">
          <div class="feature-icon" aria-hidden="true">🔍</div>
          <h3>Expense Tracking</h3>
          <p>Detailed expense categorization for business</p>
        </article>

        <article class="feature-card" role="region" aria-label="Business Insurance">
          <div class="feature-icon" aria-hidden="true">💼</div>
          <h3>Business Insurance</h3>
          <p>Comprehensive business travel insurance coverage</p>
        </article>
      </div>
    </div>
  </section>

  <section class="rewards-breakdown" aria-labelledby="cashback-title">
    <div class="container">
      <h2 id="cashback-title">Cashback Structure</h2>

      <div class="rewards-table">
        <table role="table" aria-describedby="cashback-info">
          <thead>
            <tr>
              <th scope="col">Category</th>
              <th scope="col">Cashback Rate</th>
              <th scope="col">Monthly Cap</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Business/Professional Services</td>
              <td>5%</td>
              <td>₹500</td>
            </tr>
            <tr>
              <td>Fuel</td>
              <td>2.5%</td>
              <td>₹200</td>
            </tr>
            <tr>
              <td>Digital/Online Transactions</td>
              <td>1.5%</td>
              <td>₹150</td>
            </tr>
            <tr>
              <td>All Other Spends</td>
              <td>0.5%</td>
              <td>₹100</td>
            </tr>
          </tbody>
        </table>

        <div class="points-info" id="cashback-info">
          <p><strong>Cashback Credit:</strong> Monthly statement credit</p>
          <p><strong>Minimum Cashback:</strong> ₹99 per statement</p>
          <p><strong>Maximum Cashback:</strong> ₹950 per month</p>
        </div>
      </div>
    </div>
  </section>

  <section class="fees-charges" aria-labelledby="fees-title">
    <div class="container">
      <h2 id="fees-title">Fees &amp; Charges</h2>

      <div class="fees-grid" role="list">
        <div class="fee-item" role="listitem">
          <span class="fee-label">Annual Fee</span>
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item" role="listitem">
          <span class="fee-label">Joining Fee</span>
          <span class="fee-value">₹500</span>
        </div>
        <div class="fee-item" role="listitem">
          <span class="fee-label">Fee Waiver</span>
          <span class="fee-value"><span class="badge-success" aria-label="Fee waiver available">On ₹50,000 annual spends</span></span>
        </div>
        <div class="fee-item" role="listitem">
          <span class="fee-label">Interest Rate</span>
          <span class="fee-value">3.4% per month</span>
        </div>
        <div class="fee-item" role="listitem">
          <span class="fee-label">Cash Advance Fee</span>
          <span class="fee-value">2.5% (Min ₹300)</span>
        </div>
        <div class="fee-item" role="listitem">
          <span class="fee-label">Foreign Currency Markup</span>
          <span class="fee-value">3.5%</span>
        </div>
      </div>
    </div>
  </section>

  <section class="eligibility" aria-labelledby="eligibility-title">
    <div class="container">
      <h2 id="eligibility-title">Eligibility Criteria</h2>

      <div class="eligibility-content">
        <div class="eligibility-requirements" role="region" aria-label="Eligibility Requirements">
          <h3>Requirements</h3>
          <ul>
            <li>Age: 21-65 years</li>
            <li>Business owner or professional</li>
            <li>Minimum Income: ₹25,000 per month</li>
            <li>Business vintage: 1+ years</li>
            <li>Credit Score: 650+ (preferred)</li>
            <li>Valid business registration</li>
          </ul>
        </div>

        <div class="required-documents" role="region" aria-label="Required Documents">
          <h3>Required Documents</h3>
          <ul>
            <li>Business registration certificate</li>
            <li>GST registration (if applicable)</li>
            <li>Identity Proof (Aadhaar/PAN/Passport)</li>
            <li>Address Proof (Business &amp; Residential)</li>
            <li>Income/Business proof (ITR/P&amp;L)</li>
            <li>Bank Statements (6 months)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="pros-cons" aria-labelledby="proscons-title">
    <div class="container">
      <h2 id="proscons-title">Pros &amp; Cons</h2>

      <div class="pros-cons-grid">
        <div class="pros" role="region" aria-label="Pros">
          <h3>✅ Pros</h3>
          <ul>
            <li>Excellent business cashback (5%)</li>
            <li>GST compliant invoices</li>
            <li>Low annual fee (₹500)</li>
            <li>Good fuel cashback (2.5%)</li>
            <li>Business expense tracking</li>
            <li>Easy fee waiver</li>
            <li>Professional services focus</li>
          </ul>
        </div>

        <div class="cons" role="region" aria-label="Cons">
          <h3>❌ Cons</h3>
          <ul>
            <li>Limited to business users</li>
            <li>Monthly cashback caps</li>
            <li>No airport lounge access</li>
            <li>Basic travel benefits</li>
            <li>Lower rewards on personal spends</li>
            <li>Documentation requirements</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="application-section" id="apply" aria-labelledby="apply-title">
    <div class="container">
      <h2 id="apply-title">Apply for HDFC Business Moneyback Credit Card</h2>

      <div class="application-content">
        <aside class="application-benefits" aria-label="Who this card is perfect for">
          <h3>Perfect For</h3>
          <ul>
            <li>Business owners</li>
            <li>Professionals/consultants</li>
            <li>SME expenses</li>
            <li>GST compliance needs</li>
            <li>Business travel</li>
          </ul>
        </aside>

        <section class="application-form" aria-labelledby="application-form-title">
          <h3 id="application-form-title">Quick Application</h3>
          <form id="quick-application" novalidate>
            <div class="form-group">
              <label for="name">Business/Full Name</label>
              <input id="name" name="name" type="text" placeholder="Business/Full Name" required autocomplete="name" />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input id="email" name="email" type="email" placeholder="Email Address" required autocomplete="email" />
            </div>
            <div class="form-group">
              <label for="mobile">Mobile Number</label>
              <input id="mobile" name="mobile" type="tel" placeholder="Mobile Number" required pattern="[0-9]{10}" autocomplete="tel" />
            </div>
            <div class="form-group">
              <label for="business-type">Business Type</label>
              <select id="business-type" name="business_type" required>
                <option value="" disabled selected>Select Business Type</option>
                <option value="proprietorship">Proprietorship</option>
                <option value="partnership">Partnership</option>
                <option value="private-limited">Private Limited</option>
                <option value="professional">Professional Services</option>
              </select>
            </div>
            <div class="form-group">
              <label for="monthly-income">Monthly Business Income</label>
              <select id="monthly-income" name="monthly_income" required>
                <option value="" disabled selected>Select Monthly Business Income</option>
                <option value="25000-50000">₹25,000 - ₹50,000</option>
                <option value="50000-100000">₹50,000 - ₹1,00,000</option>
                <option value="100000-200000">₹1,00,000 - ₹2,00,000</option>
                <option value="200000+">Above ₹2,00,000</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" aria-label="Submit application form">Apply Now</button>
            <div id="form-status" role="alert" aria-live="polite" aria-atomic="true"></div>
          </form>
        </section>
      </div>
    </div>
  </section>

</main>

<script>
  // JavaScript for Add to Compare toggle button
  const addToCompareBtn = document.getElementById('add-to-compare');
  addToCompareBtn.addEventListener('click', function () {
    const pressed = this.getAttribute('aria-pressed') === 'true';
    this.setAttribute('aria-pressed', (!pressed).toString());
    this.textContent = pressed ? 'Add to Compare' : 'Remove from Compare';
    // Here you would integrate with your compare logic/session storage
  });

  // Simple form submission simulation
  document.getElementById('quick-application').addEventListener('submit', function (e) {
    e.preventDefault();
    const statusEl = document.getElementById('form-status');
    statusEl.style.color = '#000';
    statusEl.textContent = 'Submitting...';

    // Simulate successful submission after 1.2s
    setTimeout(() => {
      statusEl.style.color = '#198754';
      statusEl.textContent = 'Thank you for your application! We will contact you soon.';
      this.reset();
    }, 1200);
  });
</script>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="faq-items">
      <div class="faq-item">
        <h3 class="faq-question">How to apply for HDFC Business MoneyBack Credit Card?</h3>
        <div class="faq-answer">
          <p>You can apply online through HDFC Bank website, visit the nearest branch, or contact business banking team with required business documents and financial statements.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What is the minimum business turnover requirement?</h3>
        <div class="faq-answer">
          <p>The minimum annual business turnover requirement is ₹25,00,000 for sole proprietorships and partnerships, and ₹50,00,000 for private limited companies.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">What are the business benefits of this card?</h3>
        <div class="faq-answer">
          <p>Enjoy cashback on business expenses, fuel surcharge waiver, expense tracking tools, higher credit limits, and dedicated business support.</p>
        </div>
      </div>
      <div class="faq-item">
        <h3 class="faq-question">Is there an annual fee?</h3>
        <div class="faq-answer">
          <p>The annual fee is ₹1,500 plus taxes with waiver available on meeting annual spend criteria as mentioned in the features section.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
