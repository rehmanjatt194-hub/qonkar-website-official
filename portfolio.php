<?php
require_once 'db-path.php'; // path relative to current file

require_once ADMIN_URL.'/database_config.php';
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


    <!-- ✅ Basic SEO Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    <meta name="author" content="Qonkar" />

    <!-- ✅ Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="/preview.webp" />



    <!-- ✅ Google ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- ✅ Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- ✅ Title -->
    <title>Portfolio | Qonkar Technologies</title>

    <!-- ✅ Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Script for the Case Studies Section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ✅ Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">
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

        /* ═══════════════════════════════════
           PREMIUM EDITORIAL PORTFOLIO GRID
        ═══════════════════════════════════ */

        /* --- Section Title Accent --- */
        .section-title-bar {
            display: inline-block;
            width: 50px;
            height: 3px;
            border-radius: 2px;
            background: linear-gradient(to right, #01a0d8, #95C951);
            margin-bottom: 12px;
        }

        /* --- Editorial Grid Layout --- */
        .portfolio-editorial-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }
        @media (max-width: 900px) {
            .portfolio-editorial-grid { grid-template-columns: 1fr 1fr; }
            .pcard { grid-column: auto !important; grid-row: auto !important; }
            .pcard-featured { grid-column: span 2 !important; }
        }
        @media (max-width: 600px) {
            .portfolio-editorial-grid { grid-template-columns: 1fr; }
            .pcard { grid-column: auto !important; grid-row: auto !important; }
            .pcard-featured { grid-column: span 1 !important; }
        }

        /* --- Base Card --- */
        .pcard {
            position: relative;
            border-radius: 22px;
            overflow: hidden;
            cursor: pointer;
            background: #050e18;
            border: 1px solid rgba(255,255,255,0.07);
            opacity: 0;
            transform: translateY(55px) translateZ(0);
            -webkit-transform: translateY(55px) translateZ(0);
            will-change: transform, opacity;
            transition: box-shadow 0.4s ease, border-color 0.4s ease, transform 0.08s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .pcard.revealed {
            opacity: 1;
            transform: translateY(0) translateZ(0);
            -webkit-transform: translateY(0) translateZ(0);
            transition: opacity 0.7s ease, transform 0.7s ease,
                        box-shadow 0.4s ease, border-color 0.4s ease;
        }
        .pcard:hover {
            box-shadow: 0 0 0 1.5px rgba(1,160,216,0.5),
                        0 30px 70px rgba(0,0,0,0.7),
                        0 0 50px rgba(1,160,216,0.12);
            border-color: rgba(1,160,216,0.5);
        }
        .pcard-green:hover {
            box-shadow: 0 0 0 1.5px rgba(149,201,81,0.5),
                        0 30px 70px rgba(0,0,0,0.7),
                        0 0 50px rgba(149,201,81,0.1);
            border-color: rgba(149,201,81,0.5);
        }

        /* --- Featured card --- */
        .pcard-featured .pcard-img { height: 100%; min-height: 460px; }
        .pcard-small   .pcard-img { height: 240px; }

        /* --- Image wrapper --- */
        .pcard-img {
            width: 100%;
            display: block;
            overflow: hidden;
            position: relative;
            border-radius: 21px 21px 0 0;
            -webkit-border-radius: 21px 21px 0 0;
            transform: translate3d(0,0,0);
            -webkit-transform: translate3d(0,0,0);
            -webkit-mask-image: -webkit-radial-gradient(white, black);
        }
        .pcard-featured .pcard-img {
            border-radius: 21px;
            -webkit-border-radius: 21px;
        }
        .pcard-img img {
            width: 100%; height: 100%;
            object-fit: cover; display: block;
            transition: transform 0.8s cubic-bezier(0.25,0.46,0.45,0.94), filter 0.5s ease;
            filter: brightness(0.82) saturate(1.1);
        }
        .pcard:hover .pcard-img img {
            transform: scale(1.07);
            filter: brightness(1) saturate(1.15);
        }

        /* --- Cinematic overlay --- */
        .pcard-overlay {
            position: absolute; inset: 0; z-index: 2;
            background: linear-gradient(
                to top,
                rgba(0,13,22,1)    0%,
                rgba(0,13,22,0.78) 30%,
                rgba(0,13,22,0.15) 65%,
                transparent        100%
            );
            transition: opacity 0.4s ease;
        }
        .pcard:hover .pcard-overlay { opacity: 0.88; }

        /* --- Mouse-follow shimmer overlay --- */
        .pcard-shimmer {
            position: absolute; inset: 0; z-index: 3;
            pointer-events: none;
            background: radial-gradient(
                400px circle at var(--mx, 50%) var(--my, 50%),
                rgba(255,255,255,0.06),
                transparent 60%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .pcard:hover .pcard-shimmer { opacity: 1; }

        /* --- Large faded project number --- */
        .pcard-number {
            position: absolute;
            top: 10px;
            right: 16px;
            z-index: 4;
            font-size: 5rem;
            font-weight: 900;
            line-height: 1;
            color: rgba(255,255,255,0.06);
            letter-spacing: -0.05em;
            pointer-events: none;
            user-select: none;
            transition: color 0.4s ease;
        }
        .pcard:hover .pcard-number { color: rgba(255,255,255,0.10); }
        .pcard-featured .pcard-number { font-size: 8rem; }

        /* --- Category badge with glowing dot --- */
        .pcard-badge {
            position: absolute;
            top: 16px; left: 16px;
            z-index: 10;
            display: flex; align-items: center; gap: 7px;
            font-size: 9px; font-weight: 700;
            letter-spacing: 0.12em; text-transform: uppercase;
            padding: 6px 12px 6px 10px;
            border-radius: 999px;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(1,160,216,0.45);
            background: rgba(0,13,22,0.55);
            color: #6fdcff;
            transition: background 0.3s, border-color 0.3s, box-shadow 0.3s;
        }
        .pcard:hover .pcard-badge {
            background: rgba(1,160,216,0.18);
            box-shadow: 0 0 12px rgba(1,160,216,0.3);
        }
        .pcard-badge-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: #01a0d8;
            flex-shrink: 0;
            animation: dot-pulse 2s infinite;
        }
        @keyframes dot-pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50%       { opacity: 0.5; transform: scale(0.7); }
        }
        .pcard-green .pcard-badge {
            border-color: rgba(149,201,81,0.45);
            color: #b5e878;
        }
        .pcard-green:hover .pcard-badge {
            background: rgba(149,201,81,0.15);
            box-shadow: 0 0 12px rgba(149,201,81,0.25);
        }
        .pcard-green .pcard-badge-dot { background: #95C951; }

        /* --- Bottom content body --- */
        .pcard-body {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            z-index: 10;
            padding: 22px 24px 20px;
        }

        /* Thin brand-color top accent line */
        .pcard-body::before {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            border-radius: 2px;
            background: linear-gradient(to right, #01a0d8, #95C951);
            margin-bottom: 14px;
            transition: width 0.5s cubic-bezier(0.25,0.8,0.25,1);
        }
        .pcard:hover .pcard-body::before { width: 50px; }

        .pcard-title {
            font-size: 1.15rem; font-weight: 700;
            color: #fff; line-height: 1.3; margin-bottom: 0;
            transition: transform 0.4s ease;
        }
        .pcard-featured .pcard-title { font-size: 1.8rem; }
        .pcard:hover .pcard-title { transform: translateY(-2px); }

        .pcard-desc {
            font-size: 13px;
            color: rgba(255,255,255,0.6);
            line-height: 1.65;
            margin-top: 8px;
            max-height: 0; overflow: hidden; opacity: 0;
            transition: max-height 0.5s ease, opacity 0.4s ease;
        }
        .pcard:hover .pcard-desc { max-height: 80px; opacity: 1; }

        /* --- Visit Website button --- */
        .pcard-link {
        }
        .pcard-link .link-arrow {
            transition: transform 0.25s ease;
        }
        .pcard-link:hover .link-arrow {
            transform: translateX(4px);
        }

        /* --- Glow border on hover --- */
        .pcard::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 18px;
            border: 1.5px solid transparent;
            background: linear-gradient(135deg, rgba(1,160,216,0), rgba(1,160,216,0)) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
            z-index: 20;
        }
        .pcard:hover::after {
            opacity: 1;
            background: linear-gradient(135deg, rgba(1,160,216,0.7), rgba(149,201,81,0.3)) border-box;
            box-shadow: 0 0 30px rgba(1,160,216,0.2), 0 25px 60px rgba(0,0,0,0.6);
        }
        /* Simpler glow via box-shadow instead */
        .pcard:hover {
            box-shadow: 0 0 0 1px rgba(1,160,216,0.4), 0 25px 60px rgba(0,0,0,0.6), 0 0 40px rgba(1,160,216,0.1);
            border-color: rgba(1,160,216,0.4);
        }
        .pcard-green:hover {
            box-shadow: 0 0 0 1px rgba(149,201,81,0.4), 0 25px 60px rgba(0,0,0,0.6), 0 0 40px rgba(149,201,81,0.08);
            border-color: rgba(149,201,81,0.4);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const responseBox = document.querySelector("#formResponse");
            const form = document.querySelector("#contactForm");

            if (form) {
                form.addEventListener("submit", async function(e) {
                    e.preventDefault();
                    responseBox.classList.remove("hidden");
                    responseBox.innerHTML = `<span class="text-white">⏳ Sending message...</span>`;

                    try {
                        const formData = new FormData(form);
                        const res = await fetch("process.php", {
                            method: "POST",
                            body: formData
                        });
                        const contentType = res.headers.get("content-type") || "";

                        let data;
                        if (contentType.includes("application/json")) {
                            data = await res.json();
                        } else {
                            data = {
                                message: await res.text()
                            };
                        }

                        if (res.ok) {
                            responseBox.innerHTML = `<span class="text-white">✅ ${data.message || 'Message sent'}</span>`;
                            form.reset();
                        } else {
                            const msg = data.error || data.message || res.statusText;
                            responseBox.innerHTML = `<span class="text-red-400">❌ ${msg}</span>`;
                        }
                    } catch (err) {
                        responseBox.innerHTML = `<span class="text-red-400">❌ Network/error: ${err.message}</span>`;
                    }
                });
            }
        });
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HJ6VFPLL90');
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ItemList",
      "name": "Qonkar Technologies Case Studies & Portfolio",
      "description": "Discover the digital solutions we’ve designed and developed — a showcase of our high-quality Shopify stores and custom software projects.",
      "url": "/#case-studies",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "CreativeWork",
            "name": "E-Commerce Project Portfolio",
            "description": "Custom designed and developed high-converting Shopify stores with mobile-first architecture.",
            "image": "/images/case-studies/background.webp",
            "provider": {
              "@type": "Organization",
              "name": "Qonkar Technologies"
            }
          }
        },
        {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@type": "CreativeWork",
            "name": "Custom Software Solutions",
            "description": "Scalable enterprise platforms and SaaS products engineered for measurable business growth.",
            "author": {
              "@type": "Organization",
              "name": "Qonkar Technologies"
            }
          }
        }
      ]
    }
  ]
}
</script>

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

