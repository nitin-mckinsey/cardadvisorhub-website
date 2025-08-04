<?php
/**
 * WordPress Installation Diagnostic Tool
 * Helps identify what's missing for WordPress to work
 */

// Prevent direct access in production
if (isset($_GET['action']) && $_GET['action'] === 'install-wp') {
    installWordPress();
    exit;
}

function installWordPress() {
    echo "<h2>Installing WordPress Core...</h2>";
    
    // Download WordPress
    $wpZip = 'https://wordpress.org/latest.zip';
    $tempFile = sys_get_temp_dir() . '/wordpress.zip';
    
    echo "<p>Downloading WordPress...</p>";
    if (function_exists('curl_init')) {
        $ch = curl_init($wpZip);
        $fp = fopen($tempFile, 'w+');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
    } else {
        file_put_contents($tempFile, file_get_contents($wpZip));
    }
    
    // Extract WordPress
    if (class_exists('ZipArchive')) {
        $zip = new ZipArchive;
        if ($zip->open($tempFile) === TRUE) {
            $zip->extractTo(__DIR__ . '/temp-wp/');
            $zip->close();
            
            // Move files from wordpress subdirectory to root
            $wpDir = __DIR__ . '/temp-wp/wordpress/';
            if (is_dir($wpDir)) {
                $files = scandir($wpDir);
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        rename($wpDir . $file, __DIR__ . '/' . $file);
                    }
                }
                // Clean up
                rmdir($wpDir);
                rmdir(__DIR__ . '/temp-wp/');
            }
            
            echo "<p style='color: green;'>✅ WordPress installed successfully!</p>";
            echo "<p><a href='/'>Go to your website</a></p>";
        } else {
            echo "<p style='color: red;'>❌ Failed to extract WordPress</p>";
        }
    } else {
        echo "<p style='color: red;'>❌ ZipArchive not available</p>";
    }
    
    unlink($tempFile);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>WordPress Diagnostic - Card Advisor Hub</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f1f1f1; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .status { padding: 15px; margin: 10px 0; border-radius: 5px; }
        .ok { background: #d4edda; border: 1px solid #c3e6cb; color: #155724; }
        .error { background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; }
        .warning { background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; }
        .install-btn { background: #007cba; color: white; padding: 12px 24px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .install-btn:hover { background: #005a87; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏦 Card Advisor Hub - WordPress Diagnostic</h1>
        
        <h2>Server Information</h2>
        <div class="status ok">
            <strong>PHP Version:</strong> <?php echo phpversion(); ?><br>
            <strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?><br>
            <strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?><br>
            <strong>Current Directory:</strong> <?php echo __DIR__; ?>
        </div>
        
        <h2>WordPress Core Files Check</h2>
        <?php
        $wpCoreFiles = [
            'wp-blog-header.php' => 'Main WordPress loader',
            'wp-load.php' => 'WordPress bootstrap',
            'wp-config.php' => 'WordPress configuration',
            'wp-settings.php' => 'WordPress settings',
            'wp-admin/index.php' => 'WordPress admin',
            'wp-includes/version.php' => 'WordPress core functions',
        ];
        
        $missingFiles = [];
        foreach ($wpCoreFiles as $file => $description) {
            if (file_exists(__DIR__ . '/' . $file)) {
                echo "<div class='status ok'>✅ <strong>$file</strong> - $description</div>";
            } else {
                echo "<div class='status error'>❌ <strong>$file</strong> - $description (MISSING)</div>";
                $missingFiles[] = $file;
            }
        }
        ?>
        
        <h2>Theme Files Check</h2>
        <?php
        $themeFiles = [
            'wp-content/themes/genesis-sample/page-compare-cards.php' => 'Credit card comparison page',
            'wp-content/themes/genesis-sample/functions.php' => 'Theme functions',
            'wp-content/themes/genesis-sample/style.css' => 'Theme styles',
        ];
        
        foreach ($themeFiles as $file => $description) {
            if (file_exists(__DIR__ . '/' . $file)) {
                echo "<div class='status ok'>✅ <strong>$file</strong> - $description</div>";
            } else {
                echo "<div class='status warning'>⚠️ <strong>$file</strong> - $description (Missing but theme deployed)</div>";
            }
        }
        ?>
        
        <h2>Directory Listing</h2>
        <div class="status">
            <strong>Files in current directory:</strong><br>
            <?php
            $files = scandir(__DIR__);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $type = is_dir(__DIR__ . '/' . $file) ? '[DIR]' : '[FILE]';
                    echo "$type $file<br>";
                }
            }
            ?>
        </div>
        
        <?php if (!empty($missingFiles)): ?>
        <h2>WordPress Installation</h2>
        <div class="status error">
            <strong>WordPress core files are missing!</strong><br>
            This is why you're getting 500 errors. WordPress needs to be installed.
        </div>
        
        <p>
            <button class="install-btn" onclick="if(confirm('Install WordPress? This will download and install WordPress core files.')) { window.location.href='?action=install-wp'; }">
                Install WordPress Core Files
            </button>
        </p>
        <?php else: ?>
        <div class="status ok">
            <strong>✅ WordPress core files are present!</strong><br>
            The 500 error might be due to configuration issues.
        </div>
        <?php endif; ?>
        
        <h2>Next Steps</h2>
        <div class="status">
            1. If WordPress core is missing, click "Install WordPress Core Files" above<br>
            2. Create/configure wp-config.php with database settings<br>
            3. Set proper file permissions (755 for directories, 644 for files)<br>
            4. Test your credit card comparison tool: <a href="/compare-cards/">Compare Cards</a><br>
            5. Access WordPress admin: <a href="/wp-admin/">/wp-admin/</a>
        </div>
        
        <p style="color: #666; font-size: 12px; margin-top: 30px;">
            Diagnostic run at: <?php echo date('Y-m-d H:i:s'); ?> | 
            <a href="/">Back to site</a>
        </p>
    </div>
</body>
</html>
