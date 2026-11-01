/* Konfigurasi Tailwind CSS Custom untuk Halaman Contact (Mobile & Desktop) */
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

/* Logic Menu Mobile Hamburger & Form WhatsApp */
document.addEventListener("DOMContentLoaded", () => {
    // 1. Mobile Menu Logic
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 2. Form Submit ke WhatsApp Logic
    const form = document.getElementById('sewaForm');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form melakukan refresh halaman (submit tradisional)
            
            // Mengambil nilai dari input form berdasarkan ID
            const nama = document.getElementById('inputNama')?.value || '-';
            const wa = document.getElementById('inputWA')?.value || '-';
            const proyek = document.getElementById('inputProyek')?.value || '-';
            const durasi = document.getElementById('inputDurasi')?.value || '-';
            const lokasi = document.getElementById('inputLokasi')?.value || '-';
            const modul = document.getElementById('inputModul')?.value || '-';

            // Merangkai teks pesan agar rapi saat dibaca di WhatsApp
            const textWA = `Halo Admin Regina Al Barakah, saya ingin konsultasi sewa scaffolding dengan rincian berikut:%0A%0A` +
                           `*Nama/Perusahaan:* ${nama}%0A` +
                           `*No. WhatsApp:* ${wa}%0A` +
                           `*Jenis Proyek:* ${proyek}%0A` +
                           `*Estimasi Durasi:* ${durasi}%0A` +
                           `*Lokasi Titik Antar:* ${lokasi}%0A` +
                           `*Kebutuhan Tambahan:* ${modul}%0A%0A` +
                           `Mohon dibantu informasi ketersediaan dan estimasi harganya. Terima kasih.`;

            // Nomor tujuan WhatsApp Admin 1 (tanpa awalan 0 atau +, langsung gunakan format 62)
            const noTujuan = "6282152316910"; 

            // Membuat link WA dan membukanya di tab/aplikasi baru
            const waURL = `https://wa.me/${noTujuan}?text=${textWA}`;
            window.open(waURL, '_blank');
        });
    }
});