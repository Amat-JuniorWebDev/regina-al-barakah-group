/* Konfigurasi Tailwind CSS Custom untuk Halaman Product (Mobile & Desktop) */
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "on-background": "#191c1e",
                "on-tertiary-fixed-variant": "#93000d",
                "background": "#f8f9fb",
                "on-tertiary": "#ffffff",
                "on-surface": "#191c1e",
                "surface-container-highest": "#e1e2e4",
                "primary-fixed-dim": "#a3c9ff",
                "outline": "#727781",
                "error-container": "#ffdad6",
                "on-secondary-container": "#636262",
                "glass-surface-dark": "rgba(30, 30, 30, 0.72)",
                "error": "#ba1a1a",
                "surface-dim": "#d9dadc",
                "tertiary-container": "#db322f",
                "surface-card": "#FFFFFF",
                "tertiary": "#b7131a",
                "on-primary": "#ffffff",
                "on-secondary-fixed-variant": "#474746",
                "surface-container-high": "#e7e8ea",
                "inverse-on-surface": "#f0f1f3",
                "glass-border": "rgba(255, 255, 255, 0.24)",
                "on-error": "#ffffff",
                "surface-tint": "#27609e",
                "secondary-fixed": "#e5e2e1",
                "surface-dark": "#1E1E1E",
                "surface-variant": "#e1e2e4",
                "surface-border": "#E0E0E0",
                "on-error-container": "#93000a",
                "inverse-surface": "#2e3132",
                "glass-surface": "rgba(255, 255, 255, 0.72)",
                "primary-container": "#4177b6",
                "tertiary-fixed": "#ffdad6",
                "inverse-primary": "#a3c9ff",
                "primary": "#235e9b",
                "on-tertiary-container": "#fffbff",
                "surface-bright": "#f8f9fb",
                "text-on-dark": "#FFFFFF",
                "surface-container-lowest": "#ffffff",
                "surface-container-low": "#f3f4f6",
                "secondary-fixed-dim": "#c8c6c5",
                "on-secondary-fixed": "#1b1b1c",
                "on-secondary": "#ffffff",
                "on-primary-container": "#fdfcff",
                "on-tertiary-fixed": "#410002",
                "secondary": "#5f5e5e",
                "surface-dark-card": "#2C2C2C",
                "outline-variant": "#c2c6d1",
                "surface-container": "#edeef0",
                "secondary-container": "#e2dfde",
                "text-primary": "#1E1E1E",
                "primary-fixed": "#d3e3ff",
                "on-primary-fixed": "#001c39",
                "on-primary-fixed-variant": "#004882",
                "text-secondary": "#757575",
                "on-surface-variant": "#424750",
                "tertiary-fixed-dim": "#ffb4ac",
                "surface": "#f8f9fb"
            },
            borderRadius: {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            spacing: {
                "space-xs": "0.5rem",
                "space-md": "1.5rem",
                "space-2xl": "5rem",
                "gutter-mobile": "1rem",
                "margin-mobile": "1rem",
                "space-sm": "1rem",
                "space-lg": "2rem",
                "space-xl": "3rem",
                "gutter": "1.5rem",
                "margin": "2rem"
            },
            fontFamily: {
                "headline-hero": ["Inter", "sans-serif"],
                "headline-md": ["Inter", "sans-serif"],
                "body-md": ["Inter", "sans-serif"],
                "body-lg": ["Inter", "sans-serif"],
                "body-sm": ["Inter", "sans-serif"],
                "headline-lg-mobile": ["Inter", "sans-serif"],
                "label-sm": ["Inter", "sans-serif"],
                "headline-hero-mobile": ["Inter", "sans-serif"],
                "headline-lg": ["Inter", "sans-serif"],
                "label-md": ["Inter", "sans-serif"],
                "headline-sm": ["Inter", "sans-serif"],
                "display": ['"Plus Jakarta Sans"', "Inter", "sans-serif"],
            },
            fontSize: {
                "headline-hero": ["56px", { lineHeight: "64px", letterSpacing: "-0.02em", fontWeight: "700" }],
                "headline-md": ["22px", { lineHeight: "30px", fontWeight: "600" }],
                "body-md": ["15px", { lineHeight: "22px", fontWeight: "400" }],
                "body-lg": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                "body-sm": ["13px", { lineHeight: "18px", fontWeight: "400" }],
                "headline-lg-mobile": ["28px", { lineHeight: "36px", fontWeight: "600" }],
                "label-sm": ["12px", { lineHeight: "16px", letterSpacing: "0.02em", fontWeight: "500" }],
                "headline-hero-mobile": ["36px", { lineHeight: "44px", letterSpacing: "-0.01em", fontWeight: "700" }],
                "headline-lg": ["36px", { lineHeight: "44px", letterSpacing: "-0.015em", fontWeight: "600" }],
                "label-md": ["14px", { lineHeight: "20px", letterSpacing: "0.01em", fontWeight: "600" }],
                "headline-sm": ["18px", { lineHeight: "26px", fontWeight: "600" }]
            }
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {
    // Category Filter Mechanism (Desktop)
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    const productCountEl = document.getElementById('product-count');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Toggle button states
            filterButtons.forEach(b => {
                b.classList.remove('bg-surface-dark', 'text-white', 'shadow-sm');
                b.classList.add('text-secondary', 'bg-surface-card', 'border', 'border-surface-border');
            });
            btn.classList.add('bg-surface-dark', 'text-white', 'shadow-sm');
            btn.classList.remove('text-secondary', 'bg-surface-card', 'border', 'border-surface-border');

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

            if (productCountEl) {
                productCountEl.textContent = count;
            }
        });
    });

    // Modal Interaction Functions
    const modal = document.getElementById('product-modal');
    
    window.openModal = function(buttonEl) {
        const card = buttonEl.closest('.product-card');
        const title = card.getAttribute('data-title');
        const category = card.getAttribute('data-category');
        const desc = card.getAttribute('data-desc');
        const img = card.getAttribute('data-img');

        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal-category').textContent = category;
        document.getElementById('modal-desc').textContent = desc;
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-img').alt = title;

        const encodedMessage = encodeURIComponent(`Halo Regina Al Barakah, saya ingin bertanya ketersediaan dan sewa untuk produk: ${title} (${category}).`);
        document.getElementById('modal-wa-link').href = `https://wa.me/6282188253433?text=${encodedMessage}`;

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    };

    window.closeModal = function() {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    };

    if(modal){
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
        });
    }
});