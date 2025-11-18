document.addEventListener('DOMContentLoaded', function () {
    function isDesktop() {
        return window.innerWidth > 1024;
    }

    function initDesktopMegaMenu() {
        if (!isDesktop()) return;

        const megaMenus = document.querySelectorAll('.megamenu');
        const backdropFilter = document.querySelector('.megamenu-backdrop-filter');
        const mainMenuLinks = document.querySelectorAll('.main-menu__link');
        // Initialize all megamenus as hidden
        megaMenus.forEach(menu => {
            const contentWrapper = menu.querySelector('.megamenu__content-wrapper');
            if (contentWrapper) {
                contentWrapper.style.display = 'none';
            }
        });

        // Show megamenu function
        function showMegaMenu(menu) {
            const contentWrapper = menu.querySelector('.megamenu__content-wrapper');
            if (contentWrapper) {
                contentWrapper.style.display = 'block';
            }
            menu.classList.add('active');
            menu.classList.add('expended');

            // Show backdrop filter and handle scroll
            if (backdropFilter) {
                backdropFilter.classList.add('active');
            }
        }

        // Hide megamenu function
        function hideMegaMenu(menu) {
            const contentWrapper = menu.querySelector('.megamenu__content-wrapper');
            if (contentWrapper) {
                contentWrapper.style.display = 'none';
            }
            menu.classList.remove('active');
            menu.classList.remove('expended');

            // Only hide backdrop if no other megamenus are active
            const anyActive = Array.from(megaMenus).some(m => m.classList.contains('active'));
            if (!anyActive && backdropFilter) {
                backdropFilter.classList.remove('active');
            }
        }

        // Hide all megamenus function
        function hideAllMegaMenus() {
            megaMenus.forEach(menu => {
                hideMegaMenu(menu);
            });
            if (backdropFilter) {
                backdropFilter.classList.remove('active');
            }
        }

        // Set up main menu link click handlers for megamenus
        mainMenuLinks.forEach(link => {
            // Check if this link is part of a megamenu
            const megamenu = link.closest('.megamenu');

            if (megamenu) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    // Toggle the clicked megamenu
                    if (megamenu.classList.contains('active')) {
                        hideMegaMenu(megamenu);
                    } else {
                        // Hide all others first
                        hideAllMegaMenus();
                        showMegaMenu(megamenu);
                    }
                });

                // Add keyboard support for main menu links
                link.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            }
        });

        // Set up tab functionality for each megamenu
        megaMenus.forEach((menu) => {
            const tabItems = Array.from(menu.querySelectorAll('.megamenu-tab-accordion__item'));
            const tabContainers = Array.from(menu.querySelectorAll('.megamenu-tab-container'));

            // Initialize tab attributes
            tabItems.forEach((tab, i) => {
                tab.setAttribute('data-index', i);
                tab.setAttribute('tabindex', '0');
                tab.setAttribute('role', 'button');
                tab.setAttribute('aria-selected', 'false');
            });

            tabContainers.forEach((c, i) => {
                c.setAttribute('data-index', i);
                c.setAttribute('aria-hidden', 'true');
            });

            function activateTab(index) {
                // Remove active from all tabs in this menu
                tabItems.forEach(t => {
                    t.classList.remove('active');
                    t.setAttribute('aria-selected', 'false');
                });
                tabContainers.forEach(c => {
                    c.classList.remove('active');
                    c.setAttribute('aria-hidden', 'true');
                });

                // Activate the selected tab
                const tab = tabItems[index];
                const container = tabContainers[index];
                if (tab) {
                    tab.classList.add('active');
                    tab.setAttribute('aria-selected', 'true');
                }
                if (container) {
                    container.classList.add('active');
                    container.setAttribute('aria-hidden', 'false');
                }
            }

            // Tab click and keyboard handlers
            tabItems.forEach((tab, i) => {
                tab.addEventListener('click', (e) => {
                    e.preventDefault();
                    activateTab(i);
                });

                tab.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        activateTab(i);
                    }
                    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                        e.preventDefault();
                        const next = (i + 1) % tabItems.length;
                        tabItems[next].focus();
                        activateTab(next);
                    }
                    if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                        e.preventDefault();
                        const prev = (i - 1 + tabItems.length) % tabItems.length;
                        tabItems[prev].focus();
                        activateTab(prev);
                    }
                });
            });

            // Activate first tab by default
            if (tabItems.length > 0) {
                activateTab(0);
            }
        });

        // Backdrop click handler - close all megamenus
        if (backdropFilter) {
            backdropFilter.addEventListener('click', hideAllMegaMenus);
        }

        // Escape key handler - close all megamenus
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                hideAllMegaMenus();
            }
        });

        // Close megamenus when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.megamenu') && !e.target.closest('.main-menu__link')) {
                hideAllMegaMenus();
            }
        });

        // Close megamenus when resizing window (mobile consideration)
        window.addEventListener('resize', hideAllMegaMenus);
    }
    initDesktopMegaMenu();
});