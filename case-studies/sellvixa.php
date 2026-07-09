<?php
require_once dirname(__DIR__) . '/db-path.php';
require_once dirname(__DIR__) . '/' . ADMIN_URL . '/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    

    <!-- Basic SEO Meta -->
    
    
    <meta name="description" content="Sellvixa Case Study - Futuristic Point of Sale and Multi-Branch Retail Management ERP." />
    <meta name="keywords" content="Sellvixa, POS Simulator, Retail ERP, Supermarket Software, Inventory Heatmap, Qonkar, Checkout Billing" />
    

    <!-- Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Sellvixa Case Study | Qonkar Technologies" />
    <meta property="og:description" content="Explore Sellvixa - next-generation Retail ERP with live checkouts, multi-branch control, and visual analytics." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/case-studies/sellvixa" />
    <meta property="og:image" content="/images/case-studies/sellvixa_dashboard.png" />

    <!-- Google Fonts & Icons -->
    
    
    
    
    <!-- Favicon -->
    

    <!-- Title -->
    <title>Sellvixa Case Study | Qonkar Technologies</title>

    <!-- Tailwind CSS -->
    

    <!-- Theme & Reusable Styles -->
    
    <style>
        :root {
            --primary-navy: #000d16;
            --accent-blue: #01a0d8;
            --accent-green: #85d55c;
            --accent-cyan: #2fadc3;
        }
        
        body {
            background-color: var(--primary-navy);
            font-family: "Lexend", sans-serif;
            color: #fff;
            overflow-x: hidden;
        }
        p:not(.font-bold):not(.font-semibold):not(.font-medium):not(.font-extrabold) {
            font-weight: 300;
            line-height: 1.625;
        }

        /* Mockup Frame (Flat & Elegant) */
        .mockup-frame {
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.02);
            transition: all 0.3s ease;
        }
        .mockup-frame:hover {
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        /* Clean Card Hover */
        .spotlight-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .spotlight-card:hover {
            border-color: rgba(1, 160, 216, 0.2);
            background: rgba(255, 255, 255, 0.04);
            transform: translateY(-2px);
        }

        @property --angle {
            syntax: '<angle>';
            initial-value: 0deg;
            inherits: false;
        }

        @keyframes border-beam {
            to {
                --angle: 360deg;
            }
        }

        .laser-border {
            position: relative;
            display: inline-flex;
            border-radius: 40px;
            padding: 1.5px; /* Border thickness */
            z-index: 1;
        }

        .laser-border::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 1.5px;
            background: conic-gradient(
                from var(--angle),
                transparent 80%,
                var(--accent-blue) 92%,
                #ffffff 96%,
                var(--accent-cyan) 99%,
                transparent 100%
            );
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            animation: border-beam 3.5s linear infinite;
            z-index: 3;
        }

        .laser-background {
            position: relative;
            z-index: 2;
            border-radius: 39px;
            background-color: var(--primary-navy);
            overflow: hidden;
            width: 100%;
        }

        .faq-tab-btn {
            transition: all 0.3s ease;
        }
        .faq-tab-btn.active {
            background: rgba(255, 255, 255, 0.06);
            border-color: var(--secondary-color);
            box-shadow: 0 4px 12px rgba(47, 173, 195, 0.05);
        }

        /* Custom Scrollbar for Terminal */
        .terminal-scroll::-webkit-scrollbar {
            width: 6px;
        }
        .terminal-scroll::-webkit-scrollbar-track {
            background: transparent;
        }
        .terminal-scroll::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }
        .terminal-scroll::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        /* 3D Folded Tab Effect (Top Slit Folds) */
        .folded-tab::before {
            content: '';
            position: absolute;
            left: -16px;
            top: 0;
            width: 16px;
            height: 16px;
            background: #104751; /* Darkened var(--secondary-color) for left fold shadow */
            clip-path: polygon(100% 0, 0 0, 100% 100%);
            z-index: -1;
        }
        .folded-tab::after {
            content: '';
            position: absolute;
            right: -16px;
            top: 0;
            width: 16px;
            height: 16px;
            background: #355d1f; /* Darkened var(--tertiary-color) for right fold shadow */
            clip-path: polygon(0 0, 100% 0, 0 100%);
            z-index: -1;
        }

        /* 3D Page Curl Shadow Effect (Curved Calendar Page) */
        .page-curl {
            position: absolute;
            bottom: 6px;
            width: 40%;
            height: 10px;
            z-index: -2;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .page-curl.shadow-left {
            left: 8px;
            transform: skew(-6deg) rotate(-5deg);
            box-shadow: 0 10px 14px rgba(47, 173, 195, 0.3); /* Cyan shadow/glow to stand out on dark bg */
        }
        .page-curl.shadow-right {
            right: 8px;
            transform: skew(6deg) rotate(5deg);
            box-shadow: 0 10px 14px rgba(133, 213, 92, 0.3); /* Green shadow/glow to stand out on dark bg */
        }
    </style>
</head>

<body>

<!-- Header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

<!-- ==========================================
     1. THE HERO SECTION (Homalix & Schoolian style)
     ========================================== -->
<section class="relative w-full mt-0 mb-16 rounded-t-[30px] overflow-hidden bg-[#00101a] border-b border-white/5 flex flex-col justify-between animate-fade-in">
    <!-- Background Image with Linear Gradient Overlay -->
    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-90" style="background-image: linear-gradient(to right, rgba(0, 13, 22, 0.8) 10%, rgba(0, 13, 22, 0.4) 50%, rgba(0, 13, 22, 0.1) 100%), url('/images/case-studies/background/sellvixa_bg.png'); mix-blend-mode: normal;"></div>
    <div class="absolute -top-[20%] -left-[10%] w-[50vw] h-[50vw] bg-[var(--primary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-[20%] -right-[10%] w-[50vw] h-[50vw] bg-[var(--secondary-color)]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center w-full pt-6 pb-2 md:pt-8 md:pb-4">
        <!-- Left Column: Content -->
        <div class="lg:col-span-7 text-left space-y-4">
            <div class="inline-flex laser-border shadow-md">
                <div class="laser-background">
                    <div class="glass px-4 py-1.5 flex items-center gap-2 text-xs font-semibold tracking-wide text-gray-300">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#01a0d8] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#01a0d8] shadow-[0_0_6px_rgba(1,160,216,0.6)]"></span>
                        </span>
                        The Largest Creative Marketplace
                    </div>
                </div>
            </div>
            
            <div class="space-y-2">
                <p class="text-xs font-bold text-slate-400 tracking-[0.2em] uppercase">CASE STUDY: SELLVIXA</p>
                <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-bold leading-tight tracking-tight text-white leading-none">
                    Retail.<br>
                    <span class="font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Redefined.</span>
                </h1>
            </div>

            <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed max-w-xl">
                Sellvixa consolidates fragmented cash points, branch inventory deprivations, and bookkeeping errors into a single, cohesive dashboard ecosystem.
            </p>
        </div>

        <!-- Right Column: Mockup Frame -->
        <div class="lg:col-span-5 flex justify-center lg:justify-end mt-4 lg:mt-0 relative z-10 lg:-translate-y-2">
            <div class="relative w-full max-w-[390px] select-none">
                <img src="/images/case-studies/sellvixa_dashboard.png" alt="Sellvixa POS Preview" class="w-full h-auto object-contain rounded-xl drop-shadow-[0_20px_40px_rgba(0,0,0,0.6)]">
            </div>
        </div>
    </div>

    <!-- Stats Dashboard Footer Bar (Edge-to-Edge inside Rounded Container) -->
    <div class="w-full bg-[#000d16]/95 border-t border-white/10 relative z-20 mt-auto">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 flex flex-col md:flex-row items-stretch justify-between w-full">
            <!-- Left Date Range Card (Floating Tab - Curves Downwards like Calendar) -->
            <div class="folded-tab bg-gradient-to-br from-[var(--secondary-color)] to-[var(--tertiary-color)] text-[#000d16] py-3 px-5 flex flex-col justify-center gap-2 shrink-0 md:w-60 relative z-30 rounded-b-[24px] rounded-t-none self-start mt-0 mb-4 md:mb-0 shadow-lg text-left">
                <!-- Page Curl Shadow Elements -->
                <div class="page-curl shadow-left"></div>
                <div class="page-curl shadow-right"></div>
                
                <div>
                    <span class="block text-[9px] uppercase tracking-wider text-[#000d16]/70 font-extrabold">Date Range</span>
                    <span class="block text-[11px] font-bold mt-0.5 whitespace-nowrap">June – Nov (2025)</span>
                </div>
                <div>
                    <span class="block text-[9px] uppercase tracking-wider text-[#000d16]/70 font-extrabold">Comparison Period</span>
                    <span class="block text-[11px] font-bold mt-0.5 whitespace-nowrap">June – Nov (2024)</span>
                </div>
            </div>

            <!-- Right Stats Panel -->
            <div class="flex-1 py-3 md:py-4 md:pl-12 grid grid-cols-2 gap-x-6 items-center text-xs font-medium text-gray-300 relative z-10">
                <!-- Column 1 -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between gap-2">
                        <span>Revenue</span>
                        <span class="text-[var(--tertiary-color)] font-bold flex items-center gap-0.5">17% <i class="fa-solid fa-arrow-trend-up text-[10px]"></i></span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <span>Search Conv. Rate</span>
                        <span class="text-[var(--tertiary-color)] font-bold flex items-center gap-0.5">31% <i class="fa-solid fa-arrow-trend-up text-[10px]"></i></span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <span>AOV</span>
                        <span class="text-[var(--tertiary-color)] font-bold flex items-center gap-0.5">7% <i class="fa-solid fa-arrow-trend-up text-[10px]"></i></span>
                    </div>
                </div>

                <!-- Divider & Column 2 -->
                <div class="h-full border-l border-white/15 pl-6 space-y-3 flex flex-col justify-center text-left">
                    <div class="flex items-center justify-between gap-2">
                        <span>Returning Cust. Rate</span>
                        <span class="text-[var(--tertiary-color)] font-bold flex items-center gap-0.5">14% <i class="fa-solid fa-arrow-trend-up text-[10px]"></i></span>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <span>Total Orders</span>
                        <span class="text-[var(--tertiary-color)] font-bold flex items-center gap-0.5">10% <i class="fa-solid fa-arrow-trend-up text-[10px]"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scrolling Value points -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
        <div class="bg-white/5 border border-white/10 p-8 rounded-2xl space-y-3 hover:border-white/20 transition duration-300">
            <div class="text-[var(--secondary-color)]"><i class="fa-solid fa-square-poll-vertical text-xl"></i></div>
            <h4 class="text-white font-bold text-lg">Sales Intelligence</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">
                Live branch data consolidation provides managers with instantaneous reports on best sellers, sales velocity, and profit margins.
            </p>
        </div>
        
        <div class="bg-white/5 border border-white/10 p-8 rounded-2xl space-y-3 hover:border-white/20 transition duration-300">
            <div class="text-[var(--tertiary-color)]"><i class="fa-solid fa-boxes-packing text-xl"></i></div>
            <h4 class="text-white font-bold text-lg">Inventory Depletion</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">
                As cashiers scan items, inventory levels deplete globally. Reorder triggers activate automatically when thresholds are reached.
            </p>
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
                    <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Retail Hub.</span>
                </h2>
                <p class="text-slate-300 font-light text-base sm:text-lg leading-relaxed">
                    Observe how Sellvixa simplifies retail complexity. Explore a comprehensive visual walkthrough showing central inventory logs, real-time POS transaction processing, and automated reorder tracking.
                </p>

                <!-- Key Demonstration Features -->
                <ul class="space-y-3 pt-1">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(47,173,195,0.1)]">
                            <i class="fa-solid fa-barcode text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">POS Checkout Simulation</h4>
                            <p class="text-slate-300 text-sm font-light">High-speed barcode scanning with automatic totals calculation.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-[var(--tertiary-color)]/10 border border-[var(--tertiary-color)]/20 text-[var(--tertiary-color)] flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(133,213,92,0.1)]">
                            <i class="fa-solid fa-cubes text-xs"></i>
                        </div>
                        <div class="space-y-0.5">
                            <h4 class="text-white text-sm font-semibold">Unified Stock Registry</h4>
                            <p class="text-slate-300 text-sm font-light">Automatic inventory updates and low-stock procurement triggers.</p>
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
                        <img src="/images/case-studies/background/sellvixa_bg.png" alt="Sellvixa System Tour Poster" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 group-hover:blur-[2px]">
                        
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
                            <span>1:45 Min</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================
     2. INTERACTIVE POS SIMULATOR & RETAIL ENGINE
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 border-t border-white/10 text-left">
    <div class="space-y-2 mb-8">
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">POS Checkout <span class="font-bold bg-clip-text text-transparent bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Simulator</span></h2>
        <p class="text-slate-300 max-w-xl text-sm sm:text-base leading-relaxed">
            Click on items below to simulate a high-speed scan. Watch the receipt and logs update in real-time.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        <!-- Product Grid Column (Left) -->
        <div class="lg:col-span-7 bg-[#00101a] border border-white/10 p-6 rounded-xl flex flex-col justify-between">
            <div>
                <h3 class="text-sm font-bold text-white mb-4 flex items-center gap-2 uppercase tracking-wider">
                    Product Catalog (Click to scan)
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <!-- Product 1 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#01a0d8] hover:bg-[#f0f9ff] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Fresh Apples" data-price="450">
                        <div class="w-12 h-12 rounded-xl bg-[#01a0d8] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(1,160,216,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-apple-whole"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Fresh Apples</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 450</span>
                        </div>
                    </button>
                    <!-- Product 2 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#2fadc3] hover:bg-[#f0fdfa] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Organic Milk" data-price="280">
                        <div class="w-12 h-12 rounded-xl bg-[#2fadc3] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(47,173,195,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-glass-water"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Organic Milk</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 280</span>
                        </div>
                    </button>
                    <!-- Product 3 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#85d55c] hover:bg-[#f0fdf4] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Whole Grain Bread" data-price="150">
                        <div class="w-12 h-12 rounded-xl bg-[#85d55c] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(133,213,92,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-bread-slice"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Whole Grain Bread</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 150</span>
                        </div>
                    </button>
                    <!-- Product 4 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#01a0d8] hover:bg-[#f0f9ff] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Greek Yogurt" data-price="350">
                        <div class="w-12 h-12 rounded-xl bg-[#01a0d8] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(1,160,216,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-bowl-food"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Greek Yogurt</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 350</span>
                        </div>
                    </button>
                    <!-- Product 5 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#2fadc3] hover:bg-[#f0fdfa] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Choc Cookies" data-price="250">
                        <div class="w-12 h-12 rounded-xl bg-[#2fadc3] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(47,173,195,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-cookie"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Choc Cookies</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 250</span>
                        </div>
                    </button>
                    <!-- Product 6 -->
                    <button class="btn-product group p-4 rounded-xl bg-sky-50 border border-slate-200 hover:border-[#85d55c] hover:bg-[#f0fdf4] hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col items-center text-center gap-2.5 text-slate-800 shadow-sm" data-name="Orange Juice" data-price="400">
                        <div class="w-12 h-12 rounded-xl bg-[#85d55c] text-white flex items-center justify-center text-xl transition-all duration-300 shadow-[0_4px_12px_rgba(133,213,92,0.25)] group-hover:scale-110">
                            <i class="fa-solid fa-jar"></i>
                        </div>
                        <div class="space-y-0.5">
                            <span class="block text-xs font-bold text-slate-800">Orange Juice</span>
                            <span class="block text-[11px] font-semibold text-slate-500">Rs. 400</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t border-white/5 flex items-center justify-between text-[10px] text-gray-500">
                <span>*Simulated local synchronization</span>
                <span>Latency: 3ms</span>
            </div>
        </div>

        <!-- Receipt & Log Panel (Right) -->
        <div class="lg:col-span-5 flex flex-col gap-4">
            <!-- Receipt Card -->
            <div class="bg-black/30 border border-white/10 rounded-xl p-5 flex flex-col justify-between flex-1 min-h-[300px]">
                <div class="space-y-4">
                    <div class="flex justify-between items-center border-b border-white/10 pb-2">
                        <span class="font-mono text-xs uppercase tracking-wider text-gray-400">Receipt Details</span>
                        <button id="btnClearPOS" class="text-xs text-red-400 hover:underline font-bold transition">Clear All</button>
                    </div>
                    <!-- Items list -->
                    <ul id="receiptItems" class="space-y-1.5 font-mono text-xs text-gray-300 max-h-[140px] overflow-y-auto pr-1">
                        <li class="empty-receipt text-center text-gray-500 py-6 italic">No items scanned</li>
                    </ul>
                </div>

                <div class="border-t border-dashed border-white/10 pt-3 mt-3 space-y-1.5 font-mono text-xs">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal:</span>
                        <span id="receiptSub">Rs. 0.00</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Tax (5%):</span>
                        <span id="receiptTax">Rs. 0.00</span>
                    </div>
                    <div class="flex justify-between text-white font-bold text-sm">
                        <span>Total:</span>
                        <span id="receiptTotal" class="text-[var(--tertiary-color)]">Rs. 0.00</span>
                    </div>
                </div>
            </div>

            <!-- Monospaced Terminal Logs -->
            <div class="bg-[#000d16] border border-white/10 rounded-lg p-3 font-mono text-[10px] text-gray-500 min-h-[100px] flex flex-col">
                <div class="flex items-center gap-1.5 border-b border-white/5 pb-1.5 mb-1.5 text-gray-600 font-bold uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    Terminal Log
                </div>
                <div id="terminalLogs" class="terminal-scroll flex-1 max-h-[70px] overflow-y-auto space-y-1">
                    <p class="text-gray-600">[System] Ready for scans...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. BUSINESS IMPACT CALCULATOR
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 border-t border-white/10 text-left">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        <!-- Info & Slider (Left) -->
        <div class="lg:col-span-5 space-y-4">
            <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Interactive ROI
        </div>
    </div>
