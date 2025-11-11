document.addEventListener("DOMContentLoaded", function () {
    const leftCol = document.querySelector('.o7-list-page-filter__column-left');
    const rightCol = document.querySelector('.o7-list-page-filter__column-right');
    const filterButtons = document.querySelectorAll('.o7-list-page-filter__filter-item');
    const allCards = Array.from(document.querySelectorAll('.o7-list-page-filter__card'));

    if (!leftCol || !rightCol || allCards.length === 0) return;

    function renderColumns(cards) {
        leftCol.innerHTML = '';
        rightCol.innerHTML = '';
        cards.forEach((card, index) => {
            if (index % 2 === 0) leftCol.appendChild(card);
            else rightCol.appendChild(card);
        });
    }

    function updateURL(filter) {
        const params = new URLSearchParams(window.location.search);
        if (filter === 'all') params.delete('filter');
        else params.set('filter', filter);

        const newURL = `${window.location.pathname}${params.toString() ? '?' + params.toString() : ''}`;
        window.history.replaceState({}, '', newURL);
    }

    function applyFilter(filter) {
        const visibleCards = filter === 'all'
            ? allCards
            : allCards.filter(card => card.classList.contains(filter));

        renderColumns(visibleCards);

        filterButtons.forEach(btn =>
            btn.classList.toggle('active', btn.dataset.filter === filter)
        );

        updateURL(filter);
    }

    const startFilter = (window.archiveFilterData && window.archiveFilterData.current_filter) || 'all';
    applyFilter(startFilter);

    filterButtons.forEach(button => {
        button.addEventListener('click', () => applyFilter(button.dataset.filter));
    });

    window.addEventListener('popstate', () => {
        const params = new URLSearchParams(window.location.search);
        applyFilter(params.get('filter') || 'all');
    });
});
