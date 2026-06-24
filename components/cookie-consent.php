<?php
/**
 * Cookie consent banner.
 * Server-rendered markup; behaviour lives in assets/js/global.js (cookieConsent()),
 * styling in assets/css/global.css. Included site-wide via footer.php.
 *
 * The banner stays hidden (and inert) until JS decides whether consent is needed,
 * so visitors who have already chosen never see a flash of it.
 */
?>
<div class="cookie-consent" id="cookie-consent" role="dialog" aria-modal="false"
     aria-labelledby="cookie-consent-title" aria-describedby="cookie-consent-desc" hidden>
  <div class="cookie-consent__card">
    <div class="cookie-consent__head">
      <span class="cookie-consent__icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 2.5a9.5 9.5 0 1 0 9.5 9.5 4 4 0 0 1-4.2-4.6A4 4 0 0 1 12 2.5z"/>
          <circle cx="9" cy="10" r="0.9" fill="currentColor" stroke="none"/>
          <circle cx="14.5" cy="13.5" r="0.9" fill="currentColor" stroke="none"/>
          <circle cx="10" cy="15.5" r="0.7" fill="currentColor" stroke="none"/>
        </svg>
      </span>
      <h2 id="cookie-consent-title">Cookies on Cybespoke</h2>
    </div>

    <p id="cookie-consent-desc" class="cookie-consent__text">
      We use strictly necessary cookies to make this site work and, only with your consent,
      privacy‑friendly analytics to help us improve it. We never use advertising or tracking cookies.
      See our <a href="/cookies.php">Cookie policy</a>.
    </p>

    <div class="cookie-consent__prefs" hidden>
      <div class="cookie-consent__option is-locked">
        <span class="cookie-consent__option-text">
          <strong>Strictly necessary</strong>
          <span>Required for the site to function. Always on.</span>
        </span>
        <label class="cc-switch" aria-hidden="true">
          <input type="checkbox" checked disabled>
          <span class="cc-switch__track"><span class="cc-switch__thumb"></span></span>
        </label>
      </div>
      <div class="cookie-consent__option">
        <span class="cookie-consent__option-text">
          <strong>Analytics</strong>
          <span>Anonymous, aggregated usage stats. No cross‑site tracking.</span>
        </span>
        <label class="cc-switch">
          <span class="cc-switch__sr">Allow analytics cookies</span>
          <input type="checkbox" data-cookie-category="analytics">
          <span class="cc-switch__track"><span class="cc-switch__thumb"></span></span>
        </label>
      </div>
    </div>

    <div class="cookie-consent__actions">
      <button type="button" class="btn btn--ghost cookie-consent__btn" data-cookie-action="reject">Reject non‑essential</button>
      <button type="button" class="btn btn--ghost cookie-consent__btn" data-cookie-action="manage">Manage preferences</button>
      <button type="button" class="btn btn--primary cookie-consent__btn" data-cookie-action="accept">Accept all</button>
      <button type="button" class="btn btn--primary cookie-consent__btn cookie-consent__save" data-cookie-action="save" hidden>Save preferences</button>
    </div>
  </div>
</div>
