// Load Animation of Portfolio Hero Section
document.addEventListener("DOMContentLoaded", () => {
    const tl = gsap.timeline({ defaults: { ease: "power3.out", duration: 1 } });
    tl.from(".hero-badge", { y: -30, opacity: 0 })
        .from(".hero-title", { y: 50, opacity: 0 }, "-=0.5")
        .from(".hero-text", { y: 30, opacity: 0 }, "-=0.5")
        .from(".hero-btns", { y: 20, opacity: 0 }, "-=0.3")
        .from(".hero-stats", { y: 20, opacity: 0 }, "-=0.3")
        .from(".hero-img img", { y: 40, autoAlpha: 0 }, "<");
});
