/* ==========================================================================
   ABOUT SCRIPT - REGINA AL BARAKAH GROUP
   ========================================================================== */

// 1. INITIALIZE AOS (Animate On Scroll)
AOS.init({ 
    duration: 1000, 
    once: true 
});

// 2. ELEMENT SELECTORS
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-link');

// 3. MOBILE MENU NAVIGATION TOGGLE
if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        
        // Ganti icon tombol menu (hamburger / times)
        if (mobileMenu.classList.contains('active')) {
            menuBtn.innerHTML = '<i class="fas fa-times"></i>';
        } else {
            menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        }
    });

    // Close menu saat link navigasi di klik
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });
}