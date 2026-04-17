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
        $cleanUrl = "https://qonkar.com/apply/" . $row['slug'];

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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZ6XTSKG0W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-NZ6XTSKG0W');
    </script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    // Job Canonical Fix
    
    $canonicalUrl = "https://qonkar.com/career"; // Default fallback
    
    if (isset($_GET['job_id'])) {
        $jobId = intval($_GET['job_id']);
        $stmt = $conn->prepare("SELECT slug FROM jobs WHERE id = ?");
        $stmt->bind_param("i", $jobId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Asli Clean URL bana raha hai
            $canonicalUrl = "https://qonkar.com/apply/" . htmlspecialchars($row['slug']);
        }
    } elseif (isset($_GET['slug'])) {
        $canonicalUrl = "https://qonkar.com/apply/" . htmlspecialchars($_GET['slug']);
    }
    ?>
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>" />
    <meta name="description"
        content="Apply for exciting career opportunities at Qonkar Technologies. A leading IT company providing modern and innovative digital solutions." />
    <meta name="keywords"
        content="Qonkar careers, Qonkar jobs, IT jobs, internships, digital marketing jobs, software development jobs" />
    <meta name="author" content="Qonkar" />

    <meta property="og:title"
        content="<?php echo $selected_job_title ? 'Apply for ' . htmlspecialchars($selected_job_title) . ' | Qonkar Technologies' : 'Job Application | Qonkar Technologies'; ?>" />
    <meta property="og:description" content="Submit your application and join the Qonkar Technologies team." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://qonkar.com/apply-job" />
    <meta property="og:image" content="https://qonkar.com/preview" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <title>
        <?php
        if ($selected_job_title) {
            echo "Apply for " . htmlspecialchars($selected_job_title) . " | Qonkar Technologies";
        } else {
            echo "Job Application | Qonkar Technologies";
        }
        ?>
    </title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/styles/index.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJ6VFPLL90"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-HJ6VFPLL90');
    </script>

    <link rel="canonical" href="https://qonkar.com/apply-job" />
    <?php
    // Prepare dynamic data for Schema
    $schemaJobTitle = !empty($selected_job_title) ? 'Apply for ' . htmlspecialchars($selected_job_title) : 'Job Application Form';
    $schemaDescription = "Submit your application for " . (!empty($selected_job_title) ? htmlspecialchars($selected_job_title) : "career opportunities") . " at Qonkar Technologies.";
    $currentUrl = "https://qonkar.com/apply-job" . ($selected_job_id > 0 ? "?job_id=" . $selected_job_id : "");
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
            "@id": "https://qonkar.com/#website"
          },
          "image": "https://qonkar.com/images/qonkar_q.webp"
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
              "item": "https://qonkar.com/career"
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
          "@id": "https://qonkar.com/#organization",
          "name": "Qonkar Technologies",
          "url": "https://qonkar.com",
          "logo": "https://qonkar.com/images/qonkar_logo.webp",
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

</head>

