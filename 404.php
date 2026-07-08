<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    
    
    <!-- Basic SEO Meta -->
    
    
    <meta name="description"
        content="404 Page Not Found. Qonkar Technologies IT solutions and digital services." />
    <meta name="keywords"
        content="Qonkar, 404, page not found, IT company, software solutions, web development, tech agency, digital services" />
    
    <meta name="robots" content="noindex,follow" />

    <!-- Open Graph -->
    <meta property="og:title" content="404 Page Not Found | Qonkar Technologies" />
    <meta property="og:description" content="The page you are looking for does not exist. Visit Qonkar Technologies homepage." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/404" />
    <meta property="og:image" content="/preview.webp" />

    <!-- Google ICONS -->
    
    

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Title -->
    <title>404 Page Not Found | Qonkar Technologies</title>

    <!-- Tailwind CSS -->
    

    <!-- Icons -->
    

    <!-- Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-HJ6VFPLL90');
    </script>
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>


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

<body class="bg-black text-white">

    <!-- Header (same as your contact page) -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

    <!-- 404 Hero Section with same visual style -->
    <section
        class="mt-4 relative max-w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[60vh] rounded-lg overflow-hidden flex items-center justify-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('images/hero-section/contact.webp')] bg-center bg-cover opacity-40"></div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 hero-pattern"></div>

        <!-- Content -->
        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">
            <p class="text-sm tracking-[0.2em] uppercase text-white/80">
                Oops. Page not found
            </p>

            <h1 class="text-6xl sm:text-7xl md:text-8xl font-extrabold tracking-tight">
                404
            </h1>

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-semibold mt-2">
                This page could not be found
            </h2>

            <p class="text-base sm:text-lg font-light leading-relaxed max-w-2xl mx-auto">
                The link you followed might be broken or the page may have been removed.  
                You can go back to the homepage or reach out to Qonkar Technologies for assistance.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
                <a href="https://qonkar.com"
                   class="
 btn-dark-theme">
                    Back to Home
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>

                <a href="/contact-us"
                   class="
 btn-light-theme">
                    Contact Support
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 8a2 2 0 00-2-2h-4l-2-2-2 2H7a2 2 0 00-2 2v9a2 2 0 002 2h12a2 2 0 002-2V8z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Optional small helpful links under hero -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-12">
        <div class="background-backdrop bg-gradient-to-b from-[#0F0F0F]/40 to-[#0E1414]/40 rounded-lg border border-gray-900 p-6 sm:p-8">
            <h3 class="text-lg sm:text-xl font-semibold mb-3">
                Quick Links
            </h3>
            <p class="text-sm text-white/80 mb-4">
                Here are a few useful pages that might help you find what you are looking for.
            </p>
            <div class="flex flex-wrap gap-3 text-sm">
                <a href="/services/software-development" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Website Development
                </a>
                <a href="/services/shopify" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Shopify Development
                </a>
                <a href="/services/branding-and-performance-marketing" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Branding and Marketing
                </a>
                <a href="/portfolio" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Our Portfolio
                </a>
                <a href="/blogs" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Blogs
                </a>
                <a href="/career" class="px-4 py-2 rounded-full border border-white/20 hover:border-[var(--secondary-color)] hover:text-[var(--secondary-color)] transition">
                    Careers
                </a>
            </div>
        </div>
    </section>

    <!-- Footer (same as your contact page) -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>


    <script src="script/navbar.js"></script>

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




