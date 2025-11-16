document.addEventListener("DOMContentLoaded", function () {
    const menuTriggers = document.querySelectorAll(".main-menu__link");
    const menus = document.querySelectorAll(".megamenu__content-wrapper");
    const background = document.querySelector(".menu__background");
    const mobileMenu = document.querySelector(".main-menu-responsive");
    const mobileMenuToggle = document.querySelector(".main-menu__responsive-btn");
    const mobileMenuClose = document.querySelector(".main-menu-responsive__close-btn");

    // Utility functions
    const isMobile = () => window.innerWidth <= 1024;

    // Create background overlay if it doesn't exist
    function createBackgroundOverlay() {
        if (!document.querySelector('.menu__background')) {
            const overlay = document.createElement('div');
            overlay.className = 'menu__background';
            document.body.appendChild(overlay);
            return overlay;
        }
        return document.querySelector('.menu__background');
    }

    // Toggle mobile menu
    function toggleMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.toggle('active');
            document.body.classList.toggle('no-scroll');

            if (mobileMenu.classList.contains('active')) {
                createBackgroundOverlay().classList.add('active');
            } else {
                const bg = document.querySelector('.menu__background');
                if (bg) bg.classList.remove('active');
            }
        }
    }

    // Close all desktop menus
    function closeAllDesktopMenus() {
        menus.forEach(menu => menu.classList.remove('active'));
        const bg = document.querySelector('.menu__background');
        if (bg) bg.classList.remove('active');
    }

    // Close all mobile accordions
    function closeAllMobileAccordions() {
        document.querySelectorAll(".megamenu__content-container-left.active").forEach(panel => {
            panel.classList.remove("active");
            panel.style.maxHeight = null;
        });
    }

    // Handle desktop menu toggle
    function handleDesktopMenu(trigger, contentWrapper) {
        const alreadyActive = contentWrapper.classList.contains("active");

        closeAllDesktopMenus();

        if (!alreadyActive) {
            contentWrapper.classList.add("active");
            createBackgroundOverlay().classList.add('active');
        }
    }

    // Handle mobile accordion toggle
    function handleMobileAccordion(contentWrapper) {
        const leftPanel = contentWrapper.querySelector(".megamenu__content-container-left");
        if (!leftPanel) return;

        const isExpanded = leftPanel.classList.contains("active");

        // Close all other accordions
        closeAllMobileAccordions();

        // Toggle current accordion
        if (!isExpanded) {
            leftPanel.classList.add("active");
            leftPanel.style.maxHeight = leftPanel.scrollHeight + "px";
        }
    }

    // Main menu trigger handler
    menuTriggers.forEach(trigger => {
        trigger.addEventListener("click", (e) => {
            const parentMenu = trigger.closest(".megamenu");
            const contentWrapper = parentMenu?.querySelector(".megamenu__content-wrapper");

            if (!contentWrapper) return;

            e.preventDefault();
            e.stopPropagation();

            if (isMobile()) {
                handleMobileAccordion(contentWrapper);
            } else {
                handleDesktopMenu(trigger, contentWrapper);
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
            closeAllDesktopMenus();
        }
    });

    // Mobile menu toggle events
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener("click", toggleMobileMenu);
    }

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener("click", toggleMobileMenu);
    }

    // Close mobile menu when clicking on background
    document.addEventListener('click', (e) => {
        if (isMobile() && mobileMenu && mobileMenu.classList.contains('active')) {
            if (e.target.classList.contains('menu__background')) {
                toggleMobileMenu();
                closeAllMobileAccordions();
            }
        }
    });

    // Cleanup on resize
    window.addEventListener("resize", () => {
        closeAllDesktopMenus();
        closeAllMobileAccordions();

        const bg = document.querySelector('.menu__background');
        if (bg) bg.classList.remove('active');

        if (!isMobile() && mobileMenu) {
            mobileMenu.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeAllDesktopMenus();
            closeAllMobileAccordions();

            if (mobileMenu && mobileMenu.classList.contains('active')) {
                toggleMobileMenu();
            }
        }
    });
});
