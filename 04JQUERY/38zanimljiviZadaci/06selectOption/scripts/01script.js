$(document).ready(function() {
    $("#dugme").click(function(e) {
        e.preventDefault();
        console.log($( "#myselect" ).val());
        console.log($( "#myselect option:selected" ).text());
        $("#myselect option:selected").remove();
    });
});
