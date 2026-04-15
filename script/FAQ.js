document.querySelectorAll(".faq-header").forEach(header => {
    header.addEventListener("click", () => {
        const faqItem = header.parentElement;
        const content = faqItem.querySelector(".faq-content");
        const icon = header.querySelector(".faq-icon");
        const svg = header.querySelector("svg");

        // Close others
        document.querySelectorAll(".faq-item").forEach(item => {
            if (item !== faqItem) {
                item.classList.remove("active");
                const itemContent = item.querySelector(".faq-content");
                if (itemContent) itemContent.style.maxHeight = null;

                const itemSvg = item.querySelector("svg");
                if (itemSvg) itemSvg.classList.remove("rotate-180");

                item.style.backgroundColor = "transparent";

                const itemHeaderSpan = item.querySelector("span");
                if (itemHeaderSpan) itemHeaderSpan.style.color = "white";

                const itemContentP = item.querySelector(".faq-content p");
                if (itemContentP) itemContentP.style.color = "rgb(209 213 219)";

                const itemIcon = item.querySelector(".faq-icon");
                if (itemIcon) itemIcon.style.background = "rgb(55 65 81)";
            }
        });

        // Toggle clicked
        faqItem.classList.toggle("active");

        if (faqItem.classList.contains("active")) {
            if (content) content.style.maxHeight = content.scrollHeight + "px";
            if (svg) svg.classList.add("rotate-180");
            faqItem.style.backgroundColor = "black";

            const headerSpan = header.querySelector("span");
            if (headerSpan) headerSpan.style.color = "var(--secondary-color)";

            const contentP = content ? content.querySelector("p") : null;
            if (contentP) contentP.style.color = "black";

            if (icon) icon.style.background = "linear-gradient(138deg,var(--primary-color),var(--secondary-color))";
        } else {
            if (content) content.style.maxHeight = null;
            if (svg) svg.classList.remove("rotate-180");
            faqItem.style.backgroundColor = "transparent";

            const headerSpan = header.querySelector("span");
            if (headerSpan) headerSpan.style.color = "white";

            const contentP = content ? content.querySelector("p") : null;
            if (contentP) contentP.style.color = "rgb(209 213 219)";

            if (icon) icon.style.background = "rgb(55 65 81)";
        }
    });
});