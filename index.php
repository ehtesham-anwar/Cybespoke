<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");if(t==="light"||t==="dark")document.documentElement.setAttribute("data-theme",t);}catch(e){}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cybespoke — Tailor‑made websites, apps & smart tools | Belfast studio</title>
  <meta name="description" content="Cybespoke is a Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams. Fast, friendly, made for your customers." />
  <meta name="keywords" content="web design Belfast, app development Belfast, AI software Belfast, bespoke software, custom websites, mobile apps, SEO Belfast, digital marketing Belfast, Northern Ireland software studio" />
  <meta name="author" content="Cybespoke" />
  <link rel="canonical" href="https://cybespoke.co.uk/" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/" />
  <meta property="og:title" content="Cybespoke — Tailor‑made websites, apps &amp; smart tools" />
  <meta property="og:description" content="A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <meta property="og:image:alt" content="Cybespoke — Belfast software studio" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Cybespoke — Tailor‑made websites, apps &amp; smart tools" />
  <meta name="twitter:description" content="A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <!-- Structured data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Cybespoke",
    "description": "A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams.",
    "url": "https://cybespoke.co.uk/",
    "logo": "https://cybespoke.co.uk/assets/favicon.svg",
    "image": "https://cybespoke.co.uk/assets/og-banner.svg",
    "email": "hello@cybespoke.co.uk",
    "areaServed": ["Belfast", "Northern Ireland", "United Kingdom", "Ireland"],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Belfast",
      "addressCountry": "GB"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "17:00"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "email": "hello@cybespoke.co.uk",
      "availableLanguage": ["English"]
    },
    "sameAs": [
      "https://www.linkedin.com/company/cybespoke"
    ],
    "makesOffer": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Website design and development" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Mobile app development" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "AI assistants and automation" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bespoke software" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SEO and digital marketing" } }
    ]
  }
  </script>

  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/global.css" />
  <style>
    /* ===== Homepage signature visuals ===== */
    .hero {
      position: relative; padding: 140px 0 100px;
      display: flex; align-items: center; overflow: hidden;
      isolation: isolate;
    }
    .hero__canvas {
      position: absolute; inset: 0; z-index: 0; pointer-events: none;
      width: 100%; height: 100%;
      filter: blur(28px) saturate(140%);
      opacity: 0.95;
      mix-blend-mode: var(--blend, screen);
    }
    [data-theme="light"] .hero__canvas { opacity: 0.7; filter: blur(34px) saturate(160%); }
    .hero__noise {
      position: absolute; inset: 0; z-index: 1; pointer-events: none;
      opacity: 0.05; mix-blend-mode: overlay;
      background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='160' height='160'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.6 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>");
    }
    .hero__orb {
      position: absolute; pointer-events: none; z-index: 1;
      width: 320px; height: 320px; border-radius: 50%;
      background: conic-gradient(from 0deg,
        rgba(45, 212, 191, 0.0),
        rgba(45, 212, 191, 0.35),
        rgba(56, 189, 248, 0.4),
        rgba(139, 92, 246, 0.45),
        rgba(244, 114, 182, 0.3),
        rgba(45, 212, 191, 0.0));
      filter: blur(50px) saturate(170%);
      mix-blend-mode: var(--blend, screen);
      animation: orbSpin 18s linear infinite;
      opacity: 0.55;
    }
    [data-theme="light"] .hero__orb { opacity: 0.35; }
    [data-theme="light"] .hero__noise { mix-blend-mode: multiply; opacity: 0.03; }
    .hero__orb--a { top: -120px; left: -100px; }
    .hero__orb--b { bottom: -160px; right: -120px; width: 420px; height: 420px; animation-duration: 26s; animation-direction: reverse; }
    @keyframes orbSpin { to { transform: rotate(360deg); } }
    @media (max-width: 720px) {
      .hero { padding: 110px 0 60px; }
      .hero__lede { font-size: 16px; margin-top: 18px; }
      .hero__cta { gap: 10px; margin-top: 26px; }
      .services { padding: 70px 0; }
      .services__head { margin-bottom: 28px; }
      .service-card { padding: 26px; min-height: auto; }
      .service-card .arrow { width: 42px; height: 42px; margin-top: 18px; }
      .stats { padding: 50px 0; gap: 12px; }
      .stat { padding: 22px; }
      .stat .num { font-size: 36px; }
      .cta-section { margin: 70px 0 0; padding: 56px 22px; border-radius: 24px; }
      .marquee { margin-top: 50px; padding: 18px 0; }
      .marquee__track span { font-size: 18px; gap: 40px; }
      .marquee__track { gap: 40px; }
    }
    .hero__grid {
      position: absolute; inset: 0; z-index: 1; pointer-events: none;
      background-image:
        linear-gradient(var(--line) 1px, transparent 1px),
        linear-gradient(90deg, var(--line) 1px, transparent 1px);
      background-size: 64px 64px;
      mask-image: radial-gradient(ellipse at center, #000 25%, transparent 78%);
      -webkit-mask-image: radial-gradient(ellipse at center, #000 25%, transparent 78%);
      animation: gridSlide 32s linear infinite;
      opacity: 0.85;
    }
    @keyframes gridSlide { from { background-position: 0 0; } to { background-position: 64px 64px; } }

    .hero__inner { position: relative; z-index: 2; display: grid; grid-template-columns: 1.15fr 1fr; gap: 60px; align-items: center; }
    @media (max-width: 980px) { .hero__inner { grid-template-columns: 1fr; } }

    .hero h1 { position: relative; }
    .hero h1 .word {
      display: inline-block; opacity: 0;
      transform: translateY(60px) rotateX(35deg);
      transform-origin: 50% 100%;
      filter: blur(14px);
      animation: wordIn 1.2s var(--easing-soft) forwards;
      perspective: 600px;
    }
    .hero h1 .word:nth-child(1) { animation-delay: 0.12s; }
    .hero h1 .word:nth-child(2) { animation-delay: 0.26s; }
    .hero h1 .word:nth-child(3) { animation-delay: 0.40s; }
    .hero h1 .word:nth-child(4) { animation-delay: 0.54s; }
    .hero h1 .word:nth-child(5) { animation-delay: 0.68s; }
    @keyframes wordIn {
      to { opacity: 1; transform: translateY(0) rotateX(0); filter: none; }
    }

    .hero .grad {
      position: relative;
      background: linear-gradient(120deg, var(--accent), var(--accent-2) 35%, var(--accent-3) 65%, #f472b6);
      -webkit-background-clip: text; background-clip: text; color: transparent;
      background-size: 260% 260%; animation: gradShift 8s ease-in-out infinite;
    }
    .hero .grad::after {
      content: ""; position: absolute; inset: 0;
      background: linear-gradient(110deg,
        transparent 30%,
        rgba(255, 255, 255, 0.55) 48%,
        rgba(255, 255, 255, 0.85) 50%,
        rgba(255, 255, 255, 0.55) 52%,
        transparent 70%);
      -webkit-background-clip: text; background-clip: text; color: transparent;
      mix-blend-mode: screen; pointer-events: none;
      transform: translateX(-130%);
      animation: titleSheen 5.5s cubic-bezier(.7,0,.3,1) 1.6s infinite;
    }
    @keyframes gradShift { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
    @keyframes titleSheen {
      0% { transform: translateX(-130%); }
      55%, 100% { transform: translateX(130%); }
    }

    .hero__lede { color: var(--muted); font-size: 18px; max-width: 520px; margin-top: 26px; line-height: 1.65; }
    .hero__cta { display: flex; gap: 14px; margin-top: 38px; flex-wrap: wrap; }

    /* ===== Hero process steps (replacing the old float-stack tiles) ===== */
    .hero-steps {
      list-style: none;
      display: grid; gap: 16px;
      position: relative;
    }
    .hero-steps::before {
      content: "";
      position: absolute;
      left: 35px; top: 30px; bottom: 30px;
      width: 2px;
      background: linear-gradient(180deg,
        transparent,
        var(--accent) 12%,
        var(--accent-2) 50%,
        var(--accent-3) 88%,
        transparent);
      opacity: 0.45;
      transform-origin: top;
      animation: heroLine 1.4s var(--easing-soft) 0.6s both;
    }
    @keyframes heroLine { from { transform: scaleY(0); opacity: 0; } to { transform: scaleY(1); opacity: 0.45; } }

    .hero-step {
      position: relative;
      display: grid;
      grid-template-columns: 70px 1fr;
      align-items: center;
      gap: 20px;
      padding: 22px 26px 22px 0;
      border-radius: 20px;
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.01)),
        rgba(13, 13, 20, 0.55);
      backdrop-filter: blur(14px) saturate(140%);
      -webkit-backdrop-filter: blur(14px) saturate(140%);
      box-shadow: var(--shadow-soft);
      overflow: hidden;
      transition:
        transform .55s var(--easing-soft),
        border-color .4s var(--easing-soft),
        box-shadow .5s var(--easing-soft);

      /* sequential entrance */
      opacity: 0;
      transform: translateX(40px);
      filter: blur(10px);
      animation: heroStepIn 0.85s var(--easing-soft) forwards;
    }
    .hero-step:hover {
      transform: translateX(-4px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-lift);
    }
    @keyframes heroStepIn {
      from { opacity: 0; transform: translateX(40px); filter: blur(10px); }
      to   { opacity: 1; transform: translateX(0);    filter: none; }
    }
    .hero-step--a { animation-delay: 0.85s; }
    .hero-step--b { animation-delay: 1.15s; }
    .hero-step--c { animation-delay: 1.45s; }

    .hero-step::after {
      content: ""; position: absolute; inset: 0; border-radius: inherit;
      background: radial-gradient(220px circle at var(--sx, -200px) var(--sy, -200px),
        rgba(255,255,255,0.10), transparent 55%);
      opacity: 0; pointer-events: none;
      transition: opacity .35s var(--easing-soft);
    }
    .hero-step:hover::after { opacity: 1; }

    .hero-step__icon {
      width: 70px; height: 70px; border-radius: 50%;
      display: grid; place-items: center;
      color: #050508;
      position: relative;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      box-shadow: 0 10px 28px -10px rgba(45, 212, 191, 0.5);
      grid-row: 1; grid-column: 1;
      justify-self: center;
      margin-left: 16px;
      transition: transform .5s var(--easing-spring);
    }
    .hero-step:hover .hero-step__icon { transform: rotate(-6deg) scale(1.06); }
    .hero-step__icon::before {
      content: "";
      position: absolute; inset: -5px;
      border-radius: 50%;
      border: 1.5px dashed rgba(45, 212, 191, 0.32);
      animation: heroRing 16s linear infinite;
    }
    @keyframes heroRing { to { transform: rotate(360deg); } }
    .hero-step__icon svg { width: 28px; height: 28px; position: relative; z-index: 1; }

    .hero-step--b .hero-step__icon { background: linear-gradient(135deg, var(--accent-2), var(--accent-3)); box-shadow: 0 10px 28px -10px rgba(139, 92, 246, 0.5); }
    .hero-step--b .hero-step__icon::before { border-color: rgba(139, 92, 246, 0.32); }
    .hero-step--c .hero-step__icon { background: linear-gradient(135deg, var(--accent-3), #f472b6); box-shadow: 0 10px 28px -10px rgba(244, 114, 182, 0.5); color: #fff; }
    .hero-step--c .hero-step__icon::before { border-color: rgba(244, 114, 182, 0.32); }

    .hero-step__num {
      position: absolute; top: 16px; right: 22px;
      font-family: "JetBrains Mono", monospace; font-size: 11px;
      letter-spacing: 0.18em; color: var(--muted);
    }
    .hero-step__body { position: relative; z-index: 1; }
    .hero-step__body h3 {
      font-size: 19px; letter-spacing: -0.01em; margin-bottom: 4px;
      font-family: "Fraunces", "Inter Tight", serif;
    }
    .hero-step__body p { font-size: 14px; color: var(--muted); line-height: 1.55; }

    @media (max-width: 980px) {
      .hero-steps::before { left: 31px; }
    }
    @media (max-width: 480px) {
      .hero-step { padding: 18px 22px 18px 0; gap: 14px; grid-template-columns: 60px 1fr; }
      .hero-step__icon { width: 54px; height: 54px; margin-left: 12px; }
      .hero-step__icon svg { width: 24px; height: 24px; }
      .hero-step__body h3 { font-size: 17px; }
      .hero-step__body p { font-size: 13px; }
      .hero-steps::before { left: 27px; }
    }

    /* Light mode for hero steps */
    [data-theme="light"] .hero-step {
      background:
        linear-gradient(180deg, rgba(10, 12, 26, 0.025), rgba(10, 12, 26, 0)),
        rgba(255, 255, 255, 0.85);
    }

    /* Marquee */
    .marquee {
      overflow: hidden; position: relative;
      border-top: 1px solid var(--line); border-bottom: 1px solid var(--line);
      margin-top: 80px; padding: 24px 0;
      mask-image: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent);
      -webkit-mask-image: linear-gradient(90deg, transparent, #000 12%, #000 88%, transparent);
    }
    .marquee__track {
      display: flex; gap: 60px; white-space: nowrap;
      animation: marquee calc(36s / var(--mq-boost, 1)) linear infinite;
      will-change: transform;
    }
    .marquee:hover .marquee__track { animation-play-state: paused; }
    .marquee {
      transform: skewX(var(--mq-skew, 0deg));
      transition: transform .35s var(--easing-soft);
    }
    .marquee__track span {
      font-family: "Space Grotesk"; font-size: 22px;
      color: var(--muted); display: inline-flex; align-items: center; gap: 60px;
      transition: color .3s var(--easing);
    }
    .marquee__track span:hover { color: var(--text); }
    .marquee__track span::after { content: "✦"; color: var(--accent); }
    @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }

    /* Services grid */
    .services { padding: 120px 0; }
    .services__head { display: flex; justify-content: space-between; align-items: end; gap: 24px; margin-bottom: 40px; flex-wrap: wrap; }
    .services__grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
    @media (max-width: 820px) { .services__grid { grid-template-columns: 1fr; } }

    .service-card {
      position: relative; padding: 38px; min-height: 320px;
      border-radius: 24px; border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0)),
        var(--bg-soft);
      overflow: hidden;
      box-shadow: var(--shadow-soft);
      transform:
        perspective(1200px)
        rotateX(var(--tilt-x, 0))
        rotateY(var(--tilt-y, 0));
      transform-style: preserve-3d;
      transition:
        border-color .5s var(--easing-soft),
        box-shadow .6s var(--easing-soft);
      display: flex; flex-direction: column; justify-content: space-between;
      will-change: transform;
    }
    .service-card:hover {
      border-color: var(--line-strong);
      box-shadow: var(--shadow-lift);
    }
    .service-card > div { transform: translateZ(40px); }
    .service-card .arrow { transform: translateZ(60px); }
    .service-card:hover .arrow { transform: translateZ(60px) translate(8px, -8px); background: var(--gradient); border-color: transparent; color: #050508; }
    .service-card::before {
      content: ""; position: absolute; inset: -1px; z-index: -1; border-radius: 24px;
      background: var(--gradient, linear-gradient(135deg, var(--accent), var(--accent-3)));
      opacity: 0; transition: opacity .55s var(--easing-soft);
    }
    .service-card:hover::before { opacity: 0.22; }
    .service-card .label {
      font-family: "JetBrains Mono"; font-size: 12px; color: var(--muted);
      letter-spacing: 0.16em; text-transform: uppercase;
    }
    .service-card h2 { margin-top: 10px; }
    .service-card p { margin-top: 14px; max-width: 480px; line-height: 1.6; }
    .service-card .arrow {
      align-self: flex-start; width: 50px; height: 50px; border-radius: 50%;
      border: 1px solid var(--line); display: grid; place-items: center;
      margin-top: 26px;
      transition:
        transform .5s var(--easing-spring),
        background .4s var(--easing-soft),
        border-color .4s var(--easing-soft),
        color .4s var(--easing-soft);
    }
    /* .service-card:hover .arrow handled above with translateZ */

    /* Magpie iridescence — each card a different angle of the same sheen */
    .service-card--web   { --gradient: linear-gradient(135deg, #2dd4bf, #38bdf8); }
    .service-card--mob   { --gradient: linear-gradient(135deg, #38bdf8, #8b5cf6); }
    .service-card--ai    { --gradient: linear-gradient(135deg, #8b5cf6, #c4b5fd); }
    .service-card--bes   { --gradient: linear-gradient(135deg, #2dd4bf, #8b5cf6); }

    .service-card .ornament {
      position: absolute; right: -60px; bottom: -60px; width: 260px; height: 260px;
      border-radius: 50%; opacity: 0.14; filter: blur(8px);
      background: var(--gradient);
      transition: transform 1s var(--easing-soft), opacity .6s var(--easing-soft);
    }
    .service-card:hover .ornament { transform: scale(1.25) translate(-14px, -14px); opacity: 0.22; }

    /* Stats */
    .stats { padding: 80px 0; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    .stat {
      padding: 30px; border: 1px solid var(--line); border-radius: 18px;
      background:
        linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0)),
        var(--bg-soft);
      transition: transform .5s var(--easing-soft), border-color .4s var(--easing-soft), box-shadow .5s var(--easing-soft);
    }
    .stat:hover { transform: translateY(-3px); border-color: var(--line-strong); box-shadow: var(--shadow-soft); }
    .stat .num { font-family: "Space Grotesk"; font-size: 48px; font-weight: 700; letter-spacing: -0.04em; }
    .stat .num span {
      background: linear-gradient(120deg, var(--accent), var(--accent-2) 50%, var(--accent-3));
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .stat .lbl { color: var(--muted); font-size: 14px; margin-top: 8px; }
    @media (max-width: 820px) { .stats { grid-template-columns: repeat(2, 1fr); } }

    /* CTA */
    .cta-section {
      margin: 120px 0 0; padding: 88px 44px; border-radius: 32px;
      background:
        radial-gradient(900px 460px at 0% 0%, rgba(139, 92, 246, 0.28), transparent 60%),
        radial-gradient(700px 440px at 100% 100%, rgba(45, 212, 191, 0.20), transparent 60%),
        radial-gradient(500px 320px at 50% 50%, rgba(56, 189, 248, 0.08), transparent 70%),
        var(--bg-soft);
      border: 1px solid var(--line);
      text-align: center;
      position: relative; overflow: hidden;
    }
    .cta-section::before {
      content: ""; position: absolute; inset: 0; pointer-events: none;
      background-image:
        linear-gradient(var(--line) 1px, transparent 1px),
        linear-gradient(90deg, var(--line) 1px, transparent 1px);
      background-size: 80px 80px;
      mask-image: radial-gradient(ellipse at center, #000 20%, transparent 70%);
      opacity: 0.5;
    }
    .cta-section > * { position: relative; }
    .cta-section h2 { max-width: 720px; margin: 0 auto; }
    .cta-section p { max-width: 540px; margin: 16px auto 30px; }

    /* SEO & marketing extra section */
    .extra-section {
      display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
      padding: 100px 0 0;
    }
    @media (max-width: 820px) { .extra-section { grid-template-columns: 1fr; gap: 36px; padding: 60px 0 0; } }
    .extra-bullets { display: grid; gap: 18px; }
    .extra-bullet {
      display: grid; grid-template-columns: auto 1fr; gap: 14px; align-items: start;
      padding: 18px; border-radius: 16px;
      background: linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0));
      border: 1px solid var(--line);
      transition: transform .4s var(--easing-soft), border-color .4s var(--easing-soft);
    }
    .extra-bullet:hover { transform: translateY(-3px); border-color: var(--line-strong); }
    .extra-tick {
      width: 24px; height: 24px; border-radius: 50%;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #050508; font-weight: 700; font-size: 13px;
      display: grid; place-items: center;
      flex-shrink: 0;
    }
    .extra-bullet strong { font-size: 15px; color: var(--text); display: block; }
    .extra-bullet p { font-size: 13.5px; color: var(--muted); margin-top: 3px; line-height: 1.5; }

    /* ===== Light mode — homepage-specific overrides ===== */
    [data-theme="light"] .service-card {
      background:
        linear-gradient(180deg, rgba(10, 12, 26, 0.02), rgba(10, 12, 26, 0)),
        var(--bg-soft);
    }
    [data-theme="light"] .service-card .arrow { color: var(--text); }
    [data-theme="light"] .stat {
      background:
        linear-gradient(180deg, rgba(10, 12, 26, 0.02), rgba(10, 12, 26, 0)),
        var(--bg-soft);
    }
    [data-theme="light"] .extra-bullet {
      background: linear-gradient(180deg, rgba(10, 12, 26, 0.025), rgba(10, 12, 26, 0));
    }
    [data-theme="light"] .extra-tick { color: #fff; }
    [data-theme="light"] .cta-section {
      background:
        radial-gradient(900px 460px at 0% 0%, rgba(139, 92, 246, 0.14), transparent 60%),
        radial-gradient(700px 440px at 100% 100%, rgba(45, 212, 191, 0.13), transparent 60%),
        radial-gradient(500px 320px at 50% 50%, rgba(56, 189, 248, 0.05), transparent 70%),
        var(--bg-soft);
    }

    /* ===== Capabilities grid (replaces "Four things we make well") ===== */
    .capabilities { padding: 100px 0; }
    .capabilities__head {
      display: flex; justify-content: space-between; align-items: end;
      gap: 24px; margin-bottom: 50px; flex-wrap: wrap;
    }
    .capabilities__grid {
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px;
    }
    @media (max-width: 1100px) { .capabilities__grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 820px)  { .capabilities__grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 520px)  { .capabilities__grid { grid-template-columns: 1fr; } }

    .cap {
      position: relative;
      display: block;
      padding: 28px 26px 26px;
      border-radius: 18px;
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0)),
        var(--bg-soft);
      overflow: hidden;
      isolation: isolate;
      transition:
        transform .5s var(--easing-soft),
        border-color .4s var(--easing-soft),
        box-shadow .5s var(--easing-soft);
    }
    .cap:hover {
      transform: translateY(-6px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-lift);
    }
    .cap::before {
      content: ""; position: absolute; inset: -1px; z-index: -1; border-radius: 18px;
      background: linear-gradient(135deg, var(--accent), var(--accent-3));
      opacity: 0; transition: opacity .5s var(--easing-soft);
    }
    .cap:hover::before { opacity: 0.18; }
    .cap__icon {
      width: 46px; height: 46px; border-radius: 12px;
      display: grid; place-items: center;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #050508;
      margin-bottom: 18px;
      transition: transform .45s var(--easing-spring);
    }
    .cap:hover .cap__icon { transform: rotate(-4deg) scale(1.06); }
    .cap__icon svg { width: 22px; height: 22px; }
    .cap h3 { font-size: 18px; letter-spacing: -0.012em; margin-bottom: 8px; font-family: "Fraunces", serif; font-weight: 600; }
    .cap p { font-size: 13.5px; color: var(--muted); line-height: 1.55; }
    .cap__arrow {
      position: absolute; top: 24px; right: 24px;
      width: 30px; height: 30px; border-radius: 50%;
      border: 1px solid var(--line);
      display: grid; place-items: center;
      font-size: 14px; color: var(--muted);
      transition: transform .45s var(--easing-spring), background .35s, color .35s, border-color .35s;
    }
    .cap:hover .cap__arrow {
      transform: translate(4px, -4px);
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      border-color: transparent;
      color: #050508;
    }

    /* Distinct icon palettes per capability */
    .cap:nth-child(1) .cap__icon { background: linear-gradient(135deg, #2dd4bf, #38bdf8); }
    .cap:nth-child(2) .cap__icon { background: linear-gradient(135deg, #38bdf8, #8b5cf6); }
    .cap:nth-child(3) .cap__icon { background: linear-gradient(135deg, #f59e0b, #ef4444); color: #fff; }
    .cap:nth-child(4) .cap__icon { background: linear-gradient(135deg, #06b6d4, #6366f1); color: #fff; }
    .cap:nth-child(5) .cap__icon { background: linear-gradient(135deg, #8b5cf6, #f472b6); color: #fff; }
    .cap:nth-child(6) .cap__icon { background: linear-gradient(135deg, #14b8a6, #6366f1); color: #fff; }
    .cap:nth-child(7) .cap__icon { background: linear-gradient(135deg, #22c55e, #84cc16); }
    .cap:nth-child(8) .cap__icon { background: linear-gradient(135deg, #f472b6, #a855f7); color: #fff; }

    [data-theme="light"] .cap {
      background:
        linear-gradient(180deg, rgba(10,12,26,0.02), rgba(10,12,26,0)),
        var(--bg-soft);
    }

    /* ===== Process / Our approach ===== */
    .process { padding: 110px 0 60px; }
    .process__head {
      display: flex; justify-content: space-between; align-items: end;
      gap: 24px; margin-bottom: 50px; flex-wrap: wrap;
    }
    .process__list {
      list-style: none;
      display: grid; gap: 18px;
      position: relative;
    }
    .phase {
      display: grid;
      grid-template-columns: 110px 1fr;
      align-items: start;
      gap: 28px;
      padding: 32px 32px 32px 32px;
      border-radius: 22px;
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0)),
        var(--bg-soft);
      position: relative;
      overflow: hidden;
      transition: transform .5s var(--easing-soft), border-color .4s, box-shadow .5s;
    }
    .phase:hover {
      transform: translateX(4px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-soft);
    }
    .phase__num {
      font-family: "Fraunces", serif; font-style: italic;
      font-size: clamp(48px, 5vw, 64px); font-weight: 500;
      line-height: 1;
      background: linear-gradient(135deg, var(--g-from), var(--g-to));
      -webkit-background-clip: text; background-clip: text;
      color: transparent;
      letter-spacing: -0.04em;
    }
    .phase--01 { --g-from: #2dd4bf; --g-to: #38bdf8; }
    .phase--02 { --g-from: #38bdf8; --g-to: #8b5cf6; }
    .phase--03 { --g-from: #8b5cf6; --g-to: #f472b6; }
    .phase--04 { --g-from: #f472b6; --g-to: #fbbf24; }
    .phase--05 { --g-from: #22c55e; --g-to: #2dd4bf; }

    .phase__icon {
      width: 56px; height: 56px; border-radius: 16px;
      display: grid; place-items: center;
      background: linear-gradient(135deg, var(--g-from), var(--g-to));
      color: #050508;
      flex-shrink: 0;
      align-self: start;
      margin-top: 4px;
    }
    .phase__icon svg { width: 26px; height: 26px; }
    .phase--03 .phase__icon,
    .phase--04 .phase__icon { color: #fff; }

    .phase__body h3 {
      font-size: 24px;
      letter-spacing: -0.015em;
      margin-bottom: 10px;
      font-family: "Fraunces", serif;
    }
    .phase__body p { font-size: 15px; line-height: 1.65; color: var(--muted); }
    .phase__body ul {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px 28px;
      list-style: none;
      margin-top: 18px;
    }
    .phase__body ul li {
      position: relative; padding-left: 20px;
      font-size: 13.5px; color: var(--text);
    }
    .phase__body ul li::before {
      content: ""; position: absolute; left: 0; top: 7px;
      width: 8px; height: 8px; border-radius: 50%;
      background: linear-gradient(135deg, var(--g-from), var(--g-to));
    }

    @media (max-width: 820px) {
      .phase {
        grid-template-columns: 1fr;
        padding: 24px 22px;
        gap: 14px;
      }
      .phase__num { font-size: 44px; }
      .phase__body h3 { font-size: 21px; }
      .phase__body ul { grid-template-columns: 1fr; gap: 6px; margin-top: 14px; }
    }

    /* Customer assurances */
    .assurances {
      margin-top: 32px;
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px;
    }
    @media (max-width: 980px) { .assurances { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 520px) { .assurances { grid-template-columns: 1fr; } }
    .assurance {
      padding: 22px;
      border-radius: 16px;
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.025), rgba(255,255,255,0)),
        var(--bg-soft);
      transition: border-color .35s var(--easing-soft), transform .4s var(--easing-soft);
    }
    .assurance:hover { transform: translateY(-3px); border-color: var(--line-strong); }
    .assurance__icon {
      width: 38px; height: 38px; border-radius: 10px;
      display: grid; place-items: center;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #050508;
      margin-bottom: 14px;
    }
    .assurance__icon svg { width: 18px; height: 18px; }
    .assurance h4 { font-size: 15px; margin-bottom: 6px; letter-spacing: -0.005em; color: var(--text); font-family: "Inter Tight", sans-serif; font-weight: 600; }
    .assurance p { font-size: 13px; color: var(--muted); line-height: 1.55; }

    [data-theme="light"] .phase,
    [data-theme="light"] .assurance {
      background:
        linear-gradient(180deg, rgba(10,12,26,0.02), rgba(10,12,26,0)),
        var(--bg-soft);
    }

    /* ===== Reviews / Testimonials ===== */
    .reviews { padding: 100px 0 40px; }
    .reviews__head {
      display: flex; justify-content: space-between; align-items: end;
      gap: 24px; margin-bottom: 50px; flex-wrap: wrap;
    }
    .reviews__grid {
      display: grid; grid-template-columns: repeat(2, 1fr); gap: 22px;
    }
    @media (max-width: 820px) { .reviews__grid { grid-template-columns: 1fr; gap: 16px; } }

    .review {
      padding: 32px;
      border-radius: 22px;
      border: 1px solid var(--line);
      background:
        linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0)),
        var(--bg-soft);
      position: relative;
      overflow: hidden;
      transition: transform .5s var(--easing-soft), border-color .4s, box-shadow .5s;
    }
    .review:hover {
      transform: translateY(-4px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-soft);
    }
    .review::before {
      content: "“";
      position: absolute; top: 14px; right: 26px;
      font-family: "Fraunces", serif;
      font-size: 120px; line-height: 1;
      color: var(--accent-3);
      opacity: 0.12;
      pointer-events: none;
    }
    .review__stars {
      display: inline-flex; gap: 3px; margin-bottom: 18px;
      color: #fbbf24;
    }
    .review__stars svg { width: 16px; height: 16px; }
    .review blockquote {
      font-family: "Fraunces", serif; font-weight: 400;
      font-size: 19px; line-height: 1.5;
      color: var(--text);
      letter-spacing: -0.005em;
      margin-bottom: 24px;
    }
    .review figcaption {
      display: flex; align-items: center; gap: 14px;
      padding-top: 18px;
      border-top: 1px solid var(--line);
    }
    .review__avatar {
      width: 44px; height: 44px; border-radius: 50%;
      display: grid; place-items: center;
      background: linear-gradient(135deg, var(--av-from, var(--accent)), var(--av-to, var(--accent-2)));
      color: #050508;
      font-family: "Space Grotesk", sans-serif; font-weight: 700; font-size: 18px;
      flex-shrink: 0;
    }
    .review figcaption strong {
      display: block; font-size: 14.5px; color: var(--text);
      font-family: "Inter Tight", sans-serif; font-weight: 600;
    }
    .review figcaption span {
      display: block; font-size: 12.5px;
      color: var(--muted);
      margin-top: 2px;
    }
    [data-theme="light"] .review {
      background:
        linear-gradient(180deg, rgba(10,12,26,0.02), rgba(10,12,26,0)),
        var(--bg-soft);
    }

    @media (max-width: 720px) {
      .process { padding: 70px 0 40px; }
      .reviews { padding: 70px 0 30px; }
      .review { padding: 26px; }
      .review blockquote { font-size: 17px; }
    }

    /* ===== Work / Selected projects ===== */
    .work { padding: 110px 0 40px; }
    .work__head {
      display: flex; justify-content: space-between; align-items: end;
      gap: 24px; margin-bottom: 50px; flex-wrap: wrap;
    }
    .work__grid {
      display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;
    }
    @media (max-width: 820px) { .work__grid { grid-template-columns: 1fr; gap: 16px; } }

    .work-card {
      position: relative;
      border-radius: 24px;
      overflow: hidden;
      border: 1px solid var(--line);
      aspect-ratio: 4 / 3;
      box-shadow: var(--shadow-soft);
      transition: transform .55s var(--easing-soft), border-color .4s var(--easing-soft), box-shadow .5s var(--easing-soft);
      isolation: isolate;
      display: block;
    }
    .work-card:hover {
      transform: translateY(-8px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-lift);
    }
    .work-card__visual {
      position: absolute; inset: 0;
      background: linear-gradient(135deg, var(--g-from, var(--accent)), var(--g-to, var(--accent-3)));
      overflow: hidden;
    }
    .work-card__visual::before {
      content: "";
      position: absolute; inset: -20%;
      background:
        radial-gradient(circle at 30% 30%, rgba(255,255,255,0.18), transparent 50%),
        radial-gradient(circle at 70% 70%, rgba(0,0,0,0.18), transparent 55%);
    }
    .work-card__visual::after {
      content: "";
      position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
      background-size: 40px 40px;
      mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 80%);
      -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 30%, transparent 80%);
    }

    /* Per-card device mockups via CSS */
    .work-card__mockup {
      position: absolute; left: 50%; top: 50%;
      transform: translate(-50%, -50%);
      transition: transform .7s var(--easing-soft);
      will-change: transform;
    }
    .work-card:hover .work-card__mockup { transform: translate(-50%, -56%) scale(1.04); }

    /* Browser-window mockup (web project) */
    .mockup-browser {
      width: 70%; max-width: 480px;
      border-radius: 12px;
      background: #0e0e16;
      border: 1px solid rgba(255,255,255,0.12);
      box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5);
      overflow: hidden;
    }
    .mockup-browser__bar {
      display: flex; align-items: center; gap: 6px;
      padding: 10px 12px;
      background: #15151f;
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }
    .mockup-browser__bar i {
      width: 9px; height: 9px; border-radius: 50%;
      background: rgba(255,255,255,0.18);
    }
    .mockup-browser__bar i:nth-child(1) { background: #ff5f57; }
    .mockup-browser__bar i:nth-child(2) { background: #febc2e; }
    .mockup-browser__bar i:nth-child(3) { background: #28c840; }
    .mockup-browser__body {
      padding: 14px;
      display: grid; gap: 8px;
    }
    .mockup-line {
      height: 8px; border-radius: 4px;
      background: rgba(255,255,255,0.08);
    }
    .mockup-line.w-30 { width: 30%; }
    .mockup-line.w-50 { width: 50%; }
    .mockup-line.w-70 { width: 70%; }
    .mockup-line.accent {
      background: linear-gradient(90deg, var(--accent), var(--accent-2));
      height: 10px;
    }
    .mockup-row { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 6px; margin-top: 4px; }
    .mockup-tile { height: 36px; border-radius: 6px; background: rgba(255,255,255,0.06); }
    .mockup-tile:nth-child(2) { background: linear-gradient(135deg, rgba(45,212,191,0.4), rgba(56,189,248,0.3)); }

    /* Phone mockup (app project) */
    .mockup-phone {
      width: 45%; max-width: 200px;
      aspect-ratio: 9 / 18;
      border-radius: 26px;
      background: linear-gradient(180deg, #14101e, #0a0712);
      border: 1px solid rgba(255,255,255,0.12);
      box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5);
      padding: 6px;
      position: relative;
    }
    .mockup-phone::before {
      content: ""; position: absolute; top: 10px; left: 50%; transform: translateX(-50%);
      width: 36%; height: 14px; border-radius: 10px;
      background: #000;
    }
    .mockup-phone__screen {
      width: 100%; height: 100%;
      border-radius: 22px;
      background:
        linear-gradient(180deg, rgba(139,92,246,0.35), transparent 60%),
        #0a0712;
      padding: 28px 12px 14px;
      display: grid; grid-template-rows: auto 1fr auto; gap: 8px;
    }
    .mockup-phone__hello {
      color: rgba(255,255,255,0.8); font-size: 9px;
      font-family: "JetBrains Mono", monospace; letter-spacing: 0.1em;
      text-align: center;
    }
    .mockup-phone__feed { display: grid; gap: 6px; align-content: start; }
    .mockup-phone__row { height: 22px; border-radius: 6px; background: rgba(255,255,255,0.08); }
    .mockup-phone__row:nth-child(2) { background: linear-gradient(135deg, rgba(56,189,248,0.45), rgba(139,92,246,0.35)); }
    .mockup-phone__tabs {
      display: grid; grid-template-columns: repeat(4, 1fr); gap: 4px;
      padding-top: 6px; border-top: 1px solid rgba(255,255,255,0.08);
    }
    .mockup-phone__tabs i {
      height: 12px; border-radius: 4px; background: rgba(255,255,255,0.10);
    }
    .mockup-phone__tabs i.active { background: linear-gradient(135deg, #38bdf8, #8b5cf6); }

    /* Chat AI mockup */
    .mockup-chat {
      width: 75%; max-width: 380px;
      border-radius: 16px;
      background:
        linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0)),
        #0e0a1c;
      border: 1px solid rgba(255,255,255,0.10);
      padding: 16px;
      display: grid; gap: 10px;
      box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5);
    }
    .mockup-bubble {
      padding: 10px 14px; border-radius: 14px; font-size: 11px;
      color: rgba(255,255,255,0.9);
      font-family: "JetBrains Mono", monospace;
      max-width: 80%;
    }
    .mockup-bubble.in {
      background: rgba(255,255,255,0.06);
      justify-self: start;
      border-bottom-left-radius: 4px;
    }
    .mockup-bubble.out {
      background: linear-gradient(135deg, rgba(139,92,246,0.7), rgba(244,114,182,0.65));
      justify-self: end;
      border-bottom-right-radius: 4px;
      color: #fff;
    }
    .mockup-bubble .dots { display: inline-flex; gap: 3px; }
    .mockup-bubble .dots i {
      width: 4px; height: 4px; border-radius: 50%; background: currentColor;
      animation: dotPulse 1.3s ease-in-out infinite;
    }
    .mockup-bubble .dots i:nth-child(2) { animation-delay: 0.15s; }
    .mockup-bubble .dots i:nth-child(3) { animation-delay: 0.3s; }
    @keyframes dotPulse {
      0%, 100% { opacity: 0.3; transform: translateY(0); }
      50% { opacity: 1; transform: translateY(-2px); }
    }

    /* Dashboard / chart mockup (bespoke project) */
    .mockup-dash {
      width: 70%; max-width: 420px;
      border-radius: 14px;
      background:
        linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0)),
        #0c0d18;
      border: 1px solid rgba(255,255,255,0.10);
      padding: 14px;
      box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5);
    }
    .mockup-dash__top {
      display: flex; justify-content: space-between; align-items: center;
      margin-bottom: 12px;
    }
    .mockup-dash__pill {
      height: 18px; width: 64px; border-radius: 10px;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
    }
    .mockup-dash__num { color: #fff; font-family: "Space Grotesk", sans-serif; font-weight: 700; font-size: 16px; }
    .mockup-dash__chart {
      height: 86px;
      background:
        linear-gradient(0deg, rgba(45,212,191,0.16), transparent),
        linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px) 0 0 / 100% 25%;
      border-radius: 8px;
      position: relative; overflow: hidden;
    }
    .mockup-dash__chart::before {
      content: "";
      position: absolute; left: 0; right: 0; bottom: 0; top: 0;
      background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 80' preserveAspectRatio='none'><polyline points='0,60 20,55 40,48 60,52 80,38 100,30 120,32 140,20 160,16 180,10 200,12' fill='none' stroke='%232dd4bf' stroke-width='2.2' stroke-linejoin='round' stroke-linecap='round'/></svg>") no-repeat;
      background-size: 100% 100%;
    }

    .work-card__overlay {
      position: absolute; left: 0; right: 0; bottom: 0;
      padding: 26px 28px 24px;
      background: linear-gradient(180deg, transparent, rgba(5,5,8,0.78) 55%, rgba(5,5,8,0.92));
      color: #f4f5fa;
      z-index: 2;
    }
    .work-card__tag {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 5px 10px; border-radius: 999px;
      background: rgba(255,255,255,0.14);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      font-family: "JetBrains Mono", monospace; font-size: 11px;
      letter-spacing: 0.14em; text-transform: uppercase;
      color: rgba(255,255,255,0.92);
    }
    .work-card__tag i { width: 6px; height: 6px; border-radius: 50%; background: currentColor; }
    .work-card__title {
      font-family: "Fraunces", serif; font-size: clamp(22px, 2.4vw, 28px);
      margin-top: 10px; color: #fff; letter-spacing: -0.02em; line-height: 1.15;
    }
    .work-card__desc { font-size: 13.5px; color: rgba(255,255,255,0.78); margin-top: 6px; max-width: 92%; }

    /* Per-card gradients */
    .work-card--a { --g-from: #0c8b7e; --g-to: #1e6fa3; }
    .work-card--b { --g-from: #5d3aa8; --g-to: #1e5d8a; }
    .work-card--c { --g-from: #7a3a9f; --g-to: #bd3d8a; }
    .work-card--d { --g-from: #126b58; --g-to: #5d3aa8; }

    [data-theme="light"] .work-card__overlay {
      background: linear-gradient(180deg, transparent, rgba(5,5,8,0.72) 55%, rgba(5,5,8,0.9));
    }

    @media (max-width: 820px) {
      .work { padding: 70px 0 20px; }
      .work-card { aspect-ratio: 16 / 11; }
      .work-card__title { font-size: 22px; }
      .work-card__overlay { padding: 22px 22px 20px; }
    }

  </style>
</head>
<body class="page-enter">
  <!-- NAV -->
  <?php $active = 'home'; include __DIR__ . '/header.php'; ?>

  <!-- HERO -->
  <section class="hero">
    <canvas class="hero__canvas" aria-hidden="true"></canvas>
    <div class="hero__orb hero__orb--a" aria-hidden="true"></div>
    <div class="hero__orb hero__orb--b" aria-hidden="true"></div>
    <div class="hero__grid"></div>
    <div class="hero__noise" aria-hidden="true"></div>
    <div class="container hero__inner">
      <div>
        <h1 style="margin-top: 20px;">
          <span class="word">Tailor‑made</span>
          <span class="word grad" data-text="websites,">websites,</span>
          <span class="word">apps,</span>
          <span class="word">&amp;</span>
          <span class="word">smart&nbsp;tools.</span>
        </h1>
        <p class="hero__lede">A small Belfast studio building websites, apps, and AI helpers for ambitious teams. Every detail thought through, every screen made for your customers.</p>
        <div class="hero__cta">
          <a href="start.php" class="btn btn--primary"><span>Contact us →</span></a>
          <a href="#services" class="btn btn--ghost"><span>See what we make</span></a>
        </div>
      </div>

      <ol class="hero-steps">
        <li class="hero-step hero-step--a" data-spotlight>
          <span class="hero-step__num">01</span>
          <div class="hero-step__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 2L11 13"/>
              <path d="M22 2L15 22 11 13 2 9 22 2Z"/>
            </svg>
          </div>
          <div class="hero-step__body">
            <h3>Send us your requirement</h3>
            <p>A few sentences about your idea — no twenty‑page brief.</p>
          </div>
        </li>
        <li class="hero-step hero-step--b" data-spotlight>
          <span class="hero-step__num">02</span>
          <div class="hero-step__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 11a4 4 0 1 0-4-4"/>
              <path d="M7 13a4 4 0 1 0 4 4"/>
              <path d="M17 21a4 4 0 0 0-4-4"/>
              <path d="M7 3a4 4 0 0 1 4 4"/>
            </svg>
          </div>
          <div class="hero-step__body">
            <h3>One‑to‑one session</h3>
            <p>A 30‑minute call to dig into the detail and sketch the approach.</p>
          </div>
        </li>
        <li class="hero-step hero-step--c" data-spotlight>
          <span class="hero-step__num">03</span>
          <div class="hero-step__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <path d="M14 2v6h6"/>
              <path d="m9 15 2 2 4-4"/>
            </svg>
          </div>
          <div class="hero-step__body">
            <h3>Get a free quote</h3>
            <p>Within one working day — clear, no‑obligation, next steps spelt out.</p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <!-- MARQUEE -->
  <div class="marquee">
    <div class="marquee__track">
      <span>Design</span><span>Build</span><span>SEO</span><span>Marketing</span><span>Smart tools</span><span>Strategy</span><span>Bespoke</span>
      <span>Design</span><span>Build</span><span>SEO</span><span>Marketing</span><span>Smart tools</span><span>Strategy</span><span>Bespoke</span>
    </div>
  </div>

  <!-- WHAT WE DO -->
  <section class="capabilities container" id="services">
    <div class="capabilities__head reveal">
      <div>
        <div class="section-eyebrow"><span class="dot"></span> What we do</div>
        <h2 style="margin-top: 14px;">From a one‑page site to a full platform.<br/><span style="color: var(--muted);">We build the digital tools your business runs on.</span></h2>
      </div>
      <p style="max-width: 380px;">Pick a capability to see how we approach it, what you get, and how we work — first call to launch.</p>
    </div>

    <div class="capabilities__grid">
      <a href="services/web.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="4" width="19" height="13.5" rx="2"/><path d="M2.5 8h19"/><circle cx="5.5" cy="6" r="0.7" fill="currentColor"/><circle cx="7.6" cy="6" r="0.7" fill="currentColor"/><path d="M9 21h6"/><path d="M12 17.5V21"/></svg>
        </span>
        <h3>Web applications</h3>
        <p>Custom platforms, customer portals and admin dashboards that scale with your business.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/mobile.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 5.5h3"/><circle cx="12" cy="18.5" r="0.8" fill="currentColor"/></svg>
        </span>
        <h3>Mobile apps</h3>
        <p>iPhone and Android apps with sign‑up, payments and notifications — built to be used daily.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/ecommerce.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 4h2l2 12h11l2-9H6"/><circle cx="9" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/></svg>
        </span>
        <h3>E‑commerce</h3>
        <p>Online shops, marketplaces and checkouts — fast, secure, and tuned to convert.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/crm.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="6.5" r="2.5"/><path d="M21 14c0-2.2-1.8-4-4-4"/></svg>
        </span>
        <h3>CRM &amp; internal tools</h3>
        <p>Custom CRMs, ops dashboards and back‑office tools that fit your team's actual workflow.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/ai.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.6 4.2L18 8.8l-3.4 2.7L15.4 16 12 13.7 8.6 16l.8-4.5L6 8.8l4.4-1.6L12 3z"/><path d="M19 14.5l.6 1.7 1.7.6-1.7.6L19 19l-.6-1.6-1.7-.6 1.7-.6.6-1.7z"/><path d="M5 16l.4 1.2 1.2.4-1.2.4L5 19.2l-.4-1.2-1.2-.4 1.2-.4.4-1.2z"/></svg>
        </span>
        <h3>AI &amp; smart tools</h3>
        <p>Assistants, copilots and data‑aware automations — useful day one, no science‑fair feel.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/workflows.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 6h10M5 8v8M19 8v8M7 18h10"/></svg>
        </span>
        <h3>Workflow automation</h3>
        <p>Stitch together your tools, remove the manual steps and let the business run itself.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/data.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V5"/><path d="M4 11v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-6"/></svg>
        </span>
        <h3>Data pipelines</h3>
        <p>ETL, warehousing and integrations — get the right data to the right place, reliably.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>

      <a href="services/bespoke.php" class="cap reveal" data-spotlight>
        <span class="cap__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4.5a4 4 0 0 0-5.4 5.2L4 14.9a1.7 1.7 0 1 0 2.4 2.4l5.3-5.2a4 4 0 0 0 5.2-5.4l-2.6 2.6-2-2 2.2-2.8z"/></svg>
        </span>
        <h3>Bespoke builds</h3>
        <p>The work that doesn't fit a template — in‑store screens, kiosks, devices, the unusual asks.</p>
        <span class="cap__arrow" aria-hidden="true">→</span>
      </a>
    </div>
  </section>

  <!-- PROCESS / APPROACH -->
  <section class="process container reveal" id="process">
    <div class="process__head">
      <div>
        <div class="section-eyebrow"><span class="dot"></span> How we approach it</div>
        <h2 style="margin-top: 14px;">A clear path from first call to long after launch.</h2>
      </div>
      <p style="max-width: 380px;">Every project follows the same five phases — written down, sized up front, and visible to you the whole way through.</p>
    </div>

    <ol class="process__list">
      <li class="phase phase--01" data-spotlight>
        <span class="phase__num">01</span>
        <div class="phase__body">
          <h3>Discover</h3>
          <p>We sit with you (in person or on a call) and learn the business — who uses what you build, where the friction is, what success actually looks like. You leave the first session with a written brief and a fixed‑price proposal.</p>
          <ul>
            <li>Stakeholder interviews</li>
            <li>Goals &amp; success metrics</li>
            <li>Scope, timeline &amp; fixed quote</li>
          </ul>
        </div>
      </li>

      <li class="phase phase--02" data-spotlight>
        <span class="phase__num">02</span>
        <div class="phase__body">
          <h3>Design</h3>
          <p>Wireframes first, then a click‑through prototype. You see the product before a single line of code is written — and we iterate until you're nodding, not just polite.</p>
          <ul>
            <li>Wireframes &amp; user flows</li>
            <li>Interactive Figma prototype</li>
            <li>Brand &amp; visual system</li>
          </ul>
        </div>
      </li>

      <li class="phase phase--03" data-spotlight>
        <span class="phase__num">03</span>
        <div class="phase__body">
          <h3>Build</h3>
          <p>Weekly demos on a staging URL you can poke at. No black‑box "we'll show you in three months" — you see real progress, give feedback, and steer where it goes.</p>
          <ul>
            <li>Weekly demos &amp; staging access</li>
            <li>Code review on every change</li>
            <li>Automated tests &amp; CI from day one</li>
          </ul>
        </div>
      </li>

      <li class="phase phase--04" data-spotlight>
        <span class="phase__num">04</span>
        <div class="phase__body">
          <h3>Ship</h3>
          <p>We launch when it's ready, not on an arbitrary date. We handle the deployment, the domain, the certificates, the analytics — and we're on hand for the first week of real use.</p>
          <ul>
            <li>Production deployment &amp; monitoring</li>
            <li>Documentation &amp; team training</li>
            <li>90‑day post‑launch warranty</li>
          </ul>
        </div>
      </li>

      <li class="phase phase--05" data-spotlight>
        <span class="phase__num">05</span>
        <div class="phase__body">
          <h3>Care</h3>
          <p>We don't disappear after launch. Choose a maintenance plan and we'll watch the logs, ship updates, patch security and quietly improve things in the background — for a flat monthly fee.</p>
          <ul>
            <li>24/7 uptime monitoring &amp; alerts</li>
            <li>Security patches &amp; dependency updates</li>
            <li>Monthly progress report, plain English</li>
          </ul>
        </div>
      </li>
    </ol>

    <!-- Customer assurances -->
    <div class="assurances">
      <div class="assurance">
        <div class="assurance__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <h4>Fixed‑price quotes</h4>
        <p>What we quote is what you pay. No surprise invoices, no scope‑creep upcharges.</p>
      </div>
      <div class="assurance">
        <div class="assurance__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h4>90‑day warranty</h4>
        <p>If a defect shows up in the first 90 days, we fix it — no quibbles, no extra invoice.</p>
      </div>
      <div class="assurance">
        <div class="assurance__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h4>You own the code</h4>
        <p>Source code, designs, accounts and infrastructure — all transferred to you at launch.</p>
      </div>
      <div class="assurance">
        <div class="assurance__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        </div>
        <h4>One‑working‑day reply</h4>
        <p>Slack us, email us, call us — someone gets back within a working day. Often within the hour.</p>
      </div>
    </div>
  </section>

  <!-- TESTIMONIAL -->
  <section class="reviews container reveal" id="reviews">
    <div class="reviews__head">
      <div>
        <div class="section-eyebrow"><span class="dot"></span> Kind words</div>
        <h2 style="margin-top: 14px;">What clients say about working with us.</h2>
      </div>
    </div>

    <figure class="review review--solo reveal" data-spotlight>
      <div class="review__stars" aria-label="5 out of 5 stars">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
      </div>
      <blockquote>"Cybespoke rebuilt our booking platform end‑to‑end and we've not had to chase them once. Direct bookings are up 38% and our reception team finally has their evenings back."</blockquote>
      <figcaption>
        <span class="review__avatar" style="--av-from:#2dd4bf; --av-to:#38bdf8;">F</span>
        <div>
          <strong>Owner</strong>
          <span>France Duerp</span>
        </div>
      </figcaption>
    </figure>
  </section>

  <!-- STATS -->
  <section class="stats container reveal">
    <div class="stat"><div class="num"><span data-count="40" data-suffix="+">0</span></div><div class="lbl">Products launched</div></div>
    <div class="stat"><div class="num"><span data-count="12">0</span></div><div class="lbl">Industries we've worked in</div></div>
    <div class="stat"><div class="num"><span data-count="4.9" data-decimals="1">0</span></div><div class="lbl">Average client rating</div></div>
    <div class="stat"><div class="num"><span>∞</span></div><div class="lbl">Tweaks welcome</div></div>
  </section>

  <!-- CTA -->
  <section class="container" id="contact">
    <div class="cta-section reveal">
      <div class="section-eyebrow"><span class="dot"></span> Get in touch</div>
      <h2 style="margin-top: 18px;">Got something in mind?</h2>
      <p>Tell us about it — even if it's still a rough idea. We'll get back to you within a working day with honest first thoughts, a clear next step, and a free, no‑obligation quote.</p>
      <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
        <a href="start.php" class="btn btn--primary">Contact us →</a>
        <a href="mailto:hello@cybespoke.co.uk" class="btn btn--ghost">hello@cybespoke.co.uk</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include __DIR__ . '/footer.php'; ?>

  <script src="assets/js/global.js"></script>
  <script>
    // ===== Hero aurora canvas — flowing iridescent metaballs reacting to cursor =====
    (() => {
      const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
      if (reduce) return;
      const canvas = document.querySelector(".hero__canvas");
      if (!canvas) return;
      const hero = canvas.parentElement;
      const ctx = canvas.getContext("2d", { alpha: true });
      const dpr = Math.min(window.devicePixelRatio || 1, 2);

      let w = 0, h = 0;
      const resize = () => {
        const r = hero.getBoundingClientRect();
        w = r.width; h = r.height;
        canvas.width = Math.round(w * dpr);
        canvas.height = Math.round(h * dpr);
        canvas.style.width = w + "px";
        canvas.style.height = h + "px";
        ctx.setTransform(1, 0, 0, 1, 0, 0);
        ctx.scale(dpr, dpr);
      };
      resize();
      window.addEventListener("resize", resize);

      const blobs = [
        { hue: "45, 212, 191",  x: 0.22, y: 0.32, r: 0.55, ax: 0.09, ay: 0.06, fx: 0.00028, fy: 0.00022, ph: 0.0 },
        { hue: "139, 92, 246",  x: 0.78, y: 0.20, r: 0.62, ax: 0.07, ay: 0.07, fx: 0.00019, fy: 0.00031, ph: 1.4 },
        { hue: "56, 189, 248",  x: 0.50, y: 0.78, r: 0.52, ax: 0.11, ay: 0.05, fx: 0.00033, fy: 0.00016, ph: 2.7 },
        { hue: "244, 114, 182", x: 0.82, y: 0.86, r: 0.42, ax: 0.06, ay: 0.09, fx: 0.00024, fy: 0.00027, ph: 4.2 },
      ];

      let mx = 0.5, my = 0.5, smx = 0.5, smy = 0.5;
      let inHero = false;
      hero.addEventListener("mouseenter", () => { inHero = true; });
      hero.addEventListener("mouseleave", () => { inHero = false; });
      hero.addEventListener("mousemove", (e) => {
        const r = hero.getBoundingClientRect();
        mx = (e.clientX - r.left) / r.width;
        my = (e.clientY - r.top) / r.height;
      });

      let running = true;
      const io = new IntersectionObserver((ents) => {
        ents.forEach((ent) => { running = ent.isIntersecting; });
      }, { threshold: 0 });
      io.observe(hero);

      let t = 0;
      const tick = () => {
        if (!running) { requestAnimationFrame(tick); return; }
        t += 1;
        const targetMx = inHero ? mx : 0.5;
        const targetMy = inHero ? my : 0.5;
        smx += (targetMx - smx) * 0.04;
        smy += (targetMy - smy) * 0.04;

        ctx.clearRect(0, 0, w, h);
        ctx.globalCompositeOperation = "lighter";

        const minDim = Math.min(w, h);
        for (let i = 0; i < blobs.length; i++) {
          const b = blobs[i];
          const cx = (b.x + Math.sin(t * b.fx + b.ph) * b.ax + (smx - 0.5) * 0.07 * (i + 1)) * w;
          const cy = (b.y + Math.cos(t * b.fy + b.ph) * b.ay + (smy - 0.5) * 0.07 * (i + 1)) * h;
          const rad = b.r * minDim;
          const g = ctx.createRadialGradient(cx, cy, 0, cx, cy, rad);
          g.addColorStop(0,    `rgba(${b.hue}, 0.55)`);
          g.addColorStop(0.45, `rgba(${b.hue}, 0.18)`);
          g.addColorStop(1,    `rgba(${b.hue}, 0)`);
          ctx.fillStyle = g;
          ctx.beginPath();
          ctx.arc(cx, cy, rad, 0, Math.PI * 2);
          ctx.fill();
        }
        requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    })();
  </script>
</body>
</html>
