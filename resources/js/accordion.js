document.querySelectorAll('.accordion__toggle').forEach(toggle => {
    toggle.addEventListener('click', function () {
        const contentSelector = this.getAttribute('data-target');
        const content = document.querySelector(contentSelector);
        console.log(contentSelector);
        if (!content) return;
        console.log(content);

        const expanded = this.getAttribute('aria-expanded') === 'true';

        this.setAttribute('aria-expanded', String(!expanded));
        content.toggleAttribute('hidden');
        content.closest('.accordion').classList.toggle('is-open');
    });
});
