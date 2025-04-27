$(document).ready(function () {
  $("#sub").on("click", function () {
    window.location = "results.html";
  });
  $(".resultSingle").each(function (e) {
  e = e * 100;
    $(this).css("animation-delay", e + "ms");
  });
  var winObj = $( window ),
    bodyObj = $( 'body' ),
    headerObj = $( 'header' );

  winObj.on( 'load', function() {
    var $preloader = $('.preloader');

    setTimeout(function(){
      $preloader.find('.boxes').fadeOut();
      $preloader.delay(350).fadeOut('slow');
    }, 1000);
  });
});