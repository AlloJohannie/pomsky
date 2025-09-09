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
});
