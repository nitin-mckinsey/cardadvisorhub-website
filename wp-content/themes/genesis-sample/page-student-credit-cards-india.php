<?php 
// SEO Meta Tags for Student Credit Cards India
add_action('wp_head', function() {
    $page_title = 'Best Student Credit Cards in India 2025';
    $page_description = 'Discover the best student credit cards in India 2025 with low income requirements, no annual fee options, and cashback benefits. Compare ICICI Student, SBI Student, and other cards designed for college students.';
    
    echo '<title>' . $page_title . ' - Low Income & No Fee | CardAdvisorHub</title>';
    echo '<meta name="description" content="' . $page_description . '">';
    echo '<meta name="keywords" content="student credit cards India, college credit cards, low income credit cards, no annual fee cards, ICICI student card, SBI student card">';
    echo '<meta name="robots" content="index, follow">';
    
    // Open Graph Tags
    echo '<meta property="og:title" content="' . $page_title . ' | CardAdvisorHub">';
    echo '<meta property="og:description" content="' . $page_description . '">';
    echo '<meta property="og:type" content="article">';
    echo '<meta property="og:url" content="' . get_permalink() . '">';
    echo '<meta property="og:site_name" content="CardAdvisorHub">';
    
    // JSON-LD Schema
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $page_title,
        'description' => $page_description,
        'author' => array(
            '@type' => 'Organization',
            'name' => 'CardAdvisorHub'
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => 'CardAdvisorHub'
        ),
        'datePublished' => '2025-08-01',
        'dateModified' => '2025-08-01'
    );
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
}, 5);

get_header(); ?>

