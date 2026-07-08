<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    

    <!-- Basic SEO Meta -->
    
    
    <meta name="description" content="Schoolian Case Study - Premium Web-Based School ERP and Automation Solutions by Qonkar Technologies." />
    <meta name="keywords" content="Schoolian, School Management System, ERP, EdTech, Qonkar, Student Tracking, Gradebook" />
    

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Schoolian Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Discover how Schoolian automated school administrative operations, attendance workflows, and grading systems across school networks." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/case-studies/schoolian" />
    <meta property="og:image" content="/images/case-studies/schoolian_dashboard.png" />

    <!-- Google Fonts & Icons -->
    
    
    
    
    <!-- Favicon -->
    

    <!-- Title -->
    <title>Schoolian Case Study | Qonkar Technologies</title>

    <!-- Tailwind CSS -->
    

    <!-- Theme & Reusable Styles -->
    
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
        body {
            font-family: "Lexend", sans-serif;
        }
        p:not(.font-bold):not(.font-semibold):not(.font-medium):not(.font-extrabold) {
            font-weight: 300;
            line-height: 1.625;
        }
        /* Lenis Smooth Scroll CSS */
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<!-- ==========================================
     1. HERO SECTION (4-Portal Switcher Layout)
     ========================================== -->
<section class="relative w-full mt-0 mb-16 rounded-t-[30px] rounded-b-none overflow-hidden flex items-center bg-[#00101a] border-b border-white/5 min-h-[70vh] animate-fade-in">
    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-80" style="background-image: linear-gradient(to right, rgba(8, 8, 10, 0.4) 10%, rgba(8, 8, 10, 0.7) 50%, rgba(8, 8, 10, 0.95) 90%), url('/images/case-studies/schoolian_bg.png'); mix-blend-mode: normal;"></div>
    <div class="absolute -top-[20%] -left-[10%] w-[50vw] h-[50vw] bg-[var(--primary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-[20%] -right-[10%] w-[50vw] h-[50vw] bg-[var(--secondary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start w-full py-16 px-4 sm:px-8">
        
        <!-- Left Column: Content -->
        <div class="lg:col-span-7 text-left space-y-6 lg:pt-8">
            <div class="inline-flex laser-border shadow-md">
                <div class="laser-background">
                    <div class="glass px-4 py-1.5 flex items-center gap-2 text-xs font-semibold tracking-wider text-gray-300">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#01a0d8] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#01a0d8] shadow-[0_0_6px_rgba(1,160,216,0.6)]"></span>
                        </span>
                        EDTECH SAAS AUTOMATION
                    </div>
                </div>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-white leading-none">
                Automating school networks with <br>
                <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Schoolian ERP.</span>
            </h1>

            <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
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
                <h2 class="text-2xl md:text-3xl font-bold text-white leading-tight">Empowering education with <span class="italic text-[var(--secondary-color)] font-bold">structured workflows.</span></h2>
                <p class="text-slate-300 font-light text-sm leading-relaxed">
                    Schoolian is a comprehensive multi-branch School ERP designed to digitize administrative registers, student records, fee collection procedures, and parent communication channels.
                </p>
                <p class="text-slate-300 font-light text-sm leading-relaxed">
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
                <h2 class="text-2xl md:text-3xl font-bold text-white leading-tight">Automating operations for <span class="italic text-[var(--tertiary-color)] font-bold">growing institutions.</span></h2>
                <p class="text-slate-300 font-light text-sm leading-relaxed">
                    Schoolian is a web-based portal designed for small to medium-sized schools. It automates manual processes like fee collection, student attendance tracking, and report card generation.
                </p>
                <p class="text-slate-300 font-light text-sm leading-relaxed">
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
     PRODUCT TOUR VIDEO SECTION (DARK THEME)
     ========================================== -->
