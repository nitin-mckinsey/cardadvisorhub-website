<?php
// 500 Error Diagnostic Script
// This file helps identify the exact cause of 500 errors

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

// Set content type
header('Content-Type: text/html; charset=UTF-8');

echo "<h1>🔍 500 Error Diagnostic Report</h1>";
echo "<p>Generated: " . date('Y-m-d H:i:s') . "</p>";
echo "<hr>";

// Test 1: PHP Basic Functionality
echo "<h2>✅ Test 1: PHP Basic Functionality</h2>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Script Name: " . $_SERVER['SCRIPT_NAME'] . "</p>";

// Test 2: File System Check
echo "<h2>📁 Test 2: File System Check</h2>";
$files_to_check = [
    'wp-config.php' => 'WordPress Configuration',
    'wp-load.php' => 'WordPress Core Loader',
    'wp-blog-header.php' => 'WordPress Blog Header',
    '.htaccess' => 'URL Rewrite Rules',
    'wp-content/themes/genesis-sample/functions.php' => 'Theme Functions',
    'wp-content/themes/genesis-sample/page-compare-cards.php' => 'Compare Cards Page'
];

foreach ($files_to_check as $file => $description) {
    $full_path = $_SERVER['DOCUMENT_ROOT'] . '/' . $file;
    if (file_exists($full_path)) {
        $size = filesize($full_path);
        $perms = substr(sprintf('%o', fileperms($full_path)), -4);
        echo "<p>✅ <strong>$description</strong>: Found ($size bytes, perms: $perms)</p>";
    } else {
        echo "<p>❌ <strong>$description</strong>: Missing</p>";
    }
}

// Test 3: WordPress Detection
echo "<h2>🎯 Test 3: WordPress Detection</h2>";
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php')) {
    echo "<p>✅ wp-config.php found</p>";
    
    // Try to load WordPress constants
    try {
        define('ABSPATH', $_SERVER['DOCUMENT_ROOT'] . '/');
        if (file_exists(ABSPATH . 'wp-config.php')) {
            // Don't actually include wp-config to avoid database connection
            echo "<p>✅ wp-config.php is readable</p>";
        }
    } catch (Exception $e) {
        echo "<p>❌ Error reading wp-config.php: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>❌ wp-config.php not found</p>";
}

// Test 4: Directory Permissions
echo "<h2>🔒 Test 4: Directory Permissions</h2>";
$dirs_to_check = [
    '.' => 'Root Directory',
    'wp-content' => 'WP Content',
    'wp-content/themes' => 'Themes Directory',
    'wp-content/themes/genesis-sample' => 'Theme Directory'
];

foreach ($dirs_to_check as $dir => $description) {
    $full_path = $_SERVER['DOCUMENT_ROOT'] . '/' . $dir;
    if (is_dir($full_path)) {
        $perms = substr(sprintf('%o', fileperms($full_path)), -4);
        $writable = is_writable($full_path) ? 'Writable' : 'Not Writable';
        echo "<p>✅ <strong>$description</strong>: Exists (perms: $perms, $writable)</p>";
    } else {
        echo "<p>❌ <strong>$description</strong>: Missing</p>";
    }
}

// Test 5: PHP Extensions
echo "<h2>🔧 Test 5: PHP Extensions</h2>";
$required_extensions = ['mysqli', 'curl', 'gd', 'mbstring', 'zip', 'openssl'];
foreach ($required_extensions as $ext) {
    if (extension_loaded($ext)) {
        echo "<p>✅ $ext: Loaded</p>";
    } else {
        echo "<p>❌ $ext: Not loaded</p>";
    }
}

// Test 6: Memory and Limits
echo "<h2>💾 Test 6: PHP Configuration</h2>";
echo "<p>Memory Limit: " . ini_get('memory_limit') . "</p>";
echo "<p>Max Execution Time: " . ini_get('max_execution_time') . "s</p>";
echo "<p>Upload Max Filesize: " . ini_get('upload_max_filesize') . "</p>";
echo "<p>Post Max Size: " . ini_get('post_max_size') . "</p>";

// Test 7: Error Log Check
echo "<h2>📋 Test 7: Error Information</h2>";
echo "<p>Error Log Location: " . ini_get('error_log') . "</p>";
echo "<p>Display Errors: " . (ini_get('display_errors') ? 'On' : 'Off') . "</p>";
echo "<p>Log Errors: " . (ini_get('log_errors') ? 'On' : 'Off') . "</p>";

// Test 8: Theme File Content Check
echo "<h2>🎨 Test 8: Theme File Check</h2>";
$theme_functions = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/genesis-sample/functions.php';
if (file_exists($theme_functions)) {
    $content = file_get_contents($theme_functions);
    $lines = count(explode("\n", $content));
    echo "<p>✅ functions.php: $lines lines</p>";
    
    // Check for problematic code
    if (strpos($content, 'genesis_') !== false) {
        echo "<p>⚠️ Genesis framework calls detected (may cause issues without Genesis)</p>";
    }
    if (strpos($content, 'syntax error') !== false || strpos($content, 'parse error') !== false) {
        echo "<p>❌ Potential syntax errors detected</p>";
    }
} else {
    echo "<p>❌ Theme functions.php not found</p>";
}

echo "<hr>";
echo "<h2>🎯 Diagnosis Summary</h2>";

// Provide recommendations
if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php')) {
    echo "<p><strong>🚨 PRIMARY ISSUE: WordPress Core Missing</strong></p>";
    echo "<p>Solution: Install WordPress core files</p>";
} elseif (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php')) {
    echo "<p><strong>🚨 PRIMARY ISSUE: WordPress Not Configured</strong></p>";
    echo "<p>Solution: Configure wp-config.php with database settings</p>";
} else {
    echo "<p><strong>🔍 INVESTIGATION NEEDED: Advanced WordPress Issue</strong></p>";
    echo "<p>WordPress core appears present. Check error logs for specific PHP errors.</p>";
}

echo "<hr>";
echo "<p><small>Diagnostic completed at " . date('Y-m-d H:i:s') . "</small></p>";
?>
