document.addEventListener("DOMContentLoaded", function () {
    const menuTriggers = document.querySelectorAll(".main-menu__link");
    const menus = document.querySelectorAll(".megamenu__content-wrapper");
    const background = document.querySelector(".menu__background");
    const mobileMenu = document.querySelector(".main-menu-responsive"); // adjust if needed

    // Utility
    const isMobile = () => window.innerWidth <= 991; // adjust breakpoint

    // Toggle Mega Menu
    menuTriggers.forEach(trigger => {
        trigger.addEventListener("click", (e) => {
            const parentMenu = trigger.closest(".megamenu");
            const contentWrapper = parentMenu?.querySelector(".megamenu__content-wrapper");

            if (!contentWrapper) return;

            e.preventDefault();
            e.stopPropagation();

            // ---------- MOBILE ACCORDION ----------
            if (isMobile() && mobileMenu && trigger.closest(".main-menu-responsive")) {
                const leftPanel = contentWrapper.querySelector(".megamenu__content-container-left");
                if (!leftPanel) return;

                const isExpanded = leftPanel.classList.contains("active");

                // Collapse all other left panels
                document.querySelectorAll(".megamenu__content-container-left.active").forEach(panel => {
                    if (panel !== leftPanel) {
                        panel.classList.remove("active");
                        panel.style.maxHeight = null;
                    }
                });

                // Toggle clicked panel
                if (isExpanded) {
                    leftPanel.classList.remove("active");
                    leftPanel.style.maxHeight = null;
                } else {
                    leftPanel.classList.add("active");
                    leftPanel.style.maxHeight = leftPanel.scrollHeight + "px";
                }
                return; // don't trigger desktop dropdown
            }

            // ---------- DESKTOP DROPDOWN ----------
            const alreadyActive = contentWrapper.classList.contains("active");

            // Close all menus first
            menus.forEach(menu => menu.classList.remove("active"));
            background?.classList.remove("active");

            // Open clicked if not active
            if (!alreadyActive) {
                contentWrapper.classList.add("active");
                background?.classList.add("active");
            }
        });
    });

    // Prevent closing when clicking inside an open megamenu
    menus.forEach(menu => {
        menu.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    });

    // Close desktop menu when clicking outside
    document.addEventListener("click", (e) => {
        if (!isMobile() && !e.target.closest(".megamenu")) {
            menus.forEach(menu => menu.classList.remove("active"));
            background?.classList.remove("active");
        }
    });

    // Cleanup on resize
    window.addEventListener("resize", () => {
        menus.forEach(menu => {
            menu.classList.remove("active");
            menu.querySelectorAll(".megamenu__content-container-left.active").forEach(panel => {
                panel.classList.remove("active");
                panel.style.maxHeight = null;
            });
        });
        background?.classList.remove("active");
    });

    // ---------- MOBILE ACCORDION ----------
    if (isMobile() && mobileMenu && trigger.closest(".main-menu-responsive")) {
        const leftPanel = contentWrapper.querySelector(".megamenu__content-container-left");
        if (!leftPanel) return;

        const isExpanded = leftPanel.classList.contains("active");

        // Collapse all other left panels
        document.querySelectorAll(".megamenu__content-container-left.active").forEach(panel => {
            if (panel !== leftPanel) {
                panel.classList.remove("active");
                panel.style.maxHeight = null;
            }
        });

        // Toggle clicked panel
        if (isExpanded) {
            leftPanel.classList.remove("active");
            leftPanel.style.maxHeight = null;
        } else {
            leftPanel.classList.add("active");
            leftPanel.style.maxHeight = leftPanel.scrollHeight + "px";
        }
        return; // don't trigger desktop dropdown
    }
});
