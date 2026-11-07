<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Mobile apps — Cybespoke Belfast</title>
  <meta name="description" content="iPhone and Android apps built in Belfast — for sign‑up, payments, notifications and apps people actually keep on their home screen." />
  <meta name="keywords" content="mobile app development Belfast, iOS app developer, Android app developer, app studio Northern Ireland, React Native Belfast" />
  <link rel="canonical" href="https://cybespoke.co.uk/services/mobile.php" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/services/mobile.php" />
  <meta property="og:title" content="Mobile apps — Cybespoke Belfast" />
  <meta property="og:description" content="iPhone and Android apps people actually keep on their home screen. By Cybespoke, Belfast." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Mobile apps — Cybespoke Belfast" />
  <meta name="twitter:description" content="iPhone and Android apps people actually keep on their home screen." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/site.css?v=<?= filemtime(__DIR__ . '/../assets/css/site.css') ?>" />
</head>
<body>
  <?php $active = 'services'; $sub = 'mobile'; include __DIR__ . '/../header.php'; ?>

  <section class="m-hero">
    <div class="container m-hero__inner">
      <div>
        <div class="section-eyebrow"><span class="dot"></span> Apps</div>
        <h1 style="margin-top: 18px;">Apps people actually keep on their home screen.</h1>
        <p class="lede">iPhone and Android apps that feel polished, work offline when the signal drops, and welcome people in without losing them.</p>
        <div class="ctas">
          <a class="btn btn--primary" href="../index.php#contact">Build with us →</a>
          <a class="btn btn--ghost" href="#capabilities">What we ship</a>
        </div>
      </div>

      <div class="stage reveal">
        <!-- Phone 1 — Main app -->
        <div class="phone phone--1">
          <div class="phone__screen">
            <div class="status"><span>9:41</span><div class="icons"><i></i><i></i><i></i></div></div>
            <div class="app__head">
              <div class="app__greeting">Good morning,</div>
              <div class="app__title">Alex 👋</div>
            </div>
            <div class="balance">
              <div class="label">Balance</div>
              <div class="amount">£12,840.20</div>
            </div>
            <div class="feed">
              <div class="feed__title">Activity</div>
              <div class="notif"><div class="av"></div><div class="body"><div class="name">Sofia M.</div><div class="msg">sent you £42.00 · Coffee</div></div><div class="time">2m</div></div>
              <div class="notif"><div class="av" style="background:linear-gradient(135deg,#21d4fd,#7c5cff);"></div><div class="body"><div class="name">Stripe</div><div class="msg">Payout completed · £3,200</div></div><div class="time">1h</div></div>
              <div class="notif"><div class="av" style="background:linear-gradient(135deg,#ffd166,#ff5d8f);"></div><div class="body"><div class="name">Lola</div><div class="msg">Want to grab dinner Friday?</div></div><div class="time">3h</div></div>
            </div>
            <div class="tabs">
              <i class="active"></i><i></i><i></i><i></i>
            </div>
          </div>
        </div>

        <!-- Phone 2 — onboarding -->
        <div class="phone phone--2">
          <div class="phone__screen">
            <div class="status"><span>9:41</span><div class="icons"><i></i><i></i><i></i></div></div>
            <div class="onb">
              <div class="onb__hero"></div>
              <div class="onb__title">Welcome aboard.</div>
              <div class="onb__sub">Your money, finally feeling lightweight.</div>
              <div class="onb__btn">Get started</div>
              <div class="onb__dots"><i></i><i class="active"></i><i></i></div>
            </div>
          </div>
        </div>

        <div class="swipe-hint"><i></i><span>swipe to explore</span><i></i></div>
      </div>
    </div>
  </section>

  <section class="caps container reveal" id="capabilities">
    <div class="section-eyebrow"><span class="dot"></span> What we build</div>
    <h2 style="margin-top: 14px;">From first launch screen to App Store.</h2>
    <p style="max-width: 540px; margin-top: 12px;">Drag the cards →</p>

    <div class="caps__rail">
      <div class="cap-card"><div><div class="glyph">⌘</div><h3>First impressions</h3><p>The first 60 seconds matter most. We design sign‑up and welcome flows that don't lose people.</p></div><span style="font-size:12px;color:var(--muted);">01 — Welcome</span></div>
      <div class="cap-card"><div><div class="glyph">£</div><h3>Payments &amp; subscriptions</h3><p>Apple Pay, Google Pay, free trials, paywalls and receipts — handled cleanly.</p></div><span style="font-size:12px;color:var(--muted);">02 — Money</span></div>
      <div class="cap-card"><div><div class="glyph">↻</div><h3>Works offline</h3><p>Saves your work locally and syncs when signal comes back. Works on the train, in the lift, on the Tube.</p></div><span style="font-size:12px;color:var(--muted);">03 — Reliability</span></div>
      <div class="cap-card"><div><div class="glyph">!</div><h3>Notifications &amp; links</h3><p>Targeted push messages and clever links that open the right screen. Respectful by default.</p></div><span style="font-size:12px;color:var(--muted);">04 — Engagement</span></div>
      <div class="cap-card"><div><div class="glyph">↗</div><h3>Releases &amp; updates</h3><p>App Store and Play Store releases, crash reports and instant fixes when something slips through.</p></div><span style="font-size:12px;color:var(--muted);">05 — Ship</span></div>
      <div class="cap-card"><div><div class="glyph">∿</div><h3>Smooth &amp; tactile</h3><p>Buttery animations, gesture‑driven screens and tiny vibrations that make the app feel alive.</p></div><span style="font-size:12px;color:var(--muted);">06 — Feel</span></div>
    </div>
  </section>

  <section class="plat container reveal">
    <div class="section-eyebrow"><span class="dot"></span> Platforms</div>
    <h2 style="margin-top: 14px;">iPhone, Android, or both at once.</h2>
    <div class="plat__row">
      <div class="plat__card plat__card--ios">
        <div class="head">iPhone &amp; iPad</div>
        <h3>Native iOS</h3>
        <p>For apps where every tap needs to feel just right. Best when widgets, watch apps and the wider Apple world matter.</p>
      </div>
      <div class="plat__card plat__card--and">
        <div class="head">Android</div>
        <h3>Native Android</h3>
        <p>Modern Android done properly. Great if your audience is Android‑first or you need to support a wide range of devices.</p>
      </div>
      <div class="plat__card plat__card--rn">
        <div class="head">Both at once</div>
        <h3>Cross‑platform</h3>
        <p>One codebase, both stores, faster updates. We pick the right approach to match your team and how native you need it to feel.</p>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="pager reveal">
      <a href="web.php">← Websites</a>
      <a href="ai.php">Next: Smart tools →</a>
    </div>
  </div>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
  <script>
    /* Subtle phone parallax on mouse move */
    (() => {
      const phones = document.querySelectorAll(".phone");
      if (!phones.length) return;
      const stage = document.querySelector(".stage");
      stage.addEventListener("mousemove", (e) => {
        const rect = stage.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width - 0.5;
        const y = (e.clientY - rect.top) / rect.height - 0.5;
        phones.forEach((p, i) => {
          const factor = i === 0 ? 8 : -6;
          p.style.translate = `${x * factor}px ${y * factor}px`;
        });
      });
      stage.addEventListener("mouseleave", () => {
        phones.forEach((p) => p.style.translate = "0 0");
      });
    })();
  </script>
</body>
</html>
