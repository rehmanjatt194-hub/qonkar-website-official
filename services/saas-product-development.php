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
        content="Enterprise SaaS Development Agency. We build scalable, multi-tenant B2B & B2C SaaS platforms with secure architecture and subscription billing integration." />

    <meta name="keywords"
        content="SaaS Product Development, B2B SaaS Agency, MVP Development Service, Multi-Tenant Architecture, Cloud Native App Development, Microservices Experts" />

    <meta name="author" content="Qonkar Technologies" />

    <meta property="og:title" content="SaaS Product Development & Engineering | Qonkar" />
    <meta property="og:description" content="From MVP to IPO. We engineer cloud-native SaaS platforms that scale securely and drive recurring revenue." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/services/saas-product-development" />
    <meta property="og:image" content="/images/saas-hero-mockup.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SaaS Product Development & Engineering | Qonkar" />
    <meta name="twitter:description" content="From MVP to IPO. We engineer cloud-native SaaS platforms that scale securely and drive recurring revenue." />
    <meta name="twitter:image" content="/images/saas-hero-mockup.webp" />

    
    
    

    <title>SaaS Product Development & Engineering Agency | Qonkar</title>

    
    
    
    
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
                        <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">&#9679; Enterprise</span>
                        <span>Product Engineering</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                        Scale Your SaaS from <br class="hidden sm:block"> <b>MVP</b> to <b>Enterprise.</b>
                    </h1>

                    <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                        We build cloud-native, multi-tenant SaaS platforms engineered for growth. Secure, scalable, and investor-ready architecture that turns your vision into recurring revenue.
                    </p>

                    <div class="flex items-center gap-4 mt-4">
                        <a href="/contact-us" class="hero-btn btn-light-theme">
                            Launch Your Product
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end order-2">
                    <img src="/images/hero-section/Copy of Purple and Black Gradient Modern Minimalist Pitch Deck App Presentation.webp" alt="Benefits of Qonkar SaaS product development services including agile strategy and transparent reporting."
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
                <img src="/images/hero-section/hero.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">

                <div class="glass-border w-[150px]  mx-auto lg:mx-0">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center">
                            <p> &#9679; PHILOSOPHY </p>
                        </div>
                    </div>
                </div>


                <h2 class="text-3xl md:text-4xl  text-white">
                    Built for <b>Growth</b>. Engineered for <b>Speed</b>.
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  Building a SaaS is hard. Scaling it is harder. We specialize in Multi-Tenant Architecture that allows you to onboard thousands of users without rewriting code. Secure, compliant, and ready for global markets.
                </p>

            </div>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/our-process.php'; ?>
    
    
    
    
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
        <div class="text-center mb-12   bg-no-repeat bg-[length:40%] 
                bg-[url('/images/background_curve.svg')] 
                bg-[center_top_60px]">
            <h2 class="text-sm uppercase font-light text-white mb-6">
                Our SaaS Services:
            </h2>
            <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; CORE CAPABILITIES</div></div></div>
            <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                SaaS Engineering <b>Services</b>
            </h2>
            <p class=" font-light leading-relaxed text-white w-[75%] mx-auto">
                We handle the complete product lifecycle. From backend logic to frontend magic.
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
                        Multi-Tenant Architecture
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We build robust systems where a single instance serves multiple customers (tenants) securely, maximizing resource efficiency and scalability.
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
                        Subscription Billing Integration
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Seamlessly integrate Stripe, Paddle, or Chargebee to handle recurring payments, tiered pricing, and automated invoicing.
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
                        API First Design
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We build powerful RESTful and GraphQL APIs that allow your SaaS to connect with third-party tools, mobile apps, and enterprise systems.
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
                        Data Security & Compliance
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Enterprise-grade security standards (SOC2, GDPR, HIPAA ready) to ensure your customer data is safe and your platform is trustworthy.
                    </p>
                </div>
        </div>

    </section>

    <section class="w-full py-16 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 space-y-4">
                    <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; CLOUD & INFRASTRUCTURE</div></div></div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Cloud-Native <b>Excellence</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                       We build on AWS, Google Cloud, and Azure using Docker and Kubernetes. This ensures your SaaS can auto-scale instantly to handle traffic spikes without crashing.
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
                            <h3 class="text-2xl font-light mb-2 text-white">React & Next.js</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                Blazing fast, SEO-friendly frontends that provide a smooth, app-like experience for your users.
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
                            <h3 class="text-2xl font-light mb-2 text-white">Node.js & Python</h3>
                            <p class="text-sm font-light leading-relaxed text-slate-400">
                                High-performance backend technologies perfect for real-time data processing and AI integration.
                            </p>
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
                    &#9679; &nbsp;Qonkar SaaS Engineering
                </span>
                <h2 class="text-3xl md:text-5xl font-light mt-3" style="color: #0a1628; line-height:1.15;">
                    Scalable <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">SaaS Product Engineering</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base md:text-lg font-light" style="color:#4b5563;">
                    We build modern, multi-tenant software-as-a-service applications with robust security, high availability, and subscription billing.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="flex flex-col gap-8">

                <!-- Card 1: Multi-Tenant Architecture -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/Multi-Tenant-Architecture.webp"
                            alt="Multi-Tenant Architecture"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Multi-Tenant <b>Architecture</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Isolate user data securely. We build database-level and app-level multi-tenancy. As your dedicated <a href="/contact-us" style="color:#3f89c9; font-weight:600; border-bottom:1px solid #3f89c9;">SaaS engineering partner</a>, we focus on modular scaling.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Schema-based tenant isolation
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Shared / Dedicated database setups
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Custom Subdomains and DNS mapping
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Enterprise-Grade Security (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/Enterprise-Grade-Security.webp"
                            alt="Enterprise-Grade Security"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Enterprise-Grade <b>Security</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Protect user accounts and sensitive business data. We enforce role-based access control (RBAC), multi-factor authentication (MFA), and follow <a href="/contact-us" style="color:#2fadc3; font-weight:600; border-bottom:1px solid #2fadc3;">OWASP top 10 guidelines</a>.
                        </p>
                        <div class="grid grid-cols-2 gap-6 pt-5" style="border-top: 1px solid #f0f9ff;">
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">100%</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Compliance Rate</p>
                            </div>
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">&lt;24h</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Vulnerability SLA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Cloud & DevOps Stack -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/Cloud-&-DevOps-Stack.webp"
                            alt="Cloud & DevOps Stack"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Cloud &amp; <b>DevOps Stack</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Deploy on high-performance infrastructure. We set up CI/CD pipelines, containerize applications, and manage <a href="/contact-us" style="color:#85d55c; font-weight:600; border-bottom:1px solid #85d55c;">infrastructure as code</a>.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0f9ff; color:#3f89c9; border:1px solid #bae6fd;">AWS / Google Cloud</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0;">Docker / K8s</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#faf5ff; color:#7c3aed; border:1px solid #e9d5ff;">Terraform</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#fff7ed; color:#c2410c; border:1px solid #fed7aa;">GitHub Actions</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Subscription & Billing Integration (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/Subscription-&-Billing-Integration.webp"
                            alt="Subscription & Billing Integration"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Subscription &amp; <b>Billing Integration</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Implement flexible monetization. We design billing engines, support coupon systems, and integrate reliable subscription payments.
                        </p>
                        <div class="flex items-center gap-4 p-4 rounded-2xl" style="background:#f0f9ff; border:1px solid #bae6fd;">
                            <span class="font-semibold text-sm" style="color:#374151;">Legacy Billing</span>
                            <div class="flex-1 flex items-center justify-center">
                                <div class="h-0.5 flex-1 rounded-full" style="background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                <svg class="w-5 h-5 mx-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#2fadc3" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1.5 rounded-lg font-bold text-sm text-white" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">Stripe Billing Engine</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: High Availability & Auto-Scaling -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/High-Availability-&-Auto-Scaling.webp"
                            alt="High Availability & Auto-Scaling"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">High Availability <b>&amp; Auto-Scaling</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Your product is always online. We design architecture that handles rapid traffic surges automatically, protecting your business from downtime.
                        </p>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Uptime Guarantee</span>
                                    <span style="color:#2fadc3; font-weight:700;">99.99%</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:99%; background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Peak Load Capacity</span>
                                    <span style="color:#3f89c9; font-weight:700;">+10x</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:95%; background: linear-gradient(90deg,#3f89c9,#85d55c);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Custom APIs & Integrations (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:380px;">
                        <img src="/images/services-images-webp/saas-product-development/Custom-APIs-&-Integrations.webp"
                            alt="Custom APIs & Integrations"
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
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Custom <b>APIs &amp; Integrations</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Connect your SaaS product to third-party tools. We build secure REST and GraphQL APIs that allow users and partners to query data safely.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Fully documented API Endpoints
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Secure OAuth &amp; API Key Management
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
                <div class="glass-border w-max mb-4 inline-block" style="display: inline-block;"><div class="glass-background"><div class="glass text-sm font-light text-center text-white px-6">&#9679; Why Qonkar</div></div></div>

                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    Transparent <b>Engineering</b>
                </h2>
                <p class="mt-2 text-white">
                    No black boxes. Just clean code and clear communication.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <div class="space-y-4 max-w-2xl mx-auto relative text-white order-2 lg:order-1">

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Custom vs. Template - which is better?</span>
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
                                    For high-growth brands, <b>Custom</b> is essential. Templates are bloated, slow, and hard to scale. Custom development ensures your site is lightweight, secure, and built specifically for your business logic.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">What tech stack do you recommend?</span>
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
                                It depends on the project. For dynamic web apps, we recommend the <b>MERN Stack</b> (MongoDB, Express, React, Node). For content-heavy sites, we use <b>Next.js</b> for SEO benefits. We also support PHP/Laravel for traditional enterprise needs.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you provide post-launch support?</span>
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
                                Yes. Software needs maintenance. We offer SLA-backed support packages to handle security updates, server monitoring, and feature additions so your platform never goes down.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Is the code SEO friendly?</span>
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
                                Absolutely. We build with <b>Semantic HTML5</b>, ensure fast load times (Core Web Vitals), and implement Server-Side Rendering (SSR) where possible to make your site loved by Google.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">How long does a project take?</span>
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
                                A simple corporate site takes <b>4-6 weeks</b>. A complex custom web application or SaaS MVP typically takes <b>8-12 weeks</b> depending on the scope of features.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center order-1 lg:order-2">
                    <img src="/images/icons/services/FAQS Software development.webp" alt="Why Qonkar"
                        class="w-full max-w-md rounded-lg shadow-lg lg:ml-auto">
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
                Ready to <span class="text-[#01a0d8] font-semibold">Scale</span> Your SaaS?
            </h2>

            <p class="text-sm sm:text-base text-white/60 font-light max-w-2xl mx-auto mb-8 leading-relaxed">
                Let's engineer a product that investors love and customers pay for.
            </p>

            <a href="/contact-us" class="btn-light-theme">
                Start Engineering
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


