<?php
/**
 * GitHub Webhook Handler for Hostinger
 * This file handles incoming webhook requests from GitHub and triggers deployment
 * 
 * Setup Instructions:
 * 1. Upload this file to your Hostinger public_html directory
 * 2. Set the GitHub webhook URL to: https://yourdomain.com/webhook-deploy.php
 * 3. Set a secret token in GitHub webhook settings
 * 4. Update the SECRET_TOKEN below to match your GitHub webhook secret
 * 5. Ensure the deploy script is executable: chmod +x hostinger-webhook-deploy.sh
 */

// Configuration
define('SECRET_TOKEN', 'your-secret-token-here'); // Change this to match your GitHub webhook secret
define('DEPLOY_SCRIPT', __DIR__ . '/hostinger-webhook-deploy.sh');
define('LOG_FILE', __DIR__ . '/webhook-deploy.log');

// Function to log messages
function logMessage($message) {
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[{$timestamp}] {$message}" . PHP_EOL;
    file_put_contents(LOG_FILE, $logEntry, FILE_APPEND | LOCK_EX);
}

// Function to send response and exit
function sendResponse($statusCode, $message) {
    http_response_code($statusCode);
    echo json_encode(['status' => $statusCode, 'message' => $message]);
    logMessage("Response: {$statusCode} - {$message}");
    exit;
}

// Log the incoming request
logMessage("Webhook request received from IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));

// Verify request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(405, 'Method not allowed');
}

// Get request headers
$headers = getallheaders();
$signature = $headers['X-Hub-Signature-256'] ?? '';
$event = $headers['X-GitHub-Event'] ?? '';

logMessage("GitHub Event: {$event}");

// Get request body
$payload = file_get_contents('php://input');
$payloadData = json_decode($payload, true);

// Verify GitHub signature if secret token is configured
if (SECRET_TOKEN !== 'your-secret-token-here') {
    $expectedSignature = 'sha256=' . hash_hmac('sha256', $payload, SECRET_TOKEN);
    if (!hash_equals($expectedSignature, $signature)) {
        logMessage("Invalid signature. Expected: {$expectedSignature}, Got: {$signature}");
        sendResponse(403, 'Invalid signature');
    }
    logMessage("Signature verified successfully");
}

// Only process push events to main branch
if ($event !== 'push') {
    logMessage("Ignoring non-push event: {$event}");
    sendResponse(200, 'Event ignored (not a push)');
}

// Check if push is to main branch
$ref = $payloadData['ref'] ?? '';
if ($ref !== 'refs/heads/main') {
    logMessage("Ignoring push to branch: {$ref}");
    sendResponse(200, 'Push ignored (not main branch)');
}

// Log deployment details
$commits = $payloadData['commits'] ?? [];
$commitCount = count($commits);
$pusher = $payloadData['pusher']['name'] ?? 'unknown';
$repoName = $payloadData['repository']['name'] ?? 'unknown';

logMessage("Starting deployment for {$repoName}");
logMessage("Pushed by: {$pusher}");
logMessage("Commits: {$commitCount}");

// Log recent commits
foreach (array_slice($commits, 0, 3) as $commit) {
    $shortId = substr($commit['id'], 0, 7);
    $message = substr($commit['message'], 0, 50);
    logMessage("Commit {$shortId}: {$message}");
}

// Check if deploy script exists
if (!file_exists(DEPLOY_SCRIPT)) {
    sendResponse(500, 'Deploy script not found');
}

// Make sure deploy script is executable
chmod(DEPLOY_SCRIPT, 0755);

// Execute deployment script
logMessage("Executing deployment script...");
$output = [];
$returnCode = 0;

// Run the deployment script and capture output
exec(DEPLOY_SCRIPT . ' 2>&1', $output, $returnCode);

// Log deployment output
foreach ($output as $line) {
    logMessage("Deploy: {$line}");
}

// Check deployment result
if ($returnCode === 0) {
    logMessage("Deployment completed successfully");
    sendResponse(200, 'Deployment successful');
} else {
    logMessage("Deployment failed with return code: {$returnCode}");
    sendResponse(500, 'Deployment failed');
}
?>
