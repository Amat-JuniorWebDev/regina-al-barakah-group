<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Katalog Produk Scaffolding | Regina Al Barakah Group</title>
    
    <meta content="Daftar katalog produk sewa dan jual scaffolding standar industri terpercaya di Bau-Bau, Buton dan sekitarnya." name="description">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- PANGGIL FILE JS & CSS -->
    <script src="../assets/js/product.js"></script>
    <link rel="stylesheet" href="../assets/css/product.css">
</head>

<body class="antialiased font-sans selection:bg-brand-blue lg:selection:bg-[#E53935] selection:text-white bg-[#F8F9FB] lg:bg-[#F4F5F7] text-slate-800 lg:text-[#1E1E1E] pb-24 lg:pb-0 overflow-x-hidden">

    <!-- ============================================================== -->
    <!-- 📱 TAMPILAN MOBILE & TABLET (Sembunyi di Desktop) -->
    <!-- ============================================================== -->
    <div class="block lg:hidden flex justify-center w-full bg-[#F8F9FB] min-h-screen relative flex-col overflow-x-hidden">
        
        <!-- Header & Hamburger Menu Mobile -->
        <header class="fixed top-3 left-1/2 -translate-x-1/2 w-[calc(100%-1.5rem)] max-w-[400px] z-50">
            <div class="bg-[#1E1E1E] border border-white/20 rounded-full px-4 py-2.5 flex items-center justify-between shadow-xl relative z-50">
                <a class="flex items-center space-x-2.5" href="#">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center flex-shrink-0 text-white shadow-sm">
                        <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 24 24"><path d="M19 2H9c-1.1 0-2 .9-2 2v3H5c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM5 9h2v2H5V9zm0 4h2v2H5v-2zm0 4h2v2H5v-2zm14 2H9v-2h2v-2H9v-2h2v-2H9V9h2V7H9V4h10v15zm-6-8h2v2h-2v-2zm0 4h2v2h-2v-2zm0-8h2v2h-2V7zm4 0h2v2h-2V7zm0 4h2v2h-2v-2zm0 4h2v2h-2v-2z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-display text-[13px] tracking-tight leading-none font-bold">REGINA AL BARAKAH</span>
                        <span class="text-slate-400 font-sans text-[9px] tracking-wider uppercase leading-tight mt-1">SCAFFOLDING & KONSTRUKSI</span>
                    </div>
                </a>
                <div class="flex items-center space-x-2.5">
                    <a class="bg-white text-slate-900 px-4 py-1.5 rounded-full font-display text-xs font-semibold inline-flex items-center space-x-1 hover:bg-slate-100 active:scale-95 transition-all shadow-sm" href="#kontak-mobile">
                        <span class="">Sewa</span>
                        <svg class="w-3 h-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7V17"></path></svg>
                    </a>
                    <button id="mobile-menu-btn" aria-label="Buka Menu" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20 active:scale-95 transition-all" type="button">
                        <div class="flex flex-col space-y-1">
                            <span class="w-4 h-0.5 bg-white rounded-full"></span>
                            <span class="w-4 h-0.5 bg-white rounded-full"></span>
                            <span class="w-4 h-0.5 bg-white rounded-full"></span>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Dropdown Menu Mobile -->
            <div id="mobile-menu" class="hidden absolute top-14 left-0 w-full bg-white rounded-3xl shadow-2xl border border-slate-200 overflow-hidden transform transition-all font-display z-40 mt-2">
                <div class="flex flex-col">
                    <a href="index.php" class="px-5 py-4 text-sm font-bold text-slate-900 border-b border-slate-100 flex items-center justify-between hover:bg-slate-50">Beranda <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                    <a href="product.php" class="px-5 py-4 text-sm font-bold text-slate-900 border-b border-slate-100 flex items-center justify-between hover:bg-slate-50">Produk & Komponen <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                    <a href="about.php" class="px-5 py-4 text-sm font-bold text-slate-900 border-b border-slate-100 flex items-center justify-between hover:bg-slate-50">Tentang Kami <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                    <a href="contact.php" class="px-5 py-4 text-sm font-bold text-slate-900 flex items-center justify-between hover:bg-slate-50">Kontak <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </header>

        <!-- Hero Section Mobile -->
        <section class="pt-24 pb-8 px-4 bg-[#1E1E1E] text-white relative rounded-b-[2rem] overflow-hidden">
            <div class="absolute -top-10 -right-10 w-52 h-52 bg-[#5084C4]/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 -left-12 w-48 h-48 bg-[#E53935]/15 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 bg-white/10 border border-white/15 rounded-full w-fit backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-white font-display text-[11px] tracking-wide font-medium uppercase">STOK READY 1.000+ SET SNI</span>
                </div>
                <h1 class="text-white font-display font-extrabold text-[36px] leading-[44px] tracking-tight">Katalog Produk & <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-400 to-[#E53935]">Komponen</span></h1>
                <p class="text-slate-300 text-[13px] leading-relaxed">Daftar lengkap peralatan scaffolding standar industri untuk keamanan dan efisiensi proyek konstruksi Anda di Bau-Bau, Buton & sekitarnya.</p>
                <div class="pt-2">
                    <a class="w-full bg-white text-slate-900 py-3.5 px-6 rounded-full font-bold text-[14px] flex items-center justify-center space-x-2 shadow-md hover:bg-slate-100 active:scale-95 transition-all tracking-wide uppercase font-display" href="#katalog-mobile">
                        <span class="">JELAJAHI KATALOG</span>
                        <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>

                <div class="mt-3 p-3.5 rounded-xl bg-white/[0.08] border border-white/15 backdrop-blur-md flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-[#E53935]/20 flex items-center justify-center flex-shrink-0 text-rose-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-white text-[12px] font-bold leading-tight font-display">Gudang & Logistik Buton</p>
                        <p class="text-slate-300 text-[11px] leading-tight mt-0.5">Unit 1.000+ Set SNI • Armada Mandiri</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Bar Mobile -->
        <section class="py-4 px-4 bg-[#F8F9FB] border-b border-slate-200 sticky top-14 z-40 backdrop-blur-md bg-[#F8F9FB]/90" id="katalog-mobile">
            <div class="flex items-center space-x-2 overflow-x-auto no-scrollbar py-1">
                <button class="filter-btn-mobile bg-[#1E1E1E] text-white font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap font-bold shadow-sm transition-transform active:scale-95 border border-[#1E1E1E]" data-filter="all">Semua Produk</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Frame Utama">Frame Utama</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Aksesoris Kaki">Aksesoris Kaki</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Platform">Platform</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Aksesoris Mobilisasi">Aksesoris Mobilisasi</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Frame Tambahan">Frame Tambahan</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Aksesoris Atas">Aksesoris Atas</button>
                <button class="filter-btn-mobile bg-white border border-slate-200 text-slate-500 font-display text-[12px] px-4 py-2 rounded-full whitespace-nowrap hover:text-slate-900 transition-colors active:scale-95" data-filter="Penyangga Tunggal">Penyangga Tunggal</button>
            </div>
        </section>

        <!-- Product Cards Mobile -->
        <main class="px-4 py-5 space-y-4">
            
            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Aksesoris Kaki" data-desc="Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws" data-title="Jack Base T60">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Jack Base T60" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws">
                    <span class="absolute top-2.5 left-2.5 bg-[#5084C4]/10 text-[#5084C4] border border-[#5084C4]/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Aksesoris Kaki</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Jack Base T60</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk menstabilkan struktur di permukaan tanah tidak rata.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-[#5084C4] border border-slate-200 hover:border-[#5084C4] hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Frame Utama" data-desc="Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri." data-img="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw" data-title="Scaffolding T170">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Scaffolding T170" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw">
                    <span class="absolute top-2.5 left-2.5 bg-[#E53935]/10 text-[#E53935] border border-[#E53935]/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Frame Utama</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Scaffolding T170</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Main frame scaffolding tinggi 170cm penahan beban kokoh dengan spesifikasi pipa baja galvanis presisi untuk struktur bertingkat.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-[#E53935] border border-slate-200 hover:border-[#E53935] hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Platform" data-desc="Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian." data-img="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU" data-title="Catwalk">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Catwalk Plat" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU">
                    <span class="absolute top-2.5 left-2.5 bg-blue-500/10 text-blue-600 border border-blue-500/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Platform</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Catwalk Plat Pijakan</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Lantai pijakan besi berlubang anti-slip dengan pengait kokoh, dirancang untuk keselamatan kerja pada ketinggian elevasi tinggi.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-blue-500 border border-slate-200 hover:border-blue-500 hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Aksesoris Mobilisasi" data-desc="Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY" data-title="Roda Nylon 6 Inch">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Roda Nylon 6 Inch" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY">
                    <span class="absolute top-2.5 left-2.5 bg-emerald-500/10 text-emerald-600 border border-emerald-500/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Aksesoris Mobilisasi</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Roda Nylon 6 Inch</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-emerald-500 border border-slate-200 hover:border-emerald-500 hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Frame Tambahan" data-desc="Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA" data-title="Ladder Frame T90">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Ladder Frame T90" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA">
                    <span class="absolute top-2.5 left-2.5 bg-[#5084C4]/10 text-[#5084C4] border border-[#5084C4]/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Frame Tambahan</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Ladder Frame T90</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-[#5084C4] border border-slate-200 hover:border-[#5084C4] hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Aksesoris Atas" data-desc="Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ" data-title="U-Head T60">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="U-Head T60" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ">
                    <span class="absolute top-2.5 left-2.5 bg-[#E53935]/10 text-[#E53935] border border-[#E53935]/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Aksesoris Atas</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">U-Head T60</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-[#E53935] border border-slate-200 hover:border-[#E53935] hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>

            <article class="product-card-mobile bg-white border border-slate-200 rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group" data-category="Penyangga Tunggal" data-desc="Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A" data-title="Pipe Support Ts-90">
                <div class="relative w-full h-52 bg-[#F8F9FB] rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Pipe Support Ts-90" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A">
                    <span class="absolute top-2.5 left-2.5 bg-[#5084C4]/10 text-[#5084C4] border border-[#5084C4]/20 px-2.5 py-1 rounded-full text-[10px] font-bold font-display uppercase tracking-wider">Penyangga Tunggal</span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <h2 class="text-slate-900 text-base font-extrabold font-display mt-1">Pipe Support Ts-90</h2>
                    <p class="text-slate-500 text-[11px] leading-relaxed">Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai.</p>
                </div>
                <div class="pt-2 flex items-center justify-between border-t border-slate-100 mt-2">
                    <span class="text-slate-400 font-bold text-[10px] uppercase tracking-wider flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Ready</span>
                    <button class="bg-slate-50 hover:bg-[#5084C4] border border-slate-200 hover:border-[#5084C4] hover:text-white text-slate-700 px-4 py-2 rounded-full font-bold text-[11px] inline-flex items-center space-x-1.5 transition-all font-display shadow-sm" onclick="openModalMobile(this)">
                        <span class="">Sewa Alat</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </article>
        </main>

        <!-- Premium Feature Pillars Mobile -->
        <section class="px-4 py-8 bg-[#F8F9FB]">
            <div class="flex flex-col space-y-1.5 mb-5">
                <span class="text-[#E53935] text-[10px] uppercase font-bold tracking-wider font-display">STANDAR KUALITAS</span>
                <h2 class="text-slate-900 text-xl font-extrabold font-display">Keunggulan Layanan Kami</h2>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-white border border-slate-200 p-4 rounded-2xl shadow-sm flex flex-col space-y-2">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 border border-rose-100 text-[#E53935] flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 class="text-slate-900 text-sm font-extrabold font-display">10+ Tahun</h3>
                    <p class="text-slate-500 text-[10px] leading-tight font-medium">Pengalaman Proyek Sipil</p>
                </div>
                <div class="bg-white border border-slate-200 p-4 rounded-2xl shadow-sm flex flex-col space-y-2">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 border border-rose-100 text-[#E53935] flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 class="text-slate-900 text-sm font-extrabold font-display">1.000+ Unit</h3>
                    <p class="text-slate-500 text-[10px] leading-tight font-medium">Ready Stock Gudang</p>
                </div>
                <div class="bg-white border border-slate-200 p-4 rounded-2xl shadow-sm flex flex-col space-y-2">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 border border-rose-100 text-[#E53935] flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 class="text-slate-900 text-sm font-extrabold font-display">Transparan</h3>
                    <p class="text-slate-500 text-[10px] leading-tight font-medium">Tanpa Biaya Siluman</p>
                </div>
                <div class="bg-white border border-slate-200 p-4 rounded-2xl shadow-sm flex flex-col space-y-2">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 border border-rose-100 text-[#E53935] flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </div>
                    <h3 class="text-slate-900 text-sm font-extrabold font-display">Standar K3</h3>
                    <p class="text-slate-500 text-[10px] leading-tight font-medium">Baja SNI Teruji Aman</p>
                </div>
            </div>
        </section>

        <!-- Product Modal Mobile -->
        <div class="fixed inset-0 z-[100] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4" id="product-modal-mobile">
            <div class="bg-white rounded-[24px] max-w-sm w-full overflow-hidden shadow-2xl border border-slate-200 transform transition-all">
                <div class="relative bg-[#F4F5F7] aspect-[4/3] flex items-center justify-center p-6 border-b border-slate-100">
                    <button aria-label="Tutup" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-slate-700 hover:bg-white shadow-sm transition-all border border-slate-200" onclick="closeModalMobile()">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-[9px] font-bold tracking-wider uppercase bg-[#1E1E1E] text-white shadow-sm font-display" id="modal-category-mobile">Kategori</span>
                    <img alt="Detail Produk" class="max-h-full max-w-full object-contain" id="modal-img-mobile" src="">
                </div>
                <div class="p-6">
                    <h3 class="text-xl text-slate-900 font-extrabold font-display leading-tight" id="modal-title-mobile">Nama Komponen</h3>
                    <p class="text-xs text-slate-500 mt-2 leading-relaxed" id="modal-desc-mobile">Deskripsi komponen spesifikasi lengkap dan rekomendasi penggunaan scaffolding standar.</p>
                    <div class="mt-5 pt-5 border-t border-slate-100 flex flex-col gap-3">
                        <a class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#1E1E1E] text-white hover:bg-slate-800 text-xs font-bold transition-all shadow-md font-display" href="#" id="modal-wa-link-mobile" target="_blank">
                            <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                            <span class="">Pesan via WhatsApp</span>
                        </a>
                        <button class="w-full px-6 py-3 rounded-full border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-bold transition-colors font-display shadow-sm" onclick="closeModalMobile()">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Mobile -->
        <footer class="bg-white text-slate-600 border-t border-slate-200 pt-8 pb-24 px-4" id="kontak-mobile">
            <div class="max-w-md mx-auto space-y-6">
                <div>
                    <div class="flex items-center gap-2.5 mb-2.5">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center text-white shadow-sm flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path></svg>
                        </div>
                        <span class="text-sm font-extrabold text-slate-900 tracking-tight font-display uppercase italic">REGINA AL BARAKAH GROUP</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3.5">Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.</p>
                </div>

                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#5084C4] mb-3 font-display">MENU UTAMA</h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-600">
                        <li><a href="index.php" class="hover:text-brand-blue transition-colors block py-0.5">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-brand-blue transition-colors block py-0.5">Produk</a></li>
                        <li><a href="about.php" class="hover:text-brand-blue transition-colors block py-0.5">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-brand-blue transition-colors block py-0.5">Kontak</a></li>
                    </ul>
                </div>

                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-3 font-display">HUBUNGI KAMI</h4>
                    <div class="space-y-2.5 mb-4 text-xs text-slate-600">
                        <div class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#E53935] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span>Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#E53935] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span class="font-bold text-slate-900">0812-4220-7221 (Admin 1)</span>
                        </div>
                    </div>

                    <a href="https://wa.me/6281242207221" class="w-full py-3.5 px-4 rounded-xl bg-[#059669] hover:bg-emerald-600 text-white font-bold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md transition-all active:scale-[0.99] font-display mt-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                        <span class="">WHATSAPP KAMI</span>
                    </a>
                </div>

                <div class="border-t border-slate-100 pt-4 text-[10px] text-slate-400 flex flex-col gap-1 text-center mt-4">
                    <p class="font-medium text-slate-600">© 2026 Regina Al Barakah Group</p>
                    <p class="">Layanan Scaffolding Terpercaya di Sulawesi Tenggara</p>
                </div>
            </div>
        </footer>

        <!-- Mobile Premium Floating WhatsApp -->
        <aside class="fixed bottom-4 right-4 z-50">
            <a class="relative flex items-center gap-2.5 px-5 py-3 rounded-full bg-gradient-to-r from-[#128C7E] to-[#25D366] text-white shadow-[0_8px_25px_rgba(37,211,102,0.4)] hover:shadow-[0_12px_35px_rgba(37,211,102,0.6)] border border-emerald-400/30 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1.5 active:scale-95 group font-semibold text-xs tracking-wide overflow-hidden font-display" href="https://wa.me/6281242207221">
                <span class="absolute inset-0 w-full h-full -ml-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:translate-x-[200%] transition-transform duration-1000 ease-in-out"></span>
                <svg class="w-4 h-4 fill-current flex-shrink-0 z-10 relative" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path>
                </svg>
                <span class="text-xs font-bold tracking-wide z-10 relative">Tanya Sewa Cepat</span>
            </a>
        </aside>
    </div>

    <!-- ============================================================== -->
    <!-- 💻 TAMPILAN DESKTOP (Sembunyi di Mobile & Tablet) -->
    <!-- ============================================================== -->
    <div class="hidden lg:block">
        <div class="max-w-[1360px] mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-6 space-y-6">
            
            <!-- Hero Banner Desktop -->
            <section class="relative overflow-hidden rounded-[32px] bg-[#111827] text-white min-h-[640px] lg:min-h-[720px] flex flex-col justify-between shadow-2xl" id="hero">
                <img alt="Gudang Logistik & Scaffolding Regina Al Barakah" class="absolute inset-0 w-full h-full object-cover object-center z-0" src="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8">
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-900/70 to-slate-950/40 z-[1]"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-slate-950/30 z-[1]"></div>

                <!-- NavigationBar Desktop -->
                <header class="relative z-20 px-5 sm:px-8 pt-5 sm:pt-6">
                    <div class="flex items-center justify-between gap-4">
                        <a class="flex items-center gap-3 group" href="#" title="Regina Al Barakah Group">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-rose-600/30 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-extrabold text-base sm:text-lg tracking-tight block text-white leading-tight font-display">REGINA AL BARAKAH</span>
                                <span class="text-[10px] sm:text-xs font-medium text-rose-300 tracking-wider uppercase block font-sans">SCAFFOLDING & KONSTRUKSI</span>
                            </div>
                        </a>
                        
                        <nav class="hidden lg:flex items-center glass-nav px-5 py-2 rounded-full text-xs xl:text-sm font-medium text-slate-100 space-x-1 shadow-inner font-display">
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="index.php">Home</a>
                            <a class="px-4 py-1.5 rounded-full bg-white/20 text-white font-semibold shadow-sm transition" href="product.php">Product</a>
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="about.php">About Us</a>
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="contact.php">Contact</a>
                        </nav>
                        
                        <div class="flex items-center gap-2">
                            <a class="inline-flex items-center gap-2 bg-white text-[#1E1E1E] hover:bg-slate-100 font-bold px-5 sm:px-6 py-2.5 rounded-full text-xs sm:text-sm transition-all shadow-lg hover:shadow-xl active:scale-95 group font-display" href="https://wa.me/6281242207221" target="_blank">
                                <span class="">Konsultasi / Sewa</span>
                                <span class="w-5 h-5 rounded-full bg-[#1E1E1E] text-white flex items-center justify-center text-[10px] group-hover:rotate-45 transition-transform duration-300">↗</span>
                            </a>
                        </div>
                    </div>
                </header>

                <div class="relative z-10 px-5 sm:px-8 py-8 sm:py-12 my-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-500/20 border border-rose-500/40 text-rose-300 text-xs font-semibold uppercase tracking-wider backdrop-blur-sm font-display">
                            <span class="w-2 h-2 rounded-full bg-rose-400 animate-ping"></span>
                            ● STOK READY 1.000+ SET SNI SIAP ANTAR
                        </div>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-extrabold text-white tracking-tight leading-[1.12] font-display">
                            Katalog Produk & Komponen <br class="hidden sm:inline">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-[#E53935]">Standar Industri</span>
                        </h1>
                        <p class="text-slate-300 text-sm sm:text-base md:text-lg max-w-xl font-normal leading-relaxed">
                            Daftar lengkap peralatan scaffolding standar industri untuk keamanan dan efisiensi proyek konstruksi Anda di Bau-Bau, Buton, dan sekitarnya.
                        </p>
                        <div class="pt-2">
                            <a class="inline-flex items-center gap-3 bg-white text-[#1E1E1E] font-bold px-7 py-3.5 rounded-full text-sm sm:text-base hover:bg-slate-100 transition shadow-2xl group font-display" href="#katalog"><span class="">Jelajahi Katalog</span><span class="w-6 h-6 rounded-full bg-[#1E1E1E] text-white flex items-center justify-center text-xs group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">↗</span></a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 relative w-full">
                        <div class="space-y-3 relative">
                            <!-- Floating Card 1 -->
                            <div class="glass-card-dark rounded-2xl p-3 sm:p-4 text-white flex items-center gap-3 sm:gap-4 transition-all hover:bg-white/10 group">
                                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden flex-shrink-0 relative border border-white/10">
                                    <img alt="Armada Truk Pengiriman" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1WyxhuY4dW_dy6Ur74s_eFGTLeiPpHhwR1YkP80R1Vp7wSHz6XwpnYStqGo2Qvkt2BFTumtMZPiKYWBXlKP7FK98W9OTTdkhBevnZgRwWBtBRfOhEh_CPpyLDVVvu5imXBhovvBdxNG2qevj86-NuG-AH8Kc9FcWh-ao2tU79iv9_RKey-SjC4w7i0XFMPisDRJxi9ZU0f8oGR5rfdgQyWfoPJ9rgdLUsMkJRGJph_0KFV3nJp4_Kie8_U">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-sm sm:text-base text-white truncate font-display">Bau-Bau ➔ Pasarwajo</h2>
                                        <span class="text-[11px] font-semibold bg-[#E53935]/20 text-rose-300 px-2 py-0.5 rounded-md border border-[#E53935]/30">Armada Cepat</span>
                                    </div>
                                    <p class="text-xs text-slate-300 mt-0.5">Pengiriman Cepat Armada Mandiri</p>
                                    <div class="mt-2 text-xs font-semibold text-rose-400 flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        <span class="">Estimasi 1 - 2 Jam Tiba di Lokasi</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Floating Card 2 -->
                            <div class="glass-card-dark rounded-2xl p-3 sm:p-4 text-white flex items-center gap-3 sm:gap-4 transition-all hover:bg-white/10 group">
                                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden flex-shrink-0 relative border border-white/10">
                                    <img alt="Unit Main Frame Proyek" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-sm sm:text-base text-white truncate font-display">Kawasan Proyek Buton</h2>
                                        <span class="text-[11px] font-semibold bg-emerald-500/20 text-emerald-300 px-2 py-0.5 rounded-md border border-emerald-500/30">SNI Ready</span>
                                    </div>
                                    <p class="text-xs text-slate-300 mt-0.5">Unit Ready 1.000+ Set Lengkap</p>
                                    <div class="mt-2 text-xs font-semibold text-emerald-400 flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        <span class="">Layanan Bongkar Pasang Ahli</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 px-5 sm:px-8 pb-6 pt-3 border-t border-white/10 flex flex-wrap items-center gap-2">
                    <a class="px-4 py-1.5 rounded-full bg-white/20 hover:bg-white/30 text-white text-xs font-medium backdrop-blur-md transition" href="#katalog">Main Frame</a>
                    <a class="px-4 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white text-xs font-medium backdrop-blur-md transition" href="#katalog">Jack Base</a>
                    <a class="px-4 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white text-xs font-medium backdrop-blur-md transition" href="#katalog">Catwalk Plat</a>
                    <a class="px-4 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white text-xs font-medium backdrop-blur-md transition" href="#katalog">Roda Caster</a>
                    <a class="px-4 py-1.5 rounded-full bg-white/10 hover:bg-white/20 text-slate-300 hover:text-white text-xs font-medium backdrop-blur-md transition" href="#katalog">Aksesoris & Pipa</a>
                </div>
            </section>

            <!-- Features Desktop -->
            <section class="py-2 mb-16">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div class="bg-white rounded-2xl p-5 border border-[#E0E0E0] subtle-shadow hover:border-slate-300 transition-all flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center flex-shrink-0 text-[#E53935] shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-sm text-[#1E1E1E] font-display">10+ Tahun</h2>
                            <p class="text-xs text-[#757575] mt-1 leading-snug">Pengalaman Proyek Sipil</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-[#E0E0E0] subtle-shadow hover:border-slate-300 transition-all flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center flex-shrink-0 text-[#E53935] shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-sm text-[#1E1E1E] font-display">Full Cycle</h2>
                            <p class="text-xs text-[#757575] mt-1 leading-snug">Sewa, Pasang & Bongkar</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-[#E0E0E0] subtle-shadow hover:border-slate-300 transition-all flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center flex-shrink-0 text-[#E53935] shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-sm text-[#1E1E1E] font-display">Transparan</h2>
                            <p class="text-xs text-[#757575] mt-1 leading-snug">Tanpa Biaya Tersembunyi</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-[#E0E0E0] subtle-shadow hover:border-slate-300 transition-all flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center flex-shrink-0 text-[#E53935] shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-sm text-[#1E1E1E] font-display">Standar K3</h2>
                            <p class="text-xs text-[#757575] mt-1 leading-snug">Baja SNI Teruji Aman</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- White Catalog Cards Section Desktop -->
            <section class="mb-24" id="katalog">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-50 border border-rose-100 text-[#E53935] text-xs font-semibold tracking-wide mb-3 uppercase font-display">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span class="">INVENTARIS SCAFFOLDING</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-[#1E1E1E] font-display">Katalog Produk & Spesifikasi Komponen</h2>
                        <p class="text-[#757575] text-sm mt-1 max-w-xl">
                            Peralatan konstruksi modular teruji standar keselamatan kerja (K3) dengan perawatan berkala.
                        </p>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-semibold text-[#757575] bg-slate-50 px-4 py-2.5 rounded-full border border-slate-200 shadow-sm">
                        <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <span class="">Menampilkan <strong class="text-[#1E1E1E] font-bold font-display" id="product-count-desktop">7</strong> Komponen Siap Pakai</span>
                    </div>
                </div>

                <!-- Filters -->
                <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 scrollbar-none" id="category-filters-desktop">
                    <button class="filter-btn-desktop active-filter px-5 py-2.5 rounded-full text-sm font-semibold transition-all bg-[#1E1E1E] text-white shadow-sm flex-shrink-0 font-display border border-[#1E1E1E]" data-filter="all">Semua Produk</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Frame Utama">Frame Utama</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Aksesoris Kaki">Aksesoris Kaki</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Platform">Platform</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Aksesoris Mobilisasi">Aksesoris Mobilisasi</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Frame Tambahan">Frame Tambahan</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Aksesoris Atas">Aksesoris Atas</button>
                    <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-sm font-medium text-slate-500 hover:text-slate-900 bg-white border border-slate-200 hover:bg-slate-50 transition-all flex-shrink-0 font-display" data-filter="Penyangga Tunggal">Penyangga Tunggal</button>
                </div>

                <!-- Product Grid Desktop -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="product-grid-desktop">
                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-[#5084C4]/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Kaki" data-desc="Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws" data-title="Jack Base T60">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-[#5084C4] border border-[#5084C4]/20 shadow-sm font-display">Aksesoris Kaki</span>
                            <img alt="Jack Base T60" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#5084C4] transition-colors font-display">Jack Base T60</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-[#5084C4] hover:text-white border border-slate-200 hover:border-[#5084C4] text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-[#E53935]/40 transition-all duration-300 flex flex-col" data-category="Frame Utama" data-desc="Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri." data-img="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw" data-title="Scaffolding T170">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-[#E53935] border border-[#E53935]/20 shadow-sm font-display">Frame Utama</span>
                            <img alt="Scaffolding T170" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#E53935] transition-colors font-display">Scaffolding T170</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-[#E53935] hover:text-white border border-slate-200 hover:border-[#E53935] text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-blue-500/40 transition-all duration-300 flex flex-col" data-category="Platform" data-desc="Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian." data-img="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU" data-title="Catwalk">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-blue-500 border border-blue-500/20 shadow-sm font-display">Platform</span>
                            <img alt="Catwalk" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-500 transition-colors font-display">Catwalk</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-blue-500 hover:text-white border border-slate-200 hover:border-blue-500 text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-emerald-500/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Mobilisasi" data-desc="Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY" data-title="Roda Nylon 6 Inch">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-emerald-600 border border-emerald-500/20 shadow-sm font-display">Aksesoris Mobilisasi</span>
                            <img alt="Roda Nylon 6 Inch" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-emerald-600 transition-colors font-display">Roda Nylon 6 Inch</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-emerald-500 hover:text-white border border-slate-200 hover:border-emerald-500 text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-[#5084C4]/40 transition-all duration-300 flex flex-col" data-category="Frame Tambahan" data-desc="Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA" data-title="Ladder Frame T90">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-[#5084C4] border border-[#5084C4]/20 shadow-sm font-display">Frame Tambahan</span>
                            <img alt="Ladder Frame T90" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#5084C4] transition-colors font-display">Ladder Frame T90</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-[#5084C4] hover:text-white border border-slate-200 hover:border-[#5084C4] text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-[#E53935]/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Atas" data-desc="Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ" data-title="U-Head T60">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-[#E53935] border border-[#E53935]/20 shadow-sm font-display">Aksesoris Atas</span>
                            <img alt="U-Head T60" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#E53935] transition-colors font-display">U-Head T60</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-[#E53935] hover:text-white border border-slate-200 hover:border-[#E53935] text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card-desktop group bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl hover:border-[#5084C4]/40 transition-all duration-300 flex flex-col" data-category="Penyangga Tunggal" data-desc="Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A" data-title="Pipe Support Ts-90">
                        <div class="relative bg-[#F8F9FB] aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-slate-100">
                            <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md text-[#5084C4] border border-[#5084C4]/20 shadow-sm font-display">Penyangga Tunggal</span>
                            <img alt="Pipe Support Ts-90" class="max-h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-lg font-bold text-slate-900 group-hover:text-[#5084C4] transition-colors font-display">Pipe Support Ts-90</h3>
                            <p class="text-sm text-slate-500 mt-2 line-clamp-2 flex-grow leading-relaxed">Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai.</p>
                            <div class="pt-5 mt-5 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs text-slate-500 font-semibold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-slate-50 hover:bg-[#5084C4] hover:text-white border border-slate-200 hover:border-[#5084C4] text-slate-700 text-xs font-bold transition-all duration-300 font-display shadow-sm" onclick="openModalDesktop(this)">
                                    Lihat Detail <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- FAQ Desktop Section -->
            <section class="bg-white rounded-[32px] p-6 sm:p-10 lg:p-12 border border-[#E0E0E0] subtle-shadow max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 mb-24" id="faq">
                <div class="max-w-4xl mx-auto space-y-8">
                    <div class="text-center space-y-3">
                        <div class="inline-block px-3.5 py-1 rounded-full bg-slate-100 text-slate-600 text-xs font-semibold tracking-wide border border-slate-200 uppercase font-display">INFORMASI & FAQ</div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#1E1E1E] tracking-tight font-display">Pertanyaan yang Sering Diajukan</h2>
                    </div>
                    <div class="space-y-4 pt-2">
                        <details class="group bg-[#F4F5F7] rounded-2xl border border-slate-200/80 p-5 sm:p-6 transition-all duration-300 open:bg-white open:shadow-md open:border-[#E53935]/20" open="">
                            <summary class="flex items-center justify-between cursor-pointer list-none gap-4 font-bold text-sm sm:text-base text-[#1E1E1E] select-none">
                                <span class="flex items-center gap-3.5">
                                    <span class="w-10 h-10 rounded-xl bg-rose-50 border border-rose-100 flex items-center justify-center text-[#E53935] flex-shrink-0 shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                                    <span class="font-display">Bagaimana sistem pembayaran sewa scaffolding di sini?</span>
                                </span>
                                <span class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 group-open:rotate-180 group-open:text-[#E53935] transition-transform duration-300 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <p class="mt-4 pl-0 sm:pl-[54px] text-xs sm:text-sm text-[#757575] leading-relaxed pr-10">Sistem pembayaran sangat fleksibel (bisa per periode harian, mingguan, atau bulanan). Pembayaran dapat dilakukan via transfer bank resmi perusahaan dengan invoice dan kwitansi sah.</p>
                        </details>

                        <details class="group bg-[#F4F5F7] rounded-2xl border border-slate-200/80 p-5 sm:p-6 transition-all duration-300 open:bg-white open:shadow-md open:border-blue-500/20">
                            <summary class="flex items-center justify-between cursor-pointer list-none gap-4 font-bold text-sm sm:text-base text-[#1E1E1E] select-none">
                                <span class="flex items-center gap-3.5">
                                    <span class="w-10 h-10 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-[#5084C4] flex-shrink-0 shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                                    <span class="font-display">Apakah melayani pengantaran material langsung ke proyek?</span>
                                </span>
                                <span class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 group-open:rotate-180 group-open:text-[#5084C4] transition-transform duration-300 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <p class="mt-4 pl-0 sm:pl-[54px] text-xs sm:text-sm text-[#757575] leading-relaxed pr-10">Ya, kami memiliki armada truk khusus untuk drop barang tepat waktu ke seluruh area Kota Bau-Bau, Kabupaten Buton, Pasarwajo, Muna, dan sekitarnya.</p>
                        </details>

                        <details class="group bg-[#F4F5F7] rounded-2xl border border-slate-200/80 p-5 sm:p-6 transition-all duration-300 open:bg-white open:shadow-md open:border-emerald-500/20">
                            <summary class="flex items-center justify-between cursor-pointer list-none gap-4 font-bold text-sm sm:text-base text-[#1E1E1E] select-none">
                                <span class="flex items-center gap-3.5">
                                    <span class="w-10 h-10 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 flex-shrink-0 shadow-sm"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                                    <span class="font-display">Apakah ada batas minimal durasi sewa atau kuantitas set?</span>
                                </span>
                                <span class="w-8 h-8 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 group-open:rotate-180 group-open:text-emerald-600 transition-transform duration-300 flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <p class="mt-4 pl-0 sm:pl-[54px] text-xs sm:text-sm text-[#757575] leading-relaxed pr-10">Tidak ada batas memberatkan. Kami melayani mulai dari renovasi rumah tinggal (beberapa set saja) hingga proyek tender infrastruktur bertingkat ratusan set.</p>
                        </details>
                    </div>
                </div>
            </section>

            <!-- BEGIN: MainFooter Desktop -->
            <footer class="bg-white rounded-[32px] p-8 sm:p-10 border border-[#E0E0E0] subtle-shadow text-[#757575] text-sm" id="kontak-desktop">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-6">
                    <div class="md:col-span-5 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center text-white shadow-md flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path></svg>
                            </div>
                            <span class="font-extrabold text-base sm:text-lg tracking-tight text-[#1E1E1E] uppercase italic font-display">REGINA AL BARAKAH GROUP</span>
                        </div>
                        <p class="text-xs sm:text-sm text-[#757575] max-w-sm leading-relaxed">
                            Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.
                        </p>

                        <div class="flex items-center gap-2 pt-2">
                            <a aria-label="TikTok" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"></path></svg>
                            </a>
                            <a aria-label="Instagram" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"></path></svg>
                            </a>
                            <a aria-label="YouTube" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="md:col-span-3 space-y-3">
                        <h4 class="font-bold text-[#5084C4] text-xs sm:text-sm uppercase tracking-wider font-display">MENU UTAMA</h4>
                        <ul class="text-xs sm:text-sm space-y-2 text-[#757575] font-medium">
                            <li class=""><a href="index.php" class="hover:text-brand-blue transition-colors block py-0.5">Beranda</a></li>
                            <li class=""><a href="product.php" class="hover:text-brand-blue transition-colors block py-0.5">Produk</a></li>
                            <li class=""><a href="about.php" class="hover:text-brand-blue transition-colors block py-0.5">Tentang Kami</a></li>
                            <li class=""><a href="contact.php" class="hover:text-brand-blue transition-colors block py-0.5">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="md:col-span-4 space-y-3">
                        <h4 class="font-bold text-[#1E1E1E] text-xs sm:text-sm uppercase tracking-wider font-display">HUBUNGI KAMI</h4>
                        <div class="space-y-2.5 mb-4 text-xs sm:text-sm text-[#757575] leading-snug">
                            <div class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-[#E53935] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                <span>Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-[#E53935] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <span class="font-bold text-slate-900">0812-4220-7221 (Admin 1)</span>
                            </div>
                        </div>

                        <a href="https://wa.me/6281242207221" class="w-fit mt-3 py-2.5 px-4 rounded-xl bg-[#059669] hover:bg-emerald-500 text-white font-bold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md transition-all active:scale-[0.99] font-display mt-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                            <span class="">WHATSAPP KAMI</span>
                        </a>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row items-center justify-between text-xs text-[#757575] gap-2 pt-6 border-t border-slate-100">
                    <p class="">© 2026 Regina Al Barakah Group</p>
                    <p class="text-[11px]">Layanan Scaffolding Terpercaya di Sulawesi Tenggara.</p>
                </div>
            </footer>
            <!-- END: MainFooter Desktop -->
            
            <!-- Desktop Premium Floating WhatsApp -->
            <div class="fixed bottom-6 right-6 z-50">
                <a class="relative flex items-center gap-2.5 px-5 py-3 rounded-full bg-gradient-to-r from-[#128C7E] to-[#25D366] text-white shadow-[0_8px_25px_rgba(37,211,102,0.4)] hover:shadow-[0_12px_35px_rgba(37,211,102,0.6)] border border-emerald-400/30 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1.5 active:scale-95 group font-semibold text-sm tracking-wide overflow-hidden font-display" href="https://wa.me/6281242207221" target="_blank">
                    <span class="absolute inset-0 w-full h-full -ml-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:translate-x-[200%] transition-transform duration-1000 ease-in-out"></span>
                    <svg class="w-5 h-5 fill-current flex-shrink-0 z-10 relative" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path>
                    </svg>
                    <span class="z-10 relative">Tanya Sewa Cepat</span>
                </a>
            </div>

            <!-- Product Modal Desktop -->
            <div class="fixed inset-0 z-[100] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4" id="product-modal-desktop">
                <div class="bg-white rounded-[24px] max-w-2xl w-full overflow-hidden shadow-2xl border border-slate-200 transform transition-all">
                    <div class="relative bg-[#F4F5F7] aspect-[16/9] flex items-center justify-center p-8 border-b border-slate-100">
                        <button aria-label="Tutup" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-slate-700 hover:bg-white shadow-sm transition-all border border-slate-200" onclick="closeModalDesktop()">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase bg-[#1E1E1E] text-white shadow-sm font-display" id="modal-category-desktop">Kategori</span>
                        <img alt="Detail Produk" class="max-h-full max-w-full object-contain" id="modal-img-desktop" src="">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl text-slate-900 font-extrabold font-display" id="modal-title-desktop">Nama Komponen</h3>
                        <p class="text-sm text-slate-500 mt-3 leading-relaxed" id="modal-desc-desktop">Deskripsi komponen spesifikasi lengkap dan rekomendasi penggunaan scaffolding standar.</p>
                        <div class="mt-6 pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <button class="w-full sm:w-auto px-6 py-2.5 rounded-full border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-bold transition-colors font-display shadow-sm" onclick="closeModalDesktop()">
                                Tutup
                            </button>
                            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-2.5 rounded-full bg-[#1E1E1E] text-white hover:bg-slate-800 text-xs font-bold transition-all shadow-md group font-display" href="#" id="modal-wa-link-desktop" target="_blank">
                                <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                                <span class="">Pesan via WhatsApp</span>
                                <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>