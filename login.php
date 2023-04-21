<?php
    include "connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT FROM utente_guida WHERE email = '$email' AND password = '$password'";
    $result = pg_query($dbconn, $query);

    if(pg_num_rows($result) > 0) {
        header("Location: home.html");
    } else {
        header("Location: login.html");
    }
?>