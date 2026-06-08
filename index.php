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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://qonkar.com/" /> 
  
    <meta name="author" content="Qonkar" />
    <meta name="msvalidate.01" content="C6540A73A08EF3FA143C9F0FEB785E5D" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="https://qonkar.com/images/qonkar_q.webp" />


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <title>Expert Shopify Development & Custom Software Agency | Qonkar Technologies</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/styles/index.css">
    <style>
        @keyframes infinite-scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-350%);
            }
        }

        @keyframes infinite-scroll-reverse {
            0% {
                transform: translateX(-350%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-infinite-scroll {
            display: flex;
            animation: infinite-scroll 70s linear infinite;
        }

        .animate-infinite-scroll-reverse {
            display: flex;
            animation: infinite-scroll-reverse 70s linear infinite;
        }

        /* ✅ Pause animation on hover */
        .animate-infinite-scroll:hover,
        .animate-infinite-scroll-reverse:hover {
            animation-play-state: paused;
        }

        /* 📱 Mobile screens: 3x faster */
        @media (max-width: 768px) {
            .animate-infinite-scroll {
                animation-duration: 30s;
                /* 10s ÷ 3 */
            }

            .animate-infinite-scroll-reverse {
                animation-duration: 30s;
                /* 10s ÷ 3 */
            }
        }

        section {
            overflow-x: hidden;
        }
      html {
        scroll-behavior: smooth;
      }
    </style>

    <meta charset="UTF-8">
    
    <title>Expert Shopify Development & Custom Software Agency | Qonkar Technologies</title>
    
    <meta name="description" content="Qonkar is a premier Shopify Plus development agency & custom software development company. We deliver ROI-driven digital marketing and SaaS product development globally.">
    
    <meta name="keywords" content="Shopify development services, Shopify plus development agency, custom software development company, SaaS product development, ROI driven digital marketing, Shopify theme designer">

    <meta property="og:title" content="Expert Shopify Development & Custom Software Agency | Qonkar Technologies">
    <meta property="og:description" content="Launch high-converting Shopify stores and scalable SaaS products with Qonkar. Leading digital marketing experts serving clients in New York, London, and globally.">
    
            <meta name="geo.region" content="US-NY" />
        <meta name="geo.placename" content="New York" />
        <meta name="geo.region" content="GB-LND" />
        <meta name="geo.placename" content="London" />

            <script src="
            https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js
            "></script>
            <link href="
            https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css
            " rel="stylesheet">
            
            <script type="application/ld+json">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "SoftwareBusiness",
      "@id": "https://qonkar.com/#organization",
      "name": "Qonkar Technologies",
      "alternateName": "Qonkar",
      "url": "https://qonkar.com/",
      "logo": "https://qonkar.com/images/Logo_White_Color.webp",
      "image": "https://qonkar.com/images/qonkar_q.webp",
      "description": "Qonkar is a premier Shopify Plus development agency & custom software development company. We deliver ROI-driven digital marketing and SaaS product development globally.",
      "priceRange": "$$",
      "telephone": "+447476451747",
      "address": [
        {
          "@type": "PostalAddress",
          "addressLocality": "London",
          "addressCountry": "GB"
        },
        {
          "@type": "PostalAddress",
          "addressLocality": "Nawabshah",
          "addressRegion": "Sindh",
          "addressCountry": "PK"
        }
      ],
      "sameAs": [
        "https://www.linkedin.com/company/qonkar",
        "https://www.facebook.com/qonkar",
        "https://www.instagram.com/qonkartechnologies",
        "https://www.youtube.com/@QonkarTechnologiesPvtLtd"
      ],
      "knowsAbout": [
        "Shopify Plus Development",
        "SaaS Product Development",
        "Custom CRM & ERP Systems",
        "Digital Marketing & SEO",
        "Mobile App Development"
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+447476451747",
          "contactType": "customer service",
          "areaServed": "Worldwide",
          "availableLanguage": "English"
        },
        {
          "@type": "ContactPoint",
          "telephone": "+923058214945",
          "contactType": "technical support",
          "areaServed": "PK",
          "availableLanguage": ["English", "Urdu"]
        }
      ],
      "brand": [
        { "@type": "Brand", "name": "Microsoft Partner" },
        { "@type": "Brand", "name": "Government of Sindh" },
        { "@type": "Brand", "name": "Pakistan Software Export Board (PSEB)" },
        { "@type": "Brand", "name": "Securities & Exchange Commission of Pakistan (SECP)" },
        { "@type": "Brand", "name": "Upwork Partner" },
        { "@type": "Brand", "name": "Quaid-e-Awam University (QUEST)" },
        { "@type": "Brand", "name": "Cainte Insurance" },
        { "@type": "Brand", "name": "Centra Insurance" },
        { "@type": "Brand", "name": "Derma Space" },
        { "@type": "Brand", "name": "Thalassemia Foundation" }
      ]
    },
    {
      "@type": "Service",
      "name": "Qonkar Technologies Software & Digital Marketing",
      "provider": { "@id": "https://qonkar.com/#organization" },
      "description": "Top-tier Software and Digital Marketing solutions trusted by 100+ businesses globally.",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "100"
      },
      "review": [
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Lepetit Crystals" },
          "reviewBody": "Thank you so much for all your help! We will come back to you again for more help.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Ramon Jael" },
          "reviewBody": "The best I’ve ever worked with on this platform.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Amir Messari" },
          "reviewBody": "Muhammad did an outstanding job optimizing our website’s speed.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5" }
        }
      ]
    },
    {
      "@type": "ItemList",
      "name": "Qonkar Technologies Main Navigation Menu",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "url": "https://qonkar.com/" },
        { "@type": "ListItem", "position": 2, "name": "Shopify Development", "url": "https://qonkar.com/services/shopify-development" },
        { "@type": "ListItem", "position": 16, "name": "Contact Us", "url": "https://qonkar.com/contact-us" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Qonkar Technologies located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We operate as a global digital partner with a strategic presence in the UK and a dedicated development hub in Pakistan."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to launch a Shopify store?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical Shopify projects run 4–6 weeks from kickoff to launch."
          }
        }
      ]
    }
  ]
}
</script>
</head>

<body>
    
<div class="bg-[#000d16] flex flex-col" style="background-color: #000d16; width: 100%; min-height: 100vh; overflow-x: hidden; margin: 0; padding: 0;">
    
