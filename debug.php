<?php
/**
 * WordPress Error Debug Tool
 * Helps identify critical errors and fix them
 */

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

?>
<!DOCTYPE html>
<html>
<head>
    <title>WordPress Error Debug - Card Advisor Hub</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f1f1f1; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .status { padding: 15px; margin: 10px 0; border-radius: 5px; }
        .ok { background: #d4edda; border: 1px solid #c3e6cb; color: #155724; }
        .error { background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; }
        .warning { background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; }
        .debug { background: #f8f9fa; border: 1px solid #dee2e6; color: #495057; font-family: monospace; white-space: pre-wrap; }
        .fix-btn { background: #28a745; color: white; padding: 8px 16px; border: none; border-radius: 3px; cursor: pointer; margin: 5px; }
        .fix-btn:hover { background: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 WordPress Critical Error Debug</h1>
        
        <h2>Error Detection</h2>
        
        <?php
        echo "<div class='status ok'>✅ PHP Error Reporting Enabled</div>";
        
        // Check WordPress files
        $wpFiles = [
            'wp-load.php' => 'WordPress Bootstrap',
            'wp-config.php' => 'WordPress Configuration',
            'wp-blog-header.php' => 'WordPress Header',
            'wp-settings.php' => 'WordPress Settings'
        ];
        
        $allPresent = true;
        foreach ($wpFiles as $file => $desc) {
            if (file_exists(__DIR__ . '/' . $file)) {
                echo "<div class='status ok'>✅ <strong>$file</strong> - $desc</div>";
            } else {
                echo "<div class='status error'>❌ <strong>$file</strong> - $desc (MISSING)</div>";
                $allPresent = false;
            }
        }
        
        if ($allPresent) {
            echo "<h2>Testing WordPress Load</h2>";
            
            // Test 1: Try to load wp-config.php
            echo "<h3>Test 1: WordPress Configuration</h3>";
            try {
                if (file_exists(__DIR__ . '/wp-config.php')) {
                    // Capture any output/errors
                    ob_start();
                    $error = null;
                    
                    // Try to include wp-config.php
                    try {
                        define('SHORTINIT', true); // Minimal WordPress load
                        include_once(__DIR__ . '/wp-config.php');
                        echo "<div class='status ok'>✅ wp-config.php loaded successfully</div>";
                    } catch (Exception $e) {
                        $error = $e->getMessage();
                    } catch (Error $e) {
                        $error = $e->getMessage();
                    }
                    
                    $output = ob_get_clean();
                    
                    if ($error) {
                        echo "<div class='status error'>❌ wp-config.php error: $error</div>";
                    }
                    
                    if ($output && trim($output)) {
                        echo "<div class='status warning'>⚠️ wp-config.php output:</div>";
                        echo "<div class='debug'>$output</div>";
                    }
                } else {
                    echo "<div class='status error'>❌ wp-config.php not found</div>";
                }
            } catch (Exception $e) {
                echo "<div class='status error'>❌ Configuration test failed: " . $e->getMessage() . "</div>";
            }
            
            // Test 2: Check database connection
            echo "<h3>Test 2: Database Connection</h3>";
            if (defined('DB_HOST') && defined('DB_NAME') && defined('DB_USER') && defined('DB_PASSWORD')) {
                try {
                    $pdo = new PDO(
                        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                        DB_USER,
                        DB_PASSWORD,
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                    );
                    echo "<div class='status ok'>✅ Database connection successful</div>";
                    
                    // Check if WordPress tables exist
                    $tables = $pdo->query("SHOW TABLES LIKE 'wp_%'")->fetchAll();
                    if (count($tables) > 0) {
                        echo "<div class='status ok'>✅ WordPress tables found (" . count($tables) . " tables)</div>";
                    } else {
                        echo "<div class='status warning'>⚠️ No WordPress tables found - WordPress may need installation</div>";
                    }
                    
                } catch (Exception $e) {
                    echo "<div class='status error'>❌ Database connection failed: " . $e->getMessage() . "</div>";
                }
            } else {
                echo "<div class='status error'>❌ Database constants not defined in wp-config.php</div>";
            }
            
            // Test 3: Check theme files
            echo "<h3>Test 3: Theme Files</h3>";
            $themeDir = __DIR__ . '/wp-content/themes/genesis-sample/';
            if (is_dir($themeDir)) {
                echo "<div class='status ok'>✅ Genesis Sample theme directory exists</div>";
                
                $themeFiles = ['functions.php', 'style.css', 'page-compare-cards.php'];
                foreach ($themeFiles as $file) {
                    if (file_exists($themeDir . $file)) {
                        echo "<div class='status ok'>✅ Theme file: $file</div>";
                    } else {
                        echo "<div class='status warning'>⚠️ Missing theme file: $file</div>";
                    }
                }
                
                // Test functions.php for syntax errors
                if (file_exists($themeDir . 'functions.php')) {
                    $syntaxCheck = shell_exec("php -l " . escapeshellarg($themeDir . 'functions.php') . " 2>&1");
                    if (strpos($syntaxCheck, 'No syntax errors') !== false) {
                        echo "<div class='status ok'>✅ functions.php syntax is valid</div>";
                    } else {
                        echo "<div class='status error'>❌ functions.php syntax error:</div>";
                        echo "<div class='debug'>$syntaxCheck</div>";
                    }
                }
            } else {
                echo "<div class='status error'>❌ Genesis Sample theme directory not found</div>";
            }
            
            // Test 4: Try minimal WordPress load
            echo "<h3>Test 4: Minimal WordPress Load</h3>";
            try {
                // Reset and try minimal load
                ob_start();
                $loadError = null;
                
                // Undefine SHORTINIT if set
                if (defined('SHORTINIT')) {
                    // Can't undefine, so we'll work around it
                }
                
                try {
                    // Try to load WordPress minimally
                    $_GET['doing_wp_cron'] = '1'; // Prevent cron
                    define('WP_INSTALLING', true);
                    
                    if (file_exists(__DIR__ . '/wp-load.php')) {
                        include_once(__DIR__ . '/wp-load.php');
                        echo "<div class='status ok'>✅ WordPress core loaded successfully</div>";
                    }
                } catch (Exception $e) {
                    $loadError = $e->getMessage();
                } catch (Error $e) {
                    $loadError = $e->getMessage();
                } catch (ParseError $e) {
                    $loadError = "Parse Error: " . $e->getMessage();
                }
                
                $loadOutput = ob_get_clean();
                
                if ($loadError) {
                    echo "<div class='status error'>❌ WordPress load error: $loadError</div>";
                }
                
                if ($loadOutput && trim($loadOutput)) {
                    echo "<div class='status warning'>⚠️ WordPress load output:</div>";
                    echo "<div class='debug'>$loadOutput</div>";
                }
                
            } catch (Exception $e) {
                echo "<div class='status error'>❌ WordPress load test failed: " . $e->getMessage() . "</div>";
            }
        }
        ?>
        
        <h2>Common Fixes</h2>
        <div class="status">
            <strong>Based on the results above, try these fixes:</strong><br><br>
            
            <button class="fix-btn" onclick="window.location.href='?action=fix-index'">
                Fix 1: Restore WordPress index.php
            </button>
            <br><small>Replaces emergency index.php with WordPress index.php</small><br><br>
            
            <button class="fix-btn" onclick="window.location.href='?action=fix-functions'">
                Fix 2: Reset functions.php
            </button>
            <br><small>Creates minimal functions.php without errors</small><br><br>
            
            <button class="fix-btn" onclick="window.location.href='?action=fix-config'">
                Fix 3: Reset wp-config.php
            </button>
            <br><small>Creates new wp-config.php with proper settings</small><br><br>
            
            <button class="fix-btn" onclick="window.location.href='?action=enable-debug'">
                Fix 4: Enable WordPress Debug
            </button>
            <br><small>Shows detailed error messages</small>
        </div>
        
        <h2>Manual Fixes</h2>
        <div class="status">
            <strong>If automatic fixes don't work:</strong><br>
            1. Check <strong>Hostinger Error Logs</strong> in control panel<br>
            2. Temporarily rename <strong>wp-content/themes</strong> to test default theme<br>
            3. Deactivate all plugins via database or file manager<br>
            4. Increase PHP memory limit in .htaccess<br>
            5. Contact Hostinger support for server-level issues
        </div>
        
        <p style="color: #666; font-size: 12px; margin-top: 30px;">
            Debug run at: <?php echo date('Y-m-d H:i:s'); ?> | 
            <a href="/diagnostic.php">Main Diagnostic</a> | 
            <a href="/">Back to site</a>
        </p>
    </div>
</body>
</html>

<?php
// Handle fix actions
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    
    if ($action === 'fix-index') {
        // Replace emergency index.php with WordPress index.php
        if (file_exists(__DIR__ . '/wp-index.php')) {
            copy(__DIR__ . '/wp-index.php', __DIR__ . '/index.php');
            echo "<script>alert('WordPress index.php restored! Refresh the page.'); window.location.href='/debug.php';</script>";
        } else {
            $wpIndex = '<?php
/**
 * Front to the WordPress application.
 */
define( \'WP_USE_THEMES\', true );
require __DIR__ . \'/wp-blog-header.php\';
';
            file_put_contents(__DIR__ . '/index.php', $wpIndex);
            echo "<script>alert('WordPress index.php created! Refresh the page.'); window.location.href='/debug.php';</script>";
        }
    }
    
    if ($action === 'fix-functions') {
        $functionsPath = __DIR__ . '/wp-content/themes/genesis-sample/functions.php';
        if (file_exists($functionsPath)) {
            // Create backup
            copy($functionsPath, $functionsPath . '.backup');
            
            // Create minimal functions.php
            $minimalFunctions = '<?php
/**
 * Genesis Sample Theme Functions - Minimal Version
 */

// Prevent direct access
if (!defined(\'ABSPATH\')) {
    exit;
}

// Basic theme support
add_theme_support(\'post-thumbnails\');
add_theme_support(\'title-tag\');
add_theme_support(\'html5\', [\'search-form\', \'comment-form\', \'comment-list\']);

// Enqueue styles
function genesis_sample_enqueue_styles() {
    wp_enqueue_style(\'genesis-sample-style\', get_stylesheet_uri());
}
add_action(\'wp_enqueue_scripts\', \'genesis_sample_enqueue_styles\');
';
            file_put_contents($functionsPath, $minimalFunctions);
            echo "<script>alert('functions.php fixed! Original backed up. Refresh the page.'); window.location.href='/debug.php';</script>";
        }
    }
    
    if ($action === 'enable-debug') {
        // Enable WordPress debug mode
        if (file_exists(__DIR__ . '/wp-config.php')) {
            $config = file_get_contents(__DIR__ . '/wp-config.php');
            
            // Add debug constants
            $debugConfig = "
// Debug settings
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);

";
            
            $config = str_replace("/* That's all, stop editing!", $debugConfig . "/* That's all, stop editing!", $config);
            file_put_contents(__DIR__ . '/wp-config.php', $config);
            echo "<script>alert('WordPress debug enabled! Check error messages.'); window.location.href='/debug.php';</script>";
        }
    }
}
?>
