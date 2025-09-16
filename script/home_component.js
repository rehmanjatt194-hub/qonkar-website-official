// FAQS Accordion
document.querySelectorAll(".faq-header").forEach(header => {
    header.addEventListener("click", () => {
        const faqItem = header.parentElement;
        const content = faqItem.querySelector(".faq-content");
        const icon = header.querySelector(".faq-icon");
        const svg = header.querySelector("svg");

        // Close others
        document.querySelectorAll(".faq-item").forEach(item => {
            if (item !== faqItem) {
                item.classList.remove("active");
                item.querySelector(".faq-content").style.maxHeight = null;
                item.querySelector("svg").classList.remove("rotate-180");
                item.style.backgroundColor = "transparent";
                item.querySelector("span").style.color = "white";
                item.querySelector(".faq-content p").style.color = "rgb(209 213 219)";
                item.querySelector(".faq-icon").style.background = "rgb(55 65 81)"; // dark gray
            }
        });

        // Toggle clicked
        faqItem.classList.toggle("active");

        if (faqItem.classList.contains("active")) {
            content.style.maxHeight = content.scrollHeight + "px";
            svg.classList.add("rotate-180");
            faqItem.style.backgroundColor = "white";
            header.querySelector("span").style.color = "var(--secondary-color)";
            content.querySelector("p").style.color = "black";
            icon.style.background = "linear-gradient(138deg,var(--primary-color),var(--secondary-color))";
        } else {
            content.style.maxHeight = null;
            svg.classList.remove("rotate-180");
            faqItem.style.backgroundColor = "transparent";
            header.querySelector("span").style.color = "white";
            content.querySelector("p").style.color = "rgb(209 213 219)";
            icon.style.background = "rgb(55 65 81)";
        }
    });
});
// Prevent Autoplay
const video = document.getElementById("custMainVideo");
video.autoplay = false;
video.muted = false;

// Trusted by Many Customer Slider with Content 
document.addEventListener("DOMContentLoaded", () => {
    const customers = [
        { name: "John Doe", title: "CEO, Example Corp", video: "Videos/customer1.mp4" },
        { name: "Sarah Lee", title: "CTO, Alpha Inc", video: "Videos/customer1.mp4" },
        { name: "Michael Chen", title: "Founder, BetaTech", video: "Videos/customer1.mp4" },
        { name: "Emily Carter", title: "CMO, Gamma Ltd", video: "Videos/customer1.mp4" }
    ];

    let currentIndex = 0;
    const mainVideo = document.getElementById("custMainVideo");
    const mainLabel = document.getElementById("custMainLabel");

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
        sourceEl.src = customer.video;
        mainVideo.load();
        mainVideo.play().catch(() => { });
        mainLabel.innerHTML = `
        <h4 class="text-white font-semibold">${customer.name}</h4>
        <p class="text-gray-300 text-sm">${customer.title}</p>
      `;
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

    // Desktop arrows
    if (prevBtn) prevBtn.addEventListener("click", () => {
        updateVideo((currentIndex - 1 + customers.length) % customers.length);
    });
    if (nextBtn) nextBtn.addEventListener("click", () => {
        updateVideo((currentIndex + 1) % customers.length);
    });

    // Mobile arrows
    if (prevBtnMobile) prevBtnMobile.addEventListener("click", () => {
        updateVideo((currentIndex - 1 + customers.length) % customers.length);
    });
    if (nextBtnMobile) nextBtnMobile.addEventListener("click", () => {
        updateVideo((currentIndex + 1) % customers.length);
    });

    updateVideo(0);
});

