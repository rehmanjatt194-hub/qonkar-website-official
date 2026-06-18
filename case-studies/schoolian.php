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
    <meta name="description" content="Schoolian Case Study - Premium Web-Based School ERP and Automation Solutions by Qonkar Technologies." />
    <meta name="keywords" content="Schoolian, School Management System, ERP, EdTech, Qonkar, Student Tracking, Gradebook" />
    <meta name="author" content="Qonkar" />

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Schoolian Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Discover how Schoolian automated school administrative operations, attendance workflows, and grading systems across school networks." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com/case-studies/schoolian" />
    <meta property="og:image" content="https://qonkar.com/images/case-studies/schoolian_dashboard.png" />

    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Title -->
    <title>Schoolian Case Study | Qonkar Technologies</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Theme & Reusable Styles -->
    <link rel="stylesheet" href="/styles/index.css">
    <style>
        select option {
            background-color: #000;
            color: #fff;
        }
        select option:disabled {
            color: #9ca3af;
        }
        html {
            scroll-behavior: smooth;
        }
        
        /* EdTech Glowing Accents (Blue, Cyan, Green) */
        .glow-box-blue {
            box-shadow: 0 0 15px rgba(63, 137, 201, 0.2);
            border-color: rgba(63, 137, 201, 0.3);
        }
        .glow-box-cyan {
            box-shadow: 0 0 15px rgba(47, 173, 195, 0.2);
            border-color: rgba(47, 173, 195, 0.3);
        }
        .glow-box-green {
            box-shadow: 0 0 15px rgba(133, 213, 92, 0.2);
            border-color: rgba(133, 213, 92, 0.3);
        }
        
        /* Schoolian Dashboard Mockup Custom CSS */
        .portal-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .portal-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6), 0 0 25px rgba(47, 173, 195, 0.35);
            border-color: rgba(47, 173, 195, 0.5);
        }
        
        .roadmap-card {
            position: relative;
            transition: all 0.3s ease;
        }
        .roadmap-card:hover {
            border-color: var(--secondary-color);
            background: rgba(47, 173, 195, 0.03);
            transform: scale(1.02);
        }
        
        /* Pulse Animation for Portal Nodes */
        @keyframes custom-pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.8;
            }
            50% {
                transform: scale(1.05);
                opacity: 1;
            }
        }
        .active-dot-pulse {
            animation: custom-pulse 2s infinite ease-in-out;
        }
    </style>
</head>

<body class="bg-[#080808] text-white">

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
                                    <li><a href="/services/automative-app" class="hover:text-[#95C951] transition">Automotive Apps </a></li>
                                    <li><a href="/services/healthcare-and-hippa-apps" class="hover:text-[#95C951] transition">Healthcare And HIPAA Apps </a></li>
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
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automotive App </a>
                        <a href="/services/healthcare-and-hippa-apps" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare & HIPPA App </a>                        
                    </div>
                </div>
            </div>

            <a href="/portfolio" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
            <a href="/blogs" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
</header>

<!-- ==========================================
     1. HERO SECTION (4-Portal Switcher Layout)
     ========================================== -->
