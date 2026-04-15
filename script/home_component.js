// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", () => {
    
    // ==========================================
    // 1. NAVBAR & MOBILE MENU LOGIC
    // ==========================================
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    let isOpen = false;

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            isOpen = !isOpen;
            menuBtn.textContent = isOpen ? "✖" : "☰";
            menuBtn.setAttribute("aria-expanded", String(isOpen));

            if (isOpen) {
                mobileMenu.classList.remove("hidden");
                // Small delay to ensure the browser registers the 'hidden' removal before animating
                setTimeout(() => {
                    mobileMenu.classList.remove("scale-y-0", "opacity-0");
                    mobileMenu.classList.add("scale-y-100", "opacity-100");
                }, 10);
            } else {
                mobileMenu.classList.remove("scale-y-100", "opacity-100");
                mobileMenu.classList.add("scale-y-0", "opacity-0");
                setTimeout(() => {
                    if(!isOpen) mobileMenu.classList.add("hidden");
                }, 300);
            }
        });
    }

    // Mobile Services dropdown toggle
    const mobileServicesBtn = document.getElementById("mobile-services-btn");
    const mobileServicesMenu = document.getElementById("mobile-services-menu");
    const mobileArrow = document.getElementById("mobile-arrow");

    if (mobileServicesBtn && mobileServicesMenu && mobileArrow) {
        mobileServicesBtn.addEventListener("click", () => {
            mobileServicesMenu.classList.toggle("hidden");
            mobileArrow.classList.toggle("rotate-180");
        });
    }

    // ==========================================
    // 2. INFINITE SCROLL LOGIC
    // ==========================================
    const scrollContainer = document.querySelector(".animate-infinite-scroll");
    if (scrollContainer) {
        const clone = scrollContainer.innerHTML;
        scrollContainer.innerHTML += clone;
    }

    const reverseScrollContainer = document.querySelector(".animate-infinite-scroll-reverse");
    if (reverseScrollContainer) {
        const clone = reverseScrollContainer.innerHTML;
        reverseScrollContainer.innerHTML += clone;
    }

    // ==========================================
    // 3. FAQS ACCORDION
    // ==========================================
    document.querySelectorAll(".faq-header").forEach((header) => {
        header.addEventListener("click", () => {
            const faqItem = header.parentElement;
            const content = faqItem.querySelector(".faq-content");
            const icon = header.querySelector(".faq-icon");
            const svg = header.querySelector("svg");

            // Close others
            document.querySelectorAll(".faq-item").forEach((item) => {
                if (item !== faqItem) {
                    item.classList.remove("active");
                    const itemContent = item.querySelector(".faq-content");
                    if (itemContent) itemContent.style.maxHeight = null;
                    const itemSvg = item.querySelector("svg");
                    if (itemSvg) itemSvg.classList.remove("rotate-180");
                    item.style.backgroundColor = "transparent";
                    const itemHeaderSpan = item.querySelector("span");
                    if (itemHeaderSpan) itemHeaderSpan.style.color = "white";
                    const itemContentP = item.querySelector(".faq-content p");
                    if (itemContentP) itemContentP.style.color = "rgb(209 213 219)";
                    const itemIcon = item.querySelector(".faq-icon");
                    if (itemIcon) itemIcon.style.background = "rgb(55 65 81)";
                }
            });

            // Toggle clicked
            faqItem.classList.toggle("active");

            if (faqItem.classList.contains("active")) {
                if (content) content.style.maxHeight = content.scrollHeight + "px";
                if (svg) svg.classList.add("rotate-180");
                faqItem.style.backgroundColor = "#000000";
                const headerSpan = header.querySelector("span");
                if (headerSpan) headerSpan.style.color = "var(--secondary-color)";
                const contentP = content ? content.querySelector("p") : null;
                if (contentP) contentP.style.color = "white";
                if (icon) icon.style.background = "linear-gradient(138deg,var(--primary-color),var(--secondary-color))";
            } else {
                if (content) content.style.maxHeight = null;
                if (svg) svg.classList.remove("rotate-180");
                faqItem.style.backgroundColor = "transparent";
                const headerSpan = header.querySelector("span");
                if (headerSpan) headerSpan.style.color = "white";
                const contentP = content ? content.querySelector("p") : null;
                if (contentP) contentP.style.color = "rgb(209 213 219)";
                if (icon) icon.style.background = "rgb(55 65 81)";
            }
        });
    });

    // ==========================================
    // 4. CUSTOMER VIDEO SLIDER
    // ==========================================
    const customers = [
        { name: "John Doe", title: "CEO, Example Corp", video: "Videos/customer1.mp4" },
        { name: "Sarah Lee", title: "CTO, Alpha Inc", video: "Videos/customer1.mp4" },
        { name: "Michael Chen", title: "Founder, BetaTech", video: "Videos/customer1.mp4" },
        { name: "Emily Carter", title: "CMO, Gamma Ltd", video: "Videos/customer1.mp4" },
    ];

    let currentIndex = 0;
    const mainVideo = document.getElementById("custMainVideo");
    const mainLabel = document.getElementById("custMainLabel");

    if (mainVideo && mainLabel) {
        const leftSmallBtn = document.getElementById("custLeftSmall");
        const leftBigBtn = document.getElementById("custLeftBig");
        const rightBigBtn = document.getElementById("custRightBig");
        const rightSmallBtn = document.getElementById("custRightSmall");
        const prevBtn = document.getElementById("custPrevBtn");
        const nextBtn = document.getElementById("custNextBtn");
        const prevBtnMobile = document.getElementById("custPrevBtnMobile");
        const nextBtnMobile = document.getElementById("custNextBtnMobile");

        function updateVideo(index) {
            const customer = customers[index];
            const sourceEl = mainVideo.querySelector("source");
            if (sourceEl) sourceEl.src = customer.video;
            mainVideo.load();
            mainVideo.play().catch(() => {});
            mainLabel.innerHTML = `<h4 class="text-white font-semibold">${customer.name}</h4><p class="text-gray-300 text-sm">${customer.title}</p>`;
            currentIndex = index;
            updateSideButtons();
        }

        function updateSideButtons() {
            const leftSmallIndex = (currentIndex - 2 + customers.length) % customers.length;
            const leftBigIndex = (currentIndex - 1 + customers.length) % customers.length;
            const rightBigIndex = (currentIndex + 1) % customers.length;
            const rightSmallIndex = (currentIndex + 2) % customers.length;

            if (leftSmallBtn) leftSmallBtn.querySelector("span").textContent = customers[leftSmallIndex].name;
            if (leftBigBtn) leftBigBtn.querySelector("span").textContent = customers[leftBigIndex].name;
            if (rightBigBtn) rightBigBtn.querySelector("span").textContent = customers[rightBigIndex].name;
            if (rightSmallBtn) rightSmallBtn.querySelector("span").textContent = customers[rightSmallIndex].name;

            if (leftSmallBtn) leftSmallBtn.onclick = () => updateVideo(leftSmallIndex);
            if (leftBigBtn) leftBigBtn.onclick = () => updateVideo(leftBigIndex);
            if (rightBigBtn) rightBigBtn.onclick = () => updateVideo(rightBigIndex);
            if (rightSmallBtn) rightSmallBtn.onclick = () => updateVideo(rightSmallIndex);
        }

        if (prevBtn) prevBtn.addEventListener("click", () => updateVideo((currentIndex - 1 + customers.length) % customers.length));
        if (nextBtn) nextBtn.addEventListener("click", () => updateVideo((currentIndex + 1) % customers.length));
        if (prevBtnMobile) prevBtnMobile.addEventListener("click", () => updateVideo((currentIndex - 1 + customers.length) % customers.length));
        if (nextBtnMobile) nextBtnMobile.addEventListener("click", () => updateVideo((currentIndex + 1) % customers.length));

        updateVideo(0);
    }

    // ==========================================
    // 5. EXPERTS SECTION SLIDER
    // ==========================================
    const expertsTrack = document.getElementById("experts-track");
    const expertsPrev = document.getElementById("experts-btn-prev");
    const expertsNext = document.getElementById("experts-btn-next");

    if (expertsTrack && expertsPrev && expertsNext) {
        const firstCard = document.querySelector("#experts-track > div");
        if (firstCard) {
            const cardWidth = firstCard.offsetWidth + 24;
            const updateButtons = () => {
                const scrollLeft = expertsTrack.scrollLeft;
                const maxScrollLeft = expertsTrack.scrollWidth - expertsTrack.clientWidth;
                expertsPrev.disabled = scrollLeft <= 0;
                expertsNext.disabled = scrollLeft >= maxScrollLeft - 1;
            };
            updateButtons();
            expertsNext.addEventListener("click", () => {
                expertsTrack.scrollBy({ left: cardWidth, behavior: "smooth" });
                setTimeout(updateButtons, 400);
            });
            expertsPrev.addEventListener("click", () => {
                expertsTrack.scrollBy({ left: -cardWidth, behavior: "smooth" });
                setTimeout(updateButtons, 400);
            });
            expertsTrack.addEventListener("scroll", updateButtons);
        }
    }

    // ==========================================
    // 6. CARD MOBILE SLIDER
    // ==========================================
    const cardSlider = document.getElementById("cardSlider");
    const cardPrevBtn = document.getElementById("prevBtn");
    const cardNextBtn = document.getElementById("nextBtn");
    const dotsContainer = document.getElementById("sliderDots");

    if (cardSlider && cardPrevBtn && cardNextBtn && dotsContainer) {
        const cards = cardSlider.children;
        let index = 0;
        for (let i = 0; i < cards.length; i++) {
            const dot = document.createElement("div");
            dot.className = "w-3 h-3 rounded-full bg-teal-200 transition-all";
            if (i === 0) dot.classList.add("bg-[var(--secondary-color)]");
            dotsContainer.appendChild(dot);
        }
        const dots = dotsContainer.children;

        function updateCardSlider() {
            cardSlider.scrollTo({ left: cards[index].offsetLeft, behavior: "smooth" });
            Array.from(dots).forEach((dot, i) => {
                dot.className = "w-3 h-3 rounded-full transition-all " + (i === index ? "bg-[var(--secondary-color)]" : "bg-teal-200");
            });
            cardPrevBtn.disabled = (index === 0);
            cardNextBtn.disabled = (index === cards.length - 1);
        }

        cardNextBtn.addEventListener("click", () => { if (index < cards.length - 1) { index++; updateCardSlider(); } });
        cardPrevBtn.addEventListener("click", () => { if (index > 0) { index--; updateCardSlider(); } });
    }

    // ==========================================
    // 7. GENERIC TABS
    // ==========================================
    const tabs = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            tabs.forEach((t) => t.classList.remove("bg-white", "text-[var(--primary-color)]"));
            tabContents.forEach((c) => c.classList.add("hidden"));
            tab.classList.add("bg-white", "text-[var(--primary-color)]");
            const target = document.getElementById(tab.dataset.tab);
            if (target) target.classList.remove("hidden");
        });
    });
});

