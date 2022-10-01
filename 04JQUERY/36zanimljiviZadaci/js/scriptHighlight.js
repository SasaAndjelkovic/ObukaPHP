// let strongItems = document.getElementsByTagName("strong");
// console.log(strongItems);

// let paragraf = document.getElementById("hajlajt");
// console.log(paragraf);

// ne moze na ovaj nacin kao sto sam ja mislio
// paragraf.addEventListener("mouseover", function() {
//         strongItems.style.color = "green";
//     });

// paragraf.addEventListener("mouseover", function() {
//     for(let i=0; i < strongItems.length; i++) {
//         strongItems[i].style.color = "green";
//     };
// });

// paragraf.addEventListener("mouseout", function () {
//     for(let i=0; i < strongItems.length; i++) {
//         strongItems[i].style.color = "black";
//     };
// });


// $(document).ready(function() {
//     $("#hajlajt").mouseenter(function (){
//         $("strong").css("color", "green");
//     });
//     $("#hajlajt").mouseleave(function (){
//         $("strong").css("color", "black");
//     });
// });

$(document).ready(function() {
    $("#hajlajt").hover(function () {
        $("strong").css("color", "green");
    },
    function(){
        $("strong").css("color", "black");
    });
});