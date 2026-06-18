/* ============================================================
 * Cybespoke — homepage-specific scripts
 * (extracted from index.php inline <script> block)
 * ============================================================ */

// ===== Hero aurora canvas — flowing iridescent metaballs reacting to cursor =====
(() => {
  const reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  if (reduce) return;
  const canvas = document.querySelector(".hero__canvas");
  if (!canvas) return;
  const hero = canvas.parentElement;
  const ctx = canvas.getContext("2d", {
    alpha: true
  });
  const dpr = Math.min(window.devicePixelRatio || 1, 2);

  let w = 0,
    h = 0;
  const resize = () => {
    const r = hero.getBoundingClientRect();
    w = r.width;
    h = r.height;
    canvas.width = Math.round(w * dpr);
    canvas.height = Math.round(h * dpr);
    canvas.style.width = w + "px";
    canvas.style.height = h + "px";
    ctx.setTransform(1, 0, 0, 1, 0, 0);
    ctx.scale(dpr, dpr);
  };
  resize();
  window.addEventListener("resize", resize);

  const blobs = [{
      hue: "45, 212, 191",
      x: 0.22,
      y: 0.32,
      r: 0.55,
      ax: 0.09,
      ay: 0.06,
      fx: 0.00028,
      fy: 0.00022,
      ph: 0.0
    },
    {
      hue: "139, 92, 246",
      x: 0.78,
      y: 0.20,
      r: 0.62,
      ax: 0.07,
      ay: 0.07,
      fx: 0.00019,
      fy: 0.00031,
      ph: 1.4
    },
    {
      hue: "56, 189, 248",
      x: 0.50,
      y: 0.78,
      r: 0.52,
      ax: 0.11,
      ay: 0.05,
      fx: 0.00033,
      fy: 0.00016,
      ph: 2.7
    },
    {
      hue: "244, 114, 182",
      x: 0.82,
      y: 0.86,
      r: 0.42,
      ax: 0.06,
      ay: 0.09,
      fx: 0.00024,
      fy: 0.00027,
      ph: 4.2
    },
  ];

  let mx = 0.5,
    my = 0.5,
    smx = 0.5,
    smy = 0.5;
  let inHero = false;
  hero.addEventListener("mouseenter", () => {
    inHero = true;
  });
  hero.addEventListener("mouseleave", () => {
    inHero = false;
  });
  hero.addEventListener("mousemove", (e) => {
    const r = hero.getBoundingClientRect();
    mx = (e.clientX - r.left) / r.width;
    my = (e.clientY - r.top) / r.height;
  });

  let running = true;
  const io = new IntersectionObserver((ents) => {
    ents.forEach((ent) => {
      running = ent.isIntersecting;
    });
  }, {
    threshold: 0
  });
  io.observe(hero);

  let t = 0;
  const tick = () => {
    if (!running) {
      requestAnimationFrame(tick);
      return;
    }
    t += 1;
    const targetMx = inHero ? mx : 0.5;
    const targetMy = inHero ? my : 0.5;
    smx += (targetMx - smx) * 0.04;
    smy += (targetMy - smy) * 0.04;

    ctx.clearRect(0, 0, w, h);
    ctx.globalCompositeOperation = "lighter";

    const minDim = Math.min(w, h);
    for (let i = 0; i < blobs.length; i++) {
      const b = blobs[i];
      const cx = (b.x + Math.sin(t * b.fx + b.ph) * b.ax + (smx - 0.5) * 0.07 * (i + 1)) * w;
      const cy = (b.y + Math.cos(t * b.fy + b.ph) * b.ay + (smy - 0.5) * 0.07 * (i + 1)) * h;
      const rad = b.r * minDim;
      const g = ctx.createRadialGradient(cx, cy, 0, cx, cy, rad);
      g.addColorStop(0, `rgba(${b.hue}, 0.55)`);
      g.addColorStop(0.45, `rgba(${b.hue}, 0.18)`);
      g.addColorStop(1, `rgba(${b.hue}, 0)`);
      ctx.fillStyle = g;
      ctx.beginPath();
      ctx.arc(cx, cy, rad, 0, Math.PI * 2);
      ctx.fill();
    }
    requestAnimationFrame(tick);
  };
  requestAnimationFrame(tick);
})();