<main class="student-cards-page">
  <section class="page-hero">
    <div class="container">
      <div class="hero-content">
        <h1>Best Student Credit Cards India 2025</h1>
        <p class="hero-subtitle">Start building your credit history with student-friendly credit cards designed for college students with low income requirements and great benefits.</p>
        
        <div class="student-stats">
          <div class="stat">
            <span class="stat-number">₹0</span>
            <span class="stat-label">Annual Fee Options</span>
          </div>
          <div class="stat">
            <span class="stat-number">₹1L</span>
            <span class="stat-label">Min Income Required</span>
          </div>
          <div class="stat">
            <span class="stat-number">5%</span>
            <span class="stat-label">Cashback Available</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="best-student-cards">
    <div class="container">
      <h2>Top Student Credit Cards 2025</h2>
      
      <div class="cards-grid">
        <!-- ICICI Student Credit Card -->
        <div class="student-card-item">
          <div class="card-visual">
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjE5MCIgdmlld0JveD0iMCAwIDMwMCAxOTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxkZWZzPgo8bGluZWFyR3JhZGllbnQgaWQ9InN0dWRlbnRHcmFkaWVudCIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CjxzdG9wIG9mZnNldD0iMCUiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDk2ODg7c3RvcC1vcGFjaXR5OjEiIC8+CjxzdG9wIG9mZnNldD0iNTAlIiBzdHlsZT0ic3RvcC1jb2xvcjojMDBCQ0Q0O3N0b3Atb3BhY2l0eToxIiAvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMEU1RkY7c3RvcC1vcGFjaXR5OjEiIC8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPHJlY3Qgd2lkdGg9IjMwMCIgaGVpZ2h0PSIxOTAiIHJ4PSIxNSIgZmlsbD0idXJsKCNzdHVkZW50R3JhZGllbnQpIiBzdHJva2U9IiNDQ0MiIHN0cm9rZS13aWR0aD0iMSIvPgo8c3ZnIHg9IjIwIiB5PSIyMCIgd2lkdGg9IjgwIiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTAwIDUwIiBmaWxsPSJub25lIj4KPHJlY3Qgd2lkdGg9IjEwMCIgaGVpZ2h0PSI1MCIgZmlsbD0iIzAzNzJBQiIvPgo8dGV4dCB4PSI1MCIgeT0iMjAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZm9udC13ZWlnaHQ9ImJvbGQiIGZpbGw9IndoaXRlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5JQ0lDSTwvdGV4dD4KPHR4dCB4PSI1MCIgeT0iMzUiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkJBTks8L3RleHQ+Cjwvc3ZnPgo8dGV4dCB4PSIyMCIgeT0iODAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNiIgZm9udC13ZWlnaHQ9ImJvbGQiIGZpbGw9IndoaXRlIj5TVFVERU5UPC90ZXh0Pgo8dGV4dCB4PSIyMCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTIiIGZpbGw9IiNGNUY1RjUiPkNSRURJVCBDQVJEPC90ZXh0Pgo8c3ZnIHg9IjIwIiB5PSIxMjAiIHdpZHRoPSI0MCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDQwIDI0IiBmaWxsPSJub25lIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjI0IiByeD0iMyIgZmlsbD0iI0ZGRDcwMCIvPgo8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSI4IiBmaWxsPSIjRUIwMDFCIiBmaWxsLW9wYWNpdHk9IjAuOCIvPgo8Y2lyY2xlIGN4PSIyOCIgY3k9IjEyIiByPSI4IiBmaWxsPSIjRkY1RjAwIiBmaWxsLW9wYWNpdHk9IjAuOCIvPgo8L3N2Zz4KPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjAsIDE1NSkiPgo8cmVjdCB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIGZpbGw9IiM0NDQiLz4KPHJlY3QgeD0iMjQiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIgZmlsbD0iIzQ0NCIvPgo8cmVjdCB4PSI0OCIgd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiBmaWxsPSIjNDQ0Ii8+CjxyZWN0IHg9IjcyIiB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIGZpbGw9IiM0NDQiLz4KPC9nPgo8dGV4dCB4PSIyMzAiIHk9IjM1IiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTAiIGZpbGw9IiNBQUEiPlZBTElEIFRIUlU8L3RleHQ+Cjx0ZXh0IHg9IjIzMCIgeT0iNTAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZm9udC13ZWlnaHQ9ImJvbGQiIGZpbGw9IndoaXRlIj4xMi8yNzwvdGV4dD4KPHR4dCB4PSIyMCIgeT0iMTQwIiBmb250LWZhbWlseT0iQ291cmllciwgbW9ub3NwYWNlIiBmb250LXNpemU9IjEyIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiPjU0NjkgNTg0NiA3OTc2IDM0NTU8L3RleHQ+CjxzdmcgeD0iMjQwIiB5PSIxMzUiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDQwIDMwIiBmaWxsPSJub25lIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjMwIiBmaWxsPSIjNDQ0IiByeD0iMyIvPgo8dGV4dCB4PSIyMCIgeT0iMjAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiPk5PUFE8L3RleHQ+Cjwvc3ZnPgo8L3N2Zz4=" alt="ICICI Student Credit Card">
          </div>
          
          <div class="card-info">
            <h3>ICICI Student Credit Card</h3>
            <div class="rating">★★★★☆ 4.2/5</div>
            
            <div class="key-features">
              <div class="feature">
                <span class="feature-label">Annual Fee</span>
                <span class="feature-value">₹0 (First Year)</span>
              </div>
              <div class="feature">
                <span class="feature-label">Min Income</span>
                <span class="feature-value">₹1,00,000</span>
              </div>
            </div>
            
            <div class="student-benefits">
              <h4>Student Benefits</h4>
              <ul>
                <li>📚 5% cashback on online education purchases</li>
                <li>🍕 2% cashback on food & dining</li>
                <li>🛒 1% cashback on all other purchases</li>
                <li>💳 Easy approval for students</li>
              </ul>
            </div>
            
            <div class="card-actions">
              <a href="/icici-student" class="btn btn-primary">View Details</a>
              <a href="/compare-cards?add=icici-student" class="btn btn-outline">Compare</a>
            </div>
          </div>
        </div>

        <!-- SBI Simply Save Student -->
        <div class="student-card-item">
          <div class="card-visual">
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjE5MCIgdmlld0JveD0iMCAwIDMwMCAxOTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxkZWZzPgo8bGluZWFyR3JhZGllbnQgaWQ9InNiaVN0dWRlbnRHcmFkaWVudCIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CjxzdG9wIG9mZnNldD0iMCUiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMDc5QzI7c3RvcC1vcGFjaXR5OjEiIC8+CjxzdG9wIG9mZnNldD0iNTAlIiBzdHlsZT0ic3RvcC1jb2xvcjojMDA5N0M4O3N0b3Atb3BhY2l0eToxIiAvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0eWxlPSJzdG9wLWNvbG9yOiMwMEI1RDg7c3RvcC1vcGFjaXR5OjEiIC8+CjwvbGluZWFyR3JhZGllbnQ+CjwvZGVmcz4KPHJlY3Qgd2lkdGg9IjMwMCIgaGVpZ2h0PSIxOTAiIHJ4PSIxNSIgZmlsbD0idXJsKCNzYmlTdHVkZW50R3JhZGllbnQpIiBzdHJva2U9IiNDQ0MiIHN0cm9rZS13aWR0aD0iMSIvPgo8c3ZnIHg9IjIwIiB5PSIyMCIgd2lkdGg9IjgwIiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTAwIDUwIiBmaWxsPSJub25lIj4KPHJlY3Qgd2lkdGg9IjEwMCIgaGVpZ2h0PSI1MCIgZmlsbD0iIzAxNEE4QyIvPgo8dGV4dCB4PSI1MCIgeT0iMjAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxMiIgZm9udC13ZWlnaHQ9ImJvbGQiIGZpbGw9IndoaXRlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj5TQkk8L3RleHQ+Cjx0ZXh0IHg9IjUwIiB5PSIzNSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjEwIiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSI+Q0FSRDwvdGV4dD4KPC9zdmc+Cjx0ZXh0IHg9IjIwIiB5PSI4MCIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjE0IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiPlNJTVBMWSBTQVZFPC90ZXh0Pgo8dGV4dCB4PSIyMCIgeT0iMTAwIiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTIiIGZpbGw9IiNGNUY1RjUiPlNUVURFTlQgQ0FSRDwvdGV4dD4KPHN2ZyB4PSIyMCIgeT0iMTIwIiB3aWR0aD0iNDAiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCA0MCAyNCIgZmlsbD0ibm9uZSI+CjxyZWN0IHdpZHRoPSI0MCIgaGVpZ2h0PSIyNCIgcng9IjMiIGZpbGw9IiNGRkQ3MDAiLz4KPGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iOCIgZmlsbD0iI0VCMDAxQiIgZmlsbC1vcGFjaXR5PSIwLjgiLz4KPGNpcmNsZSBjeD0iMjgiIGN5PSIxMiIgcj0iOCIgZmlsbD0iI0ZGNUYwMCIgZmlsbC1vcGFjaXR5PSIwLjgiLz4KPC9zdmc+CjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIwLCAxNTUpIj4KPHJlY3Qgd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiBmaWxsPSIjNDQ0Ii8+CjxyZWN0IHg9IjI0IiB3aWR0aD0iMTgiIGhlaWdodD0iMTIiIGZpbGw9IiM0NDQiLz4KPHJlY3QgeD0iNDgiIHdpZHRoPSIxOCIgaGVpZ2h0PSIxMiIgZmlsbD0iIzQ0NCIvPgo8cmVjdCB4PSI3MiIgd2lkdGg9IjE4IiBoZWlnaHQ9IjEyIiBmaWxsPSIjNDQ0Ii8+CjwvZz4KPHR4dCB4PSIyMzAiIHk9IjM1IiBmb250LWZhbWlseT0iQXJpYWwsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTAiIGZpbGw9IiNBQUEiPlZBTElEIFRIUlU8L3RleHQ+Cjx0ZXh0IHg9IjIzMCIgeT0iNTAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIxNCIgZm9udC13ZWlnaHQ9ImJvbGQiIGZpbGw9IndoaXRlIj4xMi8yNzwvdGV4dD4KPHR4dCB4PSIyMCIgeT0iMTQwIiBmb250LWZhbWlseT0iQ291cmllciwgbW9ub3NwYWNlIiBmb250LXNpemU9IjEyIiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiPjUzNjkgNjg0NSA3OTc2IDQzNTU8L3RleHQ+CjxzdmcgeD0iMjQwIiB5PSIxMzUiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzMCIgdmlld0JveD0iMCAwIDQwIDMwIiBmaWxsPSJub25lIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjMwIiBmaWxsPSIjNDQ0IiByeD0iMyIvPgo8dGV4dCB4PSIyMCIgeT0iMjAiIGZvbnQtZmFtaWx5PSJBcmlhbCwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiPk5PUFE8L3RleHQ+Cjwvc3ZnPgo8L3N2Zz4=" alt="SBI Simply Save Student Credit Card">
          </div>
          
          <div class="card-info">
            <h3>SBI Simply Save Student Card</h3>
            <div class="rating">★★★★☆ 4.0/5</div>
            
            <div class="key-features">
              <div class="feature">
                <span class="feature-label">Annual Fee</span>
                <span class="feature-value">₹499</span>
              </div>
              <div class="feature">
                <span class="feature-label">Min Income</span>
                <span class="feature-value">₹1,20,000</span>
              </div>
            </div>
            
            <div class="student-benefits">
              <h4>Student Benefits</h4>
              <ul>
                <li>📱 10X rewards on online shopping</li>
                <li>⛽ 5X rewards on fuel purchases</li>
                <li>🛍️ 1X rewards on all other spends</li>
                <li>💰 Easy EMI conversion options</li>
              </ul>
            </div>
            
            <div class="card-actions">
              <a href="/sbi-simply-save" class="btn btn-primary">View Details</a>
              <a href="/compare-cards?add=sbi-simply-save" class="btn btn-outline">Compare</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="student-guide">
    <div class="container">
      <h2>Student Credit Card Guide</h2>
      
      <div class="guide-grid">
        <div class="guide-item">
          <div class="guide-icon">🎓</div>
          <h3>Eligibility Criteria</h3>
          <p>Most student cards require enrollment in a recognized college/university, minimum age of 18 years, and basic income proof from part-time jobs or family.</p>
        </div>
        
        <div class="guide-item">
          <div class="guide-icon">💰</div>
          <h3>Low Credit Limits</h3>
          <p>Student cards typically offer lower credit limits (₹10,000-₹50,000) to help students learn responsible credit usage and build credit history gradually.</p>
        </div>
        
        <div class="guide-item">
          <div class="guide-icon">📈</div>
          <h3>Build Credit Score</h3>
          <p>Starting early with a student credit card helps build a positive credit history, making it easier to get loans and premium cards in the future.</p>
        </div>
        
        <div class="guide-item">
          <div class="guide-icon">🔒</div>
          <h3>Safety Features</h3>
          <p>Student cards come with enhanced security features, spending alerts, and parental controls to ensure safe and responsible usage.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="application-tips">
    <div class="container">
      <h2>Tips for Student Credit Card Applications</h2>
      
      <div class="tips-grid">
        <div class="tip-card">
          <h3>Required Documents</h3>
          <ul>
            <li>College ID card</li>
            <li>Admission letter</li>
            <li>Aadhaar card</li>
            <li>PAN card</li>
            <li>Income proof (if any)</li>
            <li>Parent's income proof</li>
          </ul>
        </div>
        
        <div class="tip-card">
          <h3>Application Process</h3>
          <ul>
            <li>Start with your primary bank</li>
            <li>Apply online for faster processing</li>
            <li>Keep documents ready</li>
            <li>Maintain good bank account history</li>
            <li>Consider co-applicant options</li>
          </ul>
        </div>
        
        <div class="tip-card">
          <h3>Best Practices</h3>
          <ul>
            <li>Pay bills on time</li>
            <li>Keep credit utilization low</li>
            <li>Track spending regularly</li>
            <li>Don't apply for multiple cards</li>
            <li>Read terms and conditions</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="container">
      <div class="cta-content">
        <h2>Start Your Credit Journey Today</h2>
        <p>Compare student credit cards and choose the one that best fits your college lifestyle and spending needs.</p>
        <div class="cta-buttons">
          <a href="/compare-cards?category=student" class="btn btn-primary btn-large">Compare Student Cards</a>
          <a href="/card-finder" class="btn btn-outline btn-large">Find My Card</a>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
