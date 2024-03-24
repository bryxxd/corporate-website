(function ($) {
  // mv slider
  $(function () {
    var mvSlide = new Splide('.p-index__mv__slide', {
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
    mvSlide.mount();
  });

  $(function () {
    // service section
    const options = {
      threshold: [0.3, 0.5]
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

  // gallery slide to left
  $(function () {
    var galleryLeft = new Splide('.p-index__gallery__slider--left', {
      type: "loop",
      arrows: false,
      pagination: false,
      drag: false,
      direction: 'ltr',
      pauseOnFocus: false,
      pauseOnHover: false,
      gap: '3rem',
      fixedWidth: '27rem',
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false,
        speed: 1.5,
      }
    });
    galleryLeft.mount(window.splide.Extensions)
  });

  // gallery slide to rights
  $(function () {
    var galleryRight = new Splide('.p-index__gallery__slider--right', {
      type: "loop",
      arrows: false,
      pagination: false,
      direction: 'rtl',
      drag: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      gap: '3rem',
      fixedWidth: '27rem',
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false,
        speed: 1.5,
      }
    });
    galleryRight.mount(window.splide.Extensions)
  });

  // blog post slider
  $(function () {
    var blogSlide = new Splide('.p-index__blog__post', {
      type: "slide",
      gap: '3rem',
      padding: { left: '15rem', right: '2rem' },
      perPage: 3,
      perMove: 1,
      drag: false,
      pagination: false,
      omitEnd : true,
      classes: {
        arrows: 'splide__arrows p-index__blog__post__arrows',
        arrows: 'splide__arrows p-index__blog__post__arrows',
        prev: 'splide__arrow--prev p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--prev',
        next: 'splide__arrow--next p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--next',
      },
      breakpoints: {
        751: {
          padding : { left : '2rem', right : '2rem'},
          perPage : 1,
          perMove: 1,
          autoHeight : true,
        },
      }
    });

  
    blogSlide.mount();

    var bar = blogSlide.root.querySelector('.p-index__blog__post__progress__wrapper__bar');
    var end = blogSlide.Components.Controller.getEnd() + 1;
    var rate = Math.min((blogSlide.index + 1) / end, 1);
    bar.style.width = String(100 * rate) + '%';
    
    // Updates the bar width whenever the carousel moves:
    blogSlide.on('mounted move', function () {
      var end = blogSlide.Components.Controller.getEnd() + 1;
      var rate = Math.min((blogSlide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + '%';
    });
  });

})(jQuery.noConflict());

