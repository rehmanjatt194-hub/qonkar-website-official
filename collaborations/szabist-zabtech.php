<?php
require_once '../db-path.php'; // path relative to current file


require_once '../'.ADMIN_URL.'/database_config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
            
    
<link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    
    
                <?php
            // Dynamic Canonical Tag
            $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $request_uri = str_replace('.php', '', $request_uri);
            $request_uri = rtrim($request_uri, '/');
            
            $finalCanonical = "https://qonkar.com" . $request_uri;
            ?>

    <meta name="description"
        content="Launch a Revenue Ready Shopify store with Qonkar. We specialize in enterprise setup, catalog architecture, multi-currency payments, and seamless integrations for global brands." />

    <meta name="keywords"
        content="Shopify Store Setup Service, Shopify Plus Setup, Ecommerce Launch Strategy, Shopify Migration Experts, Dropshipping Store Setup, D2C Brand Launch" />

    <meta name="author" content="Qonkar Technologies" />

    <meta property="og:title" content="Enterprise Shopify Store Setup & Launch | Qonkar" />
    <meta property="og:description" content="Don't just launch. Dominate. We build scalable, high-performance Shopify stores architected for growth from Day 1." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/services/shopify-store-setup" />
    <meta property="og:image" content="/images/shopify-setup-hero.webp" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Enterprise Shopify Store Setup & Launch | Qonkar" />
    <meta name="twitter:description" content="Don't just launch. Dominate. We build scalable, high-performance Shopify stores architected for growth from Day 1." />
    <meta name="twitter:image" content="/images/shopify-setup-hero.webp" />

    
    
    

    <title>Shopify Store Setup & Launch Strategy | Qonkar</title>

    
    
    
    
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

    <div class="min-h-screen flex flex-col mt-6  md:mt-4   ">

        <section class="relative w-[95vw] mx-auto min-h-[75vh] rounded-lg overflow-hidden flex items-center  mx-auto px-4 sm:px-6 lg:px-8">
            <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

            <div class="absolute inset-0 hero-pattern"></div>

            <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-start w-full px-10 sm:px-10 lg:px-9 py-10">

                <div class="text-left text-white space-y-6 order-1">
                    <div class="hidden glass px-3 py-2 rounded-lg sm:rounded-full text-xs sm:text-sm text-white inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">
                        <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">&#9679; Launch</span>
                        <span>Shopify Experts</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                        Expert <b>Shopify Store Setup</b> <br class="hidden sm:block"> 
                        & Configuration Services
                    </h1>

                    <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                        Launch your business with confidence. As <b>Shopify store setup experts</b>, 
                        Qonkar handles everything from domain connection to payment settings, 
                        ensuring your <b>Shopify ecommerce setup</b> is professional, secure, 
                        and ready to sell from day one.
                    </p>

                    <div class="flex items-center gap-4 mt-4">
                        <a href="/contact-us" class="hero-btn btn-light-theme">
                            Start Your Launch
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center md:justify-end order-2">
                    <img src="/images/qonkar-custom-shopify-store-design-portfolio.webp" alt="A collection of high-converting custom Shopify store designs and e-commerce interfaces created by Qonkar Technologies."
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
                <img src="/images/shopify-theme-design-services.webp" alt="Our Client" class="w-[90%] max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">

                <div class="glass-border w-[150px]  mx-auto lg:mx-0">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center">
                            <p> &#9679; SERVICES </p>
                        </div>
                    </div>
                </div>


                <h2 class="text-3xl md:text-4xl  text-white">
                    Architected for <b>Scale</b> & <b>Global Growth</b>
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  A Shopify store is more than just a website; it's a financial engine. We configure your store's backend, tax settings, shipping zones, and inventory systems to handle high transaction volumes without breaking.
                </p>

            </div>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/our-process.php'; ?>
    
    
    
    
    
    
    
    
    
    
    <div class="container mx-auto flex flex-col items-center gap-3">
    <div class="glass-border inline-block mb-2">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OUR Services</p>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl md:text-4xl font-light mb-4">
                Our <b>Development Strategies</b>
            </h2>
            </div>
    <!--Service Section No.1-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Professional Shopify Store Creation Services for New Businesses
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  Starting an online business is exciting, but the technical setup can be overwhelming. As a premier provider of Shopify store setup services, Qonkar takes the stress out of launching your brand. We don't just create a page; we build a fully functional business environment. Our team ensures that your Shopify website setup services include everything from proper 
                  <a href="/services/shopify-theme-design" class="underline hover:text-blue-500 transition-colors duration-300">
                    theme installation
                  </a> 
                  to the fine-tuning of your store’s internal logic, making sure you are ready for your first customer.
                </p>

            </div>
        </div>
    </section>
    
    
    <!--Service Section No.2-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-1 lg:order-1 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Complete Shopify Store Setup and Configuration Service
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  A successful store needs more than just products; it needs a solid foundation. Our Shopify store setup and configuration service covers the essential "behind the scenes" work that many beginners overlook. We handle your tax settings, shipping zones, and legal policy pages to ensure your business stays compliant and professional. By trusting 
                  <a href="/services/shopify-store-setup" class="underline hover:text-blue-500 transition-colors duration-300">
                    Shopify store setup experts
                  </a>, 
                  you avoid common mistakes that could lead to lost sales or payment processing issues down the road.
                </p>

            </div>
            
            <div class="order-2 lg:order-2 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>
        </div>
    </section>
    
    <!--Service Section No.3-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Why Choose Qonkar for Your Shopify Ecommerce Setup?
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  Many people try to build their own stores but get stuck on the technical details. When you choose Qonkar for your Shopify ecommerce setup, you get a store that is optimized for performance. We focus on "Launch Readiness," which means we test every button, link, and checkout step before we hand over the keys. Our 
                  <a href="/services/shopify-development" class="underline hover:text-blue-500 transition-colors duration-300">
                    Shopify store creation services
                  </a> 
                  are designed to give you a "Turnkey" solution, so you can focus on marketing and growth while we handle the technology.
                </p>

            </div>
        </div>
    </section>
    
    
    <!--Service Section No.4-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-1 lg:order-1 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Secure Payment and Shipping Integration
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  One of the most critical parts of Shopify website setup services is making sure you can actually get paid. We help you connect secure payment gateways like Shopify Payments, PayPal, or Stripe. Additionally, we configure your shipping rates, whether they are flat rates, free shipping tiers, or weight-based calculations. Our goal as 
                  <a href="/services/shopify-theme-design" class="underline hover:text-blue-500 transition-colors duration-300">
                    Shopify store setup experts
                  </a> 
                  is to make the buying process as smooth as possible for your customers, which directly helps in increasing your sales.
                </p>

            </div>
            
            <div class="order-2 lg:order-2 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>
        </div>
    </section>
    
    <!--Service Section No.5-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-2 lg:order-1 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>

            <div class="order-1 lg:order-2 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Launch Your Brand with Shopify Store Creation Services
                </h2>

                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  Your journey from an idea to a live store should be smooth and fast. Qonkar’s Shopify store creation services follow a proven roadmap to get you online quickly without sacrificing quality. We help with domain registration, email notification setup, and basic SEO settings so your store is visible to search engines from the moment it goes live. Investing in a professional 
                  <a href="/services/migration-services" class="underline hover:text-blue-500 transition-colors duration-300">
                    Shopify store setup and configuration service
                  </a> 
                  is the best way to ensure your brand starts on the right foot.
                </p>

            </div>
        </div>
    </section>
    
    
    <!--Service Section No.6-->
    <section class=" bg-[var(--body-bg)] py-8 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-6">

            <div class="order-1 lg:order-1 text-center  gap:2  lg:text-left flex flex-col gap-6">



                <h2 class="text-xl md:text-2xl  text-white">
                    Why a Professional Setup is Better than DIY?
                </h2>
