<?php
require_once("admin/database_config.php");
?>
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
                Your Next Journey Start Here !
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

    <!-- Job Application Form -->
    <section class="my-16">
        <div class="group relative p-[2px] 
        [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] 
        rounded-[20px] overflow-hidden shadow-lg max-w-4xl mx-auto">

            <div class="relative px-8 py-10 rounded-[18px] bg-black/90 backdrop-blur-[600px] text-white">

                <!-- Heading -->
                <h2 class="text-3xl  text-center mb-8">Job Application Form</h2>

                <form action="apply-process.php" method="POST" enctype="multipart/form-data" class="space-y-6">

                    <!-- Full Name & Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Full Name" name="name"
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                        <input type="email" placeholder="Email" name="email"
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">
                    </div>

                    <!-- Phone & Country -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Phone Number" name="phone_number"
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                        <select id="countrySelect" name="country"
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select Country</option>
                        </select>
                    </div>

                    <!-- City & Job Post -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <select id="citySelect" name="city"
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select City / State</option>
                        </select>

                        <select name="job_post" required
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select Job Post</option>
                            <?php

                            $result = $conn->query("SELECT job_id, job_title FROM jobs WHERE job_status='open' ORDER BY created_at DESC");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['job_id']}'>" . htmlspecialchars($row['job_title']) . "</option>";
                            }
                            $conn->close();
                            ?>
                        </select>

                    </div>

                    <!-- Resume Upload -->
                    <div>
                        <div onclick="document.getElementById('resumeInput').click()"
                            class="w-full flex items-center gap-4 px-4 py-3 border-2 border-gray-500 rounded-md cursor-pointer">

                            <!-- Upload Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-[var(--secondary-color)]"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-3-3m3 3l3-3" />
                            </svg>

                            <!-- Texts -->
                            <div class="flex flex-col">
                                <span id="resumeText" class="text-gray-300">Upload your Resume</span>
                                <p class="text-sm text-gray-400 mt-0.5">DOC, DOCX, PDF</p>
                            </div>

                            <!-- Hidden Input -->
                            <input type="file" id="resumeInput" class="hidden" name="resume"
                                onchange="document.getElementById('resumeText').textContent = this.files[0]?.name || 'Upload your Resume'">
                        </div>
                    </div>


                    <!-- Portfolio Link -->
                    <input type="url" placeholder="Portfolio Link (Optional)" name="portfolio_link"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">
                    <!-- LinkedIn Link -->
                    <input type="url" placeholder="LinkedIn Link (Optional)" name="linkedin"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                    <!-- Message -->
                    <textarea rows="4" name="message" placeholder="Tell us why you’re a great fit for this role"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none"></textarea>

                    <!-- Submit Button -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-8 py-3 rounded-full border-2 border-[var(--secondary-color)] text-[var(--secondary-color)] font-semibold transition hover:bg-[var(--secondary-color)] hover:text-white">
                            Submit Application
                        </button>
                    </div>

                </form>
            </div>
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
        // Fetch Counties and Their Cities
        (async function() {
            const countrySelect = document.getElementById('countrySelect');
            const citySelect = document.getElementById('citySelect');
            let countriesData = []; // This will store the list of countries with their ISO codes.

            // ⚠️ IMPORTANT: Replace 'YOUR_API_KEY_HERE' with your actual key from countrystatecity.in
            const API_KEY = "NmZxRkVRNlJ0UTRpVkZ3SEp0eWdndkZVYWxod2JGd2lpOTUxZUQ5cw==";

            const requestOptions = {
                method: 'GET',
                headers: {
                    "X-CSCAPI-KEY": API_KEY
                },
                redirect: 'follow'
            };

            // Populate country <select>
            function populateCountries(list) {
                countrySelect.innerHTML = '<option value="">Select Country</option>';
                list.sort((a, b) => a.localeCompare(b)).forEach(name => {
                    const opt = document.createElement('option');
                    opt.value = name;
                    opt.textContent = name;
                    countrySelect.appendChild(opt);
                });
            }

            // Fetch all cities for a given country and populate the city select box.
            async function populateCitiesFor(countryName) {
                citySelect.innerHTML = '<option value="">Loading cities...</option>';
                if (!countryName) {
                    citySelect.innerHTML = '<option value="">Select City / State</option>';
                    return;
                }

                const country = countriesData.find(c => c.name === countryName);
                if (!country) {
                    citySelect.innerHTML = '<option value="">Country data not found</option>';
                    return;
                }

                try {
                    // Fetch cities using the country's ISO2 code
                    const citiesRes = await fetch(`https://api.countrystatecity.in/v1/countries/${country.iso2}/cities`, requestOptions);
                    const citiesJson = await citiesRes.json();

                    if (citiesRes.ok && Array.isArray(citiesJson)) {
                        citySelect.innerHTML = '<option value="">Select City / State</option>';
                        citiesJson.forEach(city => {
                            const o = document.createElement('option');
                            o.value = city.name;
                            o.textContent = city.name;
                            citySelect.appendChild(o);
                        });
                    } else {
                        citySelect.innerHTML = '<option value="">No cities available</option>';
                    }
                } catch (error) {
                    console.error('Failed to fetch cities:', error);
                    citySelect.innerHTML = '<option value="">Failed to load cities</option>';
                }
            }

            // Initial fetch to get all countries
            async function fetchAllCountries() {
                try {
                    const res = await fetch('https://api.countrystatecity.in/v1/countries', requestOptions);
                    if (!res.ok) throw new Error('Failed to fetch countries');
                    const json = await res.json();
                    countriesData = json; // Cache the country data for later use
                    populateCountries(countriesData.map(c => c.name));
                } catch (err) {
                    console.error('Error fetching countries:', err);
                    countrySelect.innerHTML = '<option value="">Failed to load countries</option>';
                }
            }

            // Run the initial setup
            await fetchAllCountries();

            // Add the event listener to handle country changes
            countrySelect.addEventListener('change', (e) => populateCitiesFor(e.target.value));

        })();

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