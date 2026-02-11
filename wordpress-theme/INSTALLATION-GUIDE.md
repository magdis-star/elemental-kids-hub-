# Elemental Kids Club - WordPress Theme Installation Guide

## 📦 What's Included

This WordPress theme is a complete conversion of the Next.js website with:

✅ **Custom Post Type: Books**
- Easy to add/edit books from WordPress admin
- All book fields (title, description, features, Amazon link, etc.)
- Drag-and-drop reordering

✅ **Exact Design Match**
- Same colors, fonts, and layout as Next.js version
- Fully responsive (mobile, tablet, desktop)
- All animations and hover effects preserved

✅ **Pages Included**
- Homepage (with dynamic books display)
- Bonuses page
- Sobre Nosotros (About Us)
- Contacto (Contact)
- Política de Privacidad (Privacy Policy)
- Individual Book pages (auto-generated from Custom Post Type)

✅ **SEO Optimized**
- Meta tags
- Open Graph tags
- Structured data (JSON-LD)
- Sitemap
- Robots.txt

---

## 🚀 Installation Steps

### Step 1: Upload Theme

1. Compress the `elemental-kids-theme` folder into a ZIP file
2. Go to WordPress Admin → Appearance → Themes
3. Click "Add New" → "Upload Theme"
4. Upload the ZIP file
5. Click "Activate"

### Step 2: Configure Permalinks

1. Go to Settings → Permalinks
2. Select "Post name" structure
3. Click "Save Changes"

### Step 3: Create Menu

1. Go to Appearance → Menus
2. Create a new menu called "Primary Menu"
3. Add pages: Home, Bonuses, Sobre Nosotros, Contacto
4. Assign to "Primary Menu" location
5. Save menu

### Step 4: Add Books

1. Go to "Libros" in the WordPress admin sidebar
2. Click "Add New"
3. Fill in:
   - Title (e.g., "Cuaderno de Actividades Divertidas")
   - Content (long description)
   - Excerpt (short description)
   - Featured Image (book cover)
   - All custom fields in "Detalles del Libro" box
4. Publish

### Step 5: Configure Homepage

1. Go to Settings → Reading
2. Set "Your homepage displays" to "A static page"
3. Select "Home" for Homepage
4. Save changes

---

## 📝 How to Edit Content

### Adding a New Book

1. **Go to**: Libros → Add New
2. **Enter Title**: "Cuaderno de Actividades 3"
3. **Add Content**: Full description of the book
4. **Add Excerpt**: Short description (for book card)
5. **Set Featured Image**: Upload book cover image
6. **Fill Custom Fields**:
   - Volumen: "LIBRO 3"
   - Elemento: "tierra"
   - Edad Recomendada: "5-8 años"
   - Número de Páginas: "80"
   - Enlace de Amazon: Full Amazon URL
   - Estado: "available" / "new" / "coming-soon"
   - Color del Borde: "#FCD34D" (hex color)
   - Características: One per line
7. **Publish**

### Editing Existing Books

1. Go to Libros → All Libros
2. Click on book title to edit
3. Make changes
4. Click "Update"

### Reordering Books

Books appear in the order you set:
1. Go to Libros → All Libros
2. Use drag-and-drop to reorder (if plugin installed)
3. Or set "Order" attribute in book editor

### Editing Pages

1. Go to Pages → All Pages
2. Click page title to edit
3. Edit content using WordPress editor
4. Update

---

## 🎨 Customization

### Changing Colors

Edit in: `functions.php` or use WordPress Customizer

### Changing Logo

1. Go to Appearance → Customize
2. Site Identity → Logo
3. Upload new logo
4. Save

### Changing Contact Email

Edit in: `page-contacto.php` (line with email address)

---

## 📧 Contact Form Setup

The contact form currently uses:
- Simple form submission
- Can be upgraded to use Contact Form 7 or WPForms

### To Add Real Form:

1. Install Contact Form 7 plugin
2. Create form
3. Replace form code in `page-contacto.php`

---

## 🔧 Troubleshooting

### Books Not Showing

- Check that books are published (not draft)
- Verify permalink structure is set to "Post name"
- Flush permalinks (Settings → Permalinks → Save)

### Styles Not Loading

- Clear WordPress cache
- Clear browser cache (Cmd+Shift+R)
- Check file permissions on /assets/ folder

### Menu Not Appearing

- Go to Appearance → Menus
- Assign menu to "Primary Menu" location

---

## 📂 File Structure

```
elemental-kids-theme/
├── style.css                    # Theme information
├── functions.php                # Core functions & Custom Post Type
├── header.php                   # Header template
├── footer.php                   # Footer template
├── front-page.php               # Homepage template
├── page-bonuses.php             # Bonuses page
├── page-sobre-nosotros.php      # About page
├── page-contacto.php            # Contact page
├── single-book.php              # Individual book page
├── assets/
│   ├── css/
│   │   └── main.css            # Compiled Tailwind CSS
│   ├── js/
│   │   └── main.js             # Custom JavaScript
│   └── images/                 # Theme images
└── template-parts/              # Reusable components
    ├── hero-section.php
    ├── about-section.php
    └── testimonials-section.php
```

---

## ✅ Next Steps After Installation

1. **Add all 3 books** from the data provided
2. **Upload all images** to Media Library
3. **Test all pages** on desktop and mobile
4. **Configure contact form** for real submissions
5. **Set up ActiveCampaign** integration for bonus downloads
6. **Add Google Analytics** tracking code (if needed)
7. **Submit sitemap** to Google Search Console

---

## 🆘 Support

For questions or issues:
1. Check this guide first
2. Review WordPress Codex: https://codex.wordpress.org/
3. Contact developer for custom modifications

---

## 📌 Important Notes

- **Backup Before Updates**: Always backup before updating WordPress or theme
- **Child Theme**: Consider creating a child theme for custom modifications
- **Plugin Recommendations**:
  - Classic Editor (if you prefer the old editor)
  - Simple Post Order (for drag-and-drop book ordering)
  - Contact Form 7 (for contact form)
  - Yoast SEO (additional SEO features)

---

**Version**: 1.0.0
**Last Updated**: February 2026
**Requires WordPress**: 6.0+
**Tested Up To**: WordPress 6.4
