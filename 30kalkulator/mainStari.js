const elementRezultat = document.getElementById("rezultat");

let desetica = 0;
let operand = 0;

function unesi (param) {
    
     if (typeof eval(param) == "number") {
       operand = operand + param*10**desetica;
       desetica++;
       console.log(operand, desetica);
    } else {
        elementRezultat.value
        desetica = 0;
    };   
};

function obrisi () {
    elementRezultat.value = "";
};

function izracunaj () {

};

