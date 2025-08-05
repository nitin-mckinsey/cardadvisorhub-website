#!/bin/bash

# Force deployment script for WordPress site
# This script handles conflicts with existing files on the server

echo "Starting forced deployment..."

# Navigate to project directory
cd /path/to/your/project/directory || exit 1

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
