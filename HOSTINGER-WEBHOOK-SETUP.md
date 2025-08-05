# Hostinger GitHub Webhook Setup Guide

## Overview
This guide helps you set up automated deployments from GitHub to Hostinger using webhooks. When you push changes to your GitHub repository, Hostinger will automatically update your live website.

## Files Included
- `webhook-deploy.php` - PHP handler that receives GitHub webhook requests
- `hostinger-webhook-deploy.sh` - Bash script that performs the actual deployment
- `deploy-force.sh` - Alternative deployment script for manual use

## Step-by-Step Setup

### 1. Upload Files to Hostinger
1. Access your Hostinger File Manager or use FTP
2. Upload these files to your website's root directory (public_html):
   - `webhook-deploy.php`
   - `hostinger-webhook-deploy.sh`

### 2. Set File Permissions
Using File Manager or SSH:
```bash
chmod 755 hostinger-webhook-deploy.sh
chmod 644 webhook-deploy.php
```

### 3. Configure the Webhook Handler
Edit `webhook-deploy.php` and update:
```php
define('SECRET_TOKEN', 'your-unique-secret-token-here');
```
**Important:** Choose a strong, unique secret token (like a random 32-character string).

### 4. Set Up GitHub Webhook
1. Go to your GitHub repository: https://github.com/nitin-mckinsey/cardadvisorhub-website
2. Click **Settings** → **Webhooks** → **Add webhook**
3. Configure the webhook:
   - **Payload URL**: `https://yourdomain.com/webhook-deploy.php`
   - **Content type**: `application/json`
   - **Secret**: Enter the same secret token you used in step 3
   - **Events**: Select "Just the push event"
   - **Active**: ✅ Checked

### 5. Test the Setup
1. Make a small change to your repository (like updating README.md)
2. Commit and push to the main branch
3. Check the webhook delivery in GitHub Settings → Webhooks
4. Check the deployment log on your server: `webhook-deploy.log`

## File Locations on Hostinger

### Common Hostinger Directory Structures:
- **Single domain**: `/home/username/public_html/`
- **Multiple domains**: `/home/username/domains/yourdomain.com/public_html/`

### Important Files to Preserve:
- `wp-config.php` (contains database credentials)
- `.htaccess` (server configuration)
- `wp-content/uploads/` (user uploads)

## Troubleshooting

### Check Webhook Logs
View the deployment log:
```bash
tail -f webhook-deploy.log
```

### Common Issues:

**1. Permission Denied**
```bash
chmod 755 hostinger-webhook-deploy.sh
```

**2. Git Repository Not Found**
Ensure your Hostinger directory is properly connected to Git:
```bash
cd public_html
git remote -v
```

**3. Webhook Not Triggering**
- Check GitHub webhook delivery status
- Verify the webhook URL is accessible
- Check webhook-deploy.log for errors

**4. Files Being Overwritten**
The script automatically backs up:
- wp-config.php
- .htaccess

Backups are saved with timestamps like: `wp-config.php.backup.20250805_143022`

### Manual Deployment
If webhook fails, you can run manual deployment:
```bash
cd public_html
bash hostinger-webhook-deploy.sh
```

## Security Considerations

1. **Secret Token**: Always use a strong secret token to verify requests
2. **File Permissions**: Keep sensitive files (wp-config.php) with restrictive permissions
3. **Log Files**: Regularly clean up webhook-deploy.log to prevent it from growing too large
4. **Backup**: Always backup your database before major deployments

## Monitoring

### Check Deployment Status:
```bash
# View recent deployments
tail -20 webhook-deploy.log

# Check git status
git status

# View recent commits
git log --oneline -5
```

### Webhook Delivery Status:
Check GitHub → Repository → Settings → Webhooks for delivery history and response codes.

## Advanced Configuration

### Custom Branch Deployment
To deploy from a different branch, edit `webhook-deploy.php`:
```php
if ($ref !== 'refs/heads/your-branch-name') {
```

### Multiple Environment Setup
You can create separate webhook handlers for staging/production by copying the files and modifying the deployment paths.

## Support
If you encounter issues:
1. Check the webhook-deploy.log file
2. Verify file permissions
3. Test webhook delivery in GitHub
4. Ensure your Hostinger account supports Git operations

## Next Steps
Once set up, your deployment workflow will be:
1. Make changes locally
2. Commit and push to GitHub main branch
3. Webhook automatically triggers deployment
4. Your live site updates within seconds!

---
**Note**: This setup resolves the "untracked working tree files would be overwritten" error by using `git reset --hard` and `git clean -fd` to force synchronization with your repository.
