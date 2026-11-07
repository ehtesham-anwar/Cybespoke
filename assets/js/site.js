/* Cybespoke — mobile menu for the redesigned pages.
 * Runs after global.js, which has already wrapped the CTA + theme toggle in .nav__right. */
(() => {
  const nav = document.querySelector(".nav");
  const links = nav && nav.querySelector(".nav__links");
  if (!nav || !links) return;

  // "Start a project" inside the mobile menu (the header CTA is hidden on small screens).
  const cta = document.createElement("a");
  cta.href = "/start.php";
  cta.className = "button button--primary nav__mobile-cta";
  cta.textContent = "Start a project →";
  links.appendChild(cta);

  const btn = document.createElement("button");
  btn.type = "button";
  btn.className = "nav__menu";
  btn.setAttribute("aria-label", "Open menu");
  btn.setAttribute("aria-expanded", "false");
  btn.innerHTML =
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>';
  (nav.querySelector(".nav__right") || nav).appendChild(btn);

  const setOpen = (open) => {
    nav.classList.toggle("is-open", open);
    document.body.classList.toggle("menu-open", open);
    btn.setAttribute("aria-expanded", String(open));
    btn.setAttribute("aria-label", open ? "Close menu" : "Open menu");
  };

  btn.addEventListener("click", () => setOpen(!nav.classList.contains("is-open")));
  links.addEventListener("click", (e) => { if (e.target.closest("a")) setOpen(false); });
  document.addEventListener("keydown", (e) => { if (e.key === "Escape") setOpen(false); });
  window.addEventListener("resize", () => { if (window.innerWidth > 900) setOpen(false); });
})();
