# Deploy script for Hostinger
# This script helps deploy your WordPress site safely

Write-Host "=== Card Advisor Hub Deployment Script ===" -ForegroundColor Cyan

# Configuration
$projectPath = "c:\Users\nitin\card"
$remoteBranch = "main"

# Step 1: Ensure we're on the right branch
Write-Host "Checking Git status..." -ForegroundColor Yellow
Set-Location $projectPath

try {
    # Check current branch
    $currentBranch = git branch --show-current 2>$null
    Write-Host "Current branch: $currentBranch" -ForegroundColor Green
    
    # Check for uncommitted changes
    $status = git status --porcelain 2>$null
    if ($status) {
        Write-Host "⚠️  You have uncommitted changes:" -ForegroundColor Yellow
        git status --short
        
        $commit = Read-Host "Do you want to commit these changes? (y/n)"
        if ($commit -eq "y" -or $commit -eq "Y") {
            $message = Read-Host "Enter commit message"
            git add .
            git commit -m $message
            Write-Host "✓ Changes committed" -ForegroundColor Green
        } else {
            Write-Host "❌ Deployment cancelled - please commit or stash changes" -ForegroundColor Red
            exit 1
        }
    }
    
    # Push to GitHub
    Write-Host "Pushing to GitHub..." -ForegroundColor Yellow
    git push origin $currentBranch
    
    if ($currentBranch -eq "main") {
        Write-Host "🚀 Deployed to production!" -ForegroundColor Green
        Write-Host "Your changes should appear on the live site shortly." -ForegroundColor Cyan
    } else {
        Write-Host "✓ Pushed to $currentBranch branch" -ForegroundColor Green
        Write-Host "To deploy to production, merge this branch to main." -ForegroundColor Yellow
    }
    
} catch {
    Write-Host "❌ Deployment failed: $($_.Exception.Message)" -ForegroundColor Red
}

Write-Host "`nNext steps:" -ForegroundColor Cyan
Write-Host "1. Check your website: https://cardadvisorhub.com" -ForegroundColor White
Write-Host "2. Monitor for any issues" -ForegroundColor White
Write-Host "3. If problems occur, run: git revert HEAD && git push" -ForegroundColor White
