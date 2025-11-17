document.addEventListener("DOMContentLoaded", function () {
    const mainMenuLinks = document.querySelectorAll(".main-menu__link.has-megamenu");
    const closeBtn = document.querySelector(".main-menu-responsive__close-btn");
    const innerAccordions = document.querySelectorAll(".megamenu-accordion__item");

    const isMobile = () => window.innerWidth <= 1024;

    // Initialize: collapse all megamenus
    mainMenuLinks.forEach(link => {
        const megamenu = link.nextElementSibling;
        if (megamenu) {
            megamenu.style.display = "none";
            link.classList.remove("expanded");
        }
    });

    innerAccordions.forEach(item => {
        const parentContainer = item.nextElementSibling;
        if (parentContainer) {
            parentContainer.style.display = "none";
            item.classList.remove("expanded");
        }
    });

    // Utility functions
    const slideDown = (el) => {
        el.style.display = "block";
        const height = el.scrollHeight + "px";
        el.style.height = "0px";
        requestAnimationFrame(() => {
            el.style.transition = "height 0.3s ease";
            el.style.height = height;
        });
        el.addEventListener("transitionend", () => {
            el.style.height = "auto";
            el.style.transition = "";
        }, { once: true });
    };

    const slideUp = (el) => {
        el.style.height = el.scrollHeight + "px";
        requestAnimationFrame(() => {
            el.style.transition = "height 0.3s ease";
            el.style.height = "0px";
        });
        el.addEventListener("transitionend", () => {
            el.style.display = "none";
            el.style.height = "";
            el.style.transition = "";
        }, { once: true });
    };

    // Top-level megamenu toggle
    mainMenuLinks.forEach(link => {
        const megamenu = link.nextElementSibling;

        link.addEventListener("click", function (e) {
            if (!isMobile()) return;
            e.preventDefault();

            const isExpanded = link.classList.contains("expanded");
            if (isExpanded) {
                link.classList.remove("expanded");
                if (megamenu) slideUp(megamenu);
            } else {
                link.classList.add("expanded");
                if (megamenu) slideDown(megamenu);
            }
        });
    });

    // Inner accordion toggle
    innerAccordions.forEach(item => {
        const parentContainer = item.nextElementSibling;

        item.addEventListener("click", function (e) {
            if (!isMobile()) return;
            e.preventDefault();

            const isExpanded = item.classList.contains("expanded");
            if (isExpanded) {
                item.classList.remove("expanded");
                if (parentContainer) slideUp(parentContainer);
            } else {
                item.classList.add("expanded");
                if (parentContainer) slideDown(parentContainer);
            }
        });
    });

    // Close mobile menu button
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            // Collapse top-level menus
            mainMenuLinks.forEach(link => {
                const megamenu = link.nextElementSibling;
                link.classList.remove("expanded");
                if (megamenu) slideUp(megamenu);
            });

            // Collapse inner accordions
            innerAccordions.forEach(item => {
                const parentContainer = item.nextElementSibling;
                item.classList.remove("expanded");
                if (parentContainer) slideUp(parentContainer);
            });
        });
    }
});