.student-cards-page {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
}

.page-hero {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 100px 0;
  text-align: center;
}

.page-hero h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.hero-subtitle {
  font-size: 1.25rem;
  margin-bottom: 40px;
  opacity: 0.9;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.student-stats {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin-top: 40px;
}

.stat {
  text-align: center;
}

.stat-number {
  display: block;
  font-size: 2rem;
  font-weight: 700;
  color: #FFD700;
}

.stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
}

.best-student-cards {
  padding: 80px 0;
  background: #f8f9fa;
}

.best-student-cards h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 50px;
  color: #2c3e50;
}

.cards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
}

.student-card-item {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.student-card-item:hover {
  transform: translateY(-5px);
}

.card-visual img {
  width: 100%;
  max-width: 300px;
  height: auto;
  border-radius: 15px;
  margin-bottom: 20px;
}

.card-info h3 {
  font-size: 1.5rem;
  color: #2c3e50;
  margin-bottom: 10px;
}

.rating {
  color: #f39c12;
  margin-bottom: 20px;
}

.key-features {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
  margin-bottom: 25px;
}

.feature {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  background: #f8f9fa;
  border-radius: 8px;
}

.feature-label {
  font-weight: 500;
  color: #666;
}

.feature-value {
  font-weight: 700;
  color: #2c3e50;
}

.student-benefits {
  margin-bottom: 25px;
}

.student-benefits h4 {
  color: #2c3e50;
  margin-bottom: 15px;
}

.student-benefits ul {
  list-style: none;
  padding: 0;
}

.student-benefits li {
  padding: 8px 0;
  border-bottom: 1px solid #eee;
}

.card-actions {
  display: flex;
  gap: 15px;
}

.btn {
  padding: 12px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 500;
  transition: all 0.3s ease;
}

.btn-primary {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  border: none;
}

.btn-outline {
  background: transparent;
  color: #667eea;
  border: 2px solid #667eea;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.student-guide, .application-tips {
  padding: 80px 0;
}

.student-guide h2, .application-tips h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 50px;
  color: #2c3e50;
}

