# Card Advisor Hub - Git Setup Guide

## 🚀 Complete Git Workflow Setup

### Step 1: Initialize Local Repository
Open PowerShell as Administrator and run:

```powershell
# Navigate to your project
cd "c:\Users\nitin\card"

# Initialize Git repository
git init

# Configure Git with your details
git config user.email "info@cardadvisorhub.com"
git config user.name "Card Advisor Hub"

# Add all files to Git (respecting .gitignore)
git add .

# Create initial commit
git commit -m "Initial commit: WordPress theme with credit card comparison functionality"
```

### Step 2: Create GitHub Repository
1. Go to https://github.com
2. Click "New repository"
3. Repository name: `cardadvisorhub-website`
4. Description: `Credit card comparison website for Card Advisor Hub`
5. Keep it **Private** (recommended for production website)
6. Don't initialize with README (we already have files)
7. Click "Create repository"

### Step 3: Connect Local to GitHub
```powershell
# Add GitHub as remote origin
git remote add origin https://github.com/YOUR_USERNAME/cardadvisorhub-website.git

# Push to GitHub (main branch)
git branch -M main
git push -u origin main
```

### Step 4: Create Development Branch
```powershell
# Create and switch to development branch
git checkout -b development

# Push development branch to GitHub
git push -u origin development

# Create feature branch for current work
git checkout -b feature/fix-500-error

# Push feature branch
git push -u origin feature/fix-500-error
```

### Step 5: Set Up Hostinger Git Deployment

#### Option A: Hostinger Git Integration (Recommended)
1. Login to Hostinger control panel
2. Go to "Git" section
3. Click "Create Repository" 
4. Connect to your GitHub repository
5. Set branch: `main` (for production)
6. Set deployment path: `/public_html/`
7. Enable "Auto Deploy on Push"

#### Option B: Manual Git Deployment
Add this to your repository as `.github/workflows/deploy.yml`:
```yaml
name: Deploy to Hostinger
on:
  push:
    branches: [main]
jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Deploy via SFTP
        uses: SamKirkland/FTP-Deploy-Action@4.0.0
        with:
          server: your-hostinger-ftp-server.com
          username: ${{ secrets.FTP_USERNAME }}
          password: ${{ secrets.FTP_PASSWORD }}
          local-dir: ./
```

### Step 6: Development Workflow

#### Daily Development:
```powershell
# Start working on feature
git checkout development
git pull origin development
git checkout -b feature/new-feature-name

# Make your changes, then:
git add .
git commit -m "Add: description of what you added"
git push origin feature/new-feature-name
```

#### Testing Before Production:
```powershell
# Merge feature to development
git checkout development
git merge feature/new-feature-name
git push origin development

# Test on development/staging environment
# If everything works, merge to main:
git checkout main
git merge development
git push origin main  # This triggers production deployment
```

### Step 7: Hostinger SFTP Alternative Setup
If Git deployment isn't available, use SFTP with Git hooks:

```powershell
# Create deployment script
# This will be added to your repository
```

### Branch Strategy:
- `main` → Production (auto-deploys to live site)
- `development` → Testing/staging
- `feature/*` → Individual features
- `hotfix/*` → Emergency fixes

### Benefits:
✅ **No More 500 Errors** - Test changes safely in branches
✅ **Easy Rollback** - Revert to any previous working version
✅ **Team Collaboration** - Multiple people can work safely
✅ **Backup Everything** - Full history in GitHub
✅ **Automated Deployment** - Push to main = live site update

### Emergency Rollback:
```powershell
# If something breaks in production:
git checkout main
git revert HEAD  # Undo last commit
git push origin main  # Deploy the rollback
```

Would you like me to help you execute any of these steps?
