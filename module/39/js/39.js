$(document).ready(function() {
  $(window).on("load", function() {
    if ($("#preloader").length) {
      $("#preloader")
        .delay(5000)
        .fadeOut("slow", function() {
          $(this).remove();
        });
    }
  });
  $(".counter").counterUp({
    time: 4000
  });
});
