$(document).ready(function() {
    $("#fadeID").click(function(){
        $("#prviID").fadeToggle();
        $("#drugiID").fadeTo("slow", 0.5);
        $("#treciID").fadeToggle(3000);
    });
});