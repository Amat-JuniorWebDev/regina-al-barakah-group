/* Konfigurasi Tailwind CSS Custom untuk Halaman Product (Mobile & Desktop) */
tailwind.config = {
    theme: {
        extend: {
            colors: {
                brand: {
                    red: '#E53935',
                    crimson: '#BE123C',
                    dark: '#1E1E1E',
                    card: '#2C2C2C',
                    surface: '#1A1D20',
                    accent: '#5084C4',
                    muted: '#757575',
                    border: '#E0E0E0'
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                display: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                body: ['Inter', 'sans-serif']
            },
            borderRadius: {
                '3xl': '1.5rem',
                '4xl': '2rem',
                '5xl': '2.5rem',
            }
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {
    // --- 1. TOGGLE MENU MOBILE (Hamburger) ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- 2. FILTER KATEGORI (Universal Desktop & Mobile) ---
    function setupFilters(btnClass, cardClass, countId) {
        const filterButtons = document.querySelectorAll(btnClass);
        const productCards = document.querySelectorAll(cardClass);
        const productCountEl = document.getElementById(countId);

        if (filterButtons.length > 0) {
            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Reset semua style button
                    filterButtons.forEach(b => {
                        b.classList.remove('bg-[#1E1E1E]', 'text-white', 'shadow-md', 'border-[#1E1E1E]');
                        b.classList.add('text-slate-500', 'bg-white', 'border-slate-200', 'hover:bg-slate-50', 'hover:text-slate-900');
                    });
                    
                    // Aktifkan style button yang diklik
                    btn.classList.add('bg-[#1E1E1E]', 'text-white', 'shadow-md', 'border-[#1E1E1E]');
                    btn.classList.remove('text-slate-500', 'bg-white', 'border-slate-200', 'hover:bg-slate-50', 'hover:text-slate-900');

                    const filter = btn.getAttribute('data-filter');
                    let count = 0;

                    // Saring Produk
                    productCards.forEach(card => {
                        const category = card.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            card.classList.remove('hidden');
                            card.classList.add('flex');
                            count++;
                        } else {
                            card.classList.add('hidden');
                            card.classList.remove('flex');
                        }
                    });

                    // Update total hitungan (Jika ada)
                    if (productCountEl) productCountEl.textContent = count;
                });
            });
        }
    }

    // Terapkan filter untuk Desktop dan Mobile
    setupFilters('.filter-btn-desktop', '.product-card-desktop', 'product-count-desktop');
    setupFilters('.filter-btn-mobile', '.product-card-mobile', null);


    // --- 3. LOGIKA MODAL DETAIL PRODUK ---
    
    // Desktop Modal
    const modalDesktop = document.getElementById('product-modal-desktop');
    window.openModalDesktop = function(buttonEl) {
        const card = buttonEl.closest('.product-card-desktop');
        populateModal(card, 'modal-title-desktop', 'modal-category-desktop', 'modal-desc-desktop', 'modal-img-desktop', 'modal-wa-link-desktop');
        modalDesktop.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    };
    window.closeModalDesktop = function() {
        if(modalDesktop) {
            modalDesktop.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    };

    // Mobile Modal
    const modalMobile = document.getElementById('product-modal-mobile');
    window.openModalMobile = function(buttonEl) {
        const card = buttonEl.closest('.product-card-mobile');
        populateModal(card, 'modal-title-mobile', 'modal-category-mobile', 'modal-desc-mobile', 'modal-img-mobile', 'modal-wa-link-mobile');
        modalMobile.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    };
    window.closeModalMobile = function() {
        if(modalMobile) {
            modalMobile.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    };

    // Fungsi Pengisi Konten Modal
    function populateModal(card, titleId, categoryId, descId, imgId, linkId) {
        const title = card.getAttribute('data-title');
        const category = card.getAttribute('data-category');
        const desc = card.getAttribute('data-desc');
        const img = card.getAttribute('data-img');

        document.getElementById(titleId).textContent = title;
        document.getElementById(categoryId).textContent = category;
        document.getElementById(descId).textContent = desc;
        document.getElementById(imgId).src = img;
        document.getElementById(imgId).alt = title;

        const encodedMessage = encodeURIComponent(`Halo Regina Al Barakah, saya ingin bertanya ketersediaan dan sewa untuk produk: ${title} (${category}).`);
        document.getElementById(linkId).href = `https://wa.me/6281242207221?text=${encodedMessage}`;
    }
});