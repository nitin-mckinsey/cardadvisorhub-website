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

**For Your Card Advisor Hub Repository:**

1. **Login to Hostinger Control Panel**
   - Go to https://hpanel.hostinger.com
   - Login with your credentials

2. **Access Git Manager**
   - Go to "Website" section
   - Select your domain (cardadvisorhub.com)
   - Look for "Git" or "Git Manager" in the sidebar (usually under "Advanced" or "Developer Tools")
   - Click "Create Repository" or "Connect Repository"

3. **Connect Your GitHub Repository**
   - **Repository URL:** `https://github.com/YOUR_USERNAME/cardadvisorhub-website.git`
   - **Repository Type:** Public Repository
   - **Branch:** `main` (for production deployment)
   - **Deployment Path:** 
     - For full website: `/public_html/`
     - For theme only: `/public_html/wp-content/themes/genesis-sample/`
   - **Auto Deploy:** Enable "Auto Deploy on Push"

4. **Example Public Repository Connection**
   If you want to connect to the WordPress core repository as an example:
   - **Repository URL:** `https://github.com/WordPress/WordPress.git`
   - **Branch:** `master` (WordPress uses master branch)
   - **Deployment Path:** `/public_html/`
   - This would deploy the entire WordPress core

5. **Authentication for Public Repos**
   - Public repositories don't require SSH keys or authentication
   - Simply provide the HTTPS URL: `https://github.com/username/repository.git`
   - Hostinger will clone and pull updates automatically

6. **Hostinger Git Interface Steps:**
   ```
   1. Repository URL: https://github.com/YOUR_USERNAME/cardadvisorhub-website.git
   2. Branch: main
   3. Target Directory: public_html
   4. Click "Create" or "Connect"
   5. Wait for initial deployment
   6. Enable "Auto Deploy" checkbox
   7. Copy webhook URL: https://webhooks.hostinger.com/deploy/b389530323348f25ed5d5ca482a5877b
   ```

7. **Set Up GitHub Webhook for Auto-Deployment:**
   
   **Step A: Go to GitHub Repository Settings**
   ```
   1. Go to your GitHub repository
   2. Click "Settings" tab
   3. Click "Webhooks" in left sidebar
   4. Click "Add webhook"
   ```
   
   **Step B: Configure Webhook**
   ```
   Payload URL: https://webhooks.hostinger.com/deploy/b389530323348f25ed5d5ca482a5877b
   Content type: application/json
   Secret: (leave empty)
   SSL verification: Enable SSL verification
   Which events: Just the push event
   Active: ✓ (checked)
   ```
   
   **Step C: Test Webhook**
   ```
   1. Click "Add webhook"
   2. GitHub will test the connection
   3. You should see a green checkmark if successful
   4. Hostinger will now auto-deploy on every push to main branch
   ```

#### Hostinger Git Manager Locations:

**Where to Find Git Manager in Hostinger:**
- **Premium Hosting:** Website → Advanced → Git Repository
- **Business Hosting:** Website → Developer Tools → Git Manager  
- **Cloud Hosting:** Website → Git Repository
- If not visible, contact Hostinger support to enable Git features

**Step-by-Step Hostinger Git Setup:**

1. **Navigate to Git Manager**
   ```
   Hostinger Panel → Website → [Your Domain] → Git Repository
   ```

2. **Create New Repository Connection**
   ```
   Click "Create Repository" or "Connect Repository"
   ```

3. **Fill Repository Details**
   ```
   Repository URL: https://github.com/YOUR_USERNAME/cardadvisorhub-website.git
   Branch: main
   Deploy Path: /public_html/
   Auto Deploy: ✓ Enable
   ```

4. **For Public Repositories (No Authentication Needed)**
   ```
   ✅ Public repos work with HTTPS URLs
   ✅ No SSH keys required
   ✅ No GitHub tokens needed
   ✅ Just paste the repository URL
   ```

5. **Repository URL Examples**
   ```
   Your Repository: https://github.com/yourusername/cardadvisorhub-website.git
   WordPress Core: https://github.com/WordPress/WordPress.git
   Any Public Repo: https://github.com/owner/repository.git
   ```

#### Troubleshooting Hostinger Git Connection:

**If Git Manager is Missing:**
- Upgrade to Premium/Business hosting plan
- Contact Hostinger support to enable Git features
- Use Alternative Option C (SFTP) below

**If Connection Fails:**
- Ensure repository URL is correct and public
- Try without `.git` extension
- Check branch name (main vs master)
- Verify deployment path exists
If Git integration isn't available on your plan:

1. **Use File Manager**
   - Go to Hostinger Control Panel
   - Open "File Manager"
   - Navigate to `/public_html/`

2. **Manual Upload Process**
   - After making changes locally and pushing to GitHub
   - Download your repository as ZIP from GitHub
   - Extract and upload via File Manager
   - Or use the deployment script below

#### Option C: SFTP Deployment (Your Current Method Enhanced)
Update your `.vscode/sftp.json` to work with Git:

```json
{
    "name": "Hostinger Production",
    "host": "files.000webhost.com",
    "protocol": "sftp",
    "port": 22,
    "username": "your-username",
    "password": "your-password",
    "remotePath": "/public_html",
    "uploadOnSave": false,
    "useTempFile": false,
    "openSsh": false,
    "syncOption": {
        "delete": true,
        "skipCreate": false,
        "ignoreExisting": false
    },
    "ignore": [
        ".vscode",
        ".git",
        "local-development-backup",
        "website-backup",
        "*.md",
        "*.ps1"
    ]
}
```

#### Option D: GitHub Actions Deployment
Create `.github/workflows/deploy-hostinger.yml`:

```yaml
name: Deploy to Hostinger
on:
  push:
    branches: [main]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout code
        uses: actions/checkout@v3

      - name: Deploy to Hostinger via SFTP
        uses: SamKirkland/FTP-Deploy-Action@4.3.3
        with:
          server: files.000webhost.com
          username: ${{ secrets.HOSTINGER_USERNAME }}
          password: ${{ secrets.HOSTINGER_PASSWORD }}
          local-dir: ./
          server-dir: /public_html/
          exclude: |
            **/.git*
            **/.git*/**
            **/node_modules/**
            .vscode/
            *.md
            *.ps1
            local-development-backup/
            website-backup/
```

**To set up GitHub Actions:**
1. Go to your GitHub repository
2. Go to Settings → Secrets and variables → Actions
3. Add these secrets:
   - `HOSTINGER_USERNAME`: Your Hostinger SFTP username
   - `HOSTINGER_PASSWORD`: Your Hostinger SFTP password

### Hostinger-Specific Configuration:

#### Find Your Hostinger SFTP Details:
1. Login to Hostinger Control Panel
2. Go to "Website" → Your domain
3. Look for "SFTP Access" or "File Manager"
4. Note down: Host, Username, Password, Port (usually 22)

#### Common Hostinger Hosts:
- `files.000webhost.com` (Free hosting)
- `your-domain.com` (Premium hosting)
- IP address provided in SFTP details

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
