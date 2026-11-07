<?php
$phases = [
  ['Discovery', 'Listening before we sketch a single line.',
    'We sit with you — in person or on a call — and learn the business. Who uses what you build, where the friction lives, what success actually looks like. You leave with a written brief and a fixed‑price proposal.',
    ['Stakeholder interviews', 'Goals &amp; success metrics', 'Scope, timeline &amp; fixed quote']],
  ['Design', 'See the product before a line of code is written.',
    'Wireframes first, then a click‑through prototype your team can actually poke at. We iterate together until you\'re nodding — not just being polite — and only then do we open the editor.',
    ['Wireframes &amp; user flows', 'Interactive Figma prototype', 'Brand &amp; visual system']],
  ['Build', 'Weekly demos on a live staging URL — never a black box.',
    'No "we\'ll show you in three months". Each week you get a working staging link, a short Loom walk‑through and a fresh set of changes to steer. Feedback in, fix out, every Friday.',
    ['Weekly demos &amp; staging access', 'Code review on every change', 'Automated tests &amp; CI from day one']],
  ['Ship', 'We launch when it\'s ready — not on an arbitrary date.',
    'Deployment, domain, certificates, analytics — we handle the lot. We\'re on hand through the first week of real use, watching the logs and fixing anything that wobbles before you have to notice.',
    ['Production deployment &amp; monitoring', 'Documentation &amp; team training', '90‑day post‑launch warranty']],
  ['Care', 'Quietly improving in the background, for a flat monthly fee.',
    'We don\'t disappear after launch. Pick a care plan and we watch the logs, ship updates, patch security and tidy up the corners — so the thing you commissioned keeps getting better, not worse.',
    ['24/7 uptime monitoring &amp; alerts', 'Security patches &amp; dependency updates', 'Monthly progress report, plain English']],
];

$assurances = [
  ['Fixed‑price quotes', 'What we quote is what you pay. No surprise invoices, no scope‑creep upcharges.',
    '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/>'],
  ['90‑day warranty', 'If a defect shows up in the first 90 days, we fix it — no quibbles, no extra invoice.',
    '<polyline points="20 6 9 17 4 12"/>'],
  ['You own the code', 'Source code, designs, accounts and infrastructure — all transferred to you at launch.',
    '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>'],
  ['One‑working‑day reply', 'Slack us, email us, call us — someone gets back within a working day. Often within the hour.',
    '<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>'],
];
?>
  <!-- PROCESS / APPROACH -->
  <section class="section section--soft" id="process">
    <div class="wrap process">
      <header class="process__intro reveal">
        <p class="eyebrow">How we approach it</p>
        <h2>A clear path from first call to long after launch.</h2>
        <p>Every project follows the same five phases — written down, sized up front, and visible to you the whole way through.</p>
        <a href="start.php" class="button button--primary">Start a project <span aria-hidden="true">→</span></a>
      </header>

      <ol class="phases">
        <?php foreach ($phases as $i => [$title, $subline, $text, $points]): ?>
          <li class="phase reveal">
            <span class="phase__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
            <div class="phase__body">
              <h3><?= $title ?></h3>
              <p class="phase__subline"><?= $subline ?></p>
              <p><?= $text ?></p>
              <ul class="tags">
                <?php foreach ($points as $point): ?><li><?= $point ?></li><?php endforeach; ?>
              </ul>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <!-- ASSURANCES -->
  <section class="section">
    <div class="wrap assurances">
      <?php foreach ($assurances as [$title, $text, $icon]): ?>
        <div class="assurance reveal">
          <span class="assurance__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?= $icon ?></svg>
          </span>
          <h3><?= $title ?></h3>
          <p><?= $text ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