</div>
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">Scale Your <span class="font-bold bg-clip-text text-transparent bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">ROI Metrics</span></h2>
            <p class="text-slate-300 text-sm font-light leading-relaxed">
                As you scale your store locations, Sellvixa keeps database operations centralized. Drag the slider to observe live estimates of administrative savings, reduced checkout hours, and prevented margin leakage.
            </p>
            
            <div class="space-y-2 pt-2">
                <div class="flex justify-between items-center text-xs font-bold uppercase tracking-wider text-slate-400">
                    <span>Locations Scale</span>
                    <span id="sliderValue" class="text-[var(--secondary-color)]">1 Branch</span>
                </div>
                <input type="range" id="branchSlider" min="1" max="20" value="1" class="w-full h-1 bg-white/15 rounded-lg appearance-none cursor-pointer accent-[var(--secondary-color)]">
            </div>
        </div>

        <!-- Metrics Dashboard Cards (Right) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <!-- Metric 1 -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-5 text-center space-y-1 hover:border-[var(--secondary-color)]/30 transition duration-200">
                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Monthly Transactions</span>
                <span id="statBillings" class="text-2xl font-extrabold text-white block">450+</span>
                <p class="text-slate-300 text-xs leading-relaxed">Simulated checkouts handled per week</p>
            </div>
            <!-- Metric 2 -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-5 text-center space-y-1 hover:border-[var(--tertiary-color)]/30 transition duration-200">
                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Audit Hours Saved</span>
                <span id="statHours" class="text-2xl font-extrabold text-[var(--tertiary-color)] block">20 hrs</span>
                <p class="text-slate-300 text-xs leading-relaxed">Reduced manual reconciliation hours</p>
            </div>
            <!-- Metric 3 -->
            <div class="bg-[#00101a] border border-white/10 rounded-xl p-5 text-center space-y-1 hover:border-[var(--secondary-color)]/30 transition duration-200">
                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider block">Prevented Losses</span>
                <span id="statLoss" class="text-2xl font-extrabold text-[var(--secondary-color)] block">Rs. 1,200</span>
                <p class="text-slate-300 text-xs leading-relaxed">Stopped stockout & shrinkage leakage</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     3. IMMERSIVE SPOTLIGHT CHALLENGES (Linear style)
     ========================================== -->
