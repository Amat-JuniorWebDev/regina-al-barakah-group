<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tentang Kami | Regina Al Barakah Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Hubungkan Ke File CSS Baru -->
    <link rel="stylesheet" href="../assets/css/about.css">
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
                <a href="about.php" class="text-blue-700 transition text-sm">About Us</a>
                <a href="contact.php" class="hover:text-blue-700 transition text-sm">Contact</a>
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
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100/70 text-blue-700">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-blue-700 text-white p-4 rounded-xl text-center shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (Disamakan persis dengan contact.php) -->
    <section class="relative pt-32 md:pt-44 pb-24 md:pb-36 px-5 overflow-hidden bg-slate-900 min-h-[92vh] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center hero-img-bg" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19480c5?q=80&w=2070&auto=format&fit=crop');"></div>
            <div class="absolute inset-0 hero-image-overlay"></div>
        </div>
        
        <div class="max-w-4xl mx-auto relative z-10 w-full flex flex-col items-center" data-aos="fade-up">
            <div class="text-white w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="inline-block px-3 py-1 bg-blue-600/30 border border-blue-500/30 rounded-full text-blue-300 text-[9px] md:text-[11px] font-black mb-6 uppercase tracking-widest mx-auto">
                    Tentang Kami
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 uppercase italic tracking-tight text-white px-2 leading-none">
                    REGINA AL <span class="text-blue-500">BARAKAH</span> GROUP
                </h1>
                
                <p class="text-sm md:text-base text-slate-300 mb-8 max-w-2xl mx-auto leading-relaxed font-light px-4 italic opacity-90">
                    "Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya."
                </p>

                <div class="flex flex-col gap-3.5 max-w-md mx-auto w-full px-6 mb-8">
                    <a href="#about-profile" class="group bg-blue-600 hover:bg-blue-700 text-white py-3.5 px-6 rounded-xl font-bold transition-all shadow-lg shadow-blue-600/20 active:scale-95 text-sm md:text-base flex items-center justify-center gap-2">
                        DEDIKASI KAMI
                        <i class="fas fa-arrow-down ml-1 text-xs transition-transform duration-300 group-hover:translate-y-1"></i>
                    </a>
                </div>

                <p class="text-[11px] md:text-xs text-slate-400 font-medium tracking-wide">
                    Melayani wilayah: Kabupaten Buton • Bau-Bau • dan sekitarnya
                </p>
                
                <a href="#about-profile" class="mt-8 block animate-bounce text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-chevron-down text-lg"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="about-profile" class="py-16 md:py-24 px-5 bg-white relative overflow-hidden scroll-mt-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 md:gap-14 items-center">
            <div class="relative" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&q=80" class="rounded-[2rem] shadow-xl w-full h-72 md:h-[450px] object-cover" alt="Proyek">
                <div class="absolute -bottom-4 -right-4 md:-right-6 bg-blue-770 bg-blue-700 text-white p-5 md:p-8 rounded-2xl shadow-xl">
                    <span class="block text-2xl md:text-3xl font-black italic leading-none">2021</span>
                    <span class="text-[9px] md:text-[10px] font-bold uppercase tracking-widest opacity-80">Established</span>
                </div>
            </div>
            <div class="space-y-4 md:space-y-6" data-aos="fade-left">
                <div class="inline-flex items-center gap-2">
                    <div class="w-8 h-[2px] bg-blue-600"></div>
                    <span class="text-blue-600 font-black tracking-[0.3em] uppercase text-[9px] md:text-[10px] italic">Company Profile</span>
                </div>
                <h2 class="text-2xl md:text-4xl font-black uppercase italic tracking-tighter text-slate-900 leading-tight">
                    Dedikasi Penuh Sejak Tahun 2021
                </h2>
                <div class="space-y-4 text-slate-600 text-xs md:text-base font-light leading-relaxed">
                    <p>
                        Berdiri sejak tahun <strong>2021</strong>, <strong>Regina Al Barakah Group</strong> hadir sebagai pionir penyedia jasa sewa dan penjualan scaffolding profesional di wilayah Kabupaten Buton dan sekitarnya.
                    </p>
                    <p>
                        Kami memahami bahwa keamanan kerja adalah aset utama dalam konstruksi. Oleh karena itu, kami konsisten menyediakan material berkualitas tinggi yang telah dipercaya oleh berbagai pengembang di <strong>Sulawesi Tenggara</strong>.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-100">
                    <div>
                        <span class="block text-xl md:text-2xl font-black text-blue-700 italic leading-none">5+</span>
                        <span class="text-[9px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest">Tahun Berjalan</span>
                    </div>
                    <div>
                        <span class="block text-xl md:text-2xl font-black text-blue-700 italic leading-none">100%</span>
                        <span class="text-[9px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest">Material Safety</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50 px-5">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8">
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl border border-slate-100" data-aos="fade-up">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6 text-xl shadow-lg shadow-blue-200">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-2xl font-black uppercase italic mb-4 text-slate-900 tracking-tight">Visi Kami</h3>
                <p class="text-slate-500 leading-relaxed font-light text-sm md:text-base italic">
                    "Menjadi pusat penyedia layanan scaffolding nomor satu di Sulawesi Tenggara yang mengedepankan keamanan material dan kepuasan pelanggan melalui integritas kerja."
                </p>
            </div>
            <div class="bg-white p-8 md:p-12 rounded-[2.5rem] shadow-xl border border-slate-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-6 text-xl shadow-lg shadow-blue-200">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-black uppercase italic mb-4 text-slate-900 tracking-tight">Misi Kami</h3>
                <ul class="space-y-4 text-slate-500 font-light text-sm md:text-base">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span>Menyediakan produk scaffolding dengan kualitas material standar nasional (SNI).</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span>Memberikan penawaran harga sewa yang paling kompetitif dan transparan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-blue-600 mt-1"></i>
                        <span>Menjamin ketepatan waktu pengiriman material langsung ke lokasi proyek.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-white px-5">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-blue-600 font-black tracking-[0.3em] uppercase text-[10px] italic block mb-4">Our Core Values</span>
                <h2 class="text-3xl md:text-5xl font-black uppercase italic tracking-tighter text-slate-900 leading-none">Prinsip & Nilai Kami</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-shield-alt text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Keamanan Tanpa Kompromi</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Kami memastikan setiap unit scaffolding telah melalui uji kelayakan beban standar nasional.</p>
                </div>
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up" data-aos-delay="50">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-hand-holding-usd text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Integritas Harga</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Transparansi dalam biaya sewa dan penjualan tanpa ada biaya tersembunyi bagi pelanggan kami.</p>
                </div>
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-truck-loading text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Efisiensi Logistik</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Ketepatan waktu pengiriman material ke lokasi proyek adalah prioritas dalam setiap layanan.</p>
                </div>
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-sync-alt text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Keberlanjutan</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Berinovasi meningkatkan stok dan kualitas layanan mengikuti teknologi konstruksi terbaru.</p>
                </div>
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Fokus Pelanggan</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Memberikan konsultasi dan solusi scaffolding yang paling tepat guna bagi anggaran Anda.</p>
                </div>
                <div class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl transition-all hover:-translate-y-2" data-aos="fade-up" data-aos-delay="250">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i class="fas fa-award text-xl"></i>
                    </div>
                    <h3 class="text-lg font-black uppercase italic text-slate-900 mb-3 tracking-tight">Profesionalisme</h3>
                    <p class="text-slate-500 text-sm leading-relaxed font-light">Didukung oleh tim admin dan teknisi lapangan yang responsif dan ahli di bidangnya.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-slate-50 px-5">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-blue-600 font-black tracking-[0.3em] uppercase text-[10px] italic block mb-4">Why Choose Us</span>
                <h2 class="text-3xl md:text-5xl font-black uppercase italic tracking-tighter text-slate-900 leading-none">Keunggulan Layanan Kami</h2>
                <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="choose-card p-8 rounded-[2rem] bg-white" data-aos="fade-up">
                    <div class="text-blue-600 text-3xl mb-6"><i class="fas fa-check-double"></i></div>
                    <h4 class="text-lg font-black uppercase italic mb-3 text-slate-900">Kualitas Terjamin</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">Material pipa kokoh, presisi, dan sangat aman digunakan untuk beban berat.</p>
                </div>
                <div class="choose-card p-8 rounded-[2rem] bg-white" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-blue-600 text-3xl mb-6"><i class="fas fa-truck-fast"></i></div>
                    <h4 class="text-lg font-black uppercase italic mb-3 text-slate-900">Fast Delivery</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">Respon cepat and pengiriman tepat waktu menggunakan armada logistik internal.</p>
                </div>
                <div class="choose-card p-8 rounded-[2rem] bg-white" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-blue-600 text-3xl mb-6"><i class="fas fa-wallet"></i></div>
                    <h4 class="text-lg font-black uppercase italic mb-3 text-slate-900">Harga Terbaik</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">Sistem harga sewa bulanan yang sangat ekonomis untuk menghemat budget proyek.</p>
                </div>
                <div class="choose-card p-8 rounded-[2rem] bg-white" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-blue-600 text-3xl mb-6"><i class="fas fa-headset"></i></div>
                    <h4 class="text-lg font-black uppercase italic mb-3 text-slate-900">Full Support</h4>
                    <p class="text-slate-500 text-sm font-light leading-relaxed">Tim teknisi dan admin yang siap membantu konsultasi kebutuhan proyek Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28 bg-slate-900 text-white px-5 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="md:w-1/2 w-full text-center md:text-left" data-aos="fade-right">
                <span class="text-blue-500 font-black tracking-widest text-[10px] md:text-[11px] uppercase italic">Service Area</span>
                <h2 class="text-3xl md:text-6xl font-black uppercase italic tracking-tighter mt-4 mb-6">Area Operasional</h2>
                <p class="text-slate-400 mb-8 text-sm md:text-lg font-light leading-relaxed">
                    Kami memfokuskan layanan logistik untuk menjangkau seluruh pelosok Sulawesi Tenggara:
                </p>
                <div class="grid grid-cols-2 gap-3 md:gap-4 text-left">
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                        <span class="font-bold uppercase italic text-[10px] md:text-sm">Kota Bau-Bau</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                        <span class="font-bold uppercase italic text-[10px] md:text-sm">Kab. Buton</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                        <span class="font-bold uppercase italic text-[10px] md:text-sm">Buton Selatan</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 p-4 rounded-xl border border-white/10">
                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                        <span class="font-bold uppercase italic text-[10px] md:text-sm">Seluruh Sultra</span>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 w-full" data-aos="fade-left">
                <div class="relative z-10 bg-blue-700/10 border border-blue-500/20 p-8 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] backdrop-blur-sm text-center">
                    <h4 class="text-2xl font-black italic uppercase mb-4 text-blue-400">Hubungi Cabang</h4>
                    <p class="text-sm text-slate-300 leading-relaxed mb-8 italic">"Siap melayani kebutuhan scaffolding proyek Anda hari ini dengan pengiriman langsung."</p>
                    <a href="contact.php" class="inline-block w-full md:w-auto bg-blue-600 text-white px-10 py-4 rounded-xl font-black uppercase text-[11px] tracking-widest hover:bg-blue-700 transition shadow-xl shadow-blue-900/30">Dapatkan Penawaran</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="relative bg-slate-900 overflow-hidden text-white">
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
                            <span class="font-bold">0821-8825-3433</span>
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

    <a href="https://wa.me/6282188253433" class="wa-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- SCRIPT UTAMA -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Panggil file JS about dari folder assets/js -->
    <script src="../assets/js/about.js"></script>
</body>
</html>
