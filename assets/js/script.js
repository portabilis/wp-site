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
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(400).queue(function (next) { 
    });
  });
} )( jQuery );