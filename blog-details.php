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
        $cleanUrl = "/blog/" . $row['slug'];
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
    // ? FIX: Force Hard 404 Header
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

// ? FIX: TRIGGER HARD 404 IF BLOG NOT FOUND OR INACTIVE
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    
    
    
    
    <base href="<?= $baseUrl ?>">

    <title><?= $escapedTitle ?></title>
    <meta name="description" content="<?= $escapedMetaDesc ?>">
    <link rel="canonical" href="<?= $escapedCanonical ?>">
    
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $escapedTitle ?>">
    <meta property="og:description" content="<?= $escapedMetaDesc ?>">
    <meta property="og:url" content="<?= $escapedCanonical ?>">
    <?php if ($ogImage): ?><meta property="og:image" content="<?= $escapedOgImage ?>"><?php endif; ?>

    
    
    
    <link rel="stylesheet" href="styles/index.css">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    

    

<style>
    body { background-color: #000d16; } 

    /* Typography Optimization for UX */
    .blog-content { 
        font-family: "Lexend", sans-serif; 
        color: #d1d5db; /* Tailwind gray-300 */
        font-size: 18px; 
        line-height: 1.8; 
        letter-spacing: 0.015rem;
        font-weight: 300;
    }

    /* Spacing between paragraphs */
    .blog-content p {
        margin-bottom: 2rem;
    }

    /* Headlines inside blog content */
    .blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4 {
        font-family: "Lexend", sans-serif;
        color: #ffffff;
        font-weight: 700;
        line-height: 1.3; 
        margin-top: 3rem;
        margin-bottom: 1.25rem;
    }

    .blog-content h1 { font-size: 2.25rem; color: #01a0d8; }
    .blog-content h2 { font-size: 1.875rem; color: #01a0d8; }
    .blog-content h3 { font-size: 1.5rem; }
    .blog-content h4 { font-size: 1.25rem; }

    /* Elegant links */
    .blog-content a { 
        color: #01a0d8 !important; 
        text-decoration: underline; 
        text-underline-offset: 4px;
        transition: all 0.3s ease;
        font-weight: 500;
    }
    
    .blog-content a:hover { 
        color: #ffffff !important; 
    }
    
    /* Lists */
    .blog-content ul, .blog-content ol {
        margin-bottom: 2rem;
        padding-left: 1.5rem;
    }
    .blog-content li {
        margin-bottom: 0.75rem;
    }
    .blog-content ul li {
        list-style-type: disc;
        color: #d1d5db;
    }
    .blog-content ul li::marker {
        color: #01a0d8;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .blog-content {
            font-size: 16px;
            line-height: 1.7; 
        }
        .blog-content h1 { font-size: 1.75rem; }
        .blog-content h2 { font-size: 1.5rem; }
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
            <div class="rounded-lg overflow-hidden shadow-lg mb-10 flex justify-center bg-black/20">
                <img src="system-core-portal-admin-dashboard/<?= htmlspecialchars($blog['blog_image']) ?>" alt="<?= htmlspecialchars($blog['blog_title']) ?>" class="w-full max-h-[600px] object-contain">
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

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>



    <script src="script/navbar.js"></script>
    <script>
        document.getElementById("copyLinkBtn").addEventListener("click", () => {
            navigator.clipboard.writeText("<?= $escapedCanonical ?>");
            const msg = document.getElementById("copyMessage");
            msg.style.opacity = "1";
            setTimeout(() => { msg.style.opacity = "0"; }, 1500);
        });
    </script>

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
