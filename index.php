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
    
<header class="sticky top-5 z-50 mx-auto sm:px-4">
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
                                    <li><a href="/services/automative-app" class="hover:text-[#95C951] transition">Automative Apps </a></li>
                                    <li><a href="/services/healthcare-and-hippa-apps" class="hover:text-[#95C951] transition">Healthcare and HIPPA Apps </a></li>
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
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative App </a>
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
        class="relative min-h-screen flex items-center mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6 bg-no-repeat bg-[length:50%] bg-center md:bg-left md:bg-[length:50%] overflow-x-hidden">


        <div class="flex flex-col md:flex-row items-center justify-between gap-10 max-w-7xl mx-auto w-full">

            <div class="flex flex-col items-center md:items-start text-center md:text-left gap-8 lg:gap-10 max-w-2xl">

                <div class="glass px-4 py-2 rounded-lg sm:rounded-full text-xs sm:text-sm text-white 
                hidden sm:flex flex-col sm:flex-row items-center justify-center gap-2 hero-badge text-center">

                    <span class="px-3 py-0.5 rounded-full bg-[var(--primary-color)] text-white text-xs">
                        &#9679; New
                    </span>
                    <span class="leading-tight">
                        One team to build, convert, and grow
                    </span>
                </div>

                                <h1
                  class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-light hero-title leading-tight"
                >
                  Custom <br> <b>Software, Shopify</b><br>
                  & <span
                    class="bg-clip-text text-transparent font-bold"
                    style="background-image: var(--gradient);"
                  >Digital Growth</span>
                  Agency
                </h1>
                
                <p
                    class="text-sm sm:text-base md:text-lg lg:text-xl text-white font-light leading-tight hero-text max-w-2xl">
                    One team to build, convert, and grow your digital presence. From scalable software to ROI-driven marketing, we deliver innovation that scales businesses faster.
                </p>

                <a target="_blank" href="https://calendly.com/qonkartechnologiespvtltd" class="hero-btn mt-2 inline-flex items-center gap-2 px-8 py-4 rounded-full bg-[var(--primary-color)] text-white text-lg font-semibold 
                hover:bg-[var(--secondary-color)] transition">
                    Get a Free Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <div class="w-full md:w-1/2 hero-img flex justify-center overflow-hidden">
                <img src="/images/shopify-responsive-store-design-case-study.webp" alt="Showcase of responsive Shopify store design case study for Timevo on desktop and mobile."
                    class="w-5/6 md:w-full lg:w-4/5 xl:w-full h-auto max-w-full">
            </div>

        </div>
    </section>


    <section class="mt-4 bg-[var(--body-bg)] flex flex-col items-center justify-center h-[30vh] overflow-hidden relative">
        <h2 class="text-white text-2xl font-light mb-10 text-center">
           Trusted by Top Brands </h2>

        <div class="relative overflow-hidden w-full">
            <div class="flex items-center animate-scroll-horizontal space-x-18 gap-20 ">
                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="w-20 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-20 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                    class="w-14 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />

                <img src="/images/company-logos/CAINTE.webp" alt="Cainte Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/CENTRA.webp" alt="Centra Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/derma-space.webp" alt="Derma Space Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/govt-sindh.webp" alt="Government of Sindh" class="w-14 ">
                <img src="/images/company-logos/quest.webp" alt="Quaid-e-Awam University of Engineering, Science and Technology" class="w-20">
                <img src="/images/company-logos/PSEB_white.webp" alt="Pakistan software Export Board" class="w-20 object-contain" />
                <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-20 object-contain" />
                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-28 object-contain" />
                <img src="/images/company-logos/MICROSOFT.webp" alt="Microsoft Partner" class="h-8 object-contain" />
                <img src="/images/company-logos/power-culture.webp" alt="Power Culture Insurance"
                    class="h-8 object-contain" />
                <img src="/images/company-logos/THALASEMIA.webp" alt="Thalassemia Foundation"
                    class="w-14 object-contain" />
                <img src="/images/company-logos/MAINE.webp" alt="Maine Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/earsound.webp" alt="Earsound Insurance" class="h-8 object-contain" />
                <img src="/images/company-logos/upwork.webp" alt="Upwork Partner" class="h-8 object-contain" />
            </div>

        </div>
    </section>

    <section class="bg-[var(--body-bg)] py-12 mx-auto px-4 sm:px-6 lg:px-8  max-w7xl ">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/Successful-Business-Collaboration-And-Client-Meeting.webp" alt="Successful business collaboration shown by a professional shaking hands with a client during a team meeting." class="w-full max-w-xl h-auto">
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


                <h2 class="text-3xl md:text-4xl  text-white">
                    Why <b>Qonkar</b> is the Best IT Services Agency?
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Qonkar is a premier software house delivering custom technology solutions. Unlike traditional agencies, we focus on ROI-driven development. From Ecommerce stores to Fintech apps, our expert team ensures your digital success.

                </p>

                <a href="/about-us" class="z-99 mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold 
                hover:bg-[var(--primary-color)] hover:text-white transition w-fit mx-auto lg:mx-0">
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


    <section class="py-8  mx-auto px-4 sm:px-6 lg:px-8 bg-[var(--body-bg)] text-white max-w-7xl">
        <div class="max-w-7xl mx-auto  text-center ">
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;SERVICES</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Complete Digital & <b>IT Solutions</b>
            </h2>

            <p class="text-white font-light max-w-3xl mx-auto mb-10">
                We turn your online presence into a business asset. Whether you need a high-performing Shopify Store, powerful Custom Software, SEO that ranks, or Social Media that sells, Qonkar builds it, fixes it, and grows it. Fast. Simple. Results-focused.
            </p>

            <div class="flex justify-center mb-5 w-full">
                <div class=" 
        flex flex-wrap justify-center gap-2 py-2 px-3 rounded-full 
        bg-none md:[background-image:var(--gradient)] backdrop-blur-md">

                    <button
                        class="tab-btn active px-3 sm:px-4 py-1.5 sm:py-2 rounded-full bg-white text-[var(--primary-color)] font-semibold text-sm sm:text-sm transition"
                        data-tab="service1">
                        Shopify
                    </button>
                    <button
                        class="tab-btn px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-white font-semibold text-sm sm:text-sm transition"
                        data-tab="service2">
                        Custom Software Development
                    </button>
                    <button
                        class="tab-btn px-3 sm:px-4 py-1.5 sm:py-2 rounded-full text-white font-semibold text-sm sm:text-sm transition"
                        data-tab="service3">
                        Branding & Performance Marketing
                    </button>
                </div>
            </div>

            <div class="relative flex justify-center background-backdrop-card">
                <div class="w-full p-4 sm:p-6 rounded-[15px] border border-[1.087px] border-[#2F2F2F]/50 bg-white/1 backdrop-blur-[100px]"
                    style="background-color: rgba(0, 0, 0, 0.5);">
                    <div id="service1"
                        class="px-2 sm:px-8 tab-content flex flex-col lg:flex-row justify-center items-center gap-5">
                        <div class="flex-1 text-left top-0">
                            <h3 class="text-2xl sm:text-3xl font-semibold mb-2 flex items-center gap-2">
                                Shopify Ecommerce Experts & Store Setup
                            </h3>

                            <ul class="space-y-2 mb-6 text-base sm:text-xl leading-relaxed">
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Custom Shopify Theme Design & Development</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    High-Converting Store Setup & Migration
                                </li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Speed Optimization & Technical SEO
                                </li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Email, WhatsApp, & Social Media Marketing
                                </li>
                            </ul>

                            <a href="/contact-us"
                                class="inline-block px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--primary-color)] hover:text-white transition">
                                Get a Quote
                            </a>
                        </div>

                        <div class="flex-1 flex justify-center w-[110%]">
                            <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Qonkar expert team collaborating on a Shopify store development project in the office"
                                class="w-full  rounded-xl shadow-lg" />
                        </div>
                    </div>
                    <div id="service2"
                        class="px-2 sm:px-8 tab-content flex flex-col lg:flex-row  justify-center items-center gap-5">
                        <div class="flex-1 text-left top-0">

                            <h3 class="text-2xl sm:text-3xl font-semibold mb-2 flex gap-2">
                               Custom Software & Enterprise Solutions
                            </h3>

                            <ul class="space-y-2 mb-6 text-base sm:text-xl leading-relaxed">
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Scalable SaaS Product Development</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    CRM & ERP Management Systems</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    API Development & Cloud Integration</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Mobile App Development (iOS & Android)</li>
                                
                            </ul>

                            <a href="/contact-us"
                                class="inline-block px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--primary-color)] hover:text-white transition">
                                Get a Quote
                            </a>
                        </div>

                        <div class="flex-1 flex justify-center w-[110%]">
                            <img src="/images/qonkar-custom-software-products-saas-portfolio.webp" alt="Strategy Service"
                                class="w-full rounded-xl shadow-lg" />
                        </div>
                    </div>
                    <div id="service3"
                        class="px-2 sm:px-8 tab-content flex flex-col lg:flex-row justify-center items-center items-center gap-5">
                        <div class="flex-1 text-left top-0">

                            <h3 class="text-2xl sm:text-3xl font-semibold mb-2 flex items-center gap-2">
                                Digital Branding & ROI-Driven Marketing
                            </h3>

                            <ul class="space-y-2 mb-6 text-base sm:text-xl leading-relaxed">
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Brand Identity, Logo & UI/UX Design</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Content Strategy & Lead Generation</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    SEO & Google Ads Management (PPC)</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Social Media Marketing (Facebook/Instagram)</li>
                                <li class="flex items-start gap-2"><span class="text-[var(--tertiary-color)]">✔</span>
                                    Email, SMS, & WhatsApp Marketing</li>
                            
                            </ul>

                            <a href="/contact-us"
                                class="inline-block px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold hover:bg-[var(--primary-color)] hover:text-white transition">
                               Get a Quote
                            </a>
                        </div>

                        <div class="flex-1 flex justify-center w-[110%]">
                            <img src="/images/qonkar-digital-marketing-roi-growth-results.webp" alt="High return on investment (ROI) and business growth statistics achieved through Qonkar digital marketing strategies"
                                class="w-full rounded-xl shadow-lg" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl text-center ">
        <div class="container mx-auto flex flex-col items-center gap-3">

            <div class="glass-border inline-block mb-2">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OUR PROCESS</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light">
                Our <b>Development Roadmap</b>
            </h2>

            <p class="leading-none text-white-300 font-light leading-tight max-w-2xl text-sm md:text-base">
                We believe in keeping things simple and transparent. At Qonkar, we don't confuse you with technical jargon. Our streamlined process ensures that your project moves smoothly from the first meeting to the final launch, delivering high-quality results on time and within budget.

            </p>

            <div class="w-full mt-10">
                <div
                    class="flex gap-2 overflow-x-auto md:overflow-visible md:flex-nowrap snap-x snap-mandatory  no-scrollbar">
                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Discover_strategy.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">01</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Discovery & Strategy</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    We explore your goals and challenges, then build a clear, data-backed roadmap.
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full  bg-white text-[var(--secondary-color)]  transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0  opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Design_expreience.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">02</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Design & Experience</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    We create intuitive, brand-aligned prototypes
                                    focused on user experience. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem]  flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px] text-white bg-[#227d8d transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/Integration.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">03</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Build & Integrate</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Our developers build powerful, scalable solutions
                                    with smart tech integrations. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem]   flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px]  text-white bg-[#227d8d] transition-all duration-500 ease-in-out  md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/testing.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">04</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Testing & Launch</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Every feature is tested and optimized for speed,
                                    performance, and reliability. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div
                        class="flex flex-col p-6 h-[20rem] flex-shrink-0 w-[80%] sm:w-[60%] md:flex-1 md:min-w-[150px]text-white bg-[#227d8d] transition-all duration-500 ease-in-out md:hover:flex-[3] relative group overflow-hidden rounded-md snap-start">

                        <div
                            class="absolute inset-0 opacity-100 transition-opacity duration-500 bg-[url('/images/process-images/growth.webp')] bg-cover bg-center before:absolute before:inset-0 before:bg-gradient-to-tr before:from-[var(--primary-color)] before:to-black/60">
                        </div>

                        <div
                            class="flex flex-col items-start flex-1 relative z-10 transition-all duration-500 ease-in-out justify-start items-start md:group-hover:justify-end">

                            <span class="text-6xl font-bold text-[#57EAE6]">05</span>

                            <div class="mt-4 md:group-hover:mt-0 transition-all duration-500">
                                <h3 class="text-lg text-left">Support & Growth</h3>
                                <p
                                    class="mt-2 text-sm font-light text-gray-100 text-left block md:hidden md:group-hover:block transition-all duration-500">
                                    Post-launch, we monitor, improve, and scale your
                                    product for long-term success. </p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4 relative z-10">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-[var(--secondary-color)] transition-all duration-300 ease-in-out group-hover:bg-gray-600/60 group-hover:text-white cursor-default">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 -960 960 960"
                                    class="transition-colors duration-300" fill="currentColor">
                                    <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-10 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 lg:px-0">
            <!-- Header Section -->
            <div class="mb-12">
                <div class="glass-border inline-block mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp;PROJECTS</p>
                        </div>
                    </div>
                </div>
                <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                    Featured Case Studies & <b>Success Stories</b>
                </h2>
                <p class="font-light leading-relaxed text-white">
                    Explore how we help brands scale with custom technology.
                </p>
            </div>

            <!-- Unified Case Studies Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <?php
                // ✅ Fetch ALL active case studies (No hardcoded LIMIT/OFFSET)
                $query = "SELECT * FROM case_studies WHERE status = 'active' ORDER BY created_at DESC";
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                        $mockup = !empty($row['mockup_image']) ? $row['mockup_image'] : '/images/case-studies/default_mockup.webp';
                        $background = !empty($row['background_image']) ? $row['background_image'] : '/images/case-studies/background.webp';
                        $brandName = htmlspecialchars($row['brand_name']);
                        $description = htmlspecialchars($row['short_description']);
                        $link = !empty($row['link_of_case_study']) ? $row['link_of_case_study'] : '#';
                ?>
                    <div class="w-full background-backdrop-card rounded-[15px] shadow-lg overflow-hidden bg-white/5 backdrop-blur-[50px] flex flex-col">
                        <div class="w-full h-80 flex items-start justify-center bg-black/70 border border-gray-900 rounded-t-[15px] border-b-0 overflow-hidden">
                            <img src="<?php echo $mockup; ?>" alt="Case Study Image" class="w-full h-full object-top object-cover">
                        </div>

                        <div class="group relative flex flex-col flex-1 overflow-hidden rounded-b-[15px] p-[2px]"
                            style="background: linear-gradient(138deg, rgba(56,228,174,0.20) 12.07%, rgba(56,228,174,0.66) 39.55%, rgba(7,151,172,0.80) 63.36%, rgba(7,151,172,0.28) 92.67%);">

                            <div class="relative flex flex-col flex-1 rounded-b-[13px] bg-black overflow-hidden">
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <img src="<?php echo $background; ?>" alt="Hover BG" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-[#046362]/60"></div>
                                </div>

                                <div class="relative z-10 p-6 flex items-center justify-between">
                                    <div>
                                        <h3 class="text-lg sm:text-xl md:text-2xl font-light mb-2">
                                            <?php echo $brandName; ?>
                                        </h3>
                                        <p class="text-xs sm:text-sm md:text-base font-light leading-relaxed text-gray-200">
                                            <i><?php echo $description; ?></i>
                                        </p>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <a href="<?php echo $link; ?>">
                                            <img src="/images/icons/arrrow_color.svg" class="w-8 h-8 transition-opacity duration-300 group-hover:hidden" alt="Arrow Icon">
                                            <img src="/images/icons/arrrow_white.svg" class="w-8 h-8 transition-opacity duration-300 hidden group-hover:block" alt="Arrow Icon White">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    endwhile;
                else: 
                ?>
                    <p class="text-center text-gray-400 col-span-2">No featured case studies available.</p>
                <?php endif; ?>
            </div>
        </div>


        <a href="/portfolio"
            class="mt-12 w-fit py-3 px-6 rounded-full bg-white text-[var(--primary-color)] font-semibold flex items-center justify-center mx-auto gap-2 cursor-pointer hover:bg-[var(--secondary-color)] hover:text-white transition">
            View More Case Studies
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>

    </section>

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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 mb-4">
                
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
                        <li><a href="/services/automative-app" class="hover:underline">Automative App</a></li>
                        <li><a href="/services/healthcare-and-hippa-apps" class="hover:underline">Healthcare And Hippa Apps</a></li>
                    </ul>
                </div>



                <div>
                        <h3 class="font-bold text-lg mb-4">About</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li>
                                <a href="https://qonkar.com" class="hover:underline">Qonkar Technologies (PVT) Ltd.</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/career" class="hover:underline">Careers</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/blogs" class="hover:underline">Blogs and News</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/privacy-policy" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/terms-of-service" class="hover:underline">Terms of Services</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/help-and-support" class="hover:underline">Help and Support</a>
                            </li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="font-bold text-lg mb-4">Trusted by</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li>
                                <a href="https://www.microsoft.com/en-us" class="hover:underline"
                                    target="_blank">Microsoft</a>
                            </li>
                            <li>
                                <a href="https://www.shopify.com/" class="hover:underline" target="_blank">Shopify</a>
                            </li>
                            <li>
                                <a href="https://www.upwork.com/" class="hover:underline" target="_blank">Upwork</a>
                            </li>
                            <li>
                                <a href="https://www.fiverr.com/" class="hover:underline" target="_blank">Fiverr</a>
                            </li>
                            <li>
                                <a href="https://mailchimp.com/" class="hover:underline" target="_blank">Mailchimp</a>
                            </li>
                            <li>
                                <a href="https://www.hubspot.com/" class="hover:underline" target="_blank">HubSpot</a>
                            </li>
                            <li>
                                <a href="https://ads.google.com/" class="hover:underline" target="_blank">Google Ads</a>
                            </li>
                        </ul>
                    </div>

            </div>



            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-12">
                
                <div class="flex flex-col md:items-start md:text-left mb-8">
                    <h2 class="text-xl font-bold mb-2">Location</h2>
                    <div class="flex flex-wrap justify-start gap-4 font-light">
                        <p>UK</p>
                        <p class="text-white/30">|</p>
                        <p>Pakistan</p>
                    </div>
                    <div class="border-t border-white/30 my-4 w-full md:w-[40vw]"></div>
                    <div class="flex flex-wrap justify-start gap-4 font-light text-sm sm:text-base">
                        <p>(+92) 305 8214945</p>
                        <p class="text-white/30 sm:block">|</p>
                        <p>(+44) 7476451747</p>
                        <p class="text-white/30 hidden sm:block">|</p>
                        <p class="break-all">info@qonkar.com</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-start gap-10 md:gap-20">
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

                    <div class="flex flex-col md:items-start md:text-left mb-8">
                        <h2 class="text-xl font-bold mb-2">Trusted By</h2>
                        <div class="flex items-center h-20">
                            <a href="https://techdestination.com/" target="_blank">
                                <img src="/images/company-logos/Tech-Desti-New-logo.webp" alt="Tech Destination" class="w-32 object-contain" />
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4 border-t border-white/20 pt-4">
                <p class="text-sm">© Qonkar 2026. All rights reserved</p>
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
            
</body>

</html>
</html>