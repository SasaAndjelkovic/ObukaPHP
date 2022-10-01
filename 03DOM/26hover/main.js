const paragraf1 = document.getElementById("tekst-1");
const paragraf2 = document.getElementById("tekst-2");

console.log(paragraf1);
console.log(paragraf2);

paragraf1.addEventListener("mouseover", function () {
    paragraf2.style.background = "green";
});

paragraf2.addEventListener("mouseover", function () {
    paragraf1.style.background = "blue";
});

paragraf1.addEventListener("mouseout", function () {
    paragraf2.style.background = "none";
});

paragraf2.addEventListener("mouseout", function () {
    paragraf1.style.background = "none";
});