<section class="w-full bg-[#000d16] pt-8 pb-12 border-t border-white/5 text-left">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-end">
            
            <!-- Left Column: Copy & Details -->
            <div class="lg:col-span-4 space-y-5">
                <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center text-white px-6">
                            &#9679; Product Walkthrough
                        </div>
                    </div>
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                    Inside the <br>
                    <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Academic Hub.</span>
                </h2>
                <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed">
                    Observe how Schoolian simplifies campus complexity. Explore a comprehensive visual walkthrough showing student registries, automated fee invoicing, grade compilation, and instant parent messaging alerts in real-time.
                </p>

                <!-- Key Demonstration Features -->
                <ul class="space-y-3 pt-1">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(47,173,195,0.1)]">
                            <i class="fa-solid fa-graduation-cap text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Campus Orchestration</h4>
                            <p class="text-slate-300 text-sm font-light">Class registers, student files, and timetables synchronized.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/20 text-[var(--tertiary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(133,213,92,0.1)]">
                            <i class="fa-solid fa-file-invoice-dollar text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Automated Fee Billing</h4>
                            <p class="text-slate-300 text-sm font-light">Instant slip generation, notifications, and mobile checkout.</p>
                        </div>
                    </li>
                </ul>

                <!-- Watch Video Button -->
                <div class="pt-4">
                    <button id="btnOpenVideo" class="inline-flex items-center gap-3 px-7 py-3.5 rounded-full bg-[var(--primary-color)] text-white text-sm font-semibold hover:bg-[var(--secondary-color)] transition-all duration-300 shadow-[0_0_20px_rgba(63,137,201,0.25)] hover:scale-105 group focus:outline-none">
                        <span class="w-2.5 h-2.5 rounded-full bg-white shadow-[0_0_8px_white] animate-pulse"></span>
                        Watch Product Tour
                        <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1.5"></i>
                    </button>
                </div>
            </div>

            <!-- Right Column: Interactive Browser Frame -->
            <div class="lg:col-span-8 pt-6 lg:pt-0">
                <div class="relative w-full rounded-[32px] border border-white/10 p-2 bg-[#00101a]/80 backdrop-blur-md shadow-[0_0_50px_rgba(47,173,195,0.15)] group overflow-hidden cursor-pointer" id="btnOpenVideoPoster">
                    <!-- Glow background overlay -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[var(--secondary-color)]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <!-- Video Thumbnail / Poster Image -->
                    <div class="relative rounded-[24px] overflow-hidden aspect-[16/10]">
                        <img src="/images/case-studies/schoolian_bg.png" alt="Schoolian System Tour Poster" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 group-hover:blur-[2px]">
                        
                        <!-- Dark overlay -->
                        <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition-colors duration-300"></div>

                        <!-- Custom Pulsing Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-full bg-[var(--secondary-color)] flex items-center justify-center text-white shadow-[0_0_30px_rgba(47,173,195,0.5)] transition-all duration-300 group-hover:scale-110 group-hover:bg-[var(--tertiary-color)] group-hover:shadow-[0_0_40px_rgba(133,213,92,0.6)] relative">
                                <span class="absolute inset-0 rounded-full bg-[var(--secondary-color)]/30 animate-ping"></span>
                                <i class="fa-solid fa-play text-2xl translate-x-0.5"></i>
                            </div>
                        </div>

                        <!-- Bottom Bar Label -->
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-center text-white/80 text-xs tracking-wider uppercase font-semibold">
                            <span class="flex items-center gap-2"><i class="fa-solid fa-circle text-red-500 animate-pulse text-[8px]"></i> System Demo Walkthrough</span>
                            <span>2:15 Min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- VIDEO MODAL LIGHTBOX -->
<div id="videoModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-md transition-opacity duration-300">
    <!-- Close trigger background -->
    <div class="absolute inset-0 cursor-pointer" id="modalOverlay"></div>
    
    <!-- Close Button -->
    <button class="absolute top-6 right-6 text-white/70 hover:text-white text-3xl focus:outline-none transition-colors z-[110]" id="btnCloseVideo">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <!-- Video Frame Container -->
    <div class="relative w-[95%] max-w-4xl aspect-video rounded-2xl overflow-hidden bg-black shadow-2xl border border-white/10 scale-90 transition-transform duration-300" id="videoContainer">
        <!-- Native Video Player (ready for local MP4 video file path) -->
        <video id="htmlVideo" class="w-full h-full" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<!-- ==========================================
     3. THE PROBLEM & CHALLENGE
     ========================================== -->
<!-- ==========================================
     3. THE PROBLEM & CHALLENGE
     ========================================== -->
<section class="w-full bg-[#f8fafc] text-slate-900 py-16 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Sidebar Content -->
            <div class="lg:col-span-4 space-y-6 text-left">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4" style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                    &#9679; &nbsp;The Challenge
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-[#000d16] leading-tight">Legacy Operations & <br><span class="text-[#2BB5BC] font-bold">User Frustrations</span></h2>
                <p class="text-slate-700 font-light text-sm leading-relaxed">
                    Manual administrative registers and fragmented databases created severe operational friction across all academic departments.
                </p>

                <!-- Attractive Stat Card -->
                <div class="pt-2 border-t border-slate-200 mt-1">
                    <div class="bg-white border border-slate-400 p-4 rounded-[30px] flex items-center gap-4 shadow-[0_10px_25px_rgba(15,23,42,0.02)] hover:border-teal-500/40 hover:shadow-[0_15px_30px_rgba(43,181,188,0.06)] transition-all duration-300 relative overflow-hidden">
                        <div class="absolute -right-6 -bottom-6 w-24 h-24 bg-teal-500/5 rounded-full blur-xl pointer-events-none"></div>
                        
                        <!-- Circular Gauge -->
                        <div class="relative w-24 h-24 flex items-center justify-center flex-shrink-0">
                            <!-- SVG Circular Progress Ring -->
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                <!-- Background Track Circle -->
                                <circle cx="50" cy="50" r="42" stroke="#f1f5f9" stroke-width="8" fill="transparent" />
                                <!-- Progress Circle (40% value) -->
                                <circle cx="50" cy="50" r="42" stroke="url(#tealGreenGradient)" stroke-width="8" fill="transparent" 
                                        stroke-dasharray="264" stroke-dashoffset="158" stroke-linecap="round" />
                                <!-- Gradient definition -->
                                <defs>
                                    <linearGradient id="tealGreenGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#2BB5BC" />
                                        <stop offset="100%" stop-color="#95C951" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <!-- Centered Text inside the SVG circle -->
                            <div class="absolute flex flex-col items-center justify-center text-center">
                                <span class="text-xl font-black text-transparent bg-clip-text bg-gradient-to-r from-[#2BB5BC] to-[#95C951] leading-none">40%</span>
                                <span class="text-[8px] text-slate-500 font-bold uppercase tracking-wider mt-0.5">Leaked</span>
                            </div>
                        </div>

                        <!-- Right Text Content -->
                        <div class="space-y-1 flex-1">
                            <div class="flex items-center gap-1.5">
                                <div class="w-5 h-5 rounded bg-teal-50 border border-teal-200 text-[#2BB5BC] flex items-center justify-center">
                                    <i class="fa-solid fa-chart-line text-[9px]"></i>
                                </div>
                                <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest block">Efficiency Leak</span>
                            </div>
                            <h4 class="text-slate-900 font-bold text-[11px] uppercase tracking-wider mt-0.5">Admin Overhead</h4>
                            <p class="text-slate-600 text-[11px] font-light leading-relaxed mt-0.5">
                                Wasted on manual ledger logs, attendance double-keying, and parent circular distribution workflows.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Challenges Grid -->
            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
                <!-- Card 1 -->
                <div class="bg-white border border-slate-400 p-6 rounded-[24px] space-y-4 shadow-[0_10px_30px_rgba(15,23,42,0.03)] hover:border-teal-500/40 hover:shadow-[0_15px_30px_rgba(43,181,188,0.06)] transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 border border-teal-200 text-[#2BB5BC] flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-clock"></i></div>
                    <h4 class="text-slate-900 font-bold text-base">The 45-Minute Daily Attendance Drain</h4>
                    <p class="text-slate-700 text-sm font-light leading-relaxed">Teachers wasted 20 minutes daily on paper attendance, which staff had to manually re-enter into spreadsheets.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white border border-slate-400 p-6 rounded-[24px] space-y-4 shadow-[0_10px_30px_rgba(15,23,42,0.03)] hover:border-teal-500/40 hover:shadow-[0_15px_30px_rgba(43,181,188,0.06)] transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 border border-teal-200 text-[#2BB5BC] flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-receipt"></i></div>
                    <h4 class="text-slate-900 font-bold text-base">Friction-Ridden Fee Collection</h4>
                    <p class="text-slate-700 text-sm font-light leading-relaxed">Manual invoicing and chasing late payments over calls caused significant collection delays and reconciliation errors.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white border border-slate-400 p-6 rounded-[24px] space-y-4 shadow-[0_10px_30px_rgba(15,23,42,0.03)] hover:border-teal-500/40 hover:shadow-[0_15px_30px_rgba(43,181,188,0.06)] transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 border border-teal-200 text-[#2BB5BC] flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-file-signature"></i></div>
                    <h4 class="text-slate-900 font-bold text-base">End-of-Term Grading Bottlenecks</h4>
                    <p class="text-slate-700 text-sm font-light leading-relaxed">Calculating GPA averages manually and printing report cards delayed final grade distribution by days.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white border border-slate-400 p-6 rounded-[24px] space-y-4 shadow-[0_10px_30px_rgba(15,23,42,0.03)] hover:border-teal-500/40 hover:shadow-[0_15px_30px_rgba(43,181,188,0.06)] transition-all duration-300">
                    <div class="w-10 h-10 rounded-xl bg-teal-50 border border-teal-200 text-[#2BB5BC] flex items-center justify-center font-bold text-xs"><i class="fa-solid fa-comment-slash"></i></div>
                    <h4 class="text-slate-900 font-bold text-base">The Parent-Teacher Blindspot</h4>
                    <p class="text-slate-700 text-sm font-light leading-relaxed">Parents lacked real-time visibility into child attendance and exams, creating communication gaps.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6. OUR SOLUTION: THE 4 CORE PORTALS (Dark Premium Cards)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/5">
    <div class="text-center space-y-4 mb-16">
        <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Unified Ecosystem
        </div>
    </div>
</div>
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">The 4 Core Portals</h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm sm:text-base leading-relaxed">Connecting administrators, teachers, parents, and students in one unified, real-time environment.</p>
    </div>

    <!-- Portals: Flex Row with Connectors -->
    <div class="flex flex-col lg:flex-row items-stretch gap-4 lg:gap-0">

        <!-- Portal 1: Admin Command Center -->
        <div class="portal-card relative bg-[#00101a] border border-white/10 rounded-[28px] p-7 flex flex-col justify-between flex-1 hover:border-[#01a0d8]/40 hover:shadow-[0_0_30px_rgba(1,160,216,0.08)] transition-all duration-400 overflow-hidden">
            <!-- Header: Icon & Number -->
            <div class="flex items-center justify-between relative z-10 mb-5">
                <div class="w-12 h-12 rounded-[16px] flex items-center justify-center border border-[#01a0d8]/30 shadow-[0_0_15px_rgba(1,160,216,0.15)]" style="background: rgba(1,160,216,0.1);">
                    <span class="material-symbols-outlined text-2xl" style="color:#01a0d8;">shield_person</span>
                </div>
                <span class="text-5xl font-black text-white/5 select-none leading-none">01</span>
            </div>
            <!-- Title & Description -->
            <div class="space-y-2 relative z-10">
                <h3 class="text-lg font-bold text-white leading-snug">Admin Command Center</h3>
                <p class="text-slate-300 text-sm font-light leading-relaxed">
                    Manage student registries, billing ledgers, branch analytics, and institutional audits from one control panel.
                </p>
            </div>
            <!-- Badge -->
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#01a0d8]/10 border border-[#01a0d8]/25 text-[#01a0d8] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#01a0d8]"></span>
                    Multi-Branch Analytics
                </span>
            </div>
        </div>

        <!-- Connector 1→2 -->
        <div class="hidden lg:flex items-start justify-center w-10 shrink-0 relative pt-[52px]">
            <div class="w-full h-px bg-gradient-to-r from-[#01a0d8]/30 via-white/10 to-[#95C951]/30 relative flex items-center justify-center">
                <div class="absolute w-2.5 h-2.5 rounded-full bg-[#01a0d8] shadow-[0_0_10px_3px_rgba(1,160,216,0.6)] animate-pulse z-10"></div>
            </div>
        </div>

        <!-- Portal 2: Teacher Hub -->
        <div class="portal-card relative bg-[#00101a] border border-white/10 rounded-[28px] p-7 flex flex-col justify-between flex-1 hover:border-[#95C951]/40 hover:shadow-[0_0_30px_rgba(149,201,81,0.08)] transition-all duration-400 overflow-hidden">
            <!-- Header: Icon & Number -->
            <div class="flex items-center justify-between relative z-10 mb-5">
                <div class="w-12 h-12 rounded-[16px] flex items-center justify-center border border-[#95C951]/30 shadow-[0_0_15px_rgba(149,201,81,0.15)]" style="background: rgba(149,201,81,0.1);">
                    <span class="material-symbols-outlined text-2xl" style="color:#95C951;">menu_book</span>
                </div>
                <span class="text-5xl font-black text-white/5 select-none leading-none">02</span>
            </div>
            <!-- Title & Description -->
            <div class="space-y-2 relative z-10">
                <h3 class="text-lg font-bold text-white leading-snug">Teacher Hub</h3>
                <p class="text-slate-300 text-sm font-light leading-relaxed">
                    Track daily attendance, input exam grades, upload homework resources, and broadcast notification alerts to parents.
                </p>
            </div>
            <!-- Badge -->
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#95C951]/10 border border-[#95C951]/25 text-[#95C951] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#95C951]"></span>
                    Instant Marks Entry
                </span>
            </div>
        </div>

        <!-- Connector 2→3 -->
        <div class="hidden lg:flex items-start justify-center w-10 shrink-0 relative pt-[52px]">
            <div class="w-full h-px bg-gradient-to-r from-[#95C951]/30 via-white/10 to-[#a78bfa]/30 relative flex items-center justify-center">
                <div class="absolute w-2.5 h-2.5 rounded-full bg-[#95C951] shadow-[0_0_10px_3px_rgba(149,201,81,0.6)] animate-pulse z-10" style="animation-delay: 0.4s;"></div>
            </div>
        </div>

        <!-- Portal 3: Parent Mobile Companion -->
        <div class="portal-card relative bg-[#00101a] border border-white/10 rounded-[28px] p-7 flex flex-col justify-between flex-1 hover:border-[#a78bfa]/40 hover:shadow-[0_0_30px_rgba(167,139,250,0.08)] transition-all duration-400 overflow-hidden">
            <!-- Header: Icon & Number -->
            <div class="flex items-center justify-between relative z-10 mb-5">
                <div class="w-12 h-12 rounded-[16px] flex items-center justify-center border border-[#a78bfa]/30 shadow-[0_0_15px_rgba(167,139,250,0.15)]" style="background: rgba(167,139,250,0.1);">
                    <span class="material-symbols-outlined text-2xl" style="color:#a78bfa;">supervised_user_circle</span>
                </div>
                <span class="text-5xl font-black text-white/5 select-none leading-none">03</span>
            </div>
            <!-- Title & Description -->
            <div class="space-y-2 relative z-10">
                <h3 class="text-lg font-bold text-white leading-snug">Parent Mobile Companion</h3>
                <p class="text-slate-300 text-sm font-light leading-relaxed">
                    Track child attendance, view exam report cards, receive circular alerts, and pay school fee invoices.
                </p>
            </div>
            <!-- Badge -->
            <div class="mt-8 relative z-10">
                <span class="inline-flex items-center gap-2 bg-[#a78bfa]/10 border border-[#a78bfa]/25 text-[#a78bfa] text-[11px] font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#a78bfa]"></span>
                    Billing &amp; Dues Sync
                </span>
            </div>
        </div>

        <!-- Connector 3→4 -->
        <div class="hidden lg:flex items-start justify-center w-10 shrink-0 relative pt-[52px]">
            <div class="w-full h-px bg-gradient-to-r from-[#a78bfa]/30 via-white/10 to-[#fbbf24]/30 relative flex items-center justify-center">
                <div class="absolute w-2.5 h-2.5 rounded-full bg-[#a78bfa] shadow-[0_0_10px_3px_rgba(167,139,250,0.6)] animate-pulse z-10" style="animation-delay: 0.8s;"></div>
            </div>
        </div>

        <!-- Portal 4: Student Space -->
        <div class="portal-card relative bg-[#00101a] border border-white/10 rounded-[28px] p-7 flex flex-col justify-between flex-1 hover:border-[#fbbf24]/40 hover:shadow-[0_0_30px_rgba(251,191,36,0.08)] transition-all duration-400 overflow-hidden">
            <!-- Header: Icon & Number -->
            <div class="flex items-center justify-between relative z-10 mb-5">
                <div class="w-12 h-12 rounded-[16px] flex items-center justify-center border border-[#fbbf24]/30 shadow-[0_0_15px_rgba(251,191,36,0.15)]" style="background: rgba(251,191,36,0.1);">
                    <span class="material-symbols-outlined text-2xl" style="color:#fbbf24;">school</span>
                </div>
                <span class="text-5xl font-black text-white/5 select-none leading-none">04</span>
            </div>
            <!-- Title & Description -->
            <div class="space-y-2 relative z-10">
                <h3 class="text-lg font-bold text-white leading-snug">Student Space</h3>
                <p class="text-slate-300 text-sm font-light leading-relaxed">
                    Access digital class materials, check exam grades, view class timetables, and track active homework assignments.
                </p>
            </div>
            <!-- Badge -->
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
<section class="w-full bg-[#f8fafc] pt-10 pb-16 border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-2 mb-8 text-left">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4" style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                &#9679; &nbsp;THE SOLUTION
            </span>
            <h2 class="text-3xl md:text-5xl font-bold text-[#000d16] leading-tight">Premium <span class="font-bold bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] bg-clip-text text-transparent">Feature Suite</span></h2>
        </div>

        <!-- Bento Feature Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
            <!-- Card 1 (Tall: Student Mgmt) -->
            <div class="md:row-span-2 bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-center hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/edtech_bento_bg.webp');">
                </div>

                <div class="relative z-10 space-y-4 text-left">
                    <div class="flex justify-between items-center">
                        <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-users-rectangle"></i></div>
                        <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">STUDENT MGMT</h4>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-white font-medium text-base">Centralized Cloud Profiles</h3>
                        <p class="text-slate-300 text-sm font-light leading-relaxed">
                            Replaces legacy manual student folders with secure, searchable cloud database directories. Enables quick-validation digital profiles, emergency contact records, automated enrollment logs, and historical academic archives in one central admin control panel.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 (Wide: Attendance) -->
            <div class="md:col-span-2 bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-start gap-3 hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/attendance_bento_bg.webp');">
                </div>

                <div class="flex justify-between items-start relative z-10">
                    <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-user-check"></i></div>
                    <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">ATTENDANCE</h4>
                </div>
                <div class="space-y-1 relative z-10 max-w-[75%]">
                    <h3 class="text-white font-medium text-base">Smart Attendance & SMS Alerts</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">Single-click registers marked in under 2 minutes, auto-generating stats and broadcasting instant SMS alerts to parents for absences.</p>
                </div>
            </div>

            <!-- Card 3 (Normal: Parent Portal) -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-start gap-3 hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/edtech_bento_bg.webp');">
                </div>

                <div class="flex justify-between items-start relative z-10">
                    <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-people-roof"></i></div>
                    <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">PARENT PORTAL</h4>
                </div>
                <div class="space-y-1 relative z-10">
                    <h3 class="text-white font-medium text-base">Real-Time Mobile Companion</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">Connects parents with academic progress, notifications, attendance tracking, and digital invoice portals instantly.</p>
                </div>
            </div>

            <!-- Card 4 (Normal: Teacher Hub) -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-start gap-3 hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/edtech_bento_bg.webp');">
                </div>

                <div class="flex justify-between items-start relative z-10">
                    <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">TEACHER HUB</h4>
                </div>
                <div class="space-y-1 relative z-10">
                    <h3 class="text-white font-medium text-base">Unified Teaching Hub</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">Equips faculty with lesson planners, resource uploading tools, grading panels, and direct messaging channels.</p>
                </div>
            </div>

            <!-- Card 5 (Wide: Fee Tracking) -->
            <div class="md:col-span-2 bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-start gap-3 hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/finance_bento_bg.webp');">
                </div>

                <div class="flex justify-between items-start relative z-10">
                    <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-money-check-dollar"></i></div>
                    <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">FEE TRACKING</h4>
                </div>
                <div class="space-y-1 relative z-10 max-w-[75%]">
                    <h3 class="text-white font-medium text-base">Automated Billing & Checkout</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">Generates monthly invoices, dispatches automatic notices, and allows online payment checkout with auto-reconciliation.</p>
                </div>
            </div>

            <!-- Card 6 (Normal: Exam System) -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-6 flex flex-col justify-start gap-3 hover:border-[var(--secondary-color)] hover:shadow-2xl hover:shadow-cyan-950/20 transition-all duration-300 relative overflow-hidden group">
                <!-- Background Image layer with hover zoom -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105 pointer-events-none"
                     style="background-image: linear-gradient(to bottom, rgba(0, 16, 26, 0.65), rgba(0, 16, 26, 0.80)), url('/images/case-studies/edtech_bento_bg.webp');">
                </div>

                <div class="flex justify-between items-start relative z-10">
                    <div class="text-[var(--secondary-color)] text-xl"><i class="fa-solid fa-file-signature"></i></div>
                    <h4 class="text-[10px] font-bold text-gray-400 tracking-widest uppercase font-mono">EXAM SYSTEM</h4>
                </div>
                <div class="space-y-1 relative z-10">
                    <h3 class="text-white font-medium text-base">Consolidated Gradebooks</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">Automates exam records entries, rank calculations, and GPA averages to generate digital report cards instantaneously.</p>
                </div>
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
            <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Automation Showcase
        </div>
    </div>
</div>
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">Schoolian Smart <br><span class="text-[var(--secondary-color)] font-bold italic">Fee Collection Workflow</span></h2>
            <p class="text-slate-300 font-light text-sm leading-relaxed">
                Replacing manual slip receipts and collection books with a secure, automated financial sequence.
            </p>
            <div class="border-l-2 border-[var(--primary-color)] pl-4 py-1 text-xs text-slate-300 font-light">
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
                <p class="text-slate-300 text-sm font-light leading-relaxed">System auto-compiles monthly school fee ledgers for all active rosters on the 1st.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">02</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-paper-plane"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Notification Dispatch</h4>
                <p class="text-slate-300 text-sm font-light leading-relaxed">Parents receive SMS alerts and push messages in their portal app instantly.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">03</span>
                <span class="text-[var(--primary-color)] text-lg"><i class="fa-solid fa-credit-card"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Online Portal Checkout</h4>
                <p class="text-slate-300 text-sm font-light leading-relaxed">Parents settle dues securely in the companion app using mobile banking integrations.</p>
            </div>

            <!-- Step 4 -->
            <div class="bg-[#00101a] border border-white/5 p-6 rounded-2xl relative">
                <span class="absolute top-4 right-4 text-xs font-bold text-white/20 font-mono">04</span>
                <span class="text-[var(--tertiary-color)] text-lg"><i class="fa-solid fa-circle-check"></i></span>
                <h4 class="text-white font-medium text-sm mt-3 mb-1">Reconciliation</h4>
                <p class="text-slate-300 text-sm font-light leading-relaxed">Accounting dashboard updates instantly and issues a PDF receipt automatically.</p>
            </div>

        </div>

    </div>
</section>



<!-- ==========================================
     12. RESULTS & ACHIEVEMENTS (KPI Cards)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center mb-16 space-y-4">
        <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Results & Impact
        </div>
    </div>
</div>
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">Quantifiable Improvements</h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm">How Schoolian transformed admin workloads and parent engagement across the network.</p>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl mx-auto mb-16">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">ADMINISTRATIVE TIME</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">50% Saved</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Automating registers, gradebooks, and reports cut daily admin workload in half.</p>
        </div>
        
        <!-- Metric Card 2 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">FEE COLLECTION SPEED</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">40% Faster</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Direct mobile billing links reduced payment cycle delays and manual reconciliation.</p>
        </div>
        
        <!-- Metric Card 3 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">PARENT ADOPTION RATE</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">95% Active</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed">High app adoption established a robust real-time communication loop with families.</p>
        </div>

        <!-- Metric Card 4 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-8 flex flex-col justify-center items-center text-center space-y-3 cursor-pointer glow-box-cyan">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest font-mono">PAPER DEPENDENCY</p>
            <p class="metric-value text-4xl font-extrabold text-[var(--primary-color)] tracking-tight">90% Less</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Progress cards, receipts, and registration databases migrated fully to the cloud.</p>
        </div>
    </div>

    <!-- Narrative Impact Bullet Points -->
    <div class="max-w-4xl mx-auto bg-white border border-slate-200 rounded-3xl p-8 md:p-12 space-y-8 shadow-md">
        <h2 class="text-2xl md:text-3xl font-bold text-[#000d16] leading-tight">Key <span class="font-bold bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] bg-clip-text text-transparent">Achievements</span> & Operational Impact</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
            <div class="space-y-2">
                <div class="text-cyan-700 text-lg"><i class="fa-solid fa-clock-rotate-left"></i></div>
                <h4 class="text-slate-900 font-semibold text-base">Reclaimed Instruction Hours</h4>
                <p class="text-slate-700 text-sm font-light leading-relaxed">By digitizing classroom attendance and test grading, teachers reclaimed up to 5 hours weekly, directly reinvesting that time into student mentoring.</p>
            </div>
            <div class="space-y-2">
                <div class="text-cyan-700 text-lg"><i class="fa-solid fa-piggy-bank"></i></div>
                <h4 class="text-slate-900 font-semibold text-base">Eliminated Billing Friction</h4>
                <p class="text-slate-700 text-sm font-light leading-relaxed">Automated digital invoicing, direct SMS billing triggers, and integrated checkout channels eliminated manual ledger matching and minimized outstanding debt.</p>
            </div>
            <div class="space-y-2">
                <div class="text-cyan-700 text-lg"><i class="fa-solid fa-users"></i></div>
                <h4 class="text-slate-900 font-semibold text-base">Active Family Partnership</h4>
                <p class="text-slate-700 text-sm font-light leading-relaxed">Real-time attendance push alerts and dynamic grade access bridges the gap between home and school, fostering parent trust and transparency.</p>
            </div>
        </div>
    </div>
</section>



<!-- ==========================================
     16. FINAL CTA SECTION
     ========================================== -->
<section class="w-full bg-[#000d16] py-20 text-center border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 space-y-8 flex flex-col items-center">
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Ready to Modernize Your <br>
            <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Educational Workflows?</span>
        </h2>
        
        <p class="text-slate-300 font-light text-sm sm:text-base leading-relaxed max-w-2xl">
            Let Qonkar Technologies engineer a custom, secure EdTech platform tailored to your institution’s unique processes, fee models, and communication needs.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 pt-4">
            <a href="/contact-us" class="sm:text-base group btn-dark-theme">
                Start Your Project
                <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="/portfolio" class="sm:text-base btn-light-theme">
                View More Case Studies
            </a>
        </div>
    </div>
</section>

<!-- Standard Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

<script src="/script/navbar.js"></script>
<!-- Product Tour Video Modal JS -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const btnOpen = document.getElementById("btnOpenVideo");
        const btnOpenPoster = document.getElementById("btnOpenVideoPoster");
        const btnClose = document.getElementById("btnCloseVideo");
        const overlay = document.getElementById("modalOverlay");
        const modal = document.getElementById("videoModal");
        const video = document.getElementById("htmlVideo");
        const container = document.getElementById("videoContainer");

        // Set the path to your video file when available (e.g. "/videos/schoolian_tour.mp4")
        const videoPath = "";

        function openModal() {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            setTimeout(() => {
                if (videoPath) {
                    video.src = videoPath;
                    video.load();
                    video.play();
                }
                container.classList.remove("scale-90");
                container.classList.add("scale-100");
            }, 50);
        }

        function closeModal() {
            container.classList.remove("scale-100");
            container.classList.add("scale-90");
            setTimeout(() => {
                video.pause();
                video.src = "";
                modal.classList.remove("flex");
                modal.classList.add("hidden");
            }, 200);
        }

        if(modal) {
            if (btnOpen) btnOpen.addEventListener("click", openModal);
            if (btnOpenPoster) btnOpenPoster.addEventListener("click", openModal);
            if (btnClose) btnClose.addEventListener("click", closeModal);
            if (overlay) overlay.addEventListener("click", closeModal);
        }
    });
</script>
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


