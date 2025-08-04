<?php 
// SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>Privacy Policy | CardAdvisorHub</title>';
    echo '<meta name="description" content="CardAdvisorHub Privacy Policy - Learn how we collect, use, and protect your personal information when you use our credit card comparison services.">';
    echo '<meta name="robots" content="index, follow">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
    </ol>
  </div>
</nav>

<main class="privacy-policy-page">
  <section class="page-header">
    <div class="container">
      <h1>Privacy Policy</h1>
      <p class="last-updated">Last updated: August 1, 2025</p>
    </div>
  </section>

  <section class="privacy-content">
    <div class="container">
      <div class="content-wrapper">
        
        <div class="policy-section">
          <h2>1. Information We Collect</h2>
          <h3>Personal Information</h3>
          <p>When you use CardAdvisorHub, we may collect the following personal information:</p>
          <ul>
            <li>Name, email address, and contact information</li>
            <li>Financial information for credit card eligibility assessment</li>
            <li>Income details and employment information</li>
            <li>Credit score and financial history (when provided voluntarily)</li>
            <li>Device information and IP address</li>
          </ul>

          <h3>Automatically Collected Information</h3>
          <ul>
            <li>Browser type and version</li>
            <li>Operating system and device information</li>
            <li>Pages visited and time spent on our website</li>
            <li>Referring website and search terms used</li>
            <li>Cookies and similar tracking technologies</li>
          </ul>
        </div>

        <div class="policy-section">
          <h2>2. How We Use Your Information</h2>
          <p>We use your information for the following purposes:</p>
          <ul>
            <li><strong>Service Provision:</strong> To provide credit card comparisons and recommendations</li>
            <li><strong>Personalization:</strong> To customize content and recommendations based on your profile</li>
            <li><strong>Communication:</strong> To send updates, newsletters, and promotional offers</li>
            <li><strong>Analytics:</strong> To improve our website and services</li>
            <li><strong>Compliance:</strong> To meet legal and regulatory requirements</li>
            <li><strong>Security:</strong> To protect against fraud and unauthorized access</li>
          </ul>
        </div>

        <div class="policy-section">
          <h2>3. Information Sharing and Disclosure</h2>
          <h3>Third-Party Partners</h3>
          <p>We may share your information with:</p>
          <ul>
            <li><strong>Bank Partners:</strong> When you apply for credit cards through our platform</li>
            <li><strong>Service Providers:</strong> Companies that help us operate our website and services</li>
            <li><strong>Analytics Partners:</strong> To understand website usage and improve user experience</li>
            <li><strong>Legal Authorities:</strong> When required by law or to protect our rights</li>
          </ul>

          <h3>We Do Not Sell Personal Information</h3>
          <p>CardAdvisorHub does not sell, rent, or trade your personal information to third parties for marketing purposes.</p>
        </div>

        <div class="policy-section">
          <h2>4. Data Security</h2>
          <p>We implement industry-standard security measures to protect your information:</p>
          <ul>
            <li>SSL encryption for data transmission</li>
            <li>Secure servers and data storage</li>
            <li>Regular security audits and updates</li>
            <li>Access controls and employee training</li>
            <li>Monitoring for unauthorized access</li>
          </ul>
        </div>

        <div class="policy-section">
          <h2>5. Your Rights and Choices</h2>
          <h3>Access and Control</h3>
          <p>You have the right to:</p>
          <ul>
            <li><strong>Access:</strong> Request a copy of your personal information</li>
            <li><strong>Correction:</strong> Update or correct inaccurate information</li>
            <li><strong>Deletion:</strong> Request deletion of your personal information</li>
            <li><strong>Opt-out:</strong> Unsubscribe from marketing communications</li>
            <li><strong>Portability:</strong> Request your data in a portable format</li>
          </ul>

          <h3>Cookie Management</h3>
          <p>You can control cookies through your browser settings. Note that disabling cookies may affect website functionality.</p>
        </div>

        <div class="policy-section">
          <h2>6. Data Retention</h2>
          <p>We retain your personal information for as long as necessary to:</p>
          <ul>
            <li>Provide our services to you</li>
            <li>Comply with legal obligations</li>
            <li>Resolve disputes and enforce agreements</li>
            <li>Improve our services and user experience</li>
          </ul>
          <p>Typically, we retain data for 7 years or as required by applicable laws.</p>
        </div>

        <div class="policy-section">
          <h2>7. Children's Privacy</h2>
          <p>CardAdvisorHub is not intended for children under 18 years of age. We do not knowingly collect personal information from children under 18. If we become aware that we have collected such information, we will take steps to delete it promptly.</p>
        </div>

        <div class="policy-section">
          <h2>8. International Data Transfers</h2>
          <p>Your information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place to protect your information in accordance with this Privacy Policy.</p>
        </div>

        <div class="policy-section">
          <h2>9. Changes to This Policy</h2>
          <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by:</p>
          <ul>
            <li>Posting the updated policy on our website</li>
            <li>Sending email notifications to registered users</li>
            <li>Updating the "Last Updated" date at the top of this policy</li>
          </ul>
        </div>

        <div class="policy-section">
          <h2>10. Contact Us</h2>
          <p>If you have any questions about this Privacy Policy or our data practices, please contact us:</p>
          <div class="contact-info">
            <p><strong>Email:</strong> info@cardadvisorhub.com</p>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<style>
/* Privacy Policy Page Styles */
.privacy-policy-page {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  line-height: 1.6;
  color: #333;
}

.page-header {
  background: linear-gradient(135deg, #1e40af 0%, #3730a3 100%);
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

.privacy-content {
  padding: 4rem 0;
  background: #fff;
}

.content-wrapper {
  max-width: 800px;
  margin: 0 auto;
}

.policy-section {
  margin-bottom: 3rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid #e5e7eb;
}

.policy-section:last-child {
  border-bottom: none;
}

.policy-section h2 {
  color: #1e40af;
  font-size: 1.8rem;
  margin-bottom: 1rem;
  font-weight: 600;
}

.policy-section h3 {
  color: #374151;
  font-size: 1.3rem;
  margin: 1.5rem 0 0.75rem;
  font-weight: 600;
}

.policy-section p {
  margin-bottom: 1rem;
  color: #4b5563;
  line-height: 1.7;
}

.policy-section ul {
  margin: 1rem 0;
  padding-left: 1.5rem;
}

.policy-section li {
  margin-bottom: 0.5rem;
  color: #4b5563;
}

.contact-info {
  background: #f3f4f6;
  padding: 1.5rem;
  border-radius: 8px;
  border-left: 4px solid #1e40af;
}

.contact-info p {
  margin-bottom: 0.5rem;
  color: #374151;
}

.contact-info strong {
  color: #1e40af;
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
  color: #1e40af;
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
  
  .policy-section h2 {
    font-size: 1.5rem;
  }
  
  .policy-section h3 {
    font-size: 1.2rem;
  }
  
  .privacy-content {
    padding: 2rem 0;
  }
}
</style>

<?php get_footer(); ?>
