AOS.init({ duration: 1000, once: true });

const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
menuBtn?.addEventListener('click', () => {
    mobileMenu?.classList.toggle('active');
    menuBtn.innerHTML = mobileMenu?.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
});

// WhatsApp Multi-Admin Dropdown Toggle Script
const waToggle = document.getElementById('wa-toggle');
const waMenu = document.getElementById('wa-menu');

waToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    if (waMenu.classList.contains('hidden')) {
        waMenu.classList.remove('hidden');
        setTimeout(() => {
            waMenu.classList.remove('scale-95', 'opacity-0');
            waMenu.classList.add('scale-100', 'opacity-100');
        }, 10);
        waToggle.innerHTML = '<i class="fas fa-times animate-none"></i>';
        waToggle.style.backgroundColor = '#64748b'; // Berubah warna abu-abu tanda tutup
    } else {
        closeWaMenu();
    }
});

function closeWaMenu() {
    waMenu.classList.remove('scale-100', 'opacity-100');
    waMenu.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        waMenu.classList.add('hidden');
    }, 300);
    waToggle.innerHTML = '<i class="fab fa-whatsapp"></i>';
    waToggle.style.backgroundColor = '#25d366';
}

// Tutup menu jika klik di area luar
document.addEventListener('click', (e) => {
    if (waMenu && waToggle && !waMenu.contains(e.target) && !waToggle.contains(e.target)) {
        if (!waMenu.classList.contains('hidden')) {
            closeWaMenu();
        }
    }
});