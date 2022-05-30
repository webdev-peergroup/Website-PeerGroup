// // Get the modal
// var modal = document.getElementById("popup");

// // Get the button that opens the modal
// var btns = document.getElementsByClassName("divisi-pop");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on the button, open the modal
// for (var i = 0; i < btns.length; i++) {
//   btns[i].onclick = function() {
//     modal.style.display = "block";
//   }
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
$(".open_popup").click(function () {
  $(this).parent(".popup_main").children(".popup_body").addClass("popup_body_show");
  });
$(".popup_close").click(function () {
  $(".popup_body").removeClass("popup_body_show");
  });
$(".popup_back").click(function () {
  $(".popup_body").removeClass("popup_body_show");
  });