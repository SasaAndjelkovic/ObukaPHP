const inputEvro = document.getElementById("evro");
const inputDinar = document.getElementById("dinar");

//nesto drugacije resenje
const forma = document.getElementById("evro-dinar");
console.log(inputEvro);

forma.addEventListener("submit", function(event) {
    event.preventDefault(); 
    const vrednostUEvrima = inputEvro.value;
    const vrednostUDinarima = vrednostUEvrima * 117.27;
    inputDinar.value = vrednostUDinarima; // ?
});