<?php
    include "connect.php";
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $citta = $_POST['citta'];
    $img='image/images/profile1.jpg';   

    $query = "INSERT INTO utente_guida (nome, cognome, email, password, citta, img) VALUES ('$nome', '$cognome', '$email', '$password', '$citta', '$img')";
    $result = pg_query($dbconn, $query);

    $query = "INSERT INTO guida (nome, cognome, image, followers, rating, visits) VALUES ('$nome', '$cognome', '$img', 0, 'x', 0)";
    $result = pg_query($dbconn, $query);

    header("Location: login.html");
?>