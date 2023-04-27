<?php
    include "connect.php";
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $citta = $_POST['citta'];

    $query = "INSERT INTO utente_guida (nome, cognome, email, password, citta) VALUES ('$nome', '$cognome', '$email', '$password', '$citta')";
    $result = pg_query($dbconn, $query);

    $query = "INSERT INTO guida (nome, cognome) values ('$nome', '$cognome')";
    $result = pg_query($dbconn, $query);

    header("Location: login.html");
?>