function prikazi() {
  var x = document.getElementById("pregled");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


$('#btnDodaj').submit(function () {
  $('myModal').modal('toggle');
  return false;
});

$('#btn-izmeni').submit(function () {

  $('#myModal').modal('toggle');
  return false;
});

//brisanje

$("#btn-izbrisi").click(function (e) {
  e.preventDefault()
  console.log("Izbrisi pokrenuto")
  const checked = $("input[type=radio]:checked");
  request = $.ajax({
    url: "handler/delete.php",
    type: "post",
    data: {"timID":checked.val()}
  });
  request.done(function (response, textStatus, jqXHR) {

    checked.closest("tr").remove();
    console.log("Tim je obrisan ");
    alert("Tim je obrisan");
    $('#izmeniForm').reset();
  });
  request.fail(function (jqXHR, textStatus, errorThrown) {
    console.error("Sledeca greska se desila: " + textStatus, errorThrown);
    console.log(jqXHR);
  })
});

//dodavanje

$("#dodajForm").submit(function(e){
  e.preventDefault()
  const $form = $(this)
  const serializedData =$form.serialize()

  req = $.ajax({
    url:"handler/add.php",
    type:"post",
    data:serializedData
  })

  req.done(function(res, textStatus, jqXHR){
    if(res== "Success"){
      alert("Tim je dodat")
      // izmeniti da dodaje red bez reload-a - koristiti getLast funkciju
      location.reload(true)
    }
    else console.log("Tim nije dodat> "+res)
  })

  req.fail(function(jqXHR, textStatus, errorThrown){
    console.error("Greska: "+textStatus, errorThrown)
    console.log(jqXHR)
  })
})