<section class="w-full bg-slate-50 py-20 border-y border-slate-200 text-left">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title -->
        <div class="mb-12 text-left">
            <h2 class="text-3xl md:text-5xl font-bold text-[#000d16] leading-tight">
                Retail Operations: <br>
                <span class="bg-clip-text text-transparent font-extrabold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Manual vs. Automated</span>
            </h2>
        </div>

        <!-- Comparison Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
            <!-- Left Column: Old Way -->
            <div class="bg-sky-50 border border-slate-200 rounded-2xl p-8 space-y-6 flex flex-col justify-between shadow-sm transition-all duration-300 hover:shadow-md hover:border-rose-300 group">
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-rose-600 bg-rose-500/10 px-3 py-1 rounded-full border border-rose-500/20">Before Sellvixa</span>
                        <h3 class="text-xl font-extrabold text-slate-900">The Manual Friction</h3>
                    </div>
                    
                    <!-- Item 1 -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center shrink-0 text-sm">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-sm font-bold text-slate-800">Checkout Line Delays</h4>
                            <p class="text-sm text-slate-600 font-light leading-relaxed">
                                Cashiers wasted 2 minutes daily keying in barcodes, leading to slow checkouts, customer dropouts (+18%), and billing errors.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center shrink-0 text-sm">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-sm font-bold text-slate-800">Inventory Discrepancy</h4>
                            <p class="text-sm text-slate-600 font-light leading-relaxed">
                                Discrepancies between physical items on the shelf and the stock databases caused critical product stockouts daily.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center shrink-0 text-sm">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-sm font-bold text-slate-800">Product Expiry Losses</h4>
                            <p class="text-sm text-slate-600 font-light leading-relaxed">
                                No automated batch-wise tracking meant expired goods stayed on shelves, causing write-offs and 4.5% revenue leakage.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: New Way -->
            <div class="bg-sky-50 border-2 border-[var(--secondary-color)] rounded-2xl p-8 space-y-6 flex flex-col justify-between shadow-md transition-all duration-300 hover:shadow-lg group relative overflow-hidden">
                <!-- Ambient Glow Background -->
                <div class="absolute top-0 right-0 w-24 h-24 bg-[var(--secondary-color)]/5 rounded-full blur-2xl pointer-events-none"></div>
                
                <div class="space-y-6 relative z-10">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-[var(--secondary-color)] bg-[var(--secondary-color)]/10 px-3 py-1 rounded-full border border-[var(--secondary-color)]/20">With Sellvixa</span>
                        <h3 class="text-xl font-extrabold text-slate-900">The Modern ERP Way</h3>
                    </div>

                    <!-- Item 1 -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 text-sm">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="space-y-1">
                            <h4 class="text-sm font-bold text-slate-800">High-Speed Scanner & Checkout</h4>
                            <p class="text-sm text-slate-600 font-light leading-relaxed">
                                Instant barcode scan processing with automatic subtotal/tax calculations, cutting customer checkout time by 80%.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 text-sm">
                            <i class="fa-solid fa-check"></i>
                          </div>
                          <div class="space-y-1">
                              <h4 class="text-sm font-bold text-slate-800">Unified Stock Sync & Procurement</h4>
                              <p class="text-sm text-slate-600 font-light leading-relaxed">
                                  Global inventory levels deplete in real-time as checkouts happen, automatically triggering reorder procurements.
                              </p>
                          </div>
                      </div>

                      <!-- Item 3 -->
                      <div class="flex items-start gap-4">
                          <div class="w-8 h-8 rounded-full bg-[var(--secondary-color)]/10 border border-[var(--secondary-color)]/20 text-[var(--secondary-color)] flex items-center justify-center shrink-0 text-sm">
                              <i class="fa-solid fa-check"></i>
                          </div>
                          <div class="space-y-1">
                              <h4 class="text-sm font-bold text-slate-800">Predictive Expiry Log Alerter</h4>
                              <p class="text-sm text-slate-600 font-light leading-relaxed">
                                  Intelligent log alerts flag items approaching expiry, allowing dynamic discount triggers and preventing write-off losses.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!-- ==========================================
     4. DATA PIPELINE BLUEPRINT (Stripe style)
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 border-t border-white/10 relative">
    <div class="text-center space-y-4 mb-16">
        <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Unified flow
        </div>
    </div>
