<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    

    <!-- Basic SEO Meta -->
    
    
    <meta name="description" content="Homalix Case Study - Unified Hospital Management and Clinical Automation Solutions by Qonkar Technologies." />
    <meta name="keywords" content="Homalix, Hospital Management System, HMS, Qonkar, Clinical Automation, EMR" />
    

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Homalix Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Explore how Homalix streamlined operational workflows and automated medical tracking across multi-specialty healthcare networks." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/case-studies/homalix" />
    <meta property="og:image" content="/images/case-studies/homalix_mockup.png" />

    <!-- Google Fonts & Icons -->
    
    
    
    
    <!-- Favicon -->
    

    <!-- Title -->
    <title>Homalix Case Study | Qonkar Technologies</title>

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
        .node-icon {
            transition: all 0.3s ease;
        }
        .transformation-node:hover .node-icon {
            transform: rotate(15deg) scale(1.1);
            color: var(--secondary-color) !important;
        }
        
        @keyframes wave-flow-forward {
            from {
                stroke-dashoffset: 60;
            }
            to {
                stroke-dashoffset: 0;
            }
        }
        @keyframes wave-flow-backward {
            from {
                stroke-dashoffset: 0;
            }
            to {
                stroke-dashoffset: 60;
            }
        }
        .flow-line-1 {
            stroke-dasharray: 15, 15;
            animation: wave-flow-forward 4s linear infinite;
        }
        .flow-line-3 {
            stroke-dasharray: 20, 15;
            animation: wave-flow-backward 5s linear infinite;
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

<body class="bg-[#000d16] text-white">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<!-- ==========================================
     HERO SECTION
     ========================================== -->
<section class="relative w-full mt-0 mb-0 rounded-t-[30px] rounded-b-none overflow-hidden flex items-center background-backdrop-card min-h-[60vh] animate-fade-in">
    <!-- Darkened Hospital/Clinic Overlay Background -->
    <div class="absolute inset-0 z-0 bg-cover bg-center md:bg-right" style="background-image: linear-gradient(to right, rgba(8, 8, 10, 0.95) 30%, rgba(8, 8, 10, 0.75) 55%, rgba(8, 8, 10, 0.2) 100%), url('/images/case-studies/background/homalix_bg.png'); filter: contrast(1.05); mix-blend-mode: normal;"></div>

    <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full py-12 px-4 sm:px-8">
        
        <!-- Left Side content -->
        <div class="lg:col-span-7 text-left space-y-6">
            <div class="inline-flex laser-border shadow-md">
                <div class="laser-background">
                    <div class="glass px-4 py-1.5 flex items-center gap-2 text-xs font-semibold tracking-wider text-gray-300">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#01a0d8] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#01a0d8] shadow-[0_0_6px_rgba(1,160,216,0.6)]"></span>
                        </span>
                        ENTERPRISE STATUS: ACTIVE
                    </div>
                </div>
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-white leading-none">
                Homalix Multi-Branch <br>
                <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Clinical Network Hub.</span>
            </h1>

            <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
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

        <!-- Right Column: Card Mockup -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end mt-8 lg:mt-0">
            <div class="relative max-w-md w-full bg-white/5 rounded-2xl border border-white/10 shadow-2xl p-2 backdrop-blur-md">
                <img src="/images/case-studies/homalix_mockup.png" alt="Homalix System Interface" class="rounded-xl w-full h-auto object-cover drop-shadow-[0_15px_25px_rgba(0,0,0,0.6)]">
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
        <h2 class="text-[#000d16] text-3xl md:text-4xl font-bold tracking-[0.35em] uppercase">HOMALIX</h2>
        
        <!-- Premium Description -->
        <p class="text-slate-700 font-light text-sm sm:text-base md:text-lg leading-relaxed max-w-3xl">
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
                    <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Clinical Hub.</span>
                </h2>
                <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed">
                    Observe how Homalix simplifies medical complexity. Explore a comprehensive visual walkthrough showing central patient queues, automated EMR routing, and integrated lab results in real-time.
                </p>

                <!-- Key Demonstration Features -->
                <ul class="space-y-3 pt-1">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(47,173,195,0.1)]">
                            <i class="fa-solid fa-bolt text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Triage Orchestration</h4>
                            <p class="text-slate-300 text-sm font-light">Patient routing across clinic networks in real-time.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/20 text-[var(--tertiary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(133,213,92,0.1)]">
                            <i class="fa-solid fa-shield-halved text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Zero-Trust EMR Vault</h4>
                            <p class="text-slate-300 text-sm font-light">End-to-end encrypted electronic health records.</p>
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

            <!-- Right Column: Interactive Browser Frame & Widgets -->
            <div class="lg:col-span-8 pt-6 lg:pt-0">
                <div class="relative w-full rounded-[32px] border border-white/10 p-2 bg-[#00101a]/80 backdrop-blur-md shadow-[0_0_50px_rgba(47,173,195,0.15)] group overflow-hidden cursor-pointer" id="btnOpenVideoPoster">
                    <!-- Glow background overlay -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[var(--secondary-color)]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <!-- Video Thumbnail / Poster Image -->
                    <div class="relative rounded-[24px] overflow-hidden aspect-[16/10]">
                        <img src="/images/case-studies/background/homalix_bg.png" alt="Homalix System Tour Poster" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 group-hover:blur-[2px]">
                        
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
     OPERATIONAL TRANSFORMATION SECTION
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Text Column -->
        <div class="lg:col-span-5 space-y-6">
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
                Operational <span class="text-[var(--secondary-color)] italic font-bold">Transformation</span>
            </h2>
            <p class="text-slate-300 font-light text-base leading-relaxed">
                Transitioning from fragmented legacy silos to a unified clinical nervous system. Observe the impact of Homalix enterprise integration across clinical ecosystems.
            </p>
            <div class="pt-2">
                <a href="/contact-us" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-[#01a0d8] text-white text-sm font-semibold hover:bg-[#95C951] transition shadow-md hover:scale-105 group">
                    Request Impact Report
                    <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <!-- Comparison Progress Bars -->
        <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Legacy Box -->
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-6 space-y-6">
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
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-6 space-y-6 relative overflow-hidden">
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
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5 text-center">
    <div class="space-y-4 mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Network Core Capabilities
        </h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm">
            Precision-engineered modules designed to handle the velocity of enterprise medical operations.
        </p>
    </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 text-left">
            <!-- Card 1: Patient Flow -->
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-8 md:col-span-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-6 group hover:border-[var(--secondary-color)]/20 transition-all duration-300">
                <div class="space-y-4 max-w-md">
                    <div class="w-12 h-12 rounded-xl bg-[var(--secondary-color)]/10 text-[var(--secondary-color)] flex items-center justify-center border border-[var(--secondary-color)]/20">
                        <span class="material-symbols-outlined">patient_list</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Patient Flow Management</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
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
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-8 md:col-span-4 flex flex-col justify-between group hover:border-[var(--primary-color)]/20 transition-all duration-300">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[var(--primary-color)]/10 text-[var(--primary-color)] flex items-center justify-center border border-[var(--primary-color)]/20">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Smart Revenue</h3>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
                        Automated ICD-10 coding and claim scrubbing with a 99.8% first-pass acceptance rate.
                    </p>
                </div>
                <div class="pt-8">
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Monthly Financial Impact</p>
                    <p class="text-3xl font-bold text-white mt-1">$2.4M <span class="text-xs text-gray-400 font-normal">Recovered / Mo</span></p>
                </div>
            </div>

            <!-- Card 3: Staff Optimization -->
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-6 md:col-span-6 flex items-start gap-4 group hover:border-[var(--tertiary-color)]/20 transition-all duration-300">
                <div class="w-10 h-10 shrink-0 rounded-lg bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] flex items-center justify-center border border-[var(--tertiary-color)]/20">
                    <span class="material-symbols-outlined">calendar_today</span>
                </div>
                <div class="space-y-2">
                    <h4 class="text-lg font-bold text-white">Staff Optimization</h4>
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
                        Intelligent scheduling reduces physician burnout by 35% through ergonomic shift rotation.
                    </p>
                </div>
            </div>

            <!-- Card 4: HIPAA Fortress -->
            <div class="bg-[#00101a] border border-white/5 rounded-2xl p-6 md:col-span-6 flex items-start justify-between gap-4 group hover:border-[var(--secondary-color)]/20 transition-all duration-300">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 shrink-0 rounded-lg bg-[var(--secondary-color)]/10 text-[var(--secondary-color)] flex items-center justify-center border border-[var(--secondary-color)]/20">
                        <span class="material-symbols-outlined">shield_lock</span>
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-bold text-white">HIPAA Fortress Architecture</h4>
                        <p class="text-slate-300 text-sm font-light leading-relaxed">
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
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">The <span class="font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)] bg-clip-text text-transparent">Intelligence Transformation</span></h2>
    </div>

    <!-- Wavy Process Flow (Desktop) -->
    <div class="relative w-screen left-1/2 -translate-x-1/2 h-[350px] mb-20 hidden md:block overflow-hidden">
        <!-- SVG Wavy Lines -->
        <svg class="absolute inset-0 w-full h-full z-0" viewBox="0 0 1000 350" preserveAspectRatio="none">
            <!-- Path 1 (White Accent) -->
            <path d="M 0 175 C 125 175, 125 110, 250 110 C 375 110, 375 240, 500 240 C 625 240, 625 120, 750 120 C 875 120, 875 175, 1000 175" 
                  fill="none" stroke="rgba(255, 255, 255, 0.2)" stroke-width="1.5" />
            <!-- Path 2 (Main Cyan) -->
            <path d="M 0 179 C 125 179, 125 114, 250 114 C 375 114, 375 244, 500 244 C 625 244, 625 124, 750 124 C 875 124, 875 179, 1000 179" 
                  fill="none" stroke="var(--secondary-color)" stroke-width="2.5" />
            <!-- Path 3 (Primary Theme Blue) -->
            <path d="M 0 183 C 125 183, 125 118, 250 118 C 375 118, 375 248, 500 248 C 625 248, 625 128, 750 128 C 875 128, 875 183, 1000 183" 
                  fill="none" stroke="var(--primary-color)" stroke-width="1.8" />

            <!-- Glowing Energy Particle 1 (Cyan) -->
            <circle r="4.5" fill="var(--secondary-color)" style="filter: drop-shadow(0 0 5px var(--secondary-color)) drop-shadow(0 0 10px var(--secondary-color));">
                <animateMotion dur="5.5s" repeatCount="indefinite" path="M 0 179 C 125 179, 125 114, 250 114 C 375 114, 375 244, 500 244 C 625 244, 625 124, 750 124 C 875 124, 875 179, 1000 179" />
            </circle>

            <!-- Glowing Energy Particle 2 (Green) -->
            <circle r="4" fill="var(--tertiary-color)" style="filter: drop-shadow(0 0 5px var(--tertiary-color)) drop-shadow(0 0 10px var(--tertiary-color));">
                <animateMotion dur="4.2s" repeatCount="indefinite" path="M 0 179 C 125 179, 125 114, 250 114 C 375 114, 375 244, 500 244 C 625 244, 625 124, 750 124 C 875 124, 875 179, 1000 179" />
            </circle>
        </svg>

        <!-- Node 1 (Fragmented Data) -->
        <div class="absolute left-[25%] top-[114px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Text/Badge Above -->
            <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 bg-[#00101a] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:-translate-y-1">
                <h4 class="text-white text-xs font-semibold tracking-wide font-medium">Fragmented Data</h4>
                <p class="text-slate-300 text-xs font-light mt-0.5">Isolated legacy servers</p>
            </div>
            <!-- Dot on the curve -->
            <div class="transformation-node w-9 h-9 rounded-full border-4 border-white bg-[var(--primary-color)] flex items-center justify-center shadow-[0_0_15px_rgba(63,137,201,0.5)] cursor-pointer">
                <span class="material-symbols-outlined node-icon text-white text-base font-bold">cloud_off</span>
            </div>
        </div>

        <!-- Node 2 (Homalix Core - Glowing Highlighted) -->
        <div class="absolute left-[50%] top-[244px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Dot on the curve -->
            <div class="transformation-node glowing-core-node w-12 h-12 rounded-full border-4 border-white bg-[var(--secondary-color)] flex items-center justify-center shadow-[0_0_20px_rgba(47,173,195,0.7)] cursor-pointer">
                <span class="material-symbols-outlined node-icon text-white text-xl font-bold">hub</span>
            </div>
            <!-- Text/Badge Below -->
            <div class="absolute top-full left-1/2 -translate-x-1/2 mt-4 bg-[#00101a] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:translate-y-1">
                <h4 class="text-[var(--secondary-color)] text-xs font-semibold tracking-wide font-medium">Homalix Core</h4>
                <p class="text-slate-300 text-xs font-light mt-0.5">Central AI Processing</p>
            </div>
        </div>

        <!-- Node 3 (Predictive Action) -->
        <div class="absolute left-[75%] top-[124px] -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10 group">
            <!-- Text/Badge Above -->
            <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 bg-[#00101a] border border-white/10 rounded-full px-5 py-2.5 text-center shadow-2xl transition-all duration-300 w-48 group-hover:border-[var(--secondary-color)]/40 group-hover:-translate-y-1">
                <h4 class="text-white text-xs font-semibold tracking-wide font-medium">Predictive Action</h4>
                <p class="text-slate-300 text-xs font-light mt-0.5">Real-time clinical insights</p>
            </div>
            <!-- Dot on the curve -->
            <div class="transformation-node w-9 h-9 rounded-full border-4 border-white bg-[var(--tertiary-color)] flex items-center justify-center shadow-[0_0_15px_rgba(133,213,92,0.5)] cursor-pointer">
                <span class="material-symbols-outlined node-icon text-white text-base font-bold">trending_up</span>
            </div>
        </div>
    </div>

    <!-- Process Flow (Mobile - Clean Stacked List) -->
    <div class="flex flex-col gap-6 md:hidden mb-16 px-4">
        <!-- Node 1 -->
        <div class="flex items-center gap-4 bg-[#00101a]/40 border border-white/5 rounded-2xl p-5">
            <div class="w-12 h-12 rounded-full border border-white/10 bg-[#000d16]/90 flex items-center justify-center text-gray-400">
                <span class="material-symbols-outlined text-xl">cloud_off</span>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide">Fragmented Data</h4>
                <p class="text-slate-300 text-sm font-light mt-0.5">Isolated legacy servers</p>
            </div>
        </div>
        
        <!-- Node 2 -->
        <div class="flex items-center gap-4 bg-[#00101a]/40 border border-[var(--secondary-color)]/30 rounded-2xl p-5 shadow-[0_0_15px_rgba(47,173,195,0.15)]">
            <div class="w-12 h-12 rounded-full border border-[var(--secondary-color)] bg-[#000d16]/95 flex items-center justify-center text-[var(--secondary-color)]">
                <span class="material-symbols-outlined text-xl">hub</span>
            </div>
            <div>
                <h4 class="text-[var(--secondary-color)] text-sm font-semibold tracking-wide">Homalix Core</h4>
                <p class="text-slate-300 text-sm font-light mt-0.5">Central AI Processing</p>
            </div>
        </div>
        
        <!-- Node 3 -->
        <div class="flex items-center gap-4 bg-[#00101a]/40 border border-white/5 rounded-2xl p-5">
            <div class="w-12 h-12 rounded-full border border-white/10 bg-[#000d16]/90 flex items-center justify-center text-gray-400">
                <span class="material-symbols-outlined text-xl">trending_up</span>
            </div>
            <div>
                <h4 class="text-white text-sm font-semibold tracking-wide">Predictive Action</h4>
                <p class="text-slate-300 text-sm font-light mt-0.5">Real-time clinical insights</p>
            </div>
        </div>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <!-- Metric Card 1 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Time Saved</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">12,000 hrs</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed max-w-[240px]">Clinical administrative hours recovered annually.</p>
        </div>
        
        <!-- Metric Card 2 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Revenue Growth</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">18.5%</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed max-w-[240px]">Increase in billing accuracy and resource recovery.</p>
        </div>
        
        <!-- Metric Card 3 -->
        <div class="metric-card-premium bg-[#00101a]/40 border border-white/5 rounded-2xl p-10 flex flex-col justify-center items-center text-center space-y-4 cursor-pointer">
            <p class="text-[10px] text-[var(--secondary-color)] font-bold uppercase tracking-widest">Staff Satisfaction</p>
            <p class="metric-value text-4xl sm:text-5xl font-extrabold text-[var(--primary-color)] tracking-tight">+42pt</p>
            <p class="text-slate-300 text-sm font-light leading-relaxed max-w-[240px]">Improvement in clinician eNPS survey results.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     EMPOWERING DECISION-MAKERS SECTION
     ========================================== -->
<section class="w-full bg-[#f8fafc] py-20 border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Side: Content -->
            <div class="lg:col-span-6 space-y-8">
                <h2 class="text-3xl md:text-5xl font-bold text-[#000d16] leading-tight">
                    Empowering decision-makers with <br>
                    <span class="font-bold bg-gradient-to-r from-[var(--primary-color)] to-[var(--secondary-color)] bg-clip-text text-transparent">Clarity.</span>
                </h2>
                
                <p class="text-slate-700 font-light text-base sm:text-lg leading-relaxed max-w-xl">
                    The Homalix interface was designed for high-stress clinical environments. No cluttered menus, only actionable intelligence.
                </p>
                
                <!-- List of Bullet Points -->
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                            <i class="fa-solid fa-check-double text-sm"></i>
                        </span>
                        <span class="text-slate-700 text-sm sm:text-base font-light">Real-time patient flow heatmaps</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                            <i class="fa-solid fa-check-double text-sm"></i>
                        </span>
                        <span class="text-slate-700 text-sm sm:text-base font-light">Predictive ER bed availability</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-[var(--secondary-color)] mt-1 flex items-center justify-center">
                            <i class="fa-solid fa-check-double text-sm"></i>
                        </span>
                        <span class="text-slate-700 text-sm sm:text-base font-light">Automated staff scheduling optimization</span>
                    </li>
                </ul>
            </div>
            
            <!-- Right Side: Phone Mockup Display -->
            <div class="lg:col-span-6 flex justify-center lg:justify-end">
                <!-- Framed Premium Container -->
                <div class="relative w-full max-w-lg bg-[#00101a] border border-white/5 rounded-3xl p-3 shadow-2xl transition-all duration-500 hover:border-[var(--secondary-color)]/25 hover:shadow-[0_20px_50px_rgba(0,0,0,0.55),0_0_30px_rgba(47,173,195,0.15)]">
                    <img src="/images/case-studies/homalix_mobile_mockup.png" alt="Homalix Mobile Interface Mockup" class="rounded-[22px] w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     DYNAMIC CASE STUDIES CARDS WITH FILTERS
     ========================================== -->
<section id="local-cases" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/5">
    <div class="text-center space-y-4 mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Partner Hospital Profiles
        </h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm">
            Check the outcomes of Homalix deployment across various multi-branch clinics and diagnostic systems.
        </p>
    </div>

    <!-- Filter selectors -->
    <div class="bg-[#00101a] border border-white/5 rounded-2xl p-6 mb-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 flex-1">
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Region</label>
                <select id="filterRegion" class="w-full bg-[#000d16] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
                    <option value="all">All Regions</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                </select>
            </div>
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Hospital Size</label>
                <select id="filterSize" class="w-full bg-[#000d16] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
                    <option value="all">All Sizes</option>
                    <option value="Large">Large Organisation</option>
                    <option value="Medium">Medium Network</option>
                    <option value="Small">Small Clinic</option>
                </select>
            </div>
            <div>
                <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">Module</label>
                <select id="filterModule" class="w-full bg-[#000d16] border border-white/10 rounded-lg px-4 py-2.5 text-xs text-white focus:outline-none focus:border-[var(--secondary-color)]">
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
        <div class="hospital-card bg-[#00101a] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--secondary-color)]/25 transition-all duration-300"
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
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
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
        <div class="hospital-card bg-[#00101a] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--tertiary-color)]/25 transition-all duration-300"
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
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
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
        <div class="hospital-card bg-[#00101a] border border-white/5 rounded-2xl overflow-hidden flex flex-col justify-between group hover:border-[var(--primary-color)]/25 transition-all duration-300"
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
                    <p class="text-slate-300 text-sm font-light leading-relaxed">
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
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Aggregate Network Performance
        </h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm">
            Average metrics achieved across healthcare clinics using Homalix Hospital Management modules.
        </p>
    </div>

        <!-- Circle Progress metrics -->
        <div class="flex flex-wrap justify-center gap-12 mb-16">
        <!-- Stat 1 -->
        <div class="bg-[#00101a] border border-white/5 rounded-2xl p-8 w-72 text-center space-y-4 flex flex-col items-center">
            <!-- Visual CSS circle representation -->
            <div class="w-24 h-24 rounded-full border-4 border-[var(--secondary-color)]/25 flex items-center justify-center relative shadow-[0_0_15px_rgba(47,173,195,0.1)]">
                <span class="text-2xl font-bold text-white">60%</span>
                <span class="absolute inset-0 rounded-full border-4 border-t-[var(--secondary-color)] border-l-[var(--secondary-color)] border-b-transparent border-r-transparent"></span>
            </div>
            <h4 class="text-lg font-bold text-white">Time Reduction</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed max-w-xs">
                Average reduction in clinical charting and patient registration time per encounter.
            </p>
        </div>

        <!-- Stat 2 -->
        <div class="bg-[#00101a] border border-white/5 rounded-2xl p-8 w-72 text-center space-y-4 flex flex-col items-center">
            <div class="w-24 h-24 rounded-full border-4 border-[var(--tertiary-color)]/25 flex items-center justify-center relative shadow-[0_0_15px_rgba(133,213,92,0.1)]">
                <span class="text-2xl font-bold text-white">45%</span>
                <span class="absolute inset-0 rounded-full border-4 border-t-[var(--tertiary-color)] border-r-transparent border-b-transparent border-l-transparent"></span>
            </div>
            <h4 class="text-lg font-bold text-white">Admin Workload Decrease</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed max-w-xs">
                Significant drop in repetitive paperwork and manual booking conflicts for nursing staff.
            </p>
        </div>
    </div>

    <!-- Main Testimonial Block -->
    <div class="max-w-5xl mx-auto bg-[#00101a] border border-white/10 rounded-[32px] p-10 md:p-14 relative overflow-hidden text-left shadow-2xl transition-all duration-500 hover:border-[var(--secondary-color)]/30 hover:shadow-[0_20px_50px_rgba(0,0,0,0.55),0_0_30px_rgba(47,173,195,0.15)]">
        <!-- Huge Quotation Icon on the Left -->
        <div class="text-[var(--secondary-color)]/5 text-[15rem] absolute -left-6 -top-12 font-serif select-none pointer-events-none">
            “
        </div>
        
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 items-center">
            <!-- Left Side Avatar -->
            <div class="md:col-span-3 flex justify-center md:justify-start">
                <div class="w-36 h-36 rounded-full border-2 border-[var(--secondary-color)] bg-[#000d16]/80 p-1 flex items-center justify-center overflow-hidden shadow-2xl transition-all duration-500 hover:scale-105">
                    <img src="/images/case-studies/elena_rodriguez.png" alt="Dr. Elena Rodriguez" class="w-full h-full rounded-full object-cover">
                </div>
            </div>
            
            <!-- Right Side Content -->
            <div class="md:col-span-9 space-y-6">
                <p class="text-slate-200 text-lg md:text-xl font-light italic leading-relaxed">
                    "Elena Rodriguez Chief Medical Officer"
                </p>
                
                <div class="space-y-1">
                    <h3 class="text-xl font-bold text-[var(--secondary-color)]">Dr. Elena Rodriguez</h3>
                    <p class="text-xs sm:text-sm font-light text-slate-300">Chief Medical Officer, St. Mary's General Hospital</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Standard Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

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

        // Set the path to your video file when available (e.g. "/videos/homalix_tour.mp4")
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

