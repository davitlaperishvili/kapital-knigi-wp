$(window).on("load", function () {
  if ($(window).width() < 960) {
    $(".mob.open,.mob.close").click(function () {
      $("header .main-right-div").toggleClass("acriv");
      $(".open").toggle();
      $(".close").toggle();
    });

    $(".main-right-div2 a").click(function () {
      $("header .main-right-div").toggleClass("acriv");
      $(".open").toggle();
      $(".close").toggle();
    });
  }
  let n = 8,
    divs = $("#elements a"),
    div;

  divs.sort(function (a, b) {
    return Math.random() - 0.5;
  });

  for (var i = 0; i < n; ++i) {
    divs.eq(i).show();
  }
});
