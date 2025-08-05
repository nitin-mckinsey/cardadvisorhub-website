<?php
// Simple webhook handler for Hostinger
// Copy this content and create webhook.php in Hostinger File Manager

// Log function
function logMsg($msg) {
    file_put_contents('deploy.log', date('Y-m-d H:i:s') . " - " . $msg . "\n", FILE_APPEND);
}

logMsg("Webhook received from IP: " . $_SERVER['REMOTE_ADDR']);

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Get GitHub payload
$payload = json_decode(file_get_contents('php://input'), true);
$ref = $payload['ref'] ?? '';

// Only deploy main branch pushes
if ($ref !== 'refs/heads/main') {
    logMsg("Ignoring push to: " . $ref);
    exit('Not main branch');
}

logMsg("Deploying main branch...");

// Execute deployment
$output = shell_exec('bash simple-deploy.sh 2>&1');
logMsg("Deploy output: " . $output);

echo "Deployment triggered";
?>
