/*POP UP*/
var showwarning = document.getElementById("modal-warning");
var close = document.getElementById("close");

showwarning.classList.add("show");

close.addEventListener("click", () => {
    showwarning.classList.remove("show");
});



/*PARA CARRUSEL DE IMÁGENES EN CONSTRUCCIÓN Y DISEÑO*/
$("section.awSlider .carousel").carousel({
    pause: "hover",
    interval: 500
});

var startImage = $("section.awSlider .item.active > img").attr("src");
$("section.awSlider").append('<img src="' + startImage + '">');

$("section.awSlider .carousel").on("slid.bs.carousel", function () {
    var bscn = $(this).find(".item.active > img").attr("src");
    $("section.awSlider > img").attr("src", bscn);
});
