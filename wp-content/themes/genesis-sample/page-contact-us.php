<?php 
// SEO Meta Tags
add_action('wp_head', function() {
    echo '<title>Contact Us | CardAdvisorHub</title>';
    echo '<meta name="description" content="Contact CardAdvisorHub - Get in touch with our team for questions about credit cards, partnerships, or general inquiries. We\'re here to help!">';
    echo '<meta name="robots" content="index, follow">';
});

get_header(); ?>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
  </div>
</nav>

<main class="contact-page">
  <section class="page-header">
    <div class="container">
      <h1>Contact Us</h1>
      <p class="header-subtitle">We're here to help you find the perfect credit card</p>
    </div>
  </section>

  <section class="contact-content">
    <div class="container">
      
      <!-- Contact Form Section -->
      <div class="contact-section">
        <div class="section-grid">
          <div class="form-section">
            <h2>Send Us a Message</h2>
            <form class="contact-form" id="contactForm">
              <div class="form-row">
                <div class="form-group">
                  <label for="firstName">First Name *</label>
                  <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name *</label>
                  <input type="text" id="lastName" name="lastName" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
              </div>
              
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
              </div>
              
              <div class="form-group">
                <label for="subject">Subject *</label>
                <select id="subject" name="subject" required>
                  <option value="">Select a topic</option>
                  <option value="general">General Inquiry</option>
                  <option value="card-recommendation">Credit Card Recommendation</option>
                  <option value="technical-issue">Technical Issue</option>
                  <option value="partnership">Partnership Opportunity</option>
                  <option value="press">Press & Media</option>
                  <option value="feedback">Feedback & Suggestions</option>
                  <option value="other">Other</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="6" required placeholder="Please provide details about your inquiry..."></textarea>
              </div>
              
              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" id="newsletter" name="newsletter">
                  <span class="checkmark"></span>
                  Subscribe to our newsletter for credit card updates and tips
                </label>
              </div>
              
              <div class="form-group checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" id="privacy" name="privacy" required>
                  <span class="checkmark"></span>
                  I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a> and <a href="/terms-conditions" target="_blank">Terms of Service</a> *
                </label>
              </div>
              
              <button type="submit" class="submit-btn">Send Message</button>
            </form>
          </div>
          
          <div class="info-section">
            <h2>Get in Touch</h2>
            <p>Have questions about credit cards or our platform? Our team is here to help you make informed financial decisions.</p>
            
            <div class="contact-methods">
              <div class="contact-method">
                <div class="method-icon">📧</div>
                <div class="method-content">
                  <h3>Email Us</h3>
                  <p>info@cardadvisorhub.com</p>
                  <small>We typically respond within 24 hours</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ Section -->
      <div class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-grid">
          <div class="faq-item">
            <h3>How do I choose the right credit card?</h3>
            <p>Use our comparison tools to filter cards based on your spending patterns, income, and preferences. Our recommendation engine will suggest the best options for your needs.</p>
          </div>
          
          <div class="faq-item">
            <h3>Is it safe to apply through your platform?</h3>
            <p>Yes, absolutely. We use secure SSL encryption and redirect you directly to the bank's official application pages. We never store your financial information.</p>
          </div>
          
          <div class="faq-item">
            <h3>Do you charge any fees?</h3>
            <p>No, our service is completely free for users. We earn commission from partner banks when you successfully apply for cards, but this doesn't affect our recommendations.</p>
          </div>
          
          <div class="faq-item">
            <h3>How often is your information updated?</h3>
            <p>We update our database regularly to ensure accuracy. Card terms, offers, and benefits are reviewed and updated at least weekly or when changes are announced.</p>
          </div>
          
          <div class="faq-item">
            <h3>Can you guarantee credit card approval?</h3>
            <p>No, we cannot guarantee approval as it depends on the bank's criteria and your creditworthiness. However, we provide eligibility indicators to help you choose suitable cards.</p>
          </div>
          
          <div class="faq-item">
            <h3>How do I update my information?</h3>
            <p>Contact us with your updated details, and we'll help you modify your profile and preferences for better recommendations.</p>
          </div>
        </div>
      </div>

      <!-- Business Hours Section -->
      <div class="hours-section">
        <h2>Business Hours</h2>
        <div class="hours-grid">
          <div class="hours-item">
            <h3>Customer Support</h3>
            <ul>
              <li><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM IST</li>
              <li><strong>Saturday:</strong> 10:00 AM - 4:00 PM IST</li>
              <li><strong>Sunday:</strong> Closed</li>
            </ul>
          </div>
          
          <div class="hours-item">
            <h3>Partnership Inquiries</h3>
            <ul>
              <li><strong>Monday - Friday:</strong> 9:00 AM - 5:00 PM IST</li>
              <li><strong>Weekend:</strong> By appointment only</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>

