<?php
require_once '../db-path.php'; // path relative to current file

require_once "../" . ADMIN_URL . '/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ6XTSKG0W"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-NZ6XTSKG0W');
    </script>

    <link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <meta property="og:url" content="https://qonkar.com/services/shopify" />
    <meta property="og:image" content="https://qonkar.com/images/shopify-hero-mockup.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Shopify Plus & Custom Development Agency | Qonkar" />
    <meta name="twitter:description"
        content="Scale your D2C brand with Qonkar. Experts in Custom Themes, Migration, and Speed Optimization." />
    <meta name="twitter:image" content="https://qonkar.com/images/shopify-hero-mockup.webp" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <title>Shopify Plus Agency & Custom Theme Developers | Qonkar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/styles/index.css">


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
      "@id": "https://qonkar.com/#organization",
      "name": "Qonkar Technologies",
      "url": "https://qonkar.com/",
      "logo": "https://qonkar.com/images/qonkar-logo.png"
    },
    {
      "@type": "Service",
      "serviceType": "Shopify Development Services",
      "provider": { "@id": "https://qonkar.com/#organization" },
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
              "image": "https://qonkar.com/images/services_pictures/shopify_cutomization.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Store Redesign",
              "description": "Transforming outdated stores with modern design, mobile-first UX, and performance-driven upgrades.",
              "image": "https://qonkar.com/images/services_pictures/shopify_redesign.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Theme Development",
              "description": "Bespoke themes using clean Liquid and HTML5 for unique design and cross-device compatibility.",
              "image": "https://qonkar.com/images/services_pictures/shopify_theme-developement.webp"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Shopify Management & Maintenance",
              "description": "Handling updates, security, bug fixes, and performance improvements for peak store condition.",
              "image": "https://qonkar.com/images/services_pictures/shopify_maintanance.webp"
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
          "url": "https://qonkar.com/#step1",
          "name": "Discovery & Strategy",
          "itemListElement": [{ "@type": "HowToDirection", "text": "We explore your goals and challenges, then build a clear, data-backed roadmap." }],
          "image": "https://qonkar.com/images/process-images/Discover_strategy.webp"
        },
        {
          "@type": "HowToStep",
          "url": "https://qonkar.com/#step2",
          "name": "Design & Experience",
          "itemListElement": [{ "@type": "HowToDirection", "text": "We create intuitive, brand-aligned prototypes focused on user experience." }],
          "image": "https://qonkar.com/images/process-images/Design_expreience.webp"
        },
        {
          "@type": "HowToStep",
          "url": "https://qonkar.com/#step3",
          "name": "Build & Integrate",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Our developers build powerful, scalable solutions with smart tech integrations." }],
          "image": "https://qonkar.com/images/process-images/Integration.webp"
        },
        {
          "@type": "HowToStep",
          "url": "https://qonkar.com/#step4",
          "name": "Testing & Launch",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Every feature is tested and optimized for speed, performance, and reliability." }],
          "image": "https://qonkar.com/images/process-images/testing.webp"
        },
        {
          "@type": "HowToStep",
          "url": "https://qonkar.com/#step5",
          "name": "Support & Growth",
          "itemListElement": [{ "@type": "HowToDirection", "text": "Post-launch, we monitor, improve, and scale your product for long-term success." }],
          "image": "https://qonkar.com/images/process-images/growth.webp"
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
</head>

<body>

    <header class="sticky top-5 z-50 mx-auto sm:px-4">
        <nav
            class="glass hidden lg:flex max-w-7xl mx-auto items-center justify-between px-6 py-2 rounded-full mt-4 relative">
            <div class="flex items-center">
                <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-9 w-auto"></a>
            </div>

            <ul class="flex gap-8 text-white font-medium items-center">
                <li><a href="/" class="hover:text-[var(--primary-color)]">Home</a></li>

                <li class="group py-2">
                    <button
                        class="flex items-center gap-1 hover:text-[var(--primary-color)] focus:outline-none transition-colors">
                        Services
                        <span class="material-symbols-outlined text-sm transition-transform group-hover:rotate-180"><svg
                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e3e3e3">
                                <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                            </svg></span>
                    </button>

                    <div class="absolute top-full left-0 right-0 mx-auto mt-4 w-[70vw] max-w-[1200px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 p-6 md:p-10 rounded-[15px] shadow-2xl border border-white/10"
                        style="background: rgba(15, 15, 15, 0.98); backdrop-filter: blur(25px);">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xl:gap-10">

                            <div class="flex flex-col gap-3">
                                <h4
                                    class="font-bold text-base xl:text-lg text-[#2BB5BC] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">
                                    Shopify</h4>
                                <div class="flex gap-4">
                                    <div
                                        class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                        <img src="/images/shopify_header.webp" alt="Shopify"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <ul
                                        class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                        <li><a href="/services/shopify-development"
                                                class="text-[#2BB5BC] transition">Shopify Development</a></li>
                                        <li><a href="/services/shopify-theme-design"
                                                class="hover:text-[#2BB5BC] transition">Shopify Theme Design</a></li>
                                        <li><a href="/services/shopify-store-setup"
                                                class="hover:text-[#2BB5BC] transition">Shopify Store Setup</a></li>
                                        <li><a href="/services/speed-optimization"
                                                class="hover:text-[#2BB5BC] transition">Speed optimization</a></li>
                                        <li><a href="/services/migration-services"
                                                class="hover:text-[#2BB5BC] transition">Migration Services</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <h4
                                    class="font-bold text-base xl:text-lg text-[#95C951] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">
                                    Software</h4>
                                <div class="flex gap-4">
                                    <div
                                        class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                        <img src="/images/software_header.webp" alt="Software"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <ul
                                        class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                        <li><a href="/services/web-design-and-development"
                                                class="hover:text-[#95C951] transition">Web Design & Development</a>
                                        </li>
                                        <li><a href="/services/landing-pages-design"
                                                class="hover:text-[#95C951] transition">Landing Pages Design</a></li>
                                        <li><a href="/services/saas-product-development"
                                                class="hover:text-[#95C951] transition">SaaS product development</a>
                                        </li>
                                        <li><a href="/services/automative-app"
                                                class="hover:text-[#95C951] transition">Automotive Apps </a></li>
                                        <li><a href="/services/healthcare-and-hippa-apps"
                                                class="hover:text-[#95C951] transition">Healthcare And HIPAA Apps </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </li>

                
                <li><a href="/portfolio" class="hover:text-[var(--primary-color)]">Portfolio</a></li>
            
                <li><a href="/blogs" class="hover:text-[var(--primary-color)]">Blogs</a></li>
                <li><a href="/career" class="hover:text-[var(--primary-color)]">Career</a></li>
                <li><a href="/about-us" class="hover:text-[var(--primary-color)]">About Us</a></li>
            </ul>

            <a href="/contact-us"
                class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white hover:opacity-90 transition font-medium">Contact
                Us</a>
        </nav>

        <nav
            class="glass flex lg:hidden items-center justify-between w-[92%] mx-auto px-5 py-2 rounded-full mt-2 relative">
            <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-8 w-auto"></a>
            <button id="menu-btn" class="text-white focus:outline-none text-3xl">☰</button>

            <div id="mobile-menu"
                class="hidden absolute top-full left-0 w-full mt-2 z-50 bg-[rgba(10,10,10,0.98)] backdrop-blur-xl flex-col transform scale-y-0 origin-top transition-all duration-300 rounded-2xl overflow-y-auto max-h-[85vh] border border-white/10">
                <a href="/"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>

                <div class="border-b border-white/10">
                    <button id="mobile-services-btn"
                        class="w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold flex justify-center items-center gap-1">
                        Services
                        <span id="mobile-arrow"
                            class="material-symbols-outlined text-sm transition-transform text-lg font-bold"><svg
                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e3e3e3">
                                <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                            </svg></span>
                    </button>
                    <div id="mobile-services-menu" class="hidden flex-col bg-white/5 pb-4">
                        <div class="py-2 border-b border-white/10">
                            <p class="text-[#2BB5BC] text-[11px] font-bold uppercase tracking-widest py-2 text-center">
                                Shopify</p>
                            <a href="/services/shopify-development"
                                class="block py-2 text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Development</a>
                            <a href="/services/shopify-theme-design"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Theme Design</a>
                            <a href="/services/shopify-store-setup"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Store Setup</a>
                            <a href="/services/speed-optimization"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Speed
                                optimization</a>
                            <a href="/services/migration-services"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Migration
                                Services</a>

                        </div>
                        <div class="py-2">
                            <p class="text-[#95C951] text-[11px] font-bold uppercase tracking-widest py-2 text-center">
                                Software</p>
                            <a href="/services/web-design-and-development"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Web
                                Design & Development</a>
                            <a href="/services/landing-pages-design"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Landing
                                Pages Design</a>
                            <a href="/services/saas-product-development"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Saas
                                Product Development</a>
                            <a href="/services/automative-app"
                                class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative
                                App </a>
                            <a href="/services/healthcare-and-hippa-apps"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare
                                & HIPPA App </a>

                        </div>

                    </div>
                </div>

                

                <a href="/blogs"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
                <a href="/career"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
                <a href="/about-us"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About
                    Us</a>
                <a href="/contact-us"
                    class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact
                    Us</a>
            </div>
        </nav>
        <div style="float: right; margin-top: 10px; margin-right: 10px;">
            <div id="google_translate_element"></div>
        </div>
    </header>

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
                            class="hero-btn inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--secondary-color)] hover:text-white transition">
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
        <section
            class="mt-4 bg-[var(--body-bg)] flex flex-col items-center justify-center h-[30vh] overflow-hidden relative">
            <h2 class="text-white text-2xl font-light mb-10 text-center">
                Helping 50+ Global Brands </h2>

            <div class="relative overflow-hidden w-full">
                <div class="flex items-center animate-scroll-horizontal space-x-18 gap-20 ">
                    <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                    <img src="/images/company-logos/quest.webp"
                        alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                    <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board"
                        class="w-20 object-contain" />
                    <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan"
                        class="w-20 object-contain" />
                    <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                        class="w-14 object-contain" />
                    <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
                    <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />

                    <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                    <img src="/images/company-logos/quest.webp"
                        alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                    <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board"
                        class="w-20 object-contain" />
                    <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan"
                        class="w-20 object-contain" />
                    <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                        class="w-14 object-contain" />
                    <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
                    <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />
                    <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                        class="w-14 object-contain" />
                    <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                    <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance"
                        class="h-8 object-contain" />
                    <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
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
                        <img src="/images/shopify development.png" alt="Shopify Development" class="w-full h-auto relative z-10 rounded-3xl">
                    </div>

                    <!-- Floating stat card 1 -->
                    <div class="absolute -bottom-4 -left-4 sm:left-4 z-20 rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3"
                        style="background:#fff; border-left: 4px solid #3f89c9; min-width:160px;">
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
                    <div class="absolute -top-4 -right-4 sm:right-4 z-20 rounded-2xl shadow-xl px-5 py-3 flex items-center gap-3"
                        style="background:#fff; border-left: 4px solid #85d55c; min-width:160px;">
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
                        <a href="/contact-us"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-semibold text-white text-sm transition-all duration-300 hover:scale-105 hover:shadow-lg"
                            style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                            Start Your Project
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#services-detail"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 hover:scale-105"
                            style="background:#f3f4f6; color:#0a1628; border: 1.5px solid #e5e7eb;">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl  text-center ">
        <div class="container mx-auto flex flex-col items-center gap-3">

            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OUR PROCESS</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Our <b>Development Strategies</b>
            </h2>

            <p class="leading-none text-white-300 font-light leading-tight max-w-2xl text-sm md:text-base">
                We believe in keeping things simple and transparent. At Qonkar, we don't confuse you with technical
                jargon. Our streamlined process ensures that your project moves smoothly from the first meeting to the
                final launch, delivering high-quality results on time and within budget.
            </p>

            <div class="w-full mt-10">
                <div
                    class="flex gap-2 overflow-x-auto md:overflow-visible md:flex-nowrap snap-x snap-mandatory no-scrollbar">

                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Discover_strategy.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">01</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Discovery & Strategy</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    We explore your goals and challenges, then build a clear, data-backed roadmap.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full  bg-white text-[var(--secondary-color)]  transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Design_expreience.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">02</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Design & Experience</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    We create intuitive, brand-aligned prototypes
                                    focused on user experience. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem]  flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Integration.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">03</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Build & Integrate</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Our developers build powerful, scalable solutions
                                    with smart tech integrations. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem]   flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px]  text-white bg-[#227d8d] transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/testing.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">04</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Testing & Launch</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Every feature is tested and optimized for speed,
                                    performance, and reliability. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">


                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/growth.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">05</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Support & Growth</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Post-launch, we monitor, improve, and scale your
                                    product for long-term success. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8" style="background: #f8fafc;">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                    &#9679; &nbsp;Qonkar E-Commerce Excellence
                </span>
                <h2 class="text-3xl md:text-5xl font-light mt-3" style="color: #0a1628; line-height:1.15;">
                    End-to-End <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">Shopify Solutions</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base md:text-lg font-light" style="color:#4b5563;">
                    From custom theme architecture to complex headless integrations, we build e-commerce ecosystems that dominate the market.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="flex flex-col gap-8">

                <!-- Card 1: Bespoke Storefront Architecture -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shopify Theme Development"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shopify Plus Enterprise"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Custom Shopify Apps"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="E-Commerce Migration"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Speed Optimization"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Headless Commerce"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
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
                    class="inline-flex items-center gap-2 px-8 py-4 rounded-full font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c);">
                    Discuss Your Project With Us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

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
                <span class="flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold" style="background:rgba(34,197,94,0.1); border:1px solid rgba(34,197,94,0.3); color:#22c55e;">
                    <span class="pulse-dot"></span> 4 active services
                </span>
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
                        <div class="svc-stat-val">4.9★</div>
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
                        security, bug fixes, and performance improvements — ensuring uninterrupted operations and a flawless
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
                See all services
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

    <section class="w-full py-16 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 space-y-4">
                    <div class="glass-border inline-block mb-4">
                        <div class="glass-background">
                            <div class="glass text-sm font-light">
                                <p>&#9679; &nbsp;STREAMLING</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Performance & <b>Optimization</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                        Built for Speed. Engineered for Sales. In the US & UK markets, a 1-second delay costs 7% in
                        conversions. We optimize your store’s code, structure, and speed to ensure instant loading times
                        and frictionless checkout experiences.
                    </p>
                </div>

                <div class="md:w-1/2 flex flex-col gap-3">
                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                         border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_optimize.webp"
                                class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>
                        <img src="/images/icons/services/05_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/05_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Technical Speed Optimization</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                We achieve 90+ Google Mobile Scores by minifying code, compressing assets, and
                                implementing lazy loading. Faster load times mean lower bounce rates and higher Google
                                rankings.
                            </p>
                        </div>
                    </div>

                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                            border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_CRO.webp" class="w-full h-full object-cover"
                                alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/07_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/07_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Conversion Rate Optimization (CRO)</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                Turn traffic into revenue. We analyze US/UK user behavior using heatmaps and A/B testing
                                to optimize your UI, reduce cart abandonment, and maximize purchases.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 flex flex-col gap-3 order-2 md:order-1">
                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                         border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_strategy.webp"
                                class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/05_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/05_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Scalable Growth Strategy</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                Data-backed strategies to boost revenue. We implement smart upsells, cross-sells, and
                                backend automation to increase your profit margins per sale.
                            </p>
                        </div>
                    </div>

                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                          border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_marketing.webp"
                                class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/06_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/06_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Retention & Loyalty Marketing</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                Turn one-time buyers into lifelong fans. We build automated Email/SMS flows (Klaviyo)
                                and loyalty programs that drive repeat purchases and sustainable growth.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 space-y-4 order-1 md:order-2">
                    <div class="glass-border inline-block mb-4">
                        <div class="glass-background">
                            <div class="glass text-sm font-light">
                                <p>&#9679; &nbsp;ADVANCEMENT</p>
                            </div>
                        </div>
                    </div>
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
                    We don’t just launch. We build. We scale. We convert. We retain.
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
                                who understands your brand’s vision. We follow an <b>agile development process</b>,
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




    <section class="w-full flex justify-center items-center py-4  mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-6 md:p-12 text-center text-white rounded-[30px] border-[4px] shadow-lg" style="
      border: 2px solid rgba(56, 228, 174, 0.53);
      background: linear-gradient(90deg, rgba(56, 228, 174, 0.61) 0%, rgba(7, 152, 173, 0.75) 100%),
                  linear-gradient(0deg, rgba(0, 0, 0, 0.58) 0%, rgba(0, 0, 0, 0.58) 100%),
                  url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d') lightgray 0px -374.163px / 100% 280.523% no-repeat;
      box-shadow: 0 15px 15px 3px rgba(56, 228, 174, 0.12);">
            <h1 class="text-2xl sm:text-3xl md:text-3xl font-light mb-3">
                Ready to <strong>Build</strong> Your Next Big<strong> Digital Product</strong>?
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 text-white font-light">
                Stop guessing and start growing. We provide Custom Software, Web Development, and ROI-Driven Marketing
                to scale your business faster.
            </p>

            <a href="/contact-us"
                class="inline-flex rounded-full items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[var(--secondary-color)] font-semibold border border-white transition-all duration-300 hover:bg-[var(--secondary-color)] hover:text-white">
                Get Your Free Proposal
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
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



            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-12">
                
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

                <div class="flex flex-col sm:flex-row items-start gap-10 md:gap-12">
                    <div class="flex flex-col md:items-start md:text-left mb-8">
                        <h2 class="text-xl font-bold mb-2">Registered By</h2>
                        <div class="flex items-center gap-10 h-20">
                            <a href="https://techdestination.com/" target="_blank">
                                <img src="/images/company-logos/PSEB_black.webp" alt="Pakistan software Export Board" class="w-14 object-contain" />
                            </a>
                            
                            <a href="https://www.secp.gov.pk/" target="_blank">
                                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-16 object-contain" />
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col md:items-start md:text-left mb-8">
                        <h2 class="text-xl font-bold mb-2">Trusted By</h2>
                        <div class="flex items-center h-20">
                            <a href="https://techdestination.com/" target="_blank">
                                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-32 object-contain" />
                            </a>
                        </div>
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


    <script src="/script/FAQ.js"></script>
    <script src="/script/navbar.js"></script>
</body>

</html>
