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
    <meta name="description" content="Homalix Case Study - Unified Hospital Management and Clinical Automation Solutions by Qonkar Technologies." />
    <meta name="keywords" content="Homalix, Hospital Management System, HMS, Qonkar, Clinical Automation, EMR" />
    <meta name="author" content="Qonkar" />

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Homalix Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Explore how Homalix streamlined operational workflows and automated medical tracking across multi-specialty healthcare networks." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com/case-studies/homalix" />
    <meta property="og:image" content="https://qonkar.com/images/case-studies/homalix_mockup.png" />

    <!-- Google Fonts & Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Title -->
    <title>Homalix Case Study | Qonkar Technologies</title>

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
        .progress-bar-glow-red {
            box-shadow: 0 0 10px rgba(239, 68, 68, 0.5);
        }
        .progress-bar-glow-green {
            box-shadow: 0 0 10px rgba(133, 213, 92, 0.6);
        }
        
        /* Intelligence Transformation Custom Styles */
        @keyframes pulse-cyan {
            0%, 100% {
                box-shadow: 0 0 20px rgba(47, 173, 195, 0.4);
                border-color: rgba(47, 173, 195, 0.6);
                transform: scale(1.1);
            }
            50% {
                box-shadow: 0 0 40px rgba(47, 173, 195, 0.9);
                border-color: rgba(47, 173, 195, 1);
                transform: scale(1.15);
            }
        }
        @keyframes data-flow {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }
        .glowing-core-node {
            animation: pulse-cyan 3.5s infinite ease-in-out;
        }
        
        .transformation-node {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .transformation-node:hover {
            transform: translateY(-6px) scale(1.15);
            background: rgba(47, 173, 195, 0.1);
            border-color: rgba(47, 173, 195, 0.5);
            color: var(--secondary-color) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(47, 173, 195, 0.3);
        }
        .transformation-node:hover .node-icon {
            transform: rotate(15deg) scale(1.1);
            color: var(--secondary-color) !important;
        }
        
        .metric-card-premium {
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }
        .metric-card-premium::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(47, 173, 195, 0) 0%, rgba(47, 173, 195, 0.04) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
            z-index: 1;
        }
        .metric-card-premium:hover::after {
            opacity: 1;
        }
        .metric-card-premium:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45), 0 0 30px rgba(47, 173, 195, 0.2);
            border-color: rgba(47, 173, 195, 0.4);
        }
        .metric-card-premium .metric-value {
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .metric-card-premium:hover .metric-value {
            text-shadow: 0 0 20px rgba(63, 137, 201, 0.7);
            transform: scale(1.06);
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
     HERO SECTION
     ========================================== -->
<section class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[60vh] mt-6 mb-12 rounded-[25px] overflow-hidden flex items-center background-backdrop-card">
    <!-- Darkened Hospital/Clinic Overlay Background -->
    <div class="absolute inset-0 z-0 bg-cover bg-center md:bg-right" style="background-image: linear-gradient(to right, rgba(8, 8, 10, 0.95) 30%, rgba(8, 8, 10, 0.75) 55%, rgba(8, 8, 10, 0.2) 100%), url('/images/case-studies/background/homalix_bg.png'); filter: contrast(1.05); mix-blend-mode: normal;"></div>

    <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full py-12 px-4 sm:px-8">
        
        <!-- Left Side content -->
        <div class="lg:col-span-7 text-left space-y-6">
            <div class="inline-flex glass-border shadow-[0_0_15px_rgba(47,173,195,0.2)]">
                <div class="glass-background">
                    <div class="glass px-4 py-1.5 flex items-center gap-2 text-xs font-semibold tracking-wider">
                        <span class="w-2.5 h-2.5 rounded-full bg-[var(--tertiary-color)] shadow-[0_0_8px_var(--tertiary-color)] animate-pulse"></span>
                        ENTERPRISE STATUS: ACTIVE
                    </div>
                </div>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light leading-tight tracking-tight">
                Homalix Multi-Branch <br>
                <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Clinical Network Hub.</span>
            </h1>

            <p class="text-gray-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
                A unified, secure, and highly scalable Hospital Management System centralizing electronic medical records, patient flow triage, and diagnostics across healthcare networks.
            </p>

            <!-- Metadata block -->
            <div class="grid grid-cols-3 gap-4 pt-6 border-t border-white/10 max-w-lg">
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Network ID</p>
                    <p class="text-base sm:text-lg font-bold text-white">HMX-PX-9920</p>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Population Served</p>
                    <p class="text-base sm:text-lg font-bold text-white">3.2M Patients</p>
                </div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Efficiency Rating</p>
                    <p class="text-base sm:text-lg font-bold text-[var(--tertiary-color)]">98.4% <i class="fa-solid fa-arrow-trend-up text-xs"></i></p>
                </div>
            </div>
        </div>

        <!-- Right Side product mockup -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end">
            <div class="relative max-w-md w-full bg-white/5 rounded-2xl border border-white/10 shadow-2xl p-2 backdrop-blur-md">
                <img src="/images/case-studies/homalix_mockup.png" alt="Homalix Dashboard Interface" class="rounded-xl w-full h-auto object-cover drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)]">
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     LIVE WEBSITE LINK SECTION (LIGHT THEME)
     ========================================== -->
<section class="w-full bg-[#F8F3EB] py-20 text-center">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 space-y-8 flex flex-col items-center">
        <!-- Brand Name Logo -->
        <h2 class="text-[#080808] text-3xl sm:text-4xl font-light tracking-[0.35em] font-serif uppercase">HOMALIX</h2>
        
        <!-- Premium Description -->
        <p class="text-[#4a4a4a] font-light text-sm sm:text-base md:text-lg leading-relaxed max-w-3xl">
            Leveraging cutting-edge cloud infrastructure and clinical machine learning, Homalix has established itself as a pioneer in modern hospital resource management, celebrated for its unparalleled efficiency and HIPAA-compliant architecture.
        </p>
        
        <!-- Centered Pill Button -->
        <div class="pt-4">
            <a href="#" target="_blank" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full bg-[#080808] text-white text-sm sm:text-base font-medium transition-all duration-300 hover:bg-[#1a1a1a] hover:scale-105 shadow-xl hover:shadow-[0_15px_30px_rgba(0,0,0,0.15)] group">
                View Live Website
                <span class="text-[#ffd700] text-lg transition-transform duration-300 group-hover:translate-x-1.5">➔</span>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     OPERATIONAL TRANSFORMATION SECTION
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Text Column -->
        <div class="lg:col-span-5 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-tight">
                Operational <span class="text-[var(--secondary-color)] italic font-bold">Transformation</span>
            </h2>
            <p class="text-gray-300 font-light text-base leading-relaxed">
                Transitioning from fragmented legacy silos to a unified clinical nervous system. Observe the impact of Homalix enterprise integration across clinical ecosystems.
            </p>
            <div class="pt-2">
                <a href="/contact-us" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-[var(--primary-color)] text-white text-sm font-semibold hover:bg-[var(--secondary-color)] transition-all shadow-[0_0_15px_rgba(63,137,201,0.2)]">
                    Request Impact Report
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Comparison Progress Bars -->
        <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Legacy Box -->
            <div class="bg-[#101012] border border-white/5 rounded-2xl p-6 space-y-6">
                <div>
                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-widest">LEGACY STATE</p>
                    <h3 class="text-lg font-bold text-red-400 mt-1">Manual Fragmentation</h3>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                            <span>Administrative Overload</span>
                            <span>74%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full progress-bar-glow-red" style="width: 74%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                            <span>Data Latency</span>
                            <span>4.2h</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full progress-bar-glow-red" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optimized Box -->
            <div class="bg-[#101012] border border-white/5 rounded-2xl p-6 space-y-6 relative overflow-hidden">
                <!-- Sparkle Glow badge -->
                <div class="absolute top-4 right-4 text-[var(--tertiary-color)] bg-[var(--tertiary-color)]/10 w-8 h-8 rounded-lg flex items-center justify-center border border-[var(--tertiary-color)]/25">
                    <span class="material-symbols-outlined text-base">temp_preferences_custom</span>
                </div>

                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">HOMALIX OPTIMIZED</p>
                    <h3 class="text-lg font-bold text-[var(--tertiary-color)] mt-1">Clinical Automation</h3>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                            <span>Admin Effort</span>
                            <span>12%</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[var(--tertiary-color)] h-full rounded-full progress-bar-glow-green" style="width: 12%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs text-gray-400 mb-1">
                            <span>Real-time Sync</span>
                            <span>&lt; 100ms</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-[var(--tertiary-color)] h-full rounded-full progress-bar-glow-green" style="width: 95%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CORE CAPABILITIES
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
    <div class="space-y-4 mb-12">
        <h2 class="text-3xl md:text-4xl font-light">
            Network <b>Core Capabilities</b>
        </h2>
        <p class="text-gray-400 font-light max-w-2xl mx-auto text-sm sm:text-base">
            Precision-engineered modules designed to handle the velocity of enterprise medical operations.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 text-left">
        <!-- Card 1: Patient Flow -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-8 md:col-span-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6 group hover:border-[var(--secondary-color)]/20 transition-all duration-300">
            <div class="space-y-4 max-w-md">
                <div class="w-12 h-12 rounded-xl bg-[var(--secondary-color)]/10 text-[var(--secondary-color)] flex items-center justify-center border border-[var(--secondary-color)]/20">
                    <span class="material-symbols-outlined">patient_list</span>
                </div>
                <h3 class="text-2xl font-light text-white">Patient Flow Management</h3>
                <p class="text-gray-400 text-sm font-light leading-relaxed">
                    Predictive triage algorithms that intelligently route patients across the 12-clinic network based on real-time load and physician availability.
                </p>
                <div class="flex gap-2 pt-2">
                    <span class="px-3 py-1 rounded-full bg-white/5 text-gray-400 text-xs border border-white/10 font-medium">AI Triage</span>
                    <span class="px-3 py-1 rounded-full bg-white/5 text-gray-400 text-xs border border-white/10 font-medium">Resource Mapping</span>
                </div>
            </div>
            <!-- Dynamic graphical asset inside card -->
            <div class="w-full md:w-56 shrink-0 bg-black/40 border border-white/5 rounded-xl p-2 relative overflow-hidden">
                <img src="/images/case-studies/homalix_mockup.png" alt="Patient Flow Visual" class="w-full h-auto object-cover rounded-lg">
            </div>
        </div>

        <!-- Card 2: Smart Revenue -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-8 md:col-span-4 flex flex-col justify-between group hover:border-[var(--primary-color)]/20 transition-all duration-300">
            <div class="space-y-4">
                <div class="w-12 h-12 rounded-xl bg-[var(--primary-color)]/10 text-[var(--primary-color)] flex items-center justify-center border border-[var(--primary-color)]/20">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="text-2xl font-light text-white">Smart Revenue</h3>
                <p class="text-gray-400 text-sm font-light leading-relaxed">
                    Automated ICD-10 coding and claim scrubbing with a 99.8% first-pass acceptance rate.
                </p>
            </div>
            <div class="pt-8">
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Monthly Financial Impact</p>
                <p class="text-3xl font-bold text-white mt-1">$2.4M <span class="text-xs text-gray-400 font-normal">Recovered / Mo</span></p>
            </div>
        </div>

        <!-- Card 3: Staff Optimization -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-6 md:col-span-6 flex items-start gap-4 group hover:border-[var(--tertiary-color)]/20 transition-all duration-300">
            <div class="w-10 h-10 shrink-0 rounded-lg bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] flex items-center justify-center border border-[var(--tertiary-color)]/20">
                <span class="material-symbols-outlined">calendar_today</span>
            </div>
            <div class="space-y-2">
                <h4 class="text-lg font-medium text-white">Staff Optimization</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed">
                    Intelligent scheduling reduces physician burnout by 35% through ergonomic shift rotation.
                </p>
            </div>
        </div>

        <!-- Card 4: HIPAA Fortress -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-6 md:col-span-6 flex items-start justify-between gap-4 group hover:border-[var(--secondary-color)]/20 transition-all duration-300">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 shrink-0 rounded-lg bg-[var(--secondary-color)]/10 text-[var(--secondary-color)] flex items-center justify-center border border-[var(--secondary-color)]/20">
                    <span class="material-symbols-outlined">shield_lock</span>
                </div>
                <div class="space-y-2">
                    <h4 class="text-lg font-medium text-white">HIPAA Fortress Architecture</h4>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">
                        Zero-trust data environment with end-to-end quantum-resistant encryption.
                    </p>
                </div>
            </div>
            <div>
                <span class="px-2 py-0.5 rounded bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] border border-[var(--tertiary-color)]/25 text-[10px] font-bold uppercase tracking-wider">Verified</span>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     THE INTELLIGENCE TRANSFORMATION SECTION
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/5">
    <!-- Section Header -->
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight">The Intelligence Transformation</h2>
    </div>

    <!-- Wavy Process Flow (Desktop) -->
    <div class="relative w-screen left-1/2 -translate-x-1/2 h-[350px] mb-20 hidden md:block overflow-hidden">
        <!-- SVG Wavy Lines -->
        <svg class="absolute inset-0 w-full h-full z-0" viewBox="0 0 1000 350" preserveAspectRatio="none">
            <!-- Path 1 (White Accent) -->
            <path d="M 0 175 C 125 175, 125 110, 250 110 C 375 110, 375 240, 500 240 C 625 240, 625 120, 750 120 C 875 120, 875 175, 1000 175" 
                  fill="none" stroke="rgba(255, 255, 255, 0.4)" stroke-width="1.5" />
            <!-- Path 2 (Main Cyan) -->
            <path d="M 0 179 C 125 179, 125 114, 250 114 C 375 114, 375 244, 500 244 C 625 244, 625 124, 750 124 C 875 124, 875 179, 1000 179" 
                  fill="none" stroke="var(--secondary-color)" stroke-width="2.5" />
            <!-- Path 3 (Primary Theme Blue) -->
            <path d="M 0 183 C 125 183, 125 118, 250 118 C 375 118, 375 248, 500 248 C 625 248, 625 128, 750 128 C 875 128, 875 183, 1000 183" 
                  fill="none" stroke="var(--primary-color)" stroke-width="1.8" />
        </svg>

        <!-- Node 1 (Fragmented Data) -->
        <div class="absolute left-[25%] top-[114px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Text/Badge Above -->
            <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 bg-[#101012] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:-translate-y-1">
                <h4 class="text-white text-xs font-semibold tracking-wide font-medium">Fragmented Data</h4>
                <p class="text-gray-400 text-[10px] font-light mt-0.5">Isolated legacy servers</p>
            </div>
            <!-- Dot on the curve -->
            <div class="transformation-node w-8 h-8 rounded-full border-4 border-white bg-[var(--primary-color)] flex items-center justify-center shadow-[0_0_15px_rgba(63,137,201,0.5)] cursor-pointer">
                <span class="material-symbols-outlined text-white text-xs font-bold">cloud_off</span>
            </div>
        </div>

        <!-- Node 2 (Homalix Core - Glowing Highlighted) -->
        <div class="absolute left-[50%] top-[244px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Dot on the curve -->
            <div class="transformation-node glowing-core-node w-10 h-10 rounded-full border-4 border-white bg-[var(--secondary-color)] flex items-center justify-center shadow-[0_0_25px_rgba(47,173,195,0.7)] cursor-pointer">
                <span class="material-symbols-outlined text-white text-sm font-bold">hub</span>
            </div>
            <!-- Text/Badge Below -->
            <div class="absolute top-full left-1/2 -translate-x-1/2 mt-4 bg-[#101012] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:translate-y-1">
                <h4 class="text-[var(--secondary-color)] text-xs font-semibold tracking-wide font-medium">Homalix Core</h4>
                <p class="text-gray-400 text-[10px] font-light mt-0.5">Central AI Processing</p>
            </div>
        </div>

        <!-- Node 3 (Predictive Action) -->
        <div class="absolute left-[75%] top-[124px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Text/Badge Above -->
            <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 bg-[#101012] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:-translate-y-1">
                <h4 class="text-white text-xs font-semibold tracking-wide font-medium">Predictive Action</h4>
                <p class="text-gray-400 text-[10px] font-light mt-0.5">Real-time clinical insights</p>
            </div>
            <!-- Dot on the curve -->
            <div class="transformation-node w-8 h-8 rounded-full border-4 border-white bg-[var(--tertiary-color)] flex items-center justify-center shadow-[0_0_15px_rgba(133,213,92,0.5)] cursor-pointer">
                <span class="material-symbols-outlined text-white text-xs font-bold">trending_up</span>
            </div>
        </div>
    </div>

    <!-- Process Flow (Mobile - Clean Stacked List) -->
    <div class="flex flex-col gap-6 md:hidden mb-16 px-4">
        <!-- Node 1 -->
        <div class="flex items-center gap-4 bg-[#101012]/40 border border-white/5 rounded-2xl p-5">
            <div class="w-12 h-12 rounded-full border border-white/10 bg-[#080808]/90 flex items-center justify-center text-gray-400">
                <span class="material-symbols-outlined text-xl">cloud_off</span>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide">Fragmented Data</h4>
                <p class="text-gray-400 text-xs font-light mt-0.5">Isolated legacy servers</p>
            </div>
        </div>
        
        <!-- Node 2 -->
        <div class="flex items-center gap-4 bg-[#101012]/40 border border-[var(--secondary-color)]/30 rounded-2xl p-5 shadow-[0_0_15px_rgba(47,173,195,0.15)]">
            <div class="w-12 h-12 rounded-full border border-[var(--secondary-color)] bg-[#080808]/95 flex items-center justify-center text-[var(--secondary-color)]">
                <span class="material-symbols-outlined text-xl">hub</span>
            </div>
            <div>
                <h4 class="text-[var(--secondary-color)] text-sm font-semibold tracking-wide">Homalix Core</h4>
                <p class="text-gray-400 text-xs font-light mt-0.5">Central AI Processing</p>
            </div>
        </div>
        
        <!-- Node 3 -->
        <div class="flex items-center gap-4 bg-[#101012]/40 border border-white/5 rounded-2xl p-5">
            <div class="w-12 h-12 rounded-full border border-white/10 bg-[#080808]/90 flex items-center justify-center text-gray-400">
                <span class="material-symbols-outlined text-xl">trending_up</span>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide">Predictive Action</h4>
                <p class="text-gray-400 text-xs font-light mt-0.5">Real-time clinical insights</p>
            </div>
        </div>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Time Saved</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">12,000 hrs</p>
            <p class="text-gray-300 text-xs sm:text-sm font-light leading-relaxed max-w-[240px]">Clinical administrative hours recovered annually.</p>
        </div>
        
        <!-- Metric Card 2 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Revenue Growth</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">18.5%</p>
            <p class="text-gray-300 text-xs sm:text-sm font-light leading-relaxed max-w-[240px]">Increase in billing accuracy and resource recovery.</p>
        </div>
        
        <!-- Metric Card 3 -->
        <div class="metric-card-premium bg-[#101012]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Staff Satisfaction</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">+42pt</p>
            <p class="text-gray-300 text-xs sm:text-sm font-light leading-relaxed max-w-[240px]">Improvement in clinician eNPS survey results.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     EMPOWERING DECISION-MAKERS SECTION
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Left Side: Content -->
        <div class="lg:col-span-6 space-y-8">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight tracking-tight text-white">
                Empowering decision-makers with <br>
                <span class="text-[var(--secondary-color)]">Clarity.</span>
            </h2>
            
            <p class="text-gray-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
                The Homalix interface was designed for high-stress clinical environments. No cluttered menus, only actionable intelligence.
            </p>
            
            <!-- List of Bullet Points -->
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                        <i class="fa-solid fa-check-double text-sm"></i>
                    </span>
                    <span class="text-gray-200 text-sm sm:text-base font-light">Real-time patient flow heatmaps</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                        <i class="fa-solid fa-check-double text-sm"></i>
                    </span>
                    <span class="text-gray-200 text-sm sm:text-base font-light">Predictive ER bed availability</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                        <i class="fa-solid fa-check-double text-sm"></i>
                    </span>
                    <span class="text-gray-200 text-sm sm:text-base font-light">Automated staff scheduling optimization</span>
                </li>
            </ul>
        </div>
        
        <!-- Right Side: Phone Mockup Display -->
        <div class="lg:col-span-6 flex justify-center lg:justify-end">
            <!-- Framed Premium Container -->
            <div class="relative w-full max-w-lg bg-[#101012] border border-white/5 rounded-3xl p-3 shadow-2xl transition-all duration-500 hover:border-[var(--secondary-color)]/25 hover:shadow-[0_20px_50px_rgba(0,0,0,0.55),0_0_30px_rgba(47,173,195,0.15)]">
                <img src="/images/case-studies/homalix_mobile_mockup.png" alt="Homalix Mobile Interface Mockup" class="rounded-[22px] w-full h-auto object-cover">
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     DYNAMIC CASE STUDIES CARDS WITH FILTERS
     ========================================== -->
<section id="local-cases" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center space-y-4 mb-12">
        <h2 class="text-3xl md:text-4xl font-light">
            Partner <b>Hospital Profiles</b>
        </h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm">
            Check the outcomes of Homalix deployment across various multi-branch clinics and diagnostic systems.
        </p>
    </div>

    <!-- Filter selectors -->
    <div class="bg-[#101012] border border-white/5 rounded-2xl p-6 mb-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 flex-1">
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Region</label>
                <select id="filterRegion" class="w-full bg-[#080808] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
                    <option value="all">All Regions</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                </select>
            </div>
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Hospital Size</label>
                <select id="filterSize" class="w-full bg-[#080808] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
                    <option value="all">All Sizes</option>
                    <option value="Large">Large Organisation</option>
                    <option value="Medium">Medium Network</option>
                    <option value="Small">Small Clinic</option>
                </select>
            </div>
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Module</label>
                <select id="filterModule" class="w-full bg-[#080808] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
                    <option value="all">All Modules</option>
                    <option value="patient-care">Patient Care</option>
                    <option value="operations">Operations</option>
                    <option value="diagnostics">Diagnostics</option>
                </select>
            </div>
        </div>
        <div class="md:self-end">
            <button id="btnApplyFilters" class="w-full md:w-auto px-6 py-2.5 rounded-lg bg-white/5 border border-white/15 text-xs font-semibold hover:bg-white hover:text-black transition-all">
                Reset Filters
            </button>
        </div>
    </div>

    <!-- Hospital profiles grid -->
    <div id="hospitalGrid" class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Profile 1 -->
        <div class="hospital-card bg-[#101012] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--secondary-color)]/25 transition-all duration-300"
             data-region="Karachi" data-size="Large" data-modules="patient-care,operations">
            <div class="relative w-full h-40 bg-black/60 overflow-hidden flex items-center justify-center">
                <!-- Overlay Graphic representation -->
                <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('/images/successful-business-collaboration-and-client-meeting.webp');"></div>
                <div class="absolute top-4 left-4 bg-[var(--secondary-color)]/20 border border-[var(--secondary-color)]/50 text-[var(--secondary-color)] text-[9px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">
                    Patient Care
                </div>
                <h4 class="relative z-10 text-white font-bold text-lg px-6 text-center">Al Noor Multi-Specialty</h4>
            </div>

            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-white group-hover:text-[var(--secondary-color)] transition-colors">Al Noor Hospital</h3>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">
                        Streamlined clinical appointments and central medical billing. Resolved major administrative bottlenecks caused by paper logs.
                    </p>
                </div>
                
                <div class="pt-4 border-t border-white/5 flex items-center justify-between text-xs text-[var(--secondary-color)]">
                    <span class="font-bold">60% Registration Speedup</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </div>
        </div>

        <!-- Profile 2 -->
        <div class="hospital-card bg-[#101012] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--tertiary-color)]/25 transition-all duration-300"
             data-region="Lahore" data-size="Medium" data-modules="operations,patient-care">
            <div class="relative w-full h-40 bg-black/60 overflow-hidden flex items-center justify-center">
                <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('/images/successful-business-collaboration-and-client-meeting.webp');"></div>
                <div class="absolute top-4 left-4 bg-[var(--tertiary-color)]/20 border border-[var(--tertiary-color)]/50 text-[var(--tertiary-color)] text-[9px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">
                    Operations
                </div>
                <h4 class="relative z-10 text-white font-bold text-lg px-6 text-center">City Care Clinic Network</h4>
            </div>

            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-white group-hover:text-[var(--tertiary-color)] transition-colors">City Care Network</h3>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">
                        Synchronized multi-branch records and schedules. Centralized control panel simplifies operational analytics for branch directors.
                    </p>
                </div>
                
                <div class="pt-4 border-t border-white/5 flex items-center justify-between text-xs text-[var(--tertiary-color)]">
                    <span class="font-bold">70% Better Visibility</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </div>
        </div>

        <!-- Profile 3 -->
        <div class="hospital-card bg-[#101012] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--primary-color)]/25 transition-all duration-300"
             data-region="Islamabad" data-size="Small" data-modules="diagnostics">
            <div class="relative w-full h-40 bg-black/60 overflow-hidden flex items-center justify-center">
                <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('/images/successful-business-collaboration-and-client-meeting.webp');"></div>
                <div class="absolute top-4 left-4 bg-[var(--primary-color)]/20 border border-[var(--primary-color)]/50 text-[var(--primary-color)] text-[9px] font-bold uppercase tracking-wider px-2 py-0.5 rounded">
                    Diagnostics
                </div>
                <h4 class="relative z-10 text-white font-bold text-lg px-6 text-center">Prime Diagnostic Center</h4>
            </div>

            <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                <div class="space-y-2">
                    <h3 class="text-lg font-medium text-white group-hover:text-[var(--primary-color)] transition-colors">Prime Diagnostics</h3>
                    <p class="text-gray-400 text-xs font-light leading-relaxed">
                        Automated laboratory transcription and report updates. Minimized processing delays and transcription errors significantly.
                    </p>
                </div>
                
                <div class="pt-4 border-t border-white/5 flex items-center justify-between text-xs text-[var(--primary-color)]">
                    <span class="font-bold">65% Faster Lab Reports</span>
                    <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     AGGREGATE PERFORMANCE & TESTIMONIALS
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5 text-center">
    <div class="space-y-4 mb-12">
        <h2 class="text-3xl md:text-4xl font-light">
            Aggregate <b>Network Performance</b>
        </h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm">
            Average metrics achieved across healthcare clinics using Homalix Hospital Management modules.
        </p>
    </div>

    <!-- Circle Progress metrics -->
    <div class="flex flex-wrap justify-center gap-12 mb-16">
        <!-- Stat 1 -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-8 w-72 text-center space-y-4 flex flex-col items-center">
            <!-- Visual CSS circle representation -->
            <div class="w-24 h-24 rounded-full border-4 border-[var(--secondary-color)]/25 flex items-center justify-center relative shadow-[0_0_15px_rgba(47,173,195,0.1)]">
                <span class="text-2xl font-bold text-white">60%</span>
                <span class="absolute inset-0 rounded-full border-4 border-t-[var(--secondary-color)] border-l-[var(--secondary-color)] border-b-transparent border-r-transparent"></span>
            </div>
            <h4 class="text-lg font-medium text-white">Time Reduction</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed max-w-xs">
                Average reduction in clinical charting and patient registration time per encounter.
            </p>
        </div>

        <!-- Stat 2 -->
        <div class="bg-[#101012] border border-white/5 rounded-2xl p-8 w-72 text-center space-y-4 flex flex-col items-center">
            <div class="w-24 h-24 rounded-full border-4 border-[var(--tertiary-color)]/25 flex items-center justify-center relative shadow-[0_0_15px_rgba(133,213,92,0.1)]">
                <span class="text-2xl font-bold text-white">45%</span>
                <span class="absolute inset-0 rounded-full border-4 border-t-[var(--tertiary-color)] border-r-transparent border-b-transparent border-l-transparent"></span>
            </div>
            <h4 class="text-lg font-medium text-white">Admin Workload Decrease</h4>
            <p class="text-gray-400 text-xs font-light leading-relaxed max-w-xs">
                Significant drop in repetitive paperwork and manual booking conflicts for nursing staff.
            </p>
        </div>
    </div>

    <!-- Main Testimonial Block -->
    <div class="max-w-5xl mx-auto bg-[#101012] border border-white/5 rounded-3xl p-10 md:p-14 relative overflow-hidden text-left shadow-2xl transition-all duration-500 hover:border-white/10">
        <!-- Huge Quotation Icon on the Right -->
        <div class="text-[var(--secondary-color)]/10 text-9xl absolute right-12 top-6 font-serif select-none pointer-events-none">
            ”
        </div>
        
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-center">
            <!-- Left Side Avatar -->
            <div class="md:col-span-4 flex justify-center md:justify-start">
                <div class="w-48 h-48 rounded-full border-4 border-[var(--secondary-color)]/30 bg-[#080808]/80 p-1 flex items-center justify-center overflow-hidden shadow-2xl transition-all duration-500 hover:border-[var(--secondary-color)]/60">
                    <img src="/images/case-studies/elena_rodriguez.png" alt="Dr. Elena Rodriguez" class="w-full h-full rounded-full object-cover">
                </div>
            </div>
            
            <!-- Right Side Content -->
            <div class="md:col-span-8 space-y-6">
                <p class="text-white text-base sm:text-lg md:text-xl font-light italic leading-relaxed text-gray-200">
                    "The ROI wasn't just measured in pounds and pence; it was measured in minutes returned to our doctors to actually care for patients. Homalix has fundamentally changed the metabolic rate of our hospital operations."
                </p>
                
                <div class="space-y-1">
                    <h3 class="text-xl sm:text-2xl font-semibold text-[var(--secondary-color)]">Dr. Elena Rodriguez</h3>
                    <p class="text-xs sm:text-sm font-light text-gray-400">Chief Medical Officer, St. Mary's General Hospital</p>
                </div>
            </div>
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
<script>
    // Live filtration system for the Hospital Profiles grid
    document.addEventListener("DOMContentLoaded", () => {
        const filterRegion = document.getElementById("filterRegion");
        const filterSize = document.getElementById("filterSize");
        const filterModule = document.getElementById("filterModule");
        const btnReset = document.getElementById("btnApplyFilters");
        
        const cards = document.querySelectorAll(".hospital-card");

        function applyFilters() {
            const regVal = filterRegion.value;
            const sizeVal = filterSize.value;
            const modVal = filterModule.value;

            cards.forEach(card => {
                const cRegion = card.dataset.region;
                const cSize = card.dataset.size;
                const cMods = card.dataset.modules.split(",");

                const matchReg = (regVal === "all" || cRegion === regVal);
                const matchSize = (sizeVal === "all" || cSize === sizeVal);
                const matchMod = (modVal === "all" || cMods.includes(modVal));

                if (matchReg && matchSize && matchMod) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        }

        filterRegion.addEventListener("change", applyFilters);
        filterSize.addEventListener("change", applyFilters);
        filterModule.addEventListener("change", applyFilters);

        btnReset.addEventListener("click", () => {
            filterRegion.value = "all";
            filterSize.value = "all";
            filterModule.value = "all";
            applyFilters();
        });
    });
</script>
</body>
</html>
