<?php
    session_start();
    require_once "connect.php";
    echo "<h1> </h1>";
    $descrizione = $_POST['description'];
    $titolo = $_POST['title'];
    $luogo = $_POST['luogo'];
    $date = $_POST['data'];
    $orario = $_POST['orario'];
    $persone = $_POST['num_per'];
    $ore = $_POST['ore'];
    $prezzo = $_POST['prezzo'];
    $citta = $_POST['citta'];
    $lingue = $_POST['lingue'];
    $nome = $_SESSION['nome'];

    $mail=$_SESSION['username'];
    $q0 = 'select * from utente_guida where email=$1';
    $result0 = pg_query_params($dbconn, $q0, array($mail));
    $row0 = pg_fetch_array($result0);
    $cognome=$row0['cognome'];
    
    $q2 = "insert into schede values ($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11)";
    $data = pg_query_params($dbconn, $q2,
        array($date, $prezzo, $descrizione, $lingue, $titolo, $nome, $cognome, $citta, $ore, $persone, $orario));
    if (!$data) {
        echo "<a href=bacheca.html> Si è verificato un errore, riprova </a>";
    }
    header("Location: bacheca_fine.html");
?>