<?php
require_once 'db-path.php'; // path relative to current file

require_once ADMIN_URL.'/database_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/head.php'; ?>

    
    
    
    
    
    <title>Blogs | Qonkar Technologies</title>
    
    
    
    
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <style>
        #categorySlider::-webkit-scrollbar { display: none; }
        #categorySlider { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
    </style>
    <link rel="canonical" href="/blogs" />

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

<body class="bg-[#000d16]">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>

    <section class="mt-4 relative w-[95%] mx-auto px-4 sm:px-6 lg:px-8 min-h-[50vh] rounded-lg overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-[linear-gradient(135deg,#067888_0%,#12778C_50%,#42F8BF_100%)]"></div>
        <div class="absolute inset-0 bg-[url('/images/hero-section/blog-page.webp')] bg-center bg-cover opacity-40"></div>
        <div class="absolute inset-0 hero-pattern"></div>
        <div class="relative z-20 text-center text-white px-6 sm:px-10 lg:px-20 py-10 space-y-6 max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl leading-snug font-bold">Explore Ideas, Insights & Innovation</h1>
            <p class="text-base font-light leading-relaxed">Welcome to our blog, a space where we share the latest trends, practical tips, and expert perspectives on technology, design, and digital growth.</p>
        </div>
    </section>

    <section class="bg-[#000d16] py-12 mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative">
        <div class="container mx-auto relative">

        </div>

        <div class="mt-10 sm:mt-0 flex relative flex-col gap-0 sm:gap-4 ">
            <div class="relative mt-6">
                <div id="categorySlider" class="flex gap-4 py-2 overflow-x-auto scroll-smooth touch-pan-x whitespace-nowrap transition-all duration-300 max-w-full relative z-10">
                    <button id="cat-0" data-id="0" class="category-btn px-6 py-2 rounded-lg border-2 border-[var(--secondary-color)] bg-white text-black whitespace-nowrap transition-all duration-300 hover:scale-105 shadow-lg">All</button>
                    <?php
                    // Fixed query to match your database column 'blog_category_title'
                    $query = "SELECT * FROM blogs_category WHERE status = 'active' ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Using correct column name from DB: blog_category_title
                            echo '<button id="cat-' . $row['id'] . '" data-id="' . $row['id'] . '" class="category-btn px-6 py-2 rounded-lg border-2 border-[var(--secondary-color)] bg-black/90 text-[var(--secondary-color)] whitespace-nowrap transition-all duration-300 hover:bg-white hover:text-[var(--secondary-color)] hover:scale-105 shadow-lg">' . htmlspecialchars($row['blog_category_title']) . '</button>';
                        }
                    }
                    ?>
                </div>
                <div class="hidden sm:flex pointer-events-none absolute inset-y-0 right-0 z-50">
                    <div class="w-16 h-full bg-gradient-to-l from-[#080808] to-transparent"></div>
                </div>
            </div>
        </div>

        <div id="blogResults" class="mt-4"></div>
        <div id="shareButtons"></div>
    </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>



    <script src="script/navbar.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.getElementById("categorySlider");
            const buttons = document.querySelectorAll('.category-btn');
            const blogContainer = document.getElementById("blogResults");
            const shareButtonsContainer = document.getElementById("shareButtons");

            if (document.getElementById("scrollLeft")) {
                document.getElementById("scrollLeft").addEventListener("click", () => slider.scrollBy({ left: -200, behavior: "smooth" }));
            }
            if (document.getElementById("scrollRight")) {
                document.getElementById("scrollRight").addEventListener("click", () => slider.scrollBy({ left: 200, behavior: "smooth" }));
            }

            function showSkeleton() {
                blogContainer.innerHTML = `<div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full animate-pulse">${Array(6).fill().map(() => `<div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 p-3 h-64"></div>`).join("")}</div>`;
            }

            function fetchBlogs(categoryId = 0, page = 1) {
                if (page == 1) showSkeleton();
                
                fetch("/blog-process.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "category_id=" + categoryId + "&page=" + page
                })
                .then(response => response.text())
                .then(data => {
                    setTimeout(() => {
                        if (page == 1) {
                            blogContainer.innerHTML = data;
                        } else {
                            const oldLoadMore = document.querySelector('.load-more-container');
                            if (oldLoadMore) oldLoadMore.remove();
                            
                            const tempDiv = document.createElement('div');
                            tempDiv.innerHTML = data;
                            
                            const newGrid = tempDiv.querySelector('.grid');
                            const existingGrid = blogContainer.querySelector('.grid');
                            
                            if (existingGrid && newGrid) {
                                existingGrid.insertAdjacentHTML('beforeend', newGrid.innerHTML);
                                const newLoadMore = tempDiv.querySelector('.load-more-container');
                                if (newLoadMore) {
                                    blogContainer.appendChild(newLoadMore);
                                }
                            } else {
                                blogContainer.insertAdjacentHTML('beforeend', data);
                            }
                        }
                        initShareButtons();
                    }, page == 1 ? 500 : 0);
                })
                .catch(err => console.error("AJAX error:", err));
            }

            const urlParams = new URLSearchParams(window.location.search);
            const initialCategory = urlParams.get("category") || 0;
            fetchBlogs(initialCategory);

            buttons.forEach(btn => {
                btn.addEventListener("click", function() {
                    buttons.forEach(b => {
                        b.classList.remove('bg-white', 'text-black');
                        b.classList.add('bg-black/90', 'text-[var(--secondary-color)]');
                    });
                    this.classList.remove('bg-black/90', 'text-[var(--secondary-color)]');
                    this.classList.add('bg-white', 'text-black');
                    fetchBlogs(this.getAttribute("data-id"), 1);
                });
            });

            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("load-more-btn")) {
                    const page = e.target.getAttribute("data-next");
                    const activeCategory = document.querySelector('.category-btn.bg-white')?.getAttribute("data-id") || 0;
                    fetchBlogs(activeCategory, page);
                }
                const arrowBtn = e.target.closest(".blog-arrow-btn");
                if (arrowBtn) {
                    window.location.href = `/blog/${arrowBtn.dataset.slug}`;
                }
            });

            function initShareButtons() {
                if (!shareButtonsContainer) return;
                const currentUrl = encodeURIComponent(window.location.href);
                shareButtonsContainer.innerHTML = `
                <div class="flex flex-col items-center justify-center gap-3 mt-8 pb-8">
                    <div class="flex items-center gap-2 text-white text-lg font-light">
                        <span class="material-symbols-outlined text-[var(--secondary-color)]">share</span><span>Share page</span>
                    </div>
                    <div class="flex gap-4 text-2xl text-white">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=${currentUrl}" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/?text=${currentUrl}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <button onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied!');"><i class="fas fa-link"></i></button>
                    </div>
                </div>`;
            }
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
