function funct(i) {
  var popup = document.getElementById("myPopup_" + i);
  popup.classList.toggle("show");
}

function delete_s(titolo, nome, cognome, data, lingua) {
  $.ajax({
    type: "POST",
    url: "delete_schede.php",
    data: {
      title_p: titolo,
      nome_p: nome,
      cognome_p: cognome,
      data_p: data,
      lingua_p: lingua,
    },
    success: function () {
      // Deletion successful, navigate to another page
      window.location.href = "bacheca.html";
    },
    error: function () {
      // Handle error case if necessary
      alert("Error processing the request");
    },
  });
}
