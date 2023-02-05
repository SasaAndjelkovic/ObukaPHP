// 1. PRIKAZI SVE

$("#prikaziSve").submit(function (event) {
    // da sprecimo refresh stranice nakon submita forme
    event.preventDefault()
    // provera da li je Prikazi sve zapoceto
    // clg - extension JavaScript code snippets
    console.log("Prikazi sve zapoceto...")
  
    //request je tipa jqXHR - jquery XmlHttpRequest - povratna vrednost funkcije ajax
    request = $.ajax({
      url: "http://localhost/undp-ajax/task-api/tasks",
      // da nismo koristili veb servise, ovo bi recimo bila putanja
      // url: "../handler/getAll.php",
  
      //koja HTTP metoda se koristi za obradu zahteva
      type: "get",
    })
  
    request.done(function (response, textStatus, jqXHR) {
      // uvek pogledati šta je response
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
  
  $("#inserttask").click(function (e) {
    e.preventDefault()
    console.log("Dodaj novi task zapoceto...")
  
    //   selektujem celu formu - pogledati format u kome se vraca
    // najblizi form element u odnosu na dugme koje selektujemo
    const $form = $(this).closest("form")
    console.log($form) //jQuery.fn.init [form#dodaj]
  
    //   prikaz niza sa parovima kljuc-vrednost, ali neodgovorarajuci
    let obj = $form.serializeArray()
    console.log(obj) //{name: 'title', value: 'GRE'}
  
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
      url: "http://localhost/undp-ajax/task-api/tasks",
      type: "post",
      // podaci koje saljete kroz zahtev
      data: objekatJSON,
    })
  
    request.done(function (response, textStatus, jqXHR) {
      // rezultat = response
      rezultat = response.data.task
      console.log(rezultat)
  
      dodajRed(rezultat)
      $form[0].reset()
    })
  
    request.fail(function (jqXHR, textStatus, errorThrown) {
      console.log("Desila se sledeća greška: " + textStatus, errorThrown)
      // u jqXHR se nalazi sve informacije o greskama - responseJSON
      console.log(jqXHR)
    })
  })
  
  // 3. OBRISI
  //document.getelementbyid("obrisi")
  $("#obrisi").click(function(event){
    event.preventDefault()
    console.log("Obrisi je pokrenuto...")
  
  
    const checkedInput = $("input[type=radio]:checked")
    console.log(checkedInput)
    console.log(checkedInput.val())
  
    req = $.ajax({
      url:"http://localhost/undp-ajax/task-api/tasks/"+checkedInput.val(),
      type:"delete"
    })
  
    req.done(function(response, textStatus, jqXHR){
      console.log(response.messages)
      alert(response.messages[0])
      checkedInput.closest("tr").remove()
    })
    req.fail(function(jqXHR, textStatus, errorThrown){
      console.log("Sledeca greska se desila: "+textStatus,errorThrown)
      console.log(jqXHR)
    })
  
  
  })
  
  // 4. Azuriranje
  // 4.1. popuni formu sa vrednostima selektovanog taska
  
  $("#izmeni").click(function(event){
    event.preventDefault()
  
    const task = $("input[type=radio]:checked")
    var taskid = task.val()
  
    console.log("Pokrenuto azuriranje...")
    console.log("Task za azuriranje> "+taskid)
  
    //getJSON(url, [,data],[,success])
    //https://api.jquery.com/jquery.getjson/ 
    $.getJSON("http://localhost/undp-ajax/task-api/tasks/"+taskid, function(response){
      $("#taskid").val(taskid)
      $("#taskid").show()
      $("#inserttask").hide()
      $("#updatetask").show()
      console.log("Odgovor iz getJSON")
      console.log(response)
      $("#title").val(response.data.tasks[0].title)
      $("#description").val(response.data.tasks[0].description)
      $("#completed").val(response.data.tasks[0].completed)
    })
  })
  
  $("#updatetask").click(function(event){
    event.preventDefault()
    console.log("Updating...")
  
    const $form = $(this).closest("form")
    console.log($form)
  
    let obj = $form.serializeArray()
    console.log(obj)
    let objekat = obj.reduce(function(json, {name, value}){
      json[name] = value
      return json
    }, {})
  
    //u slucaju da imamo disabled polje (a ne readonly) dobije 3 polja samo serijalizacijom
    objekat.id = $("#taskid").val() //ovo mozemo da zakomentarisemo ako taksid postavimo na readonly a ne disabled
    console.log(objekat)
  
    const objJSON = JSON.stringify(objekat)
  
    req = $.ajax({
      contentType:"application/json",
      url:"http://localhost/undp-ajax/task-api/tasks/"+objekat.id,
      type:"patch",
      data:objJSON
    })
  
    req.done(function(res, textStatus, jqXHR){
      console.log(res.data.task[0])
      $form[0].reset()
      $("#taskid").hide()
      $("#inserttask").show()
      $("#updatetask").hide()
      izmeniRed(res.data.task[0])
    })
  
    req.fail(function(jqXHR,textStatus,errorThrown){
      console.log("Desila se greska> "+textStatus, errorThrown)
      console.log(jqXHR)
      })
  
  })
  
  function izmeniRed(rezultat){
    const redradio = $("input[type=radio]:checked")
    const red = redradio.closest("tr")
    red.children()[0].textContent = rezultat.title
    red.children()[1].textContent = rezultat.description
  }
  
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