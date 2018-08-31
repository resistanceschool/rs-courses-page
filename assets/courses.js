// detect touching
window.addEventListener('touchstart', function onFirstTouch() {
  // we could use a class
  document.body.classList.add('js-touch-detected');

  // we only need to know once that a human touched the screen, so we can stop listening now
  window.removeEventListener('touchstart', onFirstTouch, false);
}, false);


// scrolling cards code
jQuery(function() {
  jQuery('.js-scrollable.js-learning-path').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    slide: '.card-rs',
    responsive: [
    {
      breakpoint: 991.98,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false
      }
    }
  ],
    prevArrow: "<a class='arrow pin-left'><i class='fas fa-chevron-left arrow-icon'></i></a>",
    nextArrow: "<a class='arrow pin-right'><i class='fas fa-chevron-right arrow-icon'></i></a>"
  });

  // reset position on sliders in tabs, since being hidden seems seems to shift their layout
  jQuery('#myTab').on('shown.bs.tab', function (e) {
    jQuery('.js-scrollable.js-learning-path').slick('setPosition');
  });

  // append line
  jQuery('.js-scrollable.js-learning-path .slick-track').append('<div class="line"></div>');

  jQuery('.js-scrollable.js-section').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 575.98,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false
      }
    }
  ],
    prevArrow: "<a class='arrow section-arrow'><i class='fas fa-chevron-left arrow-icon'></i></a>",
    nextArrow: "<a class='arrow section-arrow'><i class='fas fa-chevron-right arrow-icon'></i></a>"
  });
})