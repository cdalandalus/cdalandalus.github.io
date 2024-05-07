// dropdown menu on hover
var $screensize = $(window).width();
$(".nav-dropdown-menu-body").on("mouseover", function () {
  $(this)
    .find("> .nav-dropdown-menu-submenu")
    .stop(true, true)
    .slideDown("fast");
  $(this).bind("mouseleave", function () {
    $(this)
      .find("> .nav-dropdown-menu-submenu")
      .stop(true, true)
      .css("display", "none");
  });
});

//Change position for drop down
$(function () {
  $(".nav-dropdown-menu-body li").on("mouseenter mouseleave", function (e) {
    if ($(".nav-dropdown-menu-submenu", this).length) {
      var elm = $(".nav-dropdown-menu-submenu", this);
      var off = elm.offset();
      var l = off.left;
      var w = elm.width();
      var docW = $(window).width();

      var isEntirelyVisible = l + w <= docW;

      if (!isEntirelyVisible) {
        $(elm).addClass("nav-dropdown-reverse");
      } else {
        $(elm).removeClass("nav-dropdown-reverse");
      }
    }
  });
});