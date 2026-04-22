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
    <meta property="og:image" content="https://qonkar.com/preview.webp" />



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
      "url": "https://qonkar.com/#case-studies",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@type": "CreativeWork",
            "name": "E-Commerce Project Portfolio",
            "description": "Custom designed and developed high-converting Shopify stores with mobile-first architecture.",
            "image": "https://qonkar.com/images/case-studies/background.webp",
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
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative App </a>
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
    <!-- Hero Section -->
    <section class="relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[70vh] rounded-lg overflow-hidden mt-4 mb-4 flex items-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 rounded-lg bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Pattern Overlay (single SVG, no repeat) -->
        <div class="absolute inset-0 rounded-lg hero-pattern"></div>

        <!-- Hero Content -->
                 <div class="max-w-7xl mx-auto relative z-20 grid grid-cols-1 md:grid-cols-2 gap-10 items-center justify-start w-full px-10 sm:px-10 lg:px-9 py-10">

            <!-- Left Side: Text -->
            <div class="text-left text-white space-y-6 order-1">
                <!-- Badge -->
                <div class="hidden glass px-3 py-2 rounded-full text-xs sm:text-sm text-white 
                inline-flex flex-col sm:flex-row items-center gap-1 sm:gap-2 text-center sm:text-left">

                    <!-- Dot New -->
                    <span class="px-3 py-0.5 rounded-full bg-white text-[var(--primary-color)] text-xs">
                        &#9679; New
                    </span>

                    <!-- Text -->
                    <span>
                        Free your team from repetitive work with AI automation.
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl leading-snug">
                    <b>Shopify</b> Experts for High-Performance<br class="hidden sm:block"> <b>E-commerce</b>
                    Stores.
                </h1>

                <!-- Paragraph -->
                <p class="text-base sm:text-lg font-light leading-relaxed max-w-lg">
                    At Qonkar Technologies, our Shopify experts turn your store into a scalable, mobile-first sales
                    machine — optimized for performance, growth, and user experience.
                </p>

                <!-- CTA Button -->
                <a href="/contact-us" class="hero-btn mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--primary-color)] font-semibold 
                hover:bg-[var(--secondary-color)] hover:text-white transition">
                    Launch Your Store with us
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Right Side: Image -->
            <div class="flex justify-center md:justify-end order-2">
                <img src="images/case-study-hero.webp" alt="Service Hero"
                    class="max-h-[40vh] sm:max-h-[50vh] md:max-h-[65vh] object-contain">
            </div>
        </div>
    </section>

     <!-- Case Study -->
    <section id="case-studies" class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <!-- Badge -->
        <div class="glass-border inline-block mb-4">
            <div class="glass-background">
                <div class="glass text-sm font-light">
                    <p>&#9679; &nbsp;PROJECTS</p>
                </div>
            </div>
        </div>

        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-light mb-4">
            What We <b>Build</b>
        </h2>

        <!-- Paragraph -->
        <p class="text-white font-light max-w-3xl mx-auto mb-10">
            Discover the solutions we’ve designed and developed — each project reflects our commitment to quality and
            creativity.
        </p>

        <!-- Category Tabs with Scroll (Disable) -->
        <div class="relative mb-10 w-fit mx-auto">
            <!-- Scroll Buttons -->
            <button id="scrollLeft"
                class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-black/50 p-2 rounded-full text-white hidden">
                &#10094;
            </button>
            <button id="scrollRight"
                class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-black/50 p-2 rounded-full text-white hidden">
                &#10095;
            </button>

            <!-- Scrollable Categories -->
            <div id="tabContainer" class="flex overflow-x-auto no-scrollbar gap-4 px-2 py-2 rounded-full 
               justify-start md:justify-center md:[background-image:var(--gradient)] backdrop-blur-md">

                <button
                    class="tab-btn active px-8 py-2 rounded-full bg-white text-[var(--primary-color)] font-semibold text-xs"
                    data-tab="all">All</button>


                <?php
                $sql = "SELECT category_name FROM case_study_categories WHERE status = 'active'";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Convert category name into a slug for `data-tab`
                        $slug = strtolower(str_replace(' ', '-', $row['category_name']));
                        echo '<button class="tab-btn px-4 py-2 rounded-full text-white font-semibold text-xs sm:text-sm" data-tab="' . $slug . '">' . $row['category_name'] . '</button>';
                    }
                } else {
                    echo "<p>No categories found.</p>";
                }

                ?>

            </div>
        </div>

        <!-- Case Study Cards Grid -->
        <div id="caseStudiesGrid" class="grid grid-cols-1 sm:grid-cols-2 gap-8 justify-items-center">
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
                while ($row = $result->fetch_assoc()) {
                    // ✅ Replace underscores with spaces in categories
                    $categories = str_replace('_', ' ', $row['categories']);

                    // ✅ Convert categories for filtering (data attribute)
                    $dataCategory = strtolower(str_replace(' ', '-', $categories));

                    // ✅ Conditional Arrow (only show if link exists)
                    $arrow = !empty($row['link_of_case_study']) ? '
                <div class="flex-shrink-0">
                    <a href="' . htmlspecialchars($row['link_of_case_study']) . '" target="_blank">
                        <img src="images/icons/arrrow_color.svg" class="w-8 h-8 transition-opacity duration-300 group-hover:hidden" alt="Arrow Icon">
                        <img src="images/icons/arrrow_white.svg" class="w-8 h-8 transition-opacity duration-300 hidden group-hover:block" alt="Arrow Icon White">
                    </a>
                </div>
            ' : '';

                    echo '
            <div class="w-full background-backdrop-card rounded-[15px] shadow-lg overflow-hidden bg-white/5 backdrop-blur-[50px] flex flex-col"
                data-category="' . htmlspecialchars($dataCategory) . '">

                <!-- Top Image Section -->
                <div class="w-full h-80 flex items-center justify-center bg-black/70 border border-gray-900 rounded-t-[15px] border-b-0">
                    <img src="' . htmlspecialchars($row['mockup_image']) . '" alt="' . htmlspecialchars($row['brand_name']) . '" class="w-full object-contain">
                </div>

                <!-- Bottom Text Section -->
                <div class="group relative flex flex-col flex-1 overflow-hidden rounded-b-[15px] p-[2px]
                    [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)]">

                    <div class="relative flex flex-col flex-1 rounded-b-[13px] bg-black overflow-hidden">
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <img src="' . htmlspecialchars($row['background_image']) . '" alt="Hover BG" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-[#046362]/60"></div>
                        </div>

                        <!-- Text Content -->
                        <div class="relative z-10 p-6 flex items-center justify-between">
                            <div>
                                <h3 class="text-lg sm:text-xl md:text-2xl text-left font-light mb-2">'
                        . htmlspecialchars($row['brand_name']) . '
                                </h3>
                                <p class="text-sm md:text-base font-light text-left text-gray-200"><i>'
                        . htmlspecialchars(mb_strimwidth($row['short_description'], 0, 100, '...')) .
                        ' </i></p>
                            </div>
                            ' . $arrow . '
                        </div>
                    </div>
                </div>
            </div>';
                }
            } else {
                echo "<p class='text-gray-400 text-center'>No case studies found.</p>";
            }

            $conn->close();
            ?>
        </div>

        <!-- Pagination -->
        <div id="pagination" class="flex justify-center mt-10 gap-2 flex-wrap"></div>
        <span id="pageInfo" class="text-white text-sm flex items-center"></span>
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
    <script src="script/portfolio.js"></script>


</body>

</html>