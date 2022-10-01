let karakteri = "qwertyuiopasdfghjklzxcvbnm!@#$%^&";

//Math.radnom() Math.floor()
// let a = Math.floor(Math.random()*10);
// console.log(a);

//generisanje sifre
function generatePassword(leng) {
    let password = "";
    for (let i = 0; i < leng; i++){ 
        password += karakteri.charAt(Math.floor(Math.random()*karakteri.length));  
    }
    // console.log(password); 
    return(password);
};

// let dugme = document.getElementById("generate");
// let brojKaraktera = document.getElementById("leng");

// dugme.addEventListener("click", function(e) {
//     e.preventDefault();
//     document.getElementById("password").value = generatePassword(brojKaraktera.value);
// });


$(document).ready(function(){
    $("#generate").click(function(e) {
        e.preventDefault();     
        $("#password").val(generatePassword($("#leng").val()));
    });
});
