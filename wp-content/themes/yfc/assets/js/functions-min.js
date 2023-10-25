//      helps removes hashtag from url on menu click and
//     prevents menu from opening when another link is click
$(document).ready(function () {
  function e() {
    $(".nav-toggle").click(function () {
      $(".nav").toggleClass("open");
    });
  }

  function s() {
    $('a[href^="#"]').click(function (e) {
      var s = $($(this).attr("href"));
      s.length &&
        (e.preventDefault(),
        $("html, body").animate(
          {
            scrollTop: s.offset().top - 15,
          },
          300
        )),
        $(".nav").toggleClass("open");
    });
  }
  e(), s(), r(), a();
});
