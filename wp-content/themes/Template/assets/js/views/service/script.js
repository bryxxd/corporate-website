(function ($) {
    $(function () {
        // service section
        const options = {
            threshold: [0.3, 0.5]
        }
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const detailsItem = entry.target;
                const itemIndex = Array.from(observedElements).indexOf(detailsItem);
                const images = document.querySelectorAll('.p-service__inner__photos__figure__target');

                if (entry.isIntersecting) {
                    images.forEach(img => img.classList.remove('visible-item'));
                    images[itemIndex].classList.add('visible-item');
                } else {
                    const isLastObservedElement = observedElements[observedElements.length - 1] === detailsItem;
                    if (!isLastObservedElement) {
                        images[itemIndex].classList.remove('visible-item');
                    }
                }
            });
        }, options);
        const observedElements = document.querySelectorAll('.p-service__inner__details__item__target');
        observedElements.forEach(el => observer.observe(el));
    });
})(jQuery.noConflict());

