document.addEventListener("DOMContentLoaded", function () {
    // Existing menu toggle functionality
    const responsiveMenuButton = document.querySelector(".main-menu__responsive-btn");
    const responsiveMenu = document.querySelector(".main-menu-responsive");
    const responsiveMenuClose = document.querySelector(".main-menu-responsive__close-btn");
    const responsiveMenuStartProjet = document.querySelector(".main-menu-responsive .start-project-btn-wrarpper");
    const responsiveMenuLogo = document.querySelector(".main-menu-responsive__logo");

    if (responsiveMenu && responsiveMenu && responsiveMenuClose && responsiveMenuStartProjet && responsiveMenuLogo) {
        responsiveMenuButton.addEventListener('click', () => {
            responsiveMenu.classList.add("active");
            document.body.classList.add("no-scroll");
        });

        responsiveMenuClose.addEventListener('click', () => {
            responsiveMenu.classList.remove("active");
            document.body.classList.remove("no-scroll");
        });

        responsiveMenuStartProjet.addEventListener('click', () => {
            responsiveMenu.classList.remove("active");
            document.body.classList.remove("no-scroll");
        });

        responsiveMenuLogo.addEventListener('click', () => {
            responsiveMenu.classList.remove("active");
            document.body.classList.remove("no-scroll");
        });
    }

    // New accordion functionality for megamenu items
    const megamenuLinks = document.querySelectorAll('.main-menu-responsive .main-menu__link.has-megamenu');

    if (megamenuLinks) {
        // Close all megamenus by default
        function closeAllMegamenus() {
            megamenuLinks.forEach(link => {
                link.classList.remove('expended');
                const megamenuContent = link.nextElementSibling;
                if (megamenuContent && megamenuContent.classList.contains('megamenu__mobile-item-container')) {
                    megamenuContent.style.visibility = 'hidden';
                    megamenuContent.style.height = '0px';
                    megamenuContent.style.padding = '0px 0 0px 20px';
                }
            });
        }

        // Initialize - close all megamenus
        closeAllMegamenus();

        // Add click event to each megamenu link
        megamenuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const isExpanded = this.classList.contains('expended');
                const megamenuContent = this.nextElementSibling;

                // Close all megamenus first
                closeAllMegamenus();

                // If it wasn't expanded before, expand this one
                if (!isExpanded && megamenuContent && megamenuContent.classList.contains('megamenu__mobile-item-container')) {
                    this.classList.add('expended');
                    megamenuContent.style.visibility = 'visible';
                    megamenuContent.style.height = megamenuContent.scrollHeight + 16 + 'px';
                    megamenuContent.style.padding = "10px 0 10px 20px";
                }
            });
        });

        // Prevent clicks inside megamenu content from closing the menu
        document.querySelectorAll('.megamenu__mobile-item-container').forEach(container => {
            container.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
    }


    const accordionItems = document.querySelectorAll(".o7-accordion__item");

    if (accordionItems) {
        function toggleAccordion(clickedItem) {
            accordionItems.forEach(item => {
                const answer = item.querySelector(".o7-accordion__answer");

                if (item !== clickedItem) {
                    item.classList.remove("active");
                    item.setAttribute("aria-expanded", "false");
                    answer.style.height = "0px";
                } else if(item === clickedItem && !item.classList.contains("active")) {
                    const isActive = item.classList.toggle("active");
                    item.setAttribute("aria-expanded", String(isActive));

                    setTimeout(() => {
                        answer.style.height = answer.scrollHeight + "px"; 
                    }, 10);
                }else if(item === clickedItem && item.classList.contains("active")) {
                    const isActive = item.classList.toggle("active");
                    item.setAttribute("aria-expanded", String(isActive));
                    answer.style.height = "0px";
                }
            });
        }

        accordionItems.forEach(item => {
            const question = item.querySelector(".o7-accordion__question");
            question.addEventListener("click", () => toggleAccordion(item));

            item.addEventListener("keydown", (e) => {
                if (e.key === "Enter" || e.key === " " || e.key === "Spacebar") {
                    e.preventDefault();
                    toggleAccordion(item);
                }
            });
        });
    }
});