<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");if(t==="light"||t==="dark")document.documentElement.setAttribute("data-theme",t);}catch(e){}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Selected work — Cybespoke Belfast</title>
  <meta name="description" content="A selection of recent Cybespoke projects — web platforms, mobile apps, AI assistants and bespoke software, built from Belfast." />
  <link rel="canonical" href="https://cybespoke.co.uk/work.php" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/work.php" />
  <meta property="og:title" content="Selected work — Cybespoke" />
  <meta property="og:description" content="A selection of recent Cybespoke projects." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Selected work — Cybespoke" />
  <meta name="twitter:description" content="A selection of recent Cybespoke projects." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/global.css" />
  <style>
    .work-page { position: relative; padding: 160px 0 80px; z-index: 2; }
    .work-page__head { max-width: 760px; }
    .work-page__head .section-eyebrow { margin-bottom: 18px; }
    .work-page__head h1 {
      font-size: clamp(40px, 6.5vw, 84px);
      letter-spacing: -0.025em; line-height: 1.04;
      font-family: "Fraunces", serif; font-weight: 500;
    }
    .work-page__head .grad {
      background: linear-gradient(120deg, var(--accent), var(--accent-2) 50%, var(--accent-3));
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .work-page__head p {
      margin-top: 22px; max-width: 600px; font-size: 18px;
      color: var(--muted); line-height: 1.65;
    }

    .filters {
      display: flex; gap: 8px; flex-wrap: wrap;
      margin-top: 44px;
      padding: 6px;
      background:
        linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0)),
        var(--bg-soft);
      border: 1px solid var(--line); border-radius: 999px;
      align-self: flex-start; width: max-content; max-width: 100%;
    }
    .filters__btn {
      padding: 9px 16px; border-radius: 999px;
      font-family: "Inter Tight", sans-serif; font-size: 13px; font-weight: 500;
      color: var(--muted); cursor: pointer;
      border: 0; background: transparent;
      transition: background .3s var(--easing-soft), color .3s var(--easing-soft);
    }
    .filters__btn:hover { color: var(--text); }
    .filters__btn.is-active {
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #050508;
    }
    [data-theme="light"] .filters {
      background: var(--bg-soft);
    }

    .projects {
      margin-top: 60px;
      display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px;
    }
    @media (max-width: 820px) { .projects { grid-template-columns: 1fr; gap: 18px; } }

    .project {
      position: relative;
      border-radius: 26px;
      overflow: hidden;
      border: 1px solid var(--line);
      aspect-ratio: 4 / 3;
      box-shadow: var(--shadow-soft);
      isolation: isolate;
      display: block;
      transition: transform .55s var(--easing-soft), border-color .4s, box-shadow .5s;
    }
    .project:hover {
      transform: translateY(-8px);
      border-color: var(--line-strong);
      box-shadow: var(--shadow-lift);
    }
    .project__bg {
      position: absolute; inset: 0;
      background: linear-gradient(135deg, var(--g-from), var(--g-to));
    }
    .project__bg::before {
      content: ""; position: absolute; inset: -20%;
      background:
        radial-gradient(circle at 25% 25%, rgba(255,255,255,0.20), transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(0,0,0,0.22), transparent 55%);
    }
    .project__bg::after {
      content: ""; position: absolute; inset: 0;
      background-image:
        linear-gradient(rgba(255,255,255,0.07) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
      background-size: 48px 48px;
      mask-image: radial-gradient(ellipse at 50% 40%, #000 25%, transparent 80%);
      -webkit-mask-image: radial-gradient(ellipse at 50% 40%, #000 25%, transparent 80%);
    }

    .project__device {
      position: absolute; left: 50%; top: 46%;
      transform: translate(-50%, -50%);
      transition: transform .7s var(--easing-soft);
      z-index: 1;
    }
    .project:hover .project__device { transform: translate(-50%, -54%) scale(1.04); }

    .project__overlay {
      position: absolute; left: 0; right: 0; bottom: 0;
      padding: 30px 32px 28px;
      background: linear-gradient(180deg, transparent, rgba(5,5,8,0.82) 50%, rgba(5,5,8,0.95));
      color: #f4f5fa;
      z-index: 2;
    }
    .project__tag {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 5px 12px; border-radius: 999px;
      background: rgba(255,255,255,0.14);
      backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
      font-family: "JetBrains Mono", monospace; font-size: 11px;
      letter-spacing: 0.16em; text-transform: uppercase;
      color: rgba(255,255,255,0.92);
    }
    .project__tag i { width: 6px; height: 6px; border-radius: 50%; background: currentColor; }
    .project__title {
      font-family: "Fraunces", serif; font-size: clamp(22px, 2.4vw, 30px);
      margin-top: 12px; color: #fff; letter-spacing: -0.022em; line-height: 1.15;
    }
    .project__client {
      font-family: "JetBrains Mono", monospace; font-size: 11.5px;
      letter-spacing: 0.14em; text-transform: uppercase;
      color: rgba(255,255,255,0.55); margin-top: 6px;
    }
    .project__desc { font-size: 14px; color: rgba(255,255,255,0.78); margin-top: 10px; max-width: 92%; }
    .project__metrics {
      display: flex; gap: 24px; margin-top: 16px; flex-wrap: wrap;
    }
    .project__metric strong {
      display: block; font-family: "Space Grotesk", sans-serif; font-weight: 700;
      font-size: 20px; color: #fff;
      background: linear-gradient(120deg, var(--g-from), var(--g-to));
      -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;
    }
    .project__metric span {
      font-family: "JetBrains Mono", monospace; font-size: 10.5px;
      letter-spacing: 0.14em; text-transform: uppercase;
      color: rgba(255,255,255,0.55);
    }

    /* Per-project palettes */
    .project--a { --g-from: #0c8b7e; --g-to: #1e6fa3; }
    .project--b { --g-from: #5d3aa8; --g-to: #1e5d8a; }
    .project--c { --g-from: #7a3a9f; --g-to: #bd3d8a; }
    .project--d { --g-from: #126b58; --g-to: #5d3aa8; }
    .project--e { --g-from: #d97706; --g-to: #b91c1c; }
    .project--f { --g-from: #15803d; --g-to: #0891b2; }

    /* Reusable mockup styles (browser, phone, chat, dash) */
    .mockup-browser { width: 70%; max-width: 480px; border-radius: 12px; background: #0e0e16; border: 1px solid rgba(255,255,255,0.12); box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5); overflow: hidden; }
    .mockup-browser__bar { display: flex; gap: 6px; padding: 10px 12px; background: #15151f; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .mockup-browser__bar i { width: 9px; height: 9px; border-radius: 50%; background: rgba(255,255,255,0.18); }
    .mockup-browser__bar i:nth-child(1) { background: #ff5f57; }
    .mockup-browser__bar i:nth-child(2) { background: #febc2e; }
    .mockup-browser__bar i:nth-child(3) { background: #28c840; }
    .mockup-browser__body { padding: 14px; display: grid; gap: 8px; }
    .mockup-line { height: 8px; border-radius: 4px; background: rgba(255,255,255,0.08); }
    .mockup-line.w-30 { width: 30%; }
    .mockup-line.w-50 { width: 50%; }
    .mockup-line.w-70 { width: 70%; }
    .mockup-line.accent { background: linear-gradient(90deg, var(--g-from, #2dd4bf), var(--g-to, #38bdf8)); height: 10px; }
    .mockup-row { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 6px; margin-top: 4px; }
    .mockup-tile { height: 36px; border-radius: 6px; background: rgba(255,255,255,0.06); }
    .mockup-tile:nth-child(2) { background: linear-gradient(135deg, rgba(45,212,191,0.4), rgba(56,189,248,0.3)); }

    .mockup-phone { width: 45%; max-width: 200px; aspect-ratio: 9 / 18; border-radius: 26px; background: linear-gradient(180deg, #14101e, #0a0712); border: 1px solid rgba(255,255,255,0.12); box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5); padding: 6px; position: relative; }
    .mockup-phone::before { content: ""; position: absolute; top: 10px; left: 50%; transform: translateX(-50%); width: 36%; height: 14px; border-radius: 10px; background: #000; }
    .mockup-phone__screen { width: 100%; height: 100%; border-radius: 22px; background: linear-gradient(180deg, rgba(139,92,246,0.35), transparent 60%), #0a0712; padding: 28px 12px 14px; display: grid; grid-template-rows: auto 1fr auto; gap: 8px; }
    .mockup-phone__hello { color: rgba(255,255,255,0.8); font-size: 9px; font-family: "JetBrains Mono", monospace; letter-spacing: 0.1em; text-align: center; }
    .mockup-phone__feed { display: grid; gap: 6px; align-content: start; }
    .mockup-phone__row { height: 22px; border-radius: 6px; background: rgba(255,255,255,0.08); }
    .mockup-phone__row:nth-child(2) { background: linear-gradient(135deg, rgba(56,189,248,0.45), rgba(139,92,246,0.35)); }
    .mockup-phone__tabs { display: grid; grid-template-columns: repeat(4, 1fr); gap: 4px; padding-top: 6px; border-top: 1px solid rgba(255,255,255,0.08); }
    .mockup-phone__tabs i { height: 12px; border-radius: 4px; background: rgba(255,255,255,0.10); }
    .mockup-phone__tabs i.active { background: linear-gradient(135deg, #38bdf8, #8b5cf6); }

    .mockup-chat { width: 75%; max-width: 380px; border-radius: 16px; background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0)), #0e0a1c; border: 1px solid rgba(255,255,255,0.10); padding: 16px; display: grid; gap: 10px; box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5); }
    .mockup-bubble { padding: 10px 14px; border-radius: 14px; font-size: 11px; color: rgba(255,255,255,0.9); font-family: "JetBrains Mono", monospace; max-width: 80%; }
    .mockup-bubble.in { background: rgba(255,255,255,0.06); justify-self: start; border-bottom-left-radius: 4px; }
    .mockup-bubble.out { background: linear-gradient(135deg, rgba(139,92,246,0.7), rgba(244,114,182,0.65)); justify-self: end; border-bottom-right-radius: 4px; color: #fff; }

    .mockup-dash { width: 75%; max-width: 420px; border-radius: 14px; background: linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0)), #0c0d18; border: 1px solid rgba(255,255,255,0.10); padding: 14px; box-shadow: 0 30px 60px -20px rgba(0,0,0,0.5); }
    .mockup-dash__top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
    .mockup-dash__pill { height: 18px; width: 64px; border-radius: 10px; background: linear-gradient(135deg, var(--g-from, #2dd4bf), var(--g-to, #38bdf8)); }
    .mockup-dash__num { color: #fff; font-family: "Space Grotesk", sans-serif; font-weight: 700; font-size: 16px; }
    .mockup-dash__chart { height: 86px; background: linear-gradient(0deg, rgba(45,212,191,0.16), transparent), linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px) 0 0 / 100% 25%; border-radius: 8px; position: relative; overflow: hidden; }
    .mockup-dash__chart::before { content: ""; position: absolute; inset: 0; background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 80' preserveAspectRatio='none'><polyline points='0,60 20,55 40,48 60,52 80,38 100,30 120,32 140,20 160,16 180,10 200,12' fill='none' stroke='%232dd4bf' stroke-width='2.2' stroke-linejoin='round' stroke-linecap='round'/></svg>") no-repeat; background-size: 100% 100%; }

    /* Empty state when no projects match */
    .projects-empty {
      grid-column: 1 / -1;
      text-align: center; padding: 80px 20px;
      color: var(--muted); font-size: 16px;
    }

    /* Closing CTA */
    .work-cta {
      margin-top: 100px; padding: 80px 44px;
      border-radius: 28px;
      background:
        radial-gradient(900px 460px at 0% 0%, rgba(139, 92, 246, 0.28), transparent 60%),
        radial-gradient(700px 440px at 100% 100%, rgba(45, 212, 191, 0.22), transparent 60%),
        var(--bg-soft);
      border: 1px solid var(--line);
      text-align: center; position: relative; overflow: hidden;
    }
    .work-cta h2 { max-width: 700px; margin: 0 auto; }
    .work-cta p { max-width: 540px; margin: 16px auto 30px; color: var(--muted); }
    [data-theme="light"] .work-cta {
      background:
        radial-gradient(900px 460px at 0% 0%, rgba(139, 92, 246, 0.14), transparent 60%),
        radial-gradient(700px 440px at 100% 100%, rgba(45, 212, 191, 0.13), transparent 60%),
        var(--bg-soft);
    }

    @media (max-width: 720px) {
      .work-page { padding: 110px 0 50px; }
      .project__overlay { padding: 22px 22px 20px; }
      .project__title { font-size: 22px; }
      .project { aspect-ratio: 16 / 11; }
      .work-cta { margin-top: 60px; padding: 50px 22px; border-radius: 22px; }
    }
  </style>
</head>
<body class="page-enter">
  <!-- NAV -->
  <?php $active = 'work'; include __DIR__ . '/header.php'; ?>

  <main class="work-page">
    <div class="container">
      <div class="work-page__head reveal">
        <div class="section-eyebrow"><span class="dot"></span> Selected work</div>
        <h1>Things we've <span class="grad">shipped</span> recently.</h1>
        <p>A small slice of the platforms, apps and smart tools we've built for teams across hospitality, healthcare, retail and beyond — all from the studio in Belfast.</p>
      </div>

      <div class="filters reveal" role="tablist" aria-label="Filter projects">
        <button type="button" class="filters__btn is-active" data-filter="all">All</button>
        <button type="button" class="filters__btn" data-filter="web">Web apps</button>
        <button type="button" class="filters__btn" data-filter="mobile">Mobile</button>
        <button type="button" class="filters__btn" data-filter="ai">AI &amp; tools</button>
        <button type="button" class="filters__btn" data-filter="ecom">E‑commerce</button>
        <button type="button" class="filters__btn" data-filter="data">Data</button>
      </div>

      <div class="projects">
        <article class="project project--a reveal" data-tags="web ecom" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-browser">
              <div class="mockup-browser__bar"><i></i><i></i><i></i></div>
              <div class="mockup-browser__body">
                <div class="mockup-line w-50 accent"></div>
                <div class="mockup-line w-70"></div>
                <div class="mockup-line w-30"></div>
                <div class="mockup-row">
                  <div class="mockup-tile"></div><div class="mockup-tile"></div><div class="mockup-tile"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>Web platform</span>
            <h2 class="project__title">Booking platform for a hotel group</h2>
            <div class="project__client">Hospitality · 2025</div>
            <p class="project__desc">A direct‑booking platform replacing three legacy tools — one calendar, one inbox, one source of truth across eight properties.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>+38%</strong><span>direct bookings</span></div>
              <div class="project__metric"><strong>−65%</strong><span>admin time</span></div>
              <div class="project__metric"><strong>4.9★</strong><span>guest rating</span></div>
            </div>
          </div>
        </article>

        <article class="project project--b reveal" data-tags="mobile" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-phone">
              <div class="mockup-phone__screen">
                <div class="mockup-phone__hello">GOOD MORNING</div>
                <div class="mockup-phone__feed">
                  <div class="mockup-phone__row"></div>
                  <div class="mockup-phone__row"></div>
                  <div class="mockup-phone__row"></div>
                </div>
                <div class="mockup-phone__tabs"><i class="active"></i><i></i><i></i><i></i></div>
              </div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>Mobile app</span>
            <h2 class="project__title">Loyalty &amp; orders app for a coffee chain</h2>
            <div class="project__client">Retail · 2025</div>
            <p class="project__desc">iOS &amp; Android app with stamps, mobile orders and push offers — designed to be opened twice a week without nagging.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>92k</strong><span>installs</span></div>
              <div class="project__metric"><strong>2.4×</strong><span>repeat orders</span></div>
              <div class="project__metric"><strong>4.8★</strong><span>App Store</span></div>
            </div>
          </div>
        </article>

        <article class="project project--c reveal" data-tags="ai" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-chat">
              <div class="mockup-bubble in">how do I refund order #4821?</div>
              <div class="mockup-bubble out">Refunded £42.50 to •••• 4242. Anything else?</div>
              <div class="mockup-bubble in">thanks ✓</div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>AI assistant</span>
            <h2 class="project__title">Support copilot for an e‑commerce team</h2>
            <div class="project__client">DTC brand · 2025</div>
            <p class="project__desc">An assistant that reads orders, drafts replies and quietly handles refunds and address changes — escalates the tricky stuff to a human.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>74%</strong><span>tickets auto‑resolved</span></div>
              <div class="project__metric"><strong>−3min</strong><span>first reply</span></div>
              <div class="project__metric"><strong>£18k</strong><span>monthly saving</span></div>
            </div>
          </div>
        </article>

        <article class="project project--d reveal" data-tags="data web" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-dash">
              <div class="mockup-dash__top">
                <div class="mockup-dash__pill"></div>
                <div class="mockup-dash__num">+12.4%</div>
              </div>
              <div class="mockup-dash__chart"></div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>Data &amp; dashboards</span>
            <h2 class="project__title">Operations dashboard for a logistics SME</h2>
            <div class="project__client">Logistics · 2024</div>
            <p class="project__desc">Live data from three carriers and the warehouse system, in one screen — finally answering "where is the order?" without three phone calls.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>22</strong><span>sources unified</span></div>
              <div class="project__metric"><strong>&lt;2s</strong><span>refresh</span></div>
              <div class="project__metric"><strong>−40%</strong><span>customer calls</span></div>
            </div>
          </div>
        </article>

        <article class="project project--e reveal" data-tags="ecom web" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-browser">
              <div class="mockup-browser__bar"><i></i><i></i><i></i></div>
              <div class="mockup-browser__body">
                <div class="mockup-row">
                  <div class="mockup-tile"></div><div class="mockup-tile"></div><div class="mockup-tile"></div>
                </div>
                <div class="mockup-line w-70 accent"></div>
                <div class="mockup-line w-50"></div>
              </div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>E‑commerce</span>
            <h2 class="project__title">Headless shop for an artisan food brand</h2>
            <div class="project__client">Food &amp; drink · 2024</div>
            <p class="project__desc">A custom storefront, subscription engine and integration with the warehouse — built to handle Christmas without melting.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>3.4×</strong><span>conversion</span></div>
              <div class="project__metric"><strong>1.1s</strong><span>p95 load</span></div>
              <div class="project__metric"><strong>£0</strong><span>downtime</span></div>
            </div>
          </div>
        </article>

        <article class="project project--f reveal" data-tags="data ai" data-spotlight>
          <div class="project__bg"></div>
          <div class="project__device" aria-hidden="true">
            <div class="mockup-dash">
              <div class="mockup-dash__top">
                <div class="mockup-dash__pill"></div>
                <div class="mockup-dash__num">98.7%</div>
              </div>
              <div class="mockup-dash__chart"></div>
            </div>
          </div>
          <div class="project__overlay">
            <span class="project__tag"><i></i>Pipelines</span>
            <h2 class="project__title">Patient data pipeline for a clinic group</h2>
            <div class="project__client">Healthcare · 2024</div>
            <p class="project__desc">A GDPR‑safe ETL pipeline pulling from four EHR systems into a single warehouse — clinicians get one search box, IT gets one audit log.</p>
            <div class="project__metrics">
              <div class="project__metric"><strong>4</strong><span>EHRs unified</span></div>
              <div class="project__metric"><strong>15min</strong><span>refresh</span></div>
              <div class="project__metric"><strong>0</strong><span>data leaks</span></div>
            </div>
          </div>
        </article>
      </div>

      <div class="work-cta reveal">
        <div class="section-eyebrow"><span class="dot"></span> Your project next</div>
        <h2 style="margin-top: 18px;">Got something you'd like to ship?</h2>
        <p>Tell us about it — even a rough idea is enough. We'll reply within a working day with honest first thoughts and a free, no‑obligation quote.</p>
        <div style="display:flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
          <a href="start.php" class="btn btn--primary"><span>Start a project →</span></a>
          <a href="mailto:hello@cybespoke.co.uk" class="btn btn--ghost"><span>hello@cybespoke.co.uk</span></a>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <?php include __DIR__ . '/footer.php'; ?>

  <script src="assets/js/global.js"></script>
  <script>
    // Project filters
    (() => {
      const buttons = document.querySelectorAll(".filters__btn");
      const projects = document.querySelectorAll(".project");
      if (!buttons.length || !projects.length) return;

      buttons.forEach((b) => {
        b.addEventListener("click", () => {
          buttons.forEach((x) => x.classList.remove("is-active"));
          b.classList.add("is-active");
          const f = b.dataset.filter;
          let visible = 0;
          projects.forEach((p) => {
            const tags = (p.dataset.tags || "").split(/\s+/);
            const show = f === "all" || tags.includes(f);
            p.style.display = show ? "" : "none";
            if (show) visible++;
          });
        });
      });
    })();
  </script>
</body>
</html>
