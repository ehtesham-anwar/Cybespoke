/* Global behaviors: reveal, cursor glow, nav scroll, tile parallax, count-up */
(() => {
  const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

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
      { threshold: 0.12, rootMargin: "0px 0px -60px 0px" }
    );
    els.forEach((el) => io.observe(el));
  };

  const cursorGlow = () => {
    if (window.matchMedia("(pointer: coarse)").matches || prefersReduced) return;
    const dot = document.createElement("div");
    dot.className = "cursor-glow";
    document.body.appendChild(dot);
    let x = window.innerWidth / 2;
    let y = window.innerHeight / 2;
    let tx = x, ty = y;
    window.addEventListener("mousemove", (e) => { tx = e.clientX; ty = e.clientY; });
    const tick = () => {
      x += (tx - x) * 0.08;
      y += (ty - y) * 0.08;
      dot.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%)`;
      requestAnimationFrame(tick);
    };
    tick();
  };

  const navScroll = () => {
    const nav = document.querySelector(".nav");
    if (!nav) return;
    const update = () => nav.classList.toggle("is-scrolled", window.scrollY > 24);
    update();
    window.addEventListener("scroll", update, { passive: true });
  };

  const tileParallax = () => {
    const stack = document.querySelector(".float-stack");
    if (!stack || prefersReduced) return;
    const tiles = stack.querySelectorAll(".tile");
    if (window.matchMedia("(pointer: coarse)").matches) return;

    let rx = 0, ry = 0, tx = 0, ty = 0;
    const onMove = (e) => {
      const r = stack.getBoundingClientRect();
      const cx = r.left + r.width / 2;
      const cy = r.top + r.height / 2;
      tx = (e.clientX - cx) / r.width;
      ty = (e.clientY - cy) / r.height;
    };
    window.addEventListener("mousemove", onMove);

    const tick = () => {
      rx += (tx - rx) * 0.06;
      ry += (ty - ry) * 0.06;
      tiles.forEach((tile, i) => {
        const depth = (i + 1) * 4;
        tile.style.setProperty("--px", `${(rx * depth).toFixed(2)}px`);
        tile.style.setProperty("--py", `${(ry * depth).toFixed(2)}px`);
      });
      requestAnimationFrame(tick);
    };
    tick();
  };

  const countUp = () => {
    const els = document.querySelectorAll("[data-count]");
    if (!els.length) return;
    if (!("IntersectionObserver" in window) || prefersReduced) {
      els.forEach((el) => {
        const target = parseFloat(el.dataset.count);
        const decimals = parseInt(el.dataset.decimals || "0", 10);
        el.textContent = target.toFixed(decimals) + (el.dataset.suffix || "");
      });
      return;
    }
    const animate = (el) => {
      const target = parseFloat(el.dataset.count);
      const decimals = parseInt(el.dataset.decimals || "0", 10);
      const suffix = el.dataset.suffix || "";
      const duration = 1600;
      const start = performance.now();
      const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);
      const step = (now) => {
        const t = Math.min(1, (now - start) / duration);
        const v = target * easeOutCubic(t);
        el.textContent = v.toFixed(decimals) + suffix;
        if (t < 1) requestAnimationFrame(step);
        else el.textContent = target.toFixed(decimals) + suffix;
      };
      requestAnimationFrame(step);
    };
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            animate(e.target);
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.4 }
    );
    els.forEach((el) => io.observe(el));
  };

  const yearStamp = () => {
    document.querySelectorAll("[data-year]").forEach((el) => {
      el.textContent = new Date().getFullYear();
    });
  };

  document.addEventListener("DOMContentLoaded", () => {
    reveal();
    cursorGlow();
    navScroll();
    tileParallax();
    countUp();
    yearStamp();
  });
})();
