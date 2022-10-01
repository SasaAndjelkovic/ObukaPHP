$(document).ready(function () {
    $("p").dblclick(function () {
        $("p:odd").css("background", "red");
    });
});