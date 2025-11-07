(function () {
    document.addEventListener("DOMContentLoaded", function () {

        const wrapper = document.querySelector(".o7-stepper-wrapper");
        if (!wrapper) return;

        const sidebarNav = document.querySelector(".o7-stepper__sidebar .o7-stepper__nav");
        const navItems = sidebarNav ? sidebarNav.querySelectorAll(".o7-stepper__nav-item a") : [];
        const sections = [];

        if (!sidebarNav || navItems.length === 0) return;

        navItems.forEach(link => {
            const targetId = link.getAttribute("href")?.substring(1);
            if (targetId) {
                const section = document.getElementById(targetId);
                if (section) sections.push({ link, section });
            }
        });

        const containerOffsetTop = wrapper.getBoundingClientRect().top + window.scrollY;

        navItems.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const targetId = this.getAttribute("href")?.substring(1);
                const targetSection = document.getElementById(targetId);
                if (!targetSection) return;

                const headerOffset = 80; // adjust if you have a fixed header, otherwise 0
                const targetPosition = targetSection.getBoundingClientRect().top + window.scrollY - headerOffset;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

            });
        });

        function getCurrentSection() {
            let current = sections[0];
            const scrollPosition = window.scrollY + window.innerHeight / 3;

            sections.forEach(s => {
                if (s.section.offsetTop <= scrollPosition) {
                    current = s;
                }
            });
            return current;
        }


        function updateActiveNav() {
            const current = getCurrentSection();
            sections.forEach(s => s.link.parentElement.classList.remove("o7-stepper__nav-item--active"));
            if (current) current.link.parentElement.classList.add("o7-stepper__nav-item--active");
        }

        window.addEventListener("scroll", updateActiveNav);
        window.addEventListener("resize", updateActiveNav);
        updateActiveNav();
    });
})();
