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
    
    <!-- Panggil file CSS Eksternal -->
    <link rel="stylesheet" href="../assets/css/index.css?v=1.3">
</head>
<body class="bg-[#f8fafc] text-slate-900 selection:bg-blue-600 selection:text-white font-sans overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="glass-nav fixed w-full z-[100] top-0 border-b border-slate-200/50 bg-white/90">
        <div class="max-w-7xl mx-auto px-5 md:px-10 h-20 flex items-center justify-between">
            <!-- LOGO SECTION (DIPERBAIKI AGAR SEJAJAR & RAPI) -->
            <div class="flex items-center gap-3 cursor-pointer transition-opacity hover:opacity-80" onclick="window.location.href='index.php'">
                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white text-lg shadow-md shadow-blue-200 shrink-0">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <div class="flex flex-col">
                    <span class="text-base md:text-xl font-black text-slate-900 leading-tight tracking-tight uppercase">REGINA AL BARAKAH</span>
                    <span class="text-[9px] md:text-[10px] font-bold text-slate-500 tracking-[0.2em] uppercase leading-none">Group</span>
                </div>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8 font-bold text-slate-600 text-sm">
                <a href="index.php" class="text-blue-600 relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-full after:h-0.5 after:bg-blue-600 after:rounded-full">Home</a>
                <a href="product.php" class="hover:text-blue-600 transition-colors relative group">
                    Product
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
                <a href="about.php" class="hover:text-blue-600 transition-colors relative group">
                    About Us
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
                <a href="contact.php" class="hover:text-blue-600 transition-colors relative group">
                    Contact
                    <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 rounded-full transition-all group-hover:w-full"></span>
                </a>
            </div>

            <div class="flex items-center gap-3">
                <a href="https://wa.me/6282188253433" class="hidden sm:inline-flex bg-slate-900 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-blue-600 shadow-md text-sm transition-all active:scale-95 items-center gap-2">
                    <i class="fab fa-whatsapp"></i> Hubungi Kami
                </a>
                <button id="menu-btn" class="md:hidden text-slate-900 text-2xl p-2.5 focus:outline-none transition-transform active:scale-90">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="absolute top-20 left-0 w-full bg-white border-b border-slate-200 shadow-2xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-3 border-b border-slate-100 text-blue-600">Home</a>
                <a href="product.php" class="mobile-link py-3 border-b border-slate-100 hover:text-blue-600">Product</a>
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100 hover:text-blue-600">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100 hover:text-blue-600">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-blue-600 text-white p-4 rounded-xl text-center shadow-md active:scale-95 transition-all block">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative pt-32 lg:pt-40 pb-20 overflow-hidden min-h-[85vh] flex items-center">
        <!-- Background Gambar Kanan dengan Bentuk Melengkung -->
        <div class="absolute top-0 right-0 w-full lg:w-[60%] h-[50vh] lg:h-full z-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19480c5?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover lg:rounded-bl-[5rem]" alt="Scaffolding Hero">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 lg:from-slate-900/30 to-transparent lg:rounded-bl-[5rem]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 md:px-10 relative z-10 w-full mt-28 lg:mt-0">
            <div class="max-w-xl bg-white/90 lg:bg-transparent backdrop-blur-md lg:backdrop-blur-none p-8 lg:p-0 rounded-3xl lg:rounded-none shadow-xl lg:shadow-none" data-aos="fade-up" data-aos-delay="100">
                
                <span class="inline-block text-blue-600 font-black tracking-widest text-[10px] md:text-xs uppercase mb-4 border border-blue-600/20 bg-blue-50 px-4 py-1.5 rounded-full">
                    Penyedia Scaffolding Terpercaya
                </span>
                
                <h1 class="text-4xl md:text-6xl font-black text-slate-900 leading-[1.1] mb-6 tracking-tight">
                    Konstruksi Kokoh, <br><span class="text-blue-600">Hasil Maksimal.</span>
                </h1>
                
                <p class="text-slate-600 text-sm md:text-base mb-8 leading-relaxed font-normal">
                    Kami menyediakan layanan sewa dan jual scaffolding standar industri untuk keamanan infrastruktur proyek Anda.
                </p>
                
                <div class="flex flex-wrap items-center gap-4">
                    <a href="product.php" class="bg-blue-600 text-white px-7 py-3.5 rounded-xl font-bold hover:bg-slate-900 transition-colors shadow-lg shadow-blue-600/20 inline-flex items-center gap-2 text-sm">
                        Lihat Katalog <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                    <a href="about.php" class="bg-white text-slate-800 border border-slate-200 px-7 py-3.5 rounded-xl font-bold hover:bg-slate-50 transition-colors shadow-sm inline-flex items-center gap-2 text-sm">
                        Profil Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING INFO BAR -->
    <div class="max-w-6xl mx-auto px-5 relative z-20 -mt-10 lg:-mt-16 mb-20" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white rounded-2xl md:rounded-full shadow-xl shadow-slate-200/60 p-4 md:p-6 grid grid-cols-1 md:grid-cols-4 gap-4 items-center border border-slate-100">
            
            <div class="flex items-center gap-4 px-4 py-2 border-b md:border-b-0 md:border-r border-slate-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Wilayah</h4>
                    <p class="text-[11px] text-slate-500 font-medium">Buton & Bau-Bau</p>
                </div>
            </div>

            <div class="flex items-center gap-4 px-4 py-2 border-b md:border-b-0 md:border-r border-slate-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-box-open"></i>
                </div>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Stok Ready</h4>
                    <p class="text-[11px] text-slate-500 font-medium">1000+ Unit Tersedia</p>
                </div>
            </div>

            <div class="flex items-center gap-4 px-4 py-2">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <h4 class="font-black text-xs uppercase text-slate-800 tracking-wide">Layanan</h4>
                    <p class="text-[11px] text-slate-500 font-medium">24/7 Siap Sedia</p>
                </div>
            </div>

            <a href="https://wa.me/6282188253433" class="bg-slate-900 hover:bg-blue-600 text-white px-6 py-3.5 rounded-xl md:rounded-full font-bold transition-colors shadow-md flex items-center justify-center gap-2 text-xs uppercase tracking-wider">
                Hubungi Kami <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <!-- FEATURES SECTION -->
    <section class="max-w-7xl mx-auto px-5 mb-24" data-aos="fade-up">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm flex flex-col items-start">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 text-xl">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Safety First</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Inspeksi kelayakan ketat untuk menjamin keamanan pekerja di ketinggian proyek.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm flex flex-col items-start">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 text-xl">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Harga Bersahabat</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Sewa fleksibel harian/bulanan dengan penawaran harga paling kompetitif.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm flex flex-col items-start">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 text-xl">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3 class="text-lg font-black uppercase text-slate-900 mb-2">Pengiriman Cepat</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Armada kami siap antar material langsung ke lokasi proyek Anda tepat waktu.</p>
            </div>
        </div>
    </section>

    <!-- KATALOG PRODUK UTAMA -->
    <section class="max-w-7xl mx-auto px-5 mb-24">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12" data-aos="fade-up">
            <div>
                <span class="text-blue-600 font-bold uppercase text-xs tracking-widest block mb-2">Pilihan Terbaik</span>
                <h2 class="text-2xl md:text-4xl font-black text-slate-900 uppercase italic tracking-tight">Katalog Produk Utama</h2>
            </div>
            <a href="product.php" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800 transition mt-4 md:mt-0">
                Lihat Katalog Lengkap <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $preview_products = [
                ['name' => 'Jack Base T60', 'cat' => 'Aksesoris Kaki', 'desc' => 'Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.', 'image' => 'jb60.jpg'],
                ['name' => 'Scaffolding T170', 'cat' => 'Frame Utama', 'desc' => 'Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.', 'image' => 'mf17.jpg'],
                ['name' => 'Catwalk', 'cat' => 'Platform', 'desc' => 'Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.', 'image' => 'catwalk.jpg'],
                ['name' => 'Roda Nylon 6 Inch', 'cat' => 'Aksesoris Mobilisasi', 'desc' => 'Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.', 'image' => 'roda6.jpg'],
            ];

            foreach($preview_products as $index => $p): 
                $imgSrc = "../assets/image/" . $p['image'];
                $fallbackSrc = "https://via.placeholder.com/600x800?text=" . urlencode($p['name']);
            ?>
            <!-- Kartu Produk V2 -->
            <div class="relative h-80 rounded-3xl overflow-hidden group cursor-pointer shadow-md bg-slate-100 flex flex-col justify-end p-6" 
                 data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>"
                 onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')">
                
                <!-- Background Image -->
                <img src="<?= $imgSrc ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='<?= $fallbackSrc ?>'" alt="<?= $p['name'] ?>">
                
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent"></div>
                
                <!-- Kategori Badge -->
                <div class="absolute top-4 left-4 bg-blue-600/80 backdrop-blur-md px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest z-10">
                    <?= $p['cat'] ?>
                </div>

                <!-- Teks Info -->
                <div class="relative z-10 text-left">
                    <h3 class="font-black text-lg text-white mb-1 uppercase tracking-tight"><?= $p['name'] ?></h3>
                    <p class="text-slate-300 text-xs line-clamp-2 mb-3 font-light"><?= $p['desc'] ?></p>
                    <span class="inline-flex items-center gap-2 text-blue-400 font-bold text-xs uppercase tracking-wider group-hover:text-blue-300 transition-colors">
                        Detail Produk <i class="fas fa-arrow-right text-[10px]"></i>
                    </span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- BANNER PROFIL / ABOUT -->
    <section class="max-w-7xl mx-auto px-5 mb-24" data-aos="fade-up">
        <div class="bg-slate-900 rounded-[2.5rem] p-8 md:p-14 relative overflow-hidden shadow-2xl flex flex-col md:flex-row items-center justify-between gap-10">
            <div class="absolute inset-0 opacity-15">
                <img src="../assets/image/kantor.jpg" class="w-full h-full object-cover" alt="Kantor">
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-transparent"></div>

            <div class="relative z-10 max-w-xl text-left">
                <span class="text-blue-400 font-bold uppercase text-xs tracking-widest block mb-2">Tentang Kami</span>
                <h2 class="text-3xl md:text-4xl font-black text-white uppercase italic mb-4 leading-tight">Regina Al Barakah Group</h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8 font-light">
                    Berdiri dengan semangat mendukung infrastruktur, kami fokus menyediakan material scaffolding berkualitas yang mengutamakan keselamatan di wilayah Kabupaten Buton dan sekitarnya.
                </p>
                <a href="about.php" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-xl font-bold transition-all shadow-lg text-sm inline-flex items-center gap-2">
                    Selengkapnya Tentang Kami <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            <div class="relative z-10 text-center md:text-right">
                <div class="inline-block bg-white/10 backdrop-blur-md p-6 rounded-3xl border border-white/10 text-white">
                    <span class="block text-3xl font-black text-blue-400 mb-1">7+ Tahun</span>
                    <span class="text-xs uppercase tracking-widest font-bold text-slate-300">Pengalaman Terpercaya</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/6282188253433" class="wa-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200/60 pt-16 pb-10">
        <div class="max-w-7xl mx-auto px-5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left mb-12">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-blue-600 p-2 rounded-lg text-white">
                            <i class="fas fa-hard-hat text-lg"></i>
                        </div>
                        <h2 class="text-lg font-black uppercase italic tracking-tight text-slate-900">Regina Al Barakah Group</h2>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">
                        Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition"><i class="fab fa-tiktok text-xs"></i></a>
                        <a href="#" class="w-9 h-9 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition"><i class="fab fa-instagram text-xs"></i></a>
                        <a href="#" class="w-9 h-9 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition"><i class="fab fa-youtube text-xs"></i></a>
                    </div>
                </div>

                <div class="md:pl-10">
                    <h3 class="text-xs font-black uppercase italic tracking-widest mb-4 text-blue-600">Menu Utama</h3>
                    <ul class="space-y-2.5 text-slate-600 text-sm font-bold">
                        <li><a href="index.php" class="hover:text-blue-600 transition">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-blue-600 transition">Produk</a></li>
                        <li><a href="about.php" class="hover:text-blue-600 transition">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-blue-600 transition">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-black uppercase italic tracking-widest mb-4 text-blue-600">Hubungi Kami</h3>
                    <ul class="space-y-3 text-slate-600 text-sm">
                        <li class="flex gap-3 items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1"></i>
                            <span class="font-bold">Jl. Raya Trans Sulawesi, Bau-Bau, Buton.</span>
                        </li>
                        <li class="flex gap-3 items-center">
                            <i class="fas fa-phone-alt text-blue-600"></i>
                            <span class="font-bold">0821-8825-3433</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-slate-100 text-center">
                <p class="text-[10px] text-slate-400 font-bold tracking-[0.2em] uppercase">
                    © 2026 Regina Al Barakah Group. Layanan Scaffolding Terpercaya di Sulawesi Tenggara.
                </p>
            </div>
        </div>
    </footer>

    <!-- MODAL DETAIL PRODUK -->
    <div id="productModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-[200] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-[2.5rem] max-w-md w-full overflow-hidden shadow-2xl border border-slate-100 transform scale-90 transition-transform duration-300 relative flex flex-col max-h-[90vh]">
            
            <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-slate-900/60 text-white w-9 h-9 rounded-full flex items-center justify-center hover:bg-slate-900 transition-colors z-30 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="h-64 sm:h-72 bg-slate-100 relative flex-shrink-0">
                <img id="modalImg" src="" class="w-full h-full object-cover" alt="Product Modal Image">
            </div>

            <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex flex-col overflow-y-auto">
                <h3 id="modal-title" class="font-black text-xl sm:text-2xl text-slate-900 mb-2 italic uppercase tracking-tight leading-tight mt-5"></h3>
                <p id="modal-desc" class="text-slate-500 text-sm leading-relaxed mb-6"></p>
                
                <div class="grid grid-cols-2 gap-4">
                    <button onclick="closeProductModal()" class="border border-slate-200 bg-white text-slate-700 py-3.5 rounded-xl font-black hover:bg-slate-50 transition-colors uppercase text-[11px] tracking-widest shadow-sm">
                        Tutup
                    </button>
                    <a id="modal-wa-btn" href="" target="_blank" class="bg-emerald-600 text-white py-3.5 rounded-xl font-black hover:bg-emerald-700 transition-colors uppercase text-[11px] tracking-widest flex items-center justify-center gap-2 shadow-sm">
                        <i class="fab fa-whatsapp text-sm"></i> Hubungi Kami
                    </a>
                </div>
                
                <div class="mt-6 pt-5 border-t border-slate-100 flex justify-center">
                    <button id="modal-view-full" onclick="openImagePopup()" class="text-blue-600 hover:text-blue-800 font-black text-[11px] tracking-widest uppercase flex items-center gap-2 focus:outline-none">
                        <i class="fas fa-eye text-xs"></i> Lihat Gambar Full Standar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- LIGHTBOX GAMBAR FULL -->
    <div id="imageFullModal" class="fixed inset-0 bg-slate-950/95 backdrop-blur-md z-[250] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative max-w-4xl w-full max-h-[90vh] flex items-center justify-center transform scale-90 transition-transform duration-300">
            <button onclick="closeImagePopup()" class="absolute -top-12 right-0 md:-top-10 md:-right-10 bg-white/10 hover:bg-white/20 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors focus:outline-none text-lg">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalFullImg" src="" class="max-w-full max-h-[80vh] object-contain rounded-2xl shadow-2xl border border-white/10" alt="Full Image Preview">
        </div>
    </div>

    <!-- SCRIPT UTAMA -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/js/index.js"></script>
</body>
</html>