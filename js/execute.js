var show = document.getElementById("modal-container-show");
var close = document.getElementById("close");

show.classList.add("show");  


close.addEventListener("click", () => {
    show.classList.remove("show");
});
