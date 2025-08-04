# Hostinger Git Deployment - Quick Setup

## 🚀 Connect Your Repository to Hostinger in 5 Minutes

### Prerequisites:
- Hostinger hosting account (Premium/Business plan recommended)
- GitHub repository (public or private)
- Domain configured in Hostinger

### Step 1: Access Hostinger Git Manager

1. **Login to Hostinger**
   - Go to: https://hpanel.hostinger.com
   - Enter your credentials

2. **Navigate to Git Manager**
   ```
   Dashboard → Website → [Select cardadvisorhub.com] → Git Repository
   ```
   
   **Alternative Locations:**
   - Advanced → Git Repository
   - Developer Tools → Git Manager
   - Website Tools → Git

### Step 2: Connect Your Repository

**Fill in these details:**

| Field | Value |
|-------|-------|
| **Repository URL** | `https://github.com/YOUR_USERNAME/cardadvisorhub-website.git` |
| **Branch** | `main` |
| **Deploy Path** | `/public_html/` |
| **Auto Deploy** | ✅ Enabled |

### Step 3: Repository URL Examples

**Your Card Advisor Hub:**
```
https://github.com/yourusername/cardadvisorhub-website.git
```

**WordPress Core (Example):**
```
https://github.com/WordPress/WordPress.git
```

**Any Public Repository:**
```
https://github.com/owner/repository-name.git
```

### Step 4: Deployment Paths

Choose the right path for your needs:

| Purpose | Path | Description |
|---------|------|-------------|
| **Full Website** | `/public_html/` | Deploys entire repository to website root |
| **Theme Only** | `/public_html/wp-content/themes/genesis-sample/` | Deploys only to theme folder |
| **Plugin** | `/public_html/wp-content/plugins/your-plugin/` | Deploys to plugin folder |

### Step 5: Test the Connection

1. **Make a change** in your local repository
2. **Commit and push** to GitHub:
   ```bash
   git add .
   git commit -m "Test deployment"
   git push origin main
   ```
3. **Check Hostinger** - Should auto-deploy within 2-5 minutes
4. **Visit your website** to verify changes

### Troubleshooting

**❌ Git Manager Not Available?**
- Contact Hostinger support to enable Git features
- Upgrade to Premium/Business hosting plan
- Use SFTP alternative (see main guide)

**❌ Connection Failed?**
- Verify repository URL is public and correct
- Check branch name (main vs master)
- Ensure deployment path exists
- Try repository URL without `.git` extension

**❌ Auto Deploy Not Working?**
- Check webhook settings in repository
- Verify branch name matches
- Check Hostinger deployment logs
- Try manual deploy first

### Benefits of Hostinger Git Integration:
✅ **Automatic Deployment** - Push to GitHub = Live website update
✅ **No Manual Uploads** - Eliminates SFTP file management
✅ **Version Control** - Full Git history and rollback capability
✅ **Team Collaboration** - Multiple developers can contribute
✅ **Branch Management** - Deploy different branches to different environments
