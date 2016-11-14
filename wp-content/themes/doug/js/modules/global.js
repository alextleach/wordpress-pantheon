jQuery(function ($) {

  var positionFooter = function() {
    $('footer').css('position', 'relative');
    var winHeight = $(window).height();
    var footerTop = $('footer').offset().top;
    var footerHeight = $('footer').height();
    var footerBottom = footerTop + footerHeight;
    if (footerBottom < winHeight) {
      $('footer').css({
        'position': 'fixed',
        'bottom': 0
      });
    }
  };

  $(window).on('resize', function() {
    positionFooter();
  }).resize();

  var slideout = new Slideout({
    'panel': document.getElementById('wrapper'),
    'menu': document.getElementById('mobile-menu'),
    'padding': 256,
    'tolerance': 70,
    'side': 'right'
  });

  $('.mobile-menu button').on('click', function() {
      slideout.toggle();
  });
  $(window).on('resize', function() {
    if ($(this).width() > 767) {
      slideout.close();
    }
  });

});
