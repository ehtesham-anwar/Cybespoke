<?php
/**
 * Reviews / testimonials component.
 *
 * Add more reviews by appending to the $reviews array.
 * The component automatically switches to a multi-column grid layout
 * once there's more than one entry.
 */

$reviews = [
    [
        'quote'   => 'Cybespoke rebuilt our booking platform end‑to‑end and we\'ve not had to chase them once. Direct bookings are up 38% and our reception team finally has their evenings back.',
        'role'    => 'Owner',
        'company' => 'France Duerp',
        'rating'  => 5,
    ],
];

$is_solo = count($reviews) === 1;
?>
<section class="reviews container reveal" id="reviews">
  <div class="reviews__head">
    <div>
      <div class="section-eyebrow"><span class="dot"></span> Kind words</div>
      <h2 style="margin-top: 14px;">What clients say about working with us.</h2>
    </div>
  </div>

  <?php if (!$is_solo): ?>
  <div class="reviews__grid">
  <?php endif; ?>

  <?php foreach ($reviews as $review): ?>
    <figure class="review<?= $is_solo ? ' review--solo' : '' ?> reveal" data-spotlight>
      <div class="review__stars" aria-label="<?= (int)$review['rating'] ?> out of 5 stars">
        <?php for ($i = 0; $i < (int)$review['rating']; $i++): ?>
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 7.4H22l-6.3 4.6 2.4 7.4L12 16.8 5.9 21.4l2.4-7.4L2 9.4h7.6z"/></svg>
        <?php endfor; ?>
      </div>
      <blockquote><?= htmlspecialchars($review['quote'], ENT_QUOTES, 'UTF-8') ?></blockquote>
      <figcaption>
        <div>
          <strong><?= htmlspecialchars($review['role']) ?></strong>
          <span><?= htmlspecialchars($review['company']) ?></span>
        </div>
      </figcaption>
    </figure>
  <?php endforeach; ?>

  <?php if (!$is_solo): ?>
  </div>
  <?php endif; ?>
</section>
