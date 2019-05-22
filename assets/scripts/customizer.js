(function($) {
  // Hero title
  wp.customize('hero_title', function(value) {
    value.bind(function(to) {
      $('.hero-section__title').text(to);
    });
  });

  // Hero text
  wp.customize('hero_text', function(value) {
    value.bind(function(to) {
      $('.hero-section__text').text(to);
    });
  });

  // Hero btn text
  wp.customize('hero_btn_text', function(value) {
    value.bind(function(to) {
      $('.hero-section__btn').text(to);
    });
  });

  // Hero btn link
  wp.customize('hero_btn_link', function(value) {
    value.bind(function(to) {
      $('.hero-section__btn').attr("href", to);
    });
  });
})(jQuery);
