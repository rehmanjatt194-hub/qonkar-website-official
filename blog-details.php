<?php
require_once 'db-path.php'; // path relative to current file

require_once ADMIN_URL.'/database_config.php';
// =========================================================
// 1. OLD URL REDIRECT LOGIC (Fix for GSC "Page with Redirect")
// =========================================================
if (isset($_GET['id']) && !isset($_GET['slug'])) {
    $old_id = intval($_GET['id']);
    
    // Check if a slug exists for this ID
    $stmt = $conn->prepare("SELECT slug FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $old_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $cleanUrl = "https://qonkar.com/blog/" . $row['slug'];
        header("Location: " . $cleanUrl, true, 301);
        exit();
    }
}
// =========================================================

// 1. GET SLUG OR ID FROM URL
$identifier = '';
$is_slug = false;

if (isset($_GET['slug'])) {
    $identifier = $conn->real_escape_string($_GET['slug']);
    $is_slug = true;
} elseif (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $identifier = intval($_GET['id']);
    $is_slug = false;
} else {
    // ✅ FIX: Force Hard 404 Header
    header("HTTP/1.1 404 Not Found");
    http_response_code(404);
    include("404.php");
    exit();
}

// 2. FETCH BLOG DATA
$where_clause = $is_slug ? "b.slug = '$identifier'" : "b.id = $identifier";

$sql = "
    SELECT 
        b.id,
        b.blog_title, 
        b.blog_image, 
        b.blog_description, 
        b.meta_description,
        b.slug,
        b.created_at,
        b.status,
        GROUP_CONCAT(c.blog_category_title SEPARATOR ',') AS categories
    FROM blogs b
    LEFT JOIN blog_category_map m ON b.id = m.blog_id
    LEFT JOIN blogs_category c ON m.category_id = c.id
    WHERE $where_clause AND b.status = 'active'
    GROUP BY b.id
";

$result = $conn->query($sql);

// ✅ FIX: TRIGGER HARD 404 IF BLOG NOT FOUND OR INACTIVE
if (!$result || $result->num_rows === 0) {
    header("HTTP/1.1 404 Not Found");
    http_response_code(404);
    include("404.php");
    exit();
}

$blog = $result->fetch_assoc();

// 3. SEO & CANONICAL LOGIC
$dbSlug = $blog['slug'];
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$baseUrl = $scheme . $host . '/'; 

// Redirect if accessed via ID or wrong slug to maintain professional URL structure
if (!$is_slug || (isset($_GET['slug']) && $_GET['slug'] !== $dbSlug)) {
    header("Location: " . $baseUrl . "blog/" . urlencode($dbSlug), true, 301);
    exit;
}

// 4. PREPARE HEAD TAGS
$rawTitle = $blog['blog_title'] ?? 'Untitled';
$pageTitle = $rawTitle . ' | Qonkar Technologies';

if (!empty($blog['meta_description'])) {
    $metaDescRaw = $blog['meta_description'];
} else {
    $rawDesc = strip_tags($blog['blog_description'] ?? '');
    $metaDescRaw = mb_substr(preg_replace('/\s+/', ' ', $rawDesc), 0, 160, 'UTF-8');
}

$canonicalUrl = $baseUrl . 'blog/' . urlencode($dbSlug);

$ogImage = '';
if (!empty($blog['blog_image'])) {
    $ogImage = $baseUrl . 'admin/' . ltrim($blog['blog_image'], '/');
}

$escapedTitle = htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8');
$escapedMetaDesc = htmlspecialchars($metaDescRaw, ENT_QUOTES, 'UTF-8');
$escapedCanonical = htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8');
$escapedOgImage = htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8');
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
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= $baseUrl ?>">

    <title><?= $escapedTitle ?></title>
    <meta name="description" content="<?= $escapedMetaDesc ?>">
    <link rel="canonical" href="<?= $escapedCanonical ?>">
    
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $escapedTitle ?>">
    <meta property="og:description" content="<?= $escapedMetaDesc ?>">
    <meta property="og:url" content="<?= $escapedCanonical ?>">
    <?php if ($ogImage): ?><meta property="og:image" content="<?= $escapedOgImage ?>"><?php endif; ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    

