//sintaksa
//$(selector).akcija();

//SELEKTORI
// vanila js -> document.getElementsByClassName("paragraf")[3].style.color="rgb(255,0,0)";
$(".paragraf").css("color", "red");
$(".paragraf:eq(1)").css("color", "green");
$(".paragraf").first().css("color", "blue");

$(".paragraf").slice(3-5).css({"color": "rbg(50, 150, 45)", "background-color": "rgb(30, 20, 80"});

//EFEKTI
// $(".paragraf:eq(0)").hide();
// $(".paragraf:eq(0)").hide("slow");
// $(".paragraf:eq(0)").hide("fast");
$(".paragraf:eq(0)").hide(2000); //vrednost u milisekundama
$(".paragraf:eq(1)").show(2000); 
$(".dugme").click(function () {
    $(".paragraf:eq(1)").toggle(2000); //ako je prikazan ti ga sakri, ako je sakriven ti prikazi
    $(".paragraf:eq(2)").fadeTo(2000, 0.5); //izbledi 50%
});
//fadeIn, fadeOut, fadeToogle
//slideUp, slideDown

//DOGADJAJI
//$(".dugme").click(function () {});
//document.getElementsByClassName("dugme")[0].addEventListener("click", function(){});

$(".dugme").on("click", function(){}); //jquery on(). bind() je stariji koncept

// $(".polje").on("focus", function () {
//     $(".polje:focus").css({border: "3px solid blue"});  //bolje da isto stavi this
// });

// $(".polje").on("blur", function () {
//     $(this).css({border: "1px solid grey"});
// });



//  $(".polje").on("focus blur", function (e) {
//     console.log(e);
//     if (e.type == "focus") {
//         $(this).css({border: "3px solid blue"});
//     } else {
//         $(this).css({border: "1px solid grey"});
//     }
// });

//GET metode
//innerHTML, textContent
$(".paragraf").on("click", function () {
    let tekst = $(this).text(); //prazno() znaci get
    //let tekst = $(this).html();  
    //let tekst = $(this).val();
    alert(tekst);
});

//SET metode
let imePrezime = "Petar Petrovic";
let adresa = "Jove Ilica 154";
$(document).ready(function() {
    $(".paragraf:eq(4)").text("Novi tekst ovog paragrafa");
    // $(".polje:eq(0").val("Petar");
    $(".polje:eq(0)").val(imePrezime);
    $(".polje:eq(1)").val(adresa);
});

$(".dugme2").on("click", function(){
    let ime = $(".polje:eq(0)").val();
    let adresa = $(".polje:eq(1)").val();
    let napomena = $(".polje:eq(2)").val();
    console.log("Ime i prezime: " + ime + "\nAdresa: " + adresa + "\nNapomena: " + napomena);
});

//Metode za klase
//classList.add("") je bilo u VanJS
$(".polje").on("focus blur", function (e) {
    // console.log(e);
    if (e.type == "focus") {
        // $(this).css({border: "3px solid blue"});
        $(this).addClass("novoPolje");
    } else {
        // $(this).css({border: "1px solid grey"});
        $(this).removeClass("novoPolje");
    }
});


