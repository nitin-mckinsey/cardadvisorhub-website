<?php 
// Credit Card EMI Calculator Page
// SEO managed by Rank Math plugin

get_header(); ?>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 60px 0;
    text-align: center;
}

.hero-section h1 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 700;
}

.calculator-section {
    padding: 50px 0;
    background: #f8f9fa;
}

.calculator-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin: 30px 0;
}

.calculator-form {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.results-panel {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.form-group input, .form-group select {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus, .form-group select:focus {
    outline: none;
    border-color: #007cba;
}

.calculate-btn {
    background: #007cba;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s ease;
}

.calculate-btn:hover {
    background: #005a8a;
}

.result-card {
    background: #f0f7ff;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 15px;
    border-left: 4px solid #007cba;
}

.result-label {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 5px;
}

.result-value {
    font-size: 1.3rem;
    font-weight: 600;
    color: #333;
}

.comparison-section {
    margin-top: 30px;
    padding: 20px;
    background: #fff3cd;
    border-radius: 8px;
    border-left: 4px solid #ffc107;
}

.bank-rates {
    padding: 50px 0;
}

.rates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.bank-card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
}

.bank-logo {
    width: 60px;
    height: 60px;
    margin: 0 auto 15px;
    background: #f0f0f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #666;
}

.interest-rate {
    font-size: 1.5rem;
    font-weight: 600;
    color: #007cba;
    margin: 10px 0;
}

.processing-fee {
    font-size: 0.9rem;
    color: #666;
}

.tips-section {
    background: #f8f9fa;
    padding: 50px 0;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin: 30px 0;
}

.tip-card {
    background: white;
    padding: 25px;
    border-radius: 8px;
    border-left: 4px solid #28a745;
}

.tip-card h3 {
    color: #333;
    margin-bottom: 10px;
}

.chart-container {
    margin: 20px 0;
    padding: 20px;
    background: white;
    border-radius: 8px;
    border: 1px solid #ddd;
}

@media (max-width: 768px) {
    .calculator-container {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .hero-section h1 {
        font-size: 2rem;
    }
    
    .container {
        padding: 0 15px;
    }
}

.loading {
    display: none;
    text-align: center;
    color: #666;
}

.hidden {
    display: none;
}
</style>

<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>💳 Credit Card EMI Calculator</h1>
            <p>Calculate your monthly EMI, total interest cost, and make informed purchase decisions</p>
            <div style="margin-top: 20px;">
                <span style="background: rgba(255,255,255,0.2); padding: 10px 15px; border-radius: 20px; margin: 0 10px;">✅ All Indian Banks</span>
                <span style="background: rgba(255,255,255,0.2); padding: 10px 15px; border-radius: 20px; margin: 0 10px;">✅ Accurate Rates</span>
                <span style="background: rgba(255,255,255,0.2); padding: 10px 15px; border-radius: 20px; margin: 0 10px;">✅ Free Tool</span>
            </div>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="calculator-section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 30px;">EMI Calculator</h2>
            
            <div class="calculator-container">
                <!-- Calculator Form -->
                <div class="calculator-form">
                    <h3>Enter Purchase Details</h3>
                    
                    <div class="form-group">
                        <label for="purchaseAmount">Purchase Amount (₹)</label>
                        <input type="number" id="purchaseAmount" placeholder="50000" min="1000" max="10000000">
                    </div>
                    
                    <div class="form-group">
                        <label for="bankSelect">Select Your Bank</label>
                        <select id="bankSelect">
                            <option value="">Choose your bank...</option>
                            <option value="hdfc" data-rate="3.35">HDFC Bank (3.35% per month)</option>
                            <option value="icici" data-rate="3.50">ICICI Bank (3.50% per month)</option>
                            <option value="axis" data-rate="3.60">Axis Bank (3.60% per month)</option>
                            <option value="sbi" data-rate="3.30">SBI Card (3.30% per month)</option>
                            <option value="kotak" data-rate="3.65">Kotak Bank (3.65% per month)</option>
                            <option value="indusind" data-rate="3.49">IndusInd Bank (3.49% per month)</option>
                            <option value="yes" data-rate="3.75">YES Bank (3.75% per month)</option>
                            <option value="rbl" data-rate="3.99">RBL Bank (3.99% per month)</option>
                            <option value="standard" data-rate="3.40">Standard Chartered (3.40% per month)</option>
                            <option value="citi" data-rate="3.35">Citi Bank (3.35% per month)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="tenureMonths">EMI Tenure (Months)</label>
                        <select id="tenureMonths">
                            <option value="">Select tenure...</option>
                            <option value="3">3 Months</option>
                            <option value="6">6 Months</option>
                            <option value="9">9 Months</option>
                            <option value="12">12 Months</option>
                            <option value="18">18 Months</option>
                            <option value="24">24 Months</option>
                            <option value="36">36 Months</option>
                            <option value="48">48 Months</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="processingFee">Processing Fee (%)</label>
                        <input type="number" id="processingFee" placeholder="2.5" step="0.1" min="0" max="5" value="2.5">
                        <small style="color: #666;">Usually 1.5% - 3.5% of purchase amount</small>
                    </div>
                    
                    <button class="calculate-btn" onclick="calculateEMI()">Calculate EMI</button>
                    
                    <div class="loading" id="loading">
                        <p>Calculating your EMI...</p>
                    </div>
                </div>
                
                <!-- Results Panel -->
                <div class="results-panel">
                    <h3>EMI Calculation Results</h3>
                    
                    <div id="results" class="hidden">
                        <div class="result-card">
                            <div class="result-label">Monthly EMI Amount</div>
                            <div class="result-value" id="monthlyEMI">₹0</div>
                        </div>
                        
                        <div class="result-card">
                            <div class="result-label">Total Amount Payable</div>
                            <div class="result-value" id="totalAmount">₹0</div>
                        </div>
                        
                        <div class="result-card">
                            <div class="result-label">Total Interest Cost</div>
                            <div class="result-value" id="totalInterest" style="color: #dc3545;">₹0</div>
                        </div>
                        
                        <div class="result-card">
                            <div class="result-label">Processing Fee</div>
                            <div class="result-value" id="processingFeeAmount">₹0</div>
                        </div>
                        
                        <div class="comparison-section">
                            <h4>💡 EMI vs Cash Payment</h4>
                            <p id="savingsComparison">Choose cash payment if possible to save on interest costs.</p>
                        </div>
                    </div>
                    
                    <div id="noResults" class="result-card">
                        <div class="result-label">Enter details above to calculate EMI</div>
                        <div style="text-align: center; color: #666; margin-top: 15px;">
                            📊 Get instant EMI calculations<br>
                            💰 Compare total costs<br>
                            🎯 Make informed decisions
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bank Interest Rates -->
    <section class="bank-rates">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 30px;">Current Bank Interest Rates</h2>
            <p style="text-align: center; color: #666; margin-bottom: 30px;">Compare interest rates across major Indian banks</p>
            
            <div class="rates-grid">
                <div class="bank-card">
                    <div class="bank-logo">SBI</div>
                    <h3>SBI Card</h3>
                    <div class="interest-rate">3.30% p.m.</div>
                    <div class="processing-fee">Processing: 1.5% - 2.5%</div>
                </div>
                
                <div class="bank-card">
                    <div class="bank-logo">HDFC</div>
                    <h3>HDFC Bank</h3>
                    <div class="interest-rate">3.35% p.m.</div>
                    <div class="processing-fee">Processing: 2.0% - 3.0%</div>
                </div>
                
                <div class="bank-card">
                    <div class="bank-logo">SC</div>
                    <h3>Standard Chartered</h3>
                    <div class="interest-rate">3.40% p.m.</div>
                    <div class="processing-fee">Processing: 2.5% - 3.5%</div>
                </div>
                
                <div class="bank-card">
                    <div class="bank-logo">ICICI</div>
                    <h3>ICICI Bank</h3>
                    <div class="interest-rate">3.50% p.m.</div>
                    <div class="processing-fee">Processing: 2.0% - 3.0%</div>
                </div>
                
                <div class="bank-card">
                    <div class="bank-logo">AXIS</div>
                    <h3>Axis Bank</h3>
                    <div class="interest-rate">3.60% p.m.</div>
                    <div class="processing-fee">Processing: 1.5% - 2.5%</div>
                </div>
                
                <div class="bank-card">
                    <div class="bank-logo">YES</div>
                    <h3>YES Bank</h3>
                    <div class="interest-rate">3.75% p.m.</div>
                    <div class="processing-fee">Processing: 2.5% - 3.5%</div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 30px; padding: 20px; background: #fff3cd; border-radius: 8px;">
                <p><strong>Note:</strong> Interest rates are indicative and may vary based on your credit profile, card type, and current bank policies. Always confirm rates with your bank before making EMI purchases.</p>
            </div>
        </div>
    </section>

    <!-- Smart Tips -->
    <section class="tips-section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 30px;">💡 Smart EMI Tips</h2>
            
            <div class="tips-grid">
                <div class="tip-card">
                    <h3>🎯 When to Choose EMI</h3>
                    <p>EMI is good for large purchases (₹50K+) when you can invest the cash for higher returns than the EMI interest rate.</p>
                </div>
                
                <div class="tip-card">
                    <h3>💰 Compare Total Cost</h3>
                    <p>Always compare the total amount (EMI + interest + fees) with the original price to understand the real cost.</p>
                </div>
                
                <div class="tip-card">
                    <h3>⏰ Shorter Tenure = Less Interest</h3>
                    <p>Choose the shortest tenure you can afford. Higher EMI but significantly lower total interest cost.</p>
                </div>
                
                <div class="tip-card">
                    <h3>🎁 Look for 0% EMI Offers</h3>
                    <p>During sales, many merchants offer 0% EMI where they absorb the interest cost. This is always better than regular EMI.</p>
                </div>
                
                <div class="tip-card">
                    <h3>💳 Check Processing Fees</h3>
                    <p>Processing fees add to your cost. Some banks waive fees during promotional periods or for premium customers.</p>
                </div>
                
                <div class="tip-card">
                    <h3>📈 Prepayment Benefits</h3>
                    <p>Most banks allow early closure of EMI without penalty. Pay off early if you have extra cash to save on interest.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="calculator-section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 30px;">❓ Frequently Asked Questions</h2>
            
            <div style="display: grid; gap: 20px; margin: 30px 0;">
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h3>How is credit card EMI calculated?</h3>
                    <p>EMI = [P × R × (1+R)^N] / [(1+R)^N-1], where P = Principal amount, R = Monthly interest rate, N = Number of months</p>
                </div>
                
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h3>Is EMI good or bad for credit score?</h3>
                    <p>EMI payments, when made on time, actually improve your credit score by showing consistent repayment behavior. Missing EMI payments hurts your score.</p>
                </div>
                
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h3>Can I convert existing purchases to EMI?</h3>
                    <p>Yes, most banks allow you to convert existing purchases to EMI within 30-45 days of the transaction through internet banking or customer service.</p>
                </div>
                
                <div style="background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h3>What happens if I miss an EMI payment?</h3>
                    <p>Missing EMI payments results in late fees, increased interest rates, and negative impact on credit score. Banks may also cancel the EMI facility.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function calculateEMI() {
    // Get input values
    const amount = parseFloat(document.getElementById('purchaseAmount').value);
    const bankSelect = document.getElementById('bankSelect');
    const tenure = parseInt(document.getElementById('tenureMonths').value);
    const processingFeeRate = parseFloat(document.getElementById('processingFee').value);
    
    // Validation
    if (!amount || !bankSelect.value || !tenure) {
        alert('Please fill all required fields');
        return;
    }
    
    if (amount < 1000) {
        alert('Minimum purchase amount is ₹1,000');
        return;
    }
    
    // Show loading
    document.getElementById('loading').style.display = 'block';
    document.getElementById('results').classList.add('hidden');
    document.getElementById('noResults').style.display = 'none';
    
    // Simulate loading time
    setTimeout(() => {
        // Get monthly interest rate
        const monthlyRate = parseFloat(bankSelect.options[bankSelect.selectedIndex].dataset.rate) / 100;
        
        // Calculate EMI using formula: EMI = [P × R × (1+R)^N] / [(1+R)^N-1]
        const principal = amount;
        const rate = monthlyRate;
        const months = tenure;
        
        const emi = (principal * rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
        const totalAmount = emi * months;
        const totalInterest = totalAmount - principal;
        const processingFee = (amount * processingFeeRate) / 100;
        const totalCost = totalAmount + processingFee;
        
        // Update results
        document.getElementById('monthlyEMI').textContent = '₹' + Math.round(emi).toLocaleString();
        document.getElementById('totalAmount').textContent = '₹' + Math.round(totalAmount).toLocaleString();
        document.getElementById('totalInterest').textContent = '₹' + Math.round(totalInterest).toLocaleString();
        document.getElementById('processingFeeAmount').textContent = '₹' + Math.round(processingFee).toLocaleString();
        
        // Update comparison
        const extraCost = Math.round(totalInterest + processingFee);
        const percentageExtra = ((extraCost / amount) * 100).toFixed(1);
        
        document.getElementById('savingsComparison').innerHTML = 
            `<strong>Extra cost via EMI: ₹${extraCost.toLocaleString()} (${percentageExtra}% more than cash)</strong><br>
            Cash payment saves you ₹${extraCost.toLocaleString()} in interest and fees.`;
        
        // Hide loading and show results
        document.getElementById('loading').style.display = 'none';
        document.getElementById('results').classList.remove('hidden');
        
    }, 1000);
}

// Add enter key support
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('purchaseAmount').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            calculateEMI();
        }
    });
    
    // Auto-calculate when all fields are filled
    const inputs = ['purchaseAmount', 'bankSelect', 'tenureMonths'];
    inputs.forEach(id => {
        document.getElementById(id).addEventListener('change', function() {
            const allFilled = inputs.every(inputId => document.getElementById(inputId).value);
            if (allFilled) {
                setTimeout(calculateEMI, 500);
            }
        });
    });
});
</script>

<?php get_footer(); ?>
