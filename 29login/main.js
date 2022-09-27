// const forma = document.forms["login-forma"];
// const korisnik = forma["username"]
// const lozinka = forma["password"]

const elementKorisnik = document.getElementById("username");
const elementLozinka = document.getElementById("password");
const dugme = document.getElementsByTagName("button")[0];
console.log(elementKorisnik, elementLozinka, dugme);

dugme.addEventListener("click", function(event) {
    event.preventDefault();
    const korisnik = elementKorisnik.value;
    const lozinka = elementLozinka.value; 
    console.log(korisnik, lozinka);
    if (korisnik == "" || lozinka == "") {
        alert("Korisnicko ime ili Lozinka je prazna.");
    } else if (korisnik.length < 6 || lozinka < 6) {
        alert("Uneli ste kratko Korisnicko ime ili Lozinku");
    } else { 
        alert("Dobrodosli, " + korisnik);
    }    
});

