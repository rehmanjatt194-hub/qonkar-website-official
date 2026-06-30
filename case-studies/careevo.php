<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';
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

    <!-- Basic SEO Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Careevo Case Study - All-in-One Restaurant Management Software built by Qonkar Technologies. POS, Kitchen Display, Inventory & Analytics in one platform." />
    <meta name="keywords" content="Careevo, Restaurant Management System, POS, Kitchen Display System, Food Tech, Qonkar, Restaurant Software, Inventory Management" />
    <meta name="author" content="Qonkar" />

    <!-- Open Graph -->
    <meta property="og:title" content="Careevo Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Discover how Careevo revolutionized restaurant operations with smart order management, real-time kitchen displays, and powerful business analytics." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/case-studies/careevo" />
    <meta property="og:image" content="/images/case-studies/craveeo_order_pic.webp" />

    <!-- Icons & Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Careevo Case Study | Qonkar Technologies</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/index.css">

    <style>
        html { scroll-behavior: smooth; }
        html.lenis, html.lenis body { height: auto; }
        .lenis-smooth { scroll-behavior: auto !important; }
        .lenis-stopped { overflow: hidden; }

        /* Qonkar standard color theme */
        :root {
            --qk-blue: #3f89c9;
            --qk-teal: #2fadc3;
            --qk-green: #85d55c;
            --qk-accent: #2BB5BC;
        }

        /* Feature tab system */
        .feature-tab { transition: all 0.3s ease; }
        .feature-tab.active {
            background: rgba(47, 173, 195, 0.15);
            border-color: rgba(47, 173, 195, 0.5);
            color: #2fadc3;
        }
        .feature-panel { display: none; }
        .feature-panel.active { display: block; }

        /* Animated stat counter */
        .stat-number {
            background: linear-gradient(135deg, #3f89c9, #2fadc3, #85d55c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Module card hover */
        .module-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }
        .module-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, #3f89c9, #2fadc3, #85d55c);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .module-card:hover::before { transform: scaleX(1); }
        .module-card:hover {
            transform: translateY(-8px);
            border-color: rgba(47, 173, 195, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 25px rgba(47,173,195,0.12);
        }

        /* Timeline connector */
        .timeline-line {
            background: linear-gradient(to bottom, #3f89c9, #2fadc3, #85d55c);
        }

        /* Result metric card */
        .result-card {
            transition: all 0.4s ease;
        }
        .result-card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 30px rgba(47,173,195,0.15);
        }

        /* FAQ styles */
        .faq-item { transition: all 0.3s ease; }
        .faq-content { transition: max-height 0.5s ease; }
    </style>
</head>

<body class="bg-[#000d16] text-white">

<!-- ========== NAVIGATION ========== -->
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
                            <h4 class="font-bold text-base xl:text-lg text-[#2BB5BC] border-b border-white/10 pb-2 mb-2">Shopify</h4>
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
                            <h4 class="font-bold text-base xl:text-lg text-[#95C951] border-b border-white/10 pb-2 mb-2">Software</h4>
                            <div class="flex gap-4">
                                <div class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                    <img src="/images/software_header.webp" alt="Software" class="h-full w-full object-cover">
                                </div>
                                <ul class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                    <li><a href="/services/web-design-and-development" class="hover:text-[#95C951] transition">Web Design & Development</a></li>
                                    <li><a href="/services/landing-pages-design" class="hover:text-[#95C951] transition">Landing Pages Design</a></li>
                                    <li><a href="/services/saas-product-development" class="hover:text-[#95C951] transition">SaaS product development</a></li>
                                    <li><a href="/services/automative-app" class="hover:text-[#95C951] transition">Automotive Apps</a></li>
                                    <li><a href="/services/healthcare-and-hippa-apps" class="hover:text-[#95C951] transition">Healthcare And HIPAA Apps</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="/portfolio" class="text-[var(--primary-color)]">Portfolio</a></li>
            <li><a href="/blogs" class="hover:text-[var(--primary-color)]">Blogs</a></li>
            <li><a href="/career" class="hover:text-[var(--primary-color)]">Career</a></li>
            <li><a href="/about-us" class="hover:text-[var(--primary-color)]">About Us</a></li>
        </ul>
        <a href="/contact-us" class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white hover:opacity-90 transition font-medium">Contact Us</a>
    </nav>

    <!-- Mobile Nav -->
    <nav class="glass flex lg:hidden items-center justify-between w-[92%] mx-auto px-5 py-2 rounded-full mt-2 relative">
        <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-8 w-auto"></a>
        <button id="menu-btn" class="text-white focus:outline-none text-3xl">☰</button>
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full mt-2 z-50 bg-[rgba(10,10,10,0.98)] backdrop-blur-xl flex-col transform scale-y-0 origin-top transition-all duration-300 rounded-2xl overflow-y-auto max-h-[85vh] border border-white/10">
            <a href="/" class="block w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>
            <a href="/portfolio" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
            <a href="/blogs" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
</header>


<!-- ==========================================
     1. HERO SECTION — Two Column Premium Layout
     ========================================== -->
<section class="relative w-[95%] mx-auto mt-6 mb-0 rounded-[28px] overflow-hidden min-h-[80vh] flex items-center">

    <!-- Restaurant Atmosphere Background -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/case-studies/careevo_bg.webp');"></div>
    <!-- Strong left-to-right gradient so left is readable and right shows image -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#000d16] via-[#000d16]/85 to-[#000d16]/30"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#000d16]/70 via-transparent to-[#000d16]/30"></div>

    <!-- Two Column Layout -->
    <div class="relative z-20 w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 py-20 grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 items-center mt-8">

        <!-- LEFT: Text Content -->
        <div class="space-y-6">
            <!-- Badge perfectly aligned with text -->
            <div class="mb-2">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#3f89c9]/20 border border-[#3f89c9]/40 backdrop-blur-md text-[#3f89c9] text-xs font-bold tracking-widest uppercase">
                    <i class="fa-solid fa-utensils text-[10px]"></i>
                    Restaurant Technology
                </span>
            </div>
            
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold leading-[1.05] tracking-tight">
                Careevo
                <br>
                <span class="bg-gradient-to-r from-[#3f89c9] to-[#2fadc3] text-transparent bg-clip-text text-4xl sm:text-5xl font-light">Restaurant Intelligence.</span>
            </h1>
            <p class="text-gray-200 text-base sm:text-lg font-light leading-relaxed max-w-lg">
                A comprehensive, all-in-one restaurant management platform that automates orders, controls kitchen chaos, tracks inventory in real-time, and turns data into profit.
            </p>

            <!-- CTA buttons -->
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="/contact-us" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-[#3f89c9] text-[#000d16] font-bold hover:bg-[#2fadc3] transition-all duration-300 shadow-[0_0_20px_rgba(63,137,201,0.35)] hover:scale-105 group">
                    Get a Demo
                    <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#video-tour" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white/10 border border-white/20 text-white font-semibold backdrop-blur-sm hover:bg-white/15 hover:border-white/40 transition-all duration-300">
                    <i class="fa-solid fa-play text-[#3f89c9] text-xs"></i>
                    Watch Demo
                </a>
            </div>

            <!-- Key metrics row -->
            <div class="flex flex-wrap gap-8 pt-4 border-t border-white/10">
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Orders Daily</p>
                    <p class="text-2xl font-bold text-[#3f89c9]">10,000+</p>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Branches</p>
                    <p class="text-2xl font-bold text-white">Multi-Branch</p>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Uptime</p>
                    <p class="text-2xl font-bold text-[#95C951]">99.9% <i class="fa-solid fa-arrow-trend-up text-sm"></i></p>
                </div>
            </div>
        </div>

        <!-- RIGHT: Floating Live Dashboard Card -->
        <div class="flex flex-col gap-4 mt-10 md:mt-0">
            <!-- Main order card -->
            <div class="bg-[#000d16]/80 backdrop-blur-xl border border-white/10 rounded-2xl p-5 shadow-2xl">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs text-gray-400 font-semibold uppercase tracking-widest">Live Orders</span>
                    <span class="flex items-center gap-1.5 text-[#95C951] text-xs font-bold">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#95C951] animate-pulse"></span>
                        Active Now
                    </span>
                </div>
                <!-- Order rows -->
                <div class="space-y-3">
                    <div class="flex items-center gap-3 bg-[#3f89c9]/8 border border-[#3f89c9]/15 rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#3f89c9]/15 border border-[#3f89c9]/25 flex items-center justify-center text-[#3f89c9] text-xs font-bold shrink-0">T4</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-white text-xs font-semibold truncate">Burger x2, Fries x1, Salad</p>
                            <p class="text-gray-400 text-[10px]">4 guests • 8:15 PM</p>
                        </div>
                        <span class="text-[#3f89c9] text-xs font-bold shrink-0">$78</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#2fadc3]/8 border border-[#2fadc3]/15 rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#2fadc3]/15 border border-[#2fadc3]/25 flex items-center justify-center text-[#2fadc3] text-xs font-bold shrink-0">T7</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-white text-xs font-semibold truncate">Pasta x2, Garlic Bread</p>
                            <p class="text-gray-400 text-[10px]">2 guests • 8:22 PM</p>
                        </div>
                        <span class="text-[#2fadc3] text-xs font-bold shrink-0">$42</span>
                    </div>
                    <div class="flex items-center gap-3 bg-[#95C951]/8 border border-[#95C951]/15 rounded-xl p-3">
                        <div class="w-8 h-8 rounded-lg bg-[#95C951]/15 border border-[#95C951]/25 flex items-center justify-center text-[#95C951] text-xs font-bold shrink-0">T2</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-white text-xs font-semibold truncate">Steak, Dessert x2</p>
                            <p class="text-gray-400 text-[10px]">6 guests • 8:30 PM</p>
                        </div>
                        <span class="text-[#95C951] text-xs font-bold shrink-0">READY</span>
                    </div>
                </div>
            </div>

            <!-- Two mini stat cards -->
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-[#000d16]/80 backdrop-blur-xl border border-white/10 rounded-2xl p-4 shadow-xl">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-kitchen-set text-[#3f89c9] text-sm"></i>
                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Kitchen Queue</span>
                    </div>
                    <p class="text-2xl font-bold text-white">12 <span class="text-sm font-normal text-gray-400">tickets</span></p>
                    <p class="text-[10px] text-[#95C951] font-semibold mt-1">Avg. 6 min prep time</p>
                </div>
                <div class="bg-[#000d16]/80 backdrop-blur-xl border border-white/10 rounded-2xl p-4 shadow-xl">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fa-solid fa-chart-line text-[#2BB5BC] text-sm"></i>
                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Tonight</span>
                    </div>
                    <p class="text-2xl font-bold text-white">$3.2k <span class="text-sm font-normal text-gray-400">revenue</span></p>
                    <p class="text-[10px] text-[#95C951] font-semibold mt-1"><i class="fa-solid fa-arrow-up text-xs"></i> 18% vs last week</p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ==========================================
     2. BRAND INTRO — Warm Light Section
     ========================================== -->
<section class="w-full bg-[#000d16] border-y border-[#3f89c9]/15 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <!-- Left: Brand Story -->
        <div class="space-y-6">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#3f89c9] text-[10px] font-bold tracking-widest uppercase">
                About Careevo
            </span>
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-snug">
                Where every order is <br><span class="font-bold text-[#3f89c9]">perfectly orchestrated.</span>
            </h2>
            <p class="text-gray-300 font-light text-base leading-relaxed">
                Careevo was born out of a real-world need — restaurants losing revenue to missed orders, wasted inventory, and disconnected staff. Qonkar Technologies built a unified digital backbone that connects the front-of-house, kitchen, and management into one seamless, intelligent system.
            </p>
            <p class="text-gray-400 font-light text-sm leading-relaxed">
                From a single QR-code table ordering experience to a central analytics dashboard that tells you exactly which dish is your top seller at 8 PM on Fridays — Careevo brings enterprise-grade intelligence to every restaurant, big or small.
            </p>
            <div class="flex flex-wrap gap-3 pt-2">
                <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-gray-300 text-xs font-medium">F&B Technology</span>
                <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-gray-300 text-xs font-medium">SaaS Platform</span>
                <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-gray-300 text-xs font-medium">Multi-Branch</span>
                <span class="px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-gray-300 text-xs font-medium">Real-Time Analytics</span>
            </div>
        </div>

        <!-- Right: Dashboard Mockup -->
        <div class="relative">
            <div class="absolute -inset-4 bg-[#3f89c9]/5 rounded-[40px] blur-2xl"></div>
            <div class="relative bg-white/5 border border-white/10 rounded-3xl p-3 shadow-2xl backdrop-blur-sm">
                <img src="/images/case-studies/craveeo_order_pic.webp" alt="Careevo Dashboard" class="rounded-2xl w-full h-auto object-cover">
                <!-- Live badge -->
                <div class="absolute top-5 right-5 flex items-center gap-2 bg-[#000d16]/90 border border-[#95C951]/40 px-3 py-1.5 rounded-full backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-[#95C951] animate-pulse shadow-[0_0_8px_#95C951]"></span>
                    <span class="text-[10px] font-bold text-[#95C951] uppercase tracking-widest">Live System</span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================
     3. PRODUCT WALKTHROUGH VIDEO SECTION
     ========================================== -->
<section class="w-full bg-[#000d16] pt-8 pb-12 border-t border-white/5 text-left">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-end">

            <!-- Left Column: Copy & Details -->
            <div class="lg:col-span-4 space-y-5">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#3f89c9]/10 text-[#3f89c9] text-[10px] font-bold tracking-widest uppercase border border-[#3f89c9]/25">
                    Product Walkthrough
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-white leading-tight">
                    Inside the <br>
                    <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[#3f89c9] to-[#2fadc3]">Restaurant Hub.</span>
                </h2>
                <p class="text-gray-300 font-light text-sm sm:text-base leading-relaxed">
                    Watch how Careevo brings order to the chaos. A full visual walkthrough of the live POS terminal, the kitchen display board updating in real-time, and the owner analytics dashboard all working in sync.
                </p>

                <!-- Key Demonstration Features -->
                <ul class="space-y-3 pt-1">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#3f89c9]/10 border border-[#3f89c9]/20 text-[#3f89c9] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(245,158,11,0.1)]">
                            <i class="fa-solid fa-bolt text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Instant Order Flow</h4>
                            <p class="text-gray-400 text-xs font-light">Table → Kitchen → Ready in under 60 seconds.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[#95C951]/10 border border-[#95C951]/20 text-[#95C951] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(149,201,81,0.1)]">
                            <i class="fa-solid fa-chart-line text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Live Revenue Dashboard</h4>
                            <p class="text-gray-400 text-xs font-light">Real-time sales, peak hours, and best-sellers at a glance.</p>
                        </div>
                    </li>
                </ul>

                <!-- Watch Video Button -->
                <div class="pt-4">
                    <button id="btnOpenVideoCareevo" class="inline-flex items-center gap-3 px-7 py-3.5 rounded-full bg-[#3f89c9] text-[#000d16] text-sm font-bold hover:bg-[#2fadc3] transition-all duration-300 shadow-[0_0_20px_rgba(63,137,201,0.3)] hover:scale-105 hover:shadow-[0_0_30px_rgba(47,173,195,0.4)] group focus:outline-none">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#000d16] shadow-[0_0_8px_rgba(0,0,0,0.4)] animate-pulse"></span>
                        Watch Product Tour
                        <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Right Column: Video Poster Frame -->
            <div class="lg:col-span-8 pt-6 lg:pt-0">
                <div class="relative w-full rounded-[32px] border border-white/10 p-2 bg-[#00101a]/80 backdrop-blur-md shadow-[0_0_50px_rgba(63,137,201,0.15)] group overflow-hidden cursor-pointer" id="btnOpenVideoPosterCareevo">
                    <!-- Amber glow on hover -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#3f89c9]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>

                    <!-- Video Thumbnail -->
                    <div class="relative rounded-[24px] overflow-hidden aspect-[16/10]">
                        <img src="/images/case-studies/craveeo_order_pic.webp" alt="Careevo System Tour Poster" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 group-hover:blur-[2px]">

                        <!-- Dark overlay -->
                        <div class="absolute inset-0 bg-black/50 group-hover:bg-black/60 transition-colors duration-300"></div>

                        <!-- Pulsing Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-full bg-[#3f89c9] flex items-center justify-center text-[#000d16] shadow-[0_0_30px_rgba(63,137,201,0.5)] transition-all duration-300 group-hover:scale-110 group-hover:bg-[#2fadc3] group-hover:shadow-[0_0_40px_rgba(47,173,195,0.6)] relative">
                                <span class="absolute inset-0 rounded-full bg-[#3f89c9]/30 animate-ping"></span>
                                <i class="fa-solid fa-play text-2xl translate-x-0.5 text-[#000d16]"></i>
                            </div>
                        </div>

                        <!-- Bottom Bar Label -->
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-white/80 text-xs tracking-wider uppercase font-semibold">
                            <span class="flex items-center gap-2"><i class="fa-solid fa-circle text-[#3f89c9] animate-pulse text-[8px]"></i> Full System Demo</span>
                            <span>3:00 Min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- VIDEO MODAL LIGHTBOX -->
<div id="videoModalCareevo" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-md transition-opacity duration-300">
    <div class="absolute inset-0 cursor-pointer" id="modalOverlayCareevo"></div>
    <button class="absolute top-6 right-6 text-white/70 hover:text-white text-3xl focus:outline-none transition-colors z-[110]" id="btnCloseVideoCareevo">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="relative w-[95%] max-w-4xl aspect-video rounded-2xl overflow-hidden bg-black shadow-2xl border border-white/10 scale-90 transition-transform duration-300" id="videoContainerCareevo">
        <video id="htmlVideoCareevo" class="w-full h-full" controls>
            <source id="videoSourceCareevo" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<script>
    // Careevo Video Modal
    const modalCareevo = document.getElementById('videoModalCareevo');
    const videoCareevo = document.getElementById('htmlVideoCareevo');
    const containerCareevo = document.getElementById('videoContainerCareevo');

    function openCareevoModal() {
        modalCareevo.classList.remove('hidden');
        modalCareevo.classList.add('flex');
        setTimeout(() => { containerCareevo.style.transform = 'scale(1)'; }, 50);
    }
    function closeCareevoModal() {
        containerCareevo.style.transform = 'scale(0.9)';
        setTimeout(() => {
            modalCareevo.classList.add('hidden');
            modalCareevo.classList.remove('flex');
            videoCareevo.pause();
        }, 300);
    }
    document.getElementById('btnOpenVideoCareevo').addEventListener('click', openCareevoModal);
    document.getElementById('btnOpenVideoPosterCareevo').addEventListener('click', openCareevoModal);
    document.getElementById('btnCloseVideoCareevo').addEventListener('click', closeCareevoModal);
    document.getElementById('modalOverlayCareevo').addEventListener('click', closeCareevoModal);
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeCareevoModal(); });
</script>


<!-- ==========================================
     4. THE PROBLEM — What Was Breaking in Restaurants
     ========================================== -->
<section class="w-full bg-[#000d16] text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <span class="bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#3f89c9] text-[10px] font-bold uppercase tracking-widest px-3 py-1.5 rounded-full">The Problem</span>
            <h2 class="text-3xl sm:text-4xl font-light text-white mt-4 leading-tight">
                Restaurants running on <span class="text-[#2fadc3] font-bold">chaos.</span>
            </h2>
            <p class="text-gray-400 font-light text-base mt-3 max-w-2xl mx-auto">
                Most restaurants were losing 30–40% of their potential revenue due to manual, disconnected, and error-prone operations.
            </p>
        </div>

        <!-- Problem cards - horizontal timeline style -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

            <div class="bg-[#00101a] border border-white/10 rounded-3xl p-7 space-y-4 shadow-sm hover:shadow-lg hover:border-[#3f89c9]/40 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#2fadc3] flex items-center justify-center group-hover:bg-[#3f89c9]/20 transition-colors">
                    <i class="fa-solid fa-clipboard-list text-lg"></i>
                </div>
                <h4 class="text-white font-bold text-base">Order Confusion at the Table</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed">Waiters writing orders on paper pads led to kitchen misreads, wrong dishes, and angry customers during peak hours.</p>
                <div class="flex items-center gap-2 pt-2">
                    <span class="text-2xl font-black text-[#2fadc3]">62%</span>
                    <span class="text-xs text-gray-400">of complaints were order errors</span>
                </div>
            </div>

            <div class="bg-[#00101a] border border-white/10 rounded-3xl p-7 space-y-4 shadow-sm hover:shadow-lg hover:border-[#3f89c9]/40 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#2fadc3] flex items-center justify-center group-hover:bg-[#3f89c9]/20 transition-colors">
                    <i class="fa-solid fa-kitchen-set text-lg"></i>
                </div>
                <h4 class="text-white font-bold text-base">Kitchen Blindspot</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed">No real-time ticket system meant chefs had no queue visibility. Cold food, wrong priorities, and slow table turnover were constant issues.</p>
                <div class="flex items-center gap-2 pt-2">
                    <span class="text-2xl font-black text-[#2fadc3]">+18 min</span>
                    <span class="text-xs text-gray-400">average delay per table</span>
                </div>
            </div>

            <div class="bg-[#00101a] border border-white/10 rounded-3xl p-7 space-y-4 shadow-sm hover:shadow-lg hover:border-[#3f89c9]/40 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#2fadc3] flex items-center justify-center group-hover:bg-[#3f89c9]/20 transition-colors">
                    <i class="fa-solid fa-boxes-stacked text-lg"></i>
                </div>
                <h4 class="text-white font-bold text-base">Inventory Draining Silently</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed">Manual stock-taking in notebooks meant over-ordering, spoilage, and theft went undetected — costing thousands monthly.</p>
                <div class="flex items-center gap-2 pt-2">
                    <span class="text-2xl font-black text-[#2fadc3]">35%</span>
                    <span class="text-xs text-gray-400">food cost wasted monthly</span>
                </div>
            </div>

            <div class="bg-[#00101a] border border-white/10 rounded-3xl p-7 space-y-4 shadow-sm hover:shadow-lg hover:border-[#3f89c9]/40 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/25 text-[#2fadc3] flex items-center justify-center group-hover:bg-[#3f89c9]/20 transition-colors">
                    <i class="fa-solid fa-chart-pie text-lg"></i>
                </div>
                <h4 class="text-white font-bold text-base">Zero Business Visibility</h4>
                <p class="text-gray-400 text-sm font-light leading-relaxed">Owners had no access to sales data, peak-hour trends, or menu performance. Every business decision was pure guesswork.</p>
                <div class="flex items-center gap-2 pt-2">
                    <span class="text-2xl font-black text-[#2fadc3]">0</span>
                    <span class="text-xs text-gray-400">data-driven decisions made</span>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ==========================================
     4. CORE MODULES — Our Solution (Dark Premium)
     ========================================== -->
<section class="w-full bg-[#000d16] border-t border-white/5 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Section Header with workflow strip -->
    <div class="text-center space-y-4 mb-6">
        <span class="bg-[#3f89c9]/10 border border-[#3f89c9]/30 text-[#3f89c9] text-[11px] font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full">Our Solution</span>
        <h2 class="text-3xl md:text-4xl font-light text-white">4 Modules. <b>One Unified Restaurant OS.</b></h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm sm:text-base leading-relaxed">Careevo connects every part of your restaurant into one intelligent operating system — from the first order to the final report.</p>
    </div>

    <!-- Animated Order Flow Strip -->
    <div class="flex items-center justify-center gap-2 sm:gap-4 mb-16 overflow-x-auto pb-2">
        <div class="flex items-center gap-2 bg-[#3f89c9]/10 border border-[#3f89c9]/20 px-4 py-2 rounded-full whitespace-nowrap">
            <i class="fa-solid fa-qrcode text-[#3f89c9] text-sm"></i>
            <span class="text-[#3f89c9] text-xs font-semibold">Customer Scans QR</span>
        </div>
        <i class="fa-solid fa-arrow-right text-white/20 text-xs shrink-0"></i>
        <div class="flex items-center gap-2 bg-[#2fadc3]/10 border border-[#2fadc3]/20 px-4 py-2 rounded-full whitespace-nowrap">
            <i class="fa-solid fa-fire-burner text-[#2fadc3] text-sm"></i>
            <span class="text-[#2fadc3] text-xs font-semibold">Kitchen Gets Ticket</span>
        </div>
        <i class="fa-solid fa-arrow-right text-white/20 text-xs shrink-0"></i>
        <div class="flex items-center gap-2 bg-[#2BB5BC]/10 border border-[#2BB5BC]/20 px-4 py-2 rounded-full whitespace-nowrap">
            <i class="fa-solid fa-boxes-stacked text-[#2BB5BC] text-sm"></i>
            <span class="text-[#2BB5BC] text-xs font-semibold">Inventory Auto-Updates</span>
        </div>
        <i class="fa-solid fa-arrow-right text-white/20 text-xs shrink-0"></i>
        <div class="flex items-center gap-2 bg-[#95C951]/10 border border-[#95C951]/20 px-4 py-2 rounded-full whitespace-nowrap">
            <i class="fa-solid fa-chart-line text-[#95C951] text-sm"></i>
            <span class="text-[#95C951] text-xs font-semibold">Analytics Logged</span>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Module 1: Smart POS -->
        <div class="module-card bg-[#00101a] border border-white/10 rounded-[28px] p-8 space-y-5">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/25 flex items-center justify-center text-[#3f89c9]">
                    <i class="fa-solid fa-tablet-screen-button text-2xl"></i>
                </div>
                <div>
                    <span class="text-[10px] text-[#3f89c9] font-bold uppercase tracking-widest">Module 01</span>
                    <h3 class="text-xl font-bold text-white">Smart POS & Table Ordering</h3>
                </div>
            </div>
            <p class="text-gray-300 font-light text-sm leading-relaxed">
                Customers scan a QR code to order directly from their table. Orders instantly appear on the kitchen display — no waiter middleman, no miscommunication. Supports dine-in, takeaway, and delivery modes simultaneously.
            </p>
            <ul class="space-y-2">
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#3f89c9] shrink-0"></span>QR-code self-ordering per table</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#3f89c9] shrink-0"></span>Real-time order sync to kitchen</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#3f89c9] shrink-0"></span>Split-bill & digital receipt generation</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#3f89c9] shrink-0"></span>Multi-outlet support from one dashboard</li>
            </ul>
        </div>

        <!-- Module 2: KDS -->
        <div class="module-card bg-[#00101a] border border-white/10 rounded-[28px] p-8 space-y-5">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-[#2fadc3]/10 border border-[#2fadc3]/25 flex items-center justify-center text-[#2fadc3]">
                    <i class="fa-solid fa-display text-2xl"></i>
                </div>
                <div>
                    <span class="text-[10px] text-[#2fadc3] font-bold uppercase tracking-widest">Module 02</span>
                    <h3 class="text-xl font-bold text-white">Kitchen Display System (KDS)</h3>
                </div>
            </div>
            <p class="text-gray-300 font-light text-sm leading-relaxed">
                A powerful real-time screen in the kitchen shows every active ticket, its priority, and countdown timer. Chefs work on the right dish at the right time — zero confusion, zero cold plates.
            </p>
            <ul class="space-y-2">
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2fadc3] shrink-0"></span>Color-coded ticket priority system</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2fadc3] shrink-0"></span>Estimated prep-time countdowns</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2fadc3] shrink-0"></span>One-tap "Ready" notification to waiter</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2fadc3] shrink-0"></span>Station-based routing (grill, cold, desserts)</li>
            </ul>
        </div>

        <!-- Module 3: Inventory -->
        <div class="module-card bg-[#00101a] border border-white/10 rounded-[28px] p-8 space-y-5">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-[#2BB5BC]/10 border border-[#2BB5BC]/25 flex items-center justify-center text-[#2BB5BC]">
                    <i class="fa-solid fa-warehouse text-2xl"></i>
                </div>
                <div>
                    <span class="text-[10px] text-[#2BB5BC] font-bold uppercase tracking-widest">Module 03</span>
                    <h3 class="text-xl font-bold text-white">Smart Inventory Control</h3>
                </div>
            </div>
            <p class="text-gray-300 font-light text-sm leading-relaxed">
                Every ingredient deducted automatically as an order is placed. Careevo predicts stock depletion before it happens and alerts managers to reorder — eliminating food waste and "86'd item" situations.
            </p>
            <ul class="space-y-2">
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2BB5BC] shrink-0"></span>Auto-deduction per order sold</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2BB5BC] shrink-0"></span>Low-stock SMS/email alerts</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2BB5BC] shrink-0"></span>Waste & spoilage tracking logs</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#2BB5BC] shrink-0"></span>Supplier purchase order generation</li>
            </ul>
        </div>

        <!-- Module 4: Analytics -->
        <div class="module-card bg-[#00101a] border border-white/10 rounded-[28px] p-8 space-y-5">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-[#95C951]/10 border border-[#95C951]/25 flex items-center justify-center text-[#95C951]">
                    <i class="fa-solid fa-chart-line text-2xl"></i>
                </div>
                <div>
                    <span class="text-[10px] text-[#95C951] font-bold uppercase tracking-widest">Module 04</span>
                    <h3 class="text-xl font-bold text-white">Business Analytics Hub</h3>
                </div>
            </div>
            <p class="text-gray-300 font-light text-sm leading-relaxed">
                A powerful owner dashboard that shows top-selling items, revenue by hour, table turnover rate, staff performance, and month-over-month growth — all in beautiful, actionable charts.
            </p>
            <ul class="space-y-2">
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#95C951] shrink-0"></span>Revenue & sales trend graphs</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#95C951] shrink-0"></span>Best-selling dishes & slow movers</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#95C951] shrink-0"></span>Peak hours heatmap by day/time</li>
                <li class="flex items-center gap-3 text-sm text-gray-300"><span class="w-1.5 h-1.5 rounded-full bg-[#95C951] shrink-0"></span>Staff efficiency & order speed scores</li>
            </ul>
        </div>
    </div>
    </div>
</section>


<!-- ==========================================
     5. RESULTS — Animated Metrics + Before/After
     ========================================== -->
<section class="w-full bg-[#000810] border-t border-white/5 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 space-y-3">
            <span class="bg-[#95C951]/10 border border-[#95C951]/30 text-[#95C951] text-[11px] font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full">Impact Metrics</span>
            <h2 class="text-3xl md:text-4xl font-light text-white">The numbers <b>speak for themselves.</b></h2>
            <p class="text-gray-400 font-light text-sm max-w-lg mx-auto">Real results delivered within the first 6 months of Careevo going live.</p>
        </div>

        <!-- Animated Metric Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-16">
            <div class="result-card bg-gradient-to-br from-[#0d0800] to-[#00101a] border border-[#3f89c9]/15 rounded-3xl p-8 text-center group hover:border-[#3f89c9]/40 hover:shadow-[0_0_30px_rgba(245,158,11,0.08)]">
                <div class="w-10 h-10 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/20 text-[#3f89c9] flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-circle-check text-sm"></i>
                </div>
                <p class="stat-number text-5xl font-extrabold counter" data-target="40">0</p>
                <p class="text-[#3f89c9] text-xs font-bold mt-1">%</p>
                <p class="text-gray-400 text-xs mt-3 font-light leading-relaxed">Fewer order errors with digital POS</p>
            </div>
            <div class="result-card bg-gradient-to-br from-[#001208] to-[#00101a] border border-[#95C951]/15 rounded-3xl p-8 text-center group hover:border-[#95C951]/40 hover:shadow-[0_0_30px_rgba(149,201,81,0.08)]">
                <div class="w-10 h-10 rounded-2xl bg-[#95C951]/10 border border-[#95C951]/20 text-[#95C951] flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-table-cells text-sm"></i>
                </div>
                <p class="text-5xl font-extrabold text-[#95C951]">3x</p>
                <p class="text-[#95C951] text-xs font-bold mt-1">FASTER</p>
                <p class="text-gray-400 text-xs mt-3 font-light leading-relaxed">Table turnover with real-time KDS</p>
            </div>
            <div class="result-card bg-gradient-to-br from-[#00080d] to-[#00101a] border border-[#2BB5BC]/15 rounded-3xl p-8 text-center group hover:border-[#2BB5BC]/40 hover:shadow-[0_0_30px_rgba(43,181,188,0.08)]">
                <div class="w-10 h-10 rounded-2xl bg-[#2BB5BC]/10 border border-[#2BB5BC]/20 text-[#2BB5BC] flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-leaf text-sm"></i>
                </div>
                <p class="text-5xl font-extrabold text-[#2BB5BC] counter" data-target="28">0</p>
                <p class="text-[#2BB5BC] text-xs font-bold mt-1">%</p>
                <p class="text-gray-400 text-xs mt-3 font-light leading-relaxed">Food cost saved via smart inventory</p>
            </div>
            <div class="result-card bg-gradient-to-br from-[#0d0800] to-[#00101a] border border-[#3f89c9]/15 rounded-3xl p-8 text-center group hover:border-[#3f89c9]/40 hover:shadow-[0_0_30px_rgba(245,158,11,0.08)]">
                <div class="w-10 h-10 rounded-2xl bg-[#3f89c9]/10 border border-[#3f89c9]/20 text-[#3f89c9] flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid fa-arrow-trend-up text-sm"></i>
                </div>
                <p class="stat-number text-5xl font-extrabold">2.5x</p>
                <p class="text-[#3f89c9] text-xs font-bold mt-1">REVENUE</p>
                <p class="text-gray-400 text-xs mt-3 font-light leading-relaxed">Growth in 6 months post-deployment</p>
            </div>
        </div>

        <!-- Testimonial Quote -->
        <div class="relative bg-[#00101a] border border-[#3f89c9]/15 rounded-3xl p-10 mb-12 overflow-hidden">
            <div class="absolute top-0 left-0 w-64 h-64 bg-[#3f89c9]/5 rounded-full blur-[80px] -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-[#2fadc3]/5 rounded-full blur-[80px] translate-x-1/2 translate-y-1/2"></div>
            <div class="relative z-10 text-center max-w-3xl mx-auto">
                <i class="fa-solid fa-quote-left text-4xl text-[#3f89c9]/20 mb-4"></i>
                <p class="text-white text-lg sm:text-xl font-light leading-relaxed italic">
                    "Before Careevo, we were losing orders, wasting food, and guessing our way through every decision. Now our kitchen runs like clockwork, and I finally know which dishes make us the most money."
                </p>
                <div class="flex items-center justify-center gap-3 mt-6">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#3f89c9] to-[#2fadc3] flex items-center justify-center text-[#000d16] font-bold text-sm">A</div>
                    <div class="text-left">
                        <p class="text-white text-sm font-semibold">Ahmed R.</p>
                        <p class="text-gray-400 text-xs">Restaurant Owner, Careevo Client</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Before vs After Comparison -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Before -->
            <div class="bg-[#120800] border border-red-900/30 rounded-3xl p-8 space-y-6">
                <div>
                    <span class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">Before Careevo</span>
                    <h3 class="text-lg font-bold text-red-400 mt-1">Manual & Fragmented Operations</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Order Error Rate</span><span>62%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Food Cost Wastage</span><span>35%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full" style="width: 35%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Table Wait Time (avg)</span><span>+18 min</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Inventory Tracking Accuracy</span><span>40%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- After -->
            <div class="bg-[#001208] border border-[#95C951]/20 rounded-3xl p-8 space-y-6 relative overflow-hidden">
                <div class="absolute top-5 right-5 text-[#95C951] bg-[#95C951]/10 w-9 h-9 rounded-xl flex items-center justify-center border border-[#95C951]/25">
                    <i class="fa-solid fa-star text-sm"></i>
                </div>
                <div>
                    <span class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">With Careevo</span>
                    <h3 class="text-lg font-bold text-[#95C951] mt-1">Fully Automated Restaurant OS</h3>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Order Accuracy</span><span>98%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[#95C951] h-full rounded-full" style="width: 98%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Food Cost Controlled</span><span>7%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[#95C951] h-full rounded-full" style="width: 7%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Table Service Speed</span><span>~5 min</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[#95C951] h-full rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-2">
                            <span>Inventory Accuracy</span><span>99.5%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[#95C951] h-full rounded-full" style="width: 99%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================
     6. TECH STACK — Architecture Visual
     ========================================== -->
<section class="w-full bg-[#000d16] border-t border-white/5 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 space-y-3">
            <span class="bg-white/5 border border-white/10 text-gray-300 text-[11px] font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full">Built With</span>
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-snug">
                Enterprise-grade <span class="font-bold text-[#3f89c9]">tech stack.</span>
            </h2>
            <p class="text-gray-400 font-light text-sm leading-relaxed max-w-xl mx-auto">
                Careevo is built on a production-ready, cloud-native architecture designed for peak traffic, real-time sync, and 99.9% uptime — no compromises.
            </p>
        </div>

        <!-- Architecture Layers -->
        <div class="space-y-4">

            <!-- Layer: Frontend -->
            <div class="bg-[#00101a] border border-white/10 rounded-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="shrink-0">
                    <span class="text-[10px] text-[#3f89c9] font-bold uppercase tracking-widest block mb-1">Frontend Layer</span>
                    <span class="text-white text-sm font-semibold">Customer & Staff Interfaces</span>
                </div>
                <div class="flex flex-wrap gap-3 sm:ml-auto">
                    <div class="flex items-center gap-2 bg-[#61DAFB]/10 border border-[#61DAFB]/20 px-3 py-1.5 rounded-xl">
                        <i class="fa-brands fa-react text-[#61DAFB]"></i>
                        <span class="text-xs text-gray-200">React.js</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-xl">
                        <i class="fa-brands fa-js text-yellow-400"></i>
                        <span class="text-xs text-gray-200">TypeScript</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-xl">
                        <i class="fa-solid fa-mobile-screen text-[#2BB5BC]"></i>
                        <span class="text-xs text-gray-200">PWA / Mobile</span>
                    </div>
                </div>
            </div>

            <!-- Arrow -->
            <div class="flex justify-center"><i class="fa-solid fa-arrow-down text-white/20"></i></div>

            <!-- Layer: Backend -->
            <div class="bg-[#00101a] border border-white/10 rounded-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="shrink-0">
                    <span class="text-[10px] text-[#2fadc3] font-bold uppercase tracking-widest block mb-1">Backend Layer</span>
                    <span class="text-white text-sm font-semibold">API, Auth & Real-Time Engine</span>
                </div>
                <div class="flex flex-wrap gap-3 sm:ml-auto">
                    <div class="flex items-center gap-2 bg-[#95C951]/10 border border-[#95C951]/20 px-3 py-1.5 rounded-xl">
                        <i class="fa-brands fa-node-js text-[#95C951]"></i>
                        <span class="text-xs text-gray-200">Node.js</span>
                    </div>
                    <div class="flex items-center gap-2 bg-[#2fadc3]/10 border border-[#2fadc3]/20 px-3 py-1.5 rounded-xl">
                        <i class="fa-solid fa-bolt text-[#2fadc3]"></i>
                        <span class="text-xs text-gray-200">Socket.IO</span>
                    </div>
                    <div class="flex items-center gap-2 bg-[#2BB5BC]/10 border border-[#2BB5BC]/20 px-3 py-1.5 rounded-xl">
                        <i class="fa-solid fa-lock text-[#2BB5BC]"></i>
                        <span class="text-xs text-gray-200">JWT Auth</span>
                    </div>
                </div>
            </div>

            <!-- Arrow -->
            <div class="flex justify-center"><i class="fa-solid fa-arrow-down text-white/20"></i></div>

            <!-- Layer: Data + Cloud -->
            <div class="bg-[#00101a] border border-white/10 rounded-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <div class="shrink-0">
                    <span class="text-[10px] text-[#2BB5BC] font-bold uppercase tracking-widest block mb-1">Data & Cloud Layer</span>
                    <span class="text-white text-sm font-semibold">Storage, Hosting & CDN</span>
                </div>
                <div class="flex flex-wrap gap-3 sm:ml-auto">
                    <div class="flex items-center gap-2 bg-[#336791]/20 border border-[#336791]/30 px-3 py-1.5 rounded-xl">
                        <i class="fa-solid fa-database text-[#336791]"></i>
                        <span class="text-xs text-gray-200">PostgreSQL</span>
                    </div>
                    <div class="flex items-center gap-2 bg-[#3f89c9]/10 border border-[#3f89c9]/20 px-3 py-1.5 rounded-xl">
                        <i class="fa-brands fa-aws text-[#3f89c9]"></i>
                        <span class="text-xs text-gray-200">AWS Cloud</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-xl">
                        <i class="fa-solid fa-shield-halved text-[#95C951]"></i>
                        <span class="text-xs text-gray-200">SSL Encrypted</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================
     7. CTA — Get Your Own System
     ========================================== -->
<section class="relative w-[95%] mx-auto mb-16 rounded-[28px] overflow-hidden border border-[#3f89c9]/20" style="background: linear-gradient(135deg, #0a0600 0%, #000d16 50%, #050a00 100%)">

    <!-- Animated background elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#3f89c9]/8 rounded-full blur-[120px] -translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#2fadc3]/8 rounded-full blur-[120px] translate-x-1/3 translate-y-1/3"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-[#95C951]/5 rounded-full blur-[80px] -translate-x-1/2 -translate-y-1/2"></div>

    <!-- Top strip -->
    <div class="relative z-10 border-b border-white/5 py-6">
        <div class="flex flex-wrap justify-center gap-8 px-6">
            <div class="flex items-center gap-2 text-gray-400 text-xs"><i class="fa-solid fa-check text-[#95C951]"></i> Multi-Branch Support</div>
            <div class="flex items-center gap-2 text-gray-400 text-xs"><i class="fa-solid fa-check text-[#95C951]"></i> Custom Branding</div>
            <div class="flex items-center gap-2 text-gray-400 text-xs"><i class="fa-solid fa-check text-[#95C951]"></i> Ongoing Support & Updates</div>
            <div class="flex items-center gap-2 text-gray-400 text-xs"><i class="fa-solid fa-check text-[#95C951]"></i> Data Ownership</div>
            <div class="flex items-center gap-2 text-gray-400 text-xs"><i class="fa-solid fa-check text-[#95C951]"></i> 99.9% Uptime SLA</div>
        </div>
    </div>

    <div class="relative z-10 text-center space-y-6 max-w-2xl mx-auto px-6 py-20">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#3f89c9]/15 border border-[#3f89c9]/30 text-[#3f89c9] text-xs font-bold tracking-widest uppercase">
            <i class="fa-solid fa-utensils text-[10px]"></i>
            Ready to Transform Your Restaurant?
        </span>
        <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
            Let's build your <br>
            <span class="bg-gradient-to-r from-[#3f89c9] via-[#2fadc3] to-[#3f89c9] text-transparent bg-clip-text">Careevo.</span>
        </h2>
        <p class="text-gray-300 font-light text-base leading-relaxed">
            Whether you're running a single café or a 20-branch chain — Qonkar will design, build, and deploy a custom Careevo system tailored to your exact workflow. From POS to analytics — fully yours.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
            <a href="/contact-us" class="inline-flex items-center justify-center gap-3 px-10 py-4 rounded-full bg-gradient-to-r from-[#3f89c9] to-[#2fadc3] text-[#000d16] font-bold text-base hover:opacity-90 transition-all duration-300 shadow-[0_0_30px_rgba(245,158,11,0.35)] hover:shadow-[0_0_45px_rgba(234,88,12,0.5)] hover:scale-105 group">
                Start Your Project
                <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
            <a href="/portfolio" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full bg-white/5 border border-white/15 text-white font-semibold hover:bg-white/10 hover:border-white/30 transition-all duration-300 backdrop-blur-sm">
                <i class="fa-solid fa-briefcase text-sm"></i>
                View More Work
            </a>
        </div>
    </div>
</section>

<script>
// Animated counter for metric numbers
const counters = document.querySelectorAll('.counter');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.dataset.target);
            let current = 0;
            const step = Math.ceil(target / 40);
            const timer = setInterval(() => {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                el.textContent = current;
            }, 40);
            observer.unobserve(el);
        }
    });
}, { threshold: 0.5 });
counters.forEach(c => observer.observe(c));
</script>



<!-- ==========================================
     FAQ SECTION — Careevo Restaurant Software
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center mb-12 bg-no-repeat bg-[length:40%] bg-[url('/images/background_curve.svg')] bg-[center_top_60px]">
        <div class="section-pill">GOT QUESTIONS?</div>
        <h2 class="text-3xl md:text-4xl font-light mt-4 mb-3">
            Frequently Asked <b>Questions</b>
        </h2>
        <p class="font-light leading-relaxed text-gray-400 max-w-xl mx-auto">
            Everything you need to know about Careevo Restaurant Management Software before making a decision.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

        <!-- FAQ Accordion -->
        <div class="space-y-4 max-w-2xl mx-auto w-full order-2 lg:order-1">

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">What is Careevo and what does it do?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <div class="px-6 py-4 text-gray-300 space-y-2">
                        <p>Careevo is an all-in-one restaurant management platform built by Qonkar Technologies. It handles everything from <b>POS & Order Management</b> to <b>Kitchen Display Systems</b>, real-time inventory tracking, staff scheduling, and powerful analytics — all from a single dashboard.</p>
                    </div>
                </div>
            </div>

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">Can Careevo support multiple restaurant branches?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <p class="px-6 py-4 text-gray-300">Yes! Careevo is built specifically for <b>multi-branch restaurant operations</b>. You can manage menus, staff, inventory, and performance reports for all your locations from a single centralized control panel. Branch-level and chain-wide reporting is fully supported.</p>
                </div>
            </div>

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">How long does onboarding take?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <p class="px-6 py-4 text-gray-300">Most restaurants are fully live within <b>3–5 business days</b>. Our onboarding team handles all setup including menu digitization, staff training, hardware integration, and data migration from your existing systems. We ensure zero disruption to your daily operations.</p>
                </div>
            </div>

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">Does it integrate with delivery platforms like Foodpanda or Uber Eats?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <p class="px-6 py-4 text-gray-300">Absolutely. Careevo integrates with major third-party delivery platforms including <b>Foodpanda, Uber Eats, Careem Food</b>, and more. Orders from all channels automatically flow into your unified kitchen queue, eliminating the need for multiple tablets and manual order entry.</p>
                </div>
            </div>

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">Is Careevo available on mobile and tablets?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <p class="px-6 py-4 text-gray-300">Yes. Careevo runs on <b>Android and iOS tablets, smartphones</b>, as well as desktop browsers. The POS interface is optimised for touchscreen use, and managers can access full reporting and controls from any device, anywhere in the world.</p>
                </div>
            </div>

            <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                    <span class="text-white">What kind of support does Qonkar provide?</span>
                    <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                        <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                    <p class="px-6 py-4 text-gray-300">Qonkar offers <b>24/7 dedicated support</b> via chat, phone, and email. All Careevo clients are assigned a dedicated account manager. We also offer on-site visits for enterprise clients, quarterly system reviews, and ongoing feature updates at no additional cost.</p>
                </div>
            </div>

        </div>

        <!-- Right Side Image -->
        <div class="flex justify-center order-1 lg:order-2">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-br from-[#3f89c9]/20 to-[#85d55c]/10 rounded-3xl blur-xl"></div>
                <div class="relative bg-[#00101a] border border-white/10 rounded-2xl p-8 max-w-sm shadow-2xl">
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#3f89c9] to-[#2fadc3] flex items-center justify-center mb-6 shadow-lg">
                        <i class="fa-solid fa-utensils text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Still have questions?</h3>
                    <p class="text-gray-400 text-sm font-light leading-relaxed mb-6">Our restaurant technology experts are ready to walk you through Careevo and answer any specific questions about your setup.</p>
                    <a href="/contact-us" class="inline-flex items-center gap-2 px-6 py-3 rounded-full text-white font-semibold text-sm transition-all duration-300 hover:scale-105 shadow-lg"
                       style="background: linear-gradient(135deg, #3f89c9, #2fadc3, #85d55c);">
                        Talk to an Expert
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <!-- Trust badges -->
                    <div class="mt-6 pt-6 border-t border-white/10 flex items-center gap-4">
                        <div class="flex items-center gap-1.5 text-xs text-gray-400">
                            <i class="fa-solid fa-shield-halved text-[#85d55c]"></i>
                            <span>99.9% Uptime</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-400">
                            <i class="fa-solid fa-headset text-[#2fadc3]"></i>
                            <span>24/7 Support</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs text-gray-400">
                            <i class="fa-solid fa-bolt text-[#3f89c9]"></i>
                            <span>3-Day Setup</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========== FOOTER ========== -->
<footer>
    <div class="w-full mx-auto bg-gradient-to-r from-[#348bcf] to-[#7dd569] text-white px-10 sm:px-14 py-8 ">
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
                        <li><a href="/services/automative-app" class="hover:underline">Automotive App</a></li>
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
                                <a href="/career" class="hover:underline">Careers</a>
                            </li>
                            <li>
                                <a href="/blogs" class="hover:underline">Blogs and News</a>
                            </li>
                            <li>
                                <a href="/privacy-policy" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="/terms-of-service" class="hover:underline">Terms of Services</a>
                            </li>
                            <li>
                                <a href="/help-and-support" class="hover:underline">Help and Support</a>
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

<script src="/script/navbar.js"></script>
<script src="/script/FAQ.js"></script>
</body>
</html>