<header class="sticky top-5 z-50 mx-auto sm:px-4 w-full">
    <nav class="glass hidden lg:flex max-w-7xl mx-auto items-center justify-between px-6 py-2 rounded-full mt-4 relative">
        <div class="flex items-center">
            <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-9 w-auto"></a>
        </div>
        
        <ul class="flex gap-8 text-white font-medium items-center">
            <li><a href="/" class="text-[var(--primary-color)]">Home</a></li>

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
            <a href="/" class="block w-full text-center py-4 text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>
            
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

            <a href="/portfolio" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
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

    <section id="hero"
        class="relative flex-1 flex items-center mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 overflow-hidden w-full">


        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6 lg:gap-8 max-w-7xl mx-auto w-full">

            <div class="flex flex-col items-center md:items-start text-center md:text-left gap-4 lg:gap-5 max-w-2xl">

                <h1
                  class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl xl:text-6xl font-light hero-title leading-tight text-white"
                >
                  Custom <br> <b>Software, Shopify</b><br>
                  & <span
                    class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold"
                  >Digital Growth</span>
                  Agency
                </h1>
                
                <p
                    class="text-sm sm:text-base md:text-md lg:text-lg text-white/90 font-light leading-relaxed hero-text max-w-xl">
                    One team to build, convert, and grow your digital presence. From scalable software to ROI-driven marketing, we deliver innovation that scales businesses faster.
                </p>

                <a target="_blank" href="https://calendly.com/qonkartechnologiespvtltd" class="hero-btn mt-2 inline-flex items-center gap-2 px-8 py-3 rounded-full border-2 border-[#01a0d8] bg-transparent text-[#01a0d8] text-lg font-semibold 
                hover:bg-[#01a0d8] hover:text-white transition-all duration-300">
                    Get a Free Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <div class="w-full md:w-1/2 hero-img flex justify-center items-center overflow-hidden max-h-[40vh] md:max-h-[55vh]">
                <img src="/images/shopify-responsive-store-design-case-study.webp" alt="Showcase of responsive Shopify store design case study for Timevo on desktop and mobile."
                    class="w-5/6 md:w-full lg:w-4/5 xl:w-full h-auto max-h-[35vh] md:max-h-[50vh] object-contain">
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

    <section class="bg-[#000d16] py-12 px-4 sm:px-6 lg:px-8 w-full">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/Successful-Business-Collaboration-And-Client-Meeting.webp" alt="Successful business collaboration shown by a professional shaking hands with a client during a team meeting." class="w-full max-w-xl h-auto rounded-2xl shadow-xl">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">

                <div class="glass-border w-[120px]  mx-auto lg:mx-0">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center 
            ">
                            <p> &#9679; QONKAR
                            </p>
                        </div>
                    </div>
                </div>


                <h2 class="text-3xl md:text-4xl text-white">
                    Why <b>Qonkar</b> is the Best IT Services Agency?
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Qonkar is a premier software house delivering custom technology solutions. Unlike traditional agencies, we focus on ROI-driven development. From Ecommerce stores to Fintech apps, our expert team ensures your digital success.

                </p>

                <a href="/about-us" class="z-99 mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full border-2 border-[#01a0d8] bg-transparent text-[#01a0d8] font-semibold 
                hover:bg-[#01a0d8] hover:text-white transition-all duration-300 w-fit mx-auto lg:mx-0">
                    Know More About us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>


<div class="bg-[#000d16] w-full">
    <section class="py-8 md:py-10 w-full px-4 sm:px-6 lg:px-8 bg-[#f8fafc] text-slate-900">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-5 pb-2 border-b border-slate-200/50">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold leading-tight text-[#000d16]">
                        IT <span class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold tracking-tight">Solutions</span>
                    </h2>
                </div>
                <p class="text-slate-500 font-light text-sm md:text-base max-w-md md:text-right">
                    Tailored development and design services built to scale your digital presence.
                </p>
            </div>

            <!-- Bento Grid of Actual Services (5-card Layout, Dark Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-4">
                
                <!-- Card 1: Shopify Ecommerce (Left Column - Tall) -->
                <div class="lg:col-span-1 flex flex-col h-full">
                    <div class="bg-[#000d16] rounded-[24px] p-4 sm:p-5 border border-white/5 flex flex-col justify-between overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300 relative group h-full min-h-[300px]">
                        <div class="text-left">
                            <h3 class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold text-xl mb-1">Shopify</h3>
                            <p class="text-slate-300 font-light text-sm leading-relaxed mb-2">High-converting stores designed for modern ecommerce brands.</p>
                            <ul class="space-y-1.5 text-slate-200 font-medium text-sm mb-2">
                                <li>
                                    <a href="/services/shopify-development" class="flex items-center gap-2 hover:text-[#2BB5BC] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Shopify Development
                                    </a>
                                </li>
                                <li>
                                    <a href="/services/shopify-theme-design" class="flex items-center gap-2 hover:text-[#2BB5BC] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Shopify Theme Design
                                    </a>
                                </li>
                                <li>
                                    <a href="/services/shopify-store-setup" class="flex items-center gap-2 hover:text-[#2BB5BC] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Shopify Store Setup
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full mt-2 overflow-hidden rounded-xl border border-white/5 bg-black/20 p-1">
                            <img src="/images/shopify-responsive-store-design-case-study.webp" alt="Shopify Development mockup" class="w-full h-auto object-cover transform group-hover:scale-105 transition-all duration-500 shadow-md">
                        </div>
                    </div>
                </div>

                <!-- Column 2: Web Dev + Nested Row (Wide) -->
                <div class="lg:col-span-2 flex flex-col gap-3 md:gap-4">
                    <!-- Web & SaaS Solutions Card -->
                    <div class="bg-[#000d16] rounded-[24px] p-4 sm:p-5 border border-white/5 flex flex-col sm:flex-row items-center justify-between gap-3 overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300 relative group flex-1">
                        <div class="text-left flex-1">
                            <h3 class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold text-xl mb-1">Web & SaaS</h3>
                            <p class="text-slate-300 font-light text-sm leading-relaxed max-w-sm mb-2">Custom applications engineered for performance, scalability, and seamless user experiences.</p>
                            <ul class="space-y-1 text-slate-200 font-medium text-sm">
                                <li>
                                    <a href="/services/web-design-and-development" class="flex items-center gap-2 hover:text-[#95C951] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Web Design & Development
                                    </a>
                                </li>
                                <li>
                                    <a href="/services/saas-product-development" class="flex items-center gap-2 hover:text-[#95C951] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> SaaS Product Development
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-1 flex justify-center w-full mt-2 sm:mt-0 bg-black/10 rounded-xl p-1.5">
                            <img src="/images/qonkar-custom-software-products-saas-portfolio.webp" alt="Web Development" class="w-full max-w-[220px] h-auto object-contain rounded-xl transform group-hover:scale-105 transition-all duration-500 shadow-md">
                        </div>
                    </div>

                    <!-- Nested Row: Speed & Migration and Maintenance -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                        <!-- Speed & Migration -->
                        <div class="bg-[#000d16] rounded-[24px] p-4 sm:p-5 border border-white/5 flex flex-col justify-between overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300 relative group min-h-[150px]">
                            <div class="text-left">
                                <h3 class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold text-lg mb-1">Optimization</h3>
                                <ul class="space-y-1 text-slate-200 font-medium text-xs md:text-sm">
                                    <li>
                                        <a href="/services/speed-optimization" class="flex items-center gap-2 hover:text-[#2BB5BC] transition-colors duration-200">
                                            <span class="text-[#01a0d8] font-bold">✔</span> Speed optimization
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/services/migration-services" class="flex items-center gap-2 hover:text-[#2BB5BC] transition-colors duration-200">
                                            <span class="text-[#01a0d8] font-bold">✔</span> Migration Services
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full flex justify-center mt-2 bg-black/10 rounded-lg p-1">
                                <img src="/images/qonkar-shopify-speed-optimization-services.webp" alt="Speed Optimization" class="h-11 w-auto object-contain transform group-hover:scale-110 transition-all duration-500">
                            </div>
                        </div>

                        <!-- Maintenance -->
                        <div class="bg-[#000d16] rounded-[24px] p-4 sm:p-5 border border-white/5 flex flex-col justify-between overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300 relative group min-h-[150px]">
                            <div class="text-left">
                                <h3 class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold text-lg mb-1">Maintenance</h3>
                                <a href="/contact-us" class="block text-slate-300 hover:text-[#2BB5BC] transition font-light text-xs md:text-sm leading-normal">
                                    Flexible, ongoing support designed to adapt to your needs. <span class="text-[#01a0d8] font-semibold">Contact Us →</span>
                                </a>
                            </div>
                            <div class="w-full flex justify-center mt-2 bg-black/10 rounded-lg p-1">
                                <img src="/images/services_pictures/shopify_maintanance.webp" alt="Maintenance" class="h-11 w-auto object-contain transform group-hover:scale-110 transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Enterprise & Custom Apps (Right Column - Tall) -->
                <div class="lg:col-span-1 flex flex-col h-full">
                    <div class="bg-[#000d16] rounded-[24px] p-4 sm:p-5 border border-white/5 flex flex-col justify-between overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.15)] hover:-translate-y-1 transition-all duration-300 relative group h-full min-h-[300px]">
                        <div class="text-left">
                            <h3 class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold text-xl mb-1">Enterprise Apps</h3>
                            <p class="text-slate-300 font-light text-sm leading-relaxed mb-2">Scalable systems and specialty applications for growing businesses.</p>
                            <ul class="space-y-1.5 text-slate-200 font-medium text-sm mb-2">
                                <li>
                                    <a href="/contact-us" class="flex items-center gap-2 hover:text-[#95C951] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> CRM & ERP Systems
                                    </a>
                                </li>
                                <li>
                                    <a href="/services/automative-app" class="flex items-center gap-2 hover:text-[#95C951] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Automotive Apps
                                    </a>
                                </li>
                                <li>
                                    <a href="/services/healthcare-and-hippa-apps" class="flex items-center gap-2 hover:text-[#95C951] transition-colors duration-200">
                                        <span class="text-[#01a0d8] font-bold">✔</span> Healthcare Apps
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full mt-2 overflow-hidden rounded-xl border border-white/5 bg-black/20 p-1">
                            <img src="/images/future_enterprise_dashboard.png" alt="Enterprise Software mockup" class="w-full h-auto object-cover transform group-hover:scale-105 transition-all duration-500 shadow-md">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    
    <section id="process-section" class="relative py-8 md:py-12 w-full bg-[#000d16] px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto mb-6 text-center md:text-left">
            <h2 class="text-3xl md:text-5xl font-light tracking-tight text-white">
                Our <span class="font-bold bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent">Process</span>
            </h2>
        </div>

        <div class="relative w-full max-w-7xl mx-auto mt-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <!-- Left Column: Workstation Card (Sits on top on mobile, on left on desktop) -->
                <div class="order-last lg:order-first lg:col-span-5 flex flex-col justify-start">
                    <div id="workstation-container" class="sticky top-28 w-full bg-[#060e14] border border-[#2BB5BC]/30 rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(43,181,188,0.12)] flex flex-col justify-between transition-all duration-500 min-h-[300px]">
                        <!-- Frame Header -->
                        <div class="flex items-center justify-between px-4 py-3 bg-[#03090d] border-b border-white/5">
                            <div class="flex gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-yellow-500/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-green-500/80"></span>
                            </div>
                            <span class="text-[9px] font-mono text-gray-500 uppercase tracking-widest">Qonkar Workstation</span>
                            <span class="w-10"></span> <!-- spacer -->
                        </div>

                        <!-- Workstation Widgets Content -->
                        <div class="relative flex-1 bg-black/20 flex flex-col justify-center">
                            
                            <!-- Widget 1: Discovery Checklist -->
                            <div id="widget-discovery" class="widget-content h-full flex flex-col justify-between p-6">
                                <div>
                                    <h5 class="text-xs font-semibold text-[#2BB5BC] uppercase tracking-wider mb-4">Discovery Checklist</h5>
                                    <div class="space-y-3">
                                        <label class="flex items-center gap-3 cursor-pointer text-sm text-gray-300 hover:text-white transition">
                                            <input type="checkbox" checked class="w-4 h-4 rounded border-gray-700 bg-black text-[#2BB5BC] focus:ring-0 cursor-pointer" />
                                            <span>Gather Requirements</span>
                                        </label>
                                        <label class="flex items-center gap-3 cursor-pointer text-sm text-gray-300 hover:text-white transition">
                                            <input type="checkbox" checked class="w-4 h-4 rounded border-gray-700 bg-black text-[#2BB5BC] focus:ring-0 cursor-pointer" />
                                            <span>Competitor Analysis</span>
                                        </label>
                                        <label class="flex items-center gap-3 cursor-pointer text-sm text-gray-300 hover:text-white transition">
                                            <input type="checkbox" id="discovery-check-3" class="w-4 h-4 rounded border-gray-700 bg-black text-[#2BB5BC] focus:ring-0 cursor-pointer" />
                                            <span>Define Project Scope</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-6 pt-4 border-t border-white/5">
                                    <div class="flex justify-between text-xs text-gray-400 mb-1">
                                        <span>Roadmap Progress</span>
                                        <span id="discovery-progress-text">66%</span>
                                    </div>
                                    <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                                        <div id="discovery-progress-bar" class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] h-full transition-all duration-500" style="width: 66%;"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Widget 2: Design visual slider -->
                            <div id="widget-design" class="widget-content h-full hidden flex-col justify-between p-6">
                                <div>
                                    <h5 class="text-xs font-semibold text-[#95C951] uppercase tracking-wider mb-3">Wireframe to High-Fidelity UI</h5>
                                    <div class="relative w-full h-[140px] bg-black/40 rounded-xl overflow-hidden border border-white/5 flex items-center justify-center">
                                        <!-- Before (Wireframe) -->
                                        <div class="absolute inset-0 bg-[#00111d] flex flex-col justify-center p-4">
                                            <div class="w-full h-3 bg-white/10 rounded mb-2"></div>
                                            <div class="grid grid-cols-3 gap-2">
                                                <div class="h-10 border border-dashed border-white/20 rounded flex items-center justify-center text-[9px] text-white/40">BOX</div>
                                                <div class="h-10 border border-dashed border-white/20 rounded flex items-center justify-center text-[9px] text-white/40">IMAGE</div>
                                                <div class="h-10 border border-dashed border-white/20 rounded flex items-center justify-center text-[9px] text-white/40">TEXT</div>
                                            </div>
                                        </div>
                                        <!-- After (UI) -->
                                        <div id="design-after-screen" class="absolute inset-y-0 left-0 right-1/2 bg-gradient-to-br from-[#00283d] to-[#080808] border-r-2 border-[#95C951] overflow-hidden transition-all duration-300">
                                            <div class="w-[300px] p-4">
                                                <div class="w-24 h-3.5 bg-[#2BB5BC] rounded mb-2 shadow-[0_0_10px_rgba(43,181,188,0.5)]"></div>
                                                <div class="grid grid-cols-3 gap-2">
                                                    <div class="h-10 bg-white/5 rounded-lg border border-[#95C951]/20 p-1">
                                                        <div class="w-3 h-3 rounded-full bg-[#95C951] mb-1"></div>
                                                        <div class="w-6 h-1 bg-white/40 rounded"></div>
                                                    </div>
                                                    <div class="h-10 bg-white/5 rounded-lg border border-[#95C951]/20 p-1">
                                                        <div class="w-3 h-3 rounded-full bg-[#2BB5BC] mb-1"></div>
                                                        <div class="w-6 h-1 bg-white/40 rounded"></div>
                                                    </div>
                                                    <div class="h-10 bg-[#01a0d8]/10 rounded-lg border border-[#01a0d8]/30 p-1">
                                                        <div class="w-3 h-3 rounded-full bg-[#01a0d8] mb-1"></div>
                                                        <div class="w-6 h-1 bg-white/40 rounded"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full mt-3 flex items-center gap-2">
                                        <span class="text-[9px] text-gray-500 font-mono">WIREFRAME</span>
                                        <input type="range" min="0" max="100" value="50" id="design-slider" class="flex-1 h-1 bg-white/10 rounded-lg appearance-none cursor-pointer accent-[#95C951]" />
                                        <span class="text-[9px] text-gray-500 font-mono">HI-FI UI</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Widget 3: Engineering Terminal -->
                            <div id="widget-engineering" class="widget-content h-full hidden flex-col justify-between p-6">
                                <div>
                                    <h5 class="text-xs font-semibold text-[#2BB5BC] uppercase tracking-wider mb-3">Live Compilation Logs</h5>
                                    <div class="bg-black/50 rounded-xl p-4 border border-white/5 h-[140px] overflow-y-auto flex flex-col justify-start space-y-1.5 text-gray-400 font-mono text-[10px]" id="engineering-terminal">
                                        <div><span class="text-green-500">$</span> npm run build:prod</div>
                                        <div><span class="text-[#2BB5BC]">&gt;</span> bundling codebase modules...</div>
                                        <div class="text-white animate-pulse"><span class="text-green-500">$</span> awaiting compiler...</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Widget 4: Launch Confetti/Status -->
                            <div id="widget-launch" class="widget-content h-full hidden flex-col justify-between p-6">
                                <div>
                                    <h5 class="text-xs font-semibold text-[#95C951] uppercase tracking-wider mb-4">Production Deployment</h5>
                                    <div class="flex flex-col items-center justify-center h-[120px] bg-black/40 rounded-xl border border-white/5 p-4">
                                        <button id="launch-deploy-btn" class="relative group px-6 py-3 bg-gradient-to-r from-[#95C951] to-[#2BB5BC] text-black font-bold text-xs uppercase rounded-full shadow-[0_0_20px_rgba(43,181,188,0.3)] hover:shadow-[0_0_30px_rgba(149,201,81,0.5)] hover:scale-105 active:scale-95 transition-all duration-300 flex items-center gap-2">
                                            <i class="fa-solid fa-rocket animate-bounce"></i>
                                            <span>Deploy Project</span>
                                        </button>
                                        <!-- Status Bar -->
                                        <div id="launch-status" class="w-full hidden">
                                            <div class="flex justify-between text-[10px] text-gray-400 mb-1 font-mono">
                                                <span id="launch-status-text">Uploading assets...</span>
                                                <span id="launch-status-percent">0%</span>
                                            </div>
                                            <div class="w-full bg-white/5 h-1.5 rounded-full overflow-hidden">
                                                <div id="launch-status-bar" class="bg-[#95C951] h-full" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Widget 5: Scaling Line Chart -->
                            <div id="widget-scaling" class="widget-content h-full hidden flex-col justify-between p-6">
                                <div>
                                    <div class="flex justify-between items-center mb-3">
                                        <h5 class="text-xs font-semibold text-[#2BB5BC] uppercase tracking-wider">Traffic Scaling</h5>
                                        <span class="text-[9px] text-green-400 font-mono font-bold animate-pulse">+320% Speed Boost</span>
                                    </div>
                                    <div class="relative w-full h-[120px] bg-black/40 rounded-xl border border-white/5 overflow-hidden p-3 flex flex-col justify-between">
                                        <span class="text-[9px] text-gray-500 font-mono">Cloud Load Scaling</span>
                                        <div class="h-20 flex items-end relative">
                                            <svg class="w-full h-full" viewBox="0 0 100 50" preserveAspectRatio="none">
                                                <line x1="0" y1="10" x2="100" y2="10" stroke="rgba(255,255,255,0.05)" stroke-width="0.5" />
                                                <line x1="0" y1="25" x2="100" y2="25" stroke="rgba(255,255,255,0.05)" stroke-width="0.5" />
                                                <line x1="0" y1="40" x2="100" y2="40" stroke="rgba(255,255,255,0.05)" stroke-width="0.5" />
                                                
                                                <path d="M0,45 Q20,40 40,30 T80,12 T100,2" fill="none" stroke="url(#chart-grad-workstation)" stroke-width="2" id="scaling-chart-path" stroke-dasharray="200" stroke-dashoffset="200" class="transition-all duration-[2000ms] ease-in-out" />
                                                
                                                <defs>
                                                    <linearGradient id="chart-grad-workstation" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" stop-color="#2BB5BC" />
                                                        <stop offset="100%" stop-color="#95C951" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Live Server Metrics Section (Merged inside workstation container) -->
                        <div class="p-4 bg-[#03090d]/40 border-t border-white/5 flex flex-col gap-3 font-mono text-[9px] text-gray-500">
                            <div class="flex items-center justify-between text-gray-400 border-b border-white/5 pb-2">
                                <span class="font-bold uppercase tracking-wider text-[8px] text-[#2BB5BC] flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                                    System Health
                                </span>
                                <span class="text-[8px] bg-white/5 px-1.5 py-0.5 rounded text-gray-400">ENV: PRODUCTION</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="bg-black/40 border border-white/5 p-2 rounded-lg flex flex-col gap-0.5">
                                    <span class="text-gray-500 text-[8px] uppercase tracking-wider">API Latency</span>
                                    <span class="text-white font-bold text-[11px]">14ms</span>
                                </div>
                                <div class="bg-black/40 border border-white/5 p-2 rounded-lg flex flex-col gap-0.5">
                                    <span class="text-gray-500 text-[8px] uppercase tracking-wider">Server Load</span>
                                    <span class="text-white font-bold text-[11px]" id="metrics-cpu-load">0.8%</span>
                                </div>
                                <div class="bg-black/40 border border-white/5 p-2 rounded-lg flex flex-col gap-0.5">
                                    <span class="text-gray-500 text-[8px] uppercase tracking-wider">Security Status</span>
                                    <span class="text-green-400 font-bold text-[11px] flex items-center gap-1">
                                        <i class="fa-solid fa-shield-halved text-[9px]"></i> SECURE
                                    </span>
                                </div>
                                <div class="bg-black/40 border border-white/5 p-2 rounded-lg flex flex-col gap-0.5">
                                    <span class="text-gray-500 text-[8px] uppercase tracking-wider">SSL Certificate</span>
                                    <span class="text-green-400 font-bold text-[11px]">ACTIVE</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Column: Interactive Step Selectors (Sits first on mobile, on right on desktop) -->
                <div class="order-first lg:order-last lg:col-span-7 flex flex-col gap-3.5">
                    
                    <!-- Step 1 -->
                    <div class="process-step-btn active group flex items-start gap-4 p-5 rounded-2xl border border-[#2BB5BC]/30 bg-white/[0.05] shadow-[0_0_20px_rgba(43,181,188,0.05)] cursor-pointer hover:bg-white/[0.04] transition-all duration-300" data-step="discovery">
                        <div class="w-10 h-10 rounded-full border-2 border-[#2BB5BC] bg-[#000d16] flex items-center justify-center shrink-0 font-mono text-[#2BB5BC] font-bold transition-all duration-300">01</div>
                        <div>
                            <h4 class="text-base font-semibold text-[#2BB5BC] transition-colors duration-300">Discovery Phase</h4>
                            <p class="text-gray-400 text-xs mt-1 leading-relaxed">We explore your goals, align with your vision, and build a data-backed roadmap to guide the project.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="process-step-btn group flex items-start gap-4 p-5 rounded-2xl border border-white/5 bg-white/[0.02] cursor-pointer hover:bg-white/[0.04] transition-all duration-300" data-step="design">
                        <div class="w-10 h-10 rounded-full border-2 border-white/10 bg-[#000d16] flex items-center justify-center shrink-0 font-mono text-gray-500 font-bold transition-all duration-300">02</div>
                        <div>
                            <h4 class="text-base font-semibold text-white transition-colors duration-300 group-hover:text-[#95C951]">Design & Prototyping</h4>
                            <p class="text-gray-400 text-xs mt-1 leading-relaxed">We craft wireframes and custom UI prototypes that prioritize UX and pixel-perfect branding.</p>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="process-step-btn group flex items-start gap-4 p-5 rounded-2xl border border-white/5 bg-white/[0.02] cursor-pointer hover:bg-white/[0.04] transition-all duration-300" data-step="engineering">
                        <div class="w-10 h-10 rounded-full border-2 border-white/10 bg-[#000d16] flex items-center justify-center shrink-0 font-mono text-gray-500 font-bold transition-all duration-300">03</div>
                        <div>
                            <h4 class="text-base font-semibold text-white transition-colors duration-300 group-hover:text-[#2BB5BC]">Development & Coding</h4>
                            <p class="text-gray-400 text-xs mt-1 leading-relaxed">Our developers build high-performance, clean liquid and API architectures optimized for speed.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="process-step-btn group flex items-start gap-4 p-5 rounded-2xl border border-white/5 bg-white/[0.02] cursor-pointer hover:bg-white/[0.04] transition-all duration-300" data-step="launch">
                        <div class="w-10 h-10 rounded-full border-2 border-white/10 bg-[#000d16] flex items-center justify-center shrink-0 font-mono text-gray-500 font-bold transition-all duration-300">04</div>
                        <div>
                            <h4 class="text-base font-semibold text-white transition-colors duration-300 group-hover:text-[#95C951]">QA & Deployment</h4>
                            <p class="text-gray-400 text-xs mt-1 leading-relaxed">Rigorous speed optimization and quality assurance testing followed by a secure, zero-downtime launch.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="process-step-btn group flex items-start gap-4 p-5 rounded-2xl border border-white/5 bg-white/[0.02] cursor-pointer hover:bg-white/[0.04] transition-all duration-300" data-step="scaling">
                        <div class="w-10 h-10 rounded-full border-2 border-white/10 bg-[#000d16] flex items-center justify-center shrink-0 font-mono text-gray-500 font-bold transition-all duration-300">05</div>
                        <div>
                            <h4 class="text-base font-semibold text-white transition-colors duration-300 group-hover:text-[#2BB5BC]">Maintenance & Scaling</h4>
                            <p class="text-gray-400 text-xs mt-1 leading-relaxed">Ongoing support, updates, and server scaling to optimize conversions and traffic growth.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Scroll Intersection Observer Animation and Interactive Workstation JS -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- 1. Interactive Step Selector Logic ---
        const steps = document.querySelectorAll('.process-step-btn');
        const widgets = document.querySelectorAll('.widget-content');
        const workstation = document.getElementById('workstation-container');

        const colors = {
            discovery: '#2BB5BC',
            design: '#95C951',
            engineering: '#2BB5BC',
            launch: '#95C951',
            scaling: '#2BB5BC'
        };

        function activateStep(stepElement) {
            // Deactivate all steps
            steps.forEach(s => {
                s.classList.remove('active', 'border-[#2BB5BC]/30', 'border-[#95C951]/30', 'bg-white/[0.05]', 'shadow-[0_0_20px_rgba(43,181,188,0.05)]', 'shadow-[0_0_20px_rgba(149,201,81,0.05)]');
                const num = s.querySelector('.w-10');
                num.classList.remove('border-[#2BB5BC]', 'border-[#95C951]', 'text-[#2BB5BC]', 'text-[#95C951]');
                num.classList.add('border-white/10', 'text-gray-500');
                
                const h4 = s.querySelector('h4');
                h4.classList.remove('text-[#2BB5BC]', 'text-[#95C951]');
                h4.classList.add('text-white');
            });

            // Activate clicked step
            const stepName = stepElement.getAttribute('data-step');
            const activeColor = colors[stepName];
            stepElement.classList.add('active', 'bg-white/[0.05]');
            if (activeColor === '#2BB5BC') {
                stepElement.classList.add('border-[#2BB5BC]/30', 'shadow-[0_0_20px_rgba(43,181,188,0.05)]');
            } else {
                stepElement.classList.add('border-[#95C951]/30', 'shadow-[0_0_20px_rgba(149,201,81,0.05)]');
            }

            const activeNum = stepElement.querySelector('.w-10');
            activeNum.classList.remove('border-white/10', 'text-gray-500');
            
            const activeH4 = stepElement.querySelector('h4');
            activeH4.classList.remove('text-white');

            if (activeColor === '#2BB5BC') {
                activeNum.classList.add('border-[#2BB5BC]', 'text-[#2BB5BC]');
                activeH4.classList.add('text-[#2BB5BC]');
            } else {
                activeNum.classList.add('border-[#95C951]', 'text-[#95C951]');
                activeH4.classList.add('text-[#95C951]');
            }

            // Change workstation glowing shadow
            workstation.style.boxShadow = `0 0 40px ${activeColor}15`;
            workstation.style.borderColor = `${activeColor}30`;

            // Switch visible widget
            widgets.forEach(w => {
                w.classList.add('hidden');
                w.classList.remove('flex');
            });
            const targetWidget = document.getElementById(`widget-${stepName}`);
            targetWidget.classList.remove('hidden');
            targetWidget.classList.add('flex');

            // Trigger widget-specific animations
            if (stepName === 'engineering') {
                runTerminalSimulation();
            } else if (stepName === 'scaling') {
                animateScalingChart();
            }
        }

        steps.forEach(step => {
            step.addEventListener('click', () => {
                stopAutoplay();
                activateStep(step);
            });
        });

        // --- Autoplay Demo Logic ---
        let autoplayInterval;
        let activeIndex = 0;
        let hasInteracted = false;

        function startAutoplay() {
            if (hasInteracted) return;
            autoplayInterval = setInterval(() => {
                activeIndex = (activeIndex + 1) % steps.length;
                
                // Stop autoplay after one full cycle
                if (activeIndex === 0) {
                    stopAutoplay();
                    return;
                }
                
                activateStep(steps[activeIndex]);
            }, 1200); // 1.2 seconds per step
        }

        function stopAutoplay() {
            hasInteracted = true;
            clearInterval(autoplayInterval);
        }

        // Trigger autoplay when section enters view
        const processSection = document.getElementById('process-section');
        const processObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startAutoplay();
                    processObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        if (processSection) processObserver.observe(processSection);

        // --- 2. Discovery Progress Bar Logic ---
        const discoveryCheck3 = document.getElementById('discovery-check-3');
        if (discoveryCheck3) {
            discoveryCheck3.addEventListener('change', (e) => {
                stopAutoplay();
                const bar = document.getElementById('discovery-progress-bar');
                const text = document.getElementById('discovery-progress-text');
                if (e.target.checked) {
                    bar.style.width = '100%';
                    text.textContent = '100%';
                } else {
                    bar.style.width = '66%';
                    text.textContent = '66%';
                }
            });
        }

        // --- 3. Design Slider Logic ---
        const designSlider = document.getElementById('design-slider');
        const designAfterScreen = document.getElementById('design-after-screen');
        if (designSlider && designAfterScreen) {
            designSlider.addEventListener('input', (e) => {
                stopAutoplay();
                designAfterScreen.style.right = `${100 - e.target.value}%`;
            });
        }

        // --- 4. Engineering Terminal Typing simulation ---
        let terminalInterval;
        function runTerminalSimulation() {
            const term = document.getElementById('engineering-terminal');
            if (!term) return;
            term.innerHTML = ''; // Clear previous
            
            const lines = [
                '<span class="text-green-500">$</span> npm run build:prod',
                '<span class="text-[#2BB5BC]">&gt;</span> bundling codebase modules...',
                '<span class="text-[#2BB5BC]">&gt;</span> compiling custom liquid files...',
                '<span class="text-yellow-500">&gt;</span> database connection initialized',
                '<span class="text-green-400">&gt;</span> build success: 0 errors, 2 warnings',
                '<span class="text-white animate-pulse">&gt;</span> live server active.'
            ];

            let currentLine = 0;
            clearInterval(terminalInterval);
            terminalInterval = setInterval(() => {
                if (currentLine < lines.length) {
                    const div = document.createElement('div');
                    div.innerHTML = lines[currentLine];
                    term.appendChild(div);
                    term.scrollTop = term.scrollHeight;
                    currentLine++;
                } else {
                    clearInterval(terminalInterval);
                }
            }, 120);
        }

        // --- 5. Launch Button Deploy simulation ---
        const deployBtn = document.getElementById('launch-deploy-btn');
        const launchStatus = document.getElementById('launch-status');
        const launchStatusBar = document.getElementById('launch-status-bar');
        const launchStatusText = document.getElementById('launch-status-text');
        const launchStatusPercent = document.getElementById('launch-status-percent');

        if (deployBtn) {
            deployBtn.addEventListener('click', () => {
                stopAutoplay();
                deployBtn.classList.add('hidden');
                launchStatus.classList.remove('hidden');
                launchStatus.classList.add('flex', 'flex-col');
                
                let percent = 0;
                const statusTexts = [
                    'Uploading assets...',
                    'Compiling scripts...',
                    'Syncing databases...',
                    'Testing load times...',
                    'Launch successful!'
                ];
                
                const interval = setInterval(() => {
                    percent += 4;
                    launchStatusBar.style.width = `${percent}%`;
                    launchStatusPercent.textContent = `${percent}%`;
                    
                    if (percent < 25) {
                        launchStatusText.textContent = statusTexts[0];
                    } else if (percent < 50) {
                        launchStatusText.textContent = statusTexts[1];
                    } else if (percent < 75) {
                        launchStatusText.textContent = statusTexts[2];
                    } else if (percent < 98) {
                        launchStatusText.textContent = statusTexts[3];
                    } else {
                        launchStatusText.textContent = statusTexts[4];
                        clearInterval(interval);
                        
                        launchStatusText.classList.add('text-green-400', 'font-bold');
                        setTimeout(() => {
                            deployBtn.classList.remove('hidden');
                            launchStatus.classList.add('hidden');
                            launchStatus.classList.remove('flex', 'flex-col');
                            launchStatusBar.style.width = '0%';
                            launchStatusPercent.textContent = '0%';
                            launchStatusText.classList.remove('text-green-400', 'font-bold');
                        }, 4000);
                    }
                }, 80);
            });
        }

        // --- 6. Scaling SVG path animation ---
        function animateScalingChart() {
            const path = document.getElementById('scaling-chart-path');
            if (!path) return;
            path.style.strokeDashoffset = '200';
            setTimeout(() => {
                path.style.strokeDashoffset = '0';
            }, 100);
        }

        // --- 7. System Metrics CPU fluctuation logic ---
        const cpuText = document.getElementById('metrics-cpu-load');
        if (cpuText) {
            setInterval(() => {
                const val = (Math.random() * 2 + 0.5).toFixed(1);
                cpuText.textContent = `${val}%`;
            }, 2000);
        }
    });
    </script>
    <?php
    // Define custom metadata for case studies carousel
    $case_study_details = [
        14 => [ // QUEST Website Redesign
            'tags' => ['University Portal', 'UI/UX Redesign', 'Database Sync', 'Responsive'],
            'metrics' => [
                'Load Time Reduced by' => '72%',
                'Student Portal Engagement' => '45%',
                'Mobile Traffic Increase' => '38%',
                'Database Query Load' => '-60%'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "Qonkar transformed our legacy platform into a blazing-fast, modern portal. The students and faculty love the new responsive layout and smooth performance.",
                'client' => "QUEST IT Committee"
            ]
        ],
        15 => [ // ERP Solutions
            'tags' => ['Enterprise ERP', 'PHP / Laravel', 'Inventory Sync', 'Cloud Analytics'],
            'metrics' => [
                'Operational Costs' => '-24%',
                'Order Processing Speed' => '40%',
                'Inventory Accuracy' => '99%',
                'Report Generation Time' => '-90%'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "This custom ERP system unified our fragmented operations. The automation features have saved our team hundreds of hours each week.",
                'client' => "Director of Operations"
            ]
        ],
        1 => [ // The Centara
            'tags' => ['Hospitality Web', 'Booking Engine', 'Tailwind CSS', 'UI/UX Design'],
            'metrics' => [
                'Direct Bookings' => '42%',
                'Mobile Conversion Rate' => '29%',
                'Bounce Rate Reduced' => '35%',
                'Site Load Speed' => '1.2s'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "A luxury hospitality brand deserves a luxury web experience, and Qonkar delivered exactly that. Our booking system is now seamless.",
                'client' => "Centara Resorts Team"
            ]
        ],
        5 => [ // CAINTE
            'tags' => ['Shopify Plus', 'Conversion Rate', 'Custom Checkout', 'Speed Optimization'],
            'metrics' => [
                'Conversion Rate' => '34%',
                'Mobile Checkout Speed' => '50%',
                'Revenue Growth' => '28%',
                'Page Load Time' => '0.8s'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "The new custom checkout flow and speed optimization resulted in a direct boost in sales. Qonkar is our go-to ecommerce development partner.",
                'client' => "CAINTE E-Commerce Team"
            ]
        ],
        16 => [ // CRM Solutions
            'tags' => ['Custom CRM', 'React / Node.js', 'Sales Pipeline', 'API Integrations'],
            'metrics' => [
                'Lead Response Time' => '-65%',
                'Sales Team Productivity' => '35%',
                'Customer Retention' => '22%',
                'Closed Deals' => '18%'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "Their custom CRM solution is fast, intuitive, and seamlessly integrated with our sales stack. Highly recommended!",
                'client' => "Head of Sales"
            ]
        ],
        18 => [ // Digital Product (Saas)
            'tags' => ['SaaS Development', 'Cloud Multi-Tenant', 'Payment Gateway', 'API Sync'],
            'metrics' => [
                'User Onboarding Speed' => '55%',
                'Server Uptime' => '99.99%',
                'Active Users' => '10K+',
                'Maintenance Overhead' => '-40%'
            ],
            'testimonial' => [
                'stars' => 5,
                'quote' => "Qonkar's engineering quality is top-notch. They built our SaaS product to scale from day one, with clean code and robust infrastructure.",
                'client' => "SaaS Co-Founder & CTO"
            ]
        ]
    ];

    $fallback_details = [
        'tags' => ['Custom Tech', 'UI/UX Design', 'Speed Optimization', 'High Conversion'],
        'metrics' => [
            'Revenue Growth' => '18%',
            'Page Speed Score' => '98/100',
            'Bounce Rate' => '-15%',
            'Mobile Usability' => '99%'
        ],
        'testimonial' => [
            'stars' => 5,
            'quote' => "Working with Qonkar has been an absolute pleasure. They took our custom design vision and made it a reality with exceptional speed.",
            'client' => "Founder & CEO"
        ]
    ];

    $case_studies_data = [];
    $query = "SELECT * FROM case_studies WHERE status = 'active' ORDER BY created_at DESC";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = intval($row['id']);
            $mockup = !empty($row['mockup_image']) ? $row['mockup_image'] : '/images/case-studies/default_mockup.webp';
            
            $details = isset($case_study_details[$id]) ? $case_study_details[$id] : $fallback_details;
            
            $case_studies_data[] = [
                'id' => $id,
                'brand_name' => htmlspecialchars($row['brand_name']),
                'short_description' => htmlspecialchars($row['short_description']),
                'mockup_image' => $mockup,
                'link' => !empty($row['link_of_case_study']) ? $row['link_of_case_study'] : '#',
                'tags' => $details['tags'],
                'metrics' => $details['metrics'],
                'testimonial' => $details['testimonial']
            ];
        }
    }
    ?>

    <script>
    const caseStudies = <?php echo json_encode($case_studies_data); ?>;
    </script>

    <style>
    .game-cursor {
        cursor: grab !important;
    }
    .game-cursor a, .game-cursor button, .game-cursor [role="button"], .game-cursor #cs-left-card-link {
        cursor: pointer !important;
    }
    </style>

