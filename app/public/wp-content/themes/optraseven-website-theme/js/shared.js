
(function () {
	window.addEventListener("scroll", function () {
		const header = document.querySelector(".site-main-header__container");
		if (!header) return;
		header.classList.toggle("sticky-header", window.scrollY > 0);
	});
	document.addEventListener("DOMContentLoaded", function () {
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


			document.querySelectorAll(".main-menu-responsive .main-menu__link").forEach(link => {
				link.addEventListener("click", () => {
					responsiveMenu.classList.remove("active");
					document.body.classList.remove("no-scroll");
				});
			});
		}



		/* Script For Accordion*/
		const accordionItems = document.querySelectorAll(".o7-accordion__item");

		if (accordionItems) {
			function toggleAccordion(clickedItem) {
				accordionItems.forEach(item => {
					const answer = item.querySelector(".o7-accordion__answer");

					if (item !== clickedItem) {
						item.classList.remove("active");
						item.setAttribute("aria-expanded", "false");
						answer.hidden = true;
					} else {
						const isActive = item.classList.toggle("active");
						item.setAttribute("aria-expanded", String(isActive));
						answer.hidden = !isActive;
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
}());

