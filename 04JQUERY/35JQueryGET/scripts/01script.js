$(document).ready(function() {
    $("#tekstID").click(function(){
        alert("Tekst: " + $("#drugiP").text());
    });
    $("#htmlID").click(function() {
        alert("HTML: " + $("#drugiP").html());
    });
    $("#valID").click(function(){
        alert("Uneta vrednost: " + $("#inputID").val());
    });
    $("#attrID").click(function() {
        alert($("a").attr("href"));
    })
});

