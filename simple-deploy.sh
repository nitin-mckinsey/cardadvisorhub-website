#!/bin/bash
# Simple deployment script for Hostinger
# Copy this content and create a new file in Hostinger File Manager

echo "=== Starting Deployment ==="
cd $HOME/public_html || exit 1

# Check if git repo exists
if [ ! -d ".git" ]; then
    echo "ERROR: No git repository found"
    exit 1
fi

# Backup important files
[ -f "wp-config.php" ] && cp wp-config.php wp-config.backup
[ -f ".htaccess" ] && cp .htaccess .htaccess.backup

# Force pull latest changes
echo "Fetching from GitHub..."
git fetch origin main
git reset --hard origin/main
git clean -fd

echo "=== Deployment Complete ==="
echo "Current commit: $(git rev-parse --short HEAD)"
