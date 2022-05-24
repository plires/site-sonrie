$('.galeria_items').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  adaptiveHeight: true,
  // arrows: true,
  // appendArrows: true,
  // centerPadding: '50px',
  // prevArrow: '<p>ant</p>',
  // nextArrow: '<p>sig</p>',
  // centerPadding: '60px',
  centerMode: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
      }
    },
    
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});