// const isDesktop = () => window.innerWidth > 1024;
//
// document.addEventListener("DOMContentLoaded", function () {
//     const menuTriggers = document.querySelectorAll(".main-menu__link");
//     const menus = document.querySelectorAll(".megamenu__content-wrapper");
//     let background = document.querySelector(".menu__background");
//
//     // Create background overlay if it doesn't exist
//     function createBackgroundOverlay() {
//         if (!background) {
//             const overlay = document.createElement('div');
//             overlay.className = 'menu__background';
//             document.body.appendChild(overlay);
//             background = overlay;
//         }
//         return background;
//     }
//
//     // Initialize background overlay
//     createBackgroundOverlay();
//
//     // Toggle Mega Menu
//     menuTriggers.forEach(trigger => {
//         trigger.addEventListener("click", (e) => {
//             const parentMenu = trigger.closest(".megamenu");
//             const contentWrapper = parentMenu?.querySelector(".megamenu__content-wrapper");
//
//             if (!contentWrapper) return;
//
//             e.preventDefault();
//             e.stopPropagation();
//
//             const alreadyActive = contentWrapper.classList.contains("active");
//
//             // Close all menus first
//             menus.forEach(menu => menu.classList.remove("active"));
//             background.classList.remove("active");
//
//             // Open clicked if not active
//             if (!alreadyActive) {
//                 contentWrapper.classList.add("active");
//                 background.classList.add("active");
//             }
//         });
//     });
//
//     // Prevent closing when clicking inside megamenu content
//     menus.forEach(menu => {
//         menu.addEventListener("click", (e) => {
//             e.stopPropagation();
//         });
//     });
//
//     // Close desktop menu when clicking outside of megamenu content
//     document.addEventListener("click", (e) => {
//         if (isDesktop() && !e.target.closest(".megamenu__content")) {
//             menus.forEach(menu => menu.classList.remove("active"));
//             background.classList.remove("active");
//         }
//     });
//
//     // Cleanup on resize
//     window.addEventListener("resize", () => {
//         if (isDesktop()) {
//             menus.forEach(menu => menu.classList.remove("active"));
//             background.classList.remove("active");
//         }
//     });
// });