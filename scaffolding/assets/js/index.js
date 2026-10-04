/* ==========================================================================
   MAIN SCRIPT - REGINA AL BARAKAH GROUP
   ========================================================================== */

// 1. INITIALIZE AOS (Animate On Scroll)
AOS.init({ 
    duration: 800, 
    once: true 
});

// 2. ELEMENT SELECTORS
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = menuBtn ? menuBtn.querySelector('i') : null;
const productModal = document.getElementById('productModal');
const imageFullModal = document.getElementById('imageFullModal');

// 3. MOBILE MENU NAVIGATION TOGGLE
if (menuBtn && mobileMenu && menuIcon) {
    menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        if (mobileMenu.classList.contains('active')) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    });
}

function openMobileMenu() {
    if (mobileMenu && menuIcon) {
        mobileMenu.classList.add('active');
        menuIcon.className = 'fas fa-times';
    }
}

function closeMobileMenu() {
    if (mobileMenu && menuIcon) {
        mobileMenu.classList.remove('active');
        menuIcon.className = 'fas fa-bars';
    }
}

function removeActiveFromLinks() {
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.classList.remove('text-blue-700');
    });
}

// 4. FAQ ACCORDION LOGIC
document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
        const currentItem = button.parentElement;
        const isActive = currentItem.classList.contains('active');
        
        // Close all items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.classList.remove('active');
        });
        
        // Open clicked item if it wasn't active
        if (!isActive) {
            currentItem.classList.add('active');
        }
    });
});

// 5. PRODUCT MODAL FUNCTIONS
function openProductModal(name, cat, desc, imgUrl, fallbackUrl) {
    const modalTitle = document.getElementById('modal-title');
    const modalCat = document.getElementById('modalCat');
    const modalDesc = document.getElementById('modal-desc');
    const mImg = document.getElementById('modalImg');
    const waBtn = document.getElementById('modal-wa-btn');

    if (modalTitle) modalTitle.innerText = name;
    if (modalCat) modalCat.innerText = cat;
    if (modalDesc) modalDesc.innerText = desc;
    
    if (mImg) {
        mImg.src = imgUrl;
        mImg.onerror = function() { this.src = fallbackUrl; };
    }

    if (waBtn) {
        waBtn.href = `https://wa.me/6282169169700?text=Halo%20Regina%20Al%20Barakah,%20saya%20tertarik%20untuk%20menyewa%20atau%20membeli%20produk%20*${encodeURIComponent(name)}*.%20Bisa%20tolong%20infokan%20ketersediaan%20stok%20dan%20harganya?`;
    }
    
    if (productModal) {
        productModal.classList.remove('hidden');
        productModal.classList.add('flex');
        setTimeout(() => {
            productModal.classList.remove('opacity-0');
            const transformTarget = productModal.querySelector('.transform');
            if (transformTarget) transformTarget.classList.replace('scale-90', 'scale-100');
        }, 20);
    }
}

function closeProductModal() {
    if (productModal) {
        productModal.classList.add('opacity-0');
        const transformTarget = productModal.querySelector('.transform');
        if (transformTarget) transformTarget.classList.replace('scale-100', 'scale-90');
        setTimeout(() => { 
            productModal.classList.replace('flex', 'hidden'); 
        }, 300);
    }
}

// 6. FULL IMAGE LIGHTBOX FUNCTIONS (Sudah Disatukan & Konsisten)
function openImagePopup() {
    const modalImg = document.getElementById('modalImg');
    const modalFullImg = document.getElementById('modalFullImg');

    if (modalImg && modalFullImg) {
        modalFullImg.src = modalImg.src;
    }
    
    if (imageFullModal) {
        imageFullModal.classList.remove('hidden');
        imageFullModal.classList.add('flex');
        setTimeout(() => {
            imageFullModal.classList.remove('opacity-0');
            const transformTarget = imageFullModal.querySelector('.transform');
            if (transformTarget) transformTarget.classList.replace('scale-90', 'scale-100');
        }, 20);
    }
}

// Alias untuk kecocokan pemicu jika ada elemen yang memanggil nama lama
function openImageModal() {
    openImagePopup();
}

function closeImageModal() {
    if (imageFullModal) {
        imageFullModal.classList.add('opacity-0');
        const transformTarget = imageFullModal.querySelector('.transform');
        if (transformTarget) transformTarget.classList.replace('scale-100', 'scale-90');
        setTimeout(() => { 
            imageFullModal.classList.replace('flex', 'hidden'); 
        }, 300);
    }
}

// 7. GLOBAL CLICK EVENT (CLOSE ON CLICK OUTSIDE)
window.onclick = function(event) {
    if (event.target === productModal) closeProductModal();
    if (event.target === imageFullModal) closeImageModal();
    
    // Close mobile menu if user clicks outside navbar area
    if (!event.target.closest('nav')) {
        closeMobileMenu();
    }
};