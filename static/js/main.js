$(document).ready(function() {
  svg4everybody();

  var app = {
    header: {
      expanded: false
    }
  };

  // меню на мобильном
  $('.header__expand').click(function() {
    if (app.header.expanded == false) {
      $(this).addClass('header__expand--active');
      $('.nav').slideDown();
      app.header.expanded = !app.header.expanded;
    } else {
      $(this).removeClass('header__expand--active');
      $('.nav').slideUp(function() {
        $('.nav').attr('style', '');
      });
      app.header.expanded = !app.header.expanded;
    }
  });

  // блок «похожие»
  $('.posts__slider').slick({
    arrows: false,
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          centerMode: true
        }
      }
    ]
  });
});