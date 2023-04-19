/*var btn_ = document.getElementById("btn_");
  btn_.addEventListener("click", () => {
    document.getElementById("form").style.display = "block";
  });
*/
function button() {
  document.getElementById("form").style.display = "block";
  document.getElementById("view_area").style.display = "none";
}

function button_2() {
  document.getElementById("view_area").style.display = "block";
  document.getElementById("form").style.display = "none";
  document.getElementById("msg").style.display = "none";
  $('#view').on('click', function() {
    $('#view_area').load("bacheca_schede.php", {nome: 'Sara', cognome: 'Manzi'});
  });
}

function validateForm() {
  var date_g = document.getElementById("data").value;
  const date_given = new Date(date_g);

  const date = new Date();
  let day = date.getDate();
  let month = date.getMonth() + 1;
  let year = date.getFullYear();
  let hours = date.getHours();
  let minutes = date.getMinutes();
  let day_given = date_given.getDate();
  let month_given = date_given.getMonth() + 1;
  let year_given = date_given.getFullYear();

  var hour_g = document.getElementById("orario").value;
  const hour_given = new Date();
  hour_given.setHours(hour_g[0] + hour_g[1], hour_g[3] + hour_g[4]);
  let hours_given = hour_given.getHours();
  let minutes_given = hour_given.getMinutes();

  if (
    year > year_given ||
    (year == year_given && month > month_given) ||
    (year == year_given && month == month_given && day > day_given)
  ) {
    alert("Inserire una data futura o almeno attuale");
    return false;
  }

  if (
    year == year_given &&
    month == month_given &&
    day == day_given &&
    hours >= hours_given &&
    minutes >= minutes_given
  ) {
    alert("Inserire un orario corretto");
    return false;
  }
}
