<?php
/**
 * Emergency Index.php for Card Advisor Hub
 * Handles missing WordPress core files gracefully
 */

// Check if WordPress core files exist
$wpFiles = [
    'wp-blog-header.php',
    'wp-load.php',
    'wp-config.php'
];

$wpExists = true;
foreach ($wpFiles as $file) {
    if (!file_exists(__DIR__ . '/' . $file)) {
        $wpExists = false;
        break;
    }
}

if ($wpExists) {
    // WordPress core exists, load normally
    define('WP_USE_THEMES', true);
    require __DIR__ . '/wp-blog-header.php';
} else {
    // WordPress core missing, show maintenance page
    http_response_code(503);
    header('Retry-After: 3600');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Advisor Hub - Maintenance</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
        }
        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .status {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .message {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }
        .details {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-size: 14px;
            color: #666;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">🏦 Card Advisor Hub</div>
        
        <div class="status">
            <h2>🔧 Site Under Maintenance</h2>
        </div>
        
        <div class="message">
            We're setting up your credit card comparison platform!<br>
            The site will be available shortly.
        </div>
        
        <div class="details">
            <strong>Status:</strong> WordPress configuration in progress<br>
            <strong>Expected:</strong> Available within 1 hour<br>
            <strong>Features Ready:</strong> 75+ credit cards, advanced search, comparison tool
        </div>
        
        <p style="color: #999; font-size: 12px; margin-top: 30px;">
            Card Advisor Hub &copy; <?php echo date('Y'); ?> | Deployment: <?php echo date('Y-m-d H:i:s'); ?>
        </p>
    </div>
</body>
</html>
    <?php
}
