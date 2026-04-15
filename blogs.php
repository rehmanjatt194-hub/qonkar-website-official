<?php
require_once 'db-path.php'; // path relative to current file

require_once ADMIN_URL.'/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ6XTSKG0W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZ6XTSKG0W');
</script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Qonkar Technologies</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <style>
        #categorySlider::-webkit-scrollbar { display: none; }
        #categorySlider { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
    </style>
    <link rel="canonical" href="https://qonkar.com/blogs" />
</head>

<body class="bg-[var(--body-bg)]">
<header class="sticky top-5 z-50 mx-auto sm:px-4">
    <nav class="glass hidden lg:flex max-w-7xl mx-auto items-center justify-between px-6 py-2 rounded-full mt-4 relative">
        <div class="flex items-center">
            <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-9 w-auto"></a>
        </div>
        
        <ul class="flex gap-8 text-white font-medium items-center">
            <li><a href="/" class="hover:text-[var(--primary-color)]">Home</a></li>

            <li class="group py-2">
                <button class="flex items-center gap-1 hover:text-[var(--primary-color)] focus:outline-none transition-colors">
                    Services
                    <span class="material-symbols-outlined text-sm transition-transform group-hover:rotate-180"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></span>
                </button>
                
                <div class="absolute top-full left-0 right-0 mx-auto mt-4 w-[70vw] max-w-[1200px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 p-6 md:p-10 rounded-[15px] shadow-2xl border border-white/10" 
                     style="background: rgba(15, 15, 15, 0.98); backdrop-filter: blur(25px);">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xl:gap-10">
                        
                        <div class="flex flex-col gap-3">
                            <h4 class="font-bold text-base xl:text-lg text-[#2BB5BC] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">Shopify</h4>
                            <div class="flex gap-4">
                                <div class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                    <img src="/images/shopify_header.webp" alt="Shopify" class="h-full w-full object-cover">
                                </div>
                                <ul class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                    <li><a href="/services/shopify-development" class="hover:text-[#2BB5BC] transition">Shopify Development</a></li>
                                    <li><a href="/services/shopify-theme-design" class="hover:text-[#2BB5BC] transition">Shopify Theme Design</a></li>
                                    <li><a href="/services/shopify-store-setup" class="hover:text-[#2BB5BC] transition">Shopify Store Setup</a></li>
                                    <li><a href="/services/speed-optimization" class="hover:text-[#2BB5BC] transition">Speed optimization</a></li>
                                    <li><a href="/services/migration-services" class="hover:text-[#2BB5BC] transition">Migration Services</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <h4 class="font-bold text-base xl:text-lg text-[#95C951] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">Software</h4>
                            <div class="flex gap-4">
                                <div class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                    <img src="/images/software_header.webp" alt="Software" class="h-full w-full object-cover">
                                </div>
                                <ul class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                    <li><a href="/services/web-design-and-development" class="hover:text-[#95C951] transition">Web Design & Development</a></li>
                                    <li><a href="/services/landing-pages-design" class="hover:text-[#95C951] transition">Landing Pages Design</a></li>
                                    <li><a href="/services/saas-product-development" class="hover:text-[#95C951] transition">SaaS product development</a></li>
                                    <li><a href="/services/automative-app" class="hover:text-[#95C951] transition">Automative Apps </a></li>
                                    <li><a href="/services/healthcare-and-hippa-apps" class="hover:text-[#95C951] transition">Healthcare and HIPPA Apps </a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </li>

            <li><a href="/portfolio" class="hover:text-[var(--primary-color)]">Portfolio</a></li>
            <li><a href="/blogs" class="text-[var(--primary-color)]">Blogs</a></li>
            <li><a href="/career" class="hover:text-[var(--primary-color)]">Career</a></li>
            <li><a href="/about-us" class="hover:text-[var(--primary-color)]">About Us</a></li>
        </ul>

        <a href="/contact-us" class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white hover:opacity-90 transition font-medium">Contact Us</a>
    </nav>

    <nav class="glass flex lg:hidden items-center justify-between w-[92%] mx-auto px-5 py-2 rounded-full mt-2 relative">
        <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-8 w-auto"></a>
        <button id="menu-btn" class="text-white focus:outline-none text-3xl">☰</button>
        
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full mt-2 z-50 bg-[rgba(10,10,10,0.98)] backdrop-blur-xl flex-col transform scale-y-0 origin-top transition-all duration-300 rounded-2xl overflow-y-auto max-h-[85vh] border border-white/10">
            <a href="/" class="block w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>
            
            <div class="border-b border-white/10">
                <button id="mobile-services-btn" class="w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold flex justify-center items-center gap-1">
                    Services
                    <span id="mobile-arrow" class="material-symbols-outlined text-sm transition-transform text-lg font-bold"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></span>
                </button>
                <div id="mobile-services-menu" class="hidden flex-col bg-white/5 pb-4">
                    <div class="py-2 border-b border-white/10">
                        <p class="text-[#2BB5BC] text-[11px] font-bold uppercase tracking-widest py-2 text-center">Shopify</p>
                        <a href="/services/shopify-development" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify Development</a>
                        <a href="/services/shopify-theme-design" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify Theme Design</a>
                        <a href="/services/shopify-store-setup" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify Store Setup</a>
                        <a href="/services/speed-optimization" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Speed optimization</a>
                        <a href="/services/migration-services" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Migration Services</a>                        

                    </div>
                    <div class="py-2">
                        <p class="text-[#95C951] text-[11px] font-bold uppercase tracking-widest py-2 text-center">Software</p>
                        <a href="/services/web-design-and-development" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Web Design & Development</a>
                        <a href="/services/landing-pages-design" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Landing Pages Design</a>
                        <a href="/services/saas-product-development" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Saas Product Development</a>
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative App </a>
                        <a href="/services/healthcare-and-hippa-apps" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare & HIPPA App </a>                        

                    </div>
                    
                </div>
            </div>

            <a href="/portfolio" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
            <a href="/blogs" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>

    <section class="mt-4 relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>
        <div class="absolute inset-0 bg-[url('/images/hero-section/blog-page.webp')] bg-center bg-cover opacity-40"></div>
        <div class="absolute inset-0 hero-pattern"></div>
        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">Explore Ideas, Insights & Innovation</h1>
            <p class="text-base font-light leading-relaxed">Welcome to our blog, a space where we share the latest trends, practical tips, and expert perspectives on technology, design, and digital growth.</p>
        </div>
    </section>

    <section class="bg-[var(--body-bg)] py-12 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative">
        <div class="container mx-auto relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6">
                <div class="order-1 text-center lg:text-left flex flex-col gap-6">
                    <div class="glass-border w-[130px] mx-auto lg:mx-0">
                        <div class="glass-background"><div class="glass text-sm font-light text-left"><p>&#9679; INSIGHTS</p></div></div>
                    </div>
                    <h2 class="text-3xl md:text-4xl text-white">Blogs & <b>Article</b></h2>
                    <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">Stay updated with expert insights, digital trends, and practical strategies.</p>
                </div>
                <div class="order-2 flex justify-center lg:justify-end w-full mt-6 lg:mt-0 lg:absolute lg:bottom-4 lg:right-4 gap-2 z-10">
                    <button id="scrollLeft" class="group relative p-[2px] rounded-lg overflow-hidden shadow-lg [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] transition-transform hover:scale-105">
                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-black/90 backdrop-blur-[600px] text-[var(--secondary-color)] group-hover:bg-[var(--primary-color)] group-hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960" fill="currentColor" class="rotate-180"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" /></svg>
                        </div>
                    </button>
                    <button id="scrollRight" class="group relative p-[2px] rounded-lg overflow-hidden shadow-lg [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] transition-transform hover:scale-105">
                        <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-black/90 backdrop-blur-[600px] text-[var(--secondary-color)] group-hover:bg-[var(--primary-color)] group-hover:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" /></svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0 flex relative flex-col gap-0 sm:gap-4 ">
            <div class="relative mt-6">
                <div id="categorySlider" class="flex gap-4 py-2 overflow-x-auto scroll-smooth touch-pan-x whitespace-nowrap transition-all duration-300 max-w-full relative z-10">
                    <button id="cat-0" data-id="0" class="category-btn px-6 py-2 rounded-lg border-2 border-[var(--secondary-color)] bg-white text-black whitespace-nowrap transition-all duration-300 hover:scale-105 shadow-lg">All</button>
                    <?php
                    // Fixed query to match your database column 'blog_category_title'
                    $query = "SELECT * FROM blogs_category WHERE status = 'active' ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Using correct column name from DB: blog_category_title
                            echo '<button id="cat-' . $row['id'] . '" data-id="' . $row['id'] . '" class="category-btn px-6 py-2 rounded-lg border-2 border-[var(--secondary-color)] bg-black/90 text-[var(--secondary-color)] whitespace-nowrap transition-all duration-300 hover:bg-white hover:text-[var(--secondary-color)] hover:scale-105 shadow-lg">' . htmlspecialchars($row['blog_category_title']) . '</button>';
                        }
                    }
                    ?>
                </div>
                <div class="hidden sm:flex pointer-events-none absolute inset-y-0 right-0 z-50">
                    <div class="w-16 h-full bg-gradient-to-l from-[#080808] to-transparent"></div>
                </div>
            </div>
        </div>

        <div id="blogResults" class="mt-4"></div>
        <div id="shareButtons"></div>
    </section>

