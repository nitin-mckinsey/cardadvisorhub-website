<?php
/**
 * Template Name: SBI Cashback Credit Card
 */

get_header(); ?>

<style>
/* Credit Card Detail Page Styles */
.card-detail-page {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: #333;
}

.card-hero {
    background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
    margin-bottom: 3rem;
}

.card-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.card-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto 2rem;
}

.card-image-hero {
    width: 300px;
    height: 190px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(255,255,255,0.2);
    margin-bottom: 2rem;
}

.rating-hero {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.rating-hero .stars {
    color: #ffc107;
    margin-right: 10px;
}

.apply-button-hero {
    background: #28a745;
    color: white;
    padding: 15px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 30px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.apply-button-hero:hover {
    background: #218838;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.3);
    color: white;
    text-decoration: none;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.card-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    margin-bottom: 3rem;
}

.card-main-content {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.card-sidebar {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    height: fit-content;
}

.fee-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    text-align: center;
}

.fee-amount {
    font-size: 2rem;
    font-weight: 700;
    color: #2E7D32;
    margin-bottom: 0.5rem;
}

.fee-label {
    color: #666;
    font-size: 0.9rem;
}

.benefits-list {
    list-style: none;
    padding: 0;
}

.benefits-list li {
    padding: 0.8rem 0;
    border-bottom: 1px solid #eee;
    position: relative;
    padding-left: 30px;
}

.benefits-list li:before {
    content: "✓";
    color: #28a745;
    font-weight: bold;
    position: absolute;
    left: 0;
    font-size: 1.2rem;
}

.rewards-section {
    background: #E8F5E8;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 2rem 0;
    border-left: 4px solid #4CAF50;
}

.section-title {
    color: #2c3e50;
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.breadcrumb-nav {
    background: white;
    padding: 1rem 0;
    border-bottom: 1px solid #eee;
    margin-bottom: 0;
}

.breadcrumb {
    list-style: none;
    display: flex;
    gap: 10px;
    margin: 0;
    padding: 0;
    font-size: 0.9rem;
}

.breadcrumb li a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb li a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .card-details-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .card-hero h1 {
        font-size: 2rem;
    }
    
    .card-image-hero {
        width: 250px;
        height: 158px;
    }
}
</style>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li style="color: #6c757d;">›</li>
            <li><a href="<?php echo home_url('/compare-cards/'); ?>">Credit Cards</a></li>
            <li style="color: #6c757d;">›</li>
            <li style="color: #6c757d;">SBI Cashback Credit Card</li>
        </ol>
    </div>
</nav>

<div class="card-detail-page">
    <!-- Hero Section -->
    <section class="card-hero">
        <div class="container">
            <?php
            $card_slug = 'sbi-cashback';
            $uploads = home_url('/wp-content/uploads/card-images/');
            $img_exts = array('jpg', 'png', 'webp');
            $card_img = '';
            foreach ($img_exts as $ext) {
                $try = ABSPATH . 'wp-content/uploads/card-images/' . $card_slug . '.' . $ext;
                if (file_exists($try)) {
                    $card_img = $uploads . $card_slug . '.' . $ext;
                    break;
                }
            }
            if (!$card_img) {
                $card_img = $uploads . 'default-card.jpg';
            }
            ?>
            <img src="<?php echo esc_url($card_img); ?>" class="card-image-hero" alt="SBI Cashback Credit Card" onerror="this.onerror=null;this.src='<?php echo $uploads . 'default-card.jpg'; ?>';">
            
            <h1>SBI Cashback Credit Card</h1>
            <p>Unlimited 5% cashback on online shopping with no cashback cap</p>
            
            <div class="rating-hero">
                <span class="stars">★★★★☆</span>
                <span>4.3/5 Rating</span>
            </div>
            
            <a href="https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-cashback-credit-card.page" 
               target="_blank" 
               class="apply-button-hero">
                Apply Now - Get Instant Approval
            </a>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container">
        <div class="card-details-grid">
            <div class="card-main-content">
                <h2 class="section-title">Card Overview</h2>
                <p>The SBI Cashback Credit Card is perfect for heavy online shoppers who want unlimited cashback rewards. With 5% cashback on online shopping and 1% on all other transactions, this card offers one of the highest cashback rates in India with no capping.</p>
                <p><strong>Best For:</strong> Heavy online shoppers</p>
                
                <div class="rewards-section">
                    <h3 class="section-title">Cashback Structure</h3>
                    <ul>
                        <li><strong>5% Cashback</strong> on online shopping (no cap)</li>
                        <li><strong>1% Cashback</strong> on all other transactions</li>
                        <li><strong>No minimum redemption</strong> threshold</li>
                        <li><strong>Cashback credited</strong> to your statement automatically</li>
                    </ul>
                </div>
                
                <h3 class="section-title">Key Benefits</h3>
                <ul class="benefits-list">
                    <li>Unlimited 5% cashback on online shopping</li>
                    <li>No cashback cap or restrictions</li>
                    <li>Simple reward structure</li>
                    <li>Fuel surcharge waiver at BPCL petrol pumps</li>
                    <li>1% cashback on all offline transactions</li>
                    <li>Contactless payment support</li>
                </ul>
                
                <h3 class="section-title">Who Should Apply?</h3>
                <p>This card is perfect for individuals who frequently shop online and want maximum cashback without any complications. Ideal for e-commerce enthusiasts, digital natives, and anyone who prefers cashback over reward points.</p>
                
                <h3 class="section-title">Eligibility Criteria</h3>
                <ul class="benefits-list">
                    <li>Minimum age: 21 years</li>
                    <li>Minimum income: ₹25,000 per month</li>
                    <li>Good credit score (750+)</li>
                    <li>Valid income proof required</li>
                </ul>
            </div>
            
            <div class="card-sidebar">
                <div class="fee-card">
                    <div class="fee-amount">₹999</div>
                    <div class="fee-label">Annual Fee</div>
                </div>
                
                <div class="fee-card">
                    <div class="fee-amount">₹999</div>
                    <div class="fee-label">Joining Fee</div>
                </div>
                
                <div class="fee-card">
                    <div class="fee-amount">₹2,000</div>
                    <div class="fee-label">Welcome Bonus Points</div>
                </div>
                
                <div class="fee-card">
                    <div class="fee-amount" style="font-size: 1.5rem;">★★★★☆</div>
                    <div class="fee-amount" style="font-size: 1.2rem; margin-top: -10px;">4.3/5</div>
                    <div class="fee-label">User Rating</div>
                </div>
                
                <a href="https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-cashback-credit-card.page" 
                   target="_blank" 
                   class="apply-button-hero" 
                   style="width: 100%; text-align: center; margin-top: 2rem;">
                    Apply Now
                </a>
                
                <div style="margin-top: 2rem; text-align: center;">
                    <a href="<?php echo home_url('/compare-cards/'); ?>" 
                       style="color: #007bff; text-decoration: none;">
                        ← Compare with Other Cards
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
