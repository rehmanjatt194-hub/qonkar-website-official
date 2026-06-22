<?php
// Note: Backend include ke liye ../ theek hai agar file structure same rahe.
require_once '../db-path.php'; // path relative to current file

require_once "../".ADMIN_URL.'/database_config.php';
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
    <meta property="og:url" content="https://qonkar.com/services/saas-product-development" />
    <meta property="og:image" content="https://qonkar.com/images/saas-hero-mockup.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SaaS Product Development & Engineering | Qonkar" />
    <meta name="twitter:description" content="From MVP to IPO. We engineer cloud-native SaaS platforms that scale securely and drive recurring revenue." />
    <meta name="twitter:image" content="https://qonkar.com/images/saas-hero-mockup.webp" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <title>SaaS Product Development & Engineering Agency | Qonkar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/styles/index.css">
    
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
      .section-pill {
          display: inline-flex;
          align-items: center;
          gap: 6px;
          padding: 4px 12px;
          border-radius: 9999px;
          border: 1px solid rgba(61, 191, 138, 0.25); /* #3dbf8a40 */
          background-color: rgba(61, 191, 138, 0.05);
          font-size: 0.75rem; /* text-xs */
          font-weight: 600;
          color: #3dbf8a;
          text-transform: uppercase;
          letter-spacing: 0.05em;
          margin-bottom: 1rem;
      }
      .section-pill::before {
          content: '';
          display: inline-block;
          width: 6px;
          height: 6px;
          border-radius: 9999px;
          background-color: #3dbf8a;
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
                                    <li><a href="/services/saas-product-development" class="text-[#95C951] transition">SaaS product development</a></li>
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
                        <a href="/services/migration-services" class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Migration Services</a>                        

                    </div>
                    <div class="py-2">
                        <p class="text-[#95C951] text-[11px] font-bold uppercase tracking-widest py-2 text-center">Software</p>
                        <a href="/services/web-design-and-development" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Web Design & Development</a>
                        <a href="/services/landing-pages-design" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Landing Pages Design</a>
                        <a href="/services/saas-product-development" class="block py-2 text-[#95C951] text-center text-sm text-gray-300 px-4">Saas Product Development</a>
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
                        <a href="/contact-us" class="hero-btn inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--secondary-color)] hover:text-white transition">
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
        
    <section class="bg-gradient-to-r from-[#000d16] via-[#001c30] to-[#000d16] border-y border-[#01a0d8]/20 flex flex-col items-center justify-center py-4 md:py-5 overflow-hidden relative shadow-[inset_0_1px_0_rgba(255,255,255,0.05)] w-full mt-5 md:mt-6 mb-5 md:mb-6">

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

    <section id="process-section" class="relative pt-8 pb-16 md:pt-12 md:pb-20 w-full bg-[#000d16] px-4 sm:px-6 lg:px-8 overflow-hidden animate-on-scroll">
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
                    <h2 class="text-5xl md:text-6xl lg:text-7xl font-light tracking-tight text-white leading-[1.15]">
                        Our <span class="font-bold bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent">Process</span>
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

                        <img src="/images/qonkar_robot_guide.png" alt="Qonkar 3D Robot Guide" class="w-full h-auto drop-shadow-[0_12px_20px_rgba(0,0,0,0.22)]">
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
                        <div class="absolute inset-0 bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_10px_25px_rgba(0,0,0,0.15)] transform rotate-[-4deg] translate-x-[-10px] translate-y-3 border border-slate-200 scale-[0.96] transition-transform duration-500 pointer-events-none z-[1]" id="card-layer-3"></div>
                        
                        <!-- Layer 2 (Middle) -->
                        <div class="absolute inset-0 bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_15px_35px_rgba(0,0,0,0.18)] transform rotate-[3deg] translate-x-3 translate-y-[-5px] border border-slate-200 scale-[0.98] transition-transform duration-500 pointer-events-none z-[2]" id="card-layer-2"></div>
                        
                        <!-- Layer 1 (Front Active Card) -->
                        <div class="relative lg:absolute lg:inset-0 w-full bg-white rounded-[28px] sm:rounded-[36px] shadow-[0_30px_70px_rgba(0,0,0,0.22)] border border-slate-200 p-6 sm:py-8 sm:px-8 flex flex-col justify-between transition-all duration-500 z-10 hover:scale-[1.01]" id="card-layer-front">
                            
                            <!-- Card Header -->
                            <div class="w-full">
                                <h4 class="text-sm sm:text-base font-extrabold tracking-[0.25em] uppercase text-center mb-3 sm:mb-4 transition-all duration-300" id="card-heading">
                                    How it works
                                </h4>
                                
                                <!-- Card Checklist Items -->
                                <ul class="space-y-3.5 sm:space-y-4" id="card-checklist">
                                    <!-- Dynamic list items injected via JavaScript -->
                                </ul>
                            </div>
                            
                            <!-- Card Footer/Decoration -->
                            <div class="w-full flex items-center justify-between border-t border-slate-200 pt-4 sm:pt-6 mt-6">
                                <span class="text-[10px] font-mono tracking-widest text-[#2BB5BC] uppercase font-bold" id="card-step-num">Step 1 of 4</span>
                                <div class="flex gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-[#2BB5BC] transition-all duration-300" id="dot-0"></span>
                                    <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-1"></span>
                                    <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-2"></span>
                                    <span class="w-2 h-2 rounded-full bg-slate-200 transition-all duration-300" id="dot-3"></span>
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
    
    
    
    
        <section class="py-20 px-4 sm:px-6 lg:px-8" style="background: #f8fafc;">
        <div class="max-w-7xl mx-auto">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase mb-4"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); color: #fff;">
                    &#9679; &nbsp;Qonkar E-Commerce Excellence
                </span>
                <h2 class="text-3xl md:text-5xl font-light mt-3" style="color: #0a1628; line-height:1.15;">
                    End-to-End <span style="font-weight:800; background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">Shopify Solutions</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base md:text-lg font-light" style="color:#4b5563;">
                    From custom theme architecture to complex headless integrations, we build e-commerce ecosystems that dominate the market.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="flex flex-col gap-8">

                <!-- Card 1: Bespoke Storefront Architecture -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shopify Theme Development"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(63,137,201,0.15), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #3f89c9;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Bespoke <b>Storefront Architecture</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Stand out from the crowd with pixel-perfect, custom-coded themes. As your dedicated
                            <a href="/contact-us" style="color:#3f89c9; font-weight:600; border-bottom:1px solid #3f89c9;">Shopify development partner</a>,
                            we translate your brand identity into a high-converting digital experience.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Pixel-Perfect Figma to Liquid
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Mobile-First Responsive Design
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                Advanced Filtering &amp; Search Setup
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2: Shopify Plus (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Shopify Plus Enterprise"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(47,173,195,0.15), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #2fadc3;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Enterprise <b>Shopify Plus</b> Experts</h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Scale without limits. Our <a href="/contact-us" style="color:#2fadc3; font-weight:600; border-bottom:1px solid #2fadc3;">Enterprise developers</a> leverage exclusive Shopify Plus features like B2B wholesale portals, Launchpad, and custom checkout extensibility.
                        </p>
                        <div class="grid grid-cols-2 gap-6 pt-5" style="border-top: 1px solid #f0f9ff;">
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">10k+</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Orders Per Minute</p>
                            </div>
                            <div>
                                <h4 class="text-4xl font-bold mb-1" style="background: linear-gradient(135deg,#3f89c9,#2fadc3); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">99.9%</h4>
                                <p class="text-xs font-semibold uppercase tracking-wider" style="color:#6b7280;">Server Uptime</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Custom App Development -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Custom Shopify Apps"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(133,213,92,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #85d55c;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Private &amp; <b>Custom App</b> Development</h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Bridge functionality gaps with custom-coded apps. Whether it's complex ERP syncing, specialized product builders, or unique loyalty programs, our <a href="/contact-us" style="color:#85d55c; font-weight:600; border-bottom:1px solid #85d55c;">engineering team</a> has you covered.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0f9ff; color:#3f89c9; border:1px solid #bae6fd;">Node.js</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#f0fdf4; color:#16a34a; border:1px solid #bbf7d0;">React / Polaris</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#faf5ff; color:#7c3aed; border:1px solid #e9d5ff;">GraphQL API</span>
                            <span class="px-4 py-1.5 rounded-xl text-sm font-semibold" style="background:#fff7ed; color:#c2410c; border:1px solid #fed7aa;">Laravel</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Zero-Downtime Migrations (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="E-Commerce Migration"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(63,137,201,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #3f89c9;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#3f89c9);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Zero-Downtime <b>Migrations</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Moving to Shopify? We ensure secure data transfer, SEO preservation, and seamless 301 redirects so you don't lose a single customer or ranking during the transition.
                        </p>
                        <div class="flex items-center gap-4 p-4 rounded-2xl" style="background:#f0f9ff; border:1px solid #bae6fd;">
                            <span class="font-semibold text-sm" style="color:#374151;">Magento / Woo</span>
                            <div class="flex-1 flex items-center justify-center">
                                <div class="h-0.5 flex-1 rounded-full" style="background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                <svg class="w-5 h-5 mx-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="#2fadc3" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1.5 rounded-lg font-bold text-sm text-white" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">Shopify Plus</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Speed Optimization -->
                <div class="flex flex-col md:flex-row items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Speed Optimization"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(47,173,195,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-left: 4px solid #2fadc3;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#3f89c9,#2fadc3);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Speed <b>Optimization &amp; CRO</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            A 1-second delay costs you 7% in conversions. We optimize Core Web Vitals, compress code, and restructure Liquid logic to deliver blazing-fast loading speeds.
                        </p>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Performance Score</span>
                                    <span style="color:#2fadc3; font-weight:700;">98/100</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:98%; background: linear-gradient(90deg,#3f89c9,#2fadc3);"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-semibold mb-2">
                                    <span style="color:#374151;">Conversion Rate Uplift</span>
                                    <span style="color:#3f89c9; font-weight:700;">+35%</span>
                                </div>
                                <div class="w-full rounded-full h-2" style="background:#e5e7eb;">
                                    <div class="h-2 rounded-full" style="width:85%; background: linear-gradient(90deg,#3f89c9,#85d55c);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Headless Commerce (reversed) -->
                <div class="flex flex-col md:flex-row-reverse items-stretch gap-0 rounded-3xl overflow-hidden shadow-lg" style="background:#fff; border:1px solid #e5e7eb;">
                    <div class="w-full md:w-5/12 relative overflow-hidden" style="min-height:320px;">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Headless Commerce"
                            class="w-full h-full object-cover transition duration-700 hover:scale-105" style="min-height:320px;">
                        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(133,213,92,0.12), transparent);"></div>
                    </div>
                    <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center" style="border-right: 4px solid #85d55c;">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-light" style="color:#0a1628;">Future-Proof <b>Headless Commerce</b></h3>
                        </div>
                        <p class="text-base leading-relaxed mb-5 font-light" style="color:#4b5563;">
                            Decouple your front-end from the backend. We build lightning-fast, highly customizable headless experiences using <span style="color:#0a1628; font-weight:600;">Hydrogen &amp; Next.js</span> while keeping Shopify as your powerful engine.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Omnichannel Selling Power
                            </li>
                            <li class="flex items-center gap-3 text-sm font-medium" style="color:#374151;">
                                <span class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0" style="background: linear-gradient(135deg,#2fadc3,#85d55c);">
                                    <svg class="w-3 h-3" fill="none" stroke="white" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                Complete Design Freedom
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-14">
                <a href="/contact-us"
                    class="inline-flex items-center gap-2 px-8 py-4 rounded-full font-semibold text-white transition-all duration-300 hover:scale-105 hover:shadow-xl"
                    style="background: linear-gradient(135deg,#3f89c9,#2fadc3,#85d55c);">
                    Discuss Your Project With Us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
        <div class="text-center mb-12   bg-no-repeat bg-[length:40%] 
                bg-[url('/images/background_curve.svg')] 
                bg-[center_top_60px]">
            <h2 class="text-sm uppercase font-light text-white mb-6">
                Our SaaS Services:
            </h2>
            <div class="section-pill">CORE CAPABILITIES</div>
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
                    <div class="section-pill">CLOUD & INFRASTRUCTURE</div>
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

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <div class="section-pill">Why Qonkar</div>

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




    <section class="w-full flex justify-center items-center py-4  mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-6 md:p-12 text-center text-white rounded-[30px] border-[4px] shadow-lg" style="
      border: 2px solid rgba(56, 228, 174, 0.53);
      background: linear-gradient(90deg, rgba(56, 228, 174, 0.61) 0%, rgba(7, 152, 173, 0.75) 100%),
                  linear-gradient(0deg, rgba(0, 0, 0, 0.58) 0%, rgba(0, 0, 0, 0.58) 100%),
                  url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d') lightgray 0px -374.163px / 100% 280.523% no-repeat;
      box-shadow: 0 15px 15px 3px rgba(56, 228, 174, 0.12);">
            <h1 class="text-2xl sm:text-3xl md:text-3xl font-light mb-3">
                Ready to <strong>Scale</strong> Your SaaS?
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 text-white font-light">
                Let's engineer a product that investors love and customers pay for.
            </p>

            <a href="/contact-us"
                class="inline-flex rounded-full items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[var(--secondary-color)] font-semibold border border-white transition-all duration-300 hover:bg-[var(--secondary-color)] hover:text-white">
                Start Engineering
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

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
    <script src="/script/FAQ.js"></script>
    <script src="/script/navbar.js"></script>
</body>

</html>
