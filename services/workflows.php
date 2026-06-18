<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Workflow automation — Cybespoke Belfast</title>
  <meta name="description" content="Stitch your tools together, remove the manual steps and let the business run itself. Custom workflow automation, built in Belfast." />
  <link rel="canonical" href="https://cybespoke.co.uk/services/workflows.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Workflow automation — Cybespoke Belfast" />
  <meta property="og:description" content="Stitch your tools together and remove the manual steps." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/global.css" />
  <style>
    :root { --p-from: #06b6d4; --p-to: #6366f1; }
    .svc-hero { position: relative; padding: 160px 0 60px; z-index: 2; overflow: hidden; }
    .svc-hero__inner { display: grid; grid-template-columns: 1.1fr 1fr; gap: 60px; align-items: center; }
    @media (max-width: 980px) { .svc-hero__inner { grid-template-columns: 1fr; } }
    .svc-eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 7px 14px; border-radius: 999px; border: 1px solid var(--line); font-family: "JetBrains Mono", monospace; font-size: 12px; letter-spacing: 0.16em; text-transform: uppercase; color: var(--muted); }
    .svc-eyebrow .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--p-from); box-shadow: 0 0 0 4px rgba(6,182,212,0.18); }
    .svc-hero h1 { font-size: clamp(40px, 6.5vw, 84px); letter-spacing: -0.025em; line-height: 1.04; font-family: "Fraunces", serif; font-weight: 500; margin-top: 22px; }
    .svc-hero h1 .grad { background: linear-gradient(120deg, var(--p-from), var(--p-to)); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .svc-hero p.lede { margin-top: 22px; max-width: 580px; font-size: 18px; color: var(--muted); line-height: 1.65; }
    .svc-hero .ctas { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
    .svc-visual { position: relative; aspect-ratio: 1; max-width: 480px; margin-inline: auto; width: 100%; }
    .svc-visual__bg { position: absolute; inset: 0; border-radius: 24px; background: linear-gradient(135deg, var(--p-from), var(--p-to)); opacity: 0.18; filter: blur(40px); }
    .svc-icon-large { position: absolute; inset: 12%; border-radius: 24px; display: grid; place-items: center; background: linear-gradient(135deg, var(--p-from), var(--p-to)); box-shadow: 0 30px 60px -20px rgba(6,182,212,0.45); color: #fff; }
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
    .svc-cta { margin: 80px 0 0; padding: 70px 44px; border-radius: 28px; background: radial-gradient(900px 460px at 0% 0%, rgba(6,182,212,0.25), transparent 60%), radial-gradient(700px 440px at 100% 100%, rgba(99,102,241,0.22), transparent 60%), var(--bg-soft); border: 1px solid var(--line); text-align: center; position: relative; overflow: hidden; }
    .svc-cta h2 { max-width: 700px; margin: 0 auto; }
    .svc-cta p { max-width: 540px; margin: 16px auto 28px; color: var(--muted); }
    .pager { margin: 80px 0 0; padding: 24px 28px; border: 1px solid var(--line); border-radius: 18px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; }
    .pager a { color: var(--muted); font-size: 14px; }
    .pager a:hover { color: var(--text); }
  </style>
</head>
<body class="page-enter">
  <?php $active = 'services'; $sub = 'workflows'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="svc-hero">
      <div class="container svc-hero__inner">
        <div class="reveal">
          <div class="svc-eyebrow"><span class="dot"></span> Workflow automation</div>
          <h1>Stop copying‑and‑pasting. <span class="grad">Let it run itself.</span></h1>
          <p class="lede">Connect your tools, remove the manual steps and free up your team's time. From a single Zap that saves an hour a day to a full custom orchestration that runs the back office.</p>
          <div class="ctas">
            <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
            <a href="#features" class="btn btn--ghost"><span>What we automate</span></a>
          </div>
        </div>
        <div class="svc-visual reveal">
          <div class="svc-visual__bg"></div>
          <div class="svc-icon-large">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 6h10M5 8v8M19 8v8M7 18h10"/></svg>
          </div>
        </div>
      </div>
    </section>

    <section class="features container" id="features">
      <div class="reveal">
        <div class="svc-eyebrow"><span class="dot"></span> What we automate</div>
        <h2 style="margin-top: 14px;">Anywhere you'd hire a temp to copy between two spreadsheets.</h2>
      </div>
      <div class="features__grid">
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><h3>Order &amp; lead routing</h3><p>From form to CRM to Slack to invoice — instantly, with the right person notified.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.5 8.5 0 1 1-17 0 8.5 8.5 0 0 1 17 0z"/><path d="M12 6v6l4 2"/></svg></div><h3>Scheduling &amp; reminders</h3><p>Booking confirmations, SMS reminders, follow‑ups, no‑show recovery — all hands‑free.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="16" height="20" rx="2"/><path d="M9 12h6M9 8h6M9 16h6"/></svg></div><h3>Document &amp; quote gen</h3><p>One‑click PDFs, contracts, quotes pulled from your CRM with the right numbers.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div><h3>Stock &amp; supply</h3><p>Re‑order triggers, low‑stock alerts, supplier emails — keep shelves full automatically.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-11 11"/><path d="m22 2-7 20-4-9-9-4 20-7z"/></svg></div><h3>Email &amp; CRM sync</h3><p>Two‑way sync between Mailchimp/HubSpot/Klaviyo and your CRM — no more drift.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/></svg></div><h3>Approvals &amp; reviews</h3><p>Multi‑step approval chains for purchases, leave, contracts — with audit logs.</p></div>
      </div>

      <div class="svc-cta reveal">
        <div class="svc-eyebrow"><span class="dot"></span> Pay back in weeks, not years</div>
        <h2 style="margin-top: 18px;">What's the most annoying repetitive task?</h2>
        <p>Tell us about one and we'll quote a fixed price to automate it. If it doesn't save more than it costs in 6 months, it's not worth doing.</p>
        <div style="display:flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
          <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
          <a href="mailto:hello@cybespoke.co.uk" class="btn btn--ghost"><span>hello@cybespoke.co.uk</span></a>
        </div>
      </div>

      <div class="pager reveal">
        <a href="ai.php">← AI &amp; smart tools</a>
        <a href="data.php">Data pipelines →</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
</body>
</html>
