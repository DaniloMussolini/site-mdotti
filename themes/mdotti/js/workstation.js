/**
 * Workstation page — Rig carrossel + Lightbox
 * Inicializa o carrossel de imagens do Rig (autoplay, swipe, dots, navegação)
 * e o lightbox para ampliação ao clicar nas imagens.
 */
(function () {
  'use strict';

  // ============ RIG CAROUSELS ============
    document.querySelectorAll('.rig-carousel[data-carousel]').forEach(initCarousel);
    function initCarousel(root) {
      const slides = root.querySelectorAll('.slide');
      const dots = root.querySelectorAll('.dot');
      const prev = root.querySelector('.arrow.prev');
      const next = root.querySelector('.arrow.next');
      if (!slides.length) return;

      // Inject zoom hint
      if (!root.querySelector('.zoom-hint')) {
        const hint = document.createElement('div');
        hint.className = 'zoom-hint';
        hint.innerHTML = '<svg viewBox="0 0 16 16" fill="none"><circle cx="7" cy="7" r="4.5" stroke="currentColor" stroke-width="1.4"/><path d="M7 5V9M5 7H9M10.5 10.5L13 13" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>';
        root.appendChild(hint);
      }

      let i = 0;
      let timer = null;
      function go(n) {
        i = (n + slides.length) % slides.length;
        slides.forEach((s, k) => s.classList.toggle('is-active', k === i));
        dots.forEach((d, k) => d.classList.toggle('is-active', k === i));
      }
      function restart() {
        clearInterval(timer);
        timer = setInterval(() => go(i + 1), 6000);
      }
      prev && prev.addEventListener('click', () => { go(i - 1); restart(); });
      next && next.addEventListener('click', () => { go(i + 1); restart(); });
      dots.forEach((d, k) => d.addEventListener('click', () => { go(k); restart(); }));

      // Click image -> open lightbox
      slides.forEach((slide, k) => {
        const img = slide.querySelector('img');
        if (!img) return;
        img.addEventListener('click', () => openLightbox(root, k));
      });

      // pause on hover (desktop)
      root.addEventListener('mouseenter', () => clearInterval(timer));
      root.addEventListener('mouseleave', restart);

      // touch swipe (basic)
      let startX = null;
      root.addEventListener('touchstart', (e) => { startX = e.touches[0].clientX; }, { passive: true });
      root.addEventListener('touchend', (e) => {
        if (startX == null) return;
        const dx = e.changedTouches[0].clientX - startX;
        if (Math.abs(dx) > 40) { go(i + (dx < 0 ? 1 : -1)); restart(); }
        startX = null;
      });

      restart();
    }

    // ============ LIGHTBOX ============
    let lbState = { slides: [], idx: 0, root: null };

    function buildLightbox() {
      let lb = document.getElementById('rigLightbox');
      if (lb) return lb;
      lb = document.createElement('div');
      lb.id = 'rigLightbox';
      lb.className = 'rig-lightbox';
      lb.innerHTML = `
        <button class="lb-close" aria-label="Fechar">
          <svg viewBox="0 0 16 16" fill="none"><path d="M3 3L13 13M13 3L3 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
        </button>
        <button class="lb-arrow prev" aria-label="Anterior">
          <svg viewBox="0 0 16 16" fill="none"><path d="M10 3L5 8L10 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="stage"><img alt=""></div>
        <button class="lb-arrow next" aria-label="Próxima">
          <svg viewBox="0 0 16 16" fill="none"><path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <div class="lb-caption">
          <span class="cap-text"></span>
          <span class="sep"></span>
          <span class="count"></span>
        </div>
      `;
      document.body.appendChild(lb);

      lb.querySelector('.lb-close').addEventListener('click', closeLightbox);
      lb.querySelector('.lb-arrow.prev').addEventListener('click', () => lbGo(lbState.idx - 1));
      lb.querySelector('.lb-arrow.next').addEventListener('click', () => lbGo(lbState.idx + 1));
      lb.addEventListener('click', (e) => { if (e.target === lb) closeLightbox(); });

      document.addEventListener('keydown', (e) => {
        if (!lb.classList.contains('is-open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') lbGo(lbState.idx - 1);
        if (e.key === 'ArrowRight') lbGo(lbState.idx + 1);
      });

      // Touch swipe on lightbox
      let lbStartX = null;
      lb.addEventListener('touchstart', (e) => { lbStartX = e.touches[0].clientX; }, { passive: true });
      lb.addEventListener('touchend', (e) => {
        if (lbStartX == null) return;
        const dx = e.changedTouches[0].clientX - lbStartX;
        if (Math.abs(dx) > 40) lbGo(lbState.idx + (dx < 0 ? 1 : -1));
        lbStartX = null;
      });
      return lb;
    }

    function openLightbox(carouselRoot, startIdx) {
      const slides = Array.from(carouselRoot.querySelectorAll('.slide')).map(s => ({
        src: s.querySelector('img').src,
        alt: s.querySelector('img').alt,
        cap: (s.querySelector('.cap') && s.querySelector('.cap').textContent) || ''
      }));
      lbState = { slides, idx: startIdx, root: carouselRoot };
      const lb = buildLightbox();
      lbGo(startIdx);
      requestAnimationFrame(() => lb.classList.add('is-open'));
      document.body.style.overflow = 'hidden';
    }

    function lbGo(n) {
      const lb = document.getElementById('rigLightbox');
      if (!lb || !lbState.slides.length) return;
      const total = lbState.slides.length;
      lbState.idx = (n + total) % total;
      const slide = lbState.slides[lbState.idx];
      const img = lb.querySelector('.stage img');
      img.src = slide.src;
      img.alt = slide.alt;
      lb.querySelector('.cap-text').textContent = slide.cap || slide.alt;
      lb.querySelector('.count').textContent = (lbState.idx + 1) + ' / ' + total;
    }

    function closeLightbox() {
      const lb = document.getElementById('rigLightbox');
      if (!lb) return;
      lb.classList.remove('is-open');
      document.body.style.overflow = '';
    }
})();