</div>
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">The Transaction Pipeline</h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm sm:text-base leading-relaxed">Observe the path of a checkout scan. Data moves securely from POS to analytics instantly.</p>
    </div>

    <!-- Static Data Pipeline Diagram -->
    <div class="relative w-full flex flex-col md:flex-row justify-between items-center gap-8 py-8 z-10">
        <!-- SVG Connections -->
        <svg class="absolute inset-0 w-full h-full z-0 hidden md:block" viewBox="0 0 1000 120" preserveAspectRatio="none">
            <path d="M 125 60 L 875 60" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="2" />
            <path d="M 125 60 L 875 60" fill="none" stroke="url(#pipelineGradient)" stroke-width="1.5" opacity="0.4" />
            <defs>
                <linearGradient id="pipelineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="var(--accent-blue)" />
                    <stop offset="50%" stop-color="var(--accent-cyan)" />
                    <stop offset="100%" stop-color="var(--accent-green)" />
                </linearGradient>
            </defs>
        </svg>

        <!-- Step 1 -->
        <div class="bg-[#00101a] border border-white/10 rounded-2xl p-6 w-56 text-center space-y-3 z-10 relative">
            <div class="w-10 h-10 rounded-full bg-[var(--primary-color)]/10 text-[var(--primary-color)] flex items-center justify-center mx-auto border border-[var(--primary-color)]/25 font-bold text-sm">1</div>
            <h4 class="text-white text-sm font-bold">POS Barcode Scan</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Cashier scans item, register retrieves price & details instantly.</p>
        </div>

        <!-- Step 2 -->
        <div class="bg-[#00101a] border border-white/10 rounded-2xl p-6 w-56 text-center space-y-3 z-10 relative">
            <div class="w-10 h-10 rounded-full bg-[var(--secondary-color)]/10 text-[var(--secondary-color)] flex items-center justify-center mx-auto border border-[var(--secondary-color)]/25 font-bold text-sm">2</div>
            <h4 class="text-white text-sm font-bold">Stock Deduction</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Global inventory database depletes product stock logs globally.</p>
        </div>

        <!-- Step 3 -->
        <div class="bg-[#00101a] border border-white/10 rounded-2xl p-6 w-56 text-center space-y-3 z-10 relative">
            <div class="w-10 h-10 rounded-full bg-[var(--tertiary-color)]/10 text-[var(--tertiary-color)] flex items-center justify-center mx-auto border border-[var(--tertiary-color)]/25 font-bold text-sm">3</div>
            <h4 class="text-white text-sm font-bold">Alert Threshold</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Real-time check alerts manager if stock hits critical reorder levels.</p>
        </div>

        <!-- Step 4 -->
        <div class="bg-[#00101a] border border-white/10 rounded-2xl p-6 w-56 text-center space-y-3 z-10 relative">
            <div class="w-10 h-10 rounded-full bg-purple-500/10 text-purple-400 flex items-center justify-center mx-auto border border-purple-500/25 font-bold text-sm">4</div>
            <h4 class="text-white text-sm font-bold">Auto procurement</h4>
            <p class="text-slate-300 text-sm font-light leading-relaxed">Supplier order is compiled, preparing a purchase balance sheet.</p>
        </div>
    </div>
