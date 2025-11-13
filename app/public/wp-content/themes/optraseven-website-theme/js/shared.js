
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

(function () {
	document.querySelectorAll(".section__card-wrapper--scroll-x").forEach(container => {
		const cards = container.querySelectorAll(".o7-content-card--scrolling-snap");
		let index = 0;

		const section = container.closest("section");

		// prev/next buttons section
		const prevBtns = section.querySelectorAll(".o7-slider-control__prev-button");
		const nextBtns = section.querySelectorAll(".o7-slider-control__next-button");

		function showCard(i) {
			const cardWidth = cards[0].offsetWidth + 40; // card width + gap
			container.scrollTo({ left: i * cardWidth, behavior: "smooth" });
		}

		// prev buttons - listener
		prevBtns.forEach(btn => {
			btn.addEventListener("click", e => {
				e.preventDefault();
				if (index > 0) {
					index--;
				} else {
					index = cards.length - 1;
				}
				showCard(index);
			});
		});

		// next buttons - listener
		nextBtns.forEach(btn => {
			btn.addEventListener("click", e => {
				e.preventDefault();
				if (index < cards.length - 1) {
					index++;
				} else {
					// loop card
					index = 0;
				}
				showCard(index);
			});
		});

		// Swipe/Drag support
		let startX = 0;
		let isDragging = false;

		container.addEventListener("touchstart", e => { startX = e.touches[0].clientX; isDragging = true; });
		container.addEventListener("touchmove", e => {
			if (!isDragging) return;
			const diff = startX - e.touches[0].clientX;
			if (diff > 50) {
				index = (index < cards.length - 1) ? index + 1 : 0;
				showCard(index);
				isDragging = false;
			} else if (diff < -50) {
				index = (index > 0) ? index - 1 : cards.length - 1;
				showCard(index);
				isDragging = false;
			}
		});
		container.addEventListener("touchend", () => { isDragging = false; });
		container.addEventListener("mousedown", e => { startX = e.clientX; isDragging = true; container.classList.add("dragging"); });
		container.addEventListener("mousemove", e => {
			if (!isDragging) return;
			const diff = startX - e.clientX;
			if (diff > 50) {
				index = (index < cards.length - 1) ? index + 1 : 0;
				showCard(index);
				startX = e.clientX;
			} else if (diff < -50) {
				index = (index > 0) ? index - 1 : cards.length - 1;
				showCard(index);
				startX = e.clientX;
			}
		});
		container.addEventListener("mouseup", () => { isDragging = false; container.classList.remove("dragging"); });
		container.addEventListener("mouseleave", () => { isDragging = false; container.classList.remove("dragging"); });
	});
})();

document.addEventListener('DOMContentLoaded', () => {
	const toast = document.getElementById('o7-toast');
	const params = new URLSearchParams(window.location.search);

	let message = '';
	let type = '';

	if (params.get('contact_success')) {
		message = 'Thank you! Your message has been sent successfully.';
		type = 'success';
	} else if (params.get('contact_error')) {
		message = params.get('contact_error');
		type = 'error';
	}

	if (message) {
		toast.textContent = message;
		toast.classList.add('o7-toast--' + type, 'o7-toast--show');

		setTimeout(() => {
			toast.classList.remove('o7-toast--show');
			// Remove query params from URL
			const url = new URL(window.location);
			url.searchParams.delete('contact_success');
			url.searchParams.delete('contact_error');
			window.history.replaceState({}, '', url);
		}, 4000);
	}
});