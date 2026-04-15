<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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

    <!-- ✅ Open Graph (Social Media Preview) -->
    <meta property="og:title" content="Qonkar - IT Solutions" />
    <meta property="og:description" content="We build modern IT solutions with creativity and technology." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com" />
    <meta property="og:image" content="https://qonkar.com/preview.png" />



    <!-- ✅ Google ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- ✅ Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- ✅ Title -->
    <title>Contact Us | Qonkar Technologies</title>

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

  <section
        class=" mt-4 relative max-w-[95%]  mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('images/hero-section/contact.jpg')] bg-center bg-cover opacity-40"></div>

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
                    <form id="contactForm" class="w-full space-y-4 p-6 sm:p-8 relative z-10 text-white 
                           bg-[url('images/card_back_drop.svg')] bg-cover bg-center bg-no-repeat 
                           bg-black/90 bg-blend-multiply overflow-hidden rounded-md">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Full Name" name="full_name" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                            <input type="email" placeholder="Email" name="email" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" placeholder="Phone Number" name="phone_number" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                            <input type="text" placeholder="Subject" name="subject" required
                                class="w-full border border-gray-700 rounded-md px-4 py-2 bg-transparent text-white">
                        </div>

                        <!-- ✅ New Budget Field -->
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



            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                
                
            
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
            <div class="flex flex-col md:items-start md:text-left mb-8">
                <h2 class="text-xl font-bold mb-2">Registered By</h2>
            <div class="flex items-center space-x-18 gap-10 ">
                <a href="https://techdestination.com/" target="_blank">
                    <img src="/images/company-logos/PSEB_black.webp" alt="Pakistan software Export Board" class="w-14 object-contain" />
                </a>
                
                <a href="https://www.secp.gov.pk/" target="_blank">
                    <img src="/images/company-logos/SECP.webp" alt="Securities & Exchange Commission of Pakistan" class="w-16 object-contain" />
                </a>
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
</body>

</html>