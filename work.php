<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
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

  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/site.css?v=<?= filemtime(__DIR__ . '/assets/css/site.css') ?>" />
  <style>
    /* Work page: project cards with live preview (tokens from site.css only) */
    .page-header h1 .accent { color: var(--accent); }
    .projects { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .projects--solo { grid-template-columns: 1fr; }
    .project { padding: 0; overflow: hidden; }
    .projects--solo .project { display: grid; grid-template-columns: 1.2fr 1fr; }
    .project__preview { position: relative; aspect-ratio: 16 / 10; overflow: hidden; background: var(--surface); border-bottom: 1px solid var(--line); }
    .projects--solo .project__preview { aspect-ratio: auto; min-height: 420px; border-bottom: 0; border-right: 1px solid var(--line); }
    .project__live { position: absolute; inset: 0; width: 166.67%; height: 166.67%; border: 0; background: #fff; transform: scale(.6); transform-origin: 0 0; pointer-events: none; }
    .project__visit { position: absolute; top: 16px; right: 16px; display: inline-flex; align-items: center; gap: 6px; height: 34px; padding: 0 14px; border-radius: 999px; background: var(--card); border: 1px solid var(--line); box-shadow: var(--shadow); font-size: 13px; font-weight: 600; color: var(--text); }
    .project__visit svg { width: 14px; height: 14px; color: var(--accent); }
    .project__body { display: flex; flex-direction: column; padding: 36px; }
    .project__body .eyebrow { flex: none; margin: 0 0 12px; font-size: 13px; color: var(--accent); }
    .project__title { font-size: clamp(24px, 2.6vw, 30px); }
    .project__client { margin-top: 8px; font-size: 14px; color: var(--muted); }
    .card .project__desc { flex: none; margin-top: 16px; }
    .project__metrics { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: auto; padding-top: 24px; border-top: 1px solid var(--line); }
    .project__desc + .project__metrics { margin-top: 28px; }
    .project__metric strong { display: block; font-size: 22px; font-weight: 700; letter-spacing: -0.02em; }
    .project__metric span { font-size: 13px; color: var(--muted); }
    @media (max-width: 900px) {
      .projects, .projects--solo .project { grid-template-columns: 1fr; }
      .projects--solo .project__preview { aspect-ratio: 16 / 10; min-height: 0; border-right: 0; border-bottom: 1px solid var(--line); }
    }
    @media (max-width: 640px) {
      .project__body { padding: 24px; }
      .project__metrics { grid-template-columns: 1fr 1fr; }
    }
  </style>
</head>
<body>
  <?php $active = 'work'; include __DIR__ . '/header.php'; ?>

  <main>
    <header class="page-header">
      <div class="wrap reveal">
        <p class="eyebrow">Selected work</p>
        <h1>Things we've <span class="accent">shipped</span> recently.</h1>
        <p>A small slice of the platforms, apps and smart tools we've built for teams across hospitality, healthcare, retail and beyond — all from the studio in Belfast.</p>
      </div>
    </header>

    <section class="section">
      <div class="wrap">
        <?php include __DIR__ . '/components/projects.php'; ?>
      </div>
    </section>

    <section class="section section--tight">
      <div class="wrap">
        <div class="cta reveal">
          <div>
            <p class="eyebrow eyebrow--light">Your project next</p>
            <h2>Got something you'd like to ship?</h2>
            <p>Tell us about it — even a rough idea is enough. We'll reply within a working day with honest first thoughts and a free, no‑obligation quote.</p>
          </div>
          <div class="cta__actions">
            <a href="start.php" class="button button--primary">Start a project <span aria-hidden="true">→</span></a>
            <a href="mailto:hello@cybespoke.co.uk" class="button button--on-dark">hello@cybespoke.co.uk</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/footer.php'; ?>

  <script src="assets/js/global.js"></script>
  <script src="assets/js/site.js"></script>
  <script>
    // Project filters (active when .filters__btn buttons are present)
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
