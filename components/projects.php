<?php
/**
 * Projects / case-studies component.
 *
 * Add more projects by appending to the $projects array. Each project's
 * `device` is the key of a CSS mockup template (browser, phone, chat, dash).
 */

$projects = [
    [
        'slug'    => 'a',
        'tags'    => ['web', 'ai'],
        'tag'     => 'Web application · AI · Stripe',
        'title'   => 'AI document & payment platform for France Duerp',
        'client'  => 'France Duerp · franceduerp.fr · 2025',
        'desc'    => 'Clients fill in a short form, AI assembles the right document, then they pay on the spot via Stripe Checkout — signed PDFs, automatic receipts, all in one seamless flow.',
        'metrics' => [
            ['v' => '4.2k+', 'l' => 'documents generated'],
            ['v' => '< 60s', 'l' => 'data to paid PDF'],
            ['v' => 'Stripe', 'l' => 'checkout integrated'],
        ],
        'device'  => 'iframe',
        'iframe'  => 'https://www.franceduerp.fr/',
    ],
];

$is_solo = count($projects) === 1;
?>
<div class="projects<?= $is_solo ? ' projects--solo' : '' ?>">
  <?php foreach ($projects as $p):
    $is_iframe   = ($p['device'] === 'iframe' && !empty($p['iframe']));
    $card_href   = $is_iframe ? $p['iframe'] : ($p['href'] ?? null);
    $tag_name    = $card_href ? 'a' : 'article';
    $card_attrs  = '';
    if ($card_href) {
        $card_attrs = ' href="' . htmlspecialchars($card_href) . '"'
                    . ' target="_blank" rel="noopener noreferrer"';
    }
  ?>
    <<?= $tag_name ?> class="project project--<?= htmlspecialchars($p['slug']) ?> reveal<?= $is_iframe ? ' project--live' : '' ?>" data-tags="<?= htmlspecialchars(implode(' ', $p['tags'])) ?>" data-spotlight<?= $card_attrs ?>>
      <?php if ($is_iframe): ?>
        <!-- Live preview of the actual site, filling the card background.
             pointer-events: none so the whole card stays clickable. -->
        <iframe
          src="<?= htmlspecialchars($p['iframe']) ?>"
          class="project__live"
          loading="lazy"
          referrerpolicy="no-referrer"
          sandbox="allow-scripts allow-same-origin allow-forms"
          title="<?= htmlspecialchars($p['title']) ?> — live preview"
          aria-hidden="true"
          tabindex="-1"
        ></iframe>
        <span class="project__visit" aria-hidden="true">
          Visit live site
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7"/><polyline points="7 7 17 7 17 17"/></svg>
        </span>
      <?php else: ?>
        <div class="project__bg"></div>
        <div class="project__device" aria-hidden="true">
          <?php if ($p['device'] === 'browser'): ?>
            <div class="mockup-browser">
              <div class="mockup-browser__bar"><i></i><i></i><i></i></div>
              <div class="mockup-browser__body">
                <div class="mockup-line w-50 accent"></div>
                <div class="mockup-line w-70"></div>
                <div class="mockup-line w-30"></div>
                <div class="mockup-row">
                  <div class="mockup-tile"></div><div class="mockup-tile"></div><div class="mockup-tile"></div>
                </div>
              </div>
            </div>
          <?php elseif ($p['device'] === 'phone'): ?>
            <div class="mockup-phone">
              <div class="mockup-phone__screen">
                <div class="mockup-phone__hello">GOOD MORNING</div>
                <div class="mockup-phone__feed">
                  <div class="mockup-phone__row"></div>
                  <div class="mockup-phone__row"></div>
                  <div class="mockup-phone__row"></div>
                </div>
                <div class="mockup-phone__tabs"><i class="active"></i><i></i><i></i><i></i></div>
              </div>
            </div>
          <?php elseif ($p['device'] === 'chat'): ?>
            <div class="mockup-chat">
              <div class="mockup-bubble in">how do I refund order #4821?</div>
              <div class="mockup-bubble out">Refunded £42.50 to •••• 4242. Anything else?</div>
              <div class="mockup-bubble in">thanks ✓</div>
            </div>
          <?php elseif ($p['device'] === 'dash'): ?>
            <div class="mockup-dash">
              <div class="mockup-dash__top">
                <div class="mockup-dash__pill"></div>
                <div class="mockup-dash__num">+12.4%</div>
              </div>
              <div class="mockup-dash__chart"></div>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="project__overlay">
        <span class="project__tag"><i></i><?= htmlspecialchars($p['tag']) ?></span>
        <h2 class="project__title"><?= htmlspecialchars($p['title']) ?></h2>
        <div class="project__client"><?= htmlspecialchars($p['client']) ?></div>
        <p class="project__desc"><?= htmlspecialchars($p['desc']) ?></p>
        <div class="project__metrics">
          <?php foreach ($p['metrics'] as $m): ?>
            <div class="project__metric"><strong><?= htmlspecialchars($m['v']) ?></strong><span><?= htmlspecialchars($m['l']) ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </<?= $tag_name ?>>
  <?php endforeach; ?>
</div>
