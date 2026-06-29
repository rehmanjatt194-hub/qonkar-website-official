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
        // .php extension hatao
        $request_uri = str_replace('.php', '', $request_uri);
        // Trailing slash hatao
        $request_uri = rtrim($request_uri, '/');
        
        $finalCanonical = "https://qonkar.com" . $request_uri;
        ?>
        <link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    <meta name="description" content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords" content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    <meta name="author" content="Qonkar" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <title>Career | Qonkar Technologies</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/styles/index.css">

    <style>
        /* Enhanced Typography for Blog/Job Content UX */
        .prose {
            font-family: 'Cormorant Garamond', serif;
            font-size: 21px;
            line-height: 1.6;
            color: #333;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .prose p {
            margin-bottom: 1.25rem;
        }

        /* Glassmorphism Utilities */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

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

<body class="bg-[#000d16] text-white">

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
            <li><a href="/career" class="text-[var(--primary-color)]">Career</a></li>
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
                        <a href="/services/automative-app" class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automotive App </a>
                        <a href="/services/healthcare-and-hippa-apps" class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare & HIPPA App </a>                        

                    </div>
                    
                </div>
            </div>

            
            
            <a href="/blogs" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>


    <section class="relative mt-10 lg:mt-16 mb-10 max-w-7xl mx-auto rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.4)] border border-white/5 bg-[#000d16]/40 backdrop-blur-md">
        <!-- Grid layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center p-6 sm:p-10 lg:p-16 relative z-10">
            
            <!-- Left Side: Content (6 cols on lg) -->
            <div class="lg:col-span-6 flex flex-col items-center lg:items-start text-center lg:text-left gap-6 w-full">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#01a0d8]/20 border border-[#01a0d8]/30 backdrop-blur-md">
                    <span class="text-[#01a0d8] text-[10px] sm:text-xs font-bold tracking-[0.15em] uppercase drop-shadow-md">Careers At Qonkar</span>
                </div>
                
                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.1] drop-shadow-2xl">Join Our <span class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold">Team</span></h1>
                
                <p class="text-gray-300 text-base lg:text-lg font-light leading-relaxed max-w-xl">
                    At Qonkar, we don't just write code; we architect solutions. We are looking for passionate individuals ready to build the future of technology in an agile, innovative environment.
                </p>
                
                <a href="#openings" class="mt-4 inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-[#01a0d8] text-[#000d16] border border-[#01a0d8] font-bold hover:bg-transparent hover:text-[#01a0d8] transition-all duration-300 shadow-[0_0_20px_rgba(1,160,216,0.3)] hover:shadow-[0_0_30px_rgba(1,160,216,0.5)] group">
                    View Openings 
                    <i class="fa-solid fa-arrow-down text-sm group-hover:translate-y-1 transition-transform"></i>
                </a>
            </div>

            <!-- Right Side: Image (6 cols on lg) -->
            <div class="lg:col-span-6 w-full flex justify-center">
                <img src="/images/hero-section/career.webp" alt="Join Our Team" class="w-full max-w-lg lg:max-w-none h-auto object-contain transition-transform duration-700 hover:scale-105 rounded-[30px]">
            </div>

        </div>
    </section>

    <!-- Why Qonkar Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Why Qonkar?</h2>
            <p class="text-gray-400 text-lg leading-relaxed font-light">
                We invest in our people as much as we invest in our technology. Our culture is built on empowerment, curiosity, and excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <!-- Card 1 -->
            <div class="relative group rounded-3xl overflow-hidden bg-[#0a0a0a] border border-white/5 p-8 lg:p-10 hover:border-[#01a0d8]/30 transition-all duration-500 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/flexible_work_1780906445855.png')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#000d16] via-[#000d16]/90 to-transparent"></div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-[#01a0d8]/10 border border-[#01a0d8]/30 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-[#01a0d8] text-3xl">schedule</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Flexible Working Hours</h3>
                    <p class="text-gray-400 leading-relaxed font-light">
                        Balancing professional commitments and personal life through outcome-based work structures and flexible schedules.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative group rounded-3xl overflow-hidden bg-[#0a0a0a] border border-white/5 p-8 lg:p-10 hover:border-[#01a0d8]/30 transition-all duration-500 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/accelerated_growth_1780906471375.png')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#000d16] via-[#000d16]/90 to-transparent"></div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-[#01a0d8]/10 border border-[#01a0d8]/30 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-[#01a0d8] text-3xl">trending_up</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Accelerated Growth</h3>
                    <p class="text-gray-400 leading-relaxed font-light">
                        Mentorship programs, continuous learning allowances, and clear career advancement paths designed for high-performers.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative group rounded-3xl overflow-hidden bg-[#0a0a0a] border border-white/5 p-8 lg:p-10 hover:border-[#01a0d8]/30 transition-all duration-500 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/dynamic_culture_1780906510449.png')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#000d16] via-[#000d16]/90 to-transparent"></div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-[#01a0d8]/10 border border-[#01a0d8]/30 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-[#01a0d8] text-3xl">groups</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Dynamic Work Culture</h3>
                    <p class="text-gray-400 leading-relaxed font-light">
                        Work with a vibrant team of diverse experts on challenging global projects that push the boundaries of modern engineering.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative group rounded-3xl overflow-hidden bg-[#0a0a0a] border border-white/5 p-8 lg:p-10 hover:border-[#01a0d8]/30 transition-all duration-500 shadow-[0_4px_30px_rgba(0,0,0,0.3)]">
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/health_wellness_1780906541952.png')] bg-cover bg-center"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#000d16] via-[#000d16]/90 to-transparent"></div>
                
                <div class="relative z-10">
                    <div class="w-14 h-14 rounded-2xl bg-[#01a0d8]/10 border border-[#01a0d8]/30 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-[#01a0d8] text-3xl">favorite</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Health & Wellness</h3>
                    <p class="text-gray-400 leading-relaxed font-light">
                        Comprehensive health coverage, mental health support, and wellness stipends for you and your family.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="openings" class="relative max-w-7xl py-10 lg:py-16 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Current Openings</h2>
                <p class="text-gray-400 font-light max-w-xl">Find your next challenge. We're hiring across engineering, design, and business development.</p>
            </div>
            
            <div class="flex flex-wrap gap-3">
                <button onclick="filterJobs('All')" data-filter="All" class="filter-btn px-5 py-2 rounded-full border border-[#01a0d8] text-[#01a0d8] text-sm transition-all">All</button>
                <button onclick="filterJobs('Remote')" data-filter="Remote" class="filter-btn px-5 py-2 rounded-full border border-white/20 text-gray-400 text-sm hover:border-white/50 hover:text-white transition-all">Remote</button>
                <button onclick="filterJobs('On-Site')" data-filter="On-Site" class="filter-btn px-5 py-2 rounded-full border border-white/20 text-gray-400 text-sm hover:border-white/50 hover:text-white transition-all">On-Site</button>
                <button onclick="filterJobs('Full-Time')" data-filter="Full-Time" class="filter-btn px-5 py-2 rounded-full border border-white/20 text-gray-400 text-sm hover:border-white/50 hover:text-white transition-all">Full-Time</button>
            </div>
        </div>

        <div class="flex flex-col gap-4">
            <?php
            $result = $conn->query("SELECT * FROM jobs WHERE job_status='open' ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                $jobTitle = htmlspecialchars($row['job_title']);
                $jobDescription = $row['job_description'];
                $jobLocation = htmlspecialchars($row['location']);
                $remoteType = htmlspecialchars($row['job_type']);
                $jobId = $row['job_id'];
                $jobSlug = $row['slug']; 
                
                // Determine job type category for filtering
                $filterType = "Full-Time";
                if (stripos($remoteType, 'remote') !== false) {
                    $filterType = "Remote";
                } elseif (stripos($jobLocation, 'on-site') !== false || stripos($jobLocation, 'onsite') !== false || stripos($remoteType, 'on-site') !== false) {
                    $filterType = "On-Site";
                }
            ?>
                <div class="job-card group flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 p-6 sm:p-8 rounded-2xl bg-[#001220] hover:bg-[#00182a] border border-white/5 hover:border-[#01a0d8]/40 transition-all duration-300 cursor-pointer shadow-[0_4px_20px_rgba(0,0,0,0.2)] hover:shadow-[0_4px_30px_rgba(1,160,216,0.15)]" data-dept="<?php echo $filterType; ?>" onclick="document.getElementById('jobModal<?php echo $jobId; ?>').classList.remove('hidden')">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-bold text-white mb-2 group-hover:text-[#01a0d8] transition-colors"><?php echo $jobTitle; ?></h3>
                        <div class="flex items-center gap-3 text-sm text-gray-400 font-mono">
                            <?php if($remoteType) { ?>
                                <span class="text-[#01a0d8]"><?php echo $remoteType; ?></span>
                            <?php } ?>
                            <?php if($jobLocation) { ?>
                                <?php if($remoteType) { ?><span class="w-1 h-1 rounded-full bg-gray-500"></span><?php } ?>
                                <span><?php echo $jobLocation; ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 mt-4 sm:mt-0">
                        <button onclick="document.getElementById('jobModal<?php echo $jobId; ?>').classList.remove('hidden'); event.stopPropagation();"
                            class="px-5 py-2.5 rounded-full border border-white/20 text-gray-300 text-sm font-semibold hover:border-white hover:text-white transition-all whitespace-nowrap">
                            Job Details
                        </button>
                        <a href="/apply/<?php echo $jobSlug; ?>" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#01a0d8] text-[#01a0d8] text-sm font-semibold hover:bg-[#01a0d8] hover:text-[#001220] transition-all whitespace-nowrap" onclick="event.stopPropagation();">
                            Apply Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Job Details Modal (preserved functionality) -->
                <div id="jobModal<?php echo $jobId; ?>" class="fixed inset-0 bg-black/70 flex items-center justify-center hidden z-50 p-4">
                    <div class="bg-white rounded-lg w-full max-w-4xl p-8 relative text-black shadow-2xl max-h-[90vh] flex flex-col">
                        <button onclick="closeJobModal('<?php echo $jobId; ?>')" class="absolute top-4 right-4 text-gray-500 hover:text-black text-3xl font-bold">&times;</button>
                        
                        <div class="flex-1 overflow-y-auto mt-4 pr-4">
                            <h2 class="text-3xl font-bold mb-6 text-[#080808]"><?php echo $jobTitle; ?></h2>
                            <div class="prose max-w-none">
                                <?php echo $jobDescription; ?>
                            </div>
                        </div>

                        <div class="flex justify-center mt-8 border-t pt-6">
                            <a href="/apply-job?slug=<?php echo $jobSlug; ?>"
                                class="px-10 py-3 rounded-md bg-[#01a0d8] text-[#000d16] font-semibold hover:opacity-90 transition duration-300">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

            <?php }
            $conn->close(); ?>
        </div>
    </section>

<footer>
    <div class="w-full mx-auto bg-gradient-to-r from-[#348bcf] to-[#7dd569] text-white px-10 sm:px-14 py-8 ">
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
                        <li><a href="/portfolio" class="hover:underline">Portfolio</a></li>
                        <li><a href="/career" class="hover:underline">Careers</a></li>
                        <li><a href="/blogs" class="hover:underline">Blogs and News</a></li>
                        <li><a href="/privacy-policy" class="hover:underline">Privacy Policy</a></li>
                        <li><a href="/terms-of-service" class="hover:underline">Terms of Services</a></li>
                        <li><a href="/help-and-support" class="hover:underline">Help and Support</a></li>
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

    <script>
        function filterJobs(dept) {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                if(btn.dataset.filter === dept) {
                    btn.className = "filter-btn px-5 py-2 rounded-full border border-[#01a0d8] text-[#01a0d8] text-sm transition-all";
                } else {
                    btn.className = "filter-btn px-5 py-2 rounded-full border border-white/20 text-gray-400 text-sm hover:border-white/50 hover:text-white transition-all";
                }
            });
            
            document.querySelectorAll('.job-card').forEach(card => {
                if(dept === 'All' || card.dataset.dept === dept) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function closeJobModal(id) {
            document.getElementById('jobModal' + id).classList.add('hidden');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('[id^="jobModal"]').forEach(modal => modal.classList.add('hidden'));
            }
        });
    </script>
    <script src="/script/navbar.js"></script>

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