<style>
/* Contact Page Styles */
.contact-page {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  line-height: 1.6;
  color: #333;
}

.page-header {
  background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
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

.contact-content {
  padding: 4rem 0;
}

.contact-section {
  margin-bottom: 4rem;
}

.section-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  align-items: start;
}

.form-section h2,
.info-section h2 {
  color: #7c3aed;
  font-size: 2rem;
  margin-bottom: 1.5rem;
  font-weight: 600;
}

/* Contact Form Styles */
.contact-form {
  background: white;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #374151;
  font-weight: 600;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 0.75rem;
  border: 2px solid #e5e7eb;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #7c3aed;
  box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.checkbox-group {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 0.5rem;
  cursor: pointer;
  font-size: 0.9rem;
  line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
  width: auto;
  margin: 0;
}

.checkbox-label a {
  color: #7c3aed;
  text-decoration: none;
}

.checkbox-label a:hover {
  text-decoration: underline;
}

.submit-btn {
  background: #7c3aed;
  color: white;
  padding: 1rem 2rem;
  border: none;
  border-radius: 6px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
  width: 100%;
}

.submit-btn:hover {
  background: #5b21b6;
}

/* Info Section Styles */
.info-section p {
  color: #6b7280;
  margin-bottom: 2rem;
  line-height: 1.7;
}

.contact-methods {
  space-y: 1.5rem;
}

.contact-method {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  padding: 1.5rem;
  background: #f8f9fa;
  border-radius: 8px;
  margin-bottom: 1.5rem;
}

.method-icon {
  font-size: 2rem;
  flex-shrink: 0;
}

.method-content h3 {
  color: #374151;
  margin-bottom: 0.5rem;
  font-size: 1.1rem;
  font-weight: 600;
}

.method-content p {
  color: #7c3aed;
  margin-bottom: 0.25rem;
  font-weight: 600;
}

.method-content small {
  color: #6b7280;
  font-size: 0.85rem;
}

/* FAQ Section */
.faq-section {
  margin-bottom: 4rem;
}

.faq-section h2 {
  color: #7c3aed;
  font-size: 2rem;
  margin-bottom: 2rem;
  text-align: center;
  font-weight: 600;
}

.faq-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2rem;
}

.faq-item {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  border-left: 4px solid #7c3aed;
}

.faq-item h3 {
  color: #374151;
  margin-bottom: 1rem;
  font-size: 1.1rem;
  font-weight: 600;
}

.faq-item p {
  color: #6b7280;
  margin: 0;
  line-height: 1.6;
}

/* Business Hours Section */
.hours-section h2 {
  color: #7c3aed;
  font-size: 2rem;
  margin-bottom: 2rem;
  text-align: center;
  font-weight: 600;
}

.hours-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.hours-item {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  text-align: center;
}

.hours-item h3 {
  color: #374151;
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
}

.hours-item ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.hours-item li {
  color: #6b7280;
  margin-bottom: 0.5rem;
  line-height: 1.6;
}

.hours-item strong {
  color: #374151;
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
  color: #7c3aed;
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
  
  .section-grid {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .form-row {
    grid-template-columns: 1fr;
  }
  
  .contact-form {
    padding: 1.5rem;
  }
  
  .faq-grid,
  .hours-grid {
    grid-template-columns: 1fr;
  }
  
  .contact-method {
    flex-direction: column;
    text-align: center;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simple form validation
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        const privacy = document.getElementById('privacy').checked;
        
        if (!firstName || !lastName || !email || !subject || !message || !privacy) {
            alert('Please fill in all required fields and accept the privacy policy.');
            return;
        }
        
        // Simulate form submission
        const submitBtn = document.querySelector('.submit-btn');
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            alert('Thank you for your message! We\'ll get back to you within 24 hours.');
            form.reset();
            submitBtn.textContent = 'Send Message';
            submitBtn.disabled = false;
        }, 2000);
    });
});
</script>

<?php get_footer(); ?>
