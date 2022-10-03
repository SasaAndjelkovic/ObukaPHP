$(document).ready(function() {
    $("#obojeni_paragrafi").click(function() {
        $("p").css({"background-color": "yellow", "font-size": "200%"});
    });
    $("#toggle").click(function() {
        $("div").toggleClass("druga");
    });
});
