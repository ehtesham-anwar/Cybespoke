<?php
$capabilities = [
  ['web.php', 'Web applications', 'Custom platforms, customer portals and admin dashboards that scale with your business.',
    '<rect x="2.5" y="4" width="19" height="13.5" rx="2"/><path d="M2.5 8h19"/><path d="M9 21h6"/><path d="M12 17.5V21"/>'],
  ['mobile.php', 'Mobile apps', 'iPhone and Android apps with sign‑up, payments and notifications — built to be used daily.',
    '<rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 5.5h3"/><circle cx="12" cy="18.5" r="0.8" fill="currentColor"/>'],
  ['ecommerce.php', 'E‑commerce', 'Online shops, marketplaces and checkouts — fast, secure, and tuned to convert.',
    '<path d="M3 4h2l2 12h11l2-9H6"/><circle cx="9" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/>'],
  ['crm.php', 'CRM &amp; internal tools', 'Custom CRMs, ops dashboards and back‑office tools that fit your team\'s actual workflow.',
    '<circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="6.5" r="2.5"/><path d="M21 14c0-2.2-1.8-4-4-4"/>'],
  ['ai.php', 'AI &amp; smart tools', 'Assistants, copilots and data‑aware automations — practical from day one, built for real work.',
    '<path d="M12 3l1.6 4.2L18 8.8l-3.4 2.7L15.4 16 12 13.7 8.6 16l.8-4.5L6 8.8l4.4-1.6L12 3z"/><path d="M19 14.5l.6 1.7 1.7.6-1.7.6L19 19l-.6-1.6-1.7-.6 1.7-.6.6-1.7z"/>'],
  ['workflows.php', 'Workflow automation', 'Stitch together your tools, remove the manual steps and let the business run itself.',
    '<circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 6h10M5 8v8M19 8v8M7 18h10"/>'],
  ['data.php', 'Data pipelines', 'ETL, warehousing and integrations — get the right data to the right place, reliably.',
    '<ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V5"/><path d="M4 11v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-6"/>'],
  ['security.php', 'Server security &amp; management', 'Hardening, managed hosting, monitoring, backups and patching — kept secure, fast and online.',
    '<path d="M12 2.5 4 5.5v6c0 5 3.4 8.8 8 10 4.6-1.2 8-5 8-10v-6l-8-3z"/><path d="m9 12 2 2 4-4"/>'],
  ['bespoke.php', 'Bespoke builds', 'The work that doesn\'t fit a template — in‑store screens, kiosks, connected devices, and everything in between.',
    '<path d="M14.5 4.5a4 4 0 0 0-5.4 5.2L4 14.9a1.7 1.7 0 1 0 2.4 2.4l5.3-5.2a4 4 0 0 0 5.2-5.4l-2.6 2.6-2-2 2.2-2.8z"/>'],
];
?>
  <!-- WHAT WE DO -->
  <section class="section" id="services">
    <div class="wrap">
      <header class="section__head reveal">
        <p class="eyebrow">What we do</p>
        <h2>From a one‑page site to a full platform.</h2>
        <p>We build the digital tools your business runs on. Pick a capability to see how we approach it, what you get, and how we work — first call to launch.</p>
      </header>

      <div class="cards">
        <?php foreach ($capabilities as [$href, $title, $text, $icon]): ?>
          <a href="services/<?= $href ?>" class="card reveal">
            <span class="card__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?= $icon ?></svg>
            </span>
            <h3><?= $title ?></h3>
            <p><?= $text ?></p>
            <span class="card__more">Learn more <span aria-hidden="true">→</span></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
