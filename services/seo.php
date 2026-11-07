<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SEO &amp; marketing — Cybespoke Belfast</title>
  <meta name="description" content="SEO and digital marketing in Belfast — search rankings, content, paid ads and weekly reports. Plain English, no jargon, no agency markup. By Cybespoke." />
  <meta name="keywords" content="SEO Belfast, digital marketing Belfast, Google Ads Belfast, Meta Ads Belfast, local SEO Northern Ireland, content marketing, SEO agency UK" />
  <link rel="canonical" href="https://cybespoke.co.uk/services/seo.php" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/services/seo.php" />
  <meta property="og:title" content="SEO &amp; marketing — Cybespoke Belfast" />
  <meta property="og:description" content="SEO, content, paid ads and weekly reports — plain English, no agency markup." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="SEO &amp; marketing — Cybespoke Belfast" />
  <meta name="twitter:description" content="SEO, content, paid ads and weekly reports — plain English, no agency markup." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/site.css?v=<?= filemtime(__DIR__ . '/../assets/css/site.css') ?>" />
  <style>
    .serp-url { font-size: 13px; color: var(--accent); }
    .step h3 + p { margin-top: 4px; }
    .serp-rank { display: inline-block; margin-top: 8px !important; padding: 3px 10px; border-radius: 999px; font-size: 12.5px !important; font-weight: 600; background: var(--accent-soft); color: var(--accent) !important; }
    .seo-chart { margin-top: 12px; padding-top: 18px; border-top: 1px solid var(--line); color: var(--accent); }
    .seo-chart__head { display: flex; justify-content: space-between; gap: 12px; margin-bottom: 10px; font-size: 13px; color: var(--muted); }
    .seo-chart__head strong { color: var(--accent); }
    .seo-chart svg { width: 100%; height: 72px; }
    .tier > p:not(.card__num) { flex: none; }
    .tier__price { margin-top: 12px; font-size: 36px; font-weight: 700; letter-spacing: -0.03em; }
    .tier__price small { font-size: 14px; font-weight: 400; color: var(--muted); letter-spacing: 0; }
    .tier .checklist { flex: 1; margin: 20px 0 24px; font-size: 14.5px; }
    .tier .checklist li { padding: 10px 0; }
    .tier--featured, .tier--featured:hover { border-color: var(--accent); box-shadow: var(--shadow); }
    .faq details p a { color: var(--accent); text-decoration: underline; text-underline-offset: 3px; }
  </style>
