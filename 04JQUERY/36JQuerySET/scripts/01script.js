$(document).ready(function() {
    $("#btn1").click(function() {
        $("#test1").text("Hello World!");
    });
    $("#btn2").click(function() {
        $("#test2").html("<b>Hello World!</b>");
    });
    $("#btn3").click(function() {
        $("#test3").val("Milica Simic");
    });
    $("#btn4").click(function() {
        $("p").append(" Neki dodatni tekst na kraju paragrafa.");
    });
    $("#btn5").click(function() {
        $("p").prepend("Neki dodatni tekst na pocetku paragrafa. ");
    });
    $("#btn6").click(function() {
        $("img").after("Neki tekst nakon slike.");
    });
    $("#btn7").click(function() {
        $("img").before("Neki tekst pre slike.");
    });
    $("#btn8").click(function() {
        $("#test1").remove();  //uklanja selektovani p element i svu njegovu decu (teskt)
    })
    $("#btn9").click(function() {
        $("#test2").empty();   //uklanja decu (tekst), p element ostaje
    });
});