// Portfolio and Case Studies Tab Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio tabs
    const portfolioTabItems = document.querySelectorAll('.megamenu-portfolio .megamenu-tab__item');
    const portfolioTabContainers = document.querySelectorAll('.megamenu-portfolio .megamenu-tab-container');

    portfolioTabItems.forEach((tab, index) => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all tabs
            portfolioTabItems.forEach(t => t.classList.remove('active'));
            portfolioTabContainers.forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab
            this.classList.add('active');

            // Show corresponding content
            if (portfolioTabContainers[index]) {
                portfolioTabContainers[index].classList.add('active');
            }
        });
    });

    // Activate first tab by default
    if (portfolioTabItems.length > 0) {
        portfolioTabItems[0].classList.add('active');
        if (portfolioTabContainers[0]) {
            portfolioTabContainers[0].classList.add('active');
        }
    }

    // Industries tags functionality
    const industryTags = document.querySelectorAll('.megamenu-tag-item');

    industryTags.forEach(tag => {
        tag.addEventListener('click', function() {
            industryTags.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            // Add your filter logic here based on the selected industry
            const industry = this.querySelector('.megamenu-tag-label').textContent;
            console.log('Selected industry:', industry);
            // Implement your filtering logic here
        });
    });
});