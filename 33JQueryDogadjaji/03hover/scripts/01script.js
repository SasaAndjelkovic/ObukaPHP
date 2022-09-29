$(document).ready(function(){
    $("p:eq(1)").hover(function(){
        alert("Presli ste misem preko drugog paragrafa!")
    },
    function(){
        alert("Sklonili ste mis sa drugog paragrafa!");
    });
});