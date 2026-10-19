/* Konfigurasi Tailwind CSS Custom untuk Regina Al Barakah (Mobile & Desktop) */
tailwind.config = {
    theme: {
        extend: {
            colors: {
                brand: {
                    /* Mobile Colors */
                    blue: '#5084C4',
                    dark: '#17191E',
                    card: '#1E2129',
                    surface: '#F8F9FB',
                    accent: '#EA3829',
                    /* Desktop Colors */
                    red: '#E53935',
                    crimson: '#BE123C',
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

/* FUNGSI UNTUK MENGAKTIFKAN MENU MOBILE (TOMBOL GARIS 3) */
document.addEventListener("DOMContentLoaded", () => {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});