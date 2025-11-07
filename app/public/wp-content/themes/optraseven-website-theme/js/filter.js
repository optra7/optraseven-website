// assets/js/filter.js
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.o7-list-page-filter__filter-item');
    const caseCards = document.querySelectorAll('.o7-list-page-filter__card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;

            // toggle active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            caseCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
