<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Server security &amp; management — Cybespoke Belfast</title>
  <meta name="description" content="Server hardening, managed hosting, monitoring, backups and patching. Keep your servers secure, fast and online. Based in Belfast." />
  <link rel="canonical" href="https://cybespoke.co.uk/services/security.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Server security &amp; management — Cybespoke Belfast" />
  <meta property="og:description" content="Secure, monitored, managed servers — done right." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..700;1,9..144,400..600&family=Inter+Tight:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/global.css?v=<?= filemtime(__DIR__ . '/../assets/css/global.css') ?>" />
  <style>
    :root { --p-from: #10b981; --p-to: #0ea5e9; }
    .svc-hero { position: relative; padding: 160px 0 60px; z-index: 2; overflow: hidden; }
    .svc-hero__inner { display: grid; grid-template-columns: 1.1fr 1fr; gap: 60px; align-items: center; }
    @media (max-width: 980px) { .svc-hero__inner { grid-template-columns: 1fr; } }
    .svc-eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 7px 14px; border-radius: 999px; border: 1px solid var(--line); font-family: "JetBrains Mono", monospace; font-size: 12px; letter-spacing: 0.16em; text-transform: uppercase; color: var(--muted); }
    .svc-eyebrow .dot { width: 6px; height: 6px; border-radius: 50%; background: var(--p-from); box-shadow: 0 0 0 4px rgba(16,185,129,0.18); }
    .svc-hero h1 { font-size: clamp(40px, 6.5vw, 84px); letter-spacing: -0.025em; line-height: 1.04; font-family: "Fraunces", serif; font-weight: 500; margin-top: 22px; }
    .svc-hero h1 .grad { background: linear-gradient(120deg, var(--p-from), var(--p-to)); -webkit-background-clip: text; background-clip: text; color: transparent; }
    .svc-hero p.lede { margin-top: 22px; max-width: 580px; font-size: 18px; color: var(--muted); line-height: 1.65; }
    .svc-hero .ctas { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
    .svc-visual { position: relative; aspect-ratio: 1; max-width: 480px; margin-inline: auto; width: 100%; }
    .svc-visual__bg { position: absolute; inset: 0; border-radius: 24px; background: linear-gradient(135deg, var(--p-from), var(--p-to)); opacity: 0.18; filter: blur(40px); }
    .svc-icon-large { position: absolute; inset: 12%; border-radius: 24px; display: grid; place-items: center; background: linear-gradient(135deg, var(--p-from), var(--p-to)); box-shadow: 0 30px 60px -20px rgba(16,185,129,0.45); color: #fff; }
    .svc-icon-large svg { width: 40%; height: 40%; }
    .features { padding: 80px 0; position: relative; z-index: 2; }
    .features__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 40px; }
    @media (max-width: 820px) { .features__grid { grid-template-columns: 1fr; } }
    .feature { padding: 28px; border-radius: 18px; border: 1px solid var(--line); background: var(--bg-soft); transition: transform .4s var(--easing-soft), border-color .35s; }
    .feature:hover { transform: translateY(-4px); border-color: var(--line-strong); }
    .feature__icon { width: 40px; height: 40px; border-radius: 10px; background: var(--tint-soft); border: 1px solid var(--line); display: grid; place-items: center; color: var(--p-from); margin-bottom: 16px; transition: border-color .35s var(--easing-soft), background .35s var(--easing-soft); }
    .feature:hover .feature__icon { border-color: var(--line-strong); background: var(--tint-mid); }
    .feature__icon svg { width: 20px; height: 20px; }
    .feature h3 { font-size: 17px; margin-bottom: 8px; font-family: "Inter Tight", sans-serif; font-weight: 600; }
    .feature p { font-size: 15px; color: var(--muted); line-height: 1.6; }
    .svc-cta { margin: 80px 0 0; padding: 70px 44px; border-radius: 28px; background: radial-gradient(900px 460px at 0% 0%, rgba(16,185,129,0.25), transparent 60%), radial-gradient(700px 440px at 100% 100%, rgba(14,165,233,0.22), transparent 60%), var(--bg-soft); border: 1px solid var(--line); text-align: center; position: relative; overflow: hidden; }
    .svc-cta h2 { max-width: 700px; margin: 0 auto; }
    .svc-cta p { max-width: 540px; margin: 16px auto 28px; color: var(--muted); }
    .pager { margin: 80px 0 0; padding: 24px 28px; border: 1px solid var(--line); border-radius: 18px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; }
    .pager a { color: var(--muted); font-size: 14px; }
    .pager a:hover { color: var(--text); }
  </style>
</head>
<body class="page-enter">
  <?php $active = 'services'; $sub = 'security'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="svc-hero">
      <div class="container svc-hero__inner">
        <div class="reveal">
          <div class="svc-eyebrow"><span class="dot"></span> Server security &amp; management</div>
          <h1>Servers that stay <span class="grad">secure</span>, fast and online.</h1>
          <p class="lede">Hardening, managed hosting, monitoring, backups and patching — we look after the infrastructure your business runs on, so you can stop worrying about it.</p>
          <div class="ctas">
            <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
            <a href="#features" class="btn btn--ghost"><span>What we cover</span></a>
          </div>
        </div>
        <div class="svc-visual reveal">
          <div class="svc-visual__bg"></div>
          <div class="svc-icon-large">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.5 4 5.5v6c0 5 3.4 8.8 8 10 4.6-1.2 8-5 8-10v-6l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
          </div>
        </div>
      </div>
    </section>

    <section class="features container" id="features">
      <div class="reveal">
        <div class="svc-eyebrow"><span class="dot"></span> What we cover</div>
        <h2 style="margin-top: 14px;">From a one‑off security check to fully managed servers.</h2>
      </div>
      <div class="features__grid">
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.5 4 5.5v6c0 5 3.4 8.8 8 10 4.6-1.2 8-5 8-10v-6l-8-3z"/><path d="m9 12 2 2 4-4"/></svg></div><h3>Server hardening</h3><p>Locked‑down SSH, firewalls, fail2ban, least‑privilege users and secure defaults on every box we touch.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="7" rx="1.5"/><rect x="3" y="13" width="18" height="7" rx="1.5"/><path d="M7 7.5h.01M7 16.5h.01"/></svg></div><h3>Managed hosting</h3><p>Linux servers, Nginx, PHP, Node and databases set up, tuned and looked after — on your cloud or ours.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l3-8 4 16 3-8h4"/></svg></div><h3>Monitoring &amp; alerts</h3><p>Uptime, CPU, disk and certificate checks around the clock — we hear about problems before your customers do.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-3-6.7"/><path d="M21 4v5h-5"/></svg></div><h3>Patching &amp; updates</h3><p>OS and package updates applied on a schedule, tested first, so known vulnerabilities never sit open.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v14a8 2.5 0 0 0 16 0V5"/><path d="M12 12v5m-2-2 2 2 2-2"/></svg></div><h3>Backups &amp; recovery</h3><p>Automated, encrypted, off‑site backups — and restores we actually test, so recovery is a plan, not a hope.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div><h3>SSL, DNS &amp; Cloudflare</h3><p>HTTPS everywhere, DNS done properly, WAF and DDoS protection configured in front of your sites.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/><path d="M11 8v3l2 1"/></svg></div><h3>Security audits</h3><p>Vulnerability scans and configuration reviews with a plain‑English report and a prioritised fix list.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4M12 17h.01"/><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg></div><h3>Incident response</h3><p>Hacked site, outage or suspicious login? We contain it, clean it up, find the cause and close the gap.</p></div>
        <div class="feature reveal" data-spotlight><div class="feature__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div><h3>Compliance support</h3><p>Help preparing for Cyber Essentials and GDPR — access controls, logging and the evidence auditors ask for.</p></div>
      </div>

      <div class="svc-cta reveal">
        <div class="svc-eyebrow"><span class="dot"></span> Peace of mind</div>
        <h2 style="margin-top: 18px;">Not sure how secure your servers really are?</h2>
        <p>Tell us what you run and we'll start with a security review — then quote a fixed monthly price to keep it patched, monitored and backed up.</p>
        <div style="display:flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
          <a href="../start.php" class="btn btn--primary"><span>Start a project →</span></a>
          <a href="mailto:hello@cybespoke.co.uk" class="btn btn--ghost"><span>hello@cybespoke.co.uk</span></a>
        </div>
      </div>

      <div class="pager reveal">
        <a href="data.php">← Data pipelines</a>
        <a href="bespoke.php">Bespoke →</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
</body>
</html>
