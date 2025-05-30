document.addEventListener('DOMContentLoaded', () => {
    console.log('Accordion script initialized');

    document.querySelectorAll('.accordion__toggle').forEach(toggle => {
        console.log('Found toggle', toggle);

        toggle.addEventListener('click', function () {
            const targetSelector = this.getAttribute('data-target');
            console.log('Target selector:', targetSelector);

            const content = document.querySelector(targetSelector);
            if (!content) {
                console.warn('Accordion content not found:', targetSelector);
                return;
            }

            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle aria-expanded
            this.setAttribute('aria-expanded', String(!isExpanded));

            // Show/hide content
            if (isExpanded) {
                content.setAttribute('hidden', 'hidden');
                console.log("close it");
            } else {
                content.removeAttribute('hidden');
                console.log("open it");
            }

            // Toggle .is-open class on the accordion wrapper
            const accordion = this.closest('.accordion');
            if (accordion) {
                accordion.classList.toggle('is-open');
            }
        });
    });
});
