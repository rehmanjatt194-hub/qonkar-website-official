<?php
// Note: Backend include ke liye ../ theek hai agar file structure same rahe.
require_once '../db-path.php'; // path relative to current file

require_once "../".ADMIN_URL.'/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
            
    
<link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    
    
                <?php
            // Dynamic Canonical Tag
            $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $request_uri = str_replace('.php', '', $request_uri);
            $request_uri = rtrim($request_uri, '/');
            
            $finalCanonical = "https://qonkar.com" . $request_uri;
            ?>

    <meta name="description"
        content="Launch a Revenue Ready Shopify store with Qonkar. We specialize in enterprise setup, catalog architecture, multi-currency payments, and seamless integrations for global brands." />

    <meta name="keywords"
        content="Shopify Store Setup Service, Shopify Plus Setup, Ecommerce Launch Strategy, Shopify Migration Experts, Dropshipping Store Setup, D2C Brand Launch" />

    <meta name="author" content="Qonkar Technologies" />

    <meta property="og:title" content="Enterprise Shopify Store Setup & Launch | Qonkar" />
    <meta property="og:description" content="Don't just launch. Dominate. We build scalable, high-performance Shopify stores architected for growth from Day 1." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/services/shopify-store-setup" />
    <meta property="og:image" content="/images/shopify-setup-hero.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Enterprise Shopify Store Setup & Launch | Qonkar" />
    <meta name="twitter:description" content="Don't just launch. Dominate. We build scalable, high-performance Shopify stores architected for growth from Day 1." />
    <meta name="twitter:image" content="/images/shopify-setup-hero.webp" />

    
    
    

    <title>Shopify Store Setup & Launch Strategy | Qonkar</title>

    
    
    
    
    <style>
      html {
        scroll-behavior: smooth;
      }
      .mouse-hover-card {
          position: relative;
          overflow: hidden;
          background-color: #071824;
          border: 1px solid #1a3a4a;
          border-radius: 14px;
          transition: border-color 0.3s ease, box-shadow 0.3s ease;
      }
      .mouse-hover-card::before {
          content: '';
          position: absolute;
          inset: 0;
          background: radial-gradient(350px circle at var(--x, 0px) var(--y, 0px), rgba(1, 160, 216, 0.12), transparent 80%);
          opacity: 0;
          transition: opacity 0.3s ease;
          pointer-events: none;
          z-index: 2;
      }
      .mouse-hover-card:hover::before {
          opacity: 1;
      }
      .mouse-hover-card:hover {
          border-color: #01a0d8;
          box-shadow: 0 0 0 1px #01a0d8, 0 12px 30px -10px rgba(1, 160, 216, 0.2);
      }
      .icon-circle {
          border-color: rgba(255, 255, 255, 0.15);
      }
      .mouse-hover-card:hover .icon-circle {
          border-color: #01a0d8;
      }
      .icon-tint {
          filter: brightness(0) invert(1);
          transition: filter 0.3s ease;
      }
      .mouse-hover-card:hover .icon-tint {
          filter: invert(51%) sepia(82%) saturate(2250%) hue-rotate(167deg) brightness(93%) contrast(101%);
      }
      .scroll-reveal-card {
          opacity: 0;
          transform: translateY(30px);
          transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease, box-shadow 0.3s ease;
      }
      .scroll-reveal-card.visible {
          opacity: 1;
          transform: translateY(0);
      }
    </style>

    <!-- Lenis Smooth Scroll CSS -->
    <style>
        html.lenis, html.lenis body {
            height: auto;
        }
        .lenis-smooth {
            scroll-behavior: auto !important;
        }
        .lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }
        .lenis-stopped {
            overflow: hidden;
        }
        .lenis-scrolling iframe {
            pointer-events: none;
        }
    </style>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

    <div class="min-h-screen flex flex-col mt-6  md:mt-4   ">

        <section class="relative w-[95vw] mx-auto min-h-[75vh] rounded-lg overflow-hidden flex items-center  mx-auto px-4 sm:px-6 lg:px-8">
            <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

            <div class="absolute inset-0 hero-pattern"></div>

            <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-start w-full px-10 sm:px-10 lg:px-9 py-10">

                <div class="text-left text-white space-y-6 order-1">
                    <div class="hidden glass px-3 py-2 rounded-lg sm:rounded-full text-xs sm:text-sm text-white inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">
                        <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">&#9679; Launch</span>
                        <span>Shopify Experts</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                        Expert <b>Shopify Store Setup</b> <br class="hidden sm:block"> 
                        & Configuration Services
                    </h1>

                    <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                        Launch your business with confidence. As <b>Shopify store setup experts</b>, 
                        Qonkar handles everything from domain connection to payment settings, 
                        ensuring your <b>Shopify ecommerce setup</b> is professional, secure, 
                        and ready to sell from day one.
                    </p>

                    <div class="flex items-center gap-4 mt-4">
                        <a href="/contact-us" class="hero-btn btn-light-theme">
                            Start Your Launch
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end order-2">
                    <img src="/images/qonkar-custom-shopify-store-design-portfolio.webp" alt="A collection of high-converting custom Shopify store designs and e-commerce interfaces created by Qonkar Technologies."
                        class="max-h-[40vh] sm:max-h-[50vh] md:max-h-[65vh] object-contain">
                </div>
            </div>
        </section>
        
    <section class="bg-gradient-to-r from-[#000d16] via-[#001c30] to-[#000d16] border-y border-[#01a0d8]/20 flex flex-col items-center justify-center py-4 md:py-5 overflow-hidden relative shadow-[inset_0_1px_0_rgba(255,255,255,0.05)] w-full mt-2 md:mt-3 mb-5 md:mb-6">

        <div class="relative overflow-hidden w-full group">
            <div class="flex items-center animate-scroll-horizontal space-x-18 gap-20 group-hover:[animation-play-state:paused] cursor-pointer">
                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-7 md:h-8 object-contain" />

                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="h-10 md:h-12 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-7 md:h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-7 md:h-8 object-contain" />
            </div>

        </div>
    </section>
    </div>

    <section class=" bg-[var(--body-bg)] py-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/shopify-theme-design-services.webp" alt="Our Client" class="w-[90%] max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">

                <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; SERVICES</div></div></div>


                <h2 class="text-3xl md:text-4xl  text-white">
                    Architected for <b>Scale</b> & <b>Global Growth</b>
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  A Shopify store is more than just a website; it's a financial engine. We configure your store's backend, tax settings, shipping zones, and inventory systems to handle high transaction volumes without breaking.
                </p>

            </div>
        </div>
    </section>


        <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/our-process.php'; ?>
    
    
    
    
    
    
    
    
    
    
    <section class="py-20 px-4 sm:px-6 lg:px-8" style="background: #f8fafc;">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                    &#9679; &nbsp;Qonkar Shopify Setup
                </span>
                <h2 class="text-3xl md:text-5xl font-light mt-3" style="color: #0a1628; line-height:1.15;">
                    Seamless <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">Shopify Store Setup</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base md:text-lg font-light" style="color:#4b5563;">
                    Launch your e-commerce journey with a fully configured, professionally optimized Shopify store built for immediate sales.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="flex flex-col gap-8">

                <!-- Card 1: Bespoke Storefront Architecture -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/Full-Suite-Store-Initialization.webp"
                            alt="Full-Suite Store Initialization"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(63,137,201,0.15), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #3f89c9;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Full-Suite <b>Store Initialization</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            We handle the heavy lifting. From setting up payment gateways to configuring shipping zones, our
                            <a href="/contact-us" style="color:#3f89c9; font-weight:600; border-bottom:1px solid #3f89c9;">launch team</a> delivers a turnkey Shopify storefront ready for business.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Domain &amp; Payment Gateway Setup
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Shipping &amp; Tax Calculations
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Security &amp; Policy Pages
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Shopify Plus (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/Product-Catalog-&-Inventory.webp"
                            alt="Product Catalog & Inventory"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(47,173,195,0.15), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #2fadc3;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Product <b>Catalog &amp; Inventory</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Organize your inventory for maximum searchability. Our <a href="/contact-us" style="color:#2fadc3; font-weight:600; border-bottom:1px solid #2fadc3;">e-commerce coordinators</a> structure collections, tag variables, and organize multi-option variants.
                        </p>
                        <div class="grid grid-cols-2 gap-6 pt-5" style="border-top: 1px solid #f0f9ff;">
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">0 to 10k+</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Products Handled</p>
                            </div>
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">100%</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Launch Readiness</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Custom App Development -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/Essential-App-&-Integration-Setup.webp"
                            alt="Essential App & Integration Setup"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(133,213,92,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #85d55c;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Essential <b>App &amp; Integration</b> Setup</h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Equip your store with critical growth features. We install and configure top-tier apps for marketing, customer support, SEO, and analytics, ensuring they <a href="/contact-us" style="color:#85d55c; font-weight:600; border-bottom:1px solid #85d55c;">integrate seamlessly</a>.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0f9ff; color:#3f89c9; border:1px solid #bae6fd;">Klaviyo</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0;">Judge.me</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#faf5ff; color:#7c3aed; border:1px solid #e9d5ff;">Matrixify</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#fff7ed; color:#c2410c; border:1px solid #fed7aa;">Google Analytics</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Zero-Downtime Migrations (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/Offline-to-Online-Store-Launch.webp"
                            alt="Offline to Online Store Launch"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(63,137,201,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #3f89c9;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#3f89c9);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Offline to <b>Online Store Launch</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Transition your brick-and-mortar business to a global online store. We map your offline operations into a highly functional, user-friendly digital catalog.
                        </p>
                        <div class="flex items-center gap-4 p-4 rounded-2xl" style="background:#f0f9ff; border:1px solid #bae6fd;">
                            <span class="font-semibold text-sm" style="color:#374151;">Physical Retail</span>
                            <div class="flex-1 flex items-center justify-center">
                                <div class="h-0.5 flex-1 rounded-full" style="background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                <svg class="w-5 h-5 mx-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#2fadc3" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1.5 rounded-lg font-bold text-sm text-white" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">Shopify Commerce</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Speed Optimization -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/SEO-&-Marketing-Foundations.webp"
                            alt="SEO & Marketing Foundations"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(47,173,195,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #2fadc3;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">SEO <b>&amp; Marketing Foundations</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Start off visible. We configure schema markup, optimize meta titles, and set up tracking pixels so you are ready to launch search ads and rank on Google.
                        </p>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">SEO Setup Health</span>
                                    <span style="color:#2fadc3; font-weight:700;">95/100</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:95%; background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Tracking Accuracy</span>
                                    <span style="color:#3f89c9; font-weight:700;">100%</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:100%; background: linear-gradient(90deg,#3f89c9,#85d55c);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Headless Commerce (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/shopify-store-setup/Post-Launch-Staff-Training.webp"
                            alt="Post-Launch Staff Training"
                            class="absolute inset-0 w-full h-full object-cover transition duration-700 hover:scale-105">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(133,213,92,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #85d55c;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Post-Launch <b>Staff Training</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            We don't just build and leave. We provide customized video walkthroughs and guides so your team can confidently manage products, orders, and promotions.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Admin &amp; Order Dashboard Training
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Inventory Management Guides
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-14">
                <a href="/contact-us"
                    class="btn-light-theme"
                    >
                    Discuss Your Project With Us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
        <div class="text-center mb-12   bg-no-repeat bg-[length:40%] 
                bg-[url('/images/background_curve.svg')] 
                bg-[center_top_60px]">
            <h2 class="text-sm uppercase font-light text-white mb-6">
                Our Setup Services:
            </h2>
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;CORE CAPABILITIES</p>
                    </div>
                </div>
            </div>
            <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                Your Complete <b>Launch</b> Solution
            </h2>
            <p class=" font-light leading-relaxed text-white w-[75%] mx-auto">
                We handle the technical complexities so you can focus on your brand. From payments to product uploads, we build a solid foundation for growth.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto w-full">
                <div class="group background-backdrop relative rounded-[5px] border border-[1.087px] border-[#2F2F2F]/50
                     bg-white/5 backdrop-blur-[200px] p-6 text-left shadow-lg flex flex-col items-start overflow-hidden">

                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <img src="/images/services_pictures/shopify_cutomization.webp" class="w-full h-full object-cover" alt="">
                        <div class="absolute inset-0 bg-[#046362]/60"></div>
                    </div>

                    <img src="/images/icons/services/01_color.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 group-hover:hidden relative z-10" alt="">
                    <img src="/images/icons/services/01_white.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 hidden group-hover:block relative z-10"
                        alt="">

                    <h3 class="text-3xl font-light mb-3 text-left relative z-10">
                        Full Store Configuration
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We configure 100% of your store settings: Domains, DNS, SSL, Customer Accounts, Policies, and Notification Emails. We ensure everything is compliant and secure.
                    </p>
                </div>

                <div class="group background-backdrop relative rounded-[5px] border border-[1.087px] border-[#2F2F2F]/50
                     bg-white/5 backdrop-blur-[100px] p-6 text-left shadow-lg flex flex-col items-start overflow-hidden">

                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <img src="/images/services_pictures/shopify_redesign.webp" class="w-full h-full object-cover" alt="">
                        <div class="absolute inset-0 bg-[#046362]/60"></div>
                    </div>

                    <img src="/images/icons/services/02_color.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 group-hover:hidden relative z-10" alt="">
                    <img src="/images/icons/services/02_white.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 hidden group-hover:block relative z-10"
                        alt="">

                    <h3 class="text-3xl font-light mb-3 text-left relative z-10">
                        Catalog Architecture
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We organize your products into smart Collections with optimized tags, variants, and meta fields. We ensure your site navigation makes sense to users and Google bots alike.
                    </p>
                </div>

                <div class="group background-backdrop relative rounded-[5px] border border-[1.087px] border-[#2F2F2F]/50
                     bg-white/5 backdrop-blur-[100px] p-6 text-left shadow-lg flex flex-col items-start overflow-hidden">

                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <img src="/images/services_pictures/shopify_theme-developement.webp" class="w-full h-full object-cover" alt="">
                        <div class="absolute inset-0 bg-[#046362]/60"></div>
                    </div>

                    <img src="/images/icons/services/03_color.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 group-hover:hidden relative z-10" alt="">
                    <img src="/images/icons/services/03_white.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 hidden group-hover:block relative z-10"
                        alt="">

                    <h3 class="text-3xl font-light mb-3 text-left relative z-10">
                        Global Payments & Shipping
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Sell everywhere. We set up Shopify Markets, multi-currency payments, tax rules (Avalara/Vertex), and complex shipping profiles for seamless international expansion.
                    </p>
                </div>

                <div class="group background-backdrop relative rounded-[5px] border border-[1.087px] border-[#2F2F2F]/50
                        bg-white/5 backdrop-blur-[200px] p-6 text-left shadow-lg flex flex-col items-start overflow-hidden">

                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <img src="/images/services_pictures/shopify_maintanance.webp" class="w-full h-full object-cover" alt="">
                        <div class="absolute inset-0 bg-[#046362]/60"></div>
                    </div>

                    <img src="/images/icons/services/04_color.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 group-hover:hidden relative z-10" alt="">
                    <img src="/images/icons/services/04_white.svg"
                        class="mt-5 mb-10 w-[50px] transition-all duration-500 hidden group-hover:block relative z-10"
                        alt="">

                    <h3 class="text-3xl font-light mb-3 text-left relative z-10">
                        Analytics & Tracking Setup
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Data is power. We implement GA4, Facebook Pixel (CAPI), and TikTok Pixel correctly from day one so you can run profitable ads immediately after launch.</p>
                </div>
        </div>

    </section>

    <section class="w-full py-16 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 space-y-4">
                    <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; ECOSYSTEM</div></div></div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Seamless <b>Integrations</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                       Your store needs to talk to your other tools. We integrate your ERP, CRM, and 3PL fulfillment software directly into Shopify, automating your operations so you can scale without hiring more staff.
                    </p>
                </div>

                <div class="md:w-1/2 flex flex-col gap-3">
                    <!-- Card 1 -->
                    <div class="group relative flex gap-7 items-center p-6 mouse-hover-card scroll-reveal-card" style="transition-delay: 0ms;">
                        <!-- Backdrop image on hover (subtle) -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none z-[1]">
                            <img src="/images/services_pictures/shopify_optimize.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#000d16]"></div>
                        </div>

                        <!-- Subtle arrow indicator -->
                        <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none z-10">
                            <svg class="w-4 h-4 text-[#01a0d8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="icon-circle w-12 h-12 rounded-full border flex items-center justify-center transition-all duration-300 shrink-0 z-10 relative bg-black/20">
                            <img src="/images/icons/services/05_white.svg" class="w-6 h-6 transition-all duration-300 icon-tint" alt="">
                        </div>

                        <div class="relative z-10 flex-grow">
                            <h3 class="text-2xl font-light mb-2 text-white">ERP & CRM Connections</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Sync inventory and customer data in real-time with NetSuite, Salesforce, or HubSpot.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group relative flex gap-7 items-center p-6 mouse-hover-card scroll-reveal-card" style="transition-delay: 150ms;">
                        <!-- Backdrop image on hover (subtle) -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none z-[1]">
                            <img src="/images/services_pictures/shopify_CRO.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#000d16]"></div>
                        </div>

                        <!-- Subtle arrow indicator -->
                        <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none z-10">
                            <svg class="w-4 h-4 text-[#01a0d8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="icon-circle w-12 h-12 rounded-full border flex items-center justify-center transition-all duration-300 shrink-0 z-10 relative bg-black/20">
                            <img src="/images/icons/services/07_white.svg" class="w-6 h-6 transition-all duration-300 icon-tint" alt="">
                        </div>

                        <div class="relative z-10 flex-grow">
                            <h3 class="text-2xl font-light mb-2 text-white">Review & Loyalty Apps</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                We implement Yotpo, Okendo, or Judge.me to capture social proof and build trust instantly.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 flex flex-col gap-3 order-2 md:order-1">
                    <!-- Card 1 -->
                    <div class="group relative flex gap-7 items-center p-6 mouse-hover-card scroll-reveal-card" style="transition-delay: 0ms;">
                        <!-- Backdrop image on hover (subtle) -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none z-[1]">
                            <img src="/images/services_pictures/shopify_strategy.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#000d16]"></div>
                        </div>

                        <!-- Subtle arrow indicator -->
                        <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none z-10">
                            <svg class="w-4 h-4 text-[#01a0d8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="icon-circle w-12 h-12 rounded-full border flex items-center justify-center transition-all duration-300 shrink-0 z-10 relative bg-black/20">
                            <img src="/images/icons/services/05_white.svg" class="w-6 h-6 transition-all duration-300 icon-tint" alt="">
                        </div>

                        <div class="relative z-10 flex-grow">
                            <h3 class="text-2xl font-light mb-2 text-white">Automated Flows</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Setup of Klaviyo welcome series, abandoned cart recovery, and post-purchase upsells.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group relative flex gap-7 items-center p-6 mouse-hover-card scroll-reveal-card" style="transition-delay: 150ms;">
                        <!-- Backdrop image on hover (subtle) -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-10 transition-opacity duration-500 pointer-events-none z-[1]">
                            <img src="/images/services_pictures/shopify_marketing.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#000d16]"></div>
                        </div>

                        <!-- Subtle arrow indicator -->
                        <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none z-10">
                            <svg class="w-4 h-4 text-[#01a0d8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="icon-circle w-12 h-12 rounded-full border flex items-center justify-center transition-all duration-300 shrink-0 z-10 relative bg-black/20">
                            <img src="/images/icons/services/06_white.svg" class="w-6 h-6 transition-all duration-300 icon-tint" alt="">
                        </div>

                        <div class="relative z-10 flex-grow">
                            <h3 class="text-2xl font-light mb-2 text-white">B2B Setup</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                For wholesalers, we configure price lists, net payment terms, and company profiles on Shopify Plus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 space-y-4 order-1 md:order-2">
                    <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; SCALABILITY</div></div></div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Built for <b>High Volume</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                        We don't just build for today. We architect your store to handle Black Friday traffic spikes and international expansion without downtime or performance degradation.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; Why Qonkar</div></div></div>

                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    Setup That <b>Scales</b>
                </h2>
                <p class="mt-2 text-white">
                    We build the technical foundation so you can focus on sales.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <div class="space-y-4 max-w-2xl mx-auto relative text-white order-2 lg:order-1">

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">How long does it take to launch?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <div class="px-6 py-4 text-white space-y-2">
                                <p class="text-white !text-white">
                                    For a standard setup using a premium theme, we can launch in <b>2-3 weeks</b>. For complex builds with migrations or custom ERP integrations, it typically takes <b>4-6 weeks</b>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Can you migrate from WooCommerce/Magento?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Yes. We specialize in <b>Zero-Downtime Migrations</b>. We transfer all your products, customers, orders, and reviews while maintaining SEO rankings through 301 redirects.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you set up payments and shipping?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Absolutely. We configure payment gateways (Stripe, PayPal, Shopify Payments), set up multi-zone shipping profiles, and automate tax calculations for global sales.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Is the store mobile optimized?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Yes. We prioritize mobile responsiveness. Every store we set up is tested on multiple devices to ensure a seamless checkout experience for mobile shoppers.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you offer training?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Yes. We provide a comprehensive handover session and video tutorials showing you how to manage orders, update products, and run reports.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center order-1 lg:order-2 w-full">
                    <img src="/images/icons/services/FAQS Shopify.webp" 
                         alt="Why Qonkar"
                         class="w-full max-w-md lg:max-w-2xl rounded-lg shadow-lg mx-auto">
                </div>
            </div>


        </div>
    </section>




    <section class="w-full flex justify-center items-center py-12 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-8 md:p-16 text-center text-white rounded-[24px] border" style="background-color: #071824; border-color: rgba(26, 58, 74, 0.8);">
            <!-- Small icon box centered above the heading -->
            <div class="flex justify-center mb-6">
                <div class="w-14 h-14 rounded-2xl border border-[#01a0d8]/30 bg-[#01a0d8]/10 flex items-center justify-center">
                    <i class="fa-solid fa-rocket text-[#01a0d8] text-2xl"></i>
                </div>
            </div>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-light text-white mb-4">
                Ready to <span class="text-[#01a0d8] font-semibold">Launch</span> Your Empire?
            </h2>

            <p class="text-sm sm:text-base text-white/60 font-light max-w-2xl mx-auto mb-8 leading-relaxed">
                Let's build a store that's ready to scale from day one.
            </p>

            <a href="/contact-us"
                class="btn-dark-theme">
                Start Your Launch
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

    
    <script>
    (function() {
        function initHorizontalEffects() {
            // Radial hover glow
            document.querySelectorAll('.mouse-hover-card').forEach(card => {
                card.addEventListener('mousemove', e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    card.style.setProperty('--x', `${x}px`);
                    card.style.setProperty('--y', `${y}px`);
                });
            });

            // Scroll reveal observer
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.scroll-reveal-card').forEach(card => {
                revealObserver.observe(card);
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initHorizontalEffects);
        } else {
            initHorizontalEffects();
        }
    })();
    </script>
    <script src="/script/FAQ.js?v=2"></script>
    <script src="/script/navbar.js"></script>

    <!-- Lenis Smooth Scroll Script -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>
    <script>
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>
</body>

</html>