<div class="bg-[#000d16] w-full">
    <section class="w-full bg-[#ffffff] pt-6 pb-2 relative group/section game-cursor">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header: Title on Left, Navigation arrows on Right -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-3">
                <div class="max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent leading-tight tracking-tight">
                        Case Studies
                    </h2>
                </div>
                
                <!-- Sleek Left/Right Carousel navigation arrows in a styled container box -->
                <div class="flex items-center bg-slate-100 border border-slate-200/60 p-1 rounded-full gap-1 shadow-[0_2px_10px_rgba(0,13,22,0.03)] self-end">
                    <button id="case-study-prev" class="w-9 h-9 rounded-full flex items-center justify-center text-white bg-[#2BB5BC] hover:bg-[#000d16] active:scale-95 transition-all shadow-[0_2px_6px_rgba(43,181,188,0.2)]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 -960 960 960" width="18" fill="currentColor"><path d="m313-440 224 224-57 57-320-320 320-320 57 57-224 224h487v80H313Z"/></svg>
                    </button>
                    <button id="case-study-next" class="w-9 h-9 rounded-full flex items-center justify-center text-white bg-[#2BB5BC] hover:bg-[#000d16] active:scale-95 transition-all shadow-[0_2px_6px_rgba(43,181,188,0.2)]">
                        <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 -960 960 960" width="18" fill="currentColor"><path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/></svg>
                    </button>
                </div>
            </div>

            <!-- Carousel Slide Wrapper with hidden overflow -->
            <div class="overflow-hidden w-full rounded-3xl">
                <!-- Slider Track -->
                <div id="case-study-slider-track" class="flex transition-transform duration-500 ease-out" style="width: 100%;">
                    <?php foreach ($case_studies_data as $index => $study): ?>
                        <div class="w-full flex-shrink-0 grid grid-cols-1 lg:grid-cols-12 gap-4 items-stretch px-1" style="width: 100%;">
                            <!-- Left Column: Large rounded container with mockup -->
                            <a href="<?php echo $study['link'] !== '#' ? $study['link'] : '#'; ?>" 
                               target="_blank" 
                               class="lg:col-span-5 flex items-center justify-center rounded-3xl border border-white/10 bg-[#000d16] p-2 relative overflow-hidden shadow-[0_8px_30px_rgba(0,13,22,0.3)] min-h-[240px] sm:min-h-[300px] lg:min-h-0 group transition-all duration-500 hover:border-[#2BB5BC]/40 hover:shadow-[0_15px_45px_rgba(43,181,188,0.18)] cursor-pointer <?php echo $study['link'] === '#' ? 'pointer-events-none' : ''; ?>">
                                
                                <div class="absolute -top-24 -left-24 w-48 h-48 rounded-full bg-[#2BB5BC]/10 blur-[100px] pointer-events-none transition-all duration-500 group-hover:bg-[#2BB5BC]/20 group-hover:scale-125"></div>
                                <div class="absolute -bottom-24 -right-24 w-48 h-48 rounded-full bg-[#95C951]/10 blur-[100px] pointer-events-none transition-all duration-500 group-hover:bg-[#95C951]/20 group-hover:scale-125"></div>
                                
                                <div class="w-full h-full flex items-center justify-center relative z-10 py-2 overflow-hidden rounded-2xl">
                                    <div class="w-full h-full flex items-center justify-center transition-transform duration-700 ease-out">
                                        <img src="<?php echo $study['mockup_image']; ?>" alt="<?php echo $study['brand_name']; ?> Mockup" class="w-full max-w-[98%] sm:max-w-[95%] lg:max-w-[102%] h-auto object-contain drop-shadow-[0_15px_30px_rgba(43,181,188,0.15)] select-none rounded-[10px] transition-all duration-700 ease-out group-hover/section:scale-[1.06] group-hover/section:translate-y-[-6px] group-hover/section:drop-shadow-[0_25px_50px_rgba(43,181,188,0.35)]">
                                    </div>
                                    
                                    <?php if ($study['link'] !== '#'): ?>
                                        <div class="absolute inset-0 bg-black/15 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center z-20 rounded-2xl">
                                            <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white shadow-[0_0_20px_rgba(43,181,188,0.3)] transform scale-75 group-hover:scale-100 transition-all duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28" fill="currentColor"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h240v240h-80v-144L388-332Z"/></svg>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>

                            <!-- Right Column: Split into 3 Cards -->
                            <div class="lg:col-span-7 flex flex-col gap-3">
                                <!-- Top Card: Overview -->
                                <div class="bg-white border border-slate-200 rounded-3xl p-4 md:p-5 relative hover:border-[#2BB5BC]/40 transition duration-300 shadow-[0_8px_30px_rgba(0,13,22,0.05)] group/card">
                                    <?php if ($study['link'] !== '#'): ?>
                                        <a href="<?php echo $study['link']; ?>" target="_blank" class="absolute top-5 right-5 text-slate-400 group-hover/section:text-[#2BB5BC] hover:text-[#2BB5BC] transition-colors duration-300 z-30">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h240v240h-80v-144L388-332Z"/></svg>
                                        </a>
                                    <?php endif; ?>
                                    
                                    <h3 class="text-2xl md:text-3xl font-bold text-[#000d16] tracking-tight mb-1.5"><?php echo $study['brand_name']; ?></h3>
                                    <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed mb-2.5"><?php echo $study['short_description']; ?></p>
                                    
                                    <!-- Technology Tag Pills -->
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($study['tags'] as $tag): ?>
                                            <span class="px-3 py-1 bg-[#2BB5BC]/10 border border-[#2BB5BC]/20 rounded-full text-xs font-semibold text-[#2BB5BC] hover:bg-[#2BB5BC] hover:text-white transition"><?php echo htmlspecialchars($tag); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Bottom Two Cards Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <!-- Bottom Left Card: Metrics & Analytics -->
                                    <div class="bg-white border border-slate-200 rounded-3xl p-4 hover:border-[#2BB5BC]/40 transition duration-300 shadow-[0_8px_30px_rgba(0,13,22,0.05)] flex flex-col justify-between gap-2">
                                        <div class="flex items-center justify-between">
                                            <h4 class="text-xs text-slate-500 uppercase tracking-widest font-semibold">Growth Analytics</h4>
                                            <span class="text-[10px] text-[#2BB5BC] px-2 py-0.5 bg-[#2BB5BC]/10 rounded-full border border-[#2BB5BC]/20">Live Sync</span>
                                        </div>
                                        
                                        <!-- Glowing Mini Line Chart -->
                                        <div class="relative w-full h-[68px] bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden p-2 flex items-center justify-center">
                                            <div class="absolute inset-0 flex flex-col justify-between p-2.5 opacity-30 pointer-events-none">
                                                <div class="border-b border-dashed border-slate-200 w-full h-0"></div>
                                                <div class="border-b border-dashed border-slate-200 w-full h-0"></div>
                                                <div class="border-b border-dashed border-slate-200 w-full h-0"></div>
                                            </div>
                                            <!-- Chart Area -->
                                            <svg class="w-full h-full overflow-visible cs-chart-svg" viewBox="0 0 300 80" data-metrics='<?php echo json_encode($study['metrics']); ?>'>
                                                <defs>
                                                    <linearGradient id="chart-grad-<?php echo $study['id']; ?>" x1="0" y1="0" x2="1" y2="0">
                                                        <stop offset="0%" stop-color="#2BB5BC" />
                                                        <stop offset="100%" stop-color="#95C951" />
                                                    </linearGradient>
                                                    <filter id="glow-<?php echo $study['id']; ?>" x="-20%" y="-20%" width="140%" height="140%">
                                                        <feGaussianBlur stdDeviation="3" result="blur" />
                                                        <feMerge>
                                                            <feMergeNode in="blur" />
                                                            <feMergeNode in="SourceGraphic" />
                                                        </feMerge>
                                                    </filter>
                                                </defs>
                                                <path class="cs-chart-area" d="" fill="url(#chart-grad-<?php echo $study['id']; ?>)" fill-opacity="0.05"></path>
                                                <path class="cs-chart-path" d="" fill="none" stroke="url(#chart-grad-<?php echo $study['id']; ?>)" stroke-width="3" stroke-linecap="round" filter="url(#glow-<?php echo $study['id']; ?>)"></path>
                                                <circle class="cs-chart-dot" cx="280" cy="20" r="4" fill="#95C951" filter="url(#glow-<?php echo $study['id']; ?>)"></circle>
                                            </svg>
                                        </div>
                                        
                                        <div class="space-y-1.5">
                                            <?php foreach ($study['metrics'] as $label => $value): 
                                                $isNegative = strpos($value, '-') === 0;
                                                $arrowIcon = $isNegative ? '↓' : '↑';
                                                $displayValue = $isNegative ? substr($value, 1) : $value;
                                            ?>
                                                <div class="flex items-center justify-between text-xs sm:text-sm py-1.5 px-3 bg-slate-50 border border-slate-100 rounded-xl shadow-[0_2px_8px_rgba(0,13,22,0.02)]">
                                                    <span class="text-[#000d16] font-medium"><?php echo htmlspecialchars($label); ?></span>
                                                    <span class="text-[#95C951] font-bold flex items-center gap-1">
                                                        <span class="text-xs font-bold"><?php echo $arrowIcon; ?></span>
                                                        <span><?php echo htmlspecialchars($displayValue); ?></span>
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <!-- Bottom Right Card: Testimonial -->
                                    <div class="bg-gradient-to-br from-[#2BB5BC] to-[#95C951] rounded-3xl p-4 shadow-[0_8px_30px_rgba(43,181,188,0.15)] flex flex-col justify-between">
                                        <!-- Rating Stars -->
                                        <div class="flex gap-1 text-white mb-1">
                                            <?php for ($s=0; $s<$study['testimonial']['stars']; $s++): ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" /></svg>
                                            <?php endfor; ?>
                                        </div>
                                        
                                        <!-- Client Quote -->
                                        <p class="text-sm md:text-[15px] text-white font-semibold italic leading-relaxed my-2">
                                            “<?php echo htmlspecialchars($study['testimonial']['quote']); ?>”
                                        </p>
                                        
                                        <!-- Client Name -->
                                        <div class="border-t border-white/20 pt-2">
                                            <p class="text-[9px] md:text-[10px] text-white font-bold tracking-widest uppercase">
                                                <?php 
                                                    $client_text = $study['testimonial']['client'] === "Founder & CEO" ? $study['brand_name'] . " Team" : $study['testimonial']['client'];
                                                    echo htmlspecialchars($client_text);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- View All Link -->
            <a href="/portfolio"
                class="mt-4 w-fit py-2.5 px-6 rounded-full bg-[#000d16] text-white font-semibold flex items-center justify-center mx-auto gap-2 cursor-pointer hover:bg-[#01a0d8] transition shadow-[0_4px_20px_rgba(0,13,22,0.15)]">
                View More Case Studies
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
</div>