<body>

    <!-- Screen Loader Overlay -->
    <div id="loaderOverlay"
        class="fixed inset-0 z-[100] hidden opacity-0 flex items-center justify-center bg-black/70 backdrop-blur-sm pointer-events-none">
        <div class="flex flex-col items-center">
            <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-b-4 border-[var(--secondary-color)]">
            </div>
            <p class="text-white mt-4 font-medium">Submitting application...</p>
        </div>
    </div>

    <header class="sticky top-5 z-50 mx-auto sm:px-4">
        <nav
            class="glass hidden lg:flex max-w-7xl mx-auto items-center justify-between px-6 py-2 rounded-full mt-4 relative">
            <div class="flex items-center">
                <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-9 w-auto"></a>
            </div>

            <ul class="flex gap-8 text-white font-medium items-center">
                <li><a href="/" class="hover:text-[var(--primary-color)]">Home</a></li>

                <li class="group py-2">
                    <button
                        class="flex items-center gap-1 hover:text-[var(--primary-color)] focus:outline-none transition-colors">
                        Services
                        <span class="material-symbols-outlined text-sm transition-transform group-hover:rotate-180"><svg
                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e3e3e3">
                                <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                            </svg></span>
                    </button>

                    <div class="absolute top-full left-0 right-0 mx-auto mt-4 w-[70vw] max-w-[1200px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 p-6 md:p-10 rounded-[15px] shadow-2xl border border-white/10"
                        style="background: rgba(15, 15, 15, 0.98); backdrop-filter: blur(25px);">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xl:gap-10">

                            <div class="flex flex-col gap-3">
                                <h4
                                    class="font-bold text-base xl:text-lg text-[#2BB5BC] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">
                                    Shopify</h4>
                                <div class="flex gap-4">
                                    <div
                                        class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                        <img src="/images/shopify_header.webp" alt="Shopify"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <ul
                                        class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                        <li><a href="/services/shopify-development"
                                                class="hover:text-[#2BB5BC] transition">Shopify Development</a></li>
                                        <li><a href="/services/shopify-theme-design"
                                                class="hover:text-[#2BB5BC] transition">Shopify Theme Design</a></li>
                                        <li><a href="/services/shopify-store-setup"
                                                class="hover:text-[#2BB5BC] transition">Shopify Store Setup</a></li>
                                        <li><a href="/services/speed-optimization"
                                                class="hover:text-[#2BB5BC] transition">Speed optimization</a></li>
                                        <li><a href="/services/migration-services"
                                                class="hover:text-[#2BB5BC] transition">Migration Services</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                <h4
                                    class="font-bold text-base xl:text-lg text-[#95C951] border-b border-white/10 pb-2 mb-2 whitespace-nowrap">
                                    Software</h4>
                                <div class="flex gap-4">
                                    <div
                                        class="w-24 xl:w-32 shrink-0 overflow-hidden rounded-xl border border-white/10 h-24 xl:h-28">
                                        <img src="/images/software_header.webp" alt="Software"
                                            class="h-full w-full object-cover">
                                    </div>
                                    <ul
                                        class="flex flex-col gap-2 text-[12px] xl:text-[14px] text-gray-300 whitespace-nowrap leading-snug pr-4">
                                        <li><a href="/services/web-design-and-development"
                                                class="hover:text-[#95C951] transition">Web Design & Development</a>
                                        </li>
                                        <li><a href="/services/landing-pages-design"
                                                class="hover:text-[#95C951] transition">Landing Pages Design</a></li>
                                        <li><a href="/services/saas-product-development"
                                                class="hover:text-[#95C951] transition">SaaS product development</a>
                                        </li>
                                        <li><a href="/services/automative-app"
                                                class="hover:text-[#95C951] transition">Automative Apps </a></li>
                                        <li><a href="/services/healthcare-and-hippa-apps"
                                                class="hover:text-[#95C951] transition">Healthcare and HIPPA Apps </a>
                                        </li>
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

            <a href="/contact-us"
                class="px-6 py-2 rounded-full bg-[var(--primary-color)] text-white hover:opacity-90 transition font-medium">Contact
                Us</a>
        </nav>

        <nav
            class="glass flex lg:hidden items-center justify-between w-[92%] mx-auto px-5 py-2 rounded-full mt-2 relative">
            <a href="/"><img src="/images/qonkar_logo.webp" alt="Qonkar Logo" class="h-8 w-auto"></a>
            <button id="menu-btn" class="text-white focus:outline-none text-3xl">☰</button>

            <div id="mobile-menu"
                class="hidden absolute top-full left-0 w-full mt-2 z-50 bg-[rgba(10,10,10,0.98)] backdrop-blur-xl flex-col transform scale-y-0 origin-top transition-all duration-300 rounded-2xl overflow-y-auto max-h-[85vh] border border-white/10">
                <a href="/"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold border-b border-white/10">Home</a>

                <div class="border-b border-white/10">
                    <button id="mobile-services-btn"
                        class="w-full text-center py-4 hover:text-[var(--primary-color)] font-semibold flex justify-center items-center gap-1">
                        Services
                        <span id="mobile-arrow"
                            class="material-symbols-outlined text-sm transition-transform text-lg font-bold"><svg
                                xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e3e3e3">
                                <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z" />
                            </svg></span>
                    </button>
                    <div id="mobile-services-menu" class="hidden flex-col bg-white/5 pb-4">
                        <div class="py-2 border-b border-white/10">
                            <p class="text-[#2BB5BC] text-[11px] font-bold uppercase tracking-widest py-2 text-center">
                                Shopify</p>
                            <a href="/services/shopify-development"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Development</a>
                            <a href="/services/shopify-theme-design"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Theme Design</a>
                            <a href="/services/shopify-store-setup"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Shopify
                                Store Setup</a>
                            <a href="/services/speed-optimization"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Speed
                                optimization</a>
                            <a href="/services/migration-services"
                                class="block py-2 hover:text-[#2BB5BC] text-center text-sm text-gray-300 px-4">Migration
                                Services</a>

                        </div>
                        <div class="py-2">
                            <p class="text-[#95C951] text-[11px] font-bold uppercase tracking-widest py-2 text-center">
                                Software</p>
                            <a href="/services/web-design-and-development"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Web
                                Design & Development</a>
                            <a href="/services/landing-pages-design"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Landing
                                Pages Design</a>
                            <a href="/services/saas-product-development"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Saas
                                Product Development</a>
                            <a href="/services/automative-app"
                                class="block py-2 text-center hover:text-[#95C951] text-sm text-gray-300 px-4">Automative
                                App </a>
                            <a href="/services/healthcare-and-hippa-apps"
                                class="block py-2 hover:text-[#95C951] text-center text-sm text-gray-300 px-4">Healthcare
                                & HIPPA App </a>

                        </div>

                    </div>
                </div>

                <a href="/portfolio"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Portfolio</a>
                <a href="/blogs"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Blogs</a>
                <a href="/career"
                    class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Career</a>
                <a href="/about-us"
                    class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About
                    Us</a>
                <a href="/contact-us"
                    class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact
                    Us</a>
            </div>
        </nav>
        <div style="float: right; margin-top: 10px; margin-right: 10px;">
            <div id="google_translate_element"></div>
        </div>
    </header>


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


    <section class="mt-10 mb-16">
        <div class="group relative p-[2px] 
    [background:linear-gradient(138deg,rgba(56,228,174,0.20)12.07%,rgba(56,228,174,0.66)39.55%,rgba(7,151,172,0.80)63.36%,rgba(7,151,172,0.28)92.67%)] 
    rounded-[20px] overflow-hidden shadow-lg max-w-4xl mx-auto">

            <div class="relative px-8 py-10 rounded-[18px] bg-black/90 backdrop-blur-[600px] text-white">

                <?php if (!empty($selected_job_title)): ?>
                    <h2 class="text-3xl text-center mb-2">
                        Apply for <?php echo htmlspecialchars($selected_job_title); ?>
                    </h2>
                    <p class="text-center text-sm text-gray-300 mb-6">
                        Fill out the form below to apply for
                        <strong><?php echo htmlspecialchars($selected_job_title); ?></strong>.
                    </p>
                <?php else: ?>
                    <h2 class="text-3xl text-center mb-6">Job Application Form</h2>
                <?php endif; ?>

                <form id="jobApplicationForm" action="/apply-process" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    <?php if ($selected_job_id > 0): ?>
                        <input type="hidden" name="job_id" value="<?php echo $selected_job_id; ?>">
                    <?php endif; ?>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Full Name" name="name" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                        <input type="email" placeholder="Email" name="email" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Phone Number" name="phone_number" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                        <select id="countrySelect" name="country" required
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select Country</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <select id="stateSelect" name="state" required
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select State</option>
                        </select>

                        <select id="citySelect" name="city" required
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
                            <option value="">Select City</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <select name="job_post" required
                            class="w-full px-4 py-3 bg-black border border-gray-500 rounded-md text-white focus:border-[var(--secondary-color)] focus:outline-none">
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
                            class="w-full flex items-center gap-4 px-4 py-3 border-2 border-gray-500 rounded-md cursor-pointer hover:border-[var(--secondary-color)] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-[var(--secondary-color)]"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-3-3m3 3l3-3" />
                            </svg>
                            <div class="flex flex-col">
                                <span id="resumeText" class="text-gray-300">Upload your Resume</span>
                                <p class="text-sm text-gray-400 mt-0.5">DOC, DOCX, PDF</p>
                            </div>
                            <input type="file" id="resumeInput" class="hidden" name="resume" accept=".pdf,.doc,.docx"
                                onchange="document.getElementById('resumeText').textContent = this.files[0]?.name || 'Upload your Resume'">
                        </div>
                    </div>

                    <input type="url" placeholder="Portfolio Link (Optional)" name="portfolio_link"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                    <input type="url" placeholder="LinkedIn Link (Optional)" name="linkedin"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none">

                    <textarea rows="4" required name="message"
                        placeholder="Tell us why you are a great fit for this role"
                        class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-md text-white placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none"></textarea>

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

    <footer>
        <div
            class="w-full mx-auto bg-gradient-to-r from-[var(--primary-color)] via-[var(--secondary-color)] to-[var(--tertiary-color)] text-white px-10 sm:px-14 py-8 ">
            <div class="max-w-7xl mx-auto">

                <div class="flex flex-col gap-0">
                    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="flex items-center gap-2 text-white px-4 ">
                            <a href="/">
                                <img src="/images/Logo_White_Color.webp" alt="Qonkar Logo" class="w-48">
                            </a>
                        </div>

                        <div class="flex gap-3">
                            <a href="https://www.linkedin.com/company/qonkar" target="_blank"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/qonkar" target="_blank"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/qonkartechnologies" target="_blank"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@QonkarTechnologiesPvtLtd" target="_blank"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black">
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
                            <li><a href="/services/shopify-development" class="hover:underline">Shopify Development</a>
                            </li>
                            <li><a href="/services/shopify-theme-design" class="hover:underline">Shopify Theme
                                    Design</a></li>
                            <li><a href="/services/shopify-store-setup" class="hover:underline">Shopify Store Setup</a>
                            </li>
                            <li><a href="/services/speed-optimization" class="hover:underline">Speed Optimization</a>
                            </li>
                            <li><a href="/services/migration-services" class="hover:underline">Migration Services</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-bold text-lg mb-4">Software</h3>
                        <ul class="space-y-2 text-sm font-light">
                            <li><a href="/services/web-design-and-development" class="hover:underline">Web Design And
                                    Development</a></li>
                            <li><a href="/services/landing-pages-design" class="hover:underline">Landing Pages
                                    Design</a></li>
                            <li><a href="/services/saas-product-development" class="hover:underline">Saas Product
                                    Development</a></li>
                            <li><a href="/services/automative-app" class="hover:underline">Automative App</a></li>
                            <li><a href="/services/healthcare-and-hippa-apps" class="hover:underline">Healthcare And
                                    Hippa Apps</a></li>
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
                                <a href="https://qonkar.com/terms-of-service" class="hover:underline">Terms of
                                    Services</a>
                            </li>
                            <li>
                                <a href="https://qonkar.com/help-and-support" class="hover:underline">Help and
                                    Support</a>
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
                                <img src="/images/company-logos/PSEB_black.webp" alt="Pakistan software Export Board"
                                    class="w-14 object-contain" />
                            </a>

                            <a href="https://www.secp.gov.pk/" target="_blank">
                                <img src="/images/company-logos/SECP.webp"
                                    alt="Securities & Exchange Commission of Pakistan" class="w-16 object-contain" />
                            </a>
                        </div>

                    </div>

                </div>

                <div
                    class="flex flex-col md:flex-row justify-between items-center text-center md:text-left gap-4 border-t border-white/20 pt-4">
                    <p class="text-sm">© Qonkar 2026. All rights reserved</p>
                    <div class="hidden sm:flex flex-wrap justify-center gap-4 text-sm ">
                        <a href="/contact-us" class="hover:underline">Contact Us</a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script>
        // Fetch Countries, States, and Cities
        (async function () {
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
                citySelect.innerHTML = '<option value="">Select City</option>';
                
                if (!countryIso) {
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    return;
                }

                try {
                    const res = await fetch(`https://api.countrystatecity.in/v1/countries/${countryIso}/states`, requestOptions);
                    statesData = await res.json();

                    if (res.ok && Array.isArray(statesData)) {
                        populateSelect(stateSelect, statesData, 'Select State');
                    } else {
                        stateSelect.innerHTML = '<option value="">No states available</option>';
                    }
                } catch (error) {
                    console.error('States fetch error:', error);
                    stateSelect.innerHTML = '<option value="">Error loading states</option>';
                }
            }

            async function populateCitiesFor(countryIso, stateIso) {
                citySelect.innerHTML = '<option value="">Loading cities...</option>';
                
                if (!stateIso) {
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    return;
                }

                try {
                    const res = await fetch(`https://api.countrystatecity.in/v1/countries/${countryIso}/states/${stateIso}/cities`, requestOptions);
                    const citiesData = await res.json();

                    if (res.ok && Array.isArray(citiesData)) {
                        populateSelect(citySelect, citiesData, 'Select City');
                    } else {
                        citySelect.innerHTML = '<option value="">No cities available</option>';
                    }
                } catch (error) {
                    console.error('Cities fetch error:', error);
                    citySelect.innerHTML = '<option value="">Error loading cities</option>';
                }
            }

            async function fetchAllCountries() {
                try {
                    const res = await fetch('https://api.countrystatecity.in/v1/countries', requestOptions);
                    if (!res.ok) throw new Error('Failed to fetch countries');
                    countriesData = await res.json();
                    populateSelect(countrySelect, countriesData, 'Select Country');
                } catch (err) {
                    console.error('Countries fetch error:', err);
                    countrySelect.innerHTML = '<option value="">Failed to load countries</option>';
                }
            }

            await fetchAllCountries();

            countrySelect.addEventListener('change', (e) => {
                const iso = e.target.options[e.target.selectedIndex].dataset.iso;
                populateStatesFor(iso);
            });
            stateSelect.addEventListener('change', (e) => {
                const countryIso = countrySelect.options[countrySelect.selectedIndex].dataset.iso;
                const stateIso = e.target.options[e.target.selectedIndex].dataset.iso;
                populateCitiesFor(countryIso, stateIso);
            });
        })();
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
                    alert('✅ ' + data.message);
                    window.location.href = '/career';
                } else {
                    alert('❌ ' + (data.error || 'Failed to submit application.'));
                    loader.classList.add('opacity-0');
                    setTimeout(() => loader.classList.add('hidden'), 300);
                    loader.classList.remove('pointer-events-auto');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('❌ A network error occurred. Please try again.');
                loader.classList.add('opacity-0');
                setTimeout(() => loader.classList.add('hidden'), 300);
                loader.classList.remove('pointer-events-auto');
            }
        });
    </script>

    <script src="/script/navbar.js"></script>

</body>

</html>