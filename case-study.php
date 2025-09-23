<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ✅ Basic SEO Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    <meta name="author" content="Qonkar" />

    <!-- ✅ Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="https://qonkar.com/preview.png" />



    <!-- ✅ Google ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ✅ Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- ✅ Title -->
    <title>Qonkar Technologies</title>

    <!-- ✅ Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Script for the Case Studies Section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ✅ Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">
    <style>
        select option {
            background-color: #000;
            color: #fff;
        }

        select option:disabled {
            color: #9ca3af;
            /* Tailwind's gray-400 for placeholder */
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const responseBox = document.querySelector("#formResponse");
            const form = document.querySelector("#contactForm");

            form.addEventListener("submit", async function (e) {
                e.preventDefault();
                responseBox.classList.remove("hidden");
                responseBox.innerHTML = `<span class="text-white">⏳ Sending message...</span>`;

                try {
                    const formData = new FormData(form);
                    const res = await fetch("process.php", { method: "POST", body: formData });
                    const contentType = res.headers.get("content-type") || "";

                    let data;
                    if (contentType.includes("application/json")) {
                        data = await res.json();
                    } else {
                        data = { message: await res.text() };
                    }

                    if (res.ok) {
                        responseBox.innerHTML = `<span class="text-white">✅ ${data.message || 'Message sent'}</span>`;
                        form.reset();
                    } else {
                        const msg = data.error || data.message || res.statusText;
                        responseBox.innerHTML = `<span class="text-red-400">❌ ${msg}</span>`;
                    }
                } catch (err) {
                    responseBox.innerHTML = `<span class="text-red-400">❌ Network/error: ${err.message}</span>`;
                }
            });
        });
    </script>

</head>