<footer>
    <div class="w-full mx-auto bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-10 sm:px-14 py-8 ">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col gap-0">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-2 text-white px-4 ">
                        <a href="/">
                            <img src="/images/Logo_White_Color.webp" alt="Qonkar Logo" class="w-48">
                        </a>
                    </div>

                    <div class="flex gap-3">
                        <a href="https://www.linkedin.com/company/qonkar" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.facebook.com/qonkar" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/qonkartechnologies" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@QonkarTechnologiesPvtLtd" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/30 my-8"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-4">
                
                <div>
                    <h3 class="font-bold text-lg mb-4">Shopify</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="/services/shopify-development" class="hover:underline">Shopify Development</a></li>
                        <li><a href="/services/shopify-theme-design" class="hover:underline">Shopify Theme Design</a></li>
                        <li><a href="/services/shopify-store-setup" class="hover:underline">Shopify Store Setup</a></li>
                        <li><a href="/services/speed-optimization" class="hover:underline">Speed Optimization</a></li>
                        <li><a href="/services/migration-services" class="hover:underline">Migration Services</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Software</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="/services/web-design-and-development" class="hover:underline">Web Design And Development</a></li>
                        <li><a href="/services/landing-pages-design" class="hover:underline">Landing Pages Design</a></li>
                        <li><a href="/services/saas-product-development" class="hover:underline">Saas Product Development</a></li>
                        <li><a href="/services/automative-app" class="hover:underline">Automative App</a></li>
                        <li><a href="/services/healthcare-and-hippa-apps" class="hover:underline">Healthcare And Hippa Apps</a></li>
                    </ul>
                </div>



                <div>
                        <h3 class="font-bold text-lg mb-4">About</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li>
                                <a href="https://qonkar.com" class="hover:underline">Qonkar Technologies (PVT) Ltd.</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/career" class="hover:underline">Careers</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/blogs" class="hover:underline">Blogs and News</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/privacy-policy" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/terms-of-service" class="hover:underline">Terms of Services</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/help-and-support" class="hover:underline">Help and Support</a>
                            </li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="font-bold text-lg mb-4">Trusted by</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li>
                                <a href="https://www.microsoft.com/en-us" class="hover:underline"
                                    target="_blank">Microsoft</a>
                            </li>
                            <li>
                                <a href="https://www.shopify.com/" class="hover:underline" target="_blank">Shopify</a>
                            </li>
                            <li>
                                <a href="https://www.upwork.com/" class="hover:underline" target="_blank">Upwork</a>
                            </li>
                            <li>
                                <a href="https://www.fiverr.com/" class="hover:underline" target="_blank">Fiverr</a>
                            </li>
                            <li>
                                <a href="https://mailchimp.com/" class="hover:underline" target="_blank">Mailchimp</a>
                            </li>
                            <li>
                                <a href="https://www.hubspot.com/" class="hover:underline" target="_blank">HubSpot</a>
                            </li>
                            <li>
                                <a href="https://ads.google.com/" class="hover:underline" target="_blank">Google Ads</a>
                            </li>
                        </ul>
                    </div>

            </div>



            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                
                
            
            <div class="flex flex-col md:items-start md:text-left mb-8">
                <h2 class="text-xl font-bold mb-2">Location</h2>
                <div class="flex flex-wrap justify-start gap-4 font-light">
                    <p>UK</p>
                    <p class="text-white/30">|</p>
                    <p>Pakistan</p>
                </div>
                <div class="border-t border-white/30 my-4 w-full md:w-[40vw]"></div>
                <div class="flex flex-wrap justify-start gap-4 font-light text-sm sm:text-base">
                    <p>(+92) 305 8214945</p>
                    <p class="text-white/30 sm:block">|</p>
                    <p>(+44) 7476451747</p>
                    <p class="text-white/30 hidden sm:block">|</p>
                    <p class="break-all">info@qonkar.com</p>
                </div>
            </div>
            <div class="flex flex-col md:items-start md:text-left mb-8">
                <h2 class="text-xl font-bold mb-2">Registered By</h2>
            <div class="flex items-center space-x-18 gap-10 ">
                <a href="https://techdestination.com/" target="_blank">
                    <img src="/images/company-logos/PSEB_black.webp" alt="Pakistan software Export Board" class="w-14 object-contain" />
                </a>
                
                <a href="https://www.secp.gov.pk/" target="_blank">
                    <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-16 object-contain" />
                </a>
            </div>

            </div>
            
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4 border-t border-white/20 pt-4">
                <p class="text-sm">© Qonkar 2026. All rights reserved</p>
                <div class="hidden sm:flex flex-wrap justify-center gap-4 text-sm ">
                    <a href="/contact-us" class="hover:underline">Contact Us</a>
                </div>
            </div>

        </div>
    </div>
