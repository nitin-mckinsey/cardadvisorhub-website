#!/bin/bash

# Force deployment script for WordPress site on Hostinger
# This script handles conflicts with existing files on the server
# Designed to work with GitHub webhooks on Hostinger

echo "Starting forced deployment..."

# Navigate to project directory (adjust this path for your Hostinger setup)
# Common Hostinger paths: /home/username/public_html or /home/username/domains/yourdomain.com/public_html
cd $HOME/public_html || cd $HOME/domains/*/public_html || exit 1

# Check if it's a git repository
if [ ! -d ".git" ]; then
    echo "Error: Not a git repository"
    exit 1
fi

# Fetch latest changes from remote
echo "Fetching latest changes..."
git fetch origin main

# Reset local state to match remote (this will overwrite local changes)
echo "Resetting to match remote repository..."
git reset --hard origin/main

# Clean up any untracked files and directories
echo "Cleaning up untracked files..."
git clean -fd

echo "Deployment completed successfully!"
echo "Repository is now synchronized with remote main branch"