</section>

<!-- ==========================================
     5. HIGH-CONTRAST QUOTE TESTIMONIAL (Apple style)
     ========================================== -->
<section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/10 text-center">
    <div class="space-y-6">
        <!-- Quotation Icon & Star Rating -->
        <div class="flex flex-col items-center gap-3">
            <span class="text-[var(--secondary-color)] text-5xl font-serif leading-none block">“</span>
            <div class="flex items-center gap-1 text-amber-400 text-sm">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
        
        <!-- Testimonial Quote -->
        <p class="text-xl sm:text-2xl font-light text-slate-200 leading-relaxed tracking-tight max-w-3xl mx-auto italic">
            "Sellvixa completely transformed how we manage our supermarket. From billing and inventory to supplier management, everything is now centralized and incredibly easy to use. Our checkout speed improved dramatically, and stock management has never been this accurate."
        </p>
        
        <!-- Author Profile -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-4">
            <div class="w-12 h-12 rounded-full border border-white/10 p-0.5 overflow-hidden bg-[#000d16]">
                <img src="/images/case-studies/ahmed_raza.png" alt="Ahmed Raza" class="w-full h-full rounded-full object-cover">
            </div>
            <div class="text-left">
                <h4 class="text-sm font-bold text-white leading-none">Ahmed Raza</h4>
                <p class="text-xs text-[var(--secondary-color)] mt-1">Owner, FreshMart Super Store</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     6.5 TECH STACK & SYSTEM ARCHITECTURE
     ========================================== -->
