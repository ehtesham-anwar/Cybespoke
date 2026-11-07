# Cybespoke — Studio Website

A static website for **Cybespoke**, a Belfast studio building websites, apps, AI tools and bespoke software.
Plain HTML, CSS and a little JavaScript. No build step, no server code. Hosted on **Cloudflare Pages**.

## Pages

| URL | File |
| --- | --- |
| `/` | `index.html` |
| `/work` | `work.html` |
| `/start` (contact form) | `start.html` |
| `/services/web`, `/services/mobile`, … | `services/*.html` (10 service pages) |
| `/privacy`, `/cookies`, `/terms`, `/accessibility` | legal pages |
| `/pamphlet` | `pamphlet.html` — A4 flyer used for `cybespoke-pamphlet.pdf` (not linked from the site) |
| any unknown URL | `404.html` |

Cloudflare Pages serves `work.html` at `/work` (clean URLs) automatically.

## Design

- One design system for every page: `assets/css/site.css` — light mode first (dark mode via the moon button),
  Inter font, one teal accent.
- Shared JS: `assets/js/global.js` (theme toggle, scroll fade-in, WhatsApp button, nav shadow) and
  `assets/js/site.js` (mobile menu).
- The contact form on `/start` sends email with EmailJS straight from the browser.

## Editing

The header and footer are copied into every page. To change a menu or footer link, change it in **every** `.html`
file (search and replace across the project works well).

## Run locally

```bash
npx wrangler pages dev .
```

This copies Cloudflare's behaviour (clean URLs, `_redirects`, `_headers`, `404.html`).
A plain `python3 -m http.server 8000` also works, but then use the full file names (e.g. `/work.html`).

## Deploy to Cloudflare Pages

1. Cloudflare dashboard → **Workers & Pages** → **Create** → **Pages** → **Connect to Git** → pick this repo.
2. Build settings: **Framework preset:** None · **Build command:** *(leave empty)* · **Build output directory:** `/`
3. Save and deploy. Every push to the production branch publishes the site.
4. **Custom domains** → add `cybespoke.co.uk` (and `www`).

Cloudflare config files in this repo:

- `_redirects` — sends old `.php` links (e.g. `/work.php`) to the new clean URLs with a 301.
- `_headers` — security headers and cache rules.