// Tabs of the Case Studies
function tabsComponent() {
    return {
        activeTab: 0,
        isAccordion: false,
        checkScreen() {
            this.isAccordion = window.innerWidth < 1250;
        },
        tabs: [
            {
                label: "Mr.Food",
                brand: "Mr.Food",
                work: "Restaurant Digital Revamp",
                challenges: "The client struggled with low.",
                solution: "We developed a comprehensive digital.",
                outcome: "Increased online orders by 156%, improved website.",
                image: "https://cdn-icons-png.flaticon.com/512/3448/3448630.png"
            },
            {
                label: "TechNova",
                brand: "TechNova",
                work: "SaaS Platform Development",
                challenges: "The company needed a scalable",
                solution: "Designed and built a cloud-native SaaS platform.",
                outcome: "Reduced operational costs by 35%, improved system performance by 200%.",
                image: "https://cdn-icons-png.flaticon.com/512/1006/1006555.png"
            },
            {
                label: "StyleHub",
                brand: "StyleHub",
                work: "E-commerce Mobile App",
                challenges: "The fashion retailer faced high cart abandonment rates on mobile devices.",
                solution: "Created a native mobile shopping app with AR try-on features.",
                outcome: "Mobile conversions increased by 210%, cart abandonment decreased by 65%.",
                image: "https://cdn-icons-png.flaticon.com/512/3144/3144456.png"
            },
            {
                label: "HealthPlus",
                brand: "HealthPlus",
                work: "Telemedicine Platform",
                challenges: "The healthcare provider needed  ",
                solution: "Developed a HIPAA-compliant telemedicine.",
                outcome: "Enabled 15,000+ virtual consultations in the first 3 months.",
                image: "https://cdn-icons-png.flaticon.com/512/2964/2964301.png"
            }
        ]
    }
}

//Sldier of the Our Expert Section
const expertsTrack = document.getElementById("experts-track");
const expertsPrev = document.getElementById("experts-btn-prev");
const expertsNext = document.getElementById("experts-btn-next");

const cardWidth = document.querySelector("#experts-track > div").offsetWidth + 24; // 24px = gap
expertsNext.addEventListener("click", () => {
    expertsTrack.scrollBy({ left: cardWidth, behavior: "smooth" });
});
expertsPrev.addEventListener("click", () => {
    expertsTrack.scrollBy({ left: -cardWidth, behavior: "smooth" });
});


// <!-- Card  Mobile Slider -->
const slider = document.getElementById("cardSlider");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const dotsContainer = document.getElementById("sliderDots");

const cards = slider.children;
let index = 0;

// create dots
for (let i = 0; i < cards.length; i++) {
    const dot = document.createElement("div");
    dot.className = "w-3 h-3 rounded-full bg-teal-200";
    if (i === 0) dot.classList.add("bg-teal-200");
    dotsContainer.appendChild(dot);
}
const dots = dotsContainer.children;

function updateSlider() {
    slider.scrollTo({ left: cards[index].offsetLeft, behavior: "smooth" });
    Array.from(dots).forEach((dot, i) =>
        dot.className = "w-3 h-3 rounded-full " + (i === index ? "bg-[var(--secondary-color)]" : "bg-teal-200")
    );
}

nextBtn.addEventListener("click", () => {
    if (index < cards.length - 1) index++;
    updateSlider();
});

prevBtn.addEventListener("click", () => {
    if (index > 0) index--;
    updateSlider();
});
// For Tabs
const tabs = document.querySelectorAll(".tab-btn");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        // reset all buttons
        tabs.forEach(t => {
            t.classList.remove("bg-white", "text-[var(--primary-color)]");
            t.classList.add("text-white");
        });

        // hide all contents
        contents.forEach(c => c.classList.add("hidden"));

        // activate current
        tab.classList.add("bg-white", "text-[var(--primary-color)]");
        tab.classList.remove("text-white");
        document.getElementById(tab.dataset.tab).classList.remove("hidden");
    });
});

// Hamburger Menu Script
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
let isOpen = false;

menuBtn.addEventListener('click', () => {
    isOpen = !isOpen;
    menuBtn.textContent = isOpen ? '✖' : '☰';
    menuBtn.setAttribute('aria-expanded', String(isOpen));

    if (isOpen) {
        mobileMenu.classList.remove('hidden');
        requestAnimationFrame(() => {
            mobileMenu.classList.remove('scale-y-0');
            mobileMenu.classList.add('scale-y-80');
        });
    } else {
        mobileMenu.classList.remove('scale-y-80');
        mobileMenu.classList.add('scale-y-0');
        setTimeout(() => mobileMenu.classList.add('hidden'), 300);
    }
});