<section class="relative w-full py-20 mt-16 mb-16 overflow-hidden bg-[#00101a] border-t border-b border-white/10 text-left animate-fade-in">
    <!-- Background Image with Linear Gradient Overlay -->
    <div class="absolute inset-0 z-0 bg-cover bg-center opacity-55 mix-blend-luminosity" style="background-image: linear-gradient(to right, rgba(0, 13, 22, 0.9) 20%, rgba(0, 13, 22, 0.5) 70%, rgba(0, 13, 22, 0.8) 100%), url('/images/case-studies/background/stock_room.webp');"></div>
    <div class="absolute -top-[20%] -left-[10%] w-[50vw] h-[50vw] bg-[var(--primary-color)]/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Engineering Spec
        </div>
    </div>
</div>
            <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">System Architecture & Stack</h2>
            <p class="text-slate-300 font-light max-w-xl mx-auto text-sm">Engineered for low latency, secure multi-branch synchronization, and fast client-side rendering.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative z-10">
            <!-- Card 1: Backend -->
            <div class="bg-black/40 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-black/50 transition duration-300">
                <span class="text-[var(--secondary-color)] text-lg mb-2 block"><i class="fa-solid fa-server"></i></span>
                <h4 class="text-white font-bold text-sm">Robust Backend</h4>
                <p class="text-slate-300 text-sm mt-1 leading-relaxed">Built on a secure PHP core, handling API requests, batch barcode imports, and inventory calculations with multi-layer error protection.</p>
                <div class="flex gap-2 flex-wrap mt-4">
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">PHP 8.2+</span>
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">REST APIs</span>
                </div>
            </div>

            <!-- Card 2: Database -->
            <div class="bg-black/40 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-black/50 transition duration-300">
                <span class="text-[var(--tertiary-color)] text-lg mb-2 block"><i class="fa-solid fa-database"></i></span>
                <h4 class="text-white font-bold text-sm">Relational DB</h4>
                <p class="text-slate-300 text-sm mt-1 leading-relaxed">Structured MySQL schema utilizing indexing, transactional queries (ACID), and constraints to prevent data duplication across depots.</p>
                <div class="flex gap-2 flex-wrap mt-4">
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">MySQL</span>
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">Indexed Queries</span>
                </div>
            </div>

            <!-- Card 3: Realtime -->
            <div class="bg-black/40 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-black/50 transition duration-300">
                <span class="text-amber-400 text-lg mb-2 block"><i class="fa-solid fa-bolt"></i></span>
                <h4 class="text-white font-bold text-sm">Real-time Layer</h4>
                <p class="text-slate-300 text-sm mt-1 leading-relaxed">WebSocket interfaces push updates dynamically to checking registers and supervisor consoles, keeping stock levels synced.</p>
                <div class="flex gap-2 flex-wrap mt-4">
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">WebSockets</span>
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">Event Loops</span>
                </div>
            </div>

            <!-- Card 4: Frontend -->
            <div class="bg-black/40 backdrop-blur-md border border-white/10 p-6 rounded-2xl hover:bg-black/50 transition duration-300">
                <span class="text-purple-400 text-lg mb-2 block"><i class="fa-solid fa-display"></i></span>
                <h4 class="text-white font-bold text-sm">Responsive UI</h4>
                <p class="text-slate-300 text-sm mt-1 leading-relaxed">Premium client dashboard styled with Tailwind CSS, custom vanilla CSS grid system, and optimized vanilla JS client routines.</p>
                <div class="flex gap-2 flex-wrap mt-4">
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">Tailwind CSS</span>
                    <span class="text-[10px] bg-white/5 px-2 py-0.5 rounded text-gray-300">Vanilla JS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     7. INTERACTIVE TABBED FAQ GRID
     ========================================== -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 border-t border-white/5">
    <div class="text-center space-y-4 mb-16">
        <div class="glass-border w-max mx-auto lg:mx-0 mb-4">
    <div class="glass-background">
        <div class="glass text-sm font-light text-center text-white px-6">
            &#9679; Common Queries
        </div>
    </div>