</footer>


    <script src="script/navbar.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.getElementById("categorySlider");
            const buttons = document.querySelectorAll('.category-btn');
            const blogContainer = document.getElementById("blogResults");
            const shareButtonsContainer = document.getElementById("shareButtons");

            document.getElementById("scrollLeft").addEventListener("click", () => slider.scrollBy({ left: -200, behavior: "smooth" }));
            document.getElementById("scrollRight").addEventListener("click", () => slider.scrollBy({ left: 200, behavior: "smooth" }));

            function showSkeleton() {
                blogContainer.innerHTML = `<div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full animate-pulse">${Array(6).fill().map(() => `<div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 p-3 h-64"></div>`).join("")}</div>`;
            }

            function fetchBlogs(categoryId = 0, page = 1) {
                showSkeleton();
                // ✅ FIXED: Use absolute path so search works from sub-pages
                fetch("/blog-process.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "category_id=" + categoryId + "&page=" + page
                })
                .then(response => response.text())
                .then(data => {
                    setTimeout(() => {
                        blogContainer.innerHTML = data;
                        initShareButtons();
                    }, 500);
                })
                .catch(err => console.error("AJAX error:", err));
            }

            const urlParams = new URLSearchParams(window.location.search);
            const initialCategory = urlParams.get("category") || 0;
            fetchBlogs(initialCategory);

            buttons.forEach(btn => {
                btn.addEventListener("click", function() {
                    buttons.forEach(b => {
                        b.classList.remove('bg-white', 'text-black');
                        b.classList.add('bg-black/90', 'text-[var(--secondary-color)]');
                    });
                    this.classList.remove('bg-black/90', 'text-[var(--secondary-color)]');
                    this.classList.add('bg-white', 'text-black');
                    fetchBlogs(this.getAttribute("data-id"), 1);
                });
            });

            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("pagination-btn")) {
                    const page = e.target.getAttribute("data-page");
                    const activeCategory = document.querySelector('.category-btn.bg-white')?.getAttribute("data-id") || 0;
                    fetchBlogs(activeCategory, page);
                }
                const arrowBtn = e.target.closest(".blog-arrow-btn");
                if (arrowBtn) {
                    // ✅ FIXED: Redirect to clean URL using SLUG instead of ID
                    window.location.href = `/blog/${arrowBtn.dataset.slug}`;
                }
            });

            function initShareButtons() {
                if (!shareButtonsContainer) return;
                const currentUrl = encodeURIComponent(window.location.href);
                shareButtonsContainer.innerHTML = `
                <div class="flex flex-col items-center justify-center gap-3 mt-8 pb-8">
                    <div class="flex items-center gap-2 text-white text-lg font-light">
                        <span class="material-symbols-outlined text-[var(--secondary-color)]">share</span><span>Share page</span>
                    </div>
                    <div class="flex gap-4 text-2xl text-white">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=${currentUrl}" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/?text=${currentUrl}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied!');"><i class="fas fa-link"></i></button>
                    </div>
                </div>`;
            }
        });
    </script>
</body>
</html>