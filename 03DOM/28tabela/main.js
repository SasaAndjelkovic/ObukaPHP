// const inputRed = document.getElementById("red");
const inputKolona = document.getElementById("kolona");

const tabelaBody = document.getElementsByTagName("tbody")[0];
console.log(tabelaBody);

// let red = tabelaBody.insertRow();
// let polje1 = red.insertCell(0);
// let polje2 = red.insertCell(1);

// polje1.innerHTML = "Aleksa";
// polje2.innerHTML = "Miletic";

document.addEventListener("submit", function(event) {
    event.preventDefault();
    let red = tabelaBody.insertRow();
    for(let brojac = 0; brojac < inputKolona.value; brojac++) {
        let cell = red.insertCell();
        cell.innerHTML = "a";
    }
});