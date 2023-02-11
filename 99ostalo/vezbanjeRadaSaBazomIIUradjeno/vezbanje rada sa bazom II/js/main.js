$("#btn-izmeni").click(function () {
  const checked = $("input[name=checked-donut]:checked");
  const tds = checked.parent().parent().parent().children();

  $("#id").val(tds[0].textContent);
  $("#nazivv").val(tds[1].textContent);
  $("#provajderr").val(tds[2].textContent);
  $("#cenaa").val(tds[3].textContent);
  $("#opiss").val(tds[4].textContent);
});
