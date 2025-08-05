#!/bin/bash

# Hostinger Webhook Deployment Script
# Optimized for Hostinger's Git deployment system
# Place this script in your Hostinger file manager or run via SSH

echo "=== Hostinger Webhook Deployment Started ==="
echo "Repository: cardadvisorhub-website"
echo "Time: $(date)"

# Function to log with timestamp
log() {
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] $1"
}

# Find the correct project directory
PROJECT_DIR=""
if [ -d "$HOME/public_html/.git" ]; then
    PROJECT_DIR="$HOME/public_html"
elif [ -d "$HOME/domains/*/public_html/.git" ]; then
    PROJECT_DIR=$(find $HOME/domains -name "public_html" -type d | head -1)
else
    log "ERROR: Git repository not found in common Hostinger locations"
    log "Please check your repository setup"
    exit 1
fi

log "Using project directory: $PROJECT_DIR"
cd "$PROJECT_DIR" || exit 1

# Verify this is a git repository
if [ ! -d ".git" ]; then
    log "ERROR: Not a git repository"
    exit 1
fi

# Check git remote
REMOTE_URL=$(git remote get-url origin 2>/dev/null)
log "Remote repository: $REMOTE_URL"

# Backup critical files before deployment
log "Creating backup of critical files..."
if [ -f "wp-config.php" ]; then
    cp wp-config.php wp-config.php.backup.$(date +%Y%m%d_%H%M%S)
    log "Backed up wp-config.php"
fi

if [ -f ".htaccess" ]; then
    cp .htaccess .htaccess.backup.$(date +%Y%m%d_%H%M%S)
    log "Backed up .htaccess"
fi

# Fetch latest changes from remote
log "Fetching latest changes from GitHub..."
if git fetch origin main; then
    log "Successfully fetched from remote"
else
    log "ERROR: Failed to fetch from remote"
    exit 1
fi

# Show what changes will be applied
log "Changes to be deployed:"
git log --oneline HEAD..origin/main | head -5

# Reset local state to match remote (this will overwrite local changes)
log "Resetting to match remote repository..."
if git reset --hard origin/main; then
    log "Successfully reset to remote state"
else
    log "ERROR: Failed to reset to remote state"
    exit 1
fi

# Clean up any untracked files and directories
log "Cleaning up untracked files..."
if git clean -fd; then
    log "Successfully cleaned untracked files"
else
    log "WARNING: Some files could not be cleaned"
fi

# Restore critical files if they were overwritten
if [ -f "wp-config.php.backup.$(date +%Y%m%d_%H%M%S)" ] && [ ! -f "wp-config.php" ]; then
    cp wp-config.php.backup.$(date +%Y%m%d_%H%M%S) wp-config.php
    log "Restored wp-config.php from backup"
fi

# Set proper file permissions for Hostinger
log "Setting file permissions..."
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
chmod 600 wp-config.php 2>/dev/null

# Show current git status
log "Current repository status:"
git status --porcelain

log "=== Deployment completed successfully! ==="
log "Repository is now synchronized with GitHub main branch"
log "Current commit: $(git rev-parse --short HEAD)"
log "Deploy finished at: $(date)"

# Optional: Clear any caches (uncomment if needed)
# log "Clearing WordPress caches..."
# rm -rf wp-content/cache/* 2>/dev/null
# rm -rf wp-content/litespeed/css/* 2>/dev/null
# rm -rf wp-content/litespeed/js/* 2>/dev/null

echo "=== Deployment Log End ==="
