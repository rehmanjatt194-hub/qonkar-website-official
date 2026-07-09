<section id="process-section" class="relative py-8 md:py-12 w-full bg-[#000d16] px-4 sm:px-6 lg:px-8 overflow-hidden animate-on-scroll fade-in">
        <style>
            /* Custom CSS for hidden scrollbar */
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .no-scrollbar {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }
            @keyframes float-robot {
                0%, 100% {
                    transform: translateY(0px) rotate(0deg);
                }
                50% {
                    transform: translateY(-12px) rotate(2deg);
                }
            }
            .animate-float {
                animation: float-robot 4s ease-in-out infinite;
            }
            .arrow-line {
                fill: none;
                stroke-width: 2.5;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-dasharray: 1000;
                stroke-dashoffset: 1000;
                transition: stroke-dashoffset 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            }
            #arrow-path-0, #arrow-path-2 {
                filter: drop-shadow(0 0 3px rgba(43, 181, 188, 0.6)) drop-shadow(0 2px 4px rgba(0,0,0,0.4));
            }
            #arrow-path-1, #arrow-path-3 {
                filter: drop-shadow(0 0 3px rgba(149, 201, 81, 0.6)) drop-shadow(0 2px 4px rgba(0,0,0,0.4));
            }
        </style>

        <!-- Background decorative glows (Qonkar theme) -->
        <div class="absolute top-1/4 left-10 w-[250px] h-[250px] rounded-full bg-[#2BB5BC]/5 blur-[100px] pointer-events-none -z-10"></div>
        <div class="absolute bottom-1/4 right-10 w-[300px] h-[300px] rounded-full bg-[#95C951]/5 blur-[120px] pointer-events-none -z-10"></div>

        <!-- Section Header (2-column layout matching mockup) -->
        <div class="max-w-7xl mx-auto mb-6 lg:mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-12 items-center">
                <div class="lg:col-span-7 text-left relative -top-3 md:-top-5 lg:-top-6">
                    <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white leading-tight">
                        Our <span class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold">Process</span>
                    </h2>
                    <p class="text-xl md:text-3xl text-slate-300 font-light mt-3 sm:mt-4 leading-relaxed">
                        Your Journey from Inquiry to Incorporation
                    </p>
                </div>
                <div class="lg:col-span-5 flex justify-center lg:justify-end items-center relative min-h-[220px] lg:min-h-0 w-full mt-4 lg:mt-0">
                    <div class="relative mx-auto lg:relative lg:right-auto lg:top-[16px] w-56 z-25 pointer-events-auto cursor-pointer transition-transform duration-500 transform scale-[0.78] sm:scale-[0.90] lg:scale-[1.12] translate-x-[55px] sm:translate-x-[25px] lg:translate-x-0 origin-center lg:origin-right mt-14 lg:mt-0" id="robot-guide-container">
                        <!-- Speech Bubble (Single active step text) -->
                        <div class="absolute left-[-110px] sm:left-[-130px] top-[-10px] sm:top-[-20px] bg-white text-slate-800 border border-slate-200 shadow-[0_8px_20px_rgba(0,0,0,0.12)] rounded-2xl px-3 py-1.5 text-[9px] sm:text-[10px] font-bold whitespace-nowrap transition-all duration-300 transform scale-100 origin-bottom-right" id="robot-speech-bubble">
                            Let's start!
                            <!-- Arrow -->
                            <div class="absolute bottom-[10px] right-[-5px] w-2.5 h-2.5 bg-white border-t border-r border-slate-200 transform rotate-45"></div>
                        </div>

                        <!-- 4 Staggered Step Bubbles in front of the robot (to the left) -->
                        <div id="robot-steps-bubbles" class="absolute left-[-220px] top-0 bottom-0 w-[200px] flex flex-col justify-between pointer-events-none z-30 flex py-2">
                            <!-- Step Bubble 1 -->
                            <div class="step-bubble bg-white text-slate-800 border border-slate-200 shadow-md rounded-xl px-3 py-1.5 text-[11px] font-bold transition-all duration-300 transform scale-0 opacity-0 origin-right flex items-center gap-1.5" id="step-bubble-0" style="height: 32px;">
                                <span class="text-[#2BB5BC] font-mono font-black">01</span> Onboarding & Setup
                            </div>
                            <!-- Step Bubble 2 -->
                            <div class="step-bubble bg-white text-slate-800 border border-slate-200 shadow-md rounded-xl px-3 py-1.5 text-[11px] font-bold transition-all duration-300 transform scale-0 opacity-0 origin-right flex items-center gap-1.5" id="step-bubble-1" style="height: 32px;">
                                <span class="text-[#95C951] font-mono font-black">02</span> Strategy & Plan
                            </div>
                            <!-- Step Bubble 3 -->
                            <div class="step-bubble bg-white text-slate-800 border border-slate-200 shadow-md rounded-xl px-3 py-1.5 text-[11px] font-bold transition-all duration-300 transform scale-0 opacity-0 origin-right flex items-center gap-1.5" id="step-bubble-2" style="height: 32px;">
                                <span class="text-[#2BB5BC] font-mono font-black">03</span> Document Filing
                            </div>
                            <!-- Step Bubble 4 -->
                            <div class="step-bubble bg-white text-slate-800 border border-slate-200 shadow-md rounded-xl px-3 py-1.5 text-[11px] font-bold transition-all duration-300 transform scale-0 opacity-0 origin-right flex items-center gap-1.5" id="step-bubble-3" style="height: 32px;">
                                <span class="text-[#95C951] font-mono font-black">04</span> Compliance Support
                            </div>
                        </div>

                        <!-- SVG Container for connecting lines/arrows (local to robot, relative to robot-guide-container) -->
                        <svg id="process-arrows-svg" class="absolute pointer-events-none z-20 block" style="left: -240px; top: 0; width: 464px; height: 224px; opacity: 0; transition: opacity 0.3s ease;" viewBox="-240 0 464 224">
                            <defs>
                                <marker id="arrow-0" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 1 L 9 5 L 0 9 z" fill="#2BB5BC" />
                                </marker>
                                <marker id="arrow-1" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 1 L 9 5 L 0 9 z" fill="#95C951" />
                                </marker>
                                <marker id="arrow-2" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 1 L 9 5 L 0 9 z" fill="#2BB5BC" />
                                </marker>
                                <marker id="arrow-3" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 1 L 9 5 L 0 9 z" fill="#95C951" />
                                </marker>
                            </defs>
                            <path id="arrow-path-0" class="arrow-line" stroke="#2BB5BC" marker-end="url(#arrow-0)" d="M 27 87 Q 0 45 -20 24" />
                            <path id="arrow-path-1" class="arrow-line" stroke="#95C951" marker-end="url(#arrow-1)" d="M 27 87 Q 5 85 -20 83" />
                            <path id="arrow-path-2" class="arrow-line" stroke="#2BB5BC" marker-end="url(#arrow-2)" d="M 27 87 Q 5 110 -20 141" />
                            <path id="arrow-path-3" class="arrow-line" stroke="#95C951" marker-end="url(#arrow-3)" d="M 27 87 Q 0 160 -20 200" />
                        </svg>

                        <img src="/images/qonkar_robot_guide.webp" alt="Qonkar 3D Robot Guide" class="w-full h-auto drop-shadow-[0_12px_20px_rgba(0,0,0,0.22)]">
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Section Content -->
        <div class="relative w-full max-w-7xl mx-auto mt-2">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left Column: Stepper/Timeline Selectors -->
                <!-- Desktop View (lg and up) -->
                <div class="hidden lg:flex lg:col-span-6 flex-col pr-4 relative">
                    <div class="flex flex-col space-y-0">
                        
                        <!-- Step 1 -->
                        <div class="process-step-btn active group flex flex-col justify-center pr-12 py-8 relative cursor-pointer select-none transition-all duration-500" data-step="discovery">
                            <div class="absolute right-0 top-0 bottom-0 w-[2px] bg-white/10 group-hover:bg-white/20 transition-all duration-300"></div>
                            <!-- Active indicator gradient line -->
                            <div class="step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-100 scale-y-100 origin-top transition-all duration-500"></div>
                            <div class="pr-4 transition-transform duration-500 group-hover:translate-x-1">
                                <h3 class="step-title font-semibold text-lg md:text-xl text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-[#2BB5BC] group-hover:to-[#95C951] transition-all duration-300 flex items-center gap-3">
                                    <span class="text-xs font-mono font-bold tracking-widest text-[#2BB5BC] bg-[#2BB5BC]/10 px-2 py-0.5 rounded border border-[#2BB5BC]/20">01</span>
                                    Onboarding & Initial Consultation
                                </h3>
                                <p class="step-desc text-slate-200 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-colors duration-300">
                                    We begin with understanding your unique business needs, structure preferences, and scaling goals to match you with the right path.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="process-step-btn group flex flex-col justify-center pr-12 py-8 relative cursor-pointer select-none transition-all duration-500" data-step="design">
                            <div class="absolute right-0 top-0 bottom-0 w-[2px] bg-white/10 group-hover:bg-white/20 transition-all duration-300"></div>
                            <div class="step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-0 scale-y-0 origin-top transition-all duration-500"></div>
                            <div class="pr-4 transition-transform duration-500 group-hover:translate-x-1">
                                <h3 class="step-title font-semibold text-lg md:text-xl text-slate-300 group-hover:text-white transition-all duration-300 flex items-center gap-3">
                                    <span class="text-xs font-mono font-bold tracking-widest text-slate-500 bg-white/5 px-2 py-0.5 rounded border border-white/5 group-hover:text-[#95C951] group-hover:bg-[#95C951]/10 group-hover:border-[#95C951]/20 transition-all duration-300">02</span>
                                    Tailored Legal & Regulatory Strategy
                                </h3>
                                <p class="step-desc text-slate-400 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-colors duration-300 group-hover:text-slate-200">
                                    We design a customized incorporation strategy based on your specific situation, taxes, and international framework.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="process-step-btn group flex flex-col justify-center pr-12 py-8 relative cursor-pointer select-none transition-all duration-500" data-step="engineering">
                            <div class="absolute right-0 top-0 bottom-0 w-[2px] bg-white/10 group-hover:bg-white/20 transition-all duration-300"></div>
                            <div class="step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-0 scale-y-0 origin-top transition-all duration-500"></div>
                            <div class="pr-4 transition-transform duration-500 group-hover:translate-x-1">
                                <h3 class="step-title font-semibold text-lg md:text-xl text-slate-300 group-hover:text-white transition-all duration-300 flex items-center gap-3">
                                    <span class="text-xs font-mono font-bold tracking-widest text-slate-500 bg-white/5 px-2 py-0.5 rounded border border-white/5 group-hover:text-[#2BB5BC] group-hover:bg-[#2BB5BC]/10 group-hover:border-[#2BB5BC]/20 transition-all duration-300">03</span>
                                    Execution & Document Filing
                                </h3>
                                <p class="step-desc text-slate-400 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-colors duration-300 group-hover:text-slate-200">
                                    We handle all government filings, regulatory registrations, and administrative work under strict oversight.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="process-step-btn group flex flex-col justify-center pr-12 py-8 relative cursor-pointer select-none transition-all duration-500" data-step="launch">
                            <div class="absolute right-0 top-0 bottom-0 w-[2px] bg-white/10 group-hover:bg-white/20 transition-all duration-300"></div>
                            <div class="step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-0 scale-y-0 origin-top transition-all duration-500"></div>
                            <div class="pr-4 transition-transform duration-500 group-hover:translate-x-1">
                                <h3 class="step-title font-semibold text-lg md:text-xl text-slate-300 group-hover:text-white transition-all duration-300 flex items-center gap-3">
                                    <span class="text-xs font-mono font-bold tracking-widest text-slate-500 bg-white/5 px-2 py-0.5 rounded border border-white/5 group-hover:text-[#95C951] group-hover:bg-[#95C951]/10 group-hover:border-[#95C951]/20 transition-all duration-300">04</span>
                                    Ongoing Support & Compliance
                                </h3>
                                <p class="step-desc text-slate-400 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-colors duration-300 group-hover:text-slate-200">
                                    Your incorporation is just the beginning. We continue supporting your growth journey with annual compliance, updates, and bookkeeping.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile View (below lg): Horizontal swipeable tabs -->
                <div class="lg:hidden w-full flex flex-col gap-4 overflow-hidden">
                    <div class="flex overflow-x-auto gap-4 pb-4 no-scrollbar scroll-smooth" id="mobile-tabs-container">
                        <!-- Tab 1 -->
                        <button class="mobile-tab-btn active shrink-0 px-5 py-3 rounded-xl border border-[#2BB5BC]/30 bg-white/[0.04] text-white flex items-center gap-2 font-semibold text-sm transition-all duration-300" data-step="discovery">
                            <span class="w-5 h-5 rounded-full bg-[#2BB5BC]/15 text-[#2BB5BC] flex items-center justify-center text-[10px] font-mono font-bold">1</span>
                            Onboarding
                        </button>
                        <!-- Tab 2 -->
                        <button class="mobile-tab-btn shrink-0 px-5 py-3 rounded-xl border border-white/5 bg-[#000d16] text-slate-400 flex items-center gap-2 font-medium text-sm transition-all duration-300" data-step="design">
                            <span class="w-5 h-5 rounded-full bg-white/5 text-slate-400 flex items-center justify-center text-[10px] font-mono font-bold">2</span>
                            Strategy
                        </button>
                        <!-- Tab 3 -->
                        <button class="mobile-tab-btn shrink-0 px-5 py-3 rounded-xl border border-white/5 bg-[#000d16] text-slate-400 flex items-center gap-2 font-medium text-sm transition-all duration-300" data-step="engineering">
                            <span class="w-5 h-5 rounded-full bg-white/5 text-slate-400 flex items-center justify-center text-[10px] font-mono font-bold">3</span>
                            Execution
                        </button>
                        <!-- Tab 4 -->
                        <button class="mobile-tab-btn shrink-0 px-5 py-3 rounded-xl border border-white/5 bg-[#000d16] text-slate-400 flex items-center gap-2 font-medium text-sm transition-all duration-300" data-step="launch">
                            <span class="w-5 h-5 rounded-full bg-white/5 text-slate-400 flex items-center justify-center text-[10px] font-mono font-bold">4</span>
                            Support
                        </button>
                    </div>
                </div>

                <!-- Right Column: Stacked Card Deck -->
                <div class="lg:col-span-6 flex items-center justify-center relative min-h-[420px] md:min-h-[450px]">
                    <!-- Glow effect under the deck -->
                    <div class="absolute w-[260px] sm:w-[350px] h-[260px] sm:h-[350px] rounded-full bg-[#2BB5BC]/15 blur-[80px] sm:blur-[120px] transition-all duration-[1000ms] pointer-events-none" id="deck-glow"></div>
                    
                    <!-- Stack wrapper -->
                    <div class="relative w-full max-w-[380px] lg:aspect-[3.6/5] flex items-center justify-center select-none" id="stacked-cards-deck">
                        
                        <!-- Layer 3 (Back-most) -->
                        <div class="absolute inset-0 bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_10px_25px_rgba(0,0,0,0.15)] transform rotate-[-4deg] translate-x-[-10px] translate-y-3 border border-slate-200 scale-[0.96] transition-transform duration-500 pointer-events-none z-[1] opacity-35" id="card-layer-3"></div>
                        
                        <!-- Layer 2 (Middle) -->
                        <div class="absolute inset-0 bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_15px_35px_rgba(0,0,0,0.18)] transform rotate-[3deg] translate-x-3 translate-y-[-5px] border border-slate-200 scale-[0.98] transition-transform duration-500 pointer-events-none z-[2] opacity-65" id="card-layer-2"></div>
                        
                        <!-- Layer 1 (Front Active Card) -->
                        <div class="relative lg:absolute lg:inset-0 w-full min-h-[480px] sm:min-h-[510px] bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_30px_70px_rgba(0,0,0,0.22)] border border-slate-200 p-6 sm:py-8 sm:px-8 flex flex-col justify-between transition-all duration-500 z-10 hover:scale-[1.01]" id="card-layer-front">
                            
                            <!-- Card Header -->
                            <div class="w-full flex-1 flex flex-col justify-start">
                                <h4 class="text-sm sm:text-base font-extrabold tracking-[0.25em] uppercase text-center mb-3 sm:mb-4 transition-all duration-300" id="card-heading">
                                    How it works
                                </h4>
                                
                                <!-- Card Checklist Items Wrapper Box -->
                                <div class="w-full min-h-[300px] sm:min-h-[330px] h-[300px] sm:h-[330px] overflow-y-auto no-scrollbar pr-1 flex flex-col justify-start">
                                    <ul class="space-y-2 sm:space-y-2.5" id="card-checklist">
                                        <!-- Dynamic list items injected via JavaScript -->
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Card Footer/Decoration -->
                            <div class="w-full flex items-center justify-between border-t border-slate-200 pt-4 sm:pt-6 mt-6">
                                <span class="text-[10px] font-mono tracking-widest text-[#2BB5BC] uppercase font-bold" id="card-step-num">Step 1 of 4</span>
                                <div class="flex items-center gap-2.5">
                                    <!-- Prev Arrow Button -->
                                    <button id="card-prev-btn" class="w-7 h-7 rounded-full flex items-center justify-center bg-slate-100 hover:bg-[#2BB5BC] hover:text-white text-slate-600 transition-all duration-350 cursor-pointer active:scale-90" title="Previous Step">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 -960 960 960" width="14" fill="currentColor"><path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z"/></svg>
                                    </button>
                                    
                                    <!-- Dots Indicators -->
                                    <div class="flex gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-[#2BB5BC] transition-all duration-300" id="dot-0"></span>
                                        <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-1"></span>
                                        <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-2"></span>
                                        <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-3"></span>
                                    </div>
                                    
                                    <!-- Next Arrow Button -->
                                    <button id="card-next-btn" class="w-7 h-7 rounded-full flex items-center justify-center bg-slate-100 hover:bg-[#2BB5BC] hover:text-white text-slate-600 transition-all duration-350 cursor-pointer active:scale-90" title="Next Step">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 -960 960 960" width="14" fill="currentColor"><path d="M384-240 328-296l184-184-184-184 56-56 240 240-240 240Z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Scroll Intersection Observer Animation and Interactive Process JS -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const stepData = {
            discovery: {
                title: "HOW IT WORKS",
                stepNum: "Step 1 of 4",
                activeColor: "#2BB5BC",
                items: [
                    "You fill out our simple contact form with basic details.",
                    "We schedule a free 30-minute consultation call.",
                    "Our expert discusses your business model and expansion goals.",
                    "We answer all your questions about jurisdictions and requirements.",
                    "You receive a detailed, transparent quote within 24 hours."
                ]
            },
            design: {
                title: "STRATEGY DEVELOPMENT",
                stepNum: "Step 2 of 4",
                activeColor: "#95C951",
                items: [
                    "We analyze your target market and industry regulations.",
                    "We recommend the optimal corporate structure and jurisdiction.",
                    "We outline tax optimization strategies and compliance frameworks.",
                    "We prepare custom bylaws, shareholder agreements, and resolutions.",
                    "You receive a comprehensive, structured strategy roadmap."
                ]
            },
            engineering: {
                title: "INCORPORATION PROCESS",
                stepNum: "Step 3 of 4",
                activeColor: "#2BB5BC",
                items: [
                    "We submit all documentation to official government authorities.",
                    "We coordinate with local registry agents, translators, and notaries.",
                    "We register for corporate tax, VAT, and local business licenses.",
                    "We assist in opening corporate banking and payment gateway accounts.",
                    "We deliver the complete official corporate kit and access keys."
                ]
            },
            launch: {
                title: "POST-INCORPORATION",
                stepNum: "Step 4 of 4",
                activeColor: "#95C951",
                items: [
                    "We manage annual compliance filings, renewals, and registrations.",
                    "We handle corporate updates (share transfers, address modifications).",
                    "We provide legal guidance on commercial contracts and agreements.",
                    "We connect you with trusted local accounting and bookkeeping services.",
                    "You receive dedicated support to fuel your continuous growth."
                ]
            }
        };

        const steps = document.querySelectorAll('.process-step-btn');
        const mobileTabs = document.querySelectorAll('.mobile-tab-btn');
        const cardHeading = document.getElementById('card-heading');
        const cardChecklist = document.getElementById('card-checklist');
        const cardStepNum = document.getElementById('card-step-num');
        const glow = document.getElementById('deck-glow');
        const layer2 = document.getElementById('card-layer-2');
        const layer3 = document.getElementById('card-layer-3');
        const tabContainer = document.getElementById('mobile-tabs-container');

        let activeStep = 'discovery';
        let autoplayInterval;
        let isAutoplayPaused = false;
        const stepKeys = ['discovery', 'design', 'engineering', 'launch'];

        // Animation variations for card layers to simulate paper shuffling
        const cardRotations = {
            discovery: { r2: 3, tx2: 12, ty2: -5, r3: -4, tx3: -10, ty3: 12 },
            design: { r2: -2, tx2: -8, ty2: 8, r3: 5, tx3: 12, ty3: -8 },
            engineering: { r2: 4, tx2: 14, ty2: -6, r3: -3, tx3: -12, ty3: 10 },
            launch: { r2: -3, tx2: -10, ty2: 4, r3: 2, tx3: 8, ty3: -6 }
        };

        function updateProcessSection(stepName) {
            activeStep = stepName;
            const data = stepData[stepName];
            const color = data.activeColor;

            // 1. Update Desktop Stepper Active State
            steps.forEach(s => {
                const name = s.getAttribute('data-step');
                const title = s.querySelector('.step-title');
                const desc = s.querySelector('.step-desc');
                const badge = s.querySelector('span');
                const indicator = s.querySelector('.step-indicator');

                if (name === stepName) {
                    s.classList.add('active');
                    title.className = `step-title font-semibold text-lg md:text-xl text-white transition-all duration-300 flex items-center gap-3`;
                    desc.className = `step-desc text-slate-200 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-all duration-300`;
                    badge.className = `text-xs font-mono font-bold tracking-widest bg-white/10 px-2 py-0.5 rounded border transition-all duration-300`;
                    badge.style.color = color;
                    badge.style.borderColor = color + '40';
                    badge.style.backgroundColor = color + '15';
                    indicator.className = `step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-100 scale-y-100 origin-top transition-all duration-500`;
                } else {
                    s.classList.remove('active');
                    title.className = `step-title font-semibold text-lg md:text-xl text-slate-300 group-hover:text-white transition-all duration-300 flex items-center gap-3`;
                    desc.className = `step-desc text-slate-400 text-xs md:text-sm font-light mt-2 leading-relaxed max-w-lg transition-all duration-300 group-hover:text-slate-200`;
                    badge.className = `text-xs font-mono font-bold tracking-widest text-slate-500 bg-white/5 px-2 py-0.5 rounded border border-white/5 transition-all duration-300`;
                    badge.style.color = '';
                    badge.style.borderColor = '';
                    badge.style.backgroundColor = '';
                    indicator.className = `step-indicator absolute right-0 top-0 bottom-0 w-[2px] bg-gradient-to-b from-[#2BB5BC] to-[#95C951] opacity-0 scale-y-0 origin-top transition-all duration-500`;
                }
            });

            // 2. Update Mobile Tabs Active State
            mobileTabs.forEach(tab => {
                const name = tab.getAttribute('data-step');
                const badge = tab.querySelector('span');

                if (name === stepName) {
                    tab.classList.add('active');
                    tab.className = `mobile-tab-btn active shrink-0 px-5 py-3 rounded-xl border bg-white/[0.04] text-white flex items-center gap-2 font-semibold text-sm transition-all duration-300`;
                    tab.style.borderColor = color + '50';
                    badge.className = `w-5 h-5 rounded-full flex items-center justify-center text-[10px] font-mono font-bold transition-all duration-300`;
                    badge.style.color = color;
                    badge.style.backgroundColor = color + '20';
                } else {
                    tab.classList.remove('active');
                    tab.className = `mobile-tab-btn shrink-0 px-5 py-3 rounded-xl border border-white/5 bg-[#000d16] text-slate-400 flex items-center gap-2 font-medium text-sm transition-all duration-300`;
                    tab.style.borderColor = '';
                    badge.className = `w-5 h-5 rounded-full bg-white/5 text-slate-400 flex items-center justify-center text-[10px] font-mono font-bold transition-all duration-300`;
                    badge.style.color = '';
                    badge.style.backgroundColor = '';
                }
            });

            // Scroll active tab to center on mobile
            const activeTab = Array.from(mobileTabs).find(t => t.getAttribute('data-step') === stepName);
            if (activeTab && tabContainer) {
                const scrollLeft = activeTab.offsetLeft - (tabContainer.clientWidth / 2) + (activeTab.clientWidth / 2);
                tabContainer.scrollTo({ left: scrollLeft, behavior: 'smooth' });
            }

            // 3. Update Ambient Glow Color
            if (glow) {
                glow.style.backgroundColor = color + '18'; // ~10% opacity glow
            }

            // 4. Shuffle Background Cards Layout
            if (layer2 && layer3) {
                const rot = cardRotations[stepName];
                layer2.style.transform = `rotate(${rot.r2}deg) translate(${rot.tx2}px, ${rot.ty2}px)`;
                layer3.style.transform = `rotate(${rot.r3}deg) translate(${rot.tx3}px, ${rot.ty3}px)`;
            }

            // 5. Update Card Content (simple, instant, high-contrast, larger text)
            if (cardHeading && cardChecklist && cardStepNum) {
                cardHeading.textContent = data.title;
                cardHeading.style.color = color;
                cardStepNum.textContent = data.stepNum;

                // Clear checklist and render instantly with larger text size
                cardChecklist.innerHTML = '';
                data.items.forEach((itemText, i) => {
                    const li = document.createElement('li');
                    li.className = 'flex items-start gap-3.5 text-sm sm:text-base text-slate-800 font-semibold leading-relaxed';
                    li.innerHTML = `
                        <span class="font-mono font-black text-sm sm:text-base select-none" style="color: ${color}; min-w-[24px]">${i + 1}.</span>
                        <span class="text-slate-800">${itemText}</span>
                    `;
                    cardChecklist.appendChild(li);
                });

                // Update dots indicators
                const stepIdx = stepKeys.indexOf(stepName);
                for (let i = 0; i < 4; i++) {
                    const dot = document.getElementById(`dot-${i}`);
                    if (dot) {
                        if (i === stepIdx) {
                            dot.style.backgroundColor = color;
                            dot.classList.add('scale-125');
                            dot.classList.remove('bg-slate-200');
                        } else {
                            dot.style.backgroundColor = '';
                            dot.classList.remove('scale-125');
                            dot.classList.add('bg-slate-200');
                        }
                    }
                }

                // 6. Update Robot Speech Bubble Text
                const robotSpeech = document.getElementById('robot-speech-bubble');
                const speechTexts = {
                    discovery: "Let's start your setup! 🚀",
                    design: "Strategy time! 📋",
                    engineering: "Filing documents! ✍️",
                    launch: "Compliance is secure! ✅"
                };
                if (robotSpeech) {
                    robotSpeech.innerHTML = `
                        ${speechTexts[stepName]}
                        <div class="absolute bottom-[10px] right-[-5px] w-2.5 h-2.5 bg-white border-t border-r border-slate-200 transform rotate-45"></div>
                    `;
                    // Visual pop effect
                    robotSpeech.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        robotSpeech.style.transform = 'scale(1)';
                    }, 50);
                }
            }
        }

        // Initialize with first step
        updateProcessSection('discovery');

        // Add event listeners to desktop step buttons (both click and hover!)
        steps.forEach(step => {
            const stepName = step.getAttribute('data-step');
            
            step.addEventListener('click', () => {
                isAutoplayPaused = true;
                clearInterval(autoplayInterval);
                updateProcessSection(stepName);
            });

            step.addEventListener('mouseenter', () => {
                isAutoplayPaused = true;
                clearInterval(autoplayInterval);
                updateProcessSection(stepName);
            });
        });

        // Add event listeners to mobile tab buttons
        mobileTabs.forEach(tab => {
            const stepName = tab.getAttribute('data-step');
            
            tab.addEventListener('click', () => {
                isAutoplayPaused = true;
                clearInterval(autoplayInterval);
                updateProcessSection(stepName);
            });
        });

        // Add event listeners to card prev/next arrow buttons
        const prevBtn = document.getElementById('card-prev-btn');
        const nextBtn = document.getElementById('card-next-btn');
        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                isAutoplayPaused = true;
                clearInterval(autoplayInterval);
                const currentIdx = stepKeys.indexOf(activeStep);
                const prevIdx = (currentIdx - 1 + stepKeys.length) % stepKeys.length;
                updateProcessSection(stepKeys[prevIdx]);
            });

            nextBtn.addEventListener('click', () => {
                isAutoplayPaused = true;
                clearInterval(autoplayInterval);
                const currentIdx = stepKeys.indexOf(activeStep);
                const nextIdx = (currentIdx + 1) % stepKeys.length;
                updateProcessSection(stepKeys[nextIdx]);
            });
        }

        // Autoplay logic
        function startAutoplay() {
            if (isAutoplayPaused) return;
            autoplayInterval = setInterval(() => {
                const currentIdx = stepKeys.indexOf(activeStep);
                const nextIdx = (currentIdx + 1) % stepKeys.length;
                updateProcessSection(stepKeys[nextIdx]);
            }, 4000); // 4 seconds interval for readability
        }

        // Intersection Observer to run autoplay when section is visible
        const processSection = document.getElementById('process-section');
        const processObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startAutoplay();
                } else {
                    clearInterval(autoplayInterval);
                }
            });
        }, { threshold: 0.15 });

        if (processSection) processObserver.observe(processSection);

        // ----------------------------------------------------
        // Dynamic Laser Arrows Connecting Robot to Local Bubbles
        // ----------------------------------------------------
        const robotGuide = document.getElementById('robot-guide-container');
        const arrowsSvg = document.getElementById('process-arrows-svg');

        function initLocalArrows() {
            if (!arrowsSvg) return;
            for (let i = 0; i < 4; i++) {
                const path = document.getElementById(`arrow-path-${i}`);
                if (path) {
                    const length = path.getTotalLength() || 150;
                    path.style.strokeDasharray = length;
                    path.style.strokeDashoffset = length;
                }
            }
        }

        // Initialize path lengths
        initLocalArrows();

        if (robotGuide && arrowsSvg) {
            let isMobileToggled = false;

            function showLocalArrows() {
                const robotSpeech = document.getElementById('robot-speech-bubble');
                if (robotSpeech) {
                    robotSpeech.style.opacity = '0';
                    robotSpeech.style.transform = 'scale(0.8)';
                }

                arrowsSvg.style.opacity = '1';

                for (let i = 0; i < 4; i++) {
                    setTimeout(() => {
                        if (arrowsSvg.style.opacity === '1') {
                            const path = document.getElementById(`arrow-path-${i}`);
                            if (path) path.style.strokeDashoffset = '0';

                            const bubble = document.getElementById(`step-bubble-${i}`);
                            if (bubble) {
                                bubble.style.opacity = '1';
                                bubble.style.transform = 'scale(1)';
                            }
                        }
                    }, i * 150);
                }
            }

            function hideLocalArrows() {
                const robotSpeech = document.getElementById('robot-speech-bubble');
                if (robotSpeech) {
                    robotSpeech.style.opacity = '1';
                    robotSpeech.style.transform = 'scale(1)';
                }

                arrowsSvg.style.opacity = '0';

                for (let i = 0; i < 4; i++) {
                    const path = document.getElementById(`arrow-path-${i}`);
                    if (path) {
                        const length = path.getTotalLength() || 150;
                        path.style.strokeDashoffset = length;
                    }

                    const bubble = document.getElementById(`step-bubble-${i}`);
                    if (bubble) {
                        bubble.style.opacity = '0';
                        bubble.style.transform = 'scale(0)';
                    }
                }
            }

            // Desktop Hover Triggers
            robotGuide.addEventListener('mouseenter', () => {
                if (window.innerWidth < 1024) return;
                showLocalArrows();
            });

            robotGuide.addEventListener('mouseleave', () => {
                if (window.innerWidth < 1024) return;
                hideLocalArrows();
            });

            // Mobile Touch/Click Toggle Trigger
            robotGuide.addEventListener('click', (e) => {
                if (window.innerWidth >= 1024) return;
                
                e.stopPropagation();
                
                isMobileToggled = !isMobileToggled;
                if (isMobileToggled) {
                    showLocalArrows();
                } else {
                    hideLocalArrows();
                }
            });

            // Hide overlay if user clicks anywhere else on mobile
            document.addEventListener('click', () => {
                if (window.innerWidth < 1024 && isMobileToggled) {
                    isMobileToggled = false;
                    hideLocalArrows();
                }
            });
        }
    });
    </script>