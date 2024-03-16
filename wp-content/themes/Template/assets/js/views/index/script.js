(function ($) {
  // mv slider
  $(function () {
    var splide = new Splide('.splide', {
      type: 'fade',
      pagination: false,
      arrows: false,
      width: '100%',
      height: '100vh',
      autoplay: true,
      rewind: true,
      rewindSpeed: 2000,
      interval: 5000,
      easing: 'ease-in-out',
      speed: 2000
    });
    splide.mount();
  });

  $(function () {
    // service section
    const options = {
      threshold: 0.3
    }
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        const detailsItem = entry.target;
        const itemIndex = Array.from(observedElements).indexOf(detailsItem);
        const images = document.querySelectorAll('.p-index__about__inner__photos__figure__target');

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
    const observedElements = document.querySelectorAll('.p-index__about__inner__details__item__target');
    observedElements.forEach(el => observer.observe(el));
  });

})(jQuery.noConflict());

