document.addEventListener("DOMContentLoaded", () => {
    if (typeof caseStudies === 'undefined' || caseStudies.length === 0) return;

    let currentIndex = 0;
    const totalSlides = caseStudies.length;

    // Elements
    const prevBtn = document.getElementById("case-study-prev");
    const nextBtn = document.getElementById("case-study-next");
    const slider = document.getElementById("case-study-slider");
    const mockup = document.getElementById("cs-mockup");
    const popupTitle = document.getElementById("cs-popup-title");
    const brand = document.getElementById("cs-brand");
    const description = document.getElementById("cs-description");
    const link = document.getElementById("cs-link");
    const tagsContainer = document.getElementById("cs-tags");
    const metricsContainer = document.getElementById("cs-metrics");
    const quote = document.getElementById("cs-quote");
    const client = document.getElementById("cs-client");

    const pathEl = document.getElementById("cs-chart-path");
    const areaEl = document.getElementById("cs-chart-area");
    const dotEl = document.getElementById("cs-chart-dot");

    function drawChart(metrics) {
        if (!pathEl || !areaEl || !dotEl) return;

        const values = Object.values(metrics).map(val => {
            // Extract numeric value from strings like "72%", "-60%", "0.8s", "10K+", "24%"
            let num = parseFloat(val.replace(/[^\d.-]/g, ''));
            if (isNaN(num)) num = 50; // fallback
            // If it's a speed optimization time like 0.8s, smaller is better, let's map it high
            if (val.includes('s') && num < 5) num = (5 - num) * 20; 
            return Math.min(Math.max(Math.abs(num), 15), 95); // clamp between 15% and 95% for nice visuals
        });

        // We want a beautiful progressing curve (e.g. starting at 15, rising to values)
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

        // SVG Dimensions
        const width = 300;
        const height = 80;
        const paddingX = 15;
        const paddingY = 15;
        const chartWidth = width - paddingX * 2;
        const chartHeight = height - paddingY * 2;

        const coords = chartPoints.map((val, index) => {
            const x = paddingX + (index / (chartPoints.length - 1)) * chartWidth;
            // Map 0-100 value to Y: 0% -> height - paddingY, 100% -> paddingY
            const y = height - paddingY - (val / 100) * chartHeight;
            return { x, y };
        });

        // Build path (smooth cubic bezier curve)
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

        // Build fill path
        const fillD = `${pathD} L ${coords[coords.length - 1].x} ${height} L ${coords[0].x} ${height} Z`;

        // Update paths
        pathEl.setAttribute("d", pathD);
        areaEl.setAttribute("d", fillD);

        // Set pulsing dot to the last point
        const lastPoint = coords[coords.length - 1];
        dotEl.setAttribute("cx", lastPoint.x);
        dotEl.setAttribute("cy", lastPoint.y);

        // Animate stroke drawing with GSAP for high-end look
        const pathLength = pathEl.getTotalLength();
        if (pathLength > 0) {
            gsap.fromTo(pathEl, 
                { strokeDasharray: pathLength, strokeDashoffset: pathLength },
                { strokeDashoffset: 0, duration: 1, ease: "power2.out" }
            );
        }
    }

    function updateSlide(index) {
        const study = caseStudies[index];
        if (!study) return;

        // GSAP transition: Fade out slider (faster: 0.15s, lower y offset: 8px)
        gsap.to(slider, {
            opacity: 0,
            y: 8,
            duration: 0.15,
            ease: "power1.inOut",
            onComplete: () => {
                // Update text and values
                brand.textContent = study.brand_name;
                description.textContent = study.short_description;
                mockup.src = study.mockup_image;
                mockup.alt = study.brand_name + " Mockup";
                
                if (study.link && study.link !== '#') {
                    link.href = study.link;
                    link.style.display = "block";
                } else {
                    link.style.display = "none";
                }

                if (popupTitle) {
                    popupTitle.textContent = study.brand_name;
                }

                // Render tags
                tagsContainer.innerHTML = '';
                study.tags.forEach(tag => {
                    const pill = document.createElement("span");
                    pill.className = "px-3 py-1 bg-white/5 border border-white/10 rounded-full text-xs font-medium text-gray-300 hover:text-[#2BB5BC] hover:border-[#2BB5BC]/30 transition";
                    pill.textContent = tag;
                    tagsContainer.appendChild(pill);
                });

                // Render metrics list
                metricsContainer.innerHTML = '';
                Object.entries(study.metrics).forEach(([label, value], i) => {
                    const row = document.createElement("div");
                    row.className = `flex items-center justify-between text-sm ${i > 0 ? 'border-t border-white/5 pt-3' : ''}`;
                    
                    const isNegative = value.startsWith('-');
                    const arrowIcon = isNegative ? '↓' : '↑';
                    const displayValue = isNegative ? value.substring(1) : value;

                    row.innerHTML = `
                        <span class="text-gray-300 font-light">${label}</span>
                        <span class="text-[#95C951] font-semibold flex items-center gap-1">
                            <span class="text-xs font-bold">${arrowIcon}</span>
                            <span>${displayValue}</span>
                        </span>
                    `;
                    metricsContainer.appendChild(row);
                });

                // Draw chart
                drawChart(study.metrics);

                // Render Testimonial
                quote.textContent = `“${study.testimonial.quote}”`;
                client.textContent = study.testimonial.client;

                // GSAP transition: Fade in slider (faster: 0.3s)
                gsap.to(slider, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });
    }

    // Event listeners
    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlide(currentIndex);
    });

    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlide(currentIndex);
    });

    // Initial render
    updateSlide(currentIndex);
});
