<?php
require_once 'db-path.php'; // path relative to current file

require_once ADMIN_URL.'/database_config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    
    
    
    
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
    

    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="/preview.webp" />

    
    

    
    <title>About Us | Qonkar Technologies</title>

    

    
    
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
      "@id": "/#organization",
      "name": "Qonkar Technologies",
      "url": "/",
      "logo": "/images/Logo_White_Color.webp",
      "image": "/images/case-studies/background.webp",
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

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

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
                class="hero-btn mt-4 btn-light-theme">
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
                            const progress = Math.min(elapsed / duration, 1); // 0 ? 1


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
                        class="btn-dark-theme">
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
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/M-Owais.webp" alt="Muhammad Owais"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muhammad Owais</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">CEO</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/muhammadowaisrehmani/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/arsalan.webp" alt="Muhammad Arslan"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muhammad Arslan</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">COO</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/devmarslan" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/Abdul-Rehman.webp" alt="Abdul Rehman"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Abdul Rehman</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">SEO Specialist</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/abdul-rehman-jatt/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/hassan_waheed_pic.webp" alt="Hassan Waheed"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Hassan Waheed</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Business Development Manager</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="#" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/alina.webp" alt="Alina Ahmed"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Alina Ahmed</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">HR Manager</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/alina-ahmed-55a504266/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/muqadas.webp" alt="Muqadas Lakho"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muqadas Lakho</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Jr. SEO</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/muqadas-lakho-6243b9298" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/zain.webp" alt="Muhammad Zain"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muhammad Zain</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">AI Engineer</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/muhammad-zain-rehmani/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/huzaifa.webp" alt="Huzaifa Haris"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Huzaifa Haris</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Software Engineer</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/huzaifa-haris-aa8281262/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/faraz.webp" alt="Muhammad Faraz"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muhammad Faraz</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Software Engineer</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/muhammadfaraz-abbasi" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/Tooba.webp" alt="Tooba"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Tooba</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Graphics Designer</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/toobaayoub" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/Bisma.webp" alt="Bisma"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Bisma</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">SEO Intern</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/bisma-a-khan-018b85386/" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
                </div>
                <div class="team-card hidden group relative rounded-2xl overflow-hidden cursor-pointer shadow-lg bg-[#000810]">
                    <!-- Background Image -->
                    <div class="w-full h-[340px] pointer-events-none">
                        <img src="/images/staff/Muskan.webp" alt="Muskan"
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-110">
                    </div>
                    
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-[#000d16] via-[#000d16]/50 to-transparent opacity-90 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex flex-col justify-end p-6 pointer-events-none">
                        <div class="transform transition-transform duration-500 group-hover:-translate-y-12">
                            <h3 class="text-xl font-bold text-white mb-1">Muskan</h3>
                            <p class="text-[#01a0d8] font-medium text-sm tracking-wide">Social Media Manager</p>
                        </div>
                        
                        <!-- Connect Button (Slide up on hover) -->
                        <div class="absolute bottom-6 left-6 right-6 opacity-0 transform translate-y-8 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 pointer-events-auto">
                            <a href="https://www.linkedin.com/in/muskan-rathore-658354251" target="_blank"
                                class="flex items-center justify-center gap-2 w-full bg-white/5 backdrop-blur-md border border-white/20 text-white px-4 py-2.5 rounded-full font-semibold text-sm hover:bg-[#01a0d8] hover:border-[#01a0d8] hover:text-[#001220] transition-all duration-300 relative z-20">
                                <i class="fa-brands fa-linkedin-in text-lg"></i>
                                <span>Connect</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Border glow on hover -->
                    <div class="absolute inset-0 pointer-events-none border border-white/10 rounded-2xl group-hover:border-[#01a0d8]/60 transition-colors duration-500"></div>
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

    <section class="max-w-7xl mx-auto py-8 md:py-12 px-4 sm:px-6 lg:px-8 bg-[#f8fafc] mb-0 text-slate-900 rounded-t-[30px] rounded-b-none shadow-[0_4px_20px_rgba(0,13,22,0.02)] border border-slate-100/50">
        <div class="w-full mx-auto ">
            <div class="text-center mb-10">
                <!-- Badge -->
                <div class="inline-block mb-4 bg-[#01a0d8]/10 border border-[#01a0d8]/20 rounded-full px-4 py-1.5">
                    <p class="text-xs font-bold text-[#01a0d8] tracking-wider uppercase flex items-center justify-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#01a0d8] animate-pulse"></span>
                        QUESTIONS
                    </p>
                </div>

                <!-- Heading -->
                <h2 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight mb-4 text-[#000d16]">
                    Frequently Asked <span class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold">Questions</span>
                </h2>
                <p class="mt-2 text-slate-600 max-w-2xl mx-auto font-light">
                    Find quick, clear answers—or chat with our AI assistant for instant help.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Column 1 -->
                <div class="space-y-4">

                    <!-- Question 1 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>What services does Qonkar Technologies provide?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    We offer end-to-end digital solutions: Shopify development, custom web & mobile
                                    apps, AI integrations, automation workflows, UX/UI design, and data-driven
                                    marketing. Every service is tailored to your goals, so you get a seamless,
                                    growth-focused outcome.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>How does your five-step process work?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
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
                    </div>

                    <!-- Question 3 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>How long does it take to launch a Shopify store?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Typical Shopify projects run 4–6 weeks from kickoff to launch. We move fast by using
                                    proven templates, AI-powered recommendations, and real-time feedback loops—so you start
                                    selling sooner.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>Can you integrate AI features into my website or app?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Absolutely. We build <b>custom AI</b> solutions—chatbots, recommendation engines,
                                    predictive analytics—directly into your site or platform, giving you smarter user
                                    interactions and data insights.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>Which industries do you specialize in?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Our expertise spans <b>Healthcare, E-Commerce, SaaS, Retail, Restaurants, Real Estate,
                                    Education, </b>and <b>Travel & Tourism.</b> We leverage deep sector knowledge to
                                    deliver solutions that hit the mark from day one.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Column 2 -->
                <div class="space-y-4">

                    <!-- Question 6 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>How can I track the progress of my project?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    You’ll have access to our project portal with live task boards, milestone updates, and
                                    weekly video check-ins. Plus, our chatbot is on standby 24/7 for status queries and
                                    quick clarifications.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>Do you offer ongoing support after launch?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Yes— <b>our Growth</b> & Support phase means we stay with you long after launch. We
                                    handle updates, A/B tests, performance tuning, and feature enhancements to keep your
                                    digital products evolving.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 8 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>How do you ensure website security and data privacy?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Security is built in from day one. We use industry-standard encryption, conduct regular
                                    vulnerability scans, and follow GDPR/HIPAA compliance practices—so your data and your
                                    customers’ data always stay safe.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>What is the cost of custom software development?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    Every project is unique, so we provide a transparent, milestone-based quote after our
                                    Discovery & Research phase. Typical mid-range projects start around <b>PKR 300,000 </b>
                                    with flexible payment options to suit your budget.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Question 10 -->
                    <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden transition shadow-[0_2px_8px_rgba(0,13,22,0.02)] hover:border-slate-300 duration-300">
                        <button class="faq-header w-full flex justify-between items-center px-6 py-4 text-left font-semibold bg-white text-slate-800 hover:text-[#01a0d8] transition-colors duration-200">
                            <span>How do I get started with Qonkar Technologies?</span>
                            <div class="faq-icon min-w-8 min-h-8 w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 transition-all duration-300">
                                <svg class="w-4 h-4 transition-transform duration-300 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 bg-white">
                            <div class="px-6 pb-5 text-slate-600 font-light text-[14px] leading-relaxed bg-white">
                                <p>
                                    It’s easy: click <b>“Book Your Free Strategy Call”</b>, share your goals, and we’ll send
                                    over a tailored roadmap within 48 hours. No obligations—just a friendly conversation
                                    about your growth potential.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>



    <script src="script/navbar.js"></script>
    <script src="script/FAQ.js"></script>
      

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
