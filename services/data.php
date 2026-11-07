<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Data pipelines — Cybespoke Belfast</title>
  <meta name="description" content="ETL pipelines, warehousing and integrations. Get the right data to the right place, reliably. Built in Belfast." />
  <link rel="canonical" href="https://cybespoke.co.uk/services/data.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Data pipelines — Cybespoke Belfast" />
  <meta property="og:description" content="ETL, warehousing and integrations done right." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/site.css?v=<?= filemtime(__DIR__ . '/assets/css/site.css') ?>" />
</head>
<body>
  <?php $active = 'services'; $sub = 'data'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="hero page-hero page-hero--simple">
      <div class="wrap hero__inner">
        <div class="hero__copy">
          <p class="eyebrow">Data pipelines</p>
          <h1>Your data, in <span class="accent">one place</span>, ready when you ask.</h1>
          <p class="hero__lede">ETL pipelines, warehousing, integrations and reverse‑ETL — connecting your business systems and putting the right data in the right hands, reliably and GDPR‑safely.</p>
          <div class="hero__actions">
            <a class="button button--primary" href="../start.php">Start a project <span aria-hidden="true">→</span></a>
            <a class="button button--secondary" href="#features">What we build</a>
          </div>
        </div>
        <div class="hero__badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V5"/><path d="M4 11v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-6"/></svg>
        </div>
      </div>
    </section>

    <section class="section section--soft" id="features">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">What we build</p>
          <h2>From single connectors to a full data platform.</h2>
        </header>
        <div class="cards">
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
            <h3>ETL &amp; ELT</h3>
            <p>Custom pipelines from any source to your warehouse — Airbyte, Fivetran, or our own when needed.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v14a8 2.5 0 0 0 16 0V5"/></svg></div>
            <h3>Data warehouses</h3>
            <p>BigQuery, Snowflake, Postgres, ClickHouse — set up, modelled and ready to query.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12c0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8"/><path d="m9 11 3 3L22 4"/></svg></div>
            <h3>dbt models</h3>
            <p>Tested, documented and version‑controlled — analysts can finally trust the numbers.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 17 4-6 4 3 5-9"/></svg></div>
            <h3>Dashboards &amp; BI</h3>
            <p>Metabase, Looker, Power BI — pick your tool, we'll connect it and build the dashboards.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg></div>
            <h3>Reverse ETL</h3>
            <p>Push insights back into your CRM, marketing tools, and ops dashboards. Operationalise the warehouse.</p>
          </div>
          <div class="card card--static reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
            <h3>GDPR &amp; governance</h3>
            <p>Encryption at rest, right‑to‑forget, lineage tracking, role‑based access — done properly.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">One source of truth</p>
          <h2>Tired of three different reports disagreeing?</h2>
          <p>Tell us your stack and we'll quote a fixed price to unify it. Most clients see clean dashboards within four to eight weeks.</p>
        </header>
        <div class="hero__actions reveal">
          <a class="button button--primary" href="../start.php">Start a project <span aria-hidden="true">→</span></a>
          <a class="button button--secondary" href="mailto:hello@cybespoke.co.uk">hello@cybespoke.co.uk</a>
        </div>
      </div>
    </section>

    <div class="wrap">
      <nav class="pager" aria-label="More services">
        <a href="workflows.php">← Workflow automation</a>
        <a href="security.php">Server security →</a>
      </nav>
    </div>

    <?php include __DIR__ . '/../components/contact-cta.php'; ?>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
  <script src="../assets/js/site.js"></script>
</body>
</html>
