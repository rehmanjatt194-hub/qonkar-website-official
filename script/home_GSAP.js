// Load Animation of Hero Section
document.addEventListener("DOMContentLoaded", () => {
    const tl = gsap.timeline({ defaults: { ease: "power3.out", duration: 1 } });
    tl.from(".hero-badge", { y: -30, opacity: 0 })
        .from(".hero-title", { y: 50, opacity: 0 }, "-=0.5")
        .from(".hero-text", { y: 30, opacity: 0 }, "-=0.5")
        .from(".hero-img img", { y: 40, autoAlpha: 0 }, "<");
});

// Scroll animation of Client section
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // Image animation
    gsap.from(".container img", {
        x: -60,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".container",
            start: "top 80%",
            toggleActions: "play none none reverse"
        }
    });

    // Text content (except button)
    gsap.from(".container .order-1 h2, .container .order-1 p, .container .order-1 .glass-border", {
        x: 60,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        stagger: 0.2,
        scrollTrigger: {
            trigger: ".container",
            start: "top 80%",
            toggleActions: "play none none reverse"
        }
    });

    // Button animation (separate, fade + slight scale)
    gsap.from(".container .order-1 a", {
        y: 30,
        opacity: 0,
        scale: 0.95,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".container",
            start: "top 80%",
            toggleActions: "play none none reverse"
        }
    });
});

// Tab Animation of Service section
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            const target = tab.getAttribute("data-tab");

            // Reset all buttons (non-active state)
            tabs.forEach(btn => {
                btn.classList.remove("active", "bg-white", "text-[#3F89C9]");
                btn.classList.add("bg-transparent", "text-white");
            });

            // Active button styling
            tab.classList.add("active", "bg-white", "text-[#3F89C9]");
            tab.classList.remove("text-white", "bg-transparent");

            // Hide all contents
            contents.forEach(c => c.classList.add("hidden"));

            // Show target content
            const activeContent = document.getElementById(target);
            activeContent.classList.remove("hidden");

            // Animate the active content with GSAP
            gsap.fromTo(activeContent.children,
                { y: 30, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.8, ease: "power2.out", stagger: 0.2 }
            );
        });
    });

    // ✅ Optional: Make first tab active by default
    if (tabs.length > 0) {
        tabs[0].click();
    }
});


// Case Studies Section