.guide-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.guide-item {
  text-align: center;
  padding: 30px 20px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.guide-icon {
  font-size: 3rem;
  margin-bottom: 20px;
}

.guide-item h3 {
  color: #2c3e50;
  margin-bottom: 15px;
}

.tips-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.tip-card {
  background: white;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.tip-card h3 {
  color: #2c3e50;
  margin-bottom: 20px;
  font-size: 1.3rem;
}

.tip-card ul {
  list-style: none;
  padding: 0;
}

.tip-card li {
  padding: 8px 0;
  border-bottom: 1px solid #eee;
  position: relative;
  padding-left: 20px;
}

.tip-card li:before {
  content: "✓";
  position: absolute;
  left: 0;
  color: #27ae60;
  font-weight: bold;
}

.application-tips {
  background: #f8f9fa;
}

.cta-section {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 80px 0;
  text-align: center;
}

.cta-content h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.cta-content p {
  font-size: 1.25rem;
  margin-bottom: 40px;
  opacity: 0.9;
}

.cta-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.btn-large {
  padding: 15px 35px;
  font-size: 1.1rem;
}

@media (max-width: 768px) {
  .page-hero h1 {
    font-size: 2rem;
  }
  
  .student-stats {
    flex-direction: column;
    gap: 20px;
  }
  
  .cards-grid, .tips-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .key-features {
    grid-template-columns: 1fr;
  }
  
  .card-actions, .cta-buttons {
    flex-direction: column;
    align-items: center;
  }
}
</style>

<?php get_footer(); ?>
