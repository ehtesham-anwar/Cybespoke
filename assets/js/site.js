/* Cybespoke — site behaviour: mobile menu, fade-in on scroll, WhatsApp button, footer year. */
(() => {
  const root = document.documentElement;
  root.classList.remove("no-js");

  // Mobile menu
  const btn = document.querySelector(".menu-btn");
  const setOpen = (open) => {
    root.classList.toggle("menu-open", open);
    if (btn) {
      btn.setAttribute("aria-expanded", String(open));
      btn.textContent = open ? "Close" : "Menu";
    }
  };
  if (btn) {
    btn.addEventListener("click", () => setOpen(!root.classList.contains("menu-open")));
    document.querySelectorAll(".nav a").forEach((a) => a.addEventListener("click", () => setOpen(false)));
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") setOpen(false); });
    window.addEventListener("resize", () => { if (window.innerWidth > 900) setOpen(false); });
  }

  // Fade-in on scroll
  const els = document.querySelectorAll(".reveal");
  if (!("IntersectionObserver" in window)) {
    els.forEach((el) => el.classList.add("is-in"));
  } else {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) { e.target.classList.add("is-in"); io.unobserve(e.target); }
      });
    }, { rootMargin: "0px 0px -8% 0px", threshold: 0.08 });
    els.forEach((el) => io.observe(el));
  }

  // WhatsApp button
  const wa = document.createElement("a");
  wa.className = "wa-fab";
  wa.href = "https://wa.me/447752856649";
  wa.target = "_blank";
  wa.rel = "noopener noreferrer";
  wa.innerHTML =
    '<svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false">' +
        '<path d="M16.001 3C9.374 3 4 8.373 4 14.998c0 2.643.857 5.087 2.31 7.072L4 29l7.143-2.247a11.93 11.93 0 0 0 4.858 1.04h.001C22.628 27.793 28 22.421 28 15.796 28 12.612 26.752 9.62 24.486 7.355 22.221 5.09 19.228 3 16.001 3Zm0 22.793h-.003a9.954 9.954 0 0 1-5.069-1.388l-.363-.215-4.236 1.333 1.357-4.13-.236-.378a9.929 9.929 0 0 1-1.518-5.265c0-5.493 4.475-9.96 9.971-9.96 2.665 0 5.169 1.037 7.05 2.92 1.882 1.882 2.92 4.385 2.92 7.05-.001 5.494-4.477 9.96-9.873 9.96Zm5.469-7.453c-.299-.15-1.77-.873-2.044-.973-.274-.1-.473-.149-.673.15-.198.298-.769.973-.943 1.172-.174.2-.348.224-.647.075-.298-.15-1.262-.465-2.405-1.484-.889-.793-1.489-1.773-1.663-2.071-.174-.299-.018-.46.131-.609.134-.134.298-.348.448-.522.149-.174.198-.298.298-.497.099-.199.05-.373-.025-.522-.075-.149-.673-1.622-.923-2.224-.243-.582-.49-.503-.673-.512l-.572-.01a1.103 1.103 0 0 0-.796.373c-.273.299-1.043 1.02-1.043 2.487 0 1.468 1.067 2.886 1.216 3.085.149.199 2.1 3.204 5.087 4.493.711.307 1.265.49 1.697.628.713.227 1.362.195 1.875.118.572-.085 1.77-.723 2.018-1.422.249-.7.249-1.3.174-1.422-.074-.124-.273-.199-.572-.348Z"/>' +
      '</svg>' +
    '<span class="visually-hidden">Chat with Cybespoke on WhatsApp</span>';
  document.body.appendChild(wa);
  setTimeout(() => wa.classList.add("is-in"), 400);

  // Footer year
  document.querySelectorAll("[data-year]").forEach((el) => { el.textContent = new Date().getFullYear(); });
})();
