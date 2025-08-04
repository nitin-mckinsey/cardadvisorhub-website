<?php get_header(); ?>

<style>
/* Eligibility Checker Styles */
.eligibility-checker {
    background: #f8f9fa;
    min-height: 100vh;
    padding: 2rem 0;
}

.page-header {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: white;
    padding: 4rem 0;
    text-align: center;
    margin-bottom: 3rem;
}

.page-header h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.page-header p {
    font-size: 1.2rem;
    opacity: 0.9;
    max-width: 700px;
    margin: 0 auto;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.checker-section {
    margin-bottom: 4rem;
}

.instructions-banner {
    background: linear-gradient(135deg, #e3f2fd 0%, #f0f8ff 100%);
    padding: 1.5rem 2rem;
    border-radius: 12px;
    margin-bottom: 3rem;
    border-left: 4px solid #2196f3;
    text-align: center;
}

.instructions-banner h3 {
    color: #1565c0;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
}

.instructions-banner p {
    color: #1565c0;
    margin: 0;
    font-size: 1rem;
    line-height: 1.5;
}

.checker-wrapper {
    display: flex;
    flex-direction: column;
    gap: 3rem;
}

.checker-form {
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
}

.checker-form h2 {
    color: #333;
    margin-bottom: 2rem;
    font-size: 1.8rem;
    text-align: center;
}

.form-sections {
    display: grid;
    gap: 2rem;
}

.form-section {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #007cba;
}

.form-section h3 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin-bottom: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.form-group input,
.form-group select {
    padding: 0.75rem;
    border: 2px solid #e9ecef;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #007cba;
    box-shadow: 0 0 0 3px rgba(0, 124, 186, 0.1);
}

.checkbox-group {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.checkbox-group input[type="checkbox"] {
    width: auto;
    margin: 0;
}

.btn {
    padding: 1rem 2rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: 1.1rem;
    width: 100%;
    max-width: 300px;
    margin: 2rem auto 0;
    display: block;
}

.btn-primary {
    background: #28a745;
    color: white;
}

.btn-primary:hover {
    background: #218838;
    transform: translateY(-2px);
}

.btn-primary:disabled {
    background: #6c757d;
    cursor: not-allowed;
    transform: none;
}

.results-section {
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    display: none;
}

.results-section.visible {
    display: block;
    animation: fadeInUp 0.6s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.results-header {
    text-align: center;
    margin-bottom: 2rem;
}

.results-header h2 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.8rem;
}

.overall-score {
    background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%);
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    margin-bottom: 2rem;
    border: 2px solid #28a745;
}

.score-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: conic-gradient(#28a745 0deg, #28a745 var(--score-angle), #e9ecef var(--score-angle), #e9ecef 360deg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    position: relative;
}

.score-circle::before {
    content: '';
    width: 90px;
    height: 90px;
    background: white;
    border-radius: 50%;
    position: absolute;
}

.score-value {
    font-size: 2rem;
    font-weight: 700;
    color: #28a745;
    z-index: 1;
}

.score-label {
    font-size: 1.1rem;
    color: #333;
    font-weight: 600;
}

.eligible-cards {
    margin-top: 2rem;
}

.cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.card-result {
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    transition: all 0.3s ease;
}

.card-result.highly-eligible {
    border-color: #28a745;
    background: linear-gradient(135deg, #e8f5e8 0%, #f8f9fa 100%);
}

.card-result.moderately-eligible {
    border-color: #ffc107;
    background: linear-gradient(135deg, #fff3cd 0%, #f8f9fa 100%);
}

.card-result.low-eligible {
    border-color: #dc3545;
    background: linear-gradient(135deg, #f8d7da 0%, #f8f9fa 100%);
}

.card-result:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.eligibility-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.badge-high {
    background: #28a745;
    color: white;
}

.badge-moderate {
    background: #ffc107;
    color: #212529;
}

.badge-low {
    background: #dc3545;
    color: white;
}

.card-result h3 {
    color: #333;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}

.card-details {
    margin: 1rem 0;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.detail-label {
    color: #666;
}

.detail-value {
    font-weight: 600;
    color: #333;
}

.match-indicators {
    margin-top: 1rem;
}

.indicator {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    font-size: 0.85rem;
}

.indicator-icon {
    margin-right: 0.5rem;
    font-size: 1rem;
}

.match {
    color: #28a745;
}

.partial-match {
    color: #ffc107;
}

.no-match {
    color: #dc3545;
}

.improvement-tips {
    background: linear-gradient(135deg, #fff3cd 0%, #f8f9fa 100%);
    padding: 2rem;
    border-radius: 12px;
    margin-top: 2rem;
    border: 2px solid #ffc107;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 1rem;
}

.tip-card {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.tip-card h4 {
    color: #333;
    margin-bottom: 0.75rem;
    font-size: 1rem;
}

.tip-card p {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.4;
    margin: 0;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .page-header h1 {
        font-size: 2rem;
    }
    
    .checker-form,
    .results-section {
        padding: 1.5rem;
        margin: 0 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .cards-grid {
        grid-template-columns: 1fr;
    }
    
    .container {
        padding: 0 1rem;
    }
    
    .btn {
        width: 100%;
        max-width: none;
    }
    
    .score-circle {
        width: 100px;
        height: 100px;
    }
    
    .score-circle::before {
        width: 75px;
        height: 75px;
    }
    
    .score-value {
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .page-header {
        padding: 2rem 0;
    }
    
    .checker-form,
    .results-section {
        padding: 1rem;
    }
}
</style>

<main class="eligibility-checker">
    <section class="page-header">
        <div class="container">
            <h1>Credit Card Eligibility Checker</h1>
            <p>Check your eligibility for credit cards instantly with our accurate assessment tool. Get personalized recommendations based on your financial profile.</p>
        </div>
    </section>

    <section class="checker-section">
        <div class="container">
            <!-- Instructions -->
            <div class="instructions-banner">
                <h3>🎯 How It Works</h3>
                <p>Fill in your details below and we'll analyze your eligibility for <strong>35+ credit cards</strong> from major Indian banks including HDFC, ICICI, Axis, SBI, Kotak, IndusInd, RBL, and more. Our algorithm considers income, credit score, employment type, and other factors to give you accurate results.</p>
            </div>

            <div class="checker-wrapper">
                <!-- Input Form -->
                <div class="checker-form">
                    <h2>Enter Your Details</h2>
                    
                    <form id="eligibility-form" class="form-sections">
                        <!-- Personal Information -->
                        <div class="form-section">
                            <h3>👤 Personal Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" id="age" min="18" max="80" required>
                                </div>
                                <div class="form-group">
                                    <label for="city-tier">City Tier</label>
                                    <select id="city-tier" required>
                                        <option value="">Select City Tier</option>
                                        <option value="metro">Metro City (Mumbai, Delhi, Bangalore, etc.)</option>
                                        <option value="tier1">Tier 1 City (Pune, Hyderabad, Chennai, etc.)</option>
                                        <option value="tier2">Tier 2 City (Indore, Coimbatore, etc.)</option>
                                        <option value="tier3">Tier 3 City (Smaller cities/towns)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Employment Information -->
                        <div class="form-section">
                            <h3>💼 Employment Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="employment-type">Employment Type</label>
                                    <select id="employment-type" required>
                                        <option value="">Select Employment Type</option>
                                        <option value="salaried">Salaried Employee</option>
                                        <option value="self-employed">Self Employed/Business Owner</option>
                                        <option value="professional">Professional (Doctor, CA, etc.)</option>
                                        <option value="freelancer">Freelancer/Consultant</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="work-experience">Work Experience (Years)</label>
                                    <input type="number" id="work-experience" min="0" max="50" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="company-type">Company Type (Salaried only)</label>
                                    <select id="company-type">
                                        <option value="">Select Company Type</option>
                                        <option value="mnc">MNC/Fortune 500</option>
                                        <option value="listed">Listed Indian Company</option>
                                        <option value="government">Government/PSU</option>
                                        <option value="private">Private Company</option>
                                        <option value="startup">Startup</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="designation">Job Level</label>
                                    <select id="designation">
                                        <option value="">Select Job Level</option>
                                        <option value="entry">Entry Level</option>
                                        <option value="mid">Mid Level</option>
                                        <option value="senior">Senior Level</option>
                                        <option value="executive">Executive/Management</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Financial Information -->
                        <div class="form-section">
                            <h3>💰 Financial Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="monthly-income">Monthly Income (₹)</label>
                                    <input type="number" id="monthly-income" min="0" step="1000" required>
                                </div>
                                <div class="form-group">
                                    <label for="annual-income">Annual Income (₹)</label>
                                    <input type="number" id="annual-income" min="0" step="10000" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="credit-score">Credit Score (CIBIL)</label>
                                    <select id="credit-score" required>
                                        <option value="">Select Credit Score Range</option>
                                        <option value="800-900">Excellent (800-900)</option>
                                        <option value="750-799">Very Good (750-799)</option>
                                        <option value="700-749">Good (700-749)</option>
                                        <option value="650-699">Fair (650-699)</option>
                                        <option value="600-649">Poor (600-649)</option>
                                        <option value="below-600">Very Poor (Below 600)</option>
                                        <option value="no-score">No Credit History</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="existing-cards">Existing Credit Cards</label>
                                    <select id="existing-cards" required>
                                        <option value="">Select Number</option>
                                        <option value="0">None (First Credit Card)</option>
                                        <option value="1">1 Card</option>
                                        <option value="2">2 Cards</option>
                                        <option value="3">3 Cards</option>
                                        <option value="4+">4+ Cards</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Banking Relationship -->
                        <div class="form-section">
                            <h3>🏦 Banking Relationship</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="primary-bank">Primary Bank</label>
                                    <select id="primary-bank" required>
                                        <option value="">Select Primary Bank</option>
                                        <option value="hdfc">HDFC Bank</option>
                                        <option value="icici">ICICI Bank</option>
                                        <option value="axis">Axis Bank</option>
                                        <option value="sbi">State Bank of India</option>
                                        <option value="kotak">Kotak Mahindra Bank</option>
                                        <option value="indusind">IndusInd Bank</option>
                                        <option value="yes">YES Bank</option>
                                        <option value="rbl">RBL Bank</option>
                                        <option value="pnb">Punjab National Bank</option>
                                        <option value="bob">Bank of Baroda</option>
                                        <option value="canara">Canara Bank</option>
                                        <option value="union">Union Bank of India</option>
                                        <option value="other">Other Bank</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="relationship-years">Banking Relationship (Years)</label>
                                    <input type="number" id="relationship-years" min="0" max="50" required>
                                </div>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="salary-account">
                                <label for="salary-account">This is my salary account</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="investment-account">
                                <label for="investment-account">I have investments/FD with this bank</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="check-eligibility-btn">
                            🔍 Check My Eligibility
                        </button>
                    </form>
                </div>

                <!-- Results Section -->
                <div class="results-section" id="results-section">
                    <div class="results-header">
                        <h2>Your Eligibility Results</h2>
                        <div class="overall-score" id="overall-score">
                            <div class="score-circle" id="score-circle">
                                <span class="score-value" id="score-value">0</span>
                            </div>
                            <div class="score-label">Eligibility Score</div>
                        </div>
                    </div>

                    <div class="eligible-cards">
                        <h3>Recommended Credit Cards</h3>
                        <div class="cards-grid" id="cards-grid">
                            <!-- Results will be populated by JavaScript -->
                        </div>
                    </div>

                    <div class="improvement-tips" id="improvement-tips">
                        <h3>💡 Tips to Improve Your Eligibility</h3>
                        <div class="tips-grid" id="tips-grid">
                            <!-- Tips will be populated by JavaScript -->
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 2rem;">
                        <button class="btn btn-primary" onclick="document.getElementById('eligibility-form').scrollIntoView({behavior: 'smooth'})">
                            📝 Check Again
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Comprehensive credit card database with detailed eligibility criteria
    const creditCards = {
        // HDFC Bank Cards
        'hdfc-regalia': {
            name: 'HDFC Regalia',
            category: 'Premium',
            annual_fee: 2500,
            min_income_salaried: 75000,
            min_income_self_employed: 900000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['4X points on dining & travel', 'Airport lounge access', 'Travel insurance']
        },
        'hdfc-millennia': {
            name: 'HDFC Millennia',
            category: 'Mid-Range',
            annual_fee: 1000,
            min_income_salaried: 35000,
            min_income_self_employed: 600000,
            min_credit_score: 700,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['5% cashback online', '2.5% on groceries', 'No forex markup']
        },
        'hdfc-moneyback': {
            name: 'HDFC MoneyBack',
            category: 'Entry Level',
            annual_fee: 0,
            min_income_salaried: 20000,
            min_income_self_employed: 300000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['2% cashback dining', '1% fuel cashback', 'No annual fee']
        },
        'hdfc-business-moneyback': {
            name: 'HDFC Business MoneyBack',
            category: 'Business',
            annual_fee: 500,
            min_income_salaried: 40000,
            min_income_self_employed: 500000,
            min_credit_score: 700,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['2.5% fuel cashback', '2% bill payments', 'Business benefits']
        },
        'hdfc-diners-club': {
            name: 'HDFC Diners Club',
            category: 'Premium',
            annual_fee: 1000,
            min_income_salaried: 50000,
            min_income_self_employed: 700000,
            min_credit_score: 720,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['Dining rewards', 'Fuel benefits', 'Travel privileges']
        },
        'hdfc-freedomflex': {
            name: 'HDFC FreedomFlex',
            category: 'Entry Level',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Grocery benefits', 'Fuel savings', 'Flexible rewards']
        },
        'hdfc-times': {
            name: 'HDFC Times Titanium',
            category: 'Mid-Range',
            annual_fee: 750,
            min_income_salaried: 30000,
            min_income_self_employed: 500000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['hdfc'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['Entertainment rewards', 'Dining benefits', 'Movie discounts']
        },

        // ICICI Bank Cards
        'icici-amazon': {
            name: 'ICICI Amazon Pay',
            category: 'Entry Level',
            annual_fee: 0,
            min_income_salaried: 20000,
            min_income_self_employed: 300000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['5% back on Amazon', '2% bill payments', 'No annual fee']
        },
        'icici-emeralde': {
            name: 'ICICI Emeralde',
            category: 'Super Premium',
            annual_fee: 4000,
            min_income_salaried: 100000,
            min_income_self_employed: 1500000,
            min_credit_score: 770,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed'],
            city_tiers: ['metro'],
            features: ['Travel rewards', 'Concierge services', 'Premium lounges']
        },
        'icici-platinum': {
            name: 'ICICI Platinum',
            category: 'Entry Level',
            annual_fee: 0,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Fuel benefits', 'Grocery rewards', 'Basic privileges']
        },
        'icici-rubyx': {
            name: 'ICICI Rubyx',
            category: 'Premium',
            annual_fee: 3000,
            min_income_salaried: 50000,
            min_income_self_employed: 800000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Dining & movie rewards', 'Airport lounge access', 'Travel benefits']
        },
        'icici-sapphiro': {
            name: 'ICICI Sapphiro',
            category: 'Premium',
            annual_fee: 3500,
            min_income_salaried: 60000,
            min_income_self_employed: 900000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Fuel rewards', 'Entertainment benefits', 'Travel insurance']
        },
        'icici-student': {
            name: 'ICICI Student Credit Card',
            category: 'Student',
            annual_fee: 0,
            min_income_salaried: 10000,
            min_income_self_employed: 150000,
            min_credit_score: 600,
            min_age: 18,
            max_age: 30,
            preferred_banks: ['icici'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Student benefits', 'Online rewards', 'No income proof']
        },

        // Axis Bank Cards
        'axis-magnus': {
            name: 'Axis Magnus',
            category: 'Super Premium',
            annual_fee: 12500,
            min_income_salaried: 150000,
            min_income_self_employed: 2500000,
            min_credit_score: 780,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed'],
            city_tiers: ['metro'],
            features: ['12X travel points', 'Unlimited lounge access', 'Golf privileges']
        },
        'axis-ace': {
            name: 'Axis ACE',
            category: 'Entry Level',
            annual_fee: 499,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['5% utility bills', '4% grocery', 'Google Pay rewards']
        },
        'axis-myzone': {
            name: 'Axis MyZone',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 30000,
            min_income_self_employed: 500000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['Fuel benefits', 'Dining rewards', 'Entertainment offers']
        },
        'axis-privilege': {
            name: 'Axis Privilege',
            category: 'Premium',
            annual_fee: 1500,
            min_income_salaried: 45000,
            min_income_self_employed: 700000,
            min_credit_score: 720,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Travel rewards', 'Lounge access', 'Premium benefits']
        },
        'axis-select': {
            name: 'Axis Select',
            category: 'Premium',
            annual_fee: 3000,
            min_income_salaried: 50000,
            min_income_self_employed: 800000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Dining rewards', 'Entertainment benefits', 'Travel privileges']
        },
        'flipkart-axis': {
            name: 'Flipkart Axis Bank',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 670,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['5% on Flipkart', 'Grocery benefits', 'Online rewards']
        },
        'airtel-axis-bank': {
            name: 'Airtel Axis Bank',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 670,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['axis'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Bill payment rewards', 'Airtel benefits', 'Online cashback']
        },

        // SBI Cards
        'sbi-cashback': {
            name: 'SBI Cashback',
            category: 'Mid-Range',
            annual_fee: 999,
            min_income_salaried: 30000,
            min_income_self_employed: 500000,
            min_credit_score: 700,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['sbi'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['5% online cashback', '1% offline', 'No category limits']
        },
        'sbi-simply-save': {
            name: 'SBI SimplySAVE',
            category: 'Mid-Range',
            annual_fee: 499,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['sbi'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['10X dining points', '5% grocery', 'Fuel benefits']
        },
        'sbi-card-prime': {
            name: 'SBI Card PRIME',
            category: 'Premium',
            annual_fee: 2999,
            min_income_salaried: 60000,
            min_income_self_employed: 900000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['sbi'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Dining rewards', 'Fuel benefits', 'Travel privileges']
        },

        // American Express Cards
        'american-express-smartearn': {
            name: 'American Express SmartEarn',
            category: 'Premium',
            annual_fee: 1500,
            min_income_salaried: 45000,
            min_income_self_employed: 700000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['other'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['4% Amazon rewards', '5% Swiggy/Zomato', 'Premium benefits']
        },

        // Kotak Bank Cards
        'kotak-811': {
            name: 'Kotak 811',
            category: 'Entry Level',
            annual_fee: 0,
            min_income_salaried: 15000,
            min_income_self_employed: 250000,
            min_credit_score: 600,
            min_age: 18,
            max_age: 65,
            preferred_banks: ['kotak'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Digital first card', 'Instant approval', 'No annual fee']
        },
        'kotak-platinum': {
            name: 'Kotak Platinum',
            category: 'Mid-Range',
            annual_fee: 750,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['kotak'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['Fuel benefits', 'Grocery rewards', 'Basic privileges']
        },

        // IndusInd Bank Cards
        'indusind-legend': {
            name: 'IndusInd Legend',
            category: 'Super Premium',
            annual_fee: 7000,
            min_income_salaried: 120000,
            min_income_self_employed: 2000000,
            min_credit_score: 770,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['indusind'],
            company_types: ['mnc', 'listed'],
            city_tiers: ['metro'],
            features: ['3.33% on all spends', 'Airport lounge access', 'Premium privileges']
        },
        'indusind-pinnacle': {
            name: 'IndusInd Pinnacle',
            category: 'Premium',
            annual_fee: 3000,
            min_income_salaried: 50000,
            min_income_self_employed: 800000,
            min_credit_score: 750,
            min_age: 21,
            max_age: 60,
            preferred_banks: ['indusind'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Fuel benefits', 'Dining rewards', 'Travel privileges']
        },

        // RBL Bank Cards
        'rbl-bank-moneyback': {
            name: 'RBL Bank MoneyBack',
            category: 'Entry Level',
            annual_fee: 399,
            min_income_salaried: 20000,
            min_income_self_employed: 300000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['rbl'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Fuel cashback', 'Grocery benefits', 'Basic rewards']
        },
        'rbl-shoprite': {
            name: 'RBL Bank ShopRite',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['rbl'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2'],
            features: ['5% grocery cashback', 'Online rewards', 'Shopping benefits']
        },

        // Other Bank Cards
        'bank-of-baroda-premier': {
            name: 'Bank of Baroda Premier',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['other'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Fuel benefits', 'Grocery rewards', 'Basic privileges']
        },
        'citi-rewards': {
            name: 'Citi Rewards',
            category: 'Premium',
            annual_fee: 1000,
            min_income_salaried: 40000,
            min_income_self_employed: 600000,
            min_credit_score: 720,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['other'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Dining rewards', 'Fuel benefits', 'Travel privileges']
        },
        'pnb-select': {
            name: 'PNB SELECT',
            category: 'Mid-Range',
            annual_fee: 500,
            min_income_salaried: 25000,
            min_income_self_employed: 400000,
            min_credit_score: 680,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['other'],
            company_types: ['mnc', 'listed', 'government', 'private'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Fuel benefits', 'Grocery rewards', 'Basic privileges']
        },
        'standard-chartered-manhattan': {
            name: 'Standard Chartered Manhattan',
            category: 'Premium',
            annual_fee: 999,
            min_income_salaried: 40000,
            min_income_self_employed: 600000,
            min_credit_score: 720,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['other'],
            company_types: ['mnc', 'listed', 'government'],
            city_tiers: ['metro', 'tier1'],
            features: ['Dining rewards', 'Entertainment benefits', 'Travel privileges']
        },
        'yes-bank-first': {
            name: 'YES Bank First',
            category: 'Entry Level',
            annual_fee: 499,
            min_income_salaried: 20000,
            min_income_self_employed: 300000,
            min_credit_score: 650,
            min_age: 21,
            max_age: 65,
            preferred_banks: ['yes'],
            company_types: ['mnc', 'listed', 'government', 'private', 'startup'],
            city_tiers: ['metro', 'tier1', 'tier2', 'tier3'],
            features: ['Fuel savings', 'Dining rewards', 'Movie discounts']
        }
    };

    const form = document.getElementById('eligibility-form');
    const resultsSection = document.getElementById('results-section');
    const monthlyIncomeInput = document.getElementById('monthly-income');
    const annualIncomeInput = document.getElementById('annual-income');
    const checkBtn = document.getElementById('check-eligibility-btn');

    // Auto-calculate annual income
    monthlyIncomeInput.addEventListener('input', function() {
        const monthlyIncome = parseFloat(this.value) || 0;
        annualIncomeInput.value = monthlyIncome * 12;
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Add loading state
        checkBtn.innerHTML = '⏳ Analyzing...';
        checkBtn.disabled = true;
        
        // Simulate analysis delay
        setTimeout(() => {
            analyzeEligibility();
            checkBtn.innerHTML = '🔍 Check My Eligibility';
            checkBtn.disabled = false;
        }, 1500);
    });

    function analyzeEligibility() {
        const formData = new FormData(form);
        const data = {};
        
        // Collect form data
        for (let [key, value] of formData.entries()) {
            data[key] = value;
        }
        
        // Get additional data
        data.age = parseInt(document.getElementById('age').value);
        data.monthlyIncome = parseFloat(document.getElementById('monthly-income').value);
        data.workExperience = parseInt(document.getElementById('work-experience').value);
        data.relationshipYears = parseInt(document.getElementById('relationship-years').value);
        data.salaryAccount = document.getElementById('salary-account').checked;
        data.investmentAccount = document.getElementById('investment-account').checked;

        // Calculate eligibility for each card
        const cardResults = [];
        let overallScore = 0;
        let maxPossibleScore = 0;

        Object.entries(creditCards).forEach(([cardId, card]) => {
            const eligibility = calculateCardEligibility(data, card);
            cardResults.push({
                cardId,
                ...card,
                ...eligibility
            });
            
            if (eligibility.score > overallScore) {
                overallScore = eligibility.score;
            }
            maxPossibleScore = Math.max(maxPossibleScore, 100);
        });

        // Sort by eligibility score
        cardResults.sort((a, b) => b.score - a.score);

        // Display results
        displayResults(cardResults, overallScore);
        
        // Show results section
        resultsSection.classList.add('visible');
        resultsSection.scrollIntoView({ behavior: 'smooth' });
    }

    function calculateCardEligibility(userData, card) {
        let score = 0;
        let maxScore = 100;
        const factors = [];

        // Age check (10 points)
        if (userData.age >= card.min_age && userData.age <= card.max_age) {
            score += 10;
            factors.push({ factor: 'Age Requirement', status: 'match', points: 10 });
        } else {
            factors.push({ factor: 'Age Requirement', status: 'no-match', points: 0 });
        }

        // Income check (30 points)
        const requiredIncome = userData['employment-type'] === 'salaried' 
            ? card.min_income_salaried 
            : card.min_income_self_employed;
        
        if (userData.monthlyIncome >= requiredIncome) {
            const incomeRatio = userData.monthlyIncome / requiredIncome;
            if (incomeRatio >= 2) {
                score += 30;
                factors.push({ factor: 'Income Requirement', status: 'match', points: 30 });
            } else if (incomeRatio >= 1.5) {
                score += 25;
                factors.push({ factor: 'Income Requirement', status: 'partial-match', points: 25 });
            } else {
                score += 20;
                factors.push({ factor: 'Income Requirement', status: 'partial-match', points: 20 });
            }
        } else {
            factors.push({ factor: 'Income Requirement', status: 'no-match', points: 0 });
        }

        // Credit Score check (25 points)
        const creditScoreValue = getCreditScoreValue(userData['credit-score']);
        if (creditScoreValue >= card.min_credit_score) {
            if (creditScoreValue >= 800) {
                score += 25;
                factors.push({ factor: 'Credit Score', status: 'match', points: 25 });
            } else if (creditScoreValue >= 750) {
                score += 20;
                factors.push({ factor: 'Credit Score', status: 'partial-match', points: 20 });
            } else {
                score += 15;
                factors.push({ factor: 'Credit Score', status: 'partial-match', points: 15 });
            }
        } else {
            factors.push({ factor: 'Credit Score', status: 'no-match', points: 0 });
        }

        // Banking Relationship (15 points)
        if (card.preferred_banks.includes(userData['primary-bank'])) {
            let relationshipPoints = 5;
            if (userData.salaryAccount) relationshipPoints += 5;
            if (userData.investmentAccount) relationshipPoints += 3;
            if (userData.relationshipYears >= 2) relationshipPoints += 2;
            
            score += relationshipPoints;
            factors.push({ factor: 'Banking Relationship', status: 'match', points: relationshipPoints });
        } else {
            factors.push({ factor: 'Banking Relationship', status: 'partial-match', points: 5 });
            score += 5;
        }

        // Company Type & City Tier (10 points)
        let profilePoints = 0;
        if (card.company_types.includes(userData['company-type'])) {
            profilePoints += 5;
        }
        if (card.city_tiers.includes(userData['city-tier'])) {
            profilePoints += 5;
        }
        score += profilePoints;
        factors.push({ factor: 'Profile Match', status: profilePoints >= 8 ? 'match' : 'partial-match', points: profilePoints });

        // Work Experience (5 points)
        if (userData.workExperience >= 2) {
            score += 5;
            factors.push({ factor: 'Work Experience', status: 'match', points: 5 });
        } else if (userData.workExperience >= 1) {
            score += 3;
            factors.push({ factor: 'Work Experience', status: 'partial-match', points: 3 });
        } else {
            factors.push({ factor: 'Work Experience', status: 'no-match', points: 0 });
        }

        // Existing cards impact (5 points)
        const existingCards = parseInt(userData['existing-cards']) || 0;
        if (existingCards === 0 && card.category === 'Entry Level') {
            score += 5;
        } else if (existingCards >= 1 && existingCards <= 2) {
            score += 5;
        } else if (existingCards >= 3) {
            score += 2;
        }

        const eligibilityLevel = score >= 80 ? 'high' : score >= 60 ? 'moderate' : 'low';
        
        return {
            score: Math.min(score, 100),
            eligibilityLevel,
            factors,
            recommendation: getRecommendation(eligibilityLevel, card.category)
        };
    }

    function getCreditScoreValue(scoreRange) {
        const scoreMap = {
            '800-900': 850,
            '750-799': 775,
            '700-749': 725,
            '650-699': 675,
            '600-649': 625,
            'below-600': 550,
            'no-score': 0
        };
        return scoreMap[scoreRange] || 0;
    }

    function getRecommendation(level, category) {
        if (level === 'high') {
            return 'Highly likely to get approved. Apply with confidence!';
        } else if (level === 'moderate') {
            return 'Good chances of approval. Consider improving profile for better terms.';
        } else {
            return 'Lower chances currently. Focus on improving your financial profile.';
        }
    }

    function displayResults(cardResults, overallScore) {
        // Update overall score
        const scoreElement = document.getElementById('score-value');
        const scoreCircle = document.getElementById('score-circle');
        
        scoreElement.textContent = Math.round(overallScore);
        const angle = (overallScore / 100) * 360;
        scoreCircle.style.setProperty('--score-angle', `${angle}deg`);

        // Display eligible cards
        const cardsGrid = document.getElementById('cards-grid');
        cardsGrid.innerHTML = '';

        const eligibleCards = cardResults.filter(card => card.score >= 40).slice(0, 9);

        eligibleCards.forEach(card => {
            const cardElement = document.createElement('div');
            cardElement.className = `card-result ${card.eligibilityLevel}-eligible`;
            
            const badgeClass = card.eligibilityLevel === 'high' ? 'badge-high' : 
                             card.eligibilityLevel === 'moderate' ? 'badge-moderate' : 'badge-low';
            
            const badgeText = card.eligibilityLevel === 'high' ? 'Highly Eligible' : 
                            card.eligibilityLevel === 'moderate' ? 'Moderately Eligible' : 'Low Eligibility';

            cardElement.innerHTML = `
                <div class="eligibility-badge ${badgeClass}">${badgeText}</div>
                <h3>${card.name}</h3>
                <div class="card-details">
                    <div class="detail-item">
                        <span class="detail-label">Category:</span>
                        <span class="detail-value">${card.category}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Annual Fee:</span>
                        <span class="detail-value">₹${card.annual_fee.toLocaleString()}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Your Score:</span>
                        <span class="detail-value">${card.score}/100</span>
                    </div>
                </div>
                <div class="match-indicators">
                    ${card.factors.slice(0, 4).map(factor => `
                        <div class="indicator ${factor.status}">
                            <span class="indicator-icon">${factor.status === 'match' ? '✅' : factor.status === 'partial-match' ? '⚠️' : '❌'}</span>
                            ${factor.factor}: ${factor.points} pts
                        </div>
                    `).join('')}
                </div>
                <p style="margin-top: 1rem; font-size: 0.9rem; color: #666;">${card.recommendation}</p>
                <div style="margin-top: 1rem;">
                    <a href="/${card.cardId}" class="btn btn-primary" style="max-width: none; padding: 0.5rem 1rem; font-size: 0.9rem;">View Details</a>
                </div>
            `;

            cardsGrid.appendChild(cardElement);
        });

        // Generate improvement tips
        generateImprovementTips(cardResults[0], overallScore);
    }

    function generateImprovementTips(bestCard, overallScore) {
        const tipsGrid = document.getElementById('tips-grid');
        tipsGrid.innerHTML = '';

        const tips = [];

        if (overallScore < 80) {
            const userData = {
                creditScore: document.getElementById('credit-score').value,
                monthlyIncome: parseFloat(document.getElementById('monthly-income').value),
                workExperience: parseInt(document.getElementById('work-experience').value),
                existingCards: document.getElementById('existing-cards').value
            };

            // Credit score tips
            if (getCreditScoreValue(userData.creditScore) < 750) {
                tips.push({
                    title: 'Improve Your Credit Score',
                    content: 'Pay all bills on time, keep credit utilization below 30%, and avoid applying for multiple cards simultaneously. A score of 750+ significantly improves approval chances.'
                });
            }

            // Income tips
            if (userData.monthlyIncome < 50000) {
                tips.push({
                    title: 'Increase Your Income',
                    content: 'Consider asking for a raise, taking on freelance work, or developing additional income streams. Higher income opens doors to premium cards with better benefits.'
                });
            }

            // Experience tips
            if (userData.workExperience < 2) {
                tips.push({
                    title: 'Build Work Experience',
                    content: 'Banks prefer applicants with stable employment history. Focus on building your career and maintaining steady employment for better approval odds.'
                });
            }

            // First card tips
            if (userData.existingCards === '0') {
                tips.push({
                    title: 'Start with Entry-Level Cards',
                    content: 'Consider applying for entry-level cards first to build your credit history. Successfully managing these cards will help you qualify for premium cards later.'
                });
            }

            // Banking relationship tips
            tips.push({
                title: 'Strengthen Banking Relationships',
                content: 'Open a salary account, maintain good account balances, and consider fixed deposits with your preferred bank. Strong banking relationships improve approval chances.'
            });

            // General tips
            tips.push({
                title: 'Optimize Your Application',
                content: 'Apply during bank promotional periods, ensure all documents are accurate and complete, and consider applying through bank branches for personalized assistance.'
            });
        } else {
            tips.push({
                title: 'You\'re in Great Shape!',
                content: 'Your profile is strong for most credit cards. Consider applying for premium cards to maximize benefits and rewards on your spending.'
            });
        }

        tips.slice(0, 4).forEach(tip => {
            const tipElement = document.createElement('div');
            tipElement.className = 'tip-card';
            tipElement.innerHTML = `
                <h4>${tip.title}</h4>
                <p>${tip.content}</p>
            `;
            tipsGrid.appendChild(tipElement);
        });
    }
});
</script>

<?php get_footer(); ?>
