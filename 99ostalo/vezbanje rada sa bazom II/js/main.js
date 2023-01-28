$("#btn-izmeni").click(function(){
    const checked = $("input[name=checked-donut]");
    const tdsTableDates = checked.parent().parent().parent().children();

    $("#id").val(tdsTableDates[0].textContent);
    $("#nazivv").val(tdsTableDates[1].textContent);
    $("#provajderr").val(tdsTableDates[2].textContent);
    $("#cenaa").val(tdsTableDates[3].textContent);
    $("#opiss").val(tdsTableDates[4].textContent);
});