const paragraf = document.getElementById("tekst");

const radioButtonBojiPlavo = document.getElementById("rb-plavo");
const radioButtonBojiCrveno = document.getElementById("rb-crveno");

console.log(radioButtonBojiPlavo); //checked false
console.log(radioButtonBojiCrveno); //checked false

document.addEventListener("click", function () {
    if (radioButtonBojiPlavo.checked) {
        paragraf.style.backgroundColor = "blue";
    } else if (radioButtonBojiCrveno.checked) {
        paragraf.style.backgroundColor = "red";
    } else {
        paragraf.style.backgroundColor = "green";
    } 
});