<?php
require_once '../db-path.php'; // path relative to current file

require_once "../" . ADMIN_URL . '/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ6XTSKG0W"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-NZ6XTSKG0W');
    </script>

    <link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    
    
    <?php
    // Dynamic Canonical Tag for Services
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // .php extension hatao
    $request_uri = str_replace('.php', '', $request_uri);
    // Trailing slash hatao
    $request_uri = rtrim($request_uri, '/');

    $finalCanonical = "https://qonkar.com" . $request_uri;
    ?>

    <meta name="description"
        content="Scale your D2C brand with Qonkar. We specialize in Custom Shopify Themes, Platform Migration, and Speed Optimization for high-growth stores in USA & UK." />

    <meta name="keywords"
        content="Shopify Plus Agency, Custom Shopify Theme Development, WooCommerce to Shopify Migration, Headless Commerce, Shopify Speed Optimization, Liquid Coding Experts" />

    <meta name="author" content="Qonkar Technologies" />

    <meta property="og:title" content="Shopify Plus & Custom Development Agency | Qonkar" />
    <meta property="og:description"
        content="Don't settle for templates. We build high-speed, custom Shopify stores engineered for sales. Serving brands in New York & London." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/services/shopify" />
    <meta property="og:image" content="/images/shopify-hero-mockup.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Shopify Plus & Custom Development Agency | Qonkar" />
    <meta name="twitter:description"
        content="Scale your D2C brand with Qonkar. Experts in Custom Themes, Migration, and Speed Optimization." />
    <meta name="twitter:image" content="/images/shopify-hero-mockup.webp" />

    
    
    

    <title>Shopify Plus Agency & Custom Theme Developers | Qonkar</title>

    
    
    


    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "/#organization",
      "name": "Qonkar Technologies",
      "url": "/",
      "logo": "/images/qonkar-logo.webp"
    },
    {
      "@type": "Service",
      "serviceType": "Shopify Development Services",
      "provider": { "@id": "/#organization" },
      "areaServed": "Worldwide",
      "description": "At Qonkar, we build custom Shopify stores that are fast, flexible, and built to grow. From setup and theme development to redesigns and backend enhancements.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Shopify Service Suite",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Store Setup & Customization",
              "description": "Custom Shopify store build focused on speed, flexibility, and growth engineering.",
              "image": "/images/services_pictures/shopify_cutomization.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Store Redesign",
              "description": "Transforming outdated stores with modern design, mobile-first UX, and performance-driven upgrades.",
              "image": "/images/services_pictures/shopify_redesign.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Theme Development",
              "description": "Bespoke themes using clean Liquid and HTML5 for unique design and cross-device compatibility.",
              "image": "/images/services_pictures/shopify_theme-developement.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Management & Maintenance",
              "description": "Handling updates, security, bug fixes, and performance improvements for peak store condition.",
              "image": "/images/services_pictures/shopify_maintanance.webp"
            }
          }
        ]
      }
    },
    {
      "@type": "HowTo",
      "name": "Qonkar Development Strategies & Process",
      "description": "Our streamlined process ensures that your project moves smoothly from the first meeting to the final launch.",
      "totalTime": "P4W",
      "step": [
        {
          "@type": "HowToStep",
          "url": "/#step1",
          "name": "Discovery & Strategy",
          "itemListElement": [{ "@type": "HowToDirection", "text": "We explore your goals and challenges, then build a clear, data-backed roadmap." }],
          "image": "/images/process-images/Discover_strategy.webp"
        },
        {
          "@type": "HowToStep",
          "url": "/#step2",
          "name": "Design & Experience",
          "itemListElement": [{ "@type": "HowToDirection", "text": "We create intuitive, brand-aligned prototypes focused on user experience." }],
          "image": "/images/process-images/Design_expreience.webp"
        },
        {
          "@type": "HowToStep",
          "url": "/#step3",
          "name": "Build & Integrate",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Our developers build powerful, scalable solutions with smart tech integrations." }],
          "image": "/images/process-images/Integration.webp"
        },
        {
          "@type": "HowToStep",
          "url": "/#step4",
          "name": "Testing & Launch",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Every feature is tested and optimized for speed, performance, and reliability." }],
          "image": "/images/process-images/testing.webp"
        },
        {
          "@type": "HowToStep",
          "url": "/#step5",
          "name": "Support & Growth",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Post-launch, we monitor, improve, and scale your product for long-term success." }],
          "image": "/images/process-images/growth.webp"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why should I choose Qonkar as my Shopify development partner?",
          "acceptedAnswer": { "@type": "Answer", "text": "Choosing Qonkar means getting a team that combines technical mastery with business strategy focused on clean Liquid coding and ROI-driven solutions." }
        },
        {
          "@type": "Question",
          "name": "Do you offer custom Shopify app development for specific business needs?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, we build bespoke public and private apps tailored to your unique requirements, including complex API integrations." }
        },
        {
          "@type": "Question",
          "name": "Can you help scale my store with Shopify Plus development?",
          "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. We help enterprise-level brands scale using advanced features like Checkout Extensibility and custom B2B channels." }
        }
      ]
    }
  ]
}
</script>

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

        <section
            class="relative w-[95vw] mx-auto min-h-[75vh] rounded-lg overflow-hidden flex items-center  mx-auto px-4 sm:px-6 lg:px-8">
            <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

            <div class="absolute inset-0 hero-pattern"></div>

            <div
                class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-start w-full px-10 sm:px-10 lg:px-9 py-10">

                <div class="text-left text-white space-y-6 order-1">
                    <div
                        class="hidden glass px-3 py-2 rounded-lg sm:rounded-full text-xs sm:text-sm text-white inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">
                        <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">&#9679;
                            New</span>
                        <span>Branding & Growth</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                        Expert <b>Shopify Development</b> Services<br class="hidden sm:block">
                        & Custom <b>Store Setup</b>
                    </h1>

                    <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                        As a trusted <b>Shopify development partner</b>, Qonkar builds
                        <b>high-converting storefronts</b> through Shopify Plus development
                        and seamless migrations. We turn visitors into customers with fast,
                        secure, and <b>SEO-optimized solutions</b> for the global market.
                    </p>

                    <div class="flex items-center gap-4 mt-4">
                        <a href="/contact-us"
                            class="hero-btn btn-light-theme">
                            Launch Your Store
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end order-2">
                    <img src="/images/service_hero.webp" alt="Service Hero"
                        alt="Creative team reviewing brand board and performance dashboards on screens"
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

    <section class="py-20 px-4 sm:px-6 lg:px-8" style="background: #ffffff;">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-14">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff; letter-spacing:0.12em;">
                    &#9679; &nbsp;Services
                </span>
                <h2 class="text-3xl md:text-4xl font-light mt-3" style="color: #0a1628; line-height:1.2;">
                    End-to-End <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">Shopify Plus &amp; E-Commerce</span><br>Solutions for Global Brands
                </h2>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left: Image with floating stat cards -->
                <div class="relative flex justify-center order-2 lg:order-1">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl" style="background: linear-gradient(135deg,#eaf5fb,#f0faf5);">
                        <img src="/images/shopify development.webp" alt="Shopify Development" class="w-full h-auto relative z-10 rounded-3xl">
                    </div>

                    <!-- Floating stat card 1 -->
                    <div class="absolute -bottom-4 -left-4 sm:left-4 z-20 rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3 animate-float-badge-1"
                        style="background:#f0f9ff; border-left: 4px solid #3f89c9; min-width:160px;">
                        <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0"
                            style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium" style="color:#6b7280;">Avg. Revenue Boost</p>
                            <p class="text-lg font-bold" style="color:#0a1628;">+187%</p>
                        </div>
                    </div>

                    <!-- Floating stat card 2 -->
                    <div class="absolute -top-4 -right-4 sm:right-4 z-20 rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3 animate-float-badge-2"
                        style="background:#f0fdf4; border-left: 4px solid #85d55c; min-width:160px;">
                        <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0"
                            style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium" style="color:#6b7280;">Global Brands Served</p>
                            <p class="text-lg font-bold" style="color:#0a1628;">50+</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="order-1 lg:order-2 flex flex-col gap-6 lg:text-left text-center">
                    <p class="text-base leading-relaxed" style="color:#374151; max-width:520px; margin: 0 auto 0 0;">
                        Stop settling for generic templates. Whether you are launching a D2C brand in New York or scaling a
                        retail giant in London, our Shopify Experts build storefronts that dominate the market. We combine
                        data-driven UX/UI Design with robust Liquid coding to turn your visitors into loyal customers.
                    </p>

                    <!-- Feature pills -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-2">

                        <div class="flex items-center gap-3 rounded-xl px-4 py-3 text-left" style="background:#f0f9ff; border:1px solid #bae6fd;">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold" style="color:#0a1628;">Speed-Optimized Stores</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-xl px-4 py-3 text-left" style="background:#f0fdf4; border:1px solid #bbf7d0;">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold" style="color:#0a1628;">Secure &amp; Scalable</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-xl px-4 py-3 text-left" style="background:#faf5ff; border:1px solid #e9d5ff;">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                style="background: linear-gradient(135deg,#3f89c9,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485"/>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold" style="color:#0a1628;">Custom Liquid Coding</span>
                        </div>

                        <div class="flex items-center gap-3 rounded-xl px-4 py-3 text-left" style="background:#fff7ed; border:1px solid #fed7aa;">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                style="background: linear-gradient(135deg,#2fadc3,#3f89c9);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-semibold" style="color:#0a1628;">High-ROI UX/UI Design</span>
                        </div>

                    </div>

                    <!-- CTA -->
                    <div class="mt-4 flex flex-wrap gap-3 justify-center lg:justify-start">
                        <a href="/contact-us" class="btn-light-theme">
                            Start Your Project
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#services-detail" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-full font-semibold text-[#0a1628] bg-gray-100 hover:bg-gray-200 border-2 border-gray-200 transition-all duration-300 shadow-sm hover:shadow-md">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/our-process.php'; ?>

    <!-- ===== OUR SHOPIFY SERVICES (REDESIGNED) ===== -->
    <section id="services-grid-section" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">

        <style>
            /* ---- Top border animation ---- */
            .svc-card { position: relative; background: #071824; border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer; }
            .svc-card::before { content: ''; position: absolute; top: 0; left: 0; height: 3px; width: 0%; background: #01a0d8; transition: width 0.4s ease; z-index: 10; border-radius: 12px 12px 0 0; }
            .svc-card:hover::before { width: 100%; }
            .svc-card:hover { transform: translateY(-4px); box-shadow: 0 20px 50px rgba(1,160,216,0.12); }

            /* ---- Icon box ---- */
            .svc-icon-box { width: 52px; height: 52px; border-radius: 12px; background: rgba(1,160,216,0.1); border: 1px solid rgba(1,160,216,0.25); display: flex; align-items: center; justify-content: center; transition: background 0.3s ease, border-color 0.3s ease; flex-shrink: 0; }
            .svc-card:hover .svc-icon-box { background: rgba(1,160,216,0.25); border-color: #01a0d8; }

            /* ---- Badge ---- */
            .svc-badge { font-size: 10px; font-weight: 700; letter-spacing: 0.08em; padding: 3px 10px; border-radius: 999px; text-transform: uppercase; }
            .badge-popular { background: rgba(1,160,216,0.15); color: #01a0d8; border: 1px solid rgba(1,160,216,0.35); }
            .badge-new { background: rgba(133,213,92,0.15); color: #85d55c; border: 1px solid rgba(133,213,92,0.35); }
            .badge-demand { background: rgba(255,165,0,0.15); color: #f59e0b; border: 1px solid rgba(255,165,0,0.35); }

            /* ---- Progress bar ---- */
            .svc-progress-track { background: rgba(255,255,255,0.07); border-radius: 999px; height: 6px; overflow: hidden; }
            .svc-progress-fill { height: 100%; border-radius: 999px; background: linear-gradient(90deg,#01a0d8,#85d55c); width: 0%; transition: width 1.2s ease 0.3s; }
            .svc-card:hover .svc-progress-fill { width: var(--prog-w); }

            /* ---- Expandable checklist ---- */
            .svc-checklist { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
            .svc-card.expanded .svc-checklist { max-height: 200px; }
            .svc-expand-btn svg { transition: transform 0.35s ease; }
            .svc-card.expanded .svc-expand-btn svg { transform: rotate(180deg); }

            /* ---- Filter buttons ---- */
            .svc-filter-btn { padding: 7px 20px; border-radius: 999px; font-size: 13px; font-weight: 600; border: 1px solid rgba(255,255,255,0.12); background: transparent; color: rgba(255,255,255,0.55); cursor: pointer; transition: all 0.3s ease; }
            .svc-filter-btn:hover, .svc-filter-btn.active { background: #01a0d8; border-color: #01a0d8; color: #fff; box-shadow: 0 0 18px rgba(1,160,216,0.35); }

            /* ---- Pulsing dot ---- */
            @keyframes pulse-dot { 0%,100%{ opacity:1; transform:scale(1);} 50%{ opacity:0.5; transform:scale(1.5);} }
            .pulse-dot { width:8px; height:8px; border-radius:50%; background:#22c55e; animation: pulse-dot 1.8s ease infinite; display:inline-block; }

            /* ---- Stats row ---- */
            .svc-stat-val { font-size: 22px; font-weight: 700; color: #01a0d8; line-height: 1; }
            .svc-stat-lbl { font-size: 10px; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 0.06em; margin-top: 2px; }
        </style>

        <!-- ---- Header ---- -->
        <div class="text-center mb-10 bg-no-repeat bg-[length:40%] bg-[url('/images/background_curve.svg')] bg-[center_top_60px]">
            <h2 class="text-sm uppercase font-light text-white mb-6">Our Shopify Services Include:</h2>
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OUR APPROACH</p>
                    </div>
                </div>
            </div>

            <!-- Title + pulsing active badge -->
            <div class="flex items-center justify-center gap-3 mb-3 flex-wrap">
                <h2 class="text-3xl md:text-4xl font-light text-white">Our Shopify <b>Services</b></h2>
                
            </div>
            <p class="font-light leading-relaxed text-white/70 w-[75%] mx-auto">
                Launch faster. Scale smarter. At Qonkar, we build custom Shopify stores that are fast,
                flexible, and built to grow. From setup and theme development to redesigns and backend enhancements,
                we deliver responsive, high-performing storefronts engineered to convert.
            </p>

            <!-- Filter buttons -->
            <div class="flex items-center justify-center gap-3 mt-8 flex-wrap" id="svc-filters">
                <button class="svc-filter-btn active" data-filter="all">All</button>
                <button class="svc-filter-btn" data-filter="shopify">Shopify</button>
                <button class="svc-filter-btn" data-filter="development">Development</button>
                <button class="svc-filter-btn" data-filter="growth">Growth</button>
            </div>
        </div>

        <!-- ---- Cards Grid ---- -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mx-auto w-full" id="svc-cards-grid">

            <!-- Card 1: Store Setup & Customization -->
            <div class="svc-card p-7 flex flex-col gap-5 border border-white/5" data-category="shopify development" id="svc-card-1">
                <!-- Top row: icon + badge -->
                <div class="flex items-start justify-between">
                    <div class="svc-icon-box">
                        <img src="/images/icons/services/01_color.svg" class="w-7 h-7" alt="Setup icon">
                    </div>
                    <span class="svc-badge badge-popular">Popular</span>
                </div>

                <!-- Title + body -->
                <div>
                    <h3 class="text-2xl font-light mb-2 leading-snug">Shopify Store Setup <b>&amp; Customization</b></h3>
                    <p class="text-sm leading-relaxed text-white/65 font-light">
                        Launch faster. Scale smarter. We build custom Shopify stores that are fast, flexible, and built to
                        grow. From setup and theme development to redesigns and backend enhancements, we deliver responsive,
                        high-performing storefronts engineered to convert.
                    </p>
                </div>

                <!-- Progress bars -->
                <div class="flex flex-col gap-3">
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>Client Satisfaction</span><span class="text-[#01a0d8] font-semibold">97%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:97%;"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>On-Time Delivery</span><span class="text-[#85d55c] font-semibold">99%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:99%; background: linear-gradient(90deg,#85d55c,#2fadc3);"></div></div>
                    </div>
                </div>

                <!-- Expand button -->
                <button class="svc-expand-btn flex items-center gap-1.5 text-xs text-[#01a0d8] font-semibold w-fit mt-auto" onclick="toggleCard('svc-card-1')">
                    What's included
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <!-- Checklist (hidden by default) -->
                <div class="svc-checklist">
                    <ul class="flex flex-col gap-2 pt-3 border-t border-white/5">
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Full store configuration &amp; product upload</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Payment gateway &amp; checkout setup</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Custom Liquid theme customization</li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Store Redesign -->
            <div class="svc-card p-7 flex flex-col gap-5 border border-white/5" data-category="shopify growth" id="svc-card-2">
                <div class="flex items-start justify-between">
                    <div class="svc-icon-box">
                        <img src="/images/icons/services/02_color.svg" class="w-7 h-7" alt="Redesign icon">
                    </div>
                    <span class="svc-badge badge-demand">In Demand</span>
                </div>

                <div>
                    <h3 class="text-2xl font-light mb-2 leading-snug">Shopify Store <b>Redesign</b></h3>
                    <p class="text-sm leading-relaxed text-white/65 font-light">
                        Outdated store? We transform it with modern design, mobile-first UX, and performance-driven
                        upgrades. Our redesigns improve navigation, boost speed, and align your brand with current market
                        trends to re-engage customers and increase sales.
                    </p>
                </div>

                <!-- Stats row -->
                <div class="grid grid-cols-3 gap-3 pt-4 border-t border-white/5">
                    <div class="text-center">
                        <div class="svc-stat-val">+62%</div>
                        <div class="svc-stat-lbl">Avg. Conversion</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">50+</div>
                        <div class="svc-stat-lbl">Stores Redesigned</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">4.9?</div>
                        <div class="svc-stat-lbl">Client Rating</div>
                    </div>
                </div>

                <button class="svc-expand-btn flex items-center gap-1.5 text-xs text-[#01a0d8] font-semibold w-fit mt-auto" onclick="toggleCard('svc-card-2')">
                    What's included
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="svc-checklist">
                    <ul class="flex flex-col gap-2 pt-3 border-t border-white/5">
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>UX/UI audit &amp; competitor analysis</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Mobile-first responsive redesign</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Speed &amp; performance optimization post-redesign</li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Theme Development -->
            <div class="svc-card p-7 flex flex-col gap-5 border border-white/5" data-category="development shopify" id="svc-card-3">
                <div class="flex items-start justify-between">
                    <div class="svc-icon-box">
                        <img src="/images/icons/services/03_color.svg" class="w-7 h-7" alt="Theme icon">
                    </div>
                    <span class="svc-badge badge-new">New</span>
                </div>

                <div>
                    <h3 class="text-2xl font-light mb-2 leading-snug">Shopify <b>Theme Development</b></h3>
                    <p class="text-sm leading-relaxed text-white/65 font-light">
                        Create a fast, fully custom store that reflects your brand and delivers seamless user experience. We
                        code bespoke themes using clean Liquid and HTML5, ensuring unique design, cross-device
                        compatibility, and 100% control over your store's look and feel.
                    </p>
                </div>

                <!-- Progress bars -->
                <div class="flex flex-col gap-3">
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>Theme Performance Score</span><span class="text-[#01a0d8] font-semibold">96%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:96%;"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>Cross-Device Compatibility</span><span class="text-[#85d55c] font-semibold">100%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:100%; background: linear-gradient(90deg,#85d55c,#2fadc3);"></div></div>
                    </div>
                </div>

                <button class="svc-expand-btn flex items-center gap-1.5 text-xs text-[#01a0d8] font-semibold w-fit mt-auto" onclick="toggleCard('svc-card-3')">
                    What's included
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="svc-checklist">
                    <ul class="flex flex-col gap-2 pt-3 border-t border-white/5">
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Figma-to-Liquid custom theme build</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Section &amp; block architecture for CMS control</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Advanced filtering, search &amp; animations</li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: Management & Maintenance -->
            <div class="svc-card p-7 flex flex-col gap-5 border border-white/5" data-category="growth shopify" id="svc-card-4">
                <div class="flex items-start justify-between">
                    <div class="svc-icon-box">
                        <img src="/images/icons/services/04_color.svg" class="w-7 h-7" alt="Maintenance icon">
                    </div>
                    <span class="svc-badge badge-popular">Popular</span>
                </div>

                <div>
                    <h3 class="text-2xl font-light mb-2 leading-snug">Shopify Management <b>&amp; Maintenance</b></h3>
                    <p class="text-sm leading-relaxed text-white/65 font-light">
                        Stay focused on your business while we keep your store in peak condition. Our team handles updates,
                        security, bug fixes, and performance improvements � ensuring uninterrupted operations and a flawless
                        shopping experience.
                    </p>
                </div>

                <!-- Stats row -->
                <div class="grid grid-cols-3 gap-3 pt-4 border-t border-white/5">
                    <div class="text-center">
                        <div class="svc-stat-val">99.9%</div>
                        <div class="svc-stat-lbl">Uptime SLA</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">&lt;2h</div>
                        <div class="svc-stat-lbl">Response Time</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">24/7</div>
                        <div class="svc-stat-lbl">Monitoring</div>
                    </div>
                </div>

                <button class="svc-expand-btn flex items-center gap-1.5 text-xs text-[#01a0d8] font-semibold w-fit mt-auto" onclick="toggleCard('svc-card-4')">
                    What's included
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="svc-checklist">
                    <ul class="flex flex-col gap-2 pt-3 border-t border-white/5">
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>App updates, bug fixes &amp; security patches</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Monthly performance &amp; traffic reporting</li>
                        <li class="flex items-center gap-2 text-sm text-white/75"><svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Dedicated Shopify support team access</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- See all services link -->
        <div class="text-center mt-10">
            <a href="/contact-us" class="inline-flex items-center gap-2 text-sm font-semibold text-[#01a0d8] hover:text-white transition-colors duration-300 group">
                Get Free Consultation
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <script>
            // ---- Expand / collapse cards ----
            function toggleCard(id) {
                const card = document.getElementById(id);
                card.classList.toggle('expanded');
            }

            // ---- Filter buttons ----
            document.getElementById('svc-filters').addEventListener('click', function(e) {
                const btn = e.target.closest('.svc-filter-btn');
                if (!btn) return;
                // Update active state
                document.querySelectorAll('.svc-filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.dataset.filter;
                document.querySelectorAll('#svc-cards-grid .svc-card').forEach(card => {
                    const cats = card.dataset.category || '';
                    if (filter === 'all' || cats.includes(filter)) {
                        card.style.display = '';
                        card.style.animation = 'fadeInUp 0.35s ease forwards';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        </script>

    </section>
    <style>
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

    <section class="w-full py-16 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 space-y-4">
                    <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; STREAMLING</div></div></div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Performance & <b>Optimization</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                        Built for Speed. Engineered for Sales. In the US & UK markets, a 1-second delay costs 7% in
                        conversions. We optimize your store�s code, structure, and speed to ensure instant loading times
                        and frictionless checkout experiences.
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
                            <h3 class="text-2xl font-light mb-2 text-white">Technical Speed Optimization</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                We achieve 90+ Google Mobile Scores by minifying code, compressing assets, and
                                implementing lazy loading. Faster load times mean lower bounce rates and higher Google
                                rankings.
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
                            <h3 class="text-2xl font-light mb-2 text-white">Conversion Rate Optimization (CRO)</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Turn traffic into revenue. We analyze US/UK user behavior using heatmaps and A/B testing
                                to optimize your UI, reduce cart abandonment, and maximize purchases.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 flex flex-col gap-3 order-2 md:order-1">
                    <!-- Card 3 -->
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
                            <h3 class="text-2xl font-light mb-2 text-white">Scalable Growth Strategy</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Data-backed strategies to boost revenue. We implement smart upsells, cross-sells, and
                                backend automation to increase your profit margins per sale.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
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
                            <h3 class="text-2xl font-light mb-2 text-white">Retention & Loyalty Marketing</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Turn one-time buyers into lifelong fans. We build automated Email/SMS flows (Klaviyo)
                                and loyalty programs that drive repeat purchases and sustainable growth.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 space-y-4 order-1 md:order-2">
                    <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; ADVANCEMENT</div></div></div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        <b>Revenue</b> Growth & Customer Retention
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                        Real profit comes from repeat customers. Our strategy goes beyond the launch, we help you
                        increase Average Order Value (AOV) and Customer Lifetime Value (CLV) through automated systems
                        designed for high-growth global brands.
                    </p>
                </div>
            </div>

        </div>
    </section>

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



    <section class="py-20 px-4 sm:px-6 lg:px-8" style="background: #f8fafc;">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                    &#9679; &nbsp;Qonkar Shopify Development
                </span>
                <h2 class="text-3xl md:text-5xl font-light mt-3" style="color: #0a1628; line-height:1.15;">
                    End-to-End <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">Shopify Development</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base md:text-lg font-light" style="color:#4b5563;">
                    From custom storefront architecture to complex backend app integrations, we build high-converting Shopify stores that scale.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="flex flex-col gap-8">

                <!-- Card 1: Bespoke Storefront Architecture -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Bespoke-Storefront-Architecture.webp"
                            alt="Bespoke Storefront Architecture"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Bespoke <b>Storefront Architecture</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Stand out from the crowd with pixel-perfect, custom-coded themes. As your dedicated
                            <a href="/contact-us" style="color:#3f89c9; font-weight:600; border-bottom:1px solid #3f89c9;">Shopify development partner</a>,
                            we translate your brand identity into a high-converting digital experience.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Pixel-Perfect Figma to Liquid
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Mobile-First Responsive Design
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Advanced Filtering &amp; Search Setup
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Shopify Plus (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Enterprise-Shopify-Plus-Experts.webp"
                            alt="Enterprise Shopify Plus Experts"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Enterprise <b>Shopify Plus</b> Experts</h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Scale without limits. Our <a href="/contact-us" style="color:#2fadc3; font-weight:600; border-bottom:1px solid #2fadc3;">Enterprise developers</a> leverage exclusive Shopify Plus features like B2B wholesale portals, Launchpad, and custom checkout extensibility.
                        </p>
                        <div class="grid grid-cols-2 gap-6 pt-5" style="border-top: 1px solid #f0f9ff;">
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">10k+</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Orders Per Minute</p>
                            </div>
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">99.9%</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Server Uptime</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Custom App Development -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Private-&-Custom-App-Development.webp"
                            alt="Private & Custom App Development"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Private &amp; <b>Custom App</b> Development</h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Bridge functionality gaps with custom-coded apps. Whether it's complex ERP syncing, specialized product builders, or unique loyalty programs, our <a href="/contact-us" style="color:#85d55c; font-weight:600; border-bottom:1px solid #85d55c;">engineering team</a> has you covered.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0f9ff; color:#3f89c9; border:1px solid #bae6fd;">Node.js</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0;">React / Polaris</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#faf5ff; color:#7c3aed; border:1px solid #e9d5ff;">GraphQL API</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#fff7ed; color:#c2410c; border:1px solid #fed7aa;">Laravel</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Zero-Downtime Migrations (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Zero-Downtime-Migrations.webp"
                            alt="Zero-Downtime Migrations"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Zero-Downtime <b>Migrations</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Moving to Shopify? We ensure secure data transfer, SEO preservation, and seamless 301 redirects so you don't lose a single customer or ranking during the transition.
                        </p>
                        <div class="flex items-center gap-4 p-4 rounded-2xl" style="background:#f0f9ff; border:1px solid #bae6fd;">
                            <span class="font-semibold text-sm" style="color:#374151;">Magento / Woo</span>
                            <div class="flex-1 flex items-center justify-center">
                                <div class="h-0.5 flex-1 rounded-full" style="background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                <svg class="w-5 h-5 mx-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#2fadc3" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1.5 rounded-lg font-bold text-sm text-white" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">Shopify Plus</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Speed Optimization -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Speed-Optimization-&-CRO.webp"
                            alt="Speed Optimization & CRO"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Speed <b>Optimization &amp; CRO</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            A 1-second delay costs you 7% in conversions. We optimize Core Web Vitals, compress code, and restructure Liquid logic to deliver blazing-fast loading speeds.
                        </p>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Performance Score</span>
                                    <span style="color:#2fadc3; font-weight:700;">98/100</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:98%; background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Conversion Rate Uplift</span>
                                    <span style="color:#3f89c9; font-weight:700;">+35%</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:85%; background: linear-gradient(90deg,#3f89c9,#85d55c);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Headless Commerce (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/Shopify-development/Future-Proof-Headless-Commerce.webp"
                            alt="Future-Proof Headless Commerce"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Future-Proof <b>Headless Commerce</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Decouple your front-end from the backend. We build lightning-fast, highly customizable headless experiences using <span style="color:#0a1628; font-weight:600;">Hydrogen &amp; Next.js</span> while keeping Shopify as your powerful engine.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Omnichannel Selling Power
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Complete Design Freedom
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

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <div class="glass-border inline-block mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp;Why Qonkar</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    What makes Qonkar <b>Different</b>
                </h2>
                <p class="mt-2 text-white">
                    We don�t just launch. We build. We scale. We convert. We retain.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <div class="space-y-4 max-w-2xl mx-auto relative text-white order-2 lg:order-1">

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Why should I choose Qonkar as my Shopify development partner?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <div class="px-6 py-4 text-white space-y-2">
                                <p class="text-white !text-white">
                                    Choosing Qonkar as your <b>Shopify development partner</b> means getting a team that
                                    combines technical mastery with business strategy. Unlike generic agencies, our
                                    <b>Shopify expert developers</b> focus on clean Liquid coding, scalable
                                    architecture,
                                    and <b>ROI-driven solutions</b> to ensure your store is built for high-volume
                                    traffic
                                    and long-term growth.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you offer custom Shopify app development for specific business
                                needs?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Yes, as a specialized <b>Shopify app development company</b>, we build bespoke
                                public and private apps tailored to your unique requirements. Whether you need
                                <b>complex API integrations</b>, custom inventory sync, or unique backend
                                functionality, our <b>Shopify app development team</b> ensures seamless
                                performance without affecting store speed.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Can you help scale my store with Shopify Plus development?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Absolutely. As an experienced <b>Shopify Plus development agency</b>, we help
                                enterprise-level brands scale efficiently. We implement advanced features like
                                <b>Checkout Extensibility</b>, automated Shopify Scripts, and <b>custom B2B
                                    channels</b>,
                                ensuring your high-volume store remains secure and high-performing.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">What makes your Shopify development services different from
                                others?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Our <b>Shopify development services</b> are data-backed and performance-oriented.
                                We don't just set up stores; we <b>engineer them for conversions</b>. From writing
                                custom Liquid code to setting up complex <b>headless e-commerce architectures</b>,
                                we prioritize technical excellence that improves both user experience and search
                                engine rankings.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do I get support from a dedicated Shopify expert developer during
                                the project?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Yes, every project is handled by a dedicated <b>Shopify expert developer</b>
                                who understands your brand�s vision. We follow an <b>agile development process</b>,
                                providing regular updates and ensuring that the final store setup is perfectly
                                aligned with your <b>business goals</b> and optimized for the global market.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center order-1 lg:order-2 w-full">
                    <img src="/images/icons/services/FAQS Shopify.webp" alt="Why Qonkar"
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
                Ready to Build Your Next Big <span class="text-[#01a0d8] font-semibold">Digital Product</span>?
            </h2>

            <p class="text-sm sm:text-base text-white/60 font-light max-w-2xl mx-auto mb-8 leading-relaxed">
                Stop guessing and start growing. We provide Custom Software, Web Development, and ROI-Driven Marketing to scale your business faster.
            </p>

            <a href="/contact-us"
                class="btn-light-theme">
                Get Your Free Proposal
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>


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






