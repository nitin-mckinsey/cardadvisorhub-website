<?php
/**
 * Template Name: Credit Card Detailed Comparison
 * 
 * This page handles detailed side-by-side comparison of credit cards
 * URL structure: /compare-cards-detail/?compare=card1,card2
 */

// Get card IDs from URL parameter
$compare_cards = isset($_GET['compare']) ? explode(',', sanitize_text_field($_GET['compare'])) : [];

if (empty($compare_cards) || count($compare_cards) < 2) {
    // Redirect to main comparison page - try multiple possible URLs
    $redirect_url = home_url('/compare-cards/');
    wp_redirect($redirect_url);
    exit;
}

// Limit to maximum 4 cards for better display
$compare_cards = array_slice($compare_cards, 0, 4);

// Comprehensive card database with 70+ popular credit cards
$card_database = [
    // HDFC Bank Cards
    'hdfc-regalia' => [
        'name' => 'HDFC Bank Regalia',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹2,500',
        'joining_fee' => '₹2,500', 
        'min_income' => '₹60,000/month',
        'rating' => '4.2',
        'welcome_bonus' => '₹2,500 vouchers',
        'rewards' => 'Dining: 4X points, Travel: 4X points, Others: 2X points',
        'benefits' => ['Airport lounge access', 'Travel insurance', 'Dining privileges'],
        'best_for' => 'Travel and dining enthusiasts',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    'hdfc-millennia' => [
        'name' => 'HDFC Millennia',
        'bank' => 'HDFC Bank', 
        'annual_fee' => '₹1,000',
        'joining_fee' => '₹1,000',
        'min_income' => '₹25,000/month',
        'rating' => '4.1',
        'welcome_bonus' => '₹1,000 cashback',
        'rewards' => 'Online shopping: 5%, Mobile wallets: 2.5%, Others: 1%',
        'benefits' => ['High online shopping cashback', 'Mobile wallet benefits', 'Easy approval'],
        'best_for' => 'Online shoppers and millennials',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    'hdfc-moneyback' => [
        'name' => 'HDFC MoneyBack+',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹500',
        'joining_fee' => '₹500',
        'min_income' => '₹20,000/month',
        'rating' => '3.9',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => 'Online shopping: 5X points, Others: 2X points',
        'benefits' => ['Entry-level rewards', 'Easy approval', 'Low annual fee'],
        'best_for' => 'Students and first-time users',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    'hdfc-diners-black' => [
        'name' => 'HDFC Diners Club Black',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹10,000',
        'joining_fee' => '₹10,000',
        'min_income' => '₹2,00,000/month',
        'rating' => '4.7',
        'welcome_bonus' => '₹10,000 vouchers',
        'rewards' => 'All spends: 5X points, International: 10X points',
        'benefits' => ['Unlimited airport lounge access worldwide', 'Golf privileges', 'Travel insurance'],
        'best_for' => 'Luxury lifestyle and international travel',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    'hdfc-infinia' => [
        'name' => 'HDFC Bank Infinia',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹12,500',
        'joining_fee' => '₹12,500',
        'min_income' => '₹2,50,000/month',
        'rating' => '4.9',
        'welcome_bonus' => '₹12,500 points',
        'rewards' => 'All spends: 5X points, Travel: 10X points',
        'benefits' => ['Metal card', 'Unlimited airport lounge access', 'Priority Pass membership'],
        'best_for' => 'Ultra high net worth individuals',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    
    // SBI Cards
    'sbi-cashback' => [
        'name' => 'SBI Cashback Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => '₹999',
        'joining_fee' => '₹999',
        'min_income' => '₹20,000/month',
        'rating' => '4.3',
        'welcome_bonus' => '₹2,000 bonus points',
        'rewards' => 'Online shopping: 5% cashback, Others: 1% cashback',
        'benefits' => ['Unlimited 5% cashback online', 'No cashback cap', 'Simple reward structure'],
        'best_for' => 'Heavy online shoppers',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-cashback-credit-card.page'
    ],
    'sbi-card-prime' => [
        'name' => 'SBI Card PRIME',
        'bank' => 'SBI Card',
        'annual_fee' => '₹2,999',
        'joining_fee' => '₹2,999',
        'min_income' => '₹50,000/month',
        'rating' => '4.2',
        'welcome_bonus' => '₹3,000 vouchers',
        'rewards' => 'Dining & Movies: 5X points, Others: 2X points',
        'benefits' => ['Movie ticket offers', 'Dining privileges', 'Airport lounge access'],
        'best_for' => 'Lifestyle enthusiasts',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/lifestyle/sbi-card-prime.page'
    ],
    
    // ICICI Bank Cards
    'icici-amazon-pay' => [
        'name' => 'ICICI Amazon Pay Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => 'Lifetime Free',
        'joining_fee' => 'Nil',
        'min_income' => '₹20,000/month',
        'rating' => '4.4',
        'welcome_bonus' => '₹2,000 Amazon Pay balance',
        'rewards' => 'Amazon: 5%, Others: 1%',
        'benefits' => ['Lifetime free', 'Amazon Prime benefits', 'No hidden charges'],
        'best_for' => 'Amazon shoppers',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card/amazon-pay-credit-card'
    ],
    'icici-sapphiro' => [
        'name' => 'ICICI Bank Sapphiro',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹12,500',
        'joining_fee' => '₹12,500',
        'min_income' => '₹3,00,000/month',
        'rating' => '4.6',
        'welcome_bonus' => '₹12,500 points',
        'rewards' => 'All spends: 3X points, International: 4X points',
        'benefits' => ['Unlimited airport lounge access', 'Travel insurance up to ₹1 crore', 'Priority customer service'],
        'best_for' => 'Luxury lifestyle and travel',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],
    
    // Axis Bank Cards
    'axis-magnus' => [
        'name' => 'Axis Bank Magnus',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹12,500',
        'joining_fee' => '₹12,500',
        'min_income' => '₹1,50,000/month',
        'rating' => '4.8',
        'welcome_bonus' => '25,000 EDGE points',
        'rewards' => 'Travel & Dining: 25X points, Others: 12X points',
        'benefits' => ['Magnus Burgandy benefits', 'Golf privileges', 'Concierge services'],
        'best_for' => 'Premium travelers and lifestyle',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],
    'axis-ace' => [
        'name' => 'Axis Bank ACE',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹499',
        'joining_fee' => '₹499',
        'min_income' => '₹15,000/month',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 cashback',
        'rewards' => 'Utility bills: 5% cashback, Others: 1.5% cashback',
        'benefits' => ['High utility bill cashback', 'Google Pay integration', 'Digital first approach'],
        'best_for' => 'Utility bill payments',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],
    
    // Add all other cards from the main comparison page...
    // This is a condensed version for demonstration
    // You would continue adding all 70+ cards here
];

// Enhanced SEO functions
function get_comparison_meta_title($cards) {
    $card_names = [];
    foreach ($cards as $card_id) {
        global $card_database;
        if (isset($card_database[$card_id])) {
            $card_names[] = $card_database[$card_id]['name'];
        }
    }
    
    if (count($card_names) >= 2) {
        return implode(' vs ', array_slice($card_names, 0, 2)) . ' Credit Card Comparison 2025 | Detailed Analysis';
    }
    return 'Credit Card Comparison 2025 | Detailed Side-by-Side Analysis';
}

function get_comparison_meta_description($cards) {
    global $card_database;
    $card_names = [];
    $banks = [];
    $card_types = [];
    
    foreach ($cards as $card_id) {
        if (isset($card_database[$card_id])) {
            $card_names[] = $card_database[$card_id]['name'];
            $banks[] = $card_database[$card_id]['bank'];
        }
    }
    
    $unique_banks = array_unique($banks);
    
    if (count($card_names) >= 2) {
        return 'Compare ' . implode(' vs ', array_slice($card_names, 0, 2)) . ' credit cards. Detailed analysis of fees, rewards, benefits, eligibility. Find the best card for your needs in 2025.';
    }
    return 'Detailed credit card comparison tool. Compare fees, rewards, benefits, and eligibility criteria. Find the perfect credit card for your financial needs in 2025.';
}

// Generate SEO meta tags
add_action('wp_head', function() use ($compare_cards) {
    echo '<title>' . get_comparison_meta_title($compare_cards) . '</title>' . "\n";
    echo '<meta name="description" content="' . get_comparison_meta_description($compare_cards) . '">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
    echo '<link rel="canonical" href="' . get_permalink() . '">' . "\n";
    
    // Structured Data
    $structured_data = [
        '@context' => 'https://schema.org',
        '@type' => 'ComparisonPage',
        'name' => get_comparison_meta_title($compare_cards),
        'description' => get_comparison_meta_description($compare_cards),
        'url' => get_permalink()
    ];
    
    echo '<script type="application/ld+json">' . json_encode($structured_data, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
});

get_header(); ?>

<style>
/* Complete inline CSS for comparison page */
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    line-height: 1.6;
    color: #333;
    margin: 0;
    padding: 0;
    background: #f8f9fa;
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 1rem;
}

.page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    text-align: center;
    margin-bottom: 2rem;
}

.page-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.comparison-wrapper {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    overflow: hidden;
    margin-bottom: 2rem;
}

.comparison-table {
    width: 100%;
    border-collapse: collapse;
}

.comparison-table th {
    background: #2c3e50;
    color: white;
    padding: 1rem;
    text-align: center;
    font-weight: 600;
    border-right: 1px solid #34495e;
}

.comparison-table td {
    padding: 1.5rem 1rem;
    text-align: center;
    border-bottom: 1px solid #eee;
    border-right: 1px solid #eee;
    vertical-align: top;
}

.card-header {
    background: #f8f9fa;
    border-bottom: 2px solid #007bff;
}

.card-name {
    font-size: 1.3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 0.5rem;
}

.card-bank {
    color: #666;
    font-size: 1rem;
}

.rating {
    color: #ffc107;
    font-size: 1.2rem;
    margin-left: 0.5rem;
}

.apply-btn {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    transition: all 0.3s ease;
}

.apply-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    color: white;
    text-decoration: none;
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.benefits-list li {
    padding: 0.25rem 0;
    font-size: 0.9rem;
}

.benefits-list li:before {
    content: "✓";
    color: #28a745;
    font-weight: bold;
    margin-right: 0.5rem;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 0.75rem 0.5rem;
        font-size: 0.9rem;
    }
    
    .card-name {
        font-size: 1.1rem;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
}

.back-button {
    background: #007bff;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
}

.back-button:hover {
    background: #0056b3;
    color: white;
    text-decoration: none;
}
</style>

<main class="comparison-detail-page">
    <section class="page-header">
        <div class="container">
            <h1>Credit Card Detailed Comparison</h1>
            <p>Side-by-side analysis of your selected credit cards</p>
        </div>
    </section>

    <div class="container">
        <a href="<?php echo home_url('/compare-cards/'); ?>" class="back-button">← Back to Card Selection</a>
        
        <div class="comparison-wrapper">
            <table class="comparison-table">
                <thead>
                    <tr class="card-header">
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <th>
                                    <div class="card-name"><?php echo esc_html($card['name']); ?></div>
                                    <div class="card-bank"><?php echo esc_html($card['bank']); ?></div>
                                    <div class="rating">
                                        <span>★★★★☆</span> <?php echo esc_html($card['rating']); ?>
                                    </div>
                                </th>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Annual Fee</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['annual_fee']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Joining Fee</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['joining_fee']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Welcome Bonus</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['welcome_bonus']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Reward Structure</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['rewards']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Key Benefits</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td>
                                    <ul class="benefits-list">
                                        <?php foreach ($card['benefits'] as $benefit): ?>
                                            <li><?php echo esc_html($benefit); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Best For</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['best_for']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr>
                        <td><strong>Minimum Income</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td><?php echo esc_html($card['min_income']); ?></td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                    
                    <tr class="card-header">
                        <td><strong>Apply Now</strong></td>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; ?>
                                <td>
                                    <a href="<?php echo esc_url($card['apply_link']); ?>" target="_blank" class="apply-btn">
                                        Apply Online
                                    </a>
                                </td>
                            <?php endif;
                        endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php get_footer(); ?>
