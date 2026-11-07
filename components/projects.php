<?php
/**
 * Projects / case-studies component.
 *
 * Add more projects by appending to the $projects array. Set `device` to
 * 'iframe' (with an `iframe` URL) to show a live preview of the site; other
 * projects show text only (optionally linked via `href`). Styles live in work.php.
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
    <<?= $tag_name ?> class="card project project--<?= htmlspecialchars($p['slug']) ?> reveal<?= $is_iframe ? ' project--live' : ' card--static' ?>" data-tags="<?= htmlspecialchars(implode(' ', $p['tags'])) ?>"<?= $card_attrs ?>>
      <?php if ($is_iframe): ?>
        <div class="project__preview">
          <!-- Live preview of the actual site. pointer-events: none so the whole card stays clickable. -->
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
        </div>
      <?php endif; ?>
      <div class="project__body">
        <p class="eyebrow"><?= htmlspecialchars($p['tag']) ?></p>
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
