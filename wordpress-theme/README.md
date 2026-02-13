# Elemental Kids Club - WordPress Theme

## Overview

This is a complete WordPress theme conversion of the Elemental Kids Club Next.js website. The theme includes all features, pages, and functionality from the original site, with a custom post type for easy book management.

## What's Included

### Theme Files
- `elemental-kids-theme.zip` - Ready-to-upload WordPress theme (30MB)
- Complete theme directory with all templates and assets

### Features
- **Custom Post Type: Books** - Easy management of book listings
- **Custom Meta Fields** - All book properties (title, volume, element, age range, pages, Amazon link, status, color, badge, features)
- **Responsive Design** - Mobile-first design matching the Next.js version exactly
- **All Pages Included**:
  - Homepage (front-page.php)
  - Bonuses page (page-bonuses.php)
  - Sobre Nosotros / About (page-sobre-nosotros.php)
  - Contacto / Contact (page-contacto.php)
  - Individual Book pages (single-book.php)
  - Default page template (page.php)

### Assets
- Compiled Tailwind CSS (assets/css/main.css)
- All images from Next.js site (assets/images/)
- Custom JavaScript (assets/js/main.js)
- Google Fonts integration (Bangers + Inter)

## Installation

1. **Upload Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Click "Add New" → "Upload Theme"
   - Upload `elemental-kids-theme.zip`
   - Click "Activate"

2. **Configure Permalinks**
   - Go to Settings → Permalinks
   - Select "Post name" structure
   - Save changes

3. **Create Navigation Menu**
   - Go to Appearance → Menus
   - Create menu with: Home, Bonuses, Sobre Nosotros, Contacto
   - Assign to "Primary Menu" location

4. **Add Books**
   - Go to "Libros" in admin sidebar
   - Click "Add New"
   - Fill in all book details
   - Publish

5. **Set Homepage**
   - Go to Settings → Reading
   - Set "Your homepage displays" to "A static page"
   - Select "Home" for Homepage

## Book Management

To add a new book:
1. Go to Libros → Add New
2. Enter title and full description
3. Add excerpt (for card display)
4. Set featured image (book cover)
5. Fill custom fields:
   - Volumen: "LIBRO 1", "LIBRO 2", etc.
   - Elemento: "fuego", "agua", "aire", "tierra"
   - Edad Recomendada: "5-8 años", "8-12 años"
   - Número de Páginas: number
   - Enlace de Amazon: full URL
   - Estado: "available", "new", or "coming-soon"
   - Color del Borde: hex color (e.g., "#A8E6A1")
   - Texto de Badge: "NUEVO LIBRO" (optional)
   - Color de Badge: Tailwind class (e.g., "bg-[#FF6B7A]")
   - Características: one per line
6. Publish

## File Structure

```
elemental-kids-theme/
├── style.css                    # Theme info
├── functions.php                # Core functions & CPT
├── header.php                   # Header template
├── footer.php                   # Footer template
├── front-page.php               # Homepage
├── page-bonuses.php             # Bonuses page
├── page-sobre-nosotros.php      # About page
├── page-contacto.php            # Contact page
├── page.php                     # Default page
├── single-book.php              # Book detail page
├── assets/
│   ├── css/
│   │   └── main.css            # Compiled Tailwind CSS
│   ├── js/
│   │   └── main.js             # Custom JavaScript
│   └── images/                 # All images
└── INSTALLATION-GUIDE.md       # Detailed guide
```

## Important Notes

- **Contact Form**: Currently uses a placeholder form. Replace with Contact Form 7 or similar plugin (instructions in INSTALLATION-GUIDE.md)
- **Logo**: Upload custom logo via Appearance → Customize → Site Identity
- **Email Configuration**: Update email in page-contacto.php for contact form
- **Bonus Links**: LIBRO 1 links to ActiveCampaign, LIBRO 2 is placeholder

## Design Match

The theme matches the Next.js version exactly:
- Same colors, fonts, and layouts
- All animations and hover effects preserved
- Fully responsive (mobile, tablet, desktop)
- Same component structure

## Support Files

- **INSTALLATION-GUIDE.md** - Complete installation instructions
- **README.md** - This file

## Next Steps

1. Install and activate the theme
2. Add all book data (3 books)
3. Upload book cover images
4. Create menu and set homepage
5. Test all pages on mobile and desktop
6. Configure contact form
7. Replace elementalkidsclub.com with new theme

## Technical Details

- **WordPress Version**: 6.0+
- **PHP Version**: 7.4+
- **Theme Version**: 1.0.0
- **Created**: February 2026

## Files Location

All theme files are located in:
`/Users/magdalenazawadzka/Desktop/dadadaPROJECT/elemental-kids-hub/wordpress-theme/`

The installable ZIP file is:
`elemental-kids-theme.zip` (30MB)
