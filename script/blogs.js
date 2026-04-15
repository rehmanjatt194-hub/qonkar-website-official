document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById("categorySlider");
    const buttons = document.querySelectorAll('.category-btn');
    const blogContainer = document.getElementById("blogResults");

    // ✅ Skeleton UI matching your card layout
    function showSkeleton() {
        blogContainer.innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
            <!-- Big Featured Card -->
            <div class="rounded-[15px] border border-[1.087px] border-gray-600/50 bg-gray-700/30 backdrop-blur-[100px] overflow-hidden shadow-lg flex flex-col p-3 animate-pulse">
                <div class="relative rounded-lg overflow-hidden flex-1 bg-gray-600 h-64 mb-3"></div>
                <div class="pt-3 flex flex-col mt-auto space-y-2">
                    <div class="h-6 bg-gray-600 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-600 rounded w-full"></div>
                    <div class="h-8 w-8 bg-gray-600 rounded-full self-end"></div>
                </div>
            </div>

            <!-- Column 2 (2 small cards) -->
            <div class="flex flex-col gap-4">
                <div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 backdrop-blur-[100px] overflow-hidden shadow-lg flex flex-col p-3 animate-pulse">
                    <div class="relative rounded-lg overflow-hidden mb-3 bg-gray-600 h-40"></div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <div class="h-5 bg-gray-600 rounded w-3/4"></div>
                        <div class="h-3 bg-gray-600 rounded w-full"></div>
                        <div class="h-8 w-8 bg-gray-600 rounded-full self-end"></div>
                    </div>
                </div>
                <div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 backdrop-blur-[100px] overflow-hidden shadow-lg flex flex-col p-3 animate-pulse">
                    <div class="relative rounded-lg overflow-hidden mb-3 bg-gray-600 h-40"></div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <div class="h-5 bg-gray-600 rounded w-3/4"></div>
                        <div class="h-3 bg-gray-600 rounded w-full"></div>
                        <div class="h-8 w-8 bg-gray-600 rounded-full self-end"></div>
                    </div>
                </div>
            </div>

            <!-- Column 3 (2 small cards) -->
            <div class="flex flex-col gap-4">
                <div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 backdrop-blur-[100px] overflow-hidden shadow-lg flex flex-col p-3 animate-pulse">
                    <div class="relative rounded-lg overflow-hidden mb-3 bg-gray-600 h-40"></div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <div class="h-5 bg-gray-600 rounded w-3/4"></div>
                        <div class="h-3 bg-gray-600 rounded w-full"></div>
                        <div class="h-8 w-8 bg-gray-600 rounded-full self-end"></div>
                    </div>
                </div>
                <div class="rounded-[15px] border border-gray-600/50 bg-gray-700/30 backdrop-blur-[100px] overflow-hidden shadow-lg flex flex-col p-3 animate-pulse">
                    <div class="relative rounded-lg overflow-hidden mb-3 bg-gray-600 h-40"></div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <div class="h-5 bg-gray-600 rounded w-3/4"></div>
                        <div class="h-3 bg-gray-600 rounded w-full"></div>
                        <div class="h-8 w-8 bg-gray-600 rounded-full self-end"></div>
                    </div>
                </div>
            </div>
        </div>
        `;
    }

    // ✅ Fetch blogs with skeleton and 2-second delay
    function fetchBlogs(categoryId = 0) {
        showSkeleton();
        fetch("process-example.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "category_id=" + categoryId
        })
            .then(response => response.text())
            .then(data => {
                setTimeout(() => {
                    blogContainer.innerHTML = data;
                }, 1000); // 2-second skeleton
            })
            .catch(err => console.error("❌ AJAX error:", err));
    }

    // ✅ Load default blogs
    fetchBlogs(0);

    // ✅ Scroll buttons
    document.getElementById("scrollLeft").addEventListener("click", () => {
        slider.scrollBy({
            left: -200,
            behavior: "smooth"
        });
    });
    document.getElementById("scrollRight").addEventListener("click", () => {
        slider.scrollBy({
            left: 200,
            behavior: "smooth"
        });
    });

    // ✅ Category buttons
    buttons.forEach(btn => {
        btn.addEventListener('click', function () {
            buttons.forEach(b => b.classList.remove('bg-white', 'text-black'));
            buttons.forEach(b => b.classList.add('bg-black/90', 'text-[var(--secondary-color)]'));
            this.classList.add('bg-white', 'text-black');

            const categoryId = this.getAttribute("data-id");
            fetchBlogs(categoryId);
        });
    });
});