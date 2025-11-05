const responsiveMenuButton = document.querySelector(".main-menu__responsive-btn");
const responsiveMenu = document.querySelector(".main-menu-responsive");
const responsiveMenuClose = document.querySelector(".main-menu-responsive__close-btn");
const responsiveMenuStartProjet = document.querySelector(".main-menu-responsive .start-project-btn-wrarpper");
const responsiveMenuLogo = document.querySelector(".main-menu-responsive__logo");


if (!responsiveMenu || !responsiveMenu || !responsiveMenuClose || !responsiveMenuStartProjet || !responsiveMenuLogo) return;

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




document.querySelectorAll(".main-menu-responsive .main-menu__link").forEach(link => {
    link.addEventListener("click", () => {
        responsiveMenu.classList.remove("active");
        document.body.classList.remove("no-scroll");
    });
});