// Alpine.js Component for Case Studies
function tabsComponent() {
    return {
        activeTab: 0,
        isAccordion: false,
        checkScreen() { this.isAccordion = window.innerWidth < 1250; },
        tabs: [
            { label: "Mr.Food", brand: "Mr.Food", work: "Restaurant Digital Revamp", challenges: "The client struggled with low.", solution: "We developed a comprehensive digital.", outcome: "Increased online orders by 156%.", image: "https://cdn-icons-png.flaticon.com/512/3448/3448630.png" },
            { label: "TechNova", brand: "TechNova", work: "SaaS Platform Development", challenges: "The company needed a scalable", solution: "Designed and built a cloud-native SaaS.", outcome: "Reduced operational costs by 35%.", image: "https://cdn-icons-png.flaticon.com/512/1006/1006555.png" },
            { label: "StyleHub", brand: "StyleHub", work: "E-commerce Mobile App", challenges: "Fashion retailer high abandonment.", solution: "Created native mobile shopping app.", outcome: "Conversions increased by 210%.", image: "https://cdn-icons-png.flaticon.com/512/3144/3144456.png" },
            { label: "HealthPlus", brand: "HealthPlus", work: "Telemedicine Platform", challenges: "Provider needed HIPAA platform.", solution: "Developed compliant telemedicine.", outcome: "15,000+ consultations.", image: "https://cdn-icons-png.flaticon.com/512/2964/2964301.png" },
        ]
    };
}