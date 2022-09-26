const paragraf = document.getElementById("tekst");
console.log(paragraf);
// const checkbox = document.getElementById("box");
const checkbox = document.querySelector("#box");

console.log(checkbox);
console.log(checkbox.checked);

checkbox.addEventListener("change", function(){
    if (checkbox.checked) {
        paragraf.style.visibility = "visible";
    } else {
        paragraf.style.visibility = "hidden";
    }
});