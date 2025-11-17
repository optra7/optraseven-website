document.addEventListener("DOMContentLoaded", function () {
    const mainMenuLinks = document.querySelectorAll(".main-menu__link.has-megamenu");
    const innerAccordions = document.querySelectorAll(".megamenu-accordion__item");
    const closeBtn = document.querySelector(".main-menu-responsive__close-btn");
    const mobileBreakpoint = 1024;

    const isMobile = () => window.innerWidth <= mobileBreakpoint;

    // --- Slide helpers using max-height ---
    const slideDown = (el) => {
        el.style.display = "block";
        el.style.maxHeight = "0px";
        requestAnimationFrame(() => {
            el.style.transition = "max-height 0.3s ease";
            el.style.maxHeight = el.scrollHeight + "px";
        });
        el.addEventListener(
            "transitionend",
            () => {
                el.style.maxHeight = "none";
                el.style.transition = "";
            },
            { once: true }
        );
    };

    const slideUp = (el) => {
        el.style.maxHeight = el.scrollHeight + "px";
        requestAnimationFrame(() => {
            el.style.transition = "max-height 0.3s ease";
            el.style.maxHeight = "0px";
        });
        el.addEventListener(
            "transitionend",
            () => {
                el.style.display = "none";
                el.style.transition = "";
            },
            { once: true }
        );
    };

    // --- Initialize: collapse all megamenus ---
    const initMenu = () => {
        mainMenuLinks.forEach((link) => {
            const megamenu = link.closest(".megamenu")?.querySelector(".megamenu__left-panel, .megamenu__content-container-left");
            if (megamenu) {
                megamenu.style.display = isMobile() ? "none" : "block";
            }
            // Remove expanded class on init
            link.classList.remove("expanded");
        });

        innerAccordions.forEach((item) => {
            const panel = item.nextElementSibling;
            if (panel) panel.style.display = isMobile() ? "none" : "block";
        });
    };

    initMenu();

    // --- Close all megamenus function ---
    const closeAllMegamenus = () => {
        mainMenuLinks.forEach((link) => {
            const megamenu = link.closest(".megamenu")?.querySelector(".megamenu__left-panel, .megamenu__content-container-left");
            if (megamenu && megamenu.style.display === "block") {
                slideUp(megamenu);
            }
            link.classList.remove("expanded");
        });
    };

    // --- Top-level mobile toggle with single-open behavior ---
    mainMenuLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            if (!isMobile()) return; // desktop: no toggle
            e.preventDefault();
            e.stopPropagation();

            const megamenu = link.closest(".megamenu")?.querySelector(".megamenu__left-panel, .megamenu__content-container-left");
            if (!megamenu) return;

            const isExpanded = link.classList.contains("expanded");

            // Close all other megamenus first
            mainMenuLinks.forEach((otherLink) => {
                if (otherLink !== link) {
                    const otherMegamenu = otherLink.closest(".megamenu")?.querySelector(".megamenu__left-panel, .megamenu__content-container-left");
                    if (otherMegamenu && otherMegamenu.style.display === "block") {
                        slideUp(otherMegamenu);
                    }
                    otherLink.classList.remove("expanded");
                }
            });

            // Toggle current megamenu
            if (isExpanded) {
                slideUp(megamenu);
                link.classList.remove("expanded");
            } else {
                slideDown(megamenu);
                link.classList.add("expanded");
            }
        });
    });

    // --- Close button handler ---
    if (closeBtn) {
        closeBtn.addEventListener("click", (e) => {
            if (!isMobile()) return;
            e.stopPropagation();
            closeAllMegamenus();
        });
    }

    // --- Prevent menu from closing when clicking inside main-menu-responsive ---
    const mainMenuResponsive = document.querySelector(".main-menu-responsive");
    if (mainMenuResponsive) {
        mainMenuResponsive.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    }

    // --- Inner accordion toggle (single-open behavior) ---
    innerAccordions.forEach((item) => {
        const panel = item.nextElementSibling;
        if (!panel) return;

        item.addEventListener("click", (e) => {
            if (!isMobile()) return;
            e.preventDefault();
            e.stopPropagation();

            // Close other panels in the same parent
            const parentContainer = item.closest(".megamenu_tab-head");
            if (parentContainer) {
                const siblings = parentContainer.querySelectorAll(".megamenu-accordion__item");
                siblings.forEach((sibling) => {
                    const siblingPanel = sibling.nextElementSibling;
                    if (siblingPanel && siblingPanel !== panel) {
                        slideUp(siblingPanel);
                    }
                });
            }

            const isExpanded = panel.style.display === "block";
            if (isExpanded) {
                slideUp(panel);
            } else {
                slideDown(panel);
            }
        });
    });

    // --- Handle resize ---
    let resizeTimeout;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            initMenu();
        }, 150);
    });
});