</div>
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">Frequently Asked Questions</h2>
        <p class="text-slate-300 font-light text-sm sm:text-base">Toggle tabs on the left to see dynamic answers slide in on the right.</p>
    </div>

    <!-- Tabbed grid layout -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch text-left">
        <!-- Left Column: Tab Selectors -->
        <div class="md:col-span-5 flex flex-col gap-3">
            <button class="faq-tab-btn active text-left px-6 py-5 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/5 hover:border-white/20 transition-all font-medium text-white flex items-center justify-between focus:outline-none" data-target="faq1">
                <span>Does Sellvixa support offline POS billing?</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
            <button class="faq-tab-btn text-left px-6 py-5 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/5 hover:border-white/20 transition-all font-medium text-white flex items-center justify-between focus:outline-none" data-target="faq2">
                <span>Can it manage stock transfers?</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
            <button class="faq-tab-btn text-left px-6 py-5 rounded-xl bg-white/[0.02] border border-white/10 hover:bg-white/5 hover:border-white/20 transition-all font-medium text-white flex items-center justify-between focus:outline-none" data-target="faq3">
                <span>Is there a loyalty rewards system?</span>
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
        </div>

        <!-- Right Column: Content Box -->
        <div class="md:col-span-7 bg-[#00101a] border border-white/10 rounded-xl p-8 flex items-center min-h-[180px]">
            <div class="relative z-10 space-y-4">
                <h4 id="faqContentTitle" class="text-lg font-bold text-white">Offline POS Billing</h4>
                <p id="faqContentBody" class="text-slate-300 text-sm font-light leading-relaxed">
                    Yes. Sellvixa includes an offline mode that allows store cashiers to continue checkout billing and receipt printing even during network disruptions. Transactions are auto-synchronized once connections are restored.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     8. CALL TO ACTION & FOOTER
     ========================================== -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mb-12">
    <div class="bg-[#00101a] border border-white/10 rounded-2xl p-10 md:p-16 text-center space-y-6 shadow-xl relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-48 h-48 bg-[var(--primary-color)]/5 rounded-full blur-2xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-[var(--secondary-color)]/5 rounded-full blur-2xl pointer-events-none"></div>
        
        <h2 class="text-3xl md:text-5xl font-bold text-white leading-tight">
            Ready to Scale Your <br>
            <span class="bg-clip-text text-transparent font-bold bg-gradient-to-r from-[var(--secondary-color)] to-[var(--tertiary-color)]">Retail Network?</span>
        </h2>
        <p class="text-slate-300 font-light max-w-xl mx-auto text-sm sm:text-base leading-relaxed">
            Connect with Qonkar Technologies today to configure a high-speed POS and Multi-Branch ERP custom tailored for your business.
        </p>
        <div class="pt-4">
            <a href="/contact-us" class="group btn-dark-theme">
                Book a Free Consult
                <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<!-- Standard Footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

