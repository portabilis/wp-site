( function( $ ) {
  new WOW(
    { mobile: false}
  ).init();
  $('[data-toggle="popover"]').popover();
  $('.list-desc').on('show.bs.collapse', function () {
    $(this).prev().find('.list-btn').text('-');
  });
  $('.list-desc').on('hide.bs.collapse', function () {
    $(this).prev().find('.list-btn').text('+');
  });
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  });
  $(".pop").popover({ trigger: "manual" , html: true, animation:false})
      .on("mouseenter", function () {
          var _this = this;
          $(this).popover("show");
          $(".popover").on("mouseleave", function () {
              $(_this).popover('hide');
          });
      }).on("mouseleave", function () {
          var _this = this;
          setTimeout(function () {
              if (!$(".popover:hover").length) {
                  $(_this).popover("hide");
              }
          }, 300);
  });
} )( jQuery );