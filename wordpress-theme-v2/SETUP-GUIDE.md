# 📚 Elemental Kids Club - WordPress Theme Setup Guide

**Date:** February 13, 2026
**Theme Version:** 1.0.0
**Theme Name:** Elemental Kids Hub Theme

---

## 📋 Table of Contents

1. [Overview](#overview)
2. [WordPress Pages Setup](#wordpress-pages-setup)
3. [ActiveCampaign Configuration](#activecampaign-configuration)
4. [Contact Form Setup](#contact-form-setup)
5. [Theme Features](#theme-features)
6. [Mobile Optimization](#mobile-optimization)
7. [Troubleshooting](#troubleshooting)

---

## 🎯 Overview

This WordPress theme is a conversion from the Next.js Elemental Kids Club website. It preserves all design elements, fonts, and functionality while making it easy for the client to manage content.

### What's Included:

- ✅ Homepage with book showcase
- ✅ Individual pages for Libro 1, Libro 2, and Libro 3
- ✅ Bonuses page with ActiveCampaign integration
- ✅ Sobre Nosotros page
- ✅ Contact page with Formspree integration
- ✅ Privacy Policy page
- ✅ Cookie Policy page
- ✅ Cookie consent banner
- ✅ Confirmation and Thank You pages for bonus signups
- ✅ Fully responsive design
- ✅ SEO optimized with structured data

---

## 📄 WordPress Pages Setup

### Pages to Create in WordPress:

Create these pages in WordPress Admin → Pages → Add New:

| Page Title | Slug | Template | URL |
|------------|------|----------|-----|
| Inicio | (homepage) | Front Page | `/` |
| Libro 1 | `libro-1` | Libro 1 Page | `/libro-1/` |
| Libro 2 | `libro-2` | Libro 2 Page | `/libro-2/` |
| Libro 3 | `libro-3` | Libro 3 Page | `/libro-3/` |
| Bonus | `bonuses` | Bonuses Page | `/bonuses/` |
| Sobre Nosotros | `sobre-nosotros` | Sobre Nosotros Page | `/sobre-nosotros/` |
| Contacto | `contacto` | Contacto Page | `/contacto/` |
| Política de Privacidad | `politica-de-privacidad` | Política de Privacidad | `/politica-de-privacidad/` |
| Política de Cookies | `politica-de-cookies` | Política de Cookies | `/politica-de-cookies/` |
| Confirma | `confirma` | Confirma Inscripción | `/confirma/` |
| Gracias Bonus | `gracias-2` | Gracias Bonus | `/gracias-2/` |

### Steps to Create Each Page:

1. Go to **Páginas** → **Añadir nueva**
2. Enter the page title
3. In the right sidebar, select the corresponding **Plantilla** (Template)
4. Set the **Slug** (permalink) as shown in the table
5. Click **Publicar**

### Important Notes:

- **Homepage**: Set as homepage in Settings → Reading → "A static page" → Select "Inicio"
- **Permalinks**: Make sure Settings → Permalinks is set to "Post name"
- **Gracias Bonus**: The slug must be `gracias-2` (not just `gracias`) due to existing page conflicts

---

## 📧 ActiveCampaign Configuration

### Current Status:

- ✅ **Bonus 1 (Libro 1)**: WORKING PERFECTLY
- ⏳ **Bonus 2 (Libro 2)**: Needs client setup

### How to Set Up Bonus 2:

#### Step 1: Create Form for Libro 2

1. **Log into ActiveCampaign**
2. Go to **Forms**
3. Find the working Libro 1 form
4. Click **Copy** or **Duplicate**
5. Rename it: "Bonus Libro 2"

#### Step 2: Configure Form Redirects

**Two redirect settings needed:**

**A) After Form Submit** (Immediate redirect):
```
https://elementalkidsclub.com/confirma/
```
*This shows the "check your email" page*

**B) After Email Confirmation** (Double opt-in success page):
```
https://elementalkidsclub.com/gracias-2/
```
*This shows the "thank you, bonus coming" page*

#### Step 3: Set Up Automation

1. Go to **Automations** → **Create New**
2. **Name**: "Libro 2 Bonus Delivery"
3. **Trigger**: Contact confirms email from Libro 2 form
4. **Wait**: 5 minutes (optional)
5. **Action**: Send email with Libro 2 bonus PDF attached
6. **Activate** the automation

#### Step 4: Verify Form URL

The form should be accessible at:
```
https://elementalkidsclub.activehosted.com/f/2
```

This URL is already linked on the WordPress bonuses page, so once the form is created, it will work automatically.

### Email Flow Diagram:

```
User submits email on /bonuses/
         ↓
Redirects to /confirma/
"Check your email for confirmation"
         ↓
User receives Email #1 (Confirmation)
         ↓
User clicks confirmation link
         ↓
Redirects to /gracias-2/
"Thank you! Bonus is on the way"
         ↓
User receives Email #2 (Bonus PDF)
5-10 minutes later
```

---

## 📮 Contact Form Setup

### Option A: Formspree (Recommended)

**Why Formspree:**
- ✅ Free for up to 50 submissions/month
- ✅ Simple setup (just need form ID)
- ✅ Sends emails directly to client's inbox
- ✅ No automation needed
- ✅ Already integrated in the theme

**Setup Steps:**

1. **Sign up at Formspree:**
   - Go to: https://formspree.io
   - Create free account with client's email

2. **Create New Form:**
   - Click **"New Form"**
   - Name: "Contacto Elemental Kids"
   - Email will go to the account email

3. **Get Form ID:**
   - After creating, copy the form ID (e.g., `mrbzabcd`)

4. **Update WordPress Theme:**
   - Go to: **Apariencia** → **Editor de archivos del tema**
   - Find file: `page-contacto.php`
   - Find line ~66: `action="https://formspree.io/f/YOUR_FORM_ID"`
   - Replace `YOUR_FORM_ID` with the actual ID
   - Click **Actualizar archivo**

5. **Test the Form:**
   - Visit `/contacto/`
   - Fill out and submit the form
   - Check if email arrives in inbox
   - Check spam folder if not in inbox

### Option B: ActiveCampaign/WildMail

If client prefers to use WildMail:

1. Create new form in WildMail: "Contacto"
2. Add fields: nombre, email, asunto, mensaje
3. Copy form action URL
4. Update `page-contacto.php` with WildMail URL

---

## 🎨 Theme Features

### Design Elements:

- **Fonts:**
  - Headings: Bangers (Google Font)
  - Body: Inter (Google Font)

- **Color Palette:**
  - Blue: `#5BC0EB`
  - Pink: `#E85D75` / `#FF6B7A`
  - Yellow: `#FDB44B` / `#FEF3C7`
  - Green: `#A8E6A1`
  - Dark: `#1F2937`

- **Background Patterns:**
  - Yellow grid pattern on most pages
  - Grid size: 20px × 20px
  - Grid color: `rgba(245, 158, 11, 0.15)`

### SEO Features:

- **Schema.org Structured Data:**
  - Organization schema on all pages
  - Product schema for books
  - BreadcrumbList for navigation

- **Meta Tags:**
  - Viewport meta for mobile
  - Proper title tags
  - Alt text on all images

### GDPR Compliance:

- Cookie consent banner (localStorage-based)
- Privacy policy page
- Cookie policy page
- Links in footer to both policies

---

## 📱 Mobile Optimization

### Responsive Design:

All pages are fully responsive with:
- Mobile-first approach
- Breakpoints: `md` (768px), `lg` (1024px)
- Touch-friendly buttons (minimum 44px tap targets)

### Mobile Menu:

- Hamburger menu button on mobile
- Slide-down navigation panel
- All links accessible
- "Comprar" button included

### Text Sizing on Mobile:

Pages adjusted for mobile readability:
- Headings scale down on small screens
- Proper padding and spacing
- Text stays within containers
- No horizontal scrolling

---

## 🔧 Troubleshooting

### Issue: Bonus emails not arriving

**Possible causes:**
1. Email in spam folder
2. Double opt-in not confirmed
3. Automation not activated
4. Wrong form configuration

**Solutions:**
- Check spam/junk folder
- Verify automation is active in ActiveCampaign
- Test with different email address
- Check form redirect URLs are correct

### Issue: Contact form not working

**Possible causes:**
1. Formspree form ID not configured
2. Form ID incorrect

**Solutions:**
- Verify Formspree account is active
- Check form ID is correctly placed in `page-contacto.php`
- Test form in incognito mode
- Check browser console for errors (F12)

### Issue: Mobile menu not opening

**Solution:**
- Clear browser cache
- Hard refresh: Cmd+Shift+R (Mac) or Ctrl+Shift+R (Windows)
- Test in incognito window

### Issue: Pages showing 404 error

**Solutions:**
1. Flush permalinks:
   - Go to: Ajustes → Enlaces permanentes
   - Click "Guardar cambios"
2. Verify page is published (not draft)
3. Check slug matches expected URL

### Issue: Cookie banner not appearing

**Possible causes:**
1. User already accepted/rejected cookies
2. LocalStorage has consent saved

**Solutions:**
- Clear localStorage in browser console
- Test in incognito mode
- Check if `cookie-banner.php` is included in footer

---

## 📊 Performance Optimization

### Already Optimized:

- ✅ Font preloading for Bangers and Inter
- ✅ Image optimization (PNG with compression)
- ✅ Minimal JavaScript (vanilla JS, no frameworks)
- ✅ CSS extracted from Next.js build (optimized)
- ✅ Lazy loading for images (native browser)

### Recommendations:

- Consider using a caching plugin (WP Super Cache or W3 Total Cache)
- Use a CDN for static assets if traffic grows
- Compress images before uploading
- Monitor page load speed with Google PageSpeed Insights

---

## 🔐 Security Notes

### Current Implementation:

- ✅ Form submissions via HTTPS
- ✅ Email validation on all forms
- ✅ Formspree spam protection
- ✅ ActiveCampaign double opt-in prevents spam
- ✅ Cookie consent for GDPR compliance

### Recommendations:

- Keep WordPress and theme updated
- Use strong passwords
- Install a security plugin (Wordfence or Sucuri)
- Regular backups

---

## 📝 Content Management

### How to Update Book Information:

Currently, book pages are **static templates**. To update content:

1. Go to: **Apariencia** → **Editor de archivos del tema**
2. Find the relevant file:
   - `page-libro-1.php` for Libro 1
   - `page-libro-2.php` for Libro 2
   - `page-libro-3.php` for Libro 3
3. Edit the text directly in the PHP file
4. Click **Actualizar archivo**

### Future Option: Dynamic Content

If the client wants to edit book content from WordPress admin without touching code, we can convert to Custom Post Types. This requires:
- Creating a Books CPT (already exists in `functions.php`)
- Converting static pages to use CPT data
- Adding meta boxes for book details

**For now, static pages are simpler and work perfectly for 2-3 books.**

---

## 🚀 Deployment Checklist

Before going live with the client:

- [ ] All 11 WordPress pages created
- [ ] Homepage set in Settings → Reading
- [ ] Permalinks flushed
- [ ] Bonus 1 form tested and working
- [ ] Bonus 2 form created in ActiveCampaign
- [ ] Contact form configured with Formspree
- [ ] All pages tested on mobile
- [ ] Cookie banner appears for new visitors
- [ ] All links in navigation work
- [ ] Privacy and Cookie policy pages accessible
- [ ] Sample images uploaded for both books
- [ ] Theme repackaged and uploaded to WordPress

---

## 📞 Support Information

### Client Contact:
- Email: hola@elementalkidsclub.com
- Website: https://elementalkidsclub.com

### Services Used:
- **Hosting:** Client's WordPress hosting
- **Email Marketing:** ActiveCampaign / WildMail
- **Contact Forms:** Formspree (free plan)
- **Amazon Store:** https://www.amazon.es/stores/Ediciones-Elemental-Kids-Club/author/B0G24P67WS

---

## 🎯 Summary

The Elemental Kids Hub theme is a complete, professional WordPress theme that preserves all the design and functionality of the original Next.js website while making it easy for the client to manage their content.

**Status:**
- ✅ Theme fully developed and tested
- ✅ Bonus 1 working perfectly
- ⏳ Bonus 2 requires client setup in ActiveCampaign
- ⏳ Contact form requires Formspree configuration
- ✅ Mobile responsive and optimized
- ✅ SEO optimized with structured data
- ✅ GDPR compliant

**Next Steps:**
1. Client creates Bonus 2 form in ActiveCampaign
2. Client signs up for Formspree and configures contact form
3. Test all functionality
4. Go live!

---

**Theme created:** February 2026
**Last updated:** February 13, 2026

🤖 *Generated with [Claude Code](https://claude.com/claude-code)*
