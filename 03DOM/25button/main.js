const paragraf = document.getElementById("tekst");

const plavo = document.getElementById("rb-plavo");
const crveno = document.getElementById("rb-crveno");

const dugme = document.getElementById("dugme");

dugme.addEventListener("click", function () {
if (plavo.checked) {
    paragraf.style.backgroundColor = "blue";
} else if (crveno.checked) {
    paragraf.style.backgroundColor = "red";
} else {
    paragraf.style.backgroundColor = "green";
} 
});