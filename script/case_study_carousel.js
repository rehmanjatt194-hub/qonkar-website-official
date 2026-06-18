document.addEventListener("DOMContentLoaded", () => {
    if (typeof caseStudies === 'undefined' || caseStudies.length === 0) return;

    let currentIndex = 0;
    const totalSlides = caseStudies.length;

    // Elements
    const prevBtn = document.getElementById("case-study-prev");
    const nextBtn = document.getElementById("case-study-next");
    const track = document.getElementById("case-study-slider-track");

    // Draw all charts once on load
    function drawCharts() {
        const svgElements = document.querySelectorAll(".cs-chart-svg");
        svgElements.forEach(svg => {
            const metrics = JSON.parse(svg.getAttribute("data-metrics"));
            const pathEl = svg.querySelector(".cs-chart-path");
            const areaEl = svg.querySelector(".cs-chart-area");
            const dotEl = svg.querySelector(".cs-chart-dot");
            if (!pathEl || !areaEl || !dotEl) return;

            const values = Object.values(metrics).map(val => {
                let num = parseFloat(val.replace(/[^\d.-]/g, ''));
                if (isNaN(num)) num = 50;
                if (val.includes('s') && num < 5) num = (5 - num) * 20; 
                return Math.min(Math.max(Math.abs(num), 15), 95);
            });

            let chartPoints = [15];
            if (values.length === 1) {
                chartPoints.push(30, 45, 60, values[0]);
            } else if (values.length === 2) {
                chartPoints.push(30, values[0], 65, values[1]);
            } else if (values.length === 3) {
                chartPoints.push(values[0], 50, values[1], values[2]);
            } else {
                chartPoints = [15, ...values];
            }

            const width = 300;
            const height = 80;
            const paddingX = 15;
            const paddingY = 15;
            const chartWidth = width - paddingX * 2;
            const chartHeight = height - paddingY * 2;

            const coords = chartPoints.map((val, index) => {
                const x = paddingX + (index / (chartPoints.length - 1)) * chartWidth;
                const y = height - paddingY - (val / 100) * chartHeight;
                return { x, y };
            });

            let pathD = `M ${coords[0].x} ${coords[0].y}`;
            for (let i = 0; i < coords.length - 1; i++) {
                const curr = coords[i];
                const next = coords[i + 1];
                const cpX1 = curr.x + (next.x - curr.x) / 2;
                const cpY1 = curr.y;
                const cpX2 = curr.x + (next.x - curr.x) / 2;
                const cpY2 = next.y;
                pathD += ` C ${cpX1} ${cpY1}, ${cpX2} ${cpY2}, ${next.x} ${next.y}`;
            }

            const fillD = `${pathD} L ${coords[coords.length - 1].x} ${height} L ${coords[0].x} ${height} Z`;

            pathEl.setAttribute("d", pathD);
            areaEl.setAttribute("d", fillD);

            const lastPoint = coords[coords.length - 1];
            dotEl.setAttribute("cx", lastPoint.x);
            dotEl.setAttribute("cy", lastPoint.y);
        });
    }

    function animateActiveChart(index) {
        const svgElements = document.querySelectorAll(".cs-chart-svg");
        const activeSvg = svgElements[index];
        if (!activeSvg) return;
        const pathEl = activeSvg.querySelector(".cs-chart-path");
        if (!pathEl) return;
        const pathLength = pathEl.getTotalLength();
        if (pathLength > 0) {
            gsap.fromTo(pathEl, 
                { strokeDasharray: pathLength, strokeDashoffset: pathLength },
                { strokeDashoffset: 0, duration: 1, ease: "power2.out" }
            );
        }
    }

    function updateSlide(index) {
        if (!track) return;
        // Slide track horizontally using GSAP for hardware acceleration and smoothness
        gsap.to(track, {
            xPercent: -100 * index,
            duration: 0.5,
            ease: "power2.out",
            onComplete: () => {
                animateActiveChart(index);
            }
        });
    }

    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlide(currentIndex);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlide(currentIndex);
        });
    }

    // Initial draw and render
    drawCharts();
    updateSlide(currentIndex);
});
