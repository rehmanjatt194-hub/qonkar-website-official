<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    


    <!-- ? Basic SEO Meta -->
    
    
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
    <title>Contact Us | Qonkar Technologies</title>

    <!-- ? Tailwind CSS -->
    

    <!-- ? Script for the Case Studies Section -->
    

    <!-- ? Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">
    <style>
        select option {
            background-color: #000;
            color: #fff;
        }

        select option:disabled {
            color: #9ca3af;
            /* Tailwind's gray-400 for placeholder */
        }

      html {
        scroll-behavior: smooth;
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
                    responseBox.innerHTML = `<span class="text-white">? Sending message...</span>`;

                    try {
                        const formData = new FormData(form);
                        const res = await fetch(form.action, {
                            method: form.method,
                            body: formData,
                            headers: {
                                'Accept': 'application/json'
                            }
                        });

                        if (res.ok) {
                            responseBox.innerHTML = `<span class="text-white">? Thanks for your submission! Your message has been sent.</span>`;
                            form.reset();
                        } else {
                            const data = await res.json();
                            const msg = data.errors ? data.errors.map(err => err.message).join(", ") : (data.error || data.message || res.statusText);
                            responseBox.innerHTML = `<span class="text-red-400">? ${msg}</span>`;
                        }
                    } catch (err) {
                        responseBox.innerHTML = `<span class="text-red-400">? Network/error: ${err.message}</span>`;
                    }
                });
            }
        });
    </script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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

  <section
        class=" mt-4 relative max-w-[95%]  mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('images/hero-section/contact.webp')] bg-center bg-cover opacity-40"></div>

        <!-- Pattern Overlay (single SVG, no repeat) -->
        <div class="absolute inset-0 hero-pattern"></div>

        <!-- Hero Content -->
        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">

            <!-- Heading -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">
                Let's Connect and Create
            </h1>

            <!-- Paragraph -->
            <p class="text-base  font-light leading-relaxed">
                At Qonkar, we believe every great collaboration starts with a simple conversation. Whether you’re
                looking for expert guidance, have a project idea in mind, or just need answers to your questions, our
                team is always ready to connect.
            </p>

            <!-- CTA Button -->
            <a href="#contact" class="hero-btn mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold 
        hover:bg-[var(--secondary-color)] hover:text-white transition">
                Get in Touch Today!
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
    
   <section id="contact" class="relative background-backdrop mb-4 max-w-7xl mt-8  mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-20 
           bg-gradient-to-b from-[#0F0F0F]/40 to-[#0E1414]/40 rounded-lg border border-gray-900">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start relative w-fll">
            <!-- Left Side: Contact Info -->
            <div class="space-y-6 text-white pr-6 md:pr-10">
                <!-- Badge -->
                <div class="glass-border inline-block mb-2">
                    <div class="glass-background">
                        <div class="glass text-sm font-light">
                            <p>&#9679; &nbsp; CONTACT US</p>
                        </div>
                    </div>
                </div>

                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-light mb-2">
                    Get in
                    <b>Touch</b>
                </h2>
                <p class="max-w-3xl mx-auto text-white mb-4 font-light sm:text-base">
                    Looking for expert advice on your next IT project? Reach out to Qonkar Technologies today—we’re here
                    to assist with your mobile app development, web design, digital marketing, and more.
                </p>

                <!-- Contact Items -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start relative w-full"> <!-- fixed w-fll -> w-full -->
                    <!-- Location -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full
                bg-gradient-to-br from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)]
                text-white overflow-hidden">
                            <img src="images/icons/services/location.svg" alt="" class="w-6 h-6 object-contain">
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Head Office</h3>
                            <p class="text-gray-300 text-sm">Rashid Minhas Road Karachi, Pakistan</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full
                bg-gradient-to-br from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)]
                text-white overflow-hidden">
                            <img src="images/icons/services/mail.svg" alt="" class="w-6 h-6 object-contain">
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Email Us</h3>
                            <p class="text-gray-300 text-sm">info@qonkar.com</p>
                        </div>
                    </div>

                    <!-- Call -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center rounded-full
                bg-gradient-to-br from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)]
                text-white overflow-hidden">
                            <img src="images/icons/services/call.svg" alt="" class="w-6 h-6 object-contain">
                        </div>
                        <div>
                            <h3 class="font-semibold text-white">Call Us</h3>
                            <p class="text-white text-sm">
                                +44 74 7645 1747 (UK) <br>
                                +92 305 821 4945 (Pakistan)
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Side: Contact Form with Gradient Vertical Border -->
            <div class="relative md:pl-10 w-full">
                <!-- Gradient Divider -->
                <div class="hidden md:block absolute left-0 top-0 h-full w-[1px] 
                bg-gradient-to-b from-transparent via-[var(--secondary-color)] to-transparent"></div>

                <!-- Gradient Border Wrapper -->
                <div class="relative p-[2px] w-full border border-transparent" style="border-image:linear-gradient(138deg,
                    rgba(56,228,174,0.20) 12.07%,
                    rgba(56,228,174,0.66) 39.55%,
                    rgba(7,151,172,0.80) 63.36%,
                    rgba(7,151,172,0.28) 92.67%) 1">

                    <!-- Form -->
                    <form id="contactForm" action="https://formspree.io/f/xjglzovo" method="POST" class="w-full space-y-4 p-6 sm:p-8 relative z-10 text-white 
                           bg-[url('images/card_back_drop.svg')] bg-cover bg-center bg-no-repeat 
                           bg-black/90 bg-blend-multiply overflow-hidden rounded-md">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Full Name" name="name" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                            <input type="email" placeholder="Email" name="email" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Phone Number" name="phone" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                            <input type="text" placeholder="Subject" name="_subject" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                        </div>

                        <!-- ? New Budget Field -->
                        <div>
                            <select name="budget" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-black text-white">
                                <option value="" disabled selected class="text-gray-400">Select Budget</option>
                                <option value="500-1000">$500 - $1000</option>
                                <option value="1000-2000">$1000 - $2000</option>
                                <option value="2000-3000">$2000 - $3000</option>
                                <option value="3000-plus">$3000+</option>

                            </select>
                        </div>

                        <textarea placeholder="Message" rows="5" name="message" required
                            class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white"></textarea>

                        <div class="flex items-center gap-2">
                            <input type="checkbox" name="agree" id="agree" required
                                class="w-4 h-4 text-[var(--secondary-color)] rounded">
                            <label for="agree" class="text-gray-300 text-sm">
                                I agree to the use of personal data exclusively for communication
                            </label>
                        </div>

                        <div id="formResponse"
                            class="hidden mt-4 p-2 text-sm rounded-md border font-medium transition-all duration-300 bg-[var(--tertiary-color)]">
                        </div>

                        <button type="submit"
                            class="w-full bg-[var(--secondary-color)] text-white font-semibold py-3 rounded-md hover:bg-[var(--primary-color)] transition">
                            Send Message
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </section>
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
