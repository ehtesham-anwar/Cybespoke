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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/site.css?v=<?= filemtime(__DIR__ . '/../assets/css/site.css') ?>" />
</head>
<body>
  <?php $active = 'services'; $sub = 'security'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="hero page-hero page-hero--simple">
      <div class="wrap hero__inner">
        <div class="hero__copy">
          <p class="eyebrow">Server security &amp; management</p>
          <h1>Servers that stay <span class="accent">secure</span>, fast and online.</h1>
          <p class="hero__lede">Hardening, managed hosting, monitoring, backups and patching — we look after the infrastructure your business runs on, so you can stop worrying about it.</p>
          <div class="hero__actions">
            <a class="button button--primary" href="../start.php">Start a project <span aria-hidden="true">→</span></a>
            <a class="button button--secondary" href="#features">What we cover</a>
          </div>
        </div>
        <div class="hero__badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.5 4 5.5v6c0 5 3.4 8.8 8 10 4.6-1.2 8-5 8-10v-6l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
      </div>
    </section>

    <section class="section section--soft" id="features">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">What we cover</p>
          <h2>From a one‑off security check to fully managed servers.</h2>
        </header>
        <div class="cards">
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.5 4 5.5v6c0 5 3.4 8.8 8 10 4.6-1.2 8-5 8-10v-6l-8-3z"/><path d="m9 12 2 2 4-4"/></svg></div>
            <h3>Server hardening</h3>
            <p>Locked‑down SSH, firewalls, fail2ban, least‑privilege users and secure defaults on every box we touch.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="7" rx="1.5"/><rect x="3" y="13" width="18" height="7" rx="1.5"/><path d="M7 7.5h.01M7 16.5h.01"/></svg></div>
            <h3>Managed hosting</h3>
            <p>Linux servers, Nginx, PHP, Node and databases set up, tuned and looked after — on your cloud or ours.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l3-8 4 16 3-8h4"/></svg></div>
            <h3>Monitoring &amp; alerts</h3>
            <p>Uptime, CPU, disk and certificate checks around the clock — we hear about problems before your customers do.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-3-6.7"/><path d="M21 4v5h-5"/></svg></div>
            <h3>Patching &amp; updates</h3>
            <p>OS and package updates applied on a schedule, tested first, so known vulnerabilities never sit open.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v14a8 2.5 0 0 0 16 0V5"/><path d="M12 12v5m-2-2 2 2 2-2"/></svg></div>
            <h3>Backups &amp; recovery</h3>
            <p>Automated, encrypted, off‑site backups — and restores we actually test, so recovery is a plan, not a hope.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
            <h3>SSL, DNS &amp; Cloudflare</h3>
            <p>HTTPS everywhere, DNS done properly, WAF and DDoS protection configured in front of your sites.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/><path d="M11 8v3l2 1"/></svg></div>
            <h3>Security audits</h3>
            <p>Vulnerability scans and configuration reviews with a plain‑English report and a prioritised fix list.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4M12 17h.01"/><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/></svg></div>
            <h3>Incident response</h3>
            <p>Hacked site, outage or suspicious login? We contain it, clean it up, find the cause and close the gap.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg></div>
            <h3>Compliance support</h3>
            <p>Help preparing for Cyber Essentials and GDPR — access controls, logging and the evidence auditors ask for.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">Peace of mind</p>
          <h2>Not sure how secure your servers really are?</h2>
          <p>Tell us what you run and we'll start with a security review — then quote a fixed monthly price to keep it patched, monitored and backed up.</p>
        </header>
        <div class="hero__actions reveal">
          <a class="button button--primary" href="../start.php">Start a project <span aria-hidden="true">→</span></a>
          <a class="button button--secondary" href="mailto:hello@cybespoke.co.uk">hello@cybespoke.co.uk</a>
        </div>
      </div>
    </section>

    <div class="wrap">
      <nav class="pager" aria-label="More services">
        <a href="data.php">← Data pipelines</a>
        <a href="bespoke.php">Bespoke →</a>
      </nav>
    </div>

    <?php include __DIR__ . '/../components/contact-cta.php'; ?>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
  <script src="../assets/js/site.js"></script>
</body>
</html>
