<?php
/**
 * Shared site footer.
 * Use: <?php include __DIR__ . '/footer.php'; ?>
 *      <?php include __DIR__ . '/../footer.php'; ?>
 */
?>
<footer class="footer">
  <div class="container footer__grid">
    <div>
      <div class="nav__brand"><span class="logo"></span> Cybespoke</div>
      <p style="margin-top: 12px; max-width: 320px;">A bespoke digital studio in Belfast, building web, mobile and AI products with care.</p>
      <p style="margin-top: 10px; font-size: 13px; color: var(--muted);">Hours: 09:00 – 17:00, Mon – Fri (UK time)</p>
    </div>
    <div>
      <h4>Services</h4>
      <ul>
        <li><a href="/services/web.php">Web applications</a></li>
        <li><a href="/services/mobile.php">Mobile apps</a></li>
        <li><a href="/services/ecommerce.php">E‑commerce</a></li>
        <li><a href="/services/crm.php">CRM &amp; internal tools</a></li>
        <li><a href="/services/ai.php">AI &amp; smart tools</a></li>
        <li><a href="/services/workflows.php">Workflow automation</a></li>
        <li><a href="/services/data.php">Data pipelines</a></li>
        <li><a href="/services/bespoke.php">Bespoke</a></li>
        <li><a href="/services/seo.php">SEO &amp; marketing</a></li>
      </ul>
    </div>
    <div>
      <h4>Studio</h4>
      <ul>
        <li><a href="/work.php">Work</a></li>
        <li><a href="/index.php#contact">Contact</a></li>
        <li><a href="/start.php">Start a project</a></li>
      </ul>
    </div>
    <div>
      <h4>Legal</h4>
      <ul>
        <li><a href="/privacy.php">Privacy notice</a></li>
        <li><a href="/cookies.php">Cookie policy</a></li>
        <li><a href="/terms.php">Terms of use</a></li>
        <li><a href="/accessibility.php">Accessibility</a></li>
        <li><button type="button" class="footer__cookie-btn" data-cookie-settings>Cookie settings</button></li>
      </ul>
    </div>
  </div>
  <div class="container footer__bottom">
    <span>© <span data-year><?= date('Y') ?></span> Cybespoke. All rights reserved.</span>
    <span>Crafted in Belfast.</span>
  </div>
</footer>
<?php include __DIR__ . '/components/cookie-consent.php'; ?>
