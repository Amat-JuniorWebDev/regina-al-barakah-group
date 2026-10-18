/* Konfigurasi Tailwind CSS Custom untuk Regina Al Barakah */
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
                sans: ['"Inter"', 'sans-serif'],
                body: ['"Inter"', 'sans-serif']
            },
            borderRadius: {
                '3xl': '1.5rem',
                '4xl': '2rem',
                '5xl': '2.5rem',
            }
        }
    }
};