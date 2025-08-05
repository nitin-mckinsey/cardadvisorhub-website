# Deployment Fix Guide

## Issue
Deployment fails with error: "The following untracked working tree files would be overwritten by merge"

## Root Cause
The deployment server has existing WordPress files that aren't tracked by git, causing conflicts when trying to pull from the repository.

## Solution Options

### Option 1: Force Reset (Recommended)
Run these commands on the deployment server:

```bash
# Navigate to your project directory
cd /path/to/your/project/directory

# Fetch latest changes
git fetch origin main

# Force reset to match remote (CAUTION: This overwrites local changes)
git reset --hard origin/main

# Clean up untracked files
git clean -fd
```

### Option 2: Stash and Pull
If you want to preserve some local changes:

```bash
# Stash any local changes
git stash

# Pull latest changes
git pull origin main

# If needed, apply stashed changes back
git stash pop
```

### Option 3: Manual File Management
If you need to preserve specific files:

```bash
# Backup important files first
cp wp-config.php wp-config.php.backup
cp .htaccess .htaccess.backup

# Then proceed with force reset
git reset --hard origin/main
git clean -fd

# Restore backed up files if needed
cp wp-config.php.backup wp-config.php
cp .htaccess.backup .htaccess
```

## For Hostinger or cPanel Deployment

### Via File Manager:
1. Access your hosting control panel
2. Open File Manager
3. Navigate to your website's root directory
4. Delete conflicting files (or backup first)
5. Use Git Deploy feature or manual upload

### Via SSH (if available):
1. SSH into your server
2. Navigate to your website directory
3. Run the force reset commands above

## Prevention
To avoid this issue in future deployments:

1. Always use `.gitignore` for environment-specific files
2. Keep wp-config.php and sensitive files out of the repository
3. Use proper deployment workflows
4. Consider using deployment tools that handle conflicts automatically

## Files Commonly Causing Conflicts
- wp-config.php (should be environment-specific)
- .htaccess (may have server-specific rules)
- WordPress core files (if manually updated)
- Plugin/theme files (if manually modified)
- Upload directories with user content

## Next Steps
1. Choose one of the solution options above
2. Test the deployment in a staging environment first
3. Always backup your database before major deployments
4. Consider setting up automated deployments with proper conflict handling
