// 1. PRIKAZI SVE

$("#prikaziSve").submit(function (event) {
    // da sprecimo refresh stranice nakon submita forme
    event.preventDefault()
    // provera da li je Prikazi-sve zapoceto
    // clg - extension JavaScript code snippets
    console.log("Prikazi sve zapoceto...")

    //request je tipa jqXHR - jquery XmlHttpRequest - povratna vrednost funkcije ajax
    request = $.ajax({
    url: "http://localhost:8080/obukaphp/10VEB-Servisi/AJAX/task-api-master/tasks",
    // da nismo koristili veb servise, ovo bi recimo bila putanja
    // url: "../handler/getAll.php",
        
    //koja HTTP metoda se koristi za obradu zahteva
    type: "get",
    })

    request.done(function (response, textStatus, jqXHR) {
        // uvek pogledati šta je response jer se vidi iz objekta
        rezultat = response.data.tasks
        console.log(rezultat)
    
        //isprazni sve pre prikaza svih taskova
        $("#myTable tbody").empty()
    
        // prikazati sve taskove u tabeli na frontu
        for (let i = 0; i < rezultat.length; i++) {
          // red sa podacima o taskovima iz same baze
          dodajRed(rezultat[i])
        }
      })

      //ukoliko se zahtev ne obradi uspešno
    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.log("Desila se sledeća greška: " + textStatus, errorThrown)
    })
})

//2. DODAVANJE NOVOG TASKA

$("#dodaj").submit(function (e) {
    e.preventDefault()
    console.log("Dodaj novi task zapoceto...")
  
    //   selektujem celu formu - pogledati format u kome se vraca
    const $form = $(this)
    console.log($form) //jQuery.fn.init [form#dodaj]
  
    //   prikaz niza sa parovima kljuc-vrednost, ali neodgovorarajuci
    let obj = $form.serializeArray()
    console.log(obj) //{name: 'title', value: 'GRE'}...
  
    //za dobijanje informacija u validnom JSON formatu
    let objekat = $form.serializeArray().reduce(function (json, { name, value }) {
      json[name] = value
      return json
    }, {})
  
    console.log(objekat) //{title: 'GRE', description: 'FRE', completed: 'GRE'}
  
    //validan JSON format
    const objekatJSON = JSON.stringify(objekat) // {"title":"GRE","description":"FRE","completed":"GRE"}
    console.log(objekatJSON)
  
    request = $.ajax({
      contentType: "application/json",
      url: "http://localhost:8080/obukaphp/10VEB-Servisi/AJAX/task-api-master/tasks",
      type: "post",
      // podaci koje saljete kroz zahtev
      data: objekatJSON,
    })
  
    request.done(function (response, textStatus, jqXHR) {
      // rezultat = response
      rezultat = response.data.task
      console.log(rezultat)
  
      dodajRed(rezultat)
    })
  
    request.fail(function (jqXHR, textStatus, errorThrown) {
      console.log("Desila se sledeća greška: " + textStatus, errorThrown)
      // u jqXHR se nalazi sve informacije o greskama - responseJSON
      console.log(jqXHR)
    })
  })




  // dobra praksa sve pomoćne funkcije smeštati na kraj fajla
function dodajRed(rezultat) {
    red = `  <tr>
          <td>${rezultat.title}</td>
          <td>${rezultat.description}</td>
          <td>
              <input type="radio" name="taskovi" value=${rezultat.id}>
          <td>
      </tr>`
  
    // dodaj novi red u tabelu
    $("#myTable tbody").append(red)
  }