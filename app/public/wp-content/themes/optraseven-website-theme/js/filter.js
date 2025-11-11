document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll('.o7-list-page-filter__filter-item');
    const caseCards     = document.querySelectorAll('.o7-list-page-filter__card');
    const leftCol       = document.querySelector('.o7-list-page-filter__column-left');
    const rightCol      = document.querySelector('.o7-list-page-filter__column-right');

    // Function to apply filter
    function applyFilter(filter) {
        // Clear columns
        leftCol.innerHTML = '';
        rightCol.innerHTML = '';

        // Filter & split cards
        const visibleCards = Array.from(caseCards).filter(card =>
            filter === 'all' || card.classList.contains(filter)
        );

        const half = Math.ceil(visibleCards.length / 2);
        visibleCards.forEach((card, index) => {
            if (index < half) {
                leftCol.appendChild(card);
            } else {
                rightCol.appendChild(card);
            }
            card.style.display = 'block';
        });

        // Hide non-matching cards
        Array.from(caseCards)
            .filter(card => !visibleCards.includes(card))
            .forEach(card => card.style.display = 'none');

        // Update URL without reloading
        const url = new URL(window.location);
        if (filter === 'all') {
            url.searchParams.delete('filter');
        } else {
            url.searchParams.set('filter', filter);
        }
        window.history.replaceState(null, '', url.toString());
    }

    // Add click events
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filter = button.dataset.filter;
            applyFilter(filter);
        });
    });

    // On page load, apply filter from URL
    const initialFilter = window.archiveFilterData?.current_filter || 'all';
    applyFilter(initialFilter);

    // Mark active button
    filterButtons.forEach(btn => {
        if (btn.dataset.filter === initialFilter) btn.classList.add('active');
        else btn.classList.remove('active');
    });
});
