$("#dodajInstrument").submit(function(event){
    event.preventDefault();

    //citanje podataka
    const $form = $(this);
    const serializacija = $form.serialize();
    console.log(serializacija);

    //slanje zahteva
    request = $.ajax({
        url:"contoller/dodajInstrument.php",
        type: "post",
        data: serializacija
    });

    request.done(function(response, txtStatus, jqXHR){
        if(response === 'Success'){
            alert('Instrument je dodat');
            location.reload();
        } else {
            console.log("Instrument nije dodat" + response);
        }
    });

    request.failed(function(jqXHR, textStatus, error){
        console.error("Desila se greska: " + textStatus, error);
    })
});