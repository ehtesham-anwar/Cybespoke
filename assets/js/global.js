/* Global behaviors: reveal-on-scroll, cursor glow, year stamp */
(() => {
  const reveal = () => {
    const els = document.querySelectorAll(".reveal");
    if (!("IntersectionObserver" in window)) {
      els.forEach((el) => el.classList.add("is-in"));
      return;
    }
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("is-in");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    els.forEach((el) => io.observe(el));
  };

  const cursorGlow = () => {
    if (window.matchMedia("(pointer: coarse)").matches) return;
    const dot = document.createElement("div");
    dot.className = "cursor-glow";
    document.body.appendChild(dot);
    let x = window.innerWidth / 2;
    let y = window.innerHeight / 2;
    let tx = x, ty = y;
    window.addEventListener("mousemove", (e) => { tx = e.clientX; ty = e.clientY; });
    const tick = () => {
      x += (tx - x) * 0.12;
      y += (ty - y) * 0.12;
      dot.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%)`;
      requestAnimationFrame(tick);
    };
    tick();
  };

  const yearStamp = () => {
    document.querySelectorAll("[data-year]").forEach((el) => {
      el.textContent = new Date().getFullYear();
    });
  };

  document.addEventListener("DOMContentLoaded", () => {
    reveal();
    cursorGlow();
    yearStamp();
  });
})();
