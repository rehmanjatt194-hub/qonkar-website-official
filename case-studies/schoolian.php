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
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08), 0 1px 3px rgba(15, 23, 42, 0.04);
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

<body class="bg-[#000d16] text-white">

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
<section class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[70vh] mt-6 mb-16 rounded-[30px] overflow-hidden flex items-center bg-[#00101a] border border-white/5">
    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-80" style="background-image: linear-gradient(to right, rgba(8, 8, 10, 0.4) 10%, rgba(8, 8, 10, 0.7) 50%, rgba(8, 8, 10, 0.95) 90%), url('/images/case-studies/schoolian_bg.png'); mix-blend-mode: normal;"></div>
    <div class="absolute -top-[20%] -left-[10%] w-[50vw] h-[50vw] bg-[var(--primary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-[20%] -right-[10%] w-[50vw] h-[50vw] bg-[var(--secondary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start w-full py-16 px-4 sm:px-8">
        
        <!-- Left Column: Content -->
        <div class="lg:col-span-7 text-left space-y-6 lg:pt-8">
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

        <!-- Right Column: Card Mockup -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end mt-8 lg:mt-0">
            <div class="relative max-w-md w-full bg-white/5 rounded-2xl border border-white/10 shadow-2xl p-2 backdrop-blur-md">
                <img src="/images/case-studies/schoolian_dashboard.png" alt="Schoolian Dashboard Interface" class="rounded-xl w-full h-auto object-cover drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)]">
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     2. PROJECT OVERVIEW & CONTEXT
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Overview Card -->
        <div class="lg:col-span-6 bg-[#00101a] border border-white/5 rounded-3xl p-8 lg:p-12 flex flex-col justify-between hover:border-white/10 transition-all duration-300">
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

        <!-- Project Context & Existing Details Card -->
        <div class="lg:col-span-6 bg-[#00101a] border border-white/5 rounded-3xl p-8 lg:p-12 flex flex-col justify-between hover:border-white/10 transition-all duration-300">
            <div class="space-y-6">
                <span class="inline-block bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[var(--tertiary-color)]/25">Project Context</span>
                <h3 class="text-3xl font-light text-white leading-tight">Automating operations for <span class="italic text-[var(--tertiary-color)] font-bold">growing institutions.</span></h3>
                <p class="text-gray-300 font-light text-sm leading-relaxed font-sans">
                    Schoolian is a web-based portal designed for small to medium-sized schools. It automates manual processes like fee collection, student attendance tracking, and report card generation.
                </p>
                <p class="text-gray-400 font-light text-xs leading-relaxed font-sans">
                    The primary goal is to save administrative workloads by 50% and establish a simplified, real-time parent-teacher communication loop.
                </p>
            </div>
            <div class="pt-8 border-t border-white/5 mt-8 flex justify-between items-center text-xs text-[var(--tertiary-color)]">
                <span>50% Time Saved Goal</span>
                <span class="font-bold">Automated Database</span>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     3. THE PROBLEM & CHALLENGE
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sidebar Content -->
        <div class="lg:col-span-4 space-y-6">
            <span class="bg-red-500/10 border border-red-500/25 text-red-400 text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">The Challenge</span>
            <h2 class="text-3xl sm:text-4xl font-light text-white leading-tight">Legacy Operations & <br><span class="text-red-400 font-bold">User Frustrations</span></h2>
            <p class="text-gray-400 font-light text-sm leading-relaxed font-sans">
                For small to medium-sized academic institutions, growth often exposes major gaps in manual administrative procedures. Without automated software, schools rely on fragmented physical ledgers and disconnected databases—creating severe operational friction.
            </p>
        </div>

        <!-- Challenges Grid -->
        <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-[#00101a] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-clock"></i></div>
                <h4 class="text-white font-medium text-base">The 45-Minute Daily Attendance Drain</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Teachers spent the first 15–20 minutes of every class taking manual roll calls on paper registers. Staff then had to re-key this data into spreadsheets, converting active teaching hours into tedious clerical entry.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#00101a] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-receipt"></i></div>
                <h4 class="text-white font-medium text-base">Friction-Ridden Fee Collection</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Without digital channels, admin teams manually compiled fee books and chased late collections via phone. The lack of proactive reminders led to payment delays and complex monthly reconciliations.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#00101a] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-file-signature"></i></div>
                <h4 class="text-white font-medium text-base">End-of-Term Grading Bottlenecks</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Compiling test results, GPA averages, and class rankings required manual gradebook sums. Admin teams spent days writing and printing physical report cards, causing significant distribution delays.</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-[#00101a] border border-red-500/10 p-6 rounded-2xl space-y-3 hover:border-red-500/20 transition-all duration-300">
                <div class="w-8 h-8 rounded bg-red-500/10 text-red-400 flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-comment-slash"></i></div>
                <h4 class="text-white font-medium text-base">The Parent-Teacher Blindspot</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Parents had zero real-time insights into attendance anomalies or daily updates. Critical circulars regarding exams or scheduling went unseen, resulting in disconnected home-school relationships.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. OUR SOLUTION: THE 4 CORE PORTALS (Dark Premium Cards)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/5">
    <div class="text-center space-y-4 mb-16">
        <span class="bg-[#01a0d8]/10 border border-[#01a0d8]/30 text-[#01a0d8] text-[11px] font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full">Unified Ecosystem</span>
        <h2 class="text-3xl md:text-4xl font-light text-white">The <b>4 Core Portals</b></h2>
        <p class="text-gray-400 font-normal max-w-xl mx-auto text-sm sm:text-base leading-relaxed">Connecting administrators, teachers, parents, and students in one unified, real-time environment.</p>
    </div>

    <!-- Portals: Flex Row with Connectors -->
    <div class="flex flex-col lg:flex-row items-stretch gap-4 lg:gap-0">

        <!-- Portal 1: Admin Command Center -->
        <div class="portal-card relative bg-[#00101a] border border-white/8 rounded-[20px] p-7 flex flex-col justify-between flex-1 hover:border-[#01a0d8]/40 hover:shadow-[0_0_30px_rgba(1,160,216,0.08)] transition-all duration-400 overflow-hidden">
            <span class="absolute top-5 right-6 text-5xl font-black text-white/5 select-none leading-none">01</span>
            <div class="space-y-5 relative z-10">
                <div class="w-12 h-12 rounded-[14px] flex items-center justify-center" style="background: rgba(1,160,216,0.15);">
                    <span class="material-symbols-outlined text-2xl" style="color:#01a0d8;">shield_person</span>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-white leading-snug">Admin Command Center</h3>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">
                        Manage student registries, billing ledgers, branch analytics, and institutional audits from one control panel.
                    </p>
                </div>
            </div>
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#01a0d8]/10 border border-[#01a0d8]/25 text-[#01a0d8] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#01a0d8]"></span>
                    Multi-Branch Analytics
                </span>
            </div>
        </div>

        <!-- Connector 1→2 -->
        <div class="hidden lg:flex items-center justify-center w-10 shrink-0 relative">
            <div class="w-full h-px bg-gradient-to-r from-[#01a0d8]/30 via-white/10 to-[#95C951]/30"></div>
            <div class="absolute w-2.5 h-2.5 rounded-full bg-[#01a0d8] shadow-[0_0_10px_3px_rgba(1,160,216,0.6)] animate-pulse z-10"></div>
        </div>

        <!-- Portal 2: Teacher Hub -->
        <div class="portal-card relative bg-[#00101a] border border-white/8 rounded-[20px] p-7 flex flex-col justify-between flex-1 hover:border-[#95C951]/40 hover:shadow-[0_0_30px_rgba(149,201,81,0.08)] transition-all duration-400 overflow-hidden">
            <span class="absolute top-5 right-6 text-5xl font-black text-white/5 select-none leading-none">02</span>
            <div class="space-y-5 relative z-10">
                <div class="w-12 h-12 rounded-[14px] flex items-center justify-center" style="background: rgba(149,201,81,0.15);">
                    <span class="material-symbols-outlined text-2xl" style="color:#95C951;">menu_book</span>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-white leading-snug">Teacher Hub</h3>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">
                        Track daily attendance, input exam grades, upload homework resources, and broadcast notification alerts to parents.
                    </p>
                </div>
            </div>
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#95C951]/10 border border-[#95C951]/25 text-[#95C951] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#95C951]"></span>
                    Instant Marks Entry
                </span>
            </div>
        </div>

        <!-- Connector 2→3 -->
        <div class="hidden lg:flex items-center justify-center w-10 shrink-0 relative">
            <div class="w-full h-px bg-gradient-to-r from-[#95C951]/30 via-white/10 to-[#a78bfa]/30"></div>
            <div class="absolute w-2.5 h-2.5 rounded-full bg-[#95C951] shadow-[0_0_10px_3px_rgba(149,201,81,0.6)] animate-pulse z-10" style="animation-delay: 0.4s;"></div>
        </div>

        <!-- Portal 3: Parent Mobile Companion -->
        <div class="portal-card relative bg-[#00101a] border border-white/8 rounded-[20px] p-7 flex flex-col justify-between flex-1 hover:border-[#a78bfa]/40 hover:shadow-[0_0_30px_rgba(167,139,250,0.08)] transition-all duration-400 overflow-hidden">
            <span class="absolute top-5 right-6 text-5xl font-black text-white/5 select-none leading-none">03</span>
            <div class="space-y-5 relative z-10">
                <div class="w-12 h-12 rounded-[14px] flex items-center justify-center" style="background: rgba(167,139,250,0.15);">
                    <span class="material-symbols-outlined text-2xl" style="color:#a78bfa;">supervised_user_circle</span>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-white leading-snug">Parent Mobile Companion</h3>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">
                        Track child attendance, view exam report cards, receive circular alerts, and pay school fee invoices.
                    </p>
                </div>
            </div>
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#a78bfa]/10 border border-[#a78bfa]/25 text-[#a78bfa] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#a78bfa]"></span>
                    Billing &amp; Dues Sync
                </span>
            </div>
        </div>

        <!-- Connector 3→4 -->
        <div class="hidden lg:flex items-center justify-center w-10 shrink-0 relative">
            <div class="w-full h-px bg-gradient-to-r from-[#a78bfa]/30 via-white/10 to-[#fbbf24]/30"></div>
            <div class="absolute w-2.5 h-2.5 rounded-full bg-[#a78bfa] shadow-[0_0_10px_3px_rgba(167,139,250,0.6)] animate-pulse z-10" style="animation-delay: 0.8s;"></div>
        </div>

        <!-- Portal 4: Student Space -->
        <div class="portal-card relative bg-[#00101a] border border-white/8 rounded-[20px] p-7 flex flex-col justify-between flex-1 hover:border-[#fbbf24]/40 hover:shadow-[0_0_30px_rgba(251,191,36,0.08)] transition-all duration-400 overflow-hidden">
            <span class="absolute top-5 right-6 text-5xl font-black text-white/5 select-none leading-none">04</span>
            <div class="space-y-5 relative z-10">
                <div class="w-12 h-12 rounded-[14px] flex items-center justify-center" style="background: rgba(251,191,36,0.15);">
                    <span class="material-symbols-outlined text-2xl" style="color:#fbbf24;">school</span>
                </div>
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-white leading-snug">Student Space</h3>
                    <p class="text-gray-400 text-sm font-light leading-relaxed">
                        Access digital class materials, check exam grades, view class timetables, and track active homework assignments.
                    </p>
                </div>
            </div>
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#fbbf24]/10 border border-[#fbbf24]/25 text-[#fbbf24] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#fbbf24]"></span>
                    Syllabus &amp; Timetable Logs
                </span>
            </div>
        </div>

    </div>
</section>



<!-- ==========================================
     THE TOOLKIT (Premium Feature Set)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="space-y-2 mb-12 text-left">
        <span class="text-[10px] text-[var(--secondary-color)] uppercase tracking-widest font-mono font-bold">THE SOLUTION</span>
        <h2 class="text-3xl sm:text-4xl font-light text-white">Premium Feature Suite</h2>
    </div>

    <!-- 2-Column Feature Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
        <!-- Card 1 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-users-rectangle"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">STUDENT MGMT</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Centralized Cloud Profiles</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Replaces manual student folders with secure, searchable database directories and quick-validation digital profiles.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-user-check"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">ATTENDANCE</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Smart Attendance & SMS Alerts</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Single-click registers marked in under 2 minutes, auto-generating stats and broadcasting instant SMS alerts to parents for absences.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-people-roof"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">PARENT PORTAL</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Real-Time Mobile Companion</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Connects parents with academic progress, notifications, attendance tracking, and digital invoice portals instantly.</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-money-check-dollar"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">FEE TRACKING</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Automated Billing & Checkout</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed">Generates monthly invoices, dispatches automatic notices, and allows online payment checkout with auto-reconciliation.</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-chalkboard-user"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">TEACHER HUB</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Unified Teaching Hub</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Equips faculty with lesson planners, resource uploading tools, grading panels, and direct messaging channels.</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-[#00101a] border border-white/5 rounded-xl p-8 flex flex-col justify-between min-h-[180px] hover:border-[var(--secondary-color)]/25 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div class="text-[var(--secondary-color)] text-2xl"><i class="fa-solid fa-file-signature"></i></div>
                <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">EXAM SYSTEM</h4>
            </div>
            <div class="mt-4 space-y-2">
                <h3 class="text-white font-medium text-base">Consolidated Gradebooks</h3>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Automates exam records entries, rank calculations, and GPA averages to generate digital report cards instantaneously.</p>
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
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">01</span>
                <span class="text-[var(--secondary-color)] text-lg"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Invoice Generation</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">System auto-compiles monthly school fee ledgers for all active rosters on the 1st.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">02</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-paper-plane"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Notification Dispatch</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Parents receive SMS alerts and push messages in their portal app instantly.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">03</span>
                <span class="text-[var(--primary-color)] text-lg"><i class="fa-solid fa-credit-card"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Online Portal Checkout</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Parents settle dues securely in the companion app using mobile banking integrations.</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">04</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-circle-check"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Reconciliation</h4>
                <p class="text-gray-400 text-[11px] font-light leading-relaxed">Accounting dashboard updates instantly and issues a PDF receipt automatically.</p>
            </div>

        </div>

    </div>
</section>



<!-- ==========================================
     12. RESULTS & ACHIEVEMENTS (KPI Cards)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center mb-16 space-y-4">
        <span class="bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/25 text-[var(--tertiary-color)] text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">Results & Impact</span>
        <h2 class="text-3xl md:text-4xl font-light text-white tracking-tight">Quantifiable <b>Improvements</b></h2>
        <p class="text-gray-400 font-light max-w-xl mx-auto text-sm font-sans">How Schoolian transformed admin workloads and parent engagement across the network.</p>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl mx-auto mb-16">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">ADMINISTRATIVE TIME</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">50% Saved</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Automating registers, gradebooks, and reports cut daily admin workload in half.</p>
        </div>
        
        <!-- Metric Card 2 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">FEE COLLECTION SPEED</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">40% Faster</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Direct mobile billing links reduced payment cycle delays and manual reconciliation.</p>
        </div>
        
        <!-- Metric Card 3 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">PARENT ADOPTION RATE</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">95% Active</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">High app adoption established a robust real-time communication loop with families.</p>
        </div>

        <!-- Metric Card 4 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">PAPER DEPENDENCY</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">90% Less</p>
            <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Progress cards, receipts, and registration databases migrated fully to the cloud.</p>
        </div>
    </div>

    <!-- Narrative Impact Bullet Points -->
    <div class="max-w-4xl mx-auto bg-[#00101a] border border-white/5 rounded-3xl p-8 md:p-12 space-y-8">
        <h3 class="text-2xl font-light text-white leading-tight">Key Achievements & Operational Impact</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
            <div class="space-y-2">
                <div class="text-[var(--secondary-color)] text-lg"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <h4 class="text-white font-medium text-base">Reclaimed Instruction Hours</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">By digitizing classroom attendance and test grading, teachers reclaimed up to 5 hours weekly, directly reinvesting that time into student mentoring.</p>
            </div>
            <div class="space-y-2">
                <div class="text-[var(--secondary-color)] text-lg"><i class="fa-solid fa-piggy-bank"></i></div>
                <h4 class="text-white font-medium text-base">Eliminated Billing Friction</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Automated digital invoicing, direct SMS billing triggers, and integrated checkout channels eliminated manual ledger matching and minimized outstanding debt.</p>
            </div>
            <div class="space-y-2">
                <div class="text-[var(--secondary-color)] text-lg"><i class="fa-solid fa-users"></i></div>
                <h4 class="text-white font-medium text-base">Active Family Partnership</h4>
                <p class="text-gray-400 text-xs font-light leading-relaxed font-sans">Real-time attendance push alerts and dynamic grade access bridges the gap between home and school, fostering parent trust and transparency.</p>
            </div>
        </div>
    </div>
</section>



<!-- ==========================================
     16. FINAL CTA SECTION
     ========================================== -->
<section class="w-full bg-[#000d16] py-20 text-center border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 space-y-8 flex flex-col items-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-light text-white leading-tight">
            Ready to Modernize Your <br>
            <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Educational Workflows?</span>
        </h2>
        
        <p class="text-gray-300 font-light text-sm sm:text-base leading-relaxed max-w-2xl font-sans">
            Let Qonkar Technologies engineer a custom, secure EdTech platform tailored to your institution’s unique processes, fee models, and communication needs.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <a href="/contact-us" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full bg-[var(--primary-color)] text-white text-sm sm:text-base font-medium transition-all duration-300 hover:bg-[var(--secondary-color)] hover:scale-105 shadow-xl">
                Start Your Project
                <span class="text-white text-lg">➔</span>
            </a>
            <a href="/portfolio" class="inline-flex items-center gap-3 px-8 py-3.5 rounded-full border border-white/20 text-white text-sm sm:text-base font-medium hover:bg-white/10 transition-all duration-300">
                View More Case Studies
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

