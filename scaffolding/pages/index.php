<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Regina Al Barakah Group | Solusi Scaffolding & Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Regina Al Barakah Group | Solusi Scaffolding & Konstruksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Panggil file CSS yang sudah disatukan tadi (Sesuaikan path foldernya) -->
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-blue-100/60 selection:text-blue-900">

    <!-- NAVBAR -->
    <nav class="glass-nav fixed w-full z-[100] top-0 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-5 md:px-6 h-16 md:h-20 flex items-center justify-between">
            <div class="flex flex-col cursor-pointer transition-opacity hover:opacity-80" onclick="window.location.href='index.php'">
                <span class="text-lg md:text-2xl font-black text-blue-800 leading-none tracking-tight uppercase">REGINA AL BARAKAH</span>
                <span class="text-[9px] md:text-xs font-bold text-slate-500 tracking-[0.2em] uppercase">Group</span>
            </div>

            <div class="hidden md:flex space-x-9 font-bold text-slate-600">
                <a href="index.php" class="text-blue-700 transition text-sm">Home</a>
                <a href="product.php" class="hover:text-blue-700 transition text-sm">Product</a>
                <a href="about.php" class="hover:text-blue-700 transition text-sm">About Us</a>
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

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="absolute top-16 left-0 w-full bg-white border-b border-slate-200 shadow-2xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-3 border-b border-slate-100/70 text-blue-700">Home</a>
                <a href="product.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Product</a>
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-blue-700 text-white p-4 rounded-xl text-center shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative pt-32 md:pt-48 pb-20 md:pb-28 px-5 overflow-hidden bg-slate-900 min-h-[85vh] flex items-center justify-center text-center">
        <div class="absolute inset-0 opacity-25">
            <img src="https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover hero-zoom" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-slate-900/40"></div>
        </div>
        <div class="max-w-4xl mx-auto relative z-10 w-full flex flex-col items-center">
            <div class="text-white w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="inline-block px-3 py-1 bg-blue-600/30 border border-blue-500/30 rounded-full text-blue-300 text-[9px] md:text-[11px] font-black mb-6 uppercase tracking-widest mx-auto">
                    Penyedia Scaffolding Terpercaya
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight tracking-tight px-2">
                    Konstruksi Kokoh, <br><span class="text-blue-500">Hasil Maksimal.</span>
                </h1>
                
                <p class="text-sm md:text-base text-slate-300 mb-8 max-w-2xl mx-auto leading-relaxed font-light px-4">
                    Kami menyediakan layanan sewa dan jual scaffolding standar industri untuk keamanan infrastruktur proyek Anda.
                </p>
                
                <div class="flex flex-col gap-3.5 max-w-md mx-auto w-full px-6 mb-8">
                    <a href="product.php" class="bg-blue-600 hover:bg-blue-700 text-white py-3.5 px-6 rounded-xl font-bold transition-all shadow-lg shadow-blue-600/20 active:scale-95 text-sm md:text-base flex items-center justify-center gap-2">
                        LIHAT KATALOG
                    </a>
                    <a href="about.php" class="bg-transparent text-white py-3.5 px-6 rounded-xl font-bold border-2 border-white/20 hover:bg-white/10 transition-all active:scale-95 text-sm md:text-base flex items-center justify-center gap-2">
                        PROFIL KAMI
                    </a>
                </div>

                <p class="text-[11px] md:text-xs text-slate-400 font-medium tracking-wide">
                    Melayani wilayah: Kabupaten Buton • Bau-Bau • dan sekitarnya
                </p>
                
                <div class="mt-8 animate-bounce text-slate-400">
                    <i class="fas fa-chevron-down text-lg"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS COUNTER -->
    <section class="relative z-20 -mt-10 max-w-6xl mx-auto px-4" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white shadow-xl shadow-slate-200/50 rounded-[2rem] flex flex-wrap md:flex-nowrap items-center justify-between p-6 md:p-10 border border-slate-100">
            <div class="w-1/2 md:w-full text-center p-2 group">
                <div class="text-3xl md:text-5xl font-black text-blue-700 mb-1 italic group-hover:scale-105 transition-transform">7+</div>
                <div class="text-[8px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Tahun Pengalaman</div>
            </div>
            <div class="stats-divider"></div>
            <div class="w-1/2 md:w-full text-center p-2 group">
                <div class="text-3xl md:text-5xl font-black text-blue-700 mb-1 italic group-hover:scale-105 transition-transform">1000+</div>
                <div class="text-[8px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Unit Ready</div>
            </div>
            <div class="stats-divider"></div>
            <div class="w-1/2 md:w-full text-center p-2 group mt-4 md:mt-0">
                <div class="text-3xl md:text-5xl font-black text-blue-700 mb-1 italic group-hover:scale-105 transition-transform">500+</div>
                <div class="text-[8px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Klien Puas</div>
            </div>
            <div class="stats-divider"></div>
            <div class="w-1/2 md:w-full text-center p-2 group mt-4 md:mt-0">
                <div class="text-3xl md:text-5xl font-black text-blue-700 mb-1 italic group-hover:scale-105 transition-transform">24/7</div>
                <div class="text-[8px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Layanan</div>
            </div>
        </div>
    </section>

    <!-- FEATURES / ADVANTAGES -->
    <section class="py-20 md:py-28 px-5">
        <div class="max-w-7xl mx-auto text-center mb-16" data-aos="fade-up">
            <h2 class="text-2xl md:text-4xl font-extrabold text-slate-900 mb-4 uppercase italic tracking-tight">Layanan Unggulan</h2>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
            <div class="macos-card p-9 bg-white rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-7">
                    <i class="fas fa-shield-alt text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold mb-3 italic uppercase text-slate-800 tracking-tight">SAFETY FIRST</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Inspeksi kelayakan ketat untuk menjamin keamanan pekerja di ketinggian proyek.</p>
            </div>
            <div class="macos-card p-9 bg-white rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-7">
                    <i class="fas fa-hand-holding-usd text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold mb-3 italic uppercase text-slate-800 tracking-tight">HARGA BERSAHABAT</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Sewa fleksibel harian/bulanan dengan penawaran harga paling kompetitif.</p>
            </div>
            <div class="macos-card p-9 bg-white rounded-3xl border border-slate-100 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-7">
                    <i class="fas fa-shipping-fast text-3xl text-blue-600"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold mb-3 italic uppercase text-slate-800 tracking-tight">PENGIRIMAN CEPAT</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Armada kami siap antar material langsung ke lokasi proyek Anda tepat waktu.</p>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 md:py-28 px-5 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12 md:gap-20">
            <div class="w-full md:w-1/2" data-aos="fade-right">
               <img src="../assets/image/kantor.jpg" class="rounded-[2rem] shadow-2xl w-full h-72 md:h-auto object-cover transform hover:scale-[1.03] transition-transform duration-700" alt="About">
            <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
              <span class="block mt-6 text-blue-600 font-bold uppercase text-xs italic tracking-widest">Tentang Kami</span>
                <h2 class="text-2xl md:text-4xl font-extrabold my-5 uppercase italic text-slate-900 leading-tight">Regina <br>Al Barakah Group</h2>
                <p class="text-slate-600 text-base md:text-lg mb-8 leading-relaxed font-light">
                    Berdiri dengan semangat mendukung infrastruktur, kami focus menyediakan material scaffolding berkualitas yang mengutamakan keselamatan di wilayah Kabupaten Buton dan sekitarnya.
                </p>
                <div class="space-y-4 text-left max-w-md mx-auto md:mx-0">
                    <div class="flex items-center gap-3.5 p-4 bg-slate-50 rounded-2xl border-l-4 border-blue-600">
                        <i class="fas fa-check-circle text-blue-600 flex-shrink-0"></i>
                        <span class="font-bold text-sm md:text-base text-slate-700">Material Baja Bersertifikat SNI</span>
                    </div>
                    <div class="flex items-center gap-3.5 p-4 bg-slate-50 rounded-2xl border-l-4 border-blue-600">
                        <i class="fas fa-check-circle text-blue-600 flex-shrink-0"></i>
                        <span class="font-bold text-sm md:text-base text-slate-700">Tim Ahli Bongkar Pasang Profesional</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT PREVIEW SECTION -->
    <section class="py-20 md:py-28 px-5">
        <div class="max-w-7xl mx-auto text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-bold uppercase text-xs italic tracking-widest">Katalog Produk</span>
            <h2 class="text-2xl md:text-4xl font-extrabold mt-3 mb-4 uppercase italic tracking-tight text-slate-900">Produk Utama</h2>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
            <?php
            $preview_products = [
                ['name' => 'Jack Base T60', 'cat' => 'Aksesoris Kaki', 'desc' => 'Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.', 'image' => 'jb60.jpg'],
                ['name' => 'Scaffolding T170', 'cat' => 'Frame Utama', 'desc' => 'Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.', 'image' => 'mf17.jpg'],
                ['name' => 'Catwalk', 'cat' => 'Platform', 'desc' => 'Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.', 'image' => 'catwalk.jpg'],
                ['name' => 'Roda Nylon 6 Inch', 'cat' => 'Aksesoris Mobilisasi', 'desc' => 'Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.', 'image' => 'roda6.jpg'],
            ];

            foreach($preview_products as $index => $p): 
                // Diubah menjadi ../assets/image/ karena file index.php ada di dalam folder pages/
                $imgSrc = "../assets/image/" . $p['image'];
                $fallbackSrc = "https://via.placeholder.com/600x800?text=" . urlencode($p['name']);
            ?>
            <div class="macos-card bg-white rounded-[2rem] border border-slate-100 overflow-hidden flex flex-col group shadow-sm" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <div class="h-48 md:h-52 bg-slate-200 overflow-hidden relative cursor-pointer" onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')">
                    <img src="<?= $imgSrc ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='<?= $fallbackSrc ?>'" alt="<?= $p['name'] ?>">
                    <div class="absolute top-4 left-4 bg-blue-600/80 backdrop-blur-md px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest z-10">
                        <?= $p['cat'] ?>
                    </div>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="font-black text-base text-slate-800 mb-2 italic uppercase tracking-tight cursor-pointer hover:text-blue-700 transition-colors" onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')"><?= $p['name'] ?></h3>
                    <p class="text-slate-500 text-xs leading-relaxed mb-4 flex-grow"><?= $p['desc'] ?></p>
                    
                    <button onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')" 
                       class="flex items-center justify-center gap-2 bg-slate-900 text-white py-3.5 rounded-2xl font-bold hover:bg-blue-700 transition-all duration-300 uppercase text-[10px] tracking-[0.15em] shadow-lg active:scale-95 w-full">
                        <i class="fas fa-info-circle text-sm"></i> Lihat Selengkapnya
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12 md:mt-16" data-aos="fade-up">
            <a href="product.php" class="inline-flex items-center gap-3 bg-blue-600 hover:bg-blue-800 text-white font-black text-xs md:text-sm py-4 px-10 rounded-2xl shadow-xl shadow-blue-200 uppercase tracking-widest transition-all active:scale-95 group">
                Lihat Katalog Selengkapnya <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1.5"></i>
            </a>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 md:py-28 px-5 bg-white">
        <div class="max-w-7xl mx-auto text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-bold uppercase text-xs italic tracking-widest">Hubungi Kami</span>
            <h2 class="text-2xl md:text-4xl font-extrabold mt-3 mb-4 uppercase italic tracking-tight text-slate-900">Kontak Informasi</h2>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="bg-blue-600 text-white w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-xl shadow-lg shadow-blue-200">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-800 uppercase text-xs tracking-wider mb-1">Alamat Kantor</h4>
                        <p class="text-slate-600 text-sm font-bold">Jl. Raya Trans Sulawesi, Bau-Bau, Buton, Sulawesi Tenggara.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="bg-blue-600 text-white w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-xl shadow-lg shadow-blue-200">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-800 uppercase text-xs tracking-wider mb-1">Nomor Telepon / WA</h4>
                        <p class="text-slate-600 text-sm font-bold">0821-8825-3433</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                    <div class="bg-blue-600 text-white w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 text-xl shadow-lg shadow-blue-200">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-800 uppercase text-xs tracking-wider mb-1">Jam Operasional</h4>
                        <p class="text-slate-600 text-sm font-bold">Senin - Sabtu: 08.00 - 17.00 WITA</p>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900 rounded-[2rem] p-8 md:p-10 text-white text-center shadow-2xl relative overflow-hidden" data-aos="fade-left">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/10 rounded-full blur-3xl"></div>
                <i class="fab fa-whatsapp text-6xl text-green-400 mb-6 block animate-bounce"></i>
                <h3 class="text-xl md:text-2xl font-black uppercase italic tracking-tight mb-4">Konsultasi via WhatsApp</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-8 font-light">
                    Butuh penawaran harga khusus proyek skala besar atau tanya ketersediaan stok komponen scaffolding? Chat CS kami sekarang.
                </p>
                <a href="https://wa.me/6282188253433?text=Halo%20Regina%20Al%20Barakah,%20saya%20ingin%20konsultasi%20mengenai%20sewa%20scaffolding" class="block bg-green-500 hover:bg-green-600 text-white py-4 px-6 rounded-xl font-black uppercase text-xs tracking-widest shadow-lg shadow-green-500/20 transition-all active:scale-95">
                    Mulai Chat Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-20 md:py-28 px-5 bg-slate-50">
        <div class="max-w-7xl mx-auto text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-bold uppercase text-xs italic tracking-widest">Pertanyaan Umum</span>
            <h2 class="text-2xl md:text-4xl font-extrabold mt-3 mb-4 uppercase italic tracking-tight text-slate-900">F.A.Q</h2>
            <div class="w-20 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <div class="faq-item bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all" data-aos="fade-up">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between font-bold text-sm md:text-base text-slate-800 focus:outline-none">
                    <span>Bagaimana sistem pembayaran sewa scaffolding di Regina Al Barakah Group?</span>
                    <i class="fas fa-chevron-down faq-chevron text-blue-600 ml-4"></i>
                </button>
                <div class="faq-answer px-6 bg-slate-50/50">
                    <p class="py-4 text-slate-600 text-xs md:text-sm leading-relaxed">
                        Sistem pembayaran sewa dilakukan di awal masa sewa bersamaan dengan tanda tangan kontrak penyerahan unit barang, bisa melalui transfer bank atau cash di kantor.
                    </p>
                </div>
            </div>

            <div class="faq-item bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between font-bold text-sm md:text-base text-slate-800 focus:outline-none">
                    <span>Apakah melayani pengantaran material scaffolding langsung ke lokasi proyek?</span>
                    <i class="fas fa-chevron-down faq-chevron text-blue-600 ml-4"></i>
                </button>
                <div class="faq-answer px-6 bg-slate-50/50">
                    <p class="py-4 text-slate-600 text-xs md:text-sm leading-relaxed">
                        Ya, kami memiliki armada pengiriman tersendiri yang siap mengantarkan material scaffolding langsung ke alamat proyek Anda di seluruh area Kabupaten Buton dan sekitarnya dengan tarif menyesuaikan jarak lokasi.
                    </p>
                </div>
            </div>

            <div class="faq-item bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden transition-all" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-toggle w-full px-6 py-5 text-left flex items-center justify-between font-bold text-sm md:text-base text-slate-800 focus:outline-none">
                    <span>Apakah ada minimal durasi peminjaman atau jumlah set?</span>
                    <i class="fas fa-chevron-down faq-chevron text-blue-600 ml-4"></i>
                </button>
                <div class="faq-answer px-6 bg-slate-50/50">
                    <p class="py-4 text-slate-600 text-xs md:text-sm leading-relaxed">
                        Kami sangat fleksibel, melayani penyewaan baik skala kecil per-set untuk renovasi rumah tinggal hingga kuantitas besar ribuan set untuk konstruksi bangunan bertingkat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/6282188253433" class="wa-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- FOOTER -->
    <footer class="relative bg-slate-900 overflow-hidden text-white mt-20">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1513828583688-c52646db42da?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover opacity-20" alt="Footer BG">
            <div class="absolute inset-0 footer-bg-overlay"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
                <!-- Brand Info Section -->
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

                <!-- Navigation Section -->
                <div class="md:pl-10">
                    <h3 class="text-sm font-black uppercase italic tracking-widest mb-6 text-blue-500">Menu Utama</h3>
                    <ul class="space-y-3 text-slate-400 text-[13px] font-bold">
                        <li><a href="index.php" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-white transition">Produk</a></li>
                        <li><a href="about.php" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact & Button Section -->
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

            <!-- Copyright Border & Text (Menyesuaikan dengan product.php) -->
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

    <!-- 1. MODAL DETAIL PRODUK -->
    <div id="productModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-[200] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-[2.5rem] max-w-md w-full overflow-hidden shadow-2xl border border-slate-100 transform scale-90 transition-transform duration-300 relative flex flex-col max-h-[90vh]">
            
            <!-- Tombol Close Atas Kanan -->
            <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-slate-900/60 text-white w-9 h-9 rounded-full flex items-center justify-center hover:bg-slate-900 transition-colors z-30 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Area Gambar -->
            <div class="h-56 bg-slate-100 relative overflow-hidden flex-shrink-0">
                <img id="modalImg" src="" class="w-full h-full object-cover" alt="">
                <div id="modalCat" class="absolute bottom-4 left-4 bg-blue-600 px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest"></div>
            </div>
            
            <!-- Area Teks (Scrollable jika teks panjang) -->
            <div class="p-6 md:p-8 overflow-y-auto flex-grow text-left">
                <h3 id="modalName" class="text-xl md:text-2xl font-black text-slate-900 mb-3 uppercase italic tracking-tight"></h3>
                <div class="w-12 h-1 bg-blue-600 rounded-full mb-4"></div>
                <p id="modalDesc" class="text-slate-600 text-xs md:text-sm leading-relaxed font-light"></p>
            </div>
            
        <!-- Area Teks (pt-0 dibuat nol agar teks langsung mepet ke bawah batas gambar) -->
            <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex flex-col">
                
                <h3 id="modal-title" class="font-black text-xl sm:text-2xl text-slate-900 mb-2 italic uppercase tracking-tight leading-tight"></h3>
                <p id="modal-desc" class="text-slate-500 text-sm leading-relaxed mb-6"></p>
                
                <!-- Grid Tombol Utama -->
                <div class="grid grid-cols-2 gap-4">
                    <button onclick="closeProductModal()" class="border border-slate-200 bg-white text-slate-700 py-3.5 rounded-xl font-black hover:bg-slate-50 transition-colors uppercase text-[11px] tracking-widest shadow-sm">
                        Tutup
                    </button>
                    <a id="modal-wa-btn" href="" target="_blank" class="bg-emerald-600 text-white py-3.5 rounded-xl font-black hover:bg-emerald-700 transition-colors uppercase text-[11px] tracking-widest flex items-center justify-center gap-2 shadow-sm">
                        <i class="fab fa-whatsapp text-sm"></i> Hubungi Kami
                    </a>
                </div>
                
                <!-- Pembatas Garis Tipis & Tombol Lihat Gambar -->
                <div class="mt-6 pt-5 border-t border-slate-100 flex justify-center">
                    <button id="modal-view-full" onclick="openImagePopup()" class="text-blue-600 hover:text-blue-800 font-black text-[11px] tracking-widest uppercase flex items-center gap-2 focus:outline-none">
                        <i class="fas fa-eye text-xs"></i> Lihat Gambar Full Standar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- 2. MODAL LIGHTBOX GAMBAR FULL (ZOOMABLE) -->
    <div id="imageFullModal" class="fixed inset-0 bg-slate-950/95 z-[300] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="max-w-full relative transform scale-90 transition-transform duration-300">
            <button onclick="closeImageModal()" class="absolute -top-12 right-0 text-white text-3xl hover:text-slate-300 transition-colors focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalFullImg" src="" class="max-w-full max-h-[80vh] object-contain rounded-2xl shadow-2xl border border-white/5" alt="">
        </div>
    </div>

    <!-- SCRIPT UTAMA -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Panggil file JS dari folder assets/js -->
    <script src="../assets/js/index.js"></script>
</body>
</html>