<body>

    <header class="sticky top-5 z-50">
        <!-- ✅ Desktop Navbar -->
        <nav class="glass hidden lg:flex 
             max-w-7xl mx-auto items-center justify-between px-2 py-2 rounded-full mt-4">
            <div class="flex items-center">
                <a href="index.html"><img src="images/qonkar_logo.png" alt="Qonkar Logo" class="h-9 w-auto"></a>
            </div>
            <ul class="flex gap-8 text-white font-medium">
                <li><a href="index.html" class="text-[var(--primary-color)]">Home</a></li>
                <li><a href="services.html" class="hover:text-[var(--primary-color)]">Services</a></li>
                <li><a href="#" class="hover:text-[var(--primary-color)]">Industries</a></li>
                <li><a href="#" class="hover:text-[var(--primary-color)]">Portfolio</a></li>
                <li><a href="#" class="hover:text-[var(--primary-color)]">Careers</a></li>
            </ul>
            <a href="contact-us.html" class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white  
       hover:bg-[var(--secondary-color)] transition">Contact Us</a>
        </nav>

        <!-- ✅ Mobile / Tablet Navbar -->
        <nav class="glass flex lg:hidden 
            items-center justify-between w-[90%] mx-auto px-5 py-2 rounded-full mt-2 relative">
            <img src="images/qonkar_logo.png" alt="Qonkar Logo" class="h-8 w-auto">

            <button id="menu-btn" class="text-white focus:outline-none text-3xl transition" aria-expanded="false"
                aria-controls="mobile-menu">
                ☰
            </button>

            <!-- ✅ Mobile Menu DROPDOWN -->
            <div id="mobile-menu" class="hidden absolute top-full left-0 w-full mt-2 z-50
             bg-[rgba(8,8,8,0.95)] backdrop-blur-md flex-col transform scale-y-0 origin-top
             transition-all duration-300 rounded-2xl overflow-hidden">

                <a href="#"
                    class="block w-full text-center py-4 text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>
                <a href="#"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Services</a>
                <a href="#"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Industries</a>
                <a href="#"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
                <a href="#"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Careers</a>

                <!-- ✅ CTA on smaller screens -->
                <a href="contact-us.html"
                    class="block w-full text-center py-4 bg-[var(--primary-color)] text-white font-semibold hover:bg-[var(--secondary-color)] transition">
                    Contact Us
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative max-w-7xl mx-auto min-h-[70vh] rounded-lg overflow-hidden mt-4 mb-4 flex items-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 rounded-lg bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Pattern Overlay (single SVG, no repeat) -->
        <div class="absolute inset-0 rounded-lg hero-pattern"></div>

        <!-- Hero Content -->
        <div
            class="relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center w-full px-6 sm:px-10 lg:px-20 py-10">

            <!-- Left Side: Text -->
            <div class="text-left text-white space-y-6 order-1">
                <!-- Badge -->
                <div class="glass px-3 py-2 rounded-full text-xs sm:text-sm text-white 
                inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">

                    <!-- Dot New -->
                    <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">
                        &#9679; New
                    </span>

                    <!-- Text -->
                    <span>
                        Free your team from repetitive work with AI automation.
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                    <b>Shopify</b> Experts for High-Performance<br class="hidden sm:block"> <b>E-commerce</b>
                    Stores.
                </h1>

                <!-- Paragraph -->
                <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                    At Qonkar Technologies, our Shopify experts turn your store into a scalable, mobile-first sales
                    machine — optimized for performance, growth, and user experience.
                </p>

                <!-- CTA Button -->
                <a href="#contact" class="hero-btn mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold 
                hover:bg-[var(--secondary-color)] hover:text-white transition">
                    Launch Your Store with us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Right Side: Image -->
            <div class="flex justify-center md:justify-end order-2">
                <img src="images/case-study-hero.png" alt="Service Hero"
                    class="max-h-[40vh] sm:max-h-[50vh] md:max-h-[65vh] object-contain">
            </div>
        </div>
    </section>

    <section class="relative max-w-7xl mx-auto px-6 sm:px-10 lg:px-20 py-16 text-center">
        <!-- Badge -->
        <div class="glass-border inline-block mb-4">
            <div class="glass-background">
                <div class="glass text-sm font-light">
                    <p>&#9679; &nbsp;CASE STUDIES</p>
                </div>
            </div>
        </div>

        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-light mb-4">
            What We <b>Build</b>
        </h2>

        <!-- Paragraph -->
        <p class="text-white font-light max-w-3xl mx-auto mb-10">
            Discover the solutions we’ve designed and developed — each project reflects our commitment to quality and
            creativity.
        </p>

        <!-- Category Tabs with Scroll -->
        <div class="relative mb-10">
            <!-- Scroll Buttons -->
            <button id="scrollLeft"
                class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-black/50 p-2 rounded-full text-white hidden">
                &#10094;
            </button>
            <button id="scrollRight"
                class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-black/50 p-2 rounded-full text-white hidden">
                &#10095;
            </button>

            <!-- Scrollable Categories -->
            <div id="tabContainer" class="flex overflow-x-auto w-full no-scrollbar gap-2 px-4 py-2 rounded-full 
               justify-start md:justify-center md:[background-image:var(--gradient)] backdrop-blur-md">

                <button
                    class="tab-btn active px-8 py-2 rounded-full bg-white text-[var(--primary-color)] font-semibold text-xs"
                    data-tab="all">All</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs"
                    data-tab="shopify">Shopify</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs"
                    data-tab="software">Software Development</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs"
                    data-tab="branding">Branding & Marketing</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs" data-tab="uiux">
                    UI/UX Design</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs"
                    data-tab="ecommerce">E-commerce</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs"
                    data-tab="digital">Digital Marketing</button>
                <button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs" data-tab="ai">Artificial
                    Intelligence</button>
            </div>
        </div>


        <!-- Case Study Cards Grid -->
        <div id="caseStudiesGrid" class="grid grid-cols-1 sm:grid-cols-2 gap-8 justify-items-center">
            <!-- Example Card -->
            <div class="w-full background-backdrop-card rounded-[15px] shadow-lg overflow-hidden bg-white/5 backdrop-blur-[50px] flex flex-col"
                data-category="shopify">

                <!-- Top Image Section -->
                <div
                    class="w-full h-80 flex items-center justify-center bg-black/70 border border-gray-900 rounded-t-[15px] border-b-0">
                    <img src="images/case_studeis/01.png" alt="Case Study Image" class="w-[60%] object-contain">
                </div>

                <!-- Bottom Text Section -->
                <div
                    class="group relative flex flex-col flex-1 overflow-hidden rounded-b-[15px] 
                p-[2px] [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)]">

                    <div class="relative flex flex-col flex-1 rounded-b-[13px] bg-black overflow-hidden">
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="images/icons/services/01.webp" alt="Hover BG" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <!-- Text Content -->
                        <div class="relative z-10 p-6 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg sm:text-xl md:text-2xl font-light mb-2">
                                    Fashion Brand Growth
                                </h3>
                                <p class="text-sm md:text-base font-light text-gray-200">
                                    <i>Boosted conversions by 40% with a Shopify redesign and improved mobile UX.</i>
                                </p>
                            </div>
                            <!-- Arrow -->
                            <div class="flex-shrink-0">
                                <img src="images/icons/arrrow_color.svg"
                                    class="w-8 h-8 transition-opacity duration-300 group-hover:hidden" alt="Arrow Icon">
                                <img src="images/icons/arrrow_white.svg"
                                    class="w-8 h-8 transition-opacity duration-300 hidden group-hover:block"
                                    alt="Arrow Icon White">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example Card -->
            <div class="w-full background-backdrop-card rounded-[15px] shadow-lg overflow-hidden bg-white/5 backdrop-blur-[50px] flex flex-col"
                data-category="shopify">

                <!-- Top Image Section -->
                <div
                    class="w-full h-80 flex items-center justify-center bg-black/70 border border-gray-900 rounded-t-[15px] border-b-0">
                    <img src="images/case_studeis/01.png" alt="Case Study Image" class="w-[60%] object-contain">
                </div>

                <!-- Bottom Text Section -->
                <div
                    class="group relative flex flex-col flex-1 overflow-hidden rounded-b-[15px] 
                p-[2px] [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)]">

                    <div class="relative flex flex-col flex-1 rounded-b-[13px] bg-black overflow-hidden">
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="images/icons/services/01.webp" alt="Hover BG" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <!-- Text Content -->
                        <div class="relative z-10 p-6 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg sm:text-xl md:text-2xl font-light mb-2">
                                    Fashion Brand Growth
                                </h3>
                                <p class="text-sm md:text-base font-light text-gray-200">
                                    <i>Boosted conversions by 40% with a Shopify redesign and improved mobile UX.</i>
                                </p>
                            </div>
                            <!-- Arrow -->
                            <div class="flex-shrink-0">
                                <img src="images/icons/arrrow_color.svg"
                                    class="w-8 h-8 transition-opacity duration-300 group-hover:hidden" alt="Arrow Icon">
                                <img src="images/icons/arrrow_white.svg"
                                    class="w-8 h-8 transition-opacity duration-300 hidden group-hover:block"
                                    alt="Arrow Icon White">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example Card -->
            <div class="w-full background-backdrop-card rounded-[15px] shadow-lg overflow-hidden bg-white/5 backdrop-blur-[50px] flex flex-col"
                data-category="shopify">

                <!-- Top Image Section -->
                <div
                    class="w-full h-80 flex items-center justify-center bg-black/70 border border-gray-900 rounded-t-[15px] border-b-0">
                    <img src="images/case_studeis/01.png" alt="Case Study Image" class="w-[60%] object-contain">
                </div>

                <!-- Bottom Text Section -->
                <div
                    class="group relative flex flex-col flex-1 overflow-hidden rounded-b-[15px] 
                p-[2px] [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)]">

                    <div class="relative flex flex-col flex-1 rounded-b-[13px] bg-black overflow-hidden">
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="images/icons/services/01.webp" alt="Hover BG" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <!-- Text Content -->
                        <div class="relative z-10 p-6 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg sm:text-xl md:text-2xl font-light mb-2">
                                    Fashion Brand Growth
                                </h3>
                                <p class="text-sm md:text-base font-light text-gray-200">
                                    <i>Boosted conversions by 40% with a Shopify redesign and improved mobile UX.</i>
                                </p>
                            </div>
                            <!-- Arrow -->
                            <div class="flex-shrink-0">
                                <img src="images/icons/arrrow_color.svg"
                                    class="w-8 h-8 transition-opacity duration-300 group-hover:hidden" alt="Arrow Icon">
                                <img src="images/icons/arrrow_white.svg"
                                    class="w-8 h-8 transition-opacity duration-300 hidden group-hover:block"
                                    alt="Arrow Icon White">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
        const tabContainer = document.getElementById("tabContainer");
        const scrollLeft = document.getElementById("scrollLeft");
        const scrollRight = document.getElementById("scrollRight");
        const caseStudiesGrid = document.getElementById("caseStudiesGrid");
        const tabs = document.querySelectorAll(".tab-btn");

        // Show/Hide Scroll Arrows
        function checkScroll() {
            scrollLeft.style.display = tabContainer.scrollLeft > 0 ? "block" : "none";
            scrollRight.style.display =
                tabContainer.scrollWidth > tabContainer.clientWidth + tabContainer.scrollLeft
                    ? "block"
                    : "none";
        }
        tabContainer.addEventListener("scroll", checkScroll);
        window.addEventListener("resize", checkScroll);
        checkScroll();

        scrollLeft.addEventListener("click", () => {
            tabContainer.scrollBy({ left: -150, behavior: "smooth" });
        });
        scrollRight.addEventListener("click", () => {
            tabContainer.scrollBy({ left: 150, behavior: "smooth" });
        });

        // Tab Filter
        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Reset all tabs
                tabs.forEach(t => {
                    t.classList.remove("bg-white", "text-[var(--primary-color)]", "text-[#3F89C9]");
                    t.classList.add("text-white"); // keep all inactive tabs white
                });

                // Activate clicked tab
                tab.classList.remove("text-white");
                tab.classList.add("bg-white", "text-[var(--primary-color)]");

                const category = tab.dataset.tab;
                const cards = caseStudiesGrid.querySelectorAll("[data-category]");

                cards.forEach(card => {
                    card.style.display =
                        category === "all" || card.dataset.category === category
                            ? "flex"
                            : "none";
                });
            });
        });
    </script>



    <footer class="mx-6 mb-6">
        <div class="w-full mx-auto rounded-lg bg-gradient-to-r from-[var(--primary-color)]
    via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-14 py-16">
            <!-- Main Wrapper limited to max-w-7xl -->
            <div class="max-w-7xl mx-auto">
                <!-- First Row: Logo -->
                <div class="flex justify-center md:justify-start">
                    <img src="images/qonkar_logo.png" alt="Qonkar Logo" class="w-40" />
                </div>

                <!-- Second Row: Address + Social Icons -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-6 mt-6">
                    <!-- Address -->
                    <div class="flex items-center gap-2 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 12.414A4 4 0 1112 8a4 4 0 014.243 1.243l4.243 4.243a8 8 0 11-2.829 2.829z" />
                        </svg>
                        <span>Software Technology Park, QUEST Nawabshah</span>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-white/30 my-8"></div>

                <!-- Columns -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Contact Column -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">Contact with Us!</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li class="flex items-center gap-2"><i class="fas fa-phone"></i> (+44) 7476451747</li>
                            <li class="flex items-center gap-2"><i class="fas fa-phone"></i> (+92) 305 8219445</li>
                            <li class="flex items-center gap-2"><i class="fas fa-envelope"></i> info@qonkar.com</li>
                            <li class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> United Kingdom
                            </li>
                            <li class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Pakistan</li>
                        </ul>
                    </div>

                    <!-- Services Column -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">Services</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li><a href="#">Website Design & Development</a></li>
                            <li><a href="#">Shopify Development</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">SEO Services</a></li>
                            <li><a href="#">Paid Advertising</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Custom Website Design</a></li>
                            <li><a href="#">Shopify Theme Development</a></li>
                            <li><a href="#">Shopify Store Setup</a></li>
                        </ul>
                    </div>

                    <!-- About Column -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">About</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li><a href="#">Qonkar Technologies (PVT) Ltd.</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blogs & News</a></li>
                            <li><a href="#">Partnerships</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Services</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Trust and Safety</a></li>
                        </ul>
                    </div>

                    <!-- Trusted By Column -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">Trusted by</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li>Microsoft</li>
                            <li>Shopify</li>
                            <li>Upwork</li>
                            <li>Fiverr</li>
                            <li>Mailchimp</li>
                            <li>HubSpot</li>
                            <li>Google Ads</li>
                        </ul>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-white/30 my-8"></div>

                <!-- Bottom Row -->
                <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                    <p>© 2025 Qonkar Technologies</p>
                    <div class="flex gap-4 mt-2 md:mt-0">
                        <a href="#">Terms of Services</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <script>

        // Navbar
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
    </script>
</body>

</html>