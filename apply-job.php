<?php
require_once 'db-path.php'; // path relative to current file
require_once ADMIN_URL . '/database_config.php';


// =========================================================
// 1. OLD URL REDIRECT LOGIC (Fix for GSC "Alternate page" Issue)
// =========================================================
// Agar URL mein 'job_id' hai lekin 'slug' nahi hai, to redirect karo.
if (isset($_GET['job_id']) && !isset($_GET['slug'])) {
    $old_id = intval($_GET['job_id']);

    // Database se Slug nikalo (Assuming column name is job_id based on your code below)
    $stmt = $conn->prepare("SELECT slug FROM jobs WHERE job_id = ?");
    $stmt->bind_param("i", $old_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Naya Clean URL banao
        $cleanUrl = "/apply/" . $row['slug'];

        // 301 Permanent Redirect
        header("Location: " . $cleanUrl, true, 301);
        exit();
    }
}
// =========================================================
// END REDIRECT LOGIC
// =========================================================

// 1. Get the slug from the URL
$job_slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$selected_job_id = 0;
$selected_job_title = "";

// 2. Fetch job details using the SLUG
if (!empty($job_slug)) {
    // Prepare statement to prevent SQL injection
    $stmtJob = $conn->prepare("SELECT job_id, job_title FROM jobs WHERE slug = ? AND job_status = 'open' LIMIT 1");
    if ($stmtJob) {
        $stmtJob->bind_param("s", $job_slug);
        $stmtJob->execute();
        $stmtJob->bind_result($selected_job_id, $selected_job_title);
        $stmtJob->fetch();
        $stmtJob->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ6XTSKG0W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-NZ6XTSKG0W');
    </script>

    
    
    <?php
    // Job Canonical Fix
    
    $canonicalUrl = "/career"; // Default fallback
    
    if (isset($_GET['job_id'])) {
        $jobId = intval($_GET['job_id']);
        $stmt = $conn->prepare("SELECT slug FROM jobs WHERE id = ?");
        $stmt->bind_param("i", $jobId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Asli Clean URL bana raha hai
            $canonicalUrl = "/apply/" . htmlspecialchars($row['slug']);
        }
    } elseif (isset($_GET['slug'])) {
        $canonicalUrl = "/apply/" . htmlspecialchars($_GET['slug']);
    }
    ?>
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>" />
    <meta name="description"
        content="Apply for exciting career opportunities at Qonkar Technologies. A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar careers, Qonkar jobs, IT jobs, internships, digital marketing jobs, software development jobs" />
    

    <meta property="og:title"
        content="<?php echo $selected_job_title ? 'Apply for ' . htmlspecialchars($selected_job_title) . ' | Qonkar Technologies' : 'Job Application | Qonkar Technologies'; ?>" />
    <meta property="og:description" content="Submit your application and join the Qonkar Technologies team." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/apply-job" />
    <meta property="og:image" content="/preview" />

    
    

    

    <title>
        <?php
        if ($selected_job_title) {
            echo "Apply for " . htmlspecialchars($selected_job_title) . " | Qonkar Technologies";
        } else {
            echo "Job Application | Qonkar Technologies";
        }
        ?>
    </title>

    

    
    

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-HJ6VFPLL90');
    </script>

    <link rel="canonical" href="/apply-job" />
    <?php
    // Prepare dynamic data for Schema
    $schemaJobTitle = !empty($selected_job_title) ? 'Apply for ' . htmlspecialchars($selected_job_title) : 'Job Application Form';
    $schemaDescription = "Submit your application for " . (!empty($selected_job_title) ? htmlspecialchars($selected_job_title) : "career opportunities") . " at Qonkar Technologies.";
    $currentUrl = "/apply-job" . ($selected_job_id > 0 ? "?job_id=" . $selected_job_id : "");
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "<?php echo $currentUrl; ?>",
          "url": "<?php echo $currentUrl; ?>",
          "name": "<?php echo $schemaJobTitle; ?>",
          "description": "<?php echo $schemaDescription; ?>",
          "isPartOf": {
            "@id": "/#website"
          },
          "image": "/images/qonkar_q.webp"
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://qonkar.com"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Careers",
              "item": "/career"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "<?php echo $schemaJobTitle; ?>"
            }
          ]
        },
        {
          "@type": "Organization",
          "@id": "/#organization",
          "name": "Qonkar Technologies",
          "url": "https://qonkar.com",
          "logo": "/images/qonkar_logo.webp",
          "sameAs": [
            "https://www.linkedin.com/company/qonkar",
            "https://www.facebook.com/qonkar",
            "https://www.instagram.com/qonkartechnologies",
            "https://www.youtube.com/@QonkarTechnologiesPvtLtd"
          ]
        }
      ]
    }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Loading Overlay Style */
        #loaderOverlay {
            transition: opacity 0.3s ease-in-out;
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

    <!-- Screen Loader Overlay -->
    <div id="loaderOverlay"
        class="fixed inset-0 z-[100] hidden opacity-0 flex items-center justify-center bg-black/70 backdrop-blur-sm pointer-events-none">
        <div class="flex flex-col items-center">
            <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-[var(--secondary-color)]">
            </div>
            <p class="text-white mt-4 font-medium">Submitting application...</p>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>


    <section
        class=" mt-4 relative mb-4 max-w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>

        <div class="absolute inset-0 bg-[url('/images/icons/services/01.webp')] bg-center bg-cover opacity-40"></div>

        <div class="absolute inset-0 hero-pattern"></div>

        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">

            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">
                Your Next Journey Starts Here
            </h1>

            <p class="text-base  font-light leading-relaxed">
                At Qonkar, we foster growth, innovation, and collaboration. Join us to make an impact and take the next
                step in your career.
            </p>

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


    <section class="mt-10 mb-16 px-4">
        <div class="relative p-8 md:p-12 rounded-2xl border border-[#01a0d8] bg-[#000810] shadow-[0_0_30px_rgba(1,160,216,0.08)] max-w-4xl mx-auto">

            <div class="relative text-white">

                <?php if (!empty($selected_job_title)): ?>
                    <h2 class="text-3xl text-center font-bold mb-2">
                        Apply for <?php echo htmlspecialchars($selected_job_title); ?>
                    </h2>
                    <p class="text-center text-sm text-gray-300 mb-8">
                        Fill out the form below to apply for
                        <strong><?php echo htmlspecialchars($selected_job_title); ?></strong>.
                    </p>
                <?php else: ?>
                    <h2 class="text-3xl text-center font-bold mb-8">Job Application Form</h2>
                <?php endif; ?>

                <form id="jobApplicationForm" action="/apply-process" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    <?php if ($selected_job_id > 0): ?>
                        <input type="hidden" name="job_id" value="<?php echo $selected_job_id; ?>">
                    <?php endif; ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Full Name" name="name" required
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none">

                        <input type="email" placeholder="Email" name="email" required
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Phone Number" name="phone_number" required
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none">

                        <select id="countrySelect" name="country" required
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white focus:border-[#01a0d8] focus:outline-none">
                            <option value="">Select Country</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <select id="stateSelect" name="state" required disabled
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white focus:border-[#01a0d8] focus:outline-none disabled:opacity-50">
                            <option value="">Select State</option>
                        </select>

                        <select id="citySelect" name="city" required disabled
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white focus:border-[#01a0d8] focus:outline-none disabled:opacity-50">
                            <option value="">Select City</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <select name="job_post" required
                            class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white focus:border-[#01a0d8] focus:outline-none">
                            <option value="">Select Job Post</option>
                            <?php
                            $result = $conn->query("SELECT job_id, job_title FROM jobs WHERE job_status='open' ORDER BY created_at DESC");
                            while ($row = $result->fetch_assoc()) {
                                $jid = (int) $row['job_id'];
                                $selected = ($selected_job_id === $jid) ? 'selected' : '';
                                echo "<option value='{$jid}' {$selected}>" . htmlspecialchars($row['job_title']) . "</option>";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <div>
                        <div onclick="document.getElementById('resumeInput').click()"
                            class="w-full flex items-center gap-4 px-4 py-3 bg-[#050d14] border border-white/20 rounded-md cursor-pointer hover:border-[#01a0d8] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#01a0d8]"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-3-3m3 3l3-3" />
                            </svg>
                            <div class="flex flex-col">
                                <span id="resumeText" class="text-gray-300 font-medium">Upload your Resume</span>
                                <p class="text-sm text-gray-500 mt-0.5">DOC, DOCX, PDF</p>
                            </div>
                            <input type="file" id="resumeInput" class="hidden" name="resume" accept=".pdf,.doc,.docx"
                                onchange="document.getElementById('resumeText').textContent = this.files[0]?.name || 'Upload your Resume'">
                        </div>
                    </div>

                    <input type="url" placeholder="Portfolio Link (Optional)" name="portfolio_link"
                        class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none">

                    <input type="url" placeholder="LinkedIn Link (Optional)" name="linkedin"
                        class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none">

                    <textarea rows="4" required name="message"
                        placeholder="Tell us why you are a great fit for this role"
                        class="w-full px-4 py-3 bg-[#050d14] border border-white/20 rounded-md text-white placeholder-gray-400 focus:border-[#01a0d8] focus:outline-none"></textarea>

                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="px-8 py-3 rounded-full border border-[#01a0d8] bg-transparent text-[#01a0d8] font-semibold transition hover:bg-[#01a0d8] hover:text-[#000d16]">
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>



    <script>
        // Fetch Countries, States, and Cities
        window.addEventListener('DOMContentLoaded', async function () {
            const countrySelect = document.getElementById('countrySelect');
            const stateSelect = document.getElementById('stateSelect');
            const citySelect = document.getElementById('citySelect');
            
            let countriesData = [];
            let statesData = [];

            const API_KEY = "NmZxRkVRNlJ0UTRpVkZ3SEp0eWdndkZVYWxod2JGd2lpOTUxZUQ5cw==";

            const requestOptions = {
                method: 'GET',
                headers: { "X-CSCAPI-KEY": API_KEY },
                redirect: 'follow'
            };

            function populateSelect(select, list, placeholder) {
                select.innerHTML = `<option value="">${placeholder}</option>`;
                list.sort((a, b) => a.name.localeCompare(b.name)).forEach(item => {
                    const opt = document.createElement('option');
                    opt.value = item.name; // Use Name for submission
                    if (item.iso2) opt.dataset.iso = item.iso2; // Store ISO for API calls
                    opt.textContent = item.name;
                    select.appendChild(opt);
                });
            }

            async function populateStatesFor(countryIso) {
                stateSelect.innerHTML = '<option value="">Loading states...</option>';
                stateSelect.disabled = true;
                citySelect.innerHTML = '<option value="">Select City</option>';
                citySelect.disabled = true;
                
                if (!countryIso) {
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    return;
                }

                try {
                    const res = await fetch(`https://api.countrystatecity.in/v1/countries/${countryIso}/states`, requestOptions);
                    statesData = await res.json();

                    if (res.ok && Array.isArray(statesData)) {
                        populateSelect(stateSelect, statesData, 'Select State');
                        stateSelect.disabled = false;
                    } else {
                        stateSelect.innerHTML = '<option value="">No states available</option>';
                        stateSelect.disabled = true;
                    }
                } catch (error) {
                    console.error('States fetch error:', error);
                    stateSelect.innerHTML = '<option value="">Error loading states</option>';
                    stateSelect.disabled = true;
                }
            }

            async function populateCitiesFor(countryIso, stateIso) {
                citySelect.innerHTML = '<option value="">Loading cities...</option>';
                citySelect.disabled = true;
                
                if (!stateIso) {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    return;
                }

                try {
                    const res = await fetch(`https://api.countrystatecity.in/v1/countries/${countryIso}/states/${stateIso}/cities`, requestOptions);
                    const citiesData = await res.json();

                    if (res.ok && Array.isArray(citiesData)) {
                        populateSelect(citySelect, citiesData, 'Select City');
                        citySelect.disabled = false;
                    } else {
                        citySelect.innerHTML = '<option value="">No cities available</option>';
                        citySelect.disabled = true;
                    }
                } catch (error) {
                    console.error('Cities fetch error:', error);
                    citySelect.innerHTML = '<option value="">Error loading cities</option>';
                    citySelect.disabled = true;
                }
            }

            async function fetchAllCountries() {
                try {
                    const res = await fetch('https://api.countrystatecity.in/v1/countries', requestOptions);
                    if (!res.ok) throw new Error('Failed to fetch countries');
                    countriesData = await res.json();
                    populateSelect(countrySelect, countriesData, 'Select Country');

                    // Pre-fill Pakistan as default
                    const pakistan = countriesData.find(c => c.name === "Pakistan" || c.iso2 === "PK");
                    if (pakistan) {
                        countrySelect.value = pakistan.name;
                        populateStatesFor(pakistan.iso2);
                    }
                } catch (err) {
                    console.error('Countries fetch error:', err);
                    countrySelect.innerHTML = '<option value="">Failed to load countries</option>';
                }
            }

            await fetchAllCountries();

            countrySelect.addEventListener('change', (e) => {
                const selectedOption = e.target.options[e.target.selectedIndex];
                const iso = selectedOption ? selectedOption.dataset.iso : null;
                
                if (iso) {
                    populateStatesFor(iso);
                } else {
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    stateSelect.disabled = true;
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    citySelect.disabled = true;
                }
            });

            stateSelect.addEventListener('change', (e) => {
                const countryIso = countrySelect.options[countrySelect.selectedIndex].dataset.iso;
                const stateIso = e.target.options[e.target.selectedIndex].dataset.iso;
                
                if (stateIso) {
                    populateCitiesFor(countryIso, stateIso);
                } else {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    citySelect.disabled = true;
                }
            });
        });
    </script>

    <script>
        document.getElementById('jobApplicationForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const loader = document.getElementById('loaderOverlay');
            loader.classList.remove('hidden');
            setTimeout(() => loader.classList.remove('opacity-0'), 10);
            loader.classList.add('pointer-events-auto');

            const formData = new FormData(this);

            try {
                const response = await fetch('/apply-process.php', {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    alert('? ' + data.message);
                    window.location.href = '/career';
                } else {
                    alert('? ' + (data.error || 'Failed to submit application.'));
                    loader.classList.add('opacity-0');
                    setTimeout(() => loader.classList.add('hidden'), 300);
                    loader.classList.remove('pointer-events-auto');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('? A network error occurred. Please try again.');
                loader.classList.add('opacity-0');
                setTimeout(() => loader.classList.add('hidden'), 300);
                loader.classList.remove('pointer-events-auto');
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




