//document.write("Zdravo svima"); ali rusimo strukturu na sajtu
/* promenljive -cuvaju neke vrednosti
tri tipa promenljivih
var - vidljivo na nivou funkcije
let - vidljivo na nivou bloka (if blok npr.)
const - vidljivo na nivou bloka, ali je nepromenljiva*/
var ime = "Petar"; //definisanje promenljive
var prezime;
prezime = "Petrovic";

let ime2 = "Jovan";
let broj = 325;
let tacno = true;

console.log("Zdravo " + ime);
console.log("Kako si " + ime);

console.log(ime);
console.log(ime2);

if (true) {
    var promVar = "var promenljiva";
    // console.log(promVar);
}

console.log(promVar);

if (true) {
    var promLet = "let promenljiva";
    // console.log(promLet);
}

console.log(promLet);

const promConst = 5;
// promConst = 6;

alert("Upozorenje, mnogo dobar sajt");
console.log(confirm("Da li ste zadovoljni sajtom?"));
let korisnik = prompt("Unesite ime:", "NN lice");
console.log(korisnik);