<div>
                <p class="text-white font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                  While many agencies focus solely on aesthetics, 
                  <a href="/" class="underline hover:text-blue-500 transition-colors duration-300">Qonkar</a> 
                  prioritizes 
                  <a href="/services/speed-optimization" class="underline hover:text-blue-500 transition-colors duration-300">
                    technical Shopify development services
                  </a>. 
                  Investing in high-end technical development offers several key advantages:
                </p>
                
                <ul class="leading-relaxed mt-2 font-light text-white max-w-xl mx-auto lg:mx-0">
                  <li class="flex items-start gap-2 mb-2">
                    <span class="text-[var(--tertiary-color)]">?</span>
                    <span>Custom Functionality: Get the exact features your specific business model requires to succeed.</span>
                  </li>
                  <li class="flex items-start gap-2 mb-2">
                    <span class="text-[var(--tertiary-color)]">?</span>
                    <span>Security: We write secure code that protects sensitive customer data and payment gateways.</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <span class="text-[var(--tertiary-color)]">?</span>
                    <span>Scalability: As your business grows, our scalable architecture ensures your store never crashes under pressure.</span>
                  </li>
                </ul>
</div>
                

            </div>
            
            <div class="order-2 lg:order-2 flex justify-center">
                <img src="/images/qonkar-expert-shopify-development-team.webp" alt="Our Client" class="w-full max-w-md h-auto">
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-white">
        <div class="text-center mb-12   bg-no-repeat bg-[length:40%] 
                bg-[url('/images/background_curve.svg')] 
                bg-[center_top_60px]">
            <h2 class="text-sm uppercase font-light text-white mb-6">
                Our Setup Services:
            </h2>
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;CORE CAPABILITIES</p>
                    </div>
                </div>
            </div>
            <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                Your Complete <b>Launch</b> Solution
            </h2>
            <p class=" font-light leading-relaxed text-white w-[75%] mx-auto">
                We handle the technical complexities so you can focus on your brand. From payments to product uploads, we build a solid foundation for growth.
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
                        Full Store Configuration
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We configure 100% of your store settings: Domains, DNS, SSL, Customer Accounts, Policies, and Notification Emails. We ensure everything is compliant and secure.
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
                        Catalog Architecture
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        We organize your products into smart Collections with optimized tags, variants, and meta fields. We ensure your site navigation makes sense to users and Google bots alike.
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
                        Global Payments & Shipping
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Sell everywhere. We set up Shopify Markets, multi-currency payments, tax rules (Avalara/Vertex), and complex shipping profiles for seamless international expansion.
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
                        Analytics & Tracking Setup
                    </h3>

                    <p class="leading-relaxed text-white font-light text-left relative z-10">
                        Data is power. We implement GA4, Facebook Pixel (CAPI), and TikTok Pixel correctly from day one so you can run profitable ads immediately after launch.</p>
                </div>
        </div>

    </section>

    <section class="w-full py-16 bg-[var(--body-bg)] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 space-y-4">
                    <div class="glass-border inline-block mb-4">
                        <div class="glass-background">
                            <div class="glass text-sm font-light">
                                <p>&#9679; &nbsp;ECOSYSTEM</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Seamless <b>Integrations</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                       Your store needs to talk to your other tools. We integrate your ERP, CRM, and 3PL fulfillment software directly into Shopify, automating your operations so you can scale without hiring more staff.
                    </p>
                </div>

                <div class="md:w-1/2 flex flex-col gap-3">
                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                         border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_optimize.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>
                        <img src="/images/icons/services/05_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/05_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">ERP & CRM Connections</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                Sync inventory and customer data in real-time with NetSuite, Salesforce, or HubSpot.
                            </p>
                        </div>
                    </div>

                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                            border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_CRO.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/07_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/07_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Review & Loyalty Apps</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                We implement Yotpo, Okendo, or Judge.me to capture social proof and build trust instantly.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col md:flex-row gap-8 items-center">
                <div class="md:w-1/2 flex flex-col gap-3 order-2 md:order-1">
                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                         border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_strategy.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/05_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/05_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">Automated Flows</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                Setup of Klaviyo welcome series, abandoned cart recovery, and post-purchase upsells.
                            </p>
                        </div>
                    </div>

                    <div class="group background-backdrop relative flex gap-7 items-center p-6 rounded-lg shadow-lg overflow-hidden
                          border border-[1.087px] border-[#2F2F2F]/50 bg-white/5 backdrop-blur-[200px]">

                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="/images/services_pictures/shopify_marketing.webp" class="w-full h-full object-cover" alt="">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <img src="/images/icons/services/06_color.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 group-hover:hidden relative z-10"
                            alt="">
                        <img src="/images/icons/services/06_white.svg"
                            class="w-12 h-12 flex-shrink-0 transition-all duration-500 hidden group-hover:block relative z-10"
                            alt="">

                        <div class="relative z-10">
                            <h3 class="text-2xl font-light mb-2 text-white">B2B Setup</h3>
                            <p class="text-sm font-light leading-relaxed text-white">
                                For wholesalers, we configure price lists, net payment terms, and company profiles on Shopify Plus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 space-y-4 order-1 md:order-2">
                    <div class="glass-border inline-block mb-4">
                        <div class="glass-background">
                            <div class="glass text-sm font-light">
                                <p>&#9679; &nbsp;SCALABILITY</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                        Built for <b>High Volume</b>
                    </h2>
                    <p class=" font-light leading-relaxed text-white ">
                        We don't just build for today. We architect your store to handle Black Friday traffic spikes and international expansion without downtime or performance degradation.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <div class="glass-border inline-block mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp;Why Qonkar</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    Setup That <b>Scales</b>
                </h2>
                <p class="mt-2 text-white">
                    We build the technical foundation so you can focus on sales.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

                <div class="space-y-4 max-w-2xl mx-auto relative text-white order-2 lg:order-1">

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">How long does it take to launch?</span>
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
                                    For a standard setup using a premium theme, we can launch in <b>2-3 weeks</b>. For complex builds with migrations or custom ERP integrations, it typically takes <b>4-6 weeks</b>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Can you migrate from WooCommerce/Magento?</span>
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
                                Yes. We specialize in <b>Zero-Downtime Migrations</b>. We transfer all your products, customers, orders, and reviews while maintaining SEO rankings through 301 redirects.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you set up payments and shipping?</span>
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
                                Absolutely. We configure payment gateways (Stripe, PayPal, Shopify Payments), set up multi-zone shipping profiles, and automate tax calculations for global sales.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Is the store mobile optimized?</span>
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
                                Yes. We prioritize mobile responsiveness. Every store we set up is tested on multiple devices to ensure a seamless checkout experience for mobile shoppers.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold">
                            <span class="text-white">Do you offer training?</span>
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
                                Yes. We provide a comprehensive handover session and video tutorials showing you how to manage orders, update products, and run reports.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center order-1 lg:order-2 w-full">
                    <img src="/images/icons/services/FAQS Shopify.webp" 
                         alt="Why Qonkar"
                         class="w-full max-w-md lg:max-w-2xl rounded-lg shadow-lg mx-auto">
                </div>
            </div>


        </div>
    </section>




    <section class="w-full flex justify-center items-center py-4  mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-7xl p-6 md:p-12 text-center text-white rounded-[30px] border-[4px] shadow-lg" style="
      border: 2px solid rgba(56, 228, 174, 0.53);
      background: linear-gradient(90deg, rgba(56, 228, 174, 0.61) 0%, rgba(7, 152, 173, 0.75) 100%),
                  linear-gradient(0deg, rgba(0, 0, 0, 0.58) 0%, rgba(0, 0, 0, 0.58) 100%),
                  url('/images/unsplash/photo-1504384308090.webp') lightgray 0px -374.163px / 100% 280.523% no-repeat;
      box-shadow: 0 15px 15px 3px rgba(56, 228, 174, 0.12);">
            <h1 class="text-2xl sm:text-3xl md:text-3xl font-light mb-3">
                Ready to <strong>Launch</strong> Your Empire?
            </h1>

            <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 text-white font-light">
                Let's build a store that's ready to scale from day one.
            </p>

            <a href="/contact-us"
                class="sm:px-6 sm:py-3 btn-dark-theme">
                Start Your Launch
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="/script/home_component.js"></script>
    <script src="/script/home_GSAP.js"></script>
            
</body>

</html>




