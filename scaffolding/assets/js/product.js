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
    // Category Filter Mechanism (Desktop)
    const filterButtons = document.querySelectorAll('.filter-btn-desktop');
    const productCards = document.querySelectorAll('.product-card-desktop');
    const productCountEl = document.getElementById('product-count-desktop');

    if (filterButtons.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Toggle button states (Premium Styling)
                filterButtons.forEach(b => {
                    b.classList.remove('bg-[#1E1E1E]', 'text-white', 'shadow-md', 'border-[#1E1E1E]');
                    b.classList.add('text-slate-500', 'bg-white', 'border-slate-200', 'hover:bg-slate-50', 'hover:text-slate-900');
                });
                btn.classList.add('bg-[#1E1E1E]', 'text-white', 'shadow-md', 'border-[#1E1E1E]');
                btn.classList.remove('text-slate-500', 'bg-white', 'border-slate-200', 'hover:bg-slate-50', 'hover:text-slate-900');

                const filter = btn.getAttribute('data-filter');
                let count = 0;

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

                if (productCountEl) productCountEl.textContent = count;
            });
        });
    }

    // Modal Interaction Functions
    const modal = document.getElementById('product-modal-desktop');
    
    window.openModalDesktop = function(buttonEl) {
        const card = buttonEl.closest('.product-card-desktop');
        const title = card.getAttribute('data-title');
        const category = card.getAttribute('data-category');
        const desc = card.getAttribute('data-desc');
        const img = card.getAttribute('data-img');

        document.getElementById('modal-title-desktop').textContent = title;
        document.getElementById('modal-category-desktop').textContent = category;
        document.getElementById('modal-desc-desktop').textContent = desc;
        document.getElementById('modal-img-desktop').src = img;
        document.getElementById('modal-img-desktop').alt = title;

        const encodedMessage = encodeURIComponent(`Halo Regina Al Barakah, saya ingin bertanya ketersediaan dan sewa untuk produk: ${title} (${category}).`);
        document.getElementById('modal-wa-link-desktop').href = `https://wa.me/6281242207221?text=${encodedMessage}`;

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    };

    window.closeModalDesktop = function() {
        if(modal) {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    };

    if(modal){
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModalDesktop();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModalDesktop();
        });
    }
});