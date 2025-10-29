/*
  Landinger public bundle
  - Preline + AOS
  - Logique de navbar active + sticky
*/

// Plugins
import 'preline';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialise quand le DOM est prêt
window.addEventListener('DOMContentLoaded', () => {
  // AOS
  if (!window.__aos_initialized__) {
    AOS.init();
    window.__aos_initialized__ = true;
  }

  // Activer le lien courant dans la topnav (#navbar)
  const pageUrl = window.location.href.split(/[?#]/)[0];
  const navbar = document.querySelector('#navbar');
  if (navbar) {
    const navbarLinks = Array.from(navbar.querySelectorAll('a'));
    navbarLinks.forEach((link) => {
      if (link.href === pageUrl) {
        link.classList.add('active');

        // Gestion dropdowns (si tu utilises hs-dropdown / Preline)
        let parentDropdown = link.closest('.hs-dropdown');
        if (parentDropdown) {
          const dropdownToggle = parentDropdown.querySelector('.hs-dropdown-toggle');
          dropdownToggle?.classList.add('active');
        }
      }
    });
  }

  // Sticky header
  const header = document.querySelector('header');
  const onScroll = () => {
    if (!header) return;
    if (document.documentElement.scrollTop >= 75 || document.body.scrollTop >= 75) {
      header.classList.add('shadow-md', '!fixed');
    } else {
      header.classList.remove('shadow-md', '!fixed');
    }
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

    const overlay = document.createElement('div');
  overlay.id = 'lb-overlay';
  overlay.style.cssText = `
    position:fixed; inset:0; background:rgba(0,0,0,.85);
    display:none; align-items:center; justify-content:center; z-index:1000;
  `;
  overlay.innerHTML = `
    <button aria-label="Fermer" id="lb-close"
      style="position:absolute;top:16px;right:16px;font-size:28px;color:#fff;background:transparent;border:0;cursor:pointer">×</button>
    <img id="lb-image" alt="" style="max-width:90vw;max-height:90vh;object-fit:contain;border-radius:12px" />
    <div id="lb-caption" style="position:absolute;bottom:20px;left:50%;transform:translateX(-50%);
      color:#fff;background:rgba(0,0,0,.4);padding:6px 10px;border-radius:999px;font-size:12px"></div>
  `;
  document.body.appendChild(overlay);

  const imgEl = overlay.querySelector('#lb-image');
  const capEl = overlay.querySelector('#lb-caption');

  const open = (src, caption='') => {
    imgEl.src = src;
    capEl.textContent = caption || '';
    capEl.style.display = caption ? 'block' : 'none';
    overlay.style.display = 'flex';
  };
  const close = () => { overlay.style.display = 'none'; imgEl.src = ''; };

  overlay.addEventListener('click', (e) => {
    if (e.target.id === 'lb-image') return; // click sur l’image = ignore
    close();
  });
  overlay.querySelector('#lb-close').addEventListener('click', close);
  window.addEventListener('keydown', (e) => { if (e.key === 'Escape') close(); });

  // Délégation : tout élément avec [data-lightbox-src]
  document.body.addEventListener('click', (e) => {
    const el = e.target.closest('[data-lightbox-src]');
    if (!el) return;
    e.preventDefault();
    const src = el.getAttribute('data-lightbox-src');
    const cap = el.getAttribute('data-lightbox-caption') || '';
    open(src, cap);
  });

});
