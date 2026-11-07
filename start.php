<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script>(function(){try{var t=localStorage.getItem("cybespoke-theme");document.documentElement.setAttribute("data-theme",t==="dark"?"dark":"light");}catch(e){document.documentElement.setAttribute("data-theme","light");}})();</script>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact us — Cybespoke Belfast</title>
  <meta name="description" content="Drop us a line — name, email, a few notes about your idea. Cybespoke will respond within one working day." />
  <link rel="canonical" href="https://cybespoke.co.uk/start.php" />

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Cybespoke" />
  <meta property="og:locale" content="en_GB" />
  <meta property="og:url" content="https://cybespoke.co.uk/start.php" />
  <meta property="og:title" content="Contact us — Cybespoke Belfast" />
  <meta property="og:description" content="Drop us a line. We respond within one working day with honest first thoughts and a clear next step." />
  <meta property="og:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Contact us — Cybespoke Belfast" />
  <meta name="twitter:description" content="Drop us a line. We respond within one working day with honest first thoughts and a clear next step." />
  <meta name="twitter:image" content="https://cybespoke.co.uk/assets/og-banner.svg" />

  <link rel="icon" type="image/png" sizes="32x32" href="/files/cybespoke-mark_square_32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/files/cybespoke-mark_square_180.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/site.css?v=<?= filemtime(__DIR__ . '/assets/css/site.css') ?>" />
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>

  <div class="q-page__bg"></div>

  <main class="q-page">
    <div class="q-shell container">
      <div class="q-intro">
        <div class="q-eyebrow"><span class="dot"></span> Contact us</div>
        <h1>Tell us about your <span class="grad">idea</span>.</h1>
        <p>Three quick fields. We'll respond within one working day with honest first thoughts and a clear next step.</p>
      </div>

      <form class="q-card" id="contact-form" novalidate>
        <div class="q-step is-active">
          <div class="q-fields">
            <div class="q-field">
              <label for="c-name">Your name</label>
              <input id="c-name" name="name" type="text" autocomplete="name" required placeholder="Jane Smith" />
            </div>
            <div class="q-field">
              <label for="c-email">Email address</label>
              <input id="c-email" name="email" type="email" autocomplete="email" required placeholder="jane@acme.co.uk" />
            </div>
            <div class="q-field">
              <label for="c-notes">Notes</label>
              <textarea id="c-notes" name="notes" required placeholder="A few lines about your idea — what you're trying to build, who it's for, what's on your mind."></textarea>
            </div>
          </div>

          <div class="q-controls" style="justify-content: flex-end;">
            <button type="submit" class="q-btn q-btn--primary" data-send>Send message →</button>
          </div>
        </div>

        <div class="q-step" data-done>
          <div class="q-success">
            <div class="check">✓</div>
            <h2 class="q-step__title" style="margin-top: 0;">Thank you — your message is on its way.</h2>
            <p class="q-step__hint" style="max-width: 480px; margin: 14px auto 0;">We'll get back to you within one working day. If anything is missing, write to <a href="mailto:hello@cybespoke.co.uk" style="color: var(--text); border-bottom: 1px solid var(--line-strong);">hello@cybespoke.co.uk</a>.</p>
          </div>
        </div>
      </form>

      <p style="text-align: center; margin-top: 28px; font-size: 13px; color: var(--muted);">
        Prefer email? Write to <a href="mailto:hello@cybespoke.co.uk" style="color: var(--text); border-bottom: 1px solid var(--line-strong);">hello@cybespoke.co.uk</a> directly.
      </p>
    </div>
  </main>

  <?php include __DIR__ . '/footer.php'; ?>

  <script src="assets/js/global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    emailjs.init({ publicKey: 'mefPyTyqE4ACTip7a' });
  </script>
  <script>
    (function () {
      const EMAILJS_SERVICE_ID = 'service_84hxsyw';
      const EMAILJS_TEMPLATE_ID = 'template_bop51kk';

      const form = document.getElementById('contact-form');
      if (!form) return;

      const nameEl  = form.querySelector('#c-name');
      const emailEl = form.querySelector('#c-email');
      const notesEl = form.querySelector('#c-notes');
      const sendBtn = form.querySelector('[data-send]');
      const formStep = form.querySelector('.q-step.is-active');
      const doneStep = form.querySelector('[data-done]');

      const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      function valid() {
        return Boolean(nameEl.value.trim()) &&
               emailRe.test(emailEl.value.trim()) &&
               Boolean(notesEl.value.trim());
      }

      function updateBtn() {
        sendBtn.disabled = !valid();
      }
      ['input', 'blur'].forEach((ev) => {
        form.addEventListener(ev, updateBtn, true);
      });
      updateBtn();

      function buildTemplateParams() {
        const name = nameEl.value.trim();
        const email = emailEl.value.trim();
        const notes = notesEl.value.trim();
        return {
          subject: 'New enquiry — ' + name,
          message: 'A new enquiry via the Cybespoke contact form.\n\n' +
                   'Name: ' + name + '\n' +
                   'Email: ' + email + '\n\n' +
                   'Notes:\n' + notes,
          name: name,
          email: email,
          notes: notes,
          from_name: name,
          from_email: email,
          reply_to: email
        };
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (!valid()) return;
        const originalText = sendBtn.textContent;
        sendBtn.disabled = true;
        sendBtn.textContent = 'Sending…';
        emailjs
          .send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, buildTemplateParams())
          .then(function () {
            formStep.classList.remove('is-active');
            doneStep.classList.add('is-active');
          })
          .catch(function (err) {
            console.error('EmailJS send failed', err);
            sendBtn.textContent = originalText;
            sendBtn.disabled = false;
            alert('Sorry — we could not send your message. Please try again, or email hello@cybespoke.co.uk directly.');
          });
      });
    })();
  </script>
</body>
</html>