<div class="bg-[#080808] w-full">
    <!-- New Section: Building Brands Worldwide -->
    <section class="w-full bg-[#080808] text-white pt-20 pb-0 relative overflow-hidden">
        <!-- Dotted Map Background Overlay (Seamless & Proportional) -->
        <div class="absolute inset-0 z-0 opacity-80 pointer-events-none mix-blend-screen bg-no-repeat bg-right bg-cover md:bg-[length:auto_100%]" 
             style="background-image: url('/images/orange_map_clean.png'); background-position: right center;"></div>
        
        <!-- Subtle Ambient Glows matching Orange/Dark Theme -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 rounded-full bg-[var(--primary-color)] opacity-[0.05] blur-[120px] pointer-events-none animate-blob"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pb-20">
            <!-- Left Info Column -->
            <div class="flex flex-col items-start text-left gap-6 max-w-xl w-full md:w-[50%]">
                <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-[var(--primary-color)] leading-tight tracking-tight">
                    Building Brands <br>
                    Worldwide
                </h2>
                <p class="text-[#b5b5b5] font-light text-sm sm:text-base md:text-lg leading-relaxed max-w-lg">
                    We offer 360° eCommerce solutions that help brands launch, grow, and scale online. Our team works with businesses globally to create and improve digital commerce experiences that deliver measurable results.
                </p>
                <a href="/about-us" class="inline-flex items-center gap-2 px-9 py-4 rounded-full font-semibold text-white bg-[var(--secondary-color)] transition hover:bg-white hover:text-[var(--secondary-color)] text-sm md:text-base shadow-lg hover:scale-105 duration-300">
                    About Us
                </a>
            </div>
        </div>

        <!-- Bottom Statistics Bar -->
        <div id="stats-section" class="w-full bg-gradient-to-b from-[#111111] to-[#080808] border-t border-white/5 rounded-t-2xl md:rounded-t-[20px] py-5 md:py-6 px-4 md:px-8 shadow-[0_-15px_40px_rgba(0,0,0,0.5)] relative z-10">
            <div class="max-w-4xl mx-auto relative">
                <div class="flex items-center justify-between w-full">
                    <!-- Stat 1 -->
                    <div class="flex flex-col items-center text-center flex-1">
                        <span class="stat-counter text-xl sm:text-2xl md:text-3xl font-bold text-[var(--primary-color)]" data-target="200" data-suffix="+">0+</span>
                        <span class="text-[9px] sm:text-xs text-gray-400 font-light tracking-wide uppercase mt-0.5">Employees</span>
                    </div>
                    <!-- Divider -->
                    <div class="w-[1px] h-8 bg-white/10 self-center"></div>
                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center text-center flex-1">
                        <span class="stat-counter text-xl sm:text-2xl md:text-3xl font-bold text-[var(--primary-color)]" data-target="5" data-suffix="">0</span>
                        <span class="text-[9px] sm:text-xs text-gray-400 font-light tracking-wide uppercase mt-0.5">Locations</span>
                    </div>
                    <!-- Divider -->
                    <div class="w-[1px] h-8 bg-white/10 self-center"></div>
                    <!-- Stat 3 -->
                    <div class="flex flex-col items-center text-center flex-1">
                        <span class="stat-counter text-xl sm:text-2xl md:text-3xl font-bold text-[var(--primary-color)]" data-target="15" data-suffix="+">0+</span>
                        <span class="text-[9px] sm:text-xs text-gray-400 font-light tracking-wide uppercase mt-0.5">Years</span>
                    </div>
                    <!-- Divider -->
                    <div class="w-[1px] h-8 bg-white/10 self-center"></div>
                    <!-- Stat 4 -->
                    <div class="flex flex-col items-center text-center flex-1">
                        <span class="stat-counter text-xl sm:text-2xl md:text-3xl font-bold text-[var(--primary-color)]" data-target="1000" data-suffix="+">0+</span>
                        <span class="text-[9px] sm:text-xs text-gray-400 font-light tracking-wide uppercase mt-0.5">Customers</span>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const counters = document.querySelectorAll(".stat-counter");
                const observerOptions = {
                    root: null,
                    rootMargin: "0px",
                    threshold: 0.5
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const target = entry.target;
                            const targetNumber = parseInt(target.getAttribute("data-target"));
                            const suffix = target.getAttribute("data-suffix") || "";
                            let current = 0;
                            // Ensure smaller numbers don't take forever but large numbers zip by quickly
                            const duration = 2000; // ms
                            const stepTime = Math.abs(Math.floor(duration / targetNumber));
                            const increment = Math.max(1, Math.ceil(targetNumber / (duration / 16))); // assuming 60fps
                            
                            const updateCounter = () => {
                                current += increment;
                                if (current < targetNumber) {
                                    target.innerText = Math.ceil(current).toLocaleString() + suffix;
                                    requestAnimationFrame(updateCounter);
                                } else {
                                    target.innerText = targetNumber.toLocaleString() + suffix;
                                }
                            };
                            
                            requestAnimationFrame(updateCounter);
                            observer.unobserve(target); // Only animate once
                        }
                    });
                }, observerOptions);

                counters.forEach(counter => {
                    observer.observe(counter);
                });
            });
        </script>
    </section>
