<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script>
    (function() {
      try {
        var t = localStorage.getItem("cybespoke-theme");
        document.documentElement.setAttribute("data-theme", t === "dark" ? "dark" : "light");
      } catch (e) {
        document.documentElement.setAttribute("data-theme", "light");
      }
    })();
  </script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cybespoke — Tailor‑made websites, apps & smart tools | Belfast studio</title>
  <meta name="description" content="Cybespoke is a Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams. Fast, friendly, made for your customers." />
  <meta name="keywords" content="web design Belfast, app development Belfast, AI software Belfast, bespoke software, custom websites, mobile apps, SEO Belfast, digital marketing Belfast, Northern Ireland software studio" />
  <meta name="author" content="Cybespoke" />
  <link rel="canonical" href="https://cybespoke.co.uk/" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/" />
  <meta property="og:title" content="Cybespoke — Tailor‑made websites, apps &amp; smart tools" />
  <meta property="og:description" content="A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />
  <meta property="og:image:alt" content="Cybespoke — Belfast software studio" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Cybespoke — Tailor‑made websites, apps &amp; smart tools" />
  <meta name="twitter:description" content="A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <!-- Structured data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Cybespoke",
      "description": "A Belfast studio building tailor‑made websites, apps and AI helpers for ambitious teams.",
      "url": "https://cybespoke.co.uk/",
      "logo": "https://cybespoke.co.uk/assets/favicon.svg",
      "image": "https://cybespoke.co.uk/assets/og-banner.svg",
      "email": "hello@cybespoke.co.uk",
      "areaServed": ["Belfast", "Northern Ireland", "United Kingdom", "Ireland"],
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Belfast",
        "addressCountry": "GB"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "09:00",
        "closes": "17:00"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "email": "hello@cybespoke.co.uk",
        "availableLanguage": ["English"]
      },
      "sameAs": [
        "https://www.linkedin.com/company/cybespoke"
      ],
      "makesOffer": [{
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Website design and development"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Mobile app development"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "AI assistants and automation"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Bespoke software"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "SEO and digital marketing"
          }
        }
      ]
    }
  </script>

  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="page-enter">
  <!-- NAV -->
  <?php $active = 'home';
  include __DIR__ . '/header.php'; ?>

  <!-- HERO -->
  <?php include __DIR__ . '/components/hero.php'; ?>

  <!-- MARQUEE -->

  <!-- CAPABILITIES -->
  <?php include __DIR__ . '/components/capabilities.php'; ?>

  <!-- PROCESS -->
  <?php include __DIR__ . '/components/process.php'; ?>

  <!-- CONTACT-CTA -->
  <?php include __DIR__ . '/components/contact-cta.php'; ?>

  <!-- FOOTER -->
  <?php include __DIR__ . '/footer.php'; ?>

  <script src="assets/js/global.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>