</head>
<body>
  <?php $active = 'services'; $sub = 'seo'; include __DIR__ . '/../header.php'; ?>

  <main>
    <section class="hero page-hero">
      <div class="wrap hero__inner">
        <div class="hero__copy">
          <p class="eyebrow">SEO &amp; marketing</p>
          <h1>Get found on Google. <span class="accent">Get the click. Grow.</span></h1>
          <p class="hero__lede">A beautiful website is only half the job. We help you climb search results, write words that convert, and run paid ads on Google and Meta — all in plain English, with weekly reports you'll actually read.</p>
          <div class="hero__actions">
            <a class="button button--primary" href="../index.php#contact">Get a free SEO audit <span aria-hidden="true">→</span></a>
            <a class="button button--secondary" href="#capabilities">What we do</a>
          </div>
        </div>
        <div class="hero__card reveal">
          <p class="hero__card-title">your business in Belfast</p>
          <ol class="steps">
            <li class="step"><span class="step__num">1</span><div><p class="serp-url">cybespoke.co.uk</p><h3>Your business — top of Google</h3><p>Where good SEO gets you. We help Belfast businesses climb the rankings with technical SEO, content and clean site structure.</p><p class="serp-rank">▲ Up from #14 in 6 months</p></div></li>
            <li class="step"><span class="step__num">2</span><div><p class="serp-url">competitor‑a.com</p><h3>Competitor A</h3><p>A website that hasn't had a tune‑up in three years. Slow, hard to read, missing the basics.</p></div></li>
            <li class="step"><span class="step__num">3</span><div><p class="serp-url">competitor‑b.co.uk</p><h3>Competitor B</h3><p>Stuck on page two — for the same reason most are: nobody's done the unsexy work.</p></div></li>
          </ol>
          <div class="seo-chart">
            <div class="seo-chart__head"><span>Organic traffic · last 6 months</span><strong>+312%</strong></div>
            <svg viewBox="0 0 400 80" preserveAspectRatio="none" aria-hidden="true">
              <path d="M 0 70 Q 50 65, 80 60 T 160 50 T 240 38 T 320 22 T 400 8 L 400 80 L 0 80 Z" fill="currentColor" opacity="0.12"/>
              <path d="M 0 70 Q 50 65, 80 60 T 160 50 T 240 38 T 320 22 T 400 8" fill="none" stroke="currentColor" stroke-width="2" vector-effect="non-scaling-stroke"/>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="capabilities">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">What we do</p>
          <h2>Everything between &ldquo;invisible&rdquo; and &ldquo;top of page one&rdquo;.</h2>
        </header>
        <div class="cards">
          <div class="card card--static reveal"><p class="card__num">01</p><h3>SEO audit</h3><p>A clear, plain‑English report on what's holding your site back — speed, structure, content, links — and exactly what we'd do about it.</p></div>
          <div class="card card--static reveal"><p class="card__num">02</p><h3>On‑page SEO</h3><p>Page titles, headings, meta descriptions, structured data, image alt text. The basics, done properly, on every page.</p></div>
          <div class="card card--static reveal"><p class="card__num">03</p><h3>Local SEO</h3><p>Google Business Profile, local citations and reviews — so people nearby find you first when they search.</p></div>
          <div class="card card--static reveal"><p class="card__num">04</p><h3>Technical SEO</h3><p>Site speed, mobile‑friendliness, crawlability, sitemaps and broken links — the engineering side, sorted.</p></div>
          <div class="card card--static reveal"><p class="card__num">05</p><h3>Content &amp; copy</h3><p>Landing pages, service pages and blog posts written to rank — and to actually convince a real human reader.</p></div>
          <div class="card card--static reveal"><p class="card__num">06</p><h3>Keyword research</h3><p>The words your customers are typing into Google — not the ones we'd guess. Mapped to pages on your site.</p></div>
          <div class="card card--static reveal"><p class="card__num">07</p><h3>Google &amp; Meta ads</h3><p>Paid campaigns set up and managed — search ads, retargeting, lookalike audiences. No agency markup.</p></div>
          <div class="card card--static reveal"><p class="card__num">08</p><h3>Analytics &amp; reports</h3><p>Privacy‑friendly tracking, conversion goals, and a weekly email with the numbers that matter — no PDF nobody reads.</p></div>
          <div class="card card--static reveal"><p class="card__num">09</p><h3>Conversion fixes</h3><p>More visitors is half the win. We also fix the bits of your site that lose them — slow forms, weak headlines, hidden pricing.</p></div>
        </div>
      </div>
    </section>

    <section class="section section--soft" id="process">
      <div class="wrap split">
        <header class="reveal">
          <p class="eyebrow">How it works</p>
          <h2>Four steps. No jargon. No long contracts.</h2>
        </header>
        <ol class="phases">
          <li class="phase reveal"><span class="phase__num">01</span><div class="phase__body"><h3>Free audit</h3><p>You send us your site. We send back a written audit and a clear price — usually within 3 working days.</p></div></li>
          <li class="phase reveal"><span class="phase__num">02</span><div class="phase__body"><h3>Quick wins first</h3><p>Month one is for fixes that move the needle straight away — speed, titles, broken links, Google Business Profile.</p></div></li>
          <li class="phase reveal"><span class="phase__num">03</span><div class="phase__body"><h3>Steady gains</h3><p>Months two onwards we add content, build local presence, and tune ads — measuring everything as we go.</p></div></li>
          <li class="phase reveal"><span class="phase__num">04</span><div class="phase__body"><h3>Weekly reports</h3><p>A short email every Monday with the numbers that moved, what we did, and what's next. No surprises.</p></div></li>
        </ol>
      </div>
    </section>

    <section class="section" id="pricing">
      <div class="wrap">
        <header class="section__head reveal">
          <p class="eyebrow">Pricing</p>
          <h2>Honest monthly pricing. Cancel anytime.</h2>
          <p>Everything below is a starting point — we'll build a plan that actually fits your business.</p>
        </header>
        <div class="cards">
          <div class="card card--static tier reveal">
            <p class="card__num">Starter</p>
            <h3>Local SEO</h3>
            <div class="tier__price">£450<small> /month</small></div>
            <p>For small businesses in Belfast and Northern Ireland who want to be found locally.</p>
            <ul class="checklist">
              <li>SEO audit &amp; quick‑win fixes</li>
              <li>Google Business Profile setup</li>
              <li>On‑page SEO for 5 key pages</li>
              <li>Local citations &amp; review prompts</li>
              <li>Monthly report</li>
            </ul>
            <a href="../index.php#contact" class="button button--secondary">Start with Local <span aria-hidden="true">→</span></a>
          </div>
          <div class="card card--static tier tier--featured reveal">
            <p class="card__num">Most popular</p>
            <h3>Growth</h3>
            <div class="tier__price">£950<small> /month</small></div>
            <p>For businesses ready to climb national rankings, publish content and run paid ads alongside.</p>
            <ul class="checklist">
              <li>Everything in Local</li>
              <li>Keyword research &amp; content plan</li>
              <li>2 SEO articles per month</li>
              <li>Google Ads management (£500 budget incl.)</li>
              <li>Conversion tracking &amp; weekly reports</li>
            </ul>
            <a href="../index.php#contact" class="button button--primary">Choose Growth <span aria-hidden="true">→</span></a>
          </div>
          <div class="card card--static tier reveal">
            <p class="card__num">Bespoke</p>
            <h3>Scale</h3>
            <div class="tier__price">From £2k<small> /month</small></div>
            <p>For ambitious teams who want SEO, content, ads, CRO and analytics handled end‑to‑end.</p>
            <ul class="checklist">
              <li>Everything in Growth</li>
              <li>4+ articles per month</li>
              <li>Google &amp; Meta ads management</li>
              <li>Conversion rate optimisation</li>
              <li>Direct line to your strategist</li>
            </ul>
            <a href="../index.php#contact" class="button button--secondary">Talk to us <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--soft">
      <div class="wrap split">
        <header class="reveal">
          <p class="eyebrow">Common questions</p>
          <h2>The honest answers people ask us most.</h2>
        </header>
        <div class="faq reveal">
          <details>
            <summary>How long does SEO take to work?</summary>
            <p>You'll see small wins in the first month — speed, titles, Google Business Profile. Real ranking shifts usually take three to six months. Anyone promising "page one in a fortnight" is selling you something else.</p>
          </details>
          <details>
            <summary>Do you tie us into long contracts?</summary>
            <p>No. Everything is month‑to‑month. We'd rather earn next month than lock you in.</p>
          </details>
          <details>
            <summary>Will you write the content for us?</summary>
            <p>Yes. We write SEO articles, landing‑page copy and ad copy in‑house, in plain English, in your tone — not stuffed full of keywords.</p>
          </details>
          <details>
            <summary>What's included in the free audit?</summary>
            <p>A 6 to 10‑page written report covering site speed, on‑page SEO, technical issues, content gaps and your local presence — plus a prioritised list of fixes and a clear price for each plan.</p>
          </details>
          <details>
            <summary>Do we need a new website to work with you?</summary>
            <p>Not always. We start with what you've got. If your current site is fundamentally holding you back, we'll say so — and we can rebuild it (see our <a href="web.php">Websites</a> service).</p>
          </details>
          <details>
            <summary>Will we own everything you do?</summary>
            <p>Yes. All accounts, content, tracking and configuration belong to you. If you ever leave us, you keep everything.</p>
          </details>
        </div>
      </div>
    </section>

    <div class="wrap">
      <nav class="pager" aria-label="More services">
        <a href="../index.php">← Back to home</a>
        <a href="../index.php#contact">Get a free quote →</a>
      </nav>
    </div>

    <?php include __DIR__ . '/../components/contact-cta.php'; ?>
  </main>

  <?php include __DIR__ . '/../footer.php'; ?>

  <script src="../assets/js/global.js"></script>
  <script src="../assets/js/site.js"></script>
</body>
</html>
