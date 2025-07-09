// assets/js/home-script.js
$(function () {

  $('#statsCarousel').owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 3 }
    }
  });

  // RDB Do Business Video Modal
  (function () {
    var $hero = $('.rdb-do-business-hero');
    var $modal = $('.rdb-do-business-modal');
    var $modalBg = $('.rdb-do-business-modal-bg');
    var $close = $('.rdb-do-business-modal-close');
    var $video = $('.rdb-do-business-vid');

    $hero.on('click', function () {
      $modal.addClass('active');
      $video[0].currentTime = 0;
      $video[0].play();
    });

    function closeModal() {
      $modal.removeClass('active');
      $video[0].pause();
      $video[0].currentTime = 0;
    }

    $close.on('click', closeModal);
    $modalBg.on('click', closeModal);

    $(document).on('keydown', function (e) {
      if ($modal.hasClass('active') && e.key === "Escape") {
        closeModal();
      }
    });
  })();

  $('.ac-heading').on('click', function () {
    var item = $(this).closest('.accordion-item');
    var open = item.hasClass('open');
    $('.accordion-item').removeClass('open');
    $('.ac-content').css('max-height', 0);
    if (!open) {
      item.addClass('open');
      var content = item.find('.ac-content');
      content.css('max-height', content[0].scrollHeight + 32 + 'px');
    }
  });

});