<script src="/script/navbar.js"></script>

<!-- JS Interactive components script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    
    // --- 1. POS Checkout Simulator ---
    const btnProducts = document.querySelectorAll(".btn-product");
    const receiptItems = document.getElementById("receiptItems");
    const receiptSub = document.getElementById("receiptSub");
    const receiptTax = document.getElementById("receiptTax");
    const receiptTotal = document.getElementById("receiptTotal");
    const btnClearPOS = document.getElementById("btnClearPOS");
    const terminalLogs = document.getElementById("terminalLogs");

    let scannedList = {};

    function updateReceipt() {
        receiptItems.innerHTML = "";
        let subtotal = 0;

        const keys = Object.keys(scannedList);
        if (keys.length === 0) {
            receiptItems.innerHTML = `<li class="empty-receipt text-center text-gray-500 py-6 italic">No items scanned</li>`;
            receiptSub.textContent = "Rs. 0.00";
            receiptTax.textContent = "Rs. 0.00";
            receiptTotal.textContent = "Rs. 0.00";
            return;
        }

        keys.forEach(name => {
            const item = scannedList[name];
            const itemTotal = item.price * item.qty;
            subtotal += itemTotal;

            const li = document.createElement("li");
            li.className = "flex justify-between py-1 border-b border-white/5 animate-fade-in";
            li.innerHTML = `
                <span>${name} x${item.qty}</span>
                <span>Rs. ${itemTotal.toFixed(2)}</span>
            `;
            receiptItems.appendChild(li);
        });

        const tax = subtotal * 0.05;
        const total = subtotal + tax;

        receiptSub.textContent = `Rs. ${subtotal.toFixed(2)}`;
        receiptTax.textContent = `Rs. ${tax.toFixed(2)}`;
        receiptTotal.textContent = `Rs. ${total.toFixed(2)}`;
    }

    btnProducts.forEach(btn => {
        btn.addEventListener("click", () => {
            const name = btn.dataset.name;
            const price = parseFloat(btn.dataset.price);

            if (scannedList[name]) {
                scannedList[name].qty += 1;
            } else {
                scannedList[name] = { price: price, qty: 1 };
            }

            // Append to terminal logs simulation
            const log = document.createElement("p");
            log.className = "log-line text-emerald-400";
            const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
            log.textContent = `[${time}] SCAN: Added ${name} (Rs. ${price.toFixed(2)})`;
            terminalLogs.appendChild(log);
            terminalLogs.scrollTop = terminalLogs.scrollHeight;

            updateReceipt();
        });
    });

    btnClearPOS.addEventListener("click", () => {
        scannedList = {};
        updateReceipt();
    });

    // --- 2. Draggable Business Impact Calculator ---
    const slider = document.getElementById("branchSlider");
    const sliderVal = document.getElementById("sliderValue");
    const statBillings = document.getElementById("statBillings");
    const statHours = document.getElementById("statHours");
    const statLoss = document.getElementById("statLoss");

    slider.addEventListener("input", () => {
        const val = parseInt(slider.value);
        sliderVal.textContent = val === 1 ? "1 Branch" : `${val} Branches`;

        // Calculate stats
        const billings = val * 450;
        const hours = val * 20;
        const loss = val * 1200;

        statBillings.textContent = `${billings.toLocaleString()}+`;
        statHours.textContent = `${hours.toLocaleString()} hrs`;
        statLoss.textContent = `Rs. ${loss.toLocaleString()}`;
    });

    // --- 3. Interaction Polish ---
    // JavaScript 3D tilt and mousemove spotlight coordinates are disabled for premium Notion/Stripe simplicity.
    // CSS transitions are handled natively via the spotlight-card and mockup-frame selectors.

    // --- 5. Interactive Tabbed FAQ Selectors ---
    const tabBtns = document.querySelectorAll(".faq-tab-btn");
    const faqTitle = document.getElementById("faqContentTitle");
    const faqBody = document.getElementById("faqContentBody");

    const faqData = {
        faq1: {
            title: "Offline POS Billing",
            body: "Yes. Sellvixa includes an offline mode that allows store cashiers to continue checkout billing and receipt printing even during network disruptions. Transactions are auto-synchronized once connections are restored."
        },
        faq2: {
            title: "Multi-Store Stock Transfers",
            body: "Absolutely. The central admin console allows operations managers to trigger stock transfer requests from one branch depot to another with live status monitoring in transit."
        },
        faq3: {
            title: "Loyalty rewards system",
            body: "Yes. Sellvixa logs customer profile records, saves purchase histories, issues loyalty points per checkout transaction, and triggers automated discounts for returning customers."
        }
    };

    tabBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            // Remove active status
            tabBtns.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            const target = btn.dataset.target;
            const data = faqData[target];

            if (data) {
                // Animate change
                faqTitle.parentElement.style.opacity = 0;
                setTimeout(() => {
                    faqTitle.textContent = data.title;
                    faqBody.textContent = data.body;
                    faqTitle.parentElement.style.opacity = 1;
                    faqTitle.parentElement.style.transition = "opacity 0.3s ease";
                }, 150);
            }
        });
    });
});
</script>

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

        // Set the path to your video file when available (e.g. "/videos/sellvixa_tour.mp4")
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

