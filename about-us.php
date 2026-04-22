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
            <?php
        // Dynamic Canonical Tag
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request_uri = str_replace(['.php', '/index'], '', $request_uri);
        $request_uri = rtrim($request_uri, '/');
        if ($request_uri == '') { $request_uri = '/'; }
        
        $finalCanonical = "https://qonkar.com" . $request_uri;
        ?>
        <link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    <meta name="description"
        content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    <meta name="author" content="Qonkar" />

    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="https://qonkar.com/preview.webp" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>About Us | Qonkar Technologies</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/styles/index.css">
    <style>
        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
        }
      html {
        scroll-behavior: smooth;
      }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-HJ6VFPLL90');
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "SoftwareBusiness",
      "@id": "https://qonkar.com/#organization",
      "name": "Qonkar Technologies",
      "url": "https://qonkar.com/",
      "logo": "https://qonkar.com/images/Logo_White_Color.webp",
      "image": "https://qonkar.com/images/case-studies/background.webp",
      "description": "Qonkar Technologies is a full-service IT company specializing in Shopify development, custom software, web design, and performance marketing since 2018.",
      "foundingDate": "2018",
      "numberOfEmployees": {
        "@type": "QuantitativeValue",
        "value": 25
      },
      "knowsAbout": ["Shopify Plus", "SaaS Development", "Digital Marketing", "AI Integrations", "Healthcare Apps"],
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
      ]
    },
    {
      "@type": "HowTo",
      "name": "Qonkar Technologies 5-Step Process",
      "description": "Our human-first approach to delivering digital excellence.",
      "step": [
        { "@type": "HowToStep", "position": 1, "name": "Chat & Explore", "text": "Understanding your vision." },
        { "@type": "HowToStep", "position": 2, "name": "Map & Blueprint", "text": "Creating a shared roadmap." },
        { "@type": "HowToStep", "position": 3, "name": "Design & Build", "text": "Rolling out prototypes and code." },
        { "@type": "HowToStep", "position": 4, "name": "Test & Polish", "text": "Ensuring speed, security, and usability." },
        { "@type": "HowToStep", "position": 5, "name": "Launch & Learn", "text": "Continuous performance monitoring and optimization." }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What services does Qonkar Technologies provide?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We offer Shopify development, custom web & mobile apps, AI integrations, automation workflows, UX/UI design, and data-driven marketing."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to launch a Shopify store?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical Shopify projects run 4–6 weeks from kickoff to launch using proven templates and AI-powered workflows."
          }
        },
        {
          "@type": "Question",
          "name": "Can you integrate AI features into my website or app?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We build custom AI solutions like chatbots, recommendation engines, and predictive analytics directly into your platform."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of custom software development?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every project is unique. Typical mid-range projects start around PKR 300,000 with flexible milestone-based payment options."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with Qonkar Technologies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Click 'Book Your Free Strategy Call', share your goals, and we’ll send a tailored roadmap within 48 hours."
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
            <li><a href="/about-us" class="text-[var(--primary-color)]">About Us</a></li>
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
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative App </a>
                        <a href="/services/healthcare-and-hippa-apps" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare & HIPPA App </a>                        

                    </div>
                    
                </div>
            </div>

            <a href="/portfolio" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
            <a href="/blogs" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>

    <section
        class=" mt-4 relative mb-4 max-w-[95%]  mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <div
            class="absolute inset-0 bg-[url('https://img.freepik.com/premium-photo/splash-showing-global-community_13339-299799.webp?semt=ais_hybrid&w=740&q=80')] bg-center bg-cover opacity-40">
        </div>

        <div class="absolute inset-0 hero-pattern"></div>

        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">

            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold ">
                Join Our Team at Qonkar<br />Where Innovation Meets Impact
            </h1>

            <p class="text-base  font-light leading-relaxed">
                At Qonkar Technologies, we believe that technology should empower people and businesses to achieve more.
                Our culture is built on curiosity, collaboration, and creativity. If you’re passionate about solving
                problems with code, strategy, and design—this is the place to grow, learn, and make a real difference.
            </p>

            <a href="/career"
                class="hero-btn mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--secondary-color)] font-semibold  hover:bg-[var(--secondary-color)] hover:text-white transition">
                Join Our Team
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

    <section class="bg-[var(--body-bg)] py-20">
        <div class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch">

            <div class="flex flex-col justify-center space-y-10 order-1 lg:order-2">

                <div class="glass-border w-[130px]">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center">
                            <p>&#9679; &nbsp; About Us</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-2xl md:text-4xl text-white leading-tight">
                    Your Vision. Our Expertise. Together We
                    <span
                        class="font-bold bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-transparent bg-clip-text">Create
                        Success</span>
                </h2>

                <p class="text-white leading-tight">
                    Qonkar Technologies is a full-service IT company specializing in Shopify development, custom
                    software, web design, and performance marketing. For over 7+ years, we’ve helped startups,
                    e-commerce brands, and enterprises build <b>scalable, secure, and sales-driven solutions.</b>
                    We combine creativity with cutting-edge technology to deliver digital products that attract, engage,
                    and convert. From small business websites to complex enterprise platforms—we turn your <b>vision
                        into measurable growth.</b>
                </p>


                <div class="grid grid-cols-3 gap-6 text-center mt-16">
                    <div>
                        <h3 class="counter text-4xl font-extrabold text-[var(--primary-color)] opacity-0 translate-y-2 transition-all duration-700"
                            data-target="3500">0</h3>

                        <p class="mt-1">Projects</p>
                    </div>
                    <div>
                        <h3 class="counter text-4xl font-extrabold text-[var(--secondary-color)] opacity-0 translate-y-2 transition-all duration-700"
                            data-target="25">0</h3>
                        <p class="mt-1">Team Members</p>
                    </div>
                    <div>
                        <h3 class="counter text-4xl font-extrabold text-[var(--tertiary-color)] opacity-0 translate-y-2 transition-all duration-700"
                            data-target="7">0</h3>
                        <p class="mt-1">Years Experience</p>
                    </div>
                </div>

                <script>
                    const counters = document.querySelectorAll(".counter");
                    const duration = 2000; // total time (in ms) for all counters to finish

                    const startCounting = (counter) => {
                        const target = +counter.getAttribute("data-target");
                        const startTime = performance.now();

                        const updateCount = (currentTime) => {
                            const elapsed = currentTime - startTime;
                            const progress = Math.min(elapsed / duration, 1); // 0 → 1


                            const value = Math.floor(progress * target);
                            // const eased = 1 - Math.pow(1 - progress, 3); // cubic ease-out
                            // const value = Math.floor(eased * target);


                            counter.innerText = value;
                            counter.classList.remove("opacity-0", "translate-y-2");

                            if (progress < 1) {
                                requestAnimationFrame(updateCount);
                            } else {
                                counter.innerText = target + "+";
                            }
                        };

                        requestAnimationFrame(updateCount);
                    };

                    const observer = new IntersectionObserver((entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                startCounting(entry.target);
                                obs.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.6 });

                    counters.forEach(counter => observer.observe(counter));
                </script>




                <div class="mt-8 flex items-center">
                    <div class="flex -space-x-6">
                        <img src="/images/Clients_Review/arlindhalili.webp"
                            class="w-14 h-14 rounded-full border-4 border-[var(--body-bg)] object-cover" alt="">
                        <img src="/images/Clients_Review/idukan.webp"
                            class="w-14 h-14 rounded-full border-4 border-[var(--body-bg)] object-cover" alt="">
                        <img src="/images/Clients_Review/maysazuber.webp"
                            class="w-14 h-14 rounded-full border-4 border-[var(--body-bg)] object-cover" alt="">
                        <img src="/images/Clients_Review/rubyrose141.webp"
                            class="w-14 h-14 rounded-full border-4 border-[var(--body-bg)] object-cover" alt="">
                        <img src="/images/Clients_Review/samy_panthere.webp"
                            class="w-14 h-14 rounded-full border-4 border-[var(--body-bg)] object-cover" alt="">
                    </div>
                    <span class="ml-6 text-gray-300 text-lg">Trusted by <span class="font-semibold text-white">500+
                            clients</span> worldwide</span>
                </div>
            </div>

            <div class="h-full order-2 lg:order-1">
                <img src="/images/case-studies/background.webp" alt="About Us"
                    class="w-full h-full rounded-lg shadow-lg object-cover">
            </div>

        </div>
    </section>


    <section class="bg-[var(--body-bg)] py-10">
        <div
            class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-16 sm:gap-0 ">

            <div class="flex-1 space-y-8">
                <div class="space-y-8 mb-24">
                    <div class="glass-border w-[130px]">
                        <div class="glass-background">
                            <div class="glass text-sm font-light text-center">
                                <p>&#9679; &nbsp; Our Story</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-4xl md:text-5xl text-white leading-tight">
                        From Startup Dreams to
                        <span
                            class="font-bold bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-transparent bg-clip-text">
                            Global
                        </span>
                        Tech Partner
                    </h2>

                    <p class="leading-tight max-w-lg">
                        Founded in 2018, Qonkar started as a small team with a big vision—to simplify technology for
                        businesses. Over the years, we’ve evolved into a <b>global digital partner</b> trusted across
                        industries including <b>E-Commerce, Healthcare, Real Estate, SaaS, and Education.</b>
                        </br>
                        We’ve built award-winning websites, high-performing apps, and scalable marketing campaigns that
                        fuel long-term growth.
                    </p>

                    <a href="/contact-us"
                        class="inline-flex items-center gap-2 px-8 py-3 bg-[var(--primary-color)] text-white font-semibold rounded-full hover:bg-white hover:text-[var(--primary-color)] transition">
                        Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="relative w-full max-w-5xl mx-auto mt-20">

                    <div
                        class="hidden sm:block absolute top-[12px] left-0 w-full h-[2px] bg-gray-600 transform -translate-y-1/2">
                    </div>

                    <div class="hidden sm:flex justify-between relative">
                        <style>
                            @keyframes dotBlink {

                                0%,
                                100% {
                                    box-shadow: 0 0 8px rgba(59, 130, 246, 0.8);
                                    background-color: #3b82f6;
                                }

                                50% {
                                    box-shadow: 0 0 2px rgba(59, 130, 246, 0.4);
                                    background-color: #60a5fa;
                                }
                            }

                            .animate-dot {
                                animation: dotBlink 1.2s infinite ease-in-out;
                            }
                        </style>

                        <div class="group relative flex flex-col items-center">
                            <div class="absolute -top-32 hidden group-hover:flex flex-col items-center transition">
                                <img src="/images/timeline/founded.svg"
                                    class="object-cover w-20 h-20 rounded-full shadow-lg" />
                                <span
                                    class="mt-2 text-sm text-white bg-[var(--secondary-color)] px-3 py-1 rounded-full">Founded</span>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full border-4 border-[var(--body-bg)] cursor-pointer transition bg-gray-500 hover:bg-[var(--secondary-color)] hover:scale-110 animate-dot">
                            </div>
                            <span class="mt-3 text-sm text-gray-400 font-medium">2018</span>
                        </div>

                        <div class="group relative flex flex-col items-center">
                            <div class="absolute -top-32 hidden group-hover:flex flex-col items-center transition">
                                <img src="/images/timeline/domain_Expandes.svg"
                                    class="object-cover w-20 h-20 rounded-full shadow-lg" />
                                <span
                                    class="mt-2 text-sm text-center w-[150px] text-white bg-[var(--secondary-color)] px-3 py-1 rounded-full">Domain
                                    Expands</span>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full border-4 border-[var(--body-bg)] cursor-pointer transition bg-gray-500 hover:bg-[var(--secondary-color)] hover:scale-110 animate-dot">
                            </div>
                            <span class="mt-3 text-sm text-gray-400 font-medium">2019</span>
                        </div>

                        <div class="group relative flex flex-col items-center">
                            <div class="absolute -top-32 hidden group-hover:flex flex-col items-center transition">
                                <img src="/images/timeline/ai_automation.svg"
                                    class="object-cover w-20 h-20 rounded-full shadow-lg" />
                                <span
                                    class="mt-2 w-[150px] text-sm text-white text-center bg-[var(--secondary-color)] px-3 py-1 rounded-full">AI
                                    & Automation</span>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full border-4 border-[var(--body-bg)] cursor-pointer transition bg-gray-500 hover:bg-[var(--secondary-color)] hover:scale-110 animate-dot">
                            </div>
                            <span class="mt-3 text-sm text-gray-400 font-medium">2020</span>
                        </div>

                        <div class="group relative flex flex-col items-center">
                            <div class="absolute -top-32 hidden group-hover:flex flex-col items-center transition">
                                <img src="/images/timeline/global_brands.svg"
                                    class="object-cover w-20 h-20 rounded-full shadow-lg" />
                                <span
                                    class="mt-2 w-[200px] text-sm text-center text-white bg-[var(--secondary-color)] px-3 py-1 rounded-full">Leading
                                    global brands</span>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full border-4 border-[var(--body-bg)] cursor-pointer transition bg-gray-500 hover:bg-[var(--secondary-color)] hover:scale-110 animate-dot">
                            </div>
                            <span class="mt-3 text-sm text-gray-400 font-medium">2022</span>
                        </div>

                        <div class="group relative flex flex-col items-center">
                            <div class="absolute -top-36 hidden group-hover:flex flex-col items-center transition">
                                <img src="/images/timeline/IR.svg"
                                    class="object-cover w-20 h-20 rounded-full shadow-lg" />
                                <span
                                    class="mt-2 text-sm text-center w-[200px] text-white bg-[var(--secondary-color)] px-3 py-1 rounded-full">
                                    International operations (UK & Pakistan)
                                </span>
                            </div>
                            <div
                                class="w-6 h-6 rounded-full border-4 border-[var(--body-bg)] cursor-pointer transition bg-[var(--secondary-color)] hover:scale-110 animate-dot">
                            </div>
                            <span class="mt-3 text-sm text-gray-400 font-medium">2024</span>
                        </div>
                    </div>

                    <div class="sm:hidden flex flex-col gap-6 mt-8 px-4">
                        <div class="flex items-center gap-4">
                            <img src="/images/timeline/founded.svg" class="w-14 h-14 rounded-full shadow-lg" />
                            <div>
                                <p class="text-white font-semibold">Founded</p>
                                <p class="text-gray-400 text-sm">2018</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="/images/timeline/domain_Expandes.svg" class="w-14 h-14 rounded-full shadow-lg" />
                            <div>
                                <p class="text-white font-semibold">Domain Expands</p>
                                <p class="text-gray-400 text-sm">2019</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="/images/timeline/ai_automation.svg" class="w-14 h-14 rounded-full shadow-lg" />
                            <div>
                                <p class="text-white font-semibold">AI & Automation</p>
                                <p class="text-gray-400 text-sm">2020</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="/images/timeline/global_brands.svg" class="w-14 h-14 rounded-full shadow-lg" />
                            <div>
                                <p class="text-white font-semibold">Leading global brands</p>
                                <p class="text-gray-400 text-sm">2022</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <img src="/images/timeline/IR.svg" class="w-14 h-14 rounded-full shadow-lg" />
                            <div>
                                <p class="text-white font-semibold">International operations (UK & Pakistan)</p>
                                <p class="text-gray-400 text-sm">2024</p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <div class="hidden lg:flex flex-1 relative justify-center items-center">
                <div class="relative w-full max-w-md">

                    <div class="absolute top-[60%] left-[30%] transform -translate-y-1/2 z-20">
                        <img src="/images/circle_with_name_arrow.svg" alt="" class="w-28 h-28">
                    </div>

                    <svg viewBox="0 0 371.84 343.99" xmlns="http://www.w3.org/2000/svg"
                        class="w-[120%] h-full relative z-0">
                        <clipPath id="roundedShape">
                            <path
                                d="M566.2,107.7V425.35A12.67,12.67,0,0,1,553.53,438H358.72a12.67,12.67,0,0,1-12.67-12.67V300a12.68,12.68,0,0,0-12.68-12.67H208a12.67,12.67,0,0,1-12.67-12.67v-167A12.67,12.67,0,0,1,208,95h345.5A12.67,12.67,0,0,1,566.2,107.7Z"
                                transform="translate(-194.86 -94.53)" />
                        </clipPath>
                        <image clip-path="url(#roundedShape)" href="/images/case-studies/background.webp" width="371.84"
                            height="343.99" preserveAspectRatio="xMidYMid slice" />
                    </svg>

                </div>
            </div>


        </div>
    </section>


    <section class="max-w-7xl py-10 mx-auto px-4 sm:px-6 lg:px-8 bg-[var(--body-bg)] text-white ">
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
                <b>Team</b>
            </h2>

            <p class="max-w-3xl mx-auto  mb-12 text-sm sm:text-base">
                From design to strategy, every member plays a key role in your digital success. </p>

            <div class="team-cards-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/M-Owais.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muhammad Owais</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">CEO</p>

                            </div>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/muhammadowaisrehmani/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/arsalan.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muhammad Arslan</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">COO</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/devmarslan" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/Abdul-Rehman.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Abdul Rehman</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">SEO Specialist</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/abdul-rehman-jatt/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/hassan_waheed_pic.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Hassan Waheed</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Business Development Manager</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="#" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/alina.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Alina Ahmed</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Project Manager</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/alina-ahmed-55a504266/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/muqadas.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muqadas Lakho</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Jr. SEO</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/muqadas-lakho-6243b9298" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/zain.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muhammad Zain</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">AI Engineer</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/muhammad-zain-rehmani/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/huzaifa.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Huzaifa Haris</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Software Engineer</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/huzaifa-haris-aa8281262/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                

                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/faraz.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muhammad Faraz</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Software Engineer</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/muhammadfaraz-abbasi" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/Tooba.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Tooba</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Graphics Designer</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/toobaayoub" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/Bisma.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Bisma</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">SEO Intern</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/bisma-a-khan-018b85386/" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>
                                <div class="team-card hidden relative rounded-xl border border-[var(--secondary-color)]">
                    <div
                        class="background-backdrop-card rounded-xl bg-black/40 hover:shadow-xl transition-all flex flex-col items-center text-center p-6 relative z-10 gap-4">

                        <div class="w-48 h-48 flex items-center justify-center overflow-hidden rounded-md">
                            <img src="/images/staff/Muskan.webp" alt="Team Member"
                                class="w-full h-full object-cover object-top rounded-md">
                        </div>

                        <div class="flex flex-col items-center justify-between">
                            <div>
                                <h3 class="text-xl font-medium text-white">Muskan</h3>
                                <p class="text-[var(--secondary-color)] text-xl mt-1">Social Media Manager</p>

                            </div>

                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <a href="https://www.linkedin.com/in/muskan-rathore-658354251" target="_blank"
                                class="flex items-center gap-2 bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-sm hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="text-center">
                <button id="view-team-btn"
                    class="bg-[var(--secondary-color)] text-white hover:bg-white hover:text-[var(--secondary-color)] px-4 py-2 rounded-full font-medium text-base hover:bg-[var(--secondary-color)]/90 transition-all duration-300 shadow-md">
                    <span>View More</span>
                </button>
            </div>
            <script>
                const cards = document.querySelectorAll('.team-cards-container .team-card');
                const viewMoreBtn = document.getElementById('view-team-btn');

                let visibleCount = 8; // show first 4 initially
                const increment = 4; // how many to show each time

                function showCards() {
                    for (let i = 0; i < visibleCount && i < cards.length; i++) {
                        cards[i].style.display = 'block';
                    }

                    // If all cards are visible, update button text
                    if (visibleCount >= cards.length) {
                        // viewMoreBtn.textContent = 'You’ve met the whole team!';
                        // viewMoreBtn.disabled = true;
                        // viewMoreBtn.classList.add('opacity-60', 'cursor-not-allowed');
                        viewMoreBtn.classList.add('hidden');
                    }
                }

                // Initial load
                showCards();

                viewMoreBtn.addEventListener('click', () => {
                    visibleCount += increment;
                    showCards();
                });
            </script>


        </div>
    </section>
    <section class="max-w-7xl py-10 mx-auto px-4 sm:px-6 lg:px-8 bg-[var(--body-bg)] mb-2 text-white ">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <div class="glass-border inline-block mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp;QUESTIONS</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl md:text-4xl font-light mb-4">
                    Frequently Ask <b>Questions</b>
                </h2>
                <p class="mt-2 text-white">
                    Find quick, clear answers—or chat with our AI assistant for instant help.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="space-y-4">

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span class="text-white">What services does Qonkar Technologies provide?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>

                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-500  bg-[var(--body-bg)]">
                            <div class="px-6 py-4 text-white space-y-2">
                                <p class="!text-white">
                                    We offer end-to-end digital solutions: Shopify development, custom web & mobile
                                    apps, AI integrations, automation workflows, UX/UI design, and data-driven
                                    marketing. Every service is tailored to your goals, so you get a seamless,
                                    growth-focused outcome.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How does your five-step process work?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div
                            class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent bg-[var(--body-bg)]">
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

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How long does it take to launch a Shopify store?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent ">
                            <p class="px-6 py-4 text-gray-300 !text-white bg-[var(--body-bg)]">
                                Typical Shopify projects run 4–6 weeks from kickoff to launch. We move fast by using
                                proven templates, AI-powered recommendations, and real-time feedback loops—so you start
                                selling sooner. </p>
                        </div>
                    </div>

                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Can you integrate AI features into my website or app?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 text-gray-300 !text-white bg-[var(--body-bg)]">
                                Absolutely. We build <b>custom AI</b> solutions—chatbots, recommendation engines,
                                predictive analytics—directly into your site or platform, giving you smarter user
                                interactions and data insights.

                            </p>
                        </div>
                    </div>
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Which industries do you specialize in?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Our expertise spans<b> Healthcare, E-Commerce, SaaS, Retail, Restaurants, Real Estate,
                                    Education, </b>and<b> Travel & Tourism.</b> We leverage deep sector knowledge to
                                deliver solutions that hit the mark from day one.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="space-y-4">
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How can I track the progress of my project?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                You’ll have access to our project portal with live task boards, milestone updates, and
                                weekly video check-ins. Plus, our chatbot is on standby 24/7 for status queries and
                                quick clarifications.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>Do you offer ongoing support after launch?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Yes— <b>our Growth</b> & Support phase means we stay with you long after launch. We
                                handle updates, A/B tests, performance tuning, and feature enhancements to keep your
                                digital products evolving.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How do you ensure website security and data privacy?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Security is built in from day one. We use industry-standard encryption, conduct regular
                                vulnerability scans, and follow GDPR/HIPAA compliance practices—so your data and your
                                customers’ data always stay safe.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>What is the cost of custom software development?</span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                Every project is unique, so we provide a transparent, milestone-based quote after our
                                Discovery & Research phase. Typical mid-range projects start around <b>PKR 300,000 </b>
                                with flexible payment options to suit your budget.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item border border-gray-600 rounded-lg overflow-hidden transition">
                        <button
                            class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-[var(--body-bg)]">
                            <span>How do I get started with Qonkar Technologies?
                            </span>
                            <div
                                class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-gray-700 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-white" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-transparent">
                            <p class="px-6 py-4 !text-white bg-[var(--body-bg)]">
                                It’s easy: click <b>“Book Your Free Strategy Call”</b>, share your goals, and we’ll send
                                over a tailored roadmap within 48 hours. No obligations—just a friendly conversation
                                about your growth potential.

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


    <script src="script/navbar.js"></script>
    <script src="script/FAQ.js"></script>
      
</body>


</html>