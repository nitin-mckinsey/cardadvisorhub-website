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
        'description' => 'Premium travel and dining card',
        'cibil_score' => '750+',
        'international_usage' => 'Yes',
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
        'description' => 'Millennial-focused cashback card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
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
        'description' => 'Entry-level cashback and rewards card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
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
        'description' => 'Ultra-premium global travel card',
        'cibil_score' => '750+',
        'international_usage' => 'Yes',
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
        'description' => 'Flagship metal card for HNIs',
        'cibil_score' => '760+',
        'international_usage' => 'Yes',
        'min_income' => '₹2,50,000/month',
        'rating' => '4.9',
        'welcome_bonus' => '₹12,500 points',
        'rewards' => 'All spends: 5X points, Travel: 10X points',
        'benefits' => ['Metal card', 'Unlimited airport lounge access', 'Priority Pass membership'],
        'best_for' => 'Ultra high net worth individuals',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    'hdfc-times-titanium' => [
        'name' => 'HDFC Times Titanium',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹4,000',
        'joining_fee' => '₹4,000',
        'min_income' => '₹75,000/month',
        'rating' => '4.3',
        'welcome_bonus' => '₹4,000 Times Points',
        'rewards' => 'Times Network: 10X points, Travel & Dining: 5X points, Others: 2X points',
        'benefits' => ['Times Network exclusive benefits', 'Airport lounge access', 'Movie tickets at discounted rates', 'Times Prime membership'],
        'best_for' => 'Entertainment and lifestyle enthusiasts',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],
    
    // SBI Cards
    'sbi-cashback' => [
        'name' => 'SBI Cashback Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => '₹999',
        'joining_fee' => '₹999',
        'description' => 'Unlimited cashback on online spends',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
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
        'description' => 'Premium lifestyle and rewards card',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
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
        'description' => 'Lifetime free card for Amazon users',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'min_income' => '₹20,000/month',
        'rating' => '4.4',
        'welcome_bonus' => '₹2,000 Amazon Pay balance',
        'rewards' => 'Amazon: 5%, Others: 1%',
        'benefits' => ['Lifetime free', 'Amazon Prime benefits', 'No hidden charges'],
        'best_for' => 'Amazon shoppers',
        'apply_link' => 'https://www.amazon.in/l/15390355031'
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
        'description' => 'Premium travel and lifestyle card',
        'cibil_score' => '750+',
        'international_usage' => 'Yes',
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
        'description' => 'Cashback card for utility and daily spends',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'min_income' => '₹15,000/month',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 cashback',
        'rewards' => 'Utility bills: 5% cashback, Others: 1.5% cashback',
        'benefits' => ['High utility bill cashback', 'Google Pay integration', 'Digital first approach'],
        'best_for' => 'Utility bill payments',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    // SBI Cards
    'sbi-simply-save' => [
        'name' => 'SBI Simply Save',
        'bank' => 'SBI Card',
        'annual_fee' => '₹499',
        'joining_fee' => '₹499',
        'description' => 'No annual fee with fuel benefits',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.8',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '5X points on fuel & grocery',
        'benefits' => ['Fuel surcharge waiver', 'Grocery rewards', 'Easy approval'],
        'best_for' => 'Fuel & grocery shopping',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/shopping/sbi-simply-save-credit-card.page'
    ],

    'sbi-elite' => [
        'name' => 'SBI Card ELITE',
        'bank' => 'SBI Card',
        'annual_fee' => '₹4,999',
        'description' => 'Travel and lifestyle rewards',
        'rating' => '4.3',
        'welcome_bonus' => '₹5,000 vouchers',
        'rewards' => '5X points on travel & dining',
        'benefits' => ['Airport lounge access', 'Travel insurance', 'Golf privileges'],
        'best_for' => 'Travel enthusiasts',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/travel/sbi-card-elite.page'
    ],

    'sbi-aurum' => [
        'name' => 'SBI Card AURUM',
        'bank' => 'SBI Card',
        'annual_fee' => '₹4,999',
        'description' => 'Premium travel and lifestyle',
        'rating' => '4.4',
        'welcome_bonus' => '₹5,000 vouchers',
        'rewards' => '5X points on travel & dining',
        'benefits' => ['Premium lounge access', 'Travel concierge', 'Insurance coverage'],
        'best_for' => 'Premium travelers',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/travel/sbi-card-aurum.page'
    ],

    'sbi-bpcl' => [
        'name' => 'SBI BPCL Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => '₹499',
        'description' => 'Fuel rewards specialist',
        'rating' => '4.1',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '25X points on BPCL fuel',
        'benefits' => ['Fuel surcharge waiver', 'BPCL discounts', 'Easy fuel transactions'],
        'best_for' => 'Heavy fuel users',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/fuel/sbi-bpcl-credit-card.page'
    ],

    'sbi-iocl' => [
        'name' => 'SBI IOCL Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => '₹499',
        'description' => 'Indian Oil fuel rewards',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '25X points on IOCL fuel',
        'benefits' => ['Fuel surcharge waiver', 'IOCL station benefits', 'Reward points'],
        'best_for' => 'Indian Oil users',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/fuel/sbi-iocl-credit-card.page'
    ],

    'sbi-air-india' => [
        'name' => 'SBI Air India Signature',
        'bank' => 'SBI Card',
        'annual_fee' => '₹4,999',
        'description' => 'Air India miles and benefits',
        'rating' => '4.2',
        'welcome_bonus' => '5,000 Air India miles',
        'rewards' => '4X miles on Air India bookings',
        'benefits' => ['Free Air India tickets', 'Lounge access', 'Priority check-in'],
        'best_for' => 'Air India frequent flyers',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/travel/sbi-air-india-signature-credit-card.page'
    ],

    'sbi-ola' => [
        'name' => 'SBI Card Ola',
        'bank' => 'SBI Card',
        'annual_fee' => '₹499',
        'description' => 'Mobility and fuel rewards',
        'rating' => '3.9',
        'welcome_bonus' => '₹500 Ola Money',
        'rewards' => '5% cashback on Ola & fuel',
        'benefits' => ['Ola ride discounts', 'Fuel benefits', 'Urban mobility focus'],
        'best_for' => 'Urban commuters',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/co-brand/sbi-card-ola.page'
    ],

    'sbi-flipkart' => [
        'name' => 'SBI Flipkart Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => '₹499',
        'description' => 'E-commerce shopping rewards',
        'rating' => '4.1',
        'welcome_bonus' => '₹500 Flipkart voucher',
        'rewards' => '5% cashback on Flipkart',
        'benefits' => ['Flipkart exclusive offers', 'No cost EMI', 'Priority customer support'],
        'best_for' => 'Flipkart shoppers',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/co-brand/sbi-flipkart-credit-card.page'
    ],

    'sbi-student-plus' => [
        'name' => 'SBI Student Plus Credit Card',
        'bank' => 'SBI Card',
        'annual_fee' => 'Lifetime Free',
        'description' => 'Student-friendly features',
        'rating' => '3.7',
        'welcome_bonus' => '₹250 voucher',
        'rewards' => '5X points on online shopping',
        'benefits' => ['No income proof required', 'Student-friendly approval', 'Online shopping rewards'],
        'best_for' => 'Students & first-time users',
        'apply_link' => 'https://www.sbicard.com/en/personal/credit-cards/lifestyle/sbi-student-plus-advantage-credit-card.page'
    ],

    // ICICI Bank Cards
    'icici-emeralde' => [
        'name' => 'ICICI Bank Emeralde',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹12,000',
        'description' => 'Private banking premium card',
        'rating' => '4.8',
        'welcome_bonus' => '₹12,000 points',
        'rewards' => '4X points on all spends',
        'benefits' => ['Unlimited airport lounge access', 'Golf privileges', 'Concierge services'],
        'best_for' => 'Ultra high net worth',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-platinum' => [
        'name' => 'ICICI Bank Platinum',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹499',
        'description' => 'Everyday rewards and benefits',
        'rating' => '3.8',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '2X points on all spends',
        'benefits' => ['Contactless payments', 'Reward points', 'Easy approval'],
        'best_for' => 'Regular spenders',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-student' => [
        'name' => 'ICICI Bank Student',
        'bank' => 'ICICI Bank',
        'annual_fee' => 'Lifetime Free',
        'description' => 'First credit card for students',
        'rating' => '3.6',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '2X points on online shopping',
        'benefits' => ['No income proof required', 'Student-friendly features', 'Digital banking'],
        'best_for' => 'Students',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card/student-credit-card'
    ],

    'icici-coral' => [
        'name' => 'ICICI Bank Coral Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹500',
        'joining_fee' => '₹500',
        'description' => 'Contactless rewards card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.9',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '2X points on dining & movies',
        'benefits' => ['Contactless payments', 'Entertainment rewards', 'Easy transactions'],
        'best_for' => 'Entertainment lovers',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-air-india' => [
        'name' => 'ICICI Air India Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹4,999',
        'joining_fee' => '₹4,999',
        'description' => 'Air India co-branded benefits',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.1',
        'welcome_bonus' => '5,000 Air India miles',
        'rewards' => '4X miles on Air India',
        'benefits' => ['Free Air India tickets', 'Lounge access', 'Priority services'],
        'best_for' => 'Air India travelers',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-make-my-trip' => [
        'name' => 'ICICI MakeMyTrip Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹1,999',
        'description' => 'Travel booking rewards',
        'rating' => '4.0',
        'welcome_bonus' => '₹2,000 MMT voucher',
        'rewards' => '4X points on MakeMyTrip',
        'benefits' => ['MMT exclusive offers', 'Travel insurance', 'Booking discounts'],
        'best_for' => 'Online travel bookers',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-manchester-united' => [
        'name' => 'ICICI Manchester United Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹3,999',
        'description' => 'Football fan exclusive benefits',
        'rating' => '4.2',
        'welcome_bonus' => '₹4,000 points',
        'rewards' => '5X points on dining & entertainment',
        'benefits' => ['Manchester United merchandise', 'Exclusive events access', 'Sports rewards'],
        'best_for' => 'Football enthusiasts',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-hpcl' => [
        'name' => 'ICICI HPCL Super Saver',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹500',
        'description' => 'Fuel savings specialist',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '5% cashback on HPCL',
        'benefits' => ['Fuel surcharge waiver', 'HPCL station benefits', 'Easy fuel payments'],
        'best_for' => 'HPCL fuel users',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    'icici-payback' => [
        'name' => 'ICICI PAYBACK Credit Card',
        'bank' => 'ICICI Bank',
        'annual_fee' => '₹500',
        'description' => 'Multi-brand rewards program',
        'rating' => '3.8',
        'welcome_bonus' => '₹500 PAYBACK points',
        'rewards' => '4X PAYBACK points',
        'benefits' => ['Multi-brand rewards', 'PAYBACK partner benefits', 'Easy redemption'],
        'best_for' => 'Multi-brand shoppers',
        'apply_link' => 'https://www.icicibank.com/personal-banking/cards/credit-card'
    ],

    // More Axis Bank Cards
    'axis-privilege' => [
        'name' => 'Axis Bank Privilege',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹1,500',
        'joining_fee' => '₹1,500',
        'description' => 'Premium rewards and benefits',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '4.1',
        'welcome_bonus' => '₹1,500 vouchers',
        'rewards' => '10X points on dining',
        'benefits' => ['Airport lounge access', 'Dining privileges', 'Travel insurance'],
        'best_for' => 'Dining enthusiasts',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-myzone' => [
        'name' => 'Axis Bank MY ZONE',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹500',
        'joining_fee' => '₹500',
        'description' => 'Lifestyle and entertainment card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.7',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '4X points on fuel & movies',
        'benefits' => ['Movie ticket discounts', 'Fuel benefits', 'Youth-focused features'],
        'best_for' => 'Young professionals',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'flipkart-axis' => [
        'name' => 'Flipkart Axis Bank Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹500',
        'description' => 'Flipkart shopping rewards',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 Flipkart voucher',
        'rewards' => '5% cashback on Flipkart',
        'benefits' => ['Flipkart exclusive offers', 'No cost EMI', 'Priority delivery'],
        'best_for' => 'Flipkart shoppers',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card/flipkart-axis-bank-credit-card'
    ],

    'axis-neo' => [
        'name' => 'Axis Bank Neo Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹250',
        'description' => 'Entry-level rewards card',
        'rating' => '3.6',
        'welcome_bonus' => '₹250 voucher',
        'rewards' => '2X points on all spends',
        'benefits' => ['Low annual fee', 'Easy approval', 'Basic rewards'],
        'best_for' => 'Students & new users',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-reserve' => [
        'name' => 'Axis Bank Reserve Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹50,000',
        'description' => 'Ultra-premium travel card',
        'rating' => '4.9',
        'welcome_bonus' => '₹50,000 EDGE points',
        'rewards' => '25X points on all spends',
        'benefits' => ['Unlimited airport lounge access', 'Golf privileges', 'Concierge services'],
        'best_for' => 'Ultra luxury segment',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-vistara' => [
        'name' => 'Axis Bank Vistara Credit Card',
        'bank' => 'Axis Bank',  
        'annual_fee' => '₹3,500',
        'description' => 'Vistara airline benefits',
        'rating' => '4.3',
        'welcome_bonus' => '3,500 CV Points',
        'rewards' => '6X CV Points on Vistara',
        'benefits' => ['Free Vistara tickets', 'Priority boarding', 'Lounge access'],
        'best_for' => 'Vistara frequent flyers',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-iocl' => [
        'name' => 'Axis Bank IOCL Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹500',
        'description' => 'Indian Oil fuel rewards',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '4% cashback on IOCL fuel',
        'benefits' => ['Fuel surcharge waiver', 'IOCL station benefits', 'Easy fuel payments'],
        'best_for' => 'Indian Oil customers',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-burgundy' => [
        'name' => 'Axis Burgundy Private Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹11,000',
        'description' => 'Private banking exclusive',
        'rating' => '4.7',
        'welcome_bonus' => '₹11,000 EDGE points',
        'rewards' => '25X points on travel',
        'benefits' => ['Private banking privileges', 'Golf access', 'Premium concierge'],
        'best_for' => 'Private banking clients',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-freecharge' => [
        'name' => 'Axis Bank Freecharge Plus',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹500',
        'description' => 'Digital payments rewards',
        'rating' => '3.7',
        'welcome_bonus' => '₹500 Freecharge cashback',
        'rewards' => '5% cashback on mobile recharges',
        'benefits' => ['Digital payment benefits', 'Mobile recharge rewards', 'Easy transactions'],
        'best_for' => 'Digital payment users',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    'axis-ola' => [
        'name' => 'Axis Bank Ola Credit Card',
        'bank' => 'Axis Bank',
        'annual_fee' => '₹500',
        'description' => 'Ride and travel rewards',
        'rating' => '3.9',
        'welcome_bonus' => '₹500 Ola Money',
        'rewards' => '7% cashback on Ola rides',
        'benefits' => ['Ola ride discounts', 'Travel benefits', 'Urban mobility focus'],
        'best_for' => 'Frequent commuters',
        'apply_link' => 'https://www.axisbank.com/retail/cards/credit-card'
    ],

    // Kotak Bank Cards
    'kotak-811' => [
        'name' => 'Kotak 811 #Dream Different',
        'bank' => 'Kotak Bank',
        'annual_fee' => '₹500',
        'description' => 'Digital-first credit card',
        'rating' => '3.7',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '4X points on online shopping',
        'benefits' => ['Digital banking', 'Online shopping rewards', 'Easy approval'],
        'best_for' => 'Digital natives',
        'apply_link' => 'https://www.kotak.com/en/personal-banking/cards/credit-cards.html'
    ],

    'kotak-platinum' => [
        'name' => 'Kotak Platinum Credit Card',
        'bank' => 'Kotak Bank',
        'annual_fee' => '₹1,999',
        'description' => 'Premium lifestyle benefits',
        'rating' => '3.9',
        'welcome_bonus' => '₹2,000 vouchers',
        'rewards' => '4X points on dining & fuel',
        'benefits' => ['Airport lounge access', 'Dining privileges', 'Travel insurance'],
        'best_for' => 'Premium lifestyle',
        'apply_link' => 'https://www.kotak.com/en/personal-banking/cards/credit-cards.html'
    ],

    'kotak-white' => [
        'name' => 'Kotak White Credit Card',
        'bank' => 'Kotak Bank',
        'annual_fee' => '₹999',
        'description' => 'Premium lifestyle benefits',
        'rating' => '3.8',
        'welcome_bonus' => '₹1,000 vouchers',
        'rewards' => '4X points on dining & fuel',
        'benefits' => ['Lifestyle rewards', 'Dining benefits', 'Travel perks'],
        'best_for' => 'Lifestyle enthusiasts',
        'apply_link' => 'https://www.kotak.com/en/personal-banking/cards/credit-cards.html'
    ],

    'kotak-myntra' => [
        'name' => 'Kotak Myntra Credit Card',
        'bank' => 'Kotak Bank',
        'annual_fee' => 'Lifetime Free',
        'description' => 'Fashion shopping rewards',
        'rating' => '4.1',
        'welcome_bonus' => '₹500 Myntra voucher',
        'rewards' => '5% cashback on Myntra',
        'benefits' => ['Myntra exclusive offers', 'Fashion discounts', 'No annual fee'],
        'best_for' => 'Fashion shoppers',
        'apply_link' => 'https://www.kotak.com/en/personal-banking/cards/credit-cards.html'
    ],

    // HDFC Bank Additional Cards
    'hdfc-freedom' => [
        'name' => 'HDFC Freedom Credit Card',
        'bank' => 'HDFC Bank',
        'annual_fee' => 'Lifetime Free',
        'description' => 'No annual fee with rewards',
        'rating' => '3.8',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '2X points on all spends',
        'benefits' => ['Lifetime free', 'No hidden charges', 'Easy approval'],
        'best_for' => 'First-time users',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-swiggy' => [
        'name' => 'HDFC Swiggy Credit Card',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹500',
        'description' => 'Food delivery and dining rewards',
        'rating' => '4.2',
        'welcome_bonus' => '₹500 Swiggy voucher',
        'rewards' => '10% cashback on Swiggy',
        'benefits' => ['Swiggy exclusive offers', 'Dining rewards', 'Free delivery'],
        'best_for' => 'Food enthusiasts',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-jet-airways' => [
        'name' => 'HDFC JetPrivilege',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹2,500',
        'description' => 'Airline miles and travel benefits',
        'rating' => '4.0',
        'welcome_bonus' => '2,500 JPMiles',
        'rewards' => '4X miles on Jet Airways',
        'benefits' => ['Free air tickets', 'Priority check-in', 'Lounge access'],
        'best_for' => 'Frequent flyers',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-business-moneyback' => [
        'name' => 'HDFC Business MoneyBack',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹1,000',
        'description' => 'Business expenses rewards',
        'rating' => '3.9',
        'welcome_bonus' => '₹1,000 cashback',
        'rewards' => '5X points on business spends',
        'benefits' => ['Business category rewards', 'Expense management', 'Easy approvals'],
        'best_for' => 'Business owners',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-dcb' => [
        'name' => 'HDFC Diners Club Black Metal',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹10,000',
        'description' => 'Ultra-luxury metal card',
        'rating' => '4.8',
        'welcome_bonus' => '₹10,000 points',
        'rewards' => '5X points on all spends',
        'benefits' => ['Metal card', 'Unlimited lounge access', 'Golf privileges'],
        'best_for' => 'Ultra high net worth',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-iocl' => [
        'name' => 'HDFC Indian Oil Credit Card',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹500',
        'description' => 'Indian Oil fuel benefits',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '5% cashback on IOCL fuel',
        'benefits' => ['Fuel surcharge waiver', 'IOCL station benefits', 'Easy fuel payments'],
        'best_for' => 'Indian Oil customers',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    'hdfc-bhp' => [
        'name' => 'HDFC Bharat Petroleum Credit Card',
        'bank' => 'HDFC Bank',
        'annual_fee' => '₹500',
        'description' => 'BPCL fuel rewards',
        'rating' => '4.1',
        'welcome_bonus' => '₹500 fuel voucher',
        'rewards' => '7X points on BPCL fuel',
        'benefits' => ['BPCL fuel benefits', 'Surcharge waiver', 'Easy transactions'],
        'best_for' => 'BPCL customers',
        'apply_link' => 'https://leads.hdfcbank.com/applications/new_webforms/apply/mobile/Credit-Card/Credit-Card.aspx'
    ],

    // American Express Cards
    'amex-gold' => [
        'name' => 'American Express Gold Card',
        'bank' => 'American Express',
        'annual_fee' => '₹4,500',
        'joining_fee' => '₹4,500',
        'description' => 'Premium rewards and travel',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.5',
        'welcome_bonus' => '₹4,500 points',
        'rewards' => '4X points on dining & travel',
        'benefits' => ['Global acceptance', 'Travel insurance', 'Concierge services'],
        'best_for' => 'Premium travelers',
        'apply_link' => 'https://www.americanexpress.com/in/'
    ],

    'amex-smartearn' => [
        'name' => 'American Express SmartEarn',
        'bank' => 'American Express',
        'annual_fee' => '₹1,499',
        'joining_fee' => '₹1,499',
        'description' => 'Cashback focused card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '4.2',
        'welcome_bonus' => '₹1,500 cashback',
        'rewards' => '5% cashback on utilities',
        'benefits' => ['High cashback rates', 'Utility bill benefits', 'Global acceptance'],
        'best_for' => 'Cashback seekers',
        'apply_link' => 'https://www.americanexpress.com/in/'
    ],

    'amex-mrcc' => [
        'name' => 'American Express MRCC',
        'bank' => 'American Express',
        'annual_fee' => '₹1,500',
        'description' => 'Membership Rewards Credit Card',
        'rating' => '4.3',
        'welcome_bonus' => '₹1,500 points',
        'rewards' => '4X points on dining',
        'benefits' => ['Flexible rewards', 'Transfer partners', 'Global acceptance'],
        'best_for' => 'Rewards collectors',
        'apply_link' => 'https://www.americanexpress.com/in/'
    ],

    'amex-platinum-travel' => [
        'name' => 'American Express Platinum Travel',
        'bank' => 'American Express',
        'annual_fee' => '₹60,000',
        'joining_fee' => '₹60,000',
        'description' => 'Ultra-premium travel benefits',
        'cibil_score' => '760+',
        'international_usage' => 'Yes',
        'rating' => '4.8',
        'welcome_bonus' => '₹30,000 points',
        'rewards' => '5X points on flights & hotels',
        'benefits' => ['Unlimited airport lounge access', 'Hotel status', 'Travel credits'],
        'best_for' => 'Luxury travelers',
        'apply_link' => 'https://www.americanexpress.com/in/'
    ],

    // YES Bank Cards
    'yes-first-exclusive' => [
        'name' => 'YES FIRST Exclusive',
        'bank' => 'YES Bank',
        'annual_fee' => '₹2,999',
        'joining_fee' => '₹2,999',
        'description' => 'Premium benefits and rewards',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.1',
        'welcome_bonus' => '₹2,999 vouchers',
        'rewards' => '6X points on dining & fuel',
        'benefits' => ['Airport lounge access', 'Dining privileges', 'Travel insurance'],
        'best_for' => 'Dining enthusiasts',
        'apply_link' => 'https://www.yesbank.in/personal-banking/cards/credit-card'
    ],

    // IndusInd Bank Cards
    'indusind-legend' => [
        'name' => 'IndusInd Legend Credit Card',
        'bank' => 'IndusInd Bank',
        'annual_fee' => '₹15,000',
        'joining_fee' => '₹15,000',
        'description' => 'Ultra-premium metal card',
        'cibil_score' => '760+',
        'international_usage' => 'Yes',
        'rating' => '4.9',
        'welcome_bonus' => '₹15,000 points',
        'rewards' => 'Unlimited points on all spends',
        'benefits' => ['Metal card', 'Unlimited airport lounge access', 'Golf privileges'],
        'best_for' => 'Ultra high net worth',
        'apply_link' => 'https://www.indusind.com/in/en/personal/cards/credit-card.html'
    ],

    'indusind-pinnacle' => [
        'name' => 'IndusInd Pinnacle Credit Card',
        'bank' => 'IndusInd Bank',
        'annual_fee' => '₹3,000',
        'joining_fee' => '₹3,000',
        'description' => 'Premium rewards and benefits',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.3',
        'welcome_bonus' => '₹3,000 points',
        'rewards' => '4X points on dining & travel',
        'benefits' => ['Airport lounge access', 'Dining privileges', 'Travel rewards'],
        'best_for' => 'Premium lifestyle',
        'apply_link' => 'https://www.indusind.com/in/en/personal/cards/credit-card.html'
    ],

    // Standard Chartered Cards
    'sc-manhattan' => [
        'name' => 'Standard Chartered Manhattan',
        'bank' => 'Standard Chartered',
        'annual_fee' => '₹1,999',
        'joining_fee' => '₹1,999',
        'description' => 'Premium travel and lifestyle',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.1',
        'welcome_bonus' => '₹2,000 vouchers',
        'rewards' => '5X points on dining & fuel',
        'benefits' => ['Airport lounge access', 'Travel insurance', 'Dining rewards'],
        'best_for' => 'Travel enthusiasts',
        'apply_link' => 'https://www.sc.com/in/credit-cards/'
    ],

    // Bank of Baroda Cards
    'bob-premier' => [
        'name' => 'Bank of Baroda Premier',
        'bank' => 'Bank of Baroda',
        'annual_fee' => '₹1,499',
        'description' => 'Premium rewards program',
        'rating' => '3.8',
        'welcome_bonus' => '₹1,500 points',
        'rewards' => '4X points on fuel & dining',
        'benefits' => ['Fuel benefits', 'Dining privileges', 'Travel insurance'],
        'best_for' => 'Regular premium users',
        'apply_link' => 'https://www.bankofbaroda.in/personal-banking/cards/credit-cards'
    ],

    // RBL Bank Cards
    'rbl-shoprite' => [
        'name' => 'RBL ShopRite Credit Card',
        'bank' => 'RBL Bank',
        'annual_fee' => '₹750',
        'joining_fee' => '₹750',
        'description' => 'Shopping rewards specialist',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.7',
        'welcome_bonus' => '₹750 voucher',
        'rewards' => '5% cashback on shopping',
        'benefits' => ['Shopping rewards', 'Online discounts', 'Easy approval'],
        'best_for' => 'Shopping enthusiasts',
        'apply_link' => 'https://www.rblbank.com/cards/credit-cards'
    ],

    'rbl-moneyback' => [
        'name' => 'RBL Bank MoneyBack+',
        'bank' => 'RBL Bank',
        'annual_fee' => '₹999',
        'joining_fee' => '₹999',
        'description' => 'High cashback on categories',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.9',
        'welcome_bonus' => '₹1,000 cashback',
        'rewards' => '5% cashback on utilities',
        'benefits' => ['High cashback rates', 'Utility bill benefits', 'Flexible rewards'],
        'best_for' => 'Bill payment users',
        'apply_link' => 'https://www.rblbank.com/cards/credit-cards'
    ],

    // PNB Cards
    'pnb-select' => [
        'name' => 'PNB Select Credit Card',
        'bank' => 'Punjab National Bank',
        'annual_fee' => '₹1,200',
        'joining_fee' => '₹1,200',
        'description' => 'Premium banking benefits',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.6',
        'welcome_bonus' => '₹1,200 points',
        'rewards' => '3X points on all spends',
        'benefits' => ['Banking privileges', 'Reward points', 'Easy transactions'],
        'best_for' => 'Banking customers',
        'apply_link' => 'https://www.pnbcards.com/'
    ],

    // Citi Bank Cards
    'citi-rewards' => [
        'name' => 'Citi Rewards Credit Card',
        'bank' => 'Citi Bank',
        'annual_fee' => '₹1,000',
        'joining_fee' => '₹1,000',
        'description' => 'Travel and lifestyle rewards',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '4.0',
        'welcome_bonus' => '₹1,000 points',
        'rewards' => '4X points on dining & fuel',
        'benefits' => ['Travel rewards', 'Dining benefits', 'Global acceptance'],
        'best_for' => 'Travel and dining',
        'apply_link' => 'https://www.online.citibank.co.in/products-services/credit-cards/'
    ],

    'citi-prestige' => [
        'name' => 'Citi Prestige Credit Card',
        'bank' => 'Citi Bank',
        'annual_fee' => '₹20,000',
        'joining_fee' => '₹20,000',
        'description' => 'Ultra-premium travel benefits',
        'cibil_score' => '760+',
        'international_usage' => 'Yes',
        'rating' => '4.8',
        'welcome_bonus' => '₹20,000 points',
        'rewards' => '5X points on all spends',
        'benefits' => ['Unlimited airport lounge access', 'Golf access', 'Concierge services'],
        'best_for' => 'Ultra luxury lifestyle',
        'apply_link' => 'https://www.online.citibank.co.in/products-services/credit-cards/'
    ],

    // Federal Bank Cards
    'federal-signet' => [
        'name' => 'Federal Bank Signet Credit Card',
        'bank' => 'Federal Bank',
        'annual_fee' => '₹1,999',
        'joining_fee' => '₹1,999',
        'description' => 'Premium rewards program',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.9',
        'welcome_bonus' => '₹2,000 points',
        'rewards' => '4X points on dining & fuel',
        'benefits' => ['Premium rewards', 'Travel benefits', 'Dining privileges'],
        'best_for' => 'Premium users',
        'apply_link' => 'https://www.federalbank.co.in/credit-card'
    ],

    'federal-primo' => [
        'name' => 'Federal Bank Primo Credit Card',
        'bank' => 'Federal Bank',
        'annual_fee' => '₹499',
        'joining_fee' => '₹499',
        'description' => 'Entry-level rewards card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.7',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '2X points on all spends',
        'benefits' => ['Entry-level rewards', 'Easy approval', 'Basic benefits'],
        'best_for' => 'First-time users',
        'apply_link' => 'https://www.federalbank.co.in/credit-card'
    ],

    // IDBI Bank Cards
    'idbi-iocl' => [
        'name' => 'IDBI IOCL Credit Card',
        'bank' => 'IDBI Bank',
        'annual_fee' => '₹199',
        'joining_fee' => '₹199',
        'description' => 'Indian Oil fuel benefits',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.5',
        'welcome_bonus' => '₹200 fuel voucher',
        'rewards' => '2.5% cashback on IOCL',
        'benefits' => ['Low annual fee', 'Fuel benefits', 'Basic rewards'],
        'best_for' => 'Budget fuel users',
        'apply_link' => 'https://www.idbibank.in/credit-cards.aspx'
    ],

    'idbi-insignia' => [
        'name' => 'IDBI Insignia Credit Card',
        'bank' => 'IDBI Bank',
        'annual_fee' => '₹1,500',
        'joining_fee' => '₹1,500',
        'description' => 'Premium lifestyle card',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '3.8',
        'welcome_bonus' => '₹1,500 points',
        'rewards' => '3X points on all spends',
        'benefits' => ['Premium features', 'Lifestyle benefits', 'Travel rewards'],
        'best_for' => 'Premium banking',
        'apply_link' => 'https://www.idbibank.in/credit-cards.aspx'
    ],

    // Union Bank Cards
    'union-iocl' => [
        'name' => 'Union Bank IOCL Credit Card',
        'bank' => 'Union Bank',
        'annual_fee' => '₹300',
        'joining_fee' => '₹300',
        'description' => 'Fuel savings card',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '3.4',
        'welcome_bonus' => '₹300 fuel voucher',
        'rewards' => '2% cashback on IOCL',
        'benefits' => ['Budget-friendly', 'Fuel benefits', 'Easy approval'],
        'best_for' => 'Budget conscious users',
        'apply_link' => 'https://www.unionbankofindia.co.in/english/credit-card.aspx'
    ],

    // AU Small Finance Bank Cards
    'au-altura' => [
        'name' => 'AU Bank Altura Credit Card',
        'bank' => 'AU Small Finance Bank',
        'annual_fee' => '₹499',
        'joining_fee' => '₹499',
        'description' => 'High cashback rewards',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 cashback',
        'rewards' => '5% cashback on utilities',
        'benefits' => ['High cashback rates', 'Utility benefits', 'Easy approval'],
        'best_for' => 'Utility bill payments',
        'apply_link' => 'https://www.aubank.in/credit-card'
    ],

    'au-zenith' => [
        'name' => 'AU Bank Zenith Credit Card',
        'bank' => 'AU Small Finance Bank',
        'annual_fee' => '₹1,999',
        'joining_fee' => '₹1,999',
        'description' => 'Premium travel benefits',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.2',
        'welcome_bonus' => '₹2,000 points',
        'rewards' => '4X points on travel & dining',
        'benefits' => ['Airport lounge access', 'Travel insurance', 'Premium rewards'],
        'best_for' => 'Travel enthusiasts',
        'apply_link' => 'https://www.aubank.in/credit-card'
    ],

    // IDFC First Bank Cards
    'idfc-first-classic' => [
        'name' => 'IDFC FIRST Classic Credit Card',
        'bank' => 'IDFC FIRST Bank',
        'annual_fee' => 'Lifetime Free',
        'joining_fee' => '0',
        'description' => 'Lifetime free with benefits',
        'cibil_score' => '700+',
        'international_usage' => 'Yes',
        'rating' => '4.0',
        'welcome_bonus' => '₹500 voucher',
        'rewards' => '6X points on fuel & groceries',
        'benefits' => ['Lifetime free', 'Fuel benefits', 'Grocery rewards'],
        'best_for' => 'Everyday spenders',
        'apply_link' => 'https://www.idfcfirstbank.com/credit-card'
    ],

    'idfc-first-select' => [
        'name' => 'IDFC FIRST Select Credit Card',
        'bank' => 'IDFC FIRST Bank',
        'annual_fee' => '₹499',
        'joining_fee' => '₹499',
        'description' => 'Premium benefits package',
        'cibil_score' => '720+',
        'international_usage' => 'Yes',
        'rating' => '4.3',
        'welcome_bonus' => '₹2,000 welcome points',
        'rewards' => '10X points on dining',
        'benefits' => ['High dining rewards', 'Travel benefits', 'Premium features'],
        'best_for' => 'Dining enthusiasts',
        'apply_link' => 'https://www.idfcfirstbank.com/credit-card'
    ],

    'idfc-first-wealth' => [
        'name' => 'IDFC FIRST Wealth Credit Card',
        'bank' => 'IDFC FIRST Bank',
        'annual_fee' => '₹10,000',
        'joining_fee' => '₹10,000',
        'description' => 'Ultra-premium wealth card',
        'cibil_score' => '760+',
        'international_usage' => 'Yes',
        'rating' => '4.6',
        'welcome_bonus' => '₹10,000 points',
        'rewards' => '12X points on travel',
        'benefits' => ['Unlimited airport lounge access', 'Golf privileges', 'Concierge services'],
        'best_for' => 'High net worth individuals',
        'apply_link' => 'https://www.idfcfirstbank.com/credit-card'
    ]
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
    table-layout: fixed;
}

.comparison-table th {
    background: #2c3e50;
    color: white;
    padding: 1rem;
    text-align: center;
    font-weight: 600;
    border-right: 1px solid #34495e;
}

.comparison-table th:first-child {
    background: #34495e;
    text-align: left;
    width: 200px;
}

.comparison-table td {
    padding: 1.5rem 1rem;
    text-align: center;
    border-bottom: 1px solid #eee;
    border-right: 1px solid #eee;
    vertical-align: top;
}

.comparison-table td:first-child {
    background: #f8f9fa;
    font-weight: 600;
    text-align: left;
    color: #2c3e50;
}

.card-header {
    background: #f8f9fa;
    border-bottom: 2px solid #007bff;
}

.apply-row {
    background: #f8f9fa;
    border-top: 2px solid #28a745;
}

.apply-row td {
    padding: 2rem 1rem;
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
    
    .comparison-table {
        font-size: 0.85rem;
        table-layout: auto;
    }
    
    .comparison-table th,
    .comparison-table td {
        padding: 0.75rem 0.5rem;
        font-size: 0.85rem;
    }
    
    .comparison-table th:first-child,
    .comparison-table td:first-child {
        width: 120px;
        font-size: 0.8rem;
    }
    
    .card-name {
        font-size: 1rem;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .apply-btn {
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
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
        <style>
        .comparison-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        .comparison-table th, .comparison-table td {
            padding: 18px 10px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
        }
        .comparison-table th {
            background: #f7f7f7;
            font-size: 15px;
            font-weight: 600;
            color: #222;
        }
        .comparison-table .card-header {
            background: #f7f7f7;
        }
        .comparison-table .card-image {
            width: 120px;
            height: 75px;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            margin-bottom: 8px;
        }
        .comparison-table .card-name {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 2px;
        }
        .comparison-table .card-bank {
            font-size: 12px;
            color: #888;
            margin-bottom: 2px;
        }
        .comparison-table .rating {
            font-size: 12px;
            color: #ffc107;
        }
        .comparison-table .apply-btn {
            display: inline-block;
            background: #dc143c;
            color: #fff;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
        }
        .comparison-table .apply-btn:hover {
            background: #a80c2a;
        }
        @media (max-width: 900px) {
            .comparison-table th, .comparison-table td {
                padding: 10px 4px;
                font-size: 13px;
            }
            .comparison-table .card-image {
                width: 80px;
                height: 50px;
            }
        }
        @media (max-width: 600px) {
            .comparison-table {
                font-size: 12px;
            }
            .comparison-table th, .comparison-table td {
                padding: 6px 2px;
            }
        }
        </style>
        <div class="comparison-wrapper" style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
            <table class="comparison-table">
                <thead>
                    <tr class="card-header">
                        <th style="width: 140px; background: #fff; border-bottom: none;"></th>
                        <?php foreach ($compare_cards as $card_id): 
                            if (isset($card_database[$card_id])):
                                $card = $card_database[$card_id]; 
                                $img_exts = array('.webp', '.jpg', '.png', '.jpeg', '.JPG', '.PNG', '.WEBP');
                                $img_candidates = array();
                                foreach ($img_exts as $ext) {
                                    $img_candidates[] = $card_id . $ext;
                                    $img_candidates[] = strtolower($card_id) . $ext;
                                    $img_candidates[] = strtoupper($card_id) . $ext;
                                    $img_candidates[] = ucfirst($card_id) . $ext;
                                    // Special case for icici-amazon-pay: also try icici-amazon-pay.jpg and icici-amazon-pay.png
                                    if ($card_id === 'icici-amazon-pay') {
                                        $img_candidates[] = 'icici-amazon-pay.jpg';
                                        $img_candidates[] = 'icici-amazon-pay.png';
                                    }
                                }
                                if ($card_id === 'hdfc-regalia') {
                                    $img_candidates = array_merge($img_candidates, array(
                                        'HDFC-Regalia-Gold.jpg',
                                        'HDFC-Regalia-Gold-card-only.jpg',
                                        'HDFC-Regalia-Gold-original-backup.jpg',
                                        'hdfc-regalia-fallback.jpg',
                                        'hdfc-regalia.jpg',
                                        'HDFC-Regalia.jpg',
                                        'hdfc_regalia.jpg',
                                        'HDFC_Regalia.jpg'
                                    ));
                                }
                                $card_image = '';
                                $theme_dir = 'https://cardadvisorhub.com/wp-content/themes/genesis-sample/images/cards/';
                                $uploads_dir = home_url('/wp-content/uploads/card-images/');
                                $found = false;
                                if ($card_id === 'hdfc-regalia') {
                                    $regalia_theme_files = array(
                                        'HDFC-Regalia-Gold.jpg',
                                        'HDFC-Regalia-Gold-card-only.jpg',
                                        'HDFC-Regalia-Gold-original-backup.jpg',
                                        'hdfc-regalia-fallback.jpg'
                                    );
                                    foreach ($regalia_theme_files as $img_file) {
                                        $theme_url = $theme_dir . $img_file;
                                        $card_image = $theme_url;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found) {
                                    foreach ($img_candidates as $img_file) {
                                        $uploads_url = $uploads_dir . $img_file;
                                        $card_image = $uploads_url;
                                        $found = true;
                                        break;
                                    }
                                }
                                if (!$found || !$card_image) {
                                    $card_image = home_url('/wp-content/uploads/card-images/default-card.jpg');
                                }
                                $card_page_url = home_url("/credit-cards/{$card_id}/");
                        ?>
                        <th style="background: #fff; border-bottom: none;">
                            <!-- card_id: <?php echo $card_id; ?>, chosen_img_file: <?php echo isset($img_file) ? $img_file : 'N/A'; ?>, card_image_url: <?php echo esc_url($card_image); ?> -->
                            <div class="card-image-container">
                                <?php
                                // Special case: icici-amazon-pay card page URL
                                $card_page_url_final = $card_page_url;
                                if ($card_id === 'icici-amazon-pay') {
                                    $card_page_url_final = home_url('/icici-amazon-pay-credit-card/');
                                }
                                ?>
                                <a href="<?php echo esc_url($card_page_url_final); ?>" class="card-link">
                                    <img src="<?php echo esc_url($card_image); ?>" 
                                         alt="<?php echo esc_attr($card['name']); ?>" 
                                         class="card-image"
                                         onerror="this.onerror=null;this.src='<?php echo esc_url(home_url('/wp-content/uploads/card-images/default-card.jpg')); ?>';">
                                </a>
                            </div>
                            <div class="card-name"><?php echo esc_html($card['name']); ?></div>
                            <div class="card-bank"><?php echo esc_html($card['bank']); ?></div>
                            <div class="rating">
                                <span>★★★★☆</span> <?php echo esc_html($card['rating']); ?>
                            </div>
                        </th>
                        <?php endif; endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><strong>Description</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['description'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Annual Fee</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['annual_fee'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Joining Fee</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['joining_fee'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Minimum CIBIL Score</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['cibil_score'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>International Usage</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['international_usage'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Welcome Bonus</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['welcome_bonus'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Reward Structure</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['rewards'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Key Benefits</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><ul class="benefits-list"><?php foreach ($card['benefits'] as $benefit): ?><li><?php echo esc_html($benefit); ?></li><?php endforeach; ?></ul></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Best For</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['best_for'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr><td><strong>Minimum Income</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><?php echo esc_html($card['min_income'] ?? '-'); ?></td>
                        <?php endif; endforeach; ?>
                    </tr>
                    <tr class="apply-row"><td><strong>Apply Now</strong></td>
                        <?php foreach ($compare_cards as $card_id): if (isset($card_database[$card_id])): $card = $card_database[$card_id]; ?>
                        <td><a href="<?php echo esc_url($card['apply_link']); ?>" target="_blank" class="apply-btn">Apply Online</a></td>
                        <?php endif; endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php get_footer(); ?>
