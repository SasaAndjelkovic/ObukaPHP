$(document).ready(function () {
    $("#hideID").click(function () {
        $("p").hide();
    });
});
    $("#showID").click(function (){
        $("p").show();
    });
    $("#toggleID").click(function() {
        $("p").toggle(1000);
    });
