const elementRezultat = document.getElementById("rezultat");

let operacija = "";

function unesi (param) {     
    operacija += param;     
    elementRezultat.value = operacija;
};

function obrisi () {
    elementRezultat.value = "";
    operacija = "";
};

function izracunaj () {
    elementRezultat.value = eval(operacija);
};