</div>

<div class="bg-black w-full">
    <section
        class="bg-black py-12 text-white relative bg-no-repeat bg-[length:50%] bg-[url('images/background_curve.svg')] bg-[center_top_80px]">
        <div class=" mx-auto px-4 sm:px-6 lg:px-0 text-center relative">

            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp; TESTIMONIALS</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                <b>Client Testimonials & Success Stories</b>
            </h2>

            <p class="text-white font-light max-w-2xl mx-auto mb-12">
                Discover why 100+ businesses trust Qonkar for top-tier Software and Digital Marketing solutions.
            </p>
        </div>
      <!-- Row 1-->
        <div class="relative overflow-x-auto sm:overflow-hidden sm:block w-full">
            <!-- Left and right fade shadows (only show on sm and above) -->
            <div class="hidden sm:flex pointer-events-none absolute inset-0 z-50">
                <div class="w-16 h-full bg-gradient-to-r from-[#080808] to-transparent"></div>
                <div class="flex-1"></div>
                <div class="w-16 h-full bg-gradient-to-l from-[#080808] to-transparent"></div>
            </div>

            <!-- Cards container -->
            <div class="flex gap-6 animate-infinite-scroll snap-x sm:snap-none ">
                <!-- Testimonial Card 1 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Thank you so much for all your help! We will come back to you again for more help."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/lepetitcrystals.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Lepetit Crystals</h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"The best I’ve ever worked with on this platform."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/ramonjael.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ramon Jael</h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Perfect and fast execution. Highly recommended!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/mthrane11.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Methew</h4>
                            <p class="text-xs text-gray-400 leading-tight">Denmark</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 4 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Muhammad did an outstanding job optimizing our website’s speed. He was professional, fast, and efficient, and now the site loads perfectly. ..... Thank you Muhammad🫶"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/amirmessari1.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Amir Messari</h4>
                            <p class="text-xs text-gray-400 leading-tight">Israel</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 5 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>He understands my requirements and is working great on them. He always fixes any issues I have.Thank you."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/jadecommerce.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Jade</h4>
                            <p class="text-xs text-gray-400 leading-tight">Thailand</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 6 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Very friendly developer , its a pleasure working with mohammed :-)"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/jj1982.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">JJ</h4>
                            <p class="text-xs text-gray-400 leading-tight">Germany</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 7 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"So happy with Owais delivery, he exceeded the expectations. The price is good as well so we will ofc keep working with him!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/chimihome.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Chimi Home</h4>
                            <p class="text-xs text-gray-400 leading-tight">Sweden</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 8 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"I had the pleasure of working with Muhammad Owais on a critical Shopify customization project, and I couldn't be more impressed with his skills and professionalism."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/rubyrose141.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ruby Rose</h4>
                            <p class="text-xs text-gray-400 leading-tight">Australia</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 9 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Great will work. Again"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/ozzielcamargo.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ozziel Camargo </h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 10 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Have made many services with Muhammad, no words, and price is really fair. Will continue with him in longer term."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/manuelsgr887.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Manuelsgr</h4>
                            <p class="text-xs text-gray-400 leading-tight">Portugal</p>
                        </div>
                    </div>
                </div>

                <!--Duplicate Above Card for Inifinite Scroll -->
                <!-- Testimonial Card 1 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Thank you so much for all your help! We will come back to you again for more help."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/lepetitcrystals.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Lepetit Crystals</h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"The best I’ve ever worked with on this platform."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/ramonjael.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ramon Jael</h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Perfect and fast execution. Highly recommended!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/mthrane11.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Methew</h4>
                            <p class="text-xs text-gray-400 leading-tight">Denmark</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 4 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Muhammad did an outstanding job optimizing our website’s speed. He was professional, fast, and efficient, and now the site loads perfectly. ..... Thank you Muhammad🫶"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/amirmessari1.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Amir Messari</h4>
                            <p class="text-xs text-gray-400 leading-tight">Israel</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 5 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>He understands my requirements and is working great on them. He always fixes any issues I have.Thank you."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/jadecommerce.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Jade</h4>
                            <p class="text-xs text-gray-400 leading-tight">Thailand</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 6 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Very friendly developer , its a pleasure working with mohammed :-)"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/jj1982.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">JJ</h4>
                            <p class="text-xs text-gray-400 leading-tight">Germany</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 7 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"So happy with Owais delivery, he exceeded the expectations. The price is good as well so we will ofc keep working with him!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/chimihome.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Chimi Home</h4>
                            <p class="text-xs text-gray-400 leading-tight">Sweden</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 8 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"I had the pleasure of working with Muhammad Owais on a critical Shopify customization project, and I couldn't be more impressed with his skills and professionalism."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/rubyrose141.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ruby Rose</h4>
                            <p class="text-xs text-gray-400 leading-tight">Australia</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 9 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Great will work. Again"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/ozzielcamargo.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Ozziel Camargo </h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 10 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Have made many services with Muhammad, no words, and price is really fair. Will continue with him in longer term."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/manuelsgr887.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Manuelsgr</h4>
                            <p class="text-xs text-gray-400 leading-tight">Portugal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- animate-infinite-scroll-reverse -->
        <!-- Row 2-->
        <div class="hidden sm:block relative overflow-hidden mt-10">
            <div
                class="absolute top-0 left-0 h-full w-16 bg-gradient-to-r from-[#0D0D0D] to-transparent z-10 pointer-events-none">
            </div>
            <div
                class="absolute top-0 right-0 h-full w-16 bg-gradient-to-l from-[#0D0D0D] to-transparent z-10 pointer-events-none">
            </div>

            <div class="flex gap-6 animate-infinite-scroll-reverse">
                <!-- Testimonial Card 1 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"The work was delivered fast 😃"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/bs0141.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">BS</h4>
                            <p class="text-xs text-gray-400 leading-tight">Netherlands</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"This is my second order and he always go above and beyond with his coding skills. He is very talented in his work and can create exactly what we want when it comes to Shopify theme coding. Highly recommend!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/tobias_persson1.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Tobais</h4>
                            <p class="text-xs text-gray-400 leading-tight">Sweden</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Awesome service!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/arlindhalili.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Arlindh Ali</h4>
                            <p class="text-xs text-gray-400 leading-tight">United Kingdom</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 4 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Highly Recommended. Immediate understanding of the issue. Communicated was very quick and the issue was resolved in minutes. This is my second time dealing. Will be back soon. Thanks"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/salesscreenshel.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Sales Screen Shel</h4>
                            <p class="text-xs text-gray-400 leading-tight">Ireland</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 5 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Really good! He did everything that I asked for in a short time, very polite and quick to respond!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/maysazuber.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">May Sazuber</h4>
                            <p class="text-xs text-gray-400 leading-tight">Portugal</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 6 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Very friendly developer , its a pleasure working with mohammed :-)"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/thedetailist.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">JJ</h4>
                            <p class="text-xs text-gray-400 leading-tight">Germany</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 7 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"So happy with Owais delivery, he exceeded the expectations. The price is good as well so we will ofc keep working with him!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/kenjo_lifestyle.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Kenjo lifestyle</h4>
                            <p class="text-xs text-gray-400 leading-tight">Netherlands</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 8 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Muhammad has delivered as per my expectations and was supportive with changes to enhance the deliverables. He was very transparent with the impact ...... The delivery was faster than promised timeline."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/artisanscenter.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Artisanscenter</h4>
                            <p class="text-xs text-gray-400 leading-tight">Kuwait</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 9 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Amazing work! Will be my go to for any future Shopify code needs. Great work and very easy process!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/aky706.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Harrisonbarnica </h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 10 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"One of the best people I worked with, super patient l, very cooperative, puts extra effort to resolve unexpected constraints. I really recommend .... All the best Muhammad"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/idukan.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Idukan</h4>
                            <p class="text-xs text-gray-400 leading-tight">UAE</p>
                        </div>
                    </div>
                </div>

                <!--Duplicate Above Card for Inifinite Scroll -->
                <!-- Testimonial Card 1 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"The work was delivered fast 😃"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/bs0141.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">BS</h4>
                            <p class="text-xs text-gray-400 leading-tight">Netherlands</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"This is my second order and he always go above and beyond with his coding skills. He is very talented in his work and can create exactly what we want when it comes to Shopify theme coding. Highly recommend!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/tobias_persson1.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Tobais</h4>
                            <p class="text-xs text-gray-400 leading-tight">Sweden</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Awesome service!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/arlindhalili.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Arlindh Ali</h4>
                            <p class="text-xs text-gray-400 leading-tight">United Kingdom</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 4 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Highly Recommended. Immediate understanding of the issue. Communicated was very quick and the issue was resolved in minutes. This is my second time dealing. Will be back soon. Thanks"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/salesscreenshel.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Sales Screen Shel</h4>
                            <p class="text-xs text-gray-400 leading-tight">Ireland</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 5 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Really good! He did everything that I asked for in a short time, very polite and quick to respond!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/maysazuber.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">May Sazuber</h4>
                            <p class="text-xs text-gray-400 leading-tight">Portugal</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 6 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Very friendly developer , its a pleasure working with mohammed :-)"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/thedetailist.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">JJ</h4>
                            <p class="text-xs text-gray-400 leading-tight">Germany</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 7 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-sm leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"So happy with Owais delivery, he exceeded the expectations. The price is good as well so we will ofc keep working with him!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/kenjo_lifestyle.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Kenjo lifestyle</h4>
                            <p class="text-xs text-gray-400 leading-tight">Netherlands</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 8 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Muhammad has delivered as per my expectations and was supportive with changes to enhance the deliverables. He was very transparent with the impact ...... The delivery was faster than promised timeline."</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/artisanscenter.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Artisanscenter</h4>
                            <p class="text-xs text-gray-400 leading-tight">Kuwait</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 9 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-sm md:text-base leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"Amazing work! Will be my go to for any future Shopify code needs. Great work and very easy process!"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/aky706.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Harrisonbarnica </h4>
                            <p class="text-xs text-gray-400 leading-tight">United States</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Card 10 -->
                <div class="flex-shrink-0 w-[300px] sm:w-[45vw] md:w-[32vw] lg:w-[25vw] xl:w-[22vw] rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50  bg-white/1 backdrop-blur-[100px] p-8 shadow-lg background-backdrop-card flex flex-col items-start justify-between h-[300px] snap-center">
                    <!-- Quotation Mark -->
                    <div class="text-7xl font-black mb-0">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary-color)] to-[var(--tertiary-color)] ">
                            “
                        </span>
                    </div>
                    <!-- User Review -->
                    <p class="text-xs md:text-xs leading-relaxed break-words font-light mt-1 mb-2">
                        <i>"One of the best people I worked with, super patient l, very cooperative, puts extra effort to resolve unexpected constraints. I really recommend .... All the best Muhammad"</i>
                    </p>
                    <!-- User Info -->
                    <div class="flex items-center gap-2 mt-auto">
                        <img src="images/Clients_Review/idukan.webp" alt="User" class="w-12 h-12 rounded-full object-cover">
                        <div class="flex flex-col">
                            <h4 class="font-semibold text-sm md:text-base leading-tight">Idukan</h4>
                            <p class="text-xs text-gray-400 leading-tight">UAE</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </section>
