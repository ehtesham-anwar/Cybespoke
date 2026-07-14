/* ============================================================
 * Cybespoke — homepage-specific scripts
 * (extracted from index.php inline <script> block)
 * ============================================================ */

// ===== Process timeline — animated connecting line & dot activation =====
(() => {
  const list = document.querySelector("[data-process-timeline]");
  if (!list) return;

  const phases = Array.from(list.querySelectorAll("[data-phase]"));
  if (!phases.length) return;

  const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (reduce) {
    list.style.setProperty("--progress", 1);
    phases.forEach((p) => p.classList.add("is-active"));
    return;
  }

  let ticking = false;

  // Progress reaches 1 when the bottom of the list is at the viewport's
  // anchor line (60% down the viewport). Starts at 0 when the top of the
  // list crosses that same anchor.
  const ANCHOR = 0.6;

  const update = () => {
    ticking = false;

    const rect = list.getBoundingClientRect();
    const anchorY = window.innerHeight * ANCHOR;

    // Map "list top hits anchor" to 0, "list bottom hits anchor" to 1.
    const start = rect.top;
    const end = rect.bottom;
    const total = end - start;
    if (total <= 0) return;

    const raw = (anchorY - start) / total;
    const progress = Math.max(0, Math.min(1, raw));
    list.style.setProperty("--progress", progress.toFixed(4));

    // A phase is "active" once the moving fill-head has reached its dot.
    const fillY = start + total * progress;
    for (const phase of phases) {
      const marker = phase.querySelector(".phase__marker");
      if (!marker) continue;
      const mRect = marker.getBoundingClientRect();
      const dotCentreY = mRect.top + mRect.height / 2;
      const active = dotCentreY <= fillY + 2;
      phase.classList.toggle("is-active", active);
    }
  };

  const onScroll = () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(update);
  };

  window.addEventListener("scroll", onScroll, { passive: true });
  window.addEventListener("resize", onScroll, { passive: true });
  // Run once on load to set initial state.
  requestAnimationFrame(update);
})();
