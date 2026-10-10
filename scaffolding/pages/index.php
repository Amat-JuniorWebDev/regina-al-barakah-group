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
    <link rel="stylesheet" href="../assets/css/index.css?v=1.4">
</head>
<body class="bg-[#fcfbf9] text-slate-900 selection:bg-orange-500 selection:text-white font-sans overflow-x-hidden">

    <!-- TOP NAVBAR (Mirip 100% tata letak Pomaii) -->
    <nav class="glass-nav fixed w-full z-[100] top-0 bg-[#fcfbf9]/90 backdrop-blur-md border-b border-stone-200/50">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-12 h-24 flex items-center justify-between">
            
            <!-- Logo & Brand -->
            <div class="flex items-center gap-3 cursor-pointer" onclick="window.location.href='index.php'">
                <div class="w-11 h-11 rounded-full bg-gradient-to-tr from-orange-500 to-amber-400 flex items-center justify-center text-white text-xl shadow-lg shadow-orange-500/20">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <div>
                    <span class="block font-black text-lg text-slate-900 tracking-tight leading-none uppercase">REGINA AL BARAKAH</span>
                    <span class="text-[9px] font-bold text-slate-400 tracking-[0.25em] uppercase">Explore. Build. Secure.</span>
                </div>
            </div>

            <!-- Menu Tengah -->
            <div class="hidden md:flex items-center space-x-10 font-bold text-sm text-slate-600">
                <a href="index.php" class="text-orange-600 relative py-1">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-orange-500 rounded-full"></span>
                </a>
                <a href="product.php" class="hover:text-slate-900 transition-colors">Product</a>
                <a href="about.php" class="hover:text-slate-900 transition-colors">About Us</a>
                <a href="contact.php" class="hover:text-slate-900 transition-colors">Contact</a>
            </div>

            <!-- Icon Kanan & Mobile Button -->
            <div class="flex items-center gap-4">
                <button class="hidden lg:flex w-10 h-10 rounded-full border border-stone-200 items-center justify-center text-stone-700 hover:bg-stone-100 transition">
                    <i class="fas fa-search text-sm"></i>
                </button>
                <button class="hidden lg:flex w-10 h-10 rounded-full border border-stone-200 items-center justify-center text-stone-700 hover:bg-stone-100 transition">
                    <i class="far fa-heart text-sm"></i>
                </button>
                <button id="menu-btn" class="md:hidden text-slate-900 text-2xl p-2 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="absolute top-24 left-0 w-full bg-white border-b border-stone-200 shadow-xl md:hidden overflow-hidden">
            <div class="flex flex-col p-6 space-y-4 font-bold text-slate-700">
                <a href="index.php" class="mobile-link py-2 text-orange-600">Home</a>
                <a href="product.php" class="mobile-link py-2 hover:text-orange-600">Product</a>
                <a href="about.php" class="mobile-link py-2 hover:text-orange-600">About Us</a>
                <a href="contact.php" class="mobile-link py-2 hover:text-orange-600">Contact</a>
                <a href="https://wa.me/6282188253433" class="bg-orange-500 text-white p-3 rounded-xl text-center shadow-md">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative pt-32 lg:pt-40 pb-20 overflow-hidden min-h-[85vh] flex items-center">
        <!-- Background Gambar Kanan dengan Bentuk Melengkung -->
        <div class="absolute top-0 right-0 w-full lg:w-[60%] h-[50vh] lg:h-full z-0">
            <img src="../assets/image/contractor.jpg" class="w-full h-full object-cover lg:rounded-bl-[5rem]" alt="Scaffolding Hero">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 lg:from-slate-900/30 to-transparent lg:rounded-bl-[5rem]"></div>
        </div>

        <div class="max-w-[1400px] mx-auto px-6 lg:px-12 relative z-10 w-full">
            <div class="max-w-xl bg-white/80 lg:bg-transparent backdrop-blur-md lg:backdrop-blur-none p-8 lg:p-0 rounded-3xl shadow-xl lg:shadow-none" data-aos="fade-up">
                
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-orange-500/10 border border-orange-500/20 rounded-full text-orange-600 text-xs font-black uppercase tracking-widest mb-6">
                    <span>✨ Solusi Konstruksi & Scaffolding</span>
                </div>
                
                <h1 class="text-4xl md:text-6xl lg:text-[5.5rem] font-black text-slate-900 leading-[1.05] mb-6 tracking-tight">
                    Konstruksi Kokoh. <br><span class="text-orange-500">Hasil Maksimal.</span>
                </h1>
                
                <p class="text-slate-600 text-sm md:text-base mb-8 leading-relaxed font-medium">
                    Pusat sewa dan jual peralatan scaffolding standar industri bergaransi SNI untuk keamanan infrastruktur proyek Anda di Kabupaten Buton.
                </p>
                
                <div class="flex items-center gap-4">
                    <a href="product.php" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold shadow-xl shadow-orange-500/30 transition-all active:scale-95 flex items-center gap-3 text-sm">
                        Explore Now <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FLOATING SEARCH / FILTER BAR (Mirip 100% Bar Pouch Travel Referensi) -->
    <div class="max-w-[1200px] mx-auto px-6 relative z-20 -mt-12 lg:-mt-16 mb-20" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-white rounded-full shadow-2xl shadow-stone-200/70 p-3 lg:p-4 grid grid-cols-1 md:grid-cols-4 gap-4 items-center border border-stone-100">
            
            <div class="flex items-center gap-4 px-6 py-2 border-b md:border-b-0 md:border-r border-stone-100">
                <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center text-orange-500 font-bold">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <h4 class="font-bold text-xs uppercase text-slate-800 tracking-wider">Wilayah Proyek?</h4>
                    <p class="text-xs text-slate-400 font-medium">Kab. Buton & Bau-Bau</p>
                </div>
            </div>

            <div class="flex items-center gap-4 px-6 py-2 border-b md:border-b-0 md:border-r border-stone-100">
                <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center text-orange-500 font-bold">
                    <i class="fas fa-box-open"></i>
                </div>
                <div>
                    <h4 class="font-bold text-xs uppercase text-slate-800 tracking-wider">Ketersediaan</h4>
                    <p class="text-xs text-slate-400 font-medium">1000+ Unit Ready</p>
                </div>
            </div>

            <div class="flex items-center gap-4 px-6 py-2">
                <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center text-orange-500 font-bold">
                    <i class="fas fa-headset"></i>
                </div>
                <div>
                    <h4 class="font-bold text-xs uppercase text-slate-800 tracking-wider">Layanan</h4>
                    <p class="text-xs text-slate-400 font-medium">24/7 Konsultasi</p>
                </div>
            </div>

            <a href="https://wa.me/6282188253433" class="bg-slate-900 hover:bg-orange-500 text-white px-8 py-4 rounded-full font-bold transition-all shadow-md flex items-center justify-center gap-2 text-sm">
                <span>Search</span> <i class="fas fa-search text-xs"></i>
            </a>
        </div>
    </div>

    <!-- ICON FEATURES BAR (Mirip Ikon Adventure, Beach, Nature di Referensi) -->
    <section class="max-w-[1400px] mx-auto px-6 mb-20" data-aos="fade-up">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 py-6 border-b border-stone-200/60">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center text-orange-500 text-lg">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                    <h5 class="font-black text-sm text-slate-900">Safety First</h5>
                    <p class="text-[11px] text-slate-400">Standar SNI Ketat</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center text-orange-500 text-lg">
                    <i class="fas fa-tags"></i>
                </div>
                <div>
                    <h5 class="font-black text-sm text-slate-900">Best Price</h5>
                    <p class="text-[11px] text-slate-400">Sewa Kompetitif</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center text-orange-500 text-lg">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div>
                    <h5 class="font-black text-sm text-slate-900">Fast Delivery</h5>
                    <p class="text-[11px] text-slate-400">Tepat Waktu</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-stone-200 flex items-center justify-center text-orange-500 text-lg">
                    <i class="fas fa-user-tie"></i>
                </div>
                <div>
                    <h5 class="font-black text-sm text-slate-900">Expert Team</h5>
                    <p class="text-[11px] text-slate-400">Tim Profesional</p>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR PRODUCTS SECTION (Mirip "Popular Destinations" di Referensi)[cite: 2] -->
    <section class="max-w-[1400px] mx-auto px-6 mb-24">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10" data-aos="fade-up">
            <div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">Popular Products ✨</h2>
                <p class="text-slate-500 text-sm mt-1">Peralatan scaffolding pilihan utama untuk konstruksi.</p>
            </div>
            <a href="product.php" class="text-sm font-bold text-slate-900 hover:text-orange-500 transition flex items-center gap-2 mt-4 md:mt-0">
                View All Products <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $preview_products = [
                ['name' => 'Jack Base T60', 'cat' => 'Aksesoris Kaki', 'desc' => 'Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya.', 'image' => 'jb60.jpg', 'rating' => '4.8', 'price' => 'Ready Stok'],
                ['name' => 'Scaffolding T170', 'cat' => 'Frame Utama', 'desc' => 'Main frame scaffolding dengan tinggi 170cm penahan beban utama.', 'image' => 'mf17.jpg', 'rating' => '4.9', 'price' => 'Ready Stok'],
                ['name' => 'Catwalk', 'cat' => 'Platform', 'desc' => 'Lantai pijakan besi anti-slip aman di area ketinggian.', 'image' => 'catwalk.jpg', 'rating' => '4.7', 'price' => 'Ready Stok'],
                ['name' => 'Roda Nylon 6 Inch', 'cat' => 'Mobilisasi', 'desc' => 'Roda berbahan nylon dilengkapi pengunci untuk mobilitas.', 'image' => 'roda6.jpg', 'rating' => '4.9', 'price' => 'Ready Stok'],
            ];

            foreach($preview_products as $index => $p): 
                $imgSrc = "../assets/image/" . $p['image'];
                $fallbackSrc = "https://via.placeholder.com/600x800?text=" . urlencode($p['name']);
            ?>
            <!-- Kartu Produk Full Background Image (Gaya Pomaii) -->
            <div class="relative h-[24rem] rounded-[2rem] overflow-hidden group cursor-pointer shadow-lg" 
                 data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>"
                 onclick="openProductModal('<?= addslashes($p['name']) ?>', '<?= addslashes($p['cat']) ?>', '<?= addslashes($p['desc']) ?>', '<?= $imgSrc ?>', '<?= $fallbackSrc ?>')">
                
                <img src="<?= $imgSrc ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[1.2s] group-hover:scale-110" onerror="this.src='<?= $fallbackSrc ?>'" alt="<?= $p['name'] ?>">
                
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent"></div>
                
                <!-- Badge Rating -->
                <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-md px-3 py-1.5 rounded-xl flex items-center gap-1.5 text-white text-xs font-black z-10">
                    <i class="fas fa-star text-amber-400 text-[10px]"></i> <?= $p['rating'] ?>
                </div>

                <!-- Konten Bawah -->
                <div class="absolute bottom-6 left-6 right-6 z-10 flex justify-between items-end">
                    <div>
                        <h3 class="font-black text-xl text-white leading-tight mb-1"><?= $p['name'] ?></h3>
                        <p class="text-slate-300 text-xs font-medium"><?= $p['cat'] ?></p>
                    </div>
                    <span class="text-amber-400 font-bold text-xs bg-black/40 backdrop-blur-sm px-3 py-1.5 rounded-xl"><?= $p['price'] ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- BANNER SPECIAL OFFER (Mirip Bagian Bawah Referensi Pomaii)[cite: 2] -->
    <section class="max-w-[1400px] mx-auto px-6 mb-24" data-aos="fade-up">
        <div class="bg-gradient-to-r from-emerald-950 via-slate-900 to-slate-950 rounded-[2.5rem] p-10 lg:p-16 flex flex-col lg:flex-row items-center justify-between relative overflow-hidden shadow-2xl">
            <div class="absolute inset-0 opacity-15">
                <img src="../assets/image/kantor.jpg" class="w-full h-full object-cover" alt="Kantor">
            </div>
            
            <div class="relative z-10 max-w-xl text-left">
                <div class="inline-flex items-center gap-2 text-orange-400 text-xs font-black tracking-widest uppercase mb-4">
                    <i class="fas fa-bolt"></i> SPECIAL OFFER ✨
                </div>
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-tight">
                    Your Next Project <br>Starts Here.
                </h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed mb-8">
                    Dapatkan penawaran harga khusus sewa scaffolding skala besar dengan fleksibilitas durasi dan layanan antar langsung ke lokasi proyek.
                </p>
                <a href="https://wa.me/6282188253433" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold shadow-xl shadow-orange-500/20 transition-all inline-flex items-center gap-3 text-sm">
                    Discover Packages <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            <!-- Ilustrasi Dekorasi Kanan -->
            <div class="relative z-10 hidden lg:block opacity-20 transform translate-x-12">
                <i class="fas fa-hard-hat text-[14rem] text-amber-400"></i>
            </div>
        </div>
    </section>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/6282188253433" class="wa-float" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- FOOTER (Mirip 100% Bagian Bawah Referensi Pomaii)[cite: 2] -->
    <footer class="bg-white border-t border-stone-200/80 pt-20 pb-12">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-left mb-16">
                
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-orange-500 to-amber-400 flex items-center justify-center text-white text-lg">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h2 class="text-xl font-black tracking-tight text-slate-900">REGINA AL BARAKAH</h2>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 max-w-sm font-medium">
                        We bring you closer to the world's most amazing places with unbeatable travel experiences. (Pusat Scaffolding Terpercaya di Buton).
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-slate-900 hover:text-white transition"><i class="fab fa-facebook-f text-sm"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-slate-900 hover:text-white transition"><i class="fab fa-instagram text-sm"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full border border-stone-200 flex items-center justify-center text-stone-700 hover:bg-slate-900 hover:text-white transition"><i class="fab fa-youtube text-sm"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xs font-black uppercase tracking-widest text-slate-900 mb-6">Company</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li><a href="about.php" class="hover:text-orange-500 transition">About Us</a></li>
                        <li><a href="product.php" class="hover:text-orange-500 transition">Products</a></li>
                        <li><a href="contact.php" class="hover:text-orange-500 transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xs font-black uppercase tracking-widest text-slate-900 mb-6">Support</h3>
                    <ul class="space-y-4 text-slate-500 text-sm font-medium">
                        <li><span class="text-slate-800 font-bold">Jl. Raya Trans Sulawesi, Bau-Bau, Buton.</span></li>
                        <li><span class="text-slate-800 font-bold">0821-8825-3433</span></li>
                    </ul>
                </div>
            </div>

            <!-- Bawah Footer: Statistik & Copyright -->
            <div class="pt-8 border-t border-stone-100 flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex gap-10 text-center md:text-left">
                    <div>
                        <h4 class="font-black text-slate-900 text-xl">1000+</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Units Ready</p>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-900 text-xl">50K+</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Happy Clients</p>
                    </div>
                    <div>
                        <h4 class="font-black text-slate-900 text-xl">4.9 ⭐</h4>
                        <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Average Rating</p>
                    </div>
                </div>

                <div class="text-center md:text-right">
                    <p class="text-xs text-slate-400 font-medium">
                        © 2026 Regina Al Barakah Group. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- MODAL DETAIL PRODUK -->
    <div id="productModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-md z-[200] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-[2.5rem] max-w-md w-full overflow-hidden shadow-2xl border border-stone-100 transform scale-90 transition-transform duration-300 relative flex flex-col max-h-[90vh]">
            
            <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-slate-900/60 text-white w-9 h-9 rounded-full flex items-center justify-center hover:bg-slate-900 transition-colors z-30 focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="h-64 sm:h-72 bg-stone-100 relative flex-shrink-0">
                <img id="modalImg" src="" class="w-full h-full object-cover" alt="Product Modal Image">
            </div>

            <div class="px-6 pb-6 sm:px-8 sm:pb-8 pt-0 flex flex-col overflow-y-auto">
                <h3 id="modal-title" class="font-black text-xl sm:text-2xl text-slate-900 mb-2 italic uppercase tracking-tight leading-tight mt-5"></h3>
                <p id="modal-desc" class="text-slate-500 text-sm leading-relaxed mb-6"></p>
                
                <div class="grid grid-cols-2 gap-4">
                    <button onclick="closeProductModal()" class="border border-stone-200 bg-white text-slate-700 py-3.5 rounded-xl font-black hover:bg-stone-50 transition-colors uppercase text-[11px] tracking-widest shadow-sm">
                        Tutup
                    </button>
                    <a id="modal-wa-btn" href="" target="_blank" class="bg-emerald-600 text-white py-3.5 rounded-xl font-black hover:bg-emerald-700 transition-colors uppercase text-[11px] tracking-widest flex items-center justify-center gap-2 shadow-sm">
                        <i class="fab fa-whatsapp text-sm"></i> Hubungi Kami
                    </a>
                </div>
                
                <div class="mt-6 pt-5 border-t border-stone-100 flex justify-center">
                    <button id="modal-view-full" onclick="openImagePopup()" class="text-orange-600 hover:text-orange-800 font-black text-[11px] tracking-widest uppercase flex items-center gap-2 focus:outline-none">
                        <i class="fas fa-eye text-xs"></i> Lihat Gambar Full Standar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- LIGHTBOX GAMBAR FULL -->
    <div id="imageFullModal" class="fixed inset-0 bg-slate-950/95 backdrop-blur-md z-[250] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative max-w-4xl w-full max-h-[90vh] flex items-center justify-center transform scale-90 transition-transform duration-300">
            <button onclick="closeImageModal()" class="absolute -top-12 right-0 md:-top-10 md:-right-10 bg-white/10 hover:bg-white/20 text-white w-10 h-10 rounded-full flex items-center justify-center transition-colors focus:outline-none text-lg">
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