$(document).ready(function() {
    $("input").keypress(function(){
        console.log($(this).val().length);
        if ($(this).val().length>7) {
            $(this).addClass("novoPolje");
        };
    });
});