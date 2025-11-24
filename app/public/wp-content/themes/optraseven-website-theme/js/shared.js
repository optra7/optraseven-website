
(function () {
	window.addEventListener("scroll", function () {
		const header = document.querySelector(".site-main-header__container");
		if (!header) return;
		header.classList.toggle("sticky-header", window.scrollY > 0);
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

	if (params.get('contact_success') || params.get('quote_success')) {
		message = 'Thank you! Your message has been sent successfully.';
		type = 'success';
	} else if (params.get('contact_error') || params.get('quote_error')) {
		message = 'Something went wrong. Please try again.';
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
			url.searchParams.delete('quote_success');
			url.searchParams.delete('quote_error');
			window.history.replaceState({}, '', url);
		}, 2500);
	}
});


let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);