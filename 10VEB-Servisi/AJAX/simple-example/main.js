function ucitajPodatke() {
    $.ajax({
        url: "data.php",
        success: function (data) {
            $("#data").html(data)
        },
    })
}