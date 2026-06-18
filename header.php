<?php
/**
 * Shared site header / navigation.
 * Use:
 *   <?php $active = 'home'; include __DIR__ . '/header.php'; ?>
 *   <?php $active = 'work'; include __DIR__ . '/../header.php'; ?>
 *
 * Optional $active values: home, services, work, contact.
 * For dropdown items, set $sub (one of: web, mobile, ecommerce, crm, ai, workflows, data, bespoke, seo).
 */
$active = $active ?? '';
$sub    = $sub ?? '';
?>
<header class="nav">
  <a href="/index.php" class="nav__brand"><span class="logo"></span> Cybespoke</a>
  <nav class="nav__links" aria-label="Primary">
    <a href="/index.php"<?= $active === 'home' ? ' class="active"' : '' ?>>Home</a>
    <div class="nav__group<?= $active === 'services' ? ' is-active' : '' ?>">
      <button type="button" class="nav__trigger" aria-haspopup="true" aria-expanded="false">Services <span class="nav__caret" aria-hidden="true"></span></button>
      <div class="nav__mega" role="menu">
        <a href="/services/web.php" class="m--web<?= $sub === 'web' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="4" width="19" height="13.5" rx="2"/><path d="M2.5 8h19"/><circle cx="5.5" cy="6" r="0.6" fill="currentColor"/><circle cx="7.6" cy="6" r="0.6" fill="currentColor"/><path d="M9 21h6"/><path d="M12 17.5V21"/></svg></span>
          <span><strong>Web applications</strong><span class="desc">Marketing sites, dashboards, shops</span></span>
        </a>
        <a href="/services/mobile.php" class="m--mob<?= $sub === 'mobile' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 5.5h3"/><circle cx="12" cy="18.5" r="0.7" fill="currentColor"/></svg></span>
          <span><strong>Mobile apps</strong><span class="desc">iPhone &amp; Android, end‑to‑end</span></span>
        </a>
        <a href="/services/ecommerce.php" class="m--web<?= $sub === 'ecommerce' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 4h2l2 12h11l2-9H6"/><circle cx="9" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/></svg></span>
          <span><strong>E‑commerce</strong><span class="desc">Online shops &amp; checkouts</span></span>
        </a>
        <a href="/services/crm.php" class="m--bes<?= $sub === 'crm' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="8" r="3.5"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><circle cx="17" cy="6.5" r="2.5"/><path d="M21 14c0-2.2-1.8-4-4-4"/></svg></span>
          <span><strong>CRM &amp; internal tools</strong><span class="desc">Built around your workflow</span></span>
        </a>
        <a href="/services/ai.php" class="m--ai<?= $sub === 'ai' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l1.6 4.2L18 8.8l-3.4 2.7L15.4 16 12 13.7 8.6 16l.8-4.5L6 8.8l4.4-1.6L12 3z"/></svg></span>
          <span><strong>AI &amp; smart tools</strong><span class="desc">Assistants &amp; automations</span></span>
        </a>
        <a href="/services/workflows.php" class="m--bes<?= $sub === 'workflows' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 6h10M5 8v8M19 8v8M7 18h10"/></svg></span>
          <span><strong>Workflow automation</strong><span class="desc">Stitch your tools together</span></span>
        </a>
        <a href="/services/data.php" class="m--mob<?= $sub === 'data' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="12" cy="5" rx="8" ry="2.5"/><path d="M4 5v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5V5"/><path d="M4 11v6c0 1.4 3.6 2.5 8 2.5s8-1.1 8-2.5v-6"/></svg></span>
          <span><strong>Data pipelines</strong><span class="desc">ETL, warehousing, integrations</span></span>
        </a>
        <a href="/services/bespoke.php" class="m--bes<?= $sub === 'bespoke' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 4.5a4 4 0 0 0-5.4 5.2L4 14.9a1.7 1.7 0 1 0 2.4 2.4l5.3-5.2a4 4 0 0 0 5.2-5.4l-2.6 2.6-2-2 2.2-2.8z"/></svg></span>
          <span><strong>Bespoke</strong><span class="desc">One‑off builds &amp; integrations</span></span>
        </a>
        <a href="/services/seo.php" class="m--seo<?= $sub === 'seo' ? ' active' : '' ?>" role="menuitem">
          <span class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="3 17 9.5 10.5 13.5 14.5 21 7"/><polyline points="15 7 21 7 21 13"/></svg></span>
          <span><strong>SEO &amp; marketing</strong><span class="desc">Get found, get clicks, grow</span></span>
        </a>
      </div>
    </div>
    <a href="/work.php"<?= $active === 'work' ? ' class="active"' : '' ?>>Work</a>
    <a href="/index.php#contact"<?= $active === 'contact' ? ' class="active"' : '' ?>>Contact</a>
  </nav>
  <a href="/start.php" class="nav__cta">Start a project</a>
</header>
