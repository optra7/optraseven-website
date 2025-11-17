// Portfolio and Case Studies Tab Accordion functionality — scoped per .megamenu
document.addEventListener('DOMContentLoaded', function () {
    // find every megamenu block on the page
    const megaMenus = document.querySelectorAll('.megamenu');

    megaMenus.forEach((menu) => {
        const tabItems = Array.from(menu.querySelectorAll('.megamenu-tab-accordion__item'));
        const tabContainers = Array.from(menu.querySelectorAll('.megamenu-tab-container'));

        // attach data-index if helpful (optional)
        tabItems.forEach((tab, i) => {
            tab.setAttribute('data-index', i);
            tab.setAttribute('tabindex', '0'); // make it keyboard focusable if not already
            tab.setAttribute('role', 'button');
            tab.setAttribute('aria-selected', 'false');
        });
        tabContainers.forEach((c, i) => {
            c.setAttribute('data-index', i);
            c.setAttribute('aria-hidden', 'true');
        });

        function activateTab(index) {
            // remove active on this menu only
            tabItems.forEach(t => {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            tabContainers.forEach(c => {
                c.classList.remove('active');
                c.setAttribute('aria-hidden', 'true');
            });

            // add active if exists
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

        // attach click + keyboard handlers
        tabItems.forEach((tab, i) => {
            const onActivate = (e) => {
                e.preventDefault();
                activateTab(i);
            };
            tab.addEventListener('click', onActivate);

            tab.addEventListener('keydown', (e) => {
                // activate on Enter or Space
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    activateTab(i);
                }
                // optional: left/right/up/down to move focus between tabs
                if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                    const next = (i + 1) % tabItems.length;
                    tabItems[next].focus();
                }
                if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                    const prev = (i - 1 + tabItems.length) % tabItems.length;
                    tabItems[prev].focus();
                }
            });
        });

        // default activate first tab if exists
        if (tabItems.length > 0) {
            activateTab(0);
        }
    });
});
