/*POP UP*/
var showwarning = document.getElementById("modal-warning");
var close = document.getElementById("close");

showwarning.classList.add("show");

close.addEventListener("click", () => {
    showwarning.classList.remove("show");
});