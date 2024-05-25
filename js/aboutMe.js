/* slide animation in the work history section*/
$(document).ready(function() {
  $(window).scroll(function() {
      $(".work-history-box").each(function() {
          var position = $(this).offset().top;
          var scrollPosition = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (position < scrollPosition + windowHeight - 50) {
              $(this).addClass("show");
          } else {
              $(this).removeClass("show"); // Remove show class if not inside the viewport
          }
      });
  });
});

/* button animation in the hobbies section*/
$(document).ready(function () {
  $(".facts-about-me-list").click(function () {
    $(".facts-show-list").slideToggle(1000);
  });
});