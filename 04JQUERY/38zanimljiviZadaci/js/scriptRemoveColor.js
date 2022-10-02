
// JS resenje
// let boja = document.getElementById("colorSelect");
// console.log(boja.selectedIndex);
// // console.log(i);
// let dugme = document.getElementById("dugme");

// dugme.addEventListener("click", function (e) {
//     e.preventDefault();
//     // var x = document.getElementById("colorSelect");
//     console.log(boja);
//     console.log(boja[boja.selectedIndex].value);
//     boja.remove(boja.selectedIndex);
// });

//JQuery resenje
$("#dugme").click(function (e) {
    e.preventDefault();
    $("#colorSelect option:selected").remove();

    // $("option").hide($(this));
});