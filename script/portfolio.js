document.addEventListener("DOMContentLoaded", () => {
    const grid = document.getElementById("caseStudiesGrid");
    const cards = Array.from(grid.children);
    const tabButtons = document.querySelectorAll(".tab-btn");
    const pagination = document.getElementById("pagination");
    const section = document.getElementById("case-studies");

    const perPage = 6;
    let currentPage = 1;
    let activeCategory = "all";

    // ✅ Skeleton Loader Template
    function showSkeletonLoader() {
        grid.innerHTML = "";
        for (let i = 0; i < perPage; i++) {
            const skeleton = document.createElement("div");
            skeleton.className = `
                w-full h-80 bg-white/5 rounded-[15px] backdrop-blur-[50px] 
                animate-pulse border border-gray-800 shadow-md
            `;
            grid.appendChild(skeleton);
        }
    }

    // ✅ Render Cards
    function renderCards() {
        showSkeletonLoader(); // show skeleton first

        setTimeout(() => { // simulate short delay
            const filteredCards = activeCategory === "all" ?
                cards :
                cards.filter(card => {
                    const projectCategories = card.dataset.category.split(',').map(c => c.trim().toLowerCase());
                    return projectCategories.includes(activeCategory.toLowerCase());
                });

            const totalPages = Math.ceil(filteredCards.length / perPage);
            currentPage = Math.min(currentPage, totalPages);

            grid.innerHTML = ""; // clear skeletons
            cards.forEach(card => (card.style.display = "none"));

            const start = (currentPage - 1) * perPage;
            const end = start + perPage;
            filteredCards.slice(start, end).forEach(card => {
                card.style.display = "block";
                grid.appendChild(card);
            });

            renderPagination(totalPages);
        }, 600); // 0.6s loading effect
    }

    // ✅ Render Pagination Buttons
    function renderPagination(totalPages) {
        pagination.innerHTML = "";

        if (totalPages <= 1) return;

        const prevBtn = document.createElement("button");
        prevBtn.textContent = "‹ Prev";
        prevBtn.className =
            "px-3 py-1 text-sm bg-white/10 text-white rounded hover:bg-[var(--secondary-color)] disabled:opacity-30";
        prevBtn.disabled = currentPage === 1;
        prevBtn.addEventListener("click", () => changePage(currentPage - 1));
        pagination.appendChild(prevBtn);

        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement("button");
            pageBtn.textContent = i;
            pageBtn.className = `px-3 py-1 text-sm rounded ${i === currentPage
                ? "bg-[var(--secondary-color)] text-black font-bold"
                : "bg-white/10 text-white hover:bg-[var(--secondary-color)] hover:text-black"
                }`;
            pageBtn.addEventListener("click", () => changePage(i));
            pagination.appendChild(pageBtn);
        }

        const nextBtn = document.createElement("button");
        nextBtn.textContent = "Next ›";
        nextBtn.className =
            "px-3 py-1 text-sm bg-white/10 text-white rounded hover:bg-[var(--secondary-color)] disabled:opacity-30";
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.addEventListener("click", () => changePage(currentPage + 1));
        pagination.appendChild(nextBtn);
    }

    // ✅ Change Page with Scroll
    function changePage(page) {
        currentPage = page;
        renderCards();
        section.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }

    // ✅ Category Filter
    tabButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            tabButtons.forEach(b => b.classList.remove("active", "bg-white", "text-[var(--primary-color)]"));
            btn.classList.add("active", "bg-white", "text-[var(--primary-color)]");
            activeCategory = btn.dataset.tab;
            currentPage = 1;
            renderCards();
            section.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    });

    renderCards();
});
const tabContainer = document.getElementById("tabContainer");
const scrollLeft = document.getElementById("scrollLeft");
const scrollRight = document.getElementById("scrollRight");
const caseStudiesGrid = document.getElementById("caseStudiesGrid");
// const tabs = document.querySelectorAll(".tab-btn"); // Redundant, handled above

// Show/Hide Scroll Arrows
function checkScroll() {
    if (!tabContainer) return;
    scrollLeft.style.display = tabContainer.scrollLeft > 0 ? "block" : "none";
    scrollRight.style.display =
        tabContainer.scrollWidth > tabContainer.clientWidth + tabContainer.scrollLeft ?
            "block" :
            "none";
}
if (tabContainer) {
    tabContainer.addEventListener("scroll", checkScroll);
    window.addEventListener("resize", checkScroll);
    checkScroll();

    scrollLeft.addEventListener("click", () => {
        tabContainer.scrollBy({
            left: -150,
            behavior: "smooth"
        });
    });
    scrollRight.addEventListener("click", () => {
        tabContainer.scrollBy({
            left: 150,
            behavior: "smooth"
        });
    });
}