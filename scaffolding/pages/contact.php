<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact Us | Regina Al Barakah Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- LINK FILE CSS EKSTERNAL -->
   <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body class="selection:bg-blue-600 selection:text-white">

    <nav class="glass-nav fixed w-full z-[100] top-0 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-5 md:px-6 h-16 md:h-20 flex items-center justify-between">
            <div class="flex flex-col cursor-pointer transition-opacity hover:opacity-80" onclick="window.location.href='index.php'">
                <span class="text-lg md:text-2xl font-black text-blue-800 leading-none tracking-tight uppercase">REGINA AL BARAKAH</span>
                <span class="text-[9px] md:text-xs font-bold text-slate-500 tracking-[0.2em] uppercase">Group</span>
            </div>

            <div class="hidden md:flex space-x-9 font-bold text-slate-600">
                <a href="index.php" class="hover:text-blue-700 transition text-sm">Home</a>
                <a href="product.php" class="hover:text-blue-700 transition text-sm">Product</a>
                <a href="about.php" class="hover:text-blue-700 transition text-sm">About Us</a>
                <a href="contact.php" class="text-blue-700 transition text-sm">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="https://wa.me/6282188253433" class="hidden sm:inline-flex bg-blue-700 text-white px-5 py-2.5 rounded-xl font-bold hover:bg-blue-800 shadow-xl shadow-blue-200 text-sm transition-all active:scale-95">
                    Hubungi Kami
                </a>
                <button id="menu-btn" class="md:hidden text-blue-800 text-2xl p-2.5 focus:outline-none transition-transform active:scale-90">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="absolute top-16 left-0 w-full bg-white border-b border-slate-200 shadow-2xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Home</a>
                <a href="product.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Product</a>
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100/70 text-blue-700">Contact</a>
                <a href="https://wa.me/6282169169700" class="bg-blue-700 text-white p-4 rounded-xl text-center shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <section class="relative pt-32 md:pt-44 pb-24 md:pb-36 px-5 overflow-hidden bg-slate-900 min-h-[92vh] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center hero-img-bg" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19480c5?q=80&w=2070&auto=format&fit=crop');"></div>
            <div class="absolute inset-0 hero-image-overlay"></div>
        </div>
        
        <div class="max-w-4xl mx-auto relative z-10 w-full flex flex-col items-center" data-aos="fade-up">
            <div class="text-white w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="inline-block px-3 py-1 bg-blue-600/30 border border-blue-500/30 rounded-full text-blue-300 text-[9px] md:text-[11px] font-black mb-6 uppercase tracking-widest mx-auto">
                    Contact Us
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 uppercase italic tracking-tight text-white px-2 leading-none">
                    REGINA AL <span class="text-blue-500">BARAKAH</span> GROUP
                </h1>
                
                <p class="text-sm md:text-base text-slate-300 mb-8 max-w-2xl mx-auto leading-relaxed font-light px-4 italic opacity-90">
                    "Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya."
                </p>

                <div class="flex flex-col gap-3.5 max-w-md mx-auto w-full px-6 mb-8">
                    <a href="#contact-start" class="group bg-blue-600 hover:bg-blue-700 text-white py-3.5 px-6 rounded-xl font-bold transition-all shadow-lg shadow-blue-600/20 active:scale-95 text-sm md:text-base flex items-center justify-center gap-2">
                        HUBUNGI PUSAT
                        <i class="fas fa-arrow-down ml-1 text-xs transition-transform duration-300 group-hover:translate-y-1"></i>
                    </a>
                </div>

                <p class="text-[11px] md:text-xs text-slate-400 font-medium tracking-wide">
                    Melayani wilayah: Kabupaten Buton • Bau-Bau • dan sekitarnya
                </p>
                
                <a href="#contact-start" class="mt-8 block animate-bounce text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-chevron-down text-lg"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="contact-start" class="scroll-mt-24">
        <div class="contact-container">
            <div class="premium-card" data-aos="fade-up">
                <div class="min-h-[400px] bg-slate-100">
                    <iframe 
                        src="https://maps.google.com/maps?q=Bau-Bau,%20Buton&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <div class="info-pane">
                    <div class="mb-8">
                        <h2 class="text-2xl font-black italic uppercase tracking-tighter text-slate-900 leading-none">Informasi Pusat</h2>
                        <div class="w-8 h-1 bg-blue-500 mt-3"></div>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="info-item">
                            <div class="icon-luxury"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <span class="text-[9px] font-black uppercase tracking-widest text-blue-700 block mb-1">Alamat Kantor</span>
                                <p class="text-[13px] font-bold text-slate-800 italic leading-snug">
                                    Jl. Raya Trans Sulawesi, Bau-Bau,<br>
                                    Buton, Sulawesi Tenggara.
                                </p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-luxury"><i class="fas fa-envelope"></i></div>
                            <div>
                                <span class="text-[9px] font-black uppercase tracking-widest text-blue-700 block mb-1">Email Support</span>
                                <p class="text-[13px] font-black text-blue-800 italic">info@reginaalbarakah.com</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="icon-luxury"><i class="fab fa-whatsapp"></i></div>
                            <div>
                                <span class="text-[9px] font-black uppercase tracking-widest text-blue-700 block mb-1">WhatsApp Center</span>
                                <div class="space-y-0.5">
                                    <a href="https://wa.me/6282188253433" class="text-base font-black text-slate-900 italic hover:text-blue-700 block">+62 821-8825-3433</a>
                                    <a href="https://wa.me/6282188253433" class="text-base font-black text-slate-900 italic hover:text-blue-700 block">+62 812-4220-7221</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-6 border-t border-slate-100">
                            <div class="flex items-center gap-3">
                                <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest italic">Operational:</span>
                                <span class="text-[10px] font-black text-blue-900 uppercase">Senin - Sabtu | 08:00 - 17:00 WITA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="relative bg-slate-900 overflow-hidden text-white mt-20">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover opacity-20" alt="Footer BG">
            <div class="absolute inset-0 footer-bg-overlay"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
                <div>
                    <div class="flex items-center gap-3 mb-6">
                         <div class="bg-blue-600 p-2 rounded-lg">
                            <i class="fas fa-hard-hat text-white text-xl"></i>
                         </div>
                         <h2 class="text-xl font-black tracking-tighter uppercase italic">Regina Al Barakah Group</h2>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all"><i class="fab fa-tiktok text-xs"></i></a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all"><i class="fab fa-instagram text-xs"></i></a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all"><i class="fab fa-youtube text-xs"></i></a>
                    </div>
                </div>

                <div class="md:pl-10">
                    <h3 class="text-sm font-black uppercase italic tracking-widest mb-6 text-blue-500">Menu Utama</h3>
                    <ul class="space-y-3 text-slate-400 text-[13px] font-bold">
                        <li><a href="index.php" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-white transition">Produk</a></li>
                        <li><a href="about.php" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-black uppercase italic tracking-widest mb-6 text-blue-500">Hubungi Kami</h3>
                    <ul class="space-y-4 text-slate-400 text-[13px]">
                        <li class="flex gap-3">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1"></i>
                            <span class="font-bold">Jl. Raya Trans Sulawesi, Bau-Bau, Buton.</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fas fa-phone-alt text-blue-500 mt-1"></i>
                            <span class="font-bold">0821-6916-9700</span>
                        </li>
                    </ul>
                    <a href="https://wa.me/6282188253433" class="mt-6 bg-green-600/90 hover:bg-green-600 text-white px-5 py-3 rounded-xl font-black text-[10px] flex items-center justify-center gap-2 transition-all active:scale-95">
                        <i class="fab fa-whatsapp text-base"></i> WHATSAPP KAMI
                    </a>
                </div>
            </div>

            <div class="mt-20 pt-8 border-t border-white/5 text-center">
                <div class="space-y-1">
                    <p class="text-[10px] text-slate-500 font-bold tracking-[0.2em] uppercase">
                        © 2026 Regina Al Barakah Group
                    </p>
                    <p class="text-[9px] text-slate-600 font-medium">
                        Layanan Scaffolding Terpercaya di Sulawesi Tenggara.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="wa-menu" class="fixed bottom-24 right-6 bg-white border border-slate-200/80 rounded-2xl shadow-2xl p-4 z-[1000] hidden w-64 transform transition-all duration-300 scale-95 opacity-0 origin-bottom-right">
        <p class="text-xs font-black text-slate-500 uppercase tracking-wider mb-3 px-1 italic">Pilih Admin Chat:</p>
        <div class="flex flex-col gap-2">
            <a href="https://wa.me/6282188253433" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 hover:bg-green-50 rounded-xl transition border border-slate-100 group">
                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center text-white text-sm"><i class="fas fa-user-tie"></i></div>
                <div>
                    <h5 class="font-black text-xs text-slate-800 uppercase tracking-wide group-hover:text-green-600 transition">Admin 1</h5>
                    <p class="text-[10px] text-slate-400 font-medium">Layanan Utama</p>
                </div>
            </a>
            <a href="https://wa.me/6282188253433" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 hover:bg-green-50 rounded-xl transition border border-slate-100 group">
                <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center text-white text-sm"><i class="fas fa-user-cog"></i></div>
                <div>
                    <h5 class="font-black text-xs text-slate-800 uppercase tracking-wide group-hover:text-green-600 transition">Admin 2</h5>
                    <p class="text-[10px] text-slate-400 font-medium">Layanan Alternatif</p>
                </div>
            </a>
        </div>
    </div>

    <div id="wa-toggle" class="wa-float"><i class="fab fa-whatsapp"></i></div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- LINK FILE JS EKSTERNAL -->
     <script src="../assets/js/contact.js"></script>
</body>
</html>
