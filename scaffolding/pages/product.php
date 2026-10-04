<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Katalog Produk | Regina Al Barakah Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- LINK FILE CSS EKSTERNAL -->
    <link class="cache-bypass" rel="stylesheet" href="../assets/css/product.css?v=1.1">
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-blue-100/60 selection:text-blue-900">

    <nav class="glass-nav fixed w-full z-[100] top-0 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-5 md:px-6 h-16 md:h-20 flex items-center justify-between">
            <div class="flex flex-col cursor-pointer transition-opacity hover:opacity-80" onclick="window.location.href='index.php'">
                <span class="text-lg md:text-2xl font-black text-blue-800 leading-none tracking-tight uppercase">REGINA AL BARAKAH</span>
                <span class="text-[9px] md:text-xs font-bold text-slate-500 tracking-[0.2em] uppercase">Group</span>
            </div>

            <div class="hidden md:flex space-x-9 font-bold text-slate-600">
                <a href="index.php" class="hover:text-blue-700 transition text-sm">Home</a>
                <a href="product.php" class="text-blue-700 transition text-sm">Product</a>
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

        <div id="mobile-menu" class="absolute top-16 left-0 w-full bg-white border-b border-slate-200 shadow-2xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Home</a>
                <a href="product.php" class="mobile-link py-3 border-b border-slate-100/70 text-blue-700">Product</a>
                <a href="about.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">About Us</a>
                <a href="contact.php" class="mobile-link py-3 border-b border-slate-100/70 hover:text-blue-700">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-blue-700 text-white p-4 rounded-xl text-center shadow-lg active:scale-95 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <section class="relative pt-32 md:pt-44 pb-16 md:pb-24 px-5 overflow-hidden bg-slate-900 min-h-[92vh] flex items-center justify-center text-center">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&q=80&w=1600" class="w-full h-full object-cover hero-zoom" alt="Katalog Background">
            <div class="absolute inset-0 hero-catalog-overlay"></div>
        </div>

        <div class="max-w-4xl mx-auto relative z-10 w-full flex flex-col items-center" data-aos="fade-up">
            <div class="text-white w-full" data-aos="fade-up" data-aos-delay="100">
                <div class="inline-block px-3 py-1 bg-blue-600/30 border border-blue-500/30 rounded-full text-blue-300 text-[9px] md:text-[11px] font-black mb-6 uppercase tracking-widest mx-auto">
                    Katalog Lengkap
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 uppercase italic tracking-tight text-white px-2">
                    Katalog <span class="text-blue-500">Produk</span>
                </h1>
                
                <p class="text-sm md:text-base text-slate-300 mb-8 max-w-2xl mx-auto leading-relaxed font-light px-4">
                    Daftar lengkap peralatan scaffolding standar industri untuk keamanan dan efisiensi proyek konstruksi Anda.
                </p>

                <div class="flex flex-col gap-3.5 max-w-md mx-auto w-full px-6 mb-8">
                    <a href="#product-list" class="group bg-blue-600 hover:bg-blue-700 text-white py-3.5 px-6 rounded-xl font-bold transition-all shadow-lg shadow-blue-600/20 active:scale-95 text-sm md:text-base flex items-center justify-center gap-2">
                        LIHAT PRODUK
                        <i class="fas fa-arrow-down ml-1 text-xs transition-transform duration-300 group-hover:translate-y-1"></i>
                    </a>
                </div>

                <p class="text-[11px] md:text-xs text-slate-400 font-medium tracking-wide">
                    Melayani wilayah: Kabupaten Buton • Bau-Bau • dan sekitarnya
                </p>
                
                <a href="#product-list" class="mt-8 block animate-bounce text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-chevron-down text-lg"></i>
                </a>
            </div>
        </div>
    </section>

    <main id="product-list" class="max-w-7xl mx-auto px-5 py-16 md:py-24 scroll-mt-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-10">
            <?php
            $products = [
                ['name' => 'Jack Base T60', 'cat' => 'Aksesoris Kaki', 'desc' => 'Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.', 'image' => 'jb60.jpg'],
                ['name' => 'Scaffolding T170', 'cat' => 'Frame Utama', 'desc' => 'Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.', 'image' => 'mf17.jpg'],
                ['name' => 'Catwalk', 'cat' => 'Platform', 'desc' => 'Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.', 'image' => 'catwalk.jpg'],
                ['name' => 'Roda Nylon 6 Inch', 'cat' => 'Aksesoris Mobilisasi', 'desc' => 'Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.', 'image' => 'roda6.jpg'],
                ['name' => 'Ladder Frame T90', 'cat' => 'Frame Tambahan', 'desc' => 'Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja.', 'image' => 'lf90.jpg'],
                ['name' => 'U-Head T60', 'cat' => 'Aksesoris Atas', 'desc' => 'Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton.', 'image' => 'uh60.jpg'],
                ['name' => 'Pipe Support Ts-90', 'cat' => 'Penyangga Tunggal', 'desc' => 'Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai.', 'image' => 'ts90.jpg'],
            ];

            foreach($products as $index => $p): 
                // DIBAWAH INI ADALAH BAGIAN YANG DIUBAH AGAR MENGARAH KE FOLDER ASSETS
                $imgSrc = "../assets/image/" . $p['image'];
                $fallbackSrc = "https://via.placeholder.com/600x800?text=" . urlencode($p['name']);
            ?>
            <div class="macos-card bg-white rounded-[2rem] border border-slate-100 overflow-hidden flex flex-col group shadow-sm" 
                 data-aos="fade-up" 
                 data-aos-delay="<?= ($index % 4) * 100 ?>">
                <div class="h-56 md:h-64 bg-slate-200 overflow-hidden relative cursor-pointer" onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>')">
                    <img src="<?= $imgSrc ?>" class="product-image w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" onerror="this.src='<?= $fallbackSrc ?>'">
                    <div class="absolute top-4 left-4 bg-blue-600/80 backdrop-blur-md px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest z-10">
                        <?= $p['cat'] ?>
                    </div>
                </div>
                <div class="p-6 md:p-8 flex-grow flex flex-col">
                    <h3 class="font-black text-lg md:text-xl text-slate-800 mb-3 italic uppercase tracking-tight cursor-pointer hover:text-blue-700 transition-colors" onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>')"><?= $p['name'] ?></h3>
                    <p class="text-slate-500 text-[13px] md:text-sm leading-relaxed mb-6 flex-grow"><?= $p['desc'] ?></p>
                    <button onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>')" 
                       class="flex items-center justify-center gap-2 bg-slate-900 text-white py-3.5 md:py-4 rounded-2xl font-bold hover:bg-blue-700 transition-all duration-300 uppercase text-[10px] md:text-[11px] tracking-[0.15em] shadow-lg active:scale-95 w-full">
                        <i class="fas fa-info-circle text-sm"></i> Lihat Selengkapnya
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- MODAL DETAIL PRODUK -->
    <div id="product-modal" class="fixed inset-0 z-[2000] hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md transition-opacity duration-300 opacity-0">
        <div class="bg-white rounded-[2rem] max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 flex flex-col transform scale-95 transition-transform duration-300">
            <div class="relative h-64 sm:h-72 bg-slate-100 overflow-hidden">
                <img id="modal-img" src="" class="w-full h-full object-cover" alt="Detail Produk">
                <button onclick="closeProductModal()" class="absolute top-4 right-4 w-10 h-10 bg-slate-900/60 backdrop-blur-md text-white rounded-full flex items-center justify-center hover:bg-slate-950 transition-colors">
                    <i class="fas fa-times text-sm"></i>
                </button>
                <div id="modal-cat" class="absolute bottom-4 left-4 bg-blue-600 px-3 py-1 rounded-lg text-[9px] font-black text-white uppercase tracking-widest"></div>
            </div>
            <div class="p-6 sm:p-8 flex flex-col">
                <h3 id="modal-title" class="font-black text-xl sm:text-2xl text-slate-800 mb-3 italic uppercase tracking-tight"></h3>
                <p id="modal-desc" class="text-slate-500 text-sm leading-relaxed mb-6"></p>
                <div class="grid grid-cols-2 gap-3">
                    <button onclick="closeProductModal()" class="border border-slate-200 text-slate-700 py-3 rounded-xl font-bold hover:bg-slate-50 transition-colors uppercase text-[11px] tracking-wider active:scale-95">
                        Tutup
                    </button>
                    <a id="modal-wa-btn" href="" target="_blank" class="bg-green-600 text-white py-3 rounded-xl font-bold hover:bg-green-700 transition-colors uppercase text-[11px] tracking-wider flex items-center justify-center gap-2 active:scale-95">
                        <i class="fab fa-whatsapp text-sm"></i> Hubungi Kami
                    </a>
                </div>
                <div class="mt-4 pt-4 border-t border-slate-100 flex justify-center">
                    <button id="modal-view-full" onclick="openImagePopup()" class="text-blue-600 hover:text-blue-800 font-bold text-[11px] tracking-wider uppercase flex items-center gap-2 focus:outline-none">
                        <i class="fas fa-eye text-xs"></i> Lihat Gambar Full Standar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUP MODAL KHUSUS GAMBAR (LIGHTBOX) -->
    <div id="image-popup" class="fixed inset-0 z-[3000] hidden items-center justify-center p-4 bg-slate-950/95 backdrop-blur-sm transition-opacity duration-300 opacity-0">
        <div class="relative max-w-4xl w-full max-h-[85vh] flex items-center justify-center transform scale-95 transition-transform duration-300">
            <button onclick="closeImagePopup()" class="absolute -top-12 right-0 md:-top-4 md:-right-12 w-10 h-10 bg-white/10 text-white rounded-full flex items-center justify-center hover:bg-white/20 transition-colors focus:outline-none z-[3010]">
                <i class="fas fa-times text-base"></i>
            </button>
            <img id="popup-img" src="" class="max-w-full max-h-[85vh] object-contain rounded-xl shadow-2xl border border-white/10" alt="Gambar Penuh">
        </div>
    </div>

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
            <a href="https://wa.me/6282169169700" target="_blank" class="flex items-center gap-3 p-3 bg-slate-50 hover:bg-green-50 rounded-xl transition border border-slate-100 group">
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
    <script src="../assets/js/product.js"></script>
</body>
</html>
