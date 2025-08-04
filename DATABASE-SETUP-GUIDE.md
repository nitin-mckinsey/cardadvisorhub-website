# 🗄️ Database Setup Guide for Card Advisor Hub

## Step 1: Get Database Credentials from Hostinger

### Access Database Information:
1. **Login to Hostinger Control Panel**: https://hpanel.hostinger.com
2. **Go to**: Websites → cardadvisorhub.com → Databases
3. **Find MySQL Database section**
4. **Note down these details**:
   - Database Name: `u369909869_something` (example)
   - Database Username: `u369909869_user` (example)  
   - Database Password: `[your password]`
   - Database Host: `localhost` (usually)

### Alternative Method - Auto-Detection:
If database already exists, these might work:
- **Host**: `localhost`
- **Database Name**: Check hosting panel for existing database
- **Username**: Usually same as hosting username
- **Password**: Set during hosting setup

## Step 2: Create wp-config.php

### Option A: Use Template (Recommended)
1. Copy `wp-config-template.php` to `wp-config.php`
2. Edit the database details:
   ```php
   define( 'DB_NAME', 'u369909869_cardadvisor' );
   define( 'DB_USER', 'u369909869_user' );
   define( 'DB_PASSWORD', 'your_actual_password' );
   define( 'DB_HOST', 'localhost' );
   ```

### Option B: WordPress Setup Wizard
1. After installing WordPress core, visit: https://cardadvisorhub.com
2. WordPress will guide you through database setup
3. Enter your database credentials when prompted

## Step 3: Generate Security Keys

### Get Unique Security Keys:
1. **Visit**: https://api.wordpress.org/secret-key/1.1/salt/
2. **Copy the generated keys**
3. **Replace** the "put your unique phrase here" lines in wp-config.php

Example:
```php
define( 'AUTH_KEY',         'r6+@$j4K1^nN8)Y9*2#mZ' );
define( 'SECURE_AUTH_KEY',  '9&%qL#xM2*K8^N6@R+j4K1' );
// ... continue for all 8 keys
```

## Step 4: WordPress Installation Process

### After wp-config.php is ready:
1. **Visit**: https://cardadvisorhub.com
2. **WordPress Installation Screen** should appear
3. **Fill in**:
   - Site Title: `Card Advisor Hub`
   - Username: `admin` (or your preferred username)
   - Password: Use a strong password
   - Email: `info@cardadvisorhub.com`
4. **Click**: "Install WordPress"

## Step 5: Activate Your Theme

### After WordPress is installed:
1. **Login**: https://cardadvisorhub.com/wp-admin/
2. **Go to**: Appearance → Themes
3. **Activate**: Genesis Sample theme (your custom theme)
4. **Test**: Visit your credit card pages

## 🎯 Expected Results:

### After Successful Installation:
- ✅ Homepage loads without errors
- ✅ Credit card comparison tool works: `/compare-cards/`
- ✅ All 75+ credit cards display properly
- ✅ Advanced search functionality active
- ✅ WordPress admin accessible: `/wp-admin/`

## 🔧 Troubleshooting:

### If Database Connection Fails:
1. **Double-check** database credentials in Hostinger panel
2. **Verify** database exists and user has permissions
3. **Try** different host names: `localhost`, `127.0.0.1`, or IP from hosting panel

### If Installation Stalls:
1. **Check** diagnostic.php again to verify WordPress core files
2. **Verify** file permissions (WordPress needs write access)
3. **Clear** browser cache and try again

### If Theme Doesn't Work:
1. **Verify** theme files in: `/wp-content/themes/genesis-sample/`
2. **Check** functions.php for errors
3. **Test** with default WordPress theme first

## 📞 Need Help?

If you encounter issues:
1. **Check** diagnostic.php for detailed error information
2. **Review** Hostinger error logs in control panel
3. **Test** database connection using hosting panel tools

## 🚀 Quick Start Commands:

### Create wp-config.php:
```bash
# Copy template and edit with your database details
cp wp-config-template.php wp-config.php
# Edit wp-config.php with your database credentials
```

### Test Installation:
1. Install WordPress Core via diagnostic.php
2. Create wp-config.php with database details
3. Visit https://cardadvisorhub.com
4. Complete WordPress installation
5. Activate Genesis Sample theme
6. Test credit card comparison tool

Your 75-card credit card comparison system is ready to go live!