</div>

    <section class="w-full flex justify-center items-center py-10 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-6 md:p-12 text-center text-white rounded-[30px] border-[4px] " style="
      border: 2px solid rgba(56, 228, 174, 0.53);
      background: linear-gradient(90deg, rgba(56, 228, 174, 0.61) 0%, rgba(7, 152, 173, 0.75) 100%),
                  linear-gradient(0deg, rgba(0, 0, 0, 0.58) 0%, rgba(0, 0, 0, 0.58) 100%),
                  url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d') lightgray 0px -374.163px / 100% 280.523% no-repeat;
      ">
            <h1 class="text-2xl sm:text-3xl md:text-3xl font-light mb-3">
                Ready to <strong>Build</strong> Your Next Big<strong> Digital Product</strong>?
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 text-white font-light">
                Stop guessing and start growing. We provide Custom Software, Web Development, and ROI-Driven Marketing to scale your business faster.
            </p>

            <a href="/contact-us"
                class="inline-flex rounded-full items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-white text-[var(--secondary-color)] font-semibold border border-white transition-all duration-300 hover:bg-[var(--secondary-color)] hover:text-white">
                Get Your Free Proposal
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

   <section class="py-8 bg-[var(--body-bg)] text-white mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto  text-center">

            <!-- Badge -->
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp; WHY CHOOSE US?</p>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Why <b>Qonkar?</b>
            </h2>

            <!-- Paragraph -->
            <p class=" text-white font-light max-w-2xl mx-auto mb-10">
                We’re not just another agency, we’re your growth partner. Our team combines strategic thinking with
                data-driven execution to deliver real, measurable impact.
            </p>

            <!-- Cards Wrapper -->
            <div class="relative">
                <!-- Desktop/Tablet Grid -->


                <div class="hidden md:grid grid-cols-2 lg:grid-cols-3 gap-6">
                    <!--  Card  1-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/strategy.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-200 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">100% Results-driven Strategy</h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            We focus on ROI driven digital marketing and performance metrics. Every campaign is built with SEO management services and specific business goals in mind to ensure your marketing budget delivers maximum growth.
                        </p>
                    </div>
                    <!--  Card  2-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/repoting.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">Transparent Communication & Reporting</h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            No hidden metrics or vague updates. You’ll receive clear, honest reporting and open
                            communication at every stage of your project.
                        </p>
                    </div>
                    <!--  Card  3-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/account_manager.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">Dedicated Account Managers</h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            Get personal attention with a dedicated expert who understands your brand, goals, and
                            campaign history with
                            always just one message away.
                        </p>
                    </div>

                    <!--  Card  4-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/customer_solution.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">Customized Solutions </h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            Your business is unique with and so is our approach. We craft tailored strategies that align
                            with your
                            industry, audience, and objectives.
                        </p>
                    </div>
                    <!--  Card  5-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/track_record.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">Proven Track Record Across Multiple Niches</h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            From fashion and food to SaaS and real estate, we’ve driven success for brands across
                            diverse industries
                            and we’re ready to do the same for you.
                        </p>
                    </div>
                    <!--  Card  6-->
                    <div
                        class="rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px] p-6 text-left shadow-lg background-backdrop-card">
                        <div class="flex justify-between items-start">
                            <!-- Top-left: gradient rounded square -->
                            <span class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                <span
                                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                    <img src="images/icons/Bolt.svg" alt="">
                                </span>
                            </span>

                            <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                            <!-- <button aria-label="next"
                                class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out  hover:text-white">
                                <img src="images/icons/arrow.svg" width="18" alt="">
                            </button> -->
                        </div>

                        <h3 class="mt-4 text-lg font-light">Fast, Agile & Always Evolving</h3>
                        <div
                            class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                        </div>

                        <p class="text-sm text-white-300 font-light">
                            The digital world moves fast, and so do we. Our agile team adapts quickly to trends,
                            platforms, and
                            algorithms to keep your brand ahead.
                        </p>
                    </div>
                    <!-- Duplicate more cards here (total 6) -->
                </div>

                <!-- Mobile Slider -->
                <div class="md:hidden relative">
                    <div id="cardSlider"
                        class="flex overflow-x-auto gap-4 scroll-smooth snap-x snap-mandatory no-scrollbar">

                        <!-- Card 1 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/strategy.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">100% Results-driven Strategy</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                                We focus on what matters with performance. Every campaign is built to meet specific KPIs
                                and
                                business goals,
                                ensuring your marketing budget delivers maximum ROI.
                            </p>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/repoting.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">Transparent Communication & Reporting</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                                No hidden metrics or vague updates. You’ll receive clear, honest reporting and open
                                communication at every stage of your project.
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/account_manager.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">Dedicated Account Managers</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                                Get personal attention with a dedicated expert who understands your brand, goals, and
                                campaign history with
                                always just one message away.
                            </p>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/customer_solution.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">Customized Solutions</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                                Your business is unique, and so are our tech solutions. Whether it’s custom ERP software development or a niche SaaS product development, we craft tailored tools that align perfectly with your industry and objectives.
                            </p>
                        </div>

                        <!-- Card 5 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/track_record.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">Proven Track Record Across Multiple Niches</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                                From fashion and food to SaaS and real estate, we’ve driven success for brands across
                                diverse industries
                                and we’re ready to do the same for you. </p>
                        </div>

                        <!-- Card 6 -->
                        <div
                            class="w-[90%] mx-auto flex-shrink-0 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/0.1 backdrop-blur-[20px] p-6 text-left shadow-lg snap-center background-backdrop-card">

                            <div class="flex justify-between items-start">
                                <!-- Top-left: gradient rounded square -->
                                <span
                                    class="p-[2px] rounded-lg bg-gradient-to-b from-[#000000] to-[#028F8E] inline-block">
                                    <span
                                        class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-tr from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white text-xl">
                                        <img src="images/icons/Bolt.svg" alt="">
                                    </span>
                                </span>

                                <!-- Top-right: circle, initial -45deg -> hover 0deg -->
                                <!-- <button aria-label="next"
                                    class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 text-gray-400 transform -rotate-45 hover:rotate-0 transition-transform duration-300 ease-in-out hover:text-white">
                                    <img src="images/icons/arrow.svg" width="15" alt="">
                                </button> -->
                            </div>

                            <h3 class="mt-4 text-lg font-light">Fast, Agile & Always Evolving</h3>
                            <div
                                class="my-3 h-[1px] w-[70%] bg-gradient-to-r from-transparent via-[#D6FC5F]/40 to-transparent">
                            </div>

                            <p class="text-sm text-white-300 font-light">
                               The digital world moves fast, and our team adapts quickly. We specialize in rapid Shopify development services and agile software sprints to keep your brand ahead of trends and algorithm changes.
                            </p>
                        </div>

                        <!-- Repeat more cards -->
                    </div>

                    <!-- Navigation (Arrows + Dots below) -->
                    <div class="flex flex-col items-center mt-6 gap-4">
                        <div class="flex gap-4">

                            <div class="flex gap-3">
                                <!-- Prev Button -->
                                <button id="prevBtn" class="w-10 h-10 flex items-center justify-center rounded-full 
           border border-[var(--secondary-color)] text-[var(--secondary-color)] 
           hover:bg-[var(--secondary-color)] hover:text-[#333] 
           active:bg-[var(--secondary-color)] active:text-[#333] 
           transition transform rotate-180 disabled:opacity-30 disabled:cursor-not-allowed" disabled>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"
                                        fill="currentColor">
                                        <path
                                            d="M0.645091 3.54523C0.421492 3.54523 0.240234 3.72649 0.240234 3.95009C0.240234 4.17369 0.421492 4.35494 0.645091 4.35494V3.54523ZM7.41708 4.23636C7.57519 4.07826 7.57519 3.82191 7.41708 3.66381L4.84058 1.08733C4.68247 0.929223 4.42613 0.929224 4.26802 1.08733C4.10992 1.24543 4.10992 1.50178 4.26802 1.65988L6.55825 3.95009L4.26802 6.2403C4.10992 6.39841 4.10992 6.65471 4.26802 6.81282C4.42613 6.97093 4.68247 6.97093 4.84058 6.81282L7.41708 4.23636ZM0.645091 4.35494H7.13077V3.54523H0.645091V4.35494Z" />
                                    </svg>
                                </button>

                                <!-- Next Button -->
                                <button id="nextBtn" class="w-10 h-10 flex items-center justify-center rounded-full 
           border border-[var(--secondary-color)] text-[var(--secondary-color)] 
           hover:bg-[var(--secondary-color)] hover:text-[#333] 
           active:bg-[var(--secondary-color)] active:text-[#333] 
           transition  disabled:opacity-30 disabled:cursor-not-allowed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 8 8"
                                        fill="currentColor">
                                        <path
                                            d="M0.645091 3.54523C0.421492 3.54523 0.240234 3.72649 0.240234 3.95009C0.240234 4.17369 0.421492 4.35494 0.645091 4.35494V3.54523ZM7.41708 4.23636C7.57519 4.07826 7.57519 3.82191 7.41708 3.66381L4.84058 1.08733C4.68247 0.929223 4.42613 0.929224 4.26802 1.08733C4.10992 1.24543 4.10992 1.50178 4.26802 1.65988L6.55825 3.95009L4.26802 6.2403C4.10992 6.39841 4.10992 6.65471 4.26802 6.81282C4.42613 6.97093 4.68247 6.97093 4.84058 6.81282L7.41708 4.23636ZM0.645091 4.35494H7.13077V3.54523H0.645091V4.35494Z" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                        <!-- Dots -->
                        <div id="sliderDots" class="flex justify-center gap-2 hidden"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- OUR EXPERTS Section -->
    <section class="py-8 mx-auto px-4 sm:px-6 lg:px-8  bg-[var(--body-bg)] text-white relative ">
        <div class="max-w-7xl mx-auto 0 text-center">

            <!-- Badge -->
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp; OUR EXPERTS</p>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Industry <b>Experts</b>
            </h2>

            <!-- Paragraph -->
            <p class="mt-2 text-white max-w-2xl mx-auto font-light px-3">
                From health to hospitality, we speak your industry’s language, so your project resonates from day one.
            </p>
        </div>

        <!-- Slider Wrapper -->
        <div class="relative mt-10  px-6 sm:px-0">
            <div id="experts-track"
                class="flex gap-6 transition-transform duration-500 overflow-x-auto scroll-smooth no-scrollbar pl-0">

                <!-- Card 1-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                            rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                        bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                        flex flex-col items-center justify-center space-y-4 h-[320px]
                        group overflow-hidden transition-all duration-500
                        hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/health.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Healthcare
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/Health.svg" alt="icon" class="w-7 h-7 text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/Health.svg" alt="icon" class="w-7 h-7 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Building patient-first portals that simplify care and keep sensitive data secure.
                    </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                        px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                        text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            Healthcare
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Developing secure portals and custom software solutions that simplify patient care and keep sensitive data secure.
                        </p>
                    </div>
                </div>

                <!-- Card 2-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                        rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                    bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                    flex flex-col items-center justify-center space-y-4 h-[320px]
                    group overflow-hidden transition-all duration-500
                    hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/e-commerce.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        E-Commerce
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/ecommerce.svg" alt="icon" class="w-6 h-6 text-white">
                                </div>
                            </div>
                        </div>-

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/ecommerce.svg" alt="icon" class="w-6 h-6 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Building trend-driven storefronts using Shopify custom theme development to inspire shoppers and streamline the path from browsing to buying. </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                            px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                            text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            E-Commerce
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Building trend-driven storefronts using Shopify custom theme development to inspire shoppers and streamline the path from browsing to buying. </p>
                    </div>
                </div>

                <!-- Card 3-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                        rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                    bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                    flex flex-col items-center justify-center space-y-4 h-[320px]
                    group overflow-hidden transition-all duration-500
                    hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/education.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Education
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/book.svg" alt="icon" class="w-8 h-8 text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/book.svg" alt="icon" class="w-8 h-8 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Creating smart learning platforms and SaaS product development solutions that make knowledge accessible and engaging for every student.
                    </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                        px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                        text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            Education
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Creating smart learning platforms that make knowledge accessible and engaging for every
                            student. </p>
                    </div>
                </div>

                <!-- Card 4-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                        rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                    bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                    flex flex-col items-center justify-center space-y-4 h-[320px]
                    group overflow-hidden transition-all duration-500
                    hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/restaurant.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Restaurant
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/restaurant.svg" alt="icon" class="w-8 h-8 text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/restaurant.svg" alt="icon" class="w-8 h-8 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Designing digital menus and booking systems that enhance dining experiences and build customer
                        loyalty. </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                            px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                            text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            Restaurant
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Designing digital menus and booking systems that enhance dining experiences and build
                            customer loyalty. </p>
                    </div>
                </div>

                <!-- Card 5-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                        rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                    bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                    flex flex-col items-center justify-center space-y-4 h-[320px]
                    group overflow-hidden transition-all duration-500
                    hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/fashion.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Fashion
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/Fashion.svg" alt="icon" class="w-8 h-8 text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/Fashion.svg" alt="icon" class="w-8 h-8 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Building trend-driven storefronts that inspire shoppers and streamline the path from browsing to
                        buying. </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                        px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                        text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            Fashion
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Building trend-driven storefronts that inspire shoppers and streamline the path from
                            browsing to buying. </p>
                    </div>
                </div>

                <!-- Card 6-->
                <div class="background-backdrop-card card relative flex-shrink-0 w-[70vw] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5
                        rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 
                    bg-white/1 backdrop-blur-[100px] p-6 text-center shadow-lg 
                    flex flex-col items-center justify-center space-y-4 h-[320px]
                    group overflow-hidden transition-all duration-500
                    hover:backdrop-blur-[200px] hover:space-y-0 hover:border hover:border-[#12A2A0]">


                    <!-- Background (image + overlay) -->
                    <div class="absolute inset-0 bg-cover bg-center opacity-0 group-hover:opacity-100 transition duration-500"
                        style="background-image: url('images/expert-icon/skin-care.webp');">
                        <!-- Overlay with primary color -->
                        <div class="absolute inset-0 bg-[#12A2A0]/30"></div>
                    </div>

                    <!-- Title (hidden on hover) -->
                    <h3 class="text-xl font-semibold relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Beauty & Skin care
                    </h3>

                    <!-- Icon -->
                    <div class="relative z-10 flex items-center justify-center">
                        <!-- Outer circle (hidden on hover) -->
                        <div
                            class="w-[104px] h-[104px] rounded-full bg-[#85D55C]/10 flex items-center justify-center transition duration-500 group-hover:hidden">
                            <div
                                class="w-[80px] h-[80px] rounded-full bg-[#85D55C]/15 flex items-center justify-center transition duration-500 group-hover:hidden">
                                <div class="w-[60px] h-[60px] rounded-full flex items-center justify-center transition-all duration-500"
                                    style="background: var(--gradient);">
                                    <img src="images/expert-icon/health_and_beauty.svg" alt="icon"
                                        class="w-8 h-8 text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Hover version of inner circle with border -->
                        <div class="hidden group-hover:flex w-[60px] h-[60px] rounded-full border-2 border-white flex items-center justify-center transition-all duration-500"
                            style="background: var(--gradient);">
                            <img src="images/expert-icon/health_and_beauty.svg" alt="icon" class="w-8 h-8 text-white">
                        </div>
                    </div>

                    <!-- Paragraph (hidden on hover) -->
                    <p class="text-sm text-white-300 font-light relative z-10 group-hover:hidden transition-all duration-500 ease-in-out">
                        Crafting elegant solutions that showcase products beautifully while fostering trust and brand
                        connection </p>

                    <!-- White box with heading + paragraph (only on hover) -->
                    <div class="hidden group-hover:flex relative z-10 flex-col items-center justify-center 
                        px-6 py-4 border border-[#12A2A0] rounded-md bg-[#12A2A0]/80 
                        text-center space-y-2 transition-all duration-500 ease-in-out">
                        <span class="text-white font-semibold text-lg transition-all duration-500 ease-in-out">
                            Beauty & Skin Care
                        </span>
                        <p class="text-white text-sm font-light transition-all duration-500 ease-in-out">
                            Crafting elegant solutions that showcase products beautifully while fostering trust and
                            brand
                            connection </p>
                    </div>
                </div>

            </div>

            <!-- Navigation Buttons -->
            <button id="experts-btn-prev"
                class="absolute left-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-white hover:text-black transition disabled:opacity-30 disabled:cursor-not-allowed"
                disabled>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M12.8216 17.2591C12.667 17.2591 12.5156 17.2269 12.3675 17.1625C12.2193 17.0981 12.1001 17.0208 12.01 16.9306L6.28972 11.133C6.0836 10.9269 5.98062 10.6338 5.98062 10.2537C5.98062 9.87365 6.0836 9.58055 6.28972 9.37442L12.01 3.17103C12.1517 3.02925 12.2837 2.92628 12.4061 2.86186C12.5285 2.79743 12.667 2.76523 12.8216 2.76523C13.1952 2.76523 13.4916 2.87462 13.7106 3.09364C13.8266 3.20959 13.9232 3.34805 14.0005 3.50911C14.0778 3.67016 14.1164 3.82795 14.1164 3.98255C14.1164 4.35617 13.9811 4.64598 13.7106 4.85211L8.802 10.2627L13.7106 15.326C13.9167 15.5321 14.0197 15.7769 14.0197 16.0601C14.0197 16.4337 13.9167 16.7235 13.7106 16.9296C13.5431 17.0584 13.3949 17.1453 13.2661 17.1904C13.1373 17.2355 12.9891 17.2591 12.8216 17.2591Z" />
                </svg>
            </button>

            <button id="experts-btn-next"
                class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-white hover:text-black transition disabled:opacity-30 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M7.17838 2.7409C7.33298 2.7409 7.48436 2.77311 7.63252 2.83753C7.78069 2.90195 7.89986 2.97925 7.99004 3.06943L13.7103 8.86702C13.9165 9.07315 14.0195 9.36625 14.0195 9.74632C14.0195 10.1264 13.9165 10.4195 13.7103 10.6256L7.99004 16.829C7.84832 16.9708 7.71627 17.0738 7.59387 17.1382C7.47148 17.2027 7.33298 17.2349 7.17838 17.2349C6.80476 17.2349 6.50844 17.1254 6.28942 16.9063C6.17347 16.7904 6.07684 16.6519 5.99954 16.4908C5.92224 16.3298 5.88359 16.172 5.88359 16.0174C5.88359 15.6437 6.01886 15.3539 6.28942 15.1477L11.198 9.73665L6.28942 4.67343C6.08328 4.46729 5.98021 4.22251 5.98021 3.93907C5.98021 3.56545 6.08328 3.27557 6.28942 3.06943C6.4569 2.9406 6.60506 2.85363 6.7339 2.80854C6.86273 2.76345 7.01089 2.7409 7.17838 2.7409Z" />
                </svg>
            </button>
        </div>

        <div class="mt-8 text-center">
            <p class="text-white font-light">
                Ready to partner with experts who “get” your industry?
            </p>
            <a href="/contact-us"
                class="mt-4 w-[300px] py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold flex items-center justify-center mx-auto gap-2 cursor-pointer hover:bg-[var(--secondary-color)] hover:text-white transition">
                Let’s Get Started
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>

    </section>


    <section class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-[var(--body-bg)] text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 text-center">

            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp; AWARDS</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Awards & <b>Industry Recognition</b>
            </h2>

            <p class="max-w-4xl mx-auto font-light text-white mb-12">
                We build with purpose and lead with precision. Our approach to smart design, strategic development,
                and measurable outcomes has earned recognition from trusted platforms that value real impact
                over surface-level features.
            </p>

            <div class="flex flex-wrap justify-center gap-0">

                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/01.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">INC. 5000
                    </h3>
                    <p class="text-sm text-gray-400">America's Fastest Growing Companies

                    </p>
                </div>

                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md flex flex-col items-center justify-center text-center"
                    style="border-image:linear-gradient(138deg,rgba(56,228,174,0.20) 12.07%, rgba(56,228,174,0.66) 39.55%, rgba(7,151,172,0.80) 63.36%, rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/02.svg" alt="Brand 1" class="w-[200px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Dot Comm

                    </h3>
                    <p class="text-sm text-gray-400">Excellence in Web Creativity & Digital Communication
                    </p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md flex flex-col items-center justify-center text-center"
                    style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/3.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Top Developers

                    </h3>
                    <p class="text-sm text-gray-400">Top Entertainment App Developers</p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/4.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Clutch
                    </h3>
                    <p class="text-sm text-gray-400">Top 1000 Companies
                    </p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/5.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Expertise
                    </h3>
                    <p class="text-sm text-gray-400">Best Mobile App Developer


                    </p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/6.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Software World
                    </h3>
                    <p class="text-sm text-gray-400">Top App Development Companies</p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/7.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Horizon Award
                    </h3>
                    <p class="text-sm text-gray-400">
                        Gold Awards Winner</p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/8.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Rank Watch
                    </h3>
                    <p class="text-sm text-gray-400">

                        Top Web Development Agency</p>
                </div>
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/6 p-6 bg-transparent border border-transparent rounded-md
    flex flex-col items-center justify-center text-center" style="border-image:linear-gradient(138deg,
        rgba(56,228,174,0.20) 12.07%,
        rgba(56,228,174,0.66) 39.55%,
        rgba(7,151,172,0.80) 63.36%,
        rgba(7,151,172,0.28) 92.67%) 1;">
                    <img src="/images/awards/9.webp" alt="Brand 1" class="w-[150px] mb-4 object-contain">
                    <h3 class="text-lg font-semibold">Right firms
                    </h3>
                    <p class="text-sm text-gray-400">Top Mobile App Development Company</p>
                </div>

            </div>
    </section>



    <section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 bg-[var(--body-bg)] text-white ">
        <div class="max-w-7xl mx-auto  text-center">
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;The People Behind Qonkar</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Meet Our
                <b>Leadership Team</b>
            </h2>

            <p class="max-w-3xl mx-auto  mb-12 text-sm sm:text-base">
                Driven by passion and led by experience. Our team of Software Architects, Creative Directors, and Marketing Strategists is dedicated to turning your vision into a digital reality. </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2  gap-6 mb-12">

                <div class="relative rounded-xl border border-[var(--secondary-color)]">
                    <div class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all 
              flex items-center text-left p-4 relative z-10 gap-4">

                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-md">
                            <img src="/images/staff/M-Owais.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div>
                            <h3 class="text-xl font-medium text-white ">Muhammad Owais</h3>
                            <p class="text-[var(--secondary-color)] text-lg mt-1">CEO</p>
                        </div>


                    </div>
                </div>


                <div class="relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex items-center text-left p-4 relative z-10 gap-4">

                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden rounded-md">
                            <img src="/images/staff/arsalan.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div>
                            <h3 class="text-xl font-medium text-white ">Muhammad Arslan</h3>
                            <p class="text-[var(--secondary-color)] text-lg mt-1">COO</p>
                        </div>

                    </div>
                </div>

                </div>
            <div class="text-center">
                <a href="/about-us" class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-semibold text-white 
           bg-[var(--secondary-color)] transition hover:bg-white hover:text-[var(--secondary-color)]">
                    View all Members
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

<!-- FAQ -->
    <section class="max-w-7xl mx-auto py-10 px-3 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <!-- Badge -->
            <div class="text-center mb-10">
                <!-- Badge -->
                <div class="glass-border inline-block mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp;QUESTIONS</p>
                        </div>
                    </div>
                </div>

                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    Frequently Ask <b>Questions</b>
                </h2>
                <p class="mt-2 text-white">
                    Find quick, clear answers—or chat with our AI assistant for instant help.
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Column 1 -->
                <div class="space-y-4">

                    <!-- Question 1 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span class="text-white">Where is Qonkar Technologies located, and do you work with international clients?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>

                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500  bg-[var(--body-bg)]">
                            <div class="px-6 py-4 text-white space-y-2">
                                <p class="!text-white">
                                    We operate as a global digital partner with a strategic presence in the UK and a dedicated development hub in Pakistan. This dual structure allows us to offer world-class quality at competitive rates. We proudly serve clients across the USA, Europe, and the Middle East, ensuring global standards in every project.
                                </p>

                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How does your five-step process work?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent bg-[var(--body-bg)]">
                            <p class="px-6 py-4 !text-white  bg-[var(--body-bg)]">
                                Our human-first approach is simple:
                                <br />
                                1. <b>Chat & Explore </b>– understand your vision
                                <br />
                                2. <b>Map & Blueprint </b> – create a shared roadmap
                                <br />
                                3.<b>Design & Build </b>– roll out prototypes and code
                                <br />
                                4.<b>Test & Polish </b>– ensure speed, security, and usability
                                <br />
                                5. <b>Launch & Learn</b> – monitor performance and optimize continuously
                            </p>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How long does it take to launch a Shopify store?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent ">
                            <p class="px-6 py-4 text-gray-300 !text-white bg-[var(--body-bg)]">
                                Typical Shopify projects run 4–6 weeks from kickoff to launch. We move fast by using proven templates, AI-powered recommendations, and real-time feedback loops—so you start selling sooner. </p>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Can you integrate AI features into my website or app?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-gray-300 !text-white bg-[var(--body-bg)]">
                                Absolutely. We build <b>custom AI</b> solutions—chatbots, recommendation engines, predictive analytics—directly into your site or platform, giving you smarter user interactions and data insights.

                            </p>
                        </div>
                    </div>
                    <!-- Question 5 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Which industries do you specialize in?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Our expertise spans<b> Healthcare, E-Commerce, SaaS, Retail, Restaurants, Real Estate, Education, </b>and<b> Travel & Tourism.</b> We leverage deep sector knowledge to deliver solutions that hit the mark from day one.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Column 2 -->
                <div class="space-y-4">
                    <!-- Question 6 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How does Qonkar handle communication across different time zones? </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Distance doesn’t mean delay. We structure our team’s schedule to ensure overlapping hours with your time zone for critical meetings and updates. Whether you use Slack, Zoom, or Email, our workflows are designed to keep you in the loop, making collaboration feel as seamless as if we were in the office next door.
                            </p>
                        </div>
                    </div>
                    <!-- Question 7 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Will I own the code and assets after the project is completed?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Absolutely. You retain 100% ownership. Once the final payment is cleared, all source code, creative assets, and intellectual property are transferred directly to you. We believe in client freedom—no hidden clauses, no lock-ins.
                            </p>
                        </div>
                    </div>
                    <!-- Question 8 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Why should I choose Qonkar over other agencies or freelancers?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                              We offer the "sweet spot" between reliability and innovation. Unlike freelancers, we provide a full team (Designers, Devs, QA) so your project never stalls. Unlike traditional agencies, we use AI-driven workflows to build faster and smarter, saving you time and budget. With Qonkar, you get a long-term partner committed to your growth.
                            </p>
                        </div>
                    </div>
                    <!-- Question 9 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>What is the cost of custom software development?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Every project is unique, so we provide a transparent, milestone-based quote after our Discovery & Research phase. Typical mid-range projects start around <b>PKR 300,000 </b> with flexible payment options to suit your budget.
                            </p>
                        </div>
                    </div>
                    <!-- Question 10 -->
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How do I get started with Qonkar Technologies?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                It’s easy: click <b>“Book Your Free Strategy Call”</b>, share your goals, and we’ll send over a tailored roadmap within 48 hours. No obligations—just a friendly conversation about your growth potential.

                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

<footer>
    <div class="w-full mx-auto bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-10 sm:px-14 py-8 ">
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

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="/script/home_component.js"></script>
    <script src="/script/home_GSAP.js"></script>
    <script src="/script/case_study_carousel.js"></script>
            
</body>

</html>



