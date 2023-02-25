// Dodavanje instrumenta
$("#dodajInstrument").submit(function (event) {
  event.preventDefault();
  console.log("Pokrenuto dodavanje instrumenta");

  //citanje podataka
  const $form = $(this);
  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  //slanje zahteva
  request = $.ajax({
    url: "controller/dodajInstrument.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Instrument je dodat");
      location.reload(true);
    } else {
      console.log("Instrument nije dodat" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});

// Dodavanje muzicara
$("#dodajForm").submit(function (event) {
  event.preventDefault();
  console.log("Pokrenuto dodavanje muzicara");

  //citanje podataka
  const $form = $(this);
  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  //slanje zahteva
  request = $.ajax({
    url: "controller/dodajMuzicara.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Muzicar je dodat");
      location.reload(true);
    } else {
      console.log("Muzicar nije dodat" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});

// Brisanje muzicara
$("#btn-izbrisi").click(function (event) {
  event.preventDefault();
  console.log("Pokrenuto brisanje muzicara");

  //citanje podataka
  const polje = $("input[type=radio]:checked");

  //slanje zahteva
  request = $.ajax({
    url: "controller/brisiMuzicara.php",
    type: "post",
    data: { id: polje.val() },
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Muzicar je obrisan");
      location.reload(true);
    } else {
      console.log("Muzicar nije obrisan" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});

// Ucitaj muzicara
$("#btnIzmeni").click(function (event) {
  event.preventDefault();
  console.log("Pokrenuto ucitavanje muzicara");

  //citanje podataka
  const polje = $("input[type=radio]:checked");

  //slanje zahteva
  request = $.ajax({
    url: "controller/vratiMuzicara.php",
    type: "post",
    data: { id: polje.val() },
  });

  request.done(function (response, textStatus, jqXHR) {
    var prom = jQuery.parseJSON(response);
    console.log(prom);
    $("#ime").val(prom.ime);
    $("#prezime").val(prom.prezime);
    $("#instrument").val(prom.instrument_id);
    $("#id").val(prom.id);
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});

// Dodavanje muzicara
$("#izmeniForm").submit(function (event) {
  event.preventDefault();
  console.log("Pokrenuto azuriranje muzicara");

  //citanje podataka
  const $form = $(this);
  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  //slanje zahteva
  request = $.ajax({
    url: "controller/azurirajMuzicara.php",
    type: "post",
    data: serijalizacija,
  });

  request.done(function (response, textStatus, jqXHR) {
    if (response === "Success") {
      alert("Muzicar je azuriran");
      location.reload(true);
    } else {
      console.log("Muzicar nije azuriran" + response);
    }
  });

  request.fail(function (jqXHR, textStatus, error) {
    console.error("Desila se greska: " + textStatus, error);
  });
});
