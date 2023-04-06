var image = new Image();
// Image for transition
image.src = "../image/colosseo.jpg";
image.onload = function () {
  $(".card").css("background-image", "url('" + image.src + "')");
};
