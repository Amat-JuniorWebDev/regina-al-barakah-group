<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=5.0" name="viewport">
    <title>Tentang Kami — Regina Al Barakah Group</title>
    
    <meta content="Penyedia sewa dan jual scaffolding standar industri terpercaya di Bau-Bau, Buton dan sekitarnya. Pelajari profil, visi misi, dan komitmen keselamatan kami." name="description">
    
    <!-- OPTIMASI PERFORMA: Preconnect -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://lh3.googleusercontent.com">

    <!-- OPTIMASI PERFORMA: Preload gambar hero HANYA untuk desktop -->
    <link rel="preload" as="image" href="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8" media="(min-width: 1024px)" fetchpriority="high">

    <!-- Google Fonts & Material Symbols dengan strategi Non-Blocking -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap"></noscript>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- JS & CSS lokal -->
    <link rel="stylesheet" href="../assets/css/about.css">
    <script src="../assets/js/about.js" defer></script>
</head>

<body class="antialiased font-sans selection:bg-brand-blue lg:selection:bg-[#E53935] selection:text-white bg-[#F8F9FB] lg:bg-[#F4F5F7] text-slate-800 lg:text-[#1E1E1E] pb-24 lg:pb-0 overflow-x-hidden">

    <!-- ============================================================== -->
    <!-- 📱 TAMPILAN MOBILE & TABLET (Sembunyi di Desktop) -->
    <!-- ============================================================== -->
    <div class="block lg:hidden flex justify-center w-full bg-[#F8F9FB] min-h-screen relative flex-col overflow-x-hidden">
        
        <!-- Header & Hamburger Menu Mobile -->
        <header class="fixed top-3 left-1/2 -translate-x-1/2 w-[calc(100%-1.5rem)] max-w-[400px] z-50">
            <div class="bg-[#1E1E1E] border border-white/20 rounded-full px-4 py-2.5 flex items-center justify-between shadow-xl relative z-50">
                <a class="flex items-center space-x-2.5" href="index.php" aria-label="Beranda Regina Al Barakah">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center flex-shrink-0 text-white shadow-sm">
                        <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 2H9c-1.1 0-2 .9-2 2v3H5c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM5 9h2v2H5V9zm0 4h2v2H5v-2zm0 4h2v2H5v-2zm14 2H9v-2h2v-2H9v-2h2v-2H9V9h2V7H9V4h10v15zm-6-8h2v2h-2v-2zm0 4h2v2h-2v-2zm0-8h2v2h-2V7zm4 0h2v2h-2V7zm0 4h2v2h-2v-2zm0 4h2v2h-2v-2z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-display text-[13px] tracking-tight leading-none font-bold">REGINA AL BARAKAH</span>
                        <span class="text-slate-400 font-sans text-[9px] tracking-wider uppercase leading-tight mt-1">SCAFFOLDING & KONSTRUKSI</span>
                    </div>
                </a>
                <div class="flex items-center space-x-2.5">
                    <a class="bg-white text-slate-900 px-4 py-1.5 rounded-full font-display text-xs font-semibold inline-flex items-center space-x-1 hover:bg-slate-100 active:scale-95 transition-all shadow-sm" href="https://wa.me/6281242207221" aria-label="Hubungi WhatsApp">
                        <span>Sewa</span>
                        <svg class="w-3 h-3 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17L17 7M17 7H7M17 7V17"></path></svg>
                    </a>
                    <button id="mobile-menu-btn" aria-label="Buka Menu Navigasi" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-white/20 active:scale-95 transition-all" type="button">
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
                    <!-- Menu Tentang Kami Aktif -->
                    <a href="about.php" class="px-5 py-4 text-sm font-extrabold text-[#E53935] bg-rose-50 border-b border-slate-100 flex items-center justify-between" aria-current="page">Tentang Kami <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                    <a href="contact.php" class="px-5 py-4 text-sm font-bold text-slate-900 flex items-center justify-between hover:bg-slate-50">Kontak <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </header>

        <!-- Mobile Hero Section -->
        <section class="pt-24 pb-8 px-4 bg-[#1E1E1E] text-white relative rounded-b-[2rem] overflow-hidden">
            <div class="absolute -top-10 -right-10 w-52 h-52 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 -left-12 w-48 h-48 bg-[#E53935]/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 bg-white/10 border border-white/15 rounded-full w-fit backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#E53935] animate-pulse"></span>
                    <span class="text-white font-display text-[11px] tracking-wide font-medium uppercase">TENTANG KAMI • SEJAK 2021</span>
                </div>
                
                <h1 class="text-white font-display font-extrabold text-[32px] leading-[40px] tracking-tight">Dedikasi Nyata Mendukung <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-400 to-[#E53935]">Pembangunan Sultra</span></h1>
                
                <p class="text-slate-300 text-[13px] leading-relaxed italic border-l-2 border-[#E53935] pl-3">“Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya.”</p>
                
                <div class="pt-2 flex flex-col space-y-3">
                    <a class="w-full bg-white text-slate-900 py-3.5 px-6 rounded-full font-bold text-[14px] flex items-center justify-center space-x-2 shadow-md hover:bg-slate-100 active:scale-95 transition-all tracking-wide uppercase font-display" href="#profil">
                        <span>DEDIKASI KAMI</span>
                        <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>

                <!-- Trust Metrics (Mobile) -->
                <div class="mt-4 p-4 rounded-3xl bg-white/[0.04] backdrop-blur-md border border-white/10 shadow-inner relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                    <div class="grid grid-cols-2 gap-3 relative z-10">
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-[#5084C4] mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">5+ Thn</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Berjalan</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-emerald-400 mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">100%</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Beban SNI</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-amber-400 mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">1.000+</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Set Ready</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-[#E53935] mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">0 Kasus</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Insiden</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Profil Perusahaan Mobile -->
        <section class="max-w-md mx-auto px-4 py-8" id="profil">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-[#5084C4] mb-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                <span class="font-display text-[10px] font-bold tracking-wider uppercase">PROFIL PERUSAHAAN</span>
            </div>
            <h2 class="font-display text-2xl font-bold text-slate-900 leading-snug mb-4">
                Penyedia Solusi Scaffolding Terpercaya di Sultra
            </h2>
            
            <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm mb-5 bg-white">
                <img alt="Armada dan gudang logistik scaffolding Regina Al Barakah" width="400" height="250" loading="lazy" decoding="async" class="w-full h-52 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIR1E5SbuIX7fQiob-NEEPAoTLofm0MGFGEey5hA4VbAkvxt7pO2XyEKTRpGc_VQBXsp9Gi_RAt-ozos05LuJyAE-92I9Yb2uNe7sy5Ua34XfYRTbpRAn7-9k10Te2PpsScUHIbOs44PBQqN7Rxhnb_UvSXK9l1X212xXGWq0ovNY8x254ahgx596WCgkRcYJbTx6zR-l1ND1WbZqYUKl_hFI0ft2ueHB-mWGQW8UzW_450WdADNZMtw">
                <div class="absolute top-3 left-3 bg-[#1E1E1E]/90 backdrop-blur-md text-white px-3 py-1 rounded-full text-[10px] font-semibold border border-white/20 flex items-center gap-1.5 shadow-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    <span>Est. 2021 • Pionir Buton</span>
                </div>
                <div class="p-3.5 bg-white border-t border-slate-100">
                    <div class="flex items-start gap-2.5">
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#5084C4] flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="font-display text-[12px] font-bold text-slate-900 leading-tight">Material Aman & Terstandarisasi</div>
                            <div class="text-[11px] text-slate-500 mt-0.5 leading-normal">Pengecekan presisi berkala saat distribusi.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-3 text-slate-600 text-[13px] leading-relaxed mb-6">
                <p><strong class="text-slate-900 font-semibold">Regina Al Barakah Group</strong> didirikan pada tahun 2021 di Pulau Buton, Sulawesi Tenggara, dengan komitmen utama menjadi mitra infrastruktur terdepan bagi kontraktor, mandor, dan swasta.</p>
                <p>Kami memadukan standar keselamatan kerja (K3) ketat dengan inventaris pipa galvanis berkualitas SNI. Setiap komponen melewati inspeksi fisik demi memastikan ketahanan optimal pada konstruksi multi-lantai.</p>
            </div>
        </section>

        <!-- Visi & Misi Mobile -->
        <section class="bg-slate-50 border-y border-slate-200 py-8 px-4">
            <div class="text-center mb-5 max-w-md mx-auto">
                <span class="inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-rose-50 border border-rose-100 text-[#E53935] mb-2 font-display">KOMITMEN KORPORASI</span>
                <h2 class="text-xl font-extrabold text-slate-900 font-display">Visi & Misi Kami</h2>
            </div>
            
            <div class="max-w-md mx-auto space-y-4">
                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm relative overflow-hidden">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#5084C4] flex items-center justify-center mb-3.5 shadow-sm">
                        <!-- Eye Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="font-display text-[16px] font-bold text-slate-900 mb-2">Visi Kami</h3>
                    <p class="text-[12px] text-slate-600 leading-relaxed">
                        Menjadi penyedia layanan penyewaan dan penyedia modul scaffolding nomor satu di Sulawesi Tenggara yang dikenal atas keandalan mutu produk, integritas operasional, serta kontribusi aktif dalam percepatan pembangunan wilayah pesisir dan perkotaan.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm relative overflow-hidden">
                    <div class="w-12 h-12 rounded-xl bg-rose-50 text-[#E53935] flex items-center justify-center mb-3.5 shadow-sm">
                        <!-- Target/Crosshair Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="font-display text-[16px] font-bold text-slate-900 mb-2">Misi Kami</h3>
                    <ul class="space-y-3 text-[12px] text-slate-600">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Menjamin pasokan alat scaffolding berkualitas SNI dan teruji ketat.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Menyediakan struktur biaya sewa yang transparan, hemat, tanpa biaya tersembunyi.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Armada pengiriman mandiri yang memastikan alat sampai tepat waktu di lokasi.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Prinsip & Nilai Mobile (Grid) -->
        <section class="py-8 px-4 max-w-md mx-auto">
            <div class="text-center mb-6">
                <span class="inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-blue-50 border border-blue-100 text-[#5084C4] mb-2 font-display">NILAI UTAMA</span>
                <h2 class="text-xl font-extrabold text-slate-900 font-display">Prinsip & Nilai Kami</h2>
            </div>
            
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#5084C4] flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Keamanan Utama</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Uji presisi beban K3 ketat sebelum didistribusikan.</p>
                </div>
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-rose-50 text-[#E53935] flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Integritas Harga</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Transparansi tarif sewa, tanpa biaya siluman.</p>
                </div>
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Efisiensi Logistik</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Distribusi terjadwal via armada truk operasional.</p>
                </div>
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Stok Berlanjut</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Ribuan set frame & aksesoris selalu ready.</p>
                </div>
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Fokus Pelanggan</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Konsultasi modul dan efisiensi volume kebutuhan.</p>
                </div>
                <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#5084C4] flex items-center justify-center mb-2.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h4 class="font-display text-[12px] font-bold text-slate-900 leading-tight mb-1">Profesionalisme</h4>
                    </div>
                    <p class="text-[10px] text-slate-500 leading-snug mt-1">Staf lapangan berpengalaman pemahaman K3.</p>
                </div>
            </div>
        </section>

        <!-- Keunggulan (List 01-04) Mobile -->
        <section class="max-w-md mx-auto px-4 py-8">
            <div class="text-left mb-5">
                <span class="inline-block px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-rose-50 border border-rose-100 text-[#E53935] mb-2 font-display">KEUNGGULAN KAMI</span>
                <h2 class="text-xl font-extrabold text-slate-900 font-display">Mengapa Memilih Kami?</h2>
            </div>
            
            <div class="space-y-3">
                <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-sm flex items-start gap-3">
                    <span class="text-xl font-bold text-slate-300 font-display">01</span>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-[13px] font-bold text-slate-900 font-display">Kualitas Terjamin</h3>
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">SNI Certified</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Material pipa tebal anti-korosi dengan sambungan presisi yang kokoh.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-sm flex items-start gap-3">
                    <span class="text-xl font-bold text-slate-300 font-display">02</span>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-[13px] font-bold text-slate-900 font-display">Fast Delivery</h3>
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-blue-50 text-[#5084C4] border border-blue-200">Armada Mandiri</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Pengiriman terjadwal dan responsif langsung ke lokasi proyek tanpa perantara.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-sm flex items-start gap-3">
                    <span class="text-xl font-bold text-slate-300 font-display">03</span>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-[13px] font-bold text-slate-900 font-display">Harga Fleksibel</h3>
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-amber-50 text-amber-700 border border-amber-200">Hemat Terukur</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Opsi durasi sewa bulanan atau sistem kontrak proyek dengan anggaran efisien.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-sm flex items-start gap-3">
                    <span class="text-xl font-bold text-slate-300 font-display">04</span>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-[13px] font-bold text-slate-900 font-display">Support Teknis</h3>
                            <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-purple-50 text-purple-700 border border-purple-200">Konsultasi Gratis</span>
                        </div>
                        <p class="text-[11px] text-slate-500 leading-relaxed">Dukungan perhitungan modul rangkaian dan panduan safety dari tim bersertifikasi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jangkauan Logistik Mobile (Premium SVG Update) -->
        <section class="bg-[#1E1E1E] text-white py-8 px-4 max-w-md mx-auto rounded-3xl mb-8 relative overflow-hidden shadow-2xl">
            <div class="absolute -right-20 -bottom-20 w-64 h-64 rounded-full bg-[#5084C4]/20 blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10">
                <span class="inline-block px-3 py-1 rounded-full text-[9px] font-bold uppercase tracking-wider bg-white/10 border border-white/20 text-[#5084C4] mb-3 font-display">JANGKAUAN LOGISTIK</span>
                <h2 class="text-xl font-extrabold text-white font-display leading-tight mb-2">Wilayah Operasional Regina Al Barakah</h2>
                <p class="text-[12px] text-slate-300 mb-5">Kami siap memobilisasi peralatan perancah ke berbagai lokasi proyek strategis di seluruh Sultra.</p>
                
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Kota Bau-Bau</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Kab. Buton</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Buton Selatan</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Buton Tengah</span>
                    <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15 text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>Kab. Muna</span>
                    <span class="px-3 py-1.5 rounded-full bg-[#5084C4]/40 border border-[#5084C4] text-[#a3c9ff] text-[11px] font-medium flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"></path></svg>Seluruh Sulawesi Tenggara</span>
                </div>
                
                <div class="bg-white/5 border border-white/10 p-4 rounded-2xl backdrop-blur-md">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#5084C4] flex items-center justify-center text-white shrink-0 shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                        </div>
                        <div>
                            <div class="font-display text-[14px] font-bold text-white">Mulai Sewa Hari Ini</div>
                            <div class="text-[11px] text-slate-300">Konsultasi cepat via WhatsApp</div>
                        </div>
                    </div>
                    <a class="w-full bg-white hover:bg-slate-100 text-slate-900 font-bold py-3 rounded-full text-[13px] flex items-center justify-center gap-2 transition-transform active:scale-95 shadow-md font-display" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                        <span>Hubungi Hotline 0821-8825-3433</span>
                        <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Mobile Footer -->
        <footer class="bg-white text-slate-600 border-t border-slate-200 pt-8 pb-24 px-4" id="kontak-mobile">
            <div class="max-w-md mx-auto space-y-6">
                <div>
                    <div class="flex items-center gap-2.5 mb-2.5">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center text-white shadow-sm flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path></svg>
                        </div>
                        <span class="text-sm font-extrabold text-slate-900 tracking-tight font-display uppercase italic">REGINA AL BARAKAH GROUP</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3.5">Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.</p>
                    
                    <div class="flex items-center gap-2">
                        <a href="#" aria-label="Ikuti kami di TikTok" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.98v7.92a7.61 7.61 0 01-3.69 6.55 7.63 7.63 0 01-8.79-.82A7.58 7.58 0 012.3 14.5a7.63 7.63 0 018.25-7.59v4.06c-1.89-.37-3.92.51-4.7 2.22a3.67 3.67 0 001.37 4.54c1.47 1.05 3.59.88 4.88-.38.45-.44.73-1.02.73-1.64V.02h-.31z"></path></svg>
                        </a>
                        <a href="#" aria-label="Ikuti kami di Instagram" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path></svg>
                        </a>
                        <a href="#" aria-label="Tonton video kami di YouTube" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#5084C4] mb-3 font-display">MENU UTAMA</h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-600">
                        <li><a href="index.php" class="hover:text-brand-blue transition-colors block py-0.5">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-brand-blue transition-colors block py-0.5">Produk</a></li>
                        <li><a href="about.php" class="text-[#E53935] font-bold block py-0.5">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-brand-blue transition-colors block py-0.5">Kontak</a></li>
                    </ul>
                </div>

                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-3 font-display">HUBUNGI KAMI</h4>
                    <div class="space-y-2.5 mb-4 text-xs sm:text-sm text-slate-600 leading-snug">
                        <div class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#E53935] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span>Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-[#E53935] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <a class="font-bold text-slate-900" href="tel:081242207221">0812-4220-7221 (Admin 1)</a>
                        </div>
                    </div>

                    <a href="https://wa.me/6281242207221" aria-label="Kirim Pesan WhatsApp" class="w-full py-3.5 px-4 rounded-xl bg-[#059669] hover:bg-emerald-600 text-white font-bold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md transition-all active:scale-[0.99] font-display mt-2" rel="noopener noreferrer" target="_blank">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                        <span>WHATSAPP KAMI</span>
                    </a>
                </div>
                
                <div class="flex justify-between items-center w-full pt-6 border-t border-slate-100 mt-4 text-[10px] text-slate-500 gap-2">
                    <p class="font-medium text-slate-700">© 2026 Regina Al Barakah Group</p>
                    <p class="text-right">Layanan Scaffolding Terpercaya di Sulawesi Tenggara</p>
                </div>
            </div>
        </footer>

        <!-- Mobile Premium Floating WhatsApp -->
        <aside class="fixed bottom-6 right-6 z-50">
            <a aria-label="Tanya Sewa Cepat via WhatsApp" class="relative flex items-center gap-2.5 px-5 py-3 rounded-full bg-gradient-to-r from-[#128C7E] to-[#25D366] text-white shadow-[0_8px_25px_rgba(37,211,102,0.4)] hover:shadow-[0_12px_35px_rgba(37,211,102,0.6)] border border-emerald-400/30 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1.5 active:scale-95 group font-semibold text-sm tracking-wide overflow-hidden font-display" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                <span class="absolute inset-0 w-full h-full -ml-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:translate-x-[200%] transition-transform duration-1000 ease-in-out"></span>
                <svg class="w-5 h-5 fill-current flex-shrink-0 z-10 relative" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path>
                </svg>
                <span class="z-10 relative">Tanya Sewa Cepat</span>
            </a>
        </aside>
    </div>

    <!-- ============================================================== -->
    <!-- 💻 TAMPILAN DESKTOP (Sembunyi di Mobile & Tablet) -->
    <!-- ============================================================== -->
    <div class="hidden lg:block">
        <div class="max-w-[1360px] mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-6 space-y-6">
            
            <!-- Hero Banner Desktop -->
            <section class="relative overflow-hidden rounded-[32px] bg-[#0A0F1C] text-white min-h-[640px] lg:min-h-[720px] flex flex-col justify-between shadow-2xl border border-white/5" id="hero">
                <div class="absolute inset-0 z-0 pointer-events-none">
                    <img alt="Gudang Logistik & Scaffolding Regina Al Barakah" width="1360" height="720" fetchpriority="high" class="w-full h-full object-cover object-center opacity-30 mix-blend-luminosity" src="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0A0F1C] via-[#0A0F1C]/90 to-[#0A0F1C]/60 z-[1]"></div>
                </div>
                
                <!-- NavigationBar Desktop -->
                <header class="relative z-20 px-5 sm:px-8 pt-5 sm:pt-6">
                    <div class="flex items-center justify-between gap-4">
                        <a class="flex items-center gap-3 group" href="index.php" title="Regina Al Barakah Group" aria-label="Beranda Regina Al Barakah">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#E53935] flex items-center justify-center text-white shadow-lg shadow-red-600/30 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-extrabold text-base sm:text-lg tracking-tight block text-white leading-tight font-display">REGINA AL BARAKAH</span>
                                <span class="text-[#E53935] text-[10px] sm:text-xs font-semibold tracking-wider uppercase block font-sans">SCAFFOLDING & KONSTRUKSI</span>
                            </div>
                        </a>
                        
                        <nav class="hidden lg:flex items-center glass-nav px-5 py-2 rounded-full text-xs xl:text-sm font-medium text-slate-100 space-x-1 shadow-inner font-display">
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="index.php">Home</a>
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="product.php">Product</a>
                            <a class="px-4 py-1.5 rounded-full bg-white/20 text-white font-semibold shadow-sm transition" href="about.php" aria-current="page">About Us</a>
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="contact.php">Contact</a>
                        </nav>
                        
                        <div class="flex items-center gap-2">
                            <a class="inline-flex items-center gap-2.5 bg-white text-slate-900 px-5 py-2.5 rounded-full font-bold text-sm shadow-lg hover:bg-slate-100 transition-all group font-display" href="https://wa.me/6281242207221?text=Halo%20Regina%20Al%20Barakah,%20saya%20ingin%20konsultasi%20dan%20sewa%20scaffolding." target="_blank" aria-label="Konsultasi Sewa Scaffolding" rel="noopener noreferrer">
                                <span>Konsultasi / Sewa</span>
                                <span class="w-5 h-5 bg-[#1E1E1E] text-white rounded-full flex items-center justify-center text-[10px] shrink-0 group-hover:rotate-45 transition-transform duration-300">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H7M17 7V17"></path></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </header>

                <div class="relative z-10 px-5 sm:px-8 py-12 lg:py-16 my-auto grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    <!-- Text Area (Left) -->
                    <div class="lg:col-span-7 flex flex-col items-start gap-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md">
                            <span class="w-2 h-2 rounded-full bg-[#E53935] animate-pulse"></span>
                            <span class="text-[11px] font-semibold tracking-wider text-slate-300 uppercase font-display">TENTANG KAMI • SEJAK 2021</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-[54px] font-extrabold text-white tracking-tight leading-[1.12] font-display">
                            Dedikasi Nyata Mendukung Pembangunan Sulawesi Tenggara
                        </h1>
                        <p class="text-slate-300 text-base md:text-lg max-w-2xl leading-relaxed italic border-l-2 border-[#5084C4] pl-4">
                            “Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya.”
                        </p>
                        <div class="flex flex-wrap items-center gap-4 pt-3">
                            <a class="flex items-center gap-2 bg-white text-slate-900 px-7 py-3.5 rounded-full text-sm font-bold hover:bg-slate-100 hover:shadow-xl transition-all duration-200 font-display group" href="#profil">
                                <span class="">Dedikasi Kami</span>
                                <svg class="w-4 h-4 text-slate-900 group-hover:translate-y-0.5 transition-transform duration-150" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m0 0l-4-4m4 4l4-4"></path></svg>
                            </a>
                            <a class="flex items-center gap-2 bg-white/5 hover:bg-white/10 border border-white/10 px-7 py-3.5 rounded-full text-sm font-semibold text-white backdrop-blur-md transition-all duration-200 font-display group" href="https://wa.me/6282188253433" target="_blank" rel="noopener noreferrer">
                                <span class="">Hubungi WhatsApp</span>
                                <svg class="w-4 h-4 text-white group-hover:translate-x-0.5 transition-transform duration-150" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Trust Point Spec Card (Right) -->
                    <div class="lg:col-span-5 relative w-full">
                        <div class="bg-[#16202e]/90 backdrop-blur-xl border border-white/10 rounded-3xl p-7 shadow-2xl relative overflow-hidden">
                            <div class="relative z-10">
                                <div class="flex items-center justify-between pb-5 border-b border-white/10">
                                    <div class="flex items-center gap-3.5">
                                        <div class="w-12 h-12 rounded-2xl bg-[#235e9b] flex items-center justify-center text-white shadow-md">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                        </div>
                                        <div>
                                            <h2 class="text-[15px] font-bold text-white font-display">Keandalan Logistik</h2>
                                            <p class="text-[12px] text-slate-400 mt-0.5">Kab. Buton & Kepulauan</p>
                                        </div>
                                    </div>
                                    <span class="px-3 py-1 rounded-full bg-[#235e9b]/20 text-[#a3c9ff] text-[11px] font-semibold border border-[#235e9b]/40">Ready 24/7</span>
                                </div>

                                <div class="grid grid-cols-2 gap-3.5 pt-5">
                                    <div class="bg-white/[0.03] rounded-2xl p-4.5 border border-white/5 text-center flex flex-col justify-center min-h-[90px]">
                                        <span class="text-2xl lg:text-[26px] font-bold text-white block font-display leading-none">5+ Tahun</span>
                                        <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-wider font-semibold">OPERASIONAL</p>
                                    </div>
                                    <div class="bg-white/[0.03] rounded-2xl p-4.5 border border-white/5 text-center flex flex-col justify-center min-h-[90px]">
                                        <span class="text-2xl lg:text-[26px] font-bold text-emerald-400 block font-display leading-none">100%</span>
                                        <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-wider font-semibold">BEBAN SNI</p>
                                    </div>
                                    <div class="bg-white/[0.03] rounded-2xl p-4.5 border border-white/5 text-center flex flex-col justify-center min-h-[90px]">
                                        <span class="text-2xl lg:text-[26px] font-bold text-amber-400 block font-display leading-none">1.000+</span>
                                        <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-wider font-semibold">SET READY</p>
                                    </div>
                                    <div class="bg-white/[0.03] rounded-2xl p-4.5 border border-white/5 text-center flex flex-col justify-center min-h-[90px]">
                                        <span class="text-2xl lg:text-[26px] font-bold text-[#E53935] block font-display leading-none">0 Kasus</span>
                                        <p class="text-[10px] text-slate-400 mt-2 uppercase tracking-wider font-semibold">INSIDEN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Profil Perusahaan & Dedikasi Desktop -->
            <section class="mb-24 scroll-mt-24 mt-16" id="profil">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: Image Yard with Floating Badge -->
                    <div class="lg:col-span-6 relative">
                        <div class="relative rounded-3xl overflow-hidden border border-slate-200 shadow-lg bg-white">
                            <img alt="A clean industrial scaffolding inventory warehouse yard" width="600" height="460" loading="lazy" decoding="async" class="w-full h-[460px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIR1E5SbuIX7fQiob-NEEPAoTLofm0MGFGEey5hA4VbAkvxt7pO2XyEKTRpGc_VQBXsp9Gi_RAt-ozos05LuJyAE-92I9Yb2uNe7sy5Ua34XfYRTbpRAn7-9k10Te2PpsScUHIbOs44PBQqN7Rxhnb_UvSXK9l1X212xXGWq0ovNY8x254ahgx596WCgkRcYJbTx6zR-l1ND1WbZqYUKl_hFI0ft2ueHB-mWGQW8UzW_450WdADNZMtw">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-white/85 backdrop-blur-md border border-white/50 shadow-xl flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-[#5084C4] text-white flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div>
                                    <h2 class="text-[14px] font-bold text-slate-900 font-display">Material Aman & Terstandarisasi</h2>
                                    <p class="text-[13px] text-slate-500 mt-0.5">Pengecekan presisi berkala sebelum dan sesudah distribusi ke lapangan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-4 -left-4 bg-[#1E1E1E] text-white px-4 py-2 rounded-full border border-white/15 shadow-md flex items-center gap-2">
                            <svg class="w-4 h-4 text-[#5084C4]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <span class="text-[12px] font-semibold tracking-wide font-display">Est. 2021 • Pionir Buton</span>
                        </div>
                    </div>
                    
                    <!-- Right: Narrative & Metric Cards -->
                    <div class="lg:col-span-6 flex flex-col gap-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 self-start">
                            <span class="text-[12px] font-semibold text-[#5084C4] font-display">PROFIL PERUSAHAAN</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight font-display leading-tight">
                            Penyedia Solusi Scaffolding Terpercaya di Seluruh Penjuru Daerah
                        </h2>
                        <div class="text-[15px] text-slate-600 leading-relaxed space-y-4">
                            <p>
                                Berdiri sejak tahun 2021, <strong class="text-slate-900 font-semibold">Regina Al Barakah Group</strong> hadir sebagai pionir penyedia jasa sewa dan penjualan scaffolding profesional di wilayah Kabupaten Buton, Kota Bau-Bau, dan sekitarnya. Kami memahami bahwa keselamatan kerja konstruksi adalah prioritas utama yang tidak dapat ditawar.
                            </p>
                            <p>
                                Didukung oleh inventaris lengkap ratusan ton material pipa galvanis standar SNI, aksesoris jack base, u-head, clamp, catwalk, serta armada logistik operasional mandiri, kami siap melayani proyek ruko komersial, gedung pemerintahan, jembatan, hingga renovasi hunian pribadi dengan jaminan tepat waktu.
                            </p>
                        </div>
                        
                        <!-- 4 Metric Mini-Cards Desktop -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm text-center">
                                <span class="text-[22px] font-bold text-[#5084C4] font-display">5+</span>
                                <p class="text-[12px] text-slate-500 mt-1 font-medium">Tahun Berjalan</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm text-center">
                                <span class="text-[22px] font-bold text-[#5084C4] font-display">1.000+</span>
                                <p class="text-[12px] text-slate-500 mt-1 font-medium">Unit Terpasang</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm text-center">
                                <span class="text-[22px] font-bold text-[#5084C4] font-display">100%</span>
                                <p class="text-[12px] text-slate-500 mt-1 font-medium">Safety SNI</p>
                            </div>
                            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm text-center">
                                <span class="text-[22px] font-bold text-[#5084C4] font-display">0</span>
                                <p class="text-[12px] text-slate-500 mt-1 font-medium">Insiden Gagal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Visi & Misi Desktop -->
            <section class="mb-24">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 mb-3">
                        <span class="text-[12px] font-semibold text-[#E53935] uppercase font-display">KOMITMEN KORPORASI</span>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight font-display">Visi & Misi Kami</h2>
                    <p class="text-[15px] text-slate-500 mt-2">Fondasi strategis yang memandu langkah operasional kami dalam melayani mitra konstruksi.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi Kami -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-[#5084C4]">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 font-display">Visi Kami</h3>
                            <p class="text-base text-slate-600 leading-relaxed">
                                Menjadi pusat penyedia layanan scaffolding nomor satu di Sulawesi Tenggara yang mengedepankan keamanan material dan kepuasan pelanggan melalui integritas kerja, efisiensi rantai pasok, dan pelayanan terbaik.
                            </p>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center gap-2 text-[14px] text-[#5084C4] font-bold font-display">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="">Standar Keselamatan Konstruksi Modern</span>
                        </div>
                    </div>
                    
                    <!-- Misi Kami -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-rose-50 flex items-center justify-center text-[#E53935]">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 font-display">Misi Kami</h3>
                            <ul class="space-y-3.5">
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-[15px] text-slate-600">Menyediakan produk scaffolding dengan kualitas material standar nasional (SNI) yang lolos uji beban presisi.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-[15px] text-slate-600">Memberikan penawaran harga sewa yang paling kompetitif dan transparan tanpa biaya tersembunyi.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-[#5084C4] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-[15px] text-slate-600">Menjamin ketepatan waktu pengiriman material langsung ke lokasi proyek dengan armada mandiri yang andal.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center gap-2 text-[14px] font-bold text-slate-500 font-display">
                            <svg class="w-5 h-5 text-[#5084C4]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            <span class="">Armada Pengiriman Mandiri Terjadwal</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Prinsip & Nilai Kami Desktop (6 Cards) -->
            <section class="mb-24">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 mb-3">
                            <span class="text-[12px] font-semibold text-[#5084C4] uppercase font-display">NILAI UTAMA</span>
                        </div>
                        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight font-display">Prinsip & Nilai Kami</h2>
                    </div>
                    <p class="text-[15px] text-slate-500 max-w-md">Pedoman dasar kerja kami dalam menjalin kemitraan panjang dengan kontraktor, mandor, dan pemilik bangunan.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- 1 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#5084C4]/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-[#5084C4] mb-4 group-hover:bg-[#5084C4] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Keamanan Tanpa Kompromi</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Setiap komponen pipa, klem, dan tangga diperiksa integritas fisiknya untuk memastikan ketahanan beban kerja maksimal di lapangan tanpa risiko.</p>
                    </div>
                    <!-- 2 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#E53935]/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-[#E53935] mb-4 group-hover:bg-[#E53935] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Integritas Harga</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Transparansi penuh dalam perhitungan biaya sewa bulanan. Tidak ada pungutan siluman atau biaya tersembunyi saat pengembalian material.</p>
                    </div>
                    <!-- 3 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-emerald-500/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600 mb-4 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Efisiensi Logistik</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Distribusi cepat via armada truk mandiri. Jadwal pengecoran atau pengerjaan fasad tidak akan tertunda karena keterlambatan perancah.</p>
                    </div>
                    <!-- 4 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-amber-500/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 mb-4 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Keberlanjutan Stok</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Kesiapan ribuan set unit siap pakai lengkap dengan aksesoris pendukung (cross brace, jack base, joint pin, catwalk, tie rod).</p>
                    </div>
                    <!-- 5 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-purple-500/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 mb-4 group-hover:bg-purple-500 group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Fokus Pelanggan</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Konsultasi estimasi kebutuhan set scaffolding sesuai elevasi dan luas bidang proyek agar penggunaan anggaran sewa tetap efisien.</p>
                    </div>
                    <!-- 6 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-lg hover:border-[#5084C4]/50 transition-all duration-300 group">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-[#5084C4] mb-4 group-hover:bg-[#5084C4] group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="text-[18px] font-bold text-slate-900 mb-2 font-display">Profesionalisme Tim</h3>
                        <p class="text-[13px] text-slate-500 leading-relaxed">Staf lapangan dan teknisi berpengalaman yang memahami tata letak perancah aman sesuai regulasi K3 konstruksi.</p>
                    </div>
                </div>
            </section>

            <!-- Keunggulan Layanan Desktop -->
            <section class="mb-24 bg-white rounded-3xl p-8 md:p-12 border border-slate-200 shadow-sm">
                <div class="max-w-2xl mb-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-[#5084C4] text-[12px] font-bold mb-3 font-display">
                        <span class="">KENAPA MEMILIH KAMI</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 font-display">Keunggulan Layanan Regina Al Barakah</h2>
                </div>
                
                <div class="divide-y divide-slate-100">
                    <div class="py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 group">
                        <div class="flex items-start md:items-center gap-6">
                            <span class="text-3xl font-extrabold text-slate-300 group-hover:text-[#5084C4] transition-colors font-display">01</span>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 font-display">Kualitas Terjamin & Kokoh</h3>
                                <p class="text-[13px] text-slate-500 mt-1 max-w-2xl">Material pipa galvanis kokoh dengan presisi beban tinggi, tahan cuaca pesisir tropis tanpa risiko korosi dini.</p>
                            </div>
                        </div>
                        <div class="px-4 py-2 rounded-full bg-emerald-50 text-[12px] font-bold text-emerald-700 border border-emerald-200 self-end md:self-auto font-display">SNI Certified</div>
                    </div>
                    
                    <div class="py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 group">
                        <div class="flex items-start md:items-center gap-6">
                            <span class="text-3xl font-extrabold text-slate-300 group-hover:text-[#5084C4] transition-colors font-display">02</span>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 font-display">Fast Delivery ke Titik Proyek</h3>
                                <p class="text-[13px] text-slate-500 mt-1 max-w-2xl">Armada kendaraan distribusi mandiri siap bongkar kirim tepat waktu tanpa perantara ekspedisi pihak ketiga.</p>
                            </div>
                        </div>
                        <div class="px-4 py-2 rounded-full bg-blue-50 text-[12px] font-bold text-[#5084C4] border border-blue-200 self-end md:self-auto font-display">Armada Mandiri</div>
                    </div>
                    
                    <div class="py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 group">
                        <div class="flex items-start md:items-center gap-6">
                            <span class="text-3xl font-extrabold text-slate-300 group-hover:text-[#5084C4] transition-colors font-display">03</span>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 font-display">Harga Terbaik & Fleksibel</h3>
                                <p class="text-[13px] text-slate-500 mt-1 max-w-2xl">Skema sewa harian, mingguan, hingga bulanan dengan diskon khusus untuk proyek durasi panjang.</p>
                            </div>
                        </div>
                        <div class="px-4 py-2 rounded-full bg-amber-50 text-[12px] font-bold text-amber-700 border border-amber-200 self-end md:self-auto font-display">Hemat & Terukur</div>
                    </div>
                    
                    <div class="py-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4 group">
                        <div class="flex items-start md:items-center gap-6">
                            <span class="text-3xl font-extrabold text-slate-300 group-hover:text-[#5084C4] transition-colors font-display">04</span>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 font-display">Full Support & Konsultasi Teknis</h3>
                                <p class="text-[13px] text-slate-500 mt-1 max-w-2xl">Bimbingan teknis hitungan modul perancah dan instruksi perakitan aman di lokasi proyek Anda.</p>
                            </div>
                        </div>
                        <div class="px-4 py-2 rounded-full bg-purple-50 text-[12px] font-bold text-purple-700 border border-purple-200 self-end md:self-auto font-display">Konsultasi Gratis</div>
                    </div>
                </div>
            </section>

            <!-- Area Operasional & Jangkauan Desktop (Ikon Premium SVG) -->
            <section class="bg-[#1E1E1E] rounded-3xl p-8 md:p-14 text-white shadow-2xl border border-white/10 relative overflow-hidden mb-24">
                <div class="absolute -right-24 -bottom-24 w-96 h-96 rounded-full bg-[#5084C4]/20 blur-3xl pointer-events-none"></div>
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15">
                            <svg class="w-4 h-4 text-[#5084C4]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-[12px] font-bold uppercase text-white font-display">JANGKAUAN LOGISTIK</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-white tracking-tight font-display">
                            Wilayah Operasional Regina Al Barakah Group
                        </h2>
                        <p class="text-[15px] text-slate-300 max-w-xl leading-relaxed">
                            Kami siap memobilisasi peralatan perancah ke berbagai lokasi proyek strategis di seluruh penjuru Sulawesi Tenggara dengan jangkauan pengiriman prima.
                        </p>
                        
                        <div class="flex flex-wrap gap-2.5 pt-2">
                            <!-- Opsi SVG Elegan dengan Ikon Pin dan Truk -->
                            <span class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-[14px] font-medium text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Kota Bau-Bau
                            </span>
                            <span class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-[14px] font-medium text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Kab. Buton (Pasarwajo)
                            </span>
                            <span class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-[14px] font-medium text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Buton Selatan (Batauga)
                            </span>
                            <span class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-[14px] font-medium text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Buton Tengah (Labungkari)
                            </span>
                            <span class="px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-[14px] font-medium text-white transition-colors flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Kab. Muna & Raha
                            </span>
                            <span class="px-4 py-2 rounded-full bg-[#5084C4]/40 border border-[#5084C4] text-[14px] font-semibold text-[#a3c9ff] flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"></path></svg>
                                Seluruh Sulawesi Tenggara
                            </span>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-5 bg-[#2C2C2C] border border-white/10 rounded-2xl p-6 shadow-xl space-y-5">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-[#5084C4] flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white font-display">Mulai Sewa Hari Ini</h3>
                                <p class="text-[13px] text-slate-400">Konsultasi cepat via WhatsApp</p>
                            </div>
                        </div>
                        <p class="text-[14px] text-slate-300 leading-relaxed">
                            Dapatkan perhitungan volume set scaffolding dan surat penawaran harga resmi (SPH) untuk kebutuhan tender atau proyek swasta Anda.
                        </p>
                        <a class="w-full flex items-center justify-center gap-2 bg-white text-slate-900 py-3.5 px-6 rounded-full text-[15px] font-bold hover:bg-slate-100 hover:shadow-lg active:scale-95 transition-all duration-150 font-display" href="https://wa.me/6282188253433" target="_blank" rel="noopener noreferrer">
                            <span class="">Hubungi Hotline 0821-8825-3433</span>
                            <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                    </div>
                </div>
            </section>

            <!-- BEGIN: MainFooter Desktop -->
            <footer class="bg-white rounded-[32px] p-8 sm:p-10 border border-[#E0E0E0] subtle-shadow text-[#757575] text-sm" id="kontak-desktop">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-6">
                    <div class="md:col-span-5 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-gradient-to-tr from-[#E53935] to-rose-500 flex items-center justify-center text-white shadow-md flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2"></path></svg>
                            </div>
                            <span class="font-extrabold text-base sm:text-lg tracking-tight text-[#1E1E1E] uppercase italic font-display">REGINA AL BARAKAH GROUP</span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-sm leading-relaxed">
                            Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.
                        </p>

                        <div class="flex items-center gap-2 pt-2">
                            <a aria-label="TikTok" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"></path></svg>
                            </a>
                            <a aria-label="Instagram" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path></svg>
                            </a>
                            <a aria-label="YouTube" class="w-9 h-9 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition border border-[#E0E0E0]" href="#">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="md:col-span-3 space-y-3">
                        <h4 class="font-bold text-[#5084C4] text-xs sm:text-sm uppercase tracking-wider font-display">MENU UTAMA</h4>
                        <ul class="text-xs sm:text-sm space-y-2 text-slate-600 font-medium">
                            <li><a href="index.php" class="hover:text-brand-blue transition-colors block py-0.5">Beranda</a></li>
                            <li><a href="product.php" class="hover:text-brand-blue transition-colors block py-0.5">Produk</a></li>
                            <li><a href="about.php" class="text-[#E53935] font-bold block py-0.5">Tentang Kami</a></li>
                            <li><a href="contact.php" class="hover:text-brand-blue transition-colors block py-0.5">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="md:col-span-4 space-y-3">
                        <h4 class="font-bold text-[#1E1E1E] text-xs sm:text-sm uppercase tracking-wider font-display">HUBUNGI KAMI</h4>
                        <div class="space-y-2.5 mb-4 text-xs sm:text-sm text-slate-600 leading-snug">
                            <div class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-[#E53935] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                <span>Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-[#E53935] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <a class="font-bold text-slate-900" href="tel:081242207221">0812-4220-7221 (Admin 1)</a>
                            </div>
                        </div>

                        <a href="https://wa.me/6281242207221" aria-label="Kirim Pesan WhatsApp" class="w-full py-3.5 px-4 rounded-xl bg-[#059669] hover:bg-emerald-600 text-white font-bold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md transition-all active:scale-[0.99] font-display mt-2" rel="noopener noreferrer" target="_blank">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                            <span>WHATSAPP KAMI</span>
                        </a>
                    </div>
                </div>
                
                <div class="flex justify-between items-center w-full pt-6 border-t border-slate-100 mt-4 text-[10px] text-slate-500 gap-2">
                    <p class="font-medium text-slate-700">© 2026 Regina Al Barakah Group</p>
                    <p class="text-right">Layanan Scaffolding Terpercaya di Sulawesi Tenggara</p>
                </div>
            </div>
        </footer>

        <!-- Desktop Premium Floating WhatsApp -->
        <aside class="fixed bottom-6 right-6 z-50">
            <a aria-label="Tanya Sewa Cepat via WhatsApp" class="relative flex items-center gap-2.5 px-5 py-3 rounded-full bg-gradient-to-r from-[#128C7E] to-[#25D366] text-white shadow-[0_8px_25px_rgba(37,211,102,0.4)] hover:shadow-[0_12px_35px_rgba(37,211,102,0.6)] border border-emerald-400/30 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-1.5 active:scale-95 group font-semibold text-sm tracking-wide overflow-hidden font-display" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                <span class="absolute inset-0 w-full h-full -ml-[100%] bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:translate-x-[200%] transition-transform duration-1000 ease-in-out"></span>
                <svg class="w-5 h-5 fill-current flex-shrink-0 z-10 relative" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path>
                </svg>
                <span class="z-10 relative">Tanya Sewa Cepat</span>
            </a>
        </aside>
    </div>
</body>
</html>