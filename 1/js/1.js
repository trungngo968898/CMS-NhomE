$(document).ready(function() {
  if ($(".nav-menu").length) {
    var $mobile_nav = $(".nav-menu")
      .clone()
      .prop({
        class: "mobile-nav d-lg-none"
      });
    $("body").append($mobile_nav);
    $("body").prepend(
      '<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>'
    );
    $("body").append('<div class="mobile-nav-overly"></div>');

    $(document).on("click", ".mobile-nav-toggle", function(e) {
      $("body").toggleClass("mobile-nav-active");
      $(".mobile-nav-toggle i").toggleClass("fa-bars fa-times-circle");
      $(".mobile-nav-overly").toggle();
    });

    $(document).on("click", ".mobile-nav .drop-down > a", function(e) {
      e.preventDefault();
      $(this)
        .next()
        .slideToggle(300);
      $(this)
        .parent()
        .toggleClass("active");
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $(".mobile-nav-toggle i").toggleClass("fa-bars fa-times-circle");
          $(".mobile-nav-overly").fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  $(".closebtn").click(function() {
    closeNav();
  });
  $(".close-side").click(function() {
    closeNav();
  });
  $("#opennav").click(function() {
    openNav();
  });
  $(".hero-items").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 5000,
    autoHeight: false,
    autoplay: true
  });

  var menu = $("ul#navigation");
  if (menu.length) {
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: "+",
      openedSymbol: "-"
    });
  }
});
function openNav() {
  $("#mySidenav").css("width", "540px");
  $(".close-side").css("visibility", "visible");
  $(".close-side").css("opacity", "1");
}
function closeNav() {
  $("#mySidenav").css("width", "0");
  $(".close-side").css("visibility", "hidden");
  $(".close-side").css("opacity", "0");
}