<style>
    body { background-color: #080808; } 

    /* Typography Optimization for UX */
    .blog-content { 
        font-family: 'Cormorant Garamond', serif; 
        color: #f0f0f0; 
        font-size: 22px; 
        /* Decreased line-height for a tighter, editorial feel */
        line-height: 1.6; 
        letter-spacing: 0.01rem;
        font-weight: 400;
    }

    /* Spacing between paragraphs */
    .blog-content p {
        margin-bottom: 1.5rem;
    }

    /* Headlines inside blog content */
    .blog-content h1, .blog-content h2, .blog-content h3 {
        font-family: 'Cormorant Garamond', serif;
        color: #ffffff;
        font-weight: 700;
        /* Tight line-height for headings to keep them bold and punchy */
        line-height: 1.2; 
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .blog-content h1 { font-size: 2.5rem; }
    .blog-content h2 { font-size: 2rem; }
    .blog-content h3 { font-size: 1.75rem; }

    /* Elegant links */
    .blog-content a { 
        color: #3f89c9 !important; 
        text-decoration: underline; 
        text-underline-offset: 3px;
        transition: all 0.3s ease;
    }
    
    .blog-content a:hover { 
        color: #ffffff !important; 
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .blog-content {
            font-size: 19px;
            line-height: 1.5; /* Slightly tighter on mobile to save screen real estate */
        }
        .blog-content h1 { font-size: 2rem; }
    }

    /* Overriding Tailwind Prose defaults */
    .prose-invert :where(p):not(:where([class~="not-prose"], [class~="not-prose"] *)) {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        color: inherit;
    }
      html {
        scroll-behavior: smooth;
      }
</style>

</head>

<body class="bg-[var(--body-bg)] text-white">
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
            <li><a href="/blogs" class="text-[var(--primary-color)]">Blogs</a></li>
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
            <a href="/blogs" class="block w-full text-center py-4 text-[var(--primary-color)] border-b border-white/10">Blogs</a>
            <a href="/career" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">Career</a>
            <a href="/about-us" class="block w-full text-center py-4 hover:text-[var(--primary-color)] border-b border-white/10">About Us</a>
            <a href="/contact-us" class="block w-full text-center py-5 bg-[var(--primary-color)] text-white font-bold transition">Contact Us</a>
        </div>
    </nav>
    <div style="float: right; margin-top: 10px; margin-right: 10px;">
        <div id="google_translate_element"></div>
    </div>
</header>

    <section class="max-w-5xl mx-auto py-12 px-4 text-white">
        <div class="mb-8">
            <a href="/blogs" class="inline-flex items-center gap-2 text-[var(--secondary-color)] hover:gap-3 transition-all">
                <span class="material-symbols-outlined">arrow_back</span> Go to Blogs Page
            </a>
        </div>

        <?php if (!empty($blog['categories'])): ?>
            <div class="flex flex-wrap gap-2 mb-4">
                <?php foreach (explode(',', $blog['categories']) as $category): ?>
                    <span class="px-4 py-1 rounded-full border border-[var(--secondary-color)] text-[var(--secondary-color)] text-sm bg-black/50">
                        <?= htmlspecialchars(trim($category)) ?>
                    </span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight"><?= htmlspecialchars($blog['blog_title']) ?></h1>
        <p class="text-gray-400 text-sm mb-4">Published on <?= date('F d, Y', strtotime($blog['created_at'])) ?></p>

        <?php if (!empty($blog['blog_image'])): ?>
            <div class="rounded-lg overflow-hidden shadow-lg mb-10">
                <img src="system-core-portal-admin-dashboard/<?= htmlspecialchars($blog['blog_image']) ?>" alt="<?= htmlspecialchars($blog['blog_title']) ?>" class="w-full max-h-[600px] object-cover">
            </div>
        <?php endif; ?>

        <div class="prose prose-invert blog-content max-w-none">
            <?= $blog['blog_description'] ?>
        </div>

        <div class="mt-16 flex flex-col items-center gap-6">
            <div class="flex items-center gap-2 text-white text-lg">
                <span class="material-symbols-outlined text-[var(--secondary-color)]">share</span>
                <span>Share on</span>
            </div>
            <div class="flex gap-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-[#1877F2] hover:scale-110 transition"><i class="fab fa-facebook-f"></i></a>
                <a href="https://api.whatsapp.com/send?text=<?= urlencode($canonicalUrl) ?>" target="_blank" class="w-12 h-12 flex items-center justify-center rounded-full bg-[#25D366] hover:scale-110 transition"><i class="fab fa-whatsapp"></i></a>
                <button id="copyLinkBtn" class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-700 relative hover:scale-110 transition">
                    <span class="material-symbols-outlined">link</span>
                    <span id="copyMessage" class="absolute -top-8 left-1/2 -translate-x-1/2 bg-black text-xs px-2 py-1 rounded opacity-0 transition-opacity">Copied</span>
                </button>
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
    <script>
        document.getElementById("copyLinkBtn").addEventListener("click", () => {
            navigator.clipboard.writeText("<?= $escapedCanonical ?>");
            const msg = document.getElementById("copyMessage");
            msg.style.opacity = "1";
            setTimeout(() => { msg.style.opacity = "0"; }, 1500);
        });
    </script>
</body>
</html>