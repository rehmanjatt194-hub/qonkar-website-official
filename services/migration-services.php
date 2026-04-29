<?php
// ✅ FIX 1: PHP Logic Moved to Top
require_once '../db-path.php'; // path relative to current file
require_once "../".ADMIN_URL.'/database_config.php';

// Dynamic Canonical Tag
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = str_replace('.php', '', $request_uri);
$request_uri = rtrim($request_uri, '/');
$finalCanonical = "https://qonkar.com" . $request_uri;
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
    
    <link rel="canonical" href="<?php echo $finalCanonical; ?>" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Migrate to Shopify with zero data loss and 100% SEO preservation. Qonkar specializes in WooCommerce, Magento, and BigCommerce to Shopify Plus migrations." />

    <meta name="keywords"
        content="Shopify Migration Service, WooCommerce to Shopify, Magento to Shopify Plus, Replatforming Experts, Shopify SEO Migration, Zero Downtime Migration" />

    <meta name="author" content="Qonkar Technologies" />

    <meta property="og:title" content="Shopify Migration Services | Zero Data Loss & Safe SEO Transfer" />
    <meta property="og:description" content="Move your store to Shopify without losing traffic or sales. We handle enterprise migrations from Magento, WooCommerce, and custom platforms." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com/services/migration-services" />
    <meta property="og:image" content="https://qonkar.com/images/migration-hero-mockup.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Shopify Migration Services | Zero Data Loss & Safe SEO Transfer" />
    <meta name="twitter:description" content="Move your store to Shopify without losing traffic or sales. We handle enterprise migrations from Magento, WooCommerce, and custom platforms." />
    <meta name="twitter:image" content="https://qonkar.com/images/migration-hero-mockup.webp" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <title>Shopify Migration & Replatforming Experts | Qonkar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="/styles/index.css">
    
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
</head>

