<?php
    include "connect.php";
    $followers = $_POST['followers'];
    $rating = $_POST['rating'];
    $visits = $_POST['visits'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $citta = $_POST['citta'];
    $image='image/images/profile1.jpg';   

    $query = "INSERT INTO guida (followers, rating, visits, nome, cognome, image, email, password, citta) VALUES (0, 0, 0, '$nome', '$cognome', '$image', '$email', '$password', '$citta')";
    $result = pg_query($dbconn, $query);

    header("Location: login.html");
?>