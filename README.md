# Cybespoke — Studio Website

A static website for **Cybespoke**, a Belfast studio selling private AI model deployment, security (AI security, pen tests,
hardening, compliance) and forward deployed engineers — with development & SEO as a side service.
Plain HTML, CSS and a little JavaScript. No build step, no server code. Hosted on **Cloudflare Pages**.

## Pages

| URL | File |
| --- | --- |
| `/` | `index.html` |
| `/work` | `work.html` |
| `/start` (contact form) | `start.html` |
| `/services/private-ai`, `/services/security`, `/services/forward-deployed-engineers`, `/services/build-grow` | `services/*.html` (4 service pages) |
| `/about` | `about.html` |
| `/privacy`, `/cookies`, `/terms`, `/accessibility` | legal pages |
| `/pamphlet` | `pamphlet.html` — A4 flyer used for `cybespoke-pamphlet.pdf` (not linked from the site) |
| any unknown URL | `404.html` |

Cloudflare Pages serves `work.html` at `/work` (clean URLs) automatically.

## Design

- Bold editorial look: `assets/css/site.css` — paper, near-black and one teal; Archivo for headlines,
  Inter for text, JetBrains Mono for labels.
- One script for every page: `assets/js/site.js` (mobile menu, fade-in on scroll, WhatsApp button, footer year).
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

- `_redirects` — sends old links (e.g. `/work.php`, or the old 10 service pages like `/services/crm`) to the current pages with a 301.
- `_headers` — security headers and cache rules.
