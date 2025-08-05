# Force deployment script for WordPress site (PowerShell version)
# This script handles conflicts with existing files on the server

Write-Host "Starting forced deployment..." -ForegroundColor Green

# Check if current directory is a git repository
if (-not (Test-Path ".git")) {
    Write-Host "Error: Not a git repository" -ForegroundColor Red
    exit 1
}

try {
    # Fetch latest changes from remote
    Write-Host "Fetching latest changes..." -ForegroundColor Yellow
    git fetch origin main
    
    if ($LASTEXITCODE -ne 0) {
        throw "Failed to fetch from remote repository"
    }

    # Reset local state to match remote (this will overwrite local changes)
    Write-Host "Resetting to match remote repository..." -ForegroundColor Yellow
    git reset --hard origin/main
    
    if ($LASTEXITCODE -ne 0) {
        throw "Failed to reset to remote state"
    }

    # Clean up any untracked files and directories
    Write-Host "Cleaning up untracked files..." -ForegroundColor Yellow
    git clean -fd
    
    if ($LASTEXITCODE -ne 0) {
        throw "Failed to clean untracked files"
    }

    Write-Host "Deployment completed successfully!" -ForegroundColor Green
    Write-Host "Repository is now synchronized with remote main branch" -ForegroundColor Green
}
catch {
    Write-Host "Deployment failed: $($_.Exception.Message)" -ForegroundColor Red
    exit 1
}
