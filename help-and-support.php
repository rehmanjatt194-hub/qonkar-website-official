<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    
    
    <!-- ? Basic SEO Meta -->
    
    
    <meta name="description"
        content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    

    <!-- ? Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="/preview.webp" />



    <!-- ? Google ICONS -->
    
    

    <!-- ? Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- ? Title -->
    <title>Help & Support | Qonkar Technologies</title>

    <!-- ? Tailwind CSS -->
    

    <!-- ? Script for the Case Studies Section -->
    

    <!-- ? Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-HJ6VFPLL90');
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

    <!-- Hero / Intro Section -->
    <section
        class="mt-4 relative max-w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>
        <div class="absolute inset-0 bg-[url('images/hero-section/privacy-bg.webp')] bg-center bg-cover opacity-40">
        </div>
        <div class="absolute inset-0 hero-pattern"></div>

        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">Help & Support</h1>
            <p class="text-base font-light leading-relaxed">
                Need assistance? Our dedicated support team is here to help you with any questions, issues, or guidance
                you may need while using Qonkar. Explore our resources or reach out directly.


            </p>
        </div>
    </section>



    <!-- Main Help & Support Content -->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-8">

        <!-- Getting Started -->
        <div class="px-6 py-2 sm:px-8 rounded-lg shadow hover:shadow-lg transition-shadow">
            <h2 class="flex items-center text-xl sm:text-2xl font-semibold mb-4">
                <span class="w-1 h-6 bg-gradient-to-b from-[#067888] to-[#42F8BF] mr-3 rounded"></span>
                Getting Started
            </h2>
            <p class="leading-relaxed">
                Welcome to Qonkar! You can explore all features directly without creating an account. Browse our
                platform to access services, discover updates, and find the information you need quickly. Our interface
                is designed to be intuitive, ensuring you can navigate and use Qonkar smoothly on any device.
            </p>
        </div>

        <!-- Technical Issues -->
        <div class="px-6 py-2 sm:px-8 rounded-lg shadow hover:shadow-lg transition-shadow">
            <h2 class="flex items-center text-xl sm:text-2xl font-semibold mb-4">
                <span class="w-1 h-6 bg-gradient-to-b from-[#067888] to-[#42F8BF] mr-3 rounded"></span>
                Technical Issues
            </h2>
            <p class="leading-relaxed">
                Occasionally, you may encounter technical difficulties such as pages not loading, broken links, or
                display issues. Try refreshing your browser, clearing your cache, or switching to a different device or
                browser. If the problem persists, our support team is ready to assist—please provide any relevant
                details, screenshots, or error messages to help us resolve the issue quickly.
            </p>
        </div>

        <!-- Contact Support -->
        <div class="px-6 py-2 sm:px-8 rounded-lg shadow hover:shadow-lg transition-shadow">
            <h2 class="flex items-center text-xl sm:text-2xl font-semibold mb-4">
                <span class="w-1 h-6 bg-gradient-to-b from-[#067888] to-[#42F8BF] mr-3 rounded"></span>
                Contact Support
            </h2>
            <p class="leading-relaxed">
                Our dedicated support team is here to help you with any questions or concerns. Reach out to us anytime:
                <br>
                Email: <span class="text-[#067888] underline">info@qonkar.com</span><br>
                Phone: +92-305-8214945<br>
                We strive to respond promptly and provide helpful solutions. You can also use the live chat feature on
                the website for real-time assistance during business hours.
            </p>
        </div>

        <!-- Feedback & Suggestions -->
        <div class="px-6 py-2 sm:px-8 rounded-lg shadow hover:shadow-lg transition-shadow">
            <h2 class="flex items-center text-xl sm:text-2xl font-semibold mb-4">
                <span class="w-1 h-6 bg-gradient-to-b from-[#067888] to-[#42F8BF] mr-3 rounded"></span>
                Feedback & Suggestions
            </h2>
            <p class="leading-relaxed">
                Your input is valuable to us. Please share any suggestions, report issues, or provide ideas for new
                features through our support channels. Every message is carefully reviewed to improve Qonkar, enhance
                user experience, and ensure our platform meets your needs effectively.
            </p>
        </div>

    </section>

    <!-- FAQs -->
    <section class="max-w-6xl py-10 mx-auto px-4 sm:px-6 lg:px-8 bg-[var(--body-bg)] mb-2 text-white ">
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

                    <!-- Question 2 -->
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

                    <!-- Question 3 -->
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

                    <!-- Question 4 -->
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
                    <!-- Question 5 -->
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

                <!-- Column 2 -->
                <div class="space-y-4">
                    <!-- Question 6 -->
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
                    <!-- Question 7 -->
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
                    <!-- Question 8 -->
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
                    <!-- Question 9 -->
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
                    <!-- Question 10 -->
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
