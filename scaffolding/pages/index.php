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
    
    <!-- Panggil file CSS Eksternal (TIDAK DIUBAH) -->
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body class="bg-[#f8fafc] text-slate-900 selection:bg-blue-600 selection:text-white font-sans overflow-x-hidden">

    <!-- NAVBAR (CLEAN STYLE) -->
    <nav class="glass-nav fixed w-full z-[100] top-0 border-b border-slate-200/50 bg-white/80">
        <div class="max-w-[1400px] mx-auto px-5 md:px-10 h-20 flex items-center justify-between">
            <div class="flex flex-col cursor-pointer transition-opacity hover:opacity-80" onclick="window.location.href='index.php'">
                <span class="text-xl md:text-2xl font-black text-slate-900 leading-none tracking-tight uppercase flex items-center gap-2">
                    <i class="fas fa-hard-hat text-blue-600"></i> REGINA AL BARAKAH
                </span>
                <span class="text-[9px] md:text-xs font-bold text-slate-500 tracking-[0.2em] uppercase ml-7">Group</span>
            </div>

            <!-- Menu Tengah ala Referensi -->
            <div class="hidden md:flex items-center space-x-10 font-bold text-slate-600 text-sm">
                <a href="index.php" class="text-slate-900 relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-full after:h-0.5 after:bg-blue-600 after:rounded-full">Home</a>
                <a href="product.php" class="hover:text-slate-900 transition-colors relative group">
                    Product
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
                <a href="about.php" class="hover:text-slate-900 transition-colors relative group">
                    About Us
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
                <a href="contact.php" class="hover:text-slate-900 transition-colors relative group">
                    Contact
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex items-center gap-4">
                <button class="hidden sm:flex w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 items-center justify-center text-slate-600 transition">
                    <i class="fas fa-search text-sm"></i>
                </button>
                <a href="https://wa.me/6282188253433" class="hidden sm:inline-flex bg-slate-900 text-white px-6 py-2.5 rounded-full font-bold hover:bg-blue-600 shadow-lg text-sm transition-all active:scale-95 flex items-center gap-2">
                    <i class="fas fa-bars border-r border-white/20 pr-2"></i> Hubungi Kami
                </a>
                <button id="menu-btn" class="md:hidden text-slate-900 text-2xl p-2.5 focus:outline-none transition-transform active:scale-90">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="absolute top-20 left-0 w-full bg-white border-b border-slate-200 shadow-2xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-3 border-b border-slate-100/70 text-blue-600">Home</a>
                <a href="product.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-600">Product</a>
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-600">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-600">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-blue-600 text-white p-4 rounded-xl text-center shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (V2 - SPLIT LAYOUT) -->
    <section id="home" class="relative pt-28 lg:pt-32 pb-20 overflow-hidden min-h-[90vh] flex items-center">
        <!-- Background Kanan Bergelombang ala Referensi -->
        <div class="absolute top-0 right-0 w-full lg:w-[65%] h-[55vh] lg:h-[95%] z-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19480c5?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover lg:rounded-bl-[8rem] shadow-2xl" alt="Scaffolding Hero">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 lg:from-slate-900/40 to-transparent lg:rounded-bl-[8rem]"></div>
        </div>

        <div class="max-w-[1400px] mx-auto px-5 md:px-10 relative z-10 w-full mt-32 lg:mt-0">
            <div class="max-w-xl lg:max-w-2xl bg-white/90 lg:bg-transparent backdrop-blur-md lg:backdrop-blur-none p-8 lg:p-0 rounded-[2rem] lg:rounded-none shadow-xl lg:shadow-none" data-aos="fade-up" data-aos-delay="100">
                
                <span class="inline-block text-blue-600 font-black tracking-[0.2em] text-[10px] md:text-xs uppercase mb-4 border border-blue-600/20 bg-blue-50 px-4 py-1.5 rounded-full">
                    Sewa & Jual Scaffolding
                </span>
                
                <h1 class="text-4xl md:text-6xl lg:text-[5rem] font-black text-slate-900 leading-[1.05] mb-6 tracking-tight">
                    Konstruksi <br>Lebih Kokoh. <br><span class="text-blue-600">Hasil Maksimal.</span>
                </h1>
                
                <p class="text-slate-600 text-sm md:text-base mb-8 max-w-lg leading-relaxed font-medium">
                    Material baja standar industri untuk memastikan keselamatan dan kelancaran infrastruktur proyek Anda.
                </p>
                
                <div class="flex items-center gap-4">
                    <a href="product.php" class="bg-blue-600 text-white px-8 py-4 rounded-full font-bold hover:bg-slate-900 transition-colors shadow-lg shadow-blue-600/30 inline-flex items-center gap-3">
                        Lihat Katalog <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING INFO BAR (MENGGANTIKAN BAR PENCARIAN REFERENSI) -->
    <div class="max-w-[1200px] mx-auto px-5 relative z-20 -mt-16 lg:-mt-24 mb-16" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white rounded-full shadow-2xl shadow-slate-200/50 p-3 flex flex-col md:flex-row items-center justify-between gap-4 border border-slate-100">
            
            <div class="flex-1 flex items-center gap-4 px-6 py-2 w-full md:w-auto border-b md:border-b-0 md:border-r border-slate-100">
                <i class="fas fa-map-marker-alt text-xl text-slate-400"></i>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Area Layanan</h4>
                    <p class="text-[11px] text-slate-500">Kab. Buton & Bau-Bau</p>
                </div>
            </div>

            <div class="flex-1 flex items-center gap-4 px-6 py-2 w-full md:w-auto border-b md:border-b-0 md:border-r border-slate-100">
                <i class="fas fa-calendar-check text-xl text-slate-400"></i>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Durasi Sewa</h4>
                    <p class="text-[11px] text-slate-500">Harian & Bulanan</p>
                </div>
            </div>

            <div class="flex-1 flex items-center gap-4 px-6 py-2 w-full md:w-auto">
                <i class="fas fa-truck text-xl text-slate-400"></i>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Pengiriman</h4>
                    <p class="text-[11px] text-slate-500">Armada Siap Antar</p>
                </div>
            </div>

            <a href="https://wa.me/6282188253433" class="bg-slate-900 hover:bg-blue-600 text-white w-full md:w-auto px-8 py-4 rounded-full font-bold transition-colors shadow-md flex items-center justify-center gap-2 text-sm whitespace-nowrap">
                Hubungi Pusat <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- FITUR UNGGULAN (ICONS HORIZONTAL) -->
    <section class="max-w-[1400px] mx-auto px-5 mb-24" data-aos="fade-up">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10 border-b border-slate-200/60 pb-12">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                    <h4 class="font-black text-sm text-slate-900 leading-tight mb-0.5">Safety First</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Inspeksi kelayakan SNI</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-tags"></i>
                </div>
                <div>
                    <h4 class="font-black text-sm text-slate-900 leading-tight mb-0.5">Best Price Guarantee</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Harga paling kompetitif</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div>
                    <h4 class="font-black text-sm text-slate-900 leading-tight mb-0.5">Fast Delivery</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Antar jemput lokasi</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-slate-200 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-headset"></i>
                </div>
                <div>
                    <h4 class="font-black text-sm text-slate-900 leading-tight mb-0.5">24/7 Support</h4>
                    <p class="text-[10px] text-slate-500 font-medium">Siap bantu kapanpun</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KATALOG PRODUK (POPULAR STYLE V2) -->
    <section class="max-w-[1400px] mx-auto px-5 mb-24">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10" data-aos="fade-up">
            <div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">Katalog Produk Utama <i class="fas fa-leaf text-blue-600 text-xl md:text-2xl ml-2"></i></h2>
                <p class="text-slate-500 text-sm mt-2">Peralatan konstruksi unggulan siap sewa.</p>
            </div>
            <a href="product.php" class="text-sm font-bold text-slate-900 hover:text-blue-600 transition flex items-center gap-2 mt-4 md:mt-0">
                Lihat Semua Produk <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $preview_products = [
                ['name' => 'Jack Base T60', 'cat' => 'Aksesoris Kaki', 'desc' => 'Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.', 'image' => 'jb60.jpg', 'price' => 'Stok Tersedia', 'rating' => '5.0'],
                ['name' => 'Scaffolding T170', 'cat' => 'Frame Utama', 'desc' => 'Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.', 'image' => 'mf17.jpg', 'price' => 'Stok Tersedia', 'rating' => '4.9'],
                ['name' => 'Catwalk', 'cat' => 'Platform', 'desc' => 'Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.', 'image' => 'catwalk.jpg', 'price' => 'Stok Tersedia', 'rating' => '4.8'],
                ['name' => 'Roda Nylon 6 Inch', 'cat' => 'Aksesoris Mobil', 'desc' => 'Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.', 'image' => 'roda6.jpg', 'price' => 'Stok Tersedia', 'rating' => '4.9'],
            ];

            foreach($preview_products as $index => $p): 
                $imgSrc = "../assets/image/" . $p['image'];
                $fallbackSrc = "https://via.placeholder.com/600x800?text=" . urlencode($p['name']);
            ?>
            <!-- KARTU PRODUK V2 (Gambar Full Background) -->
            <div class="relative h-80 md:h-[22rem] rounded-[2rem] overflow-hidden group cursor-pointer shadow-lg" 
                 data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>"
                 onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')">
                
                <!-- Background Image -->
                <img src="<?= $imgSrc ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1.5s] group-hover:scale-110" onerror="this.src='<?= $fallbackSrc ?>'" alt="<?= $p['name'] ?>">
                
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/30 to-transparent"></div>
                
                <!-- Badge Rating Atas Kiri -->
                <div class="absolute top-4 left-4 bg-slate-900/60 backdrop-blur-md px-2.5 py-1.5 rounded-lg flex items-center gap-1.5 text-white text-[10px] font-black z-10">
                    <i class="fas fa-star text-yellow-400 text-[9px]"></i> <?= $p['rating'] ?>
                </div>

                <!-- Konten Teks Bawah -->
                <div class="absolute bottom-6 left-6 right-6 z-10 flex justify-between items-end">
                    <div>
                        <h3 class="font-black text-xl text-white leading-tight mb-1"><?= $p['name'] ?></h3>
                        <p class="text-slate-300 text-xs font-medium"><?= $p['cat'] ?></p>
                    </div>
                    <div class="text-right">
                        <span class="block text-yellow-400 font-bold text-sm whitespace-nowrap"><?= $p['price'] ?></span>
                    </div>
                </div>

                <!-- Tombol Panah Hover -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm w-12 h-12 rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- BANNER CTA ABOUT US (MENGGANTIKAN ABOUT LAMA) -->
    <section class="max-w-[1400px] mx-auto px-5 mb-24" data-aos="fade-up">
        <div class="bg-slate-900 rounded-[2.5rem] p-10 md:p-16 flex flex-col md:flex-row items-center justify-between relative overflow-hidden shadow-2xl">
            <!-- Background Image Overlay Semi Transparan -->
            <div class="absolute inset-0 z-0 opacity-20">
                <img src="../assets/image/kantor.jpg" class="w-full h-full object-cover" alt="Kantor">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent z-0"></div>
            
            <div class="relative z-10 max-w-xl text-left">
                <div class="inline-flex items-center gap-2 text-yellow-400 text-[10px] font-black tracking-[0.2em] uppercase mb-4">
                    <i class="fas fa-bolt"></i> PROFIL KAMI
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight tracking-tight">
                    Mitra Terpercaya <br>Proyek Konstruksi Anda.
                </h2>
                <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-8">
                    Berdiri dengan semangat mendukung infrastruktur, kami fokus menyediakan material scaffolding berkualitas (SNI) yang mengutamakan keselamatan dengan tim ahli bongkar pasang profesional.
                </p>
                <a href="about.php" class="bg-blue-600 text-white px-8 py-3.5 rounded-full font-bold hover:bg-blue-700 transition inline-flex items-center gap-3">
                    Pelajari Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Ilustrasi Dekorasi Kanan (Bisa menggunakan daun atau shape, disini kita gunakan aksen icon besar) -->
            <div class="relative z-10 hidden md:block opacity-10 transform translate-x-10">
                <i class="fas fa-hard-hat text-[15rem] text-white"></i>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/6282188253433" class="wa-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- FOOTER (MINIMALIST CLEAN) -->
    <footer class="bg-white border-t border-slate-100 pt-20 pb-10">
        <div class="max-w-[1400px] mx-auto px-5">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-left mb-16">
                <!-- Info Kolom 1 -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6 cursor-pointer">
                        <i class="fas fa-hard-hat text-blue-600 text-3xl"></i>
                        <h2 class="text-xl md:text-2xl font-black tracking-tight text-slate-900">REGINA AL BARAKAH</h2>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 max-w-sm">
                        Menghadirkan solusi penyewaan scaffolding terlengkap dan teraman di wilayah Kabupaten Buton, Bau-Bau, dan sekitarnya.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all"><i class="fab fa-facebook-f text-sm"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all"><i class="fab fa-instagram text-sm"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all"><i class="fab fa-youtube text-sm"></i></a>
                    </div>
                </div>

                <!-- Navigation Kolom 2 -->
                <div>
                    <h3 class="text-xs font-black uppercase text-slate-900 tracking-wider mb-6">Navigasi Utama</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li><a href="index.php" class="hover:text-blue-600 transition">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-blue-600 transition">Katalog Produk</a></li>
                        <li><a href="about.php" class="hover:text-blue-600 transition">Tentang Perusahaan</a></li>
                        <li><a href="contact.php" class="hover:text-blue-600 transition">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Contact Kolom 3 -->
                <div>
                    <h3 class="text-xs font-black uppercase text-slate-900 tracking-wider mb-6">Pusat Bantuan</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li class="flex gap-3 items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1"></i>
                            <span>Jl. Raya Trans Sulawesi, Bau-Bau, Buton.</span>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fas fa-phone-alt text-blue-600"></i>
                            <span>0821-8825-3433</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bagian Statistik Bawah / Copyright -->
            <div class="pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Statistik Mini -->
                <div class="flex gap-8 text-center md:text-left">
                    <div>
                        <h4 class="font-black text-slate-900 text-lg">7+</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-widest">Tahun Berdiri</p>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-900 text-lg">1000+</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-widest">Unit Ready</p>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-900 text-lg">500+</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-widest">Klien Puas</p>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="text-center md:text-right">
                    <p class="text-[11px] text-slate-400 font-bold tracking-widest uppercase">
                        © 2026 Regina Al Barakah Group. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- 1. MODAL DETAIL PRODUK (STRUKTUR DIPERBAIKI SESUAI REQUEST SEBELUMNYA) -->
    <div id="productModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-[200] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-[2.5rem] max-w-md w-full overflow-hidden shadow-2xl border border-slate-100 transform scale-90 transition-transform duration-300 relative flex flex-col max-h-[90vh]">
            
            <!-- Tombol Close Atas Kanan -->
            <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-slate-900/60 text-white w-9 h-9 rounded-full flex items-center justify-center hover:bg-slate-900 transition-colors z-30 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
            
            <!-- Area Gambar Banner Modal -->
            <div class="h-64 sm:h-72 bg-slate-100 relative flex-shrink-0">
                <img id="modalImg" src="" class="w-full h-full object-cover" alt="Product Modal Image">
                <div id="modalCat" class="absolute bottom-4 left-6 bg-blue-600/80 backdrop-blur-md px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest z-10 hidden">
                    <!-- Dinamis via JS -->
                </div>
            </div>

            <!-- Area Teks Detail (pt-0 & Dihapus Garis Birunya Agar Mepet Pas ke Gambar) -->
            <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex flex-col overflow-y-auto">
                <h3 id="modal-title" class="font-black text-xl sm:text-2xl text-slate-900 mb-2 italic uppercase tracking-tight leading-tight mt-5"></h3>
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

    <!-- 2. LIGHTBOX / POPUP GAMBAR FULL -->
    <div id="imageFullModal" class="fixed inset-0 bg-slate-950/95 backdrop-blur-md z-[250] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative max-w-4xl w-full max-h-[90vh] flex items-center justify-center transform scale-90 transition-transform duration-300">
            <button onclick="closeImagePopup()" class="absolute -top-12 right-0 md:-top-10 md:-right-10 bg-white/10 hover:bg-white/20 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors focus:outline-none text-lg">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalFullImg" src="" class="max-w-full max-h-[80vh] object-contain rounded-2xl shadow-2xl border border-white/10" alt="Full Image Preview">
        </div>
    </div>

    <!-- SCRIPT UTAMA & EXTERNAL (TIDAK DIUBAH) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>