<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CRM &amp; internal tools — Cybespoke Belfast</title>
  <meta name="description" content="Custom CRMs, ops dashboards and internal tools built around your team's actual workflow — not someone else's template." />
  <link rel="canonical" href="https://cybespoke.co.uk/services/crm.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CRM &amp; internal tools — Cybespoke Belfast" />
  <meta property="og:description" content="Custom CRMs and internal tools built around your workflow." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/global.css" />
  <style>
    :root { --p-from: #14b8a6; --p-to: #6366f1; }
    .svc-hero { position: relative; padding: 160px 0 60px; z-index: 2; overflow: hidden; }
    .svc-hero__inner { display: grid; grid-template-columns: 1.1fr 1fr; gap: 60px; align-items: center; }
    @media (max-width: 980px) { .svc-hero__inner { grid-template-columns: 1fr; } }
    .svc-eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 7px 14px; border-radius: 999px; border: 1px solid var(--line); font-family: "JetBrains Mono", monospace; font-size: 12px; letter-spacing: 0.16em; text-transform: uppercase; color: var(--muted); }
    .svc-eyebrow .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--p-from); box-shadow: 0 0 0 4px rgba(20,184,166,0.18); }
    .svc-hero h1 { font-size: clamp(40px, 6.5vw, 84px); letter-spacing: -0.025em; line-height: 1.04; font-family: "Fraunces", serif; font-weight: 500; margin-top: 22px; }
    .svc-hero h1 .grad { background: linear-gradient(120deg, var(--p-from), var(--p-to)); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .svc-hero p.lede { margin-top: 22px; max-width: 580px; font-size: 18px; color: var(--muted); line-height: 1.65; }
    .svc-hero .ctas { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
    .svc-visual { position: relative; aspect-ratio: 1; max-width: 480px; margin-inline: auto; width: 100%; }
    .svc-visual__bg { position: absolute; inset: 0; border-radius: 24px; background: linear-gradient(135deg, var(--p-from), var(--p-to)); opacity: 0.18; filter: blur(40px); }
    .svc-icon-large {
      position: absolute; inset: 12%; border-radius: 24px;
      display: grid; place-items: center;
      background: linear-gradient(135deg, var(--p-from), var(--p-to));
      box-shadow: 0 30px 60px -20px rgba(20,184,166,0.4);
      color: #fff;
    }
    .svc-icon-large svg { width: 40%; height: 40%; }

    .features { padding: 80px 0; position: relative; z-index: 2; }
    .features__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 40px; }
    @media (max-width: 820px) { .features__grid { grid-template-columns: 1fr; } }
    .feature { padding: 28px; border-radius: 18px; border: 1px solid var(--line); background: var(--bg-soft); transition: transform .4s var(--easing-soft), border-color .35s; }
    .feature:hover { transform: translateY(-4px); border-color: var(--line-strong); }
    .feature__icon { width: 40px; height: 40px; border-radius: 10px; background: linear-gradient(135deg, var(--p-from), var(--p-to)); display: grid; place-items: center; color: #fff; margin-bottom: 16px; }
    .feature__icon svg { width: 20px; height: 20px; }
    .feature h3 { font-size: 17px; margin-bottom: 8px; font-family: "Inter Tight", sans-serif; font-weight: 600; }
    .feature p { font-size: 14px; color: var(--muted); line-height: 1.6; }

    .svc-cta { margin: 80px 0 0; padding: 70px 44px; border-radius: 28px; background: radial-gradient(900px 460px at 0% 0%, rgba(20,184,166,0.25), transparent 60%), radial-gradient(700px 440px at 100% 100%, rgba(99,102,241,0.22), transparent 60%), var(--bg-soft); border: 1px solid var(--line); text-align: center; position: relative; overflow: hidden; }
    .svc-cta h2 { max-width: 700px; margin: 0 auto; }
    .svc-cta p { max-width: 540px; margin: 16px auto 28px; color: var(--muted); }

    .pager { margin: 80px 0 0; padding: 24px 28px; border: 1px solid var(--line); border-radius: 18px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; }
    .pager a { color: var(--muted); font-size: 14px; }
    .pager a:hover { color: var(--text); }
  </style>
</head>
<body class="page-enter">
  <?php $active = 'services'; $sub = 'crm'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="svc-hero">
      <div class="container svc-hero__inner">
        <div class="reveal">
          <div class="svc-eyebrow"><span class="dot"></span> CRM &amp; internal tools</div>
          <h1>Software built around <span class="grad">your team</span> — not the other way round.</h1>
          <p class="lede">Off‑the‑shelf CRMs always need workarounds. We build the CRM, the ops dashboard, the back‑office tool — whatever you need — to fit the way your business actually runs.</p>
          <div class="ctas">
            <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
            <a href="#features" class="btn btn--ghost"><span>What we build</span></a>
          </div>
        </div>
        <div class="svc-visual reveal">
          <div class="svc-visual__bg"></div>
          <div class="svc-icon-large">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="6.5" r="2.5"/><path d="M21 14c0-2.2-1.8-4-4-4"/></svg>
          </div>
        </div>
      </div>
    </section>

    <section class="features container" id="features">
      <div class="reveal">
        <div class="svc-eyebrow"><span class="dot"></span> What we build</div>
        <h2 style="margin-top: 14px;">Six pieces that make up a tool your team will actually use.</h2>
      </div>
      <div class="features__grid">
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
          <h3>Customer 360</h3>
          <p>One screen with the contact, the deals, the notes, the support tickets — no more swivel‑chairing between five tools.</p>
        </div>
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <h3>Custom pipelines</h3>
          <p>Define the stages your team actually uses. Drag, drop, automate. No vendor‑shaped pipelines pretending to be yours.</p>
        </div>
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg></div>
          <h3>Role‑based access</h3>
          <p>Sales sees deals, accounts sees invoices, support sees tickets. Everyone gets exactly the data they need.</p>
        </div>
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
          <h3>Integrations</h3>
          <p>Plug in your accounting, email, calendar, phone system. Two‑way sync, not one‑off CSV exports.</p>
        </div>
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 17 4-6 4 3 5-9"/></svg></div>
          <h3>Live reporting</h3>
          <p>Dashboards your board will actually read. KPIs, leaderboards, weekly digests — emailed on Monday morning.</p>
        </div>
        <div class="feature reveal" data-spotlight>
          <div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <h3>GDPR &amp; audit logs</h3>
          <p>Encryption at rest, right‑to‑forget workflows, immutable audit logs — the boring stuff, done right.</p>
        </div>
      </div>

      <div class="svc-cta reveal">
        <div class="svc-eyebrow"><span class="dot"></span> Start with a 30‑min call</div>
        <h2 style="margin-top: 18px;">Tell us how your team works today.</h2>
        <p>We'll come back with a sketch of how a custom CRM could fit — and a fixed‑price quote to build it.</p>
        <div style="display:flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
          <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
          <a href="mailto:hello@cybespoke.co.uk" class="btn btn--ghost"><span>hello@cybespoke.co.uk</span></a>
        </div>
      </div>

      <div class="pager reveal">
        <a href="ecommerce.php">← E‑commerce</a>
        <a href="ai.php">AI &amp; smart tools →</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
</body>
</html>