<body class="bg-[#000d16]">

<header class="relative mt-5 z-50 mx-auto sm:px-4">
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
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>
    <!-- ═══════════════════════════════════════════════
         PORTFOLIO HERO SECTION — Redesigned
    ════════════════════════════════════════════════ -->
    <section class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 mb-4 sm:mb-8 flex items-center">

        <!-- Hero Content -->
        <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-6 items-center justify-start w-full px-4 sm:px-10 lg:px-9 pt-4 pb-10 sm:pt-6 sm:pb-14">

            <!-- Left Side: Text Content -->
            <div class="text-left text-white space-y-8 order-1 mt-6 lg:mt-0">

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light leading-[1.15] tracking-tight hero-title">
                    Digital Excellence Across <br class="hidden sm:block">
                    <span class="bg-clip-text text-transparent font-bold" style="background-image: var(--gradient);">E-Commerce & Enterprise Solutions.</span>
                </h1>

                <!-- Description Paragraph -->
                <p class="text-base sm:text-lg text-gray-300 font-light leading-relaxed max-w-lg hero-text">
                    Explore our diverse portfolio. From high-converting Shopify machines to custom-engineered SaaS, CRM, and ERP systems that drive real business growth.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center gap-4 pt-2 hero-btns">
                    <a href="#case-studies" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-8 py-4 rounded-full bg-transparent border border-[#01a0d8] text-[#01a0d8] font-medium hover:bg-[#01a0d8] hover:text-white transition-all shadow-[0_0_15px_rgba(1,160,216,0.1)] hover:shadow-[0_0_25px_rgba(1,160,216,0.4)]">
                        Explore All Projects
                        <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                    
                    <a href="/contact-us" class="w-full sm:w-auto inline-flex justify-center items-center gap-2 px-8 py-4 rounded-full border border-white/20 text-white font-medium hover:bg-white/10 transition-all backdrop-blur-sm">
                        Contact Us
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <!-- Bottom Stats Row -->
                <div class="pt-8 mt-8 border-t border-white/10 grid grid-cols-2 sm:grid-cols-3 gap-6 hero-stats">
                    <div>
                        <p class="text-3xl font-bold text-white mb-1">50+</p>
                        <p class="text-xs text-gray-400 font-medium tracking-wider uppercase">Enterprise Systems</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white mb-1">$2M+</p>
                        <p class="text-xs text-gray-400 font-medium tracking-wider uppercase">Revenue Generated</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white mb-1">99%</p>
                        <p class="text-xs text-gray-400 font-medium tracking-wider uppercase">Client Retention</p>
                    </div>
                </div>

            </div>

            <!-- Right Side: Image with Floating Elements -->
            <div class="relative flex justify-center lg:justify-end order-2 group hero-img">
                
                <!-- Main Image Wrapper -->
                <div class="relative w-full max-w-md lg:max-w-lg flex items-center justify-center -mt-4 sm:mt-6 lg:-mt-16 xl:-mt-24">
                    
                    <!-- Glow behind image removed -->

                    <!-- Main Hero Image -->
                    <img src="images/case-study-hero.webp" alt="Portfolio Showcase" class="relative z-10 w-full h-auto object-contain drop-shadow-[0_20px_30px_rgba(0,0,0,0.8)] scale-100 group-hover:scale-[1.02] transition-transform duration-700">
                    
                    <!-- Floating Stat Card 1 (Top Right) -->
                    <div class="absolute top-4 right-2 sm:top-10 sm:-right-8 z-20 background-backdrop-card p-2 sm:p-4 rounded-xl sm:rounded-2xl shadow-xl border border-white/10 flex items-center gap-2 sm:gap-3 backdrop-blur-md animate-[bounce_5s_infinite]">
                        <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-[var(--tertiary-color)]/20 flex items-center justify-center text-[var(--tertiary-color)] text-xs sm:text-base shrink-0">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </div>
                        <div class="leading-tight">
                            <p class="text-[8px] sm:text-[10px] text-gray-300 uppercase tracking-wider font-semibold">Conversion Rate</p>
                            <p class="text-xs sm:text-base font-bold text-white">+24.5%</p>
                        </div>
                    </div>

                    <!-- Floating Stat Card 2 (Bottom Left) -->
                    <div class="absolute bottom-6 left-2 sm:bottom-16 sm:-left-8 z-20 background-backdrop-card p-2 sm:p-4 rounded-xl sm:rounded-2xl shadow-xl border border-white/10 flex items-center gap-2 sm:gap-3 backdrop-blur-md animate-[bounce_6s_infinite_reverse]">
                        <div class="w-7 h-7 sm:w-10 sm:h-10 rounded-full bg-[var(--primary-color)]/20 flex items-center justify-center text-[var(--primary-color)] text-xs sm:text-base shrink-0">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div class="leading-tight">
                            <p class="text-[8px] sm:text-[10px] text-gray-300 uppercase tracking-wider font-semibold">System Uptime</p>
                            <p class="text-xs sm:text-base font-bold text-white">99.99%</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         PREMIUM EDITORIAL PORTFOLIO GRID
    ════════════════════════════════════════════════════ -->
    <div class="w-full bg-[#000d16] relative z-20" style="border-top: 1px solid rgba(1,160,216,0.1);">

        <!-- Ambient blobs -->
        <div class="absolute top-10 left-1/3 w-[500px] h-[500px] rounded-full bg-[#01a0d8] opacity-[0.04] blur-[130px] pointer-events-none"></div>
        <div class="absolute bottom-20 right-1/4 w-[400px] h-[400px] rounded-full bg-[#95C951] opacity-[0.04] blur-[110px] pointer-events-none"></div>

        <section id="case-studies" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-24 sm:pt-20 sm:pb-32">

            <!-- Section Header -->
            <div class="mb-12 sm:mb-16">
                <span class="section-title-bar"></span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">Our Work</h2>
                <p class="text-gray-400 mt-4 text-base sm:text-lg max-w-2xl leading-relaxed">Explore the digital experiences we've crafted &mdash; from powerful Shopify stores to scalable enterprise systems.</p>
            </div>

            <!-- Editorial Cards Grid -->
            <div id="caseStudiesGrid" class="portfolio-editorial-grid">
                <?php
                $sql = "SELECT cs.id, cs.mockup_image, cs.background_image, cs.brand_name, cs.short_description, cs.link_of_case_study,
                       GROUP_CONCAT(csc.category_name SEPARATOR ', ') AS categories
                FROM case_studies cs
                LEFT JOIN case_study_category_bridge bridge ON cs.id = bridge.case_study_id
                LEFT JOIN case_study_categories csc ON bridge.category_id = csc.id
                WHERE cs.status = 'active'
                GROUP BY cs.id
                ORDER BY cs.created_at DESC";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $index = 0;
                    while ($row = $result->fetch_assoc()) {
                        $categories = str_replace('_', ' ', $row['categories']);
                        $hasLink = !empty($row['link_of_case_study']);
                        $href = $hasLink ? htmlspecialchars($row['link_of_case_study']) : '#';

                        $groupIndex = intdiv($index, 3); // row-group: 0,1,2...
                        $posInGroup = $index % 3;        // 0=featured, 1,2=small
                        $startRow   = $groupIndex * 2 + 1;

                        $isFeatured = ($posInGroup === 0);
                        $isEven     = ($groupIndex % 2 === 0); // even group → featured LEFT
                        $isGreen    = ($index % 2 === 1);

                        // Alternating grid placement
                        if ($isFeatured) {
                            $col       = $isEven ? '1 / span 2' : '2 / span 2';
                            $gridStyle = "grid-column:{$col};grid-row:{$startRow}/span 2;";
                        } else {
                            $smallRow  = $startRow + ($posInGroup - 1);
                            $col       = $isEven ? '3' : '1';
                            $gridStyle = "grid-column:{$col};grid-row:{$smallRow};";
                        }

                        $cardClass  = 'pcard';
                        $cardClass .= $isFeatured ? ' pcard-featured' : ' pcard-small';
                        $cardClass .= $isGreen    ? ' pcard-green'    : '';

                        $num      = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                        $linkHtml = $hasLink ? '
                            <a href="' . $href . '" target="_blank" class="pcard-link">
                                Visit Website
                                <i class="fa-solid fa-arrow-right link-arrow"></i>
                            </a>' : '';

                        echo '
                <div class="' . $cardClass . '" data-index="' . $index . '" style="' . $gridStyle . '"' . ($hasLink ? ' data-href="' . $href . '"' : '') . '>

                    <!-- Mouse-follow shimmer -->
                    <div class="pcard-shimmer"></div>

                    <!-- Faded project number -->
                    <div class="pcard-number">' . $num . '</div>

                    <!-- Category badge with live dot -->
                    <div class="pcard-badge">
                        <span class="pcard-badge-dot"></span>
                        ' . htmlspecialchars($categories) . '
                    </div>

                    <!-- Image -->
                    <div class="pcard-img">
                        <img src="' . htmlspecialchars($row['mockup_image']) . '"
                             alt="' . htmlspecialchars($row['brand_name']) . '"
                             loading="lazy">
                        <div class="pcard-overlay"></div>
                    </div>

                    <!-- Info body -->
                    <div class="pcard-body">
                        <h3 class="pcard-title">' . htmlspecialchars($row['brand_name']) . '</h3>
                        <p class="pcard-desc">' . htmlspecialchars($row['short_description']) . '</p>
                        ' . $linkHtml . '
                    </div>
                </div>';

                        $index++;
                    }
                } else {
                    echo "<p class='text-gray-400 text-center py-16 col-span-3'>No case studies found.</p>";
                }
                $conn->close();
                ?>
            </div>

        </section>
    </div>
    
    <!-- Call to Action Banner -->
    <div class="w-full bg-[#000d16] relative z-10 py-16 sm:py-24 overflow-hidden border-t border-[#01a0d8]/20">
        <!-- Abstract Glow Background -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-[#01a0d8] opacity-20 blur-[120px] rounded-full pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 flex flex-col md:flex-row items-center justify-between gap-8">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white tracking-tight text-center md:text-left leading-tight">
                Whatever your goal, <br class="hidden md:block" />
                <span class="text-[#01a0d8]">let's get started.</span>
            </h2>
            
            <a href="/contact-us" class="inline-flex justify-center items-center gap-2 px-8 py-4 sm:px-10 sm:py-5 rounded-full bg-transparent border border-[#01a0d8] text-[#01a0d8] font-medium hover:bg-[#01a0d8] hover:text-white transition-all duration-300 shadow-[0_0_15px_rgba(1,160,216,0.1)] hover:shadow-[0_0_25px_rgba(1,160,216,0.4)] text-base sm:text-lg shrink-0 group">
                Let's get Started
                <i class="fa-solid fa-arrow-right text-sm transform transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>
    </div>
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
                        <li><a href="/portfolio" class="hover:underline">Portfolio</a></li>
                        <li><a href="/career" class="hover:underline">Careers</a></li>
                        <li><a href="/blogs" class="hover:underline">Blogs and News</a></li>
                        <li><a href="/privacy-policy" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="/terms-of-service" class="hover:underline">Terms of Services</a></li>
                        <li><a href="/help-and-support" class="hover:underline">Help and Support</a></li>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="script/navbar.js"></script>
    <script src="script/portfolio.js"></script>
    <script src="script/portfolio_GSAP.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {

        /* ── Scroll-reveal for portfolio cards ── */
        const cards = document.querySelectorAll('.pcard');
        if (cards.length) {
            const revealObs = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const idx = parseInt(entry.target.dataset.index || 0);
                        const delay = (idx % 3) * 120;
                        setTimeout(() => entry.target.classList.add('revealed'), delay);
                        revealObs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });
            cards.forEach(c => revealObs.observe(c));
        }

        /* ── 3D Tilt + Mouse-follow shimmer ── */
        cards.forEach(card => {
            card.addEventListener('click', (e) => {
                if (e.target.closest('a')) return;
                const href = card.getAttribute('data-href');
                if (href && href !== '#') {
                    window.open(href, '_blank');
                }
            });
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const cx = rect.width  / 2;
                const cy = rect.height / 2;

                // 3D tilt
                const rotX = ((y - cy) / cy) * -5;
                const rotY = ((x - cx) / cx) *  5;
                card.style.transform = `perspective(900px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateY(-4px)`;

                // shimmer position (as percentages)
                const px = (x / rect.width)  * 100;
                const py = (y / rect.height) * 100;
                card.style.setProperty('--mx', px + '%');
                card.style.setProperty('--my', py + '%');
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.style.removeProperty('--mx');
                card.style.removeProperty('--my');
            });
        });
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
