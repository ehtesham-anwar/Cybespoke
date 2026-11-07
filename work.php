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
</head>
<body>
  <!-- NAV -->
  <?php $active = 'work'; include __DIR__ . '/header.php'; ?>

  <main class="work-page">
    <div class="container">
      <div class="work-page__head reveal">
        <div class="section-eyebrow"><span class="dot"></span> Selected work</div>
        <h1>Things we've <span class="grad">shipped</span> recently.</h1>
        <p>A small slice of the platforms, apps and smart tools we've built for teams across hospitality, healthcare, retail and beyond — all from the studio in Belfast.</p>
      </div>

      <?php include __DIR__ . '/components/projects.php'; ?>

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
