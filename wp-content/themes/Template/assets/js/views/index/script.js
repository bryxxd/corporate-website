(function ($) {
  // scroll nav
  $(function () {
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 600) {
        $(".l-header").addClass("is-scrolled");
        $(".is-contact").addClass("is-scrolled");
        $(".l-nav__menu__button__line").addClass("is-scrolled");
      } else {
        $(".l-header").removeClass("is-scrolled");
        $(".is-contact").removeClass("is-scrolled");
        $(".l-nav__menu__button__line").removeClass("is-scrolled");
      }
    });
  });

  // mv slider
  $(function () {
    var mvSlide = new Splide(".p-index__mv__slide", {
      type: "fade",
      pagination: false,
      arrows: false,
      width: "100%",
      height: "100vh",
      autoplay: true,
      rewind: true,
      rewindSpeed: 2000,
      interval: 5000,
      easing: "ease-in-out",
      speed: 2000,
    });
    mvSlide.mount();
  });

  $(function () {
    // service section
    const options = {
      threshold: [0.3, 0.5],
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        const detailsItem = entry.target;
        const itemIndex = Array.from(observedElements).indexOf(detailsItem);
        const images = document.querySelectorAll(
          ".p-index__service__inner__photos__figure__target",
        );

        if (entry.isIntersecting) {
          images.forEach((img) => img.classList.remove("visible-item"));
          images[itemIndex].classList.add("visible-item");
        } else {
          const isLastObservedElement =
            observedElements[observedElements.length - 1] === detailsItem;
          if (!isLastObservedElement) {
            images[itemIndex].classList.remove("visible-item");
          }
        }
      });
    }, options);
    const observedElements = document.querySelectorAll(
      ".p-index__service__inner__details__item__target",
    );
    observedElements.forEach((el) => observer.observe(el));
  });

  // gallery slide to left
  $(function () {
    var galleryLeft = new Splide(".p-index__gallery__slider--left", {
      type: "loop",
      arrows: false,
      pagination: false,
      drag: false,
      direction: "ltr",
      pauseOnFocus: false,
      pauseOnHover: false,
      gap: "3rem",
      fixedWidth: "250px",
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false,
        speed: 1.5,
      },
      breakpoints: {
        750: {
          gap: "2rem",
          fixedWidth: "20rem",
        },
        751: {
          autoScroll: {
            pauseOnHover: false,
            pauseOnFocus: false,
            speed: 0.8,
          },
        },
      },
    });
    galleryLeft.mount(window.splide.Extensions);
  });

  // gallery slide to rights
  $(function () {
    var galleryRight = new Splide(".p-index__gallery__slider--right", {
      type: "loop",
      arrows: false,
      pagination: false,
      direction: "rtl",
      drag: false,
      pauseOnFocus: false,
      pauseOnHover: false,
      gap: "3rem",
      fixedWidth: "250px",
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false,
        speed: 1.5,
      },
      breakpoints: {
        750: {
          gap: "2rem",
          fixedWidth: "20rem",
        },
        751: {
          autoScroll: {
            pauseOnHover: false,
            pauseOnFocus: false,
            speed: 0.8,
          },
        },
      },
    });
    galleryRight.mount(window.splide.Extensions);
  });

  // blog post slider
  $(function () {
    var blogSlide = new Splide(".p-index__blog__post", {
      type: "slide",
      gap: "3rem",
      padding: { left: "15rem", right: "2rem" },
      perPage: 3,
      perMove: 1,
      pagination: false,
      omitEnd: true,
      classes: {
        arrows: "splide__arrows p-index__blog__post__arrows",
        arrows: "splide__arrows p-index__blog__post__arrows",
        prev: "splide__arrow--prev p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--prev",
        next: "splide__arrow--next p-index__blog__post__arrows__btn p-index__blog__post__arrows__btn--next",
      },
      breakpoints: {
        1100: {
          padding: { left: "5rem" },
        },
        751: {
          padding: { left: "2rem" },
          perPage: 1,
          perMove: 1,
          autoHeight: true,
        },
      },
    });

    blogSlide.mount();

    var bar = blogSlide.root.querySelector(
      ".p-index__blog__post__progress__wrapper__bar",
    );
    var end = blogSlide.Components.Controller.getEnd() + 1;
    var rate = Math.min((blogSlide.index + 1) / end, 1);
    bar.style.width = String(100 * rate) + "%";

    // Updates the bar width whenever the carousel moves:
    blogSlide.on("mounted move", function () {
      var end = blogSlide.Components.Controller.getEnd() + 1;
      var rate = Math.min((blogSlide.index + 1) / end, 1);
      bar.style.width = String(100 * rate) + "%";
    });

    // hide progress when post is less than or equal to 3
    var postLength = $(".p-index__blog__post__li");
    var progress = $(".p-index__blog__post__progress");

    if (postLength.length <= 3) {
      progress.css("display", "none");
    }
  });
})(jQuery.noConflict());
