# AGENTS.md — Qonkar Website Project Rules

## 🔑 Special Keyword: "Saad"

Jab bhi user **"Saad"** word use kare, to ye kaam karo:

### Reverse karo ye changes:
1. `styles/design-system.css` — **delete** kar do (poori file)
2. `styles/index.css` — `@import './design-system.css'` line hata do, aur `:root` variables wapis original pe le jao:
   ```css
   :root {
     --primary-color: #3f89c9;
     --secondary-color: #2fadc3;
     --tertiary-color: #85d55c;
     --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color), var(--tertiary-color));
     --body-bg: #000d16;
   }
   ```
   aur `laser-background` mein `background-color: #000d16;` wapis rakho (variable hatao)
3. **Saari PHP files** (index.php, about-us.php, services/*, case-studies/*, etc.) se ye 2 lines hata do:
   ```html
   <!-- Global Design System -->
   <link rel="stylesheet" href="/styles/design-system.css">
   ```
4. `index.php` se bhi ye comment+link hata do:
   ```html
   <!-- ✅ Global Design System — saari website ka CSS yahan se control hoti hai -->
   <link rel="stylesheet" href="/styles/design-system.css">
   ```

### Matlab: Website bilkul wesi ho jaaye jesi design system changes se PEHLE thi.

---

## General Rules
- Is project ka stack: PHP + Tailwind CSS (CDN) + Vanilla CSS
- Design system file: `styles/design-system.css`
- Main CSS file: `styles/index.css`
- Server: XAMPP PHP `php -S localhost:8000 router.php`
