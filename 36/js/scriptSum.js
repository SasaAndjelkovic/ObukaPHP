// 1. nacin JS
// let a = document.getElementById("broj1");
// let b = document.getElementById("broj2");
// let saberi = document.getElementById("saberi");
// let ekran = document.getElementById("zbir");

// saberi.addEventListener("click", function(e) {
//     e.preventDefault()
//     let c = parseInt(a.value) + parseInt(b.value);
//     console.log(c);
//     ekran.value = c;
// });


//2. nacin JQuery
$(document).ready(function() {
    
    $("#saberi").click(function(e) {
        //sve u okviru ove funckije 
        e.preventDefault();
        let a = parseInt($("#broj1").val());
        let b = parseInt($("#broj2").val());
        $("#zbir").val(a+b);
    });
});



