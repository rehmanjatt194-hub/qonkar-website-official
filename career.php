<!DOCTYPE html>
<html lang="en">

<head>
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
    <meta property="og:image" content="https://qonkar.com/preview.png" />



    <!-- ✅ Google ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ✅ Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- ✅ Title -->
    <title>Qonkar Technologies</title>

    <!-- ✅ Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Script for the Case Studies Section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ✅ Theme & Reusable Styles -->
    <link rel="stylesheet" href="styles/index.css">

</head>

<body>

    <header class="sticky top-5 z-50">
        <!-- ✅ Desktop Navbar -->
        <nav class="glass hidden lg:flex 
             max-w-7xl mx-auto items-center justify-between px-2 py-2 rounded-full mt-4">
            <div class="flex items-center">
                <a href="index.html"><img src="images/qonkar_logo.png" alt="Qonkar Logo" class="h-9 w-auto"></a>
            </div>
            <ul class="flex gap-8 text-white font-medium">
                <li><a href="index.html" class="hover:text-[var(--primary-color)]">Home</a></li>
                <li><a href="services.html" class="hover:text-[var(--primary-color)]">Services</a></li>
                <li><a href="#" class="hover:text-[var(--primary-color)]">Industries</a></li>
                <li><a href="portfolio.php" class="hover:text-[var(--primary-color)]">Portfolio</a></li>
                <li><a href="career.php" class="text-[var(--primary-color)]">Careers</a></li>
            </ul>
            <a href="contact-us.html" class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white  
       hover:bg-[var(--secondary-color)] transition">Contact Us</a>
        </nav>

        <!-- ✅ Mobile / Tablet Navbar -->
        <nav class="glass flex lg:hidden 
            items-center justify-between w-[90%] mx-auto px-5 py-2 rounded-full mt-2 relative">
            <img src="images/qonkar_logo.png" alt="Qonkar Logo" class="h-8 w-auto">

            <button id="menu-btn" class="text-white focus:outline-none text-3xl transition" aria-expanded="false"
                aria-controls="mobile-menu">
                ☰
            </button>

            <!-- ✅ Mobile Menu DROPDOWN -->
            <div id="mobile-menu" class="hidden absolute top-full left-0 w-full mt-2 z-50
             bg-[rgba(8,8,8,0.95)] backdrop-blur-md flex-col transform scale-y-0 origin-top
             transition-all duration-300 rounded-2xl overflow-hidden">

                <a href="index.html"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>
                <a href="services.html"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Services</a>
                <a href="#"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Industries</a>
                <a href="portfolio.php"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
                <a href="career.php"
                    class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Careers</a>

                <!-- ✅ CTA on smaller screens -->
                <a href="contact-us.html"
                    class="block w-full text-center py-4 bg-[var(--primary-color)] text-white font-semibold hover:bg-[var(--secondary-color)] transition">
                    Contact Us
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section
        class=" mt-4 relative mb-4 max-w-7xl mx-auto min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('images/icons/services/01.webp')] bg-center bg-cover opacity-40"></div>

        <!-- Pattern Overlay (single SVG, no repeat) -->
        <div class="absolute inset-0 hero-pattern"></div>

        <!-- Hero Content -->
        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">

            <!-- Heading -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">
                Join Our Team at Qonkar
            </h1>

            <!-- Paragraph -->
            <p class="text-base  font-light leading-relaxed">
                At Qonkar, we foster growth, innovation, and collaboration. Join us to make an impact and take the next
                step in your career.
            </p>

            <!-- CTA Button -->
            <a href="#contact" class="hero-btn mt-4 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[var(--secondary-color)] font-semibold 
        hover:bg-[var(--secondary-color)] hover:text-white transition">
                Join Our Team
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>


    <!-- Career Opportunities Section -->
    <section class="relative max-w-7xl mx-auto py-20 px-3">
        <!-- Section Intro -->
        <div class="text-center mb-14">
            <!-- Badge -->
            <div class="glass-border inline-block mb-4">
                <div class="glass-background">
                    <div class="glass text-sm font-light">
                        <p>&#9679; &nbsp;OPPORTUNITES</p>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-light text-white mb-2">
                We're <b>Hiring</b>
            </h2>
            <p class=" font-light leading-relaxed text-white  mx-auto">
                At Qonkar, every role is an opportunity to innovate and grow. Explore our job listings
                and take the first step toward your career journey.
            </p>

        </div>

        <!-- Jobs Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <?php
            $conn = new mysqli("localhost", "root", "", "qonkar_db");
            if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

            // Fetch only open jobs
            $result = $conn->query("SELECT * FROM jobs WHERE job_status='open' ORDER BY created_at DESC");

            while ($row = $result->fetch_assoc()) {
                $jobTitle = htmlspecialchars($row['job_title']);
                // $jobType = htmlspecialchars($row['job_type']);
                $jobDescription = nl2br(htmlspecialchars($row['job_description']));
                $jobLocation = htmlspecialchars($row['location']); // Or add a `location` column to jobs table
                $remoteType =  htmlspecialchars($row['job_type']); // Example static value, or add column if dynamic
                $jobId = $row['job_id'];
            ?>

                <!-- Job Card -->
                <div class="group relative p-[2px] [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] rounded-[20px] overflow-hidden shadow-lg">
                    <div class="relative flex flex-col px-8 py-8 rounded-[18px] bg-black/90 backdrop-blur-[600px] text-white">
                        <!-- Top Row: Icon + Title + Badge -->
                        <div class="flex items-center justify-between w-full mb-4">
                            <div class="flex items-center gap-4">
                                <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center rounded-full 
                    [background:linear-gradient(135deg,var(--primary-color),var(--secondary-color),var(--tertiary-color))]">
                                    <img src="images/icons/Job-Icon.svg" alt="Job Icon" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl"><?php echo $jobTitle; ?></h3>
                            </div>
                            <span class="px-4 py-2 text-xs sm:text-sm rounded-lg bg-[var(--secondary-color)] text-white">
                                <?php echo $remoteType; ?>
                            </span>
                        </div>



                        <!-- Location -->
                        <p class="text-white mb-6"><?php echo $jobLocation; ?></p>

                        <!-- Buttons -->
                        <div class="flex gap-4">
                            <button onclick="document.getElementById('jobModal<?php echo $jobId; ?>').classList.remove('hidden')"
                                class="px-6 py-3 rounded-full border-2 border-[var(--secondary-color)] text-[var(--secondary-color)] text-xs sm:text-sm hover:bg-white transition">
                                Job Details
                            </button>

                            <a href="apply-job.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border-2 border-[var(--secondary-color)] 
                      text-[var(--secondary-color)] transition hover:bg-[var(--secondary-color)] hover:text-white text-xs sm:text-sm">
                                Apply Now
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Job Decription Modal -->
                <div id="jobModal<?php echo $jobId; ?>" class="fixed inset-0 bg-black/50 flex items-center justify-center hidden z-50">
                    <div class="bg-white rounded-lg w-full max-w-lg p-6 relative text-black">
                        <!-- Close icon top-right -->
                        <button onclick="document.getElementById('jobModal<?php echo $jobId; ?>').classList.add('hidden')"
                            class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">
                            &times;
                        </button>

                        <h2 class="text-2xl font-bold mb-4"><?php echo $jobTitle; ?></h2>
                        <p class="mb-6"><strong>Responsibilities:</strong><br><?php echo $jobDescription; ?></p>

                        <!-- Apply Now button at bottom center -->
                        <div class="flex justify-center mt-6">
                            <a href="apply-job.php?job_id=<?php echo $jobId; ?>"
                                class="px-6 py-3 rounded-full border-2 border-[var(--secondary-color)] 
                      bg-[var(--secondary-color)] text-white font-semibold 
                      hover:bg-white hover:text-[var(--secondary-color)] transition">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

            <?php
            }
            $conn->close();
            ?>
        </div>


    </section>



    <footer class="mx-6 mb-6">
        <div class="w-full mx-auto rounded-lg bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-14 py-16 ">
            <!-- Wrapper -->
            <div class="flex flex-col gap-0">
                <!-- First Row: Logo -->
                <div class="flex justify-center md:justify-start">
                    <img src="images/Logo_White_Color.png" alt="Qonkar Logo" class="w-48">
                </div>

                <!-- Second Row: Address + Social Icons -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <!-- Address -->
                    <div class="flex items-center gap-2 text-white">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Rashid Minhas Road,Karachi</span>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="border-t border-white/30 my-8"></div>

            <!-- Columns -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Contact Column -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact with Us!</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li class="flex items-center gap-2"><i class="fas fa-phone"></i> (+44) 7476451747</li>
                        <li class="flex items-center gap-2"><i class="fas fa-phone"></i> (+92) 305 8219445</li>
                        <li class="flex items-center gap-2"><i class="fas fa-envelope"></i> info@qonkar.com</li>
                        <li class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> United Kingdom</li>
                        <li class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Pakistan</li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Services</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="#">Website Design & Development</a></li>
                        <li><a href="#">Shopify Development</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">SEO Services</a></li>
                        <li><a href="#">Paid Advertising</a></li>
                        <li><a href="#">Landing Page Design</a></li>
                        <li><a href="#">Custom Website Design</a></li>
                        <li><a href="#">Shopify Theme Development</a></li>
                        <li><a href="#">Shopify Store Setup</a></li>
                    </ul>
                </div>

                <!-- About Column -->
                <div>
                    <h3 class="font-bold text-lg mb-4">About</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li><a href="#">Qonkar Technologies (PVT) Ltd.</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blogs & News</a></li>
                        <li><a href="#">Partnerships</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Services</a></li>
                        <li><a href="#">Help & Support</a></li>
                        <li><a href="#">Trust and Safety</a></li>
                    </ul>
                </div>

                <!-- Trusted By Column -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Trusted by</h3>
                    <ul class="space-y-2 text-sm font-light">
                        <li>Microsoft</li>
                        <li>Shopify</li>
                        <li>Upwork</li>
                        <li>Fiverr</li>
                        <li>Mailchimp</li>
                        <li>HubSpot</li>
                        <li>Google Ads</li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/30 my-8"></div>

            <!-- Bottom Row -->
            <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                <p>© 2025 Qonkar Technologies</p>
                <div class="flex gap-4 mt-2 md:mt-0">
                    <a href="#">Terms of Services</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Navbar
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isOpen = false;

        menuBtn.addEventListener('click', () => {
            isOpen = !isOpen;
            menuBtn.textContent = isOpen ? '✖' : '☰';
            menuBtn.setAttribute('aria-expanded', String(isOpen));

            if (isOpen) {
                mobileMenu.classList.remove('hidden');
                requestAnimationFrame(() => {
                    mobileMenu.classList.remove('scale-y-0');
                    mobileMenu.classList.add('scale-y-80');
                });
            } else {
                mobileMenu.classList.remove('scale-y-80');
                mobileMenu.classList.add('scale-y-0');
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
            }
        });
    </script>
</body>

</html>