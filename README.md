# Cybespoke — Studio Website

A static, dark-mode website for **Cybespoke**, a bespoke digital studio building Web, Mobile, AI, and one-of-one Bespoke products.

## Pages

- `index.html` — Homepage with animated hero, floating service tiles, marquee, services grid, stats and CTA.
- `services/web.html` — **Terminal / cyber** aesthetic. Typewriter, glitch heading, code-window mock, mouse-parallax matrix grid, animated timeline.
- `services/mobile.html` — **Aurora / device-stack** aesthetic. Tilted phone mockups with live notifications, mouse-parallax, draggable capability rail.
- `services/ai.html` — **Neural network** aesthetic. Live `<canvas>` neural net animation, streaming "thinking" chips, animated eval scorecard.
- `services/bespoke.html` — **Atelier / luxury** aesthetic. Gold accents, serif type, morphing liquid blob, scroll-revealed thread of steps.

Each service page has its own visual identity, color system, typography and signature animation.

## Stack

- Pure HTML, CSS and a sprinkle of vanilla JS — no build step required.
- Google Fonts: Inter, Space Grotesk, JetBrains Mono, Cormorant Garamond.

## Run locally

Just open `index.html` in a browser, or serve the directory:

```bash
python3 -m http.server 8000
# then visit http://localhost:8000
```

## Structure

```
.
├── index.html
├── assets/
│   ├── css/global.css       # design tokens, nav, footer, reveal-on-scroll
│   └── js/global.js         # cursor glow, reveal observer, year stamp
└── services/
    ├── web.html
    ├── mobile.html
    ├── ai.html
    └── bespoke.html
```

## Accessibility & motion

- Respects `prefers-reduced-motion` — animations and transitions collapse to near-zero.
- Focus styles and color contrast tuned for dark mode.
- Cursor-glow effect is disabled on touch devices.
