document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    let isOpen = false;

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            isOpen = !isOpen;
            menuBtn.textContent = isOpen ? '✖' : '☰';

            if (isOpen) {
                mobileMenu.classList.remove('hidden');
                // Use a tiny timeout to ensure the transition runs after hidden is removed
                setTimeout(() => {
                    mobileMenu.classList.remove('scale-y-0');
                    mobileMenu.classList.add('scale-y-100'); // Changed to 100 to show all content
                }, 10);
            } else {
                mobileMenu.classList.remove('scale-y-100');
                mobileMenu.classList.add('scale-y-0');
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
            }
        });
    }

    // Mobile Services Toggle
    const msBtn = document.getElementById('mobile-services-btn');
    const msMenu = document.getElementById('mobile-services-menu');
    const msArrow = document.getElementById('mobile-arrow');

    if (msBtn && msMenu) {
        msBtn.addEventListener('click', () => {
            msMenu.classList.toggle('hidden');
            msArrow.classList.toggle('rotate-180');
        });
    }
});