<section class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[70vh] mt-6 mb-16 rounded-[30px] overflow-hidden flex items-center bg-[#0d0d0f] border border-white/5">
    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-80" style="background-image: linear-gradient(to right, rgba(8, 8, 10, 0.4) 10%, rgba(8, 8, 10, 0.7) 50%, rgba(8, 8, 10, 0.95) 90%), url('/images/case-studies/schoolian_bg.png'); mix-blend-mode: normal;"></div>
    <div class="absolute -top-[20%] -left-[10%] w-[50vw] h-[50vw] bg-[var(--primary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-[20%] -right-[10%] w-[50vw] h-[50vw] bg-[var(--secondary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full py-16 px-4 sm:px-8">
        
        <!-- Left Column: Content -->
        <div class="lg:col-span-6 text-left space-y-6">
            <div class="inline-flex glass-border shadow-[0_0_15px_rgba(47,173,195,0.15)]">
                <div class="glass-background">
                    <div class="glass px-4 py-1.5 flex items-center gap-2 text-xs font-semibold tracking-wider">
                        <span class="w-2.5 h-2.5 rounded-full bg-[var(--secondary-color)] shadow-[0_0_8px_var(--secondary-color)] active-dot-pulse"></span>
                        EDTECH SAAS AUTOMATION
                    </div>
                </div>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light leading-tight tracking-tight">
                Automating school networks with <br>
                <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Schoolian ERP.</span>
            </h1>

            <p class="text-gray-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
                A premium, multi-portal EdTech platform built to centralize school administration, streamline teacher registers, automate dynamic grading workflows, and simplify parent billing.
            </p>

            <!-- Quick Stats -->
            <div class="grid grid-cols-3 gap-6 pt-6 border-t border-white/5 max-w-md">
                <div>
                    <p class="text-2xl font-bold text-white">250+</p>
                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mt-0.5">Onboarded Schools</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-[var(--secondary-color)]">1.2M+</p>
                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mt-0.5">Active Students</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-[var(--tertiary-color)]">99.8%</p>
                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mt-0.5">Fee Collection</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Portal Switching UI Simulation -->
        <div class="lg:col-span-6 flex justify-center lg:justify-end">
            <div class="w-full max-w-lg bg-[#141417]/80 border border-white/10 rounded-2xl p-6 shadow-2xl backdrop-blur-md relative">
                
                <!-- Simulated App Bar -->
                <div class="flex items-center justify-between border-b border-white/5 pb-4 mb-4">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                        <span class="w-3 h-3 rounded-full bg-green-500"></span>
                    </div>
                    <div class="text-[10px] text-gray-500 font-mono tracking-widest">SCHOOLIAN_PORTAL_CORE</div>
                </div>

                <!-- Simulation Info Block -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between bg-[#1b1b20] border border-white/5 p-3 rounded-xl">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[var(--secondary-color)]">admin_panel_settings</span>
                            <div>
                                <h4 class="text-xs font-bold text-white">Admin Command Center</h4>
                                <p class="text-[9px] text-gray-400 font-light">Multi-branch financial auditing</p>
                            </div>
                        </div>
                        <span class="text-[9px] text-[var(--tertiary-color)] font-bold tracking-wider uppercase bg-[var(--tertiary-color)]/10 px-2 py-0.5 rounded border border-[var(--tertiary-color)]/25">Live Ledger</span>
                    </div>

                    <div class="flex items-center justify-between bg-[#1b1b20]/50 border border-white/5 p-3 rounded-xl opacity-80">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[var(--primary-color)]">co_present</span>
                            <div>
                                <h4 class="text-xs font-bold text-white">Teacher Workspace</h4>
                                <p class="text-[9px] text-gray-400 font-light">Dynamic digital gradebooks</p>
                            </div>
                        </div>
                        <span class="text-[9px] text-gray-400">100ms sync</span>
                    </div>

                    <div class="flex items-center justify-between bg-[#1b1b20]/50 border border-white/5 p-3 rounded-xl opacity-85">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[var(--tertiary-color)]">family_history</span>
                            <div>
                                <h4 class="text-xs font-bold text-white">Parent Companion Portal</h4>
                                <p class="text-[9px] text-gray-400 font-light">Real-time alerts & online billing</p>
                            </div>
                        </div>
                        <span class="text-[9px] text-[var(--secondary-color)]">Auto Reminders</span>
                    </div>
                </div>

                <!-- Featured Mockup Graphic Layer -->
                <div class="mt-6 border border-white/5 rounded-xl overflow-hidden shadow-inner">
                    <img src="/images/case-studies/schoolian_dashboard.png" alt="Portal Preview" class="w-full h-auto object-cover opacity-90">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     2. PROJECT OVERVIEW & 3. CLIENT BACKGROUND
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Overview Card -->
        <div class="lg:col-span-6 bg-[#0c0c0e] border border-white/5 rounded-3xl p-8 lg:p-12 flex flex-col justify-between hover:border-white/10 transition-all duration-300">
            <div class="space-y-6">
                <span class="inline-block bg-[var(--primary-color)]/10 text-[var(--primary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[var(--primary-color)]/25">Overview</span>
                <h3 class="text-3xl font-light text-white leading-tight">Empowering education with <span class="italic text-[var(--secondary-color)] font-bold">structured workflows.</span></h3>
                <p class="text-gray-300 font-light text-sm leading-relaxed">
                    Schoolian is a comprehensive multi-branch School ERP designed to digitize administrative registers, student records, fee collection procedures, and parent communication channels.
                </p>
                <p class="text-gray-400 font-light text-xs leading-relaxed">
                    Developed using modern cloud frameworks, it bridges operational gaps across all academic departments, delivering unified data visibility.
                </p>
            </div>
            <div class="pt-8 border-t border-white/5 mt-8 flex justify-between items-center text-xs text-[var(--secondary-color)]">
                <span>EdTech Infrastructure</span>
                <span class="font-bold">Pakistan</span>
            </div>
        </div>

        <!-- Client Background Card -->
        <div class="lg:col-span-6 bg-[#0c0c0e] border border-white/5 rounded-3xl p-8 lg:p-12 flex flex-col justify-between hover:border-white/10 transition-all duration-300">
            <div class="space-y-6">
                <span class="inline-block bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[var(--tertiary-color)]/25">Client Background</span>
                <h3 class="text-3xl font-light text-white leading-tight">Scaling across a <span class="italic text-[var(--tertiary-color)] font-bold">growing network.</span></h3>
                <p class="text-gray-300 font-light text-sm leading-relaxed">
                    The client manages a fast-growing network of private institutions serving thousands of active students.
                </p>
                <p class="text-gray-400 font-light text-xs leading-relaxed">
                    With rapid expansion, operational data scattered across spreadsheets and manual records led to severe billing delays, absent tracking errors, and high admin workload.
                </p>
            </div>
            <div class="pt-8 border-t border-white/5 mt-8 flex justify-between items-center text-xs text-[var(--tertiary-color)]">
                <span>Growing Network</span>
                <span class="font-bold">Automated Database</span>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     4. CHALLENGES SECTION (The Legacy Chaos)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sidebar Content -->
        <div class="lg:col-span-4 space-y-6">
            <span class="bg-red-500/10 border border-red-500/25 text-red-400 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">The Legacy Chaos</span>
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-tight">Limitations of <br><span class="text-red-400 font-bold">Manual Schooling</span></h2>
            <p class="text-gray-400 font-light text-sm leading-relaxed">
                Before implementing Schoolian, administrative teams faced critical bottlenecks that impacted daily operations, financial performance, and parent trust.
            </p>
        </div>

        <!-- Challenges Grid -->
        <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-[#121215] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-clock"></i></div>
                <h4 class="text-white font-medium text-base">Manual Roll Call Time</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Class teachers spent up to 45 minutes daily calling names and marking physical registers, reducing actual learning time.</p>
            </div>

            <div class="bg-[#121215] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-box-archive"></i></div>
                <h4 class="text-white font-medium text-base">Paper Student Records</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Paper files and spreadsheets made historical search difficult, causing data duplication and slow profile validation.</p>
            </div>

            <div class="bg-[#121215] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-receipt"></i></div>
                <h4 class="text-white font-medium text-base">Fee Deficits & Dues</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Lack of automated billing notices meant parents frequently missed payment cycles, causing administrative balance deficits.</p>
            </div>

            <div class="bg-[#121215] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-comment-slash"></i></div>
                <h4 class="text-white font-medium text-base">Disconnected Parents</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Zero real-time connection. Parents remained unaware of absenteeism, syllabus progress, or exams schedules.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     5. CORE STRATEGIC GOALS
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 border-t border-white/5">
    <div class="text-center space-y-4 mb-12">
        <span class="bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/25 text-[var(--secondary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Our Strategy</span>
        <h2 class="text-3xl md:text-4xl font-light">Schoolian <b>System Objectives</b></h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl hover:border-[var(--secondary-color)]/20 transition-all">
            <span class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-cloud-arrow-up"></i></span>
            <h4 class="text-white font-medium text-base mt-4 mb-2">Cloud Digitalization</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Migrating manual registers to highly-accessible web and mobile database panels.</p>
        </div>

        <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl hover:border-[var(--primary-color)]/20 transition-all">
            <span class="text-[var(--primary-color)] text-xl"><i class="fa-solid fa-leaf"></i></span>
            <h4 class="text-white font-medium text-base mt-4 mb-2">Eco-Friendly Classrooms</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Eliminating paper dependency across rosters, forms, and report card generations.</p>
        </div>

        <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl hover:border-[var(--tertiary-color)]/20 transition-all">
            <span class="text-[var(--tertiary-color)] text-xl"><i class="fa-solid fa-bell"></i></span>
            <h4 class="text-white font-medium text-base mt-4 mb-2">Auto Notification Hub</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Real-time event, exam schedule, and billing alerts push notifications.</p>
        </div>

        <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl hover:border-[var(--secondary-color)]/20 transition-all">
            <span class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-chart-line"></i></span>
            <h4 class="text-white font-medium text-base mt-4 mb-2">Data-Driven Administration</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Visualizing operational metrics, financial reports, and class stats instantly.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     THE TOOLKIT (Premium Feature Set)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="space-y-2 mb-12 text-left">
        <span class="text-[10px] text-[var(--secondary-color)] uppercase tracking-widest font-mono font-bold">THE TOOLKIT</span>
        <h2 class="text-3xl sm:text-4xl font-light text-white">Premium Feature Set</h2>
    </div>

    <!-- 2-Column Feature Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
        <!-- Card 1 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-users-rectangle"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">STUDENT MGMT</h4>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-user-check"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">ATTENDANCE</h4>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-people-roof"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">PARENT PORTAL</h4>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-money-check-dollar"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">FEE TRACKING</h4>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-chalkboard-user"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">TEACHER HUB</h4>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-[#0e0e11] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[160px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-file-signature"></i></div>
            <div class="mt-4">
                <h4 class="text-xs font-bold text-gray-400 tracking-widest uppercase">EXAM SYSTEM</h4>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. OUR SOLUTION: THE 4 CORE PORTALS
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center space-y-4 mb-16">
        <span class="bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/25 text-[var(--secondary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Unified Ecosystem</span>
        <h2 class="text-3xl md:text-4xl font-light text-white">The <b>4 Core Portals</b></h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm">Every educational stakeholder connected under one secure environment.</p>
    </div>

    <!-- Portals Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <!-- Portal 1 -->
        <div class="portal-card bg-[#0e0e11] border border-white/5 rounded-3xl p-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center">
                    <span class="material-symbols-outlined">shield_person</span>
                </div>
                <h3 class="text-xl font-bold text-white">Admin Command Center</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Enables school directors to manage teacher assignments, billing ledgers, branch analytics, and institutional audits from a unified control deck.
                </p>
            </div>
            <div class="pt-6 border-t border-white/5 mt-6 text-[10px] text-[var(--secondary-color)] uppercase tracking-wider font-semibold">
                Multi-Branch Analytics
            </div>
        </div>

        <!-- Portal 2 -->
        <div class="portal-card bg-[#0e0e11] border border-white/5 rounded-3xl p-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[var(--primary-color)]/10 border border-[var(--primary-color)]/20 text-[var(--primary-color)] flex items-center justify-center">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="text-xl font-bold text-white">Teacher Gradebook Hub</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Designed for class teachers to track student daily roll calls, grade exams, post homework files, and send instant status reports to parents.
                </p>
            </div>
            <div class="pt-6 border-t border-white/5 mt-6 text-[10px] text-[var(--primary-color)] uppercase tracking-wider font-semibold">
                Instant Marks Entry
            </div>
        </div>

        <!-- Portal 3 -->
        <div class="portal-card bg-[#0e0e11] border border-white/5 rounded-3xl p-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/20 text-[var(--tertiary-color)] flex items-center justify-center">
                    <span class="material-symbols-outlined">supervised_user_circle</span>
                </div>
                <h3 class="text-xl font-bold text-white">Parent Mobile Companion</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Enables parents to track children attendance records, review academic report cards, read announcements, and settle billing dues securely.
                </p>
            </div>
            <div class="pt-6 border-t border-white/5 mt-6 text-[10px] text-[var(--tertiary-color)] uppercase tracking-wider font-semibold">
                Billing & Dues Sync
            </div>
        </div>

        <!-- Portal 4 -->
        <div class="portal-card bg-[#0e0e11] border border-white/5 rounded-3xl p-6 flex flex-col justify-between">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-2xl bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="text-xl font-bold text-white">Student Space</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Students can view daily calendars, access shared class resources, download grades, and track virtual homework assignments.
                </p>
            </div>
            <div class="pt-6 border-t border-white/5 mt-6 text-[10px] text-[var(--secondary-color)] uppercase tracking-wider font-semibold">
                Syllabus & Timetable Logs
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     7. FEATURE FOCUS: FEE COLLECTION WORKFLOW
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Workflow Info -->
        <div class="lg:col-span-5 space-y-6">
            <span class="bg-[var(--primary-color)]/10 border border-[var(--primary-color)]/25 text-[var(--primary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Automation Showcase</span>
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-tight">Schoolian Smart <br><span class="text-[var(--secondary-color)] font-bold italic">Fee Collection Workflow</span></h2>
            <p class="text-gray-300 font-light text-sm leading-relaxed">
                Replacing manual slip receipts and collection books with a secure, automated financial sequence.
            </p>
            <div class="border-l-2 border-[var(--primary-color)] pl-4 py-1 text-xs text-gray-400 font-light">
                Autoreconciles student logs in real-time, reducing accounting overheads by 40%.
            </div>
        </div>

        <!-- Visual Sequence Grid -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6 relative">
            
            <!-- Step 1 -->
            <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">01</span>
                <span class="text-[var(--secondary-color)] text-lg"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Invoice Generation</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">System auto-compiles monthly school fee ledgers for all active rosters on the 1st.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">02</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-paper-plane"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Notification Dispatch</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Parents receive SMS alerts and push messages in their portal app instantly.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">03</span>
                <span class="text-[var(--primary-color)] text-lg"><i class="fa-solid fa-credit-card"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Online Portal Checkout</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Parents settle dues securely in the companion app using mobile banking integrations.</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-[#0e0e11] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">04</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-circle-check"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Reconciliation</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Accounting dashboard updates instantly and issues a PDF receipt automatically.</p>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================
     8. & 9. DESIGN & DEVELOPMENT ROADMAP
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 border-t border-white/5">
    <!-- Header -->
    <div class="text-center space-y-2.5 mb-10">
        <span class="inline-flex items-center justify-center px-6 py-2 rounded-full border border-[#2fa9c3]/30 bg-transparent text-[#2fa9c3] text-[10px] font-bold tracking-widest uppercase">
            Our Approach
        </span>
        <h2 class="text-4xl md:text-5xl font-light text-white leading-tight tracking-tight">
            <span class="text-white font-extralight tracking-tighter">System</span> 
            <span class="text-[#2fa9c3] font-normal">Deployment</span> 
            <span class="text-white font-extralight tracking-tighter">Roadmap</span>
        </h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm">
            From requirements auditing to onboarding parent networks.
        </p>
    </div>

    <!-- Timeline Circles (Desktop Only) -->
    <div class="relative w-full max-w-5xl mx-auto mb-6 hidden md:block">
        <!-- Background Connecting Line -->
        <div class="absolute top-1/2 left-0 right-0 -translate-y-1/2 h-[1px] bg-white/10 -z-10"></div>
        <!-- Active Progress Connecting Line (Start to 02) -->
        <div class="absolute top-1/2 left-0 -translate-y-1/2 h-[1px] bg-gradient-to-r from-blue-500 to-[#2fa9c3] w-[33.3%] -z-10"></div>
        
        <!-- Circles Container -->
        <div class="flex justify-between items-center w-full">
            <!-- Circle 01 -->
            <div class="w-12 h-12 rounded-full bg-[#13223f] border border-[#254689] text-[#4f8eff] flex items-center justify-center font-bold font-mono text-sm shadow-lg shadow-[#13223f]/50">
                01
            </div>
            <!-- Circle 02 -->
            <div class="w-12 h-12 rounded-full bg-[#0e272b] border border-[#1b5058] text-[#2fa9c3] flex items-center justify-center font-bold font-mono text-sm shadow-lg shadow-[#0e272b]/50">
                02
            </div>
            <!-- Circle 03 -->
            <div class="w-12 h-12 rounded-full bg-[#1d1435] border border-[#3b276e] text-[#906bee] flex items-center justify-center font-bold font-mono text-sm shadow-lg shadow-[#1d1435]/50">
                03
            </div>
            <!-- Circle 04 -->
            <div class="w-12 h-12 rounded-full bg-[#2f1c0e] border border-[#5d381c] text-[#d97706] flex items-center justify-center font-bold font-mono text-sm shadow-lg shadow-[#2f1c0e]/50">
                04
            </div>
        </div>
    </div>

    <!-- Gradient Progress Bar (Matches the design in screenshot) -->
    <div class="relative w-full max-w-5xl mx-auto mb-3 px-1">
        <div class="h-[6px] w-full bg-[#0f0f13] rounded-full overflow-hidden">
            <div class="h-full bg-gradient-to-r from-blue-500 via-[#2fa9c3] to-purple-500 rounded-full" style="width: 48%;"></div>
        </div>
    </div>

    <!-- Labels Below Progress Bar -->
    <div class="flex justify-between items-center w-full max-w-5xl mx-auto mb-10 px-1 text-xs text-gray-500 font-light">
        <span>Start</span>
        <span class="text-[#2fa9c3] font-medium">Phase 2 active</span>
        <span>Complete</span>
    </div>

    <!-- Separated Cards Container -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
        
        <!-- Phase 1 Card -->
        <div class="roadmap-card bg-[#0e0e11]/80 border border-white/5 rounded-3xl p-6 space-y-4 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2 hover:bg-[#0f0f13] hover:shadow-2xl hover:shadow-[#2fa9c3]/5 hover:border-white/10 hover:scale-[1.02] relative">
            <div class="space-y-4">
                <!-- Icon and Badge -->
                <div class="flex items-center gap-3">
                    <span class="text-xl text-blue-500/80"><i class="fa-regular fa-square"></i></span>
                    <span class="px-2.5 py-0.5 rounded border border-blue-500/20 text-blue-400 text-[10px] font-bold tracking-widest font-mono">PHASE 01</span>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-bold text-white tracking-tight">Institutional Audit</h3>
                <!-- Description -->
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Analyzing school structures, class levels, subjects, grading policies, and custom fee setups.
                </p>
            </div>
        </div>

        <!-- Phase 2 Card (Active) -->
        <div class="roadmap-card bg-[#0e1616]/80 border border-[#2fa9c3]/30 rounded-3xl p-6 space-y-4 flex flex-col justify-between relative before:absolute before:top-0 before:left-0 before:right-0 before:h-[3px] before:bg-[#2fa9c3] before:rounded-t-3xl transition-all duration-300 hover:-translate-y-2 hover:bg-[#122020] hover:shadow-2xl hover:shadow-[#2fa9c3]/20 hover:border-[#2fa9c3]/60 hover:scale-[1.02]">
            <div class="space-y-4">
                <!-- Icon and Badge -->
                <div class="flex items-center gap-3">
                    <span class="text-xl text-[#2fa9c3]"><i class="fa-regular fa-square"></i></span>
                    <span class="px-2.5 py-0.5 rounded border border-[#2fa9c3]/30 text-[#2fa9c3] text-[10px] font-bold tracking-widest font-mono">PHASE 02</span>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-bold text-white tracking-tight">Data Ingestion</h3>
                <!-- Description -->
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Cleaning spreadsheets and importing student archives, family profiles, academic records, and teacher data safely.
                </p>
            </div>
        </div>

        <!-- Phase 3 Card -->
        <div class="roadmap-card bg-[#0e0e11]/80 border border-white/5 rounded-3xl p-6 space-y-4 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2 hover:bg-[#0f0f13] hover:shadow-2xl hover:shadow-[#2fa9c3]/5 hover:border-white/10 hover:scale-[1.02] relative">
            <div class="space-y-4">
                <!-- Icon and Badge -->
                <div class="flex items-center gap-3">
                    <span class="text-xl text-purple-500/80"><i class="fa-regular fa-square"></i></span>
                    <span class="px-2.5 py-0.5 rounded border border-purple-500/20 text-purple-400 text-[10px] font-bold tracking-widest font-mono">PHASE 03</span>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-bold text-white tracking-tight">Portal Customization</h3>
                <!-- Description -->
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Structuring workflows for user portals, creating access control tags, and setting SMS integrations.
                </p>
            </div>
        </div>

        <!-- Phase 4 Card -->
        <div class="roadmap-card bg-[#0e0e11]/80 border border-white/5 rounded-3xl p-6 space-y-4 flex flex-col justify-between transition-all duration-300 hover:-translate-y-2 hover:bg-[#0f0f13] hover:shadow-2xl hover:shadow-[#2fa9c3]/5 hover:border-white/10 hover:scale-[1.02] relative">
            <div class="space-y-4">
                <!-- Icon and Badge -->
                <div class="flex items-center gap-3">
                    <span class="text-xl text-amber-600/80"><i class="fa-regular fa-square"></i></span>
                    <span class="px-2.5 py-0.5 rounded border border-amber-600/20 text-amber-500 text-[10px] font-bold tracking-widest font-mono">PHASE 04</span>
                </div>
                <!-- Title -->
                <h3 class="text-xl font-bold text-white tracking-tight">Onboarding & Launch</h3>
                <!-- Description -->
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Conducting teacher training, publishing parent login codes, and activating live portal operations.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     11. TRADITIONAL VS SCHOOLIAN COMPARISON
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    
    <!-- Header -->
    <div class="space-y-4 mb-12">
        <span class="inline-flex items-center justify-center px-6 py-2 rounded-full border border-[var(--secondary-color)]/30 bg-transparent text-[var(--secondary-color)] text-[10px] font-bold tracking-widest uppercase">
            Comparison
        </span>
        <h2 class="text-4xl md:text-5xl font-light text-white leading-tight">
            <span class="text-white font-extralight tracking-tighter">Before vs After</span> 
            <span class="text-[var(--secondary-color)] font-bold italic">Contrast</span>
        </h2>
        <p class="text-zinc-400 font-light text-sm max-w-2xl leading-relaxed">
            Observe the difference in daily workflows before and after Qonkar implemented Schoolian ERP across the networks.
        </p>
    </div>

    <!-- Main Comparison Split Box -->
    <div class="grid grid-cols-1 md:grid-cols-2 bg-[#0a0a0c]/80 border border-white/5 rounded-3xl overflow-hidden divide-y md:divide-y-0 md:divide-x divide-white/5 mb-6">
        
        <!-- Left Side: Traditional Schooling -->
        <div class="p-8 space-y-8 relative before:absolute before:left-0 before:top-8 before:h-8 before:w-[3px] before:bg-red-500 before:rounded-r">
            <!-- Header -->
            <div class="flex items-center gap-3 pl-4">
                <div class="w-8 h-8 rounded-full bg-red-500/10 border border-red-500/25 text-red-400 flex items-center justify-center text-sm shadow-md shadow-red-950/30">
                    <i class="fa-solid fa-ban"></i>
                </div>
                <span class="text-xs font-bold tracking-widest text-red-400 uppercase font-mono">Traditional Schooling</span>
            </div>

            <!-- List Items -->
            <div class="space-y-6 pl-4">
                
                <!-- Roster Roll Calls -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-red-500 text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Roster Roll Calls</h4>
                    </div>
                    <p class="text-zinc-400 text-sm font-light leading-relaxed">
                        Manually marked on register, logged into spreadsheets by hand.
                    </p>
                </div>

                <!-- Fee Reminders -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-red-500 text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Fee Reminders</h4>
                    </div>
                    <p class="text-zinc-400 text-sm font-light leading-relaxed">
                        Required physical printing, mail routing, or phone chasing.
                    </p>
                </div>

                <!-- Progress Reports -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-red-500 text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Progress Reports</h4>
                    </div>
                    <p class="text-zinc-400 text-sm font-light leading-relaxed">
                        Printed term reports distributed physically, often delayed weeks.
                    </p>
                </div>

                <!-- Parent Communication -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-red-500 text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Parent Communication</h4>
                    </div>
                    <p class="text-zinc-400 text-sm font-light leading-relaxed">
                        Phone calls, paper notes, or unreliable SMS chains.
                    </p>
                </div>

            </div>
        </div>

        <!-- Right Side: Schoolian Optimized -->
        <div class="p-8 space-y-8 relative before:absolute before:left-0 before:top-8 before:h-8 before:w-[3px] before:bg-[var(--tertiary-color)] before:rounded-r">
            <!-- Header -->
            <div class="flex items-center gap-3 pl-4">
                <div class="w-8 h-8 rounded-full bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/25 text-[var(--tertiary-color)] flex items-center justify-center text-sm shadow-md shadow-emerald-950/30">
                    <i class="fa-solid fa-check"></i>
                </div>
                <span class="text-xs font-bold tracking-widest text-[var(--tertiary-color)] uppercase font-mono">Schoolian Optimized</span>
            </div>

            <!-- List Items -->
            <div class="space-y-6 pl-4">
                
                <!-- Roster Roll Calls -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-[var(--tertiary-color)] text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Roster Roll Calls</h4>
                    </div>
                    <p class="text-white text-sm font-light leading-relaxed">
                        Marked in portal under 2 mins, auto-sent to parent app instantly.
                    </p>
                </div>

                <!-- Fee Reminders -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-[var(--tertiary-color)] text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Fee Reminders</h4>
                    </div>
                    <p class="text-white text-sm font-light leading-relaxed">
                        Automated push notices with direct payment links inside app.
                    </p>
                </div>

                <!-- Progress Reports -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-[var(--tertiary-color)] text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Progress Reports</h4>
                    </div>
                    <p class="text-white text-sm font-light leading-relaxed">
                        Live grade dashboards accessible anytime by parents and students.
                    </p>
                </div>

                <!-- Parent Communication -->
                <div class="space-y-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-[var(--tertiary-color)] text-xs"><i class="fa-regular fa-square"></i></span>
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-slate-400/60 font-mono">Parent Communication</h4>
                    </div>
                    <p class="text-white text-sm font-light leading-relaxed">
                        In-app messaging with read receipts and broadcast announcements.
                    </p>
                </div>

            </div>
        </div>

    </div>

    <!-- Bottom Daily Admin Load Split Box -->
    <div class="grid grid-cols-1 md:grid-cols-2 border border-white/5 rounded-3xl overflow-hidden divide-y md:divide-y-0 md:divide-x divide-white/5">
        <!-- Before admin load -->
        <div class="bg-[#180a0a]/20 p-8 text-center space-y-2">
            <div class="text-3xl md:text-4xl font-bold text-red-500 font-mono tracking-tight">4–6 hrs</div>
            <div class="text-[10px] font-bold tracking-widest text-zinc-500 uppercase font-mono">Daily Admin Load (Before)</div>
        </div>
        <!-- After admin load -->
        <div class="bg-[var(--tertiary-color)]/5 p-8 text-center space-y-2">
            <div class="text-3xl md:text-4xl font-bold text-[var(--tertiary-color)] font-mono tracking-tight">&lt; 45 min</div>
            <div class="text-[10px] font-bold tracking-widest text-zinc-500 uppercase font-mono">Daily Admin Load (After)</div>
        </div>
    </div>

</section>

<!-- ==========================================
     12. RESULTS & ACHIEVEMENTS (KPI Cards)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center mb-16 space-y-4">
        <span class="bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/25 text-[var(--tertiary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Achievements</span>
        <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight">Project Results & Metrics</h2>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Admin Overhead</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">70% Less</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Reduction in paperwork and manual archives.</p>
        </div>
        
        <!-- Metric Card 2 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Attendance Time</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">60% Faster</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Class checks completed within seconds.</p>
        </div>
        
        <!-- Metric Card 3 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Parent engagement</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">55% Better</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Real-time alerts loop parent responses faster.</p>
        </div>

        <!-- Metric Card 4 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Paper dependencies</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">80% Less</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed">Forms and files converted to cloud registries.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     13. SCREENSHOTS GALLERY
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5 text-center">
    <div class="space-y-4 mb-12">
        <span class="bg-[var(--primary-color)]/10 border border-[var(--primary-color)]/25 text-[var(--primary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Interface Preview</span>
        <h2 class="text-3xl md:text-4xl font-light">Schoolian <b>SaaS Showcase</b></h2>
    </div>

    <!-- Gallery Container -->
    <div class="max-w-4xl mx-auto border border-white/10 rounded-3xl overflow-hidden shadow-2xl relative bg-[#0e0e11] p-3">
        <img src="/images/case-studies/schoolian_dashboard.png" alt="Schoolian Main Dashboard Screen" class="w-full h-auto object-cover rounded-2xl">
    </div>
</section>

<!-- ==========================================
     14. CLIENT TESTIMONIAL
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5 text-center">
    <div class="max-w-5xl mx-auto bg-[#101012] border border-white/5 rounded-3xl p-10 md:p-14 relative overflow-hidden text-left shadow-2xl transition-all duration-500 hover:border-white/10">
        <!-- Quote icon -->
        <div class="text-[var(--secondary-color)]/10 text-9xl absolute right-12 top-6 font-serif select-none pointer-events-none">
            ”
        </div>
        
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-center">
            <!-- Left Side Avatar -->
            <div class="md:col-span-4 flex justify-center md:justify-start">
                <div class="w-48 h-48 rounded-full border-4 border-[var(--secondary-color)]/30 bg-[#080808]/80 p-1 flex items-center justify-center overflow-hidden shadow-2xl transition-all duration-500 hover:border-[var(--secondary-color)]/60">
                    <img src="/images/case-studies/director_avatar.png" alt="Director, Educational Network" class="w-full h-full rounded-full object-cover">
                </div>
            </div>
            
            <!-- Right Side Content -->
            <div class="md:col-span-8 space-y-6">
                <p class="text-white text-base sm:text-lg md:text-xl font-light italic leading-relaxed text-gray-200">
                    "Schoolian transformed how our schools operate. Administrative tasks that once took hours now take minutes. The platform improved efficiency across every department."
                </p>
                
                <div class="space-y-1">
                    <h3 class="text-xl sm:text-2xl font-semibold text-[var(--secondary-color)]">Director, Educational Network</h3>
                    <p class="text-xs sm:text-sm font-light text-gray-400">Managing Director, Private Schools Network Group</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     15. RELATED CASE STUDIES (Linking to Homalix)
     ========================================== -->
<section id="local-cases" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5 text-center">
    <div class="space-y-4 mb-12">
        <span class="bg-[var(--primary-color)]/10 border border-[var(--primary-color)]/25 text-[var(--primary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Related Projects</span>
        <h2 class="text-3xl md:text-4xl font-light">Explore <b>More Work</b></h2>
    </div>

    <div class="max-w-md mx-auto">
        <div class="bg-[#101012] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="relative w-full h-40 bg-black/60 overflow-hidden flex items-center justify-center">
                <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('/images/successful-business-collaboration-and-client-meeting.webp');"></div>
                <div class="absolute top-4 left-4 bg-[var(--secondary-color)]/20 border border-[var(--secondary-color)]/50 text-[var(--secondary-color)] text-[9px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">
                    Clinical Platform
                </div>
                <h4 class="relative z-10 text-white font-bold text-lg px-6 text-center">Homalix Hospital Central</h4>
            </div>

            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between text-left">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-white group-hover:text-[var(--secondary-color)] transition-colors">Homalix Case Study</h3>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">
                        A unified multi-branch Hospital Management and patient records central database.
                    </p>
                </div>
                
                <div class="pt-4 border-t border-white/5 flex items-center justify-between text-xs text-[var(--secondary-color)]">
                    <a href="/case-studies/homalix.php" class="font-bold flex items-center gap-1 hover:underline">
                        View Case Study
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     16. FINAL CTA SECTION
     ========================================== -->
<section class="w-full bg-[#101012] py-20 text-center border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 space-y-8 flex flex-col items-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-light text-white leading-tight">
            Ready to digitize your <br>
            <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Academic Organization?</span>
        </h2>
        
        <p class="text-gray-300 font-light text-sm sm:text-base leading-relaxed max-w-2xl">
            Let Qonkar Technologies design and engineer a custom digital ERP system built to handle transaction scalability and multi-branch synchronization.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <a href="/contact-us" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full bg-[var(--primary-color)] text-white text-sm sm:text-base font-medium transition-all duration-300 hover:bg-[var(--secondary-color)] hover:scale-105 shadow-xl">
                Get In Touch
                <span class="text-white text-lg">➔</span>
            </a>
            <a href="/portfolio" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full border border-white/20 text-white text-sm sm:text-base font-medium hover:bg-white/10 transition-all duration-300">
                Explore Portfolio
            </a>
        </div>
    </div>
</section>

<!-- Standard Footer -->
<footer>
    <div class="w-full mx-auto bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-10 sm:px-14 py-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-2 text-white px-4">
                    <a href="/"><img src="/images/Logo_White_Color.webp" alt="Qonkar Logo" class="w-48"></a>
                </div>

                <div class="flex gap-3">
                    <a href="https://www.linkedin.com/company/qonkar" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/qonkar" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/qonkartechnologies" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@QonkarTechnologiesPvtLtd" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black"><i class="fab fa-youtube"></i></a>
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

            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4 border-t border-white/20 pt-4 mt-8">
                <p class="text-sm">&copy; Qonkar 2025. All rights reserved</p>
                <div class="flex gap-4 text-sm">
                    <a href="/contact-us" class="hover:underline">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/script/navbar.js"></script>
</body>
</html>
