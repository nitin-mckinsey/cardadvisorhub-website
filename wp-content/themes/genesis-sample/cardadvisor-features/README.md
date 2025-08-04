# CardAdvisor Features Plugin

A comprehensive WordPress plugin for credit card comparison websites, specifically designed for the Indian market.

## Features

### Core Functionality
- **Custom Post Types**: Credit Cards and Card Reviews
- **Taxonomies**: Card Categories and Banks
- **User Reviews System**: Allow users to submit and manage reviews
- **Favorites System**: Users can save their favorite cards
- **Card Comparison Tool**: Compare multiple cards side-by-side
- **Analytics Tracking**: Track card views and user interactions

### User Features
- Submit and manage card reviews
- Add/remove cards from favorites
- Compare selected cards
- View personalized recommendations
- Track application status

### Admin Features
- Manage credit cards through WordPress admin
- Moderate user reviews
- View analytics and statistics
- Custom meta fields for card details
- Bulk import/export functionality

## Installation

1. Upload the `cardadvisor-features` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin settings in the admin panel

## Usage

### Shortcodes

#### Card Comparison Tool
```php
[card_comparison_tool cards="1,2,3" style="table"]
```

#### User Favorites
```php
[user_favorites]
```

### Template Functions

#### Get Card Average Rating
```php
$rating = get_card_average_rating($card_id);
```

#### Get Card Reviews
```php
$reviews = get_card_reviews($card_id, 5); // Get 5 latest reviews
```

#### Check if Card is Favorite
```php
$is_favorite = is_card_favorite($card_id, $user_id);
```

## Database Tables

The plugin creates the following custom tables:
- `wp_card_comparisons`: Track card comparison activities
- `wp_card_views`: Track card view statistics

## Custom Fields

### Credit Card Meta Fields
- `annual_fee`: Annual fee amount
- `joining_fee`: Joining fee amount
- `rewards_rate`: Rewards rate description
- `welcome_bonus`: Welcome bonus details
- `min_income`: Minimum income requirement
- `key_features`: Array of key features
- `benefits`: Array of benefits
- `fees_charges`: Array of fees and charges
- `bank_name`: Bank name
- `card_network`: Card network (Visa/Mastercard)
- `card_type`: Card type (cashback/travel/fuel/etc.)

### Review Meta Fields
- `card_id`: Associated card ID
- `rating`: Rating (1-5)
- `reviewer_name`: Reviewer name
- `reviewer_email`: Reviewer email
- `review_date`: Review submission date

## AJAX Endpoints

### Submit Card Review
- **Action**: `submit_card_review`
- **Method**: POST
- **Required**: `card_id`, `rating`, `review`, `reviewer_name`

### Toggle Favorite
- **Action**: `toggle_favorite`
- **Method**: POST
- **Required**: `card_id`

### Track Card View
- **Action**: `track_card_view`
- **Method**: POST
- **Required**: `card_id`

## Hooks and Filters

### Actions
- `cardadvisor_after_card_view`: Triggered after card view is tracked
- `cardadvisor_after_review_submit`: Triggered after review submission
- `cardadvisor_after_favorite_toggle`: Triggered after favorite toggle

### Filters
- `cardadvisor_review_approval`: Filter review approval status
- `cardadvisor_card_comparison_limit`: Filter max cards for comparison
- `cardadvisor_recommendation_algorithm`: Filter recommendation algorithm

## Styling

The plugin includes its own CSS file (`assets/cardadvisor.css`) with styles for:
- Comparison tools
- Review forms
- Favorite buttons
- Admin interface
- Mobile responsive design

## JavaScript

The plugin includes JavaScript functionality for:
- AJAX form submissions
- Dynamic filtering
- Real-time updates
- User interactions
- Analytics tracking

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher

## Support

For support and documentation, visit: https://cardadvisorhub.com/support

## Changelog

### Version 1.0.0
- Initial release
- Core functionality implementation
- User review system
- Favorites functionality
- Admin interface
- Analytics tracking

## License

GPL v2 or later

## Credits

Developed by CardAdvisor Team for the Indian credit card market.
