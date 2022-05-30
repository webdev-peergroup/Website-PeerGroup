$(".open_popup").click(function () {
  $(this).parent(".popup_main").children(".popup_body").addClass("popup_body_show");
  });
$(".popup_close").click(function () {
  $(".popup_body").removeClass("popup_body_show");
  });
$(".popup_back").click(function () {
  $(".popup_body").removeClass("popup_body_show");
  });