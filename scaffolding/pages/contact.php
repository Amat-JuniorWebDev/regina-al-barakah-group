<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=5.0" name="viewport">
    <title>Kontak & Lokasi — Regina Al Barakah Group</title>
    
    <meta content="Hubungi Regina Al Barakah Group untuk konsultasi dan sewa scaffolding di Bau-Bau, Buton dan sekitarnya. Respon cepat, harga transparan, pengiriman tepat waktu." name="description">
    
    <!-- OPTIMASI PERFORMA: Preconnect -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://lh3.googleusercontent.com">

    <!-- OPTIMASI PERFORMA: Preload gambar hero HANYA untuk desktop -->
    <link rel="preload" as="image" href="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8" media="(min-width: 1024px)" fetchpriority="high">

    <!-- Google Fonts Premium (Non-blocking method) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap"></noscript>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- JS & CSS lokal -->
    <link rel="stylesheet" href="../assets/css/contact.css">
    <script src="../assets/js/contact.js" defer></script>
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
                    <a href="about.php" class="px-5 py-4 text-sm font-bold text-slate-900 border-b border-slate-100 flex items-center justify-between hover:bg-slate-50">Tentang Kami <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                    <!-- Menu Kontak Aktif -->
                    <a href="contact.php" class="px-5 py-4 text-sm font-extrabold text-[#E53935] bg-rose-50 border-b border-slate-100 flex items-center justify-between" aria-current="page">Kontak <svg class="w-4 h-4 text-[#E53935]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg></a>
                </div>
            </div>
        </header>

        <!-- Mobile Hero Section (Kontak & Lokasi) -->
        <section class="pt-24 pb-8 px-4 bg-[#1E1E1E] text-white relative rounded-b-[2rem] overflow-hidden">
            <div class="absolute -top-10 -right-10 w-52 h-52 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 -left-12 w-48 h-48 bg-[#E53935]/10 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 bg-white/10 border border-white/15 rounded-full w-fit backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#E53935] animate-pulse"></span>
                    <span class="text-white font-display text-[11px] tracking-wide font-medium uppercase">HUBUNGI KAMI • LAYANAN CEPAT & RESPONSIF</span>
                </div>
                
                <h1 class="text-white font-display font-extrabold text-[32px] leading-[40px] tracking-tight">Hubungi Layanan Persewaan Scaffolding Terpercaya Buton</h1>
                
                <p class="text-slate-300 text-[13px] leading-relaxed italic border-l-2 border-[#E53935] pl-3">“Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya.”</p>
                
                <div class="pt-2 flex flex-col space-y-3">
                    <a class="w-full bg-white text-slate-900 py-3.5 px-6 rounded-full font-bold text-[14px] flex items-center justify-center space-x-2 shadow-md hover:bg-slate-100 active:scale-95 transition-all tracking-wide uppercase font-display" href="#channels">
                        <span>HUBUNGI PUSAT</span>
                        <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>

                <!-- Trust Metrics (Mobile) -->
                <div class="mt-4 p-4 rounded-3xl bg-white/[0.04] backdrop-blur-md border border-white/10 shadow-inner relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                    <div class="grid grid-cols-2 gap-3 relative z-10">
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-[#5084C4] mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">24/7 Siaga</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Layanan Darurat</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-emerald-400 mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">100% SNI</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Uji Kekuatan Pipa</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-amber-400 mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">Armada</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Kirim Tepat Waktu</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md border border-white/10 p-3.5 rounded-xl text-center">
                            <svg class="w-6 h-6 text-[#E53935] mx-auto mb-1.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <div class="font-display text-xl font-bold text-white tracking-tight mb-0.5">&lt; 15 Menit</div>
                            <div class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold">Respon CS Cepat</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informasi Pusat & Peta (Mobile) -->
        <section class="px-4 py-8 flex flex-col gap-5 max-w-md mx-auto" id="channels">
            <div>
                <div class="inline-flex items-center gap-1.5 bg-[#5084C4]/10 text-[#5084C4] border border-[#5084C4]/20 px-3 py-1 rounded-full font-bold text-[10px] tracking-wider uppercase font-display mb-2">
                    <span class="">Pusat Operasional</span>
                </div>
                <h2 class="text-xl font-extrabold text-slate-900 font-display">Informasi Pusat & Saluran Kontak Resmi</h2>
                <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Kunjungi kantor dan workshop utama kami atau hubungi administrator melalui telepon dan WhatsApp.</p>
            </div>
            
            <!-- Peta -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm">
                <div class="relative w-full h-48 bg-slate-200">
                    <!-- KOREKSI: Peta telah disesuaikan agar bisa load tanpa blank -->
                    <iframe class="w-full h-full border-0 filter contrast-[1.05]" loading="lazy" src="https://maps.google.com/maps?q=BTN+Medy+Brata,+Wolio,+Kota+Bau-Bau&t=&z=14&ie=UTF8&iwloc=&output=embed" title="Peta Lokasi Gudang Scaffolding Bau-Bau"></iframe>
                    <div class="absolute top-2.5 left-2.5 right-2.5 bg-[#1E1E1E]/90 backdrop-blur-md text-white px-3 py-2 rounded-xl border border-white/20 flex items-center gap-2 shadow-lg">
                        <svg class="w-5 h-5 text-rose-500 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                        <div class="font-display text-[11px] font-bold truncate">Regina Al Barakah Yard - Akses 24 Jam</div>
                    </div>
                </div>
                <div class="p-4 flex flex-col gap-2 bg-slate-50">
                    <div class="flex items-start gap-2.5">
                        <svg class="w-5 h-5 text-[#5084C4] mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        <p class="text-xs text-slate-900 leading-snug font-medium"><strong class="font-bold block">Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</strong><span class="block text-slate-500 text-[11px] mt-1">Lokasi strategis dekat pelabuhan bongkar muat logistik.</span></p>
                    </div>
                    <a class="mt-1 w-full text-center py-2 border border-slate-200 rounded-xl text-[#5084C4] text-[11px] font-bold hover:bg-slate-100 transition-colors flex items-center justify-center gap-1.5" href="https://share.google/T9dtfMndDo0w3B9JC" target="_blank" rel="noopener noreferrer">
                        <span class="">Buka Petunjuk Arah Google Maps ↗</span>
                    </a>
                </div>
            </div>

            <!-- Kartu Admin WhatsApp (Mobile) -->
            <div class="flex flex-col gap-3">
                <div class="bg-white rounded-2xl border border-slate-200 p-4 shadow-sm flex flex-col gap-3">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-2.5">
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/10 text-emerald-600 flex items-center justify-center font-bold text-[10px]">WA</span>
                            <span class="font-display text-[13px] font-bold text-slate-900">WhatsApp Customer Service</span>
                        </div>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[9px] font-bold px-2 py-0.5 rounded-full flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Online</span>
                    </div>
                    
                    <a class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-[#5084C4] transition-all flex items-center justify-between group" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                        <div class="flex flex-col gap-0.5">
                            <div class="flex items-center gap-1.5">
                                <span class="font-display text-[11px] font-bold text-slate-900">Admin 1 (Konsultasi Sewa)</span>
                                <span class="bg-rose-50 text-[#E53935] text-[9px] font-bold px-1.5 py-0.5 rounded border border-rose-100">Prioritas</span>
                            </div>
                            <div class="font-display text-[13px] font-bold text-[#5084C4] tracking-wide">+62 812-4220-7221</div>
                            <div class="text-[10px] text-slate-500 mt-0.5">Surat Penawaran Harga & Faktur Proyek</div>
                        </div>
                        <span class="w-6 h-6 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 text-[10px] font-bold flex-shrink-0 shadow-sm">↗</span>
                    </a>
                    
                    <a class="p-3 rounded-xl bg-slate-50 border border-slate-200 hover:border-[#5084C4] transition-all flex items-center justify-between group" href="https://wa.me/6282188253433" target="_blank" rel="noopener noreferrer">
                        <div class="flex flex-col gap-0.5">
                            <span class="font-display text-[11px] font-bold text-slate-900">Admin 2 (Teknis & Armada Lapangan)</span>
                            <div class="font-display text-[13px] font-bold text-slate-800 tracking-wide">+62 821-8825-3433</div>
                            <div class="text-[10px] text-slate-500 mt-0.5">Jadwal Pengiriman & Penjemputan Alat</div>
                        </div>
                        <span class="w-6 h-6 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 text-[10px] font-bold flex-shrink-0 shadow-sm">↗</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-2.5">
                    <div class="bg-white rounded-xl border border-slate-200 p-3.5 flex items-center gap-3 shadow-sm">
                        <span class="w-9 h-9 rounded-xl bg-rose-50 text-[#E53935] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-bold uppercase tracking-wider text-slate-400">EMAIL RESMI PERUSAHAAN</span>
                            <a class="font-display text-[12px] font-bold text-slate-900" href="mailto:rulbtn5@gmail.com">rulbtn5@gmail.com</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-3.5 flex items-center gap-3 shadow-sm">
                        <span class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-bold uppercase tracking-wider text-slate-400">JAM OPERASIONAL GUDANG</span>
                            <span class="font-display text-[12px] font-bold text-slate-900">Senin - Sabtu | 08:00 - 17:00 WITA</span>
                            <span class="text-[9px] text-emerald-600 font-semibold mt-0.5">Emergency Proyek: Siaga 24 Jam</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulir Konsultasi Mobile -->
        <section class="px-4 py-8 bg-slate-50 border-y border-slate-200" id="form-sewa">
            <div class="max-w-md mx-auto flex flex-col gap-4">
                <div>
                    <div class="inline-flex items-center gap-1.5 bg-white text-[#5084C4] border border-slate-200 px-3 py-1 rounded-full font-bold text-[10px] uppercase tracking-wider mb-2 shadow-sm font-display">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="">Konsultasi Sewa & Pemesanan</span>
                    </div>
                    <h2 class="font-display text-xl font-extrabold text-slate-900 tracking-tight">Formulir Konsultasi Sewa Scaffolding</h2>
                    <p class="text-xs text-slate-500 mt-1.5 leading-relaxed">Kirimkan spesifikasi proyek Anda. Tim teknis kami akan membantu menyusun rincian kebutuhan sewa secara gratis.</p>
                </div>
                
                <div class="bg-white rounded-xl p-3 border border-slate-200 flex items-center justify-between text-center shadow-sm">
                    <div class="flex flex-col items-center flex-1">
                        <span class="w-5 h-5 rounded-full bg-[#1E1E1E] text-white text-[10px] font-bold flex items-center justify-center mb-1 font-display">1</span>
                        <span class="text-[10px] font-semibold text-slate-900 leading-tight">Isi Rincian</span>
                    </div>
                    <span class="text-slate-300 text-xs">→</span>
                    <div class="flex flex-col items-center flex-1">
                        <span class="w-5 h-5 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold flex items-center justify-center mb-1 font-display">2</span>
                        <span class="text-[10px] font-semibold text-slate-500 leading-tight">Estimasi WA</span>
                    </div>
                    <span class="text-slate-300 text-xs">→</span>
                    <div class="flex flex-col items-center flex-1">
                        <span class="w-5 h-5 rounded-full bg-slate-100 text-slate-600 text-[10px] font-bold flex items-center justify-center mb-1 font-display">3</span>
                        <span class="text-[10px] font-semibold text-slate-500 leading-tight">Kirim Armada</span>
                    </div>
                </div>
                
                <form class="bg-white rounded-2xl border border-slate-200 p-4 shadow-sm flex flex-col gap-3.5" onsubmit="event.preventDefault(); alert('Permintaan Anda terkirim! Admin akan membalas di WhatsApp Anda.');">
                    <div>
                        <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Nama Pemesan / Perusahaan *</label>
                        <input class="w-full h-11 px-3.5 rounded-xl border border-slate-200 text-slate-900 text-sm focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50" placeholder="Contoh: Bpk. Hendra / PT. Karya" required="" type="text">
                    </div>
                    <div>
                        <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Nomor WhatsApp Aktif *</label>
                        <input class="w-full h-11 px-3.5 rounded-xl border border-slate-200 text-slate-900 text-sm focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50" placeholder="08xxxxxxxxxx" required="" type="tel">
                    </div>
                    <div class="grid grid-cols-2 gap-2.5">
                        <div>
                            <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Jenis Proyek</label>
                            <select class="w-full h-11 px-2.5 rounded-xl border border-slate-200 text-slate-700 text-xs focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50">
                                <option>Gedung / Ruko</option>
                                <option>Infrastruktur</option>
                                <option>Rumah Tinggal</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Durasi Sewa</label>
                            <select class="w-full h-11 px-2.5 rounded-xl border border-slate-200 text-slate-700 text-xs focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50">
                                <option>1 Bulan (Reguler)</option>
                                <option>> 2 Bulan</option>
                                <option>Harian/Mingguan</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Lokasi Titik Antar Proyek *</label>
                        <input class="w-full h-11 px-3.5 rounded-xl border border-slate-200 text-slate-900 text-sm focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50" placeholder="Kecamatan / Desa, Kota Bau-Bau..." required="" type="text">
                    </div>
                    <div>
                        <label class="block font-display text-[11px] font-bold text-slate-900 mb-1.5">Kebutuhan Komponen Modul</label>
                        <textarea class="w-full p-3 rounded-xl border border-slate-200 text-slate-900 text-xs focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] outline-none transition-all bg-slate-50" placeholder="Sebutkan perkiraan set Main Frame, Catwalk, dsb..." rows="3"></textarea>
                    </div>
                    <button class="w-full bg-[#1E1E1E] text-white font-display text-[13px] font-bold py-3.5 rounded-full text-center flex items-center justify-center gap-2 hover:bg-slate-800 active:scale-95 transition-all shadow-md mt-1" type="submit">
                        <span class="">Kirim Konsultasi Sewa</span>
                        <span class="text-sm">↗</span>
                    </button>
                </form>
            </div>
        </section>

        <!-- Area Operasional (Mobile) - Menggunakan Ikon SVG Premium Pin Lokasi & Truk -->
        <section class="bg-[#1E1E1E] text-white py-8 px-4 max-w-md mx-auto rounded-3xl mt-8 mb-8 relative overflow-hidden shadow-2xl">
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
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
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
                        <li><a href="about.php" class="hover:text-brand-blue transition-colors block py-0.5">Tentang Kami</a></li>
                        <li><a href="contact.php" class="text-[#E53935] font-bold block py-0.5">Kontak</a></li>
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
            
            <!-- Hero Banner Desktop (SAMA PERSIS DENGAN INDEX.PHP & PRODUCT.PHP UNTUK MENCEGAH JUMP) -->
            <section class="relative overflow-hidden rounded-[32px] bg-[#111827] text-white min-h-[640px] lg:min-h-[720px] flex flex-col justify-between shadow-2xl border border-white/5" id="hero">
                <div class="absolute inset-0 z-0 pointer-events-none">
                    <img alt="Gudang Logistik & Scaffolding Regina Al Barakah" width="1360" height="720" fetchpriority="high" class="w-full h-full object-cover object-center opacity-30 mix-blend-luminosity" src="https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#111827]/95 via-[#111827]/85 to-[#111827]/75 z-[1]"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111827]/90 via-transparent to-[#111827]/30 z-[1]"></div>
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
                            <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="about.php">About Us</a>
                            <!-- Menu Kontak Aktif -->
                            <a class="px-4 py-1.5 rounded-full bg-white/20 text-white font-semibold shadow-sm transition" href="contact.php" aria-current="page">Contact</a>
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
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-rose-500/20 border border-rose-500/40 text-rose-300 text-xs font-semibold uppercase tracking-wider backdrop-blur-sm font-display">
                            <span class="w-2 h-2 rounded-full bg-rose-400 animate-ping"></span>
                            HUBUNGI KAMI • LAYANAN CEPAT & RESPONSIF
                        </div>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] font-extrabold text-white tracking-tight leading-[1.12] font-display">
                            Hubungi Layanan Persewaan Scaffolding Terpercaya Buton
                        </h1>
                        <p class="text-slate-200 text-sm sm:text-base md:text-lg max-w-xl font-normal leading-relaxed italic border-l-2 border-[#5084C4] pl-4">
                            “Pusat Jasa Sewa Scaffolding Bulanan Terbesar Dan Terlengkap Di Wilayah Kabupaten Buton Dan Sekitarnya. Konsultasikan kebutuhan proyek konstruksi Anda langsung dengan tim spesialis kami.”
                        </p>
                        <div class="flex flex-wrap items-center gap-4 pt-3">
                            <a class="inline-flex items-center gap-3 bg-white text-[#1E1E1E] font-bold px-7 py-3.5 rounded-full text-sm sm:text-base hover:bg-slate-100 transition shadow-2xl group font-display" href="#channels">
                                <span class="">Pusat Bantuan</span>
                                <span class="w-6 h-6 rounded-full bg-[#1E1E1E] text-white flex items-center justify-center text-xs group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">↗</span>
                            </a>
                            <a class="inline-flex items-center gap-2 bg-transparent text-white border border-white/30 px-7 py-3.5 rounded-full text-sm sm:text-base font-bold hover:bg-white/10 transition-all font-display" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                                Konsultasi WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Trust Point Spec Card (Right) -->
                    <div class="lg:col-span-5 relative w-full">
                        <div class="space-y-3 relative">
                            <!-- Floating Card 1 -->
                            <div class="glass-card-dark rounded-2xl p-3 sm:p-4 text-white flex items-center gap-3 sm:gap-4 transition-all hover:bg-white/10 group">
                                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden flex-shrink-0 relative border border-white/10 flex items-center justify-center bg-white/5">
                                    <svg class="w-8 h-8 text-[#5084C4]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-sm sm:text-base text-white truncate font-display">24/7 Siaga Proyek</h2>
                                        <span class="text-[11px] font-semibold bg-[#E53935]/20 text-rose-300 px-2 py-0.5 rounded-md border border-[#E53935]/30">Fast Response</span>
                                    </div>
                                    <p class="text-xs text-slate-300 mt-0.5">Layanan darurat teknis dan keluhan</p>
                                </div>
                            </div>
                            
                            <!-- Floating Card 2 -->
                            <div class="glass-card-dark rounded-2xl p-3 sm:p-4 text-white flex items-center gap-3 sm:gap-4 transition-all hover:bg-white/10 group">
                                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden flex-shrink-0 relative border border-white/10 flex items-center justify-center bg-white/5">
                                    <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <h2 class="font-bold text-sm sm:text-base text-white truncate font-display">100% Standar SNI</h2>
                                        <span class="text-[11px] font-semibold bg-emerald-500/20 text-emerald-300 px-2 py-0.5 rounded-md border border-emerald-500/30">Pipa Uji Kuat</span>
                                    </div>
                                    <p class="text-xs text-slate-300 mt-0.5">Semua material lolos seleksi kelayakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Direktori Pusat Bantuan Desktop -->
            <section class="mb-24 mt-16" id="channels">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-100 border border-slate-200 mb-3">
                            <span class="text-[12px] font-semibold text-[#5084C4] uppercase font-display">PUSAT OPERASIONAL</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight font-display">Informasi Pusat & Saluran Kontak Resmi</h2>
                    </div>
                    <p class="text-[15px] text-slate-500 max-w-md">Kunjungi kantor dan workshop utama kami atau hubungi administrator resmi melalui saluran telepon dan WhatsApp.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- Left: Interactive Map Container -->
                    <div class="lg:col-span-6 bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex flex-col h-full">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-[#5084C4]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                                <h3 class="text-xl font-bold text-slate-900 font-display">Kantor & Workshop Utama</h3>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-500 text-xs font-semibold">Sulawesi Tenggara</span>
                        </div>
                        
                        <div class="relative w-full h-[380px] md:h-[400px] rounded-2xl overflow-hidden border border-slate-200 bg-slate-100">
                            <!-- KOREKSI PERFORMA: Lazy Loaded Iframe dgn Query Pencarian Aman (Bukan Link Share) -->
                            <iframe class="w-full h-full border-0 filter contrast-[1.05]" loading="lazy" src="https://maps.google.com/maps?q=BTN+Medy+Brata,+Wolio,+Kota+Bau-Bau&t=&z=14&ie=UTF8&iwloc=&output=embed" title="Peta Lokasi Workshop Scaffolding Bau-Bau"></iframe>
                            
                            <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-md px-5 py-3 rounded-2xl shadow-lg border border-slate-200 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E53935] flex items-center justify-center text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[13px] font-bold text-slate-900 font-display">Regina Al Barakah Yard</p>
                                    <p class="text-[11px] text-slate-500">Akses Truk & Tronton 24 Jam</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 p-5 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-4">
                            <svg class="w-6 h-6 text-[#5084C4] mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            <div>
                                <p class="text-sm font-bold text-slate-900 font-display">Alamat Lengkap Depot Logistik</p>
                                <p class="text-[13px] text-slate-600 mt-1 leading-relaxed">Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711 (<a href="https://share.google/T9dtfMndDo0w3B9JC" target="_blank" class="text-[#5084C4] hover:underline font-bold inline-flex items-center gap-1" rel="noopener noreferrer">Buka Peta ↗</a>)</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Official Contact Directory -->
                    <div class="lg:col-span-6 flex flex-col gap-6">
                        <!-- WhatsApp Admin Channels -->
                        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200 shadow-sm flex-grow">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-bold text-slate-900 flex items-center gap-3 font-display">
                                    <span class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    </span>
                                    <span class="">WhatsApp Customer Service</span>
                                </h3>
                                <span class="text-[11px] text-emerald-700 font-bold bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200 flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Online</span>
                            </div>
                            
                            <div class="space-y-4">
                                <!-- Admin 1 -->
                                <a class="group block p-5 rounded-2xl border border-slate-200 bg-slate-50 hover:bg-white hover:border-[#5084C4] hover:shadow-md transition-all" href="https://wa.me/6281242207221" target="_blank" rel="noopener noreferrer">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center group-hover:scale-105 transition-transform shadow-sm">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-2 mb-1">
                                                    <span class="text-[14px] font-bold text-slate-900 font-display">Admin 1 (Konsultasi Sewa Utama)</span>
                                                    <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-rose-50 text-[#E53935] border border-rose-100">Prioritas</span>
                                                </div>
                                                <p class="text-[16px] font-bold text-[#5084C4] tracking-wide">+62 812-4220-7221</p>
                                                <p class="text-[12px] text-slate-500 mt-0.5">Surat Penawaran Harga, Kontrak Proyek, & Faktur</p>
                                            </div>
                                        </div>
                                        <span class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 group-hover:bg-[#5084C4] group-hover:text-white group-hover:border-[#5084C4] transition-colors shadow-sm">↗</span>
                                    </div>
                                </a>
                                
                                <!-- Admin 2 -->
                                <a class="group block p-5 rounded-2xl border border-slate-200 bg-slate-50 hover:bg-white hover:border-[#5084C4] hover:shadow-md transition-all" href="https://wa.me/6282188253433" target="_blank" rel="noopener noreferrer">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-4">
                                            <div class="w-14 h-14 rounded-2xl bg-[#1E1E1E] text-white flex items-center justify-center group-hover:scale-105 transition-transform shadow-sm">
                                                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                            </div>
                                            <div>
                                                <div class="flex items-center gap-2 mb-1">
                                                    <span class="text-[14px] font-bold text-slate-900 font-display">Admin 2 (Teknis & Armada Lapangan)</span>
                                                </div>
                                                <p class="text-[16px] font-bold text-slate-800 tracking-wide">+62 821-8825-3433</p>
                                                <p class="text-[12px] text-slate-500 mt-0.5">Jadwal Pengiriman, Mobilisasi Armada, & Retur Alat</p>
                                            </div>
                                        </div>
                                        <span class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 group-hover:bg-[#5084C4] group-hover:text-white group-hover:border-[#5084C4] transition-colors shadow-sm">↗</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Secondary Operational Attributes Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-rose-50 flex items-center justify-center text-[#E53935] shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] text-slate-400 uppercase font-bold tracking-wider mb-1">Email Resmi Perusahaan</p>
                                    <a class="text-[15px] font-bold text-slate-900 hover:text-[#5084C4] transition-colors font-display" href="mailto:rulbtn5@gmail.com">rulbtn5@gmail.com</a>
                                    <p class="text-[12px] text-slate-500 mt-1">Tender & Dokumen Legalitas</p>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] text-slate-400 uppercase font-bold tracking-wider mb-1">Jam Operasional Gudang</p>
                                    <p class="text-[14px] font-bold text-slate-900 font-display">Senin - Sabtu | 08:00 - 17:00</p>
                                    <p class="text-[12px] text-emerald-600 font-semibold mt-1">Emergency Proyek: Siaga 24 Jam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FORMULIR HITUNG KEBUTUHAN & PENAWARAN SEWA DESKTOP -->
            <section class="mb-24 bg-white rounded-3xl p-8 md:p-14 border border-slate-200 shadow-sm" id="form-sewa">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                    <!-- Left Column Context -->
                    <div class="lg:col-span-5 flex flex-col justify-between">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-[#5084C4] text-[12px] font-bold mb-4 font-display">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                <span class="">Konsultasi Sewa & Pemesanan</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight mb-5 font-display leading-tight">Formulir Konsultasi Sewa Scaffolding</h2>
                            <p class="text-[15px] text-slate-600 leading-relaxed mb-8">Kirimkan spesifikasi atau kebutuhan proyek Anda. Tim teknis kami segera membantu menyusun rincian kebutuhan sewa scaffolding terbaik secara cuma-cuma.</p>
                            
                            <!-- Process step indicators -->
                            <div class="space-y-5 pt-6 border-t border-slate-100">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 rounded-full bg-[#1E1E1E] text-white text-sm font-bold flex items-center justify-center font-display">1</div>
                                    <span class="text-[15px] font-medium text-slate-900">Isi rincian lokasi dan perkiraan durasi sewa</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 text-sm font-bold flex items-center justify-center font-display">2</div>
                                    <span class="text-[15px] font-medium text-slate-500">Terima breakdown harga transparan via WhatsApp</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 text-sm font-bold flex items-center justify-center font-display">3</div>
                                    <span class="text-[15px] font-medium text-slate-500">Konfirmasi dan jadwal pengiriman armada mandiri</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Guarantee badge -->
                        <div class="mt-10 p-5 rounded-2xl bg-emerald-50 border border-emerald-100 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[15px] font-bold text-slate-900 font-display">Jaminan Ketersediaan Stok</p>
                                <p class="text-[13px] text-slate-600 mt-0.5">Siap kirim ke seluruh pelosok Buton dan sekitarnya.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Interactive Form -->
                    <div class="lg:col-span-7 bg-slate-50 rounded-[2rem] p-8 md:p-10 border border-slate-200">
                        <form class="space-y-6" onsubmit="event.preventDefault(); alert('Permintaan konsultasi sewa telah terkirim! Tim kami akan menghubungi nomor WhatsApp Anda dalam waktu 15 menit.');">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Nama Pemesan / Perusahaan *</label>
                                    <input class="w-full h-12 px-4 rounded-xl border border-slate-300 bg-white text-slate-900 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all" placeholder="Contoh: Bpk. Ridwan (PT Konstruksi Mandiri)" required="" type="text">
                                </div>
                                <div>
                                    <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Nomor WhatsApp Aktif *</label>
                                    <input class="w-full h-12 px-4 rounded-xl border border-slate-300 bg-white text-slate-900 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all" placeholder="08xxxxxxxxxx" required="" type="tel">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Jenis Konstruksi / Proyek</label>
                                    <select class="w-full h-12 px-4 rounded-xl border border-slate-300 bg-white text-slate-700 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all">
                                        <option>Gedung Bertingkat / Ruko</option>
                                        <option>Jembatan & Infrastruktur</option>
                                        <option>Pengecoran Plat & Balok</option>
                                        <option>Pekerjaan Plafon & Finishing</option>
                                        <option>Pabrik / Kawasan Industri</option>
                                        <option>Renovasi Rumah Tinggal</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Estimasi Durasi Sewa</label>
                                    <select class="w-full h-12 px-4 rounded-xl border border-slate-300 bg-white text-slate-700 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all">
                                        <option>1 Bulan (Standar)</option>
                                        <option>2 - 3 Bulan</option>
                                        <option>Kontrak Proyek > 6 Bulan</option>
                                        <option>Harian / Mingguan Khusus</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Lokasi Titik Antar Proyek *</label>
                                <input class="w-full h-12 px-4 rounded-xl border border-slate-300 bg-white text-slate-900 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all" placeholder="Kecamatan / Desa, Kota Bau-Bau, Buton, dsb." required="" type="text">
                            </div>
                            <div>
                                <label class="block text-[13px] font-bold text-slate-900 mb-2 font-display">Kebutuhan Komponen Modul (Opsional)</label>
                                <textarea class="w-full p-4 rounded-xl border border-slate-300 bg-white text-slate-900 focus:outline-none focus:border-[#5084C4] focus:ring-1 focus:ring-[#5084C4] text-[14px] transition-all" placeholder="Sebutkan kebutuhan perkiraan (misal: Main Frame 1.7m 200 set, Catwalk 50 pcs, Jack Base, U-Head, dsb.)" rows="4"></textarea>
                            </div>
                            
                            <button class="w-full py-4 rounded-full bg-[#1E1E1E] hover:bg-slate-800 text-white text-[15px] font-bold tracking-wide transition-all shadow-xl active:scale-[0.98] flex items-center justify-center gap-2 font-display mt-2" type="submit">
                                <span class="">Kirim Konsultasi Sewa Gratis</span>
                                <span class="w-6 h-6 rounded-full bg-white text-slate-900 flex items-center justify-center text-xs">↗</span>
                            </button>
                            <p class="text-center text-[12px] text-slate-500 flex items-center justify-center gap-1.5 mt-2">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                                Data Anda aman dan hanya digunakan untuk keperluan konsultasi internal.
                            </p>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Area Operasional & Jangkauan Desktop (Ikon Premium SVG) -->
            <section class="bg-[#1E1E1E] rounded-3xl p-8 md:p-14 text-white shadow-2xl border border-white/10 relative overflow-hidden mb-24" id="coverage">
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
                                <!-- Location Tick SVG -->
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
                            <li><a href="about.php" class="hover:text-brand-blue transition-colors block py-0.5">Tentang Kami</a></li>
                            <li><a href="contact.php" class="text-[#E53935] font-bold block py-0.5">Kontak</a></li>
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