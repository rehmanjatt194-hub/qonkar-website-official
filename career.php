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
        // .php extension hatao
        $request_uri = str_replace('.php', '', $request_uri);
        // Trailing slash hatao
        $request_uri = rtrim($request_uri, '/');
        
        $finalCanonical = "https://qonkar.com" . $request_uri;
        ?>
        <link rel="canonical" href="<?php echo $finalCanonical; ?>" />
    <meta name="description" content="Qonkar - A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords" content="Qonkar, IT company, software solutions, web development, tech agency, digital services" />
    

    
    
    
    <title>Career | Qonkar Technologies</title>

    
    
    

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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>


    <section class="relative mt-10 lg:mt-16 mb-10 max-w-7xl mx-auto rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.4)] border border-white/5 bg-[#000d16]/40 backdrop-blur-md">
        <!-- Grid layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center p-6 sm:p-10 lg:p-16 relative z-10">
            
            <!-- Left Side: Content (6 cols on lg) -->
            <div class="lg:col-span-6 flex flex-col items-center lg:items-start text-center lg:text-left gap-6 w-full">
                <div class="glass-border w-max mb-4">
                    <div class="glass-background">
                        <div class="glass text-sm font-light text-center text-white px-6">
                            &#9679; Careers At Qonkar
                        </div>
                    </div>
                </div>
                
                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold text-white leading-[1.1] drop-shadow-2xl">Join Our <span class="bg-gradient-to-r from-[#2BB5BC] to-[#95C951] bg-clip-text text-transparent font-bold">Team</span></h1>
                
                <p class="text-gray-300 text-base lg:text-lg font-light leading-relaxed max-w-xl">
                    At Qonkar, we don't just write code; we architect solutions. We are looking for passionate individuals ready to build the future of technology in an agile, innovative environment.
                </p>
                
                <a href="#openings" class="mt-4 group btn-dark-theme">
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
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/flexible_work_1780906445855.webp')] bg-cover bg-center"></div>
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
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/accelerated_growth_1780906471375.webp')] bg-cover bg-center"></div>
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
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/dynamic_culture_1780906510449.webp')] bg-cover bg-center"></div>
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
                <div class="absolute inset-0 opacity-15 group-hover:opacity-30 transition-opacity duration-500 bg-[url('/images/career-benefits/health_wellness_1780906541952.webp')] bg-cover bg-center"></div>
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>

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
