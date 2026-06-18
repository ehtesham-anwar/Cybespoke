/* Global behaviors: reveal, cursor glow, nav scroll, tile parallax, count-up, theme toggle */
(() => {
  const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // Apply stored theme as early as possible. Each page also has a tiny
  // synchronous head script that sets data-theme to "light" by default
  // (or the user's stored preference) before paint, so we shouldn't see
  // a flash. This is just defence-in-depth.
  try {
    const stored = localStorage.getItem("cybespoke-theme");
    const theme = stored === "dark" ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", theme);
  } catch (_) {
    document.documentElement.setAttribute("data-theme", "light");
  }

  const themeToggle = () => {
    const nav = document.querySelector(".nav");
    if (!nav || nav.querySelector(".nav__theme")) return;

    const cta = nav.querySelector(".nav__cta");
    let group = nav.querySelector(".nav__right");
    if (!group) {
      group = document.createElement("div");
      group.className = "nav__right";
      if (cta && cta.parentElement === nav) {
        nav.insertBefore(group, cta);
        group.appendChild(cta);
      } else {
        nav.appendChild(group);
      }
    }

    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "nav__theme";
    btn.setAttribute("aria-label", "Toggle colour theme");
    btn.innerHTML =
      '<svg class="theme-icon theme-icon--sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
        '<circle cx="12" cy="12" r="4.2"/>' +
        '<path d="M12 2.5v2.2M12 19.3v2.2M4.6 4.6l1.6 1.6M17.8 17.8l1.6 1.6M2.5 12h2.2M19.3 12h2.2M4.6 19.4l1.6-1.6M17.8 6.2l1.6-1.6"/>' +
      '</svg>' +
      '<svg class="theme-icon theme-icon--moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
        '<path d="M20.5 13.2A8.5 8.5 0 1 1 10.8 3.5 6.7 6.7 0 0 0 20.5 13.2z"/>' +
      '</svg>';
    group.insertBefore(btn, group.firstChild);

    btn.addEventListener("click", () => {
      const current = document.documentElement.getAttribute("data-theme") === "light" ? "light" : "dark";
      const next = current === "light" ? "dark" : "light";
      document.documentElement.classList.add("theme-fade");
      document.documentElement.setAttribute("data-theme", next);
      try { localStorage.setItem("cybespoke-theme", next); } catch (_) {}
      window.setTimeout(() => document.documentElement.classList.remove("theme-fade"), 600);
    });
  };

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

    const ring = document.createElement("div");
    ring.className = "cursor-ring";
    document.body.appendChild(ring);

    let x = window.innerWidth / 2;
    let y = window.innerHeight / 2;
    let tx = x, ty = y;
    let rx = x, ry = y;
    let scale = 1, scaleT = 1;

    window.addEventListener("mousemove", (e) => { tx = e.clientX; ty = e.clientY; });
    window.addEventListener("mouseleave", () => ring.classList.add("is-hidden"));
    window.addEventListener("mouseenter", () => ring.classList.remove("is-hidden"));

    const ACTIVE_SEL = 'a, button, .btn, .nav__cta, .service-card, .hero-step, .stat, [data-cursor]';
    document.addEventListener("mouseover", (e) => {
      if (e.target.closest && e.target.closest(ACTIVE_SEL)) {
        ring.classList.add("is-active");
        scaleT = 1.18;
      }
    });
    document.addEventListener("mouseout", (e) => {
      if (e.target.closest && e.target.closest(ACTIVE_SEL)) {
        ring.classList.remove("is-active");
        scaleT = 1;
      }
    });

    const tick = () => {
      x += (tx - x) * 0.10;
      y += (ty - y) * 0.10;
      rx += (tx - rx) * 0.22;
      ry += (ty - ry) * 0.22;
      scale += (scaleT - scale) * 0.12;
      dot.style.setProperty("--cursor-scale", scale.toFixed(3));
      dot.style.transform = `translate(${x}px, ${y}px) translate(-50%, -50%) scale(${scale.toFixed(3)})`;
      ring.style.transform = `translate(${rx}px, ${ry}px) translate(-50%, -50%)`;
      requestAnimationFrame(tick);
    };
    tick();
  };

  const magneticButtons = () => {
    if (window.matchMedia("(pointer: coarse)").matches || prefersReduced) return;
    document.querySelectorAll(".btn, .nav__cta").forEach((btn) => {
      let mx = 0, my = 0, tx = 0, ty = 0;
      let active = false;
      const onMove = (e) => {
        const r = btn.getBoundingClientRect();
        const cx = r.left + r.width / 2;
        const cy = r.top + r.height / 2;
        tx = (e.clientX - cx) * 0.28;
        ty = (e.clientY - cy) * 0.45;
        btn.style.setProperty("--sx", `${e.clientX - r.left}px`);
        btn.style.setProperty("--sy", `${e.clientY - r.top}px`);
      };
      btn.addEventListener("mouseenter", () => { active = true; });
      btn.addEventListener("mousemove", onMove);
      btn.addEventListener("mouseleave", () => { active = false; tx = 0; ty = 0; });

      const tick = () => {
        mx += (tx - mx) * 0.18;
        my += (ty - my) * 0.18;
        btn.style.setProperty("--mx", `${mx.toFixed(2)}px`);
        btn.style.setProperty("--my", `${my.toFixed(2)}px`);
        requestAnimationFrame(tick);
      };
      tick();
    });
  };

  const spotlightTracking = () => {
    if (prefersReduced) return;
    document.querySelectorAll("[data-spotlight]").forEach((el) => {
      el.addEventListener("mousemove", (e) => {
        const r = el.getBoundingClientRect();
        el.style.setProperty("--sx", `${e.clientX - r.left}px`);
        el.style.setProperty("--sy", `${e.clientY - r.top}px`);
      });
    });
  };

  const cardTilt = () => {
    if (window.matchMedia("(pointer: coarse)").matches || prefersReduced) return;
    document.querySelectorAll("[data-tilt]").forEach((el) => {
      let rx = 0, ry = 0, trx = 0, try_ = 0;
      const onMove = (e) => {
        const r = el.getBoundingClientRect();
        const px = (e.clientX - r.left) / r.width - 0.5;
        const py = (e.clientY - r.top) / r.height - 0.5;
        trx = py * -8;
        try_ = px * 10;
      };
      const onLeave = () => { trx = 0; try_ = 0; };
      el.addEventListener("mousemove", onMove);
      el.addEventListener("mouseleave", onLeave);
      const tick = () => {
        rx += (trx - rx) * 0.12;
        ry += (try_ - ry) * 0.12;
        el.style.setProperty("--tilt-x", `${rx.toFixed(2)}deg`);
        el.style.setProperty("--tilt-y", `${ry.toFixed(2)}deg`);
        requestAnimationFrame(tick);
      };
      tick();
    });
  };

  const marqueeVelocity = () => {
    const marquees = document.querySelectorAll(".marquee");
    if (!marquees.length || prefersReduced) return;
    let lastY = window.scrollY;
    let velocity = 0;
    let smoothed = 0;
    window.addEventListener("scroll", () => {
      const y = window.scrollY;
      velocity = y - lastY;
      lastY = y;
    }, { passive: true });
    const tick = () => {
      smoothed += (velocity - smoothed) * 0.14;
      velocity *= 0.9;
      const clamped = Math.max(-1.8, Math.min(1.8, smoothed * 0.045));
      marquees.forEach((m) => {
        m.style.setProperty("--mq-skew", `${(clamped * 4).toFixed(2)}deg`);
        const track = m.querySelector(".marquee__track");
        if (track) track.style.setProperty("--mq-boost", `${(1 + Math.abs(clamped) * 1.2).toFixed(2)}`);
      });
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

  const whatsappFab = () => {
    if (document.querySelector(".wa-fab")) return;
    const a = document.createElement("a");
    a.className = "wa-fab";
    a.href = "https://wa.me/447752856649";
    a.target = "_blank";
    a.rel = "noopener noreferrer";
    a.setAttribute("aria-label", "Chat with Cybespoke on WhatsApp");
    a.innerHTML =
      '<svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true" focusable="false">' +
        '<path d="M16.001 3C9.374 3 4 8.373 4 14.998c0 2.643.857 5.087 2.31 7.072L4 29l7.143-2.247a11.93 11.93 0 0 0 4.858 1.04h.001C22.628 27.793 28 22.421 28 15.796 28 12.612 26.752 9.62 24.486 7.355 22.221 5.09 19.228 3 16.001 3Zm0 22.793h-.003a9.954 9.954 0 0 1-5.069-1.388l-.363-.215-4.236 1.333 1.357-4.13-.236-.378a9.929 9.929 0 0 1-1.518-5.265c0-5.493 4.475-9.96 9.971-9.96 2.665 0 5.169 1.037 7.05 2.92 1.882 1.882 2.92 4.385 2.92 7.05-.001 5.494-4.477 9.96-9.873 9.96Zm5.469-7.453c-.299-.15-1.77-.873-2.044-.973-.274-.1-.473-.149-.673.15-.198.298-.769.973-.943 1.172-.174.2-.348.224-.647.075-.298-.15-1.262-.465-2.405-1.484-.889-.793-1.489-1.773-1.663-2.071-.174-.299-.018-.46.131-.609.134-.134.298-.348.448-.522.149-.174.198-.298.298-.497.099-.199.05-.373-.025-.522-.075-.149-.673-1.622-.923-2.224-.243-.582-.49-.503-.673-.512l-.572-.01a1.103 1.103 0 0 0-.796.373c-.273.299-1.043 1.02-1.043 2.487 0 1.468 1.067 2.886 1.216 3.085.149.199 2.1 3.204 5.087 4.493.711.307 1.265.49 1.697.628.713.227 1.362.195 1.875.118.572-.085 1.77-.723 2.018-1.422.249-.7.249-1.3.174-1.422-.074-.124-.273-.199-.572-.348Z"/>' +
      '</svg>' +
      '<span class="wa-label">Chat on WhatsApp</span>';
    (document.documentElement || document.body).appendChild(a);
    requestAnimationFrame(() => {
      setTimeout(() => a.classList.add("is-in"), 120);
    });
  };

  document.addEventListener("DOMContentLoaded", () => {
    themeToggle();
    reveal();
    cursorGlow();
    navScroll();
    tileParallax();
    countUp();
    yearStamp();
    whatsappFab();
    magneticButtons();
    spotlightTracking();
    cardTilt();
    marqueeVelocity();
  });
})();
