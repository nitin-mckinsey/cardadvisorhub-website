# GitHub Webhook Setup for Hostinger Auto-Deployment

## 🚀 Your Hostinger Webhook URL:
```
https://webhooks.hostinger.com/deploy/b389530323348f25ed5d5ca482a5877b
```

## Step-by-Step Webhook Configuration:

### 1. Go to Your GitHub Repository
- Navigate to: `https://github.com/YOUR_USERNAME/cardadvisorhub-website`
- Click the **"Settings"** tab (far right)

### 2. Access Webhooks Section
- In the left sidebar, click **"Webhooks"**
- Click **"Add webhook"** button

### 3. Configure Webhook Settings

| Field | Value |
|-------|-------|
| **Payload URL** | `https://webhooks.hostinger.com/deploy/b389530323348f25ed5d5ca482a5877b` |
| **Content type** | `application/json` |
| **Secret** | (leave empty) |
| **SSL verification** | ✅ Enable SSL verification |
| **Which events would you like to trigger this webhook?** | **Just the push event** |
| **Active** | ✅ Checked |

### 4. Save and Test
1. Click **"Add webhook"**
2. GitHub will automatically test the connection
3. Look for a **green checkmark** ✅ next to the webhook
4. If you see a red X ❌, check the webhook URL

### 5. Test Auto-Deployment

**Make a small test change:**
```powershell
# Navigate to your project
cd "c:\Users\nitin\card"

# Make a small test change
echo "# Test auto-deployment" >> test-deploy.txt

# Commit and push to trigger deployment
git add .
git commit -m "Test: Auto-deployment webhook"
git push origin main
```

**What should happen:**
1. GitHub receives the push
2. GitHub triggers the webhook to Hostinger
3. Hostinger automatically deploys your changes
4. Your website updates within 2-5 minutes

### 6. Monitor Deployment

**Check deployment status:**
- Go to Hostinger Control Panel
- Navigate to Git Repository section
- Look for deployment logs/history
- You should see the latest deployment triggered by the webhook

### Troubleshooting Webhook Issues:

**❌ Webhook shows red X:**
- Double-check the webhook URL is exactly: `https://webhooks.hostinger.com/deploy/b389530323348f25ed5d5ca482a5877b`
- Ensure SSL verification is enabled
- Content type should be `application/json`

**❌ No auto-deployment happening:**
- Check if webhook is active (green checkmark)
- Verify you're pushing to the `main` branch
- Check Hostinger deployment logs for errors
- Make sure the repository branch matches in Hostinger settings

**❌ Deployment fails:**
- Check Hostinger deployment logs
- Verify deployment path is correct (`/public_html/`)
- Ensure no file permission issues

### Success Indicators:
✅ Green checkmark next to webhook in GitHub
✅ Recent delivery shows successful response (200 status)
✅ Hostinger shows latest deployment in Git logs
✅ Changes appear on your live website

### Your Deployment Workflow is Now:
```
Local Changes → Git Commit → Git Push → GitHub → Webhook → Hostinger → Live Website
```

**Time from push to live:** ~2-5 minutes ⚡
