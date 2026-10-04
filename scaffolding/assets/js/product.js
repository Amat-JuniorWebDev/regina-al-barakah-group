AOS.init({ duration: 1000, easing: 'ease-out-back', once: true, offset: 80 });

const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
    menuBtn.innerHTML = mobileMenu.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
});

// WhatsApp Multi-Admin Dropdown Toggle Script
const waToggle = document.getElementById('wa-toggle');
const waMenu = document.getElementById('wa-menu');

waToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    if (waMenu.classList.contains('hidden')) {
        waMenu.classList.remove('hidden');
        setTimeout(() => {
            waMenu.classList.remove('scale-95', 'opacity-0');
            waMenu.classList.add('scale-100', 'opacity-100');
        }, 10);
        waToggle.innerHTML = '<i class="fas fa-times animate-none"></i>';
        waToggle.style.backgroundColor = '#64748b';
    } else {
        closeWaMenu();
    }
});

function closeWaMenu() {
    waMenu.classList.remove('scale-100', 'opacity-100');
    waMenu.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        waMenu.classList.add('hidden');
    }, 300);
    waToggle.innerHTML = '<i class="fab fa-whatsapp"></i>';
    waToggle.style.backgroundColor = '#25d366';
}

document.addEventListener('click', (e) => {
    if (!waMenu.contains(e.target) && !waToggle.contains(e.target)) {
        if (!waMenu.classList.contains('hidden')) {
            closeWaMenu();
        }
    }
});

// Script Modal Detail Produk Khusus
const productModal = document.getElementById('product-modal');
const modalInner = productModal.querySelector('.transform');
let currentImgSrc = ''; // Variabel bantu simpan url gambar aktif

function openProductModal(name, cat, desc, imgSrc) {
    document.getElementById('modal-title').innerText = name;
    document.getElementById('modal-cat').innerText = cat;
    document.getElementById('modal-desc').innerText = desc;
    currentImgSrc = imgSrc;
    
    const modalImg = document.getElementById('modal-img');
    modalImg.src = imgSrc;
    modalImg.onerror = function() {
        const fallback = 'https://via.placeholder.com/600x800?text=' + encodeURIComponent(name);
        this.src = fallback;
        currentImgSrc = fallback; // Sinkronisasi jika error fallback
    };

    document.getElementById('modal-wa-btn').href = `https://wa.me/6282169169700?text=Halo%20Regina%20Al%20Barakah,%20saya%20ingin%20tanya%20stok%20${encodeURIComponent(name)}`;

    productModal.classList.remove('hidden');
    productModal.classList.add('flex');
    setTimeout(() => {
        productModal.classList.remove('opacity-0');
        modalInner.classList.remove('scale-95');
        modalInner.classList.add('scale-100');
    }, 10);
}

function closeProductModal() {
    productModal.classList.add('opacity-0');
    modalInner.classList.remove('scale-100');
    modalInner.classList.add('scale-95');
    setTimeout(() => {
        productModal.classList.remove('flex');
        productModal.classList.add('hidden');
    }, 300);
}

productModal.addEventListener('click', (e) => {
    if (e.target === productModal) {
        closeProductModal();
    }
});

// Script Tambahan: Popup Khusus Gambar (Lightbox)
const imagePopup = document.getElementById('image-popup');
const popupInner = imagePopup.querySelector('.transform');
const popupImg = document.getElementById('popup-img');

function openImagePopup() {
    popupImg.src = currentImgSrc;
    imagePopup.classList.remove('hidden');
    imagePopup.classList.add('flex');
    setTimeout(() => {
        imagePopup.classList.remove('opacity-0');
        popupInner.classList.remove('scale-95');
        popupInner.classList.add('scale-100');
    }, 10);
}

function closeImagePopup() {
    imagePopup.classList.add('opacity-0');
    popupInner.classList.remove('scale-100');
    popupInner.classList.add('scale-95');
    setTimeout(() => {
        imagePopup.classList.remove('flex');
        imagePopup.classList.add('hidden');
    }, 300);
}

// Tutup popup jika area luar gambar diklik
imagePopup.addEventListener('click', (e) => {
    if (e.target === imagePopup) {
        closeImagePopup();
    }
});