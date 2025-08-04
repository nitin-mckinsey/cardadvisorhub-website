<?php 
// SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>Disclaimer | CardAdvisorHub</title>';
    echo '<meta name="description" content="CardAdvisorHub Disclaimer - Important information about our credit card recommendations, affiliate relationships, and limitations of our services.">';
    echo '<meta name="robots" content="index, follow">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
    </ol>
  </div>
</nav>

<main class="disclaimer-page">
  <section class="page-header">
    <div class="container">
      <h1>Disclaimer</h1>
      <p class="last-updated">Last updated: August 1, 2025</p>
    </div>
  </section>

  <section class="disclaimer-content">
    <div class="container">
      <div class="content-wrapper">
        
        <div class="disclaimer-section">
          <h2>General Information</h2>
          <p>The information provided on CardAdvisorHub is for general informational and educational purposes only. While we strive to provide accurate and up-to-date information about credit cards, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information contained on this website.</p>
        </div>

        <div class="disclaimer-section">
          <h2>Not Financial Advice</h2>
          <p><strong>Important:</strong> The content on CardAdvisorHub does not constitute financial, legal, or professional advice. We are not financial advisors, and our recommendations should not be considered as personalized financial advice. You should:</p>
          <ul>
            <li>Consult with qualified financial advisors before making financial decisions</li>
            <li>Carefully review all terms and conditions of credit card offers</li>
            <li>Consider your personal financial situation and goals</li>
            <li>Understand the risks associated with credit card usage</li>
          </ul>
        </div>

        <div class="disclaimer-section">
          <h2>Affiliate Relationships</h2>
          <h3>Compensation Disclosure</h3>
          <p>CardAdvisorHub participates in affiliate marketing programs and may receive compensation when you apply for or are approved for credit cards through our platform. This compensation may influence:</p>
          <ul>
            <li>The order in which credit cards are displayed</li>
            <li>The prominence given to certain offers</li>
            <li>The frequency of updates for specific cards</li>
          </ul>

          <h3>Editorial Independence</h3>
          <p>Despite our affiliate relationships, we maintain editorial independence and strive to provide honest, unbiased reviews and comparisons. Our recommendations are based on thorough research and analysis of card features, benefits, and value propositions.</p>
        </div>

        <div class="disclaimer-section">
          <h2>Accuracy of Information</h2>
          <h3>Regular Updates</h3>
          <p>Credit card terms, benefits, fees, and offers change frequently. While we make reasonable efforts to keep our information current, we cannot guarantee that all information is completely up-to-date at all times.</p>

          <h3>Third-Party Information</h3>
          <p>Much of our information is sourced from credit card issuers, banks, and other third parties. We are not responsible for errors or omissions in third-party information or for changes made by issuers after publication.</p>
        </div>

        <div class="disclaimer-section">
          <h2>Credit Card Applications</h2>
          <h3>Approval Not Guaranteed</h3>
          <p>Clicking on credit card offers or applying through our platform does not guarantee approval. Credit card approval depends on various factors including:</p>
          <ul>
            <li>Credit score and credit history</li>
            <li>Income and employment status</li>
            <li>Debt-to-income ratio</li>
            <li>Issuer-specific criteria</li>
          </ul>

          <h3>Terms May Vary</h3>
          <p>The terms offered to you may differ from those displayed on our website based on your creditworthiness and the issuer's current policies.</p>
        </div>

        <div class="disclaimer-section">
          <h2>Credit Score Impact</h2>
          <p><strong>Important Notice:</strong> Applying for credit cards may result in hard inquiries on your credit report, which can temporarily lower your credit score. Consider the following:</p>
          <ul>
            <li>Multiple applications in a short period may significantly impact your score</li>
            <li>Each issuer has different approval criteria and inquiry policies</li>
            <li>Pre-qualification tools may use soft inquiries that don't affect your score</li>
            <li>Monitor your credit report regularly for accuracy</li>
          </ul>
        </div>

        <div class="disclaimer-section">
          <h2>External Links</h2>
          <p>Our website contains links to external websites and services. We are not responsible for:</p>
          <ul>
            <li>The content, privacy policies, or practices of linked sites</li>
            <li>The availability or functionality of external websites</li>
            <li>Any damages or losses caused by reliance on external content</li>
            <li>Security of transactions conducted on third-party sites</li>
          </ul>
        </div>

        <div class="disclaimer-section">
          <h2>Limitation of Liability</h2>
          <p>To the fullest extent permitted by law, CardAdvisorHub disclaims all liability for any direct, indirect, incidental, consequential, or punitive damages arising from:</p>
          <ul>
            <li>Use of or inability to use our website or services</li>
            <li>Reliance on information provided on our platform</li>
            <li>Credit card application decisions or outcomes</li>
            <li>Changes in credit card terms or availability</li>
            <li>Technical issues or website downtime</li>
          </ul>
        </div>

        <div class="disclaimer-section">
          <h2>Regional Variations</h2>
          <p>Credit card offers and availability may vary by region, state, or city. Some offers may not be available in all areas or to all applicants. Local laws and regulations may also affect credit card terms and our ability to provide certain services.</p>
        </div>

        <div class="disclaimer-section">
          <h2>Regular Review</h2>
          <p>We recommend that you:</p>
          <ul>
            <li>Regularly review your credit card statements and accounts</li>
            <li>Stay informed about changes in credit card terms</li>
            <li>Monitor your credit score and report</li>
            <li>Contact issuers directly for the most current information</li>
            <li>Seek professional advice for complex financial decisions</li>
          </ul>
        </div>

        <div class="disclaimer-section">
          <h2>Contact for Clarifications</h2>
          <p>If you have questions about any information on our website or need clarification about our disclaimers, please contact us:</p>
          <div class="contact-info">
            <p><strong>Email:</strong> info@cardadvisorhub.com</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<style>
/* Disclaimer Page Styles */
.disclaimer-page {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  line-height: 1.6;
  color: #333;
}

.page-header {
  background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
  color: white;
  padding: 3rem 0;
  text-align: center;
}

.page-header h1 {
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
  font-weight: 700;
}

.last-updated {
  font-size: 1rem;
  opacity: 0.9;
  margin: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

.disclaimer-content {
  padding: 4rem 0;
  background: #fff;
}

.content-wrapper {
  max-width: 800px;
  margin: 0 auto;
}

.disclaimer-section {
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #e5e7eb;
}

.disclaimer-section:last-child {
  border-bottom: none;
}

.disclaimer-section h2 {
  color: #f59e0b;
  font-size: 1.8rem;
  margin-bottom: 1rem;
  font-weight: 600;
}

.disclaimer-section h3 {
  color: #374151;
  font-size: 1.3rem;
  margin: 1.5rem 0 0.75rem;
  font-weight: 600;
}

.disclaimer-section p {
  margin-bottom: 1rem;
  color: #4b5563;
  line-height: 1.7;
}

.disclaimer-section ul {
  margin: 1rem 0;
  padding-left: 1.5rem;
}

.disclaimer-section li {
  margin-bottom: 0.5rem;
  color: #4b5563;
}

.disclaimer-section strong {
  color: #dc2626;
  font-weight: 600;
}

.contact-info {
  background: #fffbeb;
  padding: 1.5rem;
  border-radius: 8px;
  border-left: 4px solid #f59e0b;
}

.contact-info p {
  margin-bottom: 0.5rem;
  color: #374151;
}

.contact-info strong {
  color: #f59e0b;
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
  color: #f59e0b;
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
  
  .disclaimer-section h2 {
    font-size: 1.5rem;
  }
  
  .disclaimer-section h3 {
    font-size: 1.2rem;
  }
  
  .disclaimer-content {
    padding: 2rem 0;
  }
}
</style>

<?php get_footer(); ?>
