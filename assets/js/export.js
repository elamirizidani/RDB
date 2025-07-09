/* ---------- Swiper init (no built‑in pagination) ---------- */
  const stepsSwiper = new Swiper(".steps-swiper", {
    speed: 600,
    loop: true,            // keep sliding forever
    watchOverflow: false,  // never disable even when slides ≤ view
    slidesPerView: 1,
    spaceBetween: 40,
    // still show three across on big screens but keep slider alive
    breakpoints: {
      900: { slidesPerView: 3 }
    }
  });

  /* ---------- custom progress‑dot sync ---------- */
  const dots = document.querySelectorAll(".progress-dot");

  /** set correct bar on initial load */
  updateDots(stepsSwiper.realIndex);

  /** whenever slide changes, update bars */
  stepsSwiper.on("slideChange", () => {
    updateDots(stepsSwiper.realIndex);
  });

  function updateDots(idx) {
    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === idx);
    });
  }

  /** make bars clickable (optional) */
  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      stepsSwiper.slideToLoop(i); // loop‑safe jump
    });
  });