<body>

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
                                    <li><a href="/services/migration-services" class="text-[#2BB5BC] transition">Migration Services</a></li>
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
                                    <li><a href="/services/automative-app" class="hover:text-[#95C951] transition">Automotive Apps </a></li>
                                    <li><a href="/services/healthcare-and-hippa-apps" class="hover:text-[#95C951] transition">Healthcare And HIPAA Apps </a></li>
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
                        <a href="/services/migration-services" class="block py-2 text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Migration Services</a>                        

                    </div>
                    <div class="py-2">
                        <p class="text-[#95C951] text-[11px] font-bold uppercase tracking-widest py-2 text-center">Software</p>
                        <a href="/services/web-design-and-development" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Web Design & Development</a>
                        <a href="/services/landing-pages-design" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Landing Pages Design</a>
                        <a href="/services/saas-product-development" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Saas Product Development</a>
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automotive App </a>
                        <a href="/services/healthcare-and-hippa-apps" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare & HIPPA App </a>                        

                    </div>
                    
                </div>
            </div>

            
            
            <a href="/blogs" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>

    <div class="min-h-screen flex flex-col mt-6  md:mt-4   ">

        <section class="relative w-[95vw] mx-auto px-4 sm:px-6 lg:px-8 min-h-[75vh] rounded-lg overflow-hidden flex items-center">
            <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

            <div class="absolute inset-0 hero-pattern"></div>

            <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-start w-full px-10 sm:px-10 lg:px-9 py-10">

                <div class="text-left text-white space-y-6 order-1">
                    <div class="hidden glass px-3 py-2 rounded-lg sm:rounded-full text-xs sm:text-sm text-white inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">
                        <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">&#9679; Migration</span>
                        <span>Shopify Experts</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                        Expert Shopify Migration Services for Seamless Data Transfer
                    </h1>

                    <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                       Don’t risk your rankings or data. As migrate to shopify experts, Qonkar ensures a smooth transition with zero downtime. From magento to shopify migration service to enterprise-level shifts, we handle your products, customers, and SEO with 100% precision.
                    </p>

                    <div class="flex items-center gap-4 mt-4">
                        <a href="/contact-us" class="hero-btn inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--secondary-color)] hover:text-white transition">
                            Start Safe Migration
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end order-2">
                    <img src="/images/qonkar-wordpress-to-shopify-migration-services.webp" alt="Qonkar services showing a seamless migration from a WordPress website to a high-performing Shopify store with excellent PageSpeed scores."
                        class="max-h-[40vh] sm:max-h-[50vh] md:max-h-[65vh] object-contain">
                </div>
            </div>
        </section>
        
        <section class="mt-4 bg-[var(--body-bg)] flex flex-col items-center justify-center h-[30vh] overflow-hidden relative">
        <h2 class="text-white text-2xl font-light mb-10 text-center">
           Trusted by Top Brands </h2>

        <div class="relative overflow-hidden w-full">
            <div class="flex items-center animate-scroll-horizontal space-x-18 gap-20 ">
                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="w-20 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-20 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                    class="w-14 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />

                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="w-20 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-20 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                    class="w-14 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />
            </div>

        </div>
    </section>
    </div>

    <section class=" bg-[var(--body-bg)] py-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/ecommerce-migration-wordpress-to-shopify.webp" alt="Illustration of migrating an e-commerce store from WordPress to Shopify resulting in improved website speed." class="w-full max-w-md h-auto" loading="lazy">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">

                <div class="glass-border w-[150px]  mx-auto lg:mx-0">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center">
                            <p> &#9679; SEO SAFETY </p>
                        </div>
                    </div>
                </div>


                <h2 class="text-3xl md:text-4xl  text-white">
                    Protect Your <b>Rankings</b> & <b>Revenue</b>
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  Migration is risky if done wrong. Broken links mean lost customers and tanked Google rankings. Our migration protocol ensures every URL is redirected, every image is optimized, and your domain authority stays intact.
                </p>

            </div>
        </div>
    </section>

    <section class="relative py-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl  text-center ">
        <div class="container mx-auto flex flex-col items-center gap-3">

            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;MIGRATION PROTOCOL</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Seamless <b>Transition</b> Process
            </h2>

            <p class="leading-none text-white-300 font-light leading-tight max-w-2xl text-sm md:text-base">
                We handle the heavy lifting. Our 5-step process ensures a smooth switch with zero business interruption.
            </p>

            <div class="w-full mt-10">
                <div class="flex gap-2 overflow-x-auto md:overflow-visible md:flex-nowrap snap-x snap-mandatory no-scrollbar">

                    <div class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Discover_strategy.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">01</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Data Audit & Backup</h3>
                                <p class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    We audit your current platform and create a secure backup of all products, customers, and orders.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button class="w-10 h-10 flex items-center justify-center rounded-full  bg-white text-[var(--secondary-color)]  transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Design_expreience.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">02</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Design Replication</h3>
                                <p class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500"> We migrate your brand's look and feel to Shopify, or upgrade it with a modern custom theme. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col p-6 h-[20rem]  flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Integration.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">03</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Secure Data Transfer</h3>
                                <p class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500"> Migrating products, variants, high-res images, and customer history securely. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col p-6 h-[20rem]   flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px]  text-white bg-[#227d8d] transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/testing.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">04</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">SEO 301 Redirects</h3>
                                <p class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500"> We map every old URL to the new Shopify link, preserving your Google ranking power. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px]text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/growth.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">05</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Testing & Handover</h3>
                                <p class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500"> Rigorous testing of checkout, payments, and data accuracy before flipping the switch. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
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
    
    
    
    
    
    
    <div class="container mx-auto flex flex-col items-center gap-3">
    <div class="glass-border inline-block mb-2">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OUR Services</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Our <b>Development Strategies</b>
            </h2>
            </div>
    <section
        class="relative bg-[var(--body-bg)] text-white py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-hidden">

        <div class="relative text-center mb-24 z-10">
            <div class="glass-border inline-flex items-center gap-3 mb-8">
                <div class="glass-background">
                    <div class="glass flex items-center gap-3 text-sm font-light uppercase tracking-wide">
                        &#9679; &nbsp; Qonkar Migration Excellence
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-5xl font-light tracking-tight mb-6">
                Seamless <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] font-bold">Platform Migration</span> & Scaling
            </h2>
            <p class="max-w-2xl mx-auto text-white/90 text-lg md:text-xl font-light">We help businesses migrate from legacy systems to modern platforms like Shopify and custom architectures without losing data or SEO rank.</p>
        </div>

        <div class="relative flex flex-col md:flex-row items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Risk-Free Data Migration"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">Risk-Free <b>Data Migration</b>
                </h3>
                <p class="text-white/90 text-lg leading-relaxed mb-3 font-light">
                    Your data is your most valuable asset. Our
                    <a href="/contact-us"
                        class="text-[var(--secondary-color)] font-medium border-b border-[var(--secondary-color)]/30 hover:border-[var(--secondary-color)] transition-colors pb-0.5">migration experts</a>
                    ensure 100% data integrity for products, customer records, and order history while preserving your SEO ranking through expert 301 mapping.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-3 text-gray-300 font-light"><svg
                            class="w-6 h-6 text-[var(--secondary-color)]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg> Full Order History Sync</li>
                    <li class="flex items-center gap-3 text-gray-300 font-light"><svg
                            class="w-6 h-6 text-[var(--secondary-color)]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg> SEO Rank Preservation</li>
                    <li class="flex items-center gap-3 text-gray-300 font-light"><svg
                            class="w-6 h-6 text-[var(--secondary-color)]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg> Secure Customer Data Handling</li>
                </ul>
            </div>
        </div>

        <div class="relative flex flex-col md:flex-row-reverse items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Legacy to Cloud Transformation"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">Legacy to <b>Cloud Transformation</b>
                </h3>
                <p class="text-white/90 text-lg leading-relaxed mb-3 font-light">
                    Modernize your backend. We transform legacy
                    <a href="/contact-us"
                        class="text-[var(--primary-color)] font-medium border-b border-[var(--primary-color)]/30 hover:border-[var(--primary-color)] transition-colors pb-0.5">infrastructure</a>
                    into scalable cloud-native solutions that reduce maintenance costs and improve operational agility.
                </p>
                <div class="grid grid-cols-2 gap-6 pt-6 border-t border-white/10">
                    <div>
                        <h4
                            class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] mb-1">
                            Scalable</h4>
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Cloud Architecture</p>
                    </div>
                    <div>
                        <h4
                            class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] mb-1">
                            Zero</h4>
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Downtime Moves</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col md:flex-row items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Headless Commerce Transition"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">Headless <b>Commerce Transition</b>
                </h3>
                <p class="text-white/90 text-lg leading-relaxed mb-3 font-light">
                    Future-proof your storefront. Our
                    <a href="/contact-us"
                        class="text-[var(--secondary-color)] font-medium border-b border-[var(--secondary-color)]/30 hover:border-[var(--secondary-color)] transition-colors pb-0.5">headless experts</a>
                    transition you to a React/Next.js frontend powered by a high-performance API for lightning-fast speeds and total design freedom.
                </p>
                <div class="flex flex-wrap gap-3 mt-4">
                    <span
                        class="px-5 py-2 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold text-gray-300">Next.js</span>
                    <span
                        class="px-5 py-2 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold text-gray-300">GraphQL</span>
                    <span
                        class="px-5 py-2 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold text-gray-300">Headless CMS</span>
                    <span
                        class="px-5 py-2 rounded-xl bg-white/5 border border-white/10 text-sm font-semibold text-gray-300">Fast API</span>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col md:flex-row-reverse items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1551288049-bb14832f287a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Third-Party App Integration Sync"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">App <b>Integration Sync</b></h3>
                <p class="text-white/90 text-lg leading-relaxed mb-3 font-light">
                    Ensure business continuity. We map and sync all your essential third-party tools—ERPs, CRMs, and marketing platforms—so they work perfectly on your new platform from Day 1.
                </p>
                <div class="bg-black/30 p-5 rounded-2xl border border-white/5 flex items-center justify-between">
                    <div class="text-white/90 font-semibold text-sm">Legacy ERP</div>
                    <div class="flex-1 px-4 flex items-center justify-center">
                        <div
                            class="h-[2px] w-full bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--secondary-color)] relative">
                            <svg class="w-6 h-6 text-[var(--secondary-color)] absolute right-[-5px] top-1/2 -translate-y-1/2"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] text-white font-bold py-1.5 px-4 rounded-lg text-sm">
                        Modern Sync</div>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col md:flex-row items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Speed and Performance Audits"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">Speed & <b>Performance Audits</b></h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-3 font-light">
                    Migrate to a faster future. We optimize every line of code during the move, ensuring your new site smashes Core Web Vitals and delivers an elite user experience.
                </p>
                <div class="space-y-5">
                    <div>
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span class="text-gray-300 font-light">Performance Score</span>
                            <span class="text-[var(--secondary-color)]">98/100</span>
                        </div>
                        <div class="w-full bg-gray-800 rounded-full h-2">
                            <div class="bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] h-2 rounded-full"
                                style="width: 98%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span class="text-gray-300 font-light">Load Time Improvement</span>
                            <span class="text-[var(--primary-color)]">-40%</span>
                        </div>
                        <div class="w-full bg-gray-800 rounded-full h-2">
                            <div class="bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] h-2 rounded-full"
                                style="width: 90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative flex flex-col md:flex-row-reverse items-stretch gap-10 mb-10 z-10">
            <div class="w-full md:w-1/2 relative group rounded-3xl overflow-hidden shadow-none border border-white/10">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[var(--body-bg)] via-transparent to-transparent z-10">
                </div>
                <img src="https://images.unsplash.com/photo-1551288049-bb14832f287a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Post-Migration Growth Support"
                    class="relative w-full h-full object-cover transition duration-700 group-hover:scale-105 min-h-[400px] rounded-3xl">
            </div>
            <div
                class="w-full md:w-1/2 bg-white/[0.02] border border-white/5 p-8 md:p-10 rounded-3xl backdrop-blur-xl transition duration-500 flex flex-col justify-center min-h-[400px]">
                <h3 class="text-3xl md:text-3xl font-light mb-2 leading-tight">Post-Migration <b>Growth Support</b>
                </h3>
                <p class="text-gray-400 text-lg leading-relaxed mb-3 font-light">
                    We stay with you. Our team provides ongoing SEO monitoring, UX refinements, and feature expansion to ensure your new platform continues to drive revenue and scale.
                </p>
                <ul class="space-y-2 mb-6">
                    <li class="flex items-center gap-3 text-gray-300 font-light"><svg
                            class="w-6 h-6 text-[var(--secondary-color)]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg> SEO Rank Monitoring</li>
                    <li class="flex items-center gap-3 text-gray-300 font-light"><svg
                            class="w-6 h-6 text-[var(--secondary-color)]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg> Performance Refinement</li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-16 relative z-10">
            <a href="/contact-us"
                class="hero-btn inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white text-[var(--primary-color)] font-semibold border border-white transition-all duration-300 hover:bg-[var(--primary-color)] hover:text-white shadow-none">
                Start Your Migration Journey
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>

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
                            <span class="text-white">Why should I choose Qonkar as my Shopify development partner?    </span>
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
                                        Choosing Qonkar as your <b>Shopify development partner</b> means getting a team that 
                                        combines technical mastery with business strategy. Unlike generic agencies, our 
                                        <b>Shopify expert developers</b> focus on clean Liquid coding, scalable architecture, 
                                        and <b>ROI-driven solutions</b> to ensure your store is built for high-volume traffic 
                                        and long-term growth.
                                    </p>
                                </div>
                            </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you offer custom Shopify app development for specific business needs?</span>
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
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-white !text-white">
                                Absolutely. As an experienced <b>Shopify Plus development agency</b>, we help 
                                enterprise-level brands scale efficiently. We implement advanced features like 
                                <b>Checkout Extensibility</b>, automated Shopify Scripts, and <b>custom B2B channels</b>, 
                                ensuring your high-volume store remains secure and high-performing.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">What makes your Shopify development services different from others?</span>
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
                            <span class="text-white">Do I get support from a dedicated Shopify expert developer during the project?</span>
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
                                Yes, every project is handled by a dedicated <b>Shopify expert developer</b> 
                                who understands your brand’s vision. We follow an <b>agile development process</b>, 
                                providing regular updates and ensuring that the final store setup is perfectly 
                                aligned with your <b>business goals</b> and optimized for the global market.
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

    <section class="w-full flex justify-center items-center py-4  mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-6 md:p-12 text-center text-white rounded-[30px] border-[4px] shadow-lg" style="
      border: 2px solid rgba(56, 228, 174, 0.53);
      background: linear-gradient(90deg, rgba(56, 228, 174, 0.61) 0%, rgba(7, 152, 173, 0.75) 100%),
                  linear-gradient(0deg, rgba(0, 0, 0, 0.58) 0%, rgba(0, 0, 0, 0.58) 100%),
                  url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d') lightgray 0px -374.163px / 100% 280.523% no-repeat;
      box-shadow: 0 15px 15px 3px rgba(56, 228, 174, 0.12);">
            <h1 class="text-2xl sm:text-3xl md:text-3xl font-light mb-3">
                Ready to <strong>Move</strong> to Shopify?
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 text-white font-light">
                Upgrade your platform without the headaches. Safe, secure, and fast migration.
            </p>

            <a href="/contact-us"
                class="inline-flex rounded-full items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[var(--secondary-color)] font-semibold border border-white transition-all duration-300 hover:bg-[var(--secondary-color)] hover:text-white">
                Start My Migration
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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-8 mb-4">
                
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
                        <li><a href="/services/automative-app" class="hover:underline">Automotive App</a></li>
                        <li><a href="/services/healthcare-and-hippa-apps" class="hover:underline">Healthcare And HIPAA Apps</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Branding & Performance</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="/services/branding-and-digital-marketing" class="hover:underline">Branding And Digital Marketing</a></li>
                        <li><a href="/services/seo-services" class="hover:underline">Seo Services</a></li>
                        <li><a href="/services/ppc-and-paid-advertising" class="hover:underline">PPC & Paid Advertising</a></li>
                        <li><a href="/services/organic-content-strategy" class="hover:underline">Organic Content Strategy</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">About</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="https://qonkar.com" class="hover:underline">Qonkar Technologies (PVT) Ltd.</a></li>
                        <li><a href="https://qonkar.com/portfolio" class="hover:underline">Portfolio</a></li>
                        <li><a href="https://qonkar.com/career" class="hover:underline">Careers</a></li>
                        <li><a href="https://qonkar.com/blogs" class="hover:underline">Blogs and News</a></li>
                        <li><a href="https://qonkar.com/privacy-policy" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="https://qonkar.com/terms-of-service" class="hover:underline">Terms of Services</a></li>
                        <li><a href="https://qonkar.com/help-and-support" class="hover:underline">Help and Support</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-4">Trusted by</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="https://www.microsoft.com/en-us" class="hover:underline" target="_blank">Microsoft</a></li>
                        <li><a href="https://www.shopify.com/" class="hover:underline" target="_blank">Shopify</a></li>
                        <li><a href="https://www.upwork.com/" class="hover:underline" target="_blank">Upwork</a></li>
                        <li><a href="https://www.fiverr.com/" class="hover:underline" target="_blank">Fiverr</a></li>
                        <li><a href="https://mailchimp.com/" class="hover:underline" target="_blank">Mailchimp</a></li>
                        <li><a href="https://www.hubspot.com/" class="hover:underline" target="_blank">HubSpot</a></li>
                        <li><a href="https://ads.google.com/" class="hover:underline" target="_blank">Google Ads</a></li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                
                <div class="flex flex-col md:items-start md:text-left mb-8">
                    <h2 class="text-xl font-bold mb-2">Location</h2>
                    <div class="flex flex-wrap justify-start gap-4 font-light">
                        <p>UK</p>
                        <p class="text-white/30">|</p>
                        <p>Pakistan</p>
                    </div>
                    <div class="border-t border-white/30 my-4 w-full md:w-[25vw]"></div>
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

            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4 border-t border-white/20 pt-4">
                <p class="text-sm">&copy; Qonkar 2025. All rights reserved</p>
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
