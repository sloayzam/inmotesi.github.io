var showwarning = document.getElementById("modal-container-warning");
var close = document.getElementById("close");

showwarning.classList.add("show"); 

close.addEventListener("click", () => {
    showwarning.classList.remove("show");
});


var showlegacy = document.getElementById("modal-container-legacy");
var legacy = document.getElementById("legacy");
var closelegacy = document.getElementById("close-legacy");

legacy.addEventListener("click", () => {
    showlegacy.classList.add("show");
});
closelegacy.addEventListener("click", () => {
    showlegacy.classList.remove("show");
});


var showpolicy = document.getElementById("modal-container-policy");
var policy = document.getElementById("policy");
var closepolicy = document.getElementById("close-policy");

policy.addEventListener("click", () => {
    showpolicy.classList.add("show");
});
closepolicy.addEventListener("click", () => {
    showpolicy.classList.remove("show");
});




/* Formas para conectar sitios con javascript
legacy.addEventListener("click", () => {
    window.location.replace(URL="../legal-notice.html") /*puedo usar window.location.href = window.location.href = "http://stackoverflow.com";
});

legacy.addEventListener("click", () => {
    window.location.replace(URL="/privacy-policy.html") /*puedo usar window.location.href = window.location.href = "http://stackoverflow.com";
});*/


