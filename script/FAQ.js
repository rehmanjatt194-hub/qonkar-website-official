document.querySelectorAll(".faq-header").forEach(header => {
    header.addEventListener("click", () => {
        const faqItem = header.parentElement;
        const content = faqItem.querySelector(".faq-content");
        const svg = header.querySelector("svg");

        // Close others
        document.querySelectorAll(".faq-item").forEach(item => {
            if (item !== faqItem) {
                item.classList.remove("active");
                const itemContent = item.querySelector(".faq-content");
                if (itemContent) itemContent.style.maxHeight = null;

                const itemSvg = item.querySelector("svg");
                if (itemSvg) {
                    itemSvg.classList.remove("rotate-180");
                }
            }
        });

        // Toggle clicked
        faqItem.classList.toggle("active");

        if (faqItem.classList.contains("active")) {
            if (content) content.style.maxHeight = content.scrollHeight + "px";
            if (svg) {
                svg.classList.add("rotate-180");
            }
        } else {
            if (content) content.style.maxHeight = null;
            if (svg) {
                svg.classList.remove("rotate-180");
            }
        }
    });
});


// ---- Redesigned Service Cards DOM Transformer ----

function initServiceCards() {
    // Skip if .svc-card already exists (e.g. shopify-development page which has static service cards markup)
    if (document.querySelector('.svc-card')) return;

    const cards = document.querySelectorAll('.background-backdrop');
    if (cards.length === 0) return;

    // Identify page key from pathname
    const path = window.location.pathname;
    let pageKey = "default";
    if (path.includes("shopify-store-setup")) pageKey = "shopify-store-setup";
    else if (path.includes("shopify-theme-design")) pageKey = "shopify-theme-design";
    else if (path.includes("speed-optimization")) pageKey = "speed-optimization";
    else if (path.includes("migration-services")) pageKey = "migration-services";
    else if (path.includes("saas-product-development")) pageKey = "saas-product-development";
    else if (path.includes("landing-pages-design")) pageKey = "landing-pages-design";
    else if (path.includes("automative-app")) pageKey = "automative-app";
    else if (path.includes("healthcare-and-hippa-apps")) pageKey = "healthcare-and-hippa-apps";
    else if (path.includes("web-design-and-development")) pageKey = "web-design-and-development";

    // Checklist data mapping for each service page
    const checklists = {
        "shopify-store-setup": [
            ["Domain, DNS & SSL setup", "Policy page configuration", "Checkout & notification email setup"],
            ["Smart Collections setup", "Product tag & variant structure", "Metafield & navigation mapping"],
            ["Shopify Markets configuration", "Multi-currency gateway setup", "Tax & custom shipping profiles"],
            ["GA4 & Google Tag Manager setup", "Meta & TikTok Pixel configuration", "Custom conversion tracking"]
        ],
        "shopify-theme-design": [
            ["High-fidelity Figma design", "Brand identity & assets integration", "Layout wireframing & prototyping"],
            ["Responsive layout configuration", "Fast touch interactions", "Adaptive image loading"],
            ["Micro-interactions & animations", "Scroll-triggered behaviors", "Hover & transition effects"],
            ["Clear calls to action (CTAs)", "Trust badges & proof sections", "Optimized checkout funnel design"]
        ],
        "speed-optimization": [
            ["Liquid code optimization", "CSS & JS minification", "Unused app code removal"],
            ["Lazy loading implementation", "WebP format conversion", "Dynamic responsive sizing"],
            ["Script loading deferment", "App script execution management", "Tag manager script optimization"],
            ["LCP & FID improvement", "CLS shift reduction", "Performance report card"]
        ],
        "migration-services": [
            ["Product data & taxonomy transfer", "Customer password migration advice", "Order history data mapping"],
            ["Custom database export & import", "URL redirect mapping (SEO safety)", "Integrations & API replacement"],
            ["Media assets & content transfer", "SEO metadata protection", "Payment & checkout configuration"],
            ["Secure script migration runs", "Database verification checks", "Customer login launch emails"]
        ],
        "saas-product-development": [
            ["Secure database isolation", "Custom tenant subdomain routing", "Shared resource management"],
            ["Stripe/Stax billing setups", "Pricing tier configurations", "Dunning & invoicing workflows"],
            ["REST & GraphQL endpoints", "Complete API documentation", "Third-party webhook handlers"],
            ["GDPR/CCPA data regulations", "End-to-end encryption (SSL)", "Threat monitoring setup"]
        ],
        "landing-pages-design": [
            ["High-converting landing layout", "Fast landing page builds", "Compelling hero sections"],
            ["Story-driven layout blocks", "Soft-sell lead forms", "Advertorial content structures"],
            ["Shopify, custom HTML or Webflow", "Easy integration with CRM", "Flexible template export"],
            ["Headline & body optimization", "Risk reversal messaging", "Trust proof inclusion"]
        ],
        "automative-app": [
            ["Real-time vehicle tracking", "Route optimization engine", "Maintenance alert scheduling"],
            ["Dynamic pricing schedules", "Interactive calendar booking", "Verification & payment checkout"],
            ["OBD-II device communication", "Sensor data ingestion flow", "Real-time alert dispatching"],
            ["Inventory management suite", "Lead tracking CRM workflow", "Sales contract automation"]
        ],
        "healthcare-and-hippa-apps": [
            ["Secure HIPAA video calling", "Doctor-patient scheduling", "Electronic prescriptions (eRx)"],
            ["HL7 / FHIR data mapping", "Secure medical record access", "Syncing patient charts"],
            ["Apple Health & Google Fit sync", "Heart rate & vitals tracking", "Real-time alert dashboard"],
            ["Secure login & patient profile", "Bill payment & messaging", "Lab results download center"]
        ],
        "web-design-and-development": [
            ["Tailored React/Vue/Svelte app", "Node/Python backend systems", "High-performance database"],
            ["Modern corporate design language", "Headless CMS customization", "Localized multi-lingual support"],
            ["Custom RESTful microservices", "Webhook integrations", "Third-party API connectors"],
            ["Offline capability & caching", "Add to Home Screen prompts", "Push notifications setup"]
        ],
        "default": [
            ["Full feature design & planning", "Responsive cross-device testing", "Post-launch support & optimization"],
            ["Quality assurance review", "Performance speed audit", "Dedicated engineer assignment"],
            ["Secure API integrations", "Data encryption & backup", "SEO best practices deployment"],
            ["App analytics & monitoring", "Regular bug fixes & updates", "Direct communication channel"]
        ]
    };

    // Stats data mapping for Card 1 (Index 1) for each page
    const card1Stats = {
        "shopify-store-setup": [["+62%", "Avg. Conversion"], ["50+", "Stores Setup"], ["4.9★", "Client Rating"]],
        "shopify-theme-design": [["+62%", "Avg. Conversion"], ["50+", "Custom Themes"], ["4.9★", "Client Rating"]],
        "speed-optimization": [["+62%", "Speed Boost"], ["100+", "Stores Optimized"], ["4.9★", "Client Rating"]],
        "migration-services": [["+62%", "Avg. Conversion"], ["80+", "Migrations Done"], ["4.9★", "Client Rating"]],
        "saas-product-development": [["+62%", "Efficiency Boost"], ["30+", "SaaS Products"], ["4.9★", "Client Rating"]],
        "landing-pages-design": [["+62%", "Avg. Conversion"], ["150+", "Landers Built"], ["4.9★", "Client Rating"]],
        "automative-app": [["+62%", "Avg. Conversion"], ["40+", "Apps Built"], ["4.9★", "Client Rating"]],
        "healthcare-and-hippa-apps": [["+62%", "Avg. Conversion"], ["30+", "Secure Apps"], ["4.9★", "Client Rating"]],
        "web-design-and-development": [["+62%", "Avg. Conversion"], ["200+", "Sites Built"], ["4.9★", "Client Rating"]],
        "default": [["+62%", "Performance Boost"], ["50+", "Projects Done"], ["4.9★", "Client Rating"]]
    };

    const isShopifyPage = pageKey.startsWith("shopify") || pageKey === "speed-optimization" || pageKey === "migration-services";

    cards.forEach((card, index) => {
        // Extract original content components
        const titleEl = card.querySelector('h3');
        const descEl = card.querySelector('p');
        
        // Match color icon from the card elements
        let iconSrc = `/images/icons/services/0${index + 1}_color.svg`;
        const imgEls = card.querySelectorAll('img');
        for (let i = 0; i < imgEls.length; i++) {
            const src = imgEls[i].getAttribute('src');
            if (src && src.includes('color.svg')) {
                iconSrc = src;
                break;
            }
        }

        const titleHtml = titleEl ? titleEl.innerHTML.trim() : '';
        const descHtml = descEl ? descEl.innerHTML.trim() : '';
        const cardId = `svc-card-${index + 1}`;
        const items = checklists[pageKey] ? checklists[pageKey][index] : checklists["default"][index];

        // Determine badge, stats/progress bars based on card index
        let badgeHtml = '';
        let extraContentHtml = '';

        if (index === 0) {
            badgeHtml = `<span class="svc-badge badge-popular">Popular</span>`;
            extraContentHtml = `
                <!-- Progress bars -->
                <div class="flex flex-col gap-3">
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>Client Satisfaction</span><span class="text-[#01a0d8] font-semibold">97%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:97%;"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>On-Time Delivery</span><span class="text-[#85d55c] font-semibold">99%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:99%; background: linear-gradient(90deg,#85d55c,#2fadc3);"></div></div>
                    </div>
                </div>`;
        } else if (index === 1) {
            badgeHtml = `<span class="svc-badge badge-demand">In Demand</span>`;
            const stats = card1Stats[pageKey] ? card1Stats[pageKey] : card1Stats["default"];
            extraContentHtml = `
                <!-- Stats row -->
                <div class="grid grid-cols-3 gap-3 pt-4 border-t border-white/5">
                    <div class="text-center">
                        <div class="svc-stat-val">${stats[0][0]}</div>
                        <div class="svc-stat-lbl">${stats[0][1]}</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">${stats[1][0]}</div>
                        <div class="svc-stat-lbl">${stats[1][1]}</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">${stats[2][0]}</div>
                        <div class="svc-stat-lbl">${stats[2][1]}</div>
                    </div>
                </div>`;
        } else if (index === 2) {
            badgeHtml = `<span class="svc-badge badge-new">New</span>`;
            const perfLabel = isShopifyPage ? "Theme Performance Score" : "Performance Score";
            extraContentHtml = `
                <!-- Progress bars -->
                <div class="flex flex-col gap-3">
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>${perfLabel}</span><span class="text-[#01a0d8] font-semibold">96%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:96%;"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs mb-1.5 text-white/50"><span>Cross-Device Compatibility</span><span class="text-[#85d55c] font-semibold">100%</span></div>
                        <div class="svc-progress-track"><div class="svc-progress-fill" style="--prog-w:100%; background: linear-gradient(90deg,#85d55c,#2fadc3);"></div></div>
                    </div>
                </div>`;
        } else if (index === 3) {
            badgeHtml = `<span class="svc-badge badge-popular">Popular</span>`;
            extraContentHtml = `
                <!-- Stats row -->
                <div class="grid grid-cols-3 gap-3 pt-4 border-t border-white/5">
                    <div class="text-center">
                        <div class="svc-stat-val">99.9%</div>
                        <div class="svc-stat-lbl">Uptime SLA</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">&lt;2h</div>
                        <div class="svc-stat-lbl">Response Time</div>
                    </div>
                    <div class="text-center">
                        <div class="svc-stat-val">24/7</div>
                        <div class="svc-stat-lbl">Monitoring</div>
                    </div>
                </div>`;
        }

        // Build checklist items HTML
        let checklistItemsHtml = '';
        items.forEach(item => {
            checklistItemsHtml += `
                <li class="flex items-center gap-2 text-sm text-white/75">
                    <svg class="w-4 h-4 text-[#01a0d8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>${item}
                </li>`;
        });

        // Rewrite card inner markup
        card.innerHTML = `
            <!-- Top row: icon + badge -->
            <div class="flex items-start justify-between">
                <div class="svc-icon-box">
                    <img src="${iconSrc}" class="w-7 h-7" alt="Icon">
                </div>
                ${badgeHtml}
            </div>

            <!-- Title + body -->
            <div>
                <h3 class="text-2xl font-light mb-2 leading-snug">${titleHtml}</h3>
                <p class="text-sm leading-relaxed text-white/65 font-light">${descHtml}</p>
            </div>

            ${extraContentHtml}

            <!-- Expand button -->
            <button class="svc-expand-btn flex items-center gap-1.5 text-xs text-[#01a0d8] font-semibold w-fit mt-auto" onclick="toggleCard('${cardId}')">
                What's included
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
            </button>
            
            <!-- Checklist -->
            <div class="svc-checklist">
                <ul class="flex flex-col gap-2 pt-3 border-t border-white/5">
                    ${checklistItemsHtml}
                </ul>
            </div>
        `;

        // Update card attributes to new CSS design classes
        card.id = cardId;
        card.className = "svc-card p-7 flex flex-col gap-5 border border-white/5";
    });
}

// Expand / collapse card function
window.toggleCard = function(id) {
    const card = document.getElementById(id);
    if (card) {
        card.classList.toggle('expanded');
    }
};

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initServiceCards);
} else {
    initServiceCards();
}