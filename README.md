# Sanduni Low Cost Homes - Construction Company Website

A minimal PHP application for a construction company that can be easily deployed on servers with basic PHP support through cPanel. This website doesn't require any database or complex server configurations.

## Features

- Responsive mobile-friendly design
- Easy to customize for your construction business needs
- PHP-based with no database requirement
- Optimized for performance and minimal server requirements
- Contact form with validation
- Project gallery with filtering capability
- Testimonial showcase

## File Structure

```
/
├── css/               # CSS stylesheets
│   └── styles.css     # Main stylesheet
├── images/            # Website images (add your own)
├── inc/               # PHP includes
│   ├── header.php     # Header template
│   └── footer.php     # Footer template
├── js/                # JavaScript files
│   └── script.js      # Main JavaScript file
├── pages/             # Website pages
│   ├── about.php      # About Us page
│   ├── contact.php    # Contact page
│   ├── home.php       # Homepage content
│   ├── projects.php   # Projects/portfolio page
│   ├── services.php   # Services page
│   └── testimonials.php # Testimonials page
├── index.php          # Main entry point
└── README.md          # This documentation
```

## Deployment Instructions

### Requirements
- Web hosting with PHP support (PHP 7.0+ recommended)
- cPanel or similar hosting control panel

### How to Deploy

1. **Prepare your files**
   - Add your construction company images to the `/images/` directory
   - Customize content in the PHP files to match your business information

2. **Upload to your hosting via cPanel**
   - Log in to your cPanel account
   - Navigate to the File Manager
   - Upload all files to your desired directory (usually `public_html` or a subdirectory)

3. **Set permissions**
   - Ensure all directories have 755 permissions
   - Ensure all files have 644 permissions

4. **Test your website**
   - Navigate to your domain in a web browser
   - Test all pages and functionality

## Customization

### Changing Content

Edit the PHP files in the `/pages/` directory to update content for each section of the website:

- `home.php` - Homepage content and hero section
- `about.php` - About Us page content
- `services.php` - Services offered by your construction company
- `projects.php` - Portfolio of completed projects
- `testimonials.php` - Client testimonials
- `contact.php` - Contact information and form

### Styling

Modify `css/styles.css` to customize the website's appearance. The main colors are defined as CSS variables at the top of the file:

```css
:root {
    --primary-color: #e67e22;
    --secondary-color: #2c3e50;
    --accent-color: #f39c12;
    /* ... other variables ... */
}
```

### Adding Project Images

Place your project images in the `/images/` directory and update the references in the `projects.php` file to display your construction company's work.

## Support

For support or customization assistance, please contact us.
