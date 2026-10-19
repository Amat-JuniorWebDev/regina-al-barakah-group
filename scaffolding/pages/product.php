<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Katalog Produk Scaffolding | Regina Al Barakah Group</title>
    
    <!-- Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Inter Google Font -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- PANGGIL FILE JS & CSS -->
    <script src="../assets/js/product.js"></script>
    <link rel="stylesheet" href="../assets/css/product.css">
</head>

<body class="bg-background text-on-surface antialiased min-h-screen flex flex-col lg:block font-body-md selection:bg-primary selection:text-white">

    <!-- ============================================================== -->
    <!-- 📱 TAMPILAN MOBILE & TABLET (Sembunyi di Desktop) -->
    <!-- ============================================================== -->
    <div class="block lg:hidden flex justify-center w-full bg-background min-h-screen relative flex-col shadow-2xl overflow-x-hidden border-x border-surface-border">
        
        <!-- Top Fixed Floating Pill Header (Mobile Responsive) -->
        <header class="fixed top-3 left-1/2 -translate-x-1/2 w-[calc(100%-1.5rem)] max-w-[400px] z-50">
            <div class="bg-[#1E1E1E] border border-white/20 rounded-full px-4 py-2.5 flex items-center justify-between shadow-xl">
                <div class="flex items-center space-x-2.5">
                    <div class="w-9 h-9 rounded-full bg-[#db322f] flex items-center justify-center text-white flex-shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-[20px]">domain</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white font-label-md text-[13px] tracking-tight leading-none font-bold">REGINA AL BARAKAH</span>
                        <span class="text-slate-400 font-label-sm text-[9px] tracking-wider uppercase leading-tight mt-1">SCAFFOLDING & KONSTRUKSI</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2.5">
                    <a class="bg-white text-slate-900 px-4 py-1.5 rounded-full font-label-md text-xs font-semibold inline-flex items-center space-x-1 hover:bg-slate-100 active:scale-95 transition-all shadow-sm" href="#kontak">
                        <span class="">Sewa</span>
                        <span class="material-symbols-outlined text-[13px]">arrow_outward</span>
                    </a>
                    <button aria-label="Menu" class="w-8 h-8 rounded-full flex items-center justify-center text-white hover:bg-surface-dark-card active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-[24px]">menu</span>
                    </button>
                </div>
            </div>
        </header>

        <!-- Hero Section (Dark Industrial Modern Canvas) -->
        <section class="pt-24 pb-8 px-4 bg-surface-dark text-text-on-dark relative rounded-b-[2rem] overflow-hidden">
            <!-- Ambient Graphic Glow -->
            <div class="absolute -top-10 -right-10 w-52 h-52 bg-primary/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 -left-12 w-48 h-48 bg-tertiary/15 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col space-y-4">
                <!-- Stock Ready Pill -->
                <div class="inline-flex items-center space-x-2 px-3 py-1 bg-surface-dark-card/90 border border-glass-border rounded-full w-fit">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-text-on-dark font-label-sm text-[11px] tracking-wide font-medium uppercase">STOK READY 1.000+ SET SNI</span>
                </div>
                
                <!-- Headline Hero Title -->
                <h1 class="text-text-on-dark font-headline-hero-mobile text-headline-hero-mobile">
                    Katalog Produk & Komponen Standar Industri
                </h1>
                
                <!-- Subtitle -->
                <p class="text-outline-variant font-body-sm text-body-sm leading-relaxed">
                    Daftar lengkap peralatan scaffolding standar industri untuk keamanan dan efisiensi proyek konstruksi Anda di Bau-Bau, Buton & sekitarnya.
                </p>
                
                <!-- CTA Action Pill Button -->
                <div class="pt-2">
                    <a class="w-full bg-surface-card text-text-primary py-3.5 px-6 rounded-full font-label-md text-label-md flex items-center justify-center space-x-2 shadow-md hover:bg-surface-container active:scale-95 transition-all" href="#kontak">
                        <span class="font-bold tracking-wide">KONSULTASI SEWA</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_outward</span>
                    </a>
                </div>
                
                <!-- Logistics Glass Card -->
                <div class="mt-3 p-3.5 rounded-xl bg-glass-surface-dark border border-glass-border backdrop-blur-md flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-surface-dark-card flex items-center justify-center flex-shrink-0 text-primary-fixed">
                        <span class="material-symbols-outlined text-[20px]">local_shipping</span>
                    </div>
                    <div class="flex-1">
                        <p class="text-text-on-dark font-label-sm text-[12px] font-semibold leading-tight">Gudang & Logistik Buton</p>
                        <p class="text-outline-variant font-body-sm text-[11px] leading-tight mt-0.5">Ketersediaan Unit 1.000+ Set SNI • Armada Mandiri Siap Bongkar</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Horizontal Category Filter Bar (Scrollable Pill Row) -->
        <section class="py-4 px-4 bg-background border-b border-surface-border sticky top-14 z-40 backdrop-blur-md bg-background/90">
            <div class="flex items-center space-x-2 overflow-x-auto no-scrollbar py-1">
                <button class="bg-secondary-fixed text-on-secondary-fixed font-label-md text-[13px] px-4 py-1.5 rounded-full whitespace-nowrap font-semibold shadow-sm transition-transform active:scale-95">Semua Produk</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Frame Utama</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Aksesoris Kaki</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Platform</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Aksesoris Mobilisasi</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Frame Tambahan</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Aksesoris Atas</button>
                <button class="bg-surface-card border border-surface-border text-secondary font-label-md text-[13px] px-3.5 py-1.5 rounded-full whitespace-nowrap hover:text-on-surface transition-colors active:scale-95">Penyangga Tunggal</button>
            </div>
        </section>

        <!-- Product Catalog Stack (Displaying all 7 specified components) -->
        <main class="px-4 py-5 space-y-4">
            <!-- Item 1: Scaffolding T170 -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Scaffolding T170" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Frame Utama</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Scaffolding T170</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Main frame scaffolding tinggi 170cm penahan beban kokoh dengan spesifikasi pipa baja galvanis presisi untuk struktur bertingkat.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Pipa SNI Ø 1.25" / 1.5"</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 2: Jack Base T60 -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Jack Base T60" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Aksesoris Kaki</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Jack Base T60</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk menstabilkan struktur di permukaan tanah tidak rata.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Ulir Presisi Baja Solid</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 3: Catwalk Plat -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Catwalk Plat" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Platform</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Catwalk Plat</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Lantai pijakan besi berlubang anti-slip dengan pengait kokoh, dirancang untuk keselamatan kerja pada ketinggian elevasi tinggi.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Anti-Slip Perforated Steel</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 4: Roda Nylon 6 Inch -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Roda Nylon 6 Inch" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Aksesoris Mobilisasi</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Roda Nylon 6 Inch</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Roda nylon 6 inci dengan brake lock ganda heavy-duty untuk memudahkan manuver menara scaffolding secara aman dan stabil.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Double Lock Mechanism</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 5: Ladder Frame T90 -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Ladder Frame T90" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Frame Tambahan</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Ladder Frame T90</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Frame tambahan tangga akses vertikal 90cm untuk penyesuaian elevasi spesifik balok serta tangga pergerakan tenaga kerja.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Tinggi 900mm Galvanis</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 6: U-Head T60 -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="U-Head T60" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Aksesoris Atas</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">U-Head T60</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Pelat U Kokoh Anti Bengkok</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>

            <!-- Item 7: Pipe Support Ts-90 -->
            <article class="bg-surface-card border border-surface-border rounded-2xl p-4 shadow-sm flex flex-col space-y-3 relative group">
                <div class="relative w-full h-52 bg-surface-container-low rounded-xl overflow-hidden flex items-center justify-center">
                    <img alt="Pipe Support Ts-90" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A">
                    <span class="absolute top-2.5 left-2.5 bg-primary/10 text-primary border border-primary/20 px-2.5 py-1 rounded-full font-label-sm text-[11px] font-semibold">Penyangga Tunggal</span>
                    <span class="absolute bottom-2.5 right-2.5 bg-surface-card/90 backdrop-blur-sm border border-surface-border text-on-surface px-2.5 py-0.5 rounded-full font-label-sm text-[11px] flex items-center space-x-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span><span class="">Ready Stock</span>
                    </span>
                </div>
                <div class="flex flex-col space-y-1.5">
                    <div class="flex items-start justify-between">
                        <h2 class="text-on-surface font-headline-sm text-headline-sm font-bold">Pipe Support Ts-90</h2>
                        <span class="text-primary font-label-md text-label-md font-bold">Sewa / Beli</span>
                    </div>
                    <p class="text-secondary font-body-sm text-body-sm leading-relaxed">Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai.</p>
                </div>
                <div class="pt-1 flex items-center justify-between border-t border-surface-border mt-1">
                    <span class="text-text-secondary font-label-sm text-[12px]">Adjustable Telescopic Shoring</span>
                    <a class="bg-surface-dark text-text-on-dark px-3.5 py-2 rounded-full font-label-md text-[13px] inline-flex items-center space-x-1 hover:bg-surface-dark-card active:scale-95 transition-all" href="#kontak">
                        <span class="">Detail & Sewa</span>
                        <span class="material-symbols-outlined text-[15px]">arrow_outward</span>
                    </a>
                </div>
            </article>
        </main>

        <!-- Alur Pemesanan & Keunggulan Industri -->
        <section class="mt-4 px-4 py-8 bg-surface-container-low border-y border-surface-border">
            <div class="flex flex-col space-y-2 mb-6">
                <span class="text-primary font-label-sm text-[12px] uppercase font-bold tracking-wider">Alur & Prosedur</span>
                <h2 class="text-on-surface font-headline-lg-mobile text-headline-lg-mobile font-bold">Proses Cepat & Transparan</h2>
                <p class="text-secondary font-body-sm text-body-sm">Kami mempermudah suplai scaffolding dari gudang hingga siap pakai di lapangan tanpa kendala birokrasi.</p>
            </div>
            
            <div class="relative rounded-2xl overflow-hidden mb-6 border border-surface-border">
                <img alt="Gudang dan Logistik Regina Al Barakah Group" class="w-full h-48 object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WyxhuY4dW_dy6Ur74s_eFGTLeiPpHhwR1YkP80R1Vp7wSHz6XwpnYStqGo2Qvkt2BFTumtMZPiKYWBXlKP7FK98W9OTTdkhBevnZgRwWBtBRfOhEh_CPpyLDVVvu5imXBhovvBdxNG2qevj86-NuG-AH8Kc9FcWh-ao2tU79iv9_RKey-SjC4w7i0XFMPisDRJxi9ZU0f8oGR5rfdgQyWfoPJ9rgdLUsMkJRGJph_0KFV3nJp4_Kie8_U">
                <div class="absolute inset-0 bg-gradient-to-t from-surface-dark/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-3 right-3 bg-glass-surface/90 dark:bg-glass-surface-dark/90 backdrop-blur-md border border-glass-border rounded-xl p-2.5 flex items-center space-x-2 max-w-[210px] shadow-lg">
                    <div class="w-7 h-7 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
                        <span class="material-symbols-outlined text-[16px]">verified_user</span>
                    </div>
                    <div>
                        <p class="text-text-on-dark font-label-sm text-[11px] font-bold leading-tight">Keamanan Teruji & Terawat</p>
                        <p class="text-outline-variant text-[9px] leading-tight mt-0.5">Inspeksi fisik rutin tiap siklus sewa</p>
                    </div>
                </div>
            </div>

            <!-- 4 Process Steps (Step Matrix) -->
            <div class="divide-y divide-surface-border">
                <div class="py-4 flex items-start space-x-3">
                    <span class="text-text-secondary font-headline-sm font-bold text-headline-sm">01</span>
                    <div class="flex-1">
                        <h3 class="text-on-surface font-headline-sm text-[16px] font-bold">Konsultasi Proyek</h3>
                        <p class="text-secondary font-body-sm text-body-sm mt-0.5">Sampaikan kebutuhan dimensi modul, durasi kerja, dan lokasi titik proyek Anda.</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface flex-shrink-0">
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </div>
                </div>
                <div class="py-4 flex items-start space-x-3">
                    <span class="text-text-secondary font-headline-sm font-bold text-headline-sm">02</span>
                    <div class="flex-1">
                        <h3 class="text-on-surface font-headline-sm text-[16px] font-bold">Kesepakatan & Ketentuan Sewa</h3>
                        <p class="text-secondary font-body-sm text-body-sm mt-0.5">Kalkulasi harga kompetitif transparan tanpa biaya tersembunyi dengan kontrak resmi.</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface flex-shrink-0">
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </div>
                </div>
                <div class="py-4 flex items-start space-x-3">
                    <span class="text-text-secondary font-headline-sm font-bold text-headline-sm">03</span>
                    <div class="flex-1">
                        <h3 class="text-on-surface font-headline-sm text-[16px] font-bold">Mobilisasi & Bongkar di Lokasi</h3>
                        <p class="text-secondary font-body-sm text-body-sm mt-0.5">Armada mandiri mengantar komponen langsung ke site proyek tepat jadwal kerja.</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface flex-shrink-0">
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </div>
                </div>
                <div class="py-4 flex items-start space-x-3">
                    <span class="text-text-secondary font-headline-sm font-bold text-headline-sm">04</span>
                    <div class="flex-1">
                        <h3 class="text-on-surface font-headline-sm text-[16px] font-bold">Purna Sewa & Demobilisasi Cepat</h3>
                        <p class="text-secondary font-body-sm text-body-sm mt-0.5">Penghitungan kembali unit bersama tim dan penjemputan material scaffolding di lokasi.</p>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-on-surface flex-shrink-0">
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4 Value Pillars -->
        <section class="px-4 py-8 bg-background">
            <div class="flex flex-col space-y-1.5 mb-5">
                <span class="text-primary font-label-sm text-[12px] uppercase font-bold tracking-wider">Standar Kualitas</span>
                <h2 class="text-on-surface font-headline-lg-mobile text-[24px] font-bold">Keunggulan Layanan Kami</h2>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-surface-card border border-surface-border p-3.5 rounded-xl flex flex-col space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                    </div>
                    <h3 class="text-on-surface font-label-md text-[13px] font-bold">Pipa Baja Galvanis SNI</h3>
                    <p class="text-secondary font-body-sm text-[11px] leading-tight">Presisi tinggi tahan karat & tahan cuaca ekstrem pesisir.</p>
                </div>
                <div class="bg-surface-card border border-surface-border p-3.5 rounded-xl flex flex-col space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">health_and_safety</span>
                    </div>
                    <h3 class="text-on-surface font-label-md text-[13px] font-bold">Beban Teruji K3</h3>
                    <p class="text-secondary font-body-sm text-[11px] leading-tight">Uji kapasitas daya dukung untuk keselamatan kerja maksimal.</p>
                </div>
                <div class="bg-surface-card border border-surface-border p-3.5 rounded-xl flex flex-col space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">local_shipping</span>
                    </div>
                    <h3 class="text-on-surface font-label-md text-[13px] font-bold">Armada Mandiri Cepat</h3>
                    <p class="text-secondary font-body-sm text-[11px] leading-tight">Pengiriman langsung ke seluruh wilayah Bau-Bau & Buton.</p>
                </div>
                <div class="bg-surface-card border border-surface-border p-3.5 rounded-xl flex flex-col space-y-2">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px]">support_agent</span>
                    </div>
                    <h3 class="text-on-surface font-label-md text-[13px] font-bold">Konsultasi Gratis</h3>
                    <p class="text-secondary font-body-sm text-[11px] leading-tight">Perhitungan estimasi kebutuhan modul scaffolding akurat.</p>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="bg-white text-slate-600 border-t border-slate-200 pt-8 pb-24 px-4" id="kontak">
            <div class="max-w-md mx-auto space-y-6">
                <!-- Brand Section -->
                <div>
                    <div class="flex items-center gap-2.5 mb-2.5">
                        <div class="w-9 h-9 rounded-xl bg-[#5084C4] flex items-center justify-center text-white shadow-sm flex-shrink-0">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7v2h14V9a7 7 0 0 0-7-7zm-9 11v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2H3z"></path></svg>
                        </div>
                        <span class="text-sm font-extrabold text-slate-900 tracking-tight font-display uppercase">REGINA AL BARAKAH GROUP</span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed mb-3.5">
                        Pusat persewaan scaffolding terbesar dan terlengkap di wilayah Kabupaten Buton.
                    </p>
                    <div class="flex items-center gap-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors" aria-label="TikTok"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.98v7.92a7.61 7.61 0 01-3.69 6.55 7.63 7.63 0 01-8.79-.82A7.58 7.58 0 012.3 14.5a7.63 7.63 0 018.25-7.59v4.06c-1.89-.37-3.92.51-4.7 2.22a3.67 3.67 0 001.37 4.54c1.47 1.05 3.59.88 4.88-.38.45-.44.73-1.02.73-1.64V.02h-.31z"></path></svg></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors" aria-label="Instagram"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path></svg></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition-colors" aria-label="YouTube"><svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg></a>
                    </div>
                </div>

                <!-- Navigation Links: Menu Utama -->
                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#5084C4] mb-3 font-display">MENU UTAMA</h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-600">
                        <li><a href="index.php" class="hover:text-[#E53935] transition-colors block py-0.5">Beranda</a></li>
                        <li><a href="product.php" class="hover:text-[#E53935] transition-colors block py-0.5">Produk</a></li>
                        <li><a href="about.php" class="hover:text-[#E53935] transition-colors block py-0.5">Tentang Kami</a></li>
                        <li><a href="contact.php" class="hover:text-[#E53935] transition-colors block py-0.5">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact & Actions: Hubungi Kami -->
                <div class="border-t border-slate-100 pt-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-3 font-display">HUBUNGI KAMI</h4>
                    <div class="space-y-2.5 mb-4 text-xs text-slate-600">
                        <div class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-red-500 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"></path></svg>
                            <span>Jl. Pahlawan Blk. A No. 11, BTN Medy Brata, Wolio, Bau-Bau 93711</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-slate-700 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span class="font-bold text-slate-900">0812-4220-7221</span>
                        </div>
                    </div>

                    <!-- Tombol Hijau WhatsApp Kami -->
                    <a href="https://wa.me/6281242207221?text=Halo%20Regina%20Al%20Barakah,%20saya%20ingin%20sewa%20scaffolding" class="w-full py-3 px-4 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white font-extrabold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md shadow-[#25D366]/20 transition-all active:scale-[0.99]">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.531 1.777.784 2.796.784 3.182 0 5.769-2.587 5.769-5.767 0-3.181-2.587-5.769-5.769-5.769zm3.385 8.169c-.143.402-.823.771-1.15.823-.326.052-.751.074-2.18-.519-1.723-.715-2.825-2.477-2.91-2.592-.085-.115-.694-.925-.694-1.765s.439-1.252.595-1.424c.157-.172.342-.215.457-.215.114 0 .229 0 .329.006.105.006.244-.04.382.292.143.344.49 1.194.533 1.28.043.086.072.186.014.3-.057.115-.086.187-.172.287-.086.101-.182.224-.26.302-.086.086-.176.18-.076.353.1.172.443.731.952 1.185.655.584 1.208.766 1.38.852.172.086.273.072.373-.043.101-.115.43-.502.544-.674.115-.172.229-.144.387-.086.158.058 1.002.473 1.174.559.172.086.287.129.329.201.043.072.043.416-.1 1.018z"></path></svg>
                        <span class="">WHATSAPP KAMI</span>
                    </a>
                </div>

                <!-- Bottom Copyright Bar -->
                <div class="border-t border-slate-200 pt-4 text-[10px] text-slate-400 flex flex-col gap-1 text-center">
                    <p class="font-medium text-slate-600">© 2026 Regina Al Barakah Group</p>
                    <p class="">Layanan Scaffolding Terpercaya di Sulawesi Tenggara</p>
                </div>
            </div>
        </footer>

        <!-- Contextual Floating WhatsApp Button (Docked Bottom Right) -->
        <aside class="fixed bottom-4 right-4 z-50">
            <a aria-label="Tanya Sewa Cepat via WhatsApp" class="flex items-center space-x-2 bg-[#25D366] hover:bg-[#20bd5a] text-white px-4 py-2.5 rounded-full shadow-xl border border-white/20 active:scale-95 transition-all" href="https://wa.me/6281242207221">
                <span class="material-symbols-outlined text-[20px]">chat</span>
                <span class="font-label-md text-[13px] font-semibold tracking-tight whitespace-nowrap">Tanya Sewa Cepat</span>
            </a>
        </aside>
    </div>

    <!-- ============================================================== -->
    <!-- 💻 TAMPILAN DESKTOP (Sembunyi di Mobile & Tablet) -->
    <!-- ============================================================== -->
    <div class="hidden lg:block">
        <div class="max-w-[1360px] mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-6 space-y-6">
            <main class="flex-grow">
                <!-- ==================== HERO SECTION ==================== -->
                <section class="relative overflow-hidden rounded-[32px] bg-[#111827] text-white min-h-[640px] lg:min-h-[720px] flex flex-col justify-between shadow-2xl mb-16" id="hero">
                    <div class="absolute inset-0 z-0">
                        <div class="w-full h-full bg-cover bg-center opacity-40" data-alt="Modern industrial warehouse and scaffolding operations" style="background-image: url('https://lh3.googleusercontent.com/aida/AEtjO1XLL7JA-z61-OMS0T38Ms4PhXgPZLxn5FB58SFcp_C0AG6DxWcVrm8jQDUYB3MB8UPsi975FFblDLhjAaOuTdJ-nDi5nCAXX2ktHhVd5VUNi9HCRbWO0z1mOdvWMB2LsKUN9gw8ErI2jLfFbsg2FGeUlrHUtZuohQKwqc9CrqBxZWwEOZ6qjBINXlFP79jcyZs6XyGFPGG_jjeUR_5MhEv8JhMyP_kCYa0VFuo2NbWycKi_V-pLmlarAc8')"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-surface-dark via-surface-dark/85 to-transparent"></div>
                    </div>
                    
                    <!-- NavigationBar Desktop -->
                    <nav class="relative z-20 px-5 sm:px-8 pt-5 sm:pt-6">
                        <div class="flex items-center justify-between gap-4">
                            <a class="flex items-center gap-3 group" href="#" title="Regina Al Barakah Group">
                                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#db322f] flex items-center justify-center text-white shadow-lg shadow-red-600/30 flex-shrink-0">
                                    <span class="material-symbols-outlined text-2xl text-white">domain</span>
                                </div>
                                <div>
                                    <div class="text-base font-bold tracking-tight text-white leading-tight font-display">REGINA AL BARAKAH</div>
                                    <div class="text-[10px] font-semibold tracking-wider text-rose-300 uppercase mt-0.5">SCAFFOLDING & KONSTRUKSI</div>
                                </div>
                            </a>
                            
                            <div class="hidden lg:flex items-center glass-nav px-5 py-2 rounded-full text-xs xl:text-sm font-medium text-slate-100 space-x-1 shadow-inner font-display">
                                <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="index.php">Home</a>
                                <a class="px-4 py-1.5 rounded-full bg-white/20 text-white font-semibold shadow-sm transition" href="product.php">Product</a>
                                <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="about.php">About Us</a>
                                <a class="px-4 py-1.5 rounded-full hover:bg-white/20 transition text-slate-200" href="contact.php">Contact</a>
                            </div>
                            
                            <a class="inline-flex items-center bg-white text-surface-dark font-semibold px-5 py-2.5 rounded-full text-xs sm:text-sm shadow hover:bg-slate-100 transition-all group font-display" href="https://wa.me/6281242207221?text=Halo%20Regina%20Al%20Barakah,%20saya%20ingin%20konsultasi%20sewa%20scaffolding" target="_blank">
                                <span class="text-on-background font-semibold">Konsultasi / Sewa</span>
                                <span class="w-6 h-6 rounded-full bg-surface-dark text-white flex items-center justify-center ml-2.5 text-xs group-hover:scale-105 transition-transform">↗</span>
                            </a>
                        </div>
                    </nav>

                    <div class="relative z-10 w-full pt-10 pb-12 sm:pb-16 px-5 sm:px-8 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center flex-grow">
                        <div class="lg:col-span-7 space-y-6">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-text-on-dark text-label-sm font-label-sm font-display">
                                <span class="w-2 h-2 rounded-full bg-primary-fixed-dim animate-pulse"></span>
                                <span class="">KATALOG LENGKAP & STOK READY</span>
                            </div>
                            <h1 class="text-headline-hero-mobile lg:text-headline-hero font-headline-hero text-text-on-dark tracking-tight font-display">
                                Katalog Produk & Komponen Standar Industri
                            </h1>
                            <p class="text-body-lg text-outline-variant max-w-xl font-body-lg">
                                Daftar lengkap peralatan scaffolding standar industri untuk keamanan dan efisiensi proyek konstruksi Anda di Bau-Bau, Buton, dan sekitarnya.
                            </p>
                            <div class="flex flex-wrap items-center gap-4 pt-2">
                                <a class="inline-flex items-center gap-2 bg-white text-surface-dark px-7 py-3 rounded-full text-label-md font-label-md hover:bg-surface-bright transition-all active:scale-95 shadow-md group font-display" href="#katalog">
                                    <span class="">Jelajahi Katalog</span>
                                    <span class="material-symbols-outlined text-sm group-hover:translate-y-1 transition-transform" data-icon="south">south</span>
                                </a>
                                <a class="inline-flex items-center gap-2 bg-transparent text-white border border-white/30 hover:border-white px-6 py-3 rounded-full text-label-md font-label-md hover:bg-white/10 transition-all font-display" href="https://wa.me/6282188253433?text=Halo,%20saya%20butuh%20penawaran%20harga%20sewa%20scaffolding" target="_blank">
                                    <span class="">Konsultasi Sewa</span>
                                    <span class="material-symbols-outlined text-sm text-primary-fixed-dim" data-icon="arrow_outward">arrow_outward</span>
                                </a>
                            </div>
                        </div>
                        <div class="lg:col-span-5 flex flex-col gap-4">
                            <div class="p-6 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 shadow-2xl relative overflow-hidden">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <span class="text-label-sm uppercase tracking-wider text-primary-fixed-dim font-semibold font-display">Gudang & Logistik Buton</span>
                                        <h3 class="text-headline-sm font-headline-sm text-white mt-1 font-display">Ketersediaan Unit 1.000+ Set</h3>
                                        <p class="text-body-sm text-outline-variant mt-1">SNI Certified • Siap Kirim Hari Ini</p>
                                    </div>
                                    <div class="w-12 h-12 rounded-full bg-primary/30 border border-primary-fixed-dim/40 flex items-center justify-center text-primary-fixed-dim">
                                        <span class="material-symbols-outlined text-2xl" data-icon="verified">verified</span>
                                    </div>
                                </div>
                                <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between text-body-sm text-outline-variant">
                                    <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> Armada Mandiri Siap Bongkar</span>
                                    <span class="text-white font-medium">Bau-Bau & Sekitarnya</span>
                                </div>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-dark-card/80 backdrop-blur-md border border-white/10 flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg bg-tertiary/20 text-tertiary-fixed flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined" data-icon="shield">shield</span>
                                </div>
                                <div>
                                    <p class="text-label-md text-white font-semibold font-display">Keamanan Konstruksi Terjamin</p>
                                    <p class="text-body-sm text-outline-variant">Pipa galvanis tebal lolos uji beban dinamis K3.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== HIGHLIGHT TRUST METRICS ==================== -->
                <section class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 mb-16">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-surface-card p-5 rounded-2xl border border-surface-border flex items-center gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined" data-icon="verified_user">verified_user</span>
                            </div>
                            <div>
                                <p class="text-headline-sm font-headline-sm text-on-surface font-display">10+ Tahun</p>
                                <p class="text-body-sm text-secondary font-body-sm">Pengalaman Proyek Sipil</p>
                            </div>
                        </div>
                        <div class="bg-surface-card p-5 rounded-2xl border border-surface-border flex items-center gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                            </div>
                            <div>
                                <p class="text-headline-sm font-headline-sm text-on-surface font-display">Full Cycle</p>
                                <p class="text-body-sm text-secondary font-body-sm">Sewa, Pasang & Bongkar</p>
                            </div>
                        </div>
                        <div class="bg-surface-card p-5 rounded-2xl border border-surface-border flex items-center gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                            </div>
                            <div>
                                <p class="text-headline-sm font-headline-sm text-on-surface font-display">Transparan</p>
                                <p class="text-body-sm text-secondary font-body-sm">Tanpa Biaya Tersembunyi</p>
                            </div>
                        </div>
                        <div class="bg-surface-card p-5 rounded-2xl border border-surface-border flex items-center gap-4 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
                                <span class="material-symbols-outlined" data-icon="local_shipping">local_shipping</span>
                            </div>
                            <div>
                                <p class="text-headline-sm font-headline-sm text-on-surface font-display">Tepat Waktu</p>
                                <p class="text-body-sm text-secondary font-body-sm">Armada Distribusi Cepat</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== MAIN CATALOG SECTION ==================== -->
                <section class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 mb-24" id="katalog">
                    <!-- Section Header -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-label-sm font-label-sm mb-3 font-display">
                                <span class="material-symbols-outlined text-sm" data-icon="category">category</span>
                                <span class="">INVENTARIS SCAFFOLDING</span>
                            </div>
                            <h2 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg text-on-surface font-display">
                                Katalog Produk & Spesifikasi Komponen
                            </h2>
                            <p class="text-body-md text-secondary mt-1">
                                Peralatan konstruksi modular teruji standar keselamatan kerja (K3) dengan perawatan berkala.
                            </p>
                        </div>
                        <!-- Counter Indicator -->
                        <div class="flex items-center gap-2 text-label-sm text-secondary bg-surface-container-low px-4 py-2 rounded-full border border-surface-border">
                            <span class="material-symbols-outlined text-sm text-primary" data-icon="filter_list">filter_list</span>
                            <span class="">Menampilkan <strong class="text-on-surface font-semibold font-display" id="product-count-desktop">7</strong> Komponen Siap Pakai</span>
                        </div>
                    </div>

                    <!-- Quick Filter Pills -->
                    <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-8 scrollbar-none" id="category-filters-desktop">
                        <button class="filter-btn-desktop active-filter px-5 py-2.5 rounded-full text-label-md font-medium transition-all bg-surface-dark text-white shadow-sm flex-shrink-0 font-display" data-filter="all">Semua Produk</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Frame Utama">Frame Utama</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Aksesoris Kaki">Aksesoris Kaki</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Platform">Platform</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Aksesoris Mobilisasi">Aksesoris Mobilisasi</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Frame Tambahan">Frame Tambahan</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Aksesoris Atas">Aksesoris Atas</button>
                        <button class="filter-btn-desktop px-5 py-2.5 rounded-full text-label-md font-medium text-secondary hover:text-on-surface bg-surface-card border border-surface-border hover:bg-surface-container transition-all flex-shrink-0 font-display" data-filter="Penyangga Tunggal">Penyangga Tunggal</button>
                    </div>

                    <!-- Product Cards Grid (7 Specific Items) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="product-grid-desktop">
                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Kaki" data-desc="Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws" data-title="Jack Base T60">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Aksesoris Kaki</span>
                                <img alt="Jack Base T60" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1VGYQiEAJ-HoWhRDCo2h0xhx_YfcyiMREYqkHxfzYcGV-jHEZCaj50eGjy1IO9S8qplMW0WSWUP2mGEwxm2S0sM_gXvT27kFb2phnczFpjrRoaPFT3lIFcPXLn7TomZMYrDZv0eJg0koaRHiW_M5cJRgBTtaqnHNQ6WsBC3mgUodsu6qDJ9pLWz52J2Mt13N2Sx-lsTV1rjleBNUsh_VZzKUJqk6ganwEDUxn0velSAjONH3yDKcC6Ioaws">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Jack Base T60</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Dudukan kaki scaffolding ukuran 60cm yang dapat diatur ketinggiannya untuk meratakan posisi pada lantai miring.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Frame Utama" data-desc="Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri." data-img="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw" data-title="Scaffolding T170">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Frame Utama</span>
                                <img alt="Scaffolding T170" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1V9gCLSJNAA3R2EejB2XAQL0X7FR4cj0r5kwSGlRpKveUncktc4J7GDwtjBFmOwR5lhHk3OucI8CvxvRrVi5yw-aQ7FhIUOyEOpYqOnXeKcepIeRBhQfi-2yZMB8sF3WA0WKzz2NalakMYCa9mH50cOR0xopt5IE_uVpghs7MTEPgnlvW-Kmup9JVZupxSy5xubGJDr6GLACqmOZ8Zew0NkzqJN4QcoULf6qp_GRDHMizUJZcyzUlkvoyXw">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Scaffolding T170</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Main frame scaffolding dengan tinggi 170cm. Komponen utama penahan beban yang sangat kokoh standar industri.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Platform" data-desc="Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian." data-img="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU" data-title="Catwalk">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Platform</span>
                                <img alt="Catwalk" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1XvQUGeV6onxd5LI8gkQyvmwA4ihmJ-MVewvIhTQJoDXHuVOsRUWrQjhFWcraPfjMMVlTBl3QnD4PFEi9w2_yMb_RtLrQv52k-0W-OkLXq0bDe-ZJIxvcN1AVIxAvQs9G57UDYH9uPRa0nnhDPJnSu_qJuTU-NgtD6VSVbWAVyZBCHMUV2339zbZNi6e29hEYeScPUwGZ5-GA1x9dtViO4e3L-zOHP99JqiNQwQP4OKqbdoAKl9efaOirU">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Catwalk</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Lantai pijakan besi anti-slip yang dipasang pada frame sebagai tempat berdiri pekerja dengan aman di area ketinggian.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Mobilisasi" data-desc="Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding." data-img="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY" data-title="Roda Nylon 6 Inch">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Aksesoris Mobilisasi</span>
                                <img alt="Roda Nylon 6 Inch" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida/AEtjO1VM7yA82kNuE6pGkc22kBGWxihZjwX1KKvVC4lgL-T4NSd35dWNmi5RQN65jl8VuDdXUgnOiInOUO1z33qsr7mDfrBRuuM-FSkksGhSvMtZCO_oP3ofTpCqQgJnn8eX5ybOBuwVEHd4PyWusrzeqJvfXKwL4R8nShRvOCgpkoNYV7M7oaBOICavzkiXPhQjBNHJ_oJc4rESiTNELVBbKezsDWoM-wTRJBjanOK_mWJASdN5GjCPTZ1b79cY">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Roda Nylon 6 Inch</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Roda berbahan nylon berukuran 6 inci yang dilengkapi pengunci untuk mempermudah pemindahan rangkaian scaffolding.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Frame Tambahan" data-desc="Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA" data-title="Ladder Frame T90">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Frame Tambahan</span>
                                <img alt="Ladder Frame T90" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFFVz7CGFG-9k3iUycI5aNf9oKYjCLBeecoGYWG265obC0DiCO_x29HWoLU6FnGnDgbmC31qdryNOXPClNYZa1YlvZjBd41i1Uhwic6bwyewpzVSG_irxVQ7GBlAyolPB4o0i2RQBkhj347Z-BqJ5Dhe0Rdh-sTPkuHja5hRkCPXo05bOePHXkScuwZEABVV5gs0MKG-mq76_5-JFUYhFXkABxbXmi-t_v1vGHrwjVGFThBTGUfHnQZA">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Ladder Frame T90</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Frame tambahan setinggi 90cm yang berfungsi sebagai tangga akses vertikal naik turun bagi para pekerja.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Aksesoris Atas" data-desc="Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ" data-title="U-Head T60">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Aksesoris Atas</span>
                                <img alt="U-Head T60" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRXhrzaaQ59pFQMeSpXylFfDTC8S1cxjxZ2LrRIJCj-Vp_UiJAZlF157B_8ziQALzukee-BrtH4GeRv61WYlzhxNV5PrwuYPegXS20lwDK6_FMLjSGU-4IGHbYELnnUxAZD7lGUWqvm8P84eZDV0mJTwUVPzi-mumQJfVQyl76RPXC6Z9ayZSv7MlbUxUdp2BBcPZvllzGwy8-iOwD44UxhopcrCbhzPqpE3YDO9_pDUesU33GlDYKiQ">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">U-Head T60</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Penyangga bagian atas ukuran 60cm berbentuk U untuk menahan gelagar balok kayu atau hollow pada cetakan beton.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>

                        <article class="product-card-desktop group bg-surface-card rounded-2xl border border-surface-border overflow-hidden shadow-sm hover:shadow-xl hover:border-primary/40 transition-all duration-300 flex flex-col" data-category="Penyangga Tunggal" data-desc="Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai." data-img="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A" data-title="Pipe Support Ts-90">
                            <div class="relative bg-surface-container-low aspect-[4/3] flex items-center justify-center overflow-hidden p-6 border-b border-surface-border">
                                <span class="absolute top-4 left-4 z-10 px-3 py-1 rounded-full text-label-sm font-label-sm bg-surface-card/90 backdrop-blur-md text-primary font-semibold border border-surface-border shadow-xs">Penyangga Tunggal</span>
                                <img alt="Pipe Support Ts-90" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0NjkSgrTnAiIPwo1_81FjaTmDQJ5YWEja7oA75qwS_eRUmEEsz708XYWlHMp9jb4OaTTerOh4XjuI4P6sWiW6oSqjMTwfZgG-P6RtWcgcWk9Eoy0oas1zul8_p98ibTo64NQcT-Py08IrwhanfmeHbv4pvQSXadXYUeNEp9hM0Xt4sqVuyDGFJq6WqBHFHWqgvo_AS49AtZPNcrbf8vvrisJeH_s3XHGsaY-iVLFF52VOAnWStgBp8A">
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-headline-sm font-headline-sm text-on-surface group-hover:text-primary transition-colors font-display">Pipe Support Ts-90</h3>
                                <p class="text-body-md text-secondary mt-2 line-clamp-2 flex-grow">Tiang penyangga tunggal besi (shoring pipe) yang dapat disetel tinggi-rendahnya untuk menyokong bekisting atau dak lantai.</p>
                                <div class="pt-6 mt-4 border-t border-surface-border flex items-center justify-between">
                                    <span class="text-label-sm text-secondary font-medium flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Ready Stock</span>
                                    <button class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full bg-surface-container hover:bg-primary hover:text-white text-on-surface text-label-md font-label-md transition-all duration-200 font-display" onclick="openModalDesktop(this)">
                                        <span class="">Lihat Detail</span>
                                        <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <!-- ==================== PROCESS TIMELINE ==================== -->
                <section class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 mb-24">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                        <div class="lg:col-span-5 relative">
                            <div class="rounded-3xl overflow-hidden border border-surface-border shadow-lg aspect-[4/5] relative">
                                <div class="w-full h-full bg-cover bg-center" data-alt="A clean, organized modern construction equipment warehouse with heavy scaffolding steel pipes, neatly stacked pallets, and a professional worker conducting quality control inspection under bright natural high-bay daylight." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBg7YvztMz5x5EEpPnOGn8Ff6Q4T6n3PZ00-dHjtfb45RbtvMw3D2fUzlOTutJy0Rh5Z7uq_k9BHMdmNkkls8HbrEngrEn6xjVffOc4YkRB1blHtqSPssf0WjU1MTa0JOJhVm6MfSWUvFcsGJm8h2W-Z3Ytt_DJlofzUO_x5gsPPrKhZvtsjgU0jJpbA7UbWGGDWjWr2hHfAaFA3uUVXVf33T5iW_vsRppMYnxgVVaqg1IejOJUzUieaA')"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-surface-dark/70 via-transparent to-transparent"></div>
                            </div>
                            <div class="absolute bottom-6 left-6 right-6 p-5 rounded-2xl bg-white/85 backdrop-blur-md border border-white/40 shadow-xl flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-tertiary text-white flex items-center justify-center flex-shrink-0 shadow-sm">
                                    <span class="material-symbols-outlined text-2xl" data-icon="health_and_safety">health_and_safety</span>
                                </div>
                                <div>
                                    <h4 class="text-headline-sm font-headline-sm text-on-surface leading-tight font-display">Proyek Anda Terlindungi</h4>
                                    <p class="text-body-sm text-secondary mt-0.5">Scaffolding dicek rutin dan dipastikan presisi sebelum pengiriman.</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-7 space-y-6">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-surface-container text-on-surface text-label-sm font-label-sm font-display">
                                <span class="">SISTEM SEWA EFISIEN</span>
                            </div>
                            <h2 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg text-on-surface font-display">
                                Proses Pemesanan Cepat & Transparan
                            </h2>
                            <p class="text-body-md text-secondary">
                                Kami menyederhanakan rantai pasok alat proyek agar Anda dapat fokus mengejar target pembangunan tanpa kendala teknis.
                            </p>
                            <div class="divide-y divide-surface-border pt-4">
                                <div class="py-5 flex items-start gap-6 group">
                                    <span class="text-headline-lg font-headline-hero text-outline-variant group-hover:text-primary transition-colors font-bold font-display">01</span>
                                    <div class="flex-grow">
                                        <h4 class="text-headline-sm font-headline-sm text-on-surface font-display">Konsultasi & Kebutuhan Proyek</h4>
                                        <p class="text-body-sm text-secondary mt-1">Kirimkan gambar rencana atau sampaikan luas area konstruksi untuk kami hitungkan jumlah set yang tepat.</p>
                                    </div>
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface group-hover:bg-primary group-hover:text-white transition-all flex-shrink-0">
                                        <span class="material-symbols-outlined text-sm" data-icon="chat">chat</span>
                                    </div>
                                </div>
                                <div class="py-5 flex items-start gap-6 group">
                                    <span class="text-headline-lg font-headline-hero text-outline-variant group-hover:text-primary transition-colors font-bold font-display">02</span>
                                    <div class="flex-grow">
                                        <h4 class="text-headline-sm font-headline-sm text-on-surface font-display">Kesepakatan & Ketentuan Sewa</h4>
                                        <p class="text-body-sm text-secondary mt-1">Kami terbitkan rincian biaya sewa transparan tanpa beban biaya tersembunyi dengan term fleksibel.</p>
                                    </div>
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface group-hover:bg-primary group-hover:text-white transition-all flex-shrink-0">
                                        <span class="material-symbols-outlined text-sm" data-icon="description">description</span>
                                    </div>
                                </div>
                                <div class="py-5 flex items-start gap-6 group">
                                    <span class="text-headline-lg font-headline-hero text-outline-variant group-hover:text-primary transition-colors font-bold font-display">03</span>
                                    <div class="flex-grow">
                                        <h4 class="text-headline-sm font-headline-sm text-on-surface font-display">Mobilisasi & Bongkar di Lokasi</h4>
                                        <p class="text-body-sm text-secondary mt-1">Armada logistik kami langsung mengantar peralatan ke lokasi proyek di Bau-Bau dan wilayah sekitarnya.</p>
                                    </div>
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface group-hover:bg-primary group-hover:text-white transition-all flex-shrink-0">
                                        <span class="material-symbols-outlined text-sm" data-icon="local_shipping">local_shipping</span>
                                    </div>
                                </div>
                                <div class="py-5 flex items-start gap-6 group">
                                    <span class="text-headline-lg font-headline-hero text-outline-variant group-hover:text-primary transition-colors font-bold font-display">04</span>
                                    <div class="flex-grow">
                                        <h4 class="text-headline-sm font-headline-sm text-on-surface font-display">Purna Sewa & Demobilisasi Cepat</h4>
                                        <p class="text-body-sm text-secondary mt-1">Setelah pekerjaan selesai, tim kami menjemput kembali unit scaffolding secara tertib dan rapi.</p>
                                    </div>
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface group-hover:bg-primary group-hover:text-white transition-all flex-shrink-0">
                                        <span class="material-symbols-outlined text-sm" data-icon="assignment_turned_in">assignment_turned_in</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== SPECIFICATIONS & QUALITY BANNER ==================== -->
                <section class="max-w-[1360px] mx-auto px-4 sm:px-6 lg:px-8 mb-24" id="kualitas">
                    <div class="rounded-3xl bg-surface-dark text-white p-8 sm:p-12 lg:p-14 border border-surface-dark-card shadow-2xl relative overflow-hidden">
                        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div class="flex flex-col">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-primary-fixed-dim mb-4">
                                    <span class="material-symbols-outlined text-2xl" data-icon="token">token</span>
                                </div>
                                <h4 class="text-headline-sm font-headline-sm text-white font-display">Pipa Baja Galvanis SNI</h4>
                                <p class="text-body-sm text-outline-variant mt-2">Ketebalan presisi tahan karat, cocok untuk iklim pesisir dan beban tinggi proyek sipil.</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-primary-fixed-dim mb-4">
                                    <span class="material-symbols-outlined text-2xl" data-icon="scale">scale</span>
                                </div>
                                <h4 class="text-headline-sm font-headline-sm text-white font-display">Kapasitas Beban Teruji K3</h4>
                                <p class="text-body-sm text-outline-variant mt-2">Mendukung beban pekerja dan material cetakan beton tanpa deformasi rangka.</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-primary-fixed-dim mb-4">
                                    <span class="material-symbols-outlined text-2xl" data-icon="speed">speed</span>
                                </div>
                                <h4 class="text-headline-sm font-headline-sm text-white font-display">Pengiriman Cepat Armada Mandiri</h4>
                                <p class="text-body-sm text-outline-variant mt-2">Truk operasional sendiri memastikan jadwal dropping material tidak pernah molor.</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-primary-fixed-dim mb-4">
                                    <span class="material-symbols-outlined text-2xl" data-icon="support_agent">support_agent</span>
                                </div>
                                <h4 class="text-headline-sm font-headline-sm text-white font-display">Konsultasi Kebutuhan Gratis</h4>
                                <p class="text-body-sm text-outline-variant mt-2">Staf engineer kami siap memberikan saran konfigurasi rangkaian scaffolding paling hemat.</p>
                            </div>
                        </div>
                        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <p class="text-body-sm text-outline-variant">Pusat rental scaffolding resmi terdaftar di wilayah Sulawesi Tenggara.</p>
                            <a class="inline-flex items-center gap-2 bg-white text-surface-dark px-6 py-2.5 rounded-full text-label-md font-label-md hover:bg-surface-bright transition-all font-display" href="https://wa.me/6282188253433" target="_blank">
                                <span class="">Konsultasi Sewa Sekarang</span>
                                <span class="material-symbols-outlined text-sm" data-icon="trending_flat">trending_flat</span>
                            </a>
                        </div>
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

                <!-- ==================== PRODUCT DETAIL MODAL (Desktop) ==================== -->
                <div class="fixed inset-0 z-[100] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4" id="product-modal-desktop">
                    <div class="bg-surface-card rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl border border-surface-border transform transition-all">
                        <div class="relative bg-surface-container-low aspect-[16/9] flex items-center justify-center p-8 border-b border-surface-border">
                            <button aria-label="Tutup" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-on-surface hover:bg-white shadow-sm transition-all" onclick="closeModalDesktop()">
                                <span class="material-symbols-outlined" data-icon="close">close</span>
                            </button>
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-label-sm font-label-sm bg-primary text-white font-medium shadow-xs" id="modal-category-desktop">Kategori</span>
                            <img alt="Detail Produk" class="max-h-full max-w-full object-contain" id="modal-img-desktop" src="">
                        </div>
                        <div class="p-8">
                            <h3 class="text-headline-md font-headline-md text-on-surface font-bold font-display" id="modal-title-desktop">Nama Komponen</h3>
                            <p class="text-body-md text-secondary mt-3" id="modal-desc-desktop">Deskripsi komponen spesifikasi lengkap dan rekomendasi penggunaan scaffolding standar.</p>
                            <div class="mt-6 pt-6 border-t border-surface-border flex flex-col sm:flex-row items-center justify-between gap-4">
                                <button class="w-full sm:w-auto px-6 py-2.5 rounded-full border border-surface-border text-on-surface hover:bg-surface-container text-label-md font-label-md transition-colors font-display" onclick="closeModalDesktop()">
                                    Tutup
                                </button>
                                <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-2.5 rounded-full bg-on-background text-white hover:bg-surface-dark text-label-md font-label-md transition-all shadow-md group font-display" href="#" id="modal-wa-link-desktop" target="_blank">
                                    <span class="material-symbols-outlined text-sm text-emerald-400" data-icon="chat">chat</span>
                                    <span class="">Hubungi Kami via WhatsApp</span>
                                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform" data-icon="arrow_outward">arrow_outward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            <!-- BEGIN: MainFooter Desktop -->
            <footer class="bg-white rounded-[32px] p-8 sm:p-10 border border-[#E0E0E0] subtle-shadow text-[#757575] text-sm" id="kontak-desktop">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-6">
                    <div class="md:col-span-5 space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl bg-[#db322f] flex items-center justify-center text-white shadow-md flex-shrink-0">
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

                        <a href="https://wa.me/6281242207221" class="w-fit mt-3 py-2.5 px-4 rounded-xl bg-[#059669] hover:bg-emerald-500 text-white font-bold text-xs tracking-wider uppercase flex items-center justify-center gap-2 shadow-md transition-all font-display">
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

        </div>
    </div>